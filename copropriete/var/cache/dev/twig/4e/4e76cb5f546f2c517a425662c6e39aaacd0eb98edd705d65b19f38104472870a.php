<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_c9c5253302aa2b866a4b7a422998a154074434122fcfcaf151ebdfd43c613907 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_a877c0fc2144e33ea1f17bd8a488e0326a65c07a712059a51874553b6f4e8e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a877c0fc2144e33ea1f17bd8a488e0326a65c07a712059a51874553b6f4e8e30->enter($__internal_a877c0fc2144e33ea1f17bd8a488e0326a65c07a712059a51874553b6f4e8e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_4dcc9d0fd177eb0acbdb94658b0c81d47a67289a9f1c96c34a6e857973cb70e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dcc9d0fd177eb0acbdb94658b0c81d47a67289a9f1c96c34a6e857973cb70e2->enter($__internal_4dcc9d0fd177eb0acbdb94658b0c81d47a67289a9f1c96c34a6e857973cb70e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a877c0fc2144e33ea1f17bd8a488e0326a65c07a712059a51874553b6f4e8e30->leave($__internal_a877c0fc2144e33ea1f17bd8a488e0326a65c07a712059a51874553b6f4e8e30_prof);

        
        $__internal_4dcc9d0fd177eb0acbdb94658b0c81d47a67289a9f1c96c34a6e857973cb70e2->leave($__internal_4dcc9d0fd177eb0acbdb94658b0c81d47a67289a9f1c96c34a6e857973cb70e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32bf0dd85e89b8635df5fceccec860c5fe4beaed6fe7e1858a23ca62c99ea0f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32bf0dd85e89b8635df5fceccec860c5fe4beaed6fe7e1858a23ca62c99ea0f7->enter($__internal_32bf0dd85e89b8635df5fceccec860c5fe4beaed6fe7e1858a23ca62c99ea0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_13728493fe60b59e2b0984665dee226e47fdd8126b86e63ab593e637ae4870c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13728493fe60b59e2b0984665dee226e47fdd8126b86e63ab593e637ae4870c4->enter($__internal_13728493fe60b59e2b0984665dee226e47fdd8126b86e63ab593e637ae4870c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_13728493fe60b59e2b0984665dee226e47fdd8126b86e63ab593e637ae4870c4->leave($__internal_13728493fe60b59e2b0984665dee226e47fdd8126b86e63ab593e637ae4870c4_prof);

        
        $__internal_32bf0dd85e89b8635df5fceccec860c5fe4beaed6fe7e1858a23ca62c99ea0f7->leave($__internal_32bf0dd85e89b8635df5fceccec860c5fe4beaed6fe7e1858a23ca62c99ea0f7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
