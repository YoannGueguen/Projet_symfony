<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_4132c52413b5e09637c75e7efd20a5c68cbc94823510a8961d28898b0afcc377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_2f64f84636914aedd52ae9ea5a076224f80029ef724c7b229a907acfc59cde4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f64f84636914aedd52ae9ea5a076224f80029ef724c7b229a907acfc59cde4b->enter($__internal_2f64f84636914aedd52ae9ea5a076224f80029ef724c7b229a907acfc59cde4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_c8a02e3a644ee94bee1f67d6ba563bfa9b1aa97aaea856aa12b93c64a61b995c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a02e3a644ee94bee1f67d6ba563bfa9b1aa97aaea856aa12b93c64a61b995c->enter($__internal_c8a02e3a644ee94bee1f67d6ba563bfa9b1aa97aaea856aa12b93c64a61b995c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f64f84636914aedd52ae9ea5a076224f80029ef724c7b229a907acfc59cde4b->leave($__internal_2f64f84636914aedd52ae9ea5a076224f80029ef724c7b229a907acfc59cde4b_prof);

        
        $__internal_c8a02e3a644ee94bee1f67d6ba563bfa9b1aa97aaea856aa12b93c64a61b995c->leave($__internal_c8a02e3a644ee94bee1f67d6ba563bfa9b1aa97aaea856aa12b93c64a61b995c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2894e272145ff437397ce88a5af0919e30267c30b6c9e639b9cf0f0537477b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2894e272145ff437397ce88a5af0919e30267c30b6c9e639b9cf0f0537477b70->enter($__internal_2894e272145ff437397ce88a5af0919e30267c30b6c9e639b9cf0f0537477b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bb0496d775f99ec1b128a1c254c0365a3e39e1cdf7296a8fc072700e2aaccc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0496d775f99ec1b128a1c254c0365a3e39e1cdf7296a8fc072700e2aaccc24->enter($__internal_bb0496d775f99ec1b128a1c254c0365a3e39e1cdf7296a8fc072700e2aaccc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_bb0496d775f99ec1b128a1c254c0365a3e39e1cdf7296a8fc072700e2aaccc24->leave($__internal_bb0496d775f99ec1b128a1c254c0365a3e39e1cdf7296a8fc072700e2aaccc24_prof);

        
        $__internal_2894e272145ff437397ce88a5af0919e30267c30b6c9e639b9cf0f0537477b70->leave($__internal_2894e272145ff437397ce88a5af0919e30267c30b6c9e639b9cf0f0537477b70_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
