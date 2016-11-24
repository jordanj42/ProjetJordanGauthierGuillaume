<?php

/* base.html.twig */
class __TwigTemplate_20c022957fa6a5b8940e0b4be2537ce3f2e137abc4ed8d9d842570c46d3540b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b68d79eb4e26768f1903e44099a5e3693c55ff2c8e3fb89e0e78e147caebc0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68d79eb4e26768f1903e44099a5e3693c55ff2c8e3fb89e0e78e147caebc0bd->enter($__internal_b68d79eb4e26768f1903e44099a5e3693c55ff2c8e3fb89e0e78e147caebc0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b68d79eb4e26768f1903e44099a5e3693c55ff2c8e3fb89e0e78e147caebc0bd->leave($__internal_b68d79eb4e26768f1903e44099a5e3693c55ff2c8e3fb89e0e78e147caebc0bd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2c57374b4b576459021d86899bae4de71b73ef43a2225bda3ba6da43c98e233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c57374b4b576459021d86899bae4de71b73ef43a2225bda3ba6da43c98e233->enter($__internal_d2c57374b4b576459021d86899bae4de71b73ef43a2225bda3ba6da43c98e233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d2c57374b4b576459021d86899bae4de71b73ef43a2225bda3ba6da43c98e233->leave($__internal_d2c57374b4b576459021d86899bae4de71b73ef43a2225bda3ba6da43c98e233_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e61214bf28f3c675fef07a03af252eda773d63c8b0aa15a2f54cce20eb87d4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61214bf28f3c675fef07a03af252eda773d63c8b0aa15a2f54cce20eb87d4b3->enter($__internal_e61214bf28f3c675fef07a03af252eda773d63c8b0aa15a2f54cce20eb87d4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e61214bf28f3c675fef07a03af252eda773d63c8b0aa15a2f54cce20eb87d4b3->leave($__internal_e61214bf28f3c675fef07a03af252eda773d63c8b0aa15a2f54cce20eb87d4b3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f064e38b27ae92e014196310e697a305596cbad94ce29d82ad68ce889278021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f064e38b27ae92e014196310e697a305596cbad94ce29d82ad68ce889278021->enter($__internal_9f064e38b27ae92e014196310e697a305596cbad94ce29d82ad68ce889278021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f064e38b27ae92e014196310e697a305596cbad94ce29d82ad68ce889278021->leave($__internal_9f064e38b27ae92e014196310e697a305596cbad94ce29d82ad68ce889278021_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5ad20632e0e731e178656bc8715b111a8709a0501738ce147ee8ddc00adf0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ad20632e0e731e178656bc8715b111a8709a0501738ce147ee8ddc00adf0e3->enter($__internal_c5ad20632e0e731e178656bc8715b111a8709a0501738ce147ee8ddc00adf0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c5ad20632e0e731e178656bc8715b111a8709a0501738ce147ee8ddc00adf0e3->leave($__internal_c5ad20632e0e731e178656bc8715b111a8709a0501738ce147ee8ddc00adf0e3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
