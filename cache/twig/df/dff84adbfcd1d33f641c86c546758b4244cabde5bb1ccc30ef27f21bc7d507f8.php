<?php

/* @Page:/var/www/jkdesign.nu/public_web/user/pages/01.home/_header */
class __TwigTemplate_411bc08fec336f8a12d71037314d967f788b9c08da6c3998ab79f7c782148127 extends Twig_Template
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
        echo "<header>
    <div class=\"container\">
        <div class=\"intro-text\">
            <h2>Your idea. My design.</h2>
<h2>Our success.</h2>
                            <a class=\"page-scroll btn btn-xl\" href=\"#services\">Tell me more</a>
                    </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/jkdesign.nu/public_web/user/pages/01.home/_header";
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
        return new Twig_Source("<header>
    <div class=\"container\">
        <div class=\"intro-text\">
            <h2>Your idea. My design.</h2>
<h2>Our success.</h2>
                            <a class=\"page-scroll btn btn-xl\" href=\"#services\">Tell me more</a>
                    </div>
    </div>
</header>", "@Page:/var/www/jkdesign.nu/public_web/user/pages/01.home/_header", "");
    }
}
