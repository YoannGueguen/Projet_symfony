<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_f2298376ca530357c4d991fd4c0af6657e3b20345e3eb9058b20888450262094 extends Twig_Template
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
        $__internal_ccf02548ae036ded02edad1d915dd7dba76d7813591c183fd7f702adf1d93588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf02548ae036ded02edad1d915dd7dba76d7813591c183fd7f702adf1d93588->enter($__internal_ccf02548ae036ded02edad1d915dd7dba76d7813591c183fd7f702adf1d93588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_2413ef455ff60f73a059c33d19b5f684349d421002549ed32ef5a4acb8e45a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2413ef455ff60f73a059c33d19b5f684349d421002549ed32ef5a4acb8e45a49->enter($__internal_2413ef455ff60f73a059c33d19b5f684349d421002549ed32ef5a4acb8e45a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_ccf02548ae036ded02edad1d915dd7dba76d7813591c183fd7f702adf1d93588->leave($__internal_ccf02548ae036ded02edad1d915dd7dba76d7813591c183fd7f702adf1d93588_prof);

        
        $__internal_2413ef455ff60f73a059c33d19b5f684349d421002549ed32ef5a4acb8e45a49->leave($__internal_2413ef455ff60f73a059c33d19b5f684349d421002549ed32ef5a4acb8e45a49_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
