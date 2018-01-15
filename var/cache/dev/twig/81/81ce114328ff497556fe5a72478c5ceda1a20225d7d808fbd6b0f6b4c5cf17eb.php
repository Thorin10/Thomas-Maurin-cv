<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_b533c6a6dd1ad9c39a94978f764dd98fe087aa81cd14478eb3755d620e784f83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11f0b4597da00ec732e2dac68442d4ea044c7b5a67093a510caa54e832414290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f0b4597da00ec732e2dac68442d4ea044c7b5a67093a510caa54e832414290->enter($__internal_11f0b4597da00ec732e2dac68442d4ea044c7b5a67093a510caa54e832414290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        $__internal_c367e39cd1b438533bfedfe28f832258652db1527b301bc9365c8ad52f6b37c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c367e39cd1b438533bfedfe28f832258652db1527b301bc9365c8ad52f6b37c2->enter($__internal_c367e39cd1b438533bfedfe28f832258652db1527b301bc9365c8ad52f6b37c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11f0b4597da00ec732e2dac68442d4ea044c7b5a67093a510caa54e832414290->leave($__internal_11f0b4597da00ec732e2dac68442d4ea044c7b5a67093a510caa54e832414290_prof);

        
        $__internal_c367e39cd1b438533bfedfe28f832258652db1527b301bc9365c8ad52f6b37c2->leave($__internal_c367e39cd1b438533bfedfe28f832258652db1527b301bc9365c8ad52f6b37c2_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_f935aa8d657acf31ef92e1d0ceb3bc985a258de93c3cf8f2e6703b977b435fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f935aa8d657acf31ef92e1d0ceb3bc985a258de93c3cf8f2e6703b977b435fbe->enter($__internal_f935aa8d657acf31ef92e1d0ceb3bc985a258de93c3cf8f2e6703b977b435fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_7ab5eeb0aeb808ddd61ba37d797eb0e40fd455286474025f8f542e9ad80c64c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab5eeb0aeb808ddd61ba37d797eb0e40fd455286474025f8f542e9ad80c64c7->enter($__internal_7ab5eeb0aeb808ddd61ba37d797eb0e40fd455286474025f8f542e9ad80c64c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_7ab5eeb0aeb808ddd61ba37d797eb0e40fd455286474025f8f542e9ad80c64c7->leave($__internal_7ab5eeb0aeb808ddd61ba37d797eb0e40fd455286474025f8f542e9ad80c64c7_prof);

        
        $__internal_f935aa8d657acf31ef92e1d0ceb3bc985a258de93c3cf8f2e6703b977b435fbe->leave($__internal_f935aa8d657acf31ef92e1d0ceb3bc985a258de93c3cf8f2e6703b977b435fbe_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_82fcf05a27871aa0c244bd9f6c92b62dab3a8516ca316dcf3bc4bf47c1794406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82fcf05a27871aa0c244bd9f6c92b62dab3a8516ca316dcf3bc4bf47c1794406->enter($__internal_82fcf05a27871aa0c244bd9f6c92b62dab3a8516ca316dcf3bc4bf47c1794406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_9b2d06a0a14cfeaba89d813b45750fba9670ac3fbfc472e057d64b36df1b007a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2d06a0a14cfeaba89d813b45750fba9670ac3fbfc472e057d64b36df1b007a->enter($__internal_9b2d06a0a14cfeaba89d813b45750fba9670ac3fbfc472e057d64b36df1b007a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_9b2d06a0a14cfeaba89d813b45750fba9670ac3fbfc472e057d64b36df1b007a->leave($__internal_9b2d06a0a14cfeaba89d813b45750fba9670ac3fbfc472e057d64b36df1b007a_prof);

        
        $__internal_82fcf05a27871aa0c244bd9f6c92b62dab3a8516ca316dcf3bc4bf47c1794406->leave($__internal_82fcf05a27871aa0c244bd9f6c92b62dab3a8516ca316dcf3bc4bf47c1794406_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_a4104b075fff0a3a115963e1dbd8c043c615b68b4da6be1c2e2546ec1128c8a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4104b075fff0a3a115963e1dbd8c043c615b68b4da6be1c2e2546ec1128c8a9->enter($__internal_a4104b075fff0a3a115963e1dbd8c043c615b68b4da6be1c2e2546ec1128c8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        $__internal_f2d6733e465be30370c8f653943c6fa6056ed1f0bcb4e672c198b4f37f4c28ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d6733e465be30370c8f653943c6fa6056ed1f0bcb4e672c198b4f37f4c28ab->enter($__internal_f2d6733e465be30370c8f653943c6fa6056ed1f0bcb4e672c198b4f37f4c28ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclRolesForm"] ?? $this->getContext($context, "aclRolesForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_role", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_f2d6733e465be30370c8f653943c6fa6056ed1f0bcb4e672c198b4f37f4c28ab->leave($__internal_f2d6733e465be30370c8f653943c6fa6056ed1f0bcb4e672c198b4f37f4c28ab_prof);

        
        $__internal_a4104b075fff0a3a115963e1dbd8c043c615b68b4da6be1c2e2546ec1128c8a9->leave($__internal_a4104b075fff0a3a115963e1dbd8c043c615b68b4da6be1c2e2546ec1128c8a9_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_efcc6a8f5958953b2bf3e02b6d2730f421650340f9226ad19473d3b845a3b815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efcc6a8f5958953b2bf3e02b6d2730f421650340f9226ad19473d3b845a3b815->enter($__internal_efcc6a8f5958953b2bf3e02b6d2730f421650340f9226ad19473d3b845a3b815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        $__internal_16860db96903f68fedbaaa88ffa764f5332a379cdd97d665ca60f9d3ef3fc12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16860db96903f68fedbaaa88ffa764f5332a379cdd97d665ca60f9d3ef3fc12e->enter($__internal_16860db96903f68fedbaaa88ffa764f5332a379cdd97d665ca60f9d3ef3fc12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclUsersForm"] ?? $this->getContext($context, "aclUsersForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_username", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_16860db96903f68fedbaaa88ffa764f5332a379cdd97d665ca60f9d3ef3fc12e->leave($__internal_16860db96903f68fedbaaa88ffa764f5332a379cdd97d665ca60f9d3ef3fc12e_prof);

        
        $__internal_efcc6a8f5958953b2bf3e02b6d2730f421650340f9226ad19473d3b845a3b815->leave($__internal_efcc6a8f5958953b2bf3e02b6d2730f421650340f9226ad19473d3b845a3b815_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  109 => 24,  96 => 22,  87 => 21,  76 => 24,  73 => 21,  64 => 20,  54 => 15,  45 => 14,  35 => 12,  33 => 18,  21 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_acl.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
