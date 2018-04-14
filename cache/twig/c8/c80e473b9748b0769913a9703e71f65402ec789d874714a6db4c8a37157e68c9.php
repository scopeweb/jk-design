<?php

/* partials/base.html.twig */
class __TwigTemplate_37a784e2eb27e76fd3e380a4fddf3f51c70a6070fc8b97a0a42c23818f12f03e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts_bottom' => array($this, 'block_javascripts_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
  ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 24
        echo "</head>
<body id=\"page-top\" class=\"index\">

  ";
        // line 27
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 30
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
  ";
        // line 34
        $this->displayBlock('javascripts_bottom', $context, $blocks);
        // line 42
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "  <meta charset=\"utf-8\" />
  <title>";
        // line 6
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
  ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon.png");
        echo "\" />

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

  ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/global.css", 1 => 100), "method");
        // line 13
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 14
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome/css/font-awesome.min.css", 1 => 100), "method");
        // line 15
        echo "    <link href=\"//fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='//fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href=\"//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
    <link href='//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  ";
    }

    // line 27
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 28)->display($context);
        // line 29
        echo "  ";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "  ";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
    }

    // line 34
    public function block_javascripts_bottom($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 36
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/bootstrap.min.js", 1 => 100), "method");
        // line 37
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.easing.min.js"), "method");
        // line 38
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/classie.js"), "method");
        // line 39
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/cbpAnimatedHeader.js"), "method");
        // line 40
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/agency.js"), "method");
        // line 41
        echo "  ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 41,  154 => 40,  151 => 39,  148 => 38,  145 => 37,  142 => 36,  139 => 35,  136 => 34,  131 => 31,  127 => 32,  124 => 31,  121 => 30,  117 => 29,  114 => 28,  111 => 27,  102 => 15,  99 => 14,  96 => 13,  93 => 12,  90 => 11,  82 => 21,  80 => 11,  75 => 9,  72 => 8,  70 => 7,  66 => 6,  63 => 5,  60 => 4,  50 => 42,  48 => 34,  45 => 33,  42 => 30,  40 => 27,  35 => 24,  33 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
  {% block head %}
  <meta charset=\"utf-8\" />
  <title>{{ site.title }}</title>
  {% include 'partials/metadata.html.twig' %}
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon.png') }}\" />

  {% block stylesheets %}
    {% do assets.addCss('theme://css-compiled/global.css',100) %}
    {% do assets.addCss('theme://css/custom.css',100) %}
    {% do assets.addCss('theme://css/font-awesome/css/font-awesome.min.css',100) %}
    <link href=\"//fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='//fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href=\"//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
    <link href='//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  {% endblock %}
  {{ assets.css() }}

  {% endblock head%}
</head>
<body id=\"page-top\" class=\"index\">

  {% block header_navigation %}
    {% include 'partials/navigation.html.twig' %}
  {% endblock %}
  {% block body %}
    {% block content %}{% endblock %}
  {% endblock %}

  {% block javascripts_bottom %}
    {% do assets.add('jquery',101) %}
    {% do assets.addJs('theme://js/bootstrap.min.js',100) %}
    {% do assets.addJs('theme://js/jquery.easing.min.js') %}
    {% do assets.addJs('theme://js/classie.js') %}
    {% do assets.addJs('theme://js/cbpAnimatedHeader.js') %}
    {% do assets.addJs('theme://js/agency.js') %}
  {% endblock %}
  {{ assets.js() }}

</body>
</html>
", "partials/base.html.twig", "/mnt/c/programming/web/jkdesign-nu/user/themes/agency/templates/partials/base.html.twig");
    }
}
