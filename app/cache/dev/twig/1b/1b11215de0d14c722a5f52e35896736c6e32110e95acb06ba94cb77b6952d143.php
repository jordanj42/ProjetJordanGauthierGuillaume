<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e528eec3b1aebb0ee17f5dd5ec5fc42cb2ad844bf24ee82b6d7cab8f0274cee0 extends Twig_Template
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
        $__internal_0025dfaaa3eda1c9249938ed0414ad66353009c17b97f1684502b5d8d3144b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0025dfaaa3eda1c9249938ed0414ad66353009c17b97f1684502b5d8d3144b1a->enter($__internal_0025dfaaa3eda1c9249938ed0414ad66353009c17b97f1684502b5d8d3144b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0025dfaaa3eda1c9249938ed0414ad66353009c17b97f1684502b5d8d3144b1a->leave($__internal_0025dfaaa3eda1c9249938ed0414ad66353009c17b97f1684502b5d8d3144b1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
