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
        $__internal_98bfd046b6515a5d3814bf9da3fc9923c8c5f260532e708d9e229f74e4b1a659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98bfd046b6515a5d3814bf9da3fc9923c8c5f260532e708d9e229f74e4b1a659->enter($__internal_98bfd046b6515a5d3814bf9da3fc9923c8c5f260532e708d9e229f74e4b1a659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_8fe7969325586e7abd057ae561111bb73d8ea021126e6342878c316570957a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe7969325586e7abd057ae561111bb73d8ea021126e6342878c316570957a32->enter($__internal_8fe7969325586e7abd057ae561111bb73d8ea021126e6342878c316570957a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98bfd046b6515a5d3814bf9da3fc9923c8c5f260532e708d9e229f74e4b1a659->leave($__internal_98bfd046b6515a5d3814bf9da3fc9923c8c5f260532e708d9e229f74e4b1a659_prof);

        
        $__internal_8fe7969325586e7abd057ae561111bb73d8ea021126e6342878c316570957a32->leave($__internal_8fe7969325586e7abd057ae561111bb73d8ea021126e6342878c316570957a32_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9934d653d12782ca94b48d0af94335f4251a7fbc781a15647acc16e4cbc766cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9934d653d12782ca94b48d0af94335f4251a7fbc781a15647acc16e4cbc766cb->enter($__internal_9934d653d12782ca94b48d0af94335f4251a7fbc781a15647acc16e4cbc766cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_01b4eb92d81eef89857ce1f1d43feae306ffa8b7e63ef0c7f82ad980cd61cc0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b4eb92d81eef89857ce1f1d43feae306ffa8b7e63ef0c7f82ad980cd61cc0a->enter($__internal_01b4eb92d81eef89857ce1f1d43feae306ffa8b7e63ef0c7f82ad980cd61cc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_01b4eb92d81eef89857ce1f1d43feae306ffa8b7e63ef0c7f82ad980cd61cc0a->leave($__internal_01b4eb92d81eef89857ce1f1d43feae306ffa8b7e63ef0c7f82ad980cd61cc0a_prof);

        
        $__internal_9934d653d12782ca94b48d0af94335f4251a7fbc781a15647acc16e4cbc766cb->leave($__internal_9934d653d12782ca94b48d0af94335f4251a7fbc781a15647acc16e4cbc766cb_prof);

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
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
