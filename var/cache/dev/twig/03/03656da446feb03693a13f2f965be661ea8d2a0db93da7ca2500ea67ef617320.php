<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_2e1eab48b519b5f25ec1ad91c72eae067dd41278a9344bed6c3164de819f8930 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e5d0fcfd8eaaa9e65ea74197e77101696536fe9eb15836f245158f446f983fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5d0fcfd8eaaa9e65ea74197e77101696536fe9eb15836f245158f446f983fc->enter($__internal_0e5d0fcfd8eaaa9e65ea74197e77101696536fe9eb15836f245158f446f983fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $__internal_77acd87df97a3e98e64c60495729560eb4ce64c14f09af2d38ab0abbc82b4233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77acd87df97a3e98e64c60495729560eb4ce64c14f09af2d38ab0abbc82b4233->enter($__internal_77acd87df97a3e98e64c60495729560eb4ce64c14f09af2d38ab0abbc82b4233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e5d0fcfd8eaaa9e65ea74197e77101696536fe9eb15836f245158f446f983fc->leave($__internal_0e5d0fcfd8eaaa9e65ea74197e77101696536fe9eb15836f245158f446f983fc_prof);

        
        $__internal_77acd87df97a3e98e64c60495729560eb4ce64c14f09af2d38ab0abbc82b4233->leave($__internal_77acd87df97a3e98e64c60495729560eb4ce64c14f09af2d38ab0abbc82b4233_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_12dbbfa57dfac0f369399564adaa83a750e2d6724bf96e3deebd6e2b696efe73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12dbbfa57dfac0f369399564adaa83a750e2d6724bf96e3deebd6e2b696efe73->enter($__internal_12dbbfa57dfac0f369399564adaa83a750e2d6724bf96e3deebd6e2b696efe73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_59825ca10a5cccdf435ad7695dcaf9ec82c41d344b3763915b9b6f99d0b1b0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59825ca10a5cccdf435ad7695dcaf9ec82c41d344b3763915b9b6f99d0b1b0e1->enter($__internal_59825ca10a5cccdf435ad7695dcaf9ec82c41d344b3763915b9b6f99d0b1b0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_59825ca10a5cccdf435ad7695dcaf9ec82c41d344b3763915b9b6f99d0b1b0e1->leave($__internal_59825ca10a5cccdf435ad7695dcaf9ec82c41d344b3763915b9b6f99d0b1b0e1_prof);

        
        $__internal_12dbbfa57dfac0f369399564adaa83a750e2d6724bf96e3deebd6e2b696efe73->leave($__internal_12dbbfa57dfac0f369399564adaa83a750e2d6724bf96e3deebd6e2b696efe73_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
", "SonataAdminBundle:CRUD:edit_string.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
