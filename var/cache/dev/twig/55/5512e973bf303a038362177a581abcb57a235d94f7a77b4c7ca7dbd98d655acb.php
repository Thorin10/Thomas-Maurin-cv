<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_158c09a96d7842c4a1a2eef4b8b2da95821e8ed1636b27f03a7dac1f56899e6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_fe62e11b9a0c6dec611019d90c47877158994ddc9ddaba2b2948d52cc8611bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe62e11b9a0c6dec611019d90c47877158994ddc9ddaba2b2948d52cc8611bf7->enter($__internal_fe62e11b9a0c6dec611019d90c47877158994ddc9ddaba2b2948d52cc8611bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_13bfa38139c048f1796f4792cc9a9c6728f24f89f04849c58f919ba05ecce1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bfa38139c048f1796f4792cc9a9c6728f24f89f04849c58f919ba05ecce1dc->enter($__internal_13bfa38139c048f1796f4792cc9a9c6728f24f89f04849c58f919ba05ecce1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe62e11b9a0c6dec611019d90c47877158994ddc9ddaba2b2948d52cc8611bf7->leave($__internal_fe62e11b9a0c6dec611019d90c47877158994ddc9ddaba2b2948d52cc8611bf7_prof);

        
        $__internal_13bfa38139c048f1796f4792cc9a9c6728f24f89f04849c58f919ba05ecce1dc->leave($__internal_13bfa38139c048f1796f4792cc9a9c6728f24f89f04849c58f919ba05ecce1dc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd4bdcd62c40193413b4a502b25f259ec695e79c819b0993f61651bcbd955b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4bdcd62c40193413b4a502b25f259ec695e79c819b0993f61651bcbd955b6a->enter($__internal_fd4bdcd62c40193413b4a502b25f259ec695e79c819b0993f61651bcbd955b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f6c8c491a51d37879cab609e6054f3fa7e7a8e9ebdaa85fd6c53e67257df25bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c8c491a51d37879cab609e6054f3fa7e7a8e9ebdaa85fd6c53e67257df25bc->enter($__internal_f6c8c491a51d37879cab609e6054f3fa7e7a8e9ebdaa85fd6c53e67257df25bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_f6c8c491a51d37879cab609e6054f3fa7e7a8e9ebdaa85fd6c53e67257df25bc->leave($__internal_f6c8c491a51d37879cab609e6054f3fa7e7a8e9ebdaa85fd6c53e67257df25bc_prof);

        
        $__internal_fd4bdcd62c40193413b4a502b25f259ec695e79c819b0993f61651bcbd955b6a->leave($__internal_fd4bdcd62c40193413b4a502b25f259ec695e79c819b0993f61651bcbd955b6a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/thomas/thomascv/cv/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
