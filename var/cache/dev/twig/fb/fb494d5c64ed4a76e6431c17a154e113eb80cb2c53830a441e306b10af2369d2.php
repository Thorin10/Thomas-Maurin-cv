<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_8181fdc3f955412bd0da9b2646bd900fbb3df586c44719cdbb4aead7b9804e67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 13);
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
        $__internal_b86d00b9b09d822f8645b7970e027d09e498cefffce8b67add6a994659de01eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86d00b9b09d822f8645b7970e027d09e498cefffce8b67add6a994659de01eb->enter($__internal_b86d00b9b09d822f8645b7970e027d09e498cefffce8b67add6a994659de01eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        $__internal_5640fae45cb7ea18a890975e92441a8134f67e57710d3312b216119b6f01a1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5640fae45cb7ea18a890975e92441a8134f67e57710d3312b216119b6f01a1a1->enter($__internal_5640fae45cb7ea18a890975e92441a8134f67e57710d3312b216119b6f01a1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        // line 11
        $context["show"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_array_macro.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 11);
        // line 13
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b86d00b9b09d822f8645b7970e027d09e498cefffce8b67add6a994659de01eb->leave($__internal_b86d00b9b09d822f8645b7970e027d09e498cefffce8b67add6a994659de01eb_prof);

        
        $__internal_5640fae45cb7ea18a890975e92441a8134f67e57710d3312b216119b6f01a1a1->leave($__internal_5640fae45cb7ea18a890975e92441a8134f67e57710d3312b216119b6f01a1a1_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_d6b46f26c712e6e080f10ee5d444910c65f306e0291af93ea31ec885ac446d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b46f26c712e6e080f10ee5d444910c65f306e0291af93ea31ec885ac446d1a->enter($__internal_d6b46f26c712e6e080f10ee5d444910c65f306e0291af93ea31ec885ac446d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9ac55cdf1ad8cb5c56470b9fb6ae48eb28104a62ae8240468f521f8e224ac153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac55cdf1ad8cb5c56470b9fb6ae48eb28104a62ae8240468f521f8e224ac153->enter($__internal_9ac55cdf1ad8cb5c56470b9fb6ae48eb28104a62ae8240468f521f8e224ac153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["show"]->getrender_array(($context["value"] ?? $this->getContext($context, "value")), (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "inline", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "inline", array()), false)) : (false)));
        echo "
";
        
        $__internal_9ac55cdf1ad8cb5c56470b9fb6ae48eb28104a62ae8240468f521f8e224ac153->leave($__internal_9ac55cdf1ad8cb5c56470b9fb6ae48eb28104a62ae8240468f521f8e224ac153_prof);

        
        $__internal_d6b46f26c712e6e080f10ee5d444910c65f306e0291af93ea31ec885ac446d1a->leave($__internal_d6b46f26c712e6e080f10ee5d444910c65f306e0291af93ea31ec885ac446d1a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  43 => 15,  33 => 13,  31 => 11,  11 => 13,);
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
{% import 'SonataAdminBundle:CRUD:base_array_macro.html.twig' as show %}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {{ show.render_array(value, field_description.options.inline|default(false)) }}
{% endblock %}
", "SonataAdminBundle:CRUD:show_array.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_array.html.twig");
    }
}
