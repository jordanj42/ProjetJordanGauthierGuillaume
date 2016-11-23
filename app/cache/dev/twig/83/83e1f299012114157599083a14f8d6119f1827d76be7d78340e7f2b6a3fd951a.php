<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c39bf66499dc36939e82f2382d7740e8c8c17d1dbabfd190a561ede41935a950 extends Twig_Template
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
        $__internal_7191c606708bc5a576bcd6f22aa04f9fec53ddfbc6780fd950b05e7b67edef20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7191c606708bc5a576bcd6f22aa04f9fec53ddfbc6780fd950b05e7b67edef20->enter($__internal_7191c606708bc5a576bcd6f22aa04f9fec53ddfbc6780fd950b05e7b67edef20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7191c606708bc5a576bcd6f22aa04f9fec53ddfbc6780fd950b05e7b67edef20->leave($__internal_7191c606708bc5a576bcd6f22aa04f9fec53ddfbc6780fd950b05e7b67edef20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
