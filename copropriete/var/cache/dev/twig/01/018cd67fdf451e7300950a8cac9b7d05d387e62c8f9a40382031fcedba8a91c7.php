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
        $__internal_9f351387b1d2c3d46f713bb54122a8d8424175602d3e89e8a737eb7a827e2310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f351387b1d2c3d46f713bb54122a8d8424175602d3e89e8a737eb7a827e2310->enter($__internal_9f351387b1d2c3d46f713bb54122a8d8424175602d3e89e8a737eb7a827e2310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_25c2238b6e5c260e3d74c54170fb66a41dc8b8459e4527b39df7a9eeb4b6c42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c2238b6e5c260e3d74c54170fb66a41dc8b8459e4527b39df7a9eeb4b6c42d->enter($__internal_25c2238b6e5c260e3d74c54170fb66a41dc8b8459e4527b39df7a9eeb4b6c42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9f351387b1d2c3d46f713bb54122a8d8424175602d3e89e8a737eb7a827e2310->leave($__internal_9f351387b1d2c3d46f713bb54122a8d8424175602d3e89e8a737eb7a827e2310_prof);

        
        $__internal_25c2238b6e5c260e3d74c54170fb66a41dc8b8459e4527b39df7a9eeb4b6c42d->leave($__internal_25c2238b6e5c260e3d74c54170fb66a41dc8b8459e4527b39df7a9eeb4b6c42d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c6fe60b04b282a5dc0b58a2a45d29c06967c3af06d55c27af3e6ab18d890285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6fe60b04b282a5dc0b58a2a45d29c06967c3af06d55c27af3e6ab18d890285->enter($__internal_2c6fe60b04b282a5dc0b58a2a45d29c06967c3af06d55c27af3e6ab18d890285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba7372e306aecd6636bd5ebb6866b20f6559a27cbde3cc2c09a229cc7fc316de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7372e306aecd6636bd5ebb6866b20f6559a27cbde3cc2c09a229cc7fc316de->enter($__internal_ba7372e306aecd6636bd5ebb6866b20f6559a27cbde3cc2c09a229cc7fc316de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "clorporate";
        
        $__internal_ba7372e306aecd6636bd5ebb6866b20f6559a27cbde3cc2c09a229cc7fc316de->leave($__internal_ba7372e306aecd6636bd5ebb6866b20f6559a27cbde3cc2c09a229cc7fc316de_prof);

        
        $__internal_2c6fe60b04b282a5dc0b58a2a45d29c06967c3af06d55c27af3e6ab18d890285->leave($__internal_2c6fe60b04b282a5dc0b58a2a45d29c06967c3af06d55c27af3e6ab18d890285_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f58be397787be6c03ce6bf49b7073c2e75a9591cadaa33c1aa0f1e98708aaba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f58be397787be6c03ce6bf49b7073c2e75a9591cadaa33c1aa0f1e98708aaba->enter($__internal_1f58be397787be6c03ce6bf49b7073c2e75a9591cadaa33c1aa0f1e98708aaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4117497eb8dc16cac00485f5fb816b22d4ffdd2c47a0761e06b885b743f6d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4117497eb8dc16cac00485f5fb816b22d4ffdd2c47a0761e06b885b743f6d2c->enter($__internal_a4117497eb8dc16cac00485f5fb816b22d4ffdd2c47a0761e06b885b743f6d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a4117497eb8dc16cac00485f5fb816b22d4ffdd2c47a0761e06b885b743f6d2c->leave($__internal_a4117497eb8dc16cac00485f5fb816b22d4ffdd2c47a0761e06b885b743f6d2c_prof);

        
        $__internal_1f58be397787be6c03ce6bf49b7073c2e75a9591cadaa33c1aa0f1e98708aaba->leave($__internal_1f58be397787be6c03ce6bf49b7073c2e75a9591cadaa33c1aa0f1e98708aaba_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2e89575367958b738d0e75e49592f439642f369965174da1ba81e40dacb80c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e89575367958b738d0e75e49592f439642f369965174da1ba81e40dacb80c4->enter($__internal_e2e89575367958b738d0e75e49592f439642f369965174da1ba81e40dacb80c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_83c5166f79fef5f90da7d5fc659beb7a9f2fa6fe4601231b55b80817bef5228f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c5166f79fef5f90da7d5fc659beb7a9f2fa6fe4601231b55b80817bef5228f->enter($__internal_83c5166f79fef5f90da7d5fc659beb7a9f2fa6fe4601231b55b80817bef5228f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_83c5166f79fef5f90da7d5fc659beb7a9f2fa6fe4601231b55b80817bef5228f->leave($__internal_83c5166f79fef5f90da7d5fc659beb7a9f2fa6fe4601231b55b80817bef5228f_prof);

        
        $__internal_e2e89575367958b738d0e75e49592f439642f369965174da1ba81e40dacb80c4->leave($__internal_e2e89575367958b738d0e75e49592f439642f369965174da1ba81e40dacb80c4_prof);

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
", "base.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\app\\Resources\\views\\base.html.twig");
    }
}
