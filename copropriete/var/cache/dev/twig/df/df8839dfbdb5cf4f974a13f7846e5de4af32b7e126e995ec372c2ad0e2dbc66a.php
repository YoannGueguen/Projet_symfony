<?php

/* user/index.html.twig */
class __TwigTemplate_7e859da7238c5150d9bab6ecf54e07fe46bc61e0531dc3d0331fb2ffe6b0c399 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_42d554b59087b7c9c0577b71554c7b6c6bc0cb3657570e044131ee924097b574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42d554b59087b7c9c0577b71554c7b6c6bc0cb3657570e044131ee924097b574->enter($__internal_42d554b59087b7c9c0577b71554c7b6c6bc0cb3657570e044131ee924097b574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_7dd4b929ecb923669035e9eb90f05dc1a69183a2ec5ac795702b03e66bdd097f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd4b929ecb923669035e9eb90f05dc1a69183a2ec5ac795702b03e66bdd097f->enter($__internal_7dd4b929ecb923669035e9eb90f05dc1a69183a2ec5ac795702b03e66bdd097f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42d554b59087b7c9c0577b71554c7b6c6bc0cb3657570e044131ee924097b574->leave($__internal_42d554b59087b7c9c0577b71554c7b6c6bc0cb3657570e044131ee924097b574_prof);

        
        $__internal_7dd4b929ecb923669035e9eb90f05dc1a69183a2ec5ac795702b03e66bdd097f->leave($__internal_7dd4b929ecb923669035e9eb90f05dc1a69183a2ec5ac795702b03e66bdd097f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e050c9f4ea8b89b173d9149656feb76682de04202ed9c9fbc90665ef0e88a5d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e050c9f4ea8b89b173d9149656feb76682de04202ed9c9fbc90665ef0e88a5d7->enter($__internal_e050c9f4ea8b89b173d9149656feb76682de04202ed9c9fbc90665ef0e88a5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b73e8008d3d63b52dae4e7da3855f335077f4c0acdf449fa8c40bef7123ee361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73e8008d3d63b52dae4e7da3855f335077f4c0acdf449fa8c40bef7123ee361->enter($__internal_b73e8008d3d63b52dae4e7da3855f335077f4c0acdf449fa8c40bef7123ee361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 14, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_b73e8008d3d63b52dae4e7da3855f335077f4c0acdf449fa8c40bef7123ee361->leave($__internal_b73e8008d3d63b52dae4e7da3855f335077f4c0acdf449fa8c40bef7123ee361_prof);

        
        $__internal_e050c9f4ea8b89b173d9149656feb76682de04202ed9c9fbc90665ef0e88a5d7->leave($__internal_e050c9f4ea8b89b173d9149656feb76682de04202ed9c9fbc90665ef0e88a5d7_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  95 => 29,  83 => 23,  77 => 20,  68 => 16,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", "user/index.html.twig", "C:\\xampp\\htdocs\\projet\\copropriete\\app\\Resources\\views\\user\\index.html.twig");
    }
}
