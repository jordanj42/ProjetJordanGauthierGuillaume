<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_376baea2e3d872f26027018edfa482dbf02fa957c8092c5116fea9e3cedac8fc extends Twig_Template
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
        $__internal_05d8c3455b27052da462b514a22a6135afc7a2631c65477ee134cffa0bb2a0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d8c3455b27052da462b514a22a6135afc7a2631c65477ee134cffa0bb2a0a3->enter($__internal_05d8c3455b27052da462b514a22a6135afc7a2631c65477ee134cffa0bb2a0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_05d8c3455b27052da462b514a22a6135afc7a2631c65477ee134cffa0bb2a0a3->leave($__internal_05d8c3455b27052da462b514a22a6135afc7a2631c65477ee134cffa0bb2a0a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
