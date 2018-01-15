<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_6bf5e3639b8174089301e932d7a9220b2896eda7addc6d4ec8b6fc6891c5a861 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c75ba7b19e14ceac5dfb81b87cf807a31519971b04cf6e7a3d5c40049ced132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c75ba7b19e14ceac5dfb81b87cf807a31519971b04cf6e7a3d5c40049ced132->enter($__internal_9c75ba7b19e14ceac5dfb81b87cf807a31519971b04cf6e7a3d5c40049ced132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $__internal_07b285702e9b64cc50df9d5c062a8301f21371bf18e5da468f3d2f5f2dba25b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b285702e9b64cc50df9d5c062a8301f21371bf18e5da468f3d2f5f2dba25b3->enter($__internal_07b285702e9b64cc50df9d5c062a8301f21371bf18e5da468f3d2f5f2dba25b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c75ba7b19e14ceac5dfb81b87cf807a31519971b04cf6e7a3d5c40049ced132->leave($__internal_9c75ba7b19e14ceac5dfb81b87cf807a31519971b04cf6e7a3d5c40049ced132_prof);

        
        $__internal_07b285702e9b64cc50df9d5c062a8301f21371bf18e5da468f3d2f5f2dba25b3->leave($__internal_07b285702e9b64cc50df9d5c062a8301f21371bf18e5da468f3d2f5f2dba25b3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_52872ca477ba410edbe16cb114ce2e197ab2f1e66379c858dc0a4714987eabb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52872ca477ba410edbe16cb114ce2e197ab2f1e66379c858dc0a4714987eabb6->enter($__internal_52872ca477ba410edbe16cb114ce2e197ab2f1e66379c858dc0a4714987eabb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_91b950092dcd30df5f4f0610bda6421d1cfe84f8ea32881a2322f6700d5a9f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b950092dcd30df5f4f0610bda6421d1cfe84f8ea32881a2322f6700d5a9f82->enter($__internal_91b950092dcd30df5f4f0610bda6421d1cfe84f8ea32881a2322f6700d5a9f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_91b950092dcd30df5f4f0610bda6421d1cfe84f8ea32881a2322f6700d5a9f82->leave($__internal_91b950092dcd30df5f4f0610bda6421d1cfe84f8ea32881a2322f6700d5a9f82_prof);

        
        $__internal_52872ca477ba410edbe16cb114ce2e197ab2f1e66379c858dc0a4714987eabb6->leave($__internal_52872ca477ba410edbe16cb114ce2e197ab2f1e66379c858dc0a4714987eabb6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
