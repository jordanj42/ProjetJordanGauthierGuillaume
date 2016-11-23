<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_0d303882b539f3836e79c383c5731599933c6fb8010096c935c238b4aa4d1363 extends Twig_Template
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
        $__internal_48bd39aa4ad55f4a1c24b5503b4d289cb4ce04b901b3fc107dc1e2fd0af45b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48bd39aa4ad55f4a1c24b5503b4d289cb4ce04b901b3fc107dc1e2fd0af45b3d->enter($__internal_48bd39aa4ad55f4a1c24b5503b4d289cb4ce04b901b3fc107dc1e2fd0af45b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_48bd39aa4ad55f4a1c24b5503b4d289cb4ce04b901b3fc107dc1e2fd0af45b3d->leave($__internal_48bd39aa4ad55f4a1c24b5503b4d289cb4ce04b901b3fc107dc1e2fd0af45b3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
    }
}
