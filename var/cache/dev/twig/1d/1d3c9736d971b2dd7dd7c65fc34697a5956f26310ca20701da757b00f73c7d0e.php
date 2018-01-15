<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_8b075b91d1720b6e8a0bb2ec705a36f31e5c8a624a52ad6e380ecdd39b15172a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_22c90610b624d7e8d02b42288e402e26309b9dc0065bdeadd85bb73c8eb5bc77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c90610b624d7e8d02b42288e402e26309b9dc0065bdeadd85bb73c8eb5bc77->enter($__internal_22c90610b624d7e8d02b42288e402e26309b9dc0065bdeadd85bb73c8eb5bc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_0dbc69f024ffa0d593679a2d74f1e973cf4c4e16b3b9f416bb455817ea8429e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbc69f024ffa0d593679a2d74f1e973cf4c4e16b3b9f416bb455817ea8429e6->enter($__internal_0dbc69f024ffa0d593679a2d74f1e973cf4c4e16b3b9f416bb455817ea8429e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22c90610b624d7e8d02b42288e402e26309b9dc0065bdeadd85bb73c8eb5bc77->leave($__internal_22c90610b624d7e8d02b42288e402e26309b9dc0065bdeadd85bb73c8eb5bc77_prof);

        
        $__internal_0dbc69f024ffa0d593679a2d74f1e973cf4c4e16b3b9f416bb455817ea8429e6->leave($__internal_0dbc69f024ffa0d593679a2d74f1e973cf4c4e16b3b9f416bb455817ea8429e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ebcecb933934d5fd93080225030918b76f68d60d238ce4ba5aa38cdc69b493af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebcecb933934d5fd93080225030918b76f68d60d238ce4ba5aa38cdc69b493af->enter($__internal_ebcecb933934d5fd93080225030918b76f68d60d238ce4ba5aa38cdc69b493af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8bc5b12ecea0bbb3411371d7bb57f6841cb61c13e04b1bf152655147045b2518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc5b12ecea0bbb3411371d7bb57f6841cb61c13e04b1bf152655147045b2518->enter($__internal_8bc5b12ecea0bbb3411371d7bb57f6841cb61c13e04b1bf152655147045b2518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8bc5b12ecea0bbb3411371d7bb57f6841cb61c13e04b1bf152655147045b2518->leave($__internal_8bc5b12ecea0bbb3411371d7bb57f6841cb61c13e04b1bf152655147045b2518_prof);

        
        $__internal_ebcecb933934d5fd93080225030918b76f68d60d238ce4ba5aa38cdc69b493af->leave($__internal_ebcecb933934d5fd93080225030918b76f68d60d238ce4ba5aa38cdc69b493af_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_240def605fb5d855c44a35b5dc5c33328a6da9a28062df449c693e6880132abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240def605fb5d855c44a35b5dc5c33328a6da9a28062df449c693e6880132abb->enter($__internal_240def605fb5d855c44a35b5dc5c33328a6da9a28062df449c693e6880132abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_91b4c3d32b8150639796d8d934fed54e3ba9bd54d3dbd0bfcac134786a52560b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b4c3d32b8150639796d8d934fed54e3ba9bd54d3dbd0bfcac134786a52560b->enter($__internal_91b4c3d32b8150639796d8d934fed54e3ba9bd54d3dbd0bfcac134786a52560b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_91b4c3d32b8150639796d8d934fed54e3ba9bd54d3dbd0bfcac134786a52560b->leave($__internal_91b4c3d32b8150639796d8d934fed54e3ba9bd54d3dbd0bfcac134786a52560b_prof);

        
        $__internal_240def605fb5d855c44a35b5dc5c33328a6da9a28062df449c693e6880132abb->leave($__internal_240def605fb5d855c44a35b5dc5c33328a6da9a28062df449c693e6880132abb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_664a8f9b788f06bc691a62742dbe011d8797433749baaeee0873d8bb56c0b280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_664a8f9b788f06bc691a62742dbe011d8797433749baaeee0873d8bb56c0b280->enter($__internal_664a8f9b788f06bc691a62742dbe011d8797433749baaeee0873d8bb56c0b280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0b91e0191304bf5994ffe4422ce4d5b93ec540a95e0b812af559cd59d80729d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b91e0191304bf5994ffe4422ce4d5b93ec540a95e0b812af559cd59d80729d->enter($__internal_c0b91e0191304bf5994ffe4422ce4d5b93ec540a95e0b812af559cd59d80729d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c0b91e0191304bf5994ffe4422ce4d5b93ec540a95e0b812af559cd59d80729d->leave($__internal_c0b91e0191304bf5994ffe4422ce4d5b93ec540a95e0b812af559cd59d80729d_prof);

        
        $__internal_664a8f9b788f06bc691a62742dbe011d8797433749baaeee0873d8bb56c0b280->leave($__internal_664a8f9b788f06bc691a62742dbe011d8797433749baaeee0873d8bb56c0b280_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
