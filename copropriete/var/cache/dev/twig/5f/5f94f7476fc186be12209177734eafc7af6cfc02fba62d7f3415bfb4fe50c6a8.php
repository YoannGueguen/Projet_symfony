<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_3c3f980554672e11da03518cfae9330598f803683e603d27fe2c5f5c021b6463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55836f6fcee21b6076be198a122ad13f2d068337cdaf4a523e2ba89a904b34d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55836f6fcee21b6076be198a122ad13f2d068337cdaf4a523e2ba89a904b34d4->enter($__internal_55836f6fcee21b6076be198a122ad13f2d068337cdaf4a523e2ba89a904b34d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_9e1f03dd967e6acacf5caf6d9f63d3332dfae4de332e5224beabe3a247a1dbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1f03dd967e6acacf5caf6d9f63d3332dfae4de332e5224beabe3a247a1dbf1->enter($__internal_9e1f03dd967e6acacf5caf6d9f63d3332dfae4de332e5224beabe3a247a1dbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55836f6fcee21b6076be198a122ad13f2d068337cdaf4a523e2ba89a904b34d4->leave($__internal_55836f6fcee21b6076be198a122ad13f2d068337cdaf4a523e2ba89a904b34d4_prof);

        
        $__internal_9e1f03dd967e6acacf5caf6d9f63d3332dfae4de332e5224beabe3a247a1dbf1->leave($__internal_9e1f03dd967e6acacf5caf6d9f63d3332dfae4de332e5224beabe3a247a1dbf1_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_23a50efe481e8e02a96b93c3dbf48106a74acc72236f801e64ce0952c3db747f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a50efe481e8e02a96b93c3dbf48106a74acc72236f801e64ce0952c3db747f->enter($__internal_23a50efe481e8e02a96b93c3dbf48106a74acc72236f801e64ce0952c3db747f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_896e4a85b9189c5c7b3d937f89c2b91ea6a609906c633b91fb8ab1d753deb6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896e4a85b9189c5c7b3d937f89c2b91ea6a609906c633b91fb8ab1d753deb6d5->enter($__internal_896e4a85b9189c5c7b3d937f89c2b91ea6a609906c633b91fb8ab1d753deb6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_896e4a85b9189c5c7b3d937f89c2b91ea6a609906c633b91fb8ab1d753deb6d5->leave($__internal_896e4a85b9189c5c7b3d937f89c2b91ea6a609906c633b91fb8ab1d753deb6d5_prof);

        
        $__internal_23a50efe481e8e02a96b93c3dbf48106a74acc72236f801e64ce0952c3db747f->leave($__internal_23a50efe481e8e02a96b93c3dbf48106a74acc72236f801e64ce0952c3db747f_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_244530040ff16e2bc87e22310c3bcdb1ec266fde94343fc5fc6f7ba70a8fd1a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_244530040ff16e2bc87e22310c3bcdb1ec266fde94343fc5fc6f7ba70a8fd1a5->enter($__internal_244530040ff16e2bc87e22310c3bcdb1ec266fde94343fc5fc6f7ba70a8fd1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_51560764fbb1deb61f473e2b533903ee021cf47000d3baf421ef780327de9312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51560764fbb1deb61f473e2b533903ee021cf47000d3baf421ef780327de9312->enter($__internal_51560764fbb1deb61f473e2b533903ee021cf47000d3baf421ef780327de9312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_51560764fbb1deb61f473e2b533903ee021cf47000d3baf421ef780327de9312->leave($__internal_51560764fbb1deb61f473e2b533903ee021cf47000d3baf421ef780327de9312_prof);

        
        $__internal_244530040ff16e2bc87e22310c3bcdb1ec266fde94343fc5fc6f7ba70a8fd1a5->leave($__internal_244530040ff16e2bc87e22310c3bcdb1ec266fde94343fc5fc6f7ba70a8fd1a5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
