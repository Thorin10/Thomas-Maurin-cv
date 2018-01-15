<?php

/* SonataBlockBundle:Block:block_exception_debug.html.twig */
class __TwigTemplate_fdcdcffe00e90d80a9a28547e3a8a6d790f9b86b7ad28b2abe2b88f5407ca3ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception_debug.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c8807c33d724ad2e0774ce526576140a50625accffc245385eb53de0e2f2764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c8807c33d724ad2e0774ce526576140a50625accffc245385eb53de0e2f2764->enter($__internal_1c8807c33d724ad2e0774ce526576140a50625accffc245385eb53de0e2f2764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $__internal_3f8c007da146b80c294897d2713661866c05d3f66aee746b5dafd690717ec70a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8c007da146b80c294897d2713661866c05d3f66aee746b5dafd690717ec70a->enter($__internal_3f8c007da146b80c294897d2713661866c05d3f66aee746b5dafd690717ec70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c8807c33d724ad2e0774ce526576140a50625accffc245385eb53de0e2f2764->leave($__internal_1c8807c33d724ad2e0774ce526576140a50625accffc245385eb53de0e2f2764_prof);

        
        $__internal_3f8c007da146b80c294897d2713661866c05d3f66aee746b5dafd690717ec70a->leave($__internal_3f8c007da146b80c294897d2713661866c05d3f66aee746b5dafd690717ec70a_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_1f34a9115caa647094519f19f67bf78a5efeb87f023cc2edf7beb07d8883e875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f34a9115caa647094519f19f67bf78a5efeb87f023cc2edf7beb07d8883e875->enter($__internal_1f34a9115caa647094519f19f67bf78a5efeb87f023cc2edf7beb07d8883e875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_1d190c8ef7672e6321101cacbb0b01aae8dd81989d9791295baf683088d1d5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d190c8ef7672e6321101cacbb0b01aae8dd81989d9791295baf683088d1d5f3->enter($__internal_1d190c8ef7672e6321101cacbb0b01aae8dd81989d9791295baf683088d1d5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if (($context["forceStyle"] ?? $this->getContext($context, "forceStyle"))) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if (($context["forceStyle"] ?? $this->getContext($context, "forceStyle"))) {
            // line 19
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        }
        // line 22
        echo "        ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "SonataBlockBundle:Block:block_exception_debug.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
";
        
        $__internal_1d190c8ef7672e6321101cacbb0b01aae8dd81989d9791295baf683088d1d5f3->leave($__internal_1d190c8ef7672e6321101cacbb0b01aae8dd81989d9791295baf683088d1d5f3_prof);

        
        $__internal_1f34a9115caa647094519f19f67bf78a5efeb87f023cc2edf7beb07d8883e875->leave($__internal_1f34a9115caa647094519f19f67bf78a5efeb87f023cc2edf7beb07d8883e875_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception_debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  69 => 22,  64 => 20,  59 => 19,  56 => 18,  48 => 15,  39 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    <div class=\"cms-block-exception\" {% if forceStyle %}style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"{% endif %}>

        {# this is dirty but the alternative would require a new block-optimized exception css #}
        {% if forceStyle %}
            <link href=\"{{ asset('bundles/framework/css/exception_layout.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"{{ asset('bundles/framework/css/exception.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        {% endif %}
        {% include 'TwigBundle:Exception:exception.html.twig' %}
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception_debug.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception_debug.html.twig");
    }
}
