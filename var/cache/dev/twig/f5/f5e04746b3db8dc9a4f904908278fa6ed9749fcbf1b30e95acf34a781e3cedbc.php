<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_55b1f710d48dacd6072679295a72fec47118f2d0b88b4a6ee130d46769b42984 extends Twig_Template
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
        // line 13
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 13);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7f548e59da1fbb3542b0f536fac088e1e1f473cfa5e46f6f8f3e49f1418e4c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f548e59da1fbb3542b0f536fac088e1e1f473cfa5e46f6f8f3e49f1418e4c6->enter($__internal_c7f548e59da1fbb3542b0f536fac088e1e1f473cfa5e46f6f8f3e49f1418e4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $__internal_ff574a05f8dbbe7d37133e09d973c1e761c2de6fb91612c82891b0ee65f22c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff574a05f8dbbe7d37133e09d973c1e761c2de6fb91612c82891b0ee65f22c1f->enter($__internal_ff574a05f8dbbe7d37133e09d973c1e761c2de6fb91612c82891b0ee65f22c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_array_macro.html.twig", "SonataAdminBundle:CRUD:list_array.html.twig", 11);
        // line 13
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7f548e59da1fbb3542b0f536fac088e1e1f473cfa5e46f6f8f3e49f1418e4c6->leave($__internal_c7f548e59da1fbb3542b0f536fac088e1e1f473cfa5e46f6f8f3e49f1418e4c6_prof);

        
        $__internal_ff574a05f8dbbe7d37133e09d973c1e761c2de6fb91612c82891b0ee65f22c1f->leave($__internal_ff574a05f8dbbe7d37133e09d973c1e761c2de6fb91612c82891b0ee65f22c1f_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_48580a92ada764e5a70a249ab4af36167a389ae6ffac122cd2b8075ff8f2e3aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48580a92ada764e5a70a249ab4af36167a389ae6ffac122cd2b8075ff8f2e3aa->enter($__internal_48580a92ada764e5a70a249ab4af36167a389ae6ffac122cd2b8075ff8f2e3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_54767d574e17f1e162261bdb62d2320be31163701704e5cb80d3882ca6bcd038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54767d574e17f1e162261bdb62d2320be31163701704e5cb80d3882ca6bcd038->enter($__internal_54767d574e17f1e162261bdb62d2320be31163701704e5cb80d3882ca6bcd038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["list"]->getrender_array(($context["value"] ?? $this->getContext($context, "value")), ( !$this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "inline", array(), "any", true, true) || $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "inline", array())));
        echo "
";
        
        $__internal_54767d574e17f1e162261bdb62d2320be31163701704e5cb80d3882ca6bcd038->leave($__internal_54767d574e17f1e162261bdb62d2320be31163701704e5cb80d3882ca6bcd038_prof);

        
        $__internal_48580a92ada764e5a70a249ab4af36167a389ae6ffac122cd2b8075ff8f2e3aa->leave($__internal_48580a92ada764e5a70a249ab4af36167a389ae6ffac122cd2b8075ff8f2e3aa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  42 => 15,  32 => 13,  30 => 11,  18 => 13,);
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
{% import 'SonataAdminBundle:CRUD:base_array_macro.html.twig' as list %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ list.render_array(value, field_description.options.inline is not defined or field_description.options.inline) }}
{% endblock %}
", "SonataAdminBundle:CRUD:list_array.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_array.html.twig");
    }
}
