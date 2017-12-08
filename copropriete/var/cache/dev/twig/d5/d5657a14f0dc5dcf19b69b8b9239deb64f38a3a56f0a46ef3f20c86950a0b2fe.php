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
        $__internal_afc203daabf51a460a546c6489894be11be10238f3f2301f120f3dbe51744845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc203daabf51a460a546c6489894be11be10238f3f2301f120f3dbe51744845->enter($__internal_afc203daabf51a460a546c6489894be11be10238f3f2301f120f3dbe51744845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_5dc7ca3b8b0f1009d2fb201df22608e4b3a602a33a03ba96b8bae0efec182e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc7ca3b8b0f1009d2fb201df22608e4b3a602a33a03ba96b8bae0efec182e58->enter($__internal_5dc7ca3b8b0f1009d2fb201df22608e4b3a602a33a03ba96b8bae0efec182e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afc203daabf51a460a546c6489894be11be10238f3f2301f120f3dbe51744845->leave($__internal_afc203daabf51a460a546c6489894be11be10238f3f2301f120f3dbe51744845_prof);

        
        $__internal_5dc7ca3b8b0f1009d2fb201df22608e4b3a602a33a03ba96b8bae0efec182e58->leave($__internal_5dc7ca3b8b0f1009d2fb201df22608e4b3a602a33a03ba96b8bae0efec182e58_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cad0792bbf168c1a2e84af00dd7598822f147563aa7be86e5b42836b716f169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cad0792bbf168c1a2e84af00dd7598822f147563aa7be86e5b42836b716f169->enter($__internal_2cad0792bbf168c1a2e84af00dd7598822f147563aa7be86e5b42836b716f169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd492e6de627185169394908fa34c2762c8669ad44e15b3df9c8096736678672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd492e6de627185169394908fa34c2762c8669ad44e15b3df9c8096736678672->enter($__internal_bd492e6de627185169394908fa34c2762c8669ad44e15b3df9c8096736678672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <h2 style=\"text-align:center\">projet en cours</h2>
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
        
        $__internal_bd492e6de627185169394908fa34c2762c8669ad44e15b3df9c8096736678672->leave($__internal_bd492e6de627185169394908fa34c2762c8669ad44e15b3df9c8096736678672_prof);

        
        $__internal_2cad0792bbf168c1a2e84af00dd7598822f147563aa7be86e5b42836b716f169->leave($__internal_2cad0792bbf168c1a2e84af00dd7598822f147563aa7be86e5b42836b716f169_prof);

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
            <h2 style=\"text-align:center\">projet en cours</h2>
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
