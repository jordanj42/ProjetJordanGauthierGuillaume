<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_ee3c19b1f749750e862c0a4e1c280bea0fef3a07eb853aceb5e470ed7ca16a24 extends Twig_Template
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
        $__internal_56fbf47f3ffdf48a561a1da2db190de386ad76bfd6171bdbf2f0bb97e3ee28bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fbf47f3ffdf48a561a1da2db190de386ad76bfd6171bdbf2f0bb97e3ee28bc->enter($__internal_56fbf47f3ffdf48a561a1da2db190de386ad76bfd6171bdbf2f0bb97e3ee28bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_56fbf47f3ffdf48a561a1da2db190de386ad76bfd6171bdbf2f0bb97e3ee28bc->leave($__internal_56fbf47f3ffdf48a561a1da2db190de386ad76bfd6171bdbf2f0bb97e3ee28bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
