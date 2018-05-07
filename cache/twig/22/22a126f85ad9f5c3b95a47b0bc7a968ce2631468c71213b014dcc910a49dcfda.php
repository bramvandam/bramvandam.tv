<?php

/* modular/werk.html.twig */
class __TwigTemplate_10a0c8448051a56f94a164d5699d12153f7d4ad701fe09a34cdff19ad0f01652 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    ";
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 2
        echo "    ";
        $context["base_url"] = $this->getAttribute(($context["page"] ?? null), "url", array());
        // line 3
        echo "    ";
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 4
        echo "
    ";
        // line 5
        if ((($context["base_url"] ?? null) == "/")) {
            // line 6
            echo "    ";
            $context["base_url"] = "";
            // line 7
            echo "    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 10
            echo "    ";
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", array()));
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
<!-- <div class=\"werk-hero\"></div> -->

<section class=\"werk-overview\">

  <div class=\"werk-title\">
    <h3>Recent Werk</h3>
    <div class=\"werkTitle-underline\"></div>
  </div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"werk-disclaimer col-xs-12 col-md-8 col-md-offset-2\">
        <p>";
        // line 26
        echo ($context["content"] ?? null);
        echo "</p>
      </div>
    </div>
  </div>


  <div class=\"container\">
    <div class=\"row\">

      ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 36
            echo "      ";
            $this->loadTemplate("partials/werk_item.html.twig", "modular/werk.html.twig", 36)->display(array_merge($context, array("page" => $context["child"], "truncate" => true)));
            // line 37
            echo "      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
      ";
        // line 39
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 40
            echo "      ";
            $this->loadTemplate("partials/pagination.html.twig", "modular/werk.html.twig", 40)->display(array_merge($context, array("base_url" => $this->getAttribute(($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 41
            echo "      ";
        }
        // line 42
        echo "
    </div>
  </div>
</section>

<div class=\"werkItemFocus-main\">
  <div class=\"werkItemFocus-overlay\">
    <div class=\"werkItemFocus-load\"></div>
  </div>
</div>

  <div class=\"werkItemFocus-BackSection\">
    <button class=\"werkItemFocus-BackButton button-chevron-left\">
      <span id=\"left1\" class=\"ion-chevron-left\"></span>
      <span id=\"left2\" class=\"ion-chevron-left\"></span>
      <span>Terug naar overzicht</span>
    </button>
  </div>


";
    }

    public function getTemplateName()
    {
        return "modular/werk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 42,  128 => 41,  125 => 40,  123 => 39,  120 => 38,  106 => 37,  103 => 36,  86 => 35,  74 => 26,  60 => 14,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 3,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    {% set collection = page.collection() %}
    {% set base_url = page.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
    {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
    {% set feed_url = base_url~'/'~page.slug %}
    {% endif  %}

    {% block content %}

<!-- <div class=\"werk-hero\"></div> -->

<section class=\"werk-overview\">

  <div class=\"werk-title\">
    <h3>Recent Werk</h3>
    <div class=\"werkTitle-underline\"></div>
  </div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"werk-disclaimer col-xs-12 col-md-8 col-md-offset-2\">
        <p>{{ content }}</p>
      </div>
    </div>
  </div>


  <div class=\"container\">
    <div class=\"row\">

      {% for child in collection %}
      {% include 'partials/werk_item.html.twig' with {'page':child, 'truncate':true} %}
      {% endfor %}

      {% if config.plugins.pagination.enabled and collection.params.pagination %}
      {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
      {% endif %}

    </div>
  </div>
</section>

<div class=\"werkItemFocus-main\">
  <div class=\"werkItemFocus-overlay\">
    <div class=\"werkItemFocus-load\"></div>
  </div>
</div>

  <div class=\"werkItemFocus-BackSection\">
    <button class=\"werkItemFocus-BackButton button-chevron-left\">
      <span id=\"left1\" class=\"ion-chevron-left\"></span>
      <span id=\"left2\" class=\"ion-chevron-left\"></span>
      <span>Terug naar overzicht</span>
    </button>
  </div>


{% endblock %}
", "modular/werk.html.twig", "/Users/bram/Documents/Websites/Bram van Dam/Bram van Dam/user/themes/bramvandam/templates/modular/werk.html.twig");
    }
}
