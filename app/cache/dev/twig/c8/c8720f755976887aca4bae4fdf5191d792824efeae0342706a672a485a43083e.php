<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_fa0bee7d4c8bf673da0e9c7b2f2590b53ec588f3294473b85c4ebf724d2d20cc extends Twig_Template
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
        $__internal_f89a492d809677ea163da7093a986f174bb905b2a33e3145b4c42bc5906a6361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89a492d809677ea163da7093a986f174bb905b2a33e3145b4c42bc5906a6361->enter($__internal_f89a492d809677ea163da7093a986f174bb905b2a33e3145b4c42bc5906a6361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f89a492d809677ea163da7093a986f174bb905b2a33e3145b4c42bc5906a6361->leave($__internal_f89a492d809677ea163da7093a986f174bb905b2a33e3145b4c42bc5906a6361_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
