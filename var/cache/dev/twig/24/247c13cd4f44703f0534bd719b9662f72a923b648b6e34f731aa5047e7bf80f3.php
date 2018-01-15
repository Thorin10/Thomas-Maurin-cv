<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1b42b2dedb206513d4ddef55aec99d6f9bc4ecbece6eb3be6581d23c671185b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d84a4ce3ba7ec06a43858ecf155c51b7d89c069a46eec106a6816cc6bf75a206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84a4ce3ba7ec06a43858ecf155c51b7d89c069a46eec106a6816cc6bf75a206->enter($__internal_d84a4ce3ba7ec06a43858ecf155c51b7d89c069a46eec106a6816cc6bf75a206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5b9882318f6874c5220cf82a705db71ed83491d42006180507658603cc5aaf10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9882318f6874c5220cf82a705db71ed83491d42006180507658603cc5aaf10->enter($__internal_5b9882318f6874c5220cf82a705db71ed83491d42006180507658603cc5aaf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d84a4ce3ba7ec06a43858ecf155c51b7d89c069a46eec106a6816cc6bf75a206->leave($__internal_d84a4ce3ba7ec06a43858ecf155c51b7d89c069a46eec106a6816cc6bf75a206_prof);

        
        $__internal_5b9882318f6874c5220cf82a705db71ed83491d42006180507658603cc5aaf10->leave($__internal_5b9882318f6874c5220cf82a705db71ed83491d42006180507658603cc5aaf10_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_35ffe2e0df7b4ef973a9c20dd68e440f0b0a774fa4e03ed50074951501814da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ffe2e0df7b4ef973a9c20dd68e440f0b0a774fa4e03ed50074951501814da6->enter($__internal_35ffe2e0df7b4ef973a9c20dd68e440f0b0a774fa4e03ed50074951501814da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6a953a00f2a2132734cd6768e53dc68e8b96b7c42bd8f904a54f07a831d9d85d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a953a00f2a2132734cd6768e53dc68e8b96b7c42bd8f904a54f07a831d9d85d->enter($__internal_6a953a00f2a2132734cd6768e53dc68e8b96b7c42bd8f904a54f07a831d9d85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6a953a00f2a2132734cd6768e53dc68e8b96b7c42bd8f904a54f07a831d9d85d->leave($__internal_6a953a00f2a2132734cd6768e53dc68e8b96b7c42bd8f904a54f07a831d9d85d_prof);

        
        $__internal_35ffe2e0df7b4ef973a9c20dd68e440f0b0a774fa4e03ed50074951501814da6->leave($__internal_35ffe2e0df7b4ef973a9c20dd68e440f0b0a774fa4e03ed50074951501814da6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1cc68b81c40e46e7a1edb87a8869e0271ee4b1fd171f0821e8a77e0bb7553f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc68b81c40e46e7a1edb87a8869e0271ee4b1fd171f0821e8a77e0bb7553f3b->enter($__internal_1cc68b81c40e46e7a1edb87a8869e0271ee4b1fd171f0821e8a77e0bb7553f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3302e833c4d4c23f9880b5708dee37bcb405a6a01d8252253ef32ed9f585fb2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3302e833c4d4c23f9880b5708dee37bcb405a6a01d8252253ef32ed9f585fb2e->enter($__internal_3302e833c4d4c23f9880b5708dee37bcb405a6a01d8252253ef32ed9f585fb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3302e833c4d4c23f9880b5708dee37bcb405a6a01d8252253ef32ed9f585fb2e->leave($__internal_3302e833c4d4c23f9880b5708dee37bcb405a6a01d8252253ef32ed9f585fb2e_prof);

        
        $__internal_1cc68b81c40e46e7a1edb87a8869e0271ee4b1fd171f0821e8a77e0bb7553f3b->leave($__internal_1cc68b81c40e46e7a1edb87a8869e0271ee4b1fd171f0821e8a77e0bb7553f3b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2291ac25c6a1fff556af330d9a983d0e4c190d45b845b9c72252ffbc215a8493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2291ac25c6a1fff556af330d9a983d0e4c190d45b845b9c72252ffbc215a8493->enter($__internal_2291ac25c6a1fff556af330d9a983d0e4c190d45b845b9c72252ffbc215a8493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_53a9f55f046a704872b57fc9632bad52cd6575bcec88c3658207ee75788feb46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a9f55f046a704872b57fc9632bad52cd6575bcec88c3658207ee75788feb46->enter($__internal_53a9f55f046a704872b57fc9632bad52cd6575bcec88c3658207ee75788feb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_53a9f55f046a704872b57fc9632bad52cd6575bcec88c3658207ee75788feb46->leave($__internal_53a9f55f046a704872b57fc9632bad52cd6575bcec88c3658207ee75788feb46_prof);

        
        $__internal_2291ac25c6a1fff556af330d9a983d0e4c190d45b845b9c72252ffbc215a8493->leave($__internal_2291ac25c6a1fff556af330d9a983d0e4c190d45b845b9c72252ffbc215a8493_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/thomas/thomascv/Blog-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
