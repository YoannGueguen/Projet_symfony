<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8a6319e12c809c494e11033738d1d87d7e2ba1fd77eddddb7e3625ef17ea62b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_6a0aa030c6e337a7789a6c83ff0cbbe565090ae9494c20a5cbf8e2d23e15b670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a0aa030c6e337a7789a6c83ff0cbbe565090ae9494c20a5cbf8e2d23e15b670->enter($__internal_6a0aa030c6e337a7789a6c83ff0cbbe565090ae9494c20a5cbf8e2d23e15b670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_0182648f834cfe54d26d4121e0245e1c4742babe0aebfa496067616e532a8351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0182648f834cfe54d26d4121e0245e1c4742babe0aebfa496067616e532a8351->enter($__internal_0182648f834cfe54d26d4121e0245e1c4742babe0aebfa496067616e532a8351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a0aa030c6e337a7789a6c83ff0cbbe565090ae9494c20a5cbf8e2d23e15b670->leave($__internal_6a0aa030c6e337a7789a6c83ff0cbbe565090ae9494c20a5cbf8e2d23e15b670_prof);

        
        $__internal_0182648f834cfe54d26d4121e0245e1c4742babe0aebfa496067616e532a8351->leave($__internal_0182648f834cfe54d26d4121e0245e1c4742babe0aebfa496067616e532a8351_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ec32bb4eb5e3b01014787d00a929b384c77d30d199441ffc9eb0947c3d618b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec32bb4eb5e3b01014787d00a929b384c77d30d199441ffc9eb0947c3d618b1->enter($__internal_1ec32bb4eb5e3b01014787d00a929b384c77d30d199441ffc9eb0947c3d618b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eb81229d79063d83c55e0b6f10c4b828e1051abf8c38bcb37e5bb6ad8ffb92b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb81229d79063d83c55e0b6f10c4b828e1051abf8c38bcb37e5bb6ad8ffb92b9->enter($__internal_eb81229d79063d83c55e0b6f10c4b828e1051abf8c38bcb37e5bb6ad8ffb92b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_eb81229d79063d83c55e0b6f10c4b828e1051abf8c38bcb37e5bb6ad8ffb92b9->leave($__internal_eb81229d79063d83c55e0b6f10c4b828e1051abf8c38bcb37e5bb6ad8ffb92b9_prof);

        
        $__internal_1ec32bb4eb5e3b01014787d00a929b384c77d30d199441ffc9eb0947c3d618b1->leave($__internal_1ec32bb4eb5e3b01014787d00a929b384c77d30d199441ffc9eb0947c3d618b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
