<?php

/* form.html.twig */
class __TwigTemplate_f41a68cdf12e21af2c4e8c71bf973fe20c0c4571ea3d68644bb104ce6cc75736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
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
        echo "<div class=\"container\">

  <div class=\"row\">
    <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
      <div class=\"Contact-mainContent\">
          ";
        // line 9
        echo ($context["content"] ?? null);
        echo "
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
      ";
        // line 16
        $this->loadTemplate("forms/form.html.twig", "form.html.twig", 16)->display($context);
        // line 17
        echo "    </div>
  </div>



  <div class=\"row\">
    <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
      <div class=\"contact-mainInfo\">

        <ul>
          <li><span class=\"ion-android-call\"></span><p>";
        // line 27
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "number", array());
        echo "</p></li>
          <li><span class=\"ion-location\"></span><p>";
        // line 28
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "location", array());
        echo "</p></li>
          <li><span class=\"ion-paper-airplane\"></span><p>";
        // line 29
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "mail", array());
        echo "</p></li>
        </ul>

      </div>
    </div>
  </div>

</div>

<div class=\"contact-mapsContent\">
  <!-- <div class=\"contact-mapsContentGradient\"></div> -->
  <iframe src=\"https://snazzymaps.com/embed/44136\" width=\"100%\" height=\"600px\" style=\"border:none;\" scrolling=\"no\"></iframe>
</div>


";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 29,  66 => 28,  62 => 27,  50 => 17,  48 => 16,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
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
<div class=\"container\">

  <div class=\"row\">
    <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
      <div class=\"Contact-mainContent\">
          {{ content }}
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
      {% include \"forms/form.html.twig\" %}
    </div>
  </div>



  <div class=\"row\">
    <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
      <div class=\"contact-mainInfo\">

        <ul>
          <li><span class=\"ion-android-call\"></span><p>{{ page.header.number }}</p></li>
          <li><span class=\"ion-location\"></span><p>{{ page.header.location }}</p></li>
          <li><span class=\"ion-paper-airplane\"></span><p>{{ page.header.mail }}</p></li>
        </ul>

      </div>
    </div>
  </div>

</div>

<div class=\"contact-mapsContent\">
  <!-- <div class=\"contact-mapsContentGradient\"></div> -->
  <iframe src=\"https://snazzymaps.com/embed/44136\" width=\"100%\" height=\"600px\" style=\"border:none;\" scrolling=\"no\"></iframe>
</div>


{% endblock %}
", "form.html.twig", "/Users/bram/Documents/Websites/Bram van Dam/Bram van Dam/user/themes/bramvandam/templates/form.html.twig");
    }
}
