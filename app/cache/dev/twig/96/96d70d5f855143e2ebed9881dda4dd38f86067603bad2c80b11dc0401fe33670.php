<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_37f2dbf1ce4d218b4db40d4496ccff12fd04aac3a4c6a22598d174a3785c4d96 extends Twig_Template
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
        $__internal_5fb1fddf75a16219a90ac3fee42e0b6095e6188b8f727204e866ec559c465da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb1fddf75a16219a90ac3fee42e0b6095e6188b8f727204e866ec559c465da7->enter($__internal_5fb1fddf75a16219a90ac3fee42e0b6095e6188b8f727204e866ec559c465da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5fb1fddf75a16219a90ac3fee42e0b6095e6188b8f727204e866ec559c465da7->leave($__internal_5fb1fddf75a16219a90ac3fee42e0b6095e6188b8f727204e866ec559c465da7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
