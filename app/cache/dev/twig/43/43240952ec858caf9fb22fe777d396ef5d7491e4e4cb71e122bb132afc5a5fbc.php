<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_5c010bf343b3c4a94a07aedcd65ac490d4131e7aa65bbad6212abfd7fc684253 extends Twig_Template
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
        $__internal_24ae5960d00b34b22d43edaf090e11d568e2ba01220fdf51fa6368a34e4e4ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ae5960d00b34b22d43edaf090e11d568e2ba01220fdf51fa6368a34e4e4ec1->enter($__internal_24ae5960d00b34b22d43edaf090e11d568e2ba01220fdf51fa6368a34e4e4ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::layout.html.twig"));

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
        
        $__internal_24ae5960d00b34b22d43edaf090e11d568e2ba01220fdf51fa6368a34e4e4ec1->leave($__internal_24ae5960d00b34b22d43edaf090e11d568e2ba01220fdf51fa6368a34e4e4ec1_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e50fdb7d34d83fc6d2e74b7f7df4a2306d17d7e2e12b3a19baaa16f676b0afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e50fdb7d34d83fc6d2e74b7f7df4a2306d17d7e2e12b3a19baaa16f676b0afa->enter($__internal_2e50fdb7d34d83fc6d2e74b7f7df4a2306d17d7e2e12b3a19baaa16f676b0afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "          ";
        
        $__internal_2e50fdb7d34d83fc6d2e74b7f7df4a2306d17d7e2e12b3a19baaa16f676b0afa->leave($__internal_2e50fdb7d34d83fc6d2e74b7f7df4a2306d17d7e2e12b3a19baaa16f676b0afa_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_c546f689e665495786b2b734b5407769d87012a4967f97d02bbddedc60fbd0ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c546f689e665495786b2b734b5407769d87012a4967f97d02bbddedc60fbd0ff->enter($__internal_c546f689e665495786b2b734b5407769d87012a4967f97d02bbddedc60fbd0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
                 ";
        // line 20
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "          ";
        
        $__internal_c546f689e665495786b2b734b5407769d87012a4967f97d02bbddedc60fbd0ff->leave($__internal_c546f689e665495786b2b734b5407769d87012a4967f97d02bbddedc60fbd0ff_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_9e5f6e8cb5d35dd322e2350a9e97b010c8cbc1dbdb10eee79d929f06bc176f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5f6e8cb5d35dd322e2350a9e97b010c8cbc1dbdb10eee79d929f06bc176f4b->enter($__internal_9e5f6e8cb5d35dd322e2350a9e97b010c8cbc1dbdb10eee79d929f06bc176f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "                 ";
        
        $__internal_9e5f6e8cb5d35dd322e2350a9e97b010c8cbc1dbdb10eee79d929f06bc176f4b->leave($__internal_9e5f6e8cb5d35dd322e2350a9e97b010c8cbc1dbdb10eee79d929f06bc176f4b_prof);

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
