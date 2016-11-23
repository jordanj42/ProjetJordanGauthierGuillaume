<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_7978e5bd74655c24435b03a4250efa45876cf8a93d2712146288e9b84077f6b6 extends Twig_Template
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
        $__internal_68dc2add16dc6ff310b095db572c117df9ca1930d9c2ea6e458fda4bbe3ffe91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68dc2add16dc6ff310b095db572c117df9ca1930d9c2ea6e458fda4bbe3ffe91->enter($__internal_68dc2add16dc6ff310b095db572c117df9ca1930d9c2ea6e458fda4bbe3ffe91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_68dc2add16dc6ff310b095db572c117df9ca1930d9c2ea6e458fda4bbe3ffe91->leave($__internal_68dc2add16dc6ff310b095db572c117df9ca1930d9c2ea6e458fda4bbe3ffe91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
