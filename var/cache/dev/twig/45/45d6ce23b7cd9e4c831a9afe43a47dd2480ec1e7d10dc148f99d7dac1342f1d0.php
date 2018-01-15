<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_f5a589dc7e786459c29dc49f20c632d4c3eac5a5b90fdbba5abd41e56bdd0edc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 12);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78c58dc0b96502237a44c269b20489c25bc49e172f3d2d036819e270811eb5cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c58dc0b96502237a44c269b20489c25bc49e172f3d2d036819e270811eb5cb->enter($__internal_78c58dc0b96502237a44c269b20489c25bc49e172f3d2d036819e270811eb5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_side_menu_template.html.twig"));

        $__internal_af800805f3bb570ec878a1635e2fe2093005b3e79c4a70f6ba6b0d27a76f7340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af800805f3bb570ec878a1635e2fe2093005b3e79c4a70f6ba6b0d27a76f7340->enter($__internal_af800805f3bb570ec878a1635e2fe2093005b3e79c4a70f6ba6b0d27a76f7340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_side_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78c58dc0b96502237a44c269b20489c25bc49e172f3d2d036819e270811eb5cb->leave($__internal_78c58dc0b96502237a44c269b20489c25bc49e172f3d2d036819e270811eb5cb_prof);

        
        $__internal_af800805f3bb570ec878a1635e2fe2093005b3e79c4a70f6ba6b0d27a76f7340->leave($__internal_af800805f3bb570ec878a1635e2fe2093005b3e79c4a70f6ba6b0d27a76f7340_prof);

    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        $__internal_d3b98d69950d15a42120b549e81983dcee7fa0e433fa5d8c89bff119f07f0ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b98d69950d15a42120b549e81983dcee7fa0e433fa5d8c89bff119f07f0ea5->enter($__internal_d3b98d69950d15a42120b549e81983dcee7fa0e433fa5d8c89bff119f07f0ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_d0c9f4427bc0c4321d12a1ced6357cf7c76a6fed7ec9253afe559e56720d5c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c9f4427bc0c4321d12a1ced6357cf7c76a6fed7ec9253afe559e56720d5c6b->enter($__internal_d0c9f4427bc0c4321d12a1ced6357cf7c76a6fed7ec9253afe559e56720d5c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 15
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 15);
        // line 16
        echo "    ";
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
        
        $__internal_d0c9f4427bc0c4321d12a1ced6357cf7c76a6fed7ec9253afe559e56720d5c6b->leave($__internal_d0c9f4427bc0c4321d12a1ced6357cf7c76a6fed7ec9253afe559e56720d5c6b_prof);

        
        $__internal_d3b98d69950d15a42120b549e81983dcee7fa0e433fa5d8c89bff119f07f0ea5->leave($__internal_d3b98d69950d15a42120b549e81983dcee7fa0e433fa5d8c89bff119f07f0ea5_prof);

    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        $__internal_903be83d8fddda23870bb78d84ef623fe30be742024c246852229ae0b285533c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903be83d8fddda23870bb78d84ef623fe30be742024c246852229ae0b285533c->enter($__internal_903be83d8fddda23870bb78d84ef623fe30be742024c246852229ae0b285533c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_4ec1b8a8409e98ea1b5cf6a3ca4bab17b7e31fe1cff89978c6e3eafbb07628d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec1b8a8409e98ea1b5cf6a3ca4bab17b7e31fe1cff89978c6e3eafbb07628d4->enter($__internal_4ec1b8a8409e98ea1b5cf6a3ca4bab17b7e31fe1cff89978c6e3eafbb07628d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 24
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 24);
        // line 25
        echo "    ";
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 29
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 30
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array())), "method")) {
                // line 31
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 33
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 34
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 36
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 37
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 39
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 40
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 41
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "current", array()) || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 52
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_4ec1b8a8409e98ea1b5cf6a3ca4bab17b7e31fe1cff89978c6e3eafbb07628d4->leave($__internal_4ec1b8a8409e98ea1b5cf6a3ca4bab17b7e31fe1cff89978c6e3eafbb07628d4_prof);

        
        $__internal_903be83d8fddda23870bb78d84ef623fe30be742024c246852229ae0b285533c->leave($__internal_903be83d8fddda23870bb78d84ef623fe30be742024c246852229ae0b285533c_prof);

    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_ebc3a0d7ac236b03addde848835617a6dd30b4eb6593cce126215234c7b83426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc3a0d7ac236b03addde848835617a6dd30b4eb6593cce126215234c7b83426->enter($__internal_ebc3a0d7ac236b03addde848835617a6dd30b4eb6593cce126215234c7b83426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_a76db28dde7ee7ef890347ca6010bf129206cc7e171b648ad12b05a8af51ffa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76db28dde7ee7ef890347ca6010bf129206cc7e171b648ad12b05a8af51ffa8->enter($__internal_a76db28dde7ee7ef890347ca6010bf129206cc7e171b648ad12b05a8af51ffa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array())), ($context["attributes"] ?? $this->getContext($context, "attributes")))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_a76db28dde7ee7ef890347ca6010bf129206cc7e171b648ad12b05a8af51ffa8->leave($__internal_a76db28dde7ee7ef890347ca6010bf129206cc7e171b648ad12b05a8af51ffa8_prof);

        
        $__internal_ebc3a0d7ac236b03addde848835617a6dd30b4eb6593cce126215234c7b83426->leave($__internal_ebc3a0d7ac236b03addde848835617a6dd30b4eb6593cce126215234c7b83426_prof);

    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_73f1709ab37995a601985ffa076ebb80af29ca74408e57d849a79116904bb26e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f1709ab37995a601985ffa076ebb80af29ca74408e57d849a79116904bb26e->enter($__internal_73f1709ab37995a601985ffa076ebb80af29ca74408e57d849a79116904bb26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_8242e2905a20f19fd8f0574ea19ac9441aa1017a469b7cb07989f890b9eb39f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8242e2905a20f19fd8f0574ea19ac9441aa1017a469b7cb07989f890b9eb39f0->enter($__internal_8242e2905a20f19fd8f0574ea19ac9441aa1017a469b7cb07989f890b9eb39f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        echo "<div";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array())), ($context["attributes"] ?? $this->getContext($context, "attributes")))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
        
        $__internal_8242e2905a20f19fd8f0574ea19ac9441aa1017a469b7cb07989f890b9eb39f0->leave($__internal_8242e2905a20f19fd8f0574ea19ac9441aa1017a469b7cb07989f890b9eb39f0_prof);

        
        $__internal_73f1709ab37995a601985ffa076ebb80af29ca74408e57d849a79116904bb26e->leave($__internal_73f1709ab37995a601985ffa076ebb80af29ca74408e57d849a79116904bb26e_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 59,  154 => 57,  140 => 53,  138 => 52,  136 => 51,  134 => 50,  132 => 49,  128 => 47,  124 => 45,  122 => 44,  120 => 43,  117 => 41,  115 => 40,  113 => 39,  110 => 37,  108 => 36,  105 => 34,  103 => 33,  100 => 31,  98 => 30,  96 => 29,  94 => 28,  92 => 27,  90 => 26,  87 => 25,  85 => 24,  76 => 23,  62 => 18,  57 => 17,  54 => 16,  52 => 15,  43 => 14,  11 => 12,);
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

