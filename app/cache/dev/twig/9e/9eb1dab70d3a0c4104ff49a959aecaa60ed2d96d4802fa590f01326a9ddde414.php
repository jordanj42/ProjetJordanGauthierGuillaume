<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_509d1b47716da3be877205491efd1c64767a8bf368999dcea278940fe2755217 extends Twig_Template
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
        $__internal_395f5aa4b29d6d45f9cd7a4afc64ca693aaf8d7463a0012bbdf76095f50860ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395f5aa4b29d6d45f9cd7a4afc64ca693aaf8d7463a0012bbdf76095f50860ba->enter($__internal_395f5aa4b29d6d45f9cd7a4afc64ca693aaf8d7463a0012bbdf76095f50860ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_395f5aa4b29d6d45f9cd7a4afc64ca693aaf8d7463a0012bbdf76095f50860ba->leave($__internal_395f5aa4b29d6d45f9cd7a4afc64ca693aaf8d7463a0012bbdf76095f50860ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6862707b2114e5785289839428db3cca1b31a3ae98971c485deb968aaddb6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6862707b2114e5785289839428db3cca1b31a3ae98971c485deb968aaddb6a5->enter($__internal_c6862707b2114e5785289839428db3cca1b31a3ae98971c485deb968aaddb6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c6862707b2114e5785289839428db3cca1b31a3ae98971c485deb968aaddb6a5->leave($__internal_c6862707b2114e5785289839428db3cca1b31a3ae98971c485deb968aaddb6a5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ead353a37d6c03eb46c1ea5746bcf32be437228d497131668c46d64f6f8e7b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead353a37d6c03eb46c1ea5746bcf32be437228d497131668c46d64f6f8e7b6e->enter($__internal_ead353a37d6c03eb46c1ea5746bcf32be437228d497131668c46d64f6f8e7b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ead353a37d6c03eb46c1ea5746bcf32be437228d497131668c46d64f6f8e7b6e->leave($__internal_ead353a37d6c03eb46c1ea5746bcf32be437228d497131668c46d64f6f8e7b6e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c7cdac60c7f1be2e94c44e3126cb06159f5aabbff549f8a1d676028b653038b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7cdac60c7f1be2e94c44e3126cb06159f5aabbff549f8a1d676028b653038b->enter($__internal_8c7cdac60c7f1be2e94c44e3126cb06159f5aabbff549f8a1d676028b653038b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c7cdac60c7f1be2e94c44e3126cb06159f5aabbff549f8a1d676028b653038b->leave($__internal_8c7cdac60c7f1be2e94c44e3126cb06159f5aabbff549f8a1d676028b653038b_prof);

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
