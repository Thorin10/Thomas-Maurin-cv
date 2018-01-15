<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_f135c28e9961c4f8531c57cb832d3ed58dfde9050f84e828c1fce839f32afd98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22f8c3ba5f80c2bf4557ffa689cd496be7e7e3fd681894859b82c3d718a85369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f8c3ba5f80c2bf4557ffa689cd496be7e7e3fd681894859b82c3d718a85369->enter($__internal_22f8c3ba5f80c2bf4557ffa689cd496be7e7e3fd681894859b82c3d718a85369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $__internal_72453a81e9d39eb20180ec4f6688b0e9db20201c2984e50afc001ef3ebe82331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72453a81e9d39eb20180ec4f6688b0e9db20201c2984e50afc001ef3ebe82331->enter($__internal_72453a81e9d39eb20180ec4f6688b0e9db20201c2984e50afc001ef3ebe82331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22f8c3ba5f80c2bf4557ffa689cd496be7e7e3fd681894859b82c3d718a85369->leave($__internal_22f8c3ba5f80c2bf4557ffa689cd496be7e7e3fd681894859b82c3d718a85369_prof);

        
        $__internal_72453a81e9d39eb20180ec4f6688b0e9db20201c2984e50afc001ef3ebe82331->leave($__internal_72453a81e9d39eb20180ec4f6688b0e9db20201c2984e50afc001ef3ebe82331_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
