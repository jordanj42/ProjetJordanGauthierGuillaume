<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_55211c9011aa3c44d49971da81b534d427614804784674c70519cc0d43f24a0a extends Twig_Template
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
        $__internal_8c612b5149130032f5a8098de260b09f7b1b7236f03380bc47a4bc061ed9380b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c612b5149130032f5a8098de260b09f7b1b7236f03380bc47a4bc061ed9380b->enter($__internal_8c612b5149130032f5a8098de260b09f7b1b7236f03380bc47a4bc061ed9380b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_8c612b5149130032f5a8098de260b09f7b1b7236f03380bc47a4bc061ed9380b->leave($__internal_8c612b5149130032f5a8098de260b09f7b1b7236f03380bc47a4bc061ed9380b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
