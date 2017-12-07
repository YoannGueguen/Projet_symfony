<?php

/* :default:index.html.twig */
class __TwigTemplate_9cb6cf1c58dfb8773b936b37df7d4469ddcbb8c70e955bd584b5d0706038d554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3eddc31301b6019c10a2368ad100b1d3fbee15b4a8186e314048bcb956310540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eddc31301b6019c10a2368ad100b1d3fbee15b4a8186e314048bcb956310540->enter($__internal_3eddc31301b6019c10a2368ad100b1d3fbee15b4a8186e314048bcb956310540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_785c5275adc055a9901fe77e067bdf20b032c9b4a393bf1bb00da2593e911a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785c5275adc055a9901fe77e067bdf20b032c9b4a393bf1bb00da2593e911a7c->enter($__internal_785c5275adc055a9901fe77e067bdf20b032c9b4a393bf1bb00da2593e911a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eddc31301b6019c10a2368ad100b1d3fbee15b4a8186e314048bcb956310540->leave($__internal_3eddc31301b6019c10a2368ad100b1d3fbee15b4a8186e314048bcb956310540_prof);

        
        $__internal_785c5275adc055a9901fe77e067bdf20b032c9b4a393bf1bb00da2593e911a7c->leave($__internal_785c5275adc055a9901fe77e067bdf20b032c9b4a393bf1bb00da2593e911a7c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_de221b3b9f5753508cf6ce7b12611ab719a7df4eb5d9f018e0641a9a7a9efdc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de221b3b9f5753508cf6ce7b12611ab719a7df4eb5d9f018e0641a9a7a9efdc7->enter($__internal_de221b3b9f5753508cf6ce7b12611ab719a7df4eb5d9f018e0641a9a7a9efdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a78bdef41827a3452424e33e7b5eb051619dea2cfaa9075e8cdb9c261276cd71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78bdef41827a3452424e33e7b5eb051619dea2cfaa9075e8cdb9c261276cd71->enter($__internal_a78bdef41827a3452424e33e7b5eb051619dea2cfaa9075e8cdb9c261276cd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"div_index_img\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("contents/img/copropriete.jpg"), "html", null, true);
        echo "\" height=\"500\" class=\"col-lg-12 col-md-12\"/>
    </div>
";
        
        $__internal_a78bdef41827a3452424e33e7b5eb051619dea2cfaa9075e8cdb9c261276cd71->leave($__internal_a78bdef41827a3452424e33e7b5eb051619dea2cfaa9075e8cdb9c261276cd71_prof);

        
        $__internal_de221b3b9f5753508cf6ce7b12611ab719a7df4eb5d9f018e0641a9a7a9efdc7->leave($__internal_de221b3b9f5753508cf6ce7b12611ab719a7df4eb5d9f018e0641a9a7a9efdc7_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"div_index_img\">
        <img src=\"{{ asset('contents/img/copropriete.jpg')}}\" height=\"500\" class=\"col-lg-12 col-md-12\"/>
    </div>
{% endblock %}", ":default:index.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\app/Resources\\views/default/index.html.twig");
    }
}
