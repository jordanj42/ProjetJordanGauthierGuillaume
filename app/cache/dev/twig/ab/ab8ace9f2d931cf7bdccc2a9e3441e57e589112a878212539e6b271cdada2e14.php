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
        $__internal_27aa8e91c81de89d2f9098e1eb5d5ab6b13f6be8787b71a5512f26111cc9e49b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27aa8e91c81de89d2f9098e1eb5d5ab6b13f6be8787b71a5512f26111cc9e49b->enter($__internal_27aa8e91c81de89d2f9098e1eb5d5ab6b13f6be8787b71a5512f26111cc9e49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_27aa8e91c81de89d2f9098e1eb5d5ab6b13f6be8787b71a5512f26111cc9e49b->leave($__internal_27aa8e91c81de89d2f9098e1eb5d5ab6b13f6be8787b71a5512f26111cc9e49b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0143cebce6d3b8e9008c9123b3f164dbf5122d93f50652bed6c3c85718f5955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0143cebce6d3b8e9008c9123b3f164dbf5122d93f50652bed6c3c85718f5955->enter($__internal_b0143cebce6d3b8e9008c9123b3f164dbf5122d93f50652bed6c3c85718f5955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b0143cebce6d3b8e9008c9123b3f164dbf5122d93f50652bed6c3c85718f5955->leave($__internal_b0143cebce6d3b8e9008c9123b3f164dbf5122d93f50652bed6c3c85718f5955_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a1772cfbd8d4cde65dd15ff2780d8f44e54c29ea08e9bb95c4b4ca262baad536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1772cfbd8d4cde65dd15ff2780d8f44e54c29ea08e9bb95c4b4ca262baad536->enter($__internal_a1772cfbd8d4cde65dd15ff2780d8f44e54c29ea08e9bb95c4b4ca262baad536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a1772cfbd8d4cde65dd15ff2780d8f44e54c29ea08e9bb95c4b4ca262baad536->leave($__internal_a1772cfbd8d4cde65dd15ff2780d8f44e54c29ea08e9bb95c4b4ca262baad536_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fee24bd5de12a2404956800fdcaf5fb15f07a47e9ff1d18e6f1a8050d32b701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fee24bd5de12a2404956800fdcaf5fb15f07a47e9ff1d18e6f1a8050d32b701->enter($__internal_8fee24bd5de12a2404956800fdcaf5fb15f07a47e9ff1d18e6f1a8050d32b701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8fee24bd5de12a2404956800fdcaf5fb15f07a47e9ff1d18e6f1a8050d32b701->leave($__internal_8fee24bd5de12a2404956800fdcaf5fb15f07a47e9ff1d18e6f1a8050d32b701_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b365fa5e4bec7e0aa4782d457046f41e7166a99364d0080484ebe5f009c9278b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b365fa5e4bec7e0aa4782d457046f41e7166a99364d0080484ebe5f009c9278b->enter($__internal_b365fa5e4bec7e0aa4782d457046f41e7166a99364d0080484ebe5f009c9278b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b365fa5e4bec7e0aa4782d457046f41e7166a99364d0080484ebe5f009c9278b->leave($__internal_b365fa5e4bec7e0aa4782d457046f41e7166a99364d0080484ebe5f009c9278b_prof);

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
