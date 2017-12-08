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
        $__internal_478fbe92be455ac3acf5194b099784cb3b096789bc0e7fd4edc834bb5e4123b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478fbe92be455ac3acf5194b099784cb3b096789bc0e7fd4edc834bb5e4123b3->enter($__internal_478fbe92be455ac3acf5194b099784cb3b096789bc0e7fd4edc834bb5e4123b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_bb70f2a9757f1e3459cb223912e7bdca00d61635ab10a9032011feef88cb410f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb70f2a9757f1e3459cb223912e7bdca00d61635ab10a9032011feef88cb410f->enter($__internal_bb70f2a9757f1e3459cb223912e7bdca00d61635ab10a9032011feef88cb410f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_478fbe92be455ac3acf5194b099784cb3b096789bc0e7fd4edc834bb5e4123b3->leave($__internal_478fbe92be455ac3acf5194b099784cb3b096789bc0e7fd4edc834bb5e4123b3_prof);

        
        $__internal_bb70f2a9757f1e3459cb223912e7bdca00d61635ab10a9032011feef88cb410f->leave($__internal_bb70f2a9757f1e3459cb223912e7bdca00d61635ab10a9032011feef88cb410f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac584abcb93669e9707814e38d7087fe19f59707e392b3da85ff095abdeb54aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac584abcb93669e9707814e38d7087fe19f59707e392b3da85ff095abdeb54aa->enter($__internal_ac584abcb93669e9707814e38d7087fe19f59707e392b3da85ff095abdeb54aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43244f8c7411c3d87ffa963d6a4a6dea3592ae4c3b2ab9d3eed51ad91556c91d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43244f8c7411c3d87ffa963d6a4a6dea3592ae4c3b2ab9d3eed51ad91556c91d->enter($__internal_43244f8c7411c3d87ffa963d6a4a6dea3592ae4c3b2ab9d3eed51ad91556c91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"div_index_img\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("contents/img/copropriete.jpg"), "html", null, true);
        echo "\" height=\"500\" class=\"col-lg-12 col-md-12\"/>
    </div>
    <br/>
    <br/>
    <div class=\"row\">
        <div class=\"col-3\"></div>
        <div class=\"col-lg-6 col-md-6 block\" id=\"div_message\">
            <h2 style=\"text-align:center\">Fil de discussion en cours</h2>
        </div>
    </div>
        <br/>
        <br/>
    <div class=\"row\">
        <div class=\"col-3\"></div>
        <div class=\"col-lg-6 col-md-6 block\" id=\"div_projet\">
            <h2 style=\"text-align:center\">Projet en cours</h2>
        </div>
    </div>
        <br/>
        <br/>
    <div class=\"row\">
        <div class=\"col-3\"></div>
        <div class=\"col-lg-6 col-md-6 block\" id=\"div_charge\">
            <h2 style=\"text-align:center\">Charges restantes</h2>
        </div>
    </div>
    </div>
    <br/>
    <br/>
";
        
        $__internal_43244f8c7411c3d87ffa963d6a4a6dea3592ae4c3b2ab9d3eed51ad91556c91d->leave($__internal_43244f8c7411c3d87ffa963d6a4a6dea3592ae4c3b2ab9d3eed51ad91556c91d_prof);

        
        $__internal_ac584abcb93669e9707814e38d7087fe19f59707e392b3da85ff095abdeb54aa->leave($__internal_ac584abcb93669e9707814e38d7087fe19f59707e392b3da85ff095abdeb54aa_prof);

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
    <br/>
    <br/>
    <div class=\"row\">
        <div class=\"col-3\"></div>
        <div class=\"col-lg-6 col-md-6 block\" id=\"div_message\">
            <h2 style=\"text-align:center\">Fil de discussion en cours</h2>
        </div>
    </div>
        <br/>
        <br/>
    <div class=\"row\">
        <div class=\"col-3\"></div>
        <div class=\"col-lg-6 col-md-6 block\" id=\"div_projet\">
            <h2 style=\"text-align:center\">Projet en cours</h2>
        </div>
    </div>
        <br/>
        <br/>
    <div class=\"row\">
        <div class=\"col-3\"></div>
        <div class=\"col-lg-6 col-md-6 block\" id=\"div_charge\">
            <h2 style=\"text-align:center\">Charges restantes</h2>
        </div>
    </div>
    </div>
    <br/>
    <br/>
{% endblock %}", "default/index.html.twig", "C:\\xampp\\htdocs\\projet\\copropriete\\app\\Resources\\views\\default\\index.html.twig");
    }
}
