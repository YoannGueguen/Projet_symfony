<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_233978913b15cdfd90e08a693d21ef9796983d6930712e3e9897ca93978349dc extends Twig_Template
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
        $__internal_7753eef9c3617c4d1ee31d4d68761c1a687237a9bf630ec62e0e16d3a6b61fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7753eef9c3617c4d1ee31d4d68761c1a687237a9bf630ec62e0e16d3a6b61fcc->enter($__internal_7753eef9c3617c4d1ee31d4d68761c1a687237a9bf630ec62e0e16d3a6b61fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_5e9f6adf9183160cc3332c133c1b19be85c220addeacedca6c8510874231130e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9f6adf9183160cc3332c133c1b19be85c220addeacedca6c8510874231130e->enter($__internal_5e9f6adf9183160cc3332c133c1b19be85c220addeacedca6c8510874231130e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7753eef9c3617c4d1ee31d4d68761c1a687237a9bf630ec62e0e16d3a6b61fcc->leave($__internal_7753eef9c3617c4d1ee31d4d68761c1a687237a9bf630ec62e0e16d3a6b61fcc_prof);

        
        $__internal_5e9f6adf9183160cc3332c133c1b19be85c220addeacedca6c8510874231130e->leave($__internal_5e9f6adf9183160cc3332c133c1b19be85c220addeacedca6c8510874231130e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
