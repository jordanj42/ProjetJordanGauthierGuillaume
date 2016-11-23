<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9b32bb8a6b5911c588d8458a9b3b7dead6632af055b288c9545bc362ba61db9a extends Twig_Template
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
        $__internal_6cdb947cff246240044f3eda7e8b134b8e10c0080310df3bf79551922970830a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdb947cff246240044f3eda7e8b134b8e10c0080310df3bf79551922970830a->enter($__internal_6cdb947cff246240044f3eda7e8b134b8e10c0080310df3bf79551922970830a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_6cdb947cff246240044f3eda7e8b134b8e10c0080310df3bf79551922970830a->leave($__internal_6cdb947cff246240044f3eda7e8b134b8e10c0080310df3bf79551922970830a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
    }
}
