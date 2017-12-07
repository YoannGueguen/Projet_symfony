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
        $__internal_f71d14c359fca4b4ea08e38187ac621942a6282629a5b2ec277ef9d8a23f0225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71d14c359fca4b4ea08e38187ac621942a6282629a5b2ec277ef9d8a23f0225->enter($__internal_f71d14c359fca4b4ea08e38187ac621942a6282629a5b2ec277ef9d8a23f0225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_75300d5ba1c09c3aadbc8fba40b57ea8a8a2a1416e8b3a08b7568a19a15e9326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75300d5ba1c09c3aadbc8fba40b57ea8a8a2a1416e8b3a08b7568a19a15e9326->enter($__internal_75300d5ba1c09c3aadbc8fba40b57ea8a8a2a1416e8b3a08b7568a19a15e9326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f71d14c359fca4b4ea08e38187ac621942a6282629a5b2ec277ef9d8a23f0225->leave($__internal_f71d14c359fca4b4ea08e38187ac621942a6282629a5b2ec277ef9d8a23f0225_prof);

        
        $__internal_75300d5ba1c09c3aadbc8fba40b57ea8a8a2a1416e8b3a08b7568a19a15e9326->leave($__internal_75300d5ba1c09c3aadbc8fba40b57ea8a8a2a1416e8b3a08b7568a19a15e9326_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40994202e0e8019fe12bd5dc54fc7f7728a91f52536822a3b8d104fe1d656318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40994202e0e8019fe12bd5dc54fc7f7728a91f52536822a3b8d104fe1d656318->enter($__internal_40994202e0e8019fe12bd5dc54fc7f7728a91f52536822a3b8d104fe1d656318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0149a7f6e22f9908e2ec40fcad9a5c3f9e928388e6a6b225fb1b2a87aefc14d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0149a7f6e22f9908e2ec40fcad9a5c3f9e928388e6a6b225fb1b2a87aefc14d6->enter($__internal_0149a7f6e22f9908e2ec40fcad9a5c3f9e928388e6a6b225fb1b2a87aefc14d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_0149a7f6e22f9908e2ec40fcad9a5c3f9e928388e6a6b225fb1b2a87aefc14d6->leave($__internal_0149a7f6e22f9908e2ec40fcad9a5c3f9e928388e6a6b225fb1b2a87aefc14d6_prof);

        
        $__internal_40994202e0e8019fe12bd5dc54fc7f7728a91f52536822a3b8d104fe1d656318->leave($__internal_40994202e0e8019fe12bd5dc54fc7f7728a91f52536822a3b8d104fe1d656318_prof);

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
", "@FOSUser/Registration/confirmed.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
