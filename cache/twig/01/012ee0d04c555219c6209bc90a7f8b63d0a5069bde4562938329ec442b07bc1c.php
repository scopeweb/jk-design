<?php

/* @Page:/mnt/c/programming/web/jkdesign/user/pages/01.home/_contact */
class __TwigTemplate_ee25b9948d8ee1727c672b481c8412d2513a02411aca3dde7f8ce3c4f18a7b3c extends Twig_Template
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
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
        <h2>Zostaw mi wiadomość</h2>
<p><br>
<br></p>
<h2><a href=\"mailto:jklasecki@gmail.com\">E-MAIL</a></h2>
      </div>
    </div>
    <div class=\"row\">




<form name=\"\"
      action=\"/pl/_contact\"
      method=\"POST\"
                  >

  <div class=\"col-md-6\">
      </div>
  <div class=\"col-md-6\">
      </div>

  <div class=\"col-lg-12 text-center\">
      <div class=\"form-group\">
              </div>
  </div>

  <input type=\"hidden\" name=\"form-nonce\" value=\"c1917614278f07ee80fe157eec3a55be\" />
</form>
";
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
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
        <h2>Zostaw mi wiadomość</h2>
<p><br>
<br></p>
<h2><a href=\"mailto:jklasecki@gmail.com\">E-MAIL</a></h2>
      </div>
    </div>
    <div class=\"row\">




<form name=\"\"
      action=\"/pl/_contact\"
      method=\"POST\"
                  >

  <div class=\"col-md-6\">
      </div>
  <div class=\"col-md-6\">
      </div>

  <div class=\"col-lg-12 text-center\">
      <div class=\"form-group\">
              </div>
  </div>

  <input type=\"hidden\" name=\"form-nonce\" value=\"c1917614278f07ee80fe157eec3a55be\" />
</form>
", "@Page:/mnt/c/programming/web/jkdesign/user/pages/01.home/_contact", "");
    }
}
