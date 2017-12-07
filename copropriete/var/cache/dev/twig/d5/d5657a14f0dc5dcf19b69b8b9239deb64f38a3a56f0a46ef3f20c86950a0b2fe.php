<?php

/* default/index.html.twig */
class __TwigTemplate_65d87c3f9022c20ccd1994a53497b1a778e94a59350b8e518f344f5da5e8c04c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_69594f881bd0c9a0835a33535edf43b42f7d0d748406c1d36ea2082ce9178061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69594f881bd0c9a0835a33535edf43b42f7d0d748406c1d36ea2082ce9178061->enter($__internal_69594f881bd0c9a0835a33535edf43b42f7d0d748406c1d36ea2082ce9178061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_3c2a0477c0fe3ed4dee1bd4a24cf762356be09f7381fcd28f3d0303f6eca124d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2a0477c0fe3ed4dee1bd4a24cf762356be09f7381fcd28f3d0303f6eca124d->enter($__internal_3c2a0477c0fe3ed4dee1bd4a24cf762356be09f7381fcd28f3d0303f6eca124d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69594f881bd0c9a0835a33535edf43b42f7d0d748406c1d36ea2082ce9178061->leave($__internal_69594f881bd0c9a0835a33535edf43b42f7d0d748406c1d36ea2082ce9178061_prof);

        
        $__internal_3c2a0477c0fe3ed4dee1bd4a24cf762356be09f7381fcd28f3d0303f6eca124d->leave($__internal_3c2a0477c0fe3ed4dee1bd4a24cf762356be09f7381fcd28f3d0303f6eca124d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2edcb169225ddbc8f46fc40bc91c355b64cf043b965d965032b1ac079c13e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2edcb169225ddbc8f46fc40bc91c355b64cf043b965d965032b1ac079c13e0e->enter($__internal_f2edcb169225ddbc8f46fc40bc91c355b64cf043b965d965032b1ac079c13e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b80058250d0af7fa4b7fda780dc8f25227f5be846c6dc2467a501c01134654c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b80058250d0af7fa4b7fda780dc8f25227f5be846c6dc2467a501c01134654c->enter($__internal_0b80058250d0af7fa4b7fda780dc8f25227f5be846c6dc2467a501c01134654c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"div_index_img\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("contents/img/copropriete.jpg"), "html", null, true);
        echo "\" height=\"500\" class=\"col-lg-12 col-md-12\"/>
    </div>
";
        
        $__internal_0b80058250d0af7fa4b7fda780dc8f25227f5be846c6dc2467a501c01134654c->leave($__internal_0b80058250d0af7fa4b7fda780dc8f25227f5be846c6dc2467a501c01134654c_prof);

        
        $__internal_f2edcb169225ddbc8f46fc40bc91c355b64cf043b965d965032b1ac079c13e0e->leave($__internal_f2edcb169225ddbc8f46fc40bc91c355b64cf043b965d965032b1ac079c13e0e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
{% endblock %}", "default/index.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\app\\Resources\\views\\default\\index.html.twig");
    }
}
