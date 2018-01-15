<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig */
class __TwigTemplate_3f1276126d9840a7367583d6ba893244d0f68a61e0a42d884aafe5cdfa9da1bd extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_defd9179247710fbb52ad2655c4631d29def03eb6edbf39c53922e66db8193fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_defd9179247710fbb52ad2655c4631d29def03eb6edbf39c53922e66db8193fa->enter($__internal_defd9179247710fbb52ad2655c4631d29def03eb6edbf39c53922e66db8193fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        $__internal_6796534f16f89dc6ddbb726f8a692b504ffeb70689480f31ad8947db6d57f980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6796534f16f89dc6ddbb726f8a692b504ffeb70689480f31ad8947db6d57f980->enter($__internal_6796534f16f89dc6ddbb726f8a692b504ffeb70689480f31ad8947db6d57f980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_defd9179247710fbb52ad2655c4631d29def03eb6edbf39c53922e66db8193fa->leave($__internal_defd9179247710fbb52ad2655c4631d29def03eb6edbf39c53922e66db8193fa_prof);

        
        $__internal_6796534f16f89dc6ddbb726f8a692b504ffeb70689480f31ad8947db6d57f980->leave($__internal_6796534f16f89dc6ddbb726f8a692b504ffeb70689480f31ad8947db6d57f980_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d6b31369ce1907f553e2ea4c52ba56fc75e7c7e234ea32e59e29b0e23a1eba77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b31369ce1907f553e2ea4c52ba56fc75e7c7e234ea32e59e29b0e23a1eba77->enter($__internal_d6b31369ce1907f553e2ea4c52ba56fc75e7c7e234ea32e59e29b0e23a1eba77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a11bae7170f19a1e3c64aa5c113b21e82f99a91bc84fcbd97c93f5c78f4673af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a11bae7170f19a1e3c64aa5c113b21e82f99a91bc84fcbd97c93f5c78f4673af->enter($__internal_a11bae7170f19a1e3c64aa5c113b21e82f99a91bc84fcbd97c93f5c78f4673af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 28
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
            // line 29
            echo "    ";
        }
        
        $__internal_a11bae7170f19a1e3c64aa5c113b21e82f99a91bc84fcbd97c93f5c78f4673af->leave($__internal_a11bae7170f19a1e3c64aa5c113b21e82f99a91bc84fcbd97c93f5c78f4673af_prof);

        
        $__internal_d6b31369ce1907f553e2ea4c52ba56fc75e7c7e234ea32e59e29b0e23a1eba77->leave($__internal_d6b31369ce1907f553e2ea4c52ba56fc75e7c7e234ea32e59e29b0e23a1eba77_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_aa66a24a2ec14dffa113963420e98ad34785b57a951e7bd3008c8f4ca9b479a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa66a24a2ec14dffa113963420e98ad34785b57a951e7bd3008c8f4ca9b479a0->enter($__internal_aa66a24a2ec14dffa113963420e98ad34785b57a951e7bd3008c8f4ca9b479a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_0df0179d35e9a0f6e4e7b665c1b95094c0382bbfd970065464857ef7721df305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df0179d35e9a0f6e4e7b665c1b95094c0382bbfd970065464857ef7721df305->enter($__internal_0df0179d35e9a0f6e4e7b665c1b95094c0382bbfd970065464857ef7721df305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["element"] ?? $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        // line 35
        echo "</a>";
        
        $__internal_0df0179d35e9a0f6e4e7b665c1b95094c0382bbfd970065464857ef7721df305->leave($__internal_0df0179d35e9a0f6e4e7b665c1b95094c0382bbfd970065464857ef7721df305_prof);

        
        $__internal_aa66a24a2ec14dffa113963420e98ad34785b57a951e7bd3008c8f4ca9b479a0->leave($__internal_aa66a24a2ec14dffa113963420e98ad34785b57a951e7bd3008c8f4ca9b479a0_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_4dd763386c7f158a08d3bd6e9cfb9aac43756ea15780931ffe308dd9127e2ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd763386c7f158a08d3bd6e9cfb9aac43756ea15780931ffe308dd9127e2ebc->enter($__internal_4dd763386c7f158a08d3bd6e9cfb9aac43756ea15780931ffe308dd9127e2ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_36e1e182bf64661226b683a99df2e9809d47cbd6d3ba84b47e7030938ace4a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e1e182bf64661226b683a99df2e9809d47cbd6d3ba84b47e7030938ace4a36->enter($__internal_36e1e182bf64661226b683a99df2e9809d47cbd6d3ba84b47e7030938ace4a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_36e1e182bf64661226b683a99df2e9809d47cbd6d3ba84b47e7030938ace4a36->leave($__internal_36e1e182bf64661226b683a99df2e9809d47cbd6d3ba84b47e7030938ace4a36_prof);

        
        $__internal_4dd763386c7f158a08d3bd6e9cfb9aac43756ea15780931ffe308dd9127e2ebc->leave($__internal_4dd763386c7f158a08d3bd6e9cfb9aac43756ea15780931ffe308dd9127e2ebc_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 39,  177 => 38,  167 => 35,  165 => 34,  161 => 33,  152 => 32,  141 => 29,  127 => 28,  121 => 27,  103 => 26,  100 => 25,  86 => 24,  82 => 23,  79 => 21,  76 => 19,  74 => 18,  56 => 17,  53 => 16,  50 => 15,  41 => 14,  20 => 12,);
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
        {% for element in value %}
            {{ block('relation_value') }}{% if not loop.last %}, {% endif %}
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
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_one_to_many.html.twig");
    }
}
