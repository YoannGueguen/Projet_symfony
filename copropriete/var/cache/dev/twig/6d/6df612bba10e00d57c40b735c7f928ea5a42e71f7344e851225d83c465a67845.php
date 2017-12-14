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
        $__internal_1ad154a30eaa72656e097900d88408e0fd189d2a02dae9333603b064219e5175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad154a30eaa72656e097900d88408e0fd189d2a02dae9333603b064219e5175->enter($__internal_1ad154a30eaa72656e097900d88408e0fd189d2a02dae9333603b064219e5175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_16c5a36db7eaf1444c4058130d8fd40636f8753397d105b1d0f49c40745f78f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c5a36db7eaf1444c4058130d8fd40636f8753397d105b1d0f49c40745f78f1->enter($__internal_16c5a36db7eaf1444c4058130d8fd40636f8753397d105b1d0f49c40745f78f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ad154a30eaa72656e097900d88408e0fd189d2a02dae9333603b064219e5175->leave($__internal_1ad154a30eaa72656e097900d88408e0fd189d2a02dae9333603b064219e5175_prof);

        
        $__internal_16c5a36db7eaf1444c4058130d8fd40636f8753397d105b1d0f49c40745f78f1->leave($__internal_16c5a36db7eaf1444c4058130d8fd40636f8753397d105b1d0f49c40745f78f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_80b49b2f34020d78e6f0810f15dff5b6cdcf4a5322698d2673d57c1e8f9da968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b49b2f34020d78e6f0810f15dff5b6cdcf4a5322698d2673d57c1e8f9da968->enter($__internal_80b49b2f34020d78e6f0810f15dff5b6cdcf4a5322698d2673d57c1e8f9da968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_38717b6881fe43a99d7fdcf2ae6c189a82224b14cc7e32d3f2cec0920bd64490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38717b6881fe43a99d7fdcf2ae6c189a82224b14cc7e32d3f2cec0920bd64490->enter($__internal_38717b6881fe43a99d7fdcf2ae6c189a82224b14cc7e32d3f2cec0920bd64490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_38717b6881fe43a99d7fdcf2ae6c189a82224b14cc7e32d3f2cec0920bd64490->leave($__internal_38717b6881fe43a99d7fdcf2ae6c189a82224b14cc7e32d3f2cec0920bd64490_prof);

        
        $__internal_80b49b2f34020d78e6f0810f15dff5b6cdcf4a5322698d2673d57c1e8f9da968->leave($__internal_80b49b2f34020d78e6f0810f15dff5b6cdcf4a5322698d2673d57c1e8f9da968_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e28154d0caa322d422280bda6a631740780168e7c4df49e395511c020d7e88b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e28154d0caa322d422280bda6a631740780168e7c4df49e395511c020d7e88b->enter($__internal_1e28154d0caa322d422280bda6a631740780168e7c4df49e395511c020d7e88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8dad861f2c09d6695f093788d56d043921e004986d57776f0550b5387f8013b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dad861f2c09d6695f093788d56d043921e004986d57776f0550b5387f8013b3->enter($__internal_8dad861f2c09d6695f093788d56d043921e004986d57776f0550b5387f8013b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_8dad861f2c09d6695f093788d56d043921e004986d57776f0550b5387f8013b3->leave($__internal_8dad861f2c09d6695f093788d56d043921e004986d57776f0550b5387f8013b3_prof);

        
        $__internal_1e28154d0caa322d422280bda6a631740780168e7c4df49e395511c020d7e88b->leave($__internal_1e28154d0caa322d422280bda6a631740780168e7c4df49e395511c020d7e88b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_705f7245b72e14d84dedb644ff6846ae4fadb81879331bf48a52c1280dc0b522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_705f7245b72e14d84dedb644ff6846ae4fadb81879331bf48a52c1280dc0b522->enter($__internal_705f7245b72e14d84dedb644ff6846ae4fadb81879331bf48a52c1280dc0b522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6eb7d6e0d91afc33c4fd42ff313ae50c80c2aa975775aa7afef42849a06fc94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6eb7d6e0d91afc33c4fd42ff313ae50c80c2aa975775aa7afef42849a06fc94->enter($__internal_a6eb7d6e0d91afc33c4fd42ff313ae50c80c2aa975775aa7afef42849a06fc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a6eb7d6e0d91afc33c4fd42ff313ae50c80c2aa975775aa7afef42849a06fc94->leave($__internal_a6eb7d6e0d91afc33c4fd42ff313ae50c80c2aa975775aa7afef42849a06fc94_prof);

        
        $__internal_705f7245b72e14d84dedb644ff6846ae4fadb81879331bf48a52c1280dc0b522->leave($__internal_705f7245b72e14d84dedb644ff6846ae4fadb81879331bf48a52c1280dc0b522_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Projet_symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
