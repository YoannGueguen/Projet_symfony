<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_316d22b0e3178201a79bf30df7f164418cb94ee3324c1ed9bf8e64b8c125b6dc extends Twig_Template
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
        $__internal_a43344c24f1e2aae23fb69062d9399cdf0de50d4a3f4d5acc72c703c1188b354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a43344c24f1e2aae23fb69062d9399cdf0de50d4a3f4d5acc72c703c1188b354->enter($__internal_a43344c24f1e2aae23fb69062d9399cdf0de50d4a3f4d5acc72c703c1188b354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_829b9f3e3fdd2f65610e226b64f39338ac7cc6b54bbb81067e02d3f397bed87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829b9f3e3fdd2f65610e226b64f39338ac7cc6b54bbb81067e02d3f397bed87b->enter($__internal_829b9f3e3fdd2f65610e226b64f39338ac7cc6b54bbb81067e02d3f397bed87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a43344c24f1e2aae23fb69062d9399cdf0de50d4a3f4d5acc72c703c1188b354->leave($__internal_a43344c24f1e2aae23fb69062d9399cdf0de50d4a3f4d5acc72c703c1188b354_prof);

        
        $__internal_829b9f3e3fdd2f65610e226b64f39338ac7cc6b54bbb81067e02d3f397bed87b->leave($__internal_829b9f3e3fdd2f65610e226b64f39338ac7cc6b54bbb81067e02d3f397bed87b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
