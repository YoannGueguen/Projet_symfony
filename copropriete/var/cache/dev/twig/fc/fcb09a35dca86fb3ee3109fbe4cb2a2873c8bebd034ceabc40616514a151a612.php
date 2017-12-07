<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b9781c0f213beff2a78b860e07049836d68c42b297cf29ecc2407e83e1a6a712 extends Twig_Template
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
        $__internal_be4ac812f2bc1a485cc0d541e10cecaa85ade94ba8293af9c128f146330388aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4ac812f2bc1a485cc0d541e10cecaa85ade94ba8293af9c128f146330388aa->enter($__internal_be4ac812f2bc1a485cc0d541e10cecaa85ade94ba8293af9c128f146330388aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_ff63f76de2f8ac97466900ca0bbc920cc357156fa208e1d302df7b8b868d078f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff63f76de2f8ac97466900ca0bbc920cc357156fa208e1d302df7b8b868d078f->enter($__internal_ff63f76de2f8ac97466900ca0bbc920cc357156fa208e1d302df7b8b868d078f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_be4ac812f2bc1a485cc0d541e10cecaa85ade94ba8293af9c128f146330388aa->leave($__internal_be4ac812f2bc1a485cc0d541e10cecaa85ade94ba8293af9c128f146330388aa_prof);

        
        $__internal_ff63f76de2f8ac97466900ca0bbc920cc357156fa208e1d302df7b8b868d078f->leave($__internal_ff63f76de2f8ac97466900ca0bbc920cc357156fa208e1d302df7b8b868d078f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
