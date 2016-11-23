<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5e11f0d26b45a46cd40ea3b2c6dd3adde94fa98c9b5d175655093d4b4d43a7a3 extends Twig_Template
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
        $__internal_0a808f97d3fa3809f4011b17da9ba559a509ad5ff97b8f6befe55502eb6bc2a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a808f97d3fa3809f4011b17da9ba559a509ad5ff97b8f6befe55502eb6bc2a4->enter($__internal_0a808f97d3fa3809f4011b17da9ba559a509ad5ff97b8f6befe55502eb6bc2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0a808f97d3fa3809f4011b17da9ba559a509ad5ff97b8f6befe55502eb6bc2a4->leave($__internal_0a808f97d3fa3809f4011b17da9ba559a509ad5ff97b8f6befe55502eb6bc2a4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
