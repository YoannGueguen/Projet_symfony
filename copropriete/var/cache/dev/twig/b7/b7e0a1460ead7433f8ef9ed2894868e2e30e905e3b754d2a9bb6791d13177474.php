<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2480d9c1966356beaa1e4edbcac80596a0f5d4c8badf510a5b2e870f134231bc extends Twig_Template
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
        $__internal_d9a8f2e96135139a7bbb8a0412964dd5ecd1cab23509019eb4fe63df2f6b6a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a8f2e96135139a7bbb8a0412964dd5ecd1cab23509019eb4fe63df2f6b6a38->enter($__internal_d9a8f2e96135139a7bbb8a0412964dd5ecd1cab23509019eb4fe63df2f6b6a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_93b08472ea9f5aad04c823d3d401eaf472d6d9790daab462c74d83d291aa9fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b08472ea9f5aad04c823d3d401eaf472d6d9790daab462c74d83d291aa9fd8->enter($__internal_93b08472ea9f5aad04c823d3d401eaf472d6d9790daab462c74d83d291aa9fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d9a8f2e96135139a7bbb8a0412964dd5ecd1cab23509019eb4fe63df2f6b6a38->leave($__internal_d9a8f2e96135139a7bbb8a0412964dd5ecd1cab23509019eb4fe63df2f6b6a38_prof);

        
        $__internal_93b08472ea9f5aad04c823d3d401eaf472d6d9790daab462c74d83d291aa9fd8->leave($__internal_93b08472ea9f5aad04c823d3d401eaf472d6d9790daab462c74d83d291aa9fd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
