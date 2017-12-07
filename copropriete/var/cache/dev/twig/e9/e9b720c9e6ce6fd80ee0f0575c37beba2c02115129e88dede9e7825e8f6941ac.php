<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_a6caa52b6fc59bf61b9506afbf1e1287bb9ccd77db09bf469da7e50a57096815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_4288d60d441bbe0eb99fdf94e32ef0b31413ae4bbe5df28eb8cc2d032f1aa568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4288d60d441bbe0eb99fdf94e32ef0b31413ae4bbe5df28eb8cc2d032f1aa568->enter($__internal_4288d60d441bbe0eb99fdf94e32ef0b31413ae4bbe5df28eb8cc2d032f1aa568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_1b7631e638b20800225a0198a06a7f3463289f79290647a730a244062032960b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7631e638b20800225a0198a06a7f3463289f79290647a730a244062032960b->enter($__internal_1b7631e638b20800225a0198a06a7f3463289f79290647a730a244062032960b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4288d60d441bbe0eb99fdf94e32ef0b31413ae4bbe5df28eb8cc2d032f1aa568->leave($__internal_4288d60d441bbe0eb99fdf94e32ef0b31413ae4bbe5df28eb8cc2d032f1aa568_prof);

        
        $__internal_1b7631e638b20800225a0198a06a7f3463289f79290647a730a244062032960b->leave($__internal_1b7631e638b20800225a0198a06a7f3463289f79290647a730a244062032960b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_513799546f70c740b1f86f7f536e43a17c56fe71f28ca6a17965a73a5a2aed4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_513799546f70c740b1f86f7f536e43a17c56fe71f28ca6a17965a73a5a2aed4d->enter($__internal_513799546f70c740b1f86f7f536e43a17c56fe71f28ca6a17965a73a5a2aed4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_982135ca9cfe54f4b00162020c676575e79f059c0eb7a6a06afad1126a9406e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982135ca9cfe54f4b00162020c676575e79f059c0eb7a6a06afad1126a9406e9->enter($__internal_982135ca9cfe54f4b00162020c676575e79f059c0eb7a6a06afad1126a9406e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_982135ca9cfe54f4b00162020c676575e79f059c0eb7a6a06afad1126a9406e9->leave($__internal_982135ca9cfe54f4b00162020c676575e79f059c0eb7a6a06afad1126a9406e9_prof);

        
        $__internal_513799546f70c740b1f86f7f536e43a17c56fe71f28ca6a17965a73a5a2aed4d->leave($__internal_513799546f70c740b1f86f7f536e43a17c56fe71f28ca6a17965a73a5a2aed4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
