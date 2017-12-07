<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_941cdb0a4e50f923bd7b2744454317b38598ba2d267835439a8d60a19aff1404 extends Twig_Template
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
        $__internal_49700b718595c4b6d9771d40b8d7f9c85026efdd85a02c64f79a4a0e21b6d1ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49700b718595c4b6d9771d40b8d7f9c85026efdd85a02c64f79a4a0e21b6d1ce->enter($__internal_49700b718595c4b6d9771d40b8d7f9c85026efdd85a02c64f79a4a0e21b6d1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_60ae7bfdef00f4ca97aa4155d48da6a08a728f761935991594f996b771407d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ae7bfdef00f4ca97aa4155d48da6a08a728f761935991594f996b771407d61->enter($__internal_60ae7bfdef00f4ca97aa4155d48da6a08a728f761935991594f996b771407d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_49700b718595c4b6d9771d40b8d7f9c85026efdd85a02c64f79a4a0e21b6d1ce->leave($__internal_49700b718595c4b6d9771d40b8d7f9c85026efdd85a02c64f79a4a0e21b6d1ce_prof);

        
        $__internal_60ae7bfdef00f4ca97aa4155d48da6a08a728f761935991594f996b771407d61->leave($__internal_60ae7bfdef00f4ca97aa4155d48da6a08a728f761935991594f996b771407d61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
