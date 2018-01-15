<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e86294fe2a3c2d9978483be581e23c387da90ba02dc72f14d972683647033715 extends Twig_Template
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
        $__internal_0f72377e7c6a98696ee885acb15b0da310389bbb362a845756f3c5996f1da6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f72377e7c6a98696ee885acb15b0da310389bbb362a845756f3c5996f1da6aa->enter($__internal_0f72377e7c6a98696ee885acb15b0da310389bbb362a845756f3c5996f1da6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_896ae326feff4e56d0406c299a6614cfb757f07db9423f2bfe1217ad88037203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896ae326feff4e56d0406c299a6614cfb757f07db9423f2bfe1217ad88037203->enter($__internal_896ae326feff4e56d0406c299a6614cfb757f07db9423f2bfe1217ad88037203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0f72377e7c6a98696ee885acb15b0da310389bbb362a845756f3c5996f1da6aa->leave($__internal_0f72377e7c6a98696ee885acb15b0da310389bbb362a845756f3c5996f1da6aa_prof);

        
        $__internal_896ae326feff4e56d0406c299a6614cfb757f07db9423f2bfe1217ad88037203->leave($__internal_896ae326feff4e56d0406c299a6614cfb757f07db9423f2bfe1217ad88037203_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
