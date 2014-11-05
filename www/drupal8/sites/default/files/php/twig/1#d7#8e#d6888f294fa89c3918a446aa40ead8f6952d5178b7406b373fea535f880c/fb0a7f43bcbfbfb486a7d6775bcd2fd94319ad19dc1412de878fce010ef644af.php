<?php

/* core/modules/system/templates/menu-local-action.html.twig */
class __TwigTemplate_d78ed6888f294fa89c3918a446aa40ead8f6952d5178b7406b373fea535f880c extends Twig_Template
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
        // line 15
        echo "<li";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/menu-local-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 49,  33 => 46,  22 => 43,  20 => 38,  45 => 28,  37 => 25,  31 => 45,  21 => 19,  116 => 103,  107 => 99,  99 => 96,  93 => 93,  90 => 92,  87 => 91,  78 => 87,  72 => 85,  65 => 81,  62 => 80,  56 => 50,  54 => 77,  40 => 70,  29 => 67,  27 => 44,  204 => 95,  200 => 93,  193 => 91,  184 => 89,  182 => 88,  177 => 87,  173 => 86,  168 => 85,  164 => 84,  161 => 83,  158 => 82,  154 => 80,  147 => 78,  138 => 76,  136 => 75,  131 => 74,  127 => 73,  122 => 72,  118 => 71,  115 => 70,  113 => 69,  110 => 100,  105 => 98,  96 => 63,  94 => 62,  89 => 61,  85 => 60,  81 => 88,  79 => 57,  76 => 86,  70 => 55,  64 => 53,  60 => 51,  47 => 48,  42 => 71,  39 => 26,  35 => 69,  26 => 42,  24 => 41,  51 => 49,  48 => 52,  46 => 49,  43 => 27,  41 => 48,  36 => 24,  34 => 23,  32 => 44,  25 => 20,  23 => 65,  19 => 15,);
    }
}
