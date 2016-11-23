<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_629f903be74cd9f7d85e2a198994665dab9df4465f7dda5a80ac4f7b8deadaad extends Twig_Template
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
        $__internal_478ba732b791fd0aa5f33112cf893ace2f8648a36246f9fbcc4454cdc5801a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478ba732b791fd0aa5f33112cf893ace2f8648a36246f9fbcc4454cdc5801a27->enter($__internal_478ba732b791fd0aa5f33112cf893ace2f8648a36246f9fbcc4454cdc5801a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_478ba732b791fd0aa5f33112cf893ace2f8648a36246f9fbcc4454cdc5801a27->leave($__internal_478ba732b791fd0aa5f33112cf893ace2f8648a36246f9fbcc4454cdc5801a27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
