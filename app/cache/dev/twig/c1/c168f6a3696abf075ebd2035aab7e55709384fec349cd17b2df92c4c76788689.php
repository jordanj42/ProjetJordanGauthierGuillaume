<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_1df10875a3544771680e7d5c7dbd7d4633050773a87f6f790b507db3385fe21d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_305e54a004df3afc0c352761a62b6b9472976f5b372ddee243ea0919e571e3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305e54a004df3afc0c352761a62b6b9472976f5b372ddee243ea0919e571e3bf->enter($__internal_305e54a004df3afc0c352761a62b6b9472976f5b372ddee243ea0919e571e3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_305e54a004df3afc0c352761a62b6b9472976f5b372ddee243ea0919e571e3bf->leave($__internal_305e54a004df3afc0c352761a62b6b9472976f5b372ddee243ea0919e571e3bf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a8b314fb745e656582fa715e06bb6687217fb8c77946f648923aec4b68ea2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8b314fb745e656582fa715e06bb6687217fb8c77946f648923aec4b68ea2d3->enter($__internal_0a8b314fb745e656582fa715e06bb6687217fb8c77946f648923aec4b68ea2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0a8b314fb745e656582fa715e06bb6687217fb8c77946f648923aec4b68ea2d3->leave($__internal_0a8b314fb745e656582fa715e06bb6687217fb8c77946f648923aec4b68ea2d3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
