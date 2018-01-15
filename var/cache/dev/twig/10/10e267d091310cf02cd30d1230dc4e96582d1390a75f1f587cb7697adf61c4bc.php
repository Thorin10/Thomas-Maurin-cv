<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_1dc55634680d4078ab636534e85233b975b7b20f8ab3fc6b9e92e08a2ac0a972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_7db8dc61e4921c8b92a2370f470867b4c8dc0daac4163de5993a1219bc83ec02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db8dc61e4921c8b92a2370f470867b4c8dc0daac4163de5993a1219bc83ec02->enter($__internal_7db8dc61e4921c8b92a2370f470867b4c8dc0daac4163de5993a1219bc83ec02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $__internal_d28a05ad5c03904c0ab74f59bf3586069b605503458d430be99f3dcb25789050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28a05ad5c03904c0ab74f59bf3586069b605503458d430be99f3dcb25789050->enter($__internal_d28a05ad5c03904c0ab74f59bf3586069b605503458d430be99f3dcb25789050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7db8dc61e4921c8b92a2370f470867b4c8dc0daac4163de5993a1219bc83ec02->leave($__internal_7db8dc61e4921c8b92a2370f470867b4c8dc0daac4163de5993a1219bc83ec02_prof);

        
        $__internal_d28a05ad5c03904c0ab74f59bf3586069b605503458d430be99f3dcb25789050->leave($__internal_d28a05ad5c03904c0ab74f59bf3586069b605503458d430be99f3dcb25789050_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ec34c179b1541fba5b18908887af8918189d11f902cf6e940265a99992f59fa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec34c179b1541fba5b18908887af8918189d11f902cf6e940265a99992f59fa0->enter($__internal_ec34c179b1541fba5b18908887af8918189d11f902cf6e940265a99992f59fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_3e6a77e162475ba74f27e7e09f3171ce2592060c379a37b52dffc0eb517a596f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6a77e162475ba74f27e7e09f3171ce2592060c379a37b52dffc0eb517a596f->enter($__internal_3e6a77e162475ba74f27e7e09f3171ce2592060c379a37b52dffc0eb517a596f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === ($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_3e6a77e162475ba74f27e7e09f3171ce2592060c379a37b52dffc0eb517a596f->leave($__internal_3e6a77e162475ba74f27e7e09f3171ce2592060c379a37b52dffc0eb517a596f_prof);

        
        $__internal_ec34c179b1541fba5b18908887af8918189d11f902cf6e940265a99992f59fa0->leave($__internal_ec34c179b1541fba5b18908887af8918189d11f902cf6e940265a99992f59fa0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_currency.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}
