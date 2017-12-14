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
        $__internal_ec775b6702d5c8cb8026d16ffbbadb0e53ce3d9f40d92299b340c69e2a178f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec775b6702d5c8cb8026d16ffbbadb0e53ce3d9f40d92299b340c69e2a178f76->enter($__internal_ec775b6702d5c8cb8026d16ffbbadb0e53ce3d9f40d92299b340c69e2a178f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d3e5bb26079dbcbf542949ade74c09abb73443ba8c550e41782a3f198d591fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e5bb26079dbcbf542949ade74c09abb73443ba8c550e41782a3f198d591fd5->enter($__internal_d3e5bb26079dbcbf542949ade74c09abb73443ba8c550e41782a3f198d591fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ec775b6702d5c8cb8026d16ffbbadb0e53ce3d9f40d92299b340c69e2a178f76->leave($__internal_ec775b6702d5c8cb8026d16ffbbadb0e53ce3d9f40d92299b340c69e2a178f76_prof);

        
        $__internal_d3e5bb26079dbcbf542949ade74c09abb73443ba8c550e41782a3f198d591fd5->leave($__internal_d3e5bb26079dbcbf542949ade74c09abb73443ba8c550e41782a3f198d591fd5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0137731d0b13d455c5f2902a5accb562c85eaa80abf8031d7a6e77865cee05a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0137731d0b13d455c5f2902a5accb562c85eaa80abf8031d7a6e77865cee05a3->enter($__internal_0137731d0b13d455c5f2902a5accb562c85eaa80abf8031d7a6e77865cee05a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33f03ebf00d8092a93c3ee57bace3ff9b33b809df85b8830f32ba3da182f0985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f03ebf00d8092a93c3ee57bace3ff9b33b809df85b8830f32ba3da182f0985->enter($__internal_33f03ebf00d8092a93c3ee57bace3ff9b33b809df85b8830f32ba3da182f0985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_33f03ebf00d8092a93c3ee57bace3ff9b33b809df85b8830f32ba3da182f0985->leave($__internal_33f03ebf00d8092a93c3ee57bace3ff9b33b809df85b8830f32ba3da182f0985_prof);

        
        $__internal_0137731d0b13d455c5f2902a5accb562c85eaa80abf8031d7a6e77865cee05a3->leave($__internal_0137731d0b13d455c5f2902a5accb562c85eaa80abf8031d7a6e77865cee05a3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_71a3971d4ac72e33e65a1774c8596c5984a2d95468777e6a640b6b2face6e3d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a3971d4ac72e33e65a1774c8596c5984a2d95468777e6a640b6b2face6e3d4->enter($__internal_71a3971d4ac72e33e65a1774c8596c5984a2d95468777e6a640b6b2face6e3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ae7cba3ea307e9ddd3586af0864622e59e688f2f23f2c199fbb1d38399288eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7cba3ea307e9ddd3586af0864622e59e688f2f23f2c199fbb1d38399288eb1->enter($__internal_ae7cba3ea307e9ddd3586af0864622e59e688f2f23f2c199fbb1d38399288eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ae7cba3ea307e9ddd3586af0864622e59e688f2f23f2c199fbb1d38399288eb1->leave($__internal_ae7cba3ea307e9ddd3586af0864622e59e688f2f23f2c199fbb1d38399288eb1_prof);

        
        $__internal_71a3971d4ac72e33e65a1774c8596c5984a2d95468777e6a640b6b2face6e3d4->leave($__internal_71a3971d4ac72e33e65a1774c8596c5984a2d95468777e6a640b6b2face6e3d4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_95c26d1a04698549e1f87e145f7d6d93814383e97383e3b14fc064e8a8433e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c26d1a04698549e1f87e145f7d6d93814383e97383e3b14fc064e8a8433e94->enter($__internal_95c26d1a04698549e1f87e145f7d6d93814383e97383e3b14fc064e8a8433e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bdfe0927ca6bcb07d40b33a7d8fae92af1ea183a402ce1146d86c6a75a954539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdfe0927ca6bcb07d40b33a7d8fae92af1ea183a402ce1146d86c6a75a954539->enter($__internal_bdfe0927ca6bcb07d40b33a7d8fae92af1ea183a402ce1146d86c6a75a954539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bdfe0927ca6bcb07d40b33a7d8fae92af1ea183a402ce1146d86c6a75a954539->leave($__internal_bdfe0927ca6bcb07d40b33a7d8fae92af1ea183a402ce1146d86c6a75a954539_prof);

        
        $__internal_95c26d1a04698549e1f87e145f7d6d93814383e97383e3b14fc064e8a8433e94->leave($__internal_95c26d1a04698549e1f87e145f7d6d93814383e97383e3b14fc064e8a8433e94_prof);

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
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\projet\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
