<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_5f73f1c95d650d80ec39fe9e6618fe18c7f3717b248f7d793faa288f9177f0e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_b64504e34850c30a40b8699f1fdaa0ede7b40b48cc2e148dde7b414c1575861d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b64504e34850c30a40b8699f1fdaa0ede7b40b48cc2e148dde7b414c1575861d->enter($__internal_b64504e34850c30a40b8699f1fdaa0ede7b40b48cc2e148dde7b414c1575861d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_9184149d2aedfdd471115840f044b314f546c6db5d029d965eaac4b72b7b25a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9184149d2aedfdd471115840f044b314f546c6db5d029d965eaac4b72b7b25a6->enter($__internal_9184149d2aedfdd471115840f044b314f546c6db5d029d965eaac4b72b7b25a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b64504e34850c30a40b8699f1fdaa0ede7b40b48cc2e148dde7b414c1575861d->leave($__internal_b64504e34850c30a40b8699f1fdaa0ede7b40b48cc2e148dde7b414c1575861d_prof);

        
        $__internal_9184149d2aedfdd471115840f044b314f546c6db5d029d965eaac4b72b7b25a6->leave($__internal_9184149d2aedfdd471115840f044b314f546c6db5d029d965eaac4b72b7b25a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4435008c669ed988b4472b5ab6048081e5993eafb5e735fa890658fcda9a1a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4435008c669ed988b4472b5ab6048081e5993eafb5e735fa890658fcda9a1a73->enter($__internal_4435008c669ed988b4472b5ab6048081e5993eafb5e735fa890658fcda9a1a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_089e462594c2dce5ab475b596ad7b89aedfee3db7c7495e9b6689aff6209084b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089e462594c2dce5ab475b596ad7b89aedfee3db7c7495e9b6689aff6209084b->enter($__internal_089e462594c2dce5ab475b596ad7b89aedfee3db7c7495e9b6689aff6209084b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_089e462594c2dce5ab475b596ad7b89aedfee3db7c7495e9b6689aff6209084b->leave($__internal_089e462594c2dce5ab475b596ad7b89aedfee3db7c7495e9b6689aff6209084b_prof);

        
        $__internal_4435008c669ed988b4472b5ab6048081e5993eafb5e735fa890658fcda9a1a73->leave($__internal_4435008c669ed988b4472b5ab6048081e5993eafb5e735fa890658fcda9a1a73_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
