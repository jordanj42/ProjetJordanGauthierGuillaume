<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_59ce9ce873cb03955be9e73e388b4ae5c1017d90561704daf21a898b4eb07f6f extends Twig_Template
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
        $__internal_c1e5b01d3240e24f3ba8ac1567219dc01dc002dd14b84a785dd79573fa5238f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e5b01d3240e24f3ba8ac1567219dc01dc002dd14b84a785dd79573fa5238f8->enter($__internal_c1e5b01d3240e24f3ba8ac1567219dc01dc002dd14b84a785dd79573fa5238f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c1e5b01d3240e24f3ba8ac1567219dc01dc002dd14b84a785dd79573fa5238f8->leave($__internal_c1e5b01d3240e24f3ba8ac1567219dc01dc002dd14b84a785dd79573fa5238f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
