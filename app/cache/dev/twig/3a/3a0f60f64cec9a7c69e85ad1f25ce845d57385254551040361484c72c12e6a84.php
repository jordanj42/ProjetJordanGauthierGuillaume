<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d5d72ae68264d32fe4754b332ed107f3b67ae1c965c26ba7c5cd41cd934efa14 extends Twig_Template
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
        $__internal_e6bafd970dcf8b254bd403f6d958d2b75201fbdf07b603f3a167f693d1b537ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6bafd970dcf8b254bd403f6d958d2b75201fbdf07b603f3a167f693d1b537ed->enter($__internal_e6bafd970dcf8b254bd403f6d958d2b75201fbdf07b603f3a167f693d1b537ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e6bafd970dcf8b254bd403f6d958d2b75201fbdf07b603f3a167f693d1b537ed->leave($__internal_e6bafd970dcf8b254bd403f6d958d2b75201fbdf07b603f3a167f693d1b537ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
