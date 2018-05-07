<?php

/* error.html.twig */
class __TwigTemplate_54853c666687a70c6d6139630a8ab083f82acc5f8af1fc9bbc9630f20f319146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("partials/base-inverted-sticky-footer.html.twig", "error.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base-inverted-sticky-footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"mainError\">
  <div class=\"mainError-overlay flexbox-center\">
    <div class=\"container\">
      <div class=\"mainError-content\">
        <h1>404</h1>
        <h2>Nothing to see here...</h2>
        <p>Sorry, maar ik kan je niet helemaal volgen... Ben je verdwaald? Hetgeen wat je zoekt is er niet meer of is er wellicht nooit geweest. Misschien is het tijd om terug naar <a href=\"/home\">huis</a> te gaan?</p>
        <a class=\"button-chevron-left\" href=\"/home\">
          <span id=\"left1\" class=\"ion-chevron-left\"></span>
          <span id=\"left2\" class=\"ion-chevron-left\"></span>
          <span class=\"read-more\">Terug naar home</span>
        </a>
      </div>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% do assets.add('theme://css/main-inverted.css',100) %} #}
{% extends 'partials/base-inverted-sticky-footer.html.twig' %}

{% block content %}

<div class=\"mainError\">
  <div class=\"mainError-overlay flexbox-center\">
    <div class=\"container\">
      <div class=\"mainError-content\">
        <h1>404</h1>
        <h2>Nothing to see here...</h2>
        <p>Sorry, maar ik kan je niet helemaal volgen... Ben je verdwaald? Hetgeen wat je zoekt is er niet meer of is er wellicht nooit geweest. Misschien is het tijd om terug naar <a href=\"/home\">huis</a> te gaan?</p>
        <a class=\"button-chevron-left\" href=\"/home\">
          <span id=\"left1\" class=\"ion-chevron-left\"></span>
          <span id=\"left2\" class=\"ion-chevron-left\"></span>
          <span class=\"read-more\">Terug naar home</span>
        </a>
      </div>
    </div>
  </div>
</div>

{% endblock %}
", "error.html.twig", "/Users/bram/Documents/Websites/Bram van Dam/Bram van Dam/user/themes/bramvandam/templates/error.html.twig");
    }
}
