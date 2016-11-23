<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b57a070a50449bbfe06d654958913801f8ae13c91ebbafbce5da234ae6efaf31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_4ce5ee248d1ca3a5ed34ba622563d32f3302602eba7ee8c3728df1ca23235567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce5ee248d1ca3a5ed34ba622563d32f3302602eba7ee8c3728df1ca23235567->enter($__internal_4ce5ee248d1ca3a5ed34ba622563d32f3302602eba7ee8c3728df1ca23235567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ce5ee248d1ca3a5ed34ba622563d32f3302602eba7ee8c3728df1ca23235567->leave($__internal_4ce5ee248d1ca3a5ed34ba622563d32f3302602eba7ee8c3728df1ca23235567_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_09cd19ca54076723f71089d30ffb60296c27eb1d94099d56fa7b601f1cea3235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09cd19ca54076723f71089d30ffb60296c27eb1d94099d56fa7b601f1cea3235->enter($__internal_09cd19ca54076723f71089d30ffb60296c27eb1d94099d56fa7b601f1cea3235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_09cd19ca54076723f71089d30ffb60296c27eb1d94099d56fa7b601f1cea3235->leave($__internal_09cd19ca54076723f71089d30ffb60296c27eb1d94099d56fa7b601f1cea3235_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d941bb49c4f6842a7f0b41c923d91e55fa0dbf8e421fbcf88055e6ed3cf33582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d941bb49c4f6842a7f0b41c923d91e55fa0dbf8e421fbcf88055e6ed3cf33582->enter($__internal_d941bb49c4f6842a7f0b41c923d91e55fa0dbf8e421fbcf88055e6ed3cf33582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d941bb49c4f6842a7f0b41c923d91e55fa0dbf8e421fbcf88055e6ed3cf33582->leave($__internal_d941bb49c4f6842a7f0b41c923d91e55fa0dbf8e421fbcf88055e6ed3cf33582_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
