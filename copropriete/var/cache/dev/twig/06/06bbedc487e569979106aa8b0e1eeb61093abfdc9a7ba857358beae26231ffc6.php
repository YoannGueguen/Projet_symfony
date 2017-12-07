<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_7a65e2a9bbf4ce00847a826ee8c05a21954b62b953fcab9da798367070afea48 extends Twig_Template
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
        $__internal_1fab31d22e29edf1a3bd065431cda90193b0ea532e9bb63ce789fd227644d1df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fab31d22e29edf1a3bd065431cda90193b0ea532e9bb63ce789fd227644d1df->enter($__internal_1fab31d22e29edf1a3bd065431cda90193b0ea532e9bb63ce789fd227644d1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_982078b1a5d20472a6767833792193a3dd9987937aa348fd864d922a39cfaf17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982078b1a5d20472a6767833792193a3dd9987937aa348fd864d922a39cfaf17->enter($__internal_982078b1a5d20472a6767833792193a3dd9987937aa348fd864d922a39cfaf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_1fab31d22e29edf1a3bd065431cda90193b0ea532e9bb63ce789fd227644d1df->leave($__internal_1fab31d22e29edf1a3bd065431cda90193b0ea532e9bb63ce789fd227644d1df_prof);

        
        $__internal_982078b1a5d20472a6767833792193a3dd9987937aa348fd864d922a39cfaf17->leave($__internal_982078b1a5d20472a6767833792193a3dd9987937aa348fd864d922a39cfaf17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
