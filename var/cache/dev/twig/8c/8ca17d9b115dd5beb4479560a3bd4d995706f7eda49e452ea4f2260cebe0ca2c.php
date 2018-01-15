<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_1eaa5e6913f04bfa63d9a1dbe061d86c577a7c26d5be77b5242a0cd4f1109ccf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_b9de77f71d2a5db47b0910a2856d1f0fc93fb16bfe4314d8958031e87adfee93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9de77f71d2a5db47b0910a2856d1f0fc93fb16bfe4314d8958031e87adfee93->enter($__internal_b9de77f71d2a5db47b0910a2856d1f0fc93fb16bfe4314d8958031e87adfee93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_a23f926d7b6c62f03854818c0ec1465792d63247e2b4a41257890a256988b903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23f926d7b6c62f03854818c0ec1465792d63247e2b4a41257890a256988b903->enter($__internal_a23f926d7b6c62f03854818c0ec1465792d63247e2b4a41257890a256988b903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9de77f71d2a5db47b0910a2856d1f0fc93fb16bfe4314d8958031e87adfee93->leave($__internal_b9de77f71d2a5db47b0910a2856d1f0fc93fb16bfe4314d8958031e87adfee93_prof);

        
        $__internal_a23f926d7b6c62f03854818c0ec1465792d63247e2b4a41257890a256988b903->leave($__internal_a23f926d7b6c62f03854818c0ec1465792d63247e2b4a41257890a256988b903_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09591f53e8f417286933c20655effd2338c6f31210aa8a638ec2e480c06a4b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09591f53e8f417286933c20655effd2338c6f31210aa8a638ec2e480c06a4b03->enter($__internal_09591f53e8f417286933c20655effd2338c6f31210aa8a638ec2e480c06a4b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e5acf7d8e538f97e9446ac6ec881a0a4d0fd0516caa2ec1b06baaaf40ce3725c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5acf7d8e538f97e9446ac6ec881a0a4d0fd0516caa2ec1b06baaaf40ce3725c->enter($__internal_e5acf7d8e538f97e9446ac6ec881a0a4d0fd0516caa2ec1b06baaaf40ce3725c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e5acf7d8e538f97e9446ac6ec881a0a4d0fd0516caa2ec1b06baaaf40ce3725c->leave($__internal_e5acf7d8e538f97e9446ac6ec881a0a4d0fd0516caa2ec1b06baaaf40ce3725c_prof);

        
        $__internal_09591f53e8f417286933c20655effd2338c6f31210aa8a638ec2e480c06a4b03->leave($__internal_09591f53e8f417286933c20655effd2338c6f31210aa8a638ec2e480c06a4b03_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/thomas/thomascv/cv/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
