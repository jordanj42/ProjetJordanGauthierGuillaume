<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_91e35c84e38c849b1c3fd99d0fcca554b73cd62e2da45f3857ac0113a0a88490 extends Twig_Template
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
        $__internal_0703073d1c5590d2ff0861e5df06fc9e0eab78011f29832ddff0eddc0624822d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0703073d1c5590d2ff0861e5df06fc9e0eab78011f29832ddff0eddc0624822d->enter($__internal_0703073d1c5590d2ff0861e5df06fc9e0eab78011f29832ddff0eddc0624822d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0703073d1c5590d2ff0861e5df06fc9e0eab78011f29832ddff0eddc0624822d->leave($__internal_0703073d1c5590d2ff0861e5df06fc9e0eab78011f29832ddff0eddc0624822d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
