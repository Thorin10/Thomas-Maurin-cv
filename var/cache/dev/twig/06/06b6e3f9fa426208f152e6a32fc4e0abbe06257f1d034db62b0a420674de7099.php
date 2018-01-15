<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_d8b599a0aa46954af76413b7d3671e4c952a8193463b7c9721ee1fd5241e478e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_902ccff7492d8c7399133e4e8994b230e6ab1f6efcb6a86c867e554830592f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_902ccff7492d8c7399133e4e8994b230e6ab1f6efcb6a86c867e554830592f22->enter($__internal_902ccff7492d8c7399133e4e8994b230e6ab1f6efcb6a86c867e554830592f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_5b332a6c531fac1822dfc658cea89d82abba8cee20cb747b681cb39b5f6ccc15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b332a6c531fac1822dfc658cea89d82abba8cee20cb747b681cb39b5f6ccc15->enter($__internal_5b332a6c531fac1822dfc658cea89d82abba8cee20cb747b681cb39b5f6ccc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_902ccff7492d8c7399133e4e8994b230e6ab1f6efcb6a86c867e554830592f22->leave($__internal_902ccff7492d8c7399133e4e8994b230e6ab1f6efcb6a86c867e554830592f22_prof);

        
        $__internal_5b332a6c531fac1822dfc658cea89d82abba8cee20cb747b681cb39b5f6ccc15->leave($__internal_5b332a6c531fac1822dfc658cea89d82abba8cee20cb747b681cb39b5f6ccc15_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2e4b00d7973a10a547283494163f7cb7eef90ad5b6975e02158a22f73ce5626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e4b00d7973a10a547283494163f7cb7eef90ad5b6975e02158a22f73ce5626->enter($__internal_b2e4b00d7973a10a547283494163f7cb7eef90ad5b6975e02158a22f73ce5626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1387fc30bdd376a696797eb628052e05390a88028a97c0d61df3867b196948dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1387fc30bdd376a696797eb628052e05390a88028a97c0d61df3867b196948dd->enter($__internal_1387fc30bdd376a696797eb628052e05390a88028a97c0d61df3867b196948dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_1387fc30bdd376a696797eb628052e05390a88028a97c0d61df3867b196948dd->leave($__internal_1387fc30bdd376a696797eb628052e05390a88028a97c0d61df3867b196948dd_prof);

        
        $__internal_b2e4b00d7973a10a547283494163f7cb7eef90ad5b6975e02158a22f73ce5626->leave($__internal_b2e4b00d7973a10a547283494163f7cb7eef90ad5b6975e02158a22f73ce5626_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/thomas/thomascv/cv/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
