<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_65c2add8cb5902a4f9049843d611da3970b4e300acb21d82a1d76630a4682d8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_14e870ab292534b88d0d64c43796accb25935160d606bd6ea94ca0c0099575f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e870ab292534b88d0d64c43796accb25935160d606bd6ea94ca0c0099575f7->enter($__internal_14e870ab292534b88d0d64c43796accb25935160d606bd6ea94ca0c0099575f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_4728dda514367288ea0888723743a282f2f40d4b1dee97a85cbeec7aef512ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4728dda514367288ea0888723743a282f2f40d4b1dee97a85cbeec7aef512ae5->enter($__internal_4728dda514367288ea0888723743a282f2f40d4b1dee97a85cbeec7aef512ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14e870ab292534b88d0d64c43796accb25935160d606bd6ea94ca0c0099575f7->leave($__internal_14e870ab292534b88d0d64c43796accb25935160d606bd6ea94ca0c0099575f7_prof);

        
        $__internal_4728dda514367288ea0888723743a282f2f40d4b1dee97a85cbeec7aef512ae5->leave($__internal_4728dda514367288ea0888723743a282f2f40d4b1dee97a85cbeec7aef512ae5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58be450e92370237a2e39e61b8cec42c1f5008804479eef0d67c8db7eda6575a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58be450e92370237a2e39e61b8cec42c1f5008804479eef0d67c8db7eda6575a->enter($__internal_58be450e92370237a2e39e61b8cec42c1f5008804479eef0d67c8db7eda6575a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ea1a1ae0d47952878c6c737fcef43be32fd6c933027cf6099326989a49160e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1a1ae0d47952878c6c737fcef43be32fd6c933027cf6099326989a49160e07->enter($__internal_ea1a1ae0d47952878c6c737fcef43be32fd6c933027cf6099326989a49160e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_ea1a1ae0d47952878c6c737fcef43be32fd6c933027cf6099326989a49160e07->leave($__internal_ea1a1ae0d47952878c6c737fcef43be32fd6c933027cf6099326989a49160e07_prof);

        
        $__internal_58be450e92370237a2e39e61b8cec42c1f5008804479eef0d67c8db7eda6575a->leave($__internal_58be450e92370237a2e39e61b8cec42c1f5008804479eef0d67c8db7eda6575a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\projet\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
