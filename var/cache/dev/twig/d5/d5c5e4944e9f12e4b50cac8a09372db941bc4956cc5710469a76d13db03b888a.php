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
        $__internal_618b9b2353bc3333d3bf13356c38a0b0364bdcf09ab2798e000d76ba59b88114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_618b9b2353bc3333d3bf13356c38a0b0364bdcf09ab2798e000d76ba59b88114->enter($__internal_618b9b2353bc3333d3bf13356c38a0b0364bdcf09ab2798e000d76ba59b88114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $__internal_465245b38eb9b5aee2a4318d74d25b4f2d1fafdc74e24318722911beef085b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465245b38eb9b5aee2a4318d74d25b4f2d1fafdc74e24318722911beef085b78->enter($__internal_465245b38eb9b5aee2a4318d74d25b4f2d1fafdc74e24318722911beef085b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_618b9b2353bc3333d3bf13356c38a0b0364bdcf09ab2798e000d76ba59b88114->leave($__internal_618b9b2353bc3333d3bf13356c38a0b0364bdcf09ab2798e000d76ba59b88114_prof);

        
        $__internal_465245b38eb9b5aee2a4318d74d25b4f2d1fafdc74e24318722911beef085b78->leave($__internal_465245b38eb9b5aee2a4318d74d25b4f2d1fafdc74e24318722911beef085b78_prof);

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
", "SonataAdminBundle:CRUD:list_inner_row.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_inner_row.html.twig");
    }
}
