<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_edd4f42be52bce9ef062555dccbaff0c12af8e8d52c87a6e36b4e526b298f0ce extends Twig_Template
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
        $__internal_aba28d370363a13877bfb187d6152f158d4d1c089edfbf617844163f397ec5ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aba28d370363a13877bfb187d6152f158d4d1c089edfbf617844163f397ec5ad->enter($__internal_aba28d370363a13877bfb187d6152f158d4d1c089edfbf617844163f397ec5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_603b03858cdf65d9959d2968d1b7db96cb1cff6f69c7d7bbeb91d0e4bab522d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603b03858cdf65d9959d2968d1b7db96cb1cff6f69c7d7bbeb91d0e4bab522d6->enter($__internal_603b03858cdf65d9959d2968d1b7db96cb1cff6f69c7d7bbeb91d0e4bab522d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_aba28d370363a13877bfb187d6152f158d4d1c089edfbf617844163f397ec5ad->leave($__internal_aba28d370363a13877bfb187d6152f158d4d1c089edfbf617844163f397ec5ad_prof);

        
        $__internal_603b03858cdf65d9959d2968d1b7db96cb1cff6f69c7d7bbeb91d0e4bab522d6->leave($__internal_603b03858cdf65d9959d2968d1b7db96cb1cff6f69c7d7bbeb91d0e4bab522d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
