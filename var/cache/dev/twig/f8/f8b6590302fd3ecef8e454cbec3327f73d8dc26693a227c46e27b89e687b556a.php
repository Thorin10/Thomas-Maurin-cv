<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_66b798c742fec864a1b00d477693779da13d0c2012b31eb2ddac6450e71575a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54e92a8d21705d213cb5ebb5a774c2c619904b3d08137fc658f18b6f9481ab50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e92a8d21705d213cb5ebb5a774c2c619904b3d08137fc658f18b6f9481ab50->enter($__internal_54e92a8d21705d213cb5ebb5a774c2c619904b3d08137fc658f18b6f9481ab50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        $__internal_e83ef9c0a12aced342d7570d5f0b3367a40587a96c5591880b1526e2469f3cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83ef9c0a12aced342d7570d5f0b3367a40587a96c5591880b1526e2469f3cc9->enter($__internal_e83ef9c0a12aced342d7570d5f0b3367a40587a96c5591880b1526e2469f3cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute(($context["filter_form"] ?? $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_54e92a8d21705d213cb5ebb5a774c2c619904b3d08137fc658f18b6f9481ab50->leave($__internal_54e92a8d21705d213cb5ebb5a774c2c619904b3d08137fc658f18b6f9481ab50_prof);

        
        $__internal_e83ef9c0a12aced342d7570d5f0b3367a40587a96c5591880b1526e2469f3cc9->leave($__internal_e83ef9c0a12aced342d7570d5f0b3367a40587a96c5591880b1526e2469f3cc9_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_d9b8396985b4bc990e61955df0b2118701493086a27379727c117c0c1b0e0891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b8396985b4bc990e61955df0b2118701493086a27379727c117c0c1b0e0891->enter($__internal_d9b8396985b4bc990e61955df0b2118701493086a27379727c117c0c1b0e0891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_31b8c70c8610a5d1aac05c0b15d78be3e1a9d39c1723afce0af0656381f91d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b8c70c8610a5d1aac05c0b15d78be3e1a9d39c1723afce0af0656381f91d88->enter($__internal_31b8c70c8610a5d1aac05c0b15d78be3e1a9d39c1723afce0af0656381f91d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["filter"] ?? null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["filter_form"] ?? $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute(($context["filter"] ?? $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["filter_form"] ?? $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_31b8c70c8610a5d1aac05c0b15d78be3e1a9d39c1723afce0af0656381f91d88->leave($__internal_31b8c70c8610a5d1aac05c0b15d78be3e1a9d39c1723afce0af0656381f91d88_prof);

        
        $__internal_d9b8396985b4bc990e61955df0b2118701493086a27379727c117c0c1b0e0891->leave($__internal_d9b8396985b4bc990e61955df0b2118701493086a27379727c117c0c1b0e0891_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_ffd7065e128611337dfd7acc14c19589295c862a919f416746c86e2f6a8e25c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd7065e128611337dfd7acc14c19589295c862a919f416746c86e2f6a8e25c3->enter($__internal_ffd7065e128611337dfd7acc14c19589295c862a919f416746c86e2f6a8e25c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_adb093f0de14e3059c62ac04749f384db7bde8eb80bbd843eebfb276f7737443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb093f0de14e3059c62ac04749f384db7bde8eb80bbd843eebfb276f7737443->enter($__internal_adb093f0de14e3059c62ac04749f384db7bde8eb80bbd843eebfb276f7737443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["filter_form"] ?? $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_adb093f0de14e3059c62ac04749f384db7bde8eb80bbd843eebfb276f7737443->leave($__internal_adb093f0de14e3059c62ac04749f384db7bde8eb80bbd843eebfb276f7737443_prof);

        
        $__internal_ffd7065e128611337dfd7acc14c19589295c862a919f416746c86e2f6a8e25c3->leave($__internal_ffd7065e128611337dfd7acc14c19589295c862a919f416746c86e2f6a8e25c3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  81 => 20,  75 => 18,  69 => 16,  66 => 15,  57 => 14,  45 => 25,  43 => 24,  37 => 23,  34 => 22,  32 => 14,  27 => 11,);
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
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_filter_field.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_filter_field.html.twig");
    }
}
