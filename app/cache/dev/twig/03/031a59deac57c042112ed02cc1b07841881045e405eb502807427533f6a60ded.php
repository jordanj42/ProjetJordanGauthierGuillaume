<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_04b8e9f2ecf0ca145ab7a819b61981c23c13b937f4db94be8f7d39d2a50e674c extends Twig_Template
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
        $__internal_02487a1ea963a004a4b95edd2c0eae9993184ddad21836f50856cf94d7860463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02487a1ea963a004a4b95edd2c0eae9993184ddad21836f50856cf94d7860463->enter($__internal_02487a1ea963a004a4b95edd2c0eae9993184ddad21836f50856cf94d7860463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_02487a1ea963a004a4b95edd2c0eae9993184ddad21836f50856cf94d7860463->leave($__internal_02487a1ea963a004a4b95edd2c0eae9993184ddad21836f50856cf94d7860463_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
