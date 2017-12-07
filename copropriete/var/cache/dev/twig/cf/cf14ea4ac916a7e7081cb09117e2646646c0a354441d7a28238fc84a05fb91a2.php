<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2f089b3a69169d1f04065670b6e6928fff13bb3b4137052a7be721311fd8ec82 extends Twig_Template
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
        $__internal_a878dbbb7b60e8e9d856a9d27f9f16b41c4d0d1a51d0dc104417f887044231e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a878dbbb7b60e8e9d856a9d27f9f16b41c4d0d1a51d0dc104417f887044231e1->enter($__internal_a878dbbb7b60e8e9d856a9d27f9f16b41c4d0d1a51d0dc104417f887044231e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1338d9d90770a60cc89c2a71400e198f3670be9114100e4cdda482ca16776909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1338d9d90770a60cc89c2a71400e198f3670be9114100e4cdda482ca16776909->enter($__internal_1338d9d90770a60cc89c2a71400e198f3670be9114100e4cdda482ca16776909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a878dbbb7b60e8e9d856a9d27f9f16b41c4d0d1a51d0dc104417f887044231e1->leave($__internal_a878dbbb7b60e8e9d856a9d27f9f16b41c4d0d1a51d0dc104417f887044231e1_prof);

        
        $__internal_1338d9d90770a60cc89c2a71400e198f3670be9114100e4cdda482ca16776909->leave($__internal_1338d9d90770a60cc89c2a71400e198f3670be9114100e4cdda482ca16776909_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
