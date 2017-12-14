<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_849c2038196717df126eb02df52a966a73034cf5cc759052ea3d983dbf3a1d85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_d13d8d096677712adc87ef02152dfd3e05c3562374c048e9dde4f069870ac26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d13d8d096677712adc87ef02152dfd3e05c3562374c048e9dde4f069870ac26c->enter($__internal_d13d8d096677712adc87ef02152dfd3e05c3562374c048e9dde4f069870ac26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_f734cd51b67773ee8a47ea7932b5f867c794204d04801d351f88c6b3fc326049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f734cd51b67773ee8a47ea7932b5f867c794204d04801d351f88c6b3fc326049->enter($__internal_f734cd51b67773ee8a47ea7932b5f867c794204d04801d351f88c6b3fc326049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d13d8d096677712adc87ef02152dfd3e05c3562374c048e9dde4f069870ac26c->leave($__internal_d13d8d096677712adc87ef02152dfd3e05c3562374c048e9dde4f069870ac26c_prof);

        
        $__internal_f734cd51b67773ee8a47ea7932b5f867c794204d04801d351f88c6b3fc326049->leave($__internal_f734cd51b67773ee8a47ea7932b5f867c794204d04801d351f88c6b3fc326049_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9539e2adcfd9b62a7ac86e3090b7fe60b665dc05499248cabf3f322bf46e8fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9539e2adcfd9b62a7ac86e3090b7fe60b665dc05499248cabf3f322bf46e8fb5->enter($__internal_9539e2adcfd9b62a7ac86e3090b7fe60b665dc05499248cabf3f322bf46e8fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_15414e6e30bfe75bd669aedc2ec5449009cc6990c0205a13440fdbf40c5fbb1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15414e6e30bfe75bd669aedc2ec5449009cc6990c0205a13440fdbf40c5fbb1d->enter($__internal_15414e6e30bfe75bd669aedc2ec5449009cc6990c0205a13440fdbf40c5fbb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_15414e6e30bfe75bd669aedc2ec5449009cc6990c0205a13440fdbf40c5fbb1d->leave($__internal_15414e6e30bfe75bd669aedc2ec5449009cc6990c0205a13440fdbf40c5fbb1d_prof);

        
        $__internal_9539e2adcfd9b62a7ac86e3090b7fe60b665dc05499248cabf3f322bf46e8fb5->leave($__internal_9539e2adcfd9b62a7ac86e3090b7fe60b665dc05499248cabf3f322bf46e8fb5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\projet\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
