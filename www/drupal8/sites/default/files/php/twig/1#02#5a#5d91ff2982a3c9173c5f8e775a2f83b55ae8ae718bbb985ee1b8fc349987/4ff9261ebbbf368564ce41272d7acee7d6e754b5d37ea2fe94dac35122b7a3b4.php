<?php

/* core/modules/system/templates/form-element-label.html.twig */
class __TwigTemplate_025a5d91ff2982a3c9173c5f8e775a2f83b55ae8ae718bbb985ee1b8fc349987 extends Twig_Template
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
        $context["classes"] = array(0 => ((((isset($context["title_display"]) ? $context["title_display"] : null) == "after")) ? ("option") : ("")), 1 => ((((isset($context["title_display"]) ? $context["title_display"] : null) == "invisible")) ? ("visually-hidden") : ("")), 2 => (((isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 24
        if (((!twig_test_empty((isset($context["title"]) ? $context["title"] : null))) || (isset($context["required"]) ? $context["required"] : null))) {
            // line 25
            echo "<label";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 84,  39 => 68,  38 => 19,  78 => 51,  72 => 79,  49 => 42,  73 => 36,  68 => 47,  44 => 27,  69 => 63,  66 => 77,  61 => 53,  45 => 70,  34 => 36,  31 => 47,  22 => 45,  20 => 40,  77 => 37,  63 => 34,  57 => 20,  48 => 71,  40 => 39,  37 => 56,  27 => 46,  25 => 30,  339 => 199,  333 => 196,  330 => 195,  328 => 194,  325 => 193,  319 => 190,  315 => 189,  311 => 188,  307 => 187,  304 => 186,  302 => 185,  297 => 182,  291 => 179,  287 => 178,  283 => 177,  280 => 176,  278 => 175,  273 => 172,  267 => 169,  264 => 168,  262 => 167,  259 => 166,  253 => 163,  250 => 162,  248 => 161,  242 => 158,  237 => 157,  231 => 154,  228 => 153,  226 => 152,  221 => 151,  215 => 148,  210 => 147,  208 => 146,  197 => 142,  194 => 141,  188 => 139,  185 => 138,  179 => 137,  173 => 134,  163 => 129,  160 => 128,  158 => 127,  144 => 121,  133 => 116,  120 => 110,  111 => 108,  108 => 107,  105 => 106,  95 => 87,  88 => 56,  85 => 54,  75 => 80,  53 => 72,  50 => 29,  42 => 87,  33 => 48,  23 => 25,  203 => 145,  196 => 94,  192 => 140,  184 => 92,  181 => 91,  178 => 90,  176 => 89,  169 => 132,  165 => 84,  157 => 83,  154 => 82,  151 => 81,  145 => 78,  142 => 77,  140 => 76,  132 => 73,  130 => 115,  126 => 113,  107 => 65,  97 => 62,  92 => 42,  86 => 58,  83 => 57,  74 => 52,  62 => 93,  59 => 75,  56 => 52,  54 => 47,  47 => 28,  35 => 13,  32 => 12,  29 => 16,  21 => 24,  155 => 126,  149 => 123,  146 => 122,  143 => 88,  137 => 117,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 68,  113 => 109,  110 => 66,  104 => 64,  102 => 63,  99 => 71,  93 => 68,  90 => 60,  84 => 83,  81 => 82,  79 => 38,  76 => 61,  70 => 23,  67 => 95,  64 => 76,  58 => 62,  55 => 44,  52 => 23,  46 => 51,  43 => 40,  41 => 50,  36 => 67,  30 => 65,  28 => 64,  24 => 14,  19 => 18,);
    }
}
