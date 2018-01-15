<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_eae28635b20a6718332173cd84046399f09e66f695dc2c9d1874609e61bac410 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff9cd24a2f688b0cccc6be1dd06a804aa5624961a74cea1559719950550f0670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9cd24a2f688b0cccc6be1dd06a804aa5624961a74cea1559719950550f0670->enter($__internal_ff9cd24a2f688b0cccc6be1dd06a804aa5624961a74cea1559719950550f0670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $__internal_7ad3f4a2b6a3ccd88e29cc953c1ff5ca48c6a6991d04ba2ddc0258ec1ec62037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad3f4a2b6a3ccd88e29cc953c1ff5ca48c6a6991d04ba2ddc0258ec1ec62037->enter($__internal_7ad3f4a2b6a3ccd88e29cc953c1ff5ca48c6a6991d04ba2ddc0258ec1ec62037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff9cd24a2f688b0cccc6be1dd06a804aa5624961a74cea1559719950550f0670->leave($__internal_ff9cd24a2f688b0cccc6be1dd06a804aa5624961a74cea1559719950550f0670_prof);

        
        $__internal_7ad3f4a2b6a3ccd88e29cc953c1ff5ca48c6a6991d04ba2ddc0258ec1ec62037->leave($__internal_7ad3f4a2b6a3ccd88e29cc953c1ff5ca48c6a6991d04ba2ddc0258ec1ec62037_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_79dc330224f0adb898a6773c7a2ade8b6aa8d9aab87247d7483b6ae2d4692b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79dc330224f0adb898a6773c7a2ade8b6aa8d9aab87247d7483b6ae2d4692b2c->enter($__internal_79dc330224f0adb898a6773c7a2ade8b6aa8d9aab87247d7483b6ae2d4692b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_25469a138eeff55b3e015d09903a7da177620d06d648cbf931b2d14deca6ccd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25469a138eeff55b3e015d09903a7da177620d06d648cbf931b2d14deca6ccd6->enter($__internal_25469a138eeff55b3e015d09903a7da177620d06d648cbf931b2d14deca6ccd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            $context["timezone"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "timezone", array())) : (null));
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "format", array()), ($context["timezone"] ?? $this->getContext($context, "timezone"))), "html", null, true);
        } elseif ($this->getAttribute($this->getAttribute(        // line 20
($context["field_description"] ?? null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) {
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), null, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "timezone", array())), "html", null, true);
        } else {
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_25469a138eeff55b3e015d09903a7da177620d06d648cbf931b2d14deca6ccd6->leave($__internal_25469a138eeff55b3e015d09903a7da177620d06d648cbf931b2d14deca6ccd6_prof);

        
        $__internal_79dc330224f0adb898a6773c7a2ade8b6aa8d9aab87247d7483b6ae2d4692b2c->leave($__internal_79dc330224f0adb898a6773c7a2ade8b6aa8d9aab87247d7483b6ae2d4692b2c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  61 => 21,  59 => 20,  56 => 19,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {%- elseif field_description.options.format is defined -%}
        {% set timezone = field_description.options.timezone is defined ? field_description.options.timezone : null %}
        {{ value|date(field_description.options.format, timezone) }}
    {%- elseif field_description.options.timezone is defined -%}
        {{ value|date(null, field_description.options.timezone) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_datetime.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_datetime.html.twig");
    }
}
