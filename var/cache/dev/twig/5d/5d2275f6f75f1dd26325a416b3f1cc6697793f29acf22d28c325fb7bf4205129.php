<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_6e8a63eaa5e24fb89b66b16cb7daad145e88d6ae987dca3b81e96de487047dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_206e7e2258e0c97a7c0879f6e3ea4802c1e5db8a118065fcf27c750196c9b1a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_206e7e2258e0c97a7c0879f6e3ea4802c1e5db8a118065fcf27c750196c9b1a8->enter($__internal_206e7e2258e0c97a7c0879f6e3ea4802c1e5db8a118065fcf27c750196c9b1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_a0aca56e9a9452627ffc9096304ef8b6c7b4d1e06adc5fbaf62e7a47b81699e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0aca56e9a9452627ffc9096304ef8b6c7b4d1e06adc5fbaf62e7a47b81699e9->enter($__internal_a0aca56e9a9452627ffc9096304ef8b6c7b4d1e06adc5fbaf62e7a47b81699e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_206e7e2258e0c97a7c0879f6e3ea4802c1e5db8a118065fcf27c750196c9b1a8->leave($__internal_206e7e2258e0c97a7c0879f6e3ea4802c1e5db8a118065fcf27c750196c9b1a8_prof);

        
        $__internal_a0aca56e9a9452627ffc9096304ef8b6c7b4d1e06adc5fbaf62e7a47b81699e9->leave($__internal_a0aca56e9a9452627ffc9096304ef8b6c7b4d1e06adc5fbaf62e7a47b81699e9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}", "@FOSUser/layout.html.twig", "/home/thomas/thomascv/cv/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
