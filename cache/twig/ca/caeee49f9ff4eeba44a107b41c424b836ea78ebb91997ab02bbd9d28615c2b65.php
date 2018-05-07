<?php

/* forms/default/data.html.twig */
class __TwigTemplate_dfdca7d849ca6ece94ce5f3b91502e6b95958b9be40043644eaf169fcdc6d231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_label' => array($this, 'block_field_label'),
            'field_value' => array($this, 'block_field_value'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 2
            $this->displayBlock('field', $context, $blocks);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function block_field($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if (($this->getAttribute(($context["field"] ?? null), "name", array()) != "g-recaptcha-response")) {
            // line 4
            echo "    <div class=\"ContactThankyou-entryField\">
      ";
            // line 5
            $this->displayBlock('field_label', $context, $blocks);
            // line 8
            echo "
      ";
            // line 9
            $this->displayBlock('field_value', $context, $blocks);
            // line 12
            echo "    </div>
    ";
        }
    }

    // line 5
    public function block_field_label($context, array $blocks = array())
    {
        // line 6
        echo "        <p class=\"ContactThankyou-entryLabel\">";
        echo $this->getAttribute(($context["field"] ?? null), "label", array());
        echo "</p>
      ";
    }

    // line 9
    public function block_field_value($context, array $blocks = array())
    {
        // line 10
        echo "        <p class=\"ContactThankyou-entryValue\">";
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFunc(twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "value", array(0 => $this->getAttribute(($context["field"] ?? null), "name", array())), "method"))), "html", null, true));
        echo "</p>
      ";
    }

    public function getTemplateName()
    {
        return "forms/default/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 10,  86 => 9,  79 => 6,  76 => 5,  70 => 12,  68 => 9,  65 => 8,  63 => 5,  60 => 4,  57 => 3,  39 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for field in form.fields %}
{% block field %}
    {% if field.name != 'g-recaptcha-response' %}
    <div class=\"ContactThankyou-entryField\">
      {% block field_label %}
        <p class=\"ContactThankyou-entryLabel\">{{ field.label }}</p>
      {% endblock %}

      {% block field_value %}
        <p class=\"ContactThankyou-entryValue\">{{ string(form.value(field.name)|e)|nl2br }}</p>
      {% endblock %}
    </div>
    {% endif %}
{% endblock %}
{% endfor %}
", "forms/default/data.html.twig", "/Users/bram/Documents/Websites/Bram van Dam/Bram van Dam/user/themes/bramvandam/templates/forms/default/data.html.twig");
    }
}
