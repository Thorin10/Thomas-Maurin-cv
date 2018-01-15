<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d1e27c73d144ec18b7e1a97eef03712d5e2be472d791cf38841c62bf46e20f6d extends Twig_Template
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
        $__internal_4c59a4b56b126ce1d429d62cee58d894e3aa53567a91ea1b0bb33c3c0a1a1ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c59a4b56b126ce1d429d62cee58d894e3aa53567a91ea1b0bb33c3c0a1a1ed4->enter($__internal_4c59a4b56b126ce1d429d62cee58d894e3aa53567a91ea1b0bb33c3c0a1a1ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_794a04ff3828b5ca1d7e1425c8dc6ec4aaf93ab99524817a099f1c4ed56a2e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_794a04ff3828b5ca1d7e1425c8dc6ec4aaf93ab99524817a099f1c4ed56a2e29->enter($__internal_794a04ff3828b5ca1d7e1425c8dc6ec4aaf93ab99524817a099f1c4ed56a2e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4c59a4b56b126ce1d429d62cee58d894e3aa53567a91ea1b0bb33c3c0a1a1ed4->leave($__internal_4c59a4b56b126ce1d429d62cee58d894e3aa53567a91ea1b0bb33c3c0a1a1ed4_prof);

        
        $__internal_794a04ff3828b5ca1d7e1425c8dc6ec4aaf93ab99524817a099f1c4ed56a2e29->leave($__internal_794a04ff3828b5ca1d7e1425c8dc6ec4aaf93ab99524817a099f1c4ed56a2e29_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
