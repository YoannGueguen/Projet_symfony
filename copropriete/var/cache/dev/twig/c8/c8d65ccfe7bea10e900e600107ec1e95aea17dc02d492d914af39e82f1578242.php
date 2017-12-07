<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1f2832e6c8748e6a985b4ff35d952d8f3054518b38c88a3b7efa9ca8915d2cff extends Twig_Template
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
        $__internal_0df92d50c9efab85490a13b60ed5a7232aad334a081a2d48bc7e5fbfcd90d2a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df92d50c9efab85490a13b60ed5a7232aad334a081a2d48bc7e5fbfcd90d2a0->enter($__internal_0df92d50c9efab85490a13b60ed5a7232aad334a081a2d48bc7e5fbfcd90d2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a234f2003a63774daf808a719c2aecf45327de5d75d167fb983bcee953ee1da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a234f2003a63774daf808a719c2aecf45327de5d75d167fb983bcee953ee1da7->enter($__internal_a234f2003a63774daf808a719c2aecf45327de5d75d167fb983bcee953ee1da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0df92d50c9efab85490a13b60ed5a7232aad334a081a2d48bc7e5fbfcd90d2a0->leave($__internal_0df92d50c9efab85490a13b60ed5a7232aad334a081a2d48bc7e5fbfcd90d2a0_prof);

        
        $__internal_a234f2003a63774daf808a719c2aecf45327de5d75d167fb983bcee953ee1da7->leave($__internal_a234f2003a63774daf808a719c2aecf45327de5d75d167fb983bcee953ee1da7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
