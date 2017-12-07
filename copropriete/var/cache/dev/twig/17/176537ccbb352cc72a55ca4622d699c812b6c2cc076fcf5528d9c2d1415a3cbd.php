<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_723afc4844a567937d204258882dec7cc5e62e0bdc4644da4b3a001d02826423 extends Twig_Template
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
        $__internal_d9eee951428ef3e6f838ae61586885fe0c0106bc11623bd14dadbeeef2f7948e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9eee951428ef3e6f838ae61586885fe0c0106bc11623bd14dadbeeef2f7948e->enter($__internal_d9eee951428ef3e6f838ae61586885fe0c0106bc11623bd14dadbeeef2f7948e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_d7b138b83fc262dbfb4250e24c64d9ba7e3bfde56b7a984308ebc748855155fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b138b83fc262dbfb4250e24c64d9ba7e3bfde56b7a984308ebc748855155fa->enter($__internal_d7b138b83fc262dbfb4250e24c64d9ba7e3bfde56b7a984308ebc748855155fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_d9eee951428ef3e6f838ae61586885fe0c0106bc11623bd14dadbeeef2f7948e->leave($__internal_d9eee951428ef3e6f838ae61586885fe0c0106bc11623bd14dadbeeef2f7948e_prof);

        
        $__internal_d7b138b83fc262dbfb4250e24c64d9ba7e3bfde56b7a984308ebc748855155fa->leave($__internal_d7b138b83fc262dbfb4250e24c64d9ba7e3bfde56b7a984308ebc748855155fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
