<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_d45564f883c77e920a6b55eae8470578cb50792518832a8980d9d4d3d415e015 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7881edb564e50f067d9ccfa81bd3b0fa243e2a17e575f97b106ce9edcb57f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7881edb564e50f067d9ccfa81bd3b0fa243e2a17e575f97b106ce9edcb57f26->enter($__internal_d7881edb564e50f067d9ccfa81bd3b0fa243e2a17e575f97b106ce9edcb57f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_a9c47e70a0abe59ece90d5a6087d774bc6985bb787238f61a82a9074b415cf0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c47e70a0abe59ece90d5a6087d774bc6985bb787238f61a82a9074b415cf0d->enter($__internal_a9c47e70a0abe59ece90d5a6087d774bc6985bb787238f61a82a9074b415cf0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_d7881edb564e50f067d9ccfa81bd3b0fa243e2a17e575f97b106ce9edcb57f26->leave($__internal_d7881edb564e50f067d9ccfa81bd3b0fa243e2a17e575f97b106ce9edcb57f26_prof);

        
        $__internal_a9c47e70a0abe59ece90d5a6087d774bc6985bb787238f61a82a9074b415cf0d->leave($__internal_a9c47e70a0abe59ece90d5a6087d774bc6985bb787238f61a82a9074b415cf0d_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_90b81e9aecd2e749452f65311089933da26965605d20b421221f2caaebcf166d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90b81e9aecd2e749452f65311089933da26965605d20b421221f2caaebcf166d->enter($__internal_90b81e9aecd2e749452f65311089933da26965605d20b421221f2caaebcf166d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_b83f060081bd5e626f4bc9e391b06ed05d5ec4f278ba71e4549d203b22d5e75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83f060081bd5e626f4bc9e391b06ed05d5ec4f278ba71e4549d203b22d5e75b->enter($__internal_b83f060081bd5e626f4bc9e391b06ed05d5ec4f278ba71e4549d203b22d5e75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_b83f060081bd5e626f4bc9e391b06ed05d5ec4f278ba71e4549d203b22d5e75b->leave($__internal_b83f060081bd5e626f4bc9e391b06ed05d5ec4f278ba71e4549d203b22d5e75b_prof);

        
        $__internal_90b81e9aecd2e749452f65311089933da26965605d20b421221f2caaebcf166d->leave($__internal_90b81e9aecd2e749452f65311089933da26965605d20b421221f2caaebcf166d_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_a0bc337bab4e006689e4d9ce3363571e465c64481c1e1491eab9fe2c8ec136e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0bc337bab4e006689e4d9ce3363571e465c64481c1e1491eab9fe2c8ec136e2->enter($__internal_a0bc337bab4e006689e4d9ce3363571e465c64481c1e1491eab9fe2c8ec136e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_0948359a245e17c99b1e69b99448055df568f3172769e9397ad47a2e340e3385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0948359a245e17c99b1e69b99448055df568f3172769e9397ad47a2e340e3385->enter($__internal_0948359a245e17c99b1e69b99448055df568f3172769e9397ad47a2e340e3385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_0948359a245e17c99b1e69b99448055df568f3172769e9397ad47a2e340e3385->leave($__internal_0948359a245e17c99b1e69b99448055df568f3172769e9397ad47a2e340e3385_prof);

        
        $__internal_a0bc337bab4e006689e4d9ce3363571e465c64481c1e1491eab9fe2c8ec136e2->leave($__internal_a0bc337bab4e006689e4d9ce3363571e465c64481c1e1491eab9fe2c8ec136e2_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_8b47036941ef46e2b1c0ef8ef4416508a9bf8ad4b9c074e3e220ea2c6cb83c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b47036941ef46e2b1c0ef8ef4416508a9bf8ad4b9c074e3e220ea2c6cb83c90->enter($__internal_8b47036941ef46e2b1c0ef8ef4416508a9bf8ad4b9c074e3e220ea2c6cb83c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_de6a6fc075cf371f3eb82cffd49f8f9c2088781ff4f8d680a73ab7a88374c897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6a6fc075cf371f3eb82cffd49f8f9c2088781ff4f8d680a73ab7a88374c897->enter($__internal_de6a6fc075cf371f3eb82cffd49f8f9c2088781ff4f8d680a73ab7a88374c897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            // line 28
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_de6a6fc075cf371f3eb82cffd49f8f9c2088781ff4f8d680a73ab7a88374c897->leave($__internal_de6a6fc075cf371f3eb82cffd49f8f9c2088781ff4f8d680a73ab7a88374c897_prof);

        
        $__internal_8b47036941ef46e2b1c0ef8ef4416508a9bf8ad4b9c074e3e220ea2c6cb83c90->leave($__internal_8b47036941ef46e2b1c0ef8ef4416508a9bf8ad4b9c074e3e220ea2c6cb83c90_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  133 => 28,  131 => 27,  123 => 26,  119 => 25,  115 => 24,  108 => 23,  99 => 22,  88 => 19,  85 => 18,  76 => 17,  60 => 13,  51 => 12,  41 => 22,  38 => 21,  36 => 17,  33 => 16,  31 => 12,  28 => 11,);
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

{% block num_pages %}
    {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_results %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block max_per_page %}
    <label class=\"control-label\" for=\"{{ admin.uniqid }}_per_page\">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>
    <select class=\"per-page small form-control\" id=\"{{ admin.uniqid }}_per_page\" style=\"width: auto\">
        {% for per_page in admin.getperpageoptions %}
            <option {% if per_page == admin.datagrid.pager.maxperpage %}selected=\"selected\"{% endif %} value=\"{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}\">
                {{- per_page -}}
            </option>
        {% endfor %}
    </select>
{% endblock %}
", "SonataAdminBundle:Pager:base_results.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/Pager/base_results.html.twig");
    }
}
