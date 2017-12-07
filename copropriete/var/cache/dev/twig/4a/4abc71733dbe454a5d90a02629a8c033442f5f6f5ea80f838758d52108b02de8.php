<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_429271b61d9f422b878964e1fb5958e0fb174f8831b0f950d2d4844e14f9e08c extends Twig_Template
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
        $__internal_acf9598b47c4ace571247612db8b384dde7db42e24b153dfa4aeaca33703628a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf9598b47c4ace571247612db8b384dde7db42e24b153dfa4aeaca33703628a->enter($__internal_acf9598b47c4ace571247612db8b384dde7db42e24b153dfa4aeaca33703628a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_7f2da6214cf93a16cf352a0e4c514ded7d8f79bcb27abd6933fa519affa02d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2da6214cf93a16cf352a0e4c514ded7d8f79bcb27abd6933fa519affa02d6e->enter($__internal_7f2da6214cf93a16cf352a0e4c514ded7d8f79bcb27abd6933fa519affa02d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_acf9598b47c4ace571247612db8b384dde7db42e24b153dfa4aeaca33703628a->leave($__internal_acf9598b47c4ace571247612db8b384dde7db42e24b153dfa4aeaca33703628a_prof);

        
        $__internal_7f2da6214cf93a16cf352a0e4c514ded7d8f79bcb27abd6933fa519affa02d6e->leave($__internal_7f2da6214cf93a16cf352a0e4c514ded7d8f79bcb27abd6933fa519affa02d6e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "@FOSUser/Resetting/request_content.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request_content.html.twig");
    }
}
