<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_47ffe223310461f88c7880fa62bdc0151ba9cc469d599214037666046012f4bd extends Twig_Template
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
        $__internal_de0657e4117661dca49e83299817e020815960bca9aa23ef67dcc5e7c06e430e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0657e4117661dca49e83299817e020815960bca9aa23ef67dcc5e7c06e430e->enter($__internal_de0657e4117661dca49e83299817e020815960bca9aa23ef67dcc5e7c06e430e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_de3d870aa3d648db3887dc1eb8af32fe4b7976f8134b8228308c2b75e683e3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3d870aa3d648db3887dc1eb8af32fe4b7976f8134b8228308c2b75e683e3d1->enter($__internal_de3d870aa3d648db3887dc1eb8af32fe4b7976f8134b8228308c2b75e683e3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_de0657e4117661dca49e83299817e020815960bca9aa23ef67dcc5e7c06e430e->leave($__internal_de0657e4117661dca49e83299817e020815960bca9aa23ef67dcc5e7c06e430e_prof);

        
        $__internal_de3d870aa3d648db3887dc1eb8af32fe4b7976f8134b8228308c2b75e683e3d1->leave($__internal_de3d870aa3d648db3887dc1eb8af32fe4b7976f8134b8228308c2b75e683e3d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
