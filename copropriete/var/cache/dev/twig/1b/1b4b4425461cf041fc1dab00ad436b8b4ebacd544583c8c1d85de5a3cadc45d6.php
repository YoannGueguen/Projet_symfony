<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_56afc24bcdbcd7b8504157bb29f7a16d5fc4835086b5aa8840fcff3c4896519e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_aceff6508a010a092dd7fc3e100c6a6d630abc184b5df10cb4aa54b193664c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aceff6508a010a092dd7fc3e100c6a6d630abc184b5df10cb4aa54b193664c57->enter($__internal_aceff6508a010a092dd7fc3e100c6a6d630abc184b5df10cb4aa54b193664c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6078dd7e9b7ab6120931871e2b804bf2f73a1f444c43e0fff4b6cb66a8b9a9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6078dd7e9b7ab6120931871e2b804bf2f73a1f444c43e0fff4b6cb66a8b9a9f2->enter($__internal_6078dd7e9b7ab6120931871e2b804bf2f73a1f444c43e0fff4b6cb66a8b9a9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aceff6508a010a092dd7fc3e100c6a6d630abc184b5df10cb4aa54b193664c57->leave($__internal_aceff6508a010a092dd7fc3e100c6a6d630abc184b5df10cb4aa54b193664c57_prof);

        
        $__internal_6078dd7e9b7ab6120931871e2b804bf2f73a1f444c43e0fff4b6cb66a8b9a9f2->leave($__internal_6078dd7e9b7ab6120931871e2b804bf2f73a1f444c43e0fff4b6cb66a8b9a9f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a46e99f81505384c1397f56e0668302997549e692e57542f66a286affb118a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46e99f81505384c1397f56e0668302997549e692e57542f66a286affb118a2b->enter($__internal_a46e99f81505384c1397f56e0668302997549e692e57542f66a286affb118a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_927f518a3b86feceb164fce693c0cd69a86ddfe492c0c43c1c1fda4e44955b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927f518a3b86feceb164fce693c0cd69a86ddfe492c0c43c1c1fda4e44955b80->enter($__internal_927f518a3b86feceb164fce693c0cd69a86ddfe492c0c43c1c1fda4e44955b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_927f518a3b86feceb164fce693c0cd69a86ddfe492c0c43c1c1fda4e44955b80->leave($__internal_927f518a3b86feceb164fce693c0cd69a86ddfe492c0c43c1c1fda4e44955b80_prof);

        
        $__internal_a46e99f81505384c1397f56e0668302997549e692e57542f66a286affb118a2b->leave($__internal_a46e99f81505384c1397f56e0668302997549e692e57542f66a286affb118a2b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d4b98b546566771567fdce0c1907289c959c65cc9fb5a7696607ecd4f5d4b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4b98b546566771567fdce0c1907289c959c65cc9fb5a7696607ecd4f5d4b8d->enter($__internal_3d4b98b546566771567fdce0c1907289c959c65cc9fb5a7696607ecd4f5d4b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_346089b7347a49469fafde08ef09a4eb7354184bf125825fb7988c4b7a36f514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346089b7347a49469fafde08ef09a4eb7354184bf125825fb7988c4b7a36f514->enter($__internal_346089b7347a49469fafde08ef09a4eb7354184bf125825fb7988c4b7a36f514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_346089b7347a49469fafde08ef09a4eb7354184bf125825fb7988c4b7a36f514->leave($__internal_346089b7347a49469fafde08ef09a4eb7354184bf125825fb7988c4b7a36f514_prof);

        
        $__internal_3d4b98b546566771567fdce0c1907289c959c65cc9fb5a7696607ecd4f5d4b8d->leave($__internal_3d4b98b546566771567fdce0c1907289c959c65cc9fb5a7696607ecd4f5d4b8d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_686bb755717ea8e4e5c148d56bf80cf5e2cab4cef9013c168b7f7209cd6d0bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686bb755717ea8e4e5c148d56bf80cf5e2cab4cef9013c168b7f7209cd6d0bf7->enter($__internal_686bb755717ea8e4e5c148d56bf80cf5e2cab4cef9013c168b7f7209cd6d0bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_06796d71a982137dbe05ed8e457b25a8629bc238b331f2292131d5579e54b4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06796d71a982137dbe05ed8e457b25a8629bc238b331f2292131d5579e54b4c0->enter($__internal_06796d71a982137dbe05ed8e457b25a8629bc238b331f2292131d5579e54b4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_06796d71a982137dbe05ed8e457b25a8629bc238b331f2292131d5579e54b4c0->leave($__internal_06796d71a982137dbe05ed8e457b25a8629bc238b331f2292131d5579e54b4c0_prof);

        
        $__internal_686bb755717ea8e4e5c148d56bf80cf5e2cab4cef9013c168b7f7209cd6d0bf7->leave($__internal_686bb755717ea8e4e5c148d56bf80cf5e2cab4cef9013c168b7f7209cd6d0bf7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
