<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_f65f6680fa4d57051105232bd409508c3075338b0b72b30d37a1040b419a4e04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fde44394269efdd8edb00161ac8c2f16b88aac73091e92e88fd6b3bd75213d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fde44394269efdd8edb00161ac8c2f16b88aac73091e92e88fd6b3bd75213d4->enter($__internal_9fde44394269efdd8edb00161ac8c2f16b88aac73091e92e88fd6b3bd75213d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_4008012ab8d7006801132cb65a67427bc1342b1ca1c5a8ae24c09c8e08a0fd5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4008012ab8d7006801132cb65a67427bc1342b1ca1c5a8ae24c09c8e08a0fd5d->enter($__internal_4008012ab8d7006801132cb65a67427bc1342b1ca1c5a8ae24c09c8e08a0fd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fde44394269efdd8edb00161ac8c2f16b88aac73091e92e88fd6b3bd75213d4->leave($__internal_9fde44394269efdd8edb00161ac8c2f16b88aac73091e92e88fd6b3bd75213d4_prof);

        
        $__internal_4008012ab8d7006801132cb65a67427bc1342b1ca1c5a8ae24c09c8e08a0fd5d->leave($__internal_4008012ab8d7006801132cb65a67427bc1342b1ca1c5a8ae24c09c8e08a0fd5d_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f85a22f8db2416edee4fe6c7d2c27f776b6287c04ca4f0006e7ca3ebceceddb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85a22f8db2416edee4fe6c7d2c27f776b6287c04ca4f0006e7ca3ebceceddb4->enter($__internal_f85a22f8db2416edee4fe6c7d2c27f776b6287c04ca4f0006e7ca3ebceceddb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7865f3c3688bb104b58ac954a4087a23aa99fe69731287666cd63aebea7cfda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7865f3c3688bb104b58ac954a4087a23aa99fe69731287666cd63aebea7cfda9->enter($__internal_7865f3c3688bb104b58ac954a4087a23aa99fe69731287666cd63aebea7cfda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_7865f3c3688bb104b58ac954a4087a23aa99fe69731287666cd63aebea7cfda9->leave($__internal_7865f3c3688bb104b58ac954a4087a23aa99fe69731287666cd63aebea7cfda9_prof);

        
        $__internal_f85a22f8db2416edee4fe6c7d2c27f776b6287c04ca4f0006e7ca3ebceceddb4->leave($__internal_f85a22f8db2416edee4fe6c7d2c27f776b6287c04ca4f0006e7ca3ebceceddb4_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cac080e5652eb951df2c8f93e7d6d2d936686dfd0d9c367c4e036a1ec548d6c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac080e5652eb951df2c8f93e7d6d2d936686dfd0d9c367c4e036a1ec548d6c8->enter($__internal_cac080e5652eb951df2c8f93e7d6d2d936686dfd0d9c367c4e036a1ec548d6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9bc5e521fe931f5501239480995df6b038317dfcf674c4b7ff1e3cb32c38816d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc5e521fe931f5501239480995df6b038317dfcf674c4b7ff1e3cb32c38816d->enter($__internal_9bc5e521fe931f5501239480995df6b038317dfcf674c4b7ff1e3cb32c38816d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9bc5e521fe931f5501239480995df6b038317dfcf674c4b7ff1e3cb32c38816d->leave($__internal_9bc5e521fe931f5501239480995df6b038317dfcf674c4b7ff1e3cb32c38816d_prof);

        
        $__internal_cac080e5652eb951df2c8f93e7d6d2d936686dfd0d9c367c4e036a1ec548d6c8->leave($__internal_cac080e5652eb951df2c8f93e7d6d2d936686dfd0d9c367c4e036a1ec548d6c8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
