<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_29514805f766e8ba6f2f277e9cd6df4d52460ca4cc489c046f3d7cb7850c3546 extends Twig_Template
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
        $__internal_96d782e22a01087183f274a8ce5a60338560f5882b8d096696d67ec4e426aaa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d782e22a01087183f274a8ce5a60338560f5882b8d096696d67ec4e426aaa1->enter($__internal_96d782e22a01087183f274a8ce5a60338560f5882b8d096696d67ec4e426aaa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ed1fce5cc458f13b13109a017020698c0aa706c7c05eca4fca795c1216510b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1fce5cc458f13b13109a017020698c0aa706c7c05eca4fca795c1216510b03->enter($__internal_ed1fce5cc458f13b13109a017020698c0aa706c7c05eca4fca795c1216510b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_96d782e22a01087183f274a8ce5a60338560f5882b8d096696d67ec4e426aaa1->leave($__internal_96d782e22a01087183f274a8ce5a60338560f5882b8d096696d67ec4e426aaa1_prof);

        
        $__internal_ed1fce5cc458f13b13109a017020698c0aa706c7c05eca4fca795c1216510b03->leave($__internal_ed1fce5cc458f13b13109a017020698c0aa706c7c05eca4fca795c1216510b03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
