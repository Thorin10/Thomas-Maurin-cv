<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_21594829758ef55da594e44354580f00b171bd6927fe38710a56c9ca90d485ef extends Twig_Template
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
        $__internal_483dfb829c2cb722ed6fe7f41434ac9e38f4175e7c2752db359cfebd15527911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483dfb829c2cb722ed6fe7f41434ac9e38f4175e7c2752db359cfebd15527911->enter($__internal_483dfb829c2cb722ed6fe7f41434ac9e38f4175e7c2752db359cfebd15527911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_97a7f7704d265027ab17057bea90b2b8a583263e2d314aec9840208cce5ae93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a7f7704d265027ab17057bea90b2b8a583263e2d314aec9840208cce5ae93a->enter($__internal_97a7f7704d265027ab17057bea90b2b8a583263e2d314aec9840208cce5ae93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_483dfb829c2cb722ed6fe7f41434ac9e38f4175e7c2752db359cfebd15527911->leave($__internal_483dfb829c2cb722ed6fe7f41434ac9e38f4175e7c2752db359cfebd15527911_prof);

        
        $__internal_97a7f7704d265027ab17057bea90b2b8a583263e2d314aec9840208cce5ae93a->leave($__internal_97a7f7704d265027ab17057bea90b2b8a583263e2d314aec9840208cce5ae93a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
