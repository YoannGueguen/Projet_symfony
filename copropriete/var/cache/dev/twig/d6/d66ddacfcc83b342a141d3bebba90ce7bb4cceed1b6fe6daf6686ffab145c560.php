<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_29ea97043b3b5e4b6e1faac109c06b0c36984ad1be1c7cdf8fe7ab8d4337a5a5 extends Twig_Template
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
        $__internal_94bad6a58107db623e8368c3ca34d3ee421d2401be38e2d9d61053027e2f7d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94bad6a58107db623e8368c3ca34d3ee421d2401be38e2d9d61053027e2f7d7f->enter($__internal_94bad6a58107db623e8368c3ca34d3ee421d2401be38e2d9d61053027e2f7d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_af3d0805cbfaf2fec5dfff9fb6a50f517e3917b36353780e937d10d51c95a1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3d0805cbfaf2fec5dfff9fb6a50f517e3917b36353780e937d10d51c95a1c9->enter($__internal_af3d0805cbfaf2fec5dfff9fb6a50f517e3917b36353780e937d10d51c95a1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_94bad6a58107db623e8368c3ca34d3ee421d2401be38e2d9d61053027e2f7d7f->leave($__internal_94bad6a58107db623e8368c3ca34d3ee421d2401be38e2d9d61053027e2f7d7f_prof);

        
        $__internal_af3d0805cbfaf2fec5dfff9fb6a50f517e3917b36353780e937d10d51c95a1c9->leave($__internal_af3d0805cbfaf2fec5dfff9fb6a50f517e3917b36353780e937d10d51c95a1c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
