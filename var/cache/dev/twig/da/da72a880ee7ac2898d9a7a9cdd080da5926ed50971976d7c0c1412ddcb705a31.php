<?php

/* SonataAdminBundle:Block:block_stats.html.twig */
class __TwigTemplate_152f5c5fe83b5eb0c5cbba338d2ea34b28db631ad179b0c295646045d3599357 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_stats.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7026766c7395bd334cd093b056a7029d4f487799b7834889c4a91b5846beb380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7026766c7395bd334cd093b056a7029d4f487799b7834889c4a91b5846beb380->enter($__internal_7026766c7395bd334cd093b056a7029d4f487799b7834889c4a91b5846beb380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_stats.html.twig"));

        $__internal_ec33bc70d9c55ca0ae31ab328c4dd450c4ddc8298449482994afb52fe48236d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec33bc70d9c55ca0ae31ab328c4dd450c4ddc8298449482994afb52fe48236d8->enter($__internal_ec33bc70d9c55ca0ae31ab328c4dd450c4ddc8298449482994afb52fe48236d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_stats.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7026766c7395bd334cd093b056a7029d4f487799b7834889c4a91b5846beb380->leave($__internal_7026766c7395bd334cd093b056a7029d4f487799b7834889c4a91b5846beb380_prof);

        
        $__internal_ec33bc70d9c55ca0ae31ab328c4dd450c4ddc8298449482994afb52fe48236d8->leave($__internal_ec33bc70d9c55ca0ae31ab328c4dd450c4ddc8298449482994afb52fe48236d8_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_78ab343548d215b43654dc78676e3dbe8e8dc7cf1ec13aa76545f19a0c7ae8ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ab343548d215b43654dc78676e3dbe8e8dc7cf1ec13aa76545f19a0c7ae8ba->enter($__internal_78ab343548d215b43654dc78676e3dbe8e8dc7cf1ec13aa76545f19a0c7ae8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_abb465131c40792e096b2f5315234f786c5fa57eacadd0d398c96199725e6d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb465131c40792e096b2f5315234f786c5fa57eacadd0d398c96199725e6d5c->enter($__internal_abb465131c40792e096b2f5315234f786c5fa57eacadd0d398c96199725e6d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <!-- small box -->
    <div class=\"small-box ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "color", array()), "html", null, true);
        echo "\">
        <div class=\"inner\">
            <h3>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? $this->getContext($context, "pager")), "count", array(), "method"), "html", null, true);
        echo "</h3>

            <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "text", array()), array(), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())), "html", null, true);
        echo "</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "icon", array()), "html", null, true);
        echo "\"></i>
        </div>
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "filters", array()))), "method"), "html", null, true);
        echo "\" class=\"small-box-footer\">
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("stats_view_more", array(), "SonataAdminBundle"), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
";
        
        $__internal_abb465131c40792e096b2f5315234f786c5fa57eacadd0d398c96199725e6d5c->leave($__internal_abb465131c40792e096b2f5315234f786c5fa57eacadd0d398c96199725e6d5c_prof);

        
        $__internal_78ab343548d215b43654dc78676e3dbe8e8dc7cf1ec13aa76545f19a0c7ae8ba->leave($__internal_78ab343548d215b43654dc78676e3dbe8e8dc7cf1ec13aa76545f19a0c7ae8ba_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  72 => 25,  67 => 23,  61 => 20,  56 => 18,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <!-- small box -->
    <div class=\"small-box {{ settings.color }}\">
        <div class=\"inner\">
            <h3>{{ pager.count() }}</h3>

            <p>{{ settings.text|trans({}, admin.translationDomain) }}</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa {{ settings.icon }}\"></i>
        </div>
        <a href=\"{{ admin.generateUrl('list', {filter: settings.filters}) }}\" class=\"small-box-footer\">
            {{ 'stats_view_more'|trans({}, 'SonataAdminBundle') }} <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
{% endblock %}
", "SonataAdminBundle:Block:block_stats.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/Block/block_stats.html.twig");
    }
}
