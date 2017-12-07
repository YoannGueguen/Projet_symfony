<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_14af130ee6a1d0efb7224b6d90c084ec5eff9f145367b832b975ed7513c5a71d extends Twig_Template
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
        $__internal_47457c151ea50b3bb401a2184858038322487a00a26d8162f111867a41984120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47457c151ea50b3bb401a2184858038322487a00a26d8162f111867a41984120->enter($__internal_47457c151ea50b3bb401a2184858038322487a00a26d8162f111867a41984120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_c32e628916b9f7a4380cf3d2ac3e7a1b5459451d60ed68187149b4c42e723f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32e628916b9f7a4380cf3d2ac3e7a1b5459451d60ed68187149b4c42e723f5e->enter($__internal_c32e628916b9f7a4380cf3d2ac3e7a1b5459451d60ed68187149b4c42e723f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_47457c151ea50b3bb401a2184858038322487a00a26d8162f111867a41984120->leave($__internal_47457c151ea50b3bb401a2184858038322487a00a26d8162f111867a41984120_prof);

        
        $__internal_c32e628916b9f7a4380cf3d2ac3e7a1b5459451d60ed68187149b4c42e723f5e->leave($__internal_c32e628916b9f7a4380cf3d2ac3e7a1b5459451d60ed68187149b4c42e723f5e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
