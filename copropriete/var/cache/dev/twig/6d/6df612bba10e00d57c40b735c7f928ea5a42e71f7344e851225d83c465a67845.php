<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fd5938f749f8cf4680e0cf1a1f2d05a39c0b5e3270a4c96f8415a16051a37e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_9c414928a8b412b38e90cb4bee28c6c187ea5b2905c18afd77ca8cbd3ffc478d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c414928a8b412b38e90cb4bee28c6c187ea5b2905c18afd77ca8cbd3ffc478d->enter($__internal_9c414928a8b412b38e90cb4bee28c6c187ea5b2905c18afd77ca8cbd3ffc478d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_346135623960a055ff34252050181fdb90aa49009b631f0920a5dd3c8014afce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346135623960a055ff34252050181fdb90aa49009b631f0920a5dd3c8014afce->enter($__internal_346135623960a055ff34252050181fdb90aa49009b631f0920a5dd3c8014afce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c414928a8b412b38e90cb4bee28c6c187ea5b2905c18afd77ca8cbd3ffc478d->leave($__internal_9c414928a8b412b38e90cb4bee28c6c187ea5b2905c18afd77ca8cbd3ffc478d_prof);

        
        $__internal_346135623960a055ff34252050181fdb90aa49009b631f0920a5dd3c8014afce->leave($__internal_346135623960a055ff34252050181fdb90aa49009b631f0920a5dd3c8014afce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7aacfb0388826e6c2d7a68d33c1c533d1ce179de1fb1f52e47e7257c906abc1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aacfb0388826e6c2d7a68d33c1c533d1ce179de1fb1f52e47e7257c906abc1b->enter($__internal_7aacfb0388826e6c2d7a68d33c1c533d1ce179de1fb1f52e47e7257c906abc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b56fb5e7ac664e705ecd2eee28bf4526129615382ff1483b1de63b13422a2202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56fb5e7ac664e705ecd2eee28bf4526129615382ff1483b1de63b13422a2202->enter($__internal_b56fb5e7ac664e705ecd2eee28bf4526129615382ff1483b1de63b13422a2202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b56fb5e7ac664e705ecd2eee28bf4526129615382ff1483b1de63b13422a2202->leave($__internal_b56fb5e7ac664e705ecd2eee28bf4526129615382ff1483b1de63b13422a2202_prof);

        
        $__internal_7aacfb0388826e6c2d7a68d33c1c533d1ce179de1fb1f52e47e7257c906abc1b->leave($__internal_7aacfb0388826e6c2d7a68d33c1c533d1ce179de1fb1f52e47e7257c906abc1b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_effd945af21bada2e07eec42c16888157e01ae26426ffb5955ede9851bb8db71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_effd945af21bada2e07eec42c16888157e01ae26426ffb5955ede9851bb8db71->enter($__internal_effd945af21bada2e07eec42c16888157e01ae26426ffb5955ede9851bb8db71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f9f5acb3e795d81028ca30fb859de16e315e2cf4ca67c07885b6f2324de4008c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f5acb3e795d81028ca30fb859de16e315e2cf4ca67c07885b6f2324de4008c->enter($__internal_f9f5acb3e795d81028ca30fb859de16e315e2cf4ca67c07885b6f2324de4008c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_f9f5acb3e795d81028ca30fb859de16e315e2cf4ca67c07885b6f2324de4008c->leave($__internal_f9f5acb3e795d81028ca30fb859de16e315e2cf4ca67c07885b6f2324de4008c_prof);

        
        $__internal_effd945af21bada2e07eec42c16888157e01ae26426ffb5955ede9851bb8db71->leave($__internal_effd945af21bada2e07eec42c16888157e01ae26426ffb5955ede9851bb8db71_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d5cfbee9bf165875b8ec978437d10aa884a4b3b1bc76af40a94819e8c9cb655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5cfbee9bf165875b8ec978437d10aa884a4b3b1bc76af40a94819e8c9cb655->enter($__internal_9d5cfbee9bf165875b8ec978437d10aa884a4b3b1bc76af40a94819e8c9cb655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6e5d95ea6291c12ad394737714fdc670da011bc8ed3c56e9ac4938df000a102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e5d95ea6291c12ad394737714fdc670da011bc8ed3c56e9ac4938df000a102->enter($__internal_f6e5d95ea6291c12ad394737714fdc670da011bc8ed3c56e9ac4938df000a102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f6e5d95ea6291c12ad394737714fdc670da011bc8ed3c56e9ac4938df000a102->leave($__internal_f6e5d95ea6291c12ad394737714fdc670da011bc8ed3c56e9ac4938df000a102_prof);

        
        $__internal_9d5cfbee9bf165875b8ec978437d10aa884a4b3b1bc76af40a94819e8c9cb655->leave($__internal_9d5cfbee9bf165875b8ec978437d10aa884a4b3b1bc76af40a94819e8c9cb655_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
