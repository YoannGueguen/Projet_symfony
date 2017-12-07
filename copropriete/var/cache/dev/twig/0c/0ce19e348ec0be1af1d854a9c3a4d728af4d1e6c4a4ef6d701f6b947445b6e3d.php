<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d3b05c5963201c9e56e99730e6389dd766089796f54a34af144dfc9e775820d5 extends Twig_Template
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
        $__internal_41b5d8abea4bab733fd2bbac2df7ac5c1001467051134720f0d71b60b87a2e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b5d8abea4bab733fd2bbac2df7ac5c1001467051134720f0d71b60b87a2e25->enter($__internal_41b5d8abea4bab733fd2bbac2df7ac5c1001467051134720f0d71b60b87a2e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_b126d9fe61096ed8fb63fedd6903493cbedff30ea38f3b8ea9617c95dbf02a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b126d9fe61096ed8fb63fedd6903493cbedff30ea38f3b8ea9617c95dbf02a1f->enter($__internal_b126d9fe61096ed8fb63fedd6903493cbedff30ea38f3b8ea9617c95dbf02a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_41b5d8abea4bab733fd2bbac2df7ac5c1001467051134720f0d71b60b87a2e25->leave($__internal_41b5d8abea4bab733fd2bbac2df7ac5c1001467051134720f0d71b60b87a2e25_prof);

        
        $__internal_b126d9fe61096ed8fb63fedd6903493cbedff30ea38f3b8ea9617c95dbf02a1f->leave($__internal_b126d9fe61096ed8fb63fedd6903493cbedff30ea38f3b8ea9617c95dbf02a1f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
