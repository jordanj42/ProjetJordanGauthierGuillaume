<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f7af31e5c39e067865864c9b3cb12757b29ae794b491dcb09930cca4d6007723 extends Twig_Template
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
        $__internal_eef86850a63d326018df81486f3bf06e4b764e1b3324b8ddec432fd3f29974b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef86850a63d326018df81486f3bf06e4b764e1b3324b8ddec432fd3f29974b6->enter($__internal_eef86850a63d326018df81486f3bf06e4b764e1b3324b8ddec432fd3f29974b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_eef86850a63d326018df81486f3bf06e4b764e1b3324b8ddec432fd3f29974b6->leave($__internal_eef86850a63d326018df81486f3bf06e4b764e1b3324b8ddec432fd3f29974b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
