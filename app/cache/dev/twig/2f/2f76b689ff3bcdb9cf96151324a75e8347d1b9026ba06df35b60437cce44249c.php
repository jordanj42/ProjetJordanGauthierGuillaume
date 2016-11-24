<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_621e376c80d5040940c3b05c31d0d5d65d1a794034d39f7a37e403d58646c3b4 extends Twig_Template
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
        $__internal_61ba2131647ff8147adec91263e57560ec9d6b76f0bac1e7e80af04e61bb4cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ba2131647ff8147adec91263e57560ec9d6b76f0bac1e7e80af04e61bb4cbd->enter($__internal_61ba2131647ff8147adec91263e57560ec9d6b76f0bac1e7e80af04e61bb4cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61ba2131647ff8147adec91263e57560ec9d6b76f0bac1e7e80af04e61bb4cbd->leave($__internal_61ba2131647ff8147adec91263e57560ec9d6b76f0bac1e7e80af04e61bb4cbd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8ee1f579d02444a6109f484d5e8f2a4325d5ae4de7f7cdf86ebbc6778846bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ee1f579d02444a6109f484d5e8f2a4325d5ae4de7f7cdf86ebbc6778846bd0->enter($__internal_a8ee1f579d02444a6109f484d5e8f2a4325d5ae4de7f7cdf86ebbc6778846bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a8ee1f579d02444a6109f484d5e8f2a4325d5ae4de7f7cdf86ebbc6778846bd0->leave($__internal_a8ee1f579d02444a6109f484d5e8f2a4325d5ae4de7f7cdf86ebbc6778846bd0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee9db705885a7d6ff6daec2cb58028b0c00418dcb8c33469e76eb545fb96c112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9db705885a7d6ff6daec2cb58028b0c00418dcb8c33469e76eb545fb96c112->enter($__internal_ee9db705885a7d6ff6daec2cb58028b0c00418dcb8c33469e76eb545fb96c112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ee9db705885a7d6ff6daec2cb58028b0c00418dcb8c33469e76eb545fb96c112->leave($__internal_ee9db705885a7d6ff6daec2cb58028b0c00418dcb8c33469e76eb545fb96c112_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cac81cff7089f41f487af491c666c7c84c570258d52be84dcf99b4effee1da47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac81cff7089f41f487af491c666c7c84c570258d52be84dcf99b4effee1da47->enter($__internal_cac81cff7089f41f487af491c666c7c84c570258d52be84dcf99b4effee1da47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cac81cff7089f41f487af491c666c7c84c570258d52be84dcf99b4effee1da47->leave($__internal_cac81cff7089f41f487af491c666c7c84c570258d52be84dcf99b4effee1da47_prof);

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
