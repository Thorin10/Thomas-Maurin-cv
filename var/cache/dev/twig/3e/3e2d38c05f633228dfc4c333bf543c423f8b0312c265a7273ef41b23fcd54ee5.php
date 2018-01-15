<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_869e9a61cc010970a8dafea52b8d81ca83b9a10e155704737762e144163930c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6895329b50b00a9401fcae349af127ee7847499cb1180db2f89abaef250b1871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6895329b50b00a9401fcae349af127ee7847499cb1180db2f89abaef250b1871->enter($__internal_6895329b50b00a9401fcae349af127ee7847499cb1180db2f89abaef250b1871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        $__internal_56b47be2317ca3f377957f880684bfe964a591e15caf9c00d119ca034193e7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b47be2317ca3f377957f880684bfe964a591e15caf9c00d119ca034193e7bc->enter($__internal_56b47be2317ca3f377957f880684bfe964a591e15caf9c00d119ca034193e7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_6895329b50b00a9401fcae349af127ee7847499cb1180db2f89abaef250b1871->leave($__internal_6895329b50b00a9401fcae349af127ee7847499cb1180db2f89abaef250b1871_prof);

        
        $__internal_56b47be2317ca3f377957f880684bfe964a591e15caf9c00d119ca034193e7bc->leave($__internal_56b47be2317ca3f377957f880684bfe964a591e15caf9c00d119ca034193e7bc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2598b6db627515c31ade732748afdd06d4da7bcfe7dc660ae7aa757ef7339ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2598b6db627515c31ade732748afdd06d4da7bcfe7dc660ae7aa757ef7339ecd->enter($__internal_2598b6db627515c31ade732748afdd06d4da7bcfe7dc660ae7aa757ef7339ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_b1fb6c120c7002558b83388a5019c9ef80f2936c936566e38325d0c562053712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fb6c120c7002558b83388a5019c9ef80f2936c936566e38325d0c562053712->enter($__internal_b1fb6c120c7002558b83388a5019c9ef80f2936c936566e38325d0c562053712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_b1fb6c120c7002558b83388a5019c9ef80f2936c936566e38325d0c562053712->leave($__internal_b1fb6c120c7002558b83388a5019c9ef80f2936c936566e38325d0c562053712_prof);

        
        $__internal_2598b6db627515c31ade732748afdd06d4da7bcfe7dc660ae7aa757ef7339ecd->leave($__internal_2598b6db627515c31ade732748afdd06d4da7bcfe7dc660ae7aa757ef7339ecd_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_801631e256ad41c130462cfd994912b004a6b6b732f8ebc5d2bd4858047a3d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801631e256ad41c130462cfd994912b004a6b6b732f8ebc5d2bd4858047a3d1f->enter($__internal_801631e256ad41c130462cfd994912b004a6b6b732f8ebc5d2bd4858047a3d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_7fb44f06cca1000a715d1fdd02a4ea64af2b6ecc99daa087416bb580bd4bc8c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb44f06cca1000a715d1fdd02a4ea64af2b6ecc99daa087416bb580bd4bc8c4->enter($__internal_7fb44f06cca1000a715d1fdd02a4ea64af2b6ecc99daa087416bb580bd4bc8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_7fb44f06cca1000a715d1fdd02a4ea64af2b6ecc99daa087416bb580bd4bc8c4->leave($__internal_7fb44f06cca1000a715d1fdd02a4ea64af2b6ecc99daa087416bb580bd4bc8c4_prof);

        
        $__internal_801631e256ad41c130462cfd994912b004a6b6b732f8ebc5d2bd4858047a3d1f->leave($__internal_801631e256ad41c130462cfd994912b004a6b6b732f8ebc5d2bd4858047a3d1f_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_aa3e16f0e729efacf1b194c7c7a8af885bac937eee7190cf83de2df264e6bccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3e16f0e729efacf1b194c7c7a8af885bac937eee7190cf83de2df264e6bccb->enter($__internal_aa3e16f0e729efacf1b194c7c7a8af885bac937eee7190cf83de2df264e6bccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_9e783dab8b960e20ec419088cc9cf5772bd64b2283e9bdbee168eabb79334677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e783dab8b960e20ec419088cc9cf5772bd64b2283e9bdbee168eabb79334677->enter($__internal_9e783dab8b960e20ec419088cc9cf5772bd64b2283e9bdbee168eabb79334677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_9e783dab8b960e20ec419088cc9cf5772bd64b2283e9bdbee168eabb79334677->leave($__internal_9e783dab8b960e20ec419088cc9cf5772bd64b2283e9bdbee168eabb79334677_prof);

        
        $__internal_aa3e16f0e729efacf1b194c7c7a8af885bac937eee7190cf83de2df264e6bccb->leave($__internal_aa3e16f0e729efacf1b194c7c7a8af885bac937eee7190cf83de2df264e6bccb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  105 => 21,  99 => 19,  93 => 17,  90 => 16,  81 => 15,  63 => 14,  49 => 26,  47 => 25,  43 => 23,  40 => 15,  38 => 14,  32 => 13,  28 => 11,);
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

<div>
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:edit_boolean.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_boolean.html.twig");
    }
}
