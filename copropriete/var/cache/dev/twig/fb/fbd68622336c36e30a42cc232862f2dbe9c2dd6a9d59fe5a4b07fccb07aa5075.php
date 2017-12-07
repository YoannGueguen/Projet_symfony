<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_3ac42815ce2023a6e8c6807140a762b85a62eb45fdcaba2ca88beace8e8d559e extends Twig_Template
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
        $__internal_a5dde388b944ad6347bf5034b7e77e2e1a2def103056c605c1f0abcc3d195a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5dde388b944ad6347bf5034b7e77e2e1a2def103056c605c1f0abcc3d195a72->enter($__internal_a5dde388b944ad6347bf5034b7e77e2e1a2def103056c605c1f0abcc3d195a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_789b7a3aae9c0c980d593f8878d863f63a968451335eced99f1122e229b19101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789b7a3aae9c0c980d593f8878d863f63a968451335eced99f1122e229b19101->enter($__internal_789b7a3aae9c0c980d593f8878d863f63a968451335eced99f1122e229b19101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a5dde388b944ad6347bf5034b7e77e2e1a2def103056c605c1f0abcc3d195a72->leave($__internal_a5dde388b944ad6347bf5034b7e77e2e1a2def103056c605c1f0abcc3d195a72_prof);

        
        $__internal_789b7a3aae9c0c980d593f8878d863f63a968451335eced99f1122e229b19101->leave($__internal_789b7a3aae9c0c980d593f8878d863f63a968451335eced99f1122e229b19101_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4d9b226d3337da1e77269ecf148359f58cba69d310900a911d59a38a6db4dfc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9b226d3337da1e77269ecf148359f58cba69d310900a911d59a38a6db4dfc1->enter($__internal_4d9b226d3337da1e77269ecf148359f58cba69d310900a911d59a38a6db4dfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_aff42b98cbd4ac8a15d1f8d07af5aa6ba3d4509605d1b412b1d8810f1eac5a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff42b98cbd4ac8a15d1f8d07af5aa6ba3d4509605d1b412b1d8810f1eac5a3d->enter($__internal_aff42b98cbd4ac8a15d1f8d07af5aa6ba3d4509605d1b412b1d8810f1eac5a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_aff42b98cbd4ac8a15d1f8d07af5aa6ba3d4509605d1b412b1d8810f1eac5a3d->leave($__internal_aff42b98cbd4ac8a15d1f8d07af5aa6ba3d4509605d1b412b1d8810f1eac5a3d_prof);

        
        $__internal_4d9b226d3337da1e77269ecf148359f58cba69d310900a911d59a38a6db4dfc1->leave($__internal_4d9b226d3337da1e77269ecf148359f58cba69d310900a911d59a38a6db4dfc1_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_47089d12e3e6b3bb2af2afa2ff442e1c52f900ea96daa1cf1bc5e8c781d13ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47089d12e3e6b3bb2af2afa2ff442e1c52f900ea96daa1cf1bc5e8c781d13ef5->enter($__internal_47089d12e3e6b3bb2af2afa2ff442e1c52f900ea96daa1cf1bc5e8c781d13ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f022196e49e53d1be83fe536ee019f5c0aef8872e979cd5df6a8868cea638056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f022196e49e53d1be83fe536ee019f5c0aef8872e979cd5df6a8868cea638056->enter($__internal_f022196e49e53d1be83fe536ee019f5c0aef8872e979cd5df6a8868cea638056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_f022196e49e53d1be83fe536ee019f5c0aef8872e979cd5df6a8868cea638056->leave($__internal_f022196e49e53d1be83fe536ee019f5c0aef8872e979cd5df6a8868cea638056_prof);

        
        $__internal_47089d12e3e6b3bb2af2afa2ff442e1c52f900ea96daa1cf1bc5e8c781d13ef5->leave($__internal_47089d12e3e6b3bb2af2afa2ff442e1c52f900ea96daa1cf1bc5e8c781d13ef5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_49eaf804b359e48a3ba1bb018ee88ad5b7c6f0e0430b87db439e5a32dc6fdc5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49eaf804b359e48a3ba1bb018ee88ad5b7c6f0e0430b87db439e5a32dc6fdc5a->enter($__internal_49eaf804b359e48a3ba1bb018ee88ad5b7c6f0e0430b87db439e5a32dc6fdc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_5f1a6662fd349da74ef7604cad7a7d3d4c42edf9220d168f139331e9c0ff8d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1a6662fd349da74ef7604cad7a7d3d4c42edf9220d168f139331e9c0ff8d3c->enter($__internal_5f1a6662fd349da74ef7604cad7a7d3d4c42edf9220d168f139331e9c0ff8d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5f1a6662fd349da74ef7604cad7a7d3d4c42edf9220d168f139331e9c0ff8d3c->leave($__internal_5f1a6662fd349da74ef7604cad7a7d3d4c42edf9220d168f139331e9c0ff8d3c_prof);

        
        $__internal_49eaf804b359e48a3ba1bb018ee88ad5b7c6f0e0430b87db439e5a32dc6fdc5a->leave($__internal_49eaf804b359e48a3ba1bb018ee88ad5b7c6f0e0430b87db439e5a32dc6fdc5a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
