<?php

/* SonataAdminBundle:CRUD/Association:list_one_to_one.html.twig */
class __TwigTemplate_2d4696c4716eb17078c866004409f7d955f3fb9f792d3eba6d1e91c994c3ee35 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD/Association:list_one_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b79a1e5e381ed8a22e926073ef4306768f99a4908b8b7a999c919e3393c6ba24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79a1e5e381ed8a22e926073ef4306768f99a4908b8b7a999c919e3393c6ba24->enter($__internal_b79a1e5e381ed8a22e926073ef4306768f99a4908b8b7a999c919e3393c6ba24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:list_one_to_one.html.twig"));

        $__internal_00773363a3473f36bf410e551c762b74a06b34f64a0bf89c6802908f1de4fc44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00773363a3473f36bf410e551c762b74a06b34f64a0bf89c6802908f1de4fc44->enter($__internal_00773363a3473f36bf410e551c762b74a06b34f64a0bf89c6802908f1de4fc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:list_one_to_one.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b79a1e5e381ed8a22e926073ef4306768f99a4908b8b7a999c919e3393c6ba24->leave($__internal_b79a1e5e381ed8a22e926073ef4306768f99a4908b8b7a999c919e3393c6ba24_prof);

        
        $__internal_00773363a3473f36bf410e551c762b74a06b34f64a0bf89c6802908f1de4fc44->leave($__internal_00773363a3473f36bf410e551c762b74a06b34f64a0bf89c6802908f1de4fc44_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_12ee647f103401a3e0619091a38c3c0342bba1b91c9b7c2c5838c54d7b02f1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ee647f103401a3e0619091a38c3c0342bba1b91c9b7c2c5838c54d7b02f1a2->enter($__internal_12ee647f103401a3e0619091a38c3c0342bba1b91c9b7c2c5838c54d7b02f1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_b8fe31bd3912f525d52561c6ad73e06ad69b146117978ba55af8d83c685eb55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fe31bd3912f525d52561c6ad73e06ad69b146117978ba55af8d83c685eb55b->enter($__internal_b8fe31bd3912f525d52561c6ad73e06ad69b146117978ba55af8d83c685eb55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_b8fe31bd3912f525d52561c6ad73e06ad69b146117978ba55af8d83c685eb55b->leave($__internal_b8fe31bd3912f525d52561c6ad73e06ad69b146117978ba55af8d83c685eb55b_prof);

        
        $__internal_12ee647f103401a3e0619091a38c3c0342bba1b91c9b7c2c5838c54d7b02f1a2->leave($__internal_12ee647f103401a3e0619091a38c3c0342bba1b91c9b7c2c5838c54d7b02f1a2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:list_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  57 => 20,  55 => 19,  54 => 18,  53 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasAssociationAdmin
    and field_description.associationadmin.id(value)
    and field_description.associationadmin.hasRoute(route_name)
    and field_description.associationadmin.hasAccess(route_name, value) %}
        <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">{{ value|render_relation_element(field_description) }}</a>
    {% else %}
        {{ value|render_relation_element(field_description) }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD/Association:list_one_to_one.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/Association/list_one_to_one.html.twig");
    }
}
