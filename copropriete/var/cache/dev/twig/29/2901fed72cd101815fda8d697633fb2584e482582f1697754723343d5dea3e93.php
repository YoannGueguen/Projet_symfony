<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7493a6b978c39c0f545fc24394f63014f01661429df63121e6927bbfe17663a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8a1e09c6509cd42b455c0a9ac734d820eaecd1e33b6196808311c533d4641ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a1e09c6509cd42b455c0a9ac734d820eaecd1e33b6196808311c533d4641ef->enter($__internal_c8a1e09c6509cd42b455c0a9ac734d820eaecd1e33b6196808311c533d4641ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_b40a886407d2d14cbb90afcc3338ef086fdd41e98ba8b6139faf0b62ba2dd656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40a886407d2d14cbb90afcc3338ef086fdd41e98ba8b6139faf0b62ba2dd656->enter($__internal_b40a886407d2d14cbb90afcc3338ef086fdd41e98ba8b6139faf0b62ba2dd656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8a1e09c6509cd42b455c0a9ac734d820eaecd1e33b6196808311c533d4641ef->leave($__internal_c8a1e09c6509cd42b455c0a9ac734d820eaecd1e33b6196808311c533d4641ef_prof);

        
        $__internal_b40a886407d2d14cbb90afcc3338ef086fdd41e98ba8b6139faf0b62ba2dd656->leave($__internal_b40a886407d2d14cbb90afcc3338ef086fdd41e98ba8b6139faf0b62ba2dd656_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd28ee330f68920cf12f7d4a61860efb40e645a3701fd99cbae11e4e13794444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd28ee330f68920cf12f7d4a61860efb40e645a3701fd99cbae11e4e13794444->enter($__internal_bd28ee330f68920cf12f7d4a61860efb40e645a3701fd99cbae11e4e13794444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c59185740258e79bb39f174d279fcb3ab7b7c4c064b092c5f79fdbbdfa2051b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59185740258e79bb39f174d279fcb3ab7b7c4c064b092c5f79fdbbdfa2051b0->enter($__internal_c59185740258e79bb39f174d279fcb3ab7b7c4c064b092c5f79fdbbdfa2051b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c59185740258e79bb39f174d279fcb3ab7b7c4c064b092c5f79fdbbdfa2051b0->leave($__internal_c59185740258e79bb39f174d279fcb3ab7b7c4c064b092c5f79fdbbdfa2051b0_prof);

        
        $__internal_bd28ee330f68920cf12f7d4a61860efb40e645a3701fd99cbae11e4e13794444->leave($__internal_bd28ee330f68920cf12f7d4a61860efb40e645a3701fd99cbae11e4e13794444_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6aee549a33731302d3f0fd41b1436856481527ff59ff107ffd1fa4512587d0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aee549a33731302d3f0fd41b1436856481527ff59ff107ffd1fa4512587d0d7->enter($__internal_6aee549a33731302d3f0fd41b1436856481527ff59ff107ffd1fa4512587d0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d4e8cd9c35bb0c18d988ab8f5d3ee83f1fcac5330025ccdec49b54c5943455d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4e8cd9c35bb0c18d988ab8f5d3ee83f1fcac5330025ccdec49b54c5943455d->enter($__internal_8d4e8cd9c35bb0c18d988ab8f5d3ee83f1fcac5330025ccdec49b54c5943455d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8d4e8cd9c35bb0c18d988ab8f5d3ee83f1fcac5330025ccdec49b54c5943455d->leave($__internal_8d4e8cd9c35bb0c18d988ab8f5d3ee83f1fcac5330025ccdec49b54c5943455d_prof);

        
        $__internal_6aee549a33731302d3f0fd41b1436856481527ff59ff107ffd1fa4512587d0d7->leave($__internal_6aee549a33731302d3f0fd41b1436856481527ff59ff107ffd1fa4512587d0d7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
