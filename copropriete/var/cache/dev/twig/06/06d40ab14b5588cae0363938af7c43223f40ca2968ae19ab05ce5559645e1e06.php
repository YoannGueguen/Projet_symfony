<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_d2a1fa0ba50fd155b6016b425014a2b8cb850b8143d62dbf31dbf9564787b9fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_4dadea280b7bce8732fe79c4e37b466d48bede4e4290cd607e2e906a9b832dd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dadea280b7bce8732fe79c4e37b466d48bede4e4290cd607e2e906a9b832dd6->enter($__internal_4dadea280b7bce8732fe79c4e37b466d48bede4e4290cd607e2e906a9b832dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_dd7fe1fefb0ee4bb6e1ea3ab5ad9e5c668eeba6aa715020fcede1860a5269e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7fe1fefb0ee4bb6e1ea3ab5ad9e5c668eeba6aa715020fcede1860a5269e2a->enter($__internal_dd7fe1fefb0ee4bb6e1ea3ab5ad9e5c668eeba6aa715020fcede1860a5269e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dadea280b7bce8732fe79c4e37b466d48bede4e4290cd607e2e906a9b832dd6->leave($__internal_4dadea280b7bce8732fe79c4e37b466d48bede4e4290cd607e2e906a9b832dd6_prof);

        
        $__internal_dd7fe1fefb0ee4bb6e1ea3ab5ad9e5c668eeba6aa715020fcede1860a5269e2a->leave($__internal_dd7fe1fefb0ee4bb6e1ea3ab5ad9e5c668eeba6aa715020fcede1860a5269e2a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cda01a233652f974ce84d118aab749dc8ce2772d8941dadd2dbb536229ce3ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cda01a233652f974ce84d118aab749dc8ce2772d8941dadd2dbb536229ce3ac6->enter($__internal_cda01a233652f974ce84d118aab749dc8ce2772d8941dadd2dbb536229ce3ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ce7de3857f07188b90ce2c48d121a0e80a484d7e155ed23372e9e4bdeeb6f13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7de3857f07188b90ce2c48d121a0e80a484d7e155ed23372e9e4bdeeb6f13c->enter($__internal_ce7de3857f07188b90ce2c48d121a0e80a484d7e155ed23372e9e4bdeeb6f13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ce7de3857f07188b90ce2c48d121a0e80a484d7e155ed23372e9e4bdeeb6f13c->leave($__internal_ce7de3857f07188b90ce2c48d121a0e80a484d7e155ed23372e9e4bdeeb6f13c_prof);

        
        $__internal_cda01a233652f974ce84d118aab749dc8ce2772d8941dadd2dbb536229ce3ac6->leave($__internal_cda01a233652f974ce84d118aab749dc8ce2772d8941dadd2dbb536229ce3ac6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
