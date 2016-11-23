<?php

/* PgGsbFraisBundle:Home:connexion.html.twig */
class __TwigTemplate_30429548ad29aa7d1b0d9b1e9283bcf99bcf5a56dfbd1adbe1890f6c2e2a751a extends Twig_Template
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
        $__internal_c06477b6f622873ae3046bb5e2d1b2ea18cabad70ccc9fa3923fb4db881d785d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06477b6f622873ae3046bb5e2d1b2ea18cabad70ccc9fa3923fb4db881d785d->enter($__internal_c06477b6f622873ae3046bb5e2d1b2ea18cabad70ccc9fa3923fb4db881d785d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c06477b6f622873ae3046bb5e2d1b2ea18cabad70ccc9fa3923fb4db881d785d->leave($__internal_c06477b6f622873ae3046bb5e2d1b2ea18cabad70ccc9fa3923fb4db881d785d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_77d3e7c36c9855e09d4418a07d691e3de8ba397360174bd8f644b373ecc7685b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d3e7c36c9855e09d4418a07d691e3de8ba397360174bd8f644b373ecc7685b->enter($__internal_77d3e7c36c9855e09d4418a07d691e3de8ba397360174bd8f644b373ecc7685b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 24
        echo "    
    ";
        
        $__internal_77d3e7c36c9855e09d4418a07d691e3de8ba397360174bd8f644b373ecc7685b->leave($__internal_77d3e7c36c9855e09d4418a07d691e3de8ba397360174bd8f644b373ecc7685b_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_67f84f15ecf0f6ee9538ea7cae9ed557f793394229ba2014b081866f8c11c83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f84f15ecf0f6ee9538ea7cae9ed557f793394229ba2014b081866f8c11c83b->enter($__internal_67f84f15ecf0f6ee9538ea7cae9ed557f793394229ba2014b081866f8c11c83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

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
        
        $__internal_67f84f15ecf0f6ee9538ea7cae9ed557f793394229ba2014b081866f8c11c83b->leave($__internal_67f84f15ecf0f6ee9538ea7cae9ed557f793394229ba2014b081866f8c11c83b_prof);

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
