<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9f487553d5267c5279892d379a6208db786cdd3e298572ba3ad01c0d0339c056 extends Twig_Template
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
        $__internal_79aa2c712f3bd331ac6e6d7985a8b78b2348bc9fbb02092e9e3c7e72bab4e71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79aa2c712f3bd331ac6e6d7985a8b78b2348bc9fbb02092e9e3c7e72bab4e71c->enter($__internal_79aa2c712f3bd331ac6e6d7985a8b78b2348bc9fbb02092e9e3c7e72bab4e71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_79aa2c712f3bd331ac6e6d7985a8b78b2348bc9fbb02092e9e3c7e72bab4e71c->leave($__internal_79aa2c712f3bd331ac6e6d7985a8b78b2348bc9fbb02092e9e3c7e72bab4e71c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
