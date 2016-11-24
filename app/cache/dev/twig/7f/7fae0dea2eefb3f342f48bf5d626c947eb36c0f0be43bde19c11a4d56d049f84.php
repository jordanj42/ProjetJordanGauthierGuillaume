<?php

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_91c6e382ffb74faf3743d0a0c9ef1c72e7268b6fcdd9ba020a03c225d0cea8a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/7f/7fae0dea2eefb3f342f48bf5d626c947eb36c0f0be43bde19c11a4d56d049f84.php
        $__internal_006bd121ef1bb76e442673863441c5b4cdf8166ca542d74b72fc5e75df4a2687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_006bd121ef1bb76e442673863441c5b4cdf8166ca542d74b72fc5e75df4a2687->enter($__internal_006bd121ef1bb76e442673863441c5b4cdf8166ca542d74b72fc5e75df4a2687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_006bd121ef1bb76e442673863441c5b4cdf8166ca542d74b72fc5e75df4a2687->leave($__internal_006bd121ef1bb76e442673863441c5b4cdf8166ca542d74b72fc5e75df4a2687_prof);
=======
        $__internal_ee048e9bfad9636f60b3b7f0252fc52d8db48e471069749f3b1515edf0b52377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee048e9bfad9636f60b3b7f0252fc52d8db48e471069749f3b1515edf0b52377->enter($__internal_ee048e9bfad9636f60b3b7f0252fc52d8db48e471069749f3b1515edf0b52377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee048e9bfad9636f60b3b7f0252fc52d8db48e471069749f3b1515edf0b52377->leave($__internal_ee048e9bfad9636f60b3b7f0252fc52d8db48e471069749f3b1515edf0b52377_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/b5/b50ab7abd3cb2c816f1a2e0080c4508c253c8ad6aa3e6196a9097c3135640f68.php

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/7f/7fae0dea2eefb3f342f48bf5d626c947eb36c0f0be43bde19c11a4d56d049f84.php
        $__internal_4c1cfca559232be79900ff6c8aca757c21b6ec7a62e6669f613eec217b206a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1cfca559232be79900ff6c8aca757c21b6ec7a62e6669f613eec217b206a98->enter($__internal_4c1cfca559232be79900ff6c8aca757c21b6ec7a62e6669f613eec217b206a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
=======
        $__internal_3e78c5175555490e10442a3b82dda45575eb72a7eb24e6d2a8ec816c20a58e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e78c5175555490e10442a3b82dda45575eb72a7eb24e6d2a8ec816c20a58e5d->enter($__internal_3e78c5175555490e10442a3b82dda45575eb72a7eb24e6d2a8ec816c20a58e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/b5/b50ab7abd3cb2c816f1a2e0080c4508c253c8ad6aa3e6196a9097c3135640f68.php

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", array(), false);
        echo "

    <div id=\"summary\">
        ";
        // line 7
        $this->displayBlock('summary', $context, $blocks);
        // line 42
        echo "    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    ";
        // line 48
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
                    ";
        // line 49
        $this->displayBlock('panel', $context, $blocks);
        // line 50
        echo "                </div>
            </div>

            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" class=\"visible-small\" onclick=\"Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded'); return false;\">
                            <span class=\"icon\">";
        // line 57
        echo twig_include($this->env, $context, "@WebProfiler/Icon/menu.svg");
        echo "</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search", array("limit" => 10));
        echo "\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", twig_array_merge(array("token" => "latest"), $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "all", array()))), "html", null, true);
        echo "\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" ";
        // line 63
        if ((array_key_exists("tokens", $context) || array_key_exists("about", $context))) {
            echo "data-toggle-initial=\"display\"";
        }
        echo ">
                            ";
        // line 64
        echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
        echo " <span class=\"hidden-small\">Search</span>
                        </a>

                        ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_bar", $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "all", array())));
        echo "
                    </div>
                </div>

                ";
        // line 71
        if (array_key_exists("templates", $context)) {
            // line 72
            echo "                    <ul id=\"menu-profiler\">
                        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 74
                echo "                            ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "renderBlock", array(0 => "menu", 1 => array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"), "profiler_markup_version" => (isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")))), "method"), "html", null, true);
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 75
                echo "                            ";
                if ( !twig_test_empty((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")))) {
                    // line 76
                    echo "                                <li class=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " ";
                    echo ((($context["name"] == (isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")))) ? ("selected") : (""));
                    echo "\">
                                    <a href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => $context["name"])), "html", null, true);
                    echo "\">";
                    echo (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"));
                    echo "</a>
                                </li>
                            ";
                }
                // line 80
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                    </ul>
                ";
        }
        // line 83
        echo "            </div>
        </div>
    </div>
";
        
<<<<<<< HEAD:app/cache/dev/twig/7f/7fae0dea2eefb3f342f48bf5d626c947eb36c0f0be43bde19c11a4d56d049f84.php
        $__internal_4c1cfca559232be79900ff6c8aca757c21b6ec7a62e6669f613eec217b206a98->leave($__internal_4c1cfca559232be79900ff6c8aca757c21b6ec7a62e6669f613eec217b206a98_prof);
=======
        $__internal_3e78c5175555490e10442a3b82dda45575eb72a7eb24e6d2a8ec816c20a58e5d->leave($__internal_3e78c5175555490e10442a3b82dda45575eb72a7eb24e6d2a8ec816c20a58e5d_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/b5/b50ab7abd3cb2c816f1a2e0080c4508c253c8ad6aa3e6196a9097c3135640f68.php

    }

    // line 7
    public function block_summary($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/7f/7fae0dea2eefb3f342f48bf5d626c947eb36c0f0be43bde19c11a4d56d049f84.php
        $__internal_fd032b0f6d102fc18691e09c4a7690bbaaa1c0670855f01003fc20252677f09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd032b0f6d102fc18691e09c4a7690bbaaa1c0670855f01003fc20252677f09d->enter($__internal_fd032b0f6d102fc18691e09c4a7690bbaaa1c0670855f01003fc20252677f09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));
=======
        $__internal_c0effdab340ae98b94002abf7e5553ac6f52aceb804e031647fc66bf46dd1925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0effdab340ae98b94002abf7e5553ac6f52aceb804e031647fc66bf46dd1925->enter($__internal_c0effdab340ae98b94002abf7e5553ac6f52aceb804e031647fc66bf46dd1925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/b5/b50ab7abd3cb2c816f1a2e0080c4508c253c8ad6aa3e6196a9097c3135640f68.php

        // line 8
        echo "            ";
        if (array_key_exists("profile", $context)) {
            // line 9
            echo "                ";
            $context["status_code"] = ((twig_in_filter("request", twig_get_array_keys_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "collectors", array())))) ? ((($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array()), 0)) : (0))) : (0));
            // line 10
            echo "                ";
            $context["css_class"] = ((((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) > 399)) ? ("status-error") : (((((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) > 299)) ? ("status-warning") : ("status-success"))));
            // line 11
            echo "
                <div class=\"status ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["css_class"]) ? $context["css_class"] : $this->getContext($context, "css_class")), "html", null, true);
            echo "\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            ";
            // line 15
            if (twig_in_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "method", array())), array(0 => "GET", 1 => "HEAD"))) {
                // line 16
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 18
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "
                            ";
            }
            // line 20
            echo "                        </h2>

                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>";
            // line 24
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "method", array())), "html", null, true);
            echo "</dd>

                            <dt>HTTP Status</dt>
                            <dd>";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
            echo "</dd>

                            <dt>IP</dt>
                            <dd>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "ip", array()), "html", null, true);
            echo "</dd>

                            <dt>Profiled on</dt>
                            <dd>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "time", array()), "r"), "html", null, true);
            echo "</dd>

                            <dt>Token</dt>
                            <dd>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "token", array()), "html", null, true);
            echo "</dd>
                        </dl>
                    </div>
                </div>
            ";
        }
        // line 41
        echo "        ";
        
