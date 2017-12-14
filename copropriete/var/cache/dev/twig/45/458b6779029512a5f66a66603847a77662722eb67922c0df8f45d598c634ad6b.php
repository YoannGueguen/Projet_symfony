<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_10d1c0efd6486d0632a17132315f811474f872944086521cd54e435429bc8270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf47fa0bb74682012eda7f3b9f6d8e1a6bd910125833a9cbc0a6d558c9c85e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf47fa0bb74682012eda7f3b9f6d8e1a6bd910125833a9cbc0a6d558c9c85e91->enter($__internal_bf47fa0bb74682012eda7f3b9f6d8e1a6bd910125833a9cbc0a6d558c9c85e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_dfd5ba3c1f3edf0e5b27879fdc3e88a01863c851d344e25745d7294f094b4753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd5ba3c1f3edf0e5b27879fdc3e88a01863c851d344e25745d7294f094b4753->enter($__internal_dfd5ba3c1f3edf0e5b27879fdc3e88a01863c851d344e25745d7294f094b4753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf47fa0bb74682012eda7f3b9f6d8e1a6bd910125833a9cbc0a6d558c9c85e91->leave($__internal_bf47fa0bb74682012eda7f3b9f6d8e1a6bd910125833a9cbc0a6d558c9c85e91_prof);

        
        $__internal_dfd5ba3c1f3edf0e5b27879fdc3e88a01863c851d344e25745d7294f094b4753->leave($__internal_dfd5ba3c1f3edf0e5b27879fdc3e88a01863c851d344e25745d7294f094b4753_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_54af36359715798d583a7511553d0ad9cbbe054667badb7ae4cbbd87300ce11f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54af36359715798d583a7511553d0ad9cbbe054667badb7ae4cbbd87300ce11f->enter($__internal_54af36359715798d583a7511553d0ad9cbbe054667badb7ae4cbbd87300ce11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_edee818c724bb3324b6f35b575316f107339f51fdc96e5b3160b84e26cd7f90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edee818c724bb3324b6f35b575316f107339f51fdc96e5b3160b84e26cd7f90c->enter($__internal_edee818c724bb3324b6f35b575316f107339f51fdc96e5b3160b84e26cd7f90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_edee818c724bb3324b6f35b575316f107339f51fdc96e5b3160b84e26cd7f90c->leave($__internal_edee818c724bb3324b6f35b575316f107339f51fdc96e5b3160b84e26cd7f90c_prof);

        
        $__internal_54af36359715798d583a7511553d0ad9cbbe054667badb7ae4cbbd87300ce11f->leave($__internal_54af36359715798d583a7511553d0ad9cbbe054667badb7ae4cbbd87300ce11f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\Projet_symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
