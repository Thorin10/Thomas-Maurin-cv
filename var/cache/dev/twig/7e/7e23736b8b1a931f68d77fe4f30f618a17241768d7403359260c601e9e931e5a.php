<?php

/* SonataAdminBundle:CRUD:display_boolean.html.twig */
class __TwigTemplate_30673bc2e260f4ec318cc2b819d4cfc93504cce203f5a0f396a86314da22a1a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5da60d5002b1dd3d6b875d855b8d4fc232889910194d3105afe4682a1cc45e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da60d5002b1dd3d6b875d855b8d4fc232889910194d3105afe4682a1cc45e4e->enter($__internal_5da60d5002b1dd3d6b875d855b8d4fc232889910194d3105afe4682a1cc45e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:display_boolean.html.twig"));

        $__internal_1d51e0993ab36e66d68ea2892156d2d211ca3c9a01b89ef44d5aa37f388aaaca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d51e0993ab36e66d68ea2892156d2d211ca3c9a01b89ef44d5aa37f388aaaca->enter($__internal_1d51e0993ab36e66d68ea2892156d2d211ca3c9a01b89ef44d5aa37f388aaaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:display_boolean.html.twig"));

        // line 12
        ob_start();
        // line 13
        echo "    ";
        if (($context["value"] ?? $this->getContext($context, "value"))) {
            // line 14
            echo "        ";
            $context["text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_type_yes", array(), "SonataAdminBundle");
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "        ";
            $context["text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_type_no", array(), "SonataAdminBundle");
            // line 17
            echo "    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if ((((($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "inverse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "inverse", array()), false)) : (false))) ? ( !($context["value"] ?? $this->getContext($context, "value"))) : (($context["value"] ?? $this->getContext($context, "value"))))) {
            // line 20
            echo "        ";
            $context["class"] = "label-success";
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "        ";
            $context["class"] = "label-danger";
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    <span class=\"label ";
        // line 25
        echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5da60d5002b1dd3d6b875d855b8d4fc232889910194d3105afe4682a1cc45e4e->leave($__internal_5da60d5002b1dd3d6b875d855b8d4fc232889910194d3105afe4682a1cc45e4e_prof);

        
        $__internal_1d51e0993ab36e66d68ea2892156d2d211ca3c9a01b89ef44d5aa37f388aaaca->leave($__internal_1d51e0993ab36e66d68ea2892156d2d211ca3c9a01b89ef44d5aa37f388aaaca_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:display_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  59 => 24,  56 => 23,  53 => 22,  50 => 21,  47 => 20,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 15,  30 => 14,  27 => 13,  25 => 12,);
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

{%- spaceless %}
    {% if value %}
        {% set text = 'label_type_yes'|trans({}, 'SonataAdminBundle') %}
    {% else %}
        {% set text = 'label_type_no'|trans({}, 'SonataAdminBundle') %}
    {% endif %}

    {% if field_description.options.inverse|default(false) ? not value : value %}
        {% set class = 'label-success' %}
    {% else %}
        {% set class = 'label-danger' %}
    {% endif %}

    <span class=\"label {{ class }}\">{{ text }}</span>
{% endspaceless -%}
", "SonataAdminBundle:CRUD:display_boolean.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/CRUD/display_boolean.html.twig");
    }
}
