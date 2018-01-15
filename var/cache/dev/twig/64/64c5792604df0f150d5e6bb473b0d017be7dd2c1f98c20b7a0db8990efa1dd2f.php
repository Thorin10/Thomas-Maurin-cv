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
        $__internal_ee2a336354e00aa3c340879068502142b5d6c93ebb8a279770042f2680f0ea69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee2a336354e00aa3c340879068502142b5d6c93ebb8a279770042f2680f0ea69->enter($__internal_ee2a336354e00aa3c340879068502142b5d6c93ebb8a279770042f2680f0ea69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $__internal_3f9d4916da7225e7ceb461a7f83d1221e5262ada54cc54e6be1dbf3df3460d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9d4916da7225e7ceb461a7f83d1221e5262ada54cc54e6be1dbf3df3460d84->enter($__internal_3f9d4916da7225e7ceb461a7f83d1221e5262ada54cc54e6be1dbf3df3460d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee2a336354e00aa3c340879068502142b5d6c93ebb8a279770042f2680f0ea69->leave($__internal_ee2a336354e00aa3c340879068502142b5d6c93ebb8a279770042f2680f0ea69_prof);

        
        $__internal_3f9d4916da7225e7ceb461a7f83d1221e5262ada54cc54e6be1dbf3df3460d84->leave($__internal_3f9d4916da7225e7ceb461a7f83d1221e5262ada54cc54e6be1dbf3df3460d84_prof);

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
", "SonataAdminBundle:CRUD:list_string.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
