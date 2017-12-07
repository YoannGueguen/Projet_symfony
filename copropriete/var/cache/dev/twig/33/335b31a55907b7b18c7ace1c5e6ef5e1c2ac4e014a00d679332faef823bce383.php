<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b55ba1aec3f18cb53fbb155c0fece24e000215d002b94cd52275594f2bd15144 extends Twig_Template
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
        $__internal_23ff6b61e1cf32ca8d35cd35d52b5ef97cf7973bb25a579d1b8b09282b448cee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ff6b61e1cf32ca8d35cd35d52b5ef97cf7973bb25a579d1b8b09282b448cee->enter($__internal_23ff6b61e1cf32ca8d35cd35d52b5ef97cf7973bb25a579d1b8b09282b448cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8b1e762f460b759246be607a9465e143db5236e993874c58c0c47327ea3289e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1e762f460b759246be607a9465e143db5236e993874c58c0c47327ea3289e0->enter($__internal_8b1e762f460b759246be607a9465e143db5236e993874c58c0c47327ea3289e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_23ff6b61e1cf32ca8d35cd35d52b5ef97cf7973bb25a579d1b8b09282b448cee->leave($__internal_23ff6b61e1cf32ca8d35cd35d52b5ef97cf7973bb25a579d1b8b09282b448cee_prof);

        
        $__internal_8b1e762f460b759246be607a9465e143db5236e993874c58c0c47327ea3289e0->leave($__internal_8b1e762f460b759246be607a9465e143db5236e993874c58c0c47327ea3289e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
