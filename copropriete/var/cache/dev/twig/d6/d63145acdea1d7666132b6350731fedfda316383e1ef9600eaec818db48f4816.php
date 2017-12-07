<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_49368bd641bc902ab9f7fdca31b32d504c6f8c8b0d6e0298648816972bbba32e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_8d176925566c8aa62cba2bc94afb44968bfeb2ce438a72e428c62d9af19a5666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d176925566c8aa62cba2bc94afb44968bfeb2ce438a72e428c62d9af19a5666->enter($__internal_8d176925566c8aa62cba2bc94afb44968bfeb2ce438a72e428c62d9af19a5666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_68176def1de53e28a4bd6ffd9b13c52d0e54daeed9b63dbc6881326a907209e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68176def1de53e28a4bd6ffd9b13c52d0e54daeed9b63dbc6881326a907209e5->enter($__internal_68176def1de53e28a4bd6ffd9b13c52d0e54daeed9b63dbc6881326a907209e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d176925566c8aa62cba2bc94afb44968bfeb2ce438a72e428c62d9af19a5666->leave($__internal_8d176925566c8aa62cba2bc94afb44968bfeb2ce438a72e428c62d9af19a5666_prof);

        
        $__internal_68176def1de53e28a4bd6ffd9b13c52d0e54daeed9b63dbc6881326a907209e5->leave($__internal_68176def1de53e28a4bd6ffd9b13c52d0e54daeed9b63dbc6881326a907209e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eedcffe06ea349c4118723f499c1f3fa565a6fe6613c85e650db24b3d9cfd883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eedcffe06ea349c4118723f499c1f3fa565a6fe6613c85e650db24b3d9cfd883->enter($__internal_eedcffe06ea349c4118723f499c1f3fa565a6fe6613c85e650db24b3d9cfd883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e5dbd535cb3e36e431dc1a76855f3ea451e903f3801c96df6ad70a4e0997befa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5dbd535cb3e36e431dc1a76855f3ea451e903f3801c96df6ad70a4e0997befa->enter($__internal_e5dbd535cb3e36e431dc1a76855f3ea451e903f3801c96df6ad70a4e0997befa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_e5dbd535cb3e36e431dc1a76855f3ea451e903f3801c96df6ad70a4e0997befa->leave($__internal_e5dbd535cb3e36e431dc1a76855f3ea451e903f3801c96df6ad70a4e0997befa_prof);

        
        $__internal_eedcffe06ea349c4118723f499c1f3fa565a6fe6613c85e650db24b3d9cfd883->leave($__internal_eedcffe06ea349c4118723f499c1f3fa565a6fe6613c85e650db24b3d9cfd883_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
