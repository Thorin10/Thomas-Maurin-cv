<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_faa30c49a0636f719211069c3da7e7f4a82d411451260e7f1cd00917d4b9db12 extends Twig_Template
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
        $__internal_5faa10e1ab8beeb728980cdbc31d53cb69480edbfe270e8bca952edcb05330c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5faa10e1ab8beeb728980cdbc31d53cb69480edbfe270e8bca952edcb05330c5->enter($__internal_5faa10e1ab8beeb728980cdbc31d53cb69480edbfe270e8bca952edcb05330c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_4ac8eed9fe61b4f0b75feee09659e3a65e6e5f7932256944d4eac1c632068f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac8eed9fe61b4f0b75feee09659e3a65e6e5f7932256944d4eac1c632068f04->enter($__internal_4ac8eed9fe61b4f0b75feee09659e3a65e6e5f7932256944d4eac1c632068f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5faa10e1ab8beeb728980cdbc31d53cb69480edbfe270e8bca952edcb05330c5->leave($__internal_5faa10e1ab8beeb728980cdbc31d53cb69480edbfe270e8bca952edcb05330c5_prof);

        
        $__internal_4ac8eed9fe61b4f0b75feee09659e3a65e6e5f7932256944d4eac1c632068f04->leave($__internal_4ac8eed9fe61b4f0b75feee09659e3a65e6e5f7932256944d4eac1c632068f04_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c7290a9724e529587e1e98ccb62915c39cf62fbf691b9fb208e6ca2d1d14d6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7290a9724e529587e1e98ccb62915c39cf62fbf691b9fb208e6ca2d1d14d6e7->enter($__internal_c7290a9724e529587e1e98ccb62915c39cf62fbf691b9fb208e6ca2d1d14d6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c914a2e9d47d3ac0d97bd2d86070188ed650ce55d5ad5e0f99cb7849be39391c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c914a2e9d47d3ac0d97bd2d86070188ed650ce55d5ad5e0f99cb7849be39391c->enter($__internal_c914a2e9d47d3ac0d97bd2d86070188ed650ce55d5ad5e0f99cb7849be39391c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_c914a2e9d47d3ac0d97bd2d86070188ed650ce55d5ad5e0f99cb7849be39391c->leave($__internal_c914a2e9d47d3ac0d97bd2d86070188ed650ce55d5ad5e0f99cb7849be39391c_prof);

        
        $__internal_c7290a9724e529587e1e98ccb62915c39cf62fbf691b9fb208e6ca2d1d14d6e7->leave($__internal_c7290a9724e529587e1e98ccb62915c39cf62fbf691b9fb208e6ca2d1d14d6e7_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3d6b7990bf4d1d9f6222919bc525a7e7351ac25017f42cbd20c10004a81c7013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6b7990bf4d1d9f6222919bc525a7e7351ac25017f42cbd20c10004a81c7013->enter($__internal_3d6b7990bf4d1d9f6222919bc525a7e7351ac25017f42cbd20c10004a81c7013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_86be69ab8e881a35b3d1654e6c2dbafcbb50f6126cf031df4c2f5ce7e6df9694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86be69ab8e881a35b3d1654e6c2dbafcbb50f6126cf031df4c2f5ce7e6df9694->enter($__internal_86be69ab8e881a35b3d1654e6c2dbafcbb50f6126cf031df4c2f5ce7e6df9694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_86be69ab8e881a35b3d1654e6c2dbafcbb50f6126cf031df4c2f5ce7e6df9694->leave($__internal_86be69ab8e881a35b3d1654e6c2dbafcbb50f6126cf031df4c2f5ce7e6df9694_prof);

        
        $__internal_3d6b7990bf4d1d9f6222919bc525a7e7351ac25017f42cbd20c10004a81c7013->leave($__internal_3d6b7990bf4d1d9f6222919bc525a7e7351ac25017f42cbd20c10004a81c7013_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4e4d142f31000a19968df78e5bddf5bc7c4be68d7731db9ccc2360f609681286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4d142f31000a19968df78e5bddf5bc7c4be68d7731db9ccc2360f609681286->enter($__internal_4e4d142f31000a19968df78e5bddf5bc7c4be68d7731db9ccc2360f609681286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_cc4f6dacd228e68eca4758c27468f685bc602329cc9c0037aafb4ad386c35000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4f6dacd228e68eca4758c27468f685bc602329cc9c0037aafb4ad386c35000->enter($__internal_cc4f6dacd228e68eca4758c27468f685bc602329cc9c0037aafb4ad386c35000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cc4f6dacd228e68eca4758c27468f685bc602329cc9c0037aafb4ad386c35000->leave($__internal_cc4f6dacd228e68eca4758c27468f685bc602329cc9c0037aafb4ad386c35000_prof);

        
        $__internal_4e4d142f31000a19968df78e5bddf5bc7c4be68d7731db9ccc2360f609681286->leave($__internal_4e4d142f31000a19968df78e5bddf5bc7c4be68d7731db9ccc2360f609681286_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/thomas/thomascv/cv/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
