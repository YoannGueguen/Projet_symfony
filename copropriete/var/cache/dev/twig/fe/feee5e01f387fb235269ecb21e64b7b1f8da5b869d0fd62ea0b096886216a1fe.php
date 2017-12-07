<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_339d88962d441553f7b3027493240c9fdc70566b9bf71f6a7e7aff85cb326bc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_e09eb39434d61ed43c9f7dc45d3b636233b24f45cef3fc9587541157f603966b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e09eb39434d61ed43c9f7dc45d3b636233b24f45cef3fc9587541157f603966b->enter($__internal_e09eb39434d61ed43c9f7dc45d3b636233b24f45cef3fc9587541157f603966b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_6332684f9d40e8d8cbc41ec06ff9428bb1b5a14d5587c2fdb311d4e6068434f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6332684f9d40e8d8cbc41ec06ff9428bb1b5a14d5587c2fdb311d4e6068434f5->enter($__internal_6332684f9d40e8d8cbc41ec06ff9428bb1b5a14d5587c2fdb311d4e6068434f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e09eb39434d61ed43c9f7dc45d3b636233b24f45cef3fc9587541157f603966b->leave($__internal_e09eb39434d61ed43c9f7dc45d3b636233b24f45cef3fc9587541157f603966b_prof);

        
        $__internal_6332684f9d40e8d8cbc41ec06ff9428bb1b5a14d5587c2fdb311d4e6068434f5->leave($__internal_6332684f9d40e8d8cbc41ec06ff9428bb1b5a14d5587c2fdb311d4e6068434f5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ace7fe6a44305889db8c7af948d7b90d12355cce788d73e0a2743b6394c6fe3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ace7fe6a44305889db8c7af948d7b90d12355cce788d73e0a2743b6394c6fe3d->enter($__internal_ace7fe6a44305889db8c7af948d7b90d12355cce788d73e0a2743b6394c6fe3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_13bf668bdd2941f1b8194bafe29635d70b6daa0b6e21df6bb54115a8bc9fd60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bf668bdd2941f1b8194bafe29635d70b6daa0b6e21df6bb54115a8bc9fd60b->enter($__internal_13bf668bdd2941f1b8194bafe29635d70b6daa0b6e21df6bb54115a8bc9fd60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_13bf668bdd2941f1b8194bafe29635d70b6daa0b6e21df6bb54115a8bc9fd60b->leave($__internal_13bf668bdd2941f1b8194bafe29635d70b6daa0b6e21df6bb54115a8bc9fd60b_prof);

        
        $__internal_ace7fe6a44305889db8c7af948d7b90d12355cce788d73e0a2743b6394c6fe3d->leave($__internal_ace7fe6a44305889db8c7af948d7b90d12355cce788d73e0a2743b6394c6fe3d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
