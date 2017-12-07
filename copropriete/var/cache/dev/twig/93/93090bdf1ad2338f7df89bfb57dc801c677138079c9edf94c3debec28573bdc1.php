<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_73e63b9267a385b723ce06ba75a68ccba6e68238e6a2c7fef16911bf0fc8d2d0 extends Twig_Template
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
        $__internal_de33dabd46b6580b5a64f4c238d529d28ef64f2d06ebdfa8c38738f8012be0c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de33dabd46b6580b5a64f4c238d529d28ef64f2d06ebdfa8c38738f8012be0c2->enter($__internal_de33dabd46b6580b5a64f4c238d529d28ef64f2d06ebdfa8c38738f8012be0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_f0a77cc7812c78fd5c50beece20fcd71ad72835c2c4d030b82ee4ee0e92a9338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a77cc7812c78fd5c50beece20fcd71ad72835c2c4d030b82ee4ee0e92a9338->enter($__internal_f0a77cc7812c78fd5c50beece20fcd71ad72835c2c4d030b82ee4ee0e92a9338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_de33dabd46b6580b5a64f4c238d529d28ef64f2d06ebdfa8c38738f8012be0c2->leave($__internal_de33dabd46b6580b5a64f4c238d529d28ef64f2d06ebdfa8c38738f8012be0c2_prof);

        
        $__internal_f0a77cc7812c78fd5c50beece20fcd71ad72835c2c4d030b82ee4ee0e92a9338->leave($__internal_f0a77cc7812c78fd5c50beece20fcd71ad72835c2c4d030b82ee4ee0e92a9338_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
