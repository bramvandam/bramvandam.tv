<?php

/* @Var:{% include 'forms/data.html.twig' %} */
class __TwigTemplate_75c0d940770c59e973f5f56d85d89b56130d0d00d8eac99bc7b12fb203559ec2 extends Twig_Template
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
        $this->loadTemplate("forms/data.html.twig", "@Var:{% include 'forms/data.html.twig' %}", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@Var:{% include 'forms/data.html.twig' %}";
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
        return new Twig_Source("{% include 'forms/data.html.twig' %}", "@Var:{% include 'forms/data.html.twig' %}", "");
    }
}
