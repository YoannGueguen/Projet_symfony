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
        $__internal_0ec2d5a51e4cacb98da399be6cfc04ea472019c46b35178882241fe6dc38afd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec2d5a51e4cacb98da399be6cfc04ea472019c46b35178882241fe6dc38afd5->enter($__internal_0ec2d5a51e4cacb98da399be6cfc04ea472019c46b35178882241fe6dc38afd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1059e3d37c5a7706385118af45ec493f88787f049a41f6573ec0257b7e181373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1059e3d37c5a7706385118af45ec493f88787f049a41f6573ec0257b7e181373->enter($__internal_1059e3d37c5a7706385118af45ec493f88787f049a41f6573ec0257b7e181373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ec2d5a51e4cacb98da399be6cfc04ea472019c46b35178882241fe6dc38afd5->leave($__internal_0ec2d5a51e4cacb98da399be6cfc04ea472019c46b35178882241fe6dc38afd5_prof);

        
        $__internal_1059e3d37c5a7706385118af45ec493f88787f049a41f6573ec0257b7e181373->leave($__internal_1059e3d37c5a7706385118af45ec493f88787f049a41f6573ec0257b7e181373_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a3405bd088153360600c7ac464c71e3c985a0309a403c5531f258853f8cfd14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a3405bd088153360600c7ac464c71e3c985a0309a403c5531f258853f8cfd14->enter($__internal_5a3405bd088153360600c7ac464c71e3c985a0309a403c5531f258853f8cfd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_94114a0875ab09645da84f2f365af146bfb40cc1fecdcb0cac7a385fb89ca9c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94114a0875ab09645da84f2f365af146bfb40cc1fecdcb0cac7a385fb89ca9c3->enter($__internal_94114a0875ab09645da84f2f365af146bfb40cc1fecdcb0cac7a385fb89ca9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_94114a0875ab09645da84f2f365af146bfb40cc1fecdcb0cac7a385fb89ca9c3->leave($__internal_94114a0875ab09645da84f2f365af146bfb40cc1fecdcb0cac7a385fb89ca9c3_prof);

        
        $__internal_5a3405bd088153360600c7ac464c71e3c985a0309a403c5531f258853f8cfd14->leave($__internal_5a3405bd088153360600c7ac464c71e3c985a0309a403c5531f258853f8cfd14_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0abf9fcd30f5a3c17e8d2bb015b3305cd71640b577205e45963c78779425526b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0abf9fcd30f5a3c17e8d2bb015b3305cd71640b577205e45963c78779425526b->enter($__internal_0abf9fcd30f5a3c17e8d2bb015b3305cd71640b577205e45963c78779425526b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_264445e19212b6529904f65d532c908c7e4ecbf1210c620fa988feb602683999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264445e19212b6529904f65d532c908c7e4ecbf1210c620fa988feb602683999->enter($__internal_264445e19212b6529904f65d532c908c7e4ecbf1210c620fa988feb602683999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_264445e19212b6529904f65d532c908c7e4ecbf1210c620fa988feb602683999->leave($__internal_264445e19212b6529904f65d532c908c7e4ecbf1210c620fa988feb602683999_prof);

        
        $__internal_0abf9fcd30f5a3c17e8d2bb015b3305cd71640b577205e45963c78779425526b->leave($__internal_0abf9fcd30f5a3c17e8d2bb015b3305cd71640b577205e45963c78779425526b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_159f81cc9a9661f346295f49ba237af0b390f27d151cf2eca494753b575787ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159f81cc9a9661f346295f49ba237af0b390f27d151cf2eca494753b575787ca->enter($__internal_159f81cc9a9661f346295f49ba237af0b390f27d151cf2eca494753b575787ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_269d1ff838ed120975cc9d2a06638826ea63e8fac52368a578473b7a3f124757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269d1ff838ed120975cc9d2a06638826ea63e8fac52368a578473b7a3f124757->enter($__internal_269d1ff838ed120975cc9d2a06638826ea63e8fac52368a578473b7a3f124757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_269d1ff838ed120975cc9d2a06638826ea63e8fac52368a578473b7a3f124757->leave($__internal_269d1ff838ed120975cc9d2a06638826ea63e8fac52368a578473b7a3f124757_prof);

        
        $__internal_159f81cc9a9661f346295f49ba237af0b390f27d151cf2eca494753b575787ca->leave($__internal_159f81cc9a9661f346295f49ba237af0b390f27d151cf2eca494753b575787ca_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
