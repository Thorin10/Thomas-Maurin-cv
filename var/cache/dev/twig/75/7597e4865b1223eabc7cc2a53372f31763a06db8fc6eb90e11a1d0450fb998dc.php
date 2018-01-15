<?php

/* SonataAdminBundle:CRUD:base_list_flat_field.html.twig */
class __TwigTemplate_b814cfd29695ab3bfd1d2c0ddef6be8dc102b9012cd3653311240e0152aaeef3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01d93d31981c36377920ba33384b9c02afe3e4bb2555e2f3679acae9defd193f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d93d31981c36377920ba33384b9c02afe3e4bb2555e2f3679acae9defd193f->enter($__internal_01d93d31981c36377920ba33384b9c02afe3e4bb2555e2f3679acae9defd193f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_flat_field.html.twig"));

        $__internal_e36c330d8af36d84b9080791c7cf2772e31672cab6427fef7904fa965fe7455e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36c330d8af36d84b9080791c7cf2772e31672cab6427fef7904fa965fe7455e->enter($__internal_e36c330d8af36d84b9080791c7cf2772e31672cab6427fef7904fa965fe7455e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_flat_field.html.twig"));

        // line 11
        echo "
<span class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute(        // line 14
($context["field_description"] ?? null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute(        // line 15
($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute(        // line 16
($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method")) && $this->getAttribute(        // line 17
($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array())), "method"))) {
            // line 19
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), 1 => ($context["object"] ?? $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $this->displayBlock("field", $context, $blocks);
            echo "
    ";
        }
        // line 25
        echo "</span>
";
        
        $__internal_01d93d31981c36377920ba33384b9c02afe3e4bb2555e2f3679acae9defd193f->leave($__internal_01d93d31981c36377920ba33384b9c02afe3e4bb2555e2f3679acae9defd193f_prof);

        
        $__internal_e36c330d8af36d84b9080791c7cf2772e31672cab6427fef7904fa965fe7455e->leave($__internal_e36c330d8af36d84b9080791c7cf2772e31672cab6427fef7904fa965fe7455e_prof);

    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        $__internal_831a78bb4c98534502eea9ecbe7577697b0a5a0552c691c7b8899608b695fcc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831a78bb4c98534502eea9ecbe7577697b0a5a0552c691c7b8899608b695fcc2->enter($__internal_831a78bb4c98534502eea9ecbe7577697b0a5a0552c691c7b8899608b695fcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_2004bf1e73d82da1fa741672d2f705aeeee46d705a5bd51d464ebc40985fa6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2004bf1e73d82da1fa741672d2f705aeeee46d705a5bd51d464ebc40985fa6da->enter($__internal_2004bf1e73d82da1fa741672d2f705aeeee46d705a5bd51d464ebc40985fa6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        
        $__internal_2004bf1e73d82da1fa741672d2f705aeeee46d705a5bd51d464ebc40985fa6da->leave($__internal_2004bf1e73d82da1fa741672d2f705aeeee46d705a5bd51d464ebc40985fa6da_prof);

        
        $__internal_831a78bb4c98534502eea9ecbe7577697b0a5a0552c691c7b8899608b695fcc2->leave($__internal_831a78bb4c98534502eea9ecbe7577697b0a5a0552c691c7b8899608b695fcc2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_flat_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  57 => 25,  51 => 23,  47 => 21,  45 => 20,  41 => 19,  39 => 17,  38 => 16,  37 => 15,  36 => 14,  35 => 13,  29 => 12,  26 => 11,);
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

<span class=\"sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }}\" objectId=\"{{ admin.id(object) }}\">
    {% if
            field_description.options.identifier is defined
        and field_description.options.route is defined
        and admin.hasAccess(field_description.options.route.name, object)
        and admin.hasRoute(field_description.options.route.name)
    %}
        <a href=\"{{ admin.generateObjectUrl(field_description.options.route.name, object, field_description.options.route.parameters) }}\">
            {%- block field %}{{ value }}{% endblock -%}
        </a>
    {% else %}
        {{ block('field') }}
    {% endif %}
</span>
", "SonataAdminBundle:CRUD:base_list_flat_field.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list_flat_field.html.twig");
    }
}
