<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_724b9826dea2cfa15193513543f3b364b2c87498e341fe80c4f4561420c3a17a extends Twig_Template
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
        $__internal_d4daf1c3760e54ec499692f3d45ca7f099805b1350db1212949c610760ab0abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4daf1c3760e54ec499692f3d45ca7f099805b1350db1212949c610760ab0abc->enter($__internal_d4daf1c3760e54ec499692f3d45ca7f099805b1350db1212949c610760ab0abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d4daf1c3760e54ec499692f3d45ca7f099805b1350db1212949c610760ab0abc->leave($__internal_d4daf1c3760e54ec499692f3d45ca7f099805b1350db1212949c610760ab0abc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
