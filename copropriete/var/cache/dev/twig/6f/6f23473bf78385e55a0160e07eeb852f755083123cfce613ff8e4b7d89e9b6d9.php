<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_0b49bbd730174d3bd26e623678cfe73e8f21dee2ac180de741c4314a36b3db6f extends Twig_Template
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
        $__internal_cb83722eab4cc7fc966f56c721c6356cabdeac0c5a9c00a873e03b9f9c3dd644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb83722eab4cc7fc966f56c721c6356cabdeac0c5a9c00a873e03b9f9c3dd644->enter($__internal_cb83722eab4cc7fc966f56c721c6356cabdeac0c5a9c00a873e03b9f9c3dd644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_0924f1c1e1ab79b712ce9d45a304873bd0867134cef1d10c789a862245190e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0924f1c1e1ab79b712ce9d45a304873bd0867134cef1d10c789a862245190e33->enter($__internal_0924f1c1e1ab79b712ce9d45a304873bd0867134cef1d10c789a862245190e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_cb83722eab4cc7fc966f56c721c6356cabdeac0c5a9c00a873e03b9f9c3dd644->leave($__internal_cb83722eab4cc7fc966f56c721c6356cabdeac0c5a9c00a873e03b9f9c3dd644_prof);

        
        $__internal_0924f1c1e1ab79b712ce9d45a304873bd0867134cef1d10c789a862245190e33->leave($__internal_0924f1c1e1ab79b712ce9d45a304873bd0867134cef1d10c789a862245190e33_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\xampp\\htdocs\\projet\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
