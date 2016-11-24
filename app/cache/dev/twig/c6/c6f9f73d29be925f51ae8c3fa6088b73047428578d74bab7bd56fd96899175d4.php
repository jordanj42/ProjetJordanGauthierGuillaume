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
        $__internal_fc8a98d906c0828430c581292373c5d1e369e05f90b0a578df1ffcee3c87d6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8a98d906c0828430c581292373c5d1e369e05f90b0a578df1ffcee3c87d6d9->enter($__internal_fc8a98d906c0828430c581292373c5d1e369e05f90b0a578df1ffcee3c87d6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc8a98d906c0828430c581292373c5d1e369e05f90b0a578df1ffcee3c87d6d9->leave($__internal_fc8a98d906c0828430c581292373c5d1e369e05f90b0a578df1ffcee3c87d6d9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8748a8cc5985e477974776ce7ddc6bc011a1f890c2d4c096b1da41554f62d7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8748a8cc5985e477974776ce7ddc6bc011a1f890c2d4c096b1da41554f62d7a9->enter($__internal_8748a8cc5985e477974776ce7ddc6bc011a1f890c2d4c096b1da41554f62d7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8748a8cc5985e477974776ce7ddc6bc011a1f890c2d4c096b1da41554f62d7a9->leave($__internal_8748a8cc5985e477974776ce7ddc6bc011a1f890c2d4c096b1da41554f62d7a9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d52ca3517d7b4e8881f805a53200564c3020c1faa50d6a0f25466fd5965f0612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52ca3517d7b4e8881f805a53200564c3020c1faa50d6a0f25466fd5965f0612->enter($__internal_d52ca3517d7b4e8881f805a53200564c3020c1faa50d6a0f25466fd5965f0612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d52ca3517d7b4e8881f805a53200564c3020c1faa50d6a0f25466fd5965f0612->leave($__internal_d52ca3517d7b4e8881f805a53200564c3020c1faa50d6a0f25466fd5965f0612_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f101cce8f603172980dfd29b6228439c7c9ba355b09b93c9bbf8e942d63173d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f101cce8f603172980dfd29b6228439c7c9ba355b09b93c9bbf8e942d63173d->enter($__internal_9f101cce8f603172980dfd29b6228439c7c9ba355b09b93c9bbf8e942d63173d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9f101cce8f603172980dfd29b6228439c7c9ba355b09b93c9bbf8e942d63173d->leave($__internal_9f101cce8f603172980dfd29b6228439c7c9ba355b09b93c9bbf8e942d63173d_prof);

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
