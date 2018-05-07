<?php

/* formdata.html.twig */
class __TwigTemplate_146ee420b397acd474df7db018e5559205d02d4af71167d0f957469d48860a23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "formdata.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<section class=\"ContactThankyou-wrapper\">
    <div class=\"container\">

      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
          <div class=\"ContactThankyou-content\">
            <div class=\"ContactThankyou-title\">
                <h3>";
        // line 11
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h3>
            </div>
            ";
        // line 13
        echo ($context["content"] ?? null);
        echo "
            <div class=\"ContactThankyou-text\">
            <p>";
        // line 15
        echo $this->getAttribute(($context["form"] ?? null), "message", array());
        echo "</p>
            <p>Dit is wat je mij geschreven hebt:</p>
            </div>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
          <div class=\"ContactThankyou-Message clearfix\">
            ";
        // line 25
        $this->loadTemplate("forms/data.html.twig", "formdata.html.twig", 25)->display($context);
        // line 26
        echo "          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
          <div class=\"ContactThankyou-backText\">
            <p>Kopje koffie nog niet op? Nieuwsgierig naar wat ik tot nu toe gemaakt heb? Neem een kijkje in mijn portfolio of ga direct terug naar home.</p>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
          <div class=\"ContactThankyou-buttons\">
            <a class=\"button-outline\" href=\"/home\">
              <span class=\"button-outlineText\">terug naar Home</span>
              <button class=\"button-outlineBackground\"></button>
            </a>
            <a class=\"button-outline\" href=\"/werk\">
              <span class=\"button-outlineText\">Bekijk portfolio</span>
              <button class=\"button-outlineBackground\"></button>
            </a>
          </div>
        </div>
      </div>

    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "formdata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 26,  63 => 25,  50 => 15,  45 => 13,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<section class=\"ContactThankyou-wrapper\">
    <div class=\"container\">

      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
          <div class=\"ContactThankyou-content\">
            <div class=\"ContactThankyou-title\">
                <h3>{{ page.header.title }}</h3>
            </div>
            {{ content }}
            <div class=\"ContactThankyou-text\">
            <p>{{ form.message }}</p>
            <p>Dit is wat je mij geschreven hebt:</p>
            </div>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
          <div class=\"ContactThankyou-Message clearfix\">
            {% include \"forms/data.html.twig\" %}
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
          <div class=\"ContactThankyou-backText\">
            <p>Kopje koffie nog niet op? Nieuwsgierig naar wat ik tot nu toe gemaakt heb? Neem een kijkje in mijn portfolio of ga direct terug naar home.</p>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
          <div class=\"ContactThankyou-buttons\">
            <a class=\"button-outline\" href=\"/home\">
              <span class=\"button-outlineText\">terug naar Home</span>
              <button class=\"button-outlineBackground\"></button>
            </a>
            <a class=\"button-outline\" href=\"/werk\">
              <span class=\"button-outlineText\">Bekijk portfolio</span>
              <button class=\"button-outlineBackground\"></button>
            </a>
          </div>
        </div>
      </div>

    </div>
</section>
{% endblock %}
", "formdata.html.twig", "/Users/bram/Documents/Websites/Bram van Dam/Bram van Dam/user/themes/bramvandam/templates/formdata.html.twig");
    }
}
