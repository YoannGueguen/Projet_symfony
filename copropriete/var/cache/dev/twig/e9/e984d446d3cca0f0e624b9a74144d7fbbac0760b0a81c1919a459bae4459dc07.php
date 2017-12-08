<?php

/* charge/index.html.twig */
class __TwigTemplate_f01170b3ef77ab7206a9dd15a786ebf4ceae97083afdb1ce58318a584e2246c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "charge/index.html.twig", 1);
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
        $__internal_97bee8c0ae362e2e316275542033164dbd50afae0d5bdaa2ed930916c359c773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97bee8c0ae362e2e316275542033164dbd50afae0d5bdaa2ed930916c359c773->enter($__internal_97bee8c0ae362e2e316275542033164dbd50afae0d5bdaa2ed930916c359c773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "charge/index.html.twig"));

        $__internal_50d8e4760650867f78bc051f9cd8f20bdbd9338984d821c0c7d9b3fb68663ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d8e4760650867f78bc051f9cd8f20bdbd9338984d821c0c7d9b3fb68663ad5->enter($__internal_50d8e4760650867f78bc051f9cd8f20bdbd9338984d821c0c7d9b3fb68663ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "charge/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97bee8c0ae362e2e316275542033164dbd50afae0d5bdaa2ed930916c359c773->leave($__internal_97bee8c0ae362e2e316275542033164dbd50afae0d5bdaa2ed930916c359c773_prof);

        
        $__internal_50d8e4760650867f78bc051f9cd8f20bdbd9338984d821c0c7d9b3fb68663ad5->leave($__internal_50d8e4760650867f78bc051f9cd8f20bdbd9338984d821c0c7d9b3fb68663ad5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a315766d481d6cf6de7e315140713da2046f061c8e1b114d072dd5a452c50a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a315766d481d6cf6de7e315140713da2046f061c8e1b114d072dd5a452c50a20->enter($__internal_a315766d481d6cf6de7e315140713da2046f061c8e1b114d072dd5a452c50a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_175a8058180e8bc939b6b5d372c9f03767cedb88a0061d0b362fd308c13e1227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175a8058180e8bc939b6b5d372c9f03767cedb88a0061d0b362fd308c13e1227->enter($__internal_175a8058180e8bc939b6b5d372c9f03767cedb88a0061d0b362fd308c13e1227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Charges list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Date_echeance</th>
                <th>Montant</th>
                <th>Statut</th>
                <th>Contrat_id</th>
                <th>Pj_id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["charges"]) || array_key_exists("charges", $context) ? $context["charges"] : (function () { throw new Twig_Error_Runtime('Variable "charges" does not exist.', 20, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["charge"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("charge_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["charge"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["charge"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["charge"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["charge"], "dateecheance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["charge"], "dateecheance", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["charge"], "montant", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["charge"], "statut", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["charge"], "contratid", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["charge"], "pjid", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("charge_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["charge"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("charge_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["charge"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("charge_new");
        echo "\">Create a new charge</a>
        </li>
    </ul>
";
        
        $__internal_175a8058180e8bc939b6b5d372c9f03767cedb88a0061d0b362fd308c13e1227->leave($__internal_175a8058180e8bc939b6b5d372c9f03767cedb88a0061d0b362fd308c13e1227_prof);

        
        $__internal_a315766d481d6cf6de7e315140713da2046f061c8e1b114d072dd5a452c50a20->leave($__internal_a315766d481d6cf6de7e315140713da2046f061c8e1b114d072dd5a452c50a20_prof);

    }

    public function getTemplateName()
    {
        return "charge/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 46,  127 => 41,  115 => 35,  109 => 32,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  84 => 24,  80 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Charges list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Date_echeance</th>
                <th>Montant</th>
                <th>Statut</th>
                <th>Contrat_id</th>
                <th>Pj_id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for charge in charges %}
            <tr>
                <td><a href=\"{{ path('charge_show', { 'id': charge.id }) }}\">{{ charge.id }}</a></td>
                <td>{{ charge.titre }}</td>
                <td>{% if charge.dateecheance %}{{ charge.dateecheance|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ charge.montant }}</td>
                <td>{{ charge.statut }}</td>
                <td>{{ charge.contratid }}</td>
                <td>{{ charge.pjid }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('charge_show', { 'id': charge.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('charge_edit', { 'id': charge.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('charge_new') }}\">Create a new charge</a>
        </li>
    </ul>
{% endblock %}
", "charge/index.html.twig", "C:\\xampp\\htdocs\\projet\\copropriete\\app\\Resources\\views\\charge\\index.html.twig");
    }
}
