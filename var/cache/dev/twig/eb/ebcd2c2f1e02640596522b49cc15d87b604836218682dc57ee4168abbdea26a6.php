<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_fdcd41dc7185bc872157c8fd5398ef88512d917b63dce907a78ec127908d9831 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d77d5f305130c228388f8ee60bf6a8c667eb1721518395989fbf9155bd34a97f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77d5f305130c228388f8ee60bf6a8c667eb1721518395989fbf9155bd34a97f->enter($__internal_d77d5f305130c228388f8ee60bf6a8c667eb1721518395989fbf9155bd34a97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $__internal_3aea4a6de254db1fbd99873d2501533a6523af8e516b0b7fca50a8307026248b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aea4a6de254db1fbd99873d2501533a6523af8e516b0b7fca50a8307026248b->enter($__internal_3aea4a6de254db1fbd99873d2501533a6523af8e516b0b7fca50a8307026248b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d77d5f305130c228388f8ee60bf6a8c667eb1721518395989fbf9155bd34a97f->leave($__internal_d77d5f305130c228388f8ee60bf6a8c667eb1721518395989fbf9155bd34a97f_prof);

        
        $__internal_3aea4a6de254db1fbd99873d2501533a6523af8e516b0b7fca50a8307026248b->leave($__internal_3aea4a6de254db1fbd99873d2501533a6523af8e516b0b7fca50a8307026248b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1a9493f457a35c7939b71b8b020642b0bc8dc65b6fc5f0b70e16a5fd1e99ff2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a9493f457a35c7939b71b8b020642b0bc8dc65b6fc5f0b70e16a5fd1e99ff2a->enter($__internal_1a9493f457a35c7939b71b8b020642b0bc8dc65b6fc5f0b70e16a5fd1e99ff2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_37bbd5ead140fc23518fc7f33a9e4342d5aa77380206e18551dbffc4c71ab667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37bbd5ead140fc23518fc7f33a9e4342d5aa77380206e18551dbffc4c71ab667->enter($__internal_37bbd5ead140fc23518fc7f33a9e4342d5aa77380206e18551dbffc4c71ab667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_37bbd5ead140fc23518fc7f33a9e4342d5aa77380206e18551dbffc4c71ab667->leave($__internal_37bbd5ead140fc23518fc7f33a9e4342d5aa77380206e18551dbffc4c71ab667_prof);

        
        $__internal_1a9493f457a35c7939b71b8b020642b0bc8dc65b6fc5f0b70e16a5fd1e99ff2a->leave($__internal_1a9493f457a35c7939b71b8b020642b0bc8dc65b6fc5f0b70e16a5fd1e99ff2a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_file.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
