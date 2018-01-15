<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_f7dd832c5d5852365716bced9336f5f8e6f9bebb1df5562b75cff9939200721c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aab8d8c492363f5f33121353739999630045ebe6528a7f16d6d74ac9cab3c731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aab8d8c492363f5f33121353739999630045ebe6528a7f16d6d74ac9cab3c731->enter($__internal_aab8d8c492363f5f33121353739999630045ebe6528a7f16d6d74ac9cab3c731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $__internal_8054b75d139f1dcd40efa3f11c94b221d58ea0963d6835b74dd4b0e922169842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8054b75d139f1dcd40efa3f11c94b221d58ea0963d6835b74dd4b0e922169842->enter($__internal_8054b75d139f1dcd40efa3f11c94b221d58ea0963d6835b74dd4b0e922169842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aab8d8c492363f5f33121353739999630045ebe6528a7f16d6d74ac9cab3c731->leave($__internal_aab8d8c492363f5f33121353739999630045ebe6528a7f16d6d74ac9cab3c731_prof);

        
        $__internal_8054b75d139f1dcd40efa3f11c94b221d58ea0963d6835b74dd4b0e922169842->leave($__internal_8054b75d139f1dcd40efa3f11c94b221d58ea0963d6835b74dd4b0e922169842_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
", "SonataAdminBundle:CRUD:show_compare.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_compare.html.twig");
    }
}
