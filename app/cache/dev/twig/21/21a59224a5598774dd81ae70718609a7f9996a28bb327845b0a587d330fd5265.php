<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_26356deccccdb5eddeda00e3d5be3c24ef5af0842b6cdfe3fdf8524e03bbb857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf4e0a7b1ebe94a50764bd512b0ca31eabebadd5df879d1fdf44187693daf601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4e0a7b1ebe94a50764bd512b0ca31eabebadd5df879d1fdf44187693daf601->enter($__internal_cf4e0a7b1ebe94a50764bd512b0ca31eabebadd5df879d1fdf44187693daf601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
  </head>
  <body>
    <div id=\"page\">
      <div id=\"entete\">
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/logo.jpg"), "html", null, true);
        echo "\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
        <h1>Affichage des tablettes</h1>
      </div>
     </div>
          ";
        // line 17
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "          ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    </body>
  </html>

          
          
";
        
        $__internal_cf4e0a7b1ebe94a50764bd512b0ca31eabebadd5df879d1fdf44187693daf601->leave($__internal_cf4e0a7b1ebe94a50764bd512b0ca31eabebadd5df879d1fdf44187693daf601_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d57686b273d9c4466b6021a0d056a59e7357e64664a5234bf7ca8c2c34e5ffd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57686b273d9c4466b6021a0d056a59e7357e64664a5234bf7ca8c2c34e5ffd6->enter($__internal_d57686b273d9c4466b6021a0d056a59e7357e64664a5234bf7ca8c2c34e5ffd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "          ";
        
        $__internal_d57686b273d9c4466b6021a0d056a59e7357e64664a5234bf7ca8c2c34e5ffd6->leave($__internal_d57686b273d9c4466b6021a0d056a59e7357e64664a5234bf7ca8c2c34e5ffd6_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1d5a1b1c7760f2efaf52e3a783044a3fee68faf245f070cbe3ffa9fd40ff435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d5a1b1c7760f2efaf52e3a783044a3fee68faf245f070cbe3ffa9fd40ff435->enter($__internal_f1d5a1b1c7760f2efaf52e3a783044a3fee68faf245f070cbe3ffa9fd40ff435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
                 ";
        // line 20
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "          ";
        
        $__internal_f1d5a1b1c7760f2efaf52e3a783044a3fee68faf245f070cbe3ffa9fd40ff435->leave($__internal_f1d5a1b1c7760f2efaf52e3a783044a3fee68faf245f070cbe3ffa9fd40ff435_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_6b40d94f54e814f6971263cb0cb90b3b604ebc441b6da63d74d98218c4c7c811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b40d94f54e814f6971263cb0cb90b3b604ebc441b6da63d74d98218c4c7c811->enter($__internal_6b40d94f54e814f6971263cb0cb90b3b604ebc441b6da63d74d98218c4c7c811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "                 ";
        
        $__internal_6b40d94f54e814f6971263cb0cb90b3b604ebc441b6da63d74d98218c4c7c811->leave($__internal_6b40d94f54e814f6971263cb0cb90b3b604ebc441b6da63d74d98218c4c7c811_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  96 => 20,  89 => 22,  87 => 20,  79 => 19,  72 => 18,  66 => 17,  54 => 23,  51 => 19,  49 => 17,  42 => 13,  33 => 7,  25 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"{{ asset('bundles/framework/css/styles.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
  </head>
  <body>
    <div id=\"page\">
      <div id=\"entete\">
        <img src=\"{{ asset('bundles/framework/images/logo.jpg')}}\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
        <h1>Affichage des tablettes</h1>
      </div>
     </div>
          {% block menu %}
          {% endblock %}
          {% block body %} 
                 {% block bloc1 %}
                 {% endblock %}
          {% endblock %}
    </body>
  </html>

          
          
";
    }
}
