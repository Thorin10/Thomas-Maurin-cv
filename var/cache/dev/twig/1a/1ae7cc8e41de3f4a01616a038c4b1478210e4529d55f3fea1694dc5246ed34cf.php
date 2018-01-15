<?php

/* SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_cc68638da1a1b699f02699350ad188516abc46fe9bf78725845d7262c349cfbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c87de7ae781f955360fff725d18161e52144e40844f60d2fd6d74604ceb3f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c87de7ae781f955360fff725d18161e52144e40844f60d2fd6d74604ceb3f4e->enter($__internal_6c87de7ae781f955360fff725d18161e52144e40844f60d2fd6d74604ceb3f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $__internal_db823c51d96db96f1936f8d7a7743c33435cba6d47e9e50e07d26178abd4eb8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db823c51d96db96f1936f8d7a7743c33435cba6d47e9e50e07d26178abd4eb8a->enter($__internal_db823c51d96db96f1936f8d7a7743c33435cba6d47e9e50e07d26178abd4eb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c87de7ae781f955360fff725d18161e52144e40844f60d2fd6d74604ceb3f4e->leave($__internal_6c87de7ae781f955360fff725d18161e52144e40844f60d2fd6d74604ceb3f4e_prof);

        
        $__internal_db823c51d96db96f1936f8d7a7743c33435cba6d47e9e50e07d26178abd4eb8a->leave($__internal_db823c51d96db96f1936f8d7a7743c33435cba6d47e9e50e07d26178abd4eb8a_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig";
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

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
