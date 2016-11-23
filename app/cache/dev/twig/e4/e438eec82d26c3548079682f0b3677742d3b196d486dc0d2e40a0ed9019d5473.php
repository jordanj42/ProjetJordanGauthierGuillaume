<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4a4722de13d6cd734f3b34cdc418125083f39d0f86d015b8a496cd9452befeb0 extends Twig_Template
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
        $__internal_888723a9df0e4150fa72142faceda23b496da27008b376cda2b124b52f5e97da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888723a9df0e4150fa72142faceda23b496da27008b376cda2b124b52f5e97da->enter($__internal_888723a9df0e4150fa72142faceda23b496da27008b376cda2b124b52f5e97da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_888723a9df0e4150fa72142faceda23b496da27008b376cda2b124b52f5e97da->leave($__internal_888723a9df0e4150fa72142faceda23b496da27008b376cda2b124b52f5e97da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
