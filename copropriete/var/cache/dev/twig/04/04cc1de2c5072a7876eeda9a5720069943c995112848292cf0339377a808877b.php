<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_858412964d9da81a1bba72a469f0efb5765ef32d6ce03c9ee8a69e23b6226531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_8142c95f1d10ac9e82993b6e8096a7bdec186513bed3d9eb4b90189c26ab0008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8142c95f1d10ac9e82993b6e8096a7bdec186513bed3d9eb4b90189c26ab0008->enter($__internal_8142c95f1d10ac9e82993b6e8096a7bdec186513bed3d9eb4b90189c26ab0008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_cee3521dd5d0cc846032b03f61f18dcb2649e6e819c4130baf3136292104fd08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee3521dd5d0cc846032b03f61f18dcb2649e6e819c4130baf3136292104fd08->enter($__internal_cee3521dd5d0cc846032b03f61f18dcb2649e6e819c4130baf3136292104fd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8142c95f1d10ac9e82993b6e8096a7bdec186513bed3d9eb4b90189c26ab0008->leave($__internal_8142c95f1d10ac9e82993b6e8096a7bdec186513bed3d9eb4b90189c26ab0008_prof);

        
        $__internal_cee3521dd5d0cc846032b03f61f18dcb2649e6e819c4130baf3136292104fd08->leave($__internal_cee3521dd5d0cc846032b03f61f18dcb2649e6e819c4130baf3136292104fd08_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ede6b34ad35f60a79f7f6247ae700f0b3884319a46e34ab75a740e89535f1d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede6b34ad35f60a79f7f6247ae700f0b3884319a46e34ab75a740e89535f1d2e->enter($__internal_ede6b34ad35f60a79f7f6247ae700f0b3884319a46e34ab75a740e89535f1d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_958b18c5cb0ddd0ae53cee18974bc966f7c0432afea9de8d5f72cc95a9001e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958b18c5cb0ddd0ae53cee18974bc966f7c0432afea9de8d5f72cc95a9001e7e->enter($__internal_958b18c5cb0ddd0ae53cee18974bc966f7c0432afea9de8d5f72cc95a9001e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_958b18c5cb0ddd0ae53cee18974bc966f7c0432afea9de8d5f72cc95a9001e7e->leave($__internal_958b18c5cb0ddd0ae53cee18974bc966f7c0432afea9de8d5f72cc95a9001e7e_prof);

        
        $__internal_ede6b34ad35f60a79f7f6247ae700f0b3884319a46e34ab75a740e89535f1d2e->leave($__internal_ede6b34ad35f60a79f7f6247ae700f0b3884319a46e34ab75a740e89535f1d2e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
", "FOSUserBundle:Group:list.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
