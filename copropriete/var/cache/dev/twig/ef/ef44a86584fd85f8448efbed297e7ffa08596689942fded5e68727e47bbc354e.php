<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_6d5768e572a31915ee256f2dff3d45e2eb1e1320fcb8dbe697357c8edc713c7d extends Twig_Template
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
        $__internal_8b63ec436f09eddbed4c995520d049278a8426398fc734e6f89c5bb0139d611b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b63ec436f09eddbed4c995520d049278a8426398fc734e6f89c5bb0139d611b->enter($__internal_8b63ec436f09eddbed4c995520d049278a8426398fc734e6f89c5bb0139d611b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_553ff4ef255748e49325d580ba19235b45bef996b5f826577bc82612a5ed7ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553ff4ef255748e49325d580ba19235b45bef996b5f826577bc82612a5ed7ca6->enter($__internal_553ff4ef255748e49325d580ba19235b45bef996b5f826577bc82612a5ed7ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8b63ec436f09eddbed4c995520d049278a8426398fc734e6f89c5bb0139d611b->leave($__internal_8b63ec436f09eddbed4c995520d049278a8426398fc734e6f89c5bb0139d611b_prof);

        
        $__internal_553ff4ef255748e49325d580ba19235b45bef996b5f826577bc82612a5ed7ca6->leave($__internal_553ff4ef255748e49325d580ba19235b45bef996b5f826577bc82612a5ed7ca6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3373e5034c4ad94eddfcba5946e6ca3b581fc8ee183f502f5c7b303228eb97e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3373e5034c4ad94eddfcba5946e6ca3b581fc8ee183f502f5c7b303228eb97e5->enter($__internal_3373e5034c4ad94eddfcba5946e6ca3b581fc8ee183f502f5c7b303228eb97e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_536c5f9cd94c1fd3ef332c9ab72ea5651576d43c29218e53499bea68b36bac36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536c5f9cd94c1fd3ef332c9ab72ea5651576d43c29218e53499bea68b36bac36->enter($__internal_536c5f9cd94c1fd3ef332c9ab72ea5651576d43c29218e53499bea68b36bac36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_536c5f9cd94c1fd3ef332c9ab72ea5651576d43c29218e53499bea68b36bac36->leave($__internal_536c5f9cd94c1fd3ef332c9ab72ea5651576d43c29218e53499bea68b36bac36_prof);

        
        $__internal_3373e5034c4ad94eddfcba5946e6ca3b581fc8ee183f502f5c7b303228eb97e5->leave($__internal_3373e5034c4ad94eddfcba5946e6ca3b581fc8ee183f502f5c7b303228eb97e5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7e8f298b093d8dbdd6faec29221fa928d166e6cd227a881f7959f20f268dcf10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8f298b093d8dbdd6faec29221fa928d166e6cd227a881f7959f20f268dcf10->enter($__internal_7e8f298b093d8dbdd6faec29221fa928d166e6cd227a881f7959f20f268dcf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_0eef463bfe0238be690b9f2f8a7c8b4bca0e59a159b9251e9a536e60185cf423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eef463bfe0238be690b9f2f8a7c8b4bca0e59a159b9251e9a536e60185cf423->enter($__internal_0eef463bfe0238be690b9f2f8a7c8b4bca0e59a159b9251e9a536e60185cf423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_0eef463bfe0238be690b9f2f8a7c8b4bca0e59a159b9251e9a536e60185cf423->leave($__internal_0eef463bfe0238be690b9f2f8a7c8b4bca0e59a159b9251e9a536e60185cf423_prof);

        
        $__internal_7e8f298b093d8dbdd6faec29221fa928d166e6cd227a881f7959f20f268dcf10->leave($__internal_7e8f298b093d8dbdd6faec29221fa928d166e6cd227a881f7959f20f268dcf10_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fc6b21cea8620f54db10404c7f37fd9c7d66fc4c41207e9c3e2f42a99cf46a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6b21cea8620f54db10404c7f37fd9c7d66fc4c41207e9c3e2f42a99cf46a87->enter($__internal_fc6b21cea8620f54db10404c7f37fd9c7d66fc4c41207e9c3e2f42a99cf46a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_41e1d52f6015bdb9712af8cadc4a41430e9b5387379a207f310691248077ac44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e1d52f6015bdb9712af8cadc4a41430e9b5387379a207f310691248077ac44->enter($__internal_41e1d52f6015bdb9712af8cadc4a41430e9b5387379a207f310691248077ac44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_41e1d52f6015bdb9712af8cadc4a41430e9b5387379a207f310691248077ac44->leave($__internal_41e1d52f6015bdb9712af8cadc4a41430e9b5387379a207f310691248077ac44_prof);

        
        $__internal_fc6b21cea8620f54db10404c7f37fd9c7d66fc4c41207e9c3e2f42a99cf46a87->leave($__internal_fc6b21cea8620f54db10404c7f37fd9c7d66fc4c41207e9c3e2f42a99cf46a87_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
