<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_d6d8bf321a7b87591a33bc98efee3737c3f1a5dbb11b9a4d4bb9c894567d6ea9 extends Twig_Template
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
        $__internal_fc44863df8baa477c297531113591c2027ea6f2312e4d8d745a5a3b9f9a980f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc44863df8baa477c297531113591c2027ea6f2312e4d8d745a5a3b9f9a980f8->enter($__internal_fc44863df8baa477c297531113591c2027ea6f2312e4d8d745a5a3b9f9a980f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_4bd4b3f250afefc12d8909c47ce28c89736c2f18969ee98122ea96a7815433ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd4b3f250afefc12d8909c47ce28c89736c2f18969ee98122ea96a7815433ac->enter($__internal_4bd4b3f250afefc12d8909c47ce28c89736c2f18969ee98122ea96a7815433ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_fc44863df8baa477c297531113591c2027ea6f2312e4d8d745a5a3b9f9a980f8->leave($__internal_fc44863df8baa477c297531113591c2027ea6f2312e4d8d745a5a3b9f9a980f8_prof);

        
        $__internal_4bd4b3f250afefc12d8909c47ce28c89736c2f18969ee98122ea96a7815433ac->leave($__internal_4bd4b3f250afefc12d8909c47ce28c89736c2f18969ee98122ea96a7815433ac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_832e00a9315268c63b4ce3d20906015019325b747a1d975e83ac2e8ba08a38b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_832e00a9315268c63b4ce3d20906015019325b747a1d975e83ac2e8ba08a38b5->enter($__internal_832e00a9315268c63b4ce3d20906015019325b747a1d975e83ac2e8ba08a38b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b623511ab6d61dbe7a158ca5fb503b3cd7138abd1ca0a31fe5581a37628f0a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b623511ab6d61dbe7a158ca5fb503b3cd7138abd1ca0a31fe5581a37628f0a4->enter($__internal_3b623511ab6d61dbe7a158ca5fb503b3cd7138abd1ca0a31fe5581a37628f0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3b623511ab6d61dbe7a158ca5fb503b3cd7138abd1ca0a31fe5581a37628f0a4->leave($__internal_3b623511ab6d61dbe7a158ca5fb503b3cd7138abd1ca0a31fe5581a37628f0a4_prof);

        
        $__internal_832e00a9315268c63b4ce3d20906015019325b747a1d975e83ac2e8ba08a38b5->leave($__internal_832e00a9315268c63b4ce3d20906015019325b747a1d975e83ac2e8ba08a38b5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d67cf76bd4d8f91d8423ba9da1072a4a9522d25e77a988a01f6cf7f30a012d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67cf76bd4d8f91d8423ba9da1072a4a9522d25e77a988a01f6cf7f30a012d0c->enter($__internal_d67cf76bd4d8f91d8423ba9da1072a4a9522d25e77a988a01f6cf7f30a012d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2b5f283358ffc16e777b467186dfd3a0c7b82d2bebcfe5dbb9d2c21f87f10204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5f283358ffc16e777b467186dfd3a0c7b82d2bebcfe5dbb9d2c21f87f10204->enter($__internal_2b5f283358ffc16e777b467186dfd3a0c7b82d2bebcfe5dbb9d2c21f87f10204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2b5f283358ffc16e777b467186dfd3a0c7b82d2bebcfe5dbb9d2c21f87f10204->leave($__internal_2b5f283358ffc16e777b467186dfd3a0c7b82d2bebcfe5dbb9d2c21f87f10204_prof);

        
        $__internal_d67cf76bd4d8f91d8423ba9da1072a4a9522d25e77a988a01f6cf7f30a012d0c->leave($__internal_d67cf76bd4d8f91d8423ba9da1072a4a9522d25e77a988a01f6cf7f30a012d0c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b3098d02e856ae1d7c398cb406212fce7cf4a976256d611dc379b74bc38d55c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3098d02e856ae1d7c398cb406212fce7cf4a976256d611dc379b74bc38d55c->enter($__internal_1b3098d02e856ae1d7c398cb406212fce7cf4a976256d611dc379b74bc38d55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65668fc7e9e4645620b938a497f62754614612492cfb0103fb34be6ea73e9bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65668fc7e9e4645620b938a497f62754614612492cfb0103fb34be6ea73e9bca->enter($__internal_65668fc7e9e4645620b938a497f62754614612492cfb0103fb34be6ea73e9bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_65668fc7e9e4645620b938a497f62754614612492cfb0103fb34be6ea73e9bca->leave($__internal_65668fc7e9e4645620b938a497f62754614612492cfb0103fb34be6ea73e9bca_prof);

        
        $__internal_1b3098d02e856ae1d7c398cb406212fce7cf4a976256d611dc379b74bc38d55c->leave($__internal_1b3098d02e856ae1d7c398cb406212fce7cf4a976256d611dc379b74bc38d55c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
