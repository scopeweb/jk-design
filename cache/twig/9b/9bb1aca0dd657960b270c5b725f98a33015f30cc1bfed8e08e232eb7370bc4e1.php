<?php

/* partials/navigation.html.twig */
class __TwigTemplate_803c591d0b3411b9e45e96fd63f951ccf3bc173b97bb954211d66e8b3f14d6b4 extends Twig_Template
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
        // line 1
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand page-scroll\" href=\"#page-top\"><img src=\"../user/themes/agency/img/logo.png\"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"hidden\">
                    <a href=\"#page-top\"></a>
                </li>
                ";
        // line 20
        if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array()) == "en")) {
            // line 21
            echo "                <li>
                    <a class=\"page-scroll\" href=\"#services\">Services</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#portfolio\">Portfolio</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#about\">About</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                </li>
                <li>
                    <a href=\"/pl\">
                        <img src=\"";
            // line 35
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/flags/flag-poland.png");
            echo "\" alt=\"langswitcher PL\">
                    </a>
                </li>
                <li>
                    <a href=\"/en\">
                        <img src=\"";
            // line 40
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/flags/flag-english.png");
            echo "\" alt=\"langswitcher EN\">
                    </a>
                </li>
                ";
        } else {
            // line 44
            echo "                <li>
                    <a class=\"page-scroll\" href=\"#services\">Oferta</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#portfolio\">Portfolio</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#about\">O Mnie</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#contact\">Kontakt</a>
                </li>
                <li>
                    <a href=\"/pl\">
                        <img src=\"";
            // line 58
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/flags/flag-poland.png");
            echo "\" alt=\"langswitcher PL\">
                    </a>
                </li>
                <li>
                    <a href=\"/en\">
                        <img src=\"";
            // line 63
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/flags/flag-english.png");
            echo "\" alt=\"langswitcher EN\">
                    </a>
                </li>
                ";
        }
        // line 67
        echo "            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 67,  97 => 63,  89 => 58,  73 => 44,  66 => 40,  58 => 35,  42 => 21,  40 => 20,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand page-scroll\" href=\"#page-top\"><img src=\"../user/themes/agency/img/logo.png\"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"hidden\">
                    <a href=\"#page-top\"></a>
                </li>
                {% if grav.language.getActive == 'en' %}
                <li>
                    <a class=\"page-scroll\" href=\"#services\">Services</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#portfolio\">Portfolio</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#about\">About</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                </li>
                <li>
                    <a href=\"/pl\">
                        <img src=\"{{ url('theme://img/flags/flag-poland.png') }}\" alt=\"langswitcher PL\">
                    </a>
                </li>
                <li>
                    <a href=\"/en\">
                        <img src=\"{{ url('theme://img/flags/flag-english.png') }}\" alt=\"langswitcher EN\">
                    </a>
                </li>
                {% else %}
                <li>
                    <a class=\"page-scroll\" href=\"#services\">Oferta</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#portfolio\">Portfolio</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#about\">O Mnie</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#contact\">Kontakt</a>
                </li>
                <li>
                    <a href=\"/pl\">
                        <img src=\"{{ url('theme://img/flags/flag-poland.png') }}\" alt=\"langswitcher PL\">
                    </a>
                </li>
                <li>
                    <a href=\"/en\">
                        <img src=\"{{ url('theme://img/flags/flag-english.png') }}\" alt=\"langswitcher EN\">
                    </a>
                </li>
                {% endif %}
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

", "partials/navigation.html.twig", "/mnt/c/programming/web/jkdesign/user/themes/agency/templates/partials/navigation.html.twig");
    }
}
