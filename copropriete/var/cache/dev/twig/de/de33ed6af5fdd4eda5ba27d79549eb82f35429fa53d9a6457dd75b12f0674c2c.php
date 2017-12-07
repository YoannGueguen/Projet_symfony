<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_41312685d921072b14fd919d372be4579921215cbff7347822cfc04ead138965 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f80541d908430cc6f2526017581bea6d2c5bc85afb462af875dcc81c08cdbe12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80541d908430cc6f2526017581bea6d2c5bc85afb462af875dcc81c08cdbe12->enter($__internal_f80541d908430cc6f2526017581bea6d2c5bc85afb462af875dcc81c08cdbe12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_e7b79cb4253071096049f23cd7676189328371a457950becd4ba9fff840553c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b79cb4253071096049f23cd7676189328371a457950becd4ba9fff840553c6->enter($__internal_e7b79cb4253071096049f23cd7676189328371a457950becd4ba9fff840553c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f80541d908430cc6f2526017581bea6d2c5bc85afb462af875dcc81c08cdbe12->leave($__internal_f80541d908430cc6f2526017581bea6d2c5bc85afb462af875dcc81c08cdbe12_prof);

        
        $__internal_e7b79cb4253071096049f23cd7676189328371a457950becd4ba9fff840553c6->leave($__internal_e7b79cb4253071096049f23cd7676189328371a457950becd4ba9fff840553c6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_12af55da4a574cce45dc242c246c119b5a5ecf99757d117b1673b584bed5c3c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12af55da4a574cce45dc242c246c119b5a5ecf99757d117b1673b584bed5c3c5->enter($__internal_12af55da4a574cce45dc242c246c119b5a5ecf99757d117b1673b584bed5c3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_330ae8ab747e7085c5595091359c2789a611662dac309b1440ef8d16fec71498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330ae8ab747e7085c5595091359c2789a611662dac309b1440ef8d16fec71498->enter($__internal_330ae8ab747e7085c5595091359c2789a611662dac309b1440ef8d16fec71498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_330ae8ab747e7085c5595091359c2789a611662dac309b1440ef8d16fec71498->leave($__internal_330ae8ab747e7085c5595091359c2789a611662dac309b1440ef8d16fec71498_prof);

        
        $__internal_12af55da4a574cce45dc242c246c119b5a5ecf99757d117b1673b584bed5c3c5->leave($__internal_12af55da4a574cce45dc242c246c119b5a5ecf99757d117b1673b584bed5c3c5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9268702c8850113516f8add11d7675e4ac73f6ab4749bd36fc4b4078bd8fed64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9268702c8850113516f8add11d7675e4ac73f6ab4749bd36fc4b4078bd8fed64->enter($__internal_9268702c8850113516f8add11d7675e4ac73f6ab4749bd36fc4b4078bd8fed64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_5833823467d282e7a5f9a3bf9c4e29978a7f550fd2ad197f70f212edd7b8f988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5833823467d282e7a5f9a3bf9c4e29978a7f550fd2ad197f70f212edd7b8f988->enter($__internal_5833823467d282e7a5f9a3bf9c4e29978a7f550fd2ad197f70f212edd7b8f988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_5833823467d282e7a5f9a3bf9c4e29978a7f550fd2ad197f70f212edd7b8f988->leave($__internal_5833823467d282e7a5f9a3bf9c4e29978a7f550fd2ad197f70f212edd7b8f988_prof);

        
        $__internal_9268702c8850113516f8add11d7675e4ac73f6ab4749bd36fc4b4078bd8fed64->leave($__internal_9268702c8850113516f8add11d7675e4ac73f6ab4749bd36fc4b4078bd8fed64_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5cc7c11535a9a9abbdc997f7d88f7ede8aa3e9e9d6e5d31ed2ad0427e0c34711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc7c11535a9a9abbdc997f7d88f7ede8aa3e9e9d6e5d31ed2ad0427e0c34711->enter($__internal_5cc7c11535a9a9abbdc997f7d88f7ede8aa3e9e9d6e5d31ed2ad0427e0c34711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b95d16d0c9616824691c4e4d3a3c4ae32913700e0bdf2306ced62311962498bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95d16d0c9616824691c4e4d3a3c4ae32913700e0bdf2306ced62311962498bf->enter($__internal_b95d16d0c9616824691c4e4d3a3c4ae32913700e0bdf2306ced62311962498bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b95d16d0c9616824691c4e4d3a3c4ae32913700e0bdf2306ced62311962498bf->leave($__internal_b95d16d0c9616824691c4e4d3a3c4ae32913700e0bdf2306ced62311962498bf_prof);

        
        $__internal_5cc7c11535a9a9abbdc997f7d88f7ede8aa3e9e9d6e5d31ed2ad0427e0c34711->leave($__internal_5cc7c11535a9a9abbdc997f7d88f7ede8aa3e9e9d6e5d31ed2ad0427e0c34711_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
