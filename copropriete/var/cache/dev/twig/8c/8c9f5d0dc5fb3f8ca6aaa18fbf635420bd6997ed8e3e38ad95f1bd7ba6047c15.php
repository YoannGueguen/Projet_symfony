<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_01d3cbe0799be5a27f0f271a1fd9be0af9cc36a123902ddc970ef2d85d2bb98c extends Twig_Template
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
        $__internal_da1854652584654067427810cd735caf1e95f59fb93cd165dc284d321c8cd480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1854652584654067427810cd735caf1e95f59fb93cd165dc284d321c8cd480->enter($__internal_da1854652584654067427810cd735caf1e95f59fb93cd165dc284d321c8cd480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_a3e8fb85bf1a62826fe394ed029300e5c63e6effd96bdcb0d7c3716cf66fc757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e8fb85bf1a62826fe394ed029300e5c63e6effd96bdcb0d7c3716cf66fc757->enter($__internal_a3e8fb85bf1a62826fe394ed029300e5c63e6effd96bdcb0d7c3716cf66fc757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_da1854652584654067427810cd735caf1e95f59fb93cd165dc284d321c8cd480->leave($__internal_da1854652584654067427810cd735caf1e95f59fb93cd165dc284d321c8cd480_prof);

        
        $__internal_a3e8fb85bf1a62826fe394ed029300e5c63e6effd96bdcb0d7c3716cf66fc757->leave($__internal_a3e8fb85bf1a62826fe394ed029300e5c63e6effd96bdcb0d7c3716cf66fc757_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
