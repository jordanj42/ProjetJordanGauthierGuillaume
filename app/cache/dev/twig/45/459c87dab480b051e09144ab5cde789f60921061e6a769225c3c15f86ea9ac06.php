<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3598b08333f32250a1a4fcd28aee03771cabb4fd2cb4b057274a4d0e6f725aea extends Twig_Template
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
        $__internal_71250b294081c791f48d86eade577c4d4f9ba44a436aedfd387704fb9231bacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71250b294081c791f48d86eade577c4d4f9ba44a436aedfd387704fb9231bacb->enter($__internal_71250b294081c791f48d86eade577c4d4f9ba44a436aedfd387704fb9231bacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_71250b294081c791f48d86eade577c4d4f9ba44a436aedfd387704fb9231bacb->leave($__internal_71250b294081c791f48d86eade577c4d4f9ba44a436aedfd387704fb9231bacb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
