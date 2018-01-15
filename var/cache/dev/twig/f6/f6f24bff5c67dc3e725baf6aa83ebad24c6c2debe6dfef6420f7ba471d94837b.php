<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_4d03be5c6cb591fd1098d871b24e96619cb2dc3afa7067971f6d6f877be9b3bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d5f104ad8bc8bfe6fdc6bfb9f719154ea612f0b8d37c059a96d599a95498308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d5f104ad8bc8bfe6fdc6bfb9f719154ea612f0b8d37c059a96d599a95498308->enter($__internal_3d5f104ad8bc8bfe6fdc6bfb9f719154ea612f0b8d37c059a96d599a95498308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $__internal_14f89278d963ae4545ecab9c547af82909dfd860de1df754893100d55163ea38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f89278d963ae4545ecab9c547af82909dfd860de1df754893100d55163ea38->enter($__internal_14f89278d963ae4545ecab9c547af82909dfd860de1df754893100d55163ea38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d5f104ad8bc8bfe6fdc6bfb9f719154ea612f0b8d37c059a96d599a95498308->leave($__internal_3d5f104ad8bc8bfe6fdc6bfb9f719154ea612f0b8d37c059a96d599a95498308_prof);

        
        $__internal_14f89278d963ae4545ecab9c547af82909dfd860de1df754893100d55163ea38->leave($__internal_14f89278d963ae4545ecab9c547af82909dfd860de1df754893100d55163ea38_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7c6e81a263ef6c65e61217c3fb2e34386aa5cedaee801fc6f155ff0610e8fbbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6e81a263ef6c65e61217c3fb2e34386aa5cedaee801fc6f155ff0610e8fbbb->enter($__internal_7c6e81a263ef6c65e61217c3fb2e34386aa5cedaee801fc6f155ff0610e8fbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_39d2458d2afd126b67ddcd1040000ca2f72426d4f645582aef8819c6c84e9ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d2458d2afd126b67ddcd1040000ca2f72426d4f645582aef8819c6c84e9ac5->enter($__internal_39d2458d2afd126b67ddcd1040000ca2f72426d4f645582aef8819c6c84e9ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_39d2458d2afd126b67ddcd1040000ca2f72426d4f645582aef8819c6c84e9ac5->leave($__internal_39d2458d2afd126b67ddcd1040000ca2f72426d4f645582aef8819c6c84e9ac5_prof);

        
        $__internal_7c6e81a263ef6c65e61217c3fb2e34386aa5cedaee801fc6f155ff0610e8fbbb->leave($__internal_7c6e81a263ef6c65e61217c3fb2e34386aa5cedaee801fc6f155ff0610e8fbbb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:list_percent.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
