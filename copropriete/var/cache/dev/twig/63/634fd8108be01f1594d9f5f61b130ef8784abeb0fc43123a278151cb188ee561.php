<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_37c700f53b6bcab7bbfb1fa24ff609e3d301d6cf37c0fe36f2debb6af4fcbab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_256d90c22e82c9d8cb27e39989258c80ad993e42824d05395831b4dabf83b829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_256d90c22e82c9d8cb27e39989258c80ad993e42824d05395831b4dabf83b829->enter($__internal_256d90c22e82c9d8cb27e39989258c80ad993e42824d05395831b4dabf83b829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_eddd52bce25967268e36973e3d8031bc315eb40a2b32f79a63f2501cce56899a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eddd52bce25967268e36973e3d8031bc315eb40a2b32f79a63f2501cce56899a->enter($__internal_eddd52bce25967268e36973e3d8031bc315eb40a2b32f79a63f2501cce56899a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_256d90c22e82c9d8cb27e39989258c80ad993e42824d05395831b4dabf83b829->leave($__internal_256d90c22e82c9d8cb27e39989258c80ad993e42824d05395831b4dabf83b829_prof);

        
        $__internal_eddd52bce25967268e36973e3d8031bc315eb40a2b32f79a63f2501cce56899a->leave($__internal_eddd52bce25967268e36973e3d8031bc315eb40a2b32f79a63f2501cce56899a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28a5865739b16791995c06b160723c8d66360e5c3a45834bce3a697c9dd8c5ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a5865739b16791995c06b160723c8d66360e5c3a45834bce3a697c9dd8c5ce->enter($__internal_28a5865739b16791995c06b160723c8d66360e5c3a45834bce3a697c9dd8c5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_17b221f98c36f2dcf89344dd006f978c0a9bd3514fa004a8fbdd160f17e7339d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b221f98c36f2dcf89344dd006f978c0a9bd3514fa004a8fbdd160f17e7339d->enter($__internal_17b221f98c36f2dcf89344dd006f978c0a9bd3514fa004a8fbdd160f17e7339d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_17b221f98c36f2dcf89344dd006f978c0a9bd3514fa004a8fbdd160f17e7339d->leave($__internal_17b221f98c36f2dcf89344dd006f978c0a9bd3514fa004a8fbdd160f17e7339d_prof);

        
        $__internal_28a5865739b16791995c06b160723c8d66360e5c3a45834bce3a697c9dd8c5ce->leave($__internal_28a5865739b16791995c06b160723c8d66360e5c3a45834bce3a697c9dd8c5ce_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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
", "@FOSUser/Registration/check_email.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
