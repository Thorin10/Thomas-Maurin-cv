<?php

/* SonataAdminBundle:CRUD/Association:list_many_to_one.html.twig */
class __TwigTemplate_b9a65ba65cba0ef370048d8d81dbc8ac4bca70be36d4c7165742fbbe227bb054 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD/Association:list_many_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a75362c3fff54635450523d79dfceb943cc48bd6843bc0ee157bc6465be298d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75362c3fff54635450523d79dfceb943cc48bd6843bc0ee157bc6465be298d6->enter($__internal_a75362c3fff54635450523d79dfceb943cc48bd6843bc0ee157bc6465be298d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:list_many_to_one.html.twig"));

        $__internal_1ab4a6b8e03b2c620ab48071914a10816428b815b9996e61f96627d625cbbf87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab4a6b8e03b2c620ab48071914a10816428b815b9996e61f96627d625cbbf87->enter($__internal_1ab4a6b8e03b2c620ab48071914a10816428b815b9996e61f96627d625cbbf87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:list_many_to_one.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a75362c3fff54635450523d79dfceb943cc48bd6843bc0ee157bc6465be298d6->leave($__internal_a75362c3fff54635450523d79dfceb943cc48bd6843bc0ee157bc6465be298d6_prof);

        
        $__internal_1ab4a6b8e03b2c620ab48071914a10816428b815b9996e61f96627d625cbbf87->leave($__internal_1ab4a6b8e03b2c620ab48071914a10816428b815b9996e61f96627d625cbbf87_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e64917337d524a23eb2f98b39378d0edb759ab6d917d66225f9d6ec5542018bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e64917337d524a23eb2f98b39378d0edb759ab6d917d66225f9d6ec5542018bc->enter($__internal_e64917337d524a23eb2f98b39378d0edb759ab6d917d66225f9d6ec5542018bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9300b2d8840d9d37b18ce5325414d73111c16627d899b6ca6b2121a74b9d528a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9300b2d8840d9d37b18ce5325414d73111c16627d899b6ca6b2121a74b9d528a->enter($__internal_9300b2d8840d9d37b18ce5325414d73111c16627d899b6ca6b2121a74b9d528a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if (($context["value"] ?? $this->getContext($context, "value"))) {
            // line 16
            echo "        ";
            $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
            // line 17
            echo "        ";
            if (((( !(($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "identifier", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "identifier", array()), false)) : (false)) && $this->getAttribute(            // line 18
($context["field_description"] ?? $this->getContext($context, "field_description")), "hasAssociationAdmin", array())) && $this->getAttribute($this->getAttribute(            // line 19
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(            // line 20
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value"))), "method"))) {
                // line 22
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 26
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "
        ";
            }
            // line 28
            echo "    ";
        }
        
        $__internal_9300b2d8840d9d37b18ce5325414d73111c16627d899b6ca6b2121a74b9d528a->leave($__internal_9300b2d8840d9d37b18ce5325414d73111c16627d899b6ca6b2121a74b9d528a_prof);

        
        $__internal_e64917337d524a23eb2f98b39378d0edb759ab6d917d66225f9d6ec5542018bc->leave($__internal_e64917337d524a23eb2f98b39378d0edb759ab6d917d66225f9d6ec5542018bc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:list_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  71 => 26,  65 => 23,  60 => 22,  58 => 20,  57 => 19,  56 => 18,  54 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {% if value %}
        {% set route_name = field_description.options.route.name %}
        {% if not field_description.options.identifier|default(false) and
              field_description.hasAssociationAdmin and
              field_description.associationadmin.hasRoute(route_name) and
              field_description.associationadmin.hasAccess(route_name, value)
        %}
            <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">
                {{ value|render_relation_element(field_description) }}
            </a>
        {% else %}
            {{ value|render_relation_element(field_description) }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD/Association:list_many_to_one.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/Association/list_many_to_one.html.twig");
    }
}
