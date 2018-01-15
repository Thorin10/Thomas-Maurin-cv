<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_64c3ac649bd5acf4ac1c01452b540555da8a35cf0d9845e18ffe6b8216471256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4430796141c7435438b7844cf458d5f1d384d9ec95d41cb6c24ad302ae6248a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4430796141c7435438b7844cf458d5f1d384d9ec95d41cb6c24ad302ae6248a4->enter($__internal_4430796141c7435438b7844cf458d5f1d384d9ec95d41cb6c24ad302ae6248a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        $__internal_d0f6c5addbbd45d5192828cf189f892aa21ab116e3a165f8c674837a33cf0b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f6c5addbbd45d5192828cf189f892aa21ab116e3a165f8c674837a33cf0b7b->enter($__internal_d0f6c5addbbd45d5192828cf189f892aa21ab116e3a165f8c674837a33cf0b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_4430796141c7435438b7844cf458d5f1d384d9ec95d41cb6c24ad302ae6248a4->leave($__internal_4430796141c7435438b7844cf458d5f1d384d9ec95d41cb6c24ad302ae6248a4_prof);

        
        $__internal_d0f6c5addbbd45d5192828cf189f892aa21ab116e3a165f8c674837a33cf0b7b->leave($__internal_d0f6c5addbbd45d5192828cf189f892aa21ab116e3a165f8c674837a33cf0b7b_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_13be47bf780e512630dc8b60b29b462d22fcbfda00b2b519cd28bec0cb3002da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13be47bf780e512630dc8b60b29b462d22fcbfda00b2b519cd28bec0cb3002da->enter($__internal_13be47bf780e512630dc8b60b29b462d22fcbfda00b2b519cd28bec0cb3002da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_f13d74b7038b5c0cc9333c3c3f54d3f547196fa9216f3bbeae001d595dbca425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13d74b7038b5c0cc9333c3c3f54d3f547196fa9216f3bbeae001d595dbca425->enter($__internal_f13d74b7038b5c0cc9333c3c3f54d3f547196fa9216f3bbeae001d595dbca425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_f13d74b7038b5c0cc9333c3c3f54d3f547196fa9216f3bbeae001d595dbca425->leave($__internal_f13d74b7038b5c0cc9333c3c3f54d3f547196fa9216f3bbeae001d595dbca425_prof);

        
        $__internal_13be47bf780e512630dc8b60b29b462d22fcbfda00b2b519cd28bec0cb3002da->leave($__internal_13be47bf780e512630dc8b60b29b462d22fcbfda00b2b519cd28bec0cb3002da_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
