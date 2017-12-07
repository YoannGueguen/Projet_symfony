<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_469d5132eed9d8a52881c0bfd7e315fc6942caa85e6c1bcee73353d600ffbf65 extends Twig_Template
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
        $__internal_7c1664a312ea2a6d4a4ad0a387bb52acb6b7237a5b9e71a17ad072f562e5c16b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1664a312ea2a6d4a4ad0a387bb52acb6b7237a5b9e71a17ad072f562e5c16b->enter($__internal_7c1664a312ea2a6d4a4ad0a387bb52acb6b7237a5b9e71a17ad072f562e5c16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_b1b50449b76fc661f1729ccb82e2857f58d9367a1eabcd35697537251d49cd18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b50449b76fc661f1729ccb82e2857f58d9367a1eabcd35697537251d49cd18->enter($__internal_b1b50449b76fc661f1729ccb82e2857f58d9367a1eabcd35697537251d49cd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_7c1664a312ea2a6d4a4ad0a387bb52acb6b7237a5b9e71a17ad072f562e5c16b->leave($__internal_7c1664a312ea2a6d4a4ad0a387bb52acb6b7237a5b9e71a17ad072f562e5c16b_prof);

        
        $__internal_b1b50449b76fc661f1729ccb82e2857f58d9367a1eabcd35697537251d49cd18->leave($__internal_b1b50449b76fc661f1729ccb82e2857f58d9367a1eabcd35697537251d49cd18_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
