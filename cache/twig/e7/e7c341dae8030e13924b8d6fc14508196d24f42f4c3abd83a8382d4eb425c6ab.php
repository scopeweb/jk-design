<?php

/* default.html.twig */
class __TwigTemplate_61c860366355b808e21fdd9e49f9c9b21bcd3a55cf3ab6cef76ed0c24c2353c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'header_navigation' => array($this, 'block_header_navigation'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header_navigation($context, array $blocks = array())
    {
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-center\">
            <div id=\"error\">
              <div>
                 <h2>";
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
                 <h3>
                    ";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
                </h3>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  44 => 9,  37 => 4,  34 => 3,  29 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'partials/base.html.twig' %}
{% block header_navigation %}{% endblock %}
{% block content %}
\t<div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-center\">
            <div id=\"error\">
              <div>
                 <h2>{{ page.header.title }}</h2>
                 <h3>
                    {{ page.content }}
                </h3>
            </div>
        </div>
    </div>
</div>
{% endblock %}
";
    }
}
