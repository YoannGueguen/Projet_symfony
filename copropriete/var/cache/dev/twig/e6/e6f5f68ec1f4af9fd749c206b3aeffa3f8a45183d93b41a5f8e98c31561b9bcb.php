<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1680dd061a058fb299f0a187bafa7963a4019ef1447caa7231fd9d04326427aa extends Twig_Template
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
        $__internal_10607f7fb5f8f0ef165e91078ec9dc5ef23f5b37703cc0b7f459ef7a1387d51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10607f7fb5f8f0ef165e91078ec9dc5ef23f5b37703cc0b7f459ef7a1387d51a->enter($__internal_10607f7fb5f8f0ef165e91078ec9dc5ef23f5b37703cc0b7f459ef7a1387d51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_8ba631281cd6bbb776adc47c43f290196aa5652d746276c365081f3dadb72d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba631281cd6bbb776adc47c43f290196aa5652d746276c365081f3dadb72d7e->enter($__internal_8ba631281cd6bbb776adc47c43f290196aa5652d746276c365081f3dadb72d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_10607f7fb5f8f0ef165e91078ec9dc5ef23f5b37703cc0b7f459ef7a1387d51a->leave($__internal_10607f7fb5f8f0ef165e91078ec9dc5ef23f5b37703cc0b7f459ef7a1387d51a_prof);

        
        $__internal_8ba631281cd6bbb776adc47c43f290196aa5652d746276c365081f3dadb72d7e->leave($__internal_8ba631281cd6bbb776adc47c43f290196aa5652d746276c365081f3dadb72d7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
