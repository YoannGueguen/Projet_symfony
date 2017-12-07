<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c2cbd4a8cb76cd9e64923cb80bab16821a15c9c49dc732d01bb0f5c71f27d409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_6075735fed35bb9d2419047adbbdf4aa6e6332f54c150554ab4b4f072576bf1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6075735fed35bb9d2419047adbbdf4aa6e6332f54c150554ab4b4f072576bf1e->enter($__internal_6075735fed35bb9d2419047adbbdf4aa6e6332f54c150554ab4b4f072576bf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_ac1e33c1516d6c9022e27e8421f4efb9e1f78b5cfd1bb1857092a8cb533d44c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1e33c1516d6c9022e27e8421f4efb9e1f78b5cfd1bb1857092a8cb533d44c1->enter($__internal_ac1e33c1516d6c9022e27e8421f4efb9e1f78b5cfd1bb1857092a8cb533d44c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6075735fed35bb9d2419047adbbdf4aa6e6332f54c150554ab4b4f072576bf1e->leave($__internal_6075735fed35bb9d2419047adbbdf4aa6e6332f54c150554ab4b4f072576bf1e_prof);

        
        $__internal_ac1e33c1516d6c9022e27e8421f4efb9e1f78b5cfd1bb1857092a8cb533d44c1->leave($__internal_ac1e33c1516d6c9022e27e8421f4efb9e1f78b5cfd1bb1857092a8cb533d44c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da7d0c793a95cb062cb59b88aa95d0b68086f9ed648943f190e4ec619b4f37a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7d0c793a95cb062cb59b88aa95d0b68086f9ed648943f190e4ec619b4f37a3->enter($__internal_da7d0c793a95cb062cb59b88aa95d0b68086f9ed648943f190e4ec619b4f37a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_01f6e0c3de48c2d4e9dbce9b901743331ddec986b7a4a793cf118405efd7019d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f6e0c3de48c2d4e9dbce9b901743331ddec986b7a4a793cf118405efd7019d->enter($__internal_01f6e0c3de48c2d4e9dbce9b901743331ddec986b7a4a793cf118405efd7019d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_01f6e0c3de48c2d4e9dbce9b901743331ddec986b7a4a793cf118405efd7019d->leave($__internal_01f6e0c3de48c2d4e9dbce9b901743331ddec986b7a4a793cf118405efd7019d_prof);

        
        $__internal_da7d0c793a95cb062cb59b88aa95d0b68086f9ed648943f190e4ec619b4f37a3->leave($__internal_da7d0c793a95cb062cb59b88aa95d0b68086f9ed648943f190e4ec619b4f37a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
