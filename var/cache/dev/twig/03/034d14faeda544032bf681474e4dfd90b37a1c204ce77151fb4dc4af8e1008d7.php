<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_b23bdde0a1dd1b606d17c7e2430c590d60ca5fd4204c274ac2102f549798ae22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e7487e837e03310caf5d336fe41d19211319f4a7864a22365ac0a78ee241ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7487e837e03310caf5d336fe41d19211319f4a7864a22365ac0a78ee241ccd->enter($__internal_2e7487e837e03310caf5d336fe41d19211319f4a7864a22365ac0a78ee241ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $__internal_2bcb0b5280f2985e66b8abd6fd48eb892342a7fbb448909b566ef1617c653051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bcb0b5280f2985e66b8abd6fd48eb892342a7fbb448909b566ef1617c653051->enter($__internal_2bcb0b5280f2985e66b8abd6fd48eb892342a7fbb448909b566ef1617c653051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e7487e837e03310caf5d336fe41d19211319f4a7864a22365ac0a78ee241ccd->leave($__internal_2e7487e837e03310caf5d336fe41d19211319f4a7864a22365ac0a78ee241ccd_prof);

        
        $__internal_2bcb0b5280f2985e66b8abd6fd48eb892342a7fbb448909b566ef1617c653051->leave($__internal_2bcb0b5280f2985e66b8abd6fd48eb892342a7fbb448909b566ef1617c653051_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_fc748885358ff1c20ab195b0c3a92880919e558efed1bd9c3e2beb29eccd3ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc748885358ff1c20ab195b0c3a92880919e558efed1bd9c3e2beb29eccd3ef0->enter($__internal_fc748885358ff1c20ab195b0c3a92880919e558efed1bd9c3e2beb29eccd3ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_16d8b5b4cfa0739acfa0b53eaeb586c42f4c84980ca6d3f33f6615e8cd745906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d8b5b4cfa0739acfa0b53eaeb586c42f4c84980ca6d3f33f6615e8cd745906->enter($__internal_16d8b5b4cfa0739acfa0b53eaeb586c42f4c84980ca6d3f33f6615e8cd745906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_16d8b5b4cfa0739acfa0b53eaeb586c42f4c84980ca6d3f33f6615e8cd745906->leave($__internal_16d8b5b4cfa0739acfa0b53eaeb586c42f4c84980ca6d3f33f6615e8cd745906_prof);

        
        $__internal_fc748885358ff1c20ab195b0c3a92880919e558efed1bd9c3e2beb29eccd3ef0->leave($__internal_fc748885358ff1c20ab195b0c3a92880919e558efed1bd9c3e2beb29eccd3ef0_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_34b93bc8cb40fc607d774cd87ffcb7803c588f6fc26a8f5713a257114783ff3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b93bc8cb40fc607d774cd87ffcb7803c588f6fc26a8f5713a257114783ff3e->enter($__internal_34b93bc8cb40fc607d774cd87ffcb7803c588f6fc26a8f5713a257114783ff3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_4d23ec4afe6988610246050ae81458c3968bb85cdd0931624c725e177a63a5b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d23ec4afe6988610246050ae81458c3968bb85cdd0931624c725e177a63a5b0->enter($__internal_4d23ec4afe6988610246050ae81458c3968bb85cdd0931624c725e177a63a5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_4d23ec4afe6988610246050ae81458c3968bb85cdd0931624c725e177a63a5b0->leave($__internal_4d23ec4afe6988610246050ae81458c3968bb85cdd0931624c725e177a63a5b0_prof);

        
        $__internal_34b93bc8cb40fc607d774cd87ffcb7803c588f6fc26a8f5713a257114783ff3e->leave($__internal_34b93bc8cb40fc607d774cd87ffcb7803c588f6fc26a8f5713a257114783ff3e_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_66e36b7277ab94bdc637cfeb8c5173b2da93904a35809e25041e1be25a8a8222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e36b7277ab94bdc637cfeb8c5173b2da93904a35809e25041e1be25a8a8222->enter($__internal_66e36b7277ab94bdc637cfeb8c5173b2da93904a35809e25041e1be25a8a8222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_28ba39b302452ef95414316320cc1274f7647e80208f0765bbafdc4bb3a5816a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ba39b302452ef95414316320cc1274f7647e80208f0765bbafdc4bb3a5816a->enter($__internal_28ba39b302452ef95414316320cc1274f7647e80208f0765bbafdc4bb3a5816a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_28ba39b302452ef95414316320cc1274f7647e80208f0765bbafdc4bb3a5816a->leave($__internal_28ba39b302452ef95414316320cc1274f7647e80208f0765bbafdc4bb3a5816a_prof);

        
        $__internal_66e36b7277ab94bdc637cfeb8c5173b2da93904a35809e25041e1be25a8a8222->leave($__internal_66e36b7277ab94bdc637cfeb8c5173b2da93904a35809e25041e1be25a8a8222_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  86 => 24,  72 => 20,  69 => 19,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
