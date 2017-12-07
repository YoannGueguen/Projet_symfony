<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8e55104425ac4768b0f4a197a915138c03f4cc805841fdbc6b03de8a4ee9fa16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab1399d295c12ce842c113207704199a9632f830f709a4bd8c415ed3bbe8227f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab1399d295c12ce842c113207704199a9632f830f709a4bd8c415ed3bbe8227f->enter($__internal_ab1399d295c12ce842c113207704199a9632f830f709a4bd8c415ed3bbe8227f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ee13e70dba33333f2a229c035587ac0adb564c0c273981c8ef9ae4f857fcd5bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee13e70dba33333f2a229c035587ac0adb564c0c273981c8ef9ae4f857fcd5bb->enter($__internal_ee13e70dba33333f2a229c035587ac0adb564c0c273981c8ef9ae4f857fcd5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ab1399d295c12ce842c113207704199a9632f830f709a4bd8c415ed3bbe8227f->leave($__internal_ab1399d295c12ce842c113207704199a9632f830f709a4bd8c415ed3bbe8227f_prof);

        
        $__internal_ee13e70dba33333f2a229c035587ac0adb564c0c273981c8ef9ae4f857fcd5bb->leave($__internal_ee13e70dba33333f2a229c035587ac0adb564c0c273981c8ef9ae4f857fcd5bb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_76403b71c293b7b08d18b93daa3f3275515e1b7b8d21359552181d7f759c3551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76403b71c293b7b08d18b93daa3f3275515e1b7b8d21359552181d7f759c3551->enter($__internal_76403b71c293b7b08d18b93daa3f3275515e1b7b8d21359552181d7f759c3551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_32185ce08847c5be2fcd3b1ab9a7d7cebfd31e00299220e9d2b6ea8ffcb1d470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32185ce08847c5be2fcd3b1ab9a7d7cebfd31e00299220e9d2b6ea8ffcb1d470->enter($__internal_32185ce08847c5be2fcd3b1ab9a7d7cebfd31e00299220e9d2b6ea8ffcb1d470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_32185ce08847c5be2fcd3b1ab9a7d7cebfd31e00299220e9d2b6ea8ffcb1d470->leave($__internal_32185ce08847c5be2fcd3b1ab9a7d7cebfd31e00299220e9d2b6ea8ffcb1d470_prof);

        
        $__internal_76403b71c293b7b08d18b93daa3f3275515e1b7b8d21359552181d7f759c3551->leave($__internal_76403b71c293b7b08d18b93daa3f3275515e1b7b8d21359552181d7f759c3551_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_22a959b327efa7f0551dbc683ce79468a8a699a3e694480786b834ef9804d181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a959b327efa7f0551dbc683ce79468a8a699a3e694480786b834ef9804d181->enter($__internal_22a959b327efa7f0551dbc683ce79468a8a699a3e694480786b834ef9804d181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a76fc4c5424109614794a6fca19fea4548a31317c37f9d266fbf7949b4e197e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76fc4c5424109614794a6fca19fea4548a31317c37f9d266fbf7949b4e197e9->enter($__internal_a76fc4c5424109614794a6fca19fea4548a31317c37f9d266fbf7949b4e197e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a76fc4c5424109614794a6fca19fea4548a31317c37f9d266fbf7949b4e197e9->leave($__internal_a76fc4c5424109614794a6fca19fea4548a31317c37f9d266fbf7949b4e197e9_prof);

        
        $__internal_22a959b327efa7f0551dbc683ce79468a8a699a3e694480786b834ef9804d181->leave($__internal_22a959b327efa7f0551dbc683ce79468a8a699a3e694480786b834ef9804d181_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba083a6eb52cbe8f5bdfdeff691e1e90248c42f7c235e8028309e6c6c693b220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba083a6eb52cbe8f5bdfdeff691e1e90248c42f7c235e8028309e6c6c693b220->enter($__internal_ba083a6eb52cbe8f5bdfdeff691e1e90248c42f7c235e8028309e6c6c693b220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c607156f3e39bc9fa99996172d02326dd653d490f7cdb438b42603c8dc648b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c607156f3e39bc9fa99996172d02326dd653d490f7cdb438b42603c8dc648b56->enter($__internal_c607156f3e39bc9fa99996172d02326dd653d490f7cdb438b42603c8dc648b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c607156f3e39bc9fa99996172d02326dd653d490f7cdb438b42603c8dc648b56->leave($__internal_c607156f3e39bc9fa99996172d02326dd653d490f7cdb438b42603c8dc648b56_prof);

        
        $__internal_ba083a6eb52cbe8f5bdfdeff691e1e90248c42f7c235e8028309e6c6c693b220->leave($__internal_ba083a6eb52cbe8f5bdfdeff691e1e90248c42f7c235e8028309e6c6c693b220_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
