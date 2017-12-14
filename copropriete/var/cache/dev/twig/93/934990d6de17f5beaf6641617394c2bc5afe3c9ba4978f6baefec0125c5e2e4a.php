<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_65c2add8cb5902a4f9049843d611da3970b4e300acb21d82a1d76630a4682d8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_d5acca8768be6ba53a0f3e567f5b3afe410f38844bdc556a77e74178d6448de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5acca8768be6ba53a0f3e567f5b3afe410f38844bdc556a77e74178d6448de8->enter($__internal_d5acca8768be6ba53a0f3e567f5b3afe410f38844bdc556a77e74178d6448de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_d12012e74426012ef4d78382005b8244a6a01988998d11d1d85c3374a2592fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12012e74426012ef4d78382005b8244a6a01988998d11d1d85c3374a2592fde->enter($__internal_d12012e74426012ef4d78382005b8244a6a01988998d11d1d85c3374a2592fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5acca8768be6ba53a0f3e567f5b3afe410f38844bdc556a77e74178d6448de8->leave($__internal_d5acca8768be6ba53a0f3e567f5b3afe410f38844bdc556a77e74178d6448de8_prof);

        
        $__internal_d12012e74426012ef4d78382005b8244a6a01988998d11d1d85c3374a2592fde->leave($__internal_d12012e74426012ef4d78382005b8244a6a01988998d11d1d85c3374a2592fde_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_652802731ee0a63e527ae3f6bbb3f1ddd54dd5f7197b81e9c76f1b4058194646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_652802731ee0a63e527ae3f6bbb3f1ddd54dd5f7197b81e9c76f1b4058194646->enter($__internal_652802731ee0a63e527ae3f6bbb3f1ddd54dd5f7197b81e9c76f1b4058194646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1d5853c21badac4931548b9f8d1dc97175b1280e97c2140537ffe83506779417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5853c21badac4931548b9f8d1dc97175b1280e97c2140537ffe83506779417->enter($__internal_1d5853c21badac4931548b9f8d1dc97175b1280e97c2140537ffe83506779417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_1d5853c21badac4931548b9f8d1dc97175b1280e97c2140537ffe83506779417->leave($__internal_1d5853c21badac4931548b9f8d1dc97175b1280e97c2140537ffe83506779417_prof);

        
        $__internal_652802731ee0a63e527ae3f6bbb3f1ddd54dd5f7197b81e9c76f1b4058194646->leave($__internal_652802731ee0a63e527ae3f6bbb3f1ddd54dd5f7197b81e9c76f1b4058194646_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\Projet_symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
