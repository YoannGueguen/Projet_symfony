<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a1278650c05506634c3c4de2f22add4c021c2d2193b992ba8674a98b0a1b7938 extends Twig_Template
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
        $__internal_b0abd835fbfd6d4a5a5f1e412678118c94dfaac28033061ffb8ee0792f72c5c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0abd835fbfd6d4a5a5f1e412678118c94dfaac28033061ffb8ee0792f72c5c6->enter($__internal_b0abd835fbfd6d4a5a5f1e412678118c94dfaac28033061ffb8ee0792f72c5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_963cbeefde902327b35cd8da68577fd3449a1a9fd257a172d7a5b130ba2bceeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963cbeefde902327b35cd8da68577fd3449a1a9fd257a172d7a5b130ba2bceeb->enter($__internal_963cbeefde902327b35cd8da68577fd3449a1a9fd257a172d7a5b130ba2bceeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_b0abd835fbfd6d4a5a5f1e412678118c94dfaac28033061ffb8ee0792f72c5c6->leave($__internal_b0abd835fbfd6d4a5a5f1e412678118c94dfaac28033061ffb8ee0792f72c5c6_prof);

        
        $__internal_963cbeefde902327b35cd8da68577fd3449a1a9fd257a172d7a5b130ba2bceeb->leave($__internal_963cbeefde902327b35cd8da68577fd3449a1a9fd257a172d7a5b130ba2bceeb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
