<?php

/* form_table_layout.html.twig */
class __TwigTemplate_dc58db71459f313049b174f0f04f296ddc23df9088ccf72dd2bbb273a22def82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_960d14efd35e39b89d9809d94f537a63073cf59da44ee68b812d3323ceb09a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960d14efd35e39b89d9809d94f537a63073cf59da44ee68b812d3323ceb09a08->enter($__internal_960d14efd35e39b89d9809d94f537a63073cf59da44ee68b812d3323ceb09a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_9281eda331880f7c3263650affb77daabe63ae6de06b240a5778f917745599ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9281eda331880f7c3263650affb77daabe63ae6de06b240a5778f917745599ce->enter($__internal_9281eda331880f7c3263650affb77daabe63ae6de06b240a5778f917745599ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_960d14efd35e39b89d9809d94f537a63073cf59da44ee68b812d3323ceb09a08->leave($__internal_960d14efd35e39b89d9809d94f537a63073cf59da44ee68b812d3323ceb09a08_prof);

        
        $__internal_9281eda331880f7c3263650affb77daabe63ae6de06b240a5778f917745599ce->leave($__internal_9281eda331880f7c3263650affb77daabe63ae6de06b240a5778f917745599ce_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6f57e760276e716484c1a1f0c2118b267fa2ad908018d79b128e97666ffe19bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f57e760276e716484c1a1f0c2118b267fa2ad908018d79b128e97666ffe19bd->enter($__internal_6f57e760276e716484c1a1f0c2118b267fa2ad908018d79b128e97666ffe19bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b0961ca995b45d6436999ae4fb0a0126ed9bc78d9155328b6de0fba9b102225f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0961ca995b45d6436999ae4fb0a0126ed9bc78d9155328b6de0fba9b102225f->enter($__internal_b0961ca995b45d6436999ae4fb0a0126ed9bc78d9155328b6de0fba9b102225f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_b0961ca995b45d6436999ae4fb0a0126ed9bc78d9155328b6de0fba9b102225f->leave($__internal_b0961ca995b45d6436999ae4fb0a0126ed9bc78d9155328b6de0fba9b102225f_prof);

        
        $__internal_6f57e760276e716484c1a1f0c2118b267fa2ad908018d79b128e97666ffe19bd->leave($__internal_6f57e760276e716484c1a1f0c2118b267fa2ad908018d79b128e97666ffe19bd_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9d0962515c5223b150cfb924874858cab840a1445976cc8b2d0d53ffccddff2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0962515c5223b150cfb924874858cab840a1445976cc8b2d0d53ffccddff2a->enter($__internal_9d0962515c5223b150cfb924874858cab840a1445976cc8b2d0d53ffccddff2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_1d2639ee87adc125e3e5741b045d6a912104e2ae426c8fdbe574f8911773c49f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2639ee87adc125e3e5741b045d6a912104e2ae426c8fdbe574f8911773c49f->enter($__internal_1d2639ee87adc125e3e5741b045d6a912104e2ae426c8fdbe574f8911773c49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_1d2639ee87adc125e3e5741b045d6a912104e2ae426c8fdbe574f8911773c49f->leave($__internal_1d2639ee87adc125e3e5741b045d6a912104e2ae426c8fdbe574f8911773c49f_prof);

        
        $__internal_9d0962515c5223b150cfb924874858cab840a1445976cc8b2d0d53ffccddff2a->leave($__internal_9d0962515c5223b150cfb924874858cab840a1445976cc8b2d0d53ffccddff2a_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_560e5e9ea53321bec6d34746e20afb1ef784dbadf094df6990844714c37e9ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560e5e9ea53321bec6d34746e20afb1ef784dbadf094df6990844714c37e9ceb->enter($__internal_560e5e9ea53321bec6d34746e20afb1ef784dbadf094df6990844714c37e9ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_c1f5d5422f60c127f95505cff448e110ecf93dc674ce1594a99dfb5991e2d95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f5d5422f60c127f95505cff448e110ecf93dc674ce1594a99dfb5991e2d95e->enter($__internal_c1f5d5422f60c127f95505cff448e110ecf93dc674ce1594a99dfb5991e2d95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_c1f5d5422f60c127f95505cff448e110ecf93dc674ce1594a99dfb5991e2d95e->leave($__internal_c1f5d5422f60c127f95505cff448e110ecf93dc674ce1594a99dfb5991e2d95e_prof);

        
        $__internal_560e5e9ea53321bec6d34746e20afb1ef784dbadf094df6990844714c37e9ceb->leave($__internal_560e5e9ea53321bec6d34746e20afb1ef784dbadf094df6990844714c37e9ceb_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_b38a60508ddce36c8d8546e4cabd71a5c3cb6e859c12745b923e0d80bc5a8942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b38a60508ddce36c8d8546e4cabd71a5c3cb6e859c12745b923e0d80bc5a8942->enter($__internal_b38a60508ddce36c8d8546e4cabd71a5c3cb6e859c12745b923e0d80bc5a8942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_ac305adb8b7177ea0f3d62ca52f4c3df541d89497b2eaadc29257fd8d0392d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac305adb8b7177ea0f3d62ca52f4c3df541d89497b2eaadc29257fd8d0392d7b->enter($__internal_ac305adb8b7177ea0f3d62ca52f4c3df541d89497b2eaadc29257fd8d0392d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "parent", array())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_ac305adb8b7177ea0f3d62ca52f4c3df541d89497b2eaadc29257fd8d0392d7b->leave($__internal_ac305adb8b7177ea0f3d62ca52f4c3df541d89497b2eaadc29257fd8d0392d7b_prof);

        
        $__internal_b38a60508ddce36c8d8546e4cabd71a5c3cb6e859c12745b923e0d80bc5a8942->leave($__internal_b38a60508ddce36c8d8546e4cabd71a5c3cb6e859c12745b923e0d80bc5a8942_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
