<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_ce9bbc7f0cd691ce5a19c83061f8ddfb1fd57f2ea4ce95c21dc7dd944066a695 extends Twig_Template
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
        $__internal_2996ec87ca362cd110b1c50d4278f5799b41e45dbf80ce94f6054bd5ccb82c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2996ec87ca362cd110b1c50d4278f5799b41e45dbf80ce94f6054bd5ccb82c91->enter($__internal_2996ec87ca362cd110b1c50d4278f5799b41e45dbf80ce94f6054bd5ccb82c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_79192cf3054357fcc14c606f4e572c0f0b17a48891cdd97a0eebc065294e2b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79192cf3054357fcc14c606f4e572c0f0b17a48891cdd97a0eebc065294e2b19->enter($__internal_79192cf3054357fcc14c606f4e572c0f0b17a48891cdd97a0eebc065294e2b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_2996ec87ca362cd110b1c50d4278f5799b41e45dbf80ce94f6054bd5ccb82c91->leave($__internal_2996ec87ca362cd110b1c50d4278f5799b41e45dbf80ce94f6054bd5ccb82c91_prof);

        
        $__internal_79192cf3054357fcc14c606f4e572c0f0b17a48891cdd97a0eebc065294e2b19->leave($__internal_79192cf3054357fcc14c606f4e572c0f0b17a48891cdd97a0eebc065294e2b19_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
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
", "FOSUserBundle:Resetting:request_content.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
