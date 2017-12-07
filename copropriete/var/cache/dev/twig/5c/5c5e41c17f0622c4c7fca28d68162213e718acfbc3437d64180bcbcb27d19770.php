<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3edc48360aed665cde3e869e6073c322abba9cedb4538d5c73a7265d0bce37d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dea8aae3222959aae0884fbe94a8bf6616ecd3a6ef73077a6651411c37436acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea8aae3222959aae0884fbe94a8bf6616ecd3a6ef73077a6651411c37436acf->enter($__internal_dea8aae3222959aae0884fbe94a8bf6616ecd3a6ef73077a6651411c37436acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_30114db7fb54338265c389ca8e44f089901ccfd51ed28af369f312e6d72274ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30114db7fb54338265c389ca8e44f089901ccfd51ed28af369f312e6d72274ee->enter($__internal_30114db7fb54338265c389ca8e44f089901ccfd51ed28af369f312e6d72274ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dea8aae3222959aae0884fbe94a8bf6616ecd3a6ef73077a6651411c37436acf->leave($__internal_dea8aae3222959aae0884fbe94a8bf6616ecd3a6ef73077a6651411c37436acf_prof);

        
        $__internal_30114db7fb54338265c389ca8e44f089901ccfd51ed28af369f312e6d72274ee->leave($__internal_30114db7fb54338265c389ca8e44f089901ccfd51ed28af369f312e6d72274ee_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fde4d73fa6d947f3ea5d29d605bd502a69dd6d15a4c1e86976289c5049950be2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde4d73fa6d947f3ea5d29d605bd502a69dd6d15a4c1e86976289c5049950be2->enter($__internal_fde4d73fa6d947f3ea5d29d605bd502a69dd6d15a4c1e86976289c5049950be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c5f7c9296f0517b5f6ec572b40efc1b2e8c2abe4bdacdc0d6b377db12d9d02d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f7c9296f0517b5f6ec572b40efc1b2e8c2abe4bdacdc0d6b377db12d9d02d4->enter($__internal_c5f7c9296f0517b5f6ec572b40efc1b2e8c2abe4bdacdc0d6b377db12d9d02d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_c5f7c9296f0517b5f6ec572b40efc1b2e8c2abe4bdacdc0d6b377db12d9d02d4->leave($__internal_c5f7c9296f0517b5f6ec572b40efc1b2e8c2abe4bdacdc0d6b377db12d9d02d4_prof);

        
        $__internal_fde4d73fa6d947f3ea5d29d605bd502a69dd6d15a4c1e86976289c5049950be2->leave($__internal_fde4d73fa6d947f3ea5d29d605bd502a69dd6d15a4c1e86976289c5049950be2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
