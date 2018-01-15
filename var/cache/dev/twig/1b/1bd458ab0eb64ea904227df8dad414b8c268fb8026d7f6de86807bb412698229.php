<?php

/* SonataAdminBundle:CRUD/Association:list_many_to_many.html.twig */
class __TwigTemplate_53816383aa65fc41e99dcc5a3c29185df439ab14ebbabdd29937bae1dd4b7cc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD/Association:list_many_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71966263f78d3b1fd90d3cabe1c7e6927846a0a7512dcb439857a7befeca2d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71966263f78d3b1fd90d3cabe1c7e6927846a0a7512dcb439857a7befeca2d7b->enter($__internal_71966263f78d3b1fd90d3cabe1c7e6927846a0a7512dcb439857a7befeca2d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:list_many_to_many.html.twig"));

        $__internal_2770dca5c41d12477969f8dc1db5a82f7bde72c927046d80589c6c819d5ace7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2770dca5c41d12477969f8dc1db5a82f7bde72c927046d80589c6c819d5ace7b->enter($__internal_2770dca5c41d12477969f8dc1db5a82f7bde72c927046d80589c6c819d5ace7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:list_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71966263f78d3b1fd90d3cabe1c7e6927846a0a7512dcb439857a7befeca2d7b->leave($__internal_71966263f78d3b1fd90d3cabe1c7e6927846a0a7512dcb439857a7befeca2d7b_prof);

        
        $__internal_2770dca5c41d12477969f8dc1db5a82f7bde72c927046d80589c6c819d5ace7b->leave($__internal_2770dca5c41d12477969f8dc1db5a82f7bde72c927046d80589c6c819d5ace7b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3e36cbf1f27be56c5be2524f48b0c568f1caf89c6b6d9d9c4c2c30fcbd475f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e36cbf1f27be56c5be2524f48b0c568f1caf89c6b6d9d9c4c2c30fcbd475f73->enter($__internal_3e36cbf1f27be56c5be2524f48b0c568f1caf89c6b6d9d9c4c2c30fcbd475f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8584dec18297b4c73243f74159268b626feba3ace0527a7549382dc905ea3953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8584dec18297b4c73243f74159268b626feba3ace0527a7549382dc905ea3953->enter($__internal_8584dec18297b4c73243f74159268b626feba3ace0527a7549382dc905ea3953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => $context["element"]), "method")) {
                    // line 19
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 21
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 23
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 24
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 27
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                echo "
            ";
                // line 28
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 29
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    ";
        }
        
        $__internal_8584dec18297b4c73243f74159268b626feba3ace0527a7549382dc905ea3953->leave($__internal_8584dec18297b4c73243f74159268b626feba3ace0527a7549382dc905ea3953_prof);

        
        $__internal_3e36cbf1f27be56c5be2524f48b0c568f1caf89c6b6d9d9c4c2c30fcbd475f73->leave($__internal_3e36cbf1f27be56c5be2524f48b0c568f1caf89c6b6d9d9c4c2c30fcbd475f73_prof);

    }

    // line 33
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_ac211bd0304f83a3e68bdda6a8c875f76c47740c1294dd7612c3ef0de0fee7c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac211bd0304f83a3e68bdda6a8c875f76c47740c1294dd7612c3ef0de0fee7c9->enter($__internal_ac211bd0304f83a3e68bdda6a8c875f76c47740c1294dd7612c3ef0de0fee7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_44d2778c5df672974be6f24ee6752185cf4cca820511c57325987410088a3c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d2778c5df672974be6f24ee6752185cf4cca820511c57325987410088a3c64->enter($__internal_44d2778c5df672974be6f24ee6752185cf4cca820511c57325987410088a3c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 34
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["element"] ?? $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        // line 36
        echo "</a>";
        
        $__internal_44d2778c5df672974be6f24ee6752185cf4cca820511c57325987410088a3c64->leave($__internal_44d2778c5df672974be6f24ee6752185cf4cca820511c57325987410088a3c64_prof);

        
        $__internal_ac211bd0304f83a3e68bdda6a8c875f76c47740c1294dd7612c3ef0de0fee7c9->leave($__internal_ac211bd0304f83a3e68bdda6a8c875f76c47740c1294dd7612c3ef0de0fee7c9_prof);

    }

    // line 39
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_a29d9a057a7482183dde408273abcf4349151865fa4048dc223ae5433fcc7b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a29d9a057a7482183dde408273abcf4349151865fa4048dc223ae5433fcc7b14->enter($__internal_a29d9a057a7482183dde408273abcf4349151865fa4048dc223ae5433fcc7b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_64f1fe1e0271ffd2f6ea0b79dc39df4c023138b165e3336226470e038b09f05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f1fe1e0271ffd2f6ea0b79dc39df4c023138b165e3336226470e038b09f05a->enter($__internal_64f1fe1e0271ffd2f6ea0b79dc39df4c023138b165e3336226470e038b09f05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_64f1fe1e0271ffd2f6ea0b79dc39df4c023138b165e3336226470e038b09f05a->leave($__internal_64f1fe1e0271ffd2f6ea0b79dc39df4c023138b165e3336226470e038b09f05a_prof);

        
        $__internal_a29d9a057a7482183dde408273abcf4349151865fa4048dc223ae5433fcc7b14->leave($__internal_a29d9a057a7482183dde408273abcf4349151865fa4048dc223ae5433fcc7b14_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:list_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 40,  180 => 39,  170 => 36,  168 => 35,  164 => 34,  155 => 33,  144 => 30,  130 => 29,  126 => 28,  121 => 27,  103 => 26,  100 => 25,  86 => 24,  82 => 23,  79 => 21,  76 => 19,  74 => 18,  56 => 17,  53 => 16,  50 => 15,  41 => 14,  20 => 12,);
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
    {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) %}
        {% for element in value %}
            {%- if field_description.associationadmin.hasAccess(route_name, element) -%}
                {{ block('relation_link') }}
            {%- else -%}
                {{ block('relation_value') }}
            {%- endif -%}
            {% if not loop.last %}, {% endif %}
        {% endfor %}
    {% else %}
        {% for element in value%}
            {{ block('relation_value') }}
            {% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
{% endblock %}

{%- block relation_link -%}
    <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
        {{- element|render_relation_element(field_description) -}}
    </a>
{%- endblock -%}

{%- block relation_value -%}
    {{- element|render_relation_element(field_description) -}}
{%- endblock -%}
", "SonataAdminBundle:CRUD/Association:list_many_to_many.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/Association/list_many_to_many.html.twig");
    }
}
