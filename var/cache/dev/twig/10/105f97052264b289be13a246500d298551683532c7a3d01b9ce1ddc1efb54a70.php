<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_ef5b3275d379b9a8b4aa8f5222e07abe53d1865e95cecc3f9b4544b70776e2d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dd5011d8457a83734867b9b37efef55098dd9bbe9164d9724e4a994052d4383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd5011d8457a83734867b9b37efef55098dd9bbe9164d9724e4a994052d4383->enter($__internal_0dd5011d8457a83734867b9b37efef55098dd9bbe9164d9724e4a994052d4383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_2a37258642e160ac63351a8f7fe50ee4ac0847d67f6deaa7880e95c51033ef7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a37258642e160ac63351a8f7fe50ee4ac0847d67f6deaa7880e95c51033ef7a->enter($__internal_2a37258642e160ac63351a8f7fe50ee4ac0847d67f6deaa7880e95c51033ef7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dd5011d8457a83734867b9b37efef55098dd9bbe9164d9724e4a994052d4383->leave($__internal_0dd5011d8457a83734867b9b37efef55098dd9bbe9164d9724e4a994052d4383_prof);

        
        $__internal_2a37258642e160ac63351a8f7fe50ee4ac0847d67f6deaa7880e95c51033ef7a->leave($__internal_2a37258642e160ac63351a8f7fe50ee4ac0847d67f6deaa7880e95c51033ef7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33f640859b807cf0b26d2aa57e8b5ff60cdc8d073310f723de018444ae8ef725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f640859b807cf0b26d2aa57e8b5ff60cdc8d073310f723de018444ae8ef725->enter($__internal_33f640859b807cf0b26d2aa57e8b5ff60cdc8d073310f723de018444ae8ef725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_abca8d46066b5936bd732b20cc454e14b56dda332722c500d67f3cfd6d4e410a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abca8d46066b5936bd732b20cc454e14b56dda332722c500d67f3cfd6d4e410a->enter($__internal_abca8d46066b5936bd732b20cc454e14b56dda332722c500d67f3cfd6d4e410a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_abca8d46066b5936bd732b20cc454e14b56dda332722c500d67f3cfd6d4e410a->leave($__internal_abca8d46066b5936bd732b20cc454e14b56dda332722c500d67f3cfd6d4e410a_prof);

        
        $__internal_33f640859b807cf0b26d2aa57e8b5ff60cdc8d073310f723de018444ae8ef725->leave($__internal_33f640859b807cf0b26d2aa57e8b5ff60cdc8d073310f723de018444ae8ef725_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/thomas/thomascv/cv/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
