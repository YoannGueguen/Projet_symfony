<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_a4fae4aef90fdd2708ae59143dd820e276cba814802c95d802ffafd794e62530 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5e0ba51c31eb6de985a92929a5debc9440f7a3129640ba111ec348d1166cfc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5e0ba51c31eb6de985a92929a5debc9440f7a3129640ba111ec348d1166cfc9->enter($__internal_a5e0ba51c31eb6de985a92929a5debc9440f7a3129640ba111ec348d1166cfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_f6c8fb4458016aeaf143fc9fb38c7e8ef31a24acea1266261d3cca658741638d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c8fb4458016aeaf143fc9fb38c7e8ef31a24acea1266261d3cca658741638d->enter($__internal_f6c8fb4458016aeaf143fc9fb38c7e8ef31a24acea1266261d3cca658741638d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5e0ba51c31eb6de985a92929a5debc9440f7a3129640ba111ec348d1166cfc9->leave($__internal_a5e0ba51c31eb6de985a92929a5debc9440f7a3129640ba111ec348d1166cfc9_prof);

        
        $__internal_f6c8fb4458016aeaf143fc9fb38c7e8ef31a24acea1266261d3cca658741638d->leave($__internal_f6c8fb4458016aeaf143fc9fb38c7e8ef31a24acea1266261d3cca658741638d_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9097de6628aef42c4ea4b3bcf26e10d44b50d44c9a23add1faa8b952fb6fdf34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9097de6628aef42c4ea4b3bcf26e10d44b50d44c9a23add1faa8b952fb6fdf34->enter($__internal_9097de6628aef42c4ea4b3bcf26e10d44b50d44c9a23add1faa8b952fb6fdf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b50b3422eadfaec1f4d35937639c1bf440d756f7af9dd938446335a4d1d0817c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50b3422eadfaec1f4d35937639c1bf440d756f7af9dd938446335a4d1d0817c->enter($__internal_b50b3422eadfaec1f4d35937639c1bf440d756f7af9dd938446335a4d1d0817c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_b50b3422eadfaec1f4d35937639c1bf440d756f7af9dd938446335a4d1d0817c->leave($__internal_b50b3422eadfaec1f4d35937639c1bf440d756f7af9dd938446335a4d1d0817c_prof);

        
        $__internal_9097de6628aef42c4ea4b3bcf26e10d44b50d44c9a23add1faa8b952fb6fdf34->leave($__internal_9097de6628aef42c4ea4b3bcf26e10d44b50d44c9a23add1faa8b952fb6fdf34_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f6f7044e7fad69a61093401e53489a182ed737cb5ea898f613e13f9e4bf1e0dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f7044e7fad69a61093401e53489a182ed737cb5ea898f613e13f9e4bf1e0dd->enter($__internal_f6f7044e7fad69a61093401e53489a182ed737cb5ea898f613e13f9e4bf1e0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e4c29d6aa54d6d83384f4099f0dc5453912c26d030d28e1ac87a9033d39c3dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c29d6aa54d6d83384f4099f0dc5453912c26d030d28e1ac87a9033d39c3dc4->enter($__internal_e4c29d6aa54d6d83384f4099f0dc5453912c26d030d28e1ac87a9033d39c3dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e4c29d6aa54d6d83384f4099f0dc5453912c26d030d28e1ac87a9033d39c3dc4->leave($__internal_e4c29d6aa54d6d83384f4099f0dc5453912c26d030d28e1ac87a9033d39c3dc4_prof);

        
        $__internal_f6f7044e7fad69a61093401e53489a182ed737cb5ea898f613e13f9e4bf1e0dd->leave($__internal_f6f7044e7fad69a61093401e53489a182ed737cb5ea898f613e13f9e4bf1e0dd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
