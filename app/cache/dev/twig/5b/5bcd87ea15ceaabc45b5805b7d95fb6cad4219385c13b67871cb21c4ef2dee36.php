<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_db540d7255ae8acd3797798626a58dacb4864ef63a5caf19a180ffafb9b0dc4d extends Twig_Template
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
        $__internal_29e95bf12ba2b8cee8e52f2752022dff10ba50fb19de8f230301dc17be121c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e95bf12ba2b8cee8e52f2752022dff10ba50fb19de8f230301dc17be121c44->enter($__internal_29e95bf12ba2b8cee8e52f2752022dff10ba50fb19de8f230301dc17be121c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_29e95bf12ba2b8cee8e52f2752022dff10ba50fb19de8f230301dc17be121c44->leave($__internal_29e95bf12ba2b8cee8e52f2752022dff10ba50fb19de8f230301dc17be121c44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
