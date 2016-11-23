<?php

/* PgGsbFraisBundle:SaisirFrais:anciensaisirfraisforfait.html.twig */
class __TwigTemplate_1abfe1136433722a102241d8f93d78f87f3a14c37678b5e1eb510399e10369bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d70f0af143b07ed0165a36d93db712ee22e00770503a00938323266fa7078c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70f0af143b07ed0165a36d93db712ee22e00770503a00938323266fa7078c21->enter($__internal_d70f0af143b07ed0165a36d93db712ee22e00770503a00938323266fa7078c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:anciensaisirfraisforfait.html.twig"));

        // line 1
        echo "<div id=\"contenu\">
      <h2>Renseigner ma fich de frais du mois ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")), "html", null, true);
        echo "</h2>
      <form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_saisirfrais");
        echo "\" method=\"POST\">
          <div class=\"corpsForm\">
              <fieldset>
                <legend>Eléments forfaitisés</legend>
                     ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 8
            echo "                         ";
            $context["idfrais"] = $this->getAttribute($context["unfrais"], "idfrais", array());
            // line 9
            echo "                         ";
            $context["libelle"] = $this->getAttribute($context["unfrais"], "libelle", array());
            // line 10
            echo "                         ";
            $context["quantite"] = $this->getAttribute($context["unfrais"], "quantite", array());
            // line 11
            echo "                        <p>
                            <label for=\"idFrais\">";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo "</label>
                            <input type=\"text\" id=\"idFrais\" name=\"lesFrais[";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["idfrais"]) ? $context["idfrais"] : $this->getContext($context, "idfrais")), "html", null, true);
            echo "]\" size=\"10\" maxlength=\"5\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["quantite"]) ? $context["quantite"] : $this->getContext($context, "quantite")), "html", null, true);
            echo "\" >
                        </p>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "              </fieldset>
          </div>
          <div class=\"piedForm\">
          <p>
            <input id=\"ok\" type=\"submit\" value=\"Valider\" size=\"20\" />
            <input id=\"annuler\" type=\"reset\" value=\"Effacer\" size=\"20\" />
          </p> 
          </div>
      </form>
</div>";
        
        $__internal_d70f0af143b07ed0165a36d93db712ee22e00770503a00938323266fa7078c21->leave($__internal_d70f0af143b07ed0165a36d93db712ee22e00770503a00938323266fa7078c21_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:anciensaisirfraisforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  58 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  38 => 7,  31 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"contenu\">
      <h2>Renseigner ma fich de frais du mois {{nummois}}-{{numannee}}</h2>
      <form action=\"{{path('pg_gsb_frais_saisirfrais')}}\" method=\"POST\">
          <div class=\"corpsForm\">
              <fieldset>
                <legend>Eléments forfaitisés</legend>
                     {% for unfrais in  lesfraisforfait %}
                         {% set idfrais = unfrais.idfrais %}
                         {% set libelle = unfrais.libelle %}
                         {% set quantite = unfrais.quantite %}
                        <p>
                            <label for=\"idFrais\">{{libelle}}</label>
                            <input type=\"text\" id=\"idFrais\" name=\"lesFrais[{{idfrais}}]\" size=\"10\" maxlength=\"5\" value=\"{{quantite}}\" >
                        </p>
                      {%endfor%}
              </fieldset>
          </div>
          <div class=\"piedForm\">
          <p>
            <input id=\"ok\" type=\"submit\" value=\"Valider\" size=\"20\" />
            <input id=\"annuler\" type=\"reset\" value=\"Effacer\" size=\"20\" />
          </p> 
          </div>
      </form>
</div>";
    }
}
