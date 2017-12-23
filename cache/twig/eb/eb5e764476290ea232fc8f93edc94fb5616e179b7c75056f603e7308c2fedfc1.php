<?php

/* @Page:/mnt/c/programming/web/jkdesign/user/pages/01.home/_contact */
class __TwigTemplate_f03dda14a1caa287d367dcdc2da504d20e9dbc1e1e39fd29333f875a8640b12d extends Twig_Template
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
\t\t\t\t<h2>Drop me a message</h2>
\t\t\t</div>
\t\t</div>
    \t\t<div class=\"row\">
\t\t\t<form action=\"/agency-skeleton/home\" id=\"contact\" method=\"post\" name=\"contact\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">Names <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"text\">
\t\t\t\t\t\t\t\t<div class=\"form-input-wrapper\">
\t\t\t\t\t\t\t\t\t<input autocomplete=\"on\" class=\"form-control\" name=\"data[name]\" placeholder=\"Enter your name\" required=\"required\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">Emails <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"email\">
\t\t\t\t\t\t\t\t<div class=\"form-input-wrapper\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"data[email]\" placeholder=\"Enter your email address\" required=\"required\" type=\"email\" value=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">Message <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"textarea\">
\t\t\t\t\t\t\t\t<div class=\"form-textarea-wrapper\">
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"data[message]\" placeholder=\"Enter your message\" required=\"required\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><input name=\"__form-name__\" type=\"hidden\" value=\"contact\">
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg\" type=\"submit\">Submit</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><input name=\"form-nonce\" type=\"hidden\" value=\"5e94195571f15987d898f7282c59ce60\">
\t\t\t</form>
      \t\t\t<footer>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<span class=\"copyright\">Copyright © JK-Design <script type=\"text/javascript\"> document.write(new Date().getFullYear()); </script></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
                <ul class=\"list-inline social-buttons\">
                                            <li><a href=\"https://facebook.com/jk.design.nn\"><i class=\"fa fa-facebook\"></i></a>
                        </li>
                                            <li><a href=\"https://instagram.com/jk.lasecki\"><i class=\"fa fa-instagram\"></i></a>
                        </li>
                                    </ul>
            </div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<ul class=\"list-inline quicklinks\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://www.kreynation.com\">Development by KreyNation</a>
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
        return "@Page:/mnt/c/programming/web/jkdesign/user/pages/01.home/_contact";
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
\t\t\t\t<h2>Drop me a message</h2>
\t\t\t</div>
\t\t</div>
    \t\t<div class=\"row\">
\t\t\t<form action=\"/agency-skeleton/home\" id=\"contact\" method=\"post\" name=\"contact\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">Names <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"text\">
\t\t\t\t\t\t\t\t<div class=\"form-input-wrapper\">
\t\t\t\t\t\t\t\t\t<input autocomplete=\"on\" class=\"form-control\" name=\"data[name]\" placeholder=\"Enter your name\" required=\"required\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">Emails <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"email\">
\t\t\t\t\t\t\t\t<div class=\"form-input-wrapper\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" name=\"data[email]\" placeholder=\"Enter your email address\" required=\"required\" type=\"email\" value=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t<div class=\"form-label\">
\t\t\t\t\t\t\t\t<label class=\"inline\">Message <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"textarea\">
\t\t\t\t\t\t\t\t<div class=\"form-textarea-wrapper\">
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"data[message]\" placeholder=\"Enter your message\" required=\"required\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><input name=\"__form-name__\" type=\"hidden\" value=\"contact\">
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg\" type=\"submit\">Submit</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><input name=\"form-nonce\" type=\"hidden\" value=\"5e94195571f15987d898f7282c59ce60\">
\t\t\t</form>
      \t\t\t<footer>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<span class=\"copyright\">Copyright © JK-Design <script type=\"text/javascript\"> document.write(new Date().getFullYear()); </script></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
                <ul class=\"list-inline social-buttons\">
                                            <li><a href=\"https://facebook.com/jk.design.nn\"><i class=\"fa fa-facebook\"></i></a>
                        </li>
                                            <li><a href=\"https://instagram.com/jk.lasecki\"><i class=\"fa fa-instagram\"></i></a>
                        </li>
                                    </ul>
            </div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<ul class=\"list-inline quicklinks\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://www.kreynation.com\">Development by KreyNation</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>
\t</div>
</section>", "@Page:/mnt/c/programming/web/jkdesign/user/pages/01.home/_contact", "");
    }
}
