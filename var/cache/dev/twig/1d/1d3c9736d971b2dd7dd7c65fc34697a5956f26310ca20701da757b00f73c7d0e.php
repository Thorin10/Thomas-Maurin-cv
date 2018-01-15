<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8b075b91d1720b6e8a0bb2ec705a36f31e5c8a624a52ad6e380ecdd39b15172a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_080c9fc5c12bacc46cc887b43a491cdbe49fd3a8a30c7071a7c0af9aa7949776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_080c9fc5c12bacc46cc887b43a491cdbe49fd3a8a30c7071a7c0af9aa7949776->enter($__internal_080c9fc5c12bacc46cc887b43a491cdbe49fd3a8a30c7071a7c0af9aa7949776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d03b8d337bb2f280c800c87c10a1be2271a806820ab5a8170f45dec7ac908077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03b8d337bb2f280c800c87c10a1be2271a806820ab5a8170f45dec7ac908077->enter($__internal_d03b8d337bb2f280c800c87c10a1be2271a806820ab5a8170f45dec7ac908077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_080c9fc5c12bacc46cc887b43a491cdbe49fd3a8a30c7071a7c0af9aa7949776->leave($__internal_080c9fc5c12bacc46cc887b43a491cdbe49fd3a8a30c7071a7c0af9aa7949776_prof);

        
        $__internal_d03b8d337bb2f280c800c87c10a1be2271a806820ab5a8170f45dec7ac908077->leave($__internal_d03b8d337bb2f280c800c87c10a1be2271a806820ab5a8170f45dec7ac908077_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a082e9fbcb6a55714950588816786ee3ee37be264e04f25a5d733e44ab159181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a082e9fbcb6a55714950588816786ee3ee37be264e04f25a5d733e44ab159181->enter($__internal_a082e9fbcb6a55714950588816786ee3ee37be264e04f25a5d733e44ab159181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8980e6328d7c19ba1e70394101dde043585a2d325ce5c97b67a42cef627279ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8980e6328d7c19ba1e70394101dde043585a2d325ce5c97b67a42cef627279ab->enter($__internal_8980e6328d7c19ba1e70394101dde043585a2d325ce5c97b67a42cef627279ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8980e6328d7c19ba1e70394101dde043585a2d325ce5c97b67a42cef627279ab->leave($__internal_8980e6328d7c19ba1e70394101dde043585a2d325ce5c97b67a42cef627279ab_prof);

        
        $__internal_a082e9fbcb6a55714950588816786ee3ee37be264e04f25a5d733e44ab159181->leave($__internal_a082e9fbcb6a55714950588816786ee3ee37be264e04f25a5d733e44ab159181_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_026cc74216d160f79bb86719673206283cc5b12063f6eba504c5875cb7b7d9a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_026cc74216d160f79bb86719673206283cc5b12063f6eba504c5875cb7b7d9a4->enter($__internal_026cc74216d160f79bb86719673206283cc5b12063f6eba504c5875cb7b7d9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e385e93762166f08727ef20af766201113279ed26825d846f0ff7a1e2311c83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e385e93762166f08727ef20af766201113279ed26825d846f0ff7a1e2311c83c->enter($__internal_e385e93762166f08727ef20af766201113279ed26825d846f0ff7a1e2311c83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e385e93762166f08727ef20af766201113279ed26825d846f0ff7a1e2311c83c->leave($__internal_e385e93762166f08727ef20af766201113279ed26825d846f0ff7a1e2311c83c_prof);

        
        $__internal_026cc74216d160f79bb86719673206283cc5b12063f6eba504c5875cb7b7d9a4->leave($__internal_026cc74216d160f79bb86719673206283cc5b12063f6eba504c5875cb7b7d9a4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1492177a6cde52c4a2ba13f85fc9c00980b03fb27705edc89482faac46f87bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1492177a6cde52c4a2ba13f85fc9c00980b03fb27705edc89482faac46f87bdc->enter($__internal_1492177a6cde52c4a2ba13f85fc9c00980b03fb27705edc89482faac46f87bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b04daa396419c678dc7d12fe8c988c0ce21d522373b71eeebe6e744b8436dff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04daa396419c678dc7d12fe8c988c0ce21d522373b71eeebe6e744b8436dff5->enter($__internal_b04daa396419c678dc7d12fe8c988c0ce21d522373b71eeebe6e744b8436dff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b04daa396419c678dc7d12fe8c988c0ce21d522373b71eeebe6e744b8436dff5->leave($__internal_b04daa396419c678dc7d12fe8c988c0ce21d522373b71eeebe6e744b8436dff5_prof);

        
        $__internal_1492177a6cde52c4a2ba13f85fc9c00980b03fb27705edc89482faac46f87bdc->leave($__internal_1492177a6cde52c4a2ba13f85fc9c00980b03fb27705edc89482faac46f87bdc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/thomas/thomascv/Blog-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
