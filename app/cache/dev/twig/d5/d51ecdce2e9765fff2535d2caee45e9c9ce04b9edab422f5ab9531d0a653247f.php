<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_29ef0947bff2a10f5c6798410b74cfc65dc11dbfe10f175dd9cc7dd4293cc765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b81c4093e22ca1af36dcf0983696a5f7863a22eeb5aaf366fea1119e38515f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81c4093e22ca1af36dcf0983696a5f7863a22eeb5aaf366fea1119e38515f32->enter($__internal_b81c4093e22ca1af36dcf0983696a5f7863a22eeb5aaf366fea1119e38515f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b81c4093e22ca1af36dcf0983696a5f7863a22eeb5aaf366fea1119e38515f32->leave($__internal_b81c4093e22ca1af36dcf0983696a5f7863a22eeb5aaf366fea1119e38515f32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