{% extends 'knp_menu.html.twig' %}

{% block list %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
        <div{{ macros.attributes(listAttributes) }}>
            {{ block('children') }}
        </div>
    {% endif %}
{% endblock %}

{% block item %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.displayed %}
        {# building the class of the item #}
        {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
        {%- if item.actsLikeFirst %}
            {%- set classes = classes|merge([options.firstClass]) %}
        {%- endif %}
        {%- if item.actsLikeLast %}
            {%- set classes = classes|merge([options.lastClass]) %}
        {%- endif %}
        {%- set attributes = item.attributes %}
        {%- if classes is not empty %}
            {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
        {%- endif %}
        {# displaying the item #}
        {%- if item.uri is not empty and (not item.current or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
        {# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    {% endif %}
{% endblock %}

{% block linkElement %}<a href=\"{{ item.uri }}\"{{ macros.attributes(item.attributes|merge(item.linkAttributes)|merge(attributes)) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}<div{{ macros.attributes(item.attributes|merge(item.labelAttributes)|merge(attributes)) }}><h4 class=\"list-group-item-heading\">{{ block('label') }}</h4></div>{% endblock %}
", "SonataBlockBundle:Block:block_side_menu_template.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/block-bundle/Resources/views/Block/block_side_menu_template.html.twig");
    }
}
