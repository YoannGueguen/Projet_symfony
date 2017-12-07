<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_ad51311dba7de01ff1016994907e9d67b54094208ecf30ba0dafd9967551801d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_3122e65fa9b075034c02ca54e8b38d3763c12c3406a73e928492d3c3c32ccebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3122e65fa9b075034c02ca54e8b38d3763c12c3406a73e928492d3c3c32ccebd->enter($__internal_3122e65fa9b075034c02ca54e8b38d3763c12c3406a73e928492d3c3c32ccebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_4ffb58b0a0fcc799a16a108e338183af309b94fea59db668cf7fa99d7b81ac42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ffb58b0a0fcc799a16a108e338183af309b94fea59db668cf7fa99d7b81ac42->enter($__internal_4ffb58b0a0fcc799a16a108e338183af309b94fea59db668cf7fa99d7b81ac42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3122e65fa9b075034c02ca54e8b38d3763c12c3406a73e928492d3c3c32ccebd->leave($__internal_3122e65fa9b075034c02ca54e8b38d3763c12c3406a73e928492d3c3c32ccebd_prof);

        
        $__internal_4ffb58b0a0fcc799a16a108e338183af309b94fea59db668cf7fa99d7b81ac42->leave($__internal_4ffb58b0a0fcc799a16a108e338183af309b94fea59db668cf7fa99d7b81ac42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd4dd2f762bef43ebc27c50cbf3d2c85b4823ed32dce61d3d9bcaabbfd5512b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4dd2f762bef43ebc27c50cbf3d2c85b4823ed32dce61d3d9bcaabbfd5512b3->enter($__internal_fd4dd2f762bef43ebc27c50cbf3d2c85b4823ed32dce61d3d9bcaabbfd5512b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d4d2af56c52486ec794a0134300c7b81f38a32824e3489d2a1f6297dba69ce92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d2af56c52486ec794a0134300c7b81f38a32824e3489d2a1f6297dba69ce92->enter($__internal_d4d2af56c52486ec794a0134300c7b81f38a32824e3489d2a1f6297dba69ce92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_d4d2af56c52486ec794a0134300c7b81f38a32824e3489d2a1f6297dba69ce92->leave($__internal_d4d2af56c52486ec794a0134300c7b81f38a32824e3489d2a1f6297dba69ce92_prof);

        
        $__internal_fd4dd2f762bef43ebc27c50cbf3d2c85b4823ed32dce61d3d9bcaabbfd5512b3->leave($__internal_fd4dd2f762bef43ebc27c50cbf3d2c85b4823ed32dce61d3d9bcaabbfd5512b3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
", "@FOSUser/Group/show.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
