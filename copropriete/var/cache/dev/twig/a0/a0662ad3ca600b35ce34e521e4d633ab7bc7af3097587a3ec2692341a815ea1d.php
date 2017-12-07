<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_95d5e109dc50e2922524c20a5114fa79bce02f829845b842b1fcb6c79b6a005d extends Twig_Template
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
        $__internal_90e19af52403bc56b3adf638cf406742bf1b602aacbad85873ec855b46cf3964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e19af52403bc56b3adf638cf406742bf1b602aacbad85873ec855b46cf3964->enter($__internal_90e19af52403bc56b3adf638cf406742bf1b602aacbad85873ec855b46cf3964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_609f3df3fc1f64f395c056d9ee6f638acd28c13c8eb100e7bc35211e69045946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609f3df3fc1f64f395c056d9ee6f638acd28c13c8eb100e7bc35211e69045946->enter($__internal_609f3df3fc1f64f395c056d9ee6f638acd28c13c8eb100e7bc35211e69045946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_90e19af52403bc56b3adf638cf406742bf1b602aacbad85873ec855b46cf3964->leave($__internal_90e19af52403bc56b3adf638cf406742bf1b602aacbad85873ec855b46cf3964_prof);

        
        $__internal_609f3df3fc1f64f395c056d9ee6f638acd28c13c8eb100e7bc35211e69045946->leave($__internal_609f3df3fc1f64f395c056d9ee6f638acd28c13c8eb100e7bc35211e69045946_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
