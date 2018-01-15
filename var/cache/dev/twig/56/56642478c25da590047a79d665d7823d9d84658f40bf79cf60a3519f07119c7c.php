<?php

/* SonataAdminBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_a9ec208e702ce6724a9edfae0faaa06ab8d027afcb1b608ab293567f9cc3b51e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_datetime.html.twig", 12);
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
        $__internal_fb744c4aa78756ce3e44878517df9a08cac4710ec4c9810ec34ddec95e91c16d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb744c4aa78756ce3e44878517df9a08cac4710ec4c9810ec34ddec95e91c16d->enter($__internal_fb744c4aa78756ce3e44878517df9a08cac4710ec4c9810ec34ddec95e91c16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $__internal_3ae7206cd1144435c02fdcb30abc53846c4d1b9b9e53dbea580607ec2b09426a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae7206cd1144435c02fdcb30abc53846c4d1b9b9e53dbea580607ec2b09426a->enter($__internal_3ae7206cd1144435c02fdcb30abc53846c4d1b9b9e53dbea580607ec2b09426a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb744c4aa78756ce3e44878517df9a08cac4710ec4c9810ec34ddec95e91c16d->leave($__internal_fb744c4aa78756ce3e44878517df9a08cac4710ec4c9810ec34ddec95e91c16d_prof);

        
        $__internal_3ae7206cd1144435c02fdcb30abc53846c4d1b9b9e53dbea580607ec2b09426a->leave($__internal_3ae7206cd1144435c02fdcb30abc53846c4d1b9b9e53dbea580607ec2b09426a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f99250aaa3e1827bd96d2aba5415f956e63ee46b7d4e01c708857876d85193ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f99250aaa3e1827bd96d2aba5415f956e63ee46b7d4e01c708857876d85193ea->enter($__internal_f99250aaa3e1827bd96d2aba5415f956e63ee46b7d4e01c708857876d85193ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_afed002209c2b93fd29190b6b931697c74a454bd1a61c48031441255f2f8f7c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afed002209c2b93fd29190b6b931697c74a454bd1a61c48031441255f2f8f7c6->enter($__internal_afed002209c2b93fd29190b6b931697c74a454bd1a61c48031441255f2f8f7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_afed002209c2b93fd29190b6b931697c74a454bd1a61c48031441255f2f8f7c6->leave($__internal_afed002209c2b93fd29190b6b931697c74a454bd1a61c48031441255f2f8f7c6_prof);

        
        $__internal_f99250aaa3e1827bd96d2aba5415f956e63ee46b7d4e01c708857876d85193ea->leave($__internal_f99250aaa3e1827bd96d2aba5415f956e63ee46b7d4e01c708857876d85193ea_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_datetime.html.twig";
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

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_datetime.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_datetime.html.twig");
    }
}
