<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_55accf247d1ba8ea2883b895b10d95fb333b577d620ebae7d3b01caab3592a15 extends Twig_Template
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
        $__internal_7bc081a175a4959fd8f43b14db325d344d1e8c4c57085d3af3752be5d6227833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc081a175a4959fd8f43b14db325d344d1e8c4c57085d3af3752be5d6227833->enter($__internal_7bc081a175a4959fd8f43b14db325d344d1e8c4c57085d3af3752be5d6227833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7bc081a175a4959fd8f43b14db325d344d1e8c4c57085d3af3752be5d6227833->leave($__internal_7bc081a175a4959fd8f43b14db325d344d1e8c4c57085d3af3752be5d6227833_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
