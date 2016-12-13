<?php

/* @Page:/var/www/jk-design/user/pages/thankyou */
class __TwigTemplate_aefa9f37b2c439d6ad4955ebaacedf93c31fd46b12aeb73b44bfd337589919fe extends Twig_Template
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
        echo "<p>Your email was sent. Thank you ! </p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/jk-design/user/pages/thankyou";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<p>Your email was sent. Thank you ! </p>";
    }
}
