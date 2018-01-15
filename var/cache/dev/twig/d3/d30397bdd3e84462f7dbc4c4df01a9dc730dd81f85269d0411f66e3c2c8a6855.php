<?php

/* SonataAdminBundle:CRUD/Association:show_many_to_one.html.twig */
class __TwigTemplate_329b33154883bd9ff4dd945dfbe70a1add3564df73cd4d430ac3317b91d07f6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD/Association:show_many_to_one.html.twig", 12);
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
        $__internal_266c4276a3a2375b2f84f0e04c60f3f9ff16027dfbafeabc6385e10a7990b837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266c4276a3a2375b2f84f0e04c60f3f9ff16027dfbafeabc6385e10a7990b837->enter($__internal_266c4276a3a2375b2f84f0e04c60f3f9ff16027dfbafeabc6385e10a7990b837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:show_many_to_one.html.twig"));

        $__internal_6527ec8f7406a332048a93ab2456e5ae38cff956ff3232065892dbc280547b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6527ec8f7406a332048a93ab2456e5ae38cff956ff3232065892dbc280547b8f->enter($__internal_6527ec8f7406a332048a93ab2456e5ae38cff956ff3232065892dbc280547b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:show_many_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_266c4276a3a2375b2f84f0e04c60f3f9ff16027dfbafeabc6385e10a7990b837->leave($__internal_266c4276a3a2375b2f84f0e04c60f3f9ff16027dfbafeabc6385e10a7990b837_prof);

        
        $__internal_6527ec8f7406a332048a93ab2456e5ae38cff956ff3232065892dbc280547b8f->leave($__internal_6527ec8f7406a332048a93ab2456e5ae38cff956ff3232065892dbc280547b8f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bbec0637a64c5cc19f384726c3e5d059c48c43177694dc24190df10ce04941cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbec0637a64c5cc19f384726c3e5d059c48c43177694dc24190df10ce04941cb->enter($__internal_bbec0637a64c5cc19f384726c3e5d059c48c43177694dc24190df10ce04941cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_dfc327f2da77c0740b8da1bd8b799d9dbfb060e4ce51a1bb5f40330c72e81458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc327f2da77c0740b8da1bd8b799d9dbfb060e4ce51a1bb5f40330c72e81458->enter($__internal_dfc327f2da77c0740b8da1bd8b799d9dbfb060e4ce51a1bb5f40330c72e81458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if (($context["value"] ?? $this->getContext($context, "value"))) {
            // line 16
            echo "        ";
            $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
            // line 17
            echo "        ";
            if ((($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute(            // line 18
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(            // line 19
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value"))), "method"))) {
                // line 20
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 24
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "
        ";
            }
            // line 26
            echo "    ";
        }
        
        $__internal_dfc327f2da77c0740b8da1bd8b799d9dbfb060e4ce51a1bb5f40330c72e81458->leave($__internal_dfc327f2da77c0740b8da1bd8b799d9dbfb060e4ce51a1bb5f40330c72e81458_prof);

        
        $__internal_bbec0637a64c5cc19f384726c3e5d059c48c43177694dc24190df10ce04941cb->leave($__internal_bbec0637a64c5cc19f384726c3e5d059c48c43177694dc24190df10ce04941cb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:show_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 26,  71 => 24,  65 => 21,  60 => 20,  58 => 19,  57 => 18,  55 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {% if value %}
        {% set route_name = field_description.options.route.name %}
        {% if field_description.hasAssociationAdmin
        and field_description.associationadmin.hasRoute(route_name)
        and field_description.associationadmin.hasAccess(route_name, value) %}
            <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">
                {{ value|render_relation_element(field_description) }}
            </a>
        {% else %}
            {{ value|render_relation_element(field_description) }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD/Association:show_many_to_one.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/Association/show_many_to_one.html.twig");
    }
}
