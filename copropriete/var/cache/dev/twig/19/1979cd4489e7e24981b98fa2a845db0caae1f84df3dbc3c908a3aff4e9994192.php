<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_d43a273a1befc7065d8612882e2b29b81b56e586bf77a5adc2daff9d4e5cd05b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_e4a39be1e6bb85440d230a5cb7b2fd26f5bc6c08650fcbce825ce6a55dc51b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a39be1e6bb85440d230a5cb7b2fd26f5bc6c08650fcbce825ce6a55dc51b69->enter($__internal_e4a39be1e6bb85440d230a5cb7b2fd26f5bc6c08650fcbce825ce6a55dc51b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_8b849e9c0d55a70e31c66aef333b0552a799b745a9c391e3d4bb0a81552ef6e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b849e9c0d55a70e31c66aef333b0552a799b745a9c391e3d4bb0a81552ef6e3->enter($__internal_8b849e9c0d55a70e31c66aef333b0552a799b745a9c391e3d4bb0a81552ef6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4a39be1e6bb85440d230a5cb7b2fd26f5bc6c08650fcbce825ce6a55dc51b69->leave($__internal_e4a39be1e6bb85440d230a5cb7b2fd26f5bc6c08650fcbce825ce6a55dc51b69_prof);

        
        $__internal_8b849e9c0d55a70e31c66aef333b0552a799b745a9c391e3d4bb0a81552ef6e3->leave($__internal_8b849e9c0d55a70e31c66aef333b0552a799b745a9c391e3d4bb0a81552ef6e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_571126810e059d745eab7c3f887c90773ed44a110f215722a53f004ceeff281b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571126810e059d745eab7c3f887c90773ed44a110f215722a53f004ceeff281b->enter($__internal_571126810e059d745eab7c3f887c90773ed44a110f215722a53f004ceeff281b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fb600ece5ddfc2dd25dc69dd78cdf7000ef0ccce2ca127017ad4200872385cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb600ece5ddfc2dd25dc69dd78cdf7000ef0ccce2ca127017ad4200872385cf3->enter($__internal_fb600ece5ddfc2dd25dc69dd78cdf7000ef0ccce2ca127017ad4200872385cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_fb600ece5ddfc2dd25dc69dd78cdf7000ef0ccce2ca127017ad4200872385cf3->leave($__internal_fb600ece5ddfc2dd25dc69dd78cdf7000ef0ccce2ca127017ad4200872385cf3_prof);

        
        $__internal_571126810e059d745eab7c3f887c90773ed44a110f215722a53f004ceeff281b->leave($__internal_571126810e059d745eab7c3f887c90773ed44a110f215722a53f004ceeff281b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
