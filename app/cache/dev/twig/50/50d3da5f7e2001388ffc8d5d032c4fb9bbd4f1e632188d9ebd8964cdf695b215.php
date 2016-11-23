<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8411a9b95eb19cc30840b1a805ff0fba20e10bcee48327569530dd503d99413b extends Twig_Template
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
        $__internal_477f3964a0cef2ef8dc9e2da809bec9ed743de1c1233d606402e37ce02a5bfad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477f3964a0cef2ef8dc9e2da809bec9ed743de1c1233d606402e37ce02a5bfad->enter($__internal_477f3964a0cef2ef8dc9e2da809bec9ed743de1c1233d606402e37ce02a5bfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_477f3964a0cef2ef8dc9e2da809bec9ed743de1c1233d606402e37ce02a5bfad->leave($__internal_477f3964a0cef2ef8dc9e2da809bec9ed743de1c1233d606402e37ce02a5bfad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
