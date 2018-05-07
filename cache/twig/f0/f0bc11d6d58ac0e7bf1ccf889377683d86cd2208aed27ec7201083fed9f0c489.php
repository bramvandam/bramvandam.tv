<?php

/* partials/base.html.twig */
class __TwigTemplate_b39919dcf19deb0168e66b0490429cd9d84abd8a59c97a1a81878d92188e8669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "    </head>

      <body id=\"topWindow\">
        <div class=\"mainContent mainContentHide\"></div>
        ";
        // line 41
        echo "        ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 41)->display($context);
        // line 42
        echo "

            ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "

        <div class=\"footer\">
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-xs-2 col-md-2 col-xs-offset-1 col-md-offset-2\">
                    <div class=\"horizontal-rule\"></div>
                </div>
                <div class=\"col-xs-6 col-md-4 socialIcons\">
                  <a class=\"socialIcon ion-social-facebook\" href=\"https://www.facebook.com/iBramvandam\"></a>
                  <a class=\"socialIcon ion-social-instagram\" href=\"https://www.instagram.com/ibramvandam/\"></a>
                  <a class=\"socialIcon ion-social-linkedin\" href=\"https://nl.linkedin.com/in/bram-van-dam-16927632\"></a>
                </div>
                <div class=\"col-xs-2 col-md-2\">
                  <div class=\"horizontal-rule\"></div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-xs-12\">
                  <ul class=\"footer-navigation\">
                      ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 66
            echo "                      ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 67
                echo "                      ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 68
                echo "                      <li class=\"";
                echo ($context["current_page"] ?? null);
                echo " menuItem\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a></li>
                      ";
            }
            // line 70
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                  </ul>
                  <svg class=\"footer-logo\" id=\"Layer_2\" data-name=\"Layer 2\" viewBox=\"0 0 70 70\" xmlns=\"http://www.w3.org/2000/svg\" ><defs></defs><title>logo</title><g id=\"Scissors\"><path class=\"cls-1\" d=\"M43.55,40.67a2.84,2.84,0,1,0,2.82,2.88A2.93,2.93,0,0,0,43.55,40.67Z\"/><path class=\"cls-1\" d=\"M35,35a1.47,1.47,0,0,0-1.43,1.42,1.41,1.41,0,0,0,2.82,0A1.48,1.48,0,0,0,35,35Z\"/><path class=\"cls-1\" d=\"M26.49,40.67a2.84,2.84,0,1,0,2.76,2.83A2.92,2.92,0,0,0,26.49,40.67Z\"/><path class=\"cls-1\" d=\"M34.48,0L0,34.48,35.52,70,70,35.52ZM46.28,19.8a7.29,7.29,0,0,1,1.36,3c0.28,1.06.46,2.14,0.65,3.22a1.86,1.86,0,0,1-.51,1.52,43,43,0,0,1-5.32,5.39c-0.57.49-1.09,1-1.65,1.54s-0.77.48-1.21,0c-1.11-1.17-2.17-2.38-3.37-3.71ZM43.65,50.2A6.78,6.78,0,0,1,37,44.79,8.89,8.89,0,0,1,37.07,42a1.31,1.31,0,0,0-.56-1.52c-0.5-.32-1-0.68-1.53-1.09L33.1,40.76a1,1,0,0,0-.19,1.2,6.45,6.45,0,0,1-.57,4.7,6.74,6.74,0,0,1-10.5,1.74,6.89,6.89,0,0,1-1.38-7.93,6.68,6.68,0,0,1,8.47-3.17l0.88,0.36,1.32-1.43c-0.48-.47-0.88-0.89-1.31-1.29-1.91-1.77-3.85-3.52-5.74-5.31-0.6-.57-1.07-1.27-1.66-1.84a2.61,2.61,0,0,1-.72-2.5,16.28,16.28,0,0,1,1.85-5.46A15.15,15.15,0,0,1,25.69,22c0.71,0.68,1.33,1.46,2,2.19l2.09,2.26c0.7,0.75,1.42,1.49,2.12,2.24s1.33,1.46,2,2.19,1.37,1.53,2.07,2.28,1.37,1.43,2,2.15,1.37,1.52,2.09,2.31c0.31-.11.56-0.19,0.81-0.28A6.7,6.7,0,1,1,43.65,50.2Z\"/></g>
                  </svg>
                  <div class=\"footer-text\">
                    <span>© 2016 - Code handwritten by... me! With<br>
                      some delicious <a href=\"https://getgrav.org/\">Grav</a> and <a href=\"https://getbootstrap.com/\">Bootstrap</a> sauce!</span>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </body>
    ";
        // line 84
        $this->displayBlock('bottom', $context, $blocks);
        // line 85
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 98
        echo "</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "description", array())) {
            // line 9
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "description", array());
            echo "\">
        ";
        } else {
            // line 11
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute(($context["site"] ?? null), "description", array());
            echo "\">
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute(($context["header"] ?? null), "robots", array())) {
            // line 14
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "robots", array());
            echo "\">
        ";
        }
        // line 16
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\">

        <title>";
        // line 18
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>

        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "        ";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "            ";
        // line 22
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/bootstrap.min.css", 1 => 202), "method");
        // line 23
        echo "
        ";
        // line 25
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/bootstrap-custom.css", 1 => 201), "method");
        // line 26
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/bramvandam.css", 1 => 200), "method");
        // line 27
        echo "
        ";
        // line 29
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addcss", array(0 => "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700"), "method");
        // line 30
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addcss", array(0 => "https://fonts.googleapis.com/css?family=Merriweather:300,400,700"), "method");
        // line 31
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addcss", array(0 => "http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "method");
        // line 32
        echo "
            ";
        // line 33
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
        ";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
    }

    // line 84
    public function block_bottom($context, array $blocks = array())
    {
    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        // line 86
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js", 1 => 102), "method");
        // line 87
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "http://code.jquery.com/ui/1.12.1/jquery-ui.min.js", 1 => 101), "method");
        // line 88
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/bootstrap.min.js", 1 => 100), "method");
        // line 89
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/bramvandam.js"), "method");
        // line 90
        echo "
        ";
        // line 91
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 92
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "method");
            // line 93
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 94
            echo "        ";
        }
        // line 95
        echo "
        ";
        // line 96
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 96,  248 => 95,  245 => 94,  242 => 93,  239 => 92,  237 => 91,  234 => 90,  231 => 89,  228 => 88,  225 => 87,  222 => 86,  219 => 85,  214 => 84,  209 => 44,  203 => 33,  200 => 32,  197 => 31,  194 => 30,  191 => 29,  188 => 27,  185 => 26,  182 => 25,  179 => 23,  176 => 22,  174 => 21,  171 => 20,  167 => 35,  165 => 20,  156 => 18,  150 => 16,  144 => 14,  141 => 13,  135 => 11,  129 => 9,  127 => 8,  122 => 5,  119 => 4,  114 => 98,  111 => 85,  109 => 84,  94 => 71,  88 => 70,  78 => 68,  75 => 67,  72 => 66,  68 => 65,  46 => 45,  44 => 44,  40 => 42,  37 => 41,  31 => 36,  29 => 4,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        {% block head %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {% if header.description %}
        <meta name=\"description\" content=\"{{ header.description }}\">
        {% else %}
        <meta name=\"description\" content=\"{{ site.description }}\">
        {% endif %}
        {% if header.robots %}
        <meta name=\"robots\" content=\"{{ header.robots }}\">
        {% endif %}
        <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\">

        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>

        {% block stylesheets %}
            {# Bootstrap core CSS #}
            {% do assets.add('theme://css/bootstrap.min.css',202) %}

        {# Custom styles #}
            {% do assets.add('theme://css/bootstrap-custom.css',201) %}
            {% do assets.add('theme://css/bramvandam.css',200) %}

        {# Custom Fonts #}
            {% do assets.addcss('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700') %}
            {% do assets.addcss('https://fonts.googleapis.com/css?family=Merriweather:300,400,700') %}
            {% do assets.addcss('http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') %}

            {{ assets.css() }}
        {% endblock %}
        {% endblock head %}
    </head>

      <body id=\"topWindow\">
        <div class=\"mainContent mainContentHide\"></div>
        {# include the header + navigation #}
        {% include 'partials/header.html.twig' %}


            {% block content %}{% endblock %}


        <div class=\"footer\">
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-xs-2 col-md-2 col-xs-offset-1 col-md-offset-2\">
                    <div class=\"horizontal-rule\"></div>
                </div>
                <div class=\"col-xs-6 col-md-4 socialIcons\">
                  <a class=\"socialIcon ion-social-facebook\" href=\"https://www.facebook.com/iBramvandam\"></a>
                  <a class=\"socialIcon ion-social-instagram\" href=\"https://www.instagram.com/ibramvandam/\"></a>
                  <a class=\"socialIcon ion-social-linkedin\" href=\"https://nl.linkedin.com/in/bram-van-dam-16927632\"></a>
                </div>
                <div class=\"col-xs-2 col-md-2\">
                  <div class=\"horizontal-rule\"></div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-xs-12\">
                  <ul class=\"footer-navigation\">
                      {% for page in pages.children %}
                      {% if page.visible %}
                      {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                      <li class=\"{{ current_page }} menuItem\"><a href=\"{{ page.url }}\">{{ page.menu }}</a></li>
                      {% endif %}
                      {% endfor %}
                  </ul>
                  <svg class=\"footer-logo\" id=\"Layer_2\" data-name=\"Layer 2\" viewBox=\"0 0 70 70\" xmlns=\"http://www.w3.org/2000/svg\" ><defs></defs><title>logo</title><g id=\"Scissors\"><path class=\"cls-1\" d=\"M43.55,40.67a2.84,2.84,0,1,0,2.82,2.88A2.93,2.93,0,0,0,43.55,40.67Z\"/><path class=\"cls-1\" d=\"M35,35a1.47,1.47,0,0,0-1.43,1.42,1.41,1.41,0,0,0,2.82,0A1.48,1.48,0,0,0,35,35Z\"/><path class=\"cls-1\" d=\"M26.49,40.67a2.84,2.84,0,1,0,2.76,2.83A2.92,2.92,0,0,0,26.49,40.67Z\"/><path class=\"cls-1\" d=\"M34.48,0L0,34.48,35.52,70,70,35.52ZM46.28,19.8a7.29,7.29,0,0,1,1.36,3c0.28,1.06.46,2.14,0.65,3.22a1.86,1.86,0,0,1-.51,1.52,43,43,0,0,1-5.32,5.39c-0.57.49-1.09,1-1.65,1.54s-0.77.48-1.21,0c-1.11-1.17-2.17-2.38-3.37-3.71ZM43.65,50.2A6.78,6.78,0,0,1,37,44.79,8.89,8.89,0,0,1,37.07,42a1.31,1.31,0,0,0-.56-1.52c-0.5-.32-1-0.68-1.53-1.09L33.1,40.76a1,1,0,0,0-.19,1.2,6.45,6.45,0,0,1-.57,4.7,6.74,6.74,0,0,1-10.5,1.74,6.89,6.89,0,0,1-1.38-7.93,6.68,6.68,0,0,1,8.47-3.17l0.88,0.36,1.32-1.43c-0.48-.47-0.88-0.89-1.31-1.29-1.91-1.77-3.85-3.52-5.74-5.31-0.6-.57-1.07-1.27-1.66-1.84a2.61,2.61,0,0,1-.72-2.5,16.28,16.28,0,0,1,1.85-5.46A15.15,15.15,0,0,1,25.69,22c0.71,0.68,1.33,1.46,2,2.19l2.09,2.26c0.7,0.75,1.42,1.49,2.12,2.24s1.33,1.46,2,2.19,1.37,1.53,2.07,2.28,1.37,1.43,2,2.15,1.37,1.52,2.09,2.31c0.31-.11.56-0.19,0.81-0.28A6.7,6.7,0,1,1,43.65,50.2Z\"/></g>
                  </svg>
                  <div class=\"footer-text\">
                    <span>© 2016 - Code handwritten by... me! With<br>
                      some delicious <a href=\"https://getgrav.org/\">Grav</a> and <a href=\"https://getbootstrap.com/\">Bootstrap</a> sauce!</span>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </body>
    {% block bottom %}{% endblock %}
    {% block javascripts %}
        {% do assets.add('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', 102) %}
        {% do assets.add('http://code.jquery.com/ui/1.12.1/jquery-ui.min.js', 101)%}
        {% do assets.add('theme://js/bootstrap.min.js', 100) %}
        {% do assets.add('theme://js/bramvandam.js') %}

        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.add('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') %}
            {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}
        {% endif %}

        {{ assets.js() }}
    {% endblock %}
</html>
", "partials/base.html.twig", "/Users/bram/Documents/Websites/Bram van Dam/Bram van Dam/user/themes/bramvandam/templates/partials/base.html.twig");
    }
}
