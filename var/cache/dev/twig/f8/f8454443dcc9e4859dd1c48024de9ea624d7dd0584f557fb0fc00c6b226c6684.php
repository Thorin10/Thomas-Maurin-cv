<?php

/* SonataBlockBundle:Block:block_template.html.twig */
class __TwigTemplate_bbbe7b363045fe22f2880801ee27ea5c7a45994271c422cce9388c5633551e95 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a107bf476bf60f7c4bb20f3999a566f00f851f8ad72f8b21c0b1d3de2050fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a107bf476bf60f7c4bb20f3999a566f00f851f8ad72f8b21c0b1d3de2050fef->enter($__internal_8a107bf476bf60f7c4bb20f3999a566f00f851f8ad72f8b21c0b1d3de2050fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $__internal_a0e01b660a86dc7c2c5c41fd35c3b38f751de0da31adc5b8f73d33a1293266ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e01b660a86dc7c2c5c41fd35c3b38f751de0da31adc5b8f73d33a1293266ab->enter($__internal_a0e01b660a86dc7c2c5c41fd35c3b38f751de0da31adc5b8f73d33a1293266ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a107bf476bf60f7c4bb20f3999a566f00f851f8ad72f8b21c0b1d3de2050fef->leave($__internal_8a107bf476bf60f7c4bb20f3999a566f00f851f8ad72f8b21c0b1d3de2050fef_prof);

        
        $__internal_a0e01b660a86dc7c2c5c41fd35c3b38f751de0da31adc5b8f73d33a1293266ab->leave($__internal_a0e01b660a86dc7c2c5c41fd35c3b38f751de0da31adc5b8f73d33a1293266ab_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_2f33115929eafca09b96171f7b4f35e5dab144b043ea2adfbdfbfce4bfef32c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f33115929eafca09b96171f7b4f35e5dab144b043ea2adfbdfbfce4bfef32c6->enter($__internal_2f33115929eafca09b96171f7b4f35e5dab144b043ea2adfbdfbfce4bfef32c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_ea9c1db7258053109df849e7c9635dd42617947b1e91531686979f4eac0ca130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9c1db7258053109df849e7c9635dd42617947b1e91531686979f4eac0ca130->enter($__internal_ea9c1db7258053109df849e7c9635dd42617947b1e91531686979f4eac0ca130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>";
        // line 33
        echo "{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}";
        echo "</pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>";
        // line 43
        echo "{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}";
        echo "</pre>
";
        
        $__internal_ea9c1db7258053109df849e7c9635dd42617947b1e91531686979f4eac0ca130->leave($__internal_ea9c1db7258053109df849e7c9635dd42617947b1e91531686979f4eac0ca130_prof);

        
        $__internal_2f33115929eafca09b96171f7b4f35e5dab144b043ea2adfbdfbfce4bfef32c6->leave($__internal_2f33115929eafca09b96171f7b4f35e5dab144b043ea2adfbdfbfce4bfef32c6_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 43,  53 => 33,  48 => 15,  39 => 14,  18 => 12,);
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
    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>
        {%- verbatim -%}
{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}
        {%- endverbatim -%}
    </pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>
{%- verbatim -%}
{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}
{%- endverbatim -%}
    </pre>
{% endblock %}
", "SonataBlockBundle:Block:block_template.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/block-bundle/Resources/views/Block/block_template.html.twig");
    }
}
