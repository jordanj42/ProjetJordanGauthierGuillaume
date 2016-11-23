<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ce91813ee450a554009b51115a25c4caae7cf58371605e7d2cea1059709c5cdc extends Twig_Template
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
        $__internal_2fbeaee405a0f3204ad73cda85f30bae828ca710ae214c012014ae994ed59974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbeaee405a0f3204ad73cda85f30bae828ca710ae214c012014ae994ed59974->enter($__internal_2fbeaee405a0f3204ad73cda85f30bae828ca710ae214c012014ae994ed59974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_2fbeaee405a0f3204ad73cda85f30bae828ca710ae214c012014ae994ed59974->leave($__internal_2fbeaee405a0f3204ad73cda85f30bae828ca710ae214c012014ae994ed59974_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
