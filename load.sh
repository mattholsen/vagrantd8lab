# Import database if one exists to be imported
# OOTB there is no db, and I won't use this
if [ -f /var/sqldump/database.sql ];
then
    DATE=$(date +"%Y%m%d%H%M")

    mysql -uroot -pwwsf2wstwv drupal8 < /var/sqldump/database.sql
    mv /var/sqldump/database.sql /var/sqldump/$DATE-imported.sql
fi
