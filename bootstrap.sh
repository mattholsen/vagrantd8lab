# Set MySQL root password
# All this is executed in vm with root permissions, looks like
#let's look: 
echo " ********* "
whoami
echo " ********* "

debconf-set-selections <<< 'mysql-server-5.5 mysql-server/root_password password wwsf2wstwv'
debconf-set-selections <<< 'mysql-server-5.5 mysql-server/root_password_again password wwsf2wstwv'

# Install packages
apt-get update
apt-get -y install mysql-server-5.5 php5-mysql libsqlite3-dev apache2 php5 php5-dev php5-gd build-essential php-pear ruby1.9.1-dev
# build-essentials?  it includes stuff like c and c++ compilers

# Set timezone
echo "America/New_York" | tee /etc/timezone
dpkg-reconfigure --frontend noninteractive tzdata

# Setup database
echo "DROP DATABASE IF EXISTS test" | mysql -uroot -pwwsf2wstwv
echo "CREATE USER 'drupal8'@'localhost' IDENTIFIED BY 'wwsf2wstwv'" | mysql -uroot -pwwsf2wstwv
echo "CREATE DATABASE drupal8" | mysql -uroot -pwwsf2wstwv
echo "GRANT ALL ON drupal8.* TO 'drupal8'@'localhost'" | mysql -uroot -pwwsf2wstwv
echo "FLUSH PRIVILEGES" | mysql -uroot -pwwsf2wstwv

# Apache changes
# add line to end of conf file
echo "ServerName localhost" >> /etc/apache2/apache2.conf
echo "User vagrant" >> /etc/apache2/apache2.conf
echo "Group vagrant" >> /etc/apache2/apache2.conf
a2enmod rewrite
# rewrite default.conf from provided source (nfs-linked to host)
cat /var/custom_config_files/apache2/default | tee /etc/apache2/sites-available/000-default.conf

# Install Mailcatcher
echo "Installing mailcatcher"
gem install mailcatcher --no-ri --no-rdoc
# that's why we need ruby...
mailcatcher --http-ip=192.168.33.10

# Configure PHP
sed -i '/;sendmail_path =/c sendmail_path = "/usr/local/bin/catchmail"' /etc/php5/apache2/php.ini
sed -i '/display_errors = Off/c display_errors = On' /etc/php5/apache2/php.ini
sed -i '/error_reporting = E_ALL & ~E_DEPRECATED/c error_reporting = E_ALL | E_STRICT' /etc/php5/apache2/php.ini
sed -i '/html_errors = Off/c html_errors = On' /etc/php5/apache2/php.ini

# Make sure things are up and running as they should be (generates warning if port in use...)

service apache2 restart

# install git
apt-get -y install git

# Get Composer
# su vagrant #??

sudo curl -sS http://getcomposer.org/installer | php
# putting it in the bin allows invocation from anywhere with 'composer'
mv composer.phar /usr/local/bin/composer 

# install latest drush with all dependencies<div></div>

composer global require drush/drush:dev-master

cp /root/.composer/composer.json /home/vagrant
cd /home/vagrant
composer install

ln -s /home/vagrant/vendor/bin/drush /usr/local/bin/drush


# the shell that runs drush ends up in a local dir, which is how composer is supposed to work, so make runnable from anywhere

#download Drupal 8 into /var/www/.  since this is still being worked on, remove remains of previous downloads from linked dirs
cd /var/www/
echo "removing drupal files in www left in linked dirs"
# certain files in the D8 can't be rm'd
chmod -R 777 dru*
rm -R drup*
# note: you can't put drupal in /var and rename, becasue /var/www is rsynced to host fs and is "busy"
#echo "downloading drupal 8 with drush.  Untarring takes a long time.  Go for a walk..."
drush dl drupal-8

# Drush dl takes forever. Tried wget + tar.  Takes forever either way. (not if tar is done right in the vm, though.  Why is that?)
# wget http://ftp.drupal.org/files/projects/drupal-8.0.0-beta2.tar.gz
# echo " ... Downloaded"
# tar --no-same-owner -zxf *gz 
# rm dr*gz

# drush dl leaves an unpacked dir which I want to rename
mv dru* drupal8
echo " ... changed"

#add porgie and tirebiter (if you gotta ask you don't need to know....)
cat /var/scripts/porgie.php | tee /var/www/drupal8/porgie.php
cat /var/scripts/tirebiter.php | tee /var/www/drupal8/tirebiter.php

mkdir     /var/www/drupal8/sites/default/files
chmod 777 /var/www/drupal8/sites/default/files

cp /var/www/drupal8/sites/default/default.settings.php /var/www/drupal8/sites/default/settings.php
chmod 777 /var/www/drupal8/sites/default/settings.php

cp  /var/www/drupal8/sites/default/default.services.yml /var/www/drupal8/sites/default/services.yml
chmod 777 /var/www/drupal8/sites/default/services.yml

# install drupal 8 w drush, with db creds above
cd /var/www/drupal8
drush -y site-install standard --db-url='mysql://drupal8:wwsf2wstwv@localhost/drupal8' --site-name="Drupal8 Lab"  --account-name=admin --account-pass=bigsam96
