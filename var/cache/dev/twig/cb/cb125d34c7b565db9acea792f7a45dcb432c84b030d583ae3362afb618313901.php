<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_19f565979e2889eff9cbb25bbb277bd002a43f3dbdceaacb469949a9a5ab6c87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e000d2423dec016b9bf3786307b5e503265c28b127ab6a7385269e34522a994d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e000d2423dec016b9bf3786307b5e503265c28b127ab6a7385269e34522a994d->enter($__internal_e000d2423dec016b9bf3786307b5e503265c28b127ab6a7385269e34522a994d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_563a90fbc0d8b27c1d253638a05d43ff1ab4494e3004b4bb02a4b09658034eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563a90fbc0d8b27c1d253638a05d43ff1ab4494e3004b4bb02a4b09658034eb7->enter($__internal_563a90fbc0d8b27c1d253638a05d43ff1ab4494e3004b4bb02a4b09658034eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            echo "<pre class=\"stacktrace\">
";
            // line 3
            echo $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array());
            echo ":
";
            // line 4
            if ( !twig_test_empty($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()))) {
                // line 5
                echo $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array());
                echo "
";
            }
            // line 7
            echo "
";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 9
                echo "  ";
                echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "</pre>
";
        }
        
        $__internal_e000d2423dec016b9bf3786307b5e503265c28b127ab6a7385269e34522a994d->leave($__internal_e000d2423dec016b9bf3786307b5e503265c28b127ab6a7385269e34522a994d_prof);

        
        $__internal_563a90fbc0d8b27c1d253638a05d43ff1ab4494e3004b4bb02a4b09658034eb7->leave($__internal_563a90fbc0d8b27c1d253638a05d43ff1ab4494e3004b4bb02a4b09658034eb7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  48 => 9,  44 => 8,  41 => 7,  36 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
<pre class=\"stacktrace\">
{{ exception.class }}:
{% if exception.message is not empty %}
    {{- exception.message }}
{% endif %}

{% for trace in exception.trace %}
  {{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}
{% endfor %}
</pre>
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}