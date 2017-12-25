<?php

/* modular/form.html.twig */
class __TwigTemplate_b0abebe1facbb33bbfb000ece8be77feb2ef188ca66c641b6618ff387d1f1731 extends Twig_Template
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
        echo "<section id=\"contact\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t";
        // line 5
        echo ($context["content"] ?? null);
        echo "
\t\t\t</div>
\t\t</div>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "form", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
            // line 9
            echo "\t\t<div class=\"row\">
\t\t\t<form action=\"https://formspree.io/jklasecki@gmail.com\" id=\"contact\" method=\"POST\" name=\"contact\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">";
            // line 15
            echo $this->getAttribute($context["forms"], "namefield", array());
            echo " <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"text\">
\t\t\t\t\t\t\t\t<div class=\"form-input-wrapper\">
\t\t\t\t\t\t\t\t\t<input autocomplete=\"on\" class=\"form-control\" name=\"name\" placeholder=\"";
            // line 19
            echo $this->getAttribute($context["forms"], "placeholdername", array());
            echo "\" required=\"required\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">";
            // line 27
            echo $this->getAttribute($context["forms"], "emailfield", array());
            echo " <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"email\">
\t\t\t\t\t\t\t\t<div class=\"form-input-wrapper\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"_replyto\" placeholder=\"";
            // line 31
            echo $this->getAttribute($context["forms"], "placeholderemail", array());
            echo "\" required=\"required\" type=\"email\" value=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">";
            // line 41
            echo $this->getAttribute($context["forms"], "messagefield", array());
            echo " <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"textarea\">
\t\t\t\t\t\t\t\t<div class=\"form-textarea-wrapper\">
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"data[message]\" placeholder=\"";
            // line 45
            echo $this->getAttribute($context["forms"], "placeholdermsg", array());
            echo "\" required=\"required\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Send\">";
            // line 54
            echo $this->getAttribute($context["forms"], "btn", array());
            echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t<footer>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<span class=\"copyright\">Copyright © JK-Design <script type=\"text/javascript\"> document.write(new Date().getFullYear()); </script></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
                <ul class=\"list-inline social-buttons\">
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["network"]) {
            // line 69
            echo "                        <li><a href=\"";
            echo $this->getAttribute($context["network"], "url", array());
            echo "\"><i class=\"fa fa-";
            echo $this->getAttribute($context["network"], "title", array());
            echo "\"></i></a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['network'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                </ul>
            </div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<ul class=\"list-inline quicklinks\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://www.kreynation.com\" target=\"_blank\" noreferrer>Development by KreyNation</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 72,  126 => 69,  122 => 68,  112 => 60,  100 => 54,  88 => 45,  81 => 41,  68 => 31,  61 => 27,  50 => 19,  43 => 15,  35 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"contact\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t{{ content }}
\t\t\t</div>
\t\t</div>
    {% for forms in page.header.form %}
\t\t<div class=\"row\">
\t\t\t<form action=\"https://formspree.io/jklasecki@gmail.com\" id=\"contact\" method=\"POST\" name=\"contact\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">{{ forms.namefield }} <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"text\">
\t\t\t\t\t\t\t\t<div class=\"form-input-wrapper\">
\t\t\t\t\t\t\t\t\t<input autocomplete=\"on\" class=\"form-control\" name=\"name\" placeholder=\"{{ forms.placeholdername }}\" required=\"required\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">{{ forms.emailfield }} <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"email\">
\t\t\t\t\t\t\t\t<div class=\"form-input-wrapper\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"_replyto\" placeholder=\"{{ forms.placeholderemail }}\" required=\"required\" type=\"email\" value=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">{{ forms.messagefield }} <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"textarea\">
\t\t\t\t\t\t\t\t<div class=\"form-textarea-wrapper\">
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"data[message]\" placeholder=\"{{ forms.placeholdermsg }}\" required=\"required\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Send\">{{ forms.btn }}</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
      {% endfor %}
\t\t\t<footer>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<span class=\"copyright\">Copyright © JK-Design <script type=\"text/javascript\"> document.write(new Date().getFullYear()); </script></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
                <ul class=\"list-inline social-buttons\">
                    {% for network in site.social %}
                        <li><a href=\"{{ network.url }}\"><i class=\"fa fa-{{ network.title }}\"></i></a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<ul class=\"list-inline quicklinks\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://www.kreynation.com\" target=\"_blank\" noreferrer>Development by KreyNation</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>
\t</div>
</section>", "modular/form.html.twig", "/var/www/jkdesign.nu/public_web/user/themes/agency/templates/modular/form.html.twig");
    }
}
