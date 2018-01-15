<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4232c1652e7b14ee79be3bb234d6ae9e0180157b0d09e2046e8d66b6c3eabf25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c4fa96c8f4fb91e6f743c39a7f8522f8c7f33f69e6e910bfc7e32479022ae4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c4fa96c8f4fb91e6f743c39a7f8522f8c7f33f69e6e910bfc7e32479022ae4e->enter($__internal_9c4fa96c8f4fb91e6f743c39a7f8522f8c7f33f69e6e910bfc7e32479022ae4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_f3d0e41366add8de8ce3a5915322f3a37987db310fb27ab3f060646a2bb379ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d0e41366add8de8ce3a5915322f3a37987db310fb27ab3f060646a2bb379ea->enter($__internal_f3d0e41366add8de8ce3a5915322f3a37987db310fb27ab3f060646a2bb379ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9c4fa96c8f4fb91e6f743c39a7f8522f8c7f33f69e6e910bfc7e32479022ae4e->leave($__internal_9c4fa96c8f4fb91e6f743c39a7f8522f8c7f33f69e6e910bfc7e32479022ae4e_prof);

        
        $__internal_f3d0e41366add8de8ce3a5915322f3a37987db310fb27ab3f060646a2bb379ea->leave($__internal_f3d0e41366add8de8ce3a5915322f3a37987db310fb27ab3f060646a2bb379ea_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dc623b2ae5caf54e51d37150dc376d1a845da16d2981500be0a93f01de305d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc623b2ae5caf54e51d37150dc376d1a845da16d2981500be0a93f01de305d1d->enter($__internal_dc623b2ae5caf54e51d37150dc376d1a845da16d2981500be0a93f01de305d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_6f7e488ca274bdbe29f7b1fe550d303eae64a089140bc3de51cb6ba926023787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7e488ca274bdbe29f7b1fe550d303eae64a089140bc3de51cb6ba926023787->enter($__internal_6f7e488ca274bdbe29f7b1fe550d303eae64a089140bc3de51cb6ba926023787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_6f7e488ca274bdbe29f7b1fe550d303eae64a089140bc3de51cb6ba926023787->leave($__internal_6f7e488ca274bdbe29f7b1fe550d303eae64a089140bc3de51cb6ba926023787_prof);

        
        $__internal_dc623b2ae5caf54e51d37150dc376d1a845da16d2981500be0a93f01de305d1d->leave($__internal_dc623b2ae5caf54e51d37150dc376d1a845da16d2981500be0a93f01de305d1d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cf4c87e9e2c045267229ce4c599ddca17016c114455c06e38eddd6fff4a38c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf4c87e9e2c045267229ce4c599ddca17016c114455c06e38eddd6fff4a38c07->enter($__internal_cf4c87e9e2c045267229ce4c599ddca17016c114455c06e38eddd6fff4a38c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3bdb1c3a6fa0f58f3f9b5b6753b579208394340a72d34202ff904729179d94f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bdb1c3a6fa0f58f3f9b5b6753b579208394340a72d34202ff904729179d94f2->enter($__internal_3bdb1c3a6fa0f58f3f9b5b6753b579208394340a72d34202ff904729179d94f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3bdb1c3a6fa0f58f3f9b5b6753b579208394340a72d34202ff904729179d94f2->leave($__internal_3bdb1c3a6fa0f58f3f9b5b6753b579208394340a72d34202ff904729179d94f2_prof);

        
        $__internal_cf4c87e9e2c045267229ce4c599ddca17016c114455c06e38eddd6fff4a38c07->leave($__internal_cf4c87e9e2c045267229ce4c599ddca17016c114455c06e38eddd6fff4a38c07_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0b233c3f88074b72ba35d7c0d84df829fd2fc05979d33b7d551b72c1a27ed035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b233c3f88074b72ba35d7c0d84df829fd2fc05979d33b7d551b72c1a27ed035->enter($__internal_0b233c3f88074b72ba35d7c0d84df829fd2fc05979d33b7d551b72c1a27ed035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2be4c74d33ce3316aecfdd5fe28a872d2eb7f9e96271dac4cca9b0d434ca072b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be4c74d33ce3316aecfdd5fe28a872d2eb7f9e96271dac4cca9b0d434ca072b->enter($__internal_2be4c74d33ce3316aecfdd5fe28a872d2eb7f9e96271dac4cca9b0d434ca072b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2be4c74d33ce3316aecfdd5fe28a872d2eb7f9e96271dac4cca9b0d434ca072b->leave($__internal_2be4c74d33ce3316aecfdd5fe28a872d2eb7f9e96271dac4cca9b0d434ca072b_prof);

        
        $__internal_0b233c3f88074b72ba35d7c0d84df829fd2fc05979d33b7d551b72c1a27ed035->leave($__internal_0b233c3f88074b72ba35d7c0d84df829fd2fc05979d33b7d551b72c1a27ed035_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/thomas/thomascv/cv/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
