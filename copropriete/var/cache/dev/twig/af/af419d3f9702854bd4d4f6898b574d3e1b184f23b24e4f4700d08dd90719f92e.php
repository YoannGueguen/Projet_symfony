<?php

/* user/new.html.twig */
class __TwigTemplate_314c4322a4399f6e17f5dfa624979904205afd710483497996dd678873b667dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_3eb5cfd137a0ecdb325537d8d8955d7fa5f919f895aa0183ae98388fae632bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb5cfd137a0ecdb325537d8d8955d7fa5f919f895aa0183ae98388fae632bed->enter($__internal_3eb5cfd137a0ecdb325537d8d8955d7fa5f919f895aa0183ae98388fae632bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_582245789c33ebbdcd45f3388d0d40a99e5da953f18ffaca3bb6182690781a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582245789c33ebbdcd45f3388d0d40a99e5da953f18ffaca3bb6182690781a40->enter($__internal_582245789c33ebbdcd45f3388d0d40a99e5da953f18ffaca3bb6182690781a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eb5cfd137a0ecdb325537d8d8955d7fa5f919f895aa0183ae98388fae632bed->leave($__internal_3eb5cfd137a0ecdb325537d8d8955d7fa5f919f895aa0183ae98388fae632bed_prof);

        
        $__internal_582245789c33ebbdcd45f3388d0d40a99e5da953f18ffaca3bb6182690781a40->leave($__internal_582245789c33ebbdcd45f3388d0d40a99e5da953f18ffaca3bb6182690781a40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3c6b28c2b9c10ebd94f41dc44dbe3ccc77d9e1a7e5002941fd153685ca45f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c6b28c2b9c10ebd94f41dc44dbe3ccc77d9e1a7e5002941fd153685ca45f12->enter($__internal_a3c6b28c2b9c10ebd94f41dc44dbe3ccc77d9e1a7e5002941fd153685ca45f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6a249688c63fe9d46345f94bac569163c98a0b1d68574e913af98309cec4b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a249688c63fe9d46345f94bac569163c98a0b1d68574e913af98309cec4b28->enter($__internal_c6a249688c63fe9d46345f94bac569163c98a0b1d68574e913af98309cec4b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c6a249688c63fe9d46345f94bac569163c98a0b1d68574e913af98309cec4b28->leave($__internal_c6a249688c63fe9d46345f94bac569163c98a0b1d68574e913af98309cec4b28_prof);

        
        $__internal_a3c6b28c2b9c10ebd94f41dc44dbe3ccc77d9e1a7e5002941fd153685ca45f12->leave($__internal_a3c6b28c2b9c10ebd94f41dc44dbe3ccc77d9e1a7e5002941fd153685ca45f12_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "user/new.html.twig", "C:\\xampp\\htdocs\\projet\\copropriete\\app\\Resources\\views\\user\\new.html.twig");
    }
}
