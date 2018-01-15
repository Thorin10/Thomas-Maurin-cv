<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_fdf2c2a31df3af2fe3829a9354f4def1a45a65af4db6a21f6a330a192b0eed5d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6c315cf4e9684330f16f8c3b0b98ab5efd8ce6992386e9d703b941b52f89695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c315cf4e9684330f16f8c3b0b98ab5efd8ce6992386e9d703b941b52f89695->enter($__internal_d6c315cf4e9684330f16f8c3b0b98ab5efd8ce6992386e9d703b941b52f89695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $__internal_ca4fd718373edcdb0fcf42bba7352e58ad136879796d4b89e2e12e03b8f71e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4fd718373edcdb0fcf42bba7352e58ad136879796d4b89e2e12e03b8f71e5c->enter($__internal_ca4fd718373edcdb0fcf42bba7352e58ad136879796d4b89e2e12e03b8f71e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6c315cf4e9684330f16f8c3b0b98ab5efd8ce6992386e9d703b941b52f89695->leave($__internal_d6c315cf4e9684330f16f8c3b0b98ab5efd8ce6992386e9d703b941b52f89695_prof);

        
        $__internal_ca4fd718373edcdb0fcf42bba7352e58ad136879796d4b89e2e12e03b8f71e5c->leave($__internal_ca4fd718373edcdb0fcf42bba7352e58ad136879796d4b89e2e12e03b8f71e5c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f1fda08509c3b317ad0a4649fecae50d61ec1fdfb66b648918352bb712ae8bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1fda08509c3b317ad0a4649fecae50d61ec1fdfb66b648918352bb712ae8bba->enter($__internal_f1fda08509c3b317ad0a4649fecae50d61ec1fdfb66b648918352bb712ae8bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_21bf2a2dda255bde77aee65d64c604457c733040e0c3e14ff72dfc25de4d11fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21bf2a2dda255bde77aee65d64c604457c733040e0c3e14ff72dfc25de4d11fb->enter($__internal_21bf2a2dda255bde77aee65d64c604457c733040e0c3e14ff72dfc25de4d11fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_21bf2a2dda255bde77aee65d64c604457c733040e0c3e14ff72dfc25de4d11fb->leave($__internal_21bf2a2dda255bde77aee65d64c604457c733040e0c3e14ff72dfc25de4d11fb_prof);

        
        $__internal_f1fda08509c3b317ad0a4649fecae50d61ec1fdfb66b648918352bb712ae8bba->leave($__internal_f1fda08509c3b317ad0a4649fecae50d61ec1fdfb66b648918352bb712ae8bba_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_time.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_time.html.twig");
    }
}
