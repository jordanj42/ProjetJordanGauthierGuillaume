<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_3b69a8aeff5480756358c90c6081fba7a7a72a4f818bbe574d93a2633a88d7b8 extends Twig_Template
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
        $__internal_4e962e9b419aae7c654e3a1937ab93746989342258b6dbff779606ac0d1a146e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e962e9b419aae7c654e3a1937ab93746989342258b6dbff779606ac0d1a146e->enter($__internal_4e962e9b419aae7c654e3a1937ab93746989342258b6dbff779606ac0d1a146e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::layout.html.twig"));

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
        
        $__internal_4e962e9b419aae7c654e3a1937ab93746989342258b6dbff779606ac0d1a146e->leave($__internal_4e962e9b419aae7c654e3a1937ab93746989342258b6dbff779606ac0d1a146e_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c30c297e4f4e9e6a2fb08540d6ae6af289802181729e61ee84b5d0a442b28a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c30c297e4f4e9e6a2fb08540d6ae6af289802181729e61ee84b5d0a442b28a4->enter($__internal_9c30c297e4f4e9e6a2fb08540d6ae6af289802181729e61ee84b5d0a442b28a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "          ";
        
        $__internal_9c30c297e4f4e9e6a2fb08540d6ae6af289802181729e61ee84b5d0a442b28a4->leave($__internal_9c30c297e4f4e9e6a2fb08540d6ae6af289802181729e61ee84b5d0a442b28a4_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a84330bbf4aade03457e445f90553c0d2ebf866aa4019e01ab1b73451e2af4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a84330bbf4aade03457e445f90553c0d2ebf866aa4019e01ab1b73451e2af4e->enter($__internal_0a84330bbf4aade03457e445f90553c0d2ebf866aa4019e01ab1b73451e2af4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
                 ";
        // line 20
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "          ";
        
        $__internal_0a84330bbf4aade03457e445f90553c0d2ebf866aa4019e01ab1b73451e2af4e->leave($__internal_0a84330bbf4aade03457e445f90553c0d2ebf866aa4019e01ab1b73451e2af4e_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_50a0c440332094722da6a4660124d63378569f0da712378428a40209d88143c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a0c440332094722da6a4660124d63378569f0da712378428a40209d88143c3->enter($__internal_50a0c440332094722da6a4660124d63378569f0da712378428a40209d88143c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "                 ";
        
        $__internal_50a0c440332094722da6a4660124d63378569f0da712378428a40209d88143c3->leave($__internal_50a0c440332094722da6a4660124d63378569f0da712378428a40209d88143c3_prof);

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
