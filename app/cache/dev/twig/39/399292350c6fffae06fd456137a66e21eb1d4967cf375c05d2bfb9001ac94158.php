<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2f2754d52245cd84387d1534dbc53d35c09a563b2b389931e944d67a52e9ef15 extends Twig_Template
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
        $__internal_1b13c25d6041ce83d0255c3ab777287a181557f5d233e3b0f8b595dd33c1e0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b13c25d6041ce83d0255c3ab777287a181557f5d233e3b0f8b595dd33c1e0c3->enter($__internal_1b13c25d6041ce83d0255c3ab777287a181557f5d233e3b0f8b595dd33c1e0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1b13c25d6041ce83d0255c3ab777287a181557f5d233e3b0f8b595dd33c1e0c3->leave($__internal_1b13c25d6041ce83d0255c3ab777287a181557f5d233e3b0f8b595dd33c1e0c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
