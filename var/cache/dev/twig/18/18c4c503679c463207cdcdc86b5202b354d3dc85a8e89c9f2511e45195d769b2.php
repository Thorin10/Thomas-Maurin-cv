<?php

/* SonataAdminBundle:CRUD/Association:show_one_to_one.html.twig */
class __TwigTemplate_961e651988265cdb647c59a09b17fb41f47d302289da4e0ba609fcb39edb9680 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD/Association:show_one_to_one.html.twig", 12);
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
        $__internal_4f608020f4c5766f34c871fcded4203c611d67350bf0b7171474cbebc21c1206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f608020f4c5766f34c871fcded4203c611d67350bf0b7171474cbebc21c1206->enter($__internal_4f608020f4c5766f34c871fcded4203c611d67350bf0b7171474cbebc21c1206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:show_one_to_one.html.twig"));

        $__internal_02d191c87a5ea7bd223ccf95d3c93867f553a10ab852c8cefb681ab5d8c44bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d191c87a5ea7bd223ccf95d3c93867f553a10ab852c8cefb681ab5d8c44bcc->enter($__internal_02d191c87a5ea7bd223ccf95d3c93867f553a10ab852c8cefb681ab5d8c44bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:show_one_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f608020f4c5766f34c871fcded4203c611d67350bf0b7171474cbebc21c1206->leave($__internal_4f608020f4c5766f34c871fcded4203c611d67350bf0b7171474cbebc21c1206_prof);

        
        $__internal_02d191c87a5ea7bd223ccf95d3c93867f553a10ab852c8cefb681ab5d8c44bcc->leave($__internal_02d191c87a5ea7bd223ccf95d3c93867f553a10ab852c8cefb681ab5d8c44bcc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b262beb4db61fef7327c296dc559d5b1597c5ca6ed773f4b301cf65b5be1b8fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b262beb4db61fef7327c296dc559d5b1597c5ca6ed773f4b301cf65b5be1b8fb->enter($__internal_b262beb4db61fef7327c296dc559d5b1597c5ca6ed773f4b301cf65b5be1b8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_88d8d0ef1039a08d77c6ee7a386d69d43927ddc29b954ee20cb0ddbfe5d769ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d8d0ef1039a08d77c6ee7a386d69d43927ddc29b954ee20cb0ddbfe5d769ee->enter($__internal_88d8d0ef1039a08d77c6ee7a386d69d43927ddc29b954ee20cb0ddbfe5d769ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (((($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute(        // line 17
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "id", array(0 => ($context["value"] ?? $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute(        // line 18
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(        // line 19
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value"))), "method"))) {
            // line 20
            echo "        <a href=\"";
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
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_88d8d0ef1039a08d77c6ee7a386d69d43927ddc29b954ee20cb0ddbfe5d769ee->leave($__internal_88d8d0ef1039a08d77c6ee7a386d69d43927ddc29b954ee20cb0ddbfe5d769ee_prof);

        
        $__internal_b262beb4db61fef7327c296dc559d5b1597c5ca6ed773f4b301cf65b5be1b8fb->leave($__internal_b262beb4db61fef7327c296dc559d5b1597c5ca6ed773f4b301cf65b5be1b8fb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:show_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  63 => 21,  58 => 20,  56 => 19,  55 => 18,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasAssociationAdmin
    and field_description.associationadmin.id(value)
    and field_description.associationadmin.hasRoute(route_name)
    and field_description.associationadmin.hasAccess(route_name, value) %}
        <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">
            {{ value|render_relation_element(field_description) }}
        </a>
    {% else %}
        {{ value|render_relation_element(field_description) }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD/Association:show_one_to_one.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/Association/show_one_to_one.html.twig");
    }
}
