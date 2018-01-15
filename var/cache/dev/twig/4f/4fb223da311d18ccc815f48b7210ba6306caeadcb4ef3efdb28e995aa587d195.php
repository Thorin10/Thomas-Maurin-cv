<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_78043cb83071a75532e3bea2efd176d3bb26c8d1a66750a99a26a353dfa266af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_e693888ba7918426da50db1c92e6cad325791911d2ba8537da5e2bdfc726a2aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e693888ba7918426da50db1c92e6cad325791911d2ba8537da5e2bdfc726a2aa->enter($__internal_e693888ba7918426da50db1c92e6cad325791911d2ba8537da5e2bdfc726a2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_06a0a169c10fcf748b28921fa6aa713553d7ca5a5c0809e553d33bbac1aa79be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a0a169c10fcf748b28921fa6aa713553d7ca5a5c0809e553d33bbac1aa79be->enter($__internal_06a0a169c10fcf748b28921fa6aa713553d7ca5a5c0809e553d33bbac1aa79be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e693888ba7918426da50db1c92e6cad325791911d2ba8537da5e2bdfc726a2aa->leave($__internal_e693888ba7918426da50db1c92e6cad325791911d2ba8537da5e2bdfc726a2aa_prof);

        
        $__internal_06a0a169c10fcf748b28921fa6aa713553d7ca5a5c0809e553d33bbac1aa79be->leave($__internal_06a0a169c10fcf748b28921fa6aa713553d7ca5a5c0809e553d33bbac1aa79be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_176f9cc85e8a4e8713dfec06237a1e6848130875aeeeed5e3789a9b378794ede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176f9cc85e8a4e8713dfec06237a1e6848130875aeeeed5e3789a9b378794ede->enter($__internal_176f9cc85e8a4e8713dfec06237a1e6848130875aeeeed5e3789a9b378794ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2ced37188f2adb7f55738ddb7c08f75bb37c5e7429d8372cd7e19c85b03cc5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ced37188f2adb7f55738ddb7c08f75bb37c5e7429d8372cd7e19c85b03cc5cd->enter($__internal_2ced37188f2adb7f55738ddb7c08f75bb37c5e7429d8372cd7e19c85b03cc5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_2ced37188f2adb7f55738ddb7c08f75bb37c5e7429d8372cd7e19c85b03cc5cd->leave($__internal_2ced37188f2adb7f55738ddb7c08f75bb37c5e7429d8372cd7e19c85b03cc5cd_prof);

        
        $__internal_176f9cc85e8a4e8713dfec06237a1e6848130875aeeeed5e3789a9b378794ede->leave($__internal_176f9cc85e8a4e8713dfec06237a1e6848130875aeeeed5e3789a9b378794ede_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/thomas/thomascv/cv/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
