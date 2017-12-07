<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a7ba78300f2d384d1a8293a933612a7c4886972b819864d4c080f9e47f5f52d9 extends Twig_Template
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
        $__internal_a703510b2aa8545877d9e3661ce7adfdf062a00d8355a2c701c4f0f28dbe6cee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a703510b2aa8545877d9e3661ce7adfdf062a00d8355a2c701c4f0f28dbe6cee->enter($__internal_a703510b2aa8545877d9e3661ce7adfdf062a00d8355a2c701c4f0f28dbe6cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_6aee3ef1d4c91e9b31b2c367f10c8992f75aecc4bfe651c28c25b2e48b195339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aee3ef1d4c91e9b31b2c367f10c8992f75aecc4bfe651c28c25b2e48b195339->enter($__internal_6aee3ef1d4c91e9b31b2c367f10c8992f75aecc4bfe651c28c25b2e48b195339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a703510b2aa8545877d9e3661ce7adfdf062a00d8355a2c701c4f0f28dbe6cee->leave($__internal_a703510b2aa8545877d9e3661ce7adfdf062a00d8355a2c701c4f0f28dbe6cee_prof);

        
        $__internal_6aee3ef1d4c91e9b31b2c367f10c8992f75aecc4bfe651c28c25b2e48b195339->leave($__internal_6aee3ef1d4c91e9b31b2c367f10c8992f75aecc4bfe651c28c25b2e48b195339_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\HTTP\\symfony\\copropriete\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
