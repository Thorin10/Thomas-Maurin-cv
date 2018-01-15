<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_55b1f710d48dacd6072679295a72fec47118f2d0b88b4a6ee130d46769b42984 extends Twig_Template
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
        // line 13
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 13);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6187e40099640c4d97695cebf00e6dfa061e7958393ad851e7e7bc6fec98361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6187e40099640c4d97695cebf00e6dfa061e7958393ad851e7e7bc6fec98361->enter($__internal_c6187e40099640c4d97695cebf00e6dfa061e7958393ad851e7e7bc6fec98361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $__internal_cf4b7d329846cd2c37bba50de9ed8fc142e24267db83d7383dd7a85a4d98576a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4b7d329846cd2c37bba50de9ed8fc142e24267db83d7383dd7a85a4d98576a->enter($__internal_cf4b7d329846cd2c37bba50de9ed8fc142e24267db83d7383dd7a85a4d98576a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_array_macro.html.twig", "SonataAdminBundle:CRUD:list_array.html.twig", 11);
        // line 13
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6187e40099640c4d97695cebf00e6dfa061e7958393ad851e7e7bc6fec98361->leave($__internal_c6187e40099640c4d97695cebf00e6dfa061e7958393ad851e7e7bc6fec98361_prof);

        
        $__internal_cf4b7d329846cd2c37bba50de9ed8fc142e24267db83d7383dd7a85a4d98576a->leave($__internal_cf4b7d329846cd2c37bba50de9ed8fc142e24267db83d7383dd7a85a4d98576a_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_e636f6d35985e1e974b4c52071e37505366898b2662ede824b16b12660608799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e636f6d35985e1e974b4c52071e37505366898b2662ede824b16b12660608799->enter($__internal_e636f6d35985e1e974b4c52071e37505366898b2662ede824b16b12660608799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e939fdf9f7872a41e10254c096c7fffa4e99eb31c10ab1faf1d962ab60b9bcd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e939fdf9f7872a41e10254c096c7fffa4e99eb31c10ab1faf1d962ab60b9bcd9->enter($__internal_e939fdf9f7872a41e10254c096c7fffa4e99eb31c10ab1faf1d962ab60b9bcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["list"]->getrender_array(($context["value"] ?? $this->getContext($context, "value")), ( !$this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "inline", array(), "any", true, true) || $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "inline", array())));
        echo "
";
        
        $__internal_e939fdf9f7872a41e10254c096c7fffa4e99eb31c10ab1faf1d962ab60b9bcd9->leave($__internal_e939fdf9f7872a41e10254c096c7fffa4e99eb31c10ab1faf1d962ab60b9bcd9_prof);

        
        $__internal_e636f6d35985e1e974b4c52071e37505366898b2662ede824b16b12660608799->leave($__internal_e636f6d35985e1e974b4c52071e37505366898b2662ede824b16b12660608799_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  42 => 15,  32 => 13,  30 => 11,  18 => 13,);
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
{% import 'SonataAdminBundle:CRUD:base_array_macro.html.twig' as list %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ list.render_array(value, field_description.options.inline is not defined or field_description.options.inline) }}
{% endblock %}
", "SonataAdminBundle:CRUD:list_array.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_array.html.twig");
    }
}
