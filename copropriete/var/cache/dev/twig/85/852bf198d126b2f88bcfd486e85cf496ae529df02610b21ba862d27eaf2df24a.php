<?php

/* @App/Security/login.html.twig */
class __TwigTemplate_430ac9431e40a0467bf34a66e4790ef7c4f426af380d48f6884317e8c401344d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Security/login.html.twig", 1);
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
        $__internal_e141e43f0d7dba99299fd2699819a500ee81efde7a52850755e17371a464dafc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e141e43f0d7dba99299fd2699819a500ee81efde7a52850755e17371a464dafc->enter($__internal_e141e43f0d7dba99299fd2699819a500ee81efde7a52850755e17371a464dafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Security/login.html.twig"));

        $__internal_683a70f30f707f6d595456ecadf57785f889554602c7c74914be04052cfb035a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683a70f30f707f6d595456ecadf57785f889554602c7c74914be04052cfb035a->enter($__internal_683a70f30f707f6d595456ecadf57785f889554602c7c74914be04052cfb035a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e141e43f0d7dba99299fd2699819a500ee81efde7a52850755e17371a464dafc->leave($__internal_e141e43f0d7dba99299fd2699819a500ee81efde7a52850755e17371a464dafc_prof);

        
        $__internal_683a70f30f707f6d595456ecadf57785f889554602c7c74914be04052cfb035a->leave($__internal_683a70f30f707f6d595456ecadf57785f889554602c7c74914be04052cfb035a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_83681f03f973d877f1345d83639266a9a49cec981a68631db1bae4c348518b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83681f03f973d877f1345d83639266a9a49cec981a68631db1bae4c348518b02->enter($__internal_83681f03f973d877f1345d83639266a9a49cec981a68631db1bae4c348518b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6dbfff262ff094c40194bb2bab1707b55f12187f0c4da122d2dd138d7d2cce83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dbfff262ff094c40194bb2bab1707b55f12187f0c4da122d2dd138d7d2cce83->enter($__internal_6dbfff262ff094c40194bb2bab1707b55f12187f0c4da122d2dd138d7d2cce83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6dbfff262ff094c40194bb2bab1707b55f12187f0c4da122d2dd138d7d2cce83->leave($__internal_6dbfff262ff094c40194bb2bab1707b55f12187f0c4da122d2dd138d7d2cce83_prof);

        
        $__internal_83681f03f973d877f1345d83639266a9a49cec981a68631db1bae4c348518b02->leave($__internal_83681f03f973d877f1345d83639266a9a49cec981a68631db1bae4c348518b02_prof);

    }

    public function getTemplateName()
    {
        return "@App/Security/login.html.twig";
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


{% endblock %}", "@App/Security/login.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\src\\AppBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
