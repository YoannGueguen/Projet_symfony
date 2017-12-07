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
        $__internal_9b0219b66946896c495c4a05789f89a271d68e61fa77af4c828bce8d467b423e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0219b66946896c495c4a05789f89a271d68e61fa77af4c828bce8d467b423e->enter($__internal_9b0219b66946896c495c4a05789f89a271d68e61fa77af4c828bce8d467b423e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_5cc897716f8e6c3b5be06174de3a2d6d989f32c88870861f9b05f117ae01a174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc897716f8e6c3b5be06174de3a2d6d989f32c88870861f9b05f117ae01a174->enter($__internal_5cc897716f8e6c3b5be06174de3a2d6d989f32c88870861f9b05f117ae01a174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b0219b66946896c495c4a05789f89a271d68e61fa77af4c828bce8d467b423e->leave($__internal_9b0219b66946896c495c4a05789f89a271d68e61fa77af4c828bce8d467b423e_prof);

        
        $__internal_5cc897716f8e6c3b5be06174de3a2d6d989f32c88870861f9b05f117ae01a174->leave($__internal_5cc897716f8e6c3b5be06174de3a2d6d989f32c88870861f9b05f117ae01a174_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_107567a83320c9942bda9538a4ee087ae4ff153585e0304b658513c6ce3a0766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107567a83320c9942bda9538a4ee087ae4ff153585e0304b658513c6ce3a0766->enter($__internal_107567a83320c9942bda9538a4ee087ae4ff153585e0304b658513c6ce3a0766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3c6f8f0230293f6617bbd3af90db4647a1e33ef1e6dc38cfce586682b51ef570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6f8f0230293f6617bbd3af90db4647a1e33ef1e6dc38cfce586682b51ef570->enter($__internal_3c6f8f0230293f6617bbd3af90db4647a1e33ef1e6dc38cfce586682b51ef570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_3c6f8f0230293f6617bbd3af90db4647a1e33ef1e6dc38cfce586682b51ef570->leave($__internal_3c6f8f0230293f6617bbd3af90db4647a1e33ef1e6dc38cfce586682b51ef570_prof);

        
        $__internal_107567a83320c9942bda9538a4ee087ae4ff153585e0304b658513c6ce3a0766->leave($__internal_107567a83320c9942bda9538a4ee087ae4ff153585e0304b658513c6ce3a0766_prof);

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
", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
