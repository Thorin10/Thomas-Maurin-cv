<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_6db04de2495c4295ef08c233cc465fc0e8691010a465fc988dc49cab67e1eee6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7153087c7c8715911168c78224009533b1fbbc280d5f61e189d4faefe2d32591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7153087c7c8715911168c78224009533b1fbbc280d5f61e189d4faefe2d32591->enter($__internal_7153087c7c8715911168c78224009533b1fbbc280d5f61e189d4faefe2d32591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $__internal_30883e44ab0c36f875f76094b00d9decd916b34457353f2c7d80c9942457345c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30883e44ab0c36f875f76094b00d9decd916b34457353f2c7d80c9942457345c->enter($__internal_30883e44ab0c36f875f76094b00d9decd916b34457353f2c7d80c9942457345c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7153087c7c8715911168c78224009533b1fbbc280d5f61e189d4faefe2d32591->leave($__internal_7153087c7c8715911168c78224009533b1fbbc280d5f61e189d4faefe2d32591_prof);

        
        $__internal_30883e44ab0c36f875f76094b00d9decd916b34457353f2c7d80c9942457345c->leave($__internal_30883e44ab0c36f875f76094b00d9decd916b34457353f2c7d80c9942457345c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b8fbc5c17d4b6d985691dc26923835e7cacfb908a91f32db9ccdafc4f47d45d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8fbc5c17d4b6d985691dc26923835e7cacfb908a91f32db9ccdafc4f47d45d3->enter($__internal_b8fbc5c17d4b6d985691dc26923835e7cacfb908a91f32db9ccdafc4f47d45d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_71de0d33aab461d3ed4b5b7874192a3789a56abff604d9f39d9036f1e93574c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71de0d33aab461d3ed4b5b7874192a3789a56abff604d9f39d9036f1e93574c4->enter($__internal_71de0d33aab461d3ed4b5b7874192a3789a56abff604d9f39d9036f1e93574c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_71de0d33aab461d3ed4b5b7874192a3789a56abff604d9f39d9036f1e93574c4->leave($__internal_71de0d33aab461d3ed4b5b7874192a3789a56abff604d9f39d9036f1e93574c4_prof);

        
        $__internal_b8fbc5c17d4b6d985691dc26923835e7cacfb908a91f32db9ccdafc4f47d45d3->leave($__internal_b8fbc5c17d4b6d985691dc26923835e7cacfb908a91f32db9ccdafc4f47d45d3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_time.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_time.html.twig");
    }
}
