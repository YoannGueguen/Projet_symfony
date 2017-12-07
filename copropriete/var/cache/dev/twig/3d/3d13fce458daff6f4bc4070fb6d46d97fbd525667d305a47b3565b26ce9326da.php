<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1d5733cf16b809f77d7a26f88eb1980e3ea7e0eb69bb2930da0e4f997418905b extends Twig_Template
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
        $__internal_f26d0bc4647c722297184110d661ca290339d719b3ce99ca555db4fde87b8999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f26d0bc4647c722297184110d661ca290339d719b3ce99ca555db4fde87b8999->enter($__internal_f26d0bc4647c722297184110d661ca290339d719b3ce99ca555db4fde87b8999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d92fe2e967380ab1cea4a381f29276ecc4ee10fbcf9aa7057d478cd220bee809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92fe2e967380ab1cea4a381f29276ecc4ee10fbcf9aa7057d478cd220bee809->enter($__internal_d92fe2e967380ab1cea4a381f29276ecc4ee10fbcf9aa7057d478cd220bee809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f26d0bc4647c722297184110d661ca290339d719b3ce99ca555db4fde87b8999->leave($__internal_f26d0bc4647c722297184110d661ca290339d719b3ce99ca555db4fde87b8999_prof);

        
        $__internal_d92fe2e967380ab1cea4a381f29276ecc4ee10fbcf9aa7057d478cd220bee809->leave($__internal_d92fe2e967380ab1cea4a381f29276ecc4ee10fbcf9aa7057d478cd220bee809_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
