<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_ef420eafb472f15d22d1143acb02be4d4851122f94a3c3ab7524c8ae1b61465e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d01176379f0cf99e9300f8e078e528962283213984356cb0a709adf3e9a3f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d01176379f0cf99e9300f8e078e528962283213984356cb0a709adf3e9a3f3d->enter($__internal_3d01176379f0cf99e9300f8e078e528962283213984356cb0a709adf3e9a3f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_b7d30bdd2413c24a5855624c0d12589df99cb970fcd53e6a0f5ab83151b5ddba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d30bdd2413c24a5855624c0d12589df99cb970fcd53e6a0f5ab83151b5ddba->enter($__internal_b7d30bdd2413c24a5855624c0d12589df99cb970fcd53e6a0f5ab83151b5ddba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d01176379f0cf99e9300f8e078e528962283213984356cb0a709adf3e9a3f3d->leave($__internal_3d01176379f0cf99e9300f8e078e528962283213984356cb0a709adf3e9a3f3d_prof);

        
        $__internal_b7d30bdd2413c24a5855624c0d12589df99cb970fcd53e6a0f5ab83151b5ddba->leave($__internal_b7d30bdd2413c24a5855624c0d12589df99cb970fcd53e6a0f5ab83151b5ddba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e84c156e1a9b921bc9ef1228c58eb06e6a29586962cc77d9d701d662ea5daff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e84c156e1a9b921bc9ef1228c58eb06e6a29586962cc77d9d701d662ea5daff1->enter($__internal_e84c156e1a9b921bc9ef1228c58eb06e6a29586962cc77d9d701d662ea5daff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8dc515b02f23ff4e78764ad2e0e53558b1e1f6d953194e486211ebec203d0877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc515b02f23ff4e78764ad2e0e53558b1e1f6d953194e486211ebec203d0877->enter($__internal_8dc515b02f23ff4e78764ad2e0e53558b1e1f6d953194e486211ebec203d0877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_8dc515b02f23ff4e78764ad2e0e53558b1e1f6d953194e486211ebec203d0877->leave($__internal_8dc515b02f23ff4e78764ad2e0e53558b1e1f6d953194e486211ebec203d0877_prof);

        
        $__internal_e84c156e1a9b921bc9ef1228c58eb06e6a29586962cc77d9d701d662ea5daff1->leave($__internal_e84c156e1a9b921bc9ef1228c58eb06e6a29586962cc77d9d701d662ea5daff1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
