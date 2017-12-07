<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_00ed75d6b6ebafef0f33ae82425d6d77ba0bc6bcef7b2dfdd3a48bada0626ae2 extends Twig_Template
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
        $__internal_74432436e97fb382722b5dc8dc8fc2269d17502ebfdf4f0ff09efbaf35a7638b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74432436e97fb382722b5dc8dc8fc2269d17502ebfdf4f0ff09efbaf35a7638b->enter($__internal_74432436e97fb382722b5dc8dc8fc2269d17502ebfdf4f0ff09efbaf35a7638b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b264540c05e8794ac563f7e1beb119f53e1ef2e2588af647af804ae358409ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b264540c05e8794ac563f7e1beb119f53e1ef2e2588af647af804ae358409ecf->enter($__internal_b264540c05e8794ac563f7e1beb119f53e1ef2e2588af647af804ae358409ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_74432436e97fb382722b5dc8dc8fc2269d17502ebfdf4f0ff09efbaf35a7638b->leave($__internal_74432436e97fb382722b5dc8dc8fc2269d17502ebfdf4f0ff09efbaf35a7638b_prof);

        
        $__internal_b264540c05e8794ac563f7e1beb119f53e1ef2e2588af647af804ae358409ecf->leave($__internal_b264540c05e8794ac563f7e1beb119f53e1ef2e2588af647af804ae358409ecf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
