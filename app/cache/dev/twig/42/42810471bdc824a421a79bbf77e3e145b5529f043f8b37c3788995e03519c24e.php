<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0c8d5ad8cec1ee1a10f6effd86f28454991bf89950ab06df8caa53c97b9d4a83 extends Twig_Template
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
        $__internal_cf33edaefe1e5637f0662024652fd6d4fb61b543eba246f917ba0e6c735cb9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf33edaefe1e5637f0662024652fd6d4fb61b543eba246f917ba0e6c735cb9e2->enter($__internal_cf33edaefe1e5637f0662024652fd6d4fb61b543eba246f917ba0e6c735cb9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cf33edaefe1e5637f0662024652fd6d4fb61b543eba246f917ba0e6c735cb9e2->leave($__internal_cf33edaefe1e5637f0662024652fd6d4fb61b543eba246f917ba0e6c735cb9e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
