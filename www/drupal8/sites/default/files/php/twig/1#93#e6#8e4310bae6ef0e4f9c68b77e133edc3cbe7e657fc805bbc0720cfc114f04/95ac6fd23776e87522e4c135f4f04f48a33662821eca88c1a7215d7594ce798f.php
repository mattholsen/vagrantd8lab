<?php

/* core/modules/system/templates/html.html.twig */
class __TwigTemplate_93e68e4310bae6ef0e4f9c68b77e133edc3cbe7e657fc805bbc0720cfc114f04 extends Twig_Template
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
        // line 29
        echo "<!DOCTYPE html>
<html";
        // line 30
        echo twig_drupal_escape_filter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true);
        echo ">
  <head>
    ";
        // line 32
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "head"), "html", null, true);
        echo "
    <title>";
        // line 33
        echo twig_drupal_escape_filter($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), "html", null, true);
        echo "</title>
    ";
        // line 34
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "styles"), "html", null, true);
        echo "
    ";
        // line 35
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "scripts"), "html", null, true);
        echo "
  </head>
  <body";
        // line 37
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 39
        echo twig_render_var(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 41
        echo twig_drupal_escape_filter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true);
        echo "
    ";
        // line 42
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content"), "html", null, true);
        echo "
    ";
        // line 43
        echo twig_drupal_escape_filter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true);
        echo "
    ";
        // line 44
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "scripts", array(0 => "footer"), "method"), "html", null, true);
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 31,  89 => 84,  39 => 35,  38 => 19,  78 => 51,  72 => 79,  49 => 39,  73 => 36,  68 => 47,  44 => 37,  69 => 63,  66 => 44,  61 => 53,  45 => 70,  34 => 36,  31 => 33,  22 => 30,  20 => 40,  77 => 37,  63 => 34,  57 => 20,  48 => 71,  40 => 39,  37 => 28,  27 => 32,  25 => 24,  339 => 199,  333 => 196,  330 => 195,  328 => 194,  325 => 193,  319 => 190,  315 => 189,  311 => 188,  307 => 187,  304 => 186,  302 => 185,  297 => 182,  291 => 179,  287 => 178,  283 => 177,  280 => 176,  278 => 175,  273 => 172,  267 => 169,  264 => 168,  262 => 167,  259 => 166,  253 => 163,  250 => 162,  248 => 161,  242 => 158,  237 => 157,  231 => 154,  228 => 153,  226 => 152,  221 => 151,  215 => 148,  210 => 147,  208 => 146,  197 => 142,  194 => 141,  188 => 139,  185 => 138,  179 => 137,  173 => 134,  163 => 129,  160 => 128,  158 => 127,  144 => 121,  133 => 116,  120 => 110,  111 => 108,  108 => 107,  105 => 106,  95 => 87,  88 => 56,  85 => 54,  75 => 80,  53 => 72,  50 => 29,  42 => 87,  33 => 48,  23 => 23,  203 => 145,  196 => 94,  192 => 140,  184 => 92,  181 => 91,  178 => 90,  176 => 89,  169 => 132,  165 => 84,  157 => 83,  154 => 82,  151 => 81,  145 => 78,  142 => 77,  140 => 76,  132 => 73,  130 => 115,  126 => 113,  107 => 65,  97 => 62,  92 => 42,  86 => 58,  83 => 57,  74 => 52,  62 => 43,  59 => 35,  56 => 33,  54 => 41,  47 => 28,  35 => 34,  32 => 27,  29 => 16,  21 => 22,  155 => 126,  149 => 123,  146 => 122,  143 => 88,  137 => 117,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 68,  113 => 109,  110 => 66,  104 => 64,  102 => 63,  99 => 71,  93 => 68,  90 => 60,  84 => 83,  81 => 82,  79 => 38,  76 => 61,  70 => 23,  67 => 95,  64 => 76,  58 => 42,  55 => 44,  52 => 23,  46 => 51,  43 => 40,  41 => 29,  36 => 67,  30 => 26,  28 => 64,  24 => 16,  19 => 29,);
    }
}
