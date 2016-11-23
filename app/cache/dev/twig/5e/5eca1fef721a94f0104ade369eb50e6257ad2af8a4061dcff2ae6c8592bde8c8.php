<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_6868c03e292c320e0fee3c17989fad1e4b8ea71000731ce24f7edc6a0a60bd0e extends Twig_Template
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
        $__internal_3dc41f7a69559e0d5a16e5c9465ab1fc8ad60b66fa8c9b574fa3462f55399a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc41f7a69559e0d5a16e5c9465ab1fc8ad60b66fa8c9b574fa3462f55399a9b->enter($__internal_3dc41f7a69559e0d5a16e5c9465ab1fc8ad60b66fa8c9b574fa3462f55399a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3dc41f7a69559e0d5a16e5c9465ab1fc8ad60b66fa8c9b574fa3462f55399a9b->leave($__internal_3dc41f7a69559e0d5a16e5c9465ab1fc8ad60b66fa8c9b574fa3462f55399a9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
