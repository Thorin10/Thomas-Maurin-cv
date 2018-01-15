<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_fbe427f1d266eb885d65b0580f4163b9e39a2ee6aba4d78db214bed626135b35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_97079030d01a6d58c6964ec829ada1370d5b2dd581074ab5e639e4f3eb4406dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97079030d01a6d58c6964ec829ada1370d5b2dd581074ab5e639e4f3eb4406dd->enter($__internal_97079030d01a6d58c6964ec829ada1370d5b2dd581074ab5e639e4f3eb4406dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_51bcc99f738fc45ff3ec5f26c437918832be98d9da0e41dd834b8f33ff87034a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bcc99f738fc45ff3ec5f26c437918832be98d9da0e41dd834b8f33ff87034a->enter($__internal_51bcc99f738fc45ff3ec5f26c437918832be98d9da0e41dd834b8f33ff87034a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97079030d01a6d58c6964ec829ada1370d5b2dd581074ab5e639e4f3eb4406dd->leave($__internal_97079030d01a6d58c6964ec829ada1370d5b2dd581074ab5e639e4f3eb4406dd_prof);

        
        $__internal_51bcc99f738fc45ff3ec5f26c437918832be98d9da0e41dd834b8f33ff87034a->leave($__internal_51bcc99f738fc45ff3ec5f26c437918832be98d9da0e41dd834b8f33ff87034a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6216b396681b69adc05de2adebeb948b17e7cb5cc16e6bdfc1a3351623ff4257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6216b396681b69adc05de2adebeb948b17e7cb5cc16e6bdfc1a3351623ff4257->enter($__internal_6216b396681b69adc05de2adebeb948b17e7cb5cc16e6bdfc1a3351623ff4257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d6a3b9155413f441ebef236a0160e06de31a4c73c957bb688580d5738fa9a896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a3b9155413f441ebef236a0160e06de31a4c73c957bb688580d5738fa9a896->enter($__internal_d6a3b9155413f441ebef236a0160e06de31a4c73c957bb688580d5738fa9a896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d6a3b9155413f441ebef236a0160e06de31a4c73c957bb688580d5738fa9a896->leave($__internal_d6a3b9155413f441ebef236a0160e06de31a4c73c957bb688580d5738fa9a896_prof);

        
        $__internal_6216b396681b69adc05de2adebeb948b17e7cb5cc16e6bdfc1a3351623ff4257->leave($__internal_6216b396681b69adc05de2adebeb948b17e7cb5cc16e6bdfc1a3351623ff4257_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/thomas/thomascv/cv/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
