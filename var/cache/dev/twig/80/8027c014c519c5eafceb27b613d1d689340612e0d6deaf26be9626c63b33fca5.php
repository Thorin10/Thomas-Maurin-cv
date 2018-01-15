<?php

/* SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig */
class __TwigTemplate_c2e578c4fd3c13d458bc6e6ea209a062a092646b981b2c66885807af443d40d8 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_245f211643778ba6734f5d19dc1e395d98e10cd4862db64cc15983220d169474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245f211643778ba6734f5d19dc1e395d98e10cd4862db64cc15983220d169474->enter($__internal_245f211643778ba6734f5d19dc1e395d98e10cd4862db64cc15983220d169474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig"));

        $__internal_abf59f562e41cef5740d79ee194d848fe92f9c4a6e03557786ee018ef1035094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf59f562e41cef5740d79ee194d848fe92f9c4a6e03557786ee018ef1035094->enter($__internal_abf59f562e41cef5740d79ee194d848fe92f9c4a6e03557786ee018ef1035094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_245f211643778ba6734f5d19dc1e395d98e10cd4862db64cc15983220d169474->leave($__internal_245f211643778ba6734f5d19dc1e395d98e10cd4862db64cc15983220d169474_prof);

        
        $__internal_abf59f562e41cef5740d79ee194d848fe92f9c4a6e03557786ee018ef1035094->leave($__internal_abf59f562e41cef5740d79ee194d848fe92f9c4a6e03557786ee018ef1035094_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0c1ee43c558033302ef7ee520043e15be907f24ef9c81084e891907b300f5902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c1ee43c558033302ef7ee520043e15be907f24ef9c81084e891907b300f5902->enter($__internal_0c1ee43c558033302ef7ee520043e15be907f24ef9c81084e891907b300f5902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_c190090687e77bc9cfe35ac7552974eb44e0a66b0908134f176805a77dca8d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c190090687e77bc9cfe35ac7552974eb44e0a66b0908134f176805a77dca8d56->enter($__internal_c190090687e77bc9cfe35ac7552974eb44e0a66b0908134f176805a77dca8d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_c190090687e77bc9cfe35ac7552974eb44e0a66b0908134f176805a77dca8d56->leave($__internal_c190090687e77bc9cfe35ac7552974eb44e0a66b0908134f176805a77dca8d56_prof);

        
        $__internal_0c1ee43c558033302ef7ee520043e15be907f24ef9c81084e891907b300f5902->leave($__internal_0c1ee43c558033302ef7ee520043e15be907f24ef9c81084e891907b300f5902_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_6846f7cb04e0b31e16a93079f748857e3cb4dc1fee893b1150d97aff9aa68f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6846f7cb04e0b31e16a93079f748857e3cb4dc1fee893b1150d97aff9aa68f92->enter($__internal_6846f7cb04e0b31e16a93079f748857e3cb4dc1fee893b1150d97aff9aa68f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_29fcac19de577508e6e8839565a6f27ae03a7017eebff28ce1710e99fc50ea4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29fcac19de577508e6e8839565a6f27ae03a7017eebff28ce1710e99fc50ea4e->enter($__internal_29fcac19de577508e6e8839565a6f27ae03a7017eebff28ce1710e99fc50ea4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["element"] ?? $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        // line 35
        echo "</a>";
        
        $__internal_29fcac19de577508e6e8839565a6f27ae03a7017eebff28ce1710e99fc50ea4e->leave($__internal_29fcac19de577508e6e8839565a6f27ae03a7017eebff28ce1710e99fc50ea4e_prof);

        
        $__internal_6846f7cb04e0b31e16a93079f748857e3cb4dc1fee893b1150d97aff9aa68f92->leave($__internal_6846f7cb04e0b31e16a93079f748857e3cb4dc1fee893b1150d97aff9aa68f92_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_8238b452fe2a9bc3c5e4e80501f4681b9b402d8ba5ee4060a0119094dbd3ca11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8238b452fe2a9bc3c5e4e80501f4681b9b402d8ba5ee4060a0119094dbd3ca11->enter($__internal_8238b452fe2a9bc3c5e4e80501f4681b9b402d8ba5ee4060a0119094dbd3ca11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_0a72ebc293fd2a12fb5db5550baea762bc7e8469496b4f4318590803afb425b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a72ebc293fd2a12fb5db5550baea762bc7e8469496b4f4318590803afb425b1->enter($__internal_0a72ebc293fd2a12fb5db5550baea762bc7e8469496b4f4318590803afb425b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_0a72ebc293fd2a12fb5db5550baea762bc7e8469496b4f4318590803afb425b1->leave($__internal_0a72ebc293fd2a12fb5db5550baea762bc7e8469496b4f4318590803afb425b1_prof);

        
        $__internal_8238b452fe2a9bc3c5e4e80501f4681b9b402d8ba5ee4060a0119094dbd3ca11->leave($__internal_8238b452fe2a9bc3c5e4e80501f4681b9b402d8ba5ee4060a0119094dbd3ca11_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig";
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
", "SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/Association/list_one_to_many.html.twig");
    }
}
