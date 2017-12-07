<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_5a9333badc484bd217e3a06d41ff5df228e73382f960a32beca2eed80ba85e81 extends Twig_Template
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
        $__internal_763c96d5bb9b6af023d08daaca5e7dc80ca6c64ba142a83b3cd5834bca431e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763c96d5bb9b6af023d08daaca5e7dc80ca6c64ba142a83b3cd5834bca431e13->enter($__internal_763c96d5bb9b6af023d08daaca5e7dc80ca6c64ba142a83b3cd5834bca431e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_e3ff3c6a40f666e6bebe3a461cf3e127392deb5f3e799a9cacdb140dff23b2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ff3c6a40f666e6bebe3a461cf3e127392deb5f3e799a9cacdb140dff23b2d6->enter($__internal_e3ff3c6a40f666e6bebe3a461cf3e127392deb5f3e799a9cacdb140dff23b2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_763c96d5bb9b6af023d08daaca5e7dc80ca6c64ba142a83b3cd5834bca431e13->leave($__internal_763c96d5bb9b6af023d08daaca5e7dc80ca6c64ba142a83b3cd5834bca431e13_prof);

        
        $__internal_e3ff3c6a40f666e6bebe3a461cf3e127392deb5f3e799a9cacdb140dff23b2d6->leave($__internal_e3ff3c6a40f666e6bebe3a461cf3e127392deb5f3e799a9cacdb140dff23b2d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
