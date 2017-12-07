<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c9a22f6232f523620a43cb73264546a4a7ebf73ef4ae88aaf7169e6d28ddd7bf extends Twig_Template
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
        $__internal_52aaaf97778a9e5fa42e8740e051c8d3a84ea3b5dd6ff3ae4162e266ff830191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52aaaf97778a9e5fa42e8740e051c8d3a84ea3b5dd6ff3ae4162e266ff830191->enter($__internal_52aaaf97778a9e5fa42e8740e051c8d3a84ea3b5dd6ff3ae4162e266ff830191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_efaed1389067dc7fee7fde0ae3db227391fd464ff5e5fa794de8cb94ce438e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efaed1389067dc7fee7fde0ae3db227391fd464ff5e5fa794de8cb94ce438e10->enter($__internal_efaed1389067dc7fee7fde0ae3db227391fd464ff5e5fa794de8cb94ce438e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_52aaaf97778a9e5fa42e8740e051c8d3a84ea3b5dd6ff3ae4162e266ff830191->leave($__internal_52aaaf97778a9e5fa42e8740e051c8d3a84ea3b5dd6ff3ae4162e266ff830191_prof);

        
        $__internal_efaed1389067dc7fee7fde0ae3db227391fd464ff5e5fa794de8cb94ce438e10->leave($__internal_efaed1389067dc7fee7fde0ae3db227391fd464ff5e5fa794de8cb94ce438e10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
