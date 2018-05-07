<?php

/* modular/blog.html.twig */
class __TwigTemplate_5c81aad6233d4c72802bb01f5010a48545163872f5ab5e6621ce8917bf290dd4 extends Twig_Template
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
        echo "<div class=\"blog-hero\"></div>

<section class=\"blog-intro\">
  <div class=\"container\">
    <div class=\"blog-introWrap col-md-8 col-md-offset-2\">
      <h3>";
        // line 19
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "introTitle", array());
        echo "</h3>
      <div class=\"blog-underline\"></div>
      ";
        // line 21
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    </div>
  </div>
</section>

<section class=\"blog-overview\">

    <div class=\"blog-title\">
      <h4>Nieuwste Posts</h4>
      <span class=\"ion-chevron-down\"></span>
    </div>

      ";
        // line 33
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
            // line 34
            echo "        ";
            $this->loadTemplate("partials/blog_item.html.twig", "modular/blog.html.twig", 34)->display(array_merge($context, array("page" => $context["child"], "truncate" => true)));
            // line 35
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
        // line 36
        echo "
      ";
        // line 37
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 38
            echo "        ";
            $this->loadTemplate("partials/pagination.html.twig", "modular/blog.html.twig", 38)->display(array_merge($context, array("pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 39
            echo "      ";
        }
        // line 40
        echo "

</section>
<!-- <section class=\"blog-subscribe\">
  <div class=\"container\">
    <div class=\"col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3\">
      <h3>Keep me posted!</h3>
      <div class=\"blog-underline\"></div>
      <p>Wil je geen blogpost missen? Schrijf je hieronder in en krijg een update als ik een nieuw artikel heb geschreven. En <strong>alleen</strong> als ik een nieuw artikel heb geschreven. <strong>Geen spam</strong>. Pinky promise!</p>
    </div>
  </div>
</section> -->
    ";
    }

    public function getTemplateName()
    {
        return "modular/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 40,  129 => 39,  126 => 38,  124 => 37,  121 => 36,  107 => 35,  104 => 34,  87 => 33,  72 => 21,  67 => 19,  60 => 14,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 3,  23 => 2,  20 => 1,);
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
<div class=\"blog-hero\"></div>

<section class=\"blog-intro\">
  <div class=\"container\">
    <div class=\"blog-introWrap col-md-8 col-md-offset-2\">
      <h3>{{ page.header.introTitle }}</h3>
      <div class=\"blog-underline\"></div>
      {{ page.content }}
    </div>
  </div>
</section>

<section class=\"blog-overview\">

    <div class=\"blog-title\">
      <h4>Nieuwste Posts</h4>
      <span class=\"ion-chevron-down\"></span>
    </div>

      {% for child in collection %}
        {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
      {% endfor %}

      {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'partials/pagination.html.twig' with {'pagination':collection.params.pagination} %}
      {% endif %}


</section>
<!-- <section class=\"blog-subscribe\">
  <div class=\"container\">
    <div class=\"col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3\">
      <h3>Keep me posted!</h3>
      <div class=\"blog-underline\"></div>
      <p>Wil je geen blogpost missen? Schrijf je hieronder in en krijg een update als ik een nieuw artikel heb geschreven. En <strong>alleen</strong> als ik een nieuw artikel heb geschreven. <strong>Geen spam</strong>. Pinky promise!</p>
    </div>
  </div>
</section> -->
    {% endblock %}
", "modular/blog.html.twig", "/Users/bram/Documents/Websites/Bram van Dam/Bram van Dam/user/themes/bramvandam/templates/modular/blog.html.twig");
    }
}
