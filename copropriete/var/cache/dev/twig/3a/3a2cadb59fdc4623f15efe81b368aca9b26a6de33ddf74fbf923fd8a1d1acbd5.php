<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_2728bef2d34e3c7fe629e55187061bea0c48351ca1638906c23b3ce8441d147c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_59c2fb813cd271631a96248bc5ffaf6112c81831c4cb2534113ec197ddde0f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c2fb813cd271631a96248bc5ffaf6112c81831c4cb2534113ec197ddde0f17->enter($__internal_59c2fb813cd271631a96248bc5ffaf6112c81831c4cb2534113ec197ddde0f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_68544b83a9635bff8a3f5c5348e5436a951f2c13443aca83e8f403e3e82d0dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68544b83a9635bff8a3f5c5348e5436a951f2c13443aca83e8f403e3e82d0dec->enter($__internal_68544b83a9635bff8a3f5c5348e5436a951f2c13443aca83e8f403e3e82d0dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59c2fb813cd271631a96248bc5ffaf6112c81831c4cb2534113ec197ddde0f17->leave($__internal_59c2fb813cd271631a96248bc5ffaf6112c81831c4cb2534113ec197ddde0f17_prof);

        
        $__internal_68544b83a9635bff8a3f5c5348e5436a951f2c13443aca83e8f403e3e82d0dec->leave($__internal_68544b83a9635bff8a3f5c5348e5436a951f2c13443aca83e8f403e3e82d0dec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_434bc2f7d6637441af7f35ea925ad6986134275182236b34714ec91b428f080d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434bc2f7d6637441af7f35ea925ad6986134275182236b34714ec91b428f080d->enter($__internal_434bc2f7d6637441af7f35ea925ad6986134275182236b34714ec91b428f080d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_623fb4f5c5ec43589b5eeeca32dd9020cb7b6112a8837a763e63b168b574483c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623fb4f5c5ec43589b5eeeca32dd9020cb7b6112a8837a763e63b168b574483c->enter($__internal_623fb4f5c5ec43589b5eeeca32dd9020cb7b6112a8837a763e63b168b574483c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_623fb4f5c5ec43589b5eeeca32dd9020cb7b6112a8837a763e63b168b574483c->leave($__internal_623fb4f5c5ec43589b5eeeca32dd9020cb7b6112a8837a763e63b168b574483c_prof);

        
        $__internal_434bc2f7d6637441af7f35ea925ad6986134275182236b34714ec91b428f080d->leave($__internal_434bc2f7d6637441af7f35ea925ad6986134275182236b34714ec91b428f080d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_86ff36974d1c09c88422fbcf4d7df54e4456041023297316f6a02cbcfd359c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ff36974d1c09c88422fbcf4d7df54e4456041023297316f6a02cbcfd359c14->enter($__internal_86ff36974d1c09c88422fbcf4d7df54e4456041023297316f6a02cbcfd359c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d89aaef662790f690026d8e1ec6a00450acd0d168e7580d88c3bfe7d132d1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d89aaef662790f690026d8e1ec6a00450acd0d168e7580d88c3bfe7d132d1e7->enter($__internal_9d89aaef662790f690026d8e1ec6a00450acd0d168e7580d88c3bfe7d132d1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9d89aaef662790f690026d8e1ec6a00450acd0d168e7580d88c3bfe7d132d1e7->leave($__internal_9d89aaef662790f690026d8e1ec6a00450acd0d168e7580d88c3bfe7d132d1e7_prof);

        
        $__internal_86ff36974d1c09c88422fbcf4d7df54e4456041023297316f6a02cbcfd359c14->leave($__internal_86ff36974d1c09c88422fbcf4d7df54e4456041023297316f6a02cbcfd359c14_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
