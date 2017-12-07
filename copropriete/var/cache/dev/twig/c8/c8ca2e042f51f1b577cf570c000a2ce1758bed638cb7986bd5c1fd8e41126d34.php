<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_923012ffa921db6e3fb1526e669d46b3aa8908088616cac4f1971ab15320036d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_27c320f46b8ff885e0cab85e932a240736387bf9799d9601d02fb38b3bc26a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c320f46b8ff885e0cab85e932a240736387bf9799d9601d02fb38b3bc26a66->enter($__internal_27c320f46b8ff885e0cab85e932a240736387bf9799d9601d02fb38b3bc26a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_7c40db8a38a6ab30260bc03a35bec9a2bf6e578b5d306cadf463ea2b85a7a688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c40db8a38a6ab30260bc03a35bec9a2bf6e578b5d306cadf463ea2b85a7a688->enter($__internal_7c40db8a38a6ab30260bc03a35bec9a2bf6e578b5d306cadf463ea2b85a7a688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27c320f46b8ff885e0cab85e932a240736387bf9799d9601d02fb38b3bc26a66->leave($__internal_27c320f46b8ff885e0cab85e932a240736387bf9799d9601d02fb38b3bc26a66_prof);

        
        $__internal_7c40db8a38a6ab30260bc03a35bec9a2bf6e578b5d306cadf463ea2b85a7a688->leave($__internal_7c40db8a38a6ab30260bc03a35bec9a2bf6e578b5d306cadf463ea2b85a7a688_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_62c3cd7c276947cfbb8d373c171f7af35eaadde4f1b7396311e039757fa47246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c3cd7c276947cfbb8d373c171f7af35eaadde4f1b7396311e039757fa47246->enter($__internal_62c3cd7c276947cfbb8d373c171f7af35eaadde4f1b7396311e039757fa47246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e96947c0f76dfb83980e7abb29766f68f1e61f819258119b7c6c5fa6d0675411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96947c0f76dfb83980e7abb29766f68f1e61f819258119b7c6c5fa6d0675411->enter($__internal_e96947c0f76dfb83980e7abb29766f68f1e61f819258119b7c6c5fa6d0675411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e96947c0f76dfb83980e7abb29766f68f1e61f819258119b7c6c5fa6d0675411->leave($__internal_e96947c0f76dfb83980e7abb29766f68f1e61f819258119b7c6c5fa6d0675411_prof);

        
        $__internal_62c3cd7c276947cfbb8d373c171f7af35eaadde4f1b7396311e039757fa47246->leave($__internal_62c3cd7c276947cfbb8d373c171f7af35eaadde4f1b7396311e039757fa47246_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_487e5e790720fd0b67e355bae2cff7f1ef9e90a7912c41a11bbe76706988189d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_487e5e790720fd0b67e355bae2cff7f1ef9e90a7912c41a11bbe76706988189d->enter($__internal_487e5e790720fd0b67e355bae2cff7f1ef9e90a7912c41a11bbe76706988189d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dee6e8da7b4bb9465ef8f81118e53e6efe83e2f0e049b262d122f946e72f4b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee6e8da7b4bb9465ef8f81118e53e6efe83e2f0e049b262d122f946e72f4b3d->enter($__internal_dee6e8da7b4bb9465ef8f81118e53e6efe83e2f0e049b262d122f946e72f4b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dee6e8da7b4bb9465ef8f81118e53e6efe83e2f0e049b262d122f946e72f4b3d->leave($__internal_dee6e8da7b4bb9465ef8f81118e53e6efe83e2f0e049b262d122f946e72f4b3d_prof);

        
        $__internal_487e5e790720fd0b67e355bae2cff7f1ef9e90a7912c41a11bbe76706988189d->leave($__internal_487e5e790720fd0b67e355bae2cff7f1ef9e90a7912c41a11bbe76706988189d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_97855fa8884d28caaedad61387719c1c6d8795b86c789ef0d9a4e1f532918da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97855fa8884d28caaedad61387719c1c6d8795b86c789ef0d9a4e1f532918da5->enter($__internal_97855fa8884d28caaedad61387719c1c6d8795b86c789ef0d9a4e1f532918da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2db97129e587e5fa3a392bd0ab96dd8b0d31731b192ad01420ebe7f22e8a7144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db97129e587e5fa3a392bd0ab96dd8b0d31731b192ad01420ebe7f22e8a7144->enter($__internal_2db97129e587e5fa3a392bd0ab96dd8b0d31731b192ad01420ebe7f22e8a7144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_2db97129e587e5fa3a392bd0ab96dd8b0d31731b192ad01420ebe7f22e8a7144->leave($__internal_2db97129e587e5fa3a392bd0ab96dd8b0d31731b192ad01420ebe7f22e8a7144_prof);

        
        $__internal_97855fa8884d28caaedad61387719c1c6d8795b86c789ef0d9a4e1f532918da5->leave($__internal_97855fa8884d28caaedad61387719c1c6d8795b86c789ef0d9a4e1f532918da5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
