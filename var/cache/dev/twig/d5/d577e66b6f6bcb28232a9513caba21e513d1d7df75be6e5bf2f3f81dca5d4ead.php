<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_2f63be918c290092714c5f3e557a86578bdbfbbedcd2dd28d88d589394f9d17f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4d594d11a0fd28963b721470b736c166ebb682e843dba3a2d5163bcf308d03d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d594d11a0fd28963b721470b736c166ebb682e843dba3a2d5163bcf308d03d->enter($__internal_e4d594d11a0fd28963b721470b736c166ebb682e843dba3a2d5163bcf308d03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a5b9a31606b559b0d70053faf5f5df970362e98e747e1a211a30bc5707a7623a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b9a31606b559b0d70053faf5f5df970362e98e747e1a211a30bc5707a7623a->enter($__internal_a5b9a31606b559b0d70053faf5f5df970362e98e747e1a211a30bc5707a7623a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4d594d11a0fd28963b721470b736c166ebb682e843dba3a2d5163bcf308d03d->leave($__internal_e4d594d11a0fd28963b721470b736c166ebb682e843dba3a2d5163bcf308d03d_prof);

        
        $__internal_a5b9a31606b559b0d70053faf5f5df970362e98e747e1a211a30bc5707a7623a->leave($__internal_a5b9a31606b559b0d70053faf5f5df970362e98e747e1a211a30bc5707a7623a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b2a770b0c3eb0bbc6db251afb4e12984556ba14a3df4c230981fd3581bab8dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2a770b0c3eb0bbc6db251afb4e12984556ba14a3df4c230981fd3581bab8dd->enter($__internal_0b2a770b0c3eb0bbc6db251afb4e12984556ba14a3df4c230981fd3581bab8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ec3d4c90122cef29343ff525fc99ef963c8ab33524c5217ae2dacb12cebb5b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3d4c90122cef29343ff525fc99ef963c8ab33524c5217ae2dacb12cebb5b7b->enter($__internal_ec3d4c90122cef29343ff525fc99ef963c8ab33524c5217ae2dacb12cebb5b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ec3d4c90122cef29343ff525fc99ef963c8ab33524c5217ae2dacb12cebb5b7b->leave($__internal_ec3d4c90122cef29343ff525fc99ef963c8ab33524c5217ae2dacb12cebb5b7b_prof);

        
        $__internal_0b2a770b0c3eb0bbc6db251afb4e12984556ba14a3df4c230981fd3581bab8dd->leave($__internal_0b2a770b0c3eb0bbc6db251afb4e12984556ba14a3df4c230981fd3581bab8dd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c600613610f8f19b4618162c921cf96d29f5fcb3d316c0fd4f80cae6313983c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c600613610f8f19b4618162c921cf96d29f5fcb3d316c0fd4f80cae6313983c2->enter($__internal_c600613610f8f19b4618162c921cf96d29f5fcb3d316c0fd4f80cae6313983c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f045d158a488bb4d0f7a8da1b42c51c34477acc060e507facca280573f530f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f045d158a488bb4d0f7a8da1b42c51c34477acc060e507facca280573f530f7->enter($__internal_0f045d158a488bb4d0f7a8da1b42c51c34477acc060e507facca280573f530f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_0f045d158a488bb4d0f7a8da1b42c51c34477acc060e507facca280573f530f7->leave($__internal_0f045d158a488bb4d0f7a8da1b42c51c34477acc060e507facca280573f530f7_prof);

        
        $__internal_c600613610f8f19b4618162c921cf96d29f5fcb3d316c0fd4f80cae6313983c2->leave($__internal_c600613610f8f19b4618162c921cf96d29f5fcb3d316c0fd4f80cae6313983c2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
