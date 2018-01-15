<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_b01fd4475db6a9e06ff9aeaddea28b2ad8e1580e26c9f318fa8e4d9473645ad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_468ff788afee07151550df069acf8efb6c63b0e159a5a364c69dbc0bbbc417dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468ff788afee07151550df069acf8efb6c63b0e159a5a364c69dbc0bbbc417dc->enter($__internal_468ff788afee07151550df069acf8efb6c63b0e159a5a364c69dbc0bbbc417dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $__internal_ccd28318291be9aa0fec3f04f1171172148f7e40da0c49f3bc8e8efebb1ee085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd28318291be9aa0fec3f04f1171172148f7e40da0c49f3bc8e8efebb1ee085->enter($__internal_ccd28318291be9aa0fec3f04f1171172148f7e40da0c49f3bc8e8efebb1ee085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_468ff788afee07151550df069acf8efb6c63b0e159a5a364c69dbc0bbbc417dc->leave($__internal_468ff788afee07151550df069acf8efb6c63b0e159a5a364c69dbc0bbbc417dc_prof);

        
        $__internal_ccd28318291be9aa0fec3f04f1171172148f7e40da0c49f3bc8e8efebb1ee085->leave($__internal_ccd28318291be9aa0fec3f04f1171172148f7e40da0c49f3bc8e8efebb1ee085_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_6f8f9e8a12ef01f1481892720abc3b3c6484250db4c2f5cd1b192131c19c48b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8f9e8a12ef01f1481892720abc3b3c6484250db4c2f5cd1b192131c19c48b6->enter($__internal_6f8f9e8a12ef01f1481892720abc3b3c6484250db4c2f5cd1b192131c19c48b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8d7fecf04e66add353aa1a5faca14eb7bdee9fc67fe202bf9c5485151c7ef830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7fecf04e66add353aa1a5faca14eb7bdee9fc67fe202bf9c5485151c7ef830->enter($__internal_8d7fecf04e66add353aa1a5faca14eb7bdee9fc67fe202bf9c5485151c7ef830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_8d7fecf04e66add353aa1a5faca14eb7bdee9fc67fe202bf9c5485151c7ef830->leave($__internal_8d7fecf04e66add353aa1a5faca14eb7bdee9fc67fe202bf9c5485151c7ef830_prof);

        
        $__internal_6f8f9e8a12ef01f1481892720abc3b3c6484250db4c2f5cd1b192131c19c48b6->leave($__internal_6f8f9e8a12ef01f1481892720abc3b3c6484250db4c2f5cd1b192131c19c48b6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
