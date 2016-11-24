<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_e52146526d2eac8811e522034b0865ce3c3d2457b495d20307990a37b62e0369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/memory.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/9e/9e84fb53f1767a81e2bad824c53f92ed358ec92d7373a3b1fe2cee1c3ad31df3.php
        $__internal_ff105a01f528aff006fbfe7f4859085833593b8e5c82c92e76193ff4a500d009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff105a01f528aff006fbfe7f4859085833593b8e5c82c92e76193ff4a500d009->enter($__internal_ff105a01f528aff006fbfe7f4859085833593b8e5c82c92e76193ff4a500d009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff105a01f528aff006fbfe7f4859085833593b8e5c82c92e76193ff4a500d009->leave($__internal_ff105a01f528aff006fbfe7f4859085833593b8e5c82c92e76193ff4a500d009_prof);
=======
        $__internal_3c49b0e81bc93ca94d87c20ae3543e446d2a62cfb3645da0e314293fc3f02bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c49b0e81bc93ca94d87c20ae3543e446d2a62cfb3645da0e314293fc3f02bcf->enter($__internal_3c49b0e81bc93ca94d87c20ae3543e446d2a62cfb3645da0e314293fc3f02bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c49b0e81bc93ca94d87c20ae3543e446d2a62cfb3645da0e314293fc3f02bcf->leave($__internal_3c49b0e81bc93ca94d87c20ae3543e446d2a62cfb3645da0e314293fc3f02bcf_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/60/600b9eb6ab5ff8ecc5e448a41851a004edbcc6e4364e3d9207a2b6732706a6e2.php

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/9e/9e84fb53f1767a81e2bad824c53f92ed358ec92d7373a3b1fe2cee1c3ad31df3.php
        $__internal_d46e942d8448b4f1bc9546945fc192b60089ce556aa798b741f3cbdcd2d85058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46e942d8448b4f1bc9546945fc192b60089ce556aa798b741f3cbdcd2d85058->enter($__internal_d46e942d8448b4f1bc9546945fc192b60089ce556aa798b741f3cbdcd2d85058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
=======
        $__internal_1233f8454c6a496034bc614ce4baafa71b7bc5d95ebd62e5e74b4d3141629d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1233f8454c6a496034bc614ce4baafa71b7bc5d95ebd62e5e74b4d3141629d99->enter($__internal_1233f8454c6a496034bc614ce4baafa71b7bc5d95ebd62e5e74b4d3141629d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/60/600b9eb6ab5ff8ecc5e448a41851a004edbcc6e4364e3d9207a2b6732706a6e2.php

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        $context["status_color"] = ((((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024) > 50)) ? ("yellow") : (""));
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/memory.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">MB</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) ==  -1)) ? ("Unlimited") : (sprintf("%.0f MB", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) / 1024) / 1024)))), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    ";
        // line 23
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "name" => "time", "status" => (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color"))));
        echo "
";
        
<<<<<<< HEAD:app/cache/dev/twig/9e/9e84fb53f1767a81e2bad824c53f92ed358ec92d7373a3b1fe2cee1c3ad31df3.php
        $__internal_d46e942d8448b4f1bc9546945fc192b60089ce556aa798b741f3cbdcd2d85058->leave($__internal_d46e942d8448b4f1bc9546945fc192b60089ce556aa798b741f3cbdcd2d85058_prof);
=======
        $__internal_1233f8454c6a496034bc614ce4baafa71b7bc5d95ebd62e5e74b4d3141629d99->leave($__internal_1233f8454c6a496034bc614ce4baafa71b7bc5d95ebd62e5e74b4d3141629d99_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/60/600b9eb6ab5ff8ecc5e448a41851a004edbcc6e4364e3d9207a2b6732706a6e2.php

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  80 => 22,  74 => 19,  66 => 14,  62 => 12,  60 => 11,  57 => 10,  51 => 7,  46 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {% set status_color = (collector.memory / 1024 / 1024) > 50 ? 'yellow' : '' %}
        {{ include('@WebProfiler/Icon/memory.svg') }}
        <span class=\"sf-toolbar-value\">{{ '%.1f'|format(collector.memory / 1024 / 1024) }}</span>
        <span class=\"sf-toolbar-label\">MB</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>{{ collector.memoryLimit == -1 ? 'Unlimited' : '%.0f MB'|format(collector.memoryLimit / 1024 / 1024) }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, name: 'time', status: status_color }) }}
{% endblock %}
";
    }
}
