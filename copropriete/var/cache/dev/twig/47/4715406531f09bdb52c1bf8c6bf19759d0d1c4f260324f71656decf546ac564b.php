<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_488680e8950bbeb31636ecb4d8154516253cbd90c8b3dce75c7c74053984ffa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_78ccfd3e4828e8ea92b0f30da48cdd1da96f901c29aaebc12a16a1f51e3dbd1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ccfd3e4828e8ea92b0f30da48cdd1da96f901c29aaebc12a16a1f51e3dbd1a->enter($__internal_78ccfd3e4828e8ea92b0f30da48cdd1da96f901c29aaebc12a16a1f51e3dbd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4d3d0fbecc5f175da7ba3395b304091a623c45e9bcf20547ebccf5db93bce831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3d0fbecc5f175da7ba3395b304091a623c45e9bcf20547ebccf5db93bce831->enter($__internal_4d3d0fbecc5f175da7ba3395b304091a623c45e9bcf20547ebccf5db93bce831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78ccfd3e4828e8ea92b0f30da48cdd1da96f901c29aaebc12a16a1f51e3dbd1a->leave($__internal_78ccfd3e4828e8ea92b0f30da48cdd1da96f901c29aaebc12a16a1f51e3dbd1a_prof);

        
        $__internal_4d3d0fbecc5f175da7ba3395b304091a623c45e9bcf20547ebccf5db93bce831->leave($__internal_4d3d0fbecc5f175da7ba3395b304091a623c45e9bcf20547ebccf5db93bce831_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa65f324973b894a907b038f40ca893a10938e793e2df85202c4ead098d5fc36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa65f324973b894a907b038f40ca893a10938e793e2df85202c4ead098d5fc36->enter($__internal_aa65f324973b894a907b038f40ca893a10938e793e2df85202c4ead098d5fc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c11e40ef6cf6e017f8d3c0391f0b1aeb067ef11c150e0d0376551ef1055cf658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11e40ef6cf6e017f8d3c0391f0b1aeb067ef11c150e0d0376551ef1055cf658->enter($__internal_c11e40ef6cf6e017f8d3c0391f0b1aeb067ef11c150e0d0376551ef1055cf658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c11e40ef6cf6e017f8d3c0391f0b1aeb067ef11c150e0d0376551ef1055cf658->leave($__internal_c11e40ef6cf6e017f8d3c0391f0b1aeb067ef11c150e0d0376551ef1055cf658_prof);

        
        $__internal_aa65f324973b894a907b038f40ca893a10938e793e2df85202c4ead098d5fc36->leave($__internal_aa65f324973b894a907b038f40ca893a10938e793e2df85202c4ead098d5fc36_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b79c89e1a79fb02415133b88e94e5c0fcd3e0b3090ab93f37d9700b2006c6f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79c89e1a79fb02415133b88e94e5c0fcd3e0b3090ab93f37d9700b2006c6f85->enter($__internal_b79c89e1a79fb02415133b88e94e5c0fcd3e0b3090ab93f37d9700b2006c6f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cf30469ff573cf355abb55f0e7dbdf685102094c63cd0b9ea1a38de1d950f825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf30469ff573cf355abb55f0e7dbdf685102094c63cd0b9ea1a38de1d950f825->enter($__internal_cf30469ff573cf355abb55f0e7dbdf685102094c63cd0b9ea1a38de1d950f825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cf30469ff573cf355abb55f0e7dbdf685102094c63cd0b9ea1a38de1d950f825->leave($__internal_cf30469ff573cf355abb55f0e7dbdf685102094c63cd0b9ea1a38de1d950f825_prof);

        
        $__internal_b79c89e1a79fb02415133b88e94e5c0fcd3e0b3090ab93f37d9700b2006c6f85->leave($__internal_b79c89e1a79fb02415133b88e94e5c0fcd3e0b3090ab93f37d9700b2006c6f85_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33fadf7188d2efaaf6ca7cd9b3b63a540c775c7ef7776ee714d7fc83e0d92ff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33fadf7188d2efaaf6ca7cd9b3b63a540c775c7ef7776ee714d7fc83e0d92ff5->enter($__internal_33fadf7188d2efaaf6ca7cd9b3b63a540c775c7ef7776ee714d7fc83e0d92ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_68c87a5b1ff45b32c18e04ea80f738aac91b49d1ee8730de02954c3816d7de9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c87a5b1ff45b32c18e04ea80f738aac91b49d1ee8730de02954c3816d7de9a->enter($__internal_68c87a5b1ff45b32c18e04ea80f738aac91b49d1ee8730de02954c3816d7de9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_68c87a5b1ff45b32c18e04ea80f738aac91b49d1ee8730de02954c3816d7de9a->leave($__internal_68c87a5b1ff45b32c18e04ea80f738aac91b49d1ee8730de02954c3816d7de9a_prof);

        
        $__internal_33fadf7188d2efaaf6ca7cd9b3b63a540c775c7ef7776ee714d7fc83e0d92ff5->leave($__internal_33fadf7188d2efaaf6ca7cd9b3b63a540c775c7ef7776ee714d7fc83e0d92ff5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
