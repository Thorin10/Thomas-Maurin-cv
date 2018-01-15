<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_94bf24314efa7e8031bc20cbfe27a4a4050d6ebf1d8b78684db6aa109ec27b9c extends Twig_Template
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
        $__internal_17a3e72b1142c4b0e7673833d02bd82f04e5f4590eeda8d91ace4f45d2a6a249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a3e72b1142c4b0e7673833d02bd82f04e5f4590eeda8d91ace4f45d2a6a249->enter($__internal_17a3e72b1142c4b0e7673833d02bd82f04e5f4590eeda8d91ace4f45d2a6a249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_683a456b592dbacf24dd47bff1fc78d812565c3466886301687d33ac47bd4c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683a456b592dbacf24dd47bff1fc78d812565c3466886301687d33ac47bd4c21->enter($__internal_683a456b592dbacf24dd47bff1fc78d812565c3466886301687d33ac47bd4c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_17a3e72b1142c4b0e7673833d02bd82f04e5f4590eeda8d91ace4f45d2a6a249->leave($__internal_17a3e72b1142c4b0e7673833d02bd82f04e5f4590eeda8d91ace4f45d2a6a249_prof);

        
        $__internal_683a456b592dbacf24dd47bff1fc78d812565c3466886301687d33ac47bd4c21->leave($__internal_683a456b592dbacf24dd47bff1fc78d812565c3466886301687d33ac47bd4c21_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
