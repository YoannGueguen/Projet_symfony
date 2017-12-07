<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_bbe4bad4718e6c7ff9d873f9ade875cecbf2ff655d4fe86c28f4441e732483c7 extends Twig_Template
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
        $__internal_fccd36604ccdd4777976052f729a6fc51ed8d8b00124a913cb251cf31f353f18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fccd36604ccdd4777976052f729a6fc51ed8d8b00124a913cb251cf31f353f18->enter($__internal_fccd36604ccdd4777976052f729a6fc51ed8d8b00124a913cb251cf31f353f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_c3a39d7734c575b45161682191db7f8145c0d4df8b4a4051f6defa654c7aaba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a39d7734c575b45161682191db7f8145c0d4df8b4a4051f6defa654c7aaba8->enter($__internal_c3a39d7734c575b45161682191db7f8145c0d4df8b4a4051f6defa654c7aaba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_fccd36604ccdd4777976052f729a6fc51ed8d8b00124a913cb251cf31f353f18->leave($__internal_fccd36604ccdd4777976052f729a6fc51ed8d8b00124a913cb251cf31f353f18_prof);

        
        $__internal_c3a39d7734c575b45161682191db7f8145c0d4df8b4a4051f6defa654c7aaba8->leave($__internal_c3a39d7734c575b45161682191db7f8145c0d4df8b4a4051f6defa654c7aaba8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
