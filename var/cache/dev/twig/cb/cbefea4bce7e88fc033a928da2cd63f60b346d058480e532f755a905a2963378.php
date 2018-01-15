<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_25931bbff6140b545c0971790253e191d69539fcc33776d857174818510ebf7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
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
        $__internal_ebafb5f2a2b5ef16b1250607750636e0d16c4e0b66578a343e41157d08d6706c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebafb5f2a2b5ef16b1250607750636e0d16c4e0b66578a343e41157d08d6706c->enter($__internal_ebafb5f2a2b5ef16b1250607750636e0d16c4e0b66578a343e41157d08d6706c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $__internal_04338bc25fa9912440c71619adc8c6096afb151c109d174bac27c818c598d825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04338bc25fa9912440c71619adc8c6096afb151c109d174bac27c818c598d825->enter($__internal_04338bc25fa9912440c71619adc8c6096afb151c109d174bac27c818c598d825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebafb5f2a2b5ef16b1250607750636e0d16c4e0b66578a343e41157d08d6706c->leave($__internal_ebafb5f2a2b5ef16b1250607750636e0d16c4e0b66578a343e41157d08d6706c_prof);

        
        $__internal_04338bc25fa9912440c71619adc8c6096afb151c109d174bac27c818c598d825->leave($__internal_04338bc25fa9912440c71619adc8c6096afb151c109d174bac27c818c598d825_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8f4a02170ed06d8dab99b836d32fb8e60968d92abfd9c97ccb04e5deda3613d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4a02170ed06d8dab99b836d32fb8e60968d92abfd9c97ccb04e5deda3613d1->enter($__internal_8f4a02170ed06d8dab99b836d32fb8e60968d92abfd9c97ccb04e5deda3613d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8a786f2c16fc377904e0df89e741fb78a4b87ee573cec1d6b36cd226470da29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a786f2c16fc377904e0df89e741fb78a4b87ee573cec1d6b36cd226470da29f->enter($__internal_8a786f2c16fc377904e0df89e741fb78a4b87ee573cec1d6b36cd226470da29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:display_boolean.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 15)->display($context);
        
        $__internal_8a786f2c16fc377904e0df89e741fb78a4b87ee573cec1d6b36cd226470da29f->leave($__internal_8a786f2c16fc377904e0df89e741fb78a4b87ee573cec1d6b36cd226470da29f_prof);

        
        $__internal_8f4a02170ed06d8dab99b836d32fb8e60968d92abfd9c97ccb04e5deda3613d1->leave($__internal_8f4a02170ed06d8dab99b836d32fb8e60968d92abfd9c97ccb04e5deda3613d1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  40 => 14,  11 => 12,);
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
    {%- include 'SonataAdminBundle:CRUD:display_boolean.html.twig' -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_boolean.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_boolean.html.twig");
    }
}
