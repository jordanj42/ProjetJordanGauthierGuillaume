<?php

/* PgGsbFraisBundle:Default:index.html.twig */
class __TwigTemplate_31eb3279431e1bcae1b9526de46ac0d78875bbc6ff26b797ba742f050457f86e extends Twig_Template
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
        $__internal_16a3b690b41bc060722bb2ae4f50231f2485ecd18212683c4982dca157fe9249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a3b690b41bc060722bb2ae4f50231f2485ecd18212683c4982dca157fe9249->enter($__internal_16a3b690b41bc060722bb2ae4f50231f2485ecd18212683c4982dca157fe9249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_16a3b690b41bc060722bb2ae4f50231f2485ecd18212683c4982dca157fe9249->leave($__internal_16a3b690b41bc060722bb2ae4f50231f2485ecd18212683c4982dca157fe9249_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Default:index.html.twig";
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
        return "Hello {{ name }}!
";
    }
}
