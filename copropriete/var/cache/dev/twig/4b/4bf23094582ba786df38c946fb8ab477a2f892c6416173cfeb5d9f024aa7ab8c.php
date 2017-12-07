<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_5274da4d3167fb0e85b06669b4e54ebeb56657ab991642c140916f820bbfa65c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_3932a604705c9bf0402c1e67210cffe70edafb806c3cbd8a09c0fa73a2a0dd99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3932a604705c9bf0402c1e67210cffe70edafb806c3cbd8a09c0fa73a2a0dd99->enter($__internal_3932a604705c9bf0402c1e67210cffe70edafb806c3cbd8a09c0fa73a2a0dd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_a4942418489e713ee9337b0ce5ff7ef603a42611fe71afc119c1b6e725c24be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4942418489e713ee9337b0ce5ff7ef603a42611fe71afc119c1b6e725c24be2->enter($__internal_a4942418489e713ee9337b0ce5ff7ef603a42611fe71afc119c1b6e725c24be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3932a604705c9bf0402c1e67210cffe70edafb806c3cbd8a09c0fa73a2a0dd99->leave($__internal_3932a604705c9bf0402c1e67210cffe70edafb806c3cbd8a09c0fa73a2a0dd99_prof);

        
        $__internal_a4942418489e713ee9337b0ce5ff7ef603a42611fe71afc119c1b6e725c24be2->leave($__internal_a4942418489e713ee9337b0ce5ff7ef603a42611fe71afc119c1b6e725c24be2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3596ac2652c30f5377f95a9b04986597d2f45454b2b0d41d396a97f353ff4791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3596ac2652c30f5377f95a9b04986597d2f45454b2b0d41d396a97f353ff4791->enter($__internal_3596ac2652c30f5377f95a9b04986597d2f45454b2b0d41d396a97f353ff4791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b25349d9372c121325b0f05e11cbd5eaefdfe4583d671012b5cb517006bda5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25349d9372c121325b0f05e11cbd5eaefdfe4583d671012b5cb517006bda5ff->enter($__internal_b25349d9372c121325b0f05e11cbd5eaefdfe4583d671012b5cb517006bda5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_b25349d9372c121325b0f05e11cbd5eaefdfe4583d671012b5cb517006bda5ff->leave($__internal_b25349d9372c121325b0f05e11cbd5eaefdfe4583d671012b5cb517006bda5ff_prof);

        
        $__internal_3596ac2652c30f5377f95a9b04986597d2f45454b2b0d41d396a97f353ff4791->leave($__internal_3596ac2652c30f5377f95a9b04986597d2f45454b2b0d41d396a97f353ff4791_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
