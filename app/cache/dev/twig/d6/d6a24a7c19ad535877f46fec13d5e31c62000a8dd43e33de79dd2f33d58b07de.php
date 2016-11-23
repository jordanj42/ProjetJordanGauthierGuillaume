<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5d27a648eae9b1df303d56d91069e56844b3bec5f5f5095d138fb165bcb661ef extends Twig_Template
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
        $__internal_c233951ec8e07df322acca48964c46ca56114049daf4aedfb6338d335422fa20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c233951ec8e07df322acca48964c46ca56114049daf4aedfb6338d335422fa20->enter($__internal_c233951ec8e07df322acca48964c46ca56114049daf4aedfb6338d335422fa20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c233951ec8e07df322acca48964c46ca56114049daf4aedfb6338d335422fa20->leave($__internal_c233951ec8e07df322acca48964c46ca56114049daf4aedfb6338d335422fa20_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_80a6658e7171044e20fc9fe2782a70239a7f11dd8c4b2b5bfdb182aa764cf327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a6658e7171044e20fc9fe2782a70239a7f11dd8c4b2b5bfdb182aa764cf327->enter($__internal_80a6658e7171044e20fc9fe2782a70239a7f11dd8c4b2b5bfdb182aa764cf327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_80a6658e7171044e20fc9fe2782a70239a7f11dd8c4b2b5bfdb182aa764cf327->leave($__internal_80a6658e7171044e20fc9fe2782a70239a7f11dd8c4b2b5bfdb182aa764cf327_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_35f1f5017e47d7d210622237800bb05cbc32ae627c3f2f8c422ac4518b5f159c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f1f5017e47d7d210622237800bb05cbc32ae627c3f2f8c422ac4518b5f159c->enter($__internal_35f1f5017e47d7d210622237800bb05cbc32ae627c3f2f8c422ac4518b5f159c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_35f1f5017e47d7d210622237800bb05cbc32ae627c3f2f8c422ac4518b5f159c->leave($__internal_35f1f5017e47d7d210622237800bb05cbc32ae627c3f2f8c422ac4518b5f159c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2161fecc9eb771744aea4d6d8bf28dfd4906711a43b732da0c5f2ba0c20732b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2161fecc9eb771744aea4d6d8bf28dfd4906711a43b732da0c5f2ba0c20732b->enter($__internal_c2161fecc9eb771744aea4d6d8bf28dfd4906711a43b732da0c5f2ba0c20732b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c2161fecc9eb771744aea4d6d8bf28dfd4906711a43b732da0c5f2ba0c20732b->leave($__internal_c2161fecc9eb771744aea4d6d8bf28dfd4906711a43b732da0c5f2ba0c20732b_prof);

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
