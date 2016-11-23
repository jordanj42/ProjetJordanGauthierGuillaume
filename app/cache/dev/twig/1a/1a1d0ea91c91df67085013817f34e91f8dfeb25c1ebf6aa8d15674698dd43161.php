<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ec9bec6110db76ebfd9d80217212752041d49cd572334a270665cd3910881bfe extends Twig_Template
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
        $__internal_b2000c6746e2c7849b3dd2dfb81983d379efeca602abe69ff07d03297c633e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2000c6746e2c7849b3dd2dfb81983d379efeca602abe69ff07d03297c633e87->enter($__internal_b2000c6746e2c7849b3dd2dfb81983d379efeca602abe69ff07d03297c633e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b2000c6746e2c7849b3dd2dfb81983d379efeca602abe69ff07d03297c633e87->leave($__internal_b2000c6746e2c7849b3dd2dfb81983d379efeca602abe69ff07d03297c633e87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
