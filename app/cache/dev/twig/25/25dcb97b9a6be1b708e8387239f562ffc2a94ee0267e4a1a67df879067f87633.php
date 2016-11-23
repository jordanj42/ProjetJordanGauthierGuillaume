<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_78539120e444b5ac357d69b48d2dd860022f4f7d7f04b89dce237c1d956ea3a9 extends Twig_Template
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
        $__internal_ad2a50bbce35038811fcd5e03f7f2ef6ed89c4843544c3af7c5d3fb47f3889f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2a50bbce35038811fcd5e03f7f2ef6ed89c4843544c3af7c5d3fb47f3889f0->enter($__internal_ad2a50bbce35038811fcd5e03f7f2ef6ed89c4843544c3af7c5d3fb47f3889f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ad2a50bbce35038811fcd5e03f7f2ef6ed89c4843544c3af7c5d3fb47f3889f0->leave($__internal_ad2a50bbce35038811fcd5e03f7f2ef6ed89c4843544c3af7c5d3fb47f3889f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
