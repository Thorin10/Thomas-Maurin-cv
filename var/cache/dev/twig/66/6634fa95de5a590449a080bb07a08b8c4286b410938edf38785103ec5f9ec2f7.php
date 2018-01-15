<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_22f37e5f0b73cf2f6c488f02fd70f6874cbdb217e0bc7258e6f37508dc4778ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 33
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff819bad47c054f1bf6b97b973077fad5b43c126c2438a44ab44e58c38095c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff819bad47c054f1bf6b97b973077fad5b43c126c2438a44ab44e58c38095c7d->enter($__internal_ff819bad47c054f1bf6b97b973077fad5b43c126c2438a44ab44e58c38095c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_e02c9059be1c8853921ce45859fde0d5f38a345d2a16b05a368b86752a264559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02c9059be1c8853921ce45859fde0d5f38a345d2a16b05a368b86752a264559->enter($__internal_e02c9059be1c8853921ce45859fde0d5f38a345d2a16b05a368b86752a264559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff819bad47c054f1bf6b97b973077fad5b43c126c2438a44ab44e58c38095c7d->leave($__internal_ff819bad47c054f1bf6b97b973077fad5b43c126c2438a44ab44e58c38095c7d_prof);

        
        $__internal_e02c9059be1c8853921ce45859fde0d5f38a345d2a16b05a368b86752a264559->leave($__internal_e02c9059be1c8853921ce45859fde0d5f38a345d2a16b05a368b86752a264559_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fc7e5d12a98285ac51a8896b353d64ec611211442902fdd64ed112e7e7408b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc7e5d12a98285ac51a8896b353d64ec611211442902fdd64ed112e7e7408b8->enter($__internal_0fc7e5d12a98285ac51a8896b353d64ec611211442902fdd64ed112e7e7408b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_432c1046e169032c60c6d6299cef3d496f5f8a53876eaf02c621a0b4ac11733e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_432c1046e169032c60c6d6299cef3d496f5f8a53876eaf02c621a0b4ac11733e->enter($__internal_432c1046e169032c60c6d6299cef3d496f5f8a53876eaf02c621a0b4ac11733e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        // line 16
        echo "    ";
        if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter(($context["objectId"] ?? $this->getContext($context, "objectId")), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))))) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_432c1046e169032c60c6d6299cef3d496f5f8a53876eaf02c621a0b4ac11733e->leave($__internal_432c1046e169032c60c6d6299cef3d496f5f8a53876eaf02c621a0b4ac11733e_prof);

        
        $__internal_0fc7e5d12a98285ac51a8896b353d64ec611211442902fdd64ed112e7e7408b8->leave($__internal_0fc7e5d12a98285ac51a8896b353d64ec611211442902fdd64ed112e7e7408b8_prof);

    }

    // line 23
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_b1786b187662d70dc34d79a5cbfc58480ccf633ed20416542557e87e3defae64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1786b187662d70dc34d79a5cbfc58480ccf633ed20416542557e87e3defae64->enter($__internal_b1786b187662d70dc34d79a5cbfc58480ccf633ed20416542557e87e3defae64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_7d65f28f140cc67caaea61abd63880b6d0ba12051ad63e0e26822b04a737ea1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d65f28f140cc67caaea61abd63880b6d0ba12051ad63e0e26822b04a737ea1f->enter($__internal_7d65f28f140cc67caaea61abd63880b6d0ba12051ad63e0e26822b04a737ea1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 24
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7d65f28f140cc67caaea61abd63880b6d0ba12051ad63e0e26822b04a737ea1f->leave($__internal_7d65f28f140cc67caaea61abd63880b6d0ba12051ad63e0e26822b04a737ea1f_prof);

        
        $__internal_b1786b187662d70dc34d79a5cbfc58480ccf633ed20416542557e87e3defae64->leave($__internal_b1786b187662d70dc34d79a5cbfc58480ccf633ed20416542557e87e3defae64_prof);

    }

    // line 27
    public function block_actions($context, array $blocks = array())
    {
        $__internal_3ba3477934e0364bbb681a96358dd77a123ae2297aa8cdde130cbc492bf796e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba3477934e0364bbb681a96358dd77a123ae2297aa8cdde130cbc492bf796e5->enter($__internal_3ba3477934e0364bbb681a96358dd77a123ae2297aa8cdde130cbc492bf796e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_09e4144cb5f87828fb96f65d01bd4f8b3e7079a4bdf8db4e5e239065dde76fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e4144cb5f87828fb96f65d01bd4f8b3e7079a4bdf8db4e5e239065dde76fde->enter($__internal_09e4144cb5f87828fb96f65d01bd4f8b3e7079a4bdf8db4e5e239065dde76fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 28
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 28)->display($context);
        
        $__internal_09e4144cb5f87828fb96f65d01bd4f8b3e7079a4bdf8db4e5e239065dde76fde->leave($__internal_09e4144cb5f87828fb96f65d01bd4f8b3e7079a4bdf8db4e5e239065dde76fde_prof);

        
        $__internal_3ba3477934e0364bbb681a96358dd77a123ae2297aa8cdde130cbc492bf796e5->leave($__internal_3ba3477934e0364bbb681a96358dd77a123ae2297aa8cdde130cbc492bf796e5_prof);

    }

    // line 31
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_e5584c53e28d6be158e34afba8d744b17697a1696178e6ef34dbe5e68c7fdee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5584c53e28d6be158e34afba8d744b17697a1696178e6ef34dbe5e68c7fdee9->enter($__internal_e5584c53e28d6be158e34afba8d744b17697a1696178e6ef34dbe5e68c7fdee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_79e58a77dcb9924463eeb20ef3dfe2192cd3e9f91c5d00219c0bbbce2140b2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e58a77dcb9924463eeb20ef3dfe2192cd3e9f91c5d00219c0bbbce2140b2fa->enter($__internal_79e58a77dcb9924463eeb20ef3dfe2192cd3e9f91c5d00219c0bbbce2140b2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_79e58a77dcb9924463eeb20ef3dfe2192cd3e9f91c5d00219c0bbbce2140b2fa->leave($__internal_79e58a77dcb9924463eeb20ef3dfe2192cd3e9f91c5d00219c0bbbce2140b2fa_prof);

        
        $__internal_e5584c53e28d6be158e34afba8d744b17697a1696178e6ef34dbe5e68c7fdee9->leave($__internal_e5584c53e28d6be158e34afba8d744b17697a1696178e6ef34dbe5e68c7fdee9_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_5e98601e27d3aaa0015ef9e37b74fc574540e51d7f8fc2ffa767efde2f13192b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e98601e27d3aaa0015ef9e37b74fc574540e51d7f8fc2ffa767efde2f13192b->enter($__internal_5e98601e27d3aaa0015ef9e37b74fc574540e51d7f8fc2ffa767efde2f13192b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_a8ccef7b00ebc0296460079afa5d4c03988727135edb42f00c97c0e0ebdece5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ccef7b00ebc0296460079afa5d4c03988727135edb42f00c97c0e0ebdece5f->enter($__internal_a8ccef7b00ebc0296460079afa5d4c03988727135edb42f00c97c0e0ebdece5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_a8ccef7b00ebc0296460079afa5d4c03988727135edb42f00c97c0e0ebdece5f->leave($__internal_a8ccef7b00ebc0296460079afa5d4c03988727135edb42f00c97c0e0ebdece5f_prof);

        
        $__internal_5e98601e27d3aaa0015ef9e37b74fc574540e51d7f8fc2ffa767efde2f13192b->leave($__internal_5e98601e27d3aaa0015ef9e37b74fc574540e51d7f8fc2ffa767efde2f13192b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 36,  154 => 35,  136 => 31,  126 => 28,  117 => 27,  104 => 24,  95 => 23,  81 => 19,  75 => 17,  72 => 16,  70 => 15,  61 => 14,  40 => 12,  12 => 33,);
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

{% extends base_template %}

{% block title %}
    {# NEXT_MAJOR: remove default filter #}
    {% if objectId|default(admin.id(object)) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
