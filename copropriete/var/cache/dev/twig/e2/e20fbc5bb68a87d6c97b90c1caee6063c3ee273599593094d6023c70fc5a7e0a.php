<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_ddbf017ec0233191014ac739582c8b452fa44791c1e6d89b41084e2648ba9f56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_0cc0529ccc245c94d6406f41b95d794afc9f94f2e02904e96a42b89a0d5fea69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cc0529ccc245c94d6406f41b95d794afc9f94f2e02904e96a42b89a0d5fea69->enter($__internal_0cc0529ccc245c94d6406f41b95d794afc9f94f2e02904e96a42b89a0d5fea69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_d030df7fab0eb93be405afbecff3128b0b0bda5b6316e0f361af0eb3388c7d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d030df7fab0eb93be405afbecff3128b0b0bda5b6316e0f361af0eb3388c7d71->enter($__internal_d030df7fab0eb93be405afbecff3128b0b0bda5b6316e0f361af0eb3388c7d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cc0529ccc245c94d6406f41b95d794afc9f94f2e02904e96a42b89a0d5fea69->leave($__internal_0cc0529ccc245c94d6406f41b95d794afc9f94f2e02904e96a42b89a0d5fea69_prof);

        
        $__internal_d030df7fab0eb93be405afbecff3128b0b0bda5b6316e0f361af0eb3388c7d71->leave($__internal_d030df7fab0eb93be405afbecff3128b0b0bda5b6316e0f361af0eb3388c7d71_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1508ec1122e9abc47421d296764b43d056b50ef060776f6d43f15f5e90acb400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1508ec1122e9abc47421d296764b43d056b50ef060776f6d43f15f5e90acb400->enter($__internal_1508ec1122e9abc47421d296764b43d056b50ef060776f6d43f15f5e90acb400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b4d47f28259ce41588638a658804ba64489d9d70e9e138bce864ce26bdf10428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d47f28259ce41588638a658804ba64489d9d70e9e138bce864ce26bdf10428->enter($__internal_b4d47f28259ce41588638a658804ba64489d9d70e9e138bce864ce26bdf10428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b4d47f28259ce41588638a658804ba64489d9d70e9e138bce864ce26bdf10428->leave($__internal_b4d47f28259ce41588638a658804ba64489d9d70e9e138bce864ce26bdf10428_prof);

        
        $__internal_1508ec1122e9abc47421d296764b43d056b50ef060776f6d43f15f5e90acb400->leave($__internal_1508ec1122e9abc47421d296764b43d056b50ef060776f6d43f15f5e90acb400_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
