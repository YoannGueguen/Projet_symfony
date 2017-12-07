<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_cf319b09a19b4876a70d06b5f6326bf284d2c0a1d99c9c7ed829a7f03406fdb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_8cfb5170cfe47677b8bd7642e2896536e39f7143ae93d22d38bafbcca48d6ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cfb5170cfe47677b8bd7642e2896536e39f7143ae93d22d38bafbcca48d6ea6->enter($__internal_8cfb5170cfe47677b8bd7642e2896536e39f7143ae93d22d38bafbcca48d6ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_42d6a32e5e9b19d62b51894684c0ac58f6585df625f1d408165640dee596c13e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d6a32e5e9b19d62b51894684c0ac58f6585df625f1d408165640dee596c13e->enter($__internal_42d6a32e5e9b19d62b51894684c0ac58f6585df625f1d408165640dee596c13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cfb5170cfe47677b8bd7642e2896536e39f7143ae93d22d38bafbcca48d6ea6->leave($__internal_8cfb5170cfe47677b8bd7642e2896536e39f7143ae93d22d38bafbcca48d6ea6_prof);

        
        $__internal_42d6a32e5e9b19d62b51894684c0ac58f6585df625f1d408165640dee596c13e->leave($__internal_42d6a32e5e9b19d62b51894684c0ac58f6585df625f1d408165640dee596c13e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0b6280fb6c8ce6bbbf4e0d0056d45611f45a760cdd727caf09d005e72981a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b6280fb6c8ce6bbbf4e0d0056d45611f45a760cdd727caf09d005e72981a41->enter($__internal_b0b6280fb6c8ce6bbbf4e0d0056d45611f45a760cdd727caf09d005e72981a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e8b15a99c3c6877fb1e9e5f309c2c6089bd694306c84f19673d1d36aa8230de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b15a99c3c6877fb1e9e5f309c2c6089bd694306c84f19673d1d36aa8230de1->enter($__internal_e8b15a99c3c6877fb1e9e5f309c2c6089bd694306c84f19673d1d36aa8230de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_e8b15a99c3c6877fb1e9e5f309c2c6089bd694306c84f19673d1d36aa8230de1->leave($__internal_e8b15a99c3c6877fb1e9e5f309c2c6089bd694306c84f19673d1d36aa8230de1_prof);

        
        $__internal_b0b6280fb6c8ce6bbbf4e0d0056d45611f45a760cdd727caf09d005e72981a41->leave($__internal_b0b6280fb6c8ce6bbbf4e0d0056d45611f45a760cdd727caf09d005e72981a41_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
