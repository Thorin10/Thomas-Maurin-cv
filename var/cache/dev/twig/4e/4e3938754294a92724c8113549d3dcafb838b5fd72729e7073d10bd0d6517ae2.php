<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_80f6b5b0eb5ffc35b33e610a57bb547eaecac2b36c756adeeb3974609eb57f54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_776d0942f02a2430b33413fc3f3b5407195c555fa9690bf531c708dbffe2246d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776d0942f02a2430b33413fc3f3b5407195c555fa9690bf531c708dbffe2246d->enter($__internal_776d0942f02a2430b33413fc3f3b5407195c555fa9690bf531c708dbffe2246d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_31b1d40f55e9e4a41bc7f2fb99f6eea8cf9c3874ad211916203d01d191ae3e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b1d40f55e9e4a41bc7f2fb99f6eea8cf9c3874ad211916203d01d191ae3e31->enter($__internal_31b1d40f55e9e4a41bc7f2fb99f6eea8cf9c3874ad211916203d01d191ae3e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_776d0942f02a2430b33413fc3f3b5407195c555fa9690bf531c708dbffe2246d->leave($__internal_776d0942f02a2430b33413fc3f3b5407195c555fa9690bf531c708dbffe2246d_prof);

        
        $__internal_31b1d40f55e9e4a41bc7f2fb99f6eea8cf9c3874ad211916203d01d191ae3e31->leave($__internal_31b1d40f55e9e4a41bc7f2fb99f6eea8cf9c3874ad211916203d01d191ae3e31_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6c9f86b69978dbebfa01ea269f6f379ea817992969db810b453ba7564add174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c9f86b69978dbebfa01ea269f6f379ea817992969db810b453ba7564add174->enter($__internal_d6c9f86b69978dbebfa01ea269f6f379ea817992969db810b453ba7564add174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_23384024af10d7fbc9bb5b2f17e0dc18733eac6795565d69e2692c496050911f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23384024af10d7fbc9bb5b2f17e0dc18733eac6795565d69e2692c496050911f->enter($__internal_23384024af10d7fbc9bb5b2f17e0dc18733eac6795565d69e2692c496050911f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_23384024af10d7fbc9bb5b2f17e0dc18733eac6795565d69e2692c496050911f->leave($__internal_23384024af10d7fbc9bb5b2f17e0dc18733eac6795565d69e2692c496050911f_prof);

        
        $__internal_d6c9f86b69978dbebfa01ea269f6f379ea817992969db810b453ba7564add174->leave($__internal_d6c9f86b69978dbebfa01ea269f6f379ea817992969db810b453ba7564add174_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/thomas/thomascv/cv/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
