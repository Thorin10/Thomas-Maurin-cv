<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e326a2c213492306ae776762da068b00b39532d7ef55f48691c1c7d7ec7e1259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffe2b17f0f4bd8c3397065d551be29cc835177fe4651ed9a23979c0971de485d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe2b17f0f4bd8c3397065d551be29cc835177fe4651ed9a23979c0971de485d->enter($__internal_ffe2b17f0f4bd8c3397065d551be29cc835177fe4651ed9a23979c0971de485d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_73e46d8ca1b2a71e5b077d4b2250e9a3120b5bade2358645a06c9ecafc70767c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e46d8ca1b2a71e5b077d4b2250e9a3120b5bade2358645a06c9ecafc70767c->enter($__internal_73e46d8ca1b2a71e5b077d4b2250e9a3120b5bade2358645a06c9ecafc70767c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffe2b17f0f4bd8c3397065d551be29cc835177fe4651ed9a23979c0971de485d->leave($__internal_ffe2b17f0f4bd8c3397065d551be29cc835177fe4651ed9a23979c0971de485d_prof);

        
        $__internal_73e46d8ca1b2a71e5b077d4b2250e9a3120b5bade2358645a06c9ecafc70767c->leave($__internal_73e46d8ca1b2a71e5b077d4b2250e9a3120b5bade2358645a06c9ecafc70767c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12e831c8d742775ca3386b6ff6015c3649abf53ef3e7a9f1e6801e5db526b73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12e831c8d742775ca3386b6ff6015c3649abf53ef3e7a9f1e6801e5db526b73a->enter($__internal_12e831c8d742775ca3386b6ff6015c3649abf53ef3e7a9f1e6801e5db526b73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_05fc88b3976cf08850eabd29c3e42472f3ff733d4cf1060c8b79bd63c51eb9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fc88b3976cf08850eabd29c3e42472f3ff733d4cf1060c8b79bd63c51eb9e4->enter($__internal_05fc88b3976cf08850eabd29c3e42472f3ff733d4cf1060c8b79bd63c51eb9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_05fc88b3976cf08850eabd29c3e42472f3ff733d4cf1060c8b79bd63c51eb9e4->leave($__internal_05fc88b3976cf08850eabd29c3e42472f3ff733d4cf1060c8b79bd63c51eb9e4_prof);

        
        $__internal_12e831c8d742775ca3386b6ff6015c3649abf53ef3e7a9f1e6801e5db526b73a->leave($__internal_12e831c8d742775ca3386b6ff6015c3649abf53ef3e7a9f1e6801e5db526b73a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6adf21345ca8a5a2de68e54a00fc33bc90c482b8a131df41ff08735717b84df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6adf21345ca8a5a2de68e54a00fc33bc90c482b8a131df41ff08735717b84df->enter($__internal_f6adf21345ca8a5a2de68e54a00fc33bc90c482b8a131df41ff08735717b84df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0044f844285c7b14841da5d8d3a60977a43c6b90ed6e44f46a0b8403c8d68f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0044f844285c7b14841da5d8d3a60977a43c6b90ed6e44f46a0b8403c8d68f75->enter($__internal_0044f844285c7b14841da5d8d3a60977a43c6b90ed6e44f46a0b8403c8d68f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0044f844285c7b14841da5d8d3a60977a43c6b90ed6e44f46a0b8403c8d68f75->leave($__internal_0044f844285c7b14841da5d8d3a60977a43c6b90ed6e44f46a0b8403c8d68f75_prof);

        
        $__internal_f6adf21345ca8a5a2de68e54a00fc33bc90c482b8a131df41ff08735717b84df->leave($__internal_f6adf21345ca8a5a2de68e54a00fc33bc90c482b8a131df41ff08735717b84df_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
