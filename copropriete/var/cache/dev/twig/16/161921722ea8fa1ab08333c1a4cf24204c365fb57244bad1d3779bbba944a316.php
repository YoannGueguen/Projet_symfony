<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_6641423b61dd5aa1670dbbded80679612ee67a6cb5a8836bde4fcb2e105c957b extends Twig_Template
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
        $__internal_3da09363f3477a0f0022c3a46ad3afee62983c7651572f025f678aa98f74c604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da09363f3477a0f0022c3a46ad3afee62983c7651572f025f678aa98f74c604->enter($__internal_3da09363f3477a0f0022c3a46ad3afee62983c7651572f025f678aa98f74c604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_187efabbefab13250033e1e9e28f2b9a99acaa9ca41e3dd46b2ddf8a2f3e6da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187efabbefab13250033e1e9e28f2b9a99acaa9ca41e3dd46b2ddf8a2f3e6da9->enter($__internal_187efabbefab13250033e1e9e28f2b9a99acaa9ca41e3dd46b2ddf8a2f3e6da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_3da09363f3477a0f0022c3a46ad3afee62983c7651572f025f678aa98f74c604->leave($__internal_3da09363f3477a0f0022c3a46ad3afee62983c7651572f025f678aa98f74c604_prof);

        
        $__internal_187efabbefab13250033e1e9e28f2b9a99acaa9ca41e3dd46b2ddf8a2f3e6da9->leave($__internal_187efabbefab13250033e1e9e28f2b9a99acaa9ca41e3dd46b2ddf8a2f3e6da9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
