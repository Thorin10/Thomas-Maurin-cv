<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_1aaa8251054fe3ca099ffd1d6d2ab4f0eb9d3df820eb1b8073156829a71f4eca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13e7f89e9dd4a76396f50f436c778054d4f6b8501afab895ff69dcb3d8d93640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e7f89e9dd4a76396f50f436c778054d4f6b8501afab895ff69dcb3d8d93640->enter($__internal_13e7f89e9dd4a76396f50f436c778054d4f6b8501afab895ff69dcb3d8d93640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $__internal_aac94b44834d12dc316404ccd447b91aa4fc15c0dbc4f4fbd09f9421c86cdac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac94b44834d12dc316404ccd447b91aa4fc15c0dbc4f4fbd09f9421c86cdac5->enter($__internal_aac94b44834d12dc316404ccd447b91aa4fc15c0dbc4f4fbd09f9421c86cdac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13e7f89e9dd4a76396f50f436c778054d4f6b8501afab895ff69dcb3d8d93640->leave($__internal_13e7f89e9dd4a76396f50f436c778054d4f6b8501afab895ff69dcb3d8d93640_prof);

        
        $__internal_aac94b44834d12dc316404ccd447b91aa4fc15c0dbc4f4fbd09f9421c86cdac5->leave($__internal_aac94b44834d12dc316404ccd447b91aa4fc15c0dbc4f4fbd09f9421c86cdac5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
", "SonataAdminBundle:CRUD:acl.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/acl.html.twig");
    }
}
