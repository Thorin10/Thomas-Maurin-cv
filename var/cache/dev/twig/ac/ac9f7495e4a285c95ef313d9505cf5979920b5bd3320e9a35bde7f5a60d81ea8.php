<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_3656ce2638d169a0e3885bf32bb3657c73752b02ead6e86b77f63728ca63be28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb3164d0872812d7eaa5d3d3e25dc297d950bf7438fd908cf81d423496bc2cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3164d0872812d7eaa5d3d3e25dc297d950bf7438fd908cf81d423496bc2cf2->enter($__internal_fb3164d0872812d7eaa5d3d3e25dc297d950bf7438fd908cf81d423496bc2cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $__internal_9394d514f73dfa358e3252253e8023996cb99df05a317b55f463e1979e225cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9394d514f73dfa358e3252253e8023996cb99df05a317b55f463e1979e225cce->enter($__internal_9394d514f73dfa358e3252253e8023996cb99df05a317b55f463e1979e225cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb3164d0872812d7eaa5d3d3e25dc297d950bf7438fd908cf81d423496bc2cf2->leave($__internal_fb3164d0872812d7eaa5d3d3e25dc297d950bf7438fd908cf81d423496bc2cf2_prof);

        
        $__internal_9394d514f73dfa358e3252253e8023996cb99df05a317b55f463e1979e225cce->leave($__internal_9394d514f73dfa358e3252253e8023996cb99df05a317b55f463e1979e225cce_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b74f4ff0a3a608defb5ca8646166b60475d011a4629f90c9d239bf30dc9b0e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b74f4ff0a3a608defb5ca8646166b60475d011a4629f90c9d239bf30dc9b0e5d->enter($__internal_b74f4ff0a3a608defb5ca8646166b60475d011a4629f90c9d239bf30dc9b0e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_466b4d8b2041de933be038aee8b6e6f8acaf98882d9a4be83d20434ebe2d9cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466b4d8b2041de933be038aee8b6e6f8acaf98882d9a4be83d20434ebe2d9cba->enter($__internal_466b4d8b2041de933be038aee8b6e6f8acaf98882d9a4be83d20434ebe2d9cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_466b4d8b2041de933be038aee8b6e6f8acaf98882d9a4be83d20434ebe2d9cba->leave($__internal_466b4d8b2041de933be038aee8b6e6f8acaf98882d9a4be83d20434ebe2d9cba_prof);

        
        $__internal_b74f4ff0a3a608defb5ca8646166b60475d011a4629f90c9d239bf30dc9b0e5d->leave($__internal_b74f4ff0a3a608defb5ca8646166b60475d011a4629f90c9d239bf30dc9b0e5d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_date.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_date.html.twig");
    }
}
