<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_99c254f846844d4884ac68b3943b877298000ba30923321cae70f001332696de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2e0ed24cc0664d226b6d2cc2971ddf89aa858ac5cc31627011d15c175e86f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e0ed24cc0664d226b6d2cc2971ddf89aa858ac5cc31627011d15c175e86f9f->enter($__internal_e2e0ed24cc0664d226b6d2cc2971ddf89aa858ac5cc31627011d15c175e86f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_0da0135a7fcf775670f42d5635d55ed989570671b8347cee9ba22d435adb1bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da0135a7fcf775670f42d5635d55ed989570671b8347cee9ba22d435adb1bba->enter($__internal_0da0135a7fcf775670f42d5635d55ed989570671b8347cee9ba22d435adb1bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2e0ed24cc0664d226b6d2cc2971ddf89aa858ac5cc31627011d15c175e86f9f->leave($__internal_e2e0ed24cc0664d226b6d2cc2971ddf89aa858ac5cc31627011d15c175e86f9f_prof);

        
        $__internal_0da0135a7fcf775670f42d5635d55ed989570671b8347cee9ba22d435adb1bba->leave($__internal_0da0135a7fcf775670f42d5635d55ed989570671b8347cee9ba22d435adb1bba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9ff510d889da5df59579b4b1d307186a44a64b2e9a9731eb7f51be4c217bdae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ff510d889da5df59579b4b1d307186a44a64b2e9a9731eb7f51be4c217bdae->enter($__internal_d9ff510d889da5df59579b4b1d307186a44a64b2e9a9731eb7f51be4c217bdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98a7fd3ef6d94c0ba0c3c31c111752fc24db811b65aba846947f1ce6434f4b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a7fd3ef6d94c0ba0c3c31c111752fc24db811b65aba846947f1ce6434f4b65->enter($__internal_98a7fd3ef6d94c0ba0c3c31c111752fc24db811b65aba846947f1ce6434f4b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_98a7fd3ef6d94c0ba0c3c31c111752fc24db811b65aba846947f1ce6434f4b65->leave($__internal_98a7fd3ef6d94c0ba0c3c31c111752fc24db811b65aba846947f1ce6434f4b65_prof);

        
        $__internal_d9ff510d889da5df59579b4b1d307186a44a64b2e9a9731eb7f51be4c217bdae->leave($__internal_d9ff510d889da5df59579b4b1d307186a44a64b2e9a9731eb7f51be4c217bdae_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_56f170900187f2a4b91ea1835600130b24dd0c2e3d64241862f5b91a8cff0a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f170900187f2a4b91ea1835600130b24dd0c2e3d64241862f5b91a8cff0a89->enter($__internal_56f170900187f2a4b91ea1835600130b24dd0c2e3d64241862f5b91a8cff0a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccc6d43a404fde43dd938c46527286963a51d7c1e5810767d1fb3607aecdc872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc6d43a404fde43dd938c46527286963a51d7c1e5810767d1fb3607aecdc872->enter($__internal_ccc6d43a404fde43dd938c46527286963a51d7c1e5810767d1fb3607aecdc872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_ccc6d43a404fde43dd938c46527286963a51d7c1e5810767d1fb3607aecdc872->leave($__internal_ccc6d43a404fde43dd938c46527286963a51d7c1e5810767d1fb3607aecdc872_prof);

        
        $__internal_56f170900187f2a4b91ea1835600130b24dd0c2e3d64241862f5b91a8cff0a89->leave($__internal_56f170900187f2a4b91ea1835600130b24dd0c2e3d64241862f5b91a8cff0a89_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
