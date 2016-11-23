<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_4a44e3ad975dabc3701949c305786034c560937c848b7befca007d3de5370fc0 extends Twig_Template
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
        $__internal_f6fa383c31738b920ad899be7891c71df496065bc75d7d6a7f9fb6275e2dc1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fa383c31738b920ad899be7891c71df496065bc75d7d6a7f9fb6275e2dc1a8->enter($__internal_f6fa383c31738b920ad899be7891c71df496065bc75d7d6a7f9fb6275e2dc1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_f6fa383c31738b920ad899be7891c71df496065bc75d7d6a7f9fb6275e2dc1a8->leave($__internal_f6fa383c31738b920ad899be7891c71df496065bc75d7d6a7f9fb6275e2dc1a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
