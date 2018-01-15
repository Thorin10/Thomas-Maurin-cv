<?php

/* SonataBlockBundle:Block:block_core_rss.html.twig */
class __TwigTemplate_1b6c768ab05867e246717f65bbf9bc4a0e3ea2b38f50cfb026dc30598869c697 extends Twig_Template
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
        // line 11
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_rss.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79c16042b10e9555d32c2455fdf879de914c4f6be1482581813dc2c8ff0e7f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c16042b10e9555d32c2455fdf879de914c4f6be1482581813dc2c8ff0e7f17->enter($__internal_79c16042b10e9555d32c2455fdf879de914c4f6be1482581813dc2c8ff0e7f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $__internal_5a9dfede0c4922f21daa4a4cd1b6c11b34a721b58eb904a6b4feb2fa68e07ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9dfede0c4922f21daa4a4cd1b6c11b34a721b58eb904a6b4feb2fa68e07ce1->enter($__internal_5a9dfede0c4922f21daa4a4cd1b6c11b34a721b58eb904a6b4feb2fa68e07ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79c16042b10e9555d32c2455fdf879de914c4f6be1482581813dc2c8ff0e7f17->leave($__internal_79c16042b10e9555d32c2455fdf879de914c4f6be1482581813dc2c8ff0e7f17_prof);

        
        $__internal_5a9dfede0c4922f21daa4a4cd1b6c11b34a721b58eb904a6b4feb2fa68e07ce1->leave($__internal_5a9dfede0c4922f21daa4a4cd1b6c11b34a721b58eb904a6b4feb2fa68e07ce1_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_2c80e5ee3cb6dcbabc5565f288a168002eda9349e8b635aeeb4a7be992eee47b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c80e5ee3cb6dcbabc5565f288a168002eda9349e8b635aeeb4a7be992eee47b->enter($__internal_2c80e5ee3cb6dcbabc5565f288a168002eda9349e8b635aeeb4a7be992eee47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_cb4be9226761ae0d1bd49374c75899307e03f492d6a7a9ba6a811b81ed18cc43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4be9226761ae0d1bd49374c75899307e03f492d6a7a9ba6a811b81ed18cc43->enter($__internal_cb4be9226761ae0d1bd49374c75899307e03f492d6a7a9ba6a811b81ed18cc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    <h3 class=\"sonata-feed-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h3>

    <div class=\"sonata-feeds-container\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["feeds"] ?? $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 18
            echo "            <div>
                <strong><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</a></strong>
                <div>";
            // line 20
            echo $this->getAttribute($context["feed"], "description", array());
            echo "</div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "                No feeds available.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
        
        $__internal_cb4be9226761ae0d1bd49374c75899307e03f492d6a7a9ba6a811b81ed18cc43->leave($__internal_cb4be9226761ae0d1bd49374c75899307e03f492d6a7a9ba6a811b81ed18cc43_prof);

        
        $__internal_2c80e5ee3cb6dcbabc5565f288a168002eda9349e8b635aeeb4a7be992eee47b->leave($__internal_2c80e5ee3cb6dcbabc5565f288a168002eda9349e8b635aeeb4a7be992eee47b_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 25,  79 => 23,  71 => 20,  63 => 19,  60 => 18,  55 => 17,  48 => 14,  39 => 13,  18 => 11,);
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
    <h3 class=\"sonata-feed-title\">{{ settings.title }}</h3>

    <div class=\"sonata-feeds-container\">
        {% for feed in feeds %}
            <div>
                <strong><a href=\"{{ feed.link}}\" rel=\"nofollow\" title=\"{{ feed.title }}\">{{ feed.title }}</a></strong>
                <div>{{ feed.description|raw }}</div>
            </div>
        {% else %}
                No feeds available.
        {% endfor %}
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_core_rss.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_rss.html.twig");
    }
}
