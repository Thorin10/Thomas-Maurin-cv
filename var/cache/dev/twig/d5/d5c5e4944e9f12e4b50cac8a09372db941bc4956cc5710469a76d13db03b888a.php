<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_27113537a5133fc23fbf5ee49676b523173a70642bc41fa8196a1ad271c06ec1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ac3662aec37522638f2e6a73c5d5ff9a87942a211681ba21daa1e99ef0440ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac3662aec37522638f2e6a73c5d5ff9a87942a211681ba21daa1e99ef0440ac->enter($__internal_8ac3662aec37522638f2e6a73c5d5ff9a87942a211681ba21daa1e99ef0440ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $__internal_c11c2af5b5db20491b910f360bb75580765682df8f361ac5e32d522937cef792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11c2af5b5db20491b910f360bb75580765682df8f361ac5e32d522937cef792->enter($__internal_c11c2af5b5db20491b910f360bb75580765682df8f361ac5e32d522937cef792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ac3662aec37522638f2e6a73c5d5ff9a87942a211681ba21daa1e99ef0440ac->leave($__internal_8ac3662aec37522638f2e6a73c5d5ff9a87942a211681ba21daa1e99ef0440ac_prof);

        
        $__internal_c11c2af5b5db20491b910f360bb75580765682df8f361ac5e32d522937cef792->leave($__internal_c11c2af5b5db20491b910f360bb75580765682df8f361ac5e32d522937cef792_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}
", "SonataAdminBundle:CRUD:list_inner_row.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_inner_row.html.twig");
    }
}
