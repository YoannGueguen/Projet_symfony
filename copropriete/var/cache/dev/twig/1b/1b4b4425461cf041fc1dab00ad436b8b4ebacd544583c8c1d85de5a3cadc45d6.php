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
        $__internal_61e8c4beaccac43168e7fa67776ff20f77ca295514521664039223a850d2a8ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e8c4beaccac43168e7fa67776ff20f77ca295514521664039223a850d2a8ea->enter($__internal_61e8c4beaccac43168e7fa67776ff20f77ca295514521664039223a850d2a8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3344ab6cfae942111b146a90d208cd0ec3b7600d0532b9cf3b98ea83fa53ebf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3344ab6cfae942111b146a90d208cd0ec3b7600d0532b9cf3b98ea83fa53ebf5->enter($__internal_3344ab6cfae942111b146a90d208cd0ec3b7600d0532b9cf3b98ea83fa53ebf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61e8c4beaccac43168e7fa67776ff20f77ca295514521664039223a850d2a8ea->leave($__internal_61e8c4beaccac43168e7fa67776ff20f77ca295514521664039223a850d2a8ea_prof);

        
        $__internal_3344ab6cfae942111b146a90d208cd0ec3b7600d0532b9cf3b98ea83fa53ebf5->leave($__internal_3344ab6cfae942111b146a90d208cd0ec3b7600d0532b9cf3b98ea83fa53ebf5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e94cae344dbd4d5d553dd5c65dcf43a345f67dfb073916c3c4a1ddafb34b5a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e94cae344dbd4d5d553dd5c65dcf43a345f67dfb073916c3c4a1ddafb34b5a26->enter($__internal_e94cae344dbd4d5d553dd5c65dcf43a345f67dfb073916c3c4a1ddafb34b5a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b0832924a445321d6cfb8959f33526510e9c6982ac5eed2938d458bbfae387b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0832924a445321d6cfb8959f33526510e9c6982ac5eed2938d458bbfae387b0->enter($__internal_b0832924a445321d6cfb8959f33526510e9c6982ac5eed2938d458bbfae387b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b0832924a445321d6cfb8959f33526510e9c6982ac5eed2938d458bbfae387b0->leave($__internal_b0832924a445321d6cfb8959f33526510e9c6982ac5eed2938d458bbfae387b0_prof);

        
        $__internal_e94cae344dbd4d5d553dd5c65dcf43a345f67dfb073916c3c4a1ddafb34b5a26->leave($__internal_e94cae344dbd4d5d553dd5c65dcf43a345f67dfb073916c3c4a1ddafb34b5a26_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6a4ed5c34f83620161179da5dbc8bb5902c3f69326a0f809ecdf9d6750b94764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4ed5c34f83620161179da5dbc8bb5902c3f69326a0f809ecdf9d6750b94764->enter($__internal_6a4ed5c34f83620161179da5dbc8bb5902c3f69326a0f809ecdf9d6750b94764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_77fe105e198f3a579fd23b49d1fcc960af5652fd6b0a0a509dc9632118012aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fe105e198f3a579fd23b49d1fcc960af5652fd6b0a0a509dc9632118012aee->enter($__internal_77fe105e198f3a579fd23b49d1fcc960af5652fd6b0a0a509dc9632118012aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_77fe105e198f3a579fd23b49d1fcc960af5652fd6b0a0a509dc9632118012aee->leave($__internal_77fe105e198f3a579fd23b49d1fcc960af5652fd6b0a0a509dc9632118012aee_prof);

        
        $__internal_6a4ed5c34f83620161179da5dbc8bb5902c3f69326a0f809ecdf9d6750b94764->leave($__internal_6a4ed5c34f83620161179da5dbc8bb5902c3f69326a0f809ecdf9d6750b94764_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aebb064731e6847f5132e96c719343a4151d9cb24bc36c29ddabd1db9ea8f979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aebb064731e6847f5132e96c719343a4151d9cb24bc36c29ddabd1db9ea8f979->enter($__internal_aebb064731e6847f5132e96c719343a4151d9cb24bc36c29ddabd1db9ea8f979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_73a4a07852a165e7990b36b3884445d0874faa2a0a760d4b2a43eadf511145dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a4a07852a165e7990b36b3884445d0874faa2a0a760d4b2a43eadf511145dc->enter($__internal_73a4a07852a165e7990b36b3884445d0874faa2a0a760d4b2a43eadf511145dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_73a4a07852a165e7990b36b3884445d0874faa2a0a760d4b2a43eadf511145dc->leave($__internal_73a4a07852a165e7990b36b3884445d0874faa2a0a760d4b2a43eadf511145dc_prof);

        
        $__internal_aebb064731e6847f5132e96c719343a4151d9cb24bc36c29ddabd1db9ea8f979->leave($__internal_aebb064731e6847f5132e96c719343a4151d9cb24bc36c29ddabd1db9ea8f979_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Projet_symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
