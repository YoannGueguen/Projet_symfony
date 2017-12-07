<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ab3509d84a76c90eadc8b484daa778bdf8e0f276954dab8bda9183ef9666e6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95bfbc9cb9faf156798aa0ec7822be64f4b93e17ce1227f2cece7c90ebf08001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95bfbc9cb9faf156798aa0ec7822be64f4b93e17ce1227f2cece7c90ebf08001->enter($__internal_95bfbc9cb9faf156798aa0ec7822be64f4b93e17ce1227f2cece7c90ebf08001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_54d5b5d23a9306ace17770ed49793a8b8c938bc63a4071aa252762d7319b286b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d5b5d23a9306ace17770ed49793a8b8c938bc63a4071aa252762d7319b286b->enter($__internal_54d5b5d23a9306ace17770ed49793a8b8c938bc63a4071aa252762d7319b286b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95bfbc9cb9faf156798aa0ec7822be64f4b93e17ce1227f2cece7c90ebf08001->leave($__internal_95bfbc9cb9faf156798aa0ec7822be64f4b93e17ce1227f2cece7c90ebf08001_prof);

        
        $__internal_54d5b5d23a9306ace17770ed49793a8b8c938bc63a4071aa252762d7319b286b->leave($__internal_54d5b5d23a9306ace17770ed49793a8b8c938bc63a4071aa252762d7319b286b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08d8344f87766b2a446941587603660535322c9df6e8a11ff274f4443c46c804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d8344f87766b2a446941587603660535322c9df6e8a11ff274f4443c46c804->enter($__internal_08d8344f87766b2a446941587603660535322c9df6e8a11ff274f4443c46c804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_18783efce6d579000b1e94f6c07ef9680219fcb9e8e79e2d7287609553fe9e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18783efce6d579000b1e94f6c07ef9680219fcb9e8e79e2d7287609553fe9e8a->enter($__internal_18783efce6d579000b1e94f6c07ef9680219fcb9e8e79e2d7287609553fe9e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_18783efce6d579000b1e94f6c07ef9680219fcb9e8e79e2d7287609553fe9e8a->leave($__internal_18783efce6d579000b1e94f6c07ef9680219fcb9e8e79e2d7287609553fe9e8a_prof);

        
        $__internal_08d8344f87766b2a446941587603660535322c9df6e8a11ff274f4443c46c804->leave($__internal_08d8344f87766b2a446941587603660535322c9df6e8a11ff274f4443c46c804_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b2e472885c7583ab9d81a7a9f7296bb9e62810ef4f7c67f65e9f2a347b2a664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b2e472885c7583ab9d81a7a9f7296bb9e62810ef4f7c67f65e9f2a347b2a664->enter($__internal_8b2e472885c7583ab9d81a7a9f7296bb9e62810ef4f7c67f65e9f2a347b2a664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f08bf681e4a395e977c9bd3a39c52bc838a634bb1da0baf896315c5e6dc823c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f08bf681e4a395e977c9bd3a39c52bc838a634bb1da0baf896315c5e6dc823c->enter($__internal_3f08bf681e4a395e977c9bd3a39c52bc838a634bb1da0baf896315c5e6dc823c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_3f08bf681e4a395e977c9bd3a39c52bc838a634bb1da0baf896315c5e6dc823c->leave($__internal_3f08bf681e4a395e977c9bd3a39c52bc838a634bb1da0baf896315c5e6dc823c_prof);

        
        $__internal_8b2e472885c7583ab9d81a7a9f7296bb9e62810ef4f7c67f65e9f2a347b2a664->leave($__internal_8b2e472885c7583ab9d81a7a9f7296bb9e62810ef4f7c67f65e9f2a347b2a664_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf7fe19ec4ca3f55aa018db90adc465ce3dd8407c065d15d30b62483b2ff62dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf7fe19ec4ca3f55aa018db90adc465ce3dd8407c065d15d30b62483b2ff62dd->enter($__internal_cf7fe19ec4ca3f55aa018db90adc465ce3dd8407c065d15d30b62483b2ff62dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5a58244714ebc8be693a5654af04d1f2e0a5ade60ed5902da8cd65b0995d21c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a58244714ebc8be693a5654af04d1f2e0a5ade60ed5902da8cd65b0995d21c->enter($__internal_d5a58244714ebc8be693a5654af04d1f2e0a5ade60ed5902da8cd65b0995d21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_d5a58244714ebc8be693a5654af04d1f2e0a5ade60ed5902da8cd65b0995d21c->leave($__internal_d5a58244714ebc8be693a5654af04d1f2e0a5ade60ed5902da8cd65b0995d21c_prof);

        
        $__internal_cf7fe19ec4ca3f55aa018db90adc465ce3dd8407c065d15d30b62483b2ff62dd->leave($__internal_cf7fe19ec4ca3f55aa018db90adc465ce3dd8407c065d15d30b62483b2ff62dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
