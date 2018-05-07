<?php

/* item.html.twig */
class __TwigTemplate_58a9bbd536241bc4b6b8479be0f77760a85f35f5cdfbcadd9f3649f877f59ec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base-inverted.html.twig", "item.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base-inverted.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<article class=\"main-item\">
\t<div class=\"blogItem-hero\" style=\"background-image: url('/user/themes/bramvandam/images/bw-tilesTransparent.png'), url('";
        // line 5
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "url", array());
        echo "')\">
\t\t<div class=\"blogItem-heroContent\">

\t\t\t<div class=\"overlayDarken\"></div>

\t\t\t<div class=\"blogItem-headerText\">
\t\t\t\t<h1 class=\"blogItem-title\">";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1><br>
\t\t\t\t<h2 class=\"blogItem-underscore\">";
        // line 12
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "underscore", array());
        echo "</h2>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"blogItem-mainContent\">
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"hidden-xs col-sm-3\">
\t\t\t\t\t<div class=\"blogItem-mainMetadata\">
\t\t\t\t\t\t<span>";
        // line 24
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array());
        echo "</span> <br>
\t\t\t\t\t\t<em>categorie: </em><span>";
        // line 25
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "category", array());
        echo "</span><br>
\t\t\t\t\t\t<em>datum: </em><span>";
        // line 26
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d/m/Y");
        echo "</span> <br>

\t\t\t\t\t\t<em>tags: </em>
\t          ";
        // line 29
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
            // line 30
            echo "\t               ";
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
                // line 31
                echo "\t                 <span class=\"blogItem-tags\">";
                echo $context["tag"];
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                echo " </span>
\t               ";
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
            // line 33
            echo "\t          ";
        }
        echo "<br>
\t\t\t\t\t\t<span>Delen:</span><br>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<a class=\"blogItem-metaSociable\" href=\"http://twitter.com/home?status=Check het artikel: ";
        // line 36
        echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", array()), array(" " => "%20"));
        echo " - ";
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "\"><li class=\"ion-social-twitter\"></li></a>
\t\t\t\t\t\t\t<a class=\"blogItem-metaSociable\" href=\"http://reddit.com/submit?url=";
        // line 37
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "&amp;title=";
        echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", array()), array(" " => "%20"));
        echo "\"><li class=\"ion-social-reddit\"></li></a>
\t\t\t\t\t\t\t<a class=\"blogItem-metaSociable\" href=\"http://www.facebook.com/share.php?u=";
        // line 38
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "\"><li class=\"ion-social-facebook\"></li></a>
\t\t\t\t\t\t\t<a class=\"blogItem-metaSociable\" href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=";
        // line 39
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "&amp;title=";
        echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", array()), array(" " => "%20"));
        echo "\"><li class=\"ion-social-linkedin\"></li></a>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-9 col-md-8\">
\t\t\t\t\t<div class=\"blogItem-mainText\">";
        // line 45
        echo ($context["content"] ?? null);
        echo "</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2 pull-right\">
\t\t\t\t\t<div class=\"blogItem-mainSociables\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<a class=\"blogItem-mainSociable\" href=\"http://twitter.com/home?status=Check het artikel: ";
        // line 53
        echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", array()), array(" " => "%20"));
        echo " - ";
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "\"><li class=\"ion-social-twitter\"></li></a>
\t\t\t\t\t\t\t<a class=\"blogItem-mainSociable\" href=\"http://reddit.com/submit?url=";
        // line 54
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "&amp;title=";
        echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", array()), array(" " => "%20"));
        echo "\"><li class=\"ion-social-reddit\"></li></a>
\t\t\t\t\t\t\t<a class=\"blogItem-mainSociable\" href=\"http://www.facebook.com/share.php?u=";
        // line 55
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "\"><li class=\"ion-social-facebook\"></li></a>
\t\t\t\t\t\t\t<a class=\"blogItem-mainSociable\" href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=";
        // line 56
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "&amp;title=";
        echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", array()), array(" " => "%20"));
        echo "\"><li class=\"ion-social-linkedin\"></li></a>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</article>

";
        // line 65
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 66
            echo "<section class=\"blogItem-morePosts\">
\t<div class=\"container\">

\t\t\t<div class=\"blogItem-morePostsTitle\">
\t\t\t    <h5>Meer Lezen</h5>
\t\t\t\t\t<span class=\"ion-chevron-down\"></span>
\t\t\t</div>
\t\t\t";
            // line 73
            $this->loadTemplate("partials/relatedpages.html.twig", "item.html.twig", 73)->display($context);
            // line 74
            echo "
\t</div>
</section>
";
        }
        // line 78
        echo "


