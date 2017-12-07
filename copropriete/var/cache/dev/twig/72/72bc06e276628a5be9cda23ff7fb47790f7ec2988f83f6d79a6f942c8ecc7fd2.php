<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_23757c3483abe99f06acb53bc4a1b772b26e9d51772b21843d0bf45e634ccba8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_e28ef15690c2e523f9327c5586dd9664f1ecc28e0ca8c5eb2ce9fa5c5dee2176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28ef15690c2e523f9327c5586dd9664f1ecc28e0ca8c5eb2ce9fa5c5dee2176->enter($__internal_e28ef15690c2e523f9327c5586dd9664f1ecc28e0ca8c5eb2ce9fa5c5dee2176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_bc30207684d1c2d6e121ae5ec25f292c0b114a201cb2d89b2a8096a5ade7a686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc30207684d1c2d6e121ae5ec25f292c0b114a201cb2d89b2a8096a5ade7a686->enter($__internal_bc30207684d1c2d6e121ae5ec25f292c0b114a201cb2d89b2a8096a5ade7a686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e28ef15690c2e523f9327c5586dd9664f1ecc28e0ca8c5eb2ce9fa5c5dee2176->leave($__internal_e28ef15690c2e523f9327c5586dd9664f1ecc28e0ca8c5eb2ce9fa5c5dee2176_prof);

        
        $__internal_bc30207684d1c2d6e121ae5ec25f292c0b114a201cb2d89b2a8096a5ade7a686->leave($__internal_bc30207684d1c2d6e121ae5ec25f292c0b114a201cb2d89b2a8096a5ade7a686_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8a683da0d415825aa725b7fbe896bb8d11daa40194abd19da2ff7da2e141d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a683da0d415825aa725b7fbe896bb8d11daa40194abd19da2ff7da2e141d0f->enter($__internal_a8a683da0d415825aa725b7fbe896bb8d11daa40194abd19da2ff7da2e141d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fc4d92d6a44f0286ba96485e7d0efba10a382630020ee9087b240838775c83f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4d92d6a44f0286ba96485e7d0efba10a382630020ee9087b240838775c83f5->enter($__internal_fc4d92d6a44f0286ba96485e7d0efba10a382630020ee9087b240838775c83f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_fc4d92d6a44f0286ba96485e7d0efba10a382630020ee9087b240838775c83f5->leave($__internal_fc4d92d6a44f0286ba96485e7d0efba10a382630020ee9087b240838775c83f5_prof);

        
        $__internal_a8a683da0d415825aa725b7fbe896bb8d11daa40194abd19da2ff7da2e141d0f->leave($__internal_a8a683da0d415825aa725b7fbe896bb8d11daa40194abd19da2ff7da2e141d0f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
