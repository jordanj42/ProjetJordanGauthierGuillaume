<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_e174eed9fd30a59047b5bc1453ec3db4810ac416dca8916877033b1197115984 extends Twig_Template
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
<<<<<<< HEAD:app/cache/dev/twig/59/5932e884539be781ea7f548fa9c4c473341be6d48230f80fcaf1b93dd72f3227.php
        $__internal_7ff3bffcb814543b0fd529ebe85beebed7ac4cb1991d822843cc061e966de9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff3bffcb814543b0fd529ebe85beebed7ac4cb1991d822843cc061e966de9d7->enter($__internal_7ff3bffcb814543b0fd529ebe85beebed7ac4cb1991d822843cc061e966de9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
=======
        $__internal_95ad292ab39d630f82857a6a5986d2d77b50d0ff904d660eaa2d53b55bfc850b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ad292ab39d630f82857a6a5986d2d77b50d0ff904d660eaa2d53b55bfc850b->enter($__internal_95ad292ab39d630f82857a6a5986d2d77b50d0ff904d660eaa2d53b55bfc850b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/b2/b2bcd32f1db9b2093a6ebfceb2b36cc32039d1cccc42faf0e037f11f3767565a.php

        // line 1
        echo "<div class=\"sf-toolbar-block sf-toolbar-block-";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " sf-toolbar-status-";
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "normal")) : ("normal")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("additional_classes", $context)) ? (_twig_default_filter((isset($context["additional_classes"]) ? $context["additional_classes"] : $this->getContext($context, "additional_classes")), "")) : ("")), "html", null, true);
        echo "\">
    ";
        // line 2
        if (( !array_key_exists("link", $context) || (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "        <div class=\"sf-toolbar-icon\">";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
    ";
        // line 4
        if (( !array_key_exists("link", $context) || (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")))) {
            echo "</a>";
        }
        // line 5
        echo "        <div class=\"sf-toolbar-info\">";
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
<<<<<<< HEAD:app/cache/dev/twig/59/5932e884539be781ea7f548fa9c4c473341be6d48230f80fcaf1b93dd72f3227.php
        $__internal_7ff3bffcb814543b0fd529ebe85beebed7ac4cb1991d822843cc061e966de9d7->leave($__internal_7ff3bffcb814543b0fd529ebe85beebed7ac4cb1991d822843cc061e966de9d7_prof);
=======
        $__internal_95ad292ab39d630f82857a6a5986d2d77b50d0ff904d660eaa2d53b55bfc850b->leave($__internal_95ad292ab39d630f82857a6a5986d2d77b50d0ff904d660eaa2d53b55bfc850b_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/b2/b2bcd32f1db9b2093a6ebfceb2b36cc32039d1cccc42faf0e037f11f3767565a.php

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  42 => 4,  37 => 3,  31 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"sf-toolbar-block sf-toolbar-block-{{ name }} sf-toolbar-status-{{ status|default('normal') }} {{ additional_classes|default('') }}\">
    {% if link is not defined or link %}<a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{% endif %}
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
    {% if link is not defined or link %}</a>{% endif %}
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
</div>
";
    }
}
