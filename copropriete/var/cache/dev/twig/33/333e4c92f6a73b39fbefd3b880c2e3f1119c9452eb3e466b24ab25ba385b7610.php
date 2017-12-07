<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6f4ce033039f6c51d9532719449c55d4a4f2c11f37f9fcb7c35eb01a47ee1679 extends Twig_Template
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
        $__internal_ee34866167aaa871ce8abc591c0631fe40c70a3f3361e5f28fcdc6c00c5871db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee34866167aaa871ce8abc591c0631fe40c70a3f3361e5f28fcdc6c00c5871db->enter($__internal_ee34866167aaa871ce8abc591c0631fe40c70a3f3361e5f28fcdc6c00c5871db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_284ac9db32738f13fd1ad7890f61f85c58a33668d074c28ae455deaadf94b09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284ac9db32738f13fd1ad7890f61f85c58a33668d074c28ae455deaadf94b09f->enter($__internal_284ac9db32738f13fd1ad7890f61f85c58a33668d074c28ae455deaadf94b09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ee34866167aaa871ce8abc591c0631fe40c70a3f3361e5f28fcdc6c00c5871db->leave($__internal_ee34866167aaa871ce8abc591c0631fe40c70a3f3361e5f28fcdc6c00c5871db_prof);

        
        $__internal_284ac9db32738f13fd1ad7890f61f85c58a33668d074c28ae455deaadf94b09f->leave($__internal_284ac9db32738f13fd1ad7890f61f85c58a33668d074c28ae455deaadf94b09f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
