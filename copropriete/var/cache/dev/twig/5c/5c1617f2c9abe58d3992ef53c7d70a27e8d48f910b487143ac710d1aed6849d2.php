<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_84df81e35abd74689c0d93e4721c9d43c5fa66293d905fe6dd0a7328fbe9bfb7 extends Twig_Template
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
        $__internal_a99fc3fd02b18a510efdfd993ab3b8ac8228e92006e74e7fc5ac29205aa7a542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a99fc3fd02b18a510efdfd993ab3b8ac8228e92006e74e7fc5ac29205aa7a542->enter($__internal_a99fc3fd02b18a510efdfd993ab3b8ac8228e92006e74e7fc5ac29205aa7a542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_9d49bb259b4a29d9b0ea463bf4c2f9ebc29d95e9e0756882082c51b20711dda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d49bb259b4a29d9b0ea463bf4c2f9ebc29d95e9e0756882082c51b20711dda6->enter($__internal_9d49bb259b4a29d9b0ea463bf4c2f9ebc29d95e9e0756882082c51b20711dda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a99fc3fd02b18a510efdfd993ab3b8ac8228e92006e74e7fc5ac29205aa7a542->leave($__internal_a99fc3fd02b18a510efdfd993ab3b8ac8228e92006e74e7fc5ac29205aa7a542_prof);

        
        $__internal_9d49bb259b4a29d9b0ea463bf4c2f9ebc29d95e9e0756882082c51b20711dda6->leave($__internal_9d49bb259b4a29d9b0ea463bf4c2f9ebc29d95e9e0756882082c51b20711dda6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