";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 78,  204 => 74,  202 => 73,  193 => 66,  191 => 65,  177 => 56,  173 => 55,  167 => 54,  161 => 53,  150 => 45,  139 => 39,  135 => 38,  129 => 37,  123 => 36,  116 => 33,  96 => 31,  78 => 30,  76 => 29,  70 => 26,  66 => 25,  62 => 24,  47 => 12,  43 => 11,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base-inverted.html.twig' %}

{% block content %}
<article class=\"main-item\">
\t<div class=\"blogItem-hero\" style=\"background-image: url('/user/themes/bramvandam/images/bw-tilesTransparent.png'), url('{{ page.media.images|first.url }}')\">
\t\t<div class=\"blogItem-heroContent\">

\t\t\t<div class=\"overlayDarken\"></div>

\t\t\t<div class=\"blogItem-headerText\">
\t\t\t\t<h1 class=\"blogItem-title\">{{ page.title }}</h1><br>
\t\t\t\t<h2 class=\"blogItem-underscore\">{{ page.header.underscore }}</h2>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"blogItem-mainContent\">
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"hidden-xs col-sm-3\">
\t\t\t\t\t<div class=\"blogItem-mainMetadata\">
\t\t\t\t\t\t<span>{{ page.header.author }}</span> <br>
\t\t\t\t\t\t<em>categorie: </em><span>{{ page.header.category }}</span><br>
\t\t\t\t\t\t<em>datum: </em><span>{{ page.date|date(\"d/m/Y\") }}</span> <br>

\t\t\t\t\t\t<em>tags: </em>
\t          {% if page.taxonomy.tag %}
\t               {% for tag in page.taxonomy.tag %}
\t                 <span class=\"blogItem-tags\">{{ tag }}{% if not loop.last %}, {% endif %} </span>
\t               {% endfor %}
\t          {% endif %}<br>
\t\t\t\t\t\t<span>Delen:</span><br>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<a class=\"blogItem-metaSociable\" href=\"http://twitter.com/home?status=Check het artikel: {{ page.title|replace({' ': \"%20\"}) }} - {{ page.url(true) }}\"><li class=\"ion-social-twitter\"></li></a>
\t\t\t\t\t\t\t<a class=\"blogItem-metaSociable\" href=\"http://reddit.com/submit?url={{ page.url(true) }}&amp;title={{ page.title|replace({' ': \"%20\"}) }}\"><li class=\"ion-social-reddit\"></li></a>
\t\t\t\t\t\t\t<a class=\"blogItem-metaSociable\" href=\"http://www.facebook.com/share.php?u={{ page.url(true) }}\"><li class=\"ion-social-facebook\"></li></a>
\t\t\t\t\t\t\t<a class=\"blogItem-metaSociable\" href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url={{ page.url(true) }}&amp;title={{ page.title|replace({' ': \"%20\"}) }}\"><li class=\"ion-social-linkedin\"></li></a>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-9 col-md-8\">
\t\t\t\t\t<div class=\"blogItem-mainText\">{{ content }}</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2 pull-right\">
\t\t\t\t\t<div class=\"blogItem-mainSociables\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<a class=\"blogItem-mainSociable\" href=\"http://twitter.com/home?status=Check het artikel: {{ page.title|replace({' ': \"%20\"}) }} - {{ page.url(true) }}\"><li class=\"ion-social-twitter\"></li></a>
\t\t\t\t\t\t\t<a class=\"blogItem-mainSociable\" href=\"http://reddit.com/submit?url={{ page.url(true) }}&amp;title={{ page.title|replace({' ': \"%20\"}) }}\"><li class=\"ion-social-reddit\"></li></a>
\t\t\t\t\t\t\t<a class=\"blogItem-mainSociable\" href=\"http://www.facebook.com/share.php?u={{ page.url(true) }}\"><li class=\"ion-social-facebook\"></li></a>
\t\t\t\t\t\t\t<a class=\"blogItem-mainSociable\" href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url={{ page.url(true) }}&amp;title={{ page.title|replace({' ': \"%20\"}) }}\"><li class=\"ion-social-linkedin\"></li></a>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</article>

{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
<section class=\"blogItem-morePosts\">
\t<div class=\"container\">

\t\t\t<div class=\"blogItem-morePostsTitle\">
\t\t\t    <h5>Meer Lezen</h5>
\t\t\t\t\t<span class=\"ion-chevron-down\"></span>
\t\t\t</div>
\t\t\t{% include 'partials/relatedpages.html.twig' %}

\t</div>
</section>
{% endif %}



{% endblock %}
", "item.html.twig", "/Users/bram/Documents/Websites/Bram van Dam/Bram van Dam/user/themes/bramvandam/templates/item.html.twig");
    }
}
