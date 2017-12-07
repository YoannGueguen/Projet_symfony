<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_443f6a4c399f6bedf5856d08eac0eea5bdb4340a7da1fe28af3ad2edfe62edaa extends Twig_Template
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
        $__internal_96f5e712090703ada2ada2c4f1432e8ce1b8978e98d7e9ed6311f36f82de20e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f5e712090703ada2ada2c4f1432e8ce1b8978e98d7e9ed6311f36f82de20e6->enter($__internal_96f5e712090703ada2ada2c4f1432e8ce1b8978e98d7e9ed6311f36f82de20e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_8ee103f89f7021119191f2fc7239ca64016a42ae2a5a87a6ebc30f9a0c12cf83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee103f89f7021119191f2fc7239ca64016a42ae2a5a87a6ebc30f9a0c12cf83->enter($__internal_8ee103f89f7021119191f2fc7239ca64016a42ae2a5a87a6ebc30f9a0c12cf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_96f5e712090703ada2ada2c4f1432e8ce1b8978e98d7e9ed6311f36f82de20e6->leave($__internal_96f5e712090703ada2ada2c4f1432e8ce1b8978e98d7e9ed6311f36f82de20e6_prof);

        
        $__internal_8ee103f89f7021119191f2fc7239ca64016a42ae2a5a87a6ebc30f9a0c12cf83->leave($__internal_8ee103f89f7021119191f2fc7239ca64016a42ae2a5a87a6ebc30f9a0c12cf83_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
