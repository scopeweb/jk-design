<?php

/* @Page:/mnt/c/programming/web/jkdesign/user/pages/01.home/_header */
class __TwigTemplate_84ab08a65d0f9ac789ea138c0537fc971fb0878da7282918dc155e78429e9ed8 extends Twig_Template
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
            <h2>Twój Pomysł. Mój Design</h2>
<h2>Nasz Sukces</h2>
                            <a class=\"page-scroll btn btn-xl\" href=\"#services\">Więcej</a>
                    </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "@Page:/mnt/c/programming/web/jkdesign/user/pages/01.home/_header";
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
            <h2>Twój Pomysł. Mój Design</h2>
<h2>Nasz Sukces</h2>
                            <a class=\"page-scroll btn btn-xl\" href=\"#services\">Więcej</a>
                    </div>
    </div>
</header>", "@Page:/mnt/c/programming/web/jkdesign/user/pages/01.home/_header", "");
    }
}
