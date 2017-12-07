<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_0011aed154c5bcef21eba1e80d0de76a887d68ef795d7fdd154caff4224d3f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_8f3b1707213a57c0e1a4e791c2622ca241b09a5cfa42abdde4a4fb07e950d3c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f3b1707213a57c0e1a4e791c2622ca241b09a5cfa42abdde4a4fb07e950d3c6->enter($__internal_8f3b1707213a57c0e1a4e791c2622ca241b09a5cfa42abdde4a4fb07e950d3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_c03ff92f89d15526c7408456e30a8b13ef2903154ba701087e2cddfd1eadaf2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03ff92f89d15526c7408456e30a8b13ef2903154ba701087e2cddfd1eadaf2f->enter($__internal_c03ff92f89d15526c7408456e30a8b13ef2903154ba701087e2cddfd1eadaf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f3b1707213a57c0e1a4e791c2622ca241b09a5cfa42abdde4a4fb07e950d3c6->leave($__internal_8f3b1707213a57c0e1a4e791c2622ca241b09a5cfa42abdde4a4fb07e950d3c6_prof);

        
        $__internal_c03ff92f89d15526c7408456e30a8b13ef2903154ba701087e2cddfd1eadaf2f->leave($__internal_c03ff92f89d15526c7408456e30a8b13ef2903154ba701087e2cddfd1eadaf2f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7ceeffcb53e12aa3950ad408483aa9c98af537767d7cedc4a7acf16985fe725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ceeffcb53e12aa3950ad408483aa9c98af537767d7cedc4a7acf16985fe725->enter($__internal_f7ceeffcb53e12aa3950ad408483aa9c98af537767d7cedc4a7acf16985fe725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bffe4826e203ba4208f39b867bd2043eca36a3dd3f1be13f3c63aab75491d3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bffe4826e203ba4208f39b867bd2043eca36a3dd3f1be13f3c63aab75491d3da->enter($__internal_bffe4826e203ba4208f39b867bd2043eca36a3dd3f1be13f3c63aab75491d3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_bffe4826e203ba4208f39b867bd2043eca36a3dd3f1be13f3c63aab75491d3da->leave($__internal_bffe4826e203ba4208f39b867bd2043eca36a3dd3f1be13f3c63aab75491d3da_prof);

        
        $__internal_f7ceeffcb53e12aa3950ad408483aa9c98af537767d7cedc4a7acf16985fe725->leave($__internal_f7ceeffcb53e12aa3950ad408483aa9c98af537767d7cedc4a7acf16985fe725_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
", "FOSUserBundle:Group:new.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
