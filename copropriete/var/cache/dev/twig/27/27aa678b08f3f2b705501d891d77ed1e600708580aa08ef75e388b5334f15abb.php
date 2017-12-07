<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_85a527809159d9dce60e3a745b8ef0f7f511cf4b834fb89125345f9cb2a7f785 extends Twig_Template
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
        $__internal_07af78cd7935912e1ba20497df0be8c47ddaf54235ce845c273ab3ebb21c7ebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07af78cd7935912e1ba20497df0be8c47ddaf54235ce845c273ab3ebb21c7ebb->enter($__internal_07af78cd7935912e1ba20497df0be8c47ddaf54235ce845c273ab3ebb21c7ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5e206f91ead6c7a9b6ae65e2faf82e41ec8afda18381f47339362b0c260f1894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e206f91ead6c7a9b6ae65e2faf82e41ec8afda18381f47339362b0c260f1894->enter($__internal_5e206f91ead6c7a9b6ae65e2faf82e41ec8afda18381f47339362b0c260f1894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_07af78cd7935912e1ba20497df0be8c47ddaf54235ce845c273ab3ebb21c7ebb->leave($__internal_07af78cd7935912e1ba20497df0be8c47ddaf54235ce845c273ab3ebb21c7ebb_prof);

        
        $__internal_5e206f91ead6c7a9b6ae65e2faf82e41ec8afda18381f47339362b0c260f1894->leave($__internal_5e206f91ead6c7a9b6ae65e2faf82e41ec8afda18381f47339362b0c260f1894_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
