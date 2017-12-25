<?php

/* @Page:/var/www/jkdesign.nu/public_web/user/pages/01.home/_contact */
class __TwigTemplate_4a5e05d29e5fb72c0137a556cb6c4efde0e545cbfd3a811c2a7414c694c4b6ca extends Twig_Template
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
\t\t\t\t<h2>Zostaw mi wiadomość</h2>
\t\t\t</div>
\t\t</div>
    \t\t<div class=\"row\">
\t\t\t<form action=\"https://formspree.io/jklasecki@gmail.com\" id=\"contact\" method=\"POST\" name=\"contact\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">Imię i Nazwisko <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"text\">
\t\t\t\t\t\t\t\t<div class=\"form-input-wrapper\">
\t\t\t\t\t\t\t\t\t<input autocomplete=\"on\" class=\"form-control\" name=\"name\" placeholder=\"Wpisz imię i nazwisko\" required=\"required\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">Email <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"email\">
\t\t\t\t\t\t\t\t<div class=\"form-input-wrapper\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"_replyto\" placeholder=\"Wpisz swój e-mail\" required=\"required\" type=\"email\" value=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">Wiadomość <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"textarea\">
\t\t\t\t\t\t\t\t<div class=\"form-textarea-wrapper\">
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"data[message]\" placeholder=\"Wpisz swoją wiadomość\" required=\"required\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Send\">Wyślij</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
      \t\t\t<footer>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<span class=\"copyright\">Copyright © JK-Design <script type=\"text/javascript\"> document.write(new Date().getFullYear()); </script></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
                <ul class=\"list-inline social-buttons\">
                                            <li><a href=\"https://facebook.com/jk.design.nu\"><i class=\"fa fa-facebook\"></i></a>
                        </li>
                                            <li><a href=\"https://instagram.com/jk.lasecki\"><i class=\"fa fa-instagram\"></i></a>
                        </li>
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
</section>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/jkdesign.nu/public_web/user/pages/01.home/_contact";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
\t\t\t\t<h2>Zostaw mi wiadomość</h2>
\t\t\t</div>
\t\t</div>
    \t\t<div class=\"row\">
\t\t\t<form action=\"https://formspree.io/jklasecki@gmail.com\" id=\"contact\" method=\"POST\" name=\"contact\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">Imię i Nazwisko <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"text\">
\t\t\t\t\t\t\t\t<div class=\"form-input-wrapper\">
\t\t\t\t\t\t\t\t\t<input autocomplete=\"on\" class=\"form-control\" name=\"name\" placeholder=\"Wpisz imię i nazwisko\" required=\"required\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">Email <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"email\">
\t\t\t\t\t\t\t\t<div class=\"form-input-wrapper\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"_replyto\" placeholder=\"Wpisz swój e-mail\" required=\"required\" type=\"email\" value=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">Wiadomość <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"textarea\">
\t\t\t\t\t\t\t\t<div class=\"form-textarea-wrapper\">
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"data[message]\" placeholder=\"Wpisz swoją wiadomość\" required=\"required\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Send\">Wyślij</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
      \t\t\t<footer>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<span class=\"copyright\">Copyright © JK-Design <script type=\"text/javascript\"> document.write(new Date().getFullYear()); </script></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
                <ul class=\"list-inline social-buttons\">
                                            <li><a href=\"https://facebook.com/jk.design.nu\"><i class=\"fa fa-facebook\"></i></a>
                        </li>
                                            <li><a href=\"https://instagram.com/jk.lasecki\"><i class=\"fa fa-instagram\"></i></a>
                        </li>
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
</section>", "@Page:/var/www/jkdesign.nu/public_web/user/pages/01.home/_contact", "");
    }
}
