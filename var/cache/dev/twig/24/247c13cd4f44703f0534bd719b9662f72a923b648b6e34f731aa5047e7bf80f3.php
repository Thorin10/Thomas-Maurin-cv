<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1b42b2dedb206513d4ddef55aec99d6f9bc4ecbece6eb3be6581d23c671185b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_65ed188a7d17241fcc111ff026f1c6d48990b01a9b99397d7b3b35b63744fb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ed188a7d17241fcc111ff026f1c6d48990b01a9b99397d7b3b35b63744fb47->enter($__internal_65ed188a7d17241fcc111ff026f1c6d48990b01a9b99397d7b3b35b63744fb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_254830f04902d8e8815cf0475eca12ae5d9bc01b73d3cdc140e182c3027a68c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254830f04902d8e8815cf0475eca12ae5d9bc01b73d3cdc140e182c3027a68c6->enter($__internal_254830f04902d8e8815cf0475eca12ae5d9bc01b73d3cdc140e182c3027a68c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65ed188a7d17241fcc111ff026f1c6d48990b01a9b99397d7b3b35b63744fb47->leave($__internal_65ed188a7d17241fcc111ff026f1c6d48990b01a9b99397d7b3b35b63744fb47_prof);

        
        $__internal_254830f04902d8e8815cf0475eca12ae5d9bc01b73d3cdc140e182c3027a68c6->leave($__internal_254830f04902d8e8815cf0475eca12ae5d9bc01b73d3cdc140e182c3027a68c6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b42fe2b1ed6f073cd719f6a47f3b33168538993ba9072e2f15657eabd463555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b42fe2b1ed6f073cd719f6a47f3b33168538993ba9072e2f15657eabd463555->enter($__internal_8b42fe2b1ed6f073cd719f6a47f3b33168538993ba9072e2f15657eabd463555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1e0f56df0d8930da228c0a8b67cf98912b1b73eafb10a593be5a13c648ab9a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0f56df0d8930da228c0a8b67cf98912b1b73eafb10a593be5a13c648ab9a45->enter($__internal_1e0f56df0d8930da228c0a8b67cf98912b1b73eafb10a593be5a13c648ab9a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1e0f56df0d8930da228c0a8b67cf98912b1b73eafb10a593be5a13c648ab9a45->leave($__internal_1e0f56df0d8930da228c0a8b67cf98912b1b73eafb10a593be5a13c648ab9a45_prof);

        
        $__internal_8b42fe2b1ed6f073cd719f6a47f3b33168538993ba9072e2f15657eabd463555->leave($__internal_8b42fe2b1ed6f073cd719f6a47f3b33168538993ba9072e2f15657eabd463555_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f424c901c98371ab9e80af0c783b64379c6a070192e1447a9a5d12efc2fea83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f424c901c98371ab9e80af0c783b64379c6a070192e1447a9a5d12efc2fea83->enter($__internal_2f424c901c98371ab9e80af0c783b64379c6a070192e1447a9a5d12efc2fea83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_34b0eeabc491d81af0d4bc1441b910a016716ee7780216aa46228fbcc0dc26c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b0eeabc491d81af0d4bc1441b910a016716ee7780216aa46228fbcc0dc26c8->enter($__internal_34b0eeabc491d81af0d4bc1441b910a016716ee7780216aa46228fbcc0dc26c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_34b0eeabc491d81af0d4bc1441b910a016716ee7780216aa46228fbcc0dc26c8->leave($__internal_34b0eeabc491d81af0d4bc1441b910a016716ee7780216aa46228fbcc0dc26c8_prof);

        
        $__internal_2f424c901c98371ab9e80af0c783b64379c6a070192e1447a9a5d12efc2fea83->leave($__internal_2f424c901c98371ab9e80af0c783b64379c6a070192e1447a9a5d12efc2fea83_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec7d2ebee6c82c979afcc9be64fe2531ec05d72c7cb79e8e1feedbddf020bfd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7d2ebee6c82c979afcc9be64fe2531ec05d72c7cb79e8e1feedbddf020bfd9->enter($__internal_ec7d2ebee6c82c979afcc9be64fe2531ec05d72c7cb79e8e1feedbddf020bfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7095468efb3041930539910f76b904d9ffb1eee7c0c61b664e1e96b59f8493f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7095468efb3041930539910f76b904d9ffb1eee7c0c61b664e1e96b59f8493f6->enter($__internal_7095468efb3041930539910f76b904d9ffb1eee7c0c61b664e1e96b59f8493f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7095468efb3041930539910f76b904d9ffb1eee7c0c61b664e1e96b59f8493f6->leave($__internal_7095468efb3041930539910f76b904d9ffb1eee7c0c61b664e1e96b59f8493f6_prof);

        
        $__internal_ec7d2ebee6c82c979afcc9be64fe2531ec05d72c7cb79e8e1feedbddf020bfd9->leave($__internal_ec7d2ebee6c82c979afcc9be64fe2531ec05d72c7cb79e8e1feedbddf020bfd9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
