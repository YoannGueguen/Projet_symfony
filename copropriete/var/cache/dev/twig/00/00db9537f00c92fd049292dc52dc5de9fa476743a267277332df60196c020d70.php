<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a43f2d0e2a84e4535dc9c913148a45d42a76c52aff428836aba4799bfd7c2c5f extends Twig_Template
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
        $__internal_0551d2286caa508afea8a53551dc28bd1d30c354b1a86e8431aefe222b51ae9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0551d2286caa508afea8a53551dc28bd1d30c354b1a86e8431aefe222b51ae9c->enter($__internal_0551d2286caa508afea8a53551dc28bd1d30c354b1a86e8431aefe222b51ae9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_5798c3445469dfaa022ed6f5e5776c7cbc7680bf762e6d7f389115bbb0706ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5798c3445469dfaa022ed6f5e5776c7cbc7680bf762e6d7f389115bbb0706ba2->enter($__internal_5798c3445469dfaa022ed6f5e5776c7cbc7680bf762e6d7f389115bbb0706ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_0551d2286caa508afea8a53551dc28bd1d30c354b1a86e8431aefe222b51ae9c->leave($__internal_0551d2286caa508afea8a53551dc28bd1d30c354b1a86e8431aefe222b51ae9c_prof);

        
        $__internal_5798c3445469dfaa022ed6f5e5776c7cbc7680bf762e6d7f389115bbb0706ba2->leave($__internal_5798c3445469dfaa022ed6f5e5776c7cbc7680bf762e6d7f389115bbb0706ba2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
