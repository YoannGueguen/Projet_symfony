<?php

/* AppBundle:Security:login.html.twig */
class __TwigTemplate_0b8535d1c3b0c54b383cc3a286418b1dda904450dff9af7e8e63c8184757eea6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8e87bc98fb8a1e34382f40358dd9edca77fc522d1ca750569ff55dd750962ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e87bc98fb8a1e34382f40358dd9edca77fc522d1ca750569ff55dd750962ae->enter($__internal_f8e87bc98fb8a1e34382f40358dd9edca77fc522d1ca750569ff55dd750962ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:login.html.twig"));

        $__internal_1a0c317d446801d4a967ff96a78cf132cfd5cb14fe5d858a8dc3f183cf59be28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0c317d446801d4a967ff96a78cf132cfd5cb14fe5d858a8dc3f183cf59be28->enter($__internal_1a0c317d446801d4a967ff96a78cf132cfd5cb14fe5d858a8dc3f183cf59be28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8e87bc98fb8a1e34382f40358dd9edca77fc522d1ca750569ff55dd750962ae->leave($__internal_f8e87bc98fb8a1e34382f40358dd9edca77fc522d1ca750569ff55dd750962ae_prof);

        
        $__internal_1a0c317d446801d4a967ff96a78cf132cfd5cb14fe5d858a8dc3f183cf59be28->leave($__internal_1a0c317d446801d4a967ff96a78cf132cfd5cb14fe5d858a8dc3f183cf59be28_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fcabfd5e9b6c1a61d078338fe5831960c6053138de1351b35e3d4240ad53997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fcabfd5e9b6c1a61d078338fe5831960c6053138de1351b35e3d4240ad53997->enter($__internal_2fcabfd5e9b6c1a61d078338fe5831960c6053138de1351b35e3d4240ad53997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71d6198a23120c6236f0db75d5fc45022e7af441e9cbb0da842ecdaa8acb1066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d6198a23120c6236f0db75d5fc45022e7af441e9cbb0da842ecdaa8acb1066->enter($__internal_71d6198a23120c6236f0db75d5fc45022e7af441e9cbb0da842ecdaa8acb1066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">

            <form class=\"form-horizontal col-md-4 col-md-offset-4\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <h1>Login</h1>
                ";
        // line 10
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->getSourceContext()); })())) {
            // line 11
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 13
        echo "                ";
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 13, $this->getSourceContext()); })())) {
            // line 14
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
                ";
        }
        // line 16
        echo "                <div class=\"form-group\">
                    <label>Username</label>
                    <div class=\"input-group \">
                        <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span></span>
                        <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" />
                    </div>
                </div>

                <div class=\"form-group\">
                    <label>Password</label>
                    <div class=\"input-group \">
                        <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span></span>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4 col-md-offset-4\">
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <button type=\"submit\" id=\"_submit\" name=\"_submit\" >";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


";
        
        $__internal_71d6198a23120c6236f0db75d5fc45022e7af441e9cbb0da842ecdaa8acb1066->leave($__internal_71d6198a23120c6236f0db75d5fc45022e7af441e9cbb0da842ecdaa8acb1066_prof);

        
        $__internal_2fcabfd5e9b6c1a61d078338fe5831960c6053138de1351b35e3d4240ad53997->leave($__internal_2fcabfd5e9b6c1a61d078338fe5831960c6053138de1351b35e3d4240ad53997_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 35,  77 => 16,  71 => 14,  68 => 13,  62 => 11,  60 => 10,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container\">
        <div class=\"row\">

            <form class=\"form-horizontal col-md-4 col-md-offset-4\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                <h1>Login</h1>
                {% if error %}
                    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
                {% if csrf_token %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                {% endif %}
                <div class=\"form-group\">
                    <label>Username</label>
                    <div class=\"input-group \">
                        <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span></span>
                        <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" />
                    </div>
                </div>

                <div class=\"form-group\">
                    <label>Password</label>
                    <div class=\"input-group \">
                        <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span></span>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4 col-md-offset-4\">
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <button type=\"submit\" id=\"_submit\" name=\"_submit\" >{{ 'security.login.submit'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


{% endblock %}", "AppBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\src\\AppBundle/Resources/views/Security/login.html.twig");
    }
}
