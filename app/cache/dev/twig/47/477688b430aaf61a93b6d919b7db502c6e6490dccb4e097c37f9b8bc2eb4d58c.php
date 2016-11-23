<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d8f37c62c3e220f477f31417a9aa18d9e4365bfbd856fe9ff532a53a70c6f3f6 extends Twig_Template
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
        $__internal_65d1bb88e0dca62e63d56b46d409f9945915b4cffdb530d61492a5134803d21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d1bb88e0dca62e63d56b46d409f9945915b4cffdb530d61492a5134803d21a->enter($__internal_65d1bb88e0dca62e63d56b46d409f9945915b4cffdb530d61492a5134803d21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_65d1bb88e0dca62e63d56b46d409f9945915b4cffdb530d61492a5134803d21a->leave($__internal_65d1bb88e0dca62e63d56b46d409f9945915b4cffdb530d61492a5134803d21a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
