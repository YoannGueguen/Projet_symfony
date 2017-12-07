<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0d76113f15b8033c60734e18cd14fb2140f39b49b849fdcf27843165b54b909a extends Twig_Template
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
        $__internal_e125b70d6dbdf02018bb7e26fe53b07226144658faf6c02a3472a1875be9144e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e125b70d6dbdf02018bb7e26fe53b07226144658faf6c02a3472a1875be9144e->enter($__internal_e125b70d6dbdf02018bb7e26fe53b07226144658faf6c02a3472a1875be9144e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_53bce3c603bf76a23960d1a2998d1597aacbe200d7e681965b668264d7f67700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53bce3c603bf76a23960d1a2998d1597aacbe200d7e681965b668264d7f67700->enter($__internal_53bce3c603bf76a23960d1a2998d1597aacbe200d7e681965b668264d7f67700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e125b70d6dbdf02018bb7e26fe53b07226144658faf6c02a3472a1875be9144e->leave($__internal_e125b70d6dbdf02018bb7e26fe53b07226144658faf6c02a3472a1875be9144e_prof);

        
        $__internal_53bce3c603bf76a23960d1a2998d1597aacbe200d7e681965b668264d7f67700->leave($__internal_53bce3c603bf76a23960d1a2998d1597aacbe200d7e681965b668264d7f67700_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
