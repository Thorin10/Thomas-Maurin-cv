<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_266ae118974fb23a40738a91acdd160c5b50265be792e7b43ac63a8c2bd02fbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f8093a6f34b04e83113569b2e46fd0f6b40514a67d4aade186d6563c631aec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f8093a6f34b04e83113569b2e46fd0f6b40514a67d4aade186d6563c631aec2->enter($__internal_0f8093a6f34b04e83113569b2e46fd0f6b40514a67d4aade186d6563c631aec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $__internal_143ae2b9aa9723bae88a03f0f442c2caf0c1339cc6a64224f1411f8ded141f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143ae2b9aa9723bae88a03f0f442c2caf0c1339cc6a64224f1411f8ded141f90->enter($__internal_143ae2b9aa9723bae88a03f0f442c2caf0c1339cc6a64224f1411f8ded141f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f8093a6f34b04e83113569b2e46fd0f6b40514a67d4aade186d6563c631aec2->leave($__internal_0f8093a6f34b04e83113569b2e46fd0f6b40514a67d4aade186d6563c631aec2_prof);

        
        $__internal_143ae2b9aa9723bae88a03f0f442c2caf0c1339cc6a64224f1411f8ded141f90->leave($__internal_143ae2b9aa9723bae88a03f0f442c2caf0c1339cc6a64224f1411f8ded141f90_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_a1973e3500acfa675b3f0fd430466b219ca2ed6ab784f405dad1bc1e48c0c760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1973e3500acfa675b3f0fd430466b219ca2ed6ab784f405dad1bc1e48c0c760->enter($__internal_a1973e3500acfa675b3f0fd430466b219ca2ed6ab784f405dad1bc1e48c0c760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_a7ed3c6b98bcdd52b32afd2416260e696f6a981209898188d1344f94cdad6103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ed3c6b98bcdd52b32afd2416260e696f6a981209898188d1344f94cdad6103->enter($__internal_a7ed3c6b98bcdd52b32afd2416260e696f6a981209898188d1344f94cdad6103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo ($context["label"] ?? $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_a7ed3c6b98bcdd52b32afd2416260e696f6a981209898188d1344f94cdad6103->leave($__internal_a7ed3c6b98bcdd52b32afd2416260e696f6a981209898188d1344f94cdad6103_prof);

        
        $__internal_a1973e3500acfa675b3f0fd430466b219ca2ed6ab784f405dad1bc1e48c0c760->leave($__internal_a1973e3500acfa675b3f0fd430466b219ca2ed6ab784f405dad1bc1e48c0c760_prof);

    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
", "KnpMenuBundle::menu.html.twig", "/home/thomas/thomascv/cv/vendor/knplabs/knp-menu-bundle/Resources/views/menu.html.twig");
    }
}
