<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_93996dc2bf7f0f25fe725b7e9512fc81ca7146d72a11cd27841c62107eece58b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_d536bdbb6713623006f47dd1971fb2b997f077641cb1ccf35976ac4bc1aaf6a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d536bdbb6713623006f47dd1971fb2b997f077641cb1ccf35976ac4bc1aaf6a7->enter($__internal_d536bdbb6713623006f47dd1971fb2b997f077641cb1ccf35976ac4bc1aaf6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_90df89ae874c1bf30f89ed1c22e6ad52e491e9ad812f654e3bb40e62e9c229a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90df89ae874c1bf30f89ed1c22e6ad52e491e9ad812f654e3bb40e62e9c229a1->enter($__internal_90df89ae874c1bf30f89ed1c22e6ad52e491e9ad812f654e3bb40e62e9c229a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d536bdbb6713623006f47dd1971fb2b997f077641cb1ccf35976ac4bc1aaf6a7->leave($__internal_d536bdbb6713623006f47dd1971fb2b997f077641cb1ccf35976ac4bc1aaf6a7_prof);

        
        $__internal_90df89ae874c1bf30f89ed1c22e6ad52e491e9ad812f654e3bb40e62e9c229a1->leave($__internal_90df89ae874c1bf30f89ed1c22e6ad52e491e9ad812f654e3bb40e62e9c229a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f068fa6a890b99cf38f8a70644fe7f5b8aec61a5d822f96b567f79ddf4ad4f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f068fa6a890b99cf38f8a70644fe7f5b8aec61a5d822f96b567f79ddf4ad4f11->enter($__internal_f068fa6a890b99cf38f8a70644fe7f5b8aec61a5d822f96b567f79ddf4ad4f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_69b8e7918a8defe5c0f8bb92210d6c3b8c4bf1ca15a4059472231567f32c12d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b8e7918a8defe5c0f8bb92210d6c3b8c4bf1ca15a4059472231567f32c12d2->enter($__internal_69b8e7918a8defe5c0f8bb92210d6c3b8c4bf1ca15a4059472231567f32c12d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_69b8e7918a8defe5c0f8bb92210d6c3b8c4bf1ca15a4059472231567f32c12d2->leave($__internal_69b8e7918a8defe5c0f8bb92210d6c3b8c4bf1ca15a4059472231567f32c12d2_prof);

        
        $__internal_f068fa6a890b99cf38f8a70644fe7f5b8aec61a5d822f96b567f79ddf4ad4f11->leave($__internal_f068fa6a890b99cf38f8a70644fe7f5b8aec61a5d822f96b567f79ddf4ad4f11_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
