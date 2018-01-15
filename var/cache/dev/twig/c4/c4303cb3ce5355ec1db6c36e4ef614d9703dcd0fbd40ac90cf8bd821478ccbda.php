<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_33cb8439ecf9679785ff5473b4d88a9d580adf863263d8231e2ec6fd1465a9a1 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2185a8ea25d7eb7af987a6b1b4d24bd540ce47e80818914606ce3d30241a857c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2185a8ea25d7eb7af987a6b1b4d24bd540ce47e80818914606ce3d30241a857c->enter($__internal_2185a8ea25d7eb7af987a6b1b4d24bd540ce47e80818914606ce3d30241a857c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $__internal_d36d2eab0121f1dbdea3d759b12ad8e5fb53ad210178ef4e10171b8c2258e31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36d2eab0121f1dbdea3d759b12ad8e5fb53ad210178ef4e10171b8c2258e31b->enter($__internal_d36d2eab0121f1dbdea3d759b12ad8e5fb53ad210178ef4e10171b8c2258e31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2185a8ea25d7eb7af987a6b1b4d24bd540ce47e80818914606ce3d30241a857c->leave($__internal_2185a8ea25d7eb7af987a6b1b4d24bd540ce47e80818914606ce3d30241a857c_prof);

        
        $__internal_d36d2eab0121f1dbdea3d759b12ad8e5fb53ad210178ef4e10171b8c2258e31b->leave($__internal_d36d2eab0121f1dbdea3d759b12ad8e5fb53ad210178ef4e10171b8c2258e31b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9ca58f4fa2432fde40fb51a008d4504d7d92e7396f185d3bcf81c49a31d91370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca58f4fa2432fde40fb51a008d4504d7d92e7396f185d3bcf81c49a31d91370->enter($__internal_9ca58f4fa2432fde40fb51a008d4504d7d92e7396f185d3bcf81c49a31d91370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_0c1a12170fe33985467e2bf8a75f61400c8751129a9041e5d23c260428a4addc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1a12170fe33985467e2bf8a75f61400c8751129a9041e5d23c260428a4addc->enter($__internal_0c1a12170fe33985467e2bf8a75f61400c8751129a9041e5d23c260428a4addc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_0c1a12170fe33985467e2bf8a75f61400c8751129a9041e5d23c260428a4addc->leave($__internal_0c1a12170fe33985467e2bf8a75f61400c8751129a9041e5d23c260428a4addc_prof);

        
        $__internal_9ca58f4fa2432fde40fb51a008d4504d7d92e7396f185d3bcf81c49a31d91370->leave($__internal_9ca58f4fa2432fde40fb51a008d4504d7d92e7396f185d3bcf81c49a31d91370_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  18 => 12,);
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

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_text.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}
