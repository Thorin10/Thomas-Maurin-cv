<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_311aaaea1536937e9763e2f0766434702e01424b42bbf41efff1b423c7e3945b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_trans.html.twig", 11);
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
        $__internal_39e576e751cd00e69deff8bb561e9352efffb994fd3716df9818c530f7c23991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e576e751cd00e69deff8bb561e9352efffb994fd3716df9818c530f7c23991->enter($__internal_39e576e751cd00e69deff8bb561e9352efffb994fd3716df9818c530f7c23991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $__internal_c7f6cc96192099bae89898419fc28d37c9f90dce12dec24bb3d31a5ec233612f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f6cc96192099bae89898419fc28d37c9f90dce12dec24bb3d31a5ec233612f->enter($__internal_c7f6cc96192099bae89898419fc28d37c9f90dce12dec24bb3d31a5ec233612f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39e576e751cd00e69deff8bb561e9352efffb994fd3716df9818c530f7c23991->leave($__internal_39e576e751cd00e69deff8bb561e9352efffb994fd3716df9818c530f7c23991_prof);

        
        $__internal_c7f6cc96192099bae89898419fc28d37c9f90dce12dec24bb3d31a5ec233612f->leave($__internal_c7f6cc96192099bae89898419fc28d37c9f90dce12dec24bb3d31a5ec233612f_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_19966d5b12d7c4ec99b58b99d138ffeab603c05fca5c8fd797fb4c4c78eb473f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19966d5b12d7c4ec99b58b99d138ffeab603c05fca5c8fd797fb4c4c78eb473f->enter($__internal_19966d5b12d7c4ec99b58b99d138ffeab603c05fca5c8fd797fb4c4c78eb473f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_c3951e9483abed81d5961edc701c218aee0873f0f3e85c8f604b0c653982d1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3951e9483abed81d5961edc701c218aee0873f0f3e85c8f604b0c653982d1a3->enter($__internal_c3951e9483abed81d5961edc701c218aee0873f0f3e85c8f604b0c653982d1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value")), array(), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo ($context["value"] ?? $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_c3951e9483abed81d5961edc701c218aee0873f0f3e85c8f604b0c653982d1a3->leave($__internal_c3951e9483abed81d5961edc701c218aee0873f0f3e85c8f604b0c653982d1a3_prof);

        
        $__internal_19966d5b12d7c4ec99b58b99d138ffeab603c05fca5c8fd797fb4c4c78eb473f->leave($__internal_19966d5b12d7c4ec99b58b99d138ffeab603c05fca5c8fd797fb4c4c78eb473f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  69 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  40 => 13,  11 => 11,);
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

{% block field%}
    {% if field_description.options.catalogue is not defined %}
        {% set value = value|trans %}
    {% else %}
        {% set value = value|trans({}, field_description.options.catalogue) %}
    {% endif %}

    {% if field_description.options.safe %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_trans.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_trans.html.twig");
    }
}
