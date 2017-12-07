<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e21d76ced0a3567e70525114be9ae111f35f62d89adae96c7d4f91bf55fc1526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_05baaa0653c036bda073aec323529269904f8e3a5f4c392c5f1a06f1b89ffa2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05baaa0653c036bda073aec323529269904f8e3a5f4c392c5f1a06f1b89ffa2a->enter($__internal_05baaa0653c036bda073aec323529269904f8e3a5f4c392c5f1a06f1b89ffa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_e07ee092813c925040d2f54e74b3c31d24bcc345951766376ae20550b799eff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07ee092813c925040d2f54e74b3c31d24bcc345951766376ae20550b799eff8->enter($__internal_e07ee092813c925040d2f54e74b3c31d24bcc345951766376ae20550b799eff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05baaa0653c036bda073aec323529269904f8e3a5f4c392c5f1a06f1b89ffa2a->leave($__internal_05baaa0653c036bda073aec323529269904f8e3a5f4c392c5f1a06f1b89ffa2a_prof);

        
        $__internal_e07ee092813c925040d2f54e74b3c31d24bcc345951766376ae20550b799eff8->leave($__internal_e07ee092813c925040d2f54e74b3c31d24bcc345951766376ae20550b799eff8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0fc9fed02125e65a64d24a3cbc34970670797ff05e6d2cba1bdf8a47b3f498d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0fc9fed02125e65a64d24a3cbc34970670797ff05e6d2cba1bdf8a47b3f498d->enter($__internal_d0fc9fed02125e65a64d24a3cbc34970670797ff05e6d2cba1bdf8a47b3f498d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_11017963a4c1e67993e7c12b54c0ca4e44319f85768ba6576d1e4b4a44d73f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11017963a4c1e67993e7c12b54c0ca4e44319f85768ba6576d1e4b4a44d73f4d->enter($__internal_11017963a4c1e67993e7c12b54c0ca4e44319f85768ba6576d1e4b4a44d73f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_11017963a4c1e67993e7c12b54c0ca4e44319f85768ba6576d1e4b4a44d73f4d->leave($__internal_11017963a4c1e67993e7c12b54c0ca4e44319f85768ba6576d1e4b4a44d73f4d_prof);

        
        $__internal_d0fc9fed02125e65a64d24a3cbc34970670797ff05e6d2cba1bdf8a47b3f498d->leave($__internal_d0fc9fed02125e65a64d24a3cbc34970670797ff05e6d2cba1bdf8a47b3f498d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
