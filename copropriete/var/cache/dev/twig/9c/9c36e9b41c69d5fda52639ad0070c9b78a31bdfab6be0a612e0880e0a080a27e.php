<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_5e40ba7bce8da452ccc5450423159c2c6483522102fb1ed28f35e3f6dd05ab98 extends Twig_Template
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
        $__internal_ec19f6cd357ff559ac9b3becbffd064367b868e58c600141c458cf9809862afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec19f6cd357ff559ac9b3becbffd064367b868e58c600141c458cf9809862afb->enter($__internal_ec19f6cd357ff559ac9b3becbffd064367b868e58c600141c458cf9809862afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_172ebf52b731f5dd6719ab28797791a8b74435d22e91631a8f8e74d2e2644df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172ebf52b731f5dd6719ab28797791a8b74435d22e91631a8f8e74d2e2644df4->enter($__internal_172ebf52b731f5dd6719ab28797791a8b74435d22e91631a8f8e74d2e2644df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_ec19f6cd357ff559ac9b3becbffd064367b868e58c600141c458cf9809862afb->leave($__internal_ec19f6cd357ff559ac9b3becbffd064367b868e58c600141c458cf9809862afb_prof);

        
        $__internal_172ebf52b731f5dd6719ab28797791a8b74435d22e91631a8f8e74d2e2644df4->leave($__internal_172ebf52b731f5dd6719ab28797791a8b74435d22e91631a8f8e74d2e2644df4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
", "@FOSUser/Group/show_content.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
