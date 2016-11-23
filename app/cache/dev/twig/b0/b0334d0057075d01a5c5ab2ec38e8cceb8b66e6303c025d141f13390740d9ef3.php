<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_29a899bf25e3cd4b8801b63998ae7126404da383f0dd8bc0041821e4136445e1 extends Twig_Template
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
        $__internal_1552d729471fd0b976fb3b62046c602bd8a0d47249fa301c844a98a1dc5af7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1552d729471fd0b976fb3b62046c602bd8a0d47249fa301c844a98a1dc5af7fa->enter($__internal_1552d729471fd0b976fb3b62046c602bd8a0d47249fa301c844a98a1dc5af7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1552d729471fd0b976fb3b62046c602bd8a0d47249fa301c844a98a1dc5af7fa->leave($__internal_1552d729471fd0b976fb3b62046c602bd8a0d47249fa301c844a98a1dc5af7fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
