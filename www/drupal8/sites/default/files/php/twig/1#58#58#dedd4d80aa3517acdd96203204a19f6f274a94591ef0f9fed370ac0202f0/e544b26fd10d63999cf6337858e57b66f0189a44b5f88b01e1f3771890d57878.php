<?php

/* core/modules/system/templates/container.html.twig */
class __TwigTemplate_5858dedd4d80aa3517acdd96203204a19f6f274a94591ef0f9fed370ac0202f0 extends Twig_Template
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
        // line 20
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (((isset($context["has_parent"]) ? $context["has_parent"] : null)) ? ("form-wrapper") : (""))), "method"), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 98,  196 => 94,  192 => 93,  184 => 92,  181 => 91,  178 => 90,  176 => 89,  169 => 85,  165 => 84,  157 => 83,  154 => 82,  151 => 81,  145 => 78,  142 => 77,  140 => 76,  132 => 73,  130 => 72,  126 => 70,  107 => 65,  97 => 62,  92 => 61,  86 => 58,  83 => 57,  74 => 52,  62 => 50,  59 => 49,  56 => 48,  54 => 47,  47 => 43,  35 => 41,  32 => 40,  29 => 39,  21 => 35,  155 => 93,  149 => 80,  146 => 89,  143 => 88,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 68,  113 => 67,  110 => 66,  104 => 64,  102 => 63,  99 => 71,  93 => 68,  90 => 60,  84 => 64,  81 => 56,  79 => 62,  76 => 61,  70 => 51,  67 => 57,  64 => 56,  58 => 53,  55 => 52,  52 => 51,  46 => 48,  43 => 42,  41 => 46,  36 => 45,  30 => 43,  28 => 42,  24 => 36,  19 => 20,);
    }
}
