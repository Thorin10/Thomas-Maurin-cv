<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_ce689da634ffd2835ea6bf436151a098c43919c9af903da5bd3d23879d243412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_1905bca001648cbfaa482e5a2b2b778490939867dfe6d60dd955917588c01d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1905bca001648cbfaa482e5a2b2b778490939867dfe6d60dd955917588c01d17->enter($__internal_1905bca001648cbfaa482e5a2b2b778490939867dfe6d60dd955917588c01d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_338f6f162643644d24350643c1fa45aef097f2a87b17422e1c7ceb4846e16634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338f6f162643644d24350643c1fa45aef097f2a87b17422e1c7ceb4846e16634->enter($__internal_338f6f162643644d24350643c1fa45aef097f2a87b17422e1c7ceb4846e16634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1905bca001648cbfaa482e5a2b2b778490939867dfe6d60dd955917588c01d17->leave($__internal_1905bca001648cbfaa482e5a2b2b778490939867dfe6d60dd955917588c01d17_prof);

        
        $__internal_338f6f162643644d24350643c1fa45aef097f2a87b17422e1c7ceb4846e16634->leave($__internal_338f6f162643644d24350643c1fa45aef097f2a87b17422e1c7ceb4846e16634_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd398b87eeb7dcb88e8151b70a29e7c6d0daae717cb58891a703c9c2545f2cdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd398b87eeb7dcb88e8151b70a29e7c6d0daae717cb58891a703c9c2545f2cdc->enter($__internal_dd398b87eeb7dcb88e8151b70a29e7c6d0daae717cb58891a703c9c2545f2cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f06e21d249b896f27920dd530b6ea6982c375b6584ff21141129838443a31d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06e21d249b896f27920dd530b6ea6982c375b6584ff21141129838443a31d73->enter($__internal_f06e21d249b896f27920dd530b6ea6982c375b6584ff21141129838443a31d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f06e21d249b896f27920dd530b6ea6982c375b6584ff21141129838443a31d73->leave($__internal_f06e21d249b896f27920dd530b6ea6982c375b6584ff21141129838443a31d73_prof);

        
        $__internal_dd398b87eeb7dcb88e8151b70a29e7c6d0daae717cb58891a703c9c2545f2cdc->leave($__internal_dd398b87eeb7dcb88e8151b70a29e7c6d0daae717cb58891a703c9c2545f2cdc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/thomas/thomascv/cv/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
