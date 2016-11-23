<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5dedab4e39b51a2e2daa411abe43854ac76f24f5dc645a35032d881ed04f3c7d extends Twig_Template
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
        $__internal_0d40f1235c30cc12e0a2fe372b70cbc7492e16b65ffaa1656e76d857f8ed08d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d40f1235c30cc12e0a2fe372b70cbc7492e16b65ffaa1656e76d857f8ed08d3->enter($__internal_0d40f1235c30cc12e0a2fe372b70cbc7492e16b65ffaa1656e76d857f8ed08d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0d40f1235c30cc12e0a2fe372b70cbc7492e16b65ffaa1656e76d857f8ed08d3->leave($__internal_0d40f1235c30cc12e0a2fe372b70cbc7492e16b65ffaa1656e76d857f8ed08d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
