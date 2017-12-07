<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_cabb04cb84b15ea8f136591c227f5a2f422c12016df119edcf6a2023fa4c74b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_e018309198ff110326a9dedca82f763f11ea1aeaba6a902a40588091e4e3e948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e018309198ff110326a9dedca82f763f11ea1aeaba6a902a40588091e4e3e948->enter($__internal_e018309198ff110326a9dedca82f763f11ea1aeaba6a902a40588091e4e3e948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_896bc0b44543263e904f949f906e4328c4d843094b4c0e2d5ddedbd908a8967e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896bc0b44543263e904f949f906e4328c4d843094b4c0e2d5ddedbd908a8967e->enter($__internal_896bc0b44543263e904f949f906e4328c4d843094b4c0e2d5ddedbd908a8967e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e018309198ff110326a9dedca82f763f11ea1aeaba6a902a40588091e4e3e948->leave($__internal_e018309198ff110326a9dedca82f763f11ea1aeaba6a902a40588091e4e3e948_prof);

        
        $__internal_896bc0b44543263e904f949f906e4328c4d843094b4c0e2d5ddedbd908a8967e->leave($__internal_896bc0b44543263e904f949f906e4328c4d843094b4c0e2d5ddedbd908a8967e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d18acb3c1f88b95a982a73aa9da784c08c1215378d6cba57e8731c73d4b1d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d18acb3c1f88b95a982a73aa9da784c08c1215378d6cba57e8731c73d4b1d98->enter($__internal_7d18acb3c1f88b95a982a73aa9da784c08c1215378d6cba57e8731c73d4b1d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b9ae2517577b86443faad45f4c8a66eddc95fe7df95e7c198a5058f18ebb24fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ae2517577b86443faad45f4c8a66eddc95fe7df95e7c198a5058f18ebb24fd->enter($__internal_b9ae2517577b86443faad45f4c8a66eddc95fe7df95e7c198a5058f18ebb24fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_b9ae2517577b86443faad45f4c8a66eddc95fe7df95e7c198a5058f18ebb24fd->leave($__internal_b9ae2517577b86443faad45f4c8a66eddc95fe7df95e7c198a5058f18ebb24fd_prof);

        
        $__internal_7d18acb3c1f88b95a982a73aa9da784c08c1215378d6cba57e8731c73d4b1d98->leave($__internal_7d18acb3c1f88b95a982a73aa9da784c08c1215378d6cba57e8731c73d4b1d98_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
