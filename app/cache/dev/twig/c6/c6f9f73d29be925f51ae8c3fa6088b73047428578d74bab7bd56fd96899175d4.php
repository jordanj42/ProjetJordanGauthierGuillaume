<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_78368dbf915f2808bdbc0e232aaa5f95b7538ef4b840ebb639fa89ff9d43e504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_bc40a293db797845388ef91cd0ede4893523dba640d026e652ed0ee0cfbe583a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc40a293db797845388ef91cd0ede4893523dba640d026e652ed0ee0cfbe583a->enter($__internal_bc40a293db797845388ef91cd0ede4893523dba640d026e652ed0ee0cfbe583a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc40a293db797845388ef91cd0ede4893523dba640d026e652ed0ee0cfbe583a->leave($__internal_bc40a293db797845388ef91cd0ede4893523dba640d026e652ed0ee0cfbe583a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4dc10e441a44aed43783208c008f980b1322885c21d87b03d2d0e457bca83090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc10e441a44aed43783208c008f980b1322885c21d87b03d2d0e457bca83090->enter($__internal_4dc10e441a44aed43783208c008f980b1322885c21d87b03d2d0e457bca83090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4dc10e441a44aed43783208c008f980b1322885c21d87b03d2d0e457bca83090->leave($__internal_4dc10e441a44aed43783208c008f980b1322885c21d87b03d2d0e457bca83090_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_35eeb1cb0eaec55e6cacf7b7a7b96e8658d09ec7d1d20415626a9bc6fd2ad4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35eeb1cb0eaec55e6cacf7b7a7b96e8658d09ec7d1d20415626a9bc6fd2ad4ea->enter($__internal_35eeb1cb0eaec55e6cacf7b7a7b96e8658d09ec7d1d20415626a9bc6fd2ad4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_35eeb1cb0eaec55e6cacf7b7a7b96e8658d09ec7d1d20415626a9bc6fd2ad4ea->leave($__internal_35eeb1cb0eaec55e6cacf7b7a7b96e8658d09ec7d1d20415626a9bc6fd2ad4ea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d64a011b544fe02d79fbf78297156d7e2d9741b32f338640ffc9bddb45e81311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64a011b544fe02d79fbf78297156d7e2d9741b32f338640ffc9bddb45e81311->enter($__internal_d64a011b544fe02d79fbf78297156d7e2d9741b32f338640ffc9bddb45e81311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d64a011b544fe02d79fbf78297156d7e2d9741b32f338640ffc9bddb45e81311->leave($__internal_d64a011b544fe02d79fbf78297156d7e2d9741b32f338640ffc9bddb45e81311_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
