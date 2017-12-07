<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d0f0bbd89a157445d378809eb1a98f1bf7985e504a291af157b2a29c3c5abdfa extends Twig_Template
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
        $__internal_dc4353e2735284b25ee0bda4b92af39d7d80eb2c2932d0aa60722c308e7dcc3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4353e2735284b25ee0bda4b92af39d7d80eb2c2932d0aa60722c308e7dcc3d->enter($__internal_dc4353e2735284b25ee0bda4b92af39d7d80eb2c2932d0aa60722c308e7dcc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c4059cfaed91995957e0582d487e206a6cf3f972f888a4d46abcb10417b0f66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4059cfaed91995957e0582d487e206a6cf3f972f888a4d46abcb10417b0f66f->enter($__internal_c4059cfaed91995957e0582d487e206a6cf3f972f888a4d46abcb10417b0f66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_dc4353e2735284b25ee0bda4b92af39d7d80eb2c2932d0aa60722c308e7dcc3d->leave($__internal_dc4353e2735284b25ee0bda4b92af39d7d80eb2c2932d0aa60722c308e7dcc3d_prof);

        
        $__internal_c4059cfaed91995957e0582d487e206a6cf3f972f888a4d46abcb10417b0f66f->leave($__internal_c4059cfaed91995957e0582d487e206a6cf3f972f888a4d46abcb10417b0f66f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
