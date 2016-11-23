<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_fb32e7c0cb7582a4232fa37bfc1532c9190a6380975aedc3ce5014f05b6a6ed9 extends Twig_Template
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
        $__internal_189e0bcad44f4bd7a45c8c0c0abacbdd5cd6d7a1b283b926a127717206974239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189e0bcad44f4bd7a45c8c0c0abacbdd5cd6d7a1b283b926a127717206974239->enter($__internal_189e0bcad44f4bd7a45c8c0c0abacbdd5cd6d7a1b283b926a127717206974239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_189e0bcad44f4bd7a45c8c0c0abacbdd5cd6d7a1b283b926a127717206974239->leave($__internal_189e0bcad44f4bd7a45c8c0c0abacbdd5cd6d7a1b283b926a127717206974239_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
