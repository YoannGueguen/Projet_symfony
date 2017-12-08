<?php

/* projet/index.html.twig */
class __TwigTemplate_fe9c9a5d19314bf04b56a22c7347e2ce815f066fb247545b8733d7e230927b38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projet/index.html.twig", 1);
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
        $__internal_b9087aa73a201f8fa573f51f151a474b05f8d7230f03e7d509b6bbd8f0e2b396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9087aa73a201f8fa573f51f151a474b05f8d7230f03e7d509b6bbd8f0e2b396->enter($__internal_b9087aa73a201f8fa573f51f151a474b05f8d7230f03e7d509b6bbd8f0e2b396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $__internal_ce6fe5797757db820c4d2a6af84c53174b0c9ba313b41a98e93f224992e145d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6fe5797757db820c4d2a6af84c53174b0c9ba313b41a98e93f224992e145d8->enter($__internal_ce6fe5797757db820c4d2a6af84c53174b0c9ba313b41a98e93f224992e145d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9087aa73a201f8fa573f51f151a474b05f8d7230f03e7d509b6bbd8f0e2b396->leave($__internal_b9087aa73a201f8fa573f51f151a474b05f8d7230f03e7d509b6bbd8f0e2b396_prof);

        
        $__internal_ce6fe5797757db820c4d2a6af84c53174b0c9ba313b41a98e93f224992e145d8->leave($__internal_ce6fe5797757db820c4d2a6af84c53174b0c9ba313b41a98e93f224992e145d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_32d5d80deb988f8f7f40e2e72db7753360f171ac7371d8a50c7f08ce7064e6bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d5d80deb988f8f7f40e2e72db7753360f171ac7371d8a50c7f08ce7064e6bd->enter($__internal_32d5d80deb988f8f7f40e2e72db7753360f171ac7371d8a50c7f08ce7064e6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddea7964105080eebf22b20cdca573b3828fcb05a57af11b2acb31d9a136c866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddea7964105080eebf22b20cdca573b3828fcb05a57af11b2acb31d9a136c866->enter($__internal_ddea7964105080eebf22b20cdca573b3828fcb05a57af11b2acb31d9a136c866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Projets list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Statut</th>
                <th>Date_debut</th>
                <th>Date_fin</th>
                <th>Discu_id</th>
                <th>User_id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new Twig_Error_Runtime('Variable "projets" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["projet"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["projet"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["projet"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["projet"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["projet"], "statut", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["projet"], "datedebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["projet"], "datedebut", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["projet"], "datefin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["projet"], "datefin", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["projet"], "discuid", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["projet"], "userid", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["projet"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["projet"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_new");
        echo "\">Create a new projet</a>
        </li>
    </ul>
";
        
        $__internal_ddea7964105080eebf22b20cdca573b3828fcb05a57af11b2acb31d9a136c866->leave($__internal_ddea7964105080eebf22b20cdca573b3828fcb05a57af11b2acb31d9a136c866_prof);

        
        $__internal_32d5d80deb988f8f7f40e2e72db7753360f171ac7371d8a50c7f08ce7064e6bd->leave($__internal_32d5d80deb988f8f7f40e2e72db7753360f171ac7371d8a50c7f08ce7064e6bd_prof);

    }

    public function getTemplateName()
    {
        return "projet/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 48,  134 => 43,  122 => 37,  116 => 34,  109 => 30,  105 => 29,  99 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  75 => 23,  72 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Projets list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Statut</th>
                <th>Date_debut</th>
                <th>Date_fin</th>
                <th>Discu_id</th>
                <th>User_id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for projet in projets %}
            <tr>
                <td><a href=\"{{ path('projet_show', { 'id': projet.id }) }}\">{{ projet.id }}</a></td>
                <td>{{ projet.titre }}</td>
                <td>{{ projet.description }}</td>
                <td>{{ projet.statut }}</td>
                <td>{% if projet.datedebut %}{{ projet.datedebut|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if projet.datefin %}{{ projet.datefin|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ projet.discuid }}</td>
                <td>{{ projet.userid }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('projet_show', { 'id': projet.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('projet_edit', { 'id': projet.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('projet_new') }}\">Create a new projet</a>
        </li>
    </ul>
{% endblock %}
", "projet/index.html.twig", "C:\\xampp\\htdocs\\projet\\copropriete\\app\\Resources\\views\\projet\\index.html.twig");
    }
}
