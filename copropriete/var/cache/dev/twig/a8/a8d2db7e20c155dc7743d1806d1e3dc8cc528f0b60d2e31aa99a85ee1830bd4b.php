<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6cfdd71e94444c899edef362485c9beedc392f4f3ee66b627195df79810d6cfc extends Twig_Template
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
        $__internal_9b750cc4ac25c8cd4646948f8372ff84ed9d43b2319784808e77ddd20d43ac90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b750cc4ac25c8cd4646948f8372ff84ed9d43b2319784808e77ddd20d43ac90->enter($__internal_9b750cc4ac25c8cd4646948f8372ff84ed9d43b2319784808e77ddd20d43ac90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_1d787fed3defa0bb393fcf09a6092ad2166b85f0fd41152c18c69fc536acd79a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d787fed3defa0bb393fcf09a6092ad2166b85f0fd41152c18c69fc536acd79a->enter($__internal_1d787fed3defa0bb393fcf09a6092ad2166b85f0fd41152c18c69fc536acd79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9b750cc4ac25c8cd4646948f8372ff84ed9d43b2319784808e77ddd20d43ac90->leave($__internal_9b750cc4ac25c8cd4646948f8372ff84ed9d43b2319784808e77ddd20d43ac90_prof);

        
        $__internal_1d787fed3defa0bb393fcf09a6092ad2166b85f0fd41152c18c69fc536acd79a->leave($__internal_1d787fed3defa0bb393fcf09a6092ad2166b85f0fd41152c18c69fc536acd79a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
