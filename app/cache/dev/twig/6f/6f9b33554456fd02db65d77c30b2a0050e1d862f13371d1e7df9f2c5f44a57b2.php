<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5ec21065b096467211d45f41e1772698fe68455c5bf5b2ce3602e4a508f017f0 extends Twig_Template
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
        $__internal_7111bd1d809a96a3069d72dd6a03127833eaae347f2fdd0ccb223ef347d83f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7111bd1d809a96a3069d72dd6a03127833eaae347f2fdd0ccb223ef347d83f55->enter($__internal_7111bd1d809a96a3069d72dd6a03127833eaae347f2fdd0ccb223ef347d83f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7111bd1d809a96a3069d72dd6a03127833eaae347f2fdd0ccb223ef347d83f55->leave($__internal_7111bd1d809a96a3069d72dd6a03127833eaae347f2fdd0ccb223ef347d83f55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
