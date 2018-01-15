<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_7ad7ba5123c5f124df0e1e7a3cf221f39c471c1d70e53e0d50048041e0dad860 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_de87249c03975d6081b3a9d7c98cde63170cba608e449b8761b7a0acfbd83996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de87249c03975d6081b3a9d7c98cde63170cba608e449b8761b7a0acfbd83996->enter($__internal_de87249c03975d6081b3a9d7c98cde63170cba608e449b8761b7a0acfbd83996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_fb613d3538010d6373bc2cf8c1d5cf0457c1aa01e8e9c234c397b5e2bf7ab47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb613d3538010d6373bc2cf8c1d5cf0457c1aa01e8e9c234c397b5e2bf7ab47e->enter($__internal_fb613d3538010d6373bc2cf8c1d5cf0457c1aa01e8e9c234c397b5e2bf7ab47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de87249c03975d6081b3a9d7c98cde63170cba608e449b8761b7a0acfbd83996->leave($__internal_de87249c03975d6081b3a9d7c98cde63170cba608e449b8761b7a0acfbd83996_prof);

        
        $__internal_fb613d3538010d6373bc2cf8c1d5cf0457c1aa01e8e9c234c397b5e2bf7ab47e->leave($__internal_fb613d3538010d6373bc2cf8c1d5cf0457c1aa01e8e9c234c397b5e2bf7ab47e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d104c3a3203257d025d8ae21b1c91645a542761f5c98ac5659df9cfec8998f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d104c3a3203257d025d8ae21b1c91645a542761f5c98ac5659df9cfec8998f1->enter($__internal_3d104c3a3203257d025d8ae21b1c91645a542761f5c98ac5659df9cfec8998f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6931ddc1ffd28da4c6f547cce1e12a3fc88fefb2f70087c926e09b1d551f1a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6931ddc1ffd28da4c6f547cce1e12a3fc88fefb2f70087c926e09b1d551f1a83->enter($__internal_6931ddc1ffd28da4c6f547cce1e12a3fc88fefb2f70087c926e09b1d551f1a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_6931ddc1ffd28da4c6f547cce1e12a3fc88fefb2f70087c926e09b1d551f1a83->leave($__internal_6931ddc1ffd28da4c6f547cce1e12a3fc88fefb2f70087c926e09b1d551f1a83_prof);

        
        $__internal_3d104c3a3203257d025d8ae21b1c91645a542761f5c98ac5659df9cfec8998f1->leave($__internal_3d104c3a3203257d025d8ae21b1c91645a542761f5c98ac5659df9cfec8998f1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/thomas/thomascv/cv/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
