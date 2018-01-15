<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_fe8f9ebfb388fadaa9ab47e8c23eec7d10e4b708782d6e73acb915888f005ca4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80a3c84454c6b3420f2c707f68953ebad4e6ded4c75095cc89bdea5411fcbc7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a3c84454c6b3420f2c707f68953ebad4e6ded4c75095cc89bdea5411fcbc7a->enter($__internal_80a3c84454c6b3420f2c707f68953ebad4e6ded4c75095cc89bdea5411fcbc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $__internal_9fac9311c7ab8c85c9b31ef5a3f0fd91400307382182cce8e2a83b99c233547d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fac9311c7ab8c85c9b31ef5a3f0fd91400307382182cce8e2a83b99c233547d->enter($__internal_9fac9311c7ab8c85c9b31ef5a3f0fd91400307382182cce8e2a83b99c233547d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80a3c84454c6b3420f2c707f68953ebad4e6ded4c75095cc89bdea5411fcbc7a->leave($__internal_80a3c84454c6b3420f2c707f68953ebad4e6ded4c75095cc89bdea5411fcbc7a_prof);

        
        $__internal_9fac9311c7ab8c85c9b31ef5a3f0fd91400307382182cce8e2a83b99c233547d->leave($__internal_9fac9311c7ab8c85c9b31ef5a3f0fd91400307382182cce8e2a83b99c233547d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e14a4f1e2ab89d36534102edd7bad5bf9b117e2ef3a92fe4f77ef1e00bc86a94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14a4f1e2ab89d36534102edd7bad5bf9b117e2ef3a92fe4f77ef1e00bc86a94->enter($__internal_e14a4f1e2ab89d36534102edd7bad5bf9b117e2ef3a92fe4f77ef1e00bc86a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_02d99b721181348b151d968306dc9ca3df91202a459e65a149006ec0424cd8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d99b721181348b151d968306dc9ca3df91202a459e65a149006ec0424cd8f1->enter($__internal_02d99b721181348b151d968306dc9ca3df91202a459e65a149006ec0424cd8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_02d99b721181348b151d968306dc9ca3df91202a459e65a149006ec0424cd8f1->leave($__internal_02d99b721181348b151d968306dc9ca3df91202a459e65a149006ec0424cd8f1_prof);

        
        $__internal_e14a4f1e2ab89d36534102edd7bad5bf9b117e2ef3a92fe4f77ef1e00bc86a94->leave($__internal_e14a4f1e2ab89d36534102edd7bad5bf9b117e2ef3a92fe4f77ef1e00bc86a94_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
