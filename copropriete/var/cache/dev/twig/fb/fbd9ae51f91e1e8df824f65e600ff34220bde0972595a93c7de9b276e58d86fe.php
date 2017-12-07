<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_165f3744fdb2b14823a83419f62990e40437d77de85ee0cde4b7b293e263ff34 extends Twig_Template
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
        $__internal_1fd51b44b69c7186ece0c4348f9ae5a23374c29555590a17063d74f6c910646b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fd51b44b69c7186ece0c4348f9ae5a23374c29555590a17063d74f6c910646b->enter($__internal_1fd51b44b69c7186ece0c4348f9ae5a23374c29555590a17063d74f6c910646b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_3e295a20153a09ff2a763ea1a2a242410f31461ea886d2b06be4d48030bd481b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e295a20153a09ff2a763ea1a2a242410f31461ea886d2b06be4d48030bd481b->enter($__internal_3e295a20153a09ff2a763ea1a2a242410f31461ea886d2b06be4d48030bd481b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1fd51b44b69c7186ece0c4348f9ae5a23374c29555590a17063d74f6c910646b->leave($__internal_1fd51b44b69c7186ece0c4348f9ae5a23374c29555590a17063d74f6c910646b_prof);

        
        $__internal_3e295a20153a09ff2a763ea1a2a242410f31461ea886d2b06be4d48030bd481b->leave($__internal_3e295a20153a09ff2a763ea1a2a242410f31461ea886d2b06be4d48030bd481b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
