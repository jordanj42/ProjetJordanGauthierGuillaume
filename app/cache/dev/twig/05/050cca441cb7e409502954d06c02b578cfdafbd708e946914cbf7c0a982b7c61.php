<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_26e7b739d6d8de8442a8c25f7c242b753547ce9ae92bbe01da369ee18a384f58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_06767b36ecc33536e1591b5c53ff5c2d57e46d5b488793f9aee6b51a3f8d862a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06767b36ecc33536e1591b5c53ff5c2d57e46d5b488793f9aee6b51a3f8d862a->enter($__internal_06767b36ecc33536e1591b5c53ff5c2d57e46d5b488793f9aee6b51a3f8d862a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06767b36ecc33536e1591b5c53ff5c2d57e46d5b488793f9aee6b51a3f8d862a->leave($__internal_06767b36ecc33536e1591b5c53ff5c2d57e46d5b488793f9aee6b51a3f8d862a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_10b89dca85b7498998f190922b062ee2fd61e65ba885fd6421f0deda208ed8b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b89dca85b7498998f190922b062ee2fd61e65ba885fd6421f0deda208ed8b2->enter($__internal_10b89dca85b7498998f190922b062ee2fd61e65ba885fd6421f0deda208ed8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_10b89dca85b7498998f190922b062ee2fd61e65ba885fd6421f0deda208ed8b2->leave($__internal_10b89dca85b7498998f190922b062ee2fd61e65ba885fd6421f0deda208ed8b2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68d6696dc5c5a1601c46fe1e1d6c1b4896d938de6f1f027de11727110751f97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d6696dc5c5a1601c46fe1e1d6c1b4896d938de6f1f027de11727110751f97e->enter($__internal_68d6696dc5c5a1601c46fe1e1d6c1b4896d938de6f1f027de11727110751f97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_68d6696dc5c5a1601c46fe1e1d6c1b4896d938de6f1f027de11727110751f97e->leave($__internal_68d6696dc5c5a1601c46fe1e1d6c1b4896d938de6f1f027de11727110751f97e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7947d608f3914fca4ba542bb57a7f10519e566451e14fc184409191a1443d56e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7947d608f3914fca4ba542bb57a7f10519e566451e14fc184409191a1443d56e->enter($__internal_7947d608f3914fca4ba542bb57a7f10519e566451e14fc184409191a1443d56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7947d608f3914fca4ba542bb57a7f10519e566451e14fc184409191a1443d56e->leave($__internal_7947d608f3914fca4ba542bb57a7f10519e566451e14fc184409191a1443d56e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
