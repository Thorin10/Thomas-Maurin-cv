<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_ecdbccd1d537dd84827f02e1d571b437f2cf0ef86b877d30ee446da6286e0e1e extends Twig_Template
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
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ed2519d54e1700ab3264360cb6c4d563efcf761969f7e102e80ec8591f91d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed2519d54e1700ab3264360cb6c4d563efcf761969f7e102e80ec8591f91d36->enter($__internal_8ed2519d54e1700ab3264360cb6c4d563efcf761969f7e102e80ec8591f91d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $__internal_a6245fc5f3c3390b7a04b5b4083ab4a60af2596a6222e935c9820997de2a30c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6245fc5f3c3390b7a04b5b4083ab4a60af2596a6222e935c9820997de2a30c6->enter($__internal_a6245fc5f3c3390b7a04b5b4083ab4a60af2596a6222e935c9820997de2a30c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ed2519d54e1700ab3264360cb6c4d563efcf761969f7e102e80ec8591f91d36->leave($__internal_8ed2519d54e1700ab3264360cb6c4d563efcf761969f7e102e80ec8591f91d36_prof);

        
        $__internal_a6245fc5f3c3390b7a04b5b4083ab4a60af2596a6222e935c9820997de2a30c6->leave($__internal_a6245fc5f3c3390b7a04b5b4083ab4a60af2596a6222e935c9820997de2a30c6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c2478591d43377fa2a18b5dbecdadc5b3e8c34eb3ec36740cca8f0b8ae6b7e97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2478591d43377fa2a18b5dbecdadc5b3e8c34eb3ec36740cca8f0b8ae6b7e97->enter($__internal_c2478591d43377fa2a18b5dbecdadc5b3e8c34eb3ec36740cca8f0b8ae6b7e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_aa22392e7c4cc9c1c73bdf6be6136b475649f607269d84436141f27f0e7faa41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa22392e7c4cc9c1c73bdf6be6136b475649f607269d84436141f27f0e7faa41->enter($__internal_aa22392e7c4cc9c1c73bdf6be6136b475649f607269d84436141f27f0e7faa41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === ($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_aa22392e7c4cc9c1c73bdf6be6136b475649f607269d84436141f27f0e7faa41->leave($__internal_aa22392e7c4cc9c1c73bdf6be6136b475649f607269d84436141f27f0e7faa41_prof);

        
        $__internal_c2478591d43377fa2a18b5dbecdadc5b3e8c34eb3ec36740cca8f0b8ae6b7e97->leave($__internal_c2478591d43377fa2a18b5dbecdadc5b3e8c34eb3ec36740cca8f0b8ae6b7e97_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_currency.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
