<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_23b26384ccfbdfc3ac637202e8fd19023c137c038b34d43c28c1336569ae6970 extends Twig_Template
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
        $__internal_2be968aa937240b1fc4cbe72e8739e831401eb528b13438c83d21146c56278a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be968aa937240b1fc4cbe72e8739e831401eb528b13438c83d21146c56278a5->enter($__internal_2be968aa937240b1fc4cbe72e8739e831401eb528b13438c83d21146c56278a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_a38c662a3d058f8cc1da0cae72f9a5ee73d53ae89b62d4a0dd12d4ae525826cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38c662a3d058f8cc1da0cae72f9a5ee73d53ae89b62d4a0dd12d4ae525826cb->enter($__internal_a38c662a3d058f8cc1da0cae72f9a5ee73d53ae89b62d4a0dd12d4ae525826cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2be968aa937240b1fc4cbe72e8739e831401eb528b13438c83d21146c56278a5->leave($__internal_2be968aa937240b1fc4cbe72e8739e831401eb528b13438c83d21146c56278a5_prof);

        
        $__internal_a38c662a3d058f8cc1da0cae72f9a5ee73d53ae89b62d4a0dd12d4ae525826cb->leave($__internal_a38c662a3d058f8cc1da0cae72f9a5ee73d53ae89b62d4a0dd12d4ae525826cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
