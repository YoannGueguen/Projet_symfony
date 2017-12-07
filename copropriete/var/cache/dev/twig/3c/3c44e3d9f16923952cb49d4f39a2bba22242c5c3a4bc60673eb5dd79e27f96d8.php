<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9f6588ab938828fd0d015ddebc9c70318f11dfede6949f85c6a3b4942e0c523a extends Twig_Template
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
        $__internal_6ff55ba3688651571f5a475bb0694d75fee63a42a388cf890335bc9921192516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff55ba3688651571f5a475bb0694d75fee63a42a388cf890335bc9921192516->enter($__internal_6ff55ba3688651571f5a475bb0694d75fee63a42a388cf890335bc9921192516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_6752c46cfc855a0de6daca72103c86ed8d3a581f78cf6c3e83092efd1eddca00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6752c46cfc855a0de6daca72103c86ed8d3a581f78cf6c3e83092efd1eddca00->enter($__internal_6752c46cfc855a0de6daca72103c86ed8d3a581f78cf6c3e83092efd1eddca00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6ff55ba3688651571f5a475bb0694d75fee63a42a388cf890335bc9921192516->leave($__internal_6ff55ba3688651571f5a475bb0694d75fee63a42a388cf890335bc9921192516_prof);

        
        $__internal_6752c46cfc855a0de6daca72103c86ed8d3a581f78cf6c3e83092efd1eddca00->leave($__internal_6752c46cfc855a0de6daca72103c86ed8d3a581f78cf6c3e83092efd1eddca00_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
