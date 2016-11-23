<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c21687f46d560f47c22569299e2ab84eac8a4f6b2676a37416824753d730ae95 extends Twig_Template
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
        $__internal_c100939d7b2fc08366d1f5827b1187b1fcfedd9c1c31803ed103a720d6589a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c100939d7b2fc08366d1f5827b1187b1fcfedd9c1c31803ed103a720d6589a44->enter($__internal_c100939d7b2fc08366d1f5827b1187b1fcfedd9c1c31803ed103a720d6589a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c100939d7b2fc08366d1f5827b1187b1fcfedd9c1c31803ed103a720d6589a44->leave($__internal_c100939d7b2fc08366d1f5827b1187b1fcfedd9c1c31803ed103a720d6589a44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
