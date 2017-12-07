<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c81f1c6b24828e5e3f130cc0a255a0d8b86a5c734d74ea9a9f0203248c8108e8 extends Twig_Template
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
        $__internal_290eb1d3f69eb8fb9b97119d524bce95597ae3178b5874e5d90f356ad3bb6b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290eb1d3f69eb8fb9b97119d524bce95597ae3178b5874e5d90f356ad3bb6b33->enter($__internal_290eb1d3f69eb8fb9b97119d524bce95597ae3178b5874e5d90f356ad3bb6b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_42065235cc5450a1754e415abf7209953df8de8b9c0335677f74206381837dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42065235cc5450a1754e415abf7209953df8de8b9c0335677f74206381837dc7->enter($__internal_42065235cc5450a1754e415abf7209953df8de8b9c0335677f74206381837dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_290eb1d3f69eb8fb9b97119d524bce95597ae3178b5874e5d90f356ad3bb6b33->leave($__internal_290eb1d3f69eb8fb9b97119d524bce95597ae3178b5874e5d90f356ad3bb6b33_prof);

        
        $__internal_42065235cc5450a1754e415abf7209953df8de8b9c0335677f74206381837dc7->leave($__internal_42065235cc5450a1754e415abf7209953df8de8b9c0335677f74206381837dc7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
