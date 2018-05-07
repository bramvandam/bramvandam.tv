<?php

/* forms/data.html.twig */
class __TwigTemplate_677bb4dcf115cf259ce4906a139dbbb2392ecd1b6e59ecd46f6fe7b9bd20c8da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'start' => array($this, 'block_start'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('start', $context, $blocks);
    }

    public function block_start($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"ContactForm-thankyou\">

";
        // line 4
        $this->loadTemplate("forms/default/data.html.twig", "forms/data.html.twig", 4)->display($context);
        // line 5
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "forms/data.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  30 => 4,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block start %}
<div class=\"ContactForm-thankyou\">

{% include \"forms/default/data.html.twig\" %}

</div>
{% endblock %}
", "forms/data.html.twig", "/Users/bram/Documents/Websites/Bram van Dam/Bram van Dam/user/themes/bramvandam/templates/forms/data.html.twig");
    }
}
