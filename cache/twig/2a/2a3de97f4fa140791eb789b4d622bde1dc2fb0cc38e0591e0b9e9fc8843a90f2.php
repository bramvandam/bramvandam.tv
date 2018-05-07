<?php

/* werkfocus.html.twig */
class __TwigTemplate_33d9519fb271b9efccc8ddf810dbfbc7c24e6066850115627c2a655d8967005d extends Twig_Template
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
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "
<section class=\"werkItemFocus\">
\t<div class=\"werkItemFocus-content\">



\t\t<div class=\"werkItemFocus-hero\" style=\"background-image: url('";
        // line 8
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "hero.gif", array(), "array"), "url", array());
        echo "'), url('";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "hero.jpg", array(), "array"), "url", array());
        echo "')\">
\t\t\t<video loop muted autoplay poster=\"";
        // line 9
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "hero.jpg", array(), "array"), "url", array());
        echo "\" class=\"werkItemFocus-heroVideo\">
        <source src=\"";
        // line 10
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "hero.mp4", array(), "array"), "url", array());
        echo "\" type=\"video/mp4\">
    \t</video>
\t\t\t<div class=\"werkItemFocus-heroOverlayGradient\"></div>

\t\t\t";
        // line 14
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "videoEmbed", array())) {
            // line 15
            echo "\t\t\t<a href=\"#topWindow\">
\t\t\t\t<div class=\"werkItemFocus-heroOverlayVideo\"></div>
\t\t\t\t<div class=\"werkItemFocus-herOverlayText\"><h5>bekijk ";
            // line 17
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
            echo "</h5></div>
\t\t\t</a>
\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute(        // line 19
($context["page"] ?? null), "header", array()), "videoLink", array())) {
            // line 20
            echo "
\t\t\t<a href=\"#topWindow\">
\t\t\t\t<div class=\"werkItemFocus-heroOverlayVideo\"></div>
\t\t\t\t<div class=\"werkItemFocus-herOverlayText\"><h5>bekijk ";
            // line 23
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
            echo "</h5></div>
\t\t\t</a>

\t\t\t";
        } else {
            // line 27
            echo "
\t\t\t<div class=\"werkItemFocus-heroOverlay\"></div>

\t\t\t";
        }
        // line 31
        echo "


\t\t</div>
\t\t<div class=\"navbar-accent-work\"></div>
\t\t<div class=\"WerkItemFocus-container container\">
\t\t\t<div class=\"row\">


\t\t\t\t<div class=\"col-xs-12 col-sm-4\">

\t\t\t\t\t<div class=\"werkItemFocus-thumb\" style=\"background-image: url('";
        // line 42
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "thumb.jpg", array(), "array"), "url", array());
        echo "')\">
\t\t\t\t\t\t";
        // line 43
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "videoEmbed", array())) {
            // line 44
            echo "
\t\t\t\t\t\t<a href=\"#topWindow\">
\t\t\t\t\t\t\t<div class=\"werkItemFocus-thumbOverlay\">
\t\t\t\t\t\t\t\t\t<div class=\"werkItemFocus-thumbOverlayBackground\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"werkItemFocus-PlayButton\"><span class=\"ion-play\"></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"werkItemFocus-WatchTag\"><span class=\"ion-ios-play\"></span><span>Kijken</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute(        // line 53
($context["page"] ?? null), "header", array()), "videoLink", array())) {
            // line 54
            echo "
\t\t\t\t\t\t<a href=\"#topWindow\">
\t\t\t\t\t\t\t<div class=\"werkItemFocus-thumbOverlay\">
\t\t\t\t\t\t\t\t\t<div class=\"werkItemFocus-thumbOverlayBackground\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"werkItemFocus-PlayButton\"><span class=\"ion-play\"></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"werkItemFocus-WatchTag\"><span class=\"ion-ios-play\"></span><span>Kijken</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"werkItemFocus-info\">
\t\t\t\t\t\t<h5 class=\"werkItemFocus-infoFunction\"><span class=\"";
        // line 67
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "icon", array());
        echo "\"></span>";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "function", array());
        echo "</h5>

