<?php

/* partials/header.html.twig */
class __TwigTemplate_ec7235afed1b337adbadd85c7372aa8f08491e4c13ba3504645da71d6abf82da extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-static-top navbar-static-top-show\" role=\"navigation\">
  <div class=\"navbar-accent\"></div>
    <div class=\"container navbarContent-wrapper\">
        <div class=\" navbar-header\">
            <a href=\"#topWindow\"><button type=\"button\" class=\"navbar-toggle navbarHide\" data-expanded=\"false\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Open de navigatie</span>
                <span class=\"ion-navicon\"></span>
            </button></a>
             <a class=\"navbar-brand\" href=\"/home\">
                <svg id=\"Layer_2\" data-name=\"Layer 2\" xmlns=\"http://www.w3.org/2000/svg\" ><defs></defs><title>logo</title><g id=\"Scissors\"><path class=\"cls-1\" d=\"M43.55,40.67a2.84,2.84,0,1,0,2.82,2.88A2.93,2.93,0,0,0,43.55,40.67Z\"/><path class=\"cls-1\" d=\"M35,35a1.47,1.47,0,0,0-1.43,1.42,1.41,1.41,0,0,0,2.82,0A1.48,1.48,0,0,0,35,35Z\"/><path class=\"cls-1\" d=\"M26.49,40.67a2.84,2.84,0,1,0,2.76,2.83A2.92,2.92,0,0,0,26.49,40.67Z\"/><path class=\"cls-1\" d=\"M34.48,0L0,34.48,35.52,70,70,35.52ZM46.28,19.8a7.29,7.29,0,0,1,1.36,3c0.28,1.06.46,2.14,0.65,3.22a1.86,1.86,0,0,1-.51,1.52,43,43,0,0,1-5.32,5.39c-0.57.49-1.09,1-1.65,1.54s-0.77.48-1.21,0c-1.11-1.17-2.17-2.38-3.37-3.71ZM43.65,50.2A6.78,6.78,0,0,1,37,44.79,8.89,8.89,0,0,1,37.07,42a1.31,1.31,0,0,0-.56-1.52c-0.5-.32-1-0.68-1.53-1.09L33.1,40.76a1,1,0,0,0-.19,1.2,6.45,6.45,0,0,1-.57,4.7,6.74,6.74,0,0,1-10.5,1.74,6.89,6.89,0,0,1-1.38-7.93,6.68,6.68,0,0,1,8.47-3.17l0.88,0.36,1.32-1.43c-0.48-.47-0.88-0.89-1.31-1.29-1.91-1.77-3.85-3.52-5.74-5.31-0.6-.57-1.07-1.27-1.66-1.84a2.61,2.61,0,0,1-.72-2.5,16.28,16.28,0,0,1,1.85-5.46A15.15,15.15,0,0,1,25.69,22c0.71,0.68,1.33,1.46,2,2.19l2.09,2.26c0.7,0.75,1.42,1.49,2.12,2.24s1.33,1.46,2,2.19,1.37,1.53,2.07,2.28,1.37,1.43,2,2.15,1.37,1.52,2.09,2.31c0.31-.11.56-0.19,0.81-0.28A6.7,6.7,0,1,1,43.65,50.2Z\"/></g>
                </svg></a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 16
            echo "                ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 17
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 18
                echo "                <li class=\"";
                echo ($context["current_page"] ?? null);
                echo " menuItem\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a></li>
                ";
            }
            // line 20
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </ul>
        </div>
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 21,  55 => 20,  45 => 18,  42 => 17,  39 => 16,  35 => 15,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default navbar-static-top navbar-static-top-show\" role=\"navigation\">
  <div class=\"navbar-accent\"></div>
    <div class=\"container navbarContent-wrapper\">
        <div class=\" navbar-header\">
            <a href=\"#topWindow\"><button type=\"button\" class=\"navbar-toggle navbarHide\" data-expanded=\"false\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Open de navigatie</span>
                <span class=\"ion-navicon\"></span>
            </button></a>
             <a class=\"navbar-brand\" href=\"/home\">
                <svg id=\"Layer_2\" data-name=\"Layer 2\" xmlns=\"http://www.w3.org/2000/svg\" ><defs></defs><title>logo</title><g id=\"Scissors\"><path class=\"cls-1\" d=\"M43.55,40.67a2.84,2.84,0,1,0,2.82,2.88A2.93,2.93,0,0,0,43.55,40.67Z\"/><path class=\"cls-1\" d=\"M35,35a1.47,1.47,0,0,0-1.43,1.42,1.41,1.41,0,0,0,2.82,0A1.48,1.48,0,0,0,35,35Z\"/><path class=\"cls-1\" d=\"M26.49,40.67a2.84,2.84,0,1,0,2.76,2.83A2.92,2.92,0,0,0,26.49,40.67Z\"/><path class=\"cls-1\" d=\"M34.48,0L0,34.48,35.52,70,70,35.52ZM46.28,19.8a7.29,7.29,0,0,1,1.36,3c0.28,1.06.46,2.14,0.65,3.22a1.86,1.86,0,0,1-.51,1.52,43,43,0,0,1-5.32,5.39c-0.57.49-1.09,1-1.65,1.54s-0.77.48-1.21,0c-1.11-1.17-2.17-2.38-3.37-3.71ZM43.65,50.2A6.78,6.78,0,0,1,37,44.79,8.89,8.89,0,0,1,37.07,42a1.31,1.31,0,0,0-.56-1.52c-0.5-.32-1-0.68-1.53-1.09L33.1,40.76a1,1,0,0,0-.19,1.2,6.45,6.45,0,0,1-.57,4.7,6.74,6.74,0,0,1-10.5,1.74,6.89,6.89,0,0,1-1.38-7.93,6.68,6.68,0,0,1,8.47-3.17l0.88,0.36,1.32-1.43c-0.48-.47-0.88-0.89-1.31-1.29-1.91-1.77-3.85-3.52-5.74-5.31-0.6-.57-1.07-1.27-1.66-1.84a2.61,2.61,0,0,1-.72-2.5,16.28,16.28,0,0,1,1.85-5.46A15.15,15.15,0,0,1,25.69,22c0.71,0.68,1.33,1.46,2,2.19l2.09,2.26c0.7,0.75,1.42,1.49,2.12,2.24s1.33,1.46,2,2.19,1.37,1.53,2.07,2.28,1.37,1.43,2,2.15,1.37,1.52,2.09,2.31c0.31-.11.56-0.19,0.81-0.28A6.7,6.7,0,1,1,43.65,50.2Z\"/></g>
                </svg></a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                {% for page in pages.children %}
                {% if page.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                <li class=\"{{ current_page }} menuItem\"><a href=\"{{ page.url }}\">{{ page.menu }}</a></li>
                {% endif %}
                {% endfor %}
            </ul>
        </div>
    </div>
</nav>
", "partials/header.html.twig", "/Users/bram/Documents/Websites/Bram van Dam/Bram van Dam/user/themes/bramvandam/templates/partials/header.html.twig");
    }
}
