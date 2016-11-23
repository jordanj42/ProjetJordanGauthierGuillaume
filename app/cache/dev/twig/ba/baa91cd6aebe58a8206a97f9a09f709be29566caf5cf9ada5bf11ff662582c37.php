<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a2c96ccd6f2f4a6dc5a290699f7bc9ff271b44a6fe586b7d3b8252b6726ad09d extends Twig_Template
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
        $__internal_d78689c82bbcab5497ccc4fb389164d67923502a2528a389ab627c5a3026cce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78689c82bbcab5497ccc4fb389164d67923502a2528a389ab627c5a3026cce1->enter($__internal_d78689c82bbcab5497ccc4fb389164d67923502a2528a389ab627c5a3026cce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d78689c82bbcab5497ccc4fb389164d67923502a2528a389ab627c5a3026cce1->leave($__internal_d78689c82bbcab5497ccc4fb389164d67923502a2528a389ab627c5a3026cce1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
