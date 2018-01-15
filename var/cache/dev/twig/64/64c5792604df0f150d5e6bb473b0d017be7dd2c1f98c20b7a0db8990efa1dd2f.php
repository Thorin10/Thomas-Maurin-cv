<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_b626238a0f1d74b7905c6b7e1774416ae19aad1d7cbd8a6113de92f9f49771d8 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf41002a2c32b9ce80d122bdcfa6344a38fd1d83415431108d41514c0ee6115e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf41002a2c32b9ce80d122bdcfa6344a38fd1d83415431108d41514c0ee6115e->enter($__internal_cf41002a2c32b9ce80d122bdcfa6344a38fd1d83415431108d41514c0ee6115e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $__internal_6b752c9f931202cccc4b0112a86fcfd27b1778ca8be129bdf743259900f03f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b752c9f931202cccc4b0112a86fcfd27b1778ca8be129bdf743259900f03f9a->enter($__internal_6b752c9f931202cccc4b0112a86fcfd27b1778ca8be129bdf743259900f03f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf41002a2c32b9ce80d122bdcfa6344a38fd1d83415431108d41514c0ee6115e->leave($__internal_cf41002a2c32b9ce80d122bdcfa6344a38fd1d83415431108d41514c0ee6115e_prof);

        
        $__internal_6b752c9f931202cccc4b0112a86fcfd27b1778ca8be129bdf743259900f03f9a->leave($__internal_6b752c9f931202cccc4b0112a86fcfd27b1778ca8be129bdf743259900f03f9a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
", "SonataAdminBundle:CRUD:list_string.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
