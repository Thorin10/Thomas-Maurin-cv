<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_31d7116a89f4e78523b158639170d2d0da78ee98c8a24b88f3b357e48cec896e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_90467212dee464e496bc07d10aa10716dd0d032c5366ddd3e999e253b882e069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90467212dee464e496bc07d10aa10716dd0d032c5366ddd3e999e253b882e069->enter($__internal_90467212dee464e496bc07d10aa10716dd0d032c5366ddd3e999e253b882e069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_60de4e3b882fac4fda8cb1c453c4784d707193d988887917ee773057951c3e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60de4e3b882fac4fda8cb1c453c4784d707193d988887917ee773057951c3e8e->enter($__internal_60de4e3b882fac4fda8cb1c453c4784d707193d988887917ee773057951c3e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90467212dee464e496bc07d10aa10716dd0d032c5366ddd3e999e253b882e069->leave($__internal_90467212dee464e496bc07d10aa10716dd0d032c5366ddd3e999e253b882e069_prof);

        
        $__internal_60de4e3b882fac4fda8cb1c453c4784d707193d988887917ee773057951c3e8e->leave($__internal_60de4e3b882fac4fda8cb1c453c4784d707193d988887917ee773057951c3e8e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f7614f7ad8a4bfddf8933939c4ea68c2ef06c394f57231f744dad3182662e0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f7614f7ad8a4bfddf8933939c4ea68c2ef06c394f57231f744dad3182662e0c->enter($__internal_2f7614f7ad8a4bfddf8933939c4ea68c2ef06c394f57231f744dad3182662e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a230ed9dc3c2e9ab61b85e90f853b32e134ad4b3d3da82c5ca62c65bd12b6331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a230ed9dc3c2e9ab61b85e90f853b32e134ad4b3d3da82c5ca62c65bd12b6331->enter($__internal_a230ed9dc3c2e9ab61b85e90f853b32e134ad4b3d3da82c5ca62c65bd12b6331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a230ed9dc3c2e9ab61b85e90f853b32e134ad4b3d3da82c5ca62c65bd12b6331->leave($__internal_a230ed9dc3c2e9ab61b85e90f853b32e134ad4b3d3da82c5ca62c65bd12b6331_prof);

        
        $__internal_2f7614f7ad8a4bfddf8933939c4ea68c2ef06c394f57231f744dad3182662e0c->leave($__internal_2f7614f7ad8a4bfddf8933939c4ea68c2ef06c394f57231f744dad3182662e0c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/thomas/thomascv/cv/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