\t\t\t\t\t\t<div class=\"werkItemFocus-infoGeneral\">
\t\t\t\t\t\t\t<h6 class=\"werkItemFocus-infoSummary\">";
        // line 70
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "type", array());
        echo " - ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "genre", array());
        echo " - ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "duration", array());
        echo "</h6>
\t\t\t\t\t\t\t<ul class=\"werkItemFocus-infoCrew\">
\t\t\t\t\t\t\t\t<li><strong>";
        // line 72
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "credit1Role", array());
        echo ":</strong> ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "credit1Person", array());
        echo "</li>
\t\t\t\t\t\t\t\t<li><strong>";
        // line 73
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "credit2Role", array());
        echo ":</strong> ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "credit2Person", array());
        echo "</li>
\t\t\t\t\t\t\t\t<li><strong>";
        // line 74
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "credit3Role", array());
        echo ":</strong> ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "credit3Person", array());
        echo "</li>
\t\t\t\t\t\t\t\t<li><strong>";
        // line 75
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "credit4Role", array());
        echo ":</strong> ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "credit4Person", array());
        echo "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-12 col-sm-8 pull-right\">
\t\t\t\t\t<div class=\"werkItemFocus-header\">
\t\t\t\t\t\t<h1 class=\"werkItemFocus-title\">";
        // line 84
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
\t\t\t\t\t\t<div class=\"werkItemFocus-rating\">";
        // line 85
        echo call_user_func_array($this->env->getFunction('stars')->getCallable(), array($this->getAttribute(($context["page"] ?? null), "route", array())));
        echo "</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"werkItemFocus-description\">
\t\t\t\t\t\t<p>";
        // line 89
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 93
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "brand", array())) {
            // line 94
            echo "\t\t\t\t<div class=\"col-xs-12 col-sm-4 pull-left\">
\t\t\t\t\t<div class=\"werkItemFocus-Brand\">
\t\t\t\t\t\t ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "brand", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                // line 97
                echo "\t\t\t\t\t\t\t <img src=\"/user/themes/bramvandam/images/brands/";
                echo $context["brand"];
                echo ".png\" alt=\"";
                echo $context["brand"];
                echo "\">";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 98
                echo "\t\t\t\t\t\t ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 102
        echo "




\t\t\t</div>
\t\t</div>
</section>
";
        // line 110
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "video", array())) {
            // line 111
            echo "<div class=\"werkItemFocus-play\">
\t<div class=\"werkItemFocus-playOverlay\"></div>
\t<div class=\"werkItemFocus-playItemWrapper\">
\t\t<div class=\"werkItemFocus-playItem\">
\t\t\t<iframe id=\"video-iframe\" src=\"";
            // line 115
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "videoEmbed", array());
            echo "\" frameborder=\"0\" min-width=\"431px\" allowfullscreen></iframe>
\t\t\t<div class=\"werkItemFocus-playBackButton\"><span class=\"ion-close\"></span></div>
\t\t</div>
\t</div>
</div>

";
        } elseif ($this->getAttribute($this->getAttribute(        // line 121
($context["page"] ?? null), "header", array()), "videoLink", array())) {
            // line 122
            echo "<div class=\"werkItemFocus-play\">
\t<div class=\"werkItemFocus-playOverlay\"></div>
\t<div class=\"werkItemFocus-playItemWrapper\">
\t\t<div class=\"werkItemFocus-playItemLink col-xs-12 col-sm-8 col-md-6\">
\t\t\t<h3>";
            // line 126
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "videoLinkTitle", array());
            echo "</h3>
\t\t\t<p>";
            // line 127
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "videoLinkTitle", array());
            echo " ondersteunt geen embedded video. Als je toch ";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
            echo " wilt bekijken dan moet je deze website verlaten.</p>
\t\t\t<a class=\"werkItemFocus-playItemLinkButton button-chevron-right\" href=\"";
            // line 128
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "videoLink", array());
            echo "\" alt=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
            echo " op ";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "videoLinkTitle", array());
            echo "\" target=\"_blank\">Ga naar de video <span class=\"ion-chevron-right\" id=\"right1\"></span><span class=\"ion-chevron-right\" id=\"right2\"></span></a>
