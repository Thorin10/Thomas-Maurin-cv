<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_e7876c57f27e779036d86f30f1102c517cb1d0cfe4b96b66434676f753d8cd48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a817abdea57ea802a58407522fc9c4614a7f0b6e12387bed5c22f7cade4477e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a817abdea57ea802a58407522fc9c4614a7f0b6e12387bed5c22f7cade4477e8->enter($__internal_a817abdea57ea802a58407522fc9c4614a7f0b6e12387bed5c22f7cade4477e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_1085d74f69037f9d38cd3739d3d7c296cca7ccab79a0dd3e87ab67a557733c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1085d74f69037f9d38cd3739d3d7c296cca7ccab79a0dd3e87ab67a557733c24->enter($__internal_1085d74f69037f9d38cd3739d3d7c296cca7ccab79a0dd3e87ab67a557733c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a817abdea57ea802a58407522fc9c4614a7f0b6e12387bed5c22f7cade4477e8->leave($__internal_a817abdea57ea802a58407522fc9c4614a7f0b6e12387bed5c22f7cade4477e8_prof);

        
        $__internal_1085d74f69037f9d38cd3739d3d7c296cca7ccab79a0dd3e87ab67a557733c24->leave($__internal_1085d74f69037f9d38cd3739d3d7c296cca7ccab79a0dd3e87ab67a557733c24_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_feba8ddd3e75824baf32c2815117fa3e0c6f0993b6e19c29869fb4af84493d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feba8ddd3e75824baf32c2815117fa3e0c6f0993b6e19c29869fb4af84493d68->enter($__internal_feba8ddd3e75824baf32c2815117fa3e0c6f0993b6e19c29869fb4af84493d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8d0528bc1418ab2a2aaa28a7a827092023c113792ad21b236b0f892f1a1f51ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0528bc1418ab2a2aaa28a7a827092023c113792ad21b236b0f892f1a1f51ec->enter($__internal_8d0528bc1418ab2a2aaa28a7a827092023c113792ad21b236b0f892f1a1f51ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_8d0528bc1418ab2a2aaa28a7a827092023c113792ad21b236b0f892f1a1f51ec->leave($__internal_8d0528bc1418ab2a2aaa28a7a827092023c113792ad21b236b0f892f1a1f51ec_prof);

        
        $__internal_feba8ddd3e75824baf32c2815117fa3e0c6f0993b6e19c29869fb4af84493d68->leave($__internal_feba8ddd3e75824baf32c2815117fa3e0c6f0993b6e19c29869fb4af84493d68_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
