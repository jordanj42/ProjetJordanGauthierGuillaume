<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c104c498c5ef5e6702b4cf21a6840589bcc97db3bea36e19c0ce51e33609b0c8 extends Twig_Template
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
        $__internal_677fe2c217a25cf1123c41fd48d04f91d7d28c124bcf8d386a10b0f76112220c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677fe2c217a25cf1123c41fd48d04f91d7d28c124bcf8d386a10b0f76112220c->enter($__internal_677fe2c217a25cf1123c41fd48d04f91d7d28c124bcf8d386a10b0f76112220c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_677fe2c217a25cf1123c41fd48d04f91d7d28c124bcf8d386a10b0f76112220c->leave($__internal_677fe2c217a25cf1123c41fd48d04f91d7d28c124bcf8d386a10b0f76112220c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
