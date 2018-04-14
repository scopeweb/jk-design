<?php

/* modular/about.html.twig */
class __TwigTemplate_1d9f6ad3d4dda46ba11d1568a3b7b8fad60b6656bc219c7f9c4f385d9d9a4b45 extends Twig_Template
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
        echo "<section id=\"about\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            ";
        // line 5
        echo ($context["content"] ?? null);
        echo "
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "jakub", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["jakub"]) {
            // line 7
            echo "        <ul class=\"timeline\">
            <li>
                <div class=\"timeline-image text-center\" style=\"margin-top: -30px\">
                    <img class=\"img-circle img-responsive\" src=\"";
            // line 10
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["jakub"], "img", array()), array(), "array"), "url", array());
            echo "\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                    <div class=\"timeline-body\">
                        <p class=\"text-muted\"></p>
                    </div>
                </div>
            </li>
        </ul>
        </div>
    </div>
    <div class=\"row\">
\t\t<div class=\"col-lg-12 text-center\">
\t\t\t<p>
\t\t\t\t";
            // line 24
            echo $this->getAttribute($context["jakub"], "description", array());
            echo "
\t\t\t</p>
\t\t</div>
\t</div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jakub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    <div class=\"row\" style=\"margin-top: 75px\">
        <div class=\"col-lg-12\">
            <ul class=\"timeline\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "abouts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 34
            echo "                    <li ";
            if (($this->getAttribute($context["about"], "align", array()) == "inverted")) {
                echo "class=\"timeline-inverted\"";
            }
            echo ">
                        <div class=\"timeline-image\">
                            ";
            // line 36
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["about"], "img", array()), array(), "array")) {
                // line 37
                echo "                            <img class=\"img-circle img-responsive\" src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["about"], "img", array()), array(), "array"), "url", array());
                echo "\" alt=\"\">
                            ";
            } else {
                // line 39
                echo "                            <h4>";
                echo $this->getAttribute($context["about"], "alttext", array());
                echo "</h4>
                            ";
            }
            // line 41
            echo "                        </div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>";
            // line 44
            echo $this->getAttribute($context["about"], "heading", array());
            echo "</h4>
                                <h4 class=\"subheading\">";
            // line 45
            echo $this->getAttribute($context["about"], "subheading", array());
            echo "</h4>
                            </div>
                            <div class=\"timeline-body\">
                                <p class=\"text-muted\">";
            // line 48
            echo $this->getAttribute($context["about"], "body", array());
            echo "</p>
                            </div>
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </ul>
        </div>   
    </div>
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 53,  113 => 48,  107 => 45,  103 => 44,  98 => 41,  92 => 39,  86 => 37,  84 => 36,  76 => 34,  72 => 33,  67 => 30,  55 => 24,  38 => 10,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"about\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            {{ content }}
        {% for jakub in page.header.jakub %}
        <ul class=\"timeline\">
            <li>
                <div class=\"timeline-image text-center\" style=\"margin-top: -30px\">
                    <img class=\"img-circle img-responsive\" src=\"{{ page.media[jakub.img].url }}\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                    <div class=\"timeline-body\">
                        <p class=\"text-muted\"></p>
                    </div>
                </div>
            </li>
        </ul>
        </div>
    </div>
    <div class=\"row\">
\t\t<div class=\"col-lg-12 text-center\">
\t\t\t<p>
\t\t\t\t{{ jakub.description }}
\t\t\t</p>
\t\t</div>
\t</div>
    </div>
    {% endfor %}
    <div class=\"row\" style=\"margin-top: 75px\">
        <div class=\"col-lg-12\">
            <ul class=\"timeline\">
                {% for about in page.header.abouts %}
                    <li {% if about.align == 'inverted' %}class=\"timeline-inverted\"{% endif %}>
                        <div class=\"timeline-image\">
                            {% if page.media[about.img] %}
                            <img class=\"img-circle img-responsive\" src=\"{{ page.media[about.img].url }}\" alt=\"\">
                            {% else %}
                            <h4>{{ about.alttext }}</h4>
                            {% endif %}
                        </div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>{{ about.heading }}</h4>
                                <h4 class=\"subheading\">{{ about.subheading }}</h4>
                            </div>
                            <div class=\"timeline-body\">
                                <p class=\"text-muted\">{{ about.body }}</p>
                            </div>
                        </div>
                    </li>
                {% endfor %}
            </ul>
        </div>   
    </div>
</div>
</section>", "modular/about.html.twig", "/mnt/c/programming/web/jkdesign-nu/user/themes/agency/templates/modular/about.html.twig");
    }
}
