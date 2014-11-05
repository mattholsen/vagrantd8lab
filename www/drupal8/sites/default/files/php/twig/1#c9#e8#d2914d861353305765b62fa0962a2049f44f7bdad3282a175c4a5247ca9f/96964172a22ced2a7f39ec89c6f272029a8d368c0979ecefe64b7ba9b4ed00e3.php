<?php

/* core/modules/system/templates/menu.html.twig */
class __TwigTemplate_c9e8d2914d861353305765b62fa0962a2049f44f7bdad3282a175c4a5247ca9f extends Twig_Template
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
        $context["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo twig_render_var($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0));
        echo "

";
    }

    // line 26
    public function getmenu_links($_items = null, $_attributes = null, $_menu_level = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $_items,
            "attributes" => $_attributes,
            "menu_level" => $_menu_level,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 27
            echo "  ";
            $context["menus"] = $this;
            // line 28
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 29
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 30
                    echo "      <ul";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "menu"), "method"), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 32
                    echo "      <ul class=\"menu\">
    ";
                }
                // line 34
                echo "      ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    echo "        <li";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), "html", null, true);
                    echo ">
          ";
                    // line 36
                    echo twig_drupal_escape_filter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url")), "html", null, true);
                    echo "
          ";
                    // line 37
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "below")) {
                        // line 38
                        echo "            ";
                        echo twig_render_var($context["menus"]->getmenu_links($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "below"), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1)));
                        echo "
          ";
                    }
                    // line 40
                    echo "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 36,  68 => 35,  44 => 27,  69 => 63,  66 => 62,  61 => 65,  45 => 58,  34 => 55,  31 => 26,  22 => 51,  20 => 44,  77 => 37,  63 => 34,  57 => 20,  48 => 18,  40 => 57,  37 => 56,  27 => 11,  25 => 10,  339 => 199,  333 => 196,  330 => 195,  328 => 194,  325 => 193,  319 => 190,  315 => 189,  311 => 188,  307 => 187,  304 => 186,  302 => 185,  297 => 182,  291 => 179,  287 => 178,  283 => 177,  280 => 176,  278 => 175,  273 => 172,  267 => 169,  264 => 168,  262 => 167,  259 => 166,  253 => 163,  250 => 162,  248 => 161,  242 => 158,  237 => 157,  231 => 154,  228 => 153,  226 => 152,  221 => 151,  215 => 148,  210 => 147,  208 => 146,  197 => 142,  194 => 141,  188 => 139,  185 => 138,  179 => 137,  173 => 134,  163 => 129,  160 => 128,  158 => 127,  144 => 121,  133 => 116,  120 => 110,  111 => 108,  108 => 107,  105 => 106,  95 => 103,  88 => 102,  85 => 40,  75 => 24,  53 => 30,  50 => 29,  42 => 87,  33 => 85,  23 => 81,  203 => 145,  196 => 94,  192 => 140,  184 => 92,  181 => 91,  178 => 90,  176 => 89,  169 => 132,  165 => 84,  157 => 83,  154 => 82,  151 => 81,  145 => 78,  142 => 77,  140 => 76,  132 => 73,  130 => 115,  126 => 113,  107 => 65,  97 => 62,  92 => 42,  86 => 58,  83 => 57,  74 => 52,  62 => 93,  59 => 32,  56 => 48,  54 => 47,  47 => 28,  35 => 13,  32 => 12,  29 => 39,  21 => 19,  155 => 126,  149 => 123,  146 => 122,  143 => 88,  137 => 117,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 68,  113 => 109,  110 => 66,  104 => 64,  102 => 63,  99 => 71,  93 => 68,  90 => 60,  84 => 64,  81 => 56,  79 => 38,  76 => 61,  70 => 23,  67 => 95,  64 => 94,  58 => 62,  55 => 92,  52 => 51,  46 => 17,  43 => 42,  41 => 46,  36 => 45,  30 => 43,  28 => 83,  24 => 24,  19 => 18,);
    }
}
