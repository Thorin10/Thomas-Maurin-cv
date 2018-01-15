<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_c75ce28bc35c09e772ff595f968674f64b382cf94800c2c61169f17f279b71df extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f8d5f15f3ec31ece25b9141848ffd664c111fba4b5cf3223e5611b29cc76f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f8d5f15f3ec31ece25b9141848ffd664c111fba4b5cf3223e5611b29cc76f23->enter($__internal_9f8d5f15f3ec31ece25b9141848ffd664c111fba4b5cf3223e5611b29cc76f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $__internal_bc43b7122828f50bdf83fa2b8bb8a55444880ed61d7891a66e2c19c935c6a08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc43b7122828f50bdf83fa2b8bb8a55444880ed61d7891a66e2c19c935c6a08a->enter($__internal_bc43b7122828f50bdf83fa2b8bb8a55444880ed61d7891a66e2c19c935c6a08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f8d5f15f3ec31ece25b9141848ffd664c111fba4b5cf3223e5611b29cc76f23->leave($__internal_9f8d5f15f3ec31ece25b9141848ffd664c111fba4b5cf3223e5611b29cc76f23_prof);

        
        $__internal_bc43b7122828f50bdf83fa2b8bb8a55444880ed61d7891a66e2c19c935c6a08a->leave($__internal_bc43b7122828f50bdf83fa2b8bb8a55444880ed61d7891a66e2c19c935c6a08a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_615743d61289bfc9bfe8757787f20c2b591bb4ef59307e8ba3e81c91079c9bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615743d61289bfc9bfe8757787f20c2b591bb4ef59307e8ba3e81c91079c9bdd->enter($__internal_615743d61289bfc9bfe8757787f20c2b591bb4ef59307e8ba3e81c91079c9bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_74d5ad932018db5e0f47e36cd05ce51d10dc4aff439e2f10e742508e4fbeee25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d5ad932018db5e0f47e36cd05ce51d10dc4aff439e2f10e742508e4fbeee25->enter($__internal_74d5ad932018db5e0f47e36cd05ce51d10dc4aff439e2f10e742508e4fbeee25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_74d5ad932018db5e0f47e36cd05ce51d10dc4aff439e2f10e742508e4fbeee25->leave($__internal_74d5ad932018db5e0f47e36cd05ce51d10dc4aff439e2f10e742508e4fbeee25_prof);

        
        $__internal_615743d61289bfc9bfe8757787f20c2b591bb4ef59307e8ba3e81c91079c9bdd->leave($__internal_615743d61289bfc9bfe8757787f20c2b591bb4ef59307e8ba3e81c91079c9bdd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
