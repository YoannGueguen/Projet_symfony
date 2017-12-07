<?php

/* :default/nav:menu.html.twig */
class __TwigTemplate_a0bfcfdac58ae18b03634f295c2365143abcc639fbda7bd2658800eb2d59541d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f606f41dc242ce5d75ca10f723d066ffd970c057e338ade147a4a2c68cbd4a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f606f41dc242ce5d75ca10f723d066ffd970c057e338ade147a4a2c68cbd4a7->enter($__internal_3f606f41dc242ce5d75ca10f723d066ffd970c057e338ade147a4a2c68cbd4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default/nav:menu.html.twig"));

        $__internal_534973015d2b0c8ae9d335b3c86f3fe6a74d13e77dbaeafa13b2b21bb7ef87b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534973015d2b0c8ae9d335b3c86f3fe6a74d13e77dbaeafa13b2b21bb7ef87b8->enter($__internal_534973015d2b0c8ae9d335b3c86f3fe6a74d13e77dbaeafa13b2b21bb7ef87b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default/nav:menu.html.twig"));

        // line 1
        echo "
    <ul id=\"menu-demo2\">
        <li><a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Accueil</a>
        <li><a href=\"#\">Forum</a>

            ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 7
            echo "        <li><a href=\"#\">Bienvenue ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</a>
            <ul>
                ";
            // line 9
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 10
                echo "                    <li>test admin</li>
                ";
            }
            // line 12
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Show profile</a></li>
                <li><a href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Logout</a></li>
            </ul>
        </li>
        ";
        } else {
            // line 17
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a>
                <ul>
                    <li><a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Register</a></li>
                </ul>
            </li>
        ";
        }
        // line 23
        echo "        <!--
        <li><a href=\"#\">Lien menu 3</a>
            <ul>
                <li><a href=\"#\">lien sous menu 3</a></li>
                <li><a href=\"#\">lien sous menu 3</a></li>
                <li><a href=\"#\">lien sous menu 3</a></li>
                <li><a href=\"#\">lien sous menu 3</a></li>
            </ul>
        </li>
        <li><a href=\"#\">Lien menu 4</a>
            <ul>
                <li><a href=\"#\">Lien sous menu 4</a></li>
                <li><a href=\"#\">Lien sous menu 4</a></li>
                <li><a href=\"#\">Lien sous menu 4</a></li>
                <li><a href=\"#\">Lien sous menu 4</a></li>
            </ul>
        </li>
        -->
    </ul>";
        
        $__internal_3f606f41dc242ce5d75ca10f723d066ffd970c057e338ade147a4a2c68cbd4a7->leave($__internal_3f606f41dc242ce5d75ca10f723d066ffd970c057e338ade147a4a2c68cbd4a7_prof);

        
        $__internal_534973015d2b0c8ae9d335b3c86f3fe6a74d13e77dbaeafa13b2b21bb7ef87b8->leave($__internal_534973015d2b0c8ae9d335b3c86f3fe6a74d13e77dbaeafa13b2b21bb7ef87b8_prof);

    }

    public function getTemplateName()
    {
        return ":default/nav:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  67 => 19,  61 => 17,  54 => 13,  49 => 12,  45 => 10,  43 => 9,  37 => 7,  35 => 6,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
    <ul id=\"menu-demo2\">
        <li><a href=\"{{ path('index') }}\">Accueil</a>
        <li><a href=\"#\">Forum</a>

            {% if is_granted('ROLE_USER') %}
        <li><a href=\"#\">Bienvenue {{ app.user.username }}</a>
            <ul>
                {% if is_granted('ROLE_ADMIN') %}
                    <li>test admin</li>
                {% endif %}
                <li><a href=\"{{ path('fos_user_profile_show') }}\">Show profile</a></li>
                <li><a href=\"{{ path('fos_user_security_logout') }}\">Logout</a></li>
            </ul>
        </li>
        {% else %}
            <li><a href=\"{{ path('fos_user_security_login') }}\">Login</a>
                <ul>
                    <li><a href=\"{{ path('fos_user_registration_register') }}\">Register</a></li>
                </ul>
            </li>
        {% endif %}
        <!--
        <li><a href=\"#\">Lien menu 3</a>
            <ul>
                <li><a href=\"#\">lien sous menu 3</a></li>
                <li><a href=\"#\">lien sous menu 3</a></li>
                <li><a href=\"#\">lien sous menu 3</a></li>
                <li><a href=\"#\">lien sous menu 3</a></li>
            </ul>
        </li>
        <li><a href=\"#\">Lien menu 4</a>
            <ul>
                <li><a href=\"#\">Lien sous menu 4</a></li>
                <li><a href=\"#\">Lien sous menu 4</a></li>
                <li><a href=\"#\">Lien sous menu 4</a></li>
                <li><a href=\"#\">Lien sous menu 4</a></li>
            </ul>
        </li>
        -->
    </ul>", ":default/nav:menu.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\app/Resources\\views/default/nav/menu.html.twig");
    }
}
