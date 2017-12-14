<?php

/* default/index.html.twig */
class __TwigTemplate_65d87c3f9022c20ccd1994a53497b1a778e94a59350b8e518f344f5da5e8c04c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adc7f7b343af697e395bbc868fd9ac9b9efff79c8b81091498401bcd32d48057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc7f7b343af697e395bbc868fd9ac9b9efff79c8b81091498401bcd32d48057->enter($__internal_adc7f7b343af697e395bbc868fd9ac9b9efff79c8b81091498401bcd32d48057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_882df89558de7f447753c9f0f324f544d8d943e27e9aab9c3878bfd5d669d9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882df89558de7f447753c9f0f324f544d8d943e27e9aab9c3878bfd5d669d9be->enter($__internal_882df89558de7f447753c9f0f324f544d8d943e27e9aab9c3878bfd5d669d9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adc7f7b343af697e395bbc868fd9ac9b9efff79c8b81091498401bcd32d48057->leave($__internal_adc7f7b343af697e395bbc868fd9ac9b9efff79c8b81091498401bcd32d48057_prof);

        
        $__internal_882df89558de7f447753c9f0f324f544d8d943e27e9aab9c3878bfd5d669d9be->leave($__internal_882df89558de7f447753c9f0f324f544d8d943e27e9aab9c3878bfd5d669d9be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a625872c6f3c1fa90804169797c2827b7eacb79fdd3d987c025e389fa0c303c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a625872c6f3c1fa90804169797c2827b7eacb79fdd3d987c025e389fa0c303c6->enter($__internal_a625872c6f3c1fa90804169797c2827b7eacb79fdd3d987c025e389fa0c303c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae44d1f933c136f14c9e13f00689a06b6a76b25c0b23e386ad2baa273c6d6f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae44d1f933c136f14c9e13f00689a06b6a76b25c0b23e386ad2baa273c6d6f8f->enter($__internal_ae44d1f933c136f14c9e13f00689a06b6a76b25c0b23e386ad2baa273c6d6f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"div_index_img\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("contents/img/copropriete.jpg"), "html", null, true);
        echo "\" height=\"500\" class=\"col-lg-12 col-md-12\"/>
    </div>
    <br/>
    <br/>
    <div class=\"row\">
        <div class=\"col-3\"></div>
        <div class=\"col-lg-6 col-md-6 block\" id=\"div_message\">
            <h2 style=\"text-align:center\">Fil de discussion en cours</h2>
        </div>
    </div>
        <br/>
        <br/>
    <div class=\"row\">
        <div class=\"col-3\"></div>
        <div class=\"col-lg-6 col-md-6 block\" id=\"div_projet\">
            <h2 style=\"text-align:center\">Projet en cours</h2>
        </div>
    </div>
        <br/>
        <br/>
    <div class=\"row\">
        <div class=\"col-3\"></div>
        <div class=\"col-lg-6 col-md-6 block\" id=\"div_charge\">
            <h2 style=\"text-align:center\">Charges restantes</h2>
        </div>
    </div>
    </div>
    <br/>
    <br/>
";
        
        $__internal_ae44d1f933c136f14c9e13f00689a06b6a76b25c0b23e386ad2baa273c6d6f8f->leave($__internal_ae44d1f933c136f14c9e13f00689a06b6a76b25c0b23e386ad2baa273c6d6f8f_prof);

        
        $__internal_a625872c6f3c1fa90804169797c2827b7eacb79fdd3d987c025e389fa0c303c6->leave($__internal_a625872c6f3c1fa90804169797c2827b7eacb79fdd3d987c025e389fa0c303c6_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"div_index_img\">
        <img src=\"{{ asset('contents/img/copropriete.jpg')}}\" height=\"500\" class=\"col-lg-12 col-md-12\"/>
    </div>
    <br/>
    <br/>
    <div class=\"row\">
        <div class=\"col-3\"></div>
        <div class=\"col-lg-6 col-md-6 block\" id=\"div_message\">
            <h2 style=\"text-align:center\">Fil de discussion en cours</h2>
        </div>
    </div>
        <br/>
        <br/>
    <div class=\"row\">
        <div class=\"col-3\"></div>
        <div class=\"col-lg-6 col-md-6 block\" id=\"div_projet\">
            <h2 style=\"text-align:center\">Projet en cours</h2>
        </div>
    </div>
        <br/>
        <br/>
    <div class=\"row\">
        <div class=\"col-3\"></div>
        <div class=\"col-lg-6 col-md-6 block\" id=\"div_charge\">
            <h2 style=\"text-align:center\">Charges restantes</h2>
        </div>
    </div>
    </div>
    <br/>
    <br/>
{% endblock %}", "default/index.html.twig", "C:\\xampp\\htdocs\\Projet_symfony\\copropriete\\app\\Resources\\views\\default\\index.html.twig");
    }
}
