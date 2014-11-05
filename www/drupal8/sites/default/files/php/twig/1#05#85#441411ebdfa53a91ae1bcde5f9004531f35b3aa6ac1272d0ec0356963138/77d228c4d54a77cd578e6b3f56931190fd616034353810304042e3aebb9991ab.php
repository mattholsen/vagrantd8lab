<?php

/* core/modules/system/templates/item-list.html.twig */
class __TwigTemplate_0585441411ebdfa53a91ae1bcde5f9004531f35b3aa6ac1272d0ec0356963138 extends Twig_Template
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
        // line 21
        if (((isset($context["items"]) ? $context["items"] : null) || (isset($context["empty"]) ? $context["empty"] : null))) {
            // line 22
            echo "<div class=\"item-list\">";
            // line 23
            if ((!twig_test_empty((isset($context["title"]) ? $context["title"] : null)))) {
                // line 24
                echo "<h3>";
                echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</h3>";
            }
            // line 26
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 27
                echo "<";
                echo twig_drupal_escape_filter($this->env, (isset($context["list_type"]) ? $context["list_type"] : null), "html", null, true);
                echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
                echo ">";
                // line 28
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 29
                    echo "<li";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), "html", null, true);
                    echo ">";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "value"), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "</";
                echo twig_drupal_escape_filter($this->env, (isset($context["list_type"]) ? $context["list_type"] : null), "html", null, true);
                echo ">";
            } else {
                // line 33
                echo twig_drupal_escape_filter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true);
            }
            // line 35
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/item-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 31,  89 => 84,  39 => 68,  38 => 19,  78 => 51,  72 => 79,  49 => 42,  73 => 36,  68 => 47,  44 => 27,  69 => 63,  66 => 77,  61 => 53,  45 => 70,  34 => 36,  31 => 47,  22 => 45,  20 => 40,  77 => 37,  63 => 34,  57 => 20,  48 => 71,  40 => 39,  37 => 28,  27 => 46,  25 => 24,  339 => 199,  333 => 196,  330 => 195,  328 => 194,  325 => 193,  319 => 190,  315 => 189,  311 => 188,  307 => 187,  304 => 186,  302 => 185,  297 => 182,  291 => 179,  287 => 178,  283 => 177,  280 => 176,  278 => 175,  273 => 172,  267 => 169,  264 => 168,  262 => 167,  259 => 166,  253 => 163,  250 => 162,  248 => 161,  242 => 158,  237 => 157,  231 => 154,  228 => 153,  226 => 152,  221 => 151,  215 => 148,  210 => 147,  208 => 146,  197 => 142,  194 => 141,  188 => 139,  185 => 138,  179 => 137,  173 => 134,  163 => 129,  160 => 128,  158 => 127,  144 => 121,  133 => 116,  120 => 110,  111 => 108,  108 => 107,  105 => 106,  95 => 87,  88 => 56,  85 => 54,  75 => 80,  53 => 72,  50 => 29,  42 => 87,  33 => 48,  23 => 23,  203 => 145,  196 => 94,  192 => 140,  184 => 92,  181 => 91,  178 => 90,  176 => 89,  169 => 132,  165 => 84,  157 => 83,  154 => 82,  151 => 81,  145 => 78,  142 => 77,  140 => 76,  132 => 73,  130 => 115,  126 => 113,  107 => 65,  97 => 62,  92 => 42,  86 => 58,  83 => 57,  74 => 52,  62 => 93,  59 => 35,  56 => 33,  54 => 47,  47 => 28,  35 => 13,  32 => 27,  29 => 16,  21 => 22,  155 => 126,  149 => 123,  146 => 122,  143 => 88,  137 => 117,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 68,  113 => 109,  110 => 66,  104 => 64,  102 => 63,  99 => 71,  93 => 68,  90 => 60,  84 => 83,  81 => 82,  79 => 38,  76 => 61,  70 => 23,  67 => 95,  64 => 76,  58 => 62,  55 => 44,  52 => 23,  46 => 51,  43 => 40,  41 => 29,  36 => 67,  30 => 26,  28 => 64,  24 => 16,  19 => 21,);
    }
}
