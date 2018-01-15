<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_7238501a90b8390ccb63ed487b3bf21406dabc6d6882e09bd99876a9ea2580ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_date.html.twig", 12);
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
        $__internal_2be0677af7aebf81c8a9666a8a896d36ffedddd5538fba3c98bbe2a604fafce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be0677af7aebf81c8a9666a8a896d36ffedddd5538fba3c98bbe2a604fafce4->enter($__internal_2be0677af7aebf81c8a9666a8a896d36ffedddd5538fba3c98bbe2a604fafce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $__internal_35530f402a955a2d902131f75ca7b4cd770fe559a9e9bed92ab8511fcf806199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35530f402a955a2d902131f75ca7b4cd770fe559a9e9bed92ab8511fcf806199->enter($__internal_35530f402a955a2d902131f75ca7b4cd770fe559a9e9bed92ab8511fcf806199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be0677af7aebf81c8a9666a8a896d36ffedddd5538fba3c98bbe2a604fafce4->leave($__internal_2be0677af7aebf81c8a9666a8a896d36ffedddd5538fba3c98bbe2a604fafce4_prof);

        
        $__internal_35530f402a955a2d902131f75ca7b4cd770fe559a9e9bed92ab8511fcf806199->leave($__internal_35530f402a955a2d902131f75ca7b4cd770fe559a9e9bed92ab8511fcf806199_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c050d30dcc432af7844e542750849b36e11baf351ea45836ccd9ff333f9745f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c050d30dcc432af7844e542750849b36e11baf351ea45836ccd9ff333f9745f1->enter($__internal_c050d30dcc432af7844e542750849b36e11baf351ea45836ccd9ff333f9745f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_cde18e5775c6af92758de7547ac6d46abfe063b03a1e34b815fd797e3bfec9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde18e5775c6af92758de7547ac6d46abfe063b03a1e34b815fd797e3bfec9b8->enter($__internal_cde18e5775c6af92758de7547ac6d46abfe063b03a1e34b815fd797e3bfec9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_cde18e5775c6af92758de7547ac6d46abfe063b03a1e34b815fd797e3bfec9b8->leave($__internal_cde18e5775c6af92758de7547ac6d46abfe063b03a1e34b815fd797e3bfec9b8_prof);

        
        $__internal_c050d30dcc432af7844e542750849b36e11baf351ea45836ccd9ff333f9745f1->leave($__internal_c050d30dcc432af7844e542750849b36e11baf351ea45836ccd9ff333f9745f1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  55 => 18,  53 => 17,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_date.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_date.html.twig");
    }
}
