<?php

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_260bf9d5ff818bdc314a9fd9d1cfbbb94cfc51eb2655f3c52383f4716d1841d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/1a/1a3100ad9f598f51c0677b7969c62a4383a441dc07fcc1161356b66c75171a6c.php
        $__internal_ce2597f01ed494f8a124ccf501b9f70efd984f63f13c80176aeb26744bbce3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2597f01ed494f8a124ccf501b9f70efd984f63f13c80176aeb26744bbce3c8->enter($__internal_ce2597f01ed494f8a124ccf501b9f70efd984f63f13c80176aeb26744bbce3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce2597f01ed494f8a124ccf501b9f70efd984f63f13c80176aeb26744bbce3c8->leave($__internal_ce2597f01ed494f8a124ccf501b9f70efd984f63f13c80176aeb26744bbce3c8_prof);
=======
        $__internal_06961fef91f58a815564107422629f4b43f7e883fafd96910b823eb910b8309a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06961fef91f58a815564107422629f4b43f7e883fafd96910b823eb910b8309a->enter($__internal_06961fef91f58a815564107422629f4b43f7e883fafd96910b823eb910b8309a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06961fef91f58a815564107422629f4b43f7e883fafd96910b823eb910b8309a->leave($__internal_06961fef91f58a815564107422629f4b43f7e883fafd96910b823eb910b8309a_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/b6/b633b01bfe74fa6d5449c43d9d6396c7d0a1bd96083ae70aa04bb8f470b755eb.php

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/1a/1a3100ad9f598f51c0677b7969c62a4383a441dc07fcc1161356b66c75171a6c.php
        $__internal_858ce2a3b9b5defa023512fbd73628bbf1a78afc4d9aa97672188ba25f7da225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858ce2a3b9b5defa023512fbd73628bbf1a78afc4d9aa97672188ba25f7da225->enter($__internal_858ce2a3b9b5defa023512fbd73628bbf1a78afc4d9aa97672188ba25f7da225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
=======
        $__internal_b2219f6d95c4792044926f4ff7069d156c01a5af6596479d430e5c834a72c215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2219f6d95c4792044926f4ff7069d156c01a5af6596479d430e5c834a72c215->enter($__internal_b2219f6d95c4792044926f4ff7069d156c01a5af6596479d430e5c834a72c215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/b6/b633b01bfe74fa6d5449c43d9d6396c7d0a1bd96083ae70aa04bb8f470b755eb.php

        // line 4
        echo "    ";
        $context["time"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array())) ? (sprintf("%0.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()))) : ("n/a"));
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url"))));
        echo "
";
        
<<<<<<< HEAD:app/cache/dev/twig/1a/1a3100ad9f598f51c0677b7969c62a4383a441dc07fcc1161356b66c75171a6c.php
        $__internal_858ce2a3b9b5defa023512fbd73628bbf1a78afc4d9aa97672188ba25f7da225->leave($__internal_858ce2a3b9b5defa023512fbd73628bbf1a78afc4d9aa97672188ba25f7da225_prof);
=======
        $__internal_b2219f6d95c4792044926f4ff7069d156c01a5af6596479d430e5c834a72c215->leave($__internal_b2219f6d95c4792044926f4ff7069d156c01a5af6596479d430e5c834a72c215_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/b6/b633b01bfe74fa6d5449c43d9d6396c7d0a1bd96083ae70aa04bb8f470b755eb.php

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/1a/1a3100ad9f598f51c0677b7969c62a4383a441dc07fcc1161356b66c75171a6c.php
        $__internal_f97e9dbc26e166928a94d767cbebf8d581bbfb62f5777d060701bedb5a0de3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97e9dbc26e166928a94d767cbebf8d581bbfb62f5777d060701bedb5a0de3c8->enter($__internal_f97e9dbc26e166928a94d767cbebf8d581bbfb62f5777d060701bedb5a0de3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
=======
        $__internal_924bf6184b198d4079d76a87c661d6e16a482a9e09f5f17173be400bcd7e6256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924bf6184b198d4079d76a87c661d6e16a482a9e09f5f17173be400bcd7e6256->enter($__internal_924bf6184b198d4079d76a87c661d6e16a482a9e09f5f17173be400bcd7e6256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/b6/b633b01bfe74fa6d5449c43d9d6396c7d0a1bd96083ae70aa04bb8f470b755eb.php

        // line 34
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 35
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "</span>
        <strong>Twig</strong>
    </span>
";
        
<<<<<<< HEAD:app/cache/dev/twig/1a/1a3100ad9f598f51c0677b7969c62a4383a441dc07fcc1161356b66c75171a6c.php
        $__internal_f97e9dbc26e166928a94d767cbebf8d581bbfb62f5777d060701bedb5a0de3c8->leave($__internal_f97e9dbc26e166928a94d767cbebf8d581bbfb62f5777d060701bedb5a0de3c8_prof);
=======
        $__internal_924bf6184b198d4079d76a87c661d6e16a482a9e09f5f17173be400bcd7e6256->leave($__internal_924bf6184b198d4079d76a87c661d6e16a482a9e09f5f17173be400bcd7e6256_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/b6/b633b01bfe74fa6d5449c43d9d6396c7d0a1bd96083ae70aa04bb8f470b755eb.php

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/1a/1a3100ad9f598f51c0677b7969c62a4383a441dc07fcc1161356b66c75171a6c.php
        $__internal_c5eb856e6368176ca0dffa99add3af6c7772d74bd147449d0e2f53b54a5d7380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5eb856e6368176ca0dffa99add3af6c7772d74bd147449d0e2f53b54a5d7380->enter($__internal_c5eb856e6368176ca0dffa99add3af6c7772d74bd147449d0e2f53b54a5d7380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
=======
        $__internal_01800165184dd3da3030a3ed39fea4b9e9f507983946661975c6a37c2c30ff22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01800165184dd3da3030a3ed39fea4b9e9f507983946661975c6a37c2c30ff22->enter($__internal_01800165184dd3da3030a3ed39fea4b9e9f507983946661975c6a37c2c30ff22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/b6/b633b01bfe74fa6d5449c43d9d6396c7d0a1bd96083ae70aa04bb8f470b755eb.php

        // line 41
        echo "    ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()) == 0)) {
            // line 42
            echo "        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    ";
        } else {
            // line 48
            echo "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 52
            echo twig_escape_filter($this->env, sprintf("%0.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array())), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array()));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 87
                echo "                <tr>
                    <td>";
                // line 88
                echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                echo "</td>
                    <td class=\"font-normal\">";
                // line 89
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "htmlcallgraph", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        
<<<<<<< HEAD:app/cache/dev/twig/1a/1a3100ad9f598f51c0677b7969c62a4383a441dc07fcc1161356b66c75171a6c.php
        $__internal_c5eb856e6368176ca0dffa99add3af6c7772d74bd147449d0e2f53b54a5d7380->leave($__internal_c5eb856e6368176ca0dffa99add3af6c7772d74bd147449d0e2f53b54a5d7380_prof);
=======
        $__internal_01800165184dd3da3030a3ed39fea4b9e9f507983946661975c6a37c2c30ff22->leave($__internal_01800165184dd3da3030a3ed39fea4b9e9f507983946661975c6a37c2c30ff22_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/b6/b633b01bfe74fa6d5449c43d9d6396c7d0a1bd96083ae70aa04bb8f470b755eb.php

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 98,  216 => 92,  207 => 89,  203 => 88,  200 => 87,  196 => 86,  174 => 67,  166 => 62,  158 => 57,  150 => 52,  144 => 48,  136 => 42,  133 => 41,  127 => 40,  116 => 35,  113 => 34,  107 => 33,  98 => 30,  95 => 29,  89 => 26,  82 => 22,  75 => 18,  68 => 14,  64 => 12,  62 => 11,  59 => 10,  53 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set time = collector.templatecount ? '%0.0f'|format(collector.time) : 'n/a' %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/twig.svg') }}
        <span class=\"sf-toolbar-value\">{{ time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>{{ time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.templatecount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.blockcount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.macrocount }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/twig.svg') }}</span>
        <strong>Twig</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.templatecount == 0 %}
        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    {% else %}
        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.0f'|format(collector.time) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.templatecount }}</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.blockcount }}</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.macrocount }}</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            {% for template, count in collector.templates %}
                <tr>
                    <td>{{ template }}</td>
                    <td class=\"font-normal\">{{ count }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            {{ collector.htmlcallgraph }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
