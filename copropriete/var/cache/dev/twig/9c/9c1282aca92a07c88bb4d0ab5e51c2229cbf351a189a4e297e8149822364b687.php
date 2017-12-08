<?php

/* discussion/index.html.twig */
class __TwigTemplate_c445e4a13da137dab3a89ddf461ec644b65a4e301a37b58293f8038c42dc56f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "discussion/index.html.twig", 1);
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
        $__internal_e26d7dc9fcf49e69c45fa00ac9047c4c354426e1e8bee6b3bc9f78a02116e839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e26d7dc9fcf49e69c45fa00ac9047c4c354426e1e8bee6b3bc9f78a02116e839->enter($__internal_e26d7dc9fcf49e69c45fa00ac9047c4c354426e1e8bee6b3bc9f78a02116e839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "discussion/index.html.twig"));

        $__internal_b4e017da628b338a5731ab9e340b90c225fbe17d008b722b07d3384a5fa66203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e017da628b338a5731ab9e340b90c225fbe17d008b722b07d3384a5fa66203->enter($__internal_b4e017da628b338a5731ab9e340b90c225fbe17d008b722b07d3384a5fa66203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "discussion/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e26d7dc9fcf49e69c45fa00ac9047c4c354426e1e8bee6b3bc9f78a02116e839->leave($__internal_e26d7dc9fcf49e69c45fa00ac9047c4c354426e1e8bee6b3bc9f78a02116e839_prof);

        
        $__internal_b4e017da628b338a5731ab9e340b90c225fbe17d008b722b07d3384a5fa66203->leave($__internal_b4e017da628b338a5731ab9e340b90c225fbe17d008b722b07d3384a5fa66203_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaf96b86dd91e4903bc754e4614542574edbc66c47554feb8d1ae43d19f65ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf96b86dd91e4903bc754e4614542574edbc66c47554feb8d1ae43d19f65ec8->enter($__internal_aaf96b86dd91e4903bc754e4614542574edbc66c47554feb8d1ae43d19f65ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_484877a25778def6bc9bbc37176f34ad362b15bc02c305d0800afffae8c21d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484877a25778def6bc9bbc37176f34ad362b15bc02c305d0800afffae8c21d8b->enter($__internal_484877a25778def6bc9bbc37176f34ad362b15bc02c305d0800afffae8c21d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Discussions list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Date_debut</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["discussions"]) || array_key_exists("discussions", $context) ? $context["discussions"] : (function () { throw new Twig_Error_Runtime('Variable "discussions" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["discussion"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discussion_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["discussion"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["discussion"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["discussion"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["discussion"], "datedebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["discussion"], "datedebut", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["discussion"], "type", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discussion_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["discussion"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discussion_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["discussion"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discussion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discussion_new");
        echo "\">Create a new discussion</a>
        </li>
    </ul>
";
        
        $__internal_484877a25778def6bc9bbc37176f34ad362b15bc02c305d0800afffae8c21d8b->leave($__internal_484877a25778def6bc9bbc37176f34ad362b15bc02c305d0800afffae8c21d8b_prof);

        
        $__internal_aaf96b86dd91e4903bc754e4614542574edbc66c47554feb8d1ae43d19f65ec8->leave($__internal_aaf96b86dd91e4903bc754e4614542574edbc66c47554feb8d1ae43d19f65ec8_prof);

    }

    public function getTemplateName()
    {
        return "discussion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  112 => 35,  100 => 29,  94 => 26,  87 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Discussions list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Date_debut</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for discussion in discussions %}
            <tr>
                <td><a href=\"{{ path('discussion_show', { 'id': discussion.id }) }}\">{{ discussion.id }}</a></td>
                <td>{{ discussion.nom }}</td>
                <td>{% if discussion.datedebut %}{{ discussion.datedebut|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ discussion.type }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('discussion_show', { 'id': discussion.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('discussion_edit', { 'id': discussion.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('discussion_new') }}\">Create a new discussion</a>
        </li>
    </ul>
{% endblock %}
", "discussion/index.html.twig", "C:\\xampp\\htdocs\\projet\\copropriete\\app\\Resources\\views\\discussion\\index.html.twig");
    }
}
