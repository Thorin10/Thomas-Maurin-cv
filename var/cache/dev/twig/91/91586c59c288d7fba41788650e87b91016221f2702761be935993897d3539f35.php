<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_34dd4335b660825292c1d5320d539d4ce2f28c8830a3a8dd1045a658b351602b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efb2e869a2a1f7dbfdcc4e2f9dc513674284f5806f6bbcfa10c9a98c7246472b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb2e869a2a1f7dbfdcc4e2f9dc513674284f5806f6bbcfa10c9a98c7246472b->enter($__internal_efb2e869a2a1f7dbfdcc4e2f9dc513674284f5806f6bbcfa10c9a98c7246472b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        $__internal_3bd3e1f9220e11186fb63fea29eea6336d4ed4e0c753ab7a8ab5061abab2659c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd3e1f9220e11186fb63fea29eea6336d4ed4e0c753ab7a8ab5061abab2659c->enter($__internal_3bd3e1f9220e11186fb63fea29eea6336d4ed4e0c753ab7a8ab5061abab2659c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, ($context["edit"] ?? $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["inline"] ?? $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_efb2e869a2a1f7dbfdcc4e2f9dc513674284f5806f6bbcfa10c9a98c7246472b->leave($__internal_efb2e869a2a1f7dbfdcc4e2f9dc513674284f5806f6bbcfa10c9a98c7246472b_prof);

        
        $__internal_3bd3e1f9220e11186fb63fea29eea6336d4ed4e0c753ab7a8ab5061abab2659c->leave($__internal_3bd3e1f9220e11186fb63fea29eea6336d4ed4e0c753ab7a8ab5061abab2659c_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_5c846b9dc9f29e0a7968e7dc9eb66ea36cbc2e643232acdf7d8474c339353c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c846b9dc9f29e0a7968e7dc9eb66ea36cbc2e643232acdf7d8474c339353c94->enter($__internal_5c846b9dc9f29e0a7968e7dc9eb66ea36cbc2e643232acdf7d8474c339353c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_e1b926a8bab291ba03f6dd8c1c887c2fd553f9318d9e715c4db3613c40593ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b926a8bab291ba03f6dd8c1c887c2fd553f9318d9e715c4db3613c40593ec9->enter($__internal_e1b926a8bab291ba03f6dd8c1c887c2fd553f9318d9e715c4db3613c40593ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_e1b926a8bab291ba03f6dd8c1c887c2fd553f9318d9e715c4db3613c40593ec9->leave($__internal_e1b926a8bab291ba03f6dd8c1c887c2fd553f9318d9e715c4db3613c40593ec9_prof);

        
        $__internal_5c846b9dc9f29e0a7968e7dc9eb66ea36cbc2e643232acdf7d8474c339353c94->leave($__internal_5c846b9dc9f29e0a7968e7dc9eb66ea36cbc2e643232acdf7d8474c339353c94_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_c9762452f1531e8b45962774ec096dfcfc3548d235b10230af0e7bc4b9c7e18b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9762452f1531e8b45962774ec096dfcfc3548d235b10230af0e7bc4b9c7e18b->enter($__internal_c9762452f1531e8b45962774ec096dfcfc3548d235b10230af0e7bc4b9c7e18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4ced10e8337128051ab78d38c626544850955da59d3fe7de8f90b072e7dbfb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ced10e8337128051ab78d38c626544850955da59d3fe7de8f90b072e7dbfb6f->enter($__internal_4ced10e8337128051ab78d38c626544850955da59d3fe7de8f90b072e7dbfb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_4ced10e8337128051ab78d38c626544850955da59d3fe7de8f90b072e7dbfb6f->leave($__internal_4ced10e8337128051ab78d38c626544850955da59d3fe7de8f90b072e7dbfb6f_prof);

        
        $__internal_c9762452f1531e8b45962774ec096dfcfc3548d235b10230af0e7bc4b9c7e18b->leave($__internal_c9762452f1531e8b45962774ec096dfcfc3548d235b10230af0e7bc4b9c7e18b_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_737b108eb8f9008560cc54e2c5d2da0a1b61de8569b7238bc5945868dff4234a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737b108eb8f9008560cc54e2c5d2da0a1b61de8569b7238bc5945868dff4234a->enter($__internal_737b108eb8f9008560cc54e2c5d2da0a1b61de8569b7238bc5945868dff4234a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        $__internal_bb66e53db78d70b4e0b377577e34ece81304b8a0a9d585ae3aef3e38da7b2076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb66e53db78d70b4e0b377577e34ece81304b8a0a9d585ae3aef3e38da7b2076->enter($__internal_bb66e53db78d70b4e0b377577e34ece81304b8a0a9d585ae3aef3e38da7b2076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo $this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "help", array());
        
        $__internal_bb66e53db78d70b4e0b377577e34ece81304b8a0a9d585ae3aef3e38da7b2076->leave($__internal_bb66e53db78d70b4e0b377577e34ece81304b8a0a9d585ae3aef3e38da7b2076_prof);

        
        $__internal_737b108eb8f9008560cc54e2c5d2da0a1b61de8569b7238bc5945868dff4234a->leave($__internal_737b108eb8f9008560cc54e2c5d2da0a1b61de8569b7238bc5945868dff4234a_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_99b31837a39da33965797368f852774efdcdc857611d4f099d9619a1e1f78ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b31837a39da33965797368f852774efdcdc857611d4f099d9619a1e1f78ccb->enter($__internal_99b31837a39da33965797368f852774efdcdc857611d4f099d9619a1e1f78ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_67acaca802fb13e3cbdd1366931a408e406ce015abc1f09c4ea82f3662324657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67acaca802fb13e3cbdd1366931a408e406ce015abc1f09c4ea82f3662324657->enter($__internal_67acaca802fb13e3cbdd1366931a408e406ce015abc1f09c4ea82f3662324657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_67acaca802fb13e3cbdd1366931a408e406ce015abc1f09c4ea82f3662324657->leave($__internal_67acaca802fb13e3cbdd1366931a408e406ce015abc1f09c4ea82f3662324657_prof);

        
        $__internal_99b31837a39da33965797368f852774efdcdc857611d4f099d9619a1e1f78ccb->leave($__internal_99b31837a39da33965797368f852774efdcdc857611d4f099d9619a1e1f78ccb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 30,  141 => 26,  123 => 23,  113 => 19,  107 => 17,  101 => 15,  98 => 14,  89 => 13,  75 => 31,  73 => 30,  69 => 28,  63 => 26,  61 => 25,  58 => 24,  56 => 23,  45 => 21,  42 => 20,  40 => 13,  32 => 12,  29 => 11,);
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

<div class=\"form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}\" id=\"sonata-ba-field-container-{{ field_element.vars.id }}\">
    {% block label %}
        {% if field_description.options.name is defined %}
            {{ form_label(field_element, field_description.options.name) }}
        {% else %}
            {{ form_label(field_element) }}
        {% endif %}
    {% endblock %}

    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">

        {% block field %}{{ form_widget(field_element) }}{% endblock %}

        {% if field_description.help %}
            <span class=\"help-block\">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>
        {% endif %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_standard_edit_field.html.twig");
    }
}
