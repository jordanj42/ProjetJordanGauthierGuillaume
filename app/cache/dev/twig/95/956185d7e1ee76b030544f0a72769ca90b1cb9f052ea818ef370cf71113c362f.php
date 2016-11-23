<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8d8c87b2e0d7db99e6603581431c2db8ff859383d405af8ad48a15c63264814a extends Twig_Template
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
        $__internal_3b09b9d6aa2ce62547fed27b0f35249d3820983d1f13854d591cd835d956db93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b09b9d6aa2ce62547fed27b0f35249d3820983d1f13854d591cd835d956db93->enter($__internal_3b09b9d6aa2ce62547fed27b0f35249d3820983d1f13854d591cd835d956db93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3b09b9d6aa2ce62547fed27b0f35249d3820983d1f13854d591cd835d956db93->leave($__internal_3b09b9d6aa2ce62547fed27b0f35249d3820983d1f13854d591cd835d956db93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
