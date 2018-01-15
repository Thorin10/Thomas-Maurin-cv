<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a33315716a96ad7bafb4ae97ad4f0a4f7a0e0a39cd7ca976d1a26f8b92793a07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_03b47e4eb52ba49207729313037b431a29b483f134c3859b98095f9ae03d1625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b47e4eb52ba49207729313037b431a29b483f134c3859b98095f9ae03d1625->enter($__internal_03b47e4eb52ba49207729313037b431a29b483f134c3859b98095f9ae03d1625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_36a81b1123fa1cf2506fff84ae26350860214b24a3101e0520117f81450e4bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a81b1123fa1cf2506fff84ae26350860214b24a3101e0520117f81450e4bbb->enter($__internal_36a81b1123fa1cf2506fff84ae26350860214b24a3101e0520117f81450e4bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03b47e4eb52ba49207729313037b431a29b483f134c3859b98095f9ae03d1625->leave($__internal_03b47e4eb52ba49207729313037b431a29b483f134c3859b98095f9ae03d1625_prof);

        
        $__internal_36a81b1123fa1cf2506fff84ae26350860214b24a3101e0520117f81450e4bbb->leave($__internal_36a81b1123fa1cf2506fff84ae26350860214b24a3101e0520117f81450e4bbb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2057673c82bc42969e5e93f70e1d2a899cfcea23e28d278ca764b2ef06ca7895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2057673c82bc42969e5e93f70e1d2a899cfcea23e28d278ca764b2ef06ca7895->enter($__internal_2057673c82bc42969e5e93f70e1d2a899cfcea23e28d278ca764b2ef06ca7895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_34c99b94ba156b38f7bc11b64fa7685a8896e4c83bd599692b77d91ed7733ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c99b94ba156b38f7bc11b64fa7685a8896e4c83bd599692b77d91ed7733ebb->enter($__internal_34c99b94ba156b38f7bc11b64fa7685a8896e4c83bd599692b77d91ed7733ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_34c99b94ba156b38f7bc11b64fa7685a8896e4c83bd599692b77d91ed7733ebb->leave($__internal_34c99b94ba156b38f7bc11b64fa7685a8896e4c83bd599692b77d91ed7733ebb_prof);

        
        $__internal_2057673c82bc42969e5e93f70e1d2a899cfcea23e28d278ca764b2ef06ca7895->leave($__internal_2057673c82bc42969e5e93f70e1d2a899cfcea23e28d278ca764b2ef06ca7895_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_db7809a5f3866477a161b736fe2a8e0fc5c9278a3b2fa16e3970e8c659caddbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db7809a5f3866477a161b736fe2a8e0fc5c9278a3b2fa16e3970e8c659caddbc->enter($__internal_db7809a5f3866477a161b736fe2a8e0fc5c9278a3b2fa16e3970e8c659caddbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c176c7ac2f3223da44c842edb4cfd00d5bed9b340833422224e1ceaacb31df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c176c7ac2f3223da44c842edb4cfd00d5bed9b340833422224e1ceaacb31df7->enter($__internal_3c176c7ac2f3223da44c842edb4cfd00d5bed9b340833422224e1ceaacb31df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3c176c7ac2f3223da44c842edb4cfd00d5bed9b340833422224e1ceaacb31df7->leave($__internal_3c176c7ac2f3223da44c842edb4cfd00d5bed9b340833422224e1ceaacb31df7_prof);

        
        $__internal_db7809a5f3866477a161b736fe2a8e0fc5c9278a3b2fa16e3970e8c659caddbc->leave($__internal_db7809a5f3866477a161b736fe2a8e0fc5c9278a3b2fa16e3970e8c659caddbc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f99225d9d0765180d2a8d4971b397a7d3ab07f7fad660d01d7d92339f08c5845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f99225d9d0765180d2a8d4971b397a7d3ab07f7fad660d01d7d92339f08c5845->enter($__internal_f99225d9d0765180d2a8d4971b397a7d3ab07f7fad660d01d7d92339f08c5845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f59dc7ca5e946f479c76ae795cabc1f241b45165f8d9056fc84c435714af768d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59dc7ca5e946f479c76ae795cabc1f241b45165f8d9056fc84c435714af768d->enter($__internal_f59dc7ca5e946f479c76ae795cabc1f241b45165f8d9056fc84c435714af768d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_f59dc7ca5e946f479c76ae795cabc1f241b45165f8d9056fc84c435714af768d->leave($__internal_f59dc7ca5e946f479c76ae795cabc1f241b45165f8d9056fc84c435714af768d_prof);

        
        $__internal_f99225d9d0765180d2a8d4971b397a7d3ab07f7fad660d01d7d92339f08c5845->leave($__internal_f99225d9d0765180d2a8d4971b397a7d3ab07f7fad660d01d7d92339f08c5845_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
