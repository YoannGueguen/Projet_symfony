<?php

/* base.html.twig */
class __TwigTemplate_7a336d6f07f7cdfede1cac18bf5cf5d8437940e5d16e2ab7f7822c2f5d01c73d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65d92314dd69450a2a36937c38e71961ffd674306a6cea3cd0c6a259859a19a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d92314dd69450a2a36937c38e71961ffd674306a6cea3cd0c6a259859a19a4->enter($__internal_65d92314dd69450a2a36937c38e71961ffd674306a6cea3cd0c6a259859a19a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a48ed1a6e03c0bd7fa8aaf6a96ea161395c054b009a56864facdffd4e4976b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48ed1a6e03c0bd7fa8aaf6a96ea161395c054b009a56864facdffd4e4976b49->enter($__internal_a48ed1a6e03c0bd7fa8aaf6a96ea161395c054b009a56864facdffd4e4976b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "    <!DOCTYPE html>
    <html>
        <head>
            <meta charset=\"UTF-8\" />
            <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("contents/css/site.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("contents/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        </head>
        <body>
        ";
        // line 11
        $this->loadTemplate("default/nav/menu.html.twig", "base.html.twig", 11)->display($context);
        // line 12
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->loadTemplate("default/nav/footer.html.twig", "base.html.twig", 13)->display($context);
        // line 14
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "        </body>
    </html>
";
        
        $__internal_65d92314dd69450a2a36937c38e71961ffd674306a6cea3cd0c6a259859a19a4->leave($__internal_65d92314dd69450a2a36937c38e71961ffd674306a6cea3cd0c6a259859a19a4_prof);

        
        $__internal_a48ed1a6e03c0bd7fa8aaf6a96ea161395c054b009a56864facdffd4e4976b49->leave($__internal_a48ed1a6e03c0bd7fa8aaf6a96ea161395c054b009a56864facdffd4e4976b49_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f95e8eeb1b1f4ea986f23eaa0a1d1b739add1a31a346a058ea0933a43ddafe18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95e8eeb1b1f4ea986f23eaa0a1d1b739add1a31a346a058ea0933a43ddafe18->enter($__internal_f95e8eeb1b1f4ea986f23eaa0a1d1b739add1a31a346a058ea0933a43ddafe18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_01c052df83cc57b640985c7b4c701dab1b9193949bb3b4183ff653322bf1a72e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c052df83cc57b640985c7b4c701dab1b9193949bb3b4183ff653322bf1a72e->enter($__internal_01c052df83cc57b640985c7b4c701dab1b9193949bb3b4183ff653322bf1a72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "clorporate";
        
        $__internal_01c052df83cc57b640985c7b4c701dab1b9193949bb3b4183ff653322bf1a72e->leave($__internal_01c052df83cc57b640985c7b4c701dab1b9193949bb3b4183ff653322bf1a72e_prof);

        
        $__internal_f95e8eeb1b1f4ea986f23eaa0a1d1b739add1a31a346a058ea0933a43ddafe18->leave($__internal_f95e8eeb1b1f4ea986f23eaa0a1d1b739add1a31a346a058ea0933a43ddafe18_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3845baf31ecdf68408394888db2b84629aed76e5ebf84836019ddfbb874b3011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3845baf31ecdf68408394888db2b84629aed76e5ebf84836019ddfbb874b3011->enter($__internal_3845baf31ecdf68408394888db2b84629aed76e5ebf84836019ddfbb874b3011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be5b0be2b1957f365096085bbfe17493307accb779600ac3da94dc2f7de8f425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5b0be2b1957f365096085bbfe17493307accb779600ac3da94dc2f7de8f425->enter($__internal_be5b0be2b1957f365096085bbfe17493307accb779600ac3da94dc2f7de8f425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_be5b0be2b1957f365096085bbfe17493307accb779600ac3da94dc2f7de8f425->leave($__internal_be5b0be2b1957f365096085bbfe17493307accb779600ac3da94dc2f7de8f425_prof);

        
        $__internal_3845baf31ecdf68408394888db2b84629aed76e5ebf84836019ddfbb874b3011->leave($__internal_3845baf31ecdf68408394888db2b84629aed76e5ebf84836019ddfbb874b3011_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5f50f860043f474e95a83f2e31af09268a5edb43b1358af18337a923bc65469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f50f860043f474e95a83f2e31af09268a5edb43b1358af18337a923bc65469->enter($__internal_e5f50f860043f474e95a83f2e31af09268a5edb43b1358af18337a923bc65469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e61ab2d7ac2d926a7577c4f43c29f1237aefa15f9ebf222e7fab476c87becf3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61ab2d7ac2d926a7577c4f43c29f1237aefa15f9ebf222e7fab476c87becf3c->enter($__internal_e61ab2d7ac2d926a7577c4f43c29f1237aefa15f9ebf222e7fab476c87becf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e61ab2d7ac2d926a7577c4f43c29f1237aefa15f9ebf222e7fab476c87becf3c->leave($__internal_e61ab2d7ac2d926a7577c4f43c29f1237aefa15f9ebf222e7fab476c87becf3c_prof);

        
        $__internal_e5f50f860043f474e95a83f2e31af09268a5edb43b1358af18337a923bc65469->leave($__internal_e5f50f860043f474e95a83f2e31af09268a5edb43b1358af18337a923bc65469_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 14,  93 => 12,  75 => 5,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  52 => 11,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <!DOCTYPE html>
    <html>
        <head>
            <meta charset=\"UTF-8\" />
            <title>{% block title %}clorporate{% endblock %}</title>
            <link href=\"{{ asset('contents/css/site.css') }}\" rel=\"stylesheet\">
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
            <link href=\"{{ asset('contents/css/bootstrap.css') }}\" rel=\"stylesheet\">
        </head>
        <body>
        {% include \"default/nav/menu.html.twig\" %}
            {% block body %}{% endblock %}
        {% include \"default/nav/footer.html.twig\" %}
            {% block javascripts %}{% endblock %}
        </body>
    </html>
", "base.html.twig", "C:\\xampp\\htdocs\\projet\\copropriete\\app\\Resources\\views\\base.html.twig");
    }
}
