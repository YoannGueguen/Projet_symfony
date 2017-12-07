<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9b4058bacedb8aab3abd740a863a908ee8e0e3234d7dee1dc299077c948081f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d8cfd23b17e3013db7d09cb2e8f8a702a05287197d809e2efccd737e4a1fdf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8cfd23b17e3013db7d09cb2e8f8a702a05287197d809e2efccd737e4a1fdf8->enter($__internal_7d8cfd23b17e3013db7d09cb2e8f8a702a05287197d809e2efccd737e4a1fdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_28db2105321fa2a3bb54fa06c9199e3e8d7dd2e198a1592af7a9e0e36dd8333a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28db2105321fa2a3bb54fa06c9199e3e8d7dd2e198a1592af7a9e0e36dd8333a->enter($__internal_28db2105321fa2a3bb54fa06c9199e3e8d7dd2e198a1592af7a9e0e36dd8333a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d8cfd23b17e3013db7d09cb2e8f8a702a05287197d809e2efccd737e4a1fdf8->leave($__internal_7d8cfd23b17e3013db7d09cb2e8f8a702a05287197d809e2efccd737e4a1fdf8_prof);

        
        $__internal_28db2105321fa2a3bb54fa06c9199e3e8d7dd2e198a1592af7a9e0e36dd8333a->leave($__internal_28db2105321fa2a3bb54fa06c9199e3e8d7dd2e198a1592af7a9e0e36dd8333a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6482805685cf66f164294c495e48261b810f416c2c9310f2673b32a762624d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6482805685cf66f164294c495e48261b810f416c2c9310f2673b32a762624d51->enter($__internal_6482805685cf66f164294c495e48261b810f416c2c9310f2673b32a762624d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4130b47a27152bb873d7788cb0fc577c8cae5ed245ed602124aa863695a8321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4130b47a27152bb873d7788cb0fc577c8cae5ed245ed602124aa863695a8321->enter($__internal_f4130b47a27152bb873d7788cb0fc577c8cae5ed245ed602124aa863695a8321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f4130b47a27152bb873d7788cb0fc577c8cae5ed245ed602124aa863695a8321->leave($__internal_f4130b47a27152bb873d7788cb0fc577c8cae5ed245ed602124aa863695a8321_prof);

        
        $__internal_6482805685cf66f164294c495e48261b810f416c2c9310f2673b32a762624d51->leave($__internal_6482805685cf66f164294c495e48261b810f416c2c9310f2673b32a762624d51_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca7a7393d889426cb4680d70d635fb22078feddc2d03261bc78d626d067d7127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7a7393d889426cb4680d70d635fb22078feddc2d03261bc78d626d067d7127->enter($__internal_ca7a7393d889426cb4680d70d635fb22078feddc2d03261bc78d626d067d7127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e539dcbfeba5e82ba7c545716bdc1646fed70be6055e2732061d865b5526dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e539dcbfeba5e82ba7c545716bdc1646fed70be6055e2732061d865b5526dcb->enter($__internal_7e539dcbfeba5e82ba7c545716bdc1646fed70be6055e2732061d865b5526dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7e539dcbfeba5e82ba7c545716bdc1646fed70be6055e2732061d865b5526dcb->leave($__internal_7e539dcbfeba5e82ba7c545716bdc1646fed70be6055e2732061d865b5526dcb_prof);

        
        $__internal_ca7a7393d889426cb4680d70d635fb22078feddc2d03261bc78d626d067d7127->leave($__internal_ca7a7393d889426cb4680d70d635fb22078feddc2d03261bc78d626d067d7127_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
