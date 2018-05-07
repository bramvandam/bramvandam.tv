<?php

/* modular/welcome.html.twig */
class __TwigTemplate_9994ba23fc579a1a5560c580996a50b7859b1f7dc38e7128cf5332abbce68afb extends Twig_Template
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
        echo "<a href=\"#welcome-text\"><span class=\"ion-chevron-down scroll-down-welcome\"></span></a>

<div class=\"welcome-wrapper flexbox-center\" id=\"welcome-text\">
  <div class=\"container\">

    <div class=\"row\">
      <div class=\"col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2\">
        <div class=\"welcome-text\">";
        // line 8
        echo ($context["content"] ?? null);
        echo "</div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-xs-12 col-sm-8 col-sm-offset-2\">
        <div class=\"welcome-buttons\">
          <a class=\"button-outline\" href=\"/werk\">
            <span class=\"button-outlineText\">Bekijk portfolio</span>
            <button class=\"button-outlineBackground\"></button>
          </a>
          <a class=\"button-outline\" href=\"/contact\">
            <span class=\"button-outlineText\">Neem contact op</span>
            <span class=\"button-outlineBackground\"></span>
          </a>
        </div>
      </div>
    </div>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"#welcome-text\"><span class=\"ion-chevron-down scroll-down-welcome\"></span></a>

<div class=\"welcome-wrapper flexbox-center\" id=\"welcome-text\">
  <div class=\"container\">

    <div class=\"row\">
      <div class=\"col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2\">
        <div class=\"welcome-text\">{{ content }}</div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-xs-12 col-sm-8 col-sm-offset-2\">
        <div class=\"welcome-buttons\">
          <a class=\"button-outline\" href=\"/werk\">
            <span class=\"button-outlineText\">Bekijk portfolio</span>
            <button class=\"button-outlineBackground\"></button>
          </a>
          <a class=\"button-outline\" href=\"/contact\">
            <span class=\"button-outlineText\">Neem contact op</span>
            <span class=\"button-outlineBackground\"></span>
          </a>
        </div>
      </div>
    </div>

  </div>
</div>
", "modular/welcome.html.twig", "/Users/bram/Documents/Websites/Bram van Dam/Bram van Dam/user/themes/bramvandam/templates/modular/welcome.html.twig");
    }
}
