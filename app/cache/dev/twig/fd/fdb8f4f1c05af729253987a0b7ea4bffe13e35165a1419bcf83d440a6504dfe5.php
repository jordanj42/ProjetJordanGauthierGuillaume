<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4b312305f3067f8c0925b8df0c1c5542e182fce65664d98e20e086f50892a9b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/fd/fdb8f4f1c05af729253987a0b7ea4bffe13e35165a1419bcf83d440a6504dfe5.php
        $__internal_81f855fb27a291d0fce84bdfd71ebc6b52ea5094ee99619617eed2ed801e5edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f855fb27a291d0fce84bdfd71ebc6b52ea5094ee99619617eed2ed801e5edb->enter($__internal_81f855fb27a291d0fce84bdfd71ebc6b52ea5094ee99619617eed2ed801e5edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81f855fb27a291d0fce84bdfd71ebc6b52ea5094ee99619617eed2ed801e5edb->leave($__internal_81f855fb27a291d0fce84bdfd71ebc6b52ea5094ee99619617eed2ed801e5edb_prof);
=======
        $__internal_738a828d7ad017419f9d06ca86875d62384eb1ac6e78cb13892ed5a6d4df3807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738a828d7ad017419f9d06ca86875d62384eb1ac6e78cb13892ed5a6d4df3807->enter($__internal_738a828d7ad017419f9d06ca86875d62384eb1ac6e78cb13892ed5a6d4df3807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_738a828d7ad017419f9d06ca86875d62384eb1ac6e78cb13892ed5a6d4df3807->leave($__internal_738a828d7ad017419f9d06ca86875d62384eb1ac6e78cb13892ed5a6d4df3807_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/05/050cca441cb7e409502954d06c02b578cfdafbd708e946914cbf7c0a982b7c61.php

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/fd/fdb8f4f1c05af729253987a0b7ea4bffe13e35165a1419bcf83d440a6504dfe5.php
        $__internal_c9034fafb0752f3355e90351322c037e731412bbca9c94cd7552ca291009eb20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9034fafb0752f3355e90351322c037e731412bbca9c94cd7552ca291009eb20->enter($__internal_c9034fafb0752f3355e90351322c037e731412bbca9c94cd7552ca291009eb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));
=======
        $__internal_8e198dc99f043bf94d2281cc90862afe90359b9b23246813360454b5a8443199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e198dc99f043bf94d2281cc90862afe90359b9b23246813360454b5a8443199->enter($__internal_8e198dc99f043bf94d2281cc90862afe90359b9b23246813360454b5a8443199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/05/050cca441cb7e409502954d06c02b578cfdafbd708e946914cbf7c0a982b7c61.php

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
<<<<<<< HEAD:app/cache/dev/twig/fd/fdb8f4f1c05af729253987a0b7ea4bffe13e35165a1419bcf83d440a6504dfe5.php
        $__internal_c9034fafb0752f3355e90351322c037e731412bbca9c94cd7552ca291009eb20->leave($__internal_c9034fafb0752f3355e90351322c037e731412bbca9c94cd7552ca291009eb20_prof);
=======
        $__internal_8e198dc99f043bf94d2281cc90862afe90359b9b23246813360454b5a8443199->leave($__internal_8e198dc99f043bf94d2281cc90862afe90359b9b23246813360454b5a8443199_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/05/050cca441cb7e409502954d06c02b578cfdafbd708e946914cbf7c0a982b7c61.php

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/fd/fdb8f4f1c05af729253987a0b7ea4bffe13e35165a1419bcf83d440a6504dfe5.php
        $__internal_2e498ec211528d6b29756a9c272d4d0552f094e711bfa73cdad329b0e5ce1d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e498ec211528d6b29756a9c272d4d0552f094e711bfa73cdad329b0e5ce1d99->enter($__internal_2e498ec211528d6b29756a9c272d4d0552f094e711bfa73cdad329b0e5ce1d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
=======
        $__internal_b09a1badbc8b1bffd01a85971e4174056f44234beaa6ad23080a5be8abd410cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09a1badbc8b1bffd01a85971e4174056f44234beaa6ad23080a5be8abd410cb->enter($__internal_b09a1badbc8b1bffd01a85971e4174056f44234beaa6ad23080a5be8abd410cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/05/050cca441cb7e409502954d06c02b578cfdafbd708e946914cbf7c0a982b7c61.php

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
<<<<<<< HEAD:app/cache/dev/twig/fd/fdb8f4f1c05af729253987a0b7ea4bffe13e35165a1419bcf83d440a6504dfe5.php
        $__internal_2e498ec211528d6b29756a9c272d4d0552f094e711bfa73cdad329b0e5ce1d99->leave($__internal_2e498ec211528d6b29756a9c272d4d0552f094e711bfa73cdad329b0e5ce1d99_prof);
=======
        $__internal_b09a1badbc8b1bffd01a85971e4174056f44234beaa6ad23080a5be8abd410cb->leave($__internal_b09a1badbc8b1bffd01a85971e4174056f44234beaa6ad23080a5be8abd410cb_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/05/050cca441cb7e409502954d06c02b578cfdafbd708e946914cbf7c0a982b7c61.php

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/fd/fdb8f4f1c05af729253987a0b7ea4bffe13e35165a1419bcf83d440a6504dfe5.php
        $__internal_d95cfc575d9173eb41be2bf005104011840b81635d277f37ef4c7ea63c84afee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95cfc575d9173eb41be2bf005104011840b81635d277f37ef4c7ea63c84afee->enter($__internal_d95cfc575d9173eb41be2bf005104011840b81635d277f37ef4c7ea63c84afee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
=======
        $__internal_94f5d520e1ea8b0a5fe1db9e84643ee7dfeb6e9cf18dfa1ef166dcaf87d9c36e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f5d520e1ea8b0a5fe1db9e84643ee7dfeb6e9cf18dfa1ef166dcaf87d9c36e->enter($__internal_94f5d520e1ea8b0a5fe1db9e84643ee7dfeb6e9cf18dfa1ef166dcaf87d9c36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/05/050cca441cb7e409502954d06c02b578cfdafbd708e946914cbf7c0a982b7c61.php

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
<<<<<<< HEAD:app/cache/dev/twig/fd/fdb8f4f1c05af729253987a0b7ea4bffe13e35165a1419bcf83d440a6504dfe5.php
        $__internal_d95cfc575d9173eb41be2bf005104011840b81635d277f37ef4c7ea63c84afee->leave($__internal_d95cfc575d9173eb41be2bf005104011840b81635d277f37ef4c7ea63c84afee_prof);
=======
        $__internal_94f5d520e1ea8b0a5fe1db9e84643ee7dfeb6e9cf18dfa1ef166dcaf87d9c36e->leave($__internal_94f5d520e1ea8b0a5fe1db9e84643ee7dfeb6e9cf18dfa1ef166dcaf87d9c36e_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/05/050cca441cb7e409502954d06c02b578cfdafbd708e946914cbf7c0a982b7c61.php

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
