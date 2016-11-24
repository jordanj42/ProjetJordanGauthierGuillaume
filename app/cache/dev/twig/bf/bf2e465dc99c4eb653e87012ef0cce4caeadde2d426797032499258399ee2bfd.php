<?php

/* base.html.twig */
class __TwigTemplate_6a981b86174ee5939ad4bd710adaaf50de2d07fc5ef99d2f4f3a73d26183a92c extends Twig_Template
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
        $__internal_8e7bd141a78fd6f6a6972f76940bd71844ee02b71f5594f7aef82942d9323796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7bd141a78fd6f6a6972f76940bd71844ee02b71f5594f7aef82942d9323796->enter($__internal_8e7bd141a78fd6f6a6972f76940bd71844ee02b71f5594f7aef82942d9323796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8e7bd141a78fd6f6a6972f76940bd71844ee02b71f5594f7aef82942d9323796->leave($__internal_8e7bd141a78fd6f6a6972f76940bd71844ee02b71f5594f7aef82942d9323796_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1305e18e710bd097e870f8e8110a60761ca19e31130e2d8e7923343abaaaf25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1305e18e710bd097e870f8e8110a60761ca19e31130e2d8e7923343abaaaf25->enter($__internal_e1305e18e710bd097e870f8e8110a60761ca19e31130e2d8e7923343abaaaf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e1305e18e710bd097e870f8e8110a60761ca19e31130e2d8e7923343abaaaf25->leave($__internal_e1305e18e710bd097e870f8e8110a60761ca19e31130e2d8e7923343abaaaf25_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f3955a26c51ac74ade7a9965f9cadb2310da5dc2d55a81611266154a50843111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3955a26c51ac74ade7a9965f9cadb2310da5dc2d55a81611266154a50843111->enter($__internal_f3955a26c51ac74ade7a9965f9cadb2310da5dc2d55a81611266154a50843111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f3955a26c51ac74ade7a9965f9cadb2310da5dc2d55a81611266154a50843111->leave($__internal_f3955a26c51ac74ade7a9965f9cadb2310da5dc2d55a81611266154a50843111_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a241eac8542ea46d40961c776511291564d2378925b242d5d2efb01498951e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a241eac8542ea46d40961c776511291564d2378925b242d5d2efb01498951e33->enter($__internal_a241eac8542ea46d40961c776511291564d2378925b242d5d2efb01498951e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a241eac8542ea46d40961c776511291564d2378925b242d5d2efb01498951e33->leave($__internal_a241eac8542ea46d40961c776511291564d2378925b242d5d2efb01498951e33_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ef7eb5b02041ff1afd754dff0998c93823846c1a9e47e3633cc70e0be1d99474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7eb5b02041ff1afd754dff0998c93823846c1a9e47e3633cc70e0be1d99474->enter($__internal_ef7eb5b02041ff1afd754dff0998c93823846c1a9e47e3633cc70e0be1d99474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ef7eb5b02041ff1afd754dff0998c93823846c1a9e47e3633cc70e0be1d99474->leave($__internal_ef7eb5b02041ff1afd754dff0998c93823846c1a9e47e3633cc70e0be1d99474_prof);

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
