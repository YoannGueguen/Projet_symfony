<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_cff1d78ce7fd6925c697c441a039e4eea0dfcc8ffafcf2fdda6c96770ff40d64 extends Twig_Template
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
        $__internal_9be0e35c0a4c183a5b5d13a40fd7a625947aa96e7a5d78abed4f503d6b202e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be0e35c0a4c183a5b5d13a40fd7a625947aa96e7a5d78abed4f503d6b202e45->enter($__internal_9be0e35c0a4c183a5b5d13a40fd7a625947aa96e7a5d78abed4f503d6b202e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_1093fea14a1503fe2575abe7319986a28a1393a0ef13fb42166b2e1e026d4190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1093fea14a1503fe2575abe7319986a28a1393a0ef13fb42166b2e1e026d4190->enter($__internal_1093fea14a1503fe2575abe7319986a28a1393a0ef13fb42166b2e1e026d4190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9be0e35c0a4c183a5b5d13a40fd7a625947aa96e7a5d78abed4f503d6b202e45->leave($__internal_9be0e35c0a4c183a5b5d13a40fd7a625947aa96e7a5d78abed4f503d6b202e45_prof);

        
        $__internal_1093fea14a1503fe2575abe7319986a28a1393a0ef13fb42166b2e1e026d4190->leave($__internal_1093fea14a1503fe2575abe7319986a28a1393a0ef13fb42166b2e1e026d4190_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
