<?php

/* core/modules/block/templates/block.html.twig */
class __TwigTemplate_4d0abb28cf3ba76c4232772e715c93dcb86f32d60b008ef946732f69026b70be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 38
        $context["classes"] = array(0 => "block", 1 => ("block-" . drupal_html_class($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "provider"))));
        // line 43
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 44
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 45
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 46
            echo "    <h2";
            echo twig_drupal_escape_filter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</h2>
  ";
        }
        // line 48
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
  ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "</div>
";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "core/modules/block/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 49,  33 => 46,  22 => 43,  20 => 38,  45 => 28,  37 => 25,  31 => 45,  21 => 19,  116 => 103,  107 => 99,  99 => 96,  93 => 93,  90 => 92,  87 => 91,  78 => 87,  72 => 85,  65 => 81,  62 => 80,  56 => 50,  54 => 77,  40 => 70,  29 => 67,  27 => 44,  204 => 95,  200 => 93,  193 => 91,  184 => 89,  182 => 88,  177 => 87,  173 => 86,  168 => 85,  164 => 84,  161 => 83,  158 => 82,  154 => 80,  147 => 78,  138 => 76,  136 => 75,  131 => 74,  127 => 73,  122 => 72,  118 => 71,  115 => 70,  113 => 69,  110 => 100,  105 => 98,  96 => 63,  94 => 62,  89 => 61,  85 => 60,  81 => 88,  79 => 57,  76 => 86,  70 => 55,  64 => 53,  60 => 51,  47 => 48,  42 => 71,  39 => 26,  35 => 69,  26 => 42,  24 => 41,  51 => 49,  48 => 52,  46 => 49,  43 => 27,  41 => 48,  36 => 24,  34 => 23,  32 => 44,  25 => 20,  23 => 65,  19 => 18,);
    }
}
