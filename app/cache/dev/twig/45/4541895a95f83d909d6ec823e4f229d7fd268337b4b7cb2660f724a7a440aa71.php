<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b8cf496e8d773bcf1563a80fba25e33edc77c2661cac5a8ac482b1c1c92f28e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/45/4541895a95f83d909d6ec823e4f229d7fd268337b4b7cb2660f724a7a440aa71.php
        $__internal_b0096a86e940ddac453ebf633857c7f8140b5df1eb35a6283b0175bbc9ae9ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0096a86e940ddac453ebf633857c7f8140b5df1eb35a6283b0175bbc9ae9ae4->enter($__internal_b0096a86e940ddac453ebf633857c7f8140b5df1eb35a6283b0175bbc9ae9ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0096a86e940ddac453ebf633857c7f8140b5df1eb35a6283b0175bbc9ae9ae4->leave($__internal_b0096a86e940ddac453ebf633857c7f8140b5df1eb35a6283b0175bbc9ae9ae4_prof);
=======
        $__internal_a16dffb1b556e54a5953bb4d1f84428561a1be72c42eabe1c51d625265f02da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16dffb1b556e54a5953bb4d1f84428561a1be72c42eabe1c51d625265f02da1->enter($__internal_a16dffb1b556e54a5953bb4d1f84428561a1be72c42eabe1c51d625265f02da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a16dffb1b556e54a5953bb4d1f84428561a1be72c42eabe1c51d625265f02da1->leave($__internal_a16dffb1b556e54a5953bb4d1f84428561a1be72c42eabe1c51d625265f02da1_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/35/354aaa28f198cb7bf68a8ead9e76528d0f4c81379db10e193e54363f6569b1f2.php

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/45/4541895a95f83d909d6ec823e4f229d7fd268337b4b7cb2660f724a7a440aa71.php
        $__internal_d4ac714ef8fbda06119a42c70d7e563a88f6ae24de8f09d8bfa060be379db1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ac714ef8fbda06119a42c70d7e563a88f6ae24de8f09d8bfa060be379db1eb->enter($__internal_d4ac714ef8fbda06119a42c70d7e563a88f6ae24de8f09d8bfa060be379db1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
=======
        $__internal_db7de7c137322f89e797f04a67cb981158bb9ab84ed39b0092bc0d16547d69e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7de7c137322f89e797f04a67cb981158bb9ab84ed39b0092bc0d16547d69e1->enter($__internal_db7de7c137322f89e797f04a67cb981158bb9ab84ed39b0092bc0d16547d69e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/35/354aaa28f198cb7bf68a8ead9e76528d0f4c81379db10e193e54363f6569b1f2.php

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
<<<<<<< HEAD:app/cache/dev/twig/45/4541895a95f83d909d6ec823e4f229d7fd268337b4b7cb2660f724a7a440aa71.php
        $__internal_d4ac714ef8fbda06119a42c70d7e563a88f6ae24de8f09d8bfa060be379db1eb->leave($__internal_d4ac714ef8fbda06119a42c70d7e563a88f6ae24de8f09d8bfa060be379db1eb_prof);
=======
        $__internal_db7de7c137322f89e797f04a67cb981158bb9ab84ed39b0092bc0d16547d69e1->leave($__internal_db7de7c137322f89e797f04a67cb981158bb9ab84ed39b0092bc0d16547d69e1_prof);
>>>>>>> 8965ef2c893385b9f2333255f6db2c0c2353b85d:app/cache/dev/twig/35/354aaa28f198cb7bf68a8ead9e76528d0f4c81379db10e193e54363f6569b1f2.php

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  71 => 27,  53 => 9,  50 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
";
    }
}
