<?php

/* PgGsbFraisBundle:Home:connexion.html.twig */
class __TwigTemplate_b39324231688ae695bebb5b356c2e0134b9cdcf78a653039b15f297b66d4876a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle:Home:connexion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b445564ee453ce3567b2db2c61c1a2e445083c7564380a4814e8fcd404c9bf2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b445564ee453ce3567b2db2c61c1a2e445083c7564380a4814e8fcd404c9bf2d->enter($__internal_b445564ee453ce3567b2db2c61c1a2e445083c7564380a4814e8fcd404c9bf2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b445564ee453ce3567b2db2c61c1a2e445083c7564380a4814e8fcd404c9bf2d->leave($__internal_b445564ee453ce3567b2db2c61c1a2e445083c7564380a4814e8fcd404c9bf2d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2734b862c8e59abb76b3f1373dadc84ef93bf17eaf23e65ac11646011f8dd320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2734b862c8e59abb76b3f1373dadc84ef93bf17eaf23e65ac11646011f8dd320->enter($__internal_2734b862c8e59abb76b3f1373dadc84ef93bf17eaf23e65ac11646011f8dd320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 24
        echo "    
    ";
        
        $__internal_2734b862c8e59abb76b3f1373dadc84ef93bf17eaf23e65ac11646011f8dd320->leave($__internal_2734b862c8e59abb76b3f1373dadc84ef93bf17eaf23e65ac11646011f8dd320_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_bd6f6d3bfe745ad0ab59c4b1f91e406fc88793089c7ed5fdbf359ab2d67309f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6f6d3bfe745ad0ab59c4b1f91e406fc88793089c7ed5fdbf359ab2d67309f2->enter($__internal_bd6f6d3bfe745ad0ab59c4b1f91e406fc88793089c7ed5fdbf359ab2d67309f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        echo " 
 <div id=\"contenu\">
      <h2>Identification utilisateur</h2>
      ";
        // line 6
        if (array_key_exists("message", $context)) {
            // line 7
            echo "            <div class =\"erreur\">
            <ul>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</ul></div>
      ";
        }
        // line 10
        echo "<form method=\"POST\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_validerconnexion");
        echo "\">
        <p>
          <label for=\"nom\">Login*</label>
           <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
        </p>
\t<p>
            <label for=\"mdp\">Mot de passe*</label>
            <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
        </p>
         <input type=\"submit\" value=\"Valider\" name=\"valider\">
         <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
      </p>
</form>
</div>
    ";
        
        $__internal_bd6f6d3bfe745ad0ab59c4b1f91e406fc88793089c7ed5fdbf359ab2d67309f2->leave($__internal_bd6f6d3bfe745ad0ab59c4b1f91e406fc88793089c7ed5fdbf359ab2d67309f2_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  67 => 8,  64 => 7,  62 => 6,  52 => 3,  44 => 24,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"PgGsbFraisBundle::layout.html.twig\" %}
{% block body %}
 {% block bloc1 %} 
 <div id=\"contenu\">
      <h2>Identification utilisateur</h2>
      {%if(message is defined )%}
            <div class =\"erreur\">
            <ul>{{message}}</ul></div>
      {%endif%}
<form method=\"POST\" action=\"{{path('pg_gsb_frais_validerconnexion')}}\">
        <p>
          <label for=\"nom\">Login*</label>
           <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
        </p>
\t<p>
            <label for=\"mdp\">Mot de passe*</label>
            <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
        </p>
         <input type=\"submit\" value=\"Valider\" name=\"valider\">
         <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
      </p>
</form>
</div>
    {% endblock %}    
    {% endblock%}
     ";
    }
}
