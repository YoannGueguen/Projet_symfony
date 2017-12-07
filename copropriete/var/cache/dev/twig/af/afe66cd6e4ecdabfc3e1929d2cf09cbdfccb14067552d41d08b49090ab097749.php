<?php

/* ::base.html.twig */
class __TwigTemplate_62a34b8c5e10f0b3b2f6cbc742bb3d39aefb614b3bbc5e8143329982fe7cdfb0 extends Twig_Template
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
        $__internal_989e7c7da3a7b37b5fb5f77170e993e3d8e1d29fca80bb583fdc68ab4e1a32f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989e7c7da3a7b37b5fb5f77170e993e3d8e1d29fca80bb583fdc68ab4e1a32f8->enter($__internal_989e7c7da3a7b37b5fb5f77170e993e3d8e1d29fca80bb583fdc68ab4e1a32f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d87c39ec56599dcdc7c3e31b33b267c75c0551ac0c937caa36ed682b8c2f9124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87c39ec56599dcdc7c3e31b33b267c75c0551ac0c937caa36ed682b8c2f9124->enter($__internal_d87c39ec56599dcdc7c3e31b33b267c75c0551ac0c937caa36ed682b8c2f9124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        $this->loadTemplate("default/nav/menu.html.twig", "::base.html.twig", 11)->display($context);
        // line 12
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->loadTemplate("default/nav/footer.html.twig", "::base.html.twig", 13)->display($context);
        // line 14
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "        </body>
    </html>
";
        
        $__internal_989e7c7da3a7b37b5fb5f77170e993e3d8e1d29fca80bb583fdc68ab4e1a32f8->leave($__internal_989e7c7da3a7b37b5fb5f77170e993e3d8e1d29fca80bb583fdc68ab4e1a32f8_prof);

        
        $__internal_d87c39ec56599dcdc7c3e31b33b267c75c0551ac0c937caa36ed682b8c2f9124->leave($__internal_d87c39ec56599dcdc7c3e31b33b267c75c0551ac0c937caa36ed682b8c2f9124_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_66219d0d0863d30d03b0ad8b833355e7d44848cdb55ec873be9ca4b56ea38c2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66219d0d0863d30d03b0ad8b833355e7d44848cdb55ec873be9ca4b56ea38c2e->enter($__internal_66219d0d0863d30d03b0ad8b833355e7d44848cdb55ec873be9ca4b56ea38c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_716b14db7d1e8ec3aa4e4f3a6c72c113c7027e231bc1f499c3c5822c18edad09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716b14db7d1e8ec3aa4e4f3a6c72c113c7027e231bc1f499c3c5822c18edad09->enter($__internal_716b14db7d1e8ec3aa4e4f3a6c72c113c7027e231bc1f499c3c5822c18edad09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "clorporate";
        
        $__internal_716b14db7d1e8ec3aa4e4f3a6c72c113c7027e231bc1f499c3c5822c18edad09->leave($__internal_716b14db7d1e8ec3aa4e4f3a6c72c113c7027e231bc1f499c3c5822c18edad09_prof);

        
        $__internal_66219d0d0863d30d03b0ad8b833355e7d44848cdb55ec873be9ca4b56ea38c2e->leave($__internal_66219d0d0863d30d03b0ad8b833355e7d44848cdb55ec873be9ca4b56ea38c2e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb9f6ec996827187ab9de28c0d4b4326fb08beb840d781191b1c6e940484dc32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9f6ec996827187ab9de28c0d4b4326fb08beb840d781191b1c6e940484dc32->enter($__internal_bb9f6ec996827187ab9de28c0d4b4326fb08beb840d781191b1c6e940484dc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bfda0cf9d43995404dc262b88a0f24eb13dbc15aac4f3a72c052c048ee67d9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfda0cf9d43995404dc262b88a0f24eb13dbc15aac4f3a72c052c048ee67d9f3->enter($__internal_bfda0cf9d43995404dc262b88a0f24eb13dbc15aac4f3a72c052c048ee67d9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bfda0cf9d43995404dc262b88a0f24eb13dbc15aac4f3a72c052c048ee67d9f3->leave($__internal_bfda0cf9d43995404dc262b88a0f24eb13dbc15aac4f3a72c052c048ee67d9f3_prof);

        
        $__internal_bb9f6ec996827187ab9de28c0d4b4326fb08beb840d781191b1c6e940484dc32->leave($__internal_bb9f6ec996827187ab9de28c0d4b4326fb08beb840d781191b1c6e940484dc32_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_367206dfe3c1b671c486a27681389dec96756f6fd0120e797433c64753de168b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367206dfe3c1b671c486a27681389dec96756f6fd0120e797433c64753de168b->enter($__internal_367206dfe3c1b671c486a27681389dec96756f6fd0120e797433c64753de168b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_da153dde6b077b5b6fb5983e68e4252a6ab2935c4b116b82442f5b811ea78175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da153dde6b077b5b6fb5983e68e4252a6ab2935c4b116b82442f5b811ea78175->enter($__internal_da153dde6b077b5b6fb5983e68e4252a6ab2935c4b116b82442f5b811ea78175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_da153dde6b077b5b6fb5983e68e4252a6ab2935c4b116b82442f5b811ea78175->leave($__internal_da153dde6b077b5b6fb5983e68e4252a6ab2935c4b116b82442f5b811ea78175_prof);

        
        $__internal_367206dfe3c1b671c486a27681389dec96756f6fd0120e797433c64753de168b->leave($__internal_367206dfe3c1b671c486a27681389dec96756f6fd0120e797433c64753de168b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\app/Resources\\views/base.html.twig");
    }
}
