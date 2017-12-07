<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7eccb48954b0631b3c684ce5b7bf58546b6c16056b61032ab6e278944ccd2f0e extends Twig_Template
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
        $__internal_d267c4f3f5ea7e8c01ba12398bffe2d2acda81aca738bca5b20f6d0b525a8b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d267c4f3f5ea7e8c01ba12398bffe2d2acda81aca738bca5b20f6d0b525a8b38->enter($__internal_d267c4f3f5ea7e8c01ba12398bffe2d2acda81aca738bca5b20f6d0b525a8b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_cab46a930405f54648f6710c6f965b3c7a30febfabcf27057ac8075a494818f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab46a930405f54648f6710c6f965b3c7a30febfabcf27057ac8075a494818f2->enter($__internal_cab46a930405f54648f6710c6f965b3c7a30febfabcf27057ac8075a494818f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d267c4f3f5ea7e8c01ba12398bffe2d2acda81aca738bca5b20f6d0b525a8b38->leave($__internal_d267c4f3f5ea7e8c01ba12398bffe2d2acda81aca738bca5b20f6d0b525a8b38_prof);

        
        $__internal_cab46a930405f54648f6710c6f965b3c7a30febfabcf27057ac8075a494818f2->leave($__internal_cab46a930405f54648f6710c6f965b3c7a30febfabcf27057ac8075a494818f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
