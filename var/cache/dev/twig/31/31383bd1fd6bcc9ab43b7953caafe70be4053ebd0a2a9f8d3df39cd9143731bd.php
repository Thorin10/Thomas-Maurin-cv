<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_e86e83f951c5aaebb4d96ce7a29617f435158d4dea20c90ed7e4f6278c58a5e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44a0ea34c0e2928ce51384e0a55240c036dc3638d042670fecbe3e24de85858a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a0ea34c0e2928ce51384e0a55240c036dc3638d042670fecbe3e24de85858a->enter($__internal_44a0ea34c0e2928ce51384e0a55240c036dc3638d042670fecbe3e24de85858a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $__internal_ac94bf7852127d1381bd46c9ac7fe94a4b91d21e54e71d3f4cfd7387769d0181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac94bf7852127d1381bd46c9ac7fe94a4b91d21e54e71d3f4cfd7387769d0181->enter($__internal_ac94bf7852127d1381bd46c9ac7fe94a4b91d21e54e71d3f4cfd7387769d0181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a0ea34c0e2928ce51384e0a55240c036dc3638d042670fecbe3e24de85858a->leave($__internal_44a0ea34c0e2928ce51384e0a55240c036dc3638d042670fecbe3e24de85858a_prof);

        
        $__internal_ac94bf7852127d1381bd46c9ac7fe94a4b91d21e54e71d3f4cfd7387769d0181->leave($__internal_ac94bf7852127d1381bd46c9ac7fe94a4b91d21e54e71d3f4cfd7387769d0181_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
", "SonataAdminBundle:CRUD:show.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show.html.twig");
    }
}
