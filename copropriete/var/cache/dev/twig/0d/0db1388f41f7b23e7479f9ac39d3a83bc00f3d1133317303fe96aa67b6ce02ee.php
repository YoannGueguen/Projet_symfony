<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4d30d6cfdeb9426039466a33c6a4d8fa265ee5379aac5dd08ce26690038b3d91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec6e17bfd8f0a0197911f4a00d67c01b1009926af00a6b8160b7342de889f643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6e17bfd8f0a0197911f4a00d67c01b1009926af00a6b8160b7342de889f643->enter($__internal_ec6e17bfd8f0a0197911f4a00d67c01b1009926af00a6b8160b7342de889f643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_0b54604c7bf9d4a37c4d2cdc84a21d21428be13cea1a09dd2682b4638de49077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b54604c7bf9d4a37c4d2cdc84a21d21428be13cea1a09dd2682b4638de49077->enter($__internal_0b54604c7bf9d4a37c4d2cdc84a21d21428be13cea1a09dd2682b4638de49077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ec6e17bfd8f0a0197911f4a00d67c01b1009926af00a6b8160b7342de889f643->leave($__internal_ec6e17bfd8f0a0197911f4a00d67c01b1009926af00a6b8160b7342de889f643_prof);

        
        $__internal_0b54604c7bf9d4a37c4d2cdc84a21d21428be13cea1a09dd2682b4638de49077->leave($__internal_0b54604c7bf9d4a37c4d2cdc84a21d21428be13cea1a09dd2682b4638de49077_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b2064831997eb08ef6815377332b34b1a8e0e0dd0549c47170e23983be2d7b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2064831997eb08ef6815377332b34b1a8e0e0dd0549c47170e23983be2d7b7a->enter($__internal_b2064831997eb08ef6815377332b34b1a8e0e0dd0549c47170e23983be2d7b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c8bb503ac0a769ea0f06763aa3aa26c5351377eb39b327974a59221918afd603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8bb503ac0a769ea0f06763aa3aa26c5351377eb39b327974a59221918afd603->enter($__internal_c8bb503ac0a769ea0f06763aa3aa26c5351377eb39b327974a59221918afd603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c8bb503ac0a769ea0f06763aa3aa26c5351377eb39b327974a59221918afd603->leave($__internal_c8bb503ac0a769ea0f06763aa3aa26c5351377eb39b327974a59221918afd603_prof);

        
        $__internal_b2064831997eb08ef6815377332b34b1a8e0e0dd0549c47170e23983be2d7b7a->leave($__internal_b2064831997eb08ef6815377332b34b1a8e0e0dd0549c47170e23983be2d7b7a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
