<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_fb5c51ada9d1af8c64b93c2024ba6beb0b928e0dac5ecca278cdb38ab4199429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c30520315d09f7781f949250c74d89e7711c038b9e3407e3725ddd99af2db5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c30520315d09f7781f949250c74d89e7711c038b9e3407e3725ddd99af2db5b->enter($__internal_3c30520315d09f7781f949250c74d89e7711c038b9e3407e3725ddd99af2db5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $__internal_13710b048cd3c4f5dd36f3828d4a66ebb914a9e8040c9747a1bdaded8362690a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13710b048cd3c4f5dd36f3828d4a66ebb914a9e8040c9747a1bdaded8362690a->enter($__internal_13710b048cd3c4f5dd36f3828d4a66ebb914a9e8040c9747a1bdaded8362690a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c30520315d09f7781f949250c74d89e7711c038b9e3407e3725ddd99af2db5b->leave($__internal_3c30520315d09f7781f949250c74d89e7711c038b9e3407e3725ddd99af2db5b_prof);

        
        $__internal_13710b048cd3c4f5dd36f3828d4a66ebb914a9e8040c9747a1bdaded8362690a->leave($__internal_13710b048cd3c4f5dd36f3828d4a66ebb914a9e8040c9747a1bdaded8362690a_prof);

    }

    // line 14
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_b83a2cd3b6f92e18e276498e695fc29b3423fe6a38c2e724bc139fe6dd161d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b83a2cd3b6f92e18e276498e695fc29b3423fe6a38c2e724bc139fe6dd161d1a->enter($__internal_b83a2cd3b6f92e18e276498e695fc29b3423fe6a38c2e724bc139fe6dd161d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_83071fb3787a1924254b1d5a5b41e4c43e4a89e335f9825316d73b287ec6df42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83071fb3787a1924254b1d5a5b41e4c43e4a89e335f9825316d73b287ec6df42->enter($__internal_83071fb3787a1924254b1d5a5b41e4c43e4a89e335f9825316d73b287ec6df42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 15
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 16
        if ($this->getAttribute(($context["elements"] ?? null), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, $this->getAttribute(($context["elements"] ?? $this->getContext($context, "elements")), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array"), ($context["object"] ?? $this->getContext($context, "object")), ($context["object_compare"] ?? $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 19
        echo "    </tr>
";
        
        $__internal_83071fb3787a1924254b1d5a5b41e4c43e4a89e335f9825316d73b287ec6df42->leave($__internal_83071fb3787a1924254b1d5a5b41e4c43e4a89e335f9825316d73b287ec6df42_prof);

        
        $__internal_b83a2cd3b6f92e18e276498e695fc29b3423fe6a38c2e724bc139fe6dd161d1a->leave($__internal_b83a2cd3b6f92e18e276498e695fc29b3423fe6a38c2e724bc139fe6dd161d1a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_compare.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_compare.html.twig");
    }
}
