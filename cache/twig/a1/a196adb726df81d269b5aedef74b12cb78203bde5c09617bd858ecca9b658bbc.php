<?php

/* forms/fields/honeypot/honeypot.html.twig */
class __TwigTemplate_b4084bb7913fb5a49b45d73783df39c8c4493bd7b922a59dc94a06fd2e5dffe7 extends Twig_Template
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
        echo "<input aria-hidden=\"true\"
       type=\"text\"
       ";
        // line 3
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "form", array()), "inline_css", array()) == true)) {
            // line 4
            echo "       style=\"visibility:hidden;position:absolute!important;height:1px;width:1px;overflow:hidden;clip:rect(1px,1px,1px,1px);\"
       ";
        }
        // line 6
        echo "       class=\"form-honeybear\"
       name=\"";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array())));
        echo "\"
       value=\"";
        // line 8
        echo twig_join_filter(($context["value"] ?? null), ", ");
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "forms/fields/honeypot/honeypot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  32 => 7,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input aria-hidden=\"true\"
       type=\"text\"
       {% if config.plugins.form.inline_css == true %}
       style=\"visibility:hidden;position:absolute!important;height:1px;width:1px;overflow:hidden;clip:rect(1px,1px,1px,1px);\"
       {% endif %}
       class=\"form-honeybear\"
       name=\"{{ (scope ~ field.name)|fieldName }}\"
       value=\"{{ value|join(', ') }}\" />
", "forms/fields/honeypot/honeypot.html.twig", "/Users/bram/Documents/Websites/Bram van Dam/Bram van Dam/user/plugins/form/templates/forms/fields/honeypot/honeypot.html.twig");
    }
}
