<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_83de62436bc2f0975f6f5f66cde32cb21c815366ee5bd7f31ef0a0ac7cde2cbb extends Twig_Template
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
        $__internal_f63d633ab84419b004d9995430531aa60698bca75f20c708a29ec54c4059c8ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63d633ab84419b004d9995430531aa60698bca75f20c708a29ec54c4059c8ae->enter($__internal_f63d633ab84419b004d9995430531aa60698bca75f20c708a29ec54c4059c8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_2ae08d3f6104fbc9a586a83dc6768911b823a1f5bd3e5f1408d8e75f4e6672bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae08d3f6104fbc9a586a83dc6768911b823a1f5bd3e5f1408d8e75f4e6672bb->enter($__internal_2ae08d3f6104fbc9a586a83dc6768911b823a1f5bd3e5f1408d8e75f4e6672bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f63d633ab84419b004d9995430531aa60698bca75f20c708a29ec54c4059c8ae->leave($__internal_f63d633ab84419b004d9995430531aa60698bca75f20c708a29ec54c4059c8ae_prof);

        
        $__internal_2ae08d3f6104fbc9a586a83dc6768911b823a1f5bd3e5f1408d8e75f4e6672bb->leave($__internal_2ae08d3f6104fbc9a586a83dc6768911b823a1f5bd3e5f1408d8e75f4e6672bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
