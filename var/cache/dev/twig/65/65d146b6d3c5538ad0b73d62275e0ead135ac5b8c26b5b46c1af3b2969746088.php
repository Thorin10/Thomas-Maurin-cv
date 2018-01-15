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
        $__internal_569e24e6a109afe79c0053c42aec6c174e2b1d77b9393ee3508f4d3cd6c57935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569e24e6a109afe79c0053c42aec6c174e2b1d77b9393ee3508f4d3cd6c57935->enter($__internal_569e24e6a109afe79c0053c42aec6c174e2b1d77b9393ee3508f4d3cd6c57935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_50c5871a7708cd34e2a6fa2ce78adf131a015375e3b9269d33ab5e9501bd2e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c5871a7708cd34e2a6fa2ce78adf131a015375e3b9269d33ab5e9501bd2e2e->enter($__internal_50c5871a7708cd34e2a6fa2ce78adf131a015375e3b9269d33ab5e9501bd2e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

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
        
        $__internal_569e24e6a109afe79c0053c42aec6c174e2b1d77b9393ee3508f4d3cd6c57935->leave($__internal_569e24e6a109afe79c0053c42aec6c174e2b1d77b9393ee3508f4d3cd6c57935_prof);

        
        $__internal_50c5871a7708cd34e2a6fa2ce78adf131a015375e3b9269d33ab5e9501bd2e2e->leave($__internal_50c5871a7708cd34e2a6fa2ce78adf131a015375e3b9269d33ab5e9501bd2e2e_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_84cf6967de462b0b21ca43290b00d85d53bc049a9ba6af273b5292122d1fec9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84cf6967de462b0b21ca43290b00d85d53bc049a9ba6af273b5292122d1fec9a->enter($__internal_84cf6967de462b0b21ca43290b00d85d53bc049a9ba6af273b5292122d1fec9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_e9d4b5f45712046ad1b6ce0a26d891ce707edd944ac0395a41d72dcdbe8926a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d4b5f45712046ad1b6ce0a26d891ce707edd944ac0395a41d72dcdbe8926a1->enter($__internal_e9d4b5f45712046ad1b6ce0a26d891ce707edd944ac0395a41d72dcdbe8926a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_e9d4b5f45712046ad1b6ce0a26d891ce707edd944ac0395a41d72dcdbe8926a1->leave($__internal_e9d4b5f45712046ad1b6ce0a26d891ce707edd944ac0395a41d72dcdbe8926a1_prof);

        
        $__internal_84cf6967de462b0b21ca43290b00d85d53bc049a9ba6af273b5292122d1fec9a->leave($__internal_84cf6967de462b0b21ca43290b00d85d53bc049a9ba6af273b5292122d1fec9a_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_64e6bdfca498e6b9e8816ef37811d308dcd4ecd7ee34adb215c62c9f7044c135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e6bdfca498e6b9e8816ef37811d308dcd4ecd7ee34adb215c62c9f7044c135->enter($__internal_64e6bdfca498e6b9e8816ef37811d308dcd4ecd7ee34adb215c62c9f7044c135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_14332ad09e27caeed68b061f9d286c49808318266f42fb05d903c08a38ecfa08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14332ad09e27caeed68b061f9d286c49808318266f42fb05d903c08a38ecfa08->enter($__internal_14332ad09e27caeed68b061f9d286c49808318266f42fb05d903c08a38ecfa08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_14332ad09e27caeed68b061f9d286c49808318266f42fb05d903c08a38ecfa08->leave($__internal_14332ad09e27caeed68b061f9d286c49808318266f42fb05d903c08a38ecfa08_prof);

        
        $__internal_64e6bdfca498e6b9e8816ef37811d308dcd4ecd7ee34adb215c62c9f7044c135->leave($__internal_64e6bdfca498e6b9e8816ef37811d308dcd4ecd7ee34adb215c62c9f7044c135_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_59f9e1f604f87894e0d23d9fa1ed7bce141d84e592dbcd5fcdf63a0b9440c9b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59f9e1f604f87894e0d23d9fa1ed7bce141d84e592dbcd5fcdf63a0b9440c9b8->enter($__internal_59f9e1f604f87894e0d23d9fa1ed7bce141d84e592dbcd5fcdf63a0b9440c9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_01289e701e5d8aef0fd838c592d15f1b6677a4f6bfcacc628ed900dd4ed62f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01289e701e5d8aef0fd838c592d15f1b6677a4f6bfcacc628ed900dd4ed62f38->enter($__internal_01289e701e5d8aef0fd838c592d15f1b6677a4f6bfcacc628ed900dd4ed62f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

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
        
        $__internal_01289e701e5d8aef0fd838c592d15f1b6677a4f6bfcacc628ed900dd4ed62f38->leave($__internal_01289e701e5d8aef0fd838c592d15f1b6677a4f6bfcacc628ed900dd4ed62f38_prof);

        
        $__internal_59f9e1f604f87894e0d23d9fa1ed7bce141d84e592dbcd5fcdf63a0b9440c9b8->leave($__internal_59f9e1f604f87894e0d23d9fa1ed7bce141d84e592dbcd5fcdf63a0b9440c9b8_prof);

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
", "SonataAdminBundle:Pager:base_results.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/Pager/base_results.html.twig");
    }
}
