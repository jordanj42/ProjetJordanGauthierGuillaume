<?php

/* base.html.twig */
class __TwigTemplate_fa6683801c88ebf2db90c97303fd12025fda9df5224815680e029fcb18212265 extends Twig_Template
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
        $__internal_b6572902a18df4a4786ae214708bf00967f01cbf10cfce9e946a914b96f9e2a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6572902a18df4a4786ae214708bf00967f01cbf10cfce9e946a914b96f9e2a1->enter($__internal_b6572902a18df4a4786ae214708bf00967f01cbf10cfce9e946a914b96f9e2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b6572902a18df4a4786ae214708bf00967f01cbf10cfce9e946a914b96f9e2a1->leave($__internal_b6572902a18df4a4786ae214708bf00967f01cbf10cfce9e946a914b96f9e2a1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_571602641ee419d657497b087e264cb55b9305264b2edfaffc212a5d950bded2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571602641ee419d657497b087e264cb55b9305264b2edfaffc212a5d950bded2->enter($__internal_571602641ee419d657497b087e264cb55b9305264b2edfaffc212a5d950bded2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_571602641ee419d657497b087e264cb55b9305264b2edfaffc212a5d950bded2->leave($__internal_571602641ee419d657497b087e264cb55b9305264b2edfaffc212a5d950bded2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ba882820d8e001c12b520e580ce1024f02196788b745dd5691afcc5cac108f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba882820d8e001c12b520e580ce1024f02196788b745dd5691afcc5cac108f2->enter($__internal_3ba882820d8e001c12b520e580ce1024f02196788b745dd5691afcc5cac108f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3ba882820d8e001c12b520e580ce1024f02196788b745dd5691afcc5cac108f2->leave($__internal_3ba882820d8e001c12b520e580ce1024f02196788b745dd5691afcc5cac108f2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a3388fc9243c2c7cd22865fd596d49b7dc82d20ec56e75e1c3f96befecf8a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3388fc9243c2c7cd22865fd596d49b7dc82d20ec56e75e1c3f96befecf8a0b->enter($__internal_1a3388fc9243c2c7cd22865fd596d49b7dc82d20ec56e75e1c3f96befecf8a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1a3388fc9243c2c7cd22865fd596d49b7dc82d20ec56e75e1c3f96befecf8a0b->leave($__internal_1a3388fc9243c2c7cd22865fd596d49b7dc82d20ec56e75e1c3f96befecf8a0b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f4c24135a14d7025e46901e0d1280030a2c06c9ea7ea5b9fb6459ad0ce8dc59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4c24135a14d7025e46901e0d1280030a2c06c9ea7ea5b9fb6459ad0ce8dc59->enter($__internal_5f4c24135a14d7025e46901e0d1280030a2c06c9ea7ea5b9fb6459ad0ce8dc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5f4c24135a14d7025e46901e0d1280030a2c06c9ea7ea5b9fb6459ad0ce8dc59->leave($__internal_5f4c24135a14d7025e46901e0d1280030a2c06c9ea7ea5b9fb6459ad0ce8dc59_prof);

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
