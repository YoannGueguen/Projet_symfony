<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_75173cca7348b0f53398bf8df7ea4e011d98df74b62c11c890ac8d64bf5d5487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d0cdd7f3a5e65076f465100de47cb89831d05fca335759524e2c06597154bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d0cdd7f3a5e65076f465100de47cb89831d05fca335759524e2c06597154bc9->enter($__internal_5d0cdd7f3a5e65076f465100de47cb89831d05fca335759524e2c06597154bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_896dddb07c8b0f3ebbf429fb6765760e4caf424e35363dcb2dfffda039db0d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896dddb07c8b0f3ebbf429fb6765760e4caf424e35363dcb2dfffda039db0d66->enter($__internal_896dddb07c8b0f3ebbf429fb6765760e4caf424e35363dcb2dfffda039db0d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d0cdd7f3a5e65076f465100de47cb89831d05fca335759524e2c06597154bc9->leave($__internal_5d0cdd7f3a5e65076f465100de47cb89831d05fca335759524e2c06597154bc9_prof);

        
        $__internal_896dddb07c8b0f3ebbf429fb6765760e4caf424e35363dcb2dfffda039db0d66->leave($__internal_896dddb07c8b0f3ebbf429fb6765760e4caf424e35363dcb2dfffda039db0d66_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_97ab27baac26566391e524b6990084e8ccbaafdb1e198934f03693cc22df13da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ab27baac26566391e524b6990084e8ccbaafdb1e198934f03693cc22df13da->enter($__internal_97ab27baac26566391e524b6990084e8ccbaafdb1e198934f03693cc22df13da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_183765e3dc6e8df546fcb5b3cbc7f1ea5ce2d4c48beea7e95972811a4c2d3753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183765e3dc6e8df546fcb5b3cbc7f1ea5ce2d4c48beea7e95972811a4c2d3753->enter($__internal_183765e3dc6e8df546fcb5b3cbc7f1ea5ce2d4c48beea7e95972811a4c2d3753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_183765e3dc6e8df546fcb5b3cbc7f1ea5ce2d4c48beea7e95972811a4c2d3753->leave($__internal_183765e3dc6e8df546fcb5b3cbc7f1ea5ce2d4c48beea7e95972811a4c2d3753_prof);

        
        $__internal_97ab27baac26566391e524b6990084e8ccbaafdb1e198934f03693cc22df13da->leave($__internal_97ab27baac26566391e524b6990084e8ccbaafdb1e198934f03693cc22df13da_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d27a2b1cbea5518eb942b708b1544b2dd1cddace1ea057e1e0998b383da221e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d27a2b1cbea5518eb942b708b1544b2dd1cddace1ea057e1e0998b383da221e6->enter($__internal_d27a2b1cbea5518eb942b708b1544b2dd1cddace1ea057e1e0998b383da221e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4f92c3864026d2f3c2cc6e9e485bbef447aed91b5086e5fd79fc8c121c102e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f92c3864026d2f3c2cc6e9e485bbef447aed91b5086e5fd79fc8c121c102e7c->enter($__internal_4f92c3864026d2f3c2cc6e9e485bbef447aed91b5086e5fd79fc8c121c102e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4f92c3864026d2f3c2cc6e9e485bbef447aed91b5086e5fd79fc8c121c102e7c->leave($__internal_4f92c3864026d2f3c2cc6e9e485bbef447aed91b5086e5fd79fc8c121c102e7c_prof);

        
        $__internal_d27a2b1cbea5518eb942b708b1544b2dd1cddace1ea057e1e0998b383da221e6->leave($__internal_d27a2b1cbea5518eb942b708b1544b2dd1cddace1ea057e1e0998b383da221e6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce40077595ad58e8d2595f6d9440fb4394ba681a7c966c60a9efd789b2f002dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce40077595ad58e8d2595f6d9440fb4394ba681a7c966c60a9efd789b2f002dd->enter($__internal_ce40077595ad58e8d2595f6d9440fb4394ba681a7c966c60a9efd789b2f002dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c4a8a1578d9a05205fdbe4db8abd48b023c5823298d3e97d7cb03bb8ddf66532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a8a1578d9a05205fdbe4db8abd48b023c5823298d3e97d7cb03bb8ddf66532->enter($__internal_c4a8a1578d9a05205fdbe4db8abd48b023c5823298d3e97d7cb03bb8ddf66532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c4a8a1578d9a05205fdbe4db8abd48b023c5823298d3e97d7cb03bb8ddf66532->leave($__internal_c4a8a1578d9a05205fdbe4db8abd48b023c5823298d3e97d7cb03bb8ddf66532_prof);

        
        $__internal_ce40077595ad58e8d2595f6d9440fb4394ba681a7c966c60a9efd789b2f002dd->leave($__internal_ce40077595ad58e8d2595f6d9440fb4394ba681a7c966c60a9efd789b2f002dd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
