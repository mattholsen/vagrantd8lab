<?php

/* core/modules/system/templates/region.html.twig */
class __TwigTemplate_532a1828c68820152ddcf14b408a6eca41af8f2de32bee705bf03d01ef8ac266 extends Twig_Template
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
        $context["classes"] = array(0 => "region", 1 => ("region-" . drupal_html_class((isset($context["region"]) ? $context["region"] : null))));
        // line 23
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 24
            echo "  <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo ">
    ";
            // line 25
            echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 24,  203 => 98,  196 => 94,  192 => 93,  184 => 92,  181 => 91,  178 => 90,  176 => 89,  169 => 85,  165 => 84,  157 => 83,  154 => 82,  151 => 81,  145 => 78,  142 => 77,  140 => 76,  132 => 73,  130 => 72,  126 => 70,  107 => 65,  97 => 62,  92 => 61,  86 => 58,  83 => 57,  74 => 52,  62 => 50,  59 => 49,  56 => 48,  54 => 47,  47 => 43,  35 => 41,  32 => 40,  29 => 39,  21 => 23,  155 => 93,  149 => 80,  146 => 89,  143 => 88,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 68,  113 => 67,  110 => 66,  104 => 64,  102 => 63,  99 => 71,  93 => 68,  90 => 60,  84 => 64,  81 => 56,  79 => 62,  76 => 61,  70 => 51,  67 => 57,  64 => 56,  58 => 53,  55 => 52,  52 => 51,  46 => 48,  43 => 42,  41 => 46,  36 => 45,  30 => 43,  28 => 25,  24 => 36,  19 => 18,);
    }
}
