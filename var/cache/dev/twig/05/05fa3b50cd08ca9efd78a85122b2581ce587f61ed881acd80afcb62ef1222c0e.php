<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_d36c2f5d7319c8ae700628e0db82c10987b88851bb0029d9edba495cfb35301d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2a1d2e3fd631521f7b7e0498c5aa9fdef71c30c7aaa7dcb2a4c7c96104840c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a1d2e3fd631521f7b7e0498c5aa9fdef71c30c7aaa7dcb2a4c7c96104840c9->enter($__internal_b2a1d2e3fd631521f7b7e0498c5aa9fdef71c30c7aaa7dcb2a4c7c96104840c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $__internal_a09378be0b06e78c6b7953b8d9927b4046f2778bde9172e3ba54af6b1a4aa56e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09378be0b06e78c6b7953b8d9927b4046f2778bde9172e3ba54af6b1a4aa56e->enter($__internal_a09378be0b06e78c6b7953b8d9927b4046f2778bde9172e3ba54af6b1a4aa56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2a1d2e3fd631521f7b7e0498c5aa9fdef71c30c7aaa7dcb2a4c7c96104840c9->leave($__internal_b2a1d2e3fd631521f7b7e0498c5aa9fdef71c30c7aaa7dcb2a4c7c96104840c9_prof);

        
        $__internal_a09378be0b06e78c6b7953b8d9927b4046f2778bde9172e3ba54af6b1a4aa56e->leave($__internal_a09378be0b06e78c6b7953b8d9927b4046f2778bde9172e3ba54af6b1a4aa56e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
