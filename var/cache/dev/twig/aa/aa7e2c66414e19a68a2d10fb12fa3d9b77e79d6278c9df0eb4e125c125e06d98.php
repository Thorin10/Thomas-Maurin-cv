<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_37a0d5ccad46e9e7bd0898d67e4dede7e34af4356cce8c9c88a3782c229b79be extends Twig_Template
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
        $__internal_0a80ff39b27f2de74d7740f71fd787c97653fe4dd6ec0e453490e2c430032397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a80ff39b27f2de74d7740f71fd787c97653fe4dd6ec0e453490e2c430032397->enter($__internal_0a80ff39b27f2de74d7740f71fd787c97653fe4dd6ec0e453490e2c430032397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_9211f696f7b703efb8d9d356f7db8c64553a03c3b66d72cca2432b26b93d81bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9211f696f7b703efb8d9d356f7db8c64553a03c3b66d72cca2432b26b93d81bc->enter($__internal_9211f696f7b703efb8d9d356f7db8c64553a03c3b66d72cca2432b26b93d81bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_0a80ff39b27f2de74d7740f71fd787c97653fe4dd6ec0e453490e2c430032397->leave($__internal_0a80ff39b27f2de74d7740f71fd787c97653fe4dd6ec0e453490e2c430032397_prof);

        
        $__internal_9211f696f7b703efb8d9d356f7db8c64553a03c3b66d72cca2432b26b93d81bc->leave($__internal_9211f696f7b703efb8d9d356f7db8c64553a03c3b66d72cca2432b26b93d81bc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
