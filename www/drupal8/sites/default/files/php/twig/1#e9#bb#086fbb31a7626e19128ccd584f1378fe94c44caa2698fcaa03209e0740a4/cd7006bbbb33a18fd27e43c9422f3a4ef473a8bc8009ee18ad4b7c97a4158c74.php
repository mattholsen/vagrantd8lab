<?php

/* core/modules/system/templates/form-element.html.twig */
class __TwigTemplate_e9bb086fbb31a7626e19128ccd584f1378fe94c44caa2698fcaa03209e0740a4 extends Twig_Template
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
        // line 49
        $context["classes"] = array(0 => "form-item", 1 => ("form-type-" . drupal_html_class((isset($context["type"]) ? $context["type"] : null))), 2 => ("form-item-" . drupal_html_class((isset($context["name"]) ? $context["name"] : null))), 3 => ((!twig_in_filter((isset($context["title_display"]) ? $context["title_display"] : null), array(0 => "after", 1 => "before"))) ? ("form-no-label") : ("")), 4 => ((((isset($context["disabled"]) ? $context["disabled"] : null) == "disabled")) ? ("form-disabled") : ("")));
        // line 58
        $context["description_classes"] = array(0 => "description", 1 => ((((isset($context["description_display"]) ? $context["description_display"] : null) == "invisible")) ? ("visually-hidden") : ("")));
        // line 63
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 64
        if (twig_in_filter((isset($context["label_display"]) ? $context["label_display"] : null), array(0 => "before", 1 => "invisible"))) {
            // line 65
            echo "    ";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
  ";
        }
        // line 67
        echo "  ";
        if ((!twig_test_empty((isset($context["prefix"]) ? $context["prefix"] : null)))) {
            // line 68
            echo "    <span class=\"field-prefix\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
            echo "</span>
  ";
        }
        // line 70
        echo "  ";
        if ((((isset($context["description_display"]) ? $context["description_display"] : null) == "before") && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content"))) {
            // line 71
            echo "    <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes"), "html", null, true);
            echo ">
      ";
            // line 72
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 75
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "
  ";
        // line 76
        if ((!twig_test_empty((isset($context["suffix"]) ? $context["suffix"] : null)))) {
            // line 77
            echo "    <span class=\"field-suffix\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["suffix"]) ? $context["suffix"] : null), "html", null, true);
            echo "</span>
  ";
        }
        // line 79
        echo "  ";
        if (((isset($context["label_display"]) ? $context["label_display"] : null) == "after")) {
            // line 80
            echo "    ";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
  ";
        }
        // line 82
        echo "  ";
        if ((twig_in_filter((isset($context["description_display"]) ? $context["description_display"] : null), array(0 => "after", 1 => "invisible")) && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content"))) {
            // line 83
            echo "    <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes"), "addClass", array(0 => (isset($context["description_classes"]) ? $context["description_classes"] : null)), "method"), "html", null, true);
            echo ">
      ";
            // line 84
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 87
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 84,  39 => 68,  38 => 19,  78 => 51,  72 => 79,  49 => 42,  73 => 36,  68 => 47,  44 => 27,  69 => 63,  66 => 77,  61 => 53,  45 => 70,  34 => 36,  31 => 47,  22 => 45,  20 => 40,  77 => 37,  63 => 34,  57 => 20,  48 => 71,  40 => 39,  37 => 56,  27 => 46,  25 => 30,  339 => 199,  333 => 196,  330 => 195,  328 => 194,  325 => 193,  319 => 190,  315 => 189,  311 => 188,  307 => 187,  304 => 186,  302 => 185,  297 => 182,  291 => 179,  287 => 178,  283 => 177,  280 => 176,  278 => 175,  273 => 172,  267 => 169,  264 => 168,  262 => 167,  259 => 166,  253 => 163,  250 => 162,  248 => 161,  242 => 158,  237 => 157,  231 => 154,  228 => 153,  226 => 152,  221 => 151,  215 => 148,  210 => 147,  208 => 146,  197 => 142,  194 => 141,  188 => 139,  185 => 138,  179 => 137,  173 => 134,  163 => 129,  160 => 128,  158 => 127,  144 => 121,  133 => 116,  120 => 110,  111 => 108,  108 => 107,  105 => 106,  95 => 87,  88 => 56,  85 => 54,  75 => 80,  53 => 72,  50 => 29,  42 => 87,  33 => 48,  23 => 63,  203 => 145,  196 => 94,  192 => 140,  184 => 92,  181 => 91,  178 => 90,  176 => 89,  169 => 132,  165 => 84,  157 => 83,  154 => 82,  151 => 81,  145 => 78,  142 => 77,  140 => 76,  132 => 73,  130 => 115,  126 => 113,  107 => 65,  97 => 62,  92 => 42,  86 => 58,  83 => 57,  74 => 52,  62 => 93,  59 => 75,  56 => 52,  54 => 47,  47 => 28,  35 => 13,  32 => 12,  29 => 16,  21 => 58,  155 => 126,  149 => 123,  146 => 122,  143 => 88,  137 => 117,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 68,  113 => 109,  110 => 66,  104 => 64,  102 => 63,  99 => 71,  93 => 68,  90 => 60,  84 => 83,  81 => 82,  79 => 38,  76 => 61,  70 => 23,  67 => 95,  64 => 76,  58 => 62,  55 => 44,  52 => 23,  46 => 51,  43 => 40,  41 => 50,  36 => 67,  30 => 65,  28 => 64,  24 => 14,  19 => 49,);
    }
}
