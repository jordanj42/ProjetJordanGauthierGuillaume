<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6f8a113fa84cec338a90ba23e5f1f1a631386d07a0f2dc6fc681b3a6456505d9 extends Twig_Template
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
        $__internal_9662b16578416b600c3bb77292b17bc0bc7a3a9993f7878a421b53bc2b93cd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9662b16578416b600c3bb77292b17bc0bc7a3a9993f7878a421b53bc2b93cd76->enter($__internal_9662b16578416b600c3bb77292b17bc0bc7a3a9993f7878a421b53bc2b93cd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9662b16578416b600c3bb77292b17bc0bc7a3a9993f7878a421b53bc2b93cd76->leave($__internal_9662b16578416b600c3bb77292b17bc0bc7a3a9993f7878a421b53bc2b93cd76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
