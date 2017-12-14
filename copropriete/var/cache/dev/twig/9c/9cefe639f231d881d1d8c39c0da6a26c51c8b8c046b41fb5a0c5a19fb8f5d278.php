<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_c36c430cf9325c63cf3837cba96d5422982b6c01f0dc926cee092b944732aed2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aedba72638d10719f56c3afcfab022e87b02a7468f269981a58d16108873c68a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aedba72638d10719f56c3afcfab022e87b02a7468f269981a58d16108873c68a->enter($__internal_aedba72638d10719f56c3afcfab022e87b02a7468f269981a58d16108873c68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_18dd7f522766cb5c675413c8e0b75ca4c4f865e60539fb066243af9559bc726f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18dd7f522766cb5c675413c8e0b75ca4c4f865e60539fb066243af9559bc726f->enter($__internal_18dd7f522766cb5c675413c8e0b75ca4c4f865e60539fb066243af9559bc726f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aedba72638d10719f56c3afcfab022e87b02a7468f269981a58d16108873c68a->leave($__internal_aedba72638d10719f56c3afcfab022e87b02a7468f269981a58d16108873c68a_prof);

        
        $__internal_18dd7f522766cb5c675413c8e0b75ca4c4f865e60539fb066243af9559bc726f->leave($__internal_18dd7f522766cb5c675413c8e0b75ca4c4f865e60539fb066243af9559bc726f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea1e3618434a9e0080103dee5f207b0c45c977a7c3764ecce3e38054cb5e6f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1e3618434a9e0080103dee5f207b0c45c977a7c3764ecce3e38054cb5e6f25->enter($__internal_ea1e3618434a9e0080103dee5f207b0c45c977a7c3764ecce3e38054cb5e6f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_564b397649e708aa3104cc90c625d6e203ff44c23277b42bd0eeda0c021fe03a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564b397649e708aa3104cc90c625d6e203ff44c23277b42bd0eeda0c021fe03a->enter($__internal_564b397649e708aa3104cc90c625d6e203ff44c23277b42bd0eeda0c021fe03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_564b397649e708aa3104cc90c625d6e203ff44c23277b42bd0eeda0c021fe03a->leave($__internal_564b397649e708aa3104cc90c625d6e203ff44c23277b42bd0eeda0c021fe03a_prof);

        
        $__internal_ea1e3618434a9e0080103dee5f207b0c45c977a7c3764ecce3e38054cb5e6f25->leave($__internal_ea1e3618434a9e0080103dee5f207b0c45c977a7c3764ecce3e38054cb5e6f25_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\xampp\\htdocs\\projet\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
