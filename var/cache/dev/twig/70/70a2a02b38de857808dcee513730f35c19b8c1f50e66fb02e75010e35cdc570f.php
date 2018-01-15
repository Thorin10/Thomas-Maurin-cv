<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_303d2f00375bc5e0fda317f970707dbcfcd6177883d337e06fdd4fd20e4e3609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cdc6ce3f8bbce4981962034c516671fb512f48d7b225bd79a820fe19a381b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cdc6ce3f8bbce4981962034c516671fb512f48d7b225bd79a820fe19a381b66->enter($__internal_6cdc6ce3f8bbce4981962034c516671fb512f48d7b225bd79a820fe19a381b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_ced1d51af1d39fd07f87377403ed94e50da086098d09727010cd89af310f1dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced1d51af1d39fd07f87377403ed94e50da086098d09727010cd89af310f1dcb->enter($__internal_ced1d51af1d39fd07f87377403ed94e50da086098d09727010cd89af310f1dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<!-- Start login layout -->

<form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

    ";
        // line 10
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 11
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 13
        echo "    <div id=\"bloc\" style=\"position:fixed; left: 30%; top: 100px\">
        <label for=\"Nom d'utilisateur\" style=\"color: #ffffff\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"_username\"value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/>
        <label for=\"password\" style=\"color: #ffffff\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"passwordtext\"/>
        <br/>
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" style=\"left: 100%\"/>
        <label for=\"remember_me\" style=\"color: white; left: 50px\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <br/>
        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>

<!-- End login layout -->";
        
        $__internal_6cdc6ce3f8bbce4981962034c516671fb512f48d7b225bd79a820fe19a381b66->leave($__internal_6cdc6ce3f8bbce4981962034c516671fb512f48d7b225bd79a820fe19a381b66_prof);

        
        $__internal_ced1d51af1d39fd07f87377403ed94e50da086098d09727010cd89af310f1dcb->leave($__internal_ced1d51af1d39fd07f87377403ed94e50da086098d09727010cd89af310f1dcb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  71 => 20,  64 => 16,  60 => 15,  56 => 14,  53 => 13,  47 => 11,  45 => 10,  40 => 8,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<!-- Start login layout -->

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">

    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}
    <div id=\"bloc\" style=\"position:fixed; left: 30%; top: 100px\">
        <label for=\"Nom d'utilisateur\" style=\"color: #ffffff\">{{ 'security.login.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"_username\"value=\"{{ last_username }}\" required=\"required\"/>
        <label for=\"password\" style=\"color: #ffffff\">{{ 'security.login.password'|trans }}</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"passwordtext\"/>
        <br/>
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" style=\"left: 100%\"/>
        <label for=\"remember_me\" style=\"color: white; left: 50px\">{{ 'security.login.remember_me'|trans }}</label>
        <br/>
        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
    </div>
</form>

<!-- End login layout -->", "FOSUserBundle:Security:login_content.html.twig", "/home/thomas/thomascv/cv/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
