<?php

/* core/themes/seven/templates/menu-local-tasks.html.twig */
class __TwigTemplate_4d128c3ab9bb85b0788c24d1e369f9ce8bc121129c21bc4354b9e86c5f393bac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 18
        if ((isset($context["primary"]) ? $context["primary"] : null)) {
            // line 19
            echo "  <h2 id=\"primary-tabs-title\" class=\"visually-hidden\">";
            echo twig_render_var(t("Primary tabs"));
            echo "</h2>
  <nav role=\"navigation\" class=\"is-horizontal is-collapsible\" aria-labelledby=\"primary-tabs-title\" data-drupal-nav-tabs>
    <button class=\"reset-appearance tabs__tab tabs__trigger\" aria-label=\"";
            // line 21
            echo twig_render_var(t("Primary tabs display toggle"));
            echo "\" data-drupal-nav-tabs-trigger>&bull;&bull;&bull;</button>
    <ul class=\"tabs primary clearfix\" data-drupal-nav-tabs-target>";
            // line 22
            echo twig_drupal_escape_filter($this->env, (isset($context["primary"]) ? $context["primary"] : null), "html", null, true);
            echo "</ul>
  </nav>
";
        }
        // line 25
        if ((isset($context["secondary"]) ? $context["secondary"] : null)) {
            // line 26
            echo "  <h2 id=\"secondary-tabs-title\" class=\"visually-hidden\">";
            echo twig_render_var(t("Secondary tabs"));
            echo "</h2>
  <nav role=\"navigation\" class=\"is-horizontal\" aria-labelledby=\"secondary-tabs-title\" data-drupal-nav-tabs>
    <ul class=\"tabs secondary clearfix\">";
            // line 28
            echo twig_drupal_escape_filter($this->env, (isset($context["secondary"]) ? $context["secondary"] : null), "html", null, true);
            echo "</ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 28,  37 => 25,  31 => 22,  21 => 19,  116 => 103,  107 => 99,  99 => 96,  93 => 93,  90 => 92,  87 => 91,  78 => 87,  72 => 85,  65 => 81,  62 => 80,  56 => 78,  54 => 77,  40 => 70,  29 => 67,  27 => 21,  204 => 95,  200 => 93,  193 => 91,  184 => 89,  182 => 88,  177 => 87,  173 => 86,  168 => 85,  164 => 84,  161 => 83,  158 => 82,  154 => 80,  147 => 78,  138 => 76,  136 => 75,  131 => 74,  127 => 73,  122 => 72,  118 => 71,  115 => 70,  113 => 69,  110 => 100,  105 => 98,  96 => 63,  94 => 62,  89 => 61,  85 => 60,  81 => 88,  79 => 57,  76 => 86,  70 => 55,  64 => 53,  60 => 51,  47 => 48,  42 => 71,  39 => 26,  35 => 69,  26 => 42,  24 => 41,  51 => 49,  48 => 73,  46 => 29,  43 => 27,  41 => 26,  36 => 24,  34 => 23,  32 => 44,  25 => 20,  23 => 65,  19 => 18,);
    }
}
