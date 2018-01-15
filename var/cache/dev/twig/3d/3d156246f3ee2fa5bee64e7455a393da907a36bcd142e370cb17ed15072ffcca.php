<?php

/* SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig */
class __TwigTemplate_33e5381146bbb2fbf025a6e4993f9492f6fdf4e603bc9c540ca9753fd470a47b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig", 12);
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
        $__internal_3fcb15e6ad6d60d837e1e1726e001b12d430f7cbb11cf3857ad7b138546a7811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fcb15e6ad6d60d837e1e1726e001b12d430f7cbb11cf3857ad7b138546a7811->enter($__internal_3fcb15e6ad6d60d837e1e1726e001b12d430f7cbb11cf3857ad7b138546a7811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig"));

        $__internal_9dde2717c7ba209da8ccd6c17d6ae070f26fbc078f54eb649df47aabdd7a8148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dde2717c7ba209da8ccd6c17d6ae070f26fbc078f54eb649df47aabdd7a8148->enter($__internal_9dde2717c7ba209da8ccd6c17d6ae070f26fbc078f54eb649df47aabdd7a8148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fcb15e6ad6d60d837e1e1726e001b12d430f7cbb11cf3857ad7b138546a7811->leave($__internal_3fcb15e6ad6d60d837e1e1726e001b12d430f7cbb11cf3857ad7b138546a7811_prof);

        
        $__internal_9dde2717c7ba209da8ccd6c17d6ae070f26fbc078f54eb649df47aabdd7a8148->leave($__internal_9dde2717c7ba209da8ccd6c17d6ae070f26fbc078f54eb649df47aabdd7a8148_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_70308e69cd6fafd8c8ea699238655a0d97a30db280260d13cacd47e1e7bf4cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70308e69cd6fafd8c8ea699238655a0d97a30db280260d13cacd47e1e7bf4cf9->enter($__internal_70308e69cd6fafd8c8ea699238655a0d97a30db280260d13cacd47e1e7bf4cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_112a1d0a86cc3c8c73b7e4d8cb0816cb1ff500677b77af29cbfe761a2234e888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112a1d0a86cc3c8c73b7e4d8cb0816cb1ff500677b77af29cbfe761a2234e888->enter($__internal_112a1d0a86cc3c8c73b7e4d8cb0816cb1ff500677b77af29cbfe761a2234e888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <ul class=\"sonata-ba-show-one-to-many\">
    ";
        // line 16
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 18
            echo "        ";
            if ((($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute(            // line 19
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(            // line 20
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => $context["element"]), "method"))) {
                // line 21
                echo "            <li>
                <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                    ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "
                </a>
            </li>
        ";
            } else {
                // line 27
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "</li>
        ";
            }
            // line 29
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </ul>
";
        
        $__internal_112a1d0a86cc3c8c73b7e4d8cb0816cb1ff500677b77af29cbfe761a2234e888->leave($__internal_112a1d0a86cc3c8c73b7e4d8cb0816cb1ff500677b77af29cbfe761a2234e888_prof);

        
        $__internal_70308e69cd6fafd8c8ea699238655a0d97a30db280260d13cacd47e1e7bf4cf9->leave($__internal_70308e69cd6fafd8c8ea699238655a0d97a30db280260d13cacd47e1e7bf4cf9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  84 => 29,  78 => 27,  71 => 23,  67 => 22,  64 => 21,  62 => 20,  61 => 19,  59 => 18,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    <ul class=\"sonata-ba-show-one-to-many\">
    {% set route_name = field_description.options.route.name %}
    {% for element in value%}
        {% if field_description.hasassociationadmin
        and field_description.associationadmin.hasRoute(route_name)
        and field_description.associationadmin.hasAccess(route_name, element) %}
            <li>
                <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
                    {{ element|render_relation_element(field_description) }}
                </a>
            </li>
        {% else %}
            <li>{{ element|render_relation_element(field_description) }}</li>
        {% endif %}
    {% endfor %}
    </ul>
{% endblock %}
", "SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/Association/show_one_to_many.html.twig");
    }
}
