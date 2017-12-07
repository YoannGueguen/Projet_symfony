<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_efa8fe722d237c6981e1c0477dcef812008c63abe60f0b39ba370e8842ff41e1 extends Twig_Template
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
        $__internal_b07ac5ab6bbafec931c623d30b462bdcdee3c6433d239c55960fe66440409b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b07ac5ab6bbafec931c623d30b462bdcdee3c6433d239c55960fe66440409b4d->enter($__internal_b07ac5ab6bbafec931c623d30b462bdcdee3c6433d239c55960fe66440409b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f668ba784c4db8a702cecd096647ba6f2da6616597148becc2932c3cce92719a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f668ba784c4db8a702cecd096647ba6f2da6616597148becc2932c3cce92719a->enter($__internal_f668ba784c4db8a702cecd096647ba6f2da6616597148becc2932c3cce92719a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b07ac5ab6bbafec931c623d30b462bdcdee3c6433d239c55960fe66440409b4d->leave($__internal_b07ac5ab6bbafec931c623d30b462bdcdee3c6433d239c55960fe66440409b4d_prof);

        
        $__internal_f668ba784c4db8a702cecd096647ba6f2da6616597148becc2932c3cce92719a->leave($__internal_f668ba784c4db8a702cecd096647ba6f2da6616597148becc2932c3cce92719a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