<<<<<<< HEAD:app/cache/dev/twig/7f/7fae0dea2eefb3f342f48bf5d626c947eb36c0f0be43bde19c11a4d56d049f84.php
        $__internal_fd032b0f6d102fc18691e09c4a7690bbaaa1c0670855f01003fc20252677f09d->leave($__internal_fd032b0f6d102fc18691e09c4a7690bbaaa1c0670855f01003fc20252677f09d_prof);
=======
        $__internal_c0effdab340ae98b94002abf7e5553ac6f52aceb804e031647fc66bf46dd1925->leave($__internal_c0effdab340ae98b94002abf7e5553ac6f52aceb804e031647fc66bf46dd1925_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/b5/b50ab7abd3cb2c816f1a2e0080c4508c253c8ad6aa3e6196a9097c3135640f68.php

    }

    // line 49
    public function block_panel($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/7f/7fae0dea2eefb3f342f48bf5d626c947eb36c0f0be43bde19c11a4d56d049f84.php
        $__internal_6dc2b2a6114b293441498d6f7c7a6b93983ce36bee670d90f9fc7a7e2dd40277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc2b2a6114b293441498d6f7c7a6b93983ce36bee670d90f9fc7a7e2dd40277->enter($__internal_6dc2b2a6114b293441498d6f7c7a6b93983ce36bee670d90f9fc7a7e2dd40277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6dc2b2a6114b293441498d6f7c7a6b93983ce36bee670d90f9fc7a7e2dd40277->leave($__internal_6dc2b2a6114b293441498d6f7c7a6b93983ce36bee670d90f9fc7a7e2dd40277_prof);
=======
        $__internal_3ef5e1ec977ae7fc472423dc2829153a383d8ea54c83e3df32032d6a502e54a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef5e1ec977ae7fc472423dc2829153a383d8ea54c83e3df32032d6a502e54a1->enter($__internal_3ef5e1ec977ae7fc472423dc2829153a383d8ea54c83e3df32032d6a502e54a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3ef5e1ec977ae7fc472423dc2829153a383d8ea54c83e3df32032d6a502e54a1->leave($__internal_3ef5e1ec977ae7fc472423dc2829153a383d8ea54c83e3df32032d6a502e54a1_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/b5/b50ab7abd3cb2c816f1a2e0080c4508c253c8ad6aa3e6196a9097c3135640f68.php

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 49,  238 => 41,  230 => 36,  224 => 33,  218 => 30,  212 => 27,  206 => 24,  200 => 20,  194 => 18,  186 => 16,  184 => 15,  178 => 12,  175 => 11,  172 => 10,  169 => 9,  166 => 8,  160 => 7,  150 => 83,  146 => 81,  140 => 80,  132 => 77,  125 => 76,  122 => 75,  117 => 74,  113 => 73,  110 => 72,  108 => 71,  101 => 67,  95 => 64,  89 => 63,  84 => 61,  80 => 60,  74 => 57,  65 => 50,  63 => 49,  59 => 48,  51 => 42,  49 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block body %}
    {{ include('@WebProfiler/Profiler/header.html.twig', with_context = false) }}

    <div id=\"summary\">
        {% block summary %}
            {% if profile is defined %}
                {% set status_code = ('request' in profile.collectors|keys) ? profile.getcollector('request').statuscode|default(0) : 0 %}
                {% set css_class = status_code > 399 ? 'status-error' : status_code > 299 ? 'status-warning' : 'status-success' %}

                <div class=\"status {{ css_class }}\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            {% if profile.method|upper in ['GET', 'HEAD'] %}
                                <a href=\"{{ profile.url }}\">{{ profile.url }}</a>
                            {% else %}
                                {{ profile.url }}
                            {% endif %}
                        </h2>

                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>{{ profile.method|upper }}</dd>

                            <dt>HTTP Status</dt>
                            <dd>{{ status_code }}</dd>

                            <dt>IP</dt>
                            <dd>{{ profile.ip }}</dd>

                            <dt>Profiled on</dt>
                            <dd>{{ profile.time|date('r') }}</dd>

                            <dt>Token</dt>
                            <dd>{{ profile.token }}</dd>
                        </dl>
                    </div>
                </div>
            {% endif %}
        {% endblock %}
    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    {{ include('@WebProfiler/Profiler/base_js.html.twig') }}
                    {% block panel '' %}
                </div>
            </div>

            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" class=\"visible-small\" onclick=\"Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded'); return false;\">
                            <span class=\"icon\">{{ include('@WebProfiler/Icon/menu.svg') }}</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"{{ path('_profiler_search', { limit: 10 }) }}\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"{{ path('_profiler', { token: 'latest' }|merge(request.query.all)) }}\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" {% if tokens is defined or about is defined %}data-toggle-initial=\"display\"{% endif %}>
                            {{ include('@WebProfiler/Icon/search.svg') }} <span class=\"hidden-small\">Search</span>
                        </a>

                        {{ render(path('_profiler_search_bar', request.query.all)) }}
                    </div>
                </div>

                {% if templates is defined %}
                    <ul id=\"menu-profiler\">
                        {% for name, template in templates %}
                            {% set menu %}{{ template.renderBlock('menu', { collector: profile.getcollector(name), profiler_markup_version: profiler_markup_version }) }}{% endset %}
                            {% if menu is not empty %}
                                <li class=\"{{ name }} {{ name == panel ? 'selected' : '' }}\">
                                    <a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{{ menu|raw }}</a>
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}
";
    }
}
