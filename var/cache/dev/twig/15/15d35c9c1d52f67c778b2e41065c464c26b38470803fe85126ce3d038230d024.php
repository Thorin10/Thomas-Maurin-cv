<?php

/* SonataAdminBundle:CRUD:show_html.html.twig */
class __TwigTemplate_b081d8f8fe9d215bee63f5177245f11d1e12feda2ef137d1be5558e5943d8b12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_html.html.twig", 1);
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
        $__internal_cc05a8edb817a49cc122cd3132a0ea7b081149c8016e9b9c7f69bff9f54cd208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc05a8edb817a49cc122cd3132a0ea7b081149c8016e9b9c7f69bff9f54cd208->enter($__internal_cc05a8edb817a49cc122cd3132a0ea7b081149c8016e9b9c7f69bff9f54cd208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_html.html.twig"));

        $__internal_46b0696df7c27816405b949869094e397e0c97712c61b6abc8ab0dae62eac3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b0696df7c27816405b949869094e397e0c97712c61b6abc8ab0dae62eac3a6->enter($__internal_46b0696df7c27816405b949869094e397e0c97712c61b6abc8ab0dae62eac3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_html.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc05a8edb817a49cc122cd3132a0ea7b081149c8016e9b9c7f69bff9f54cd208->leave($__internal_cc05a8edb817a49cc122cd3132a0ea7b081149c8016e9b9c7f69bff9f54cd208_prof);

        
        $__internal_46b0696df7c27816405b949869094e397e0c97712c61b6abc8ab0dae62eac3a6->leave($__internal_46b0696df7c27816405b949869094e397e0c97712c61b6abc8ab0dae62eac3a6_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_3ca74bbf103e043a9bf3fdddb0c7811b11b1eac15c6caa751e27d41d84a5b0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca74bbf103e043a9bf3fdddb0c7811b11b1eac15c6caa751e27d41d84a5b0b7->enter($__internal_3ca74bbf103e043a9bf3fdddb0c7811b11b1eac15c6caa751e27d41d84a5b0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_deae53db6b084874b0134d41041952fd379811171700c6a8e9053ecb77eda73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deae53db6b084874b0134d41041952fd379811171700c6a8e9053ecb77eda73e->enter($__internal_deae53db6b084874b0134d41041952fd379811171700c6a8e9053ecb77eda73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "truncate", array(), "any", true, true)) {
                // line 8
                $context["truncate"] = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "truncate", array());
                // line 9
                echo "            ";
                $context["length"] = (($this->getAttribute(($context["truncate"] ?? null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "length", array()), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = (($this->getAttribute(($context["truncate"] ?? null), "preserve", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "preserve", array()), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = (($this->getAttribute(($context["truncate"] ?? null), "separator", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "separator", array()), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags(($context["value"] ?? $this->getContext($context, "value"))), ($context["length"] ?? $this->getContext($context, "length")), ($context["preserve"] ?? $this->getContext($context, "preserve")), ($context["separator"] ?? $this->getContext($context, "separator")));
            } else {
                // line 14
                if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "strip", array(), "any", true, true)) {
                    // line 15
                    $context["value"] = strip_tags(($context["value"] ?? $this->getContext($context, "value")));
                }
                // line 17
                echo ($context["value"] ?? $this->getContext($context, "value"));
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_deae53db6b084874b0134d41041952fd379811171700c6a8e9053ecb77eda73e->leave($__internal_deae53db6b084874b0134d41041952fd379811171700c6a8e9053ecb77eda73e_prof);

        
        $__internal_3ca74bbf103e043a9bf3fdddb0c7811b11b1eac15c6caa751e27d41d84a5b0b7->leave($__internal_3ca74bbf103e043a9bf3fdddb0c7811b11b1eac15c6caa751e27d41d84a5b0b7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  77 => 17,  74 => 15,  72 => 14,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  57 => 8,  55 => 7,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {% else %}
        {%- if field_description.options.truncate is defined -%}
            {% set truncate = field_description.options.truncate %}
            {% set length = truncate.length|default(30) %}
            {% set preserve = truncate.preserve|default(false) %}
            {% set separator = truncate.separator|default('...') %}
            {{ value|striptags|truncate(length, preserve, separator)|raw }}
        {%- else -%}
            {%- if field_description.options.strip is defined -%}
                {% set value = value|striptags %}
            {%- endif -%}
            {{ value|raw }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_html.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_html.html.twig");
    }
}
