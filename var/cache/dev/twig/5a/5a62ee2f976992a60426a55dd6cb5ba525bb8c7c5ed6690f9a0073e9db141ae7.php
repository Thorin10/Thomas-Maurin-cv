<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b6d9b9fcd687ad6b763ac90e6eac8a04a3cb0294ff0858c80b1408e6e6501446 extends Twig_Template
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
        $__internal_8859bb890305b5aac64942ece0c779e0be58a2cc807193eda3abb64823282e9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8859bb890305b5aac64942ece0c779e0be58a2cc807193eda3abb64823282e9b->enter($__internal_8859bb890305b5aac64942ece0c779e0be58a2cc807193eda3abb64823282e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_6b3a4cd69dbaa0d1fb039adc4dd4ccc0dab113b1f67f32740874a6dd99ef0af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3a4cd69dbaa0d1fb039adc4dd4ccc0dab113b1f67f32740874a6dd99ef0af5->enter($__internal_6b3a4cd69dbaa0d1fb039adc4dd4ccc0dab113b1f67f32740874a6dd99ef0af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8859bb890305b5aac64942ece0c779e0be58a2cc807193eda3abb64823282e9b->leave($__internal_8859bb890305b5aac64942ece0c779e0be58a2cc807193eda3abb64823282e9b_prof);

        
        $__internal_6b3a4cd69dbaa0d1fb039adc4dd4ccc0dab113b1f67f32740874a6dd99ef0af5->leave($__internal_6b3a4cd69dbaa0d1fb039adc4dd4ccc0dab113b1f67f32740874a6dd99ef0af5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
