<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_edaa4e0a1d98128759fce5191e77e62b522df44b8b2ddf6067e182565111b399 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05e75e5c969b1119bb60ef068af0c91d0fdd172a6eb08d5e5de465596563b331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e75e5c969b1119bb60ef068af0c91d0fdd172a6eb08d5e5de465596563b331->enter($__internal_05e75e5c969b1119bb60ef068af0c91d0fdd172a6eb08d5e5de465596563b331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        $__internal_814a13cce5626b59c5762e2eeb437faea11e4543d6c2d7e39e313a5ea591b58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814a13cce5626b59c5762e2eeb437faea11e4543d6c2d7e39e313a5ea591b58f->enter($__internal_814a13cce5626b59c5762e2eeb437faea11e4543d6c2d7e39e313a5ea591b58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, ($context["edit"] ?? $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["inline"] ?? $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "errors", array()))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
        
        $__internal_05e75e5c969b1119bb60ef068af0c91d0fdd172a6eb08d5e5de465596563b331->leave($__internal_05e75e5c969b1119bb60ef068af0c91d0fdd172a6eb08d5e5de465596563b331_prof);

        
        $__internal_814a13cce5626b59c5762e2eeb437faea11e4543d6c2d7e39e313a5ea591b58f->leave($__internal_814a13cce5626b59c5762e2eeb437faea11e4543d6c2d7e39e313a5ea591b58f_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_a425393883822bd8c61e5feadd7aa91862ae5799b774afe45acc071c22e32b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a425393883822bd8c61e5feadd7aa91862ae5799b774afe45acc071c22e32b29->enter($__internal_a425393883822bd8c61e5feadd7aa91862ae5799b774afe45acc071c22e32b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_05ffc353876a79f53ac4d84915a5e0417c987c6492aa1f645457e27dbaa1a122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ffc353876a79f53ac4d84915a5e0417c987c6492aa1f645457e27dbaa1a122->enter($__internal_05ffc353876a79f53ac4d84915a5e0417c987c6492aa1f645457e27dbaa1a122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ((($context["inline"] ?? $this->getContext($context, "inline")) == "natural")) {
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
        }
        // line 23
        echo "    ";
        
        $__internal_05ffc353876a79f53ac4d84915a5e0417c987c6492aa1f645457e27dbaa1a122->leave($__internal_05ffc353876a79f53ac4d84915a5e0417c987c6492aa1f645457e27dbaa1a122_prof);

        
        $__internal_a425393883822bd8c61e5feadd7aa91862ae5799b774afe45acc071c22e32b29->leave($__internal_a425393883822bd8c61e5feadd7aa91862ae5799b774afe45acc071c22e32b29_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_2777aa67eab01241692aa836b0dc64d7be0f2833d85f3120ee02d4351db2a782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2777aa67eab01241692aa836b0dc64d7be0f2833d85f3120ee02d4351db2a782->enter($__internal_2777aa67eab01241692aa836b0dc64d7be0f2833d85f3120ee02d4351db2a782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_07cc07e7a6903f09a5601cd04d44e7774058add715662953bc9a8a9d5647c0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07cc07e7a6903f09a5601cd04d44e7774058add715662953bc9a8a9d5647c0f7->enter($__internal_07cc07e7a6903f09a5601cd04d44e7774058add715662953bc9a8a9d5647c0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_07cc07e7a6903f09a5601cd04d44e7774058add715662953bc9a8a9d5647c0f7->leave($__internal_07cc07e7a6903f09a5601cd04d44e7774058add715662953bc9a8a9d5647c0f7_prof);

        
        $__internal_2777aa67eab01241692aa836b0dc64d7be0f2833d85f3120ee02d4351db2a782->leave($__internal_2777aa67eab01241692aa836b0dc64d7be0f2833d85f3120ee02d4351db2a782_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_44db7297cb7e10857f365435a6cdf724b94040871f93c1f91f6f9ac6cc9eb716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44db7297cb7e10857f365435a6cdf724b94040871f93c1f91f6f9ac6cc9eb716->enter($__internal_44db7297cb7e10857f365435a6cdf724b94040871f93c1f91f6f9ac6cc9eb716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_ef3afa0c8f2faa2df72f1e516ea3e02fb6211633b93939b4dd82f53f1b062dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3afa0c8f2faa2df72f1e516ea3e02fb6211633b93939b4dd82f53f1b062dcb->enter($__internal_ef3afa0c8f2faa2df72f1e516ea3e02fb6211633b93939b4dd82f53f1b062dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_ef3afa0c8f2faa2df72f1e516ea3e02fb6211633b93939b4dd82f53f1b062dcb->leave($__internal_ef3afa0c8f2faa2df72f1e516ea3e02fb6211633b93939b4dd82f53f1b062dcb_prof);

        
        $__internal_44db7297cb7e10857f365435a6cdf724b94040871f93c1f91f6f9ac6cc9eb716->leave($__internal_44db7297cb7e10857f365435a6cdf724b94040871f93c1f91f6f9ac6cc9eb716_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 28,  110 => 25,  100 => 23,  96 => 21,  90 => 19,  84 => 17,  81 => 16,  78 => 15,  69 => 14,  57 => 29,  55 => 28,  51 => 26,  49 => 25,  46 => 24,  44 => 14,  31 => 12,  28 => 11,);
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

<div id=\"sonata-ba-field-container-{{ field_element.vars.id }}\" class=\"sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length %}sonata-ba-field-error{% endif %}\">

    {% block label %}
        {% if inline == 'natural' %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endif %}
    {% endblock %}

    {% block field %}{{ form_widget(field_element) }}{% endblock %}

    <div class=\"sonata-ba-field-error-messages\">
        {% block errors %}{{ form_errors(field_element) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_inline_edit_field.html.twig");
    }
}
