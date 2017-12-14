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
        $__internal_5e31d0195404c29cd6d3418b507a705bbbf18f395ed144b28dca52c8d6be78b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e31d0195404c29cd6d3418b507a705bbbf18f395ed144b28dca52c8d6be78b5->enter($__internal_5e31d0195404c29cd6d3418b507a705bbbf18f395ed144b28dca52c8d6be78b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_11e8c9c1b63390df14ed3d2b08b42bf345430327662126b6e57ec856f6720616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e8c9c1b63390df14ed3d2b08b42bf345430327662126b6e57ec856f6720616->enter($__internal_11e8c9c1b63390df14ed3d2b08b42bf345430327662126b6e57ec856f6720616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5e31d0195404c29cd6d3418b507a705bbbf18f395ed144b28dca52c8d6be78b5->leave($__internal_5e31d0195404c29cd6d3418b507a705bbbf18f395ed144b28dca52c8d6be78b5_prof);

        
        $__internal_11e8c9c1b63390df14ed3d2b08b42bf345430327662126b6e57ec856f6720616->leave($__internal_11e8c9c1b63390df14ed3d2b08b42bf345430327662126b6e57ec856f6720616_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5fc7356c7536d1ee9d7d09fd911fe2bb702750576e35b7bfff94fe6dd25b53f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5fc7356c7536d1ee9d7d09fd911fe2bb702750576e35b7bfff94fe6dd25b53f->enter($__internal_d5fc7356c7536d1ee9d7d09fd911fe2bb702750576e35b7bfff94fe6dd25b53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1fd50f553eaecb1ba2a9e402b0f9465e69c61311272cea9b9fafbd804f502d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd50f553eaecb1ba2a9e402b0f9465e69c61311272cea9b9fafbd804f502d7e->enter($__internal_1fd50f553eaecb1ba2a9e402b0f9465e69c61311272cea9b9fafbd804f502d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "clorporate";
        
        $__internal_1fd50f553eaecb1ba2a9e402b0f9465e69c61311272cea9b9fafbd804f502d7e->leave($__internal_1fd50f553eaecb1ba2a9e402b0f9465e69c61311272cea9b9fafbd804f502d7e_prof);

        
        $__internal_d5fc7356c7536d1ee9d7d09fd911fe2bb702750576e35b7bfff94fe6dd25b53f->leave($__internal_d5fc7356c7536d1ee9d7d09fd911fe2bb702750576e35b7bfff94fe6dd25b53f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7205b03114aafc56955d604049d4be545d520acdacc0e4719cbbc5ea65a95b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7205b03114aafc56955d604049d4be545d520acdacc0e4719cbbc5ea65a95b0->enter($__internal_a7205b03114aafc56955d604049d4be545d520acdacc0e4719cbbc5ea65a95b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_171b2e3f7cab2d9bcd5bc1456b1fd108adeca882c1615f691be9a9047aa9cf07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171b2e3f7cab2d9bcd5bc1456b1fd108adeca882c1615f691be9a9047aa9cf07->enter($__internal_171b2e3f7cab2d9bcd5bc1456b1fd108adeca882c1615f691be9a9047aa9cf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_171b2e3f7cab2d9bcd5bc1456b1fd108adeca882c1615f691be9a9047aa9cf07->leave($__internal_171b2e3f7cab2d9bcd5bc1456b1fd108adeca882c1615f691be9a9047aa9cf07_prof);

        
        $__internal_a7205b03114aafc56955d604049d4be545d520acdacc0e4719cbbc5ea65a95b0->leave($__internal_a7205b03114aafc56955d604049d4be545d520acdacc0e4719cbbc5ea65a95b0_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_409bc4b2d002ee880b921852f1087a652455bb1d2db0b7e4a8abf7bf5a7180d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_409bc4b2d002ee880b921852f1087a652455bb1d2db0b7e4a8abf7bf5a7180d5->enter($__internal_409bc4b2d002ee880b921852f1087a652455bb1d2db0b7e4a8abf7bf5a7180d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fb61a558afd2d5a7729897712ed6ff1c69a0ed5ff7ab4a52bffb5730879ede93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb61a558afd2d5a7729897712ed6ff1c69a0ed5ff7ab4a52bffb5730879ede93->enter($__internal_fb61a558afd2d5a7729897712ed6ff1c69a0ed5ff7ab4a52bffb5730879ede93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fb61a558afd2d5a7729897712ed6ff1c69a0ed5ff7ab4a52bffb5730879ede93->leave($__internal_fb61a558afd2d5a7729897712ed6ff1c69a0ed5ff7ab4a52bffb5730879ede93_prof);

        
        $__internal_409bc4b2d002ee880b921852f1087a652455bb1d2db0b7e4a8abf7bf5a7180d5->leave($__internal_409bc4b2d002ee880b921852f1087a652455bb1d2db0b7e4a8abf7bf5a7180d5_prof);

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
", "base.html.twig", "C:\\xampp\\htdocs\\Projet_symfony\\copropriete\\app\\Resources\\views\\base.html.twig");
    }
}
