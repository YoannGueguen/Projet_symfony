<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_aed538842a391c4c6fafba07f44399040e8d74788965be95267ff5a49a2a5169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_723c27e66d4ce1d875ec2532317ef9dee7a761473ac018af11e32841faad6875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723c27e66d4ce1d875ec2532317ef9dee7a761473ac018af11e32841faad6875->enter($__internal_723c27e66d4ce1d875ec2532317ef9dee7a761473ac018af11e32841faad6875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_7cc7365a6e4de8bcec671f8346f72d9354ecb87bd38ec45f89e7e536e7b1c94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc7365a6e4de8bcec671f8346f72d9354ecb87bd38ec45f89e7e536e7b1c94a->enter($__internal_7cc7365a6e4de8bcec671f8346f72d9354ecb87bd38ec45f89e7e536e7b1c94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_723c27e66d4ce1d875ec2532317ef9dee7a761473ac018af11e32841faad6875->leave($__internal_723c27e66d4ce1d875ec2532317ef9dee7a761473ac018af11e32841faad6875_prof);

        
        $__internal_7cc7365a6e4de8bcec671f8346f72d9354ecb87bd38ec45f89e7e536e7b1c94a->leave($__internal_7cc7365a6e4de8bcec671f8346f72d9354ecb87bd38ec45f89e7e536e7b1c94a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
