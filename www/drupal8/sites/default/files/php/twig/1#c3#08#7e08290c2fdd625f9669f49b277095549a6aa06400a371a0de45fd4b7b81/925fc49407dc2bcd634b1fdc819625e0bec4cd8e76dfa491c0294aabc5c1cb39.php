<?php

/* core/themes/seven/templates/page.html.twig */
class __TwigTemplate_c3087e08290c2fdd625f9669f49b277095549a6aa06400a371a0de45fd4b7b81 extends Twig_Template
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
        // line 63
        echo "  <header class=\"content-header clearfix\">
    <div class=\"layout-container\">
      ";
        // line 65
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
      ";
        // line 66
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 67
            echo "        <h1 class=\"page-title\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
      ";
        }
        // line 69
        echo "      ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
      ";
        // line 70
        if ((isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null)) {
            // line 71
            echo "        ";
            echo twig_drupal_escape_filter($this->env, (isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null), "html", null, true);
            echo "
      ";
        }
        // line 73
        echo "    </div>
  </header>

  <div class=\"layout-container\">
    ";
        // line 77
        if ((isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null)) {
            // line 78
            echo "      <div class=\"tabs-secondary clearfix\" role=\"navigation\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null), "html", null, true);
            echo "</div>
    ";
        }
        // line 80
        echo "
    ";
        // line 81
        echo twig_drupal_escape_filter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true);
        echo "

    <main class=\"page-content clearfix\" role=\"main\">
      <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
      ";
        // line 85
        echo twig_drupal_escape_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true);
        echo "
      ";
        // line 86
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help")) {
            // line 87
            echo "        <div class=\"help\">
          ";
            // line 88
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help"), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 91
        echo "      ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 92
            echo "        <ul class=\"action-links\">
          ";
            // line 93
            echo twig_drupal_escape_filter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true);
            echo "
        </ul>
      ";
        }
        // line 96
        echo "      ";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content"), "html", null, true);
        echo "
    </main>
    ";
        // line 98
        if ((isset($context["feed_icons"]) ? $context["feed_icons"] : null)) {
            // line 99
            echo "      <footer role=\"contentinfo\" class=\"footer layout-column\">
          ";
            // line 100
            echo twig_drupal_escape_filter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true);
            echo "
      </footer>
    ";
        }
        // line 103
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 103,  107 => 99,  99 => 96,  93 => 93,  90 => 92,  87 => 91,  78 => 87,  72 => 85,  65 => 81,  62 => 80,  56 => 78,  54 => 77,  40 => 70,  29 => 67,  27 => 66,  204 => 95,  200 => 93,  193 => 91,  184 => 89,  182 => 88,  177 => 87,  173 => 86,  168 => 85,  164 => 84,  161 => 83,  158 => 82,  154 => 80,  147 => 78,  138 => 76,  136 => 75,  131 => 74,  127 => 73,  122 => 72,  118 => 71,  115 => 70,  113 => 69,  110 => 100,  105 => 98,  96 => 63,  94 => 62,  89 => 61,  85 => 60,  81 => 88,  79 => 57,  76 => 86,  70 => 55,  64 => 53,  60 => 51,  47 => 48,  42 => 71,  39 => 46,  35 => 69,  26 => 42,  24 => 41,  51 => 49,  48 => 73,  46 => 29,  43 => 27,  41 => 26,  36 => 24,  34 => 23,  32 => 44,  25 => 20,  23 => 65,  19 => 63,);
    }
}
