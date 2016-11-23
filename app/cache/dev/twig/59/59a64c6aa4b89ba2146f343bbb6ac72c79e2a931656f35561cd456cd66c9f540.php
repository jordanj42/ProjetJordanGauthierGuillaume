<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9c9baec1829459c0aaab096ac9e1f76938d73ade9af471dbf35a29113890f2ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4d5ff010adf2f84c8d670bff5c7ac3c9965a618d45c595e8e6c2edfc2041355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d5ff010adf2f84c8d670bff5c7ac3c9965a618d45c595e8e6c2edfc2041355->enter($__internal_f4d5ff010adf2f84c8d670bff5c7ac3c9965a618d45c595e8e6c2edfc2041355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4d5ff010adf2f84c8d670bff5c7ac3c9965a618d45c595e8e6c2edfc2041355->leave($__internal_f4d5ff010adf2f84c8d670bff5c7ac3c9965a618d45c595e8e6c2edfc2041355_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_087c8957a9cbdccb8d5787c997c19a914e94cc8b209d3d3e78bb3dc2e4a11768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087c8957a9cbdccb8d5787c997c19a914e94cc8b209d3d3e78bb3dc2e4a11768->enter($__internal_087c8957a9cbdccb8d5787c997c19a914e94cc8b209d3d3e78bb3dc2e4a11768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_087c8957a9cbdccb8d5787c997c19a914e94cc8b209d3d3e78bb3dc2e4a11768->leave($__internal_087c8957a9cbdccb8d5787c997c19a914e94cc8b209d3d3e78bb3dc2e4a11768_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e2e446221eaeb91c68615ef94ea8cd5ab791f37707d8ab1f250878755e99ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2e446221eaeb91c68615ef94ea8cd5ab791f37707d8ab1f250878755e99ccc->enter($__internal_3e2e446221eaeb91c68615ef94ea8cd5ab791f37707d8ab1f250878755e99ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3e2e446221eaeb91c68615ef94ea8cd5ab791f37707d8ab1f250878755e99ccc->leave($__internal_3e2e446221eaeb91c68615ef94ea8cd5ab791f37707d8ab1f250878755e99ccc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2b2e670730782449811e445470734b0a0aa76a354e74ad5cc607a8934e12490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b2e670730782449811e445470734b0a0aa76a354e74ad5cc607a8934e12490->enter($__internal_c2b2e670730782449811e445470734b0a0aa76a354e74ad5cc607a8934e12490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c2b2e670730782449811e445470734b0a0aa76a354e74ad5cc607a8934e12490->leave($__internal_c2b2e670730782449811e445470734b0a0aa76a354e74ad5cc607a8934e12490_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
