<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_48c4ab9f2dad15df4653eed6d95c4e4a358d52dcf94e2a491f0f9951cc7c5a82 extends Twig_Template
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
        $__internal_83361e4f445a2aa7f61fe1a3bf777840b3ce2de56cfa32bc3964a44c6386d59f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83361e4f445a2aa7f61fe1a3bf777840b3ce2de56cfa32bc3964a44c6386d59f->enter($__internal_83361e4f445a2aa7f61fe1a3bf777840b3ce2de56cfa32bc3964a44c6386d59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_cf61fec240e4388eaa90e1805c1aebecd9dc404db942e1268d7d7e504e6b9cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf61fec240e4388eaa90e1805c1aebecd9dc404db942e1268d7d7e504e6b9cbf->enter($__internal_cf61fec240e4388eaa90e1805c1aebecd9dc404db942e1268d7d7e504e6b9cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_83361e4f445a2aa7f61fe1a3bf777840b3ce2de56cfa32bc3964a44c6386d59f->leave($__internal_83361e4f445a2aa7f61fe1a3bf777840b3ce2de56cfa32bc3964a44c6386d59f_prof);

        
        $__internal_cf61fec240e4388eaa90e1805c1aebecd9dc404db942e1268d7d7e504e6b9cbf->leave($__internal_cf61fec240e4388eaa90e1805c1aebecd9dc404db942e1268d7d7e504e6b9cbf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
