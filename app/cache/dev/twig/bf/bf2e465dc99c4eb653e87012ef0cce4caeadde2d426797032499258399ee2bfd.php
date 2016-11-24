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
<<<<<<< HEAD:app/cache/dev/twig/bf/bf2e465dc99c4eb653e87012ef0cce4caeadde2d426797032499258399ee2bfd.php
        $__internal_8e7bd141a78fd6f6a6972f76940bd71844ee02b71f5594f7aef82942d9323796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7bd141a78fd6f6a6972f76940bd71844ee02b71f5594f7aef82942d9323796->enter($__internal_8e7bd141a78fd6f6a6972f76940bd71844ee02b71f5594f7aef82942d9323796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));
=======
        $__internal_27aa8e91c81de89d2f9098e1eb5d5ab6b13f6be8787b71a5512f26111cc9e49b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27aa8e91c81de89d2f9098e1eb5d5ab6b13f6be8787b71a5512f26111cc9e49b->enter($__internal_27aa8e91c81de89d2f9098e1eb5d5ab6b13f6be8787b71a5512f26111cc9e49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/ab/ab8ace9f2d931cf7bdccc2a9e3441e57e589112a878212539e6b271cdada2e14.php

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
        
<<<<<<< HEAD:app/cache/dev/twig/bf/bf2e465dc99c4eb653e87012ef0cce4caeadde2d426797032499258399ee2bfd.php
        $__internal_8e7bd141a78fd6f6a6972f76940bd71844ee02b71f5594f7aef82942d9323796->leave($__internal_8e7bd141a78fd6f6a6972f76940bd71844ee02b71f5594f7aef82942d9323796_prof);
=======
        $__internal_27aa8e91c81de89d2f9098e1eb5d5ab6b13f6be8787b71a5512f26111cc9e49b->leave($__internal_27aa8e91c81de89d2f9098e1eb5d5ab6b13f6be8787b71a5512f26111cc9e49b_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/ab/ab8ace9f2d931cf7bdccc2a9e3441e57e589112a878212539e6b271cdada2e14.php

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/bf/bf2e465dc99c4eb653e87012ef0cce4caeadde2d426797032499258399ee2bfd.php
        $__internal_e1305e18e710bd097e870f8e8110a60761ca19e31130e2d8e7923343abaaaf25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1305e18e710bd097e870f8e8110a60761ca19e31130e2d8e7923343abaaaf25->enter($__internal_e1305e18e710bd097e870f8e8110a60761ca19e31130e2d8e7923343abaaaf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e1305e18e710bd097e870f8e8110a60761ca19e31130e2d8e7923343abaaaf25->leave($__internal_e1305e18e710bd097e870f8e8110a60761ca19e31130e2d8e7923343abaaaf25_prof);
=======
        $__internal_b0143cebce6d3b8e9008c9123b3f164dbf5122d93f50652bed6c3c85718f5955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0143cebce6d3b8e9008c9123b3f164dbf5122d93f50652bed6c3c85718f5955->enter($__internal_b0143cebce6d3b8e9008c9123b3f164dbf5122d93f50652bed6c3c85718f5955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b0143cebce6d3b8e9008c9123b3f164dbf5122d93f50652bed6c3c85718f5955->leave($__internal_b0143cebce6d3b8e9008c9123b3f164dbf5122d93f50652bed6c3c85718f5955_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/ab/ab8ace9f2d931cf7bdccc2a9e3441e57e589112a878212539e6b271cdada2e14.php

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/bf/bf2e465dc99c4eb653e87012ef0cce4caeadde2d426797032499258399ee2bfd.php
        $__internal_f3955a26c51ac74ade7a9965f9cadb2310da5dc2d55a81611266154a50843111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3955a26c51ac74ade7a9965f9cadb2310da5dc2d55a81611266154a50843111->enter($__internal_f3955a26c51ac74ade7a9965f9cadb2310da5dc2d55a81611266154a50843111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f3955a26c51ac74ade7a9965f9cadb2310da5dc2d55a81611266154a50843111->leave($__internal_f3955a26c51ac74ade7a9965f9cadb2310da5dc2d55a81611266154a50843111_prof);
=======
        $__internal_a1772cfbd8d4cde65dd15ff2780d8f44e54c29ea08e9bb95c4b4ca262baad536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1772cfbd8d4cde65dd15ff2780d8f44e54c29ea08e9bb95c4b4ca262baad536->enter($__internal_a1772cfbd8d4cde65dd15ff2780d8f44e54c29ea08e9bb95c4b4ca262baad536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a1772cfbd8d4cde65dd15ff2780d8f44e54c29ea08e9bb95c4b4ca262baad536->leave($__internal_a1772cfbd8d4cde65dd15ff2780d8f44e54c29ea08e9bb95c4b4ca262baad536_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/ab/ab8ace9f2d931cf7bdccc2a9e3441e57e589112a878212539e6b271cdada2e14.php

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/bf/bf2e465dc99c4eb653e87012ef0cce4caeadde2d426797032499258399ee2bfd.php
        $__internal_a241eac8542ea46d40961c776511291564d2378925b242d5d2efb01498951e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a241eac8542ea46d40961c776511291564d2378925b242d5d2efb01498951e33->enter($__internal_a241eac8542ea46d40961c776511291564d2378925b242d5d2efb01498951e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a241eac8542ea46d40961c776511291564d2378925b242d5d2efb01498951e33->leave($__internal_a241eac8542ea46d40961c776511291564d2378925b242d5d2efb01498951e33_prof);
=======
        $__internal_8fee24bd5de12a2404956800fdcaf5fb15f07a47e9ff1d18e6f1a8050d32b701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fee24bd5de12a2404956800fdcaf5fb15f07a47e9ff1d18e6f1a8050d32b701->enter($__internal_8fee24bd5de12a2404956800fdcaf5fb15f07a47e9ff1d18e6f1a8050d32b701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8fee24bd5de12a2404956800fdcaf5fb15f07a47e9ff1d18e6f1a8050d32b701->leave($__internal_8fee24bd5de12a2404956800fdcaf5fb15f07a47e9ff1d18e6f1a8050d32b701_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/ab/ab8ace9f2d931cf7bdccc2a9e3441e57e589112a878212539e6b271cdada2e14.php

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/bf/bf2e465dc99c4eb653e87012ef0cce4caeadde2d426797032499258399ee2bfd.php
        $__internal_ef7eb5b02041ff1afd754dff0998c93823846c1a9e47e3633cc70e0be1d99474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7eb5b02041ff1afd754dff0998c93823846c1a9e47e3633cc70e0be1d99474->enter($__internal_ef7eb5b02041ff1afd754dff0998c93823846c1a9e47e3633cc70e0be1d99474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ef7eb5b02041ff1afd754dff0998c93823846c1a9e47e3633cc70e0be1d99474->leave($__internal_ef7eb5b02041ff1afd754dff0998c93823846c1a9e47e3633cc70e0be1d99474_prof);
=======
        $__internal_b365fa5e4bec7e0aa4782d457046f41e7166a99364d0080484ebe5f009c9278b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b365fa5e4bec7e0aa4782d457046f41e7166a99364d0080484ebe5f009c9278b->enter($__internal_b365fa5e4bec7e0aa4782d457046f41e7166a99364d0080484ebe5f009c9278b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b365fa5e4bec7e0aa4782d457046f41e7166a99364d0080484ebe5f009c9278b->leave($__internal_b365fa5e4bec7e0aa4782d457046f41e7166a99364d0080484ebe5f009c9278b_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/ab/ab8ace9f2d931cf7bdccc2a9e3441e57e589112a878212539e6b271cdada2e14.php

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
