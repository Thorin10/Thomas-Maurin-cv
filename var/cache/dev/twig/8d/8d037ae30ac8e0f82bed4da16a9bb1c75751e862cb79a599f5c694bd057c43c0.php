<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_960693c31df0f32ebdec75d5b48acf14faf757a8c9ae38fd082c8ebb35867c67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ae12ff6d27500e05618331fe21e2b56b6b8f7d7b5393e68063e9f42ed9b10d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae12ff6d27500e05618331fe21e2b56b6b8f7d7b5393e68063e9f42ed9b10d1->enter($__internal_0ae12ff6d27500e05618331fe21e2b56b6b8f7d7b5393e68063e9f42ed9b10d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $__internal_5caac866093346bc99ffb57e39e5d1ce9bc92785e81066d3b09e169eb052f5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5caac866093346bc99ffb57e39e5d1ce9bc92785e81066d3b09e169eb052f5b5->enter($__internal_5caac866093346bc99ffb57e39e5d1ce9bc92785e81066d3b09e169eb052f5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ae12ff6d27500e05618331fe21e2b56b6b8f7d7b5393e68063e9f42ed9b10d1->leave($__internal_0ae12ff6d27500e05618331fe21e2b56b6b8f7d7b5393e68063e9f42ed9b10d1_prof);

        
        $__internal_5caac866093346bc99ffb57e39e5d1ce9bc92785e81066d3b09e169eb052f5b5->leave($__internal_5caac866093346bc99ffb57e39e5d1ce9bc92785e81066d3b09e169eb052f5b5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
", "SonataAdminBundle:Pager:links.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/Pager/links.html.twig");
    }
}