\t\t\t<div class=\"werkItemFocus-playBackButton\" id=\"PlayItemLink\"><span class=\"ion-close\"></span></div>
\t\t</div>
\t</div>
</div>
";
        }
        // line 134
        echo "
";
    }

    public function getTemplateName()
    {
        return "werkfocus.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  307 => 134,  294 => 128,  288 => 127,  284 => 126,  278 => 122,  276 => 121,  267 => 115,  261 => 111,  259 => 110,  249 => 102,  244 => 99,  230 => 98,  221 => 97,  204 => 96,  200 => 94,  198 => 93,  191 => 89,  184 => 85,  180 => 84,  166 => 75,  160 => 74,  154 => 73,  148 => 72,  139 => 70,  131 => 67,  126 => 64,  114 => 54,  112 => 53,  101 => 44,  99 => 43,  95 => 42,  82 => 31,  76 => 27,  69 => 23,  64 => 20,  62 => 19,  57 => 17,  53 => 15,  51 => 14,  44 => 10,  40 => 9,  34 => 8,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block content %}

<section class=\"werkItemFocus\">
\t<div class=\"werkItemFocus-content\">



\t\t<div class=\"werkItemFocus-hero\" style=\"background-image: url('{{ page.media['hero.gif'].url }}'), url('{{ page.media['hero.jpg'].url }}')\">
\t\t\t<video loop muted autoplay poster=\"{{ page.media['hero.jpg'].url }}\" class=\"werkItemFocus-heroVideo\">
        <source src=\"{{ page.media['hero.mp4'].url }}\" type=\"video/mp4\">
    \t</video>
\t\t\t<div class=\"werkItemFocus-heroOverlayGradient\"></div>

\t\t\t{% if page.header.videoEmbed %}
\t\t\t<a href=\"#topWindow\">
\t\t\t\t<div class=\"werkItemFocus-heroOverlayVideo\"></div>
\t\t\t\t<div class=\"werkItemFocus-herOverlayText\"><h5>bekijk {{ page.header.title }}</h5></div>
\t\t\t</a>
\t\t\t{% elseif page.header.videoLink %}

\t\t\t<a href=\"#topWindow\">
\t\t\t\t<div class=\"werkItemFocus-heroOverlayVideo\"></div>
\t\t\t\t<div class=\"werkItemFocus-herOverlayText\"><h5>bekijk {{ page.header.title }}</h5></div>
\t\t\t</a>

\t\t\t{% else %}

\t\t\t<div class=\"werkItemFocus-heroOverlay\"></div>

\t\t\t{% endif %}



\t\t</div>
\t\t<div class=\"navbar-accent-work\"></div>
\t\t<div class=\"WerkItemFocus-container container\">
\t\t\t<div class=\"row\">


\t\t\t\t<div class=\"col-xs-12 col-sm-4\">

\t\t\t\t\t<div class=\"werkItemFocus-thumb\" style=\"background-image: url('{{ page.media['thumb.jpg'].url }}')\">
\t\t\t\t\t\t{% if page.header.videoEmbed %}

\t\t\t\t\t\t<a href=\"#topWindow\">
\t\t\t\t\t\t\t<div class=\"werkItemFocus-thumbOverlay\">
\t\t\t\t\t\t\t\t\t<div class=\"werkItemFocus-thumbOverlayBackground\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"werkItemFocus-PlayButton\"><span class=\"ion-play\"></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"werkItemFocus-WatchTag\"><span class=\"ion-ios-play\"></span><span>Kijken</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t{% elseif page.header.videoLink %}

\t\t\t\t\t\t<a href=\"#topWindow\">
\t\t\t\t\t\t\t<div class=\"werkItemFocus-thumbOverlay\">
\t\t\t\t\t\t\t\t\t<div class=\"werkItemFocus-thumbOverlayBackground\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"werkItemFocus-PlayButton\"><span class=\"ion-play\"></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"werkItemFocus-WatchTag\"><span class=\"ion-ios-play\"></span><span>Kijken</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"werkItemFocus-info\">
\t\t\t\t\t\t<h5 class=\"werkItemFocus-infoFunction\"><span class=\"{{ page.header.icon }}\"></span>{{ page.header.function }}</h5>

\t\t\t\t\t\t<div class=\"werkItemFocus-infoGeneral\">
\t\t\t\t\t\t\t<h6 class=\"werkItemFocus-infoSummary\">{{ page.header.type }} - {{page.header.genre }} - {{page.header.duration }}</h6>
\t\t\t\t\t\t\t<ul class=\"werkItemFocus-infoCrew\">
\t\t\t\t\t\t\t\t<li><strong>{{page.header.credit1Role}}:</strong> {{page.header.credit1Person}}</li>
\t\t\t\t\t\t\t\t<li><strong>{{page.header.credit2Role}}:</strong> {{page.header.credit2Person}}</li>
\t\t\t\t\t\t\t\t<li><strong>{{page.header.credit3Role}}:</strong> {{page.header.credit3Person}}</li>
\t\t\t\t\t\t\t\t<li><strong>{{page.header.credit4Role}}:</strong> {{page.header.credit4Person}}</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-12 col-sm-8 pull-right\">
\t\t\t\t\t<div class=\"werkItemFocus-header\">
\t\t\t\t\t\t<h1 class=\"werkItemFocus-title\">{{ page.title }}</h1>
\t\t\t\t\t\t<div class=\"werkItemFocus-rating\">{{ stars(page.route) }}</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"werkItemFocus-description\">
\t\t\t\t\t\t<p>{{ page.content }}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t{% if page.taxonomy.brand %}
\t\t\t\t<div class=\"col-xs-12 col-sm-4 pull-left\">
\t\t\t\t\t<div class=\"werkItemFocus-Brand\">
\t\t\t\t\t\t {% for brand in page.taxonomy.brand %}
\t\t\t\t\t\t\t <img src=\"/user/themes/bramvandam/images/brands/{{ brand }}.png\" alt=\"{{ brand }}\">{% if not loop.last %}, {% endif %}
\t\t\t\t\t\t {% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}





\t\t\t</div>
\t\t</div>
</section>
{% if page.header.video %}
<div class=\"werkItemFocus-play\">
\t<div class=\"werkItemFocus-playOverlay\"></div>
\t<div class=\"werkItemFocus-playItemWrapper\">
\t\t<div class=\"werkItemFocus-playItem\">
\t\t\t<iframe id=\"video-iframe\" src=\"{{ page.header.videoEmbed }}\" frameborder=\"0\" min-width=\"431px\" allowfullscreen></iframe>
\t\t\t<div class=\"werkItemFocus-playBackButton\"><span class=\"ion-close\"></span></div>
\t\t</div>
\t</div>
</div>

{% elseif page.header.videoLink %}
<div class=\"werkItemFocus-play\">
\t<div class=\"werkItemFocus-playOverlay\"></div>
\t<div class=\"werkItemFocus-playItemWrapper\">
\t\t<div class=\"werkItemFocus-playItemLink col-xs-12 col-sm-8 col-md-6\">
\t\t\t<h3>{{page.header.videoLinkTitle}}</h3>
\t\t\t<p>{{page.header.videoLinkTitle}} ondersteunt geen embedded video. Als je toch {{page.header.title}} wilt bekijken dan moet je deze website verlaten.</p>
\t\t\t<a class=\"werkItemFocus-playItemLinkButton button-chevron-right\" href=\"{{ page.header.videoLink}}\" alt=\"{{page.header.title}} op {{page.header.videoLinkTitle}}\" target=\"_blank\">Ga naar de video <span class=\"ion-chevron-right\" id=\"right1\"></span><span class=\"ion-chevron-right\" id=\"right2\"></span></a>
\t\t\t<div class=\"werkItemFocus-playBackButton\" id=\"PlayItemLink\"><span class=\"ion-close\"></span></div>
\t\t</div>
\t</div>
</div>
{% endif %}

{% endblock %}
", "werkfocus.html.twig", "/Users/bram/Documents/Websites/Bram van Dam/Bram van Dam/user/themes/bramvandam/templates/werkfocus.html.twig");
    }
}
