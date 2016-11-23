<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4792e8349f128cc61d004a15fbef39879ea42652b7ccbb9ab446d60a1790d52c extends Twig_Template
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
        $__internal_c542378698fb4bf33918d9f47efeed5703218aba21be087b86581089e617a68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c542378698fb4bf33918d9f47efeed5703218aba21be087b86581089e617a68a->enter($__internal_c542378698fb4bf33918d9f47efeed5703218aba21be087b86581089e617a68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c542378698fb4bf33918d9f47efeed5703218aba21be087b86581089e617a68a->leave($__internal_c542378698fb4bf33918d9f47efeed5703218aba21be087b86581089e617a68a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
