<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_9df5e35d2ff0da225897a1de7f7fbbb36d781e87ee49ad747049ef372b89b934 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d6b2a72938dafcde73dd5bed30cae1ecc17fdec7455551c417be6e70d573a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6b2a72938dafcde73dd5bed30cae1ecc17fdec7455551c417be6e70d573a26->enter($__internal_9d6b2a72938dafcde73dd5bed30cae1ecc17fdec7455551c417be6e70d573a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig"));

        $__internal_e48ddf9feea8777dfbdf8736869f6ec2c8343164f04937e5f1bf5c079473b6ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48ddf9feea8777dfbdf8736869f6ec2c8343164f04937e5f1bf5c079473b6ea->enter($__internal_e48ddf9feea8777dfbdf8736869f6ec2c8343164f04937e5f1bf5c079473b6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d6b2a72938dafcde73dd5bed30cae1ecc17fdec7455551c417be6e70d573a26->leave($__internal_9d6b2a72938dafcde73dd5bed30cae1ecc17fdec7455551c417be6e70d573a26_prof);

        
        $__internal_e48ddf9feea8777dfbdf8736869f6ec2c8343164f04937e5f1bf5c079473b6ea->leave($__internal_e48ddf9feea8777dfbdf8736869f6ec2c8343164f04937e5f1bf5c079473b6ea_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2f85c4c28f2ee1a90a8ffa888e6f0368d3a8abd40ad1b531811a19632ca229ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f85c4c28f2ee1a90a8ffa888e6f0368d3a8abd40ad1b531811a19632ca229ba->enter($__internal_2f85c4c28f2ee1a90a8ffa888e6f0368d3a8abd40ad1b531811a19632ca229ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_25ac6eb0875b5274fc1a9122b33abab2cf74570ef70d1ce8f03d7d8ca02c7aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ac6eb0875b5274fc1a9122b33abab2cf74570ef70d1ce8f03d7d8ca02c7aa2->enter($__internal_25ac6eb0875b5274fc1a9122b33abab2cf74570ef70d1ce8f03d7d8ca02c7aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_25ac6eb0875b5274fc1a9122b33abab2cf74570ef70d1ce8f03d7d8ca02c7aa2->leave($__internal_25ac6eb0875b5274fc1a9122b33abab2cf74570ef70d1ce8f03d7d8ca02c7aa2_prof);

        
        $__internal_2f85c4c28f2ee1a90a8ffa888e6f0368d3a8abd40ad1b531811a19632ca229ba->leave($__internal_2f85c4c28f2ee1a90a8ffa888e6f0368d3a8abd40ad1b531811a19632ca229ba_prof);

    }

    // line 33
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_7cd038cf24e868cd778adbfa47e2777c3eee686c6e551ee179d3eb795517b20e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd038cf24e868cd778adbfa47e2777c3eee686c6e551ee179d3eb795517b20e->enter($__internal_7cd038cf24e868cd778adbfa47e2777c3eee686c6e551ee179d3eb795517b20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_bd02a905f1bd7b50f8f26a162149ab3ee156a3e0d3abba25efe759b61f84d464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd02a905f1bd7b50f8f26a162149ab3ee156a3e0d3abba25efe759b61f84d464->enter($__internal_bd02a905f1bd7b50f8f26a162149ab3ee156a3e0d3abba25efe759b61f84d464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 34
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["element"] ?? $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        // line 36
        echo "</a>";
        
        $__internal_bd02a905f1bd7b50f8f26a162149ab3ee156a3e0d3abba25efe759b61f84d464->leave($__internal_bd02a905f1bd7b50f8f26a162149ab3ee156a3e0d3abba25efe759b61f84d464_prof);

        
        $__internal_7cd038cf24e868cd778adbfa47e2777c3eee686c6e551ee179d3eb795517b20e->leave($__internal_7cd038cf24e868cd778adbfa47e2777c3eee686c6e551ee179d3eb795517b20e_prof);

    }

    // line 39
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_8c490f81138ec7883208de2fb5d590cd4ab91a46fd2f67e8fbd1f4f51e50e2d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c490f81138ec7883208de2fb5d590cd4ab91a46fd2f67e8fbd1f4f51e50e2d1->enter($__internal_8c490f81138ec7883208de2fb5d590cd4ab91a46fd2f67e8fbd1f4f51e50e2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_3d561c434a3c05849d1a7b65734391e4fc0485cf4b5d647e1f7a90eefa2dd845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d561c434a3c05849d1a7b65734391e4fc0485cf4b5d647e1f7a90eefa2dd845->enter($__internal_3d561c434a3c05849d1a7b65734391e4fc0485cf4b5d647e1f7a90eefa2dd845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_3d561c434a3c05849d1a7b65734391e4fc0485cf4b5d647e1f7a90eefa2dd845->leave($__internal_3d561c434a3c05849d1a7b65734391e4fc0485cf4b5d647e1f7a90eefa2dd845_prof);

        
        $__internal_8c490f81138ec7883208de2fb5d590cd4ab91a46fd2f67e8fbd1f4f51e50e2d1->leave($__internal_8c490f81138ec7883208de2fb5d590cd4ab91a46fd2f67e8fbd1f4f51e50e2d1_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig";
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
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_many_to_many.html.twig");
    }
}
