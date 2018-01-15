<?php

/* SonataAdminBundle:CRUD:list_html.html.twig */
class __TwigTemplate_ec1183f287fced1706f518e3cdbd2f52dde2f5817e9bd8fb2f974286a1b6ab2a extends Twig_Template
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
        // line 1
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_html.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65835b9abca8b7d070e3b946fed5e63afe5fffec5687a376cfde8742cc2f8e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65835b9abca8b7d070e3b946fed5e63afe5fffec5687a376cfde8742cc2f8e1a->enter($__internal_65835b9abca8b7d070e3b946fed5e63afe5fffec5687a376cfde8742cc2f8e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_html.html.twig"));

        $__internal_a7d36254afcc97a135282a950c2d05bbea41655f12b1ff322abdbb46e91cbd74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d36254afcc97a135282a950c2d05bbea41655f12b1ff322abdbb46e91cbd74->enter($__internal_a7d36254afcc97a135282a950c2d05bbea41655f12b1ff322abdbb46e91cbd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_html.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65835b9abca8b7d070e3b946fed5e63afe5fffec5687a376cfde8742cc2f8e1a->leave($__internal_65835b9abca8b7d070e3b946fed5e63afe5fffec5687a376cfde8742cc2f8e1a_prof);

        
        $__internal_a7d36254afcc97a135282a950c2d05bbea41655f12b1ff322abdbb46e91cbd74->leave($__internal_a7d36254afcc97a135282a950c2d05bbea41655f12b1ff322abdbb46e91cbd74_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_9409af33f1b90457a11328d16ed486a1707149febdf9426cefb2ca71582cd983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9409af33f1b90457a11328d16ed486a1707149febdf9426cefb2ca71582cd983->enter($__internal_9409af33f1b90457a11328d16ed486a1707149febdf9426cefb2ca71582cd983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_91b0f68c295602af28d6102ce62f684a55ac77d07361d7e2e67addce8923b862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b0f68c295602af28d6102ce62f684a55ac77d07361d7e2e67addce8923b862->enter($__internal_91b0f68c295602af28d6102ce62f684a55ac77d07361d7e2e67addce8923b862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "truncate", array(), "any", true, true)) {
                // line 8
                $context["truncate"] = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "truncate", array());
                // line 9
                echo "            ";
                $context["length"] = (($this->getAttribute(($context["truncate"] ?? null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "length", array()), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = (($this->getAttribute(($context["truncate"] ?? null), "preserve", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "preserve", array()), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = (($this->getAttribute(($context["truncate"] ?? null), "separator", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "separator", array()), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags(($context["value"] ?? $this->getContext($context, "value"))), ($context["length"] ?? $this->getContext($context, "length")), ($context["preserve"] ?? $this->getContext($context, "preserve")), ($context["separator"] ?? $this->getContext($context, "separator")));
            } else {
                // line 14
                if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "strip", array(), "any", true, true)) {
                    // line 15
                    $context["value"] = strip_tags(($context["value"] ?? $this->getContext($context, "value")));
                }
                // line 17
                echo ($context["value"] ?? $this->getContext($context, "value"));
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_91b0f68c295602af28d6102ce62f684a55ac77d07361d7e2e67addce8923b862->leave($__internal_91b0f68c295602af28d6102ce62f684a55ac77d07361d7e2e67addce8923b862_prof);

        
        $__internal_9409af33f1b90457a11328d16ed486a1707149febdf9426cefb2ca71582cd983->leave($__internal_9409af33f1b90457a11328d16ed486a1707149febdf9426cefb2ca71582cd983_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  76 => 17,  73 => 15,  71 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  56 => 8,  54 => 7,  50 => 5,  48 => 4,  39 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {% else %}
        {%- if field_description.options.truncate is defined -%}
            {% set truncate = field_description.options.truncate %}
            {% set length = truncate.length|default(30) %}
            {% set preserve = truncate.preserve|default(false) %}
            {% set separator = truncate.separator|default('...') %}
            {{ value|striptags|truncate(length, preserve, separator)|raw }}
        {%- else -%}
            {%- if field_description.options.strip is defined -%}
                {% set value = value|striptags %}
            {%- endif -%}
            {{ value|raw }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_html.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_html.html.twig");
    }
}
