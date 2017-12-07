<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_fe2aa11f6d80c70765b799056ed01742d417b32342515e51325a6e1a8b40c761 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_deb212d3f5c065906e667de863c5ab3e91e3e0a98bc6f992ce3a39d338380515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb212d3f5c065906e667de863c5ab3e91e3e0a98bc6f992ce3a39d338380515->enter($__internal_deb212d3f5c065906e667de863c5ab3e91e3e0a98bc6f992ce3a39d338380515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_ae5131f92b854e7c1d02aa9b75b9ee812ff15ffc3a532b74a7d56966d036bdd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5131f92b854e7c1d02aa9b75b9ee812ff15ffc3a532b74a7d56966d036bdd6->enter($__internal_ae5131f92b854e7c1d02aa9b75b9ee812ff15ffc3a532b74a7d56966d036bdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_deb212d3f5c065906e667de863c5ab3e91e3e0a98bc6f992ce3a39d338380515->leave($__internal_deb212d3f5c065906e667de863c5ab3e91e3e0a98bc6f992ce3a39d338380515_prof);

        
        $__internal_ae5131f92b854e7c1d02aa9b75b9ee812ff15ffc3a532b74a7d56966d036bdd6->leave($__internal_ae5131f92b854e7c1d02aa9b75b9ee812ff15ffc3a532b74a7d56966d036bdd6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1d3704764684c227de65a87e7e0b30fedb060cf652f51fe575651e6193c73680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3704764684c227de65a87e7e0b30fedb060cf652f51fe575651e6193c73680->enter($__internal_1d3704764684c227de65a87e7e0b30fedb060cf652f51fe575651e6193c73680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_12506eaa32a22353f29b68b7c7e543376943ced55712ffa2a8d29acf325232b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12506eaa32a22353f29b68b7c7e543376943ced55712ffa2a8d29acf325232b3->enter($__internal_12506eaa32a22353f29b68b7c7e543376943ced55712ffa2a8d29acf325232b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_12506eaa32a22353f29b68b7c7e543376943ced55712ffa2a8d29acf325232b3->leave($__internal_12506eaa32a22353f29b68b7c7e543376943ced55712ffa2a8d29acf325232b3_prof);

        
        $__internal_1d3704764684c227de65a87e7e0b30fedb060cf652f51fe575651e6193c73680->leave($__internal_1d3704764684c227de65a87e7e0b30fedb060cf652f51fe575651e6193c73680_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cbccc226bf7b6780ee0b1837a51f26162787cbcb04a70751300173c4b314eb1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbccc226bf7b6780ee0b1837a51f26162787cbcb04a70751300173c4b314eb1e->enter($__internal_cbccc226bf7b6780ee0b1837a51f26162787cbcb04a70751300173c4b314eb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_7a05562b20b39fd250904c3a83cffcba73e76c361ccc72a27a2e40f43bfea499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a05562b20b39fd250904c3a83cffcba73e76c361ccc72a27a2e40f43bfea499->enter($__internal_7a05562b20b39fd250904c3a83cffcba73e76c361ccc72a27a2e40f43bfea499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_7a05562b20b39fd250904c3a83cffcba73e76c361ccc72a27a2e40f43bfea499->leave($__internal_7a05562b20b39fd250904c3a83cffcba73e76c361ccc72a27a2e40f43bfea499_prof);

        
        $__internal_cbccc226bf7b6780ee0b1837a51f26162787cbcb04a70751300173c4b314eb1e->leave($__internal_cbccc226bf7b6780ee0b1837a51f26162787cbcb04a70751300173c4b314eb1e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0863690a40e3fefea2ba8783af1078ea4c962ff0d76327bf5832ea96cdcbda55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0863690a40e3fefea2ba8783af1078ea4c962ff0d76327bf5832ea96cdcbda55->enter($__internal_0863690a40e3fefea2ba8783af1078ea4c962ff0d76327bf5832ea96cdcbda55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_819c29a7aee5b01130a470d6bb2eb244bd75ea88405fc7dcea1383bf4f2d1b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819c29a7aee5b01130a470d6bb2eb244bd75ea88405fc7dcea1383bf4f2d1b05->enter($__internal_819c29a7aee5b01130a470d6bb2eb244bd75ea88405fc7dcea1383bf4f2d1b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_819c29a7aee5b01130a470d6bb2eb244bd75ea88405fc7dcea1383bf4f2d1b05->leave($__internal_819c29a7aee5b01130a470d6bb2eb244bd75ea88405fc7dcea1383bf4f2d1b05_prof);

        
        $__internal_0863690a40e3fefea2ba8783af1078ea4c962ff0d76327bf5832ea96cdcbda55->leave($__internal_0863690a40e3fefea2ba8783af1078ea4c962ff0d76327bf5832ea96cdcbda55_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
