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
        $__internal_205593120390bef1559fa524bd26f3cb8876fee7f42e7bb10dd4247ec1553076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205593120390bef1559fa524bd26f3cb8876fee7f42e7bb10dd4247ec1553076->enter($__internal_205593120390bef1559fa524bd26f3cb8876fee7f42e7bb10dd4247ec1553076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_028958a6576de85a7fbd117e9679877e8d14a415d8b0735bd6cff7ead9c96b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028958a6576de85a7fbd117e9679877e8d14a415d8b0735bd6cff7ead9c96b07->enter($__internal_028958a6576de85a7fbd117e9679877e8d14a415d8b0735bd6cff7ead9c96b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_205593120390bef1559fa524bd26f3cb8876fee7f42e7bb10dd4247ec1553076->leave($__internal_205593120390bef1559fa524bd26f3cb8876fee7f42e7bb10dd4247ec1553076_prof);

        
        $__internal_028958a6576de85a7fbd117e9679877e8d14a415d8b0735bd6cff7ead9c96b07->leave($__internal_028958a6576de85a7fbd117e9679877e8d14a415d8b0735bd6cff7ead9c96b07_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c183de52b1b384beaf14f2f93cbf387ba5a0adbf1d424c0ab7d4a447f5fd1328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c183de52b1b384beaf14f2f93cbf387ba5a0adbf1d424c0ab7d4a447f5fd1328->enter($__internal_c183de52b1b384beaf14f2f93cbf387ba5a0adbf1d424c0ab7d4a447f5fd1328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_23406e866b2b5d174b99df68e4c18e942d1cc3d3f5fc2b5d17cffc41e1ca72bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23406e866b2b5d174b99df68e4c18e942d1cc3d3f5fc2b5d17cffc41e1ca72bf->enter($__internal_23406e866b2b5d174b99df68e4c18e942d1cc3d3f5fc2b5d17cffc41e1ca72bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_23406e866b2b5d174b99df68e4c18e942d1cc3d3f5fc2b5d17cffc41e1ca72bf->leave($__internal_23406e866b2b5d174b99df68e4c18e942d1cc3d3f5fc2b5d17cffc41e1ca72bf_prof);

        
        $__internal_c183de52b1b384beaf14f2f93cbf387ba5a0adbf1d424c0ab7d4a447f5fd1328->leave($__internal_c183de52b1b384beaf14f2f93cbf387ba5a0adbf1d424c0ab7d4a447f5fd1328_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
