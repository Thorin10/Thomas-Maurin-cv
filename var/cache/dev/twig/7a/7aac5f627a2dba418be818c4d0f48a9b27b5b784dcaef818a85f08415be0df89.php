<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_c7b88f19a13786b9b9d23cb86ad3816905b156a83316ede42127df8ed191b5b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be5b055e472ff58925f30c10efab649f2fe4bba41d2ccdbe245afdb88106f23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be5b055e472ff58925f30c10efab649f2fe4bba41d2ccdbe245afdb88106f23c->enter($__internal_be5b055e472ff58925f30c10efab649f2fe4bba41d2ccdbe245afdb88106f23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        $__internal_2c3550e3cf65475c6783ad056c04c83bdc889a142be04a8f656e626ec71483ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3550e3cf65475c6783ad056c04c83bdc889a142be04a8f656e626ec71483ad->enter($__internal_2c3550e3cf65475c6783ad056c04c83bdc889a142be04a8f656e626ec71483ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if ((($context["isEditable"] ?? $this->getContext($context, "isEditable")) && ($context["xEditableType"] ?? $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be5b055e472ff58925f30c10efab649f2fe4bba41d2ccdbe245afdb88106f23c->leave($__internal_be5b055e472ff58925f30c10efab649f2fe4bba41d2ccdbe245afdb88106f23c_prof);

        
        $__internal_2c3550e3cf65475c6783ad056c04c83bdc889a142be04a8f656e626ec71483ad->leave($__internal_2c3550e3cf65475c6783ad056c04c83bdc889a142be04a8f656e626ec71483ad_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_08fe98885721c382a4de71a6bcce2663eeb5f9d400af1f8687e3cb46ff280777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08fe98885721c382a4de71a6bcce2663eeb5f9d400af1f8687e3cb46ff280777->enter($__internal_08fe98885721c382a4de71a6bcce2663eeb5f9d400af1f8687e3cb46ff280777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_5d68316263ada54a7469af44fa0f123101a275ab36b132987dbcb7ca0eeed7b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d68316263ada54a7469af44fa0f123101a275ab36b132987dbcb7ca0eeed7b3->enter($__internal_5d68316263ada54a7469af44fa0f123101a275ab36b132987dbcb7ca0eeed7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
        
        $__internal_5d68316263ada54a7469af44fa0f123101a275ab36b132987dbcb7ca0eeed7b3->leave($__internal_5d68316263ada54a7469af44fa0f123101a275ab36b132987dbcb7ca0eeed7b3_prof);

        
        $__internal_08fe98885721c382a4de71a6bcce2663eeb5f9d400af1f8687e3cb46ff280777->leave($__internal_08fe98885721c382a4de71a6bcce2663eeb5f9d400af1f8687e3cb46ff280777_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_7f4979c5894d6c487bd5de55dcd6a0ede246cc63f8848d0bda0bc301e2ff0205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4979c5894d6c487bd5de55dcd6a0ede246cc63f8848d0bda0bc301e2ff0205->enter($__internal_7f4979c5894d6c487bd5de55dcd6a0ede246cc63f8848d0bda0bc301e2ff0205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_579b8444257130ac1b54e456a1376cf85344aca787cb9af9b328874c117272a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579b8444257130ac1b54e456a1376cf85344aca787cb9af9b328874c117272a0->enter($__internal_579b8444257130ac1b54e456a1376cf85344aca787cb9af9b328874c117272a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:display_boolean.html.twig", "SonataAdminBundle:CRUD:list_boolean.html.twig", 27)->display($context);
        
        $__internal_579b8444257130ac1b54e456a1376cf85344aca787cb9af9b328874c117272a0->leave($__internal_579b8444257130ac1b54e456a1376cf85344aca787cb9af9b328874c117272a0_prof);

        
        $__internal_7f4979c5894d6c487bd5de55dcd6a0ede246cc63f8848d0bda0bc301e2ff0205->leave($__internal_7f4979c5894d6c487bd5de55dcd6a0ede246cc63f8848d0bda0bc301e2ff0205_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  82 => 26,  72 => 23,  65 => 21,  60 => 20,  57 => 19,  48 => 18,  38 => 12,  35 => 17,  33 => 15,  31 => 14,  19 => 12,);
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

{% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.hasAccess('edit', object) %}
{% set xEditableType = field_description.type|sonata_xeditable_type %}

{% if isEditable and xEditableType %}
    {% block field_span_attributes %}
        {% spaceless %}
            {{ parent() }}
            data-source=\"[{value: 0, text: '{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}'},{value: 1, text: '{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}'}]\"
        {% endspaceless %}
    {% endblock %}
{% endif %}

{% block field %}
    {%- include 'SonataAdminBundle:CRUD:display_boolean.html.twig' -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_boolean.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_boolean.html.twig");
    }
}
