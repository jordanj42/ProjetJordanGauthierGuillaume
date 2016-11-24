<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eeb3d85f88c808a8a7ad4f8bec754ad9a270c9249590c52b9ebb002f430b73a7 extends Twig_Template
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
        $__internal_85893314118f020349109cd35ea597b30a1ee43792141aee02683fe98c16fc84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85893314118f020349109cd35ea597b30a1ee43792141aee02683fe98c16fc84->enter($__internal_85893314118f020349109cd35ea597b30a1ee43792141aee02683fe98c16fc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85893314118f020349109cd35ea597b30a1ee43792141aee02683fe98c16fc84->leave($__internal_85893314118f020349109cd35ea597b30a1ee43792141aee02683fe98c16fc84_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_115d24dc624e554a4a1a3a26a4ec2b775378b08245d0aebc1e726e3ba2f92bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115d24dc624e554a4a1a3a26a4ec2b775378b08245d0aebc1e726e3ba2f92bf9->enter($__internal_115d24dc624e554a4a1a3a26a4ec2b775378b08245d0aebc1e726e3ba2f92bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_115d24dc624e554a4a1a3a26a4ec2b775378b08245d0aebc1e726e3ba2f92bf9->leave($__internal_115d24dc624e554a4a1a3a26a4ec2b775378b08245d0aebc1e726e3ba2f92bf9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b9fb62cf021f01665146e62c9cbc4d75138785f90eab3e42fdc375737704a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9fb62cf021f01665146e62c9cbc4d75138785f90eab3e42fdc375737704a9b->enter($__internal_8b9fb62cf021f01665146e62c9cbc4d75138785f90eab3e42fdc375737704a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8b9fb62cf021f01665146e62c9cbc4d75138785f90eab3e42fdc375737704a9b->leave($__internal_8b9fb62cf021f01665146e62c9cbc4d75138785f90eab3e42fdc375737704a9b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0625c75ac109566d79c33846ac85b70d303c136d309db15dc63ee79b7546f8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0625c75ac109566d79c33846ac85b70d303c136d309db15dc63ee79b7546f8c3->enter($__internal_0625c75ac109566d79c33846ac85b70d303c136d309db15dc63ee79b7546f8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0625c75ac109566d79c33846ac85b70d303c136d309db15dc63ee79b7546f8c3->leave($__internal_0625c75ac109566d79c33846ac85b70d303c136d309db15dc63ee79b7546f8c3_prof);

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
