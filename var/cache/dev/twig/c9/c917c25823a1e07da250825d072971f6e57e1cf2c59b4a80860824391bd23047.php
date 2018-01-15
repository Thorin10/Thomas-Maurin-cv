<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_1ff4a962c71395b180e6afbd5083920db8d28c17f22f3acd5ad44291db33d056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_763a041c8d7d548bd3d0487b42c161479fbb555804ea1b6e8af23488f5347288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763a041c8d7d548bd3d0487b42c161479fbb555804ea1b6e8af23488f5347288->enter($__internal_763a041c8d7d548bd3d0487b42c161479fbb555804ea1b6e8af23488f5347288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $__internal_2a43e63fb29bbde0264eb204b1270ab5f725ddf67786691d9de3d22f4925d16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a43e63fb29bbde0264eb204b1270ab5f725ddf67786691d9de3d22f4925d16c->enter($__internal_2a43e63fb29bbde0264eb204b1270ab5f725ddf67786691d9de3d22f4925d16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_763a041c8d7d548bd3d0487b42c161479fbb555804ea1b6e8af23488f5347288->leave($__internal_763a041c8d7d548bd3d0487b42c161479fbb555804ea1b6e8af23488f5347288_prof);

        
        $__internal_2a43e63fb29bbde0264eb204b1270ab5f725ddf67786691d9de3d22f4925d16c->leave($__internal_2a43e63fb29bbde0264eb204b1270ab5f725ddf67786691d9de3d22f4925d16c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_128831e105ccd7346b6dd32dfbdf08e1270f209dfc84338a4e3124e59de3591a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_128831e105ccd7346b6dd32dfbdf08e1270f209dfc84338a4e3124e59de3591a->enter($__internal_128831e105ccd7346b6dd32dfbdf08e1270f209dfc84338a4e3124e59de3591a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4071776281551e63e2b7501ec52fe199bd73f9120b82351659d1f7ee1afc0f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4071776281551e63e2b7501ec52fe199bd73f9120b82351659d1f7ee1afc0f84->enter($__internal_4071776281551e63e2b7501ec52fe199bd73f9120b82351659d1f7ee1afc0f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_4071776281551e63e2b7501ec52fe199bd73f9120b82351659d1f7ee1afc0f84->leave($__internal_4071776281551e63e2b7501ec52fe199bd73f9120b82351659d1f7ee1afc0f84_prof);

        
        $__internal_128831e105ccd7346b6dd32dfbdf08e1270f209dfc84338a4e3124e59de3591a->leave($__internal_128831e105ccd7346b6dd32dfbdf08e1270f209dfc84338a4e3124e59de3591a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
