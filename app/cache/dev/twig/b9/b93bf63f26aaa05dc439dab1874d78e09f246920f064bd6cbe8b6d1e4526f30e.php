<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a390446631fbca030c94b0f78ced872e3332731f22cadb21786bdcb6d16d6bab extends Twig_Template
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
        $__internal_ea39faba87dbcd145b1d72c1d3e831b9782b21caa5cc1f4ca5ee9e09e52fe897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea39faba87dbcd145b1d72c1d3e831b9782b21caa5cc1f4ca5ee9e09e52fe897->enter($__internal_ea39faba87dbcd145b1d72c1d3e831b9782b21caa5cc1f4ca5ee9e09e52fe897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ea39faba87dbcd145b1d72c1d3e831b9782b21caa5cc1f4ca5ee9e09e52fe897->leave($__internal_ea39faba87dbcd145b1d72c1d3e831b9782b21caa5cc1f4ca5ee9e09e52fe897_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
