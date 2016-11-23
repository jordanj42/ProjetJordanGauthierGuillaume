<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_56508341a4007490258eec6a6af08437ae2ce11e6d0a9e7f99eda35d775b8ccb extends Twig_Template
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
        $__internal_7144e276d7ade8cb3e1bb0f42dfee97d6b83aca130d6bedd5d502f3cae804287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7144e276d7ade8cb3e1bb0f42dfee97d6b83aca130d6bedd5d502f3cae804287->enter($__internal_7144e276d7ade8cb3e1bb0f42dfee97d6b83aca130d6bedd5d502f3cae804287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7144e276d7ade8cb3e1bb0f42dfee97d6b83aca130d6bedd5d502f3cae804287->leave($__internal_7144e276d7ade8cb3e1bb0f42dfee97d6b83aca130d6bedd5d502f3cae804287_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
