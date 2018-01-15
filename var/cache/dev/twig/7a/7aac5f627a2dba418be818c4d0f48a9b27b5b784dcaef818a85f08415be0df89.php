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
        $__internal_85affd39fecfcddaed4200e26f111f4ce97d80fae84b852807a53be010f42711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85affd39fecfcddaed4200e26f111f4ce97d80fae84b852807a53be010f42711->enter($__internal_85affd39fecfcddaed4200e26f111f4ce97d80fae84b852807a53be010f42711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        $__internal_4a50e8d8bba62f451c9b302680f063eb1109c4e532a454424662d8e27db8b60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a50e8d8bba62f451c9b302680f063eb1109c4e532a454424662d8e27db8b60e->enter($__internal_4a50e8d8bba62f451c9b302680f063eb1109c4e532a454424662d8e27db8b60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if ((($context["isEditable"] ?? $this->getContext($context, "isEditable")) && ($context["xEditableType"] ?? $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85affd39fecfcddaed4200e26f111f4ce97d80fae84b852807a53be010f42711->leave($__internal_85affd39fecfcddaed4200e26f111f4ce97d80fae84b852807a53be010f42711_prof);

        
        $__internal_4a50e8d8bba62f451c9b302680f063eb1109c4e532a454424662d8e27db8b60e->leave($__internal_4a50e8d8bba62f451c9b302680f063eb1109c4e532a454424662d8e27db8b60e_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_c5b7f632fc65c83f2d940407863c5e6b12bfadf377e331cdae46c6bdcf1f6b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b7f632fc65c83f2d940407863c5e6b12bfadf377e331cdae46c6bdcf1f6b37->enter($__internal_c5b7f632fc65c83f2d940407863c5e6b12bfadf377e331cdae46c6bdcf1f6b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_32948c970f4b0870ef1674d26f3630f784776d55b1bd373872c30f4c9de1fcda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32948c970f4b0870ef1674d26f3630f784776d55b1bd373872c30f4c9de1fcda->enter($__internal_32948c970f4b0870ef1674d26f3630f784776d55b1bd373872c30f4c9de1fcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

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
        
        $__internal_32948c970f4b0870ef1674d26f3630f784776d55b1bd373872c30f4c9de1fcda->leave($__internal_32948c970f4b0870ef1674d26f3630f784776d55b1bd373872c30f4c9de1fcda_prof);

        
        $__internal_c5b7f632fc65c83f2d940407863c5e6b12bfadf377e331cdae46c6bdcf1f6b37->leave($__internal_c5b7f632fc65c83f2d940407863c5e6b12bfadf377e331cdae46c6bdcf1f6b37_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_cb9f8e0690c8be44ed174e71e97b7df0862e3b96cf0a57d98bba7a7cd43e007a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb9f8e0690c8be44ed174e71e97b7df0862e3b96cf0a57d98bba7a7cd43e007a->enter($__internal_cb9f8e0690c8be44ed174e71e97b7df0862e3b96cf0a57d98bba7a7cd43e007a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4d4898b209a783633d52833ead4ab0ad1bd6ce653b7a408050c1c0458042c443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4898b209a783633d52833ead4ab0ad1bd6ce653b7a408050c1c0458042c443->enter($__internal_4d4898b209a783633d52833ead4ab0ad1bd6ce653b7a408050c1c0458042c443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:display_boolean.html.twig", "SonataAdminBundle:CRUD:list_boolean.html.twig", 27)->display($context);
        
        $__internal_4d4898b209a783633d52833ead4ab0ad1bd6ce653b7a408050c1c0458042c443->leave($__internal_4d4898b209a783633d52833ead4ab0ad1bd6ce653b7a408050c1c0458042c443_prof);

        
        $__internal_cb9f8e0690c8be44ed174e71e97b7df0862e3b96cf0a57d98bba7a7cd43e007a->leave($__internal_cb9f8e0690c8be44ed174e71e97b7df0862e3b96cf0a57d98bba7a7cd43e007a_prof);

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
", "SonataAdminBundle:CRUD:list_boolean.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_boolean.html.twig");
    }
}
