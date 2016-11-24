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
        $__internal_8c9944d967531e5bb31cd012134663e58714e081fdd019d436770f9ae9894f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9944d967531e5bb31cd012134663e58714e081fdd019d436770f9ae9894f44->enter($__internal_8c9944d967531e5bb31cd012134663e58714e081fdd019d436770f9ae9894f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c9944d967531e5bb31cd012134663e58714e081fdd019d436770f9ae9894f44->leave($__internal_8c9944d967531e5bb31cd012134663e58714e081fdd019d436770f9ae9894f44_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b98b015d02a760cbfec00d4b4828378946b837baa6cfbeb5788709d60ef50667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98b015d02a760cbfec00d4b4828378946b837baa6cfbeb5788709d60ef50667->enter($__internal_b98b015d02a760cbfec00d4b4828378946b837baa6cfbeb5788709d60ef50667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 24
        echo "    
    ";
        
        $__internal_b98b015d02a760cbfec00d4b4828378946b837baa6cfbeb5788709d60ef50667->leave($__internal_b98b015d02a760cbfec00d4b4828378946b837baa6cfbeb5788709d60ef50667_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_26e39c17a73a0b4eee266ad8cd07d6e82f72956555510c4062eabc45bfc34843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e39c17a73a0b4eee266ad8cd07d6e82f72956555510c4062eabc45bfc34843->enter($__internal_26e39c17a73a0b4eee266ad8cd07d6e82f72956555510c4062eabc45bfc34843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

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
        
        $__internal_26e39c17a73a0b4eee266ad8cd07d6e82f72956555510c4062eabc45bfc34843->leave($__internal_26e39c17a73a0b4eee266ad8cd07d6e82f72956555510c4062eabc45bfc34843_prof);

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
