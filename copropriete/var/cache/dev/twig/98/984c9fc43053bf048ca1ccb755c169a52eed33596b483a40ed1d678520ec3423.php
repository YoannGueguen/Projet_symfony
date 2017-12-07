<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_bf67e48e3ab610965e018081e238ecefc00cad9a8e31ad1ce7d5d0f1e4ceceae extends Twig_Template
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
        $__internal_51ad6b425df3acd206d0e5289454d749b6d580ac7ccaf7a55b7b62353fa24f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ad6b425df3acd206d0e5289454d749b6d580ac7ccaf7a55b7b62353fa24f33->enter($__internal_51ad6b425df3acd206d0e5289454d749b6d580ac7ccaf7a55b7b62353fa24f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_fc6dad8f6ab1ea400965107e09ebcd8cb0510a08527a767fe99b7b9e131f63be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6dad8f6ab1ea400965107e09ebcd8cb0510a08527a767fe99b7b9e131f63be->enter($__internal_fc6dad8f6ab1ea400965107e09ebcd8cb0510a08527a767fe99b7b9e131f63be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_51ad6b425df3acd206d0e5289454d749b6d580ac7ccaf7a55b7b62353fa24f33->leave($__internal_51ad6b425df3acd206d0e5289454d749b6d580ac7ccaf7a55b7b62353fa24f33_prof);

        
        $__internal_fc6dad8f6ab1ea400965107e09ebcd8cb0510a08527a767fe99b7b9e131f63be->leave($__internal_fc6dad8f6ab1ea400965107e09ebcd8cb0510a08527a767fe99b7b9e131f63be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
