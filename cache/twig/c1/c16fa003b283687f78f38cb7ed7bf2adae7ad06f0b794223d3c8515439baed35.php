<?php

/* partials/werk_item.html.twig */
class __TwigTemplate_cef276c0bbabd55b237536746f21befae2a4782fa3216556de73cffe1ec02e1e extends Twig_Template
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
        echo "<div class=\"col-xs-12 col-sm-6 col-md-4\">
  <div class=\"werkItem-thumb\" data-folder=\"werk/_werk/";
        // line 2
        echo $this->getAttribute(($context["page"] ?? null), "slug", array());
        echo "\" style=\"background-image: url('";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "thumb.jpg", array(), "array"), "url", array());
        echo "')\" alt=\"\">
    <div class=\"werkItem-thumbOverlay\">
      <h3 class=\"werkItem-title\">";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h3>
    </div>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/werk_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-xs-12 col-sm-6 col-md-4\">
  <div class=\"werkItem-thumb\" data-folder=\"werk/_werk/{{ page.slug }}\" style=\"background-image: url('{{ page.media['thumb.jpg'].url }}')\" alt=\"\">
    <div class=\"werkItem-thumbOverlay\">
      <h3 class=\"werkItem-title\">{{ page.title }}</h3>
    </div>

  </div>
</div>
", "partials/werk_item.html.twig", "/Users/bram/Documents/Websites/Bram van Dam/Bram van Dam/user/themes/bramvandam/templates/partials/werk_item.html.twig");
    }
}
