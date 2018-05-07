<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_cc2d54412f21389b5c53b8d86626a1b860638ecd4688e87c2573cb86e6dc041e extends Twig_Template
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
        echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-offset-1 col-md-10\">

      <article class=\"blogPost\">
        <div class=\"blogPost-hero\" style=\"background-image: url('/user/themes/bramvandam/images/bw-tilesTransparent.png'), url('";
        // line 6
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "url", array());
        echo "')\">
          <div class=\"row container\">
          <div class=\"blogPost-gradient\"></div>
            <div class=\"blogPost-content col-md-12\">

              <div class=\"blogPost-contentMain\">
                <h6 class=\"blogPost-category\">";
        // line 12
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "category", array());
        echo "</h6>
                <a href=\"";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\"><h3 class=\"blogPost-title\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h3></a>
                <h4 class=\"blogPost-underscore\">";
        // line 14
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "underscore", array());
        echo "</h4>
              </div>

                <div class=\"blogPost-contentExtend hidden-xs hidden-sm hidden-md\">";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "summary", array(0 => 650), "method");
        echo "</div>
                <div class=\"blogPost-contentExtend hidden-xs hidden-sm hidden-lg\">";
        // line 18
        echo $this->getAttribute(($context["page"] ?? null), "summary", array(0 => 515), "method");
        echo "</div>
                <div class=\"blogPost-contentExtend hidden-xs hidden-md hidden-lg\">";
        // line 19
        echo $this->getAttribute(($context["page"] ?? null), "summary", array(0 => 490), "method");
        echo "</div>
                <div class=\"blogPost-contentExtend hidden-sm hidden-md hidden-lg\">";
        // line 20
        echo $this->getAttribute(($context["page"] ?? null), "summary", array(0 => 400), "method");
        echo "</div>

            </div>
            <a class=\"blogPost-button button-chevron-right\" href=\"";
        // line 23
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\">
              <span class=\"read-more\">Lees Verder</span>
              <span id=\"right1\" class=\"ion-chevron-right\"></span>
              <span id=\"right2\" class=\"ion-chevron-right\"></span>
            </a>
          </div>
        </div>

        <div class=\"blogPost-metadata\">
          <i>tags: </i>
          ";
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
            // line 34
            echo "               ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 35
                echo "                 <span>";
                echo $context["tag"];
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                echo " </span>
               ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "          ";
        }
        // line 38
        echo "          <i>datum: </i>
          <span>";
        // line 39
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d/m/Y");
        echo "</span>
        </div>
      </article>

    </div>
  </div>
</div>



<div class=\"div\">

</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 39,  125 => 38,  122 => 37,  102 => 35,  84 => 34,  82 => 33,  69 => 23,  63 => 20,  59 => 19,  55 => 18,  51 => 17,  45 => 14,  39 => 13,  35 => 12,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-offset-1 col-md-10\">

      <article class=\"blogPost\">
        <div class=\"blogPost-hero\" style=\"background-image: url('/user/themes/bramvandam/images/bw-tilesTransparent.png'), url('{{ page.media.images|first.url }}')\">
          <div class=\"row container\">
          <div class=\"blogPost-gradient\"></div>
            <div class=\"blogPost-content col-md-12\">

              <div class=\"blogPost-contentMain\">
                <h6 class=\"blogPost-category\">{{ page.header.category }}</h6>
                <a href=\"{{ page.url }}\"><h3 class=\"blogPost-title\">{{ page.title }}</h3></a>
                <h4 class=\"blogPost-underscore\">{{ page.header.underscore }}</h4>
              </div>

                <div class=\"blogPost-contentExtend hidden-xs hidden-sm hidden-md\">{{ page.summary(650) }}</div>
                <div class=\"blogPost-contentExtend hidden-xs hidden-sm hidden-lg\">{{ page.summary(515) }}</div>
                <div class=\"blogPost-contentExtend hidden-xs hidden-md hidden-lg\">{{ page.summary(490) }}</div>
                <div class=\"blogPost-contentExtend hidden-sm hidden-md hidden-lg\">{{ page.summary(400) }}</div>

            </div>
            <a class=\"blogPost-button button-chevron-right\" href=\"{{ page.url }}\">
              <span class=\"read-more\">Lees Verder</span>
              <span id=\"right1\" class=\"ion-chevron-right\"></span>
              <span id=\"right2\" class=\"ion-chevron-right\"></span>
            </a>
          </div>
        </div>

        <div class=\"blogPost-metadata\">
          <i>tags: </i>
          {% if page.taxonomy.tag %}
               {% for tag in page.taxonomy.tag %}
                 <span>{{ tag }}{% if not loop.last %}, {% endif %} </span>
               {% endfor %}
          {% endif %}
          <i>datum: </i>
          <span>{{ page.date|date(\"d/m/Y\") }}</span>
        </div>
      </article>

    </div>
  </div>
</div>



<div class=\"div\">

</div>
", "partials/blog_item.html.twig", "/Users/bram/Documents/Websites/Bram van Dam/Bram van Dam/user/themes/bramvandam/templates/partials/blog_item.html.twig");
    }
}
