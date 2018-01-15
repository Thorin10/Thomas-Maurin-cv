<?php

/* SonataAdminBundle:Pager:simple_pager_results.html.twig */
class __TwigTemplate_48b64e80ca232c01bf28c0eec8a9eaad2452458bda13600dbf908e418457c4ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:simple_pager_results.html.twig", 12);
        $this->blocks = array(
            'num_results' => array($this, 'block_num_results'),
            'num_pages' => array($this, 'block_num_pages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_142b62061a2b4d0fd124c6d93498c258454aca64dbbd37ad0215152698d47820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_142b62061a2b4d0fd124c6d93498c258454aca64dbbd37ad0215152698d47820->enter($__internal_142b62061a2b4d0fd124c6d93498c258454aca64dbbd37ad0215152698d47820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $__internal_84225874a6e5288d9b9d9f46aef1ba5465763bbd81e2b3331c70cd929d2183e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84225874a6e5288d9b9d9f46aef1ba5465763bbd81e2b3331c70cd929d2183e5->enter($__internal_84225874a6e5288d9b9d9f46aef1ba5465763bbd81e2b3331c70cd929d2183e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_142b62061a2b4d0fd124c6d93498c258454aca64dbbd37ad0215152698d47820->leave($__internal_142b62061a2b4d0fd124c6d93498c258454aca64dbbd37ad0215152698d47820_prof);

        
        $__internal_84225874a6e5288d9b9d9f46aef1ba5465763bbd81e2b3331c70cd929d2183e5->leave($__internal_84225874a6e5288d9b9d9f46aef1ba5465763bbd81e2b3331c70cd929d2183e5_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_6a90a2d5610ea3f7f36182385a27ba17c746234624a941f5acc6744b00c7858e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a90a2d5610ea3f7f36182385a27ba17c746234624a941f5acc6744b00c7858e->enter($__internal_6a90a2d5610ea3f7f36182385a27ba17c746234624a941f5acc6744b00c7858e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_f8ed941836a05a172a6830fbaa8371d7753517e2ee551726e893fc459dc68601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ed941836a05a172a6830fbaa8371d7753517e2ee551726e893fc459dc68601->enter($__internal_f8ed941836a05a172a6830fbaa8371d7753517e2ee551726e893fc459dc68601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_results_count_prefix", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_f8ed941836a05a172a6830fbaa8371d7753517e2ee551726e893fc459dc68601->leave($__internal_f8ed941836a05a172a6830fbaa8371d7753517e2ee551726e893fc459dc68601_prof);

        
        $__internal_6a90a2d5610ea3f7f36182385a27ba17c746234624a941f5acc6744b00c7858e->leave($__internal_6a90a2d5610ea3f7f36182385a27ba17c746234624a941f5acc6744b00c7858e_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_fa9dabc93f28e943c64ce1040b91a9b35692076032af799c2e47f61d7560923c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9dabc93f28e943c64ce1040b91a9b35692076032af799c2e47f61d7560923c->enter($__internal_fa9dabc93f28e943c64ce1040b91a9b35692076032af799c2e47f61d7560923c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_c0c88497508b89bef84c5cc59eef14fb5d3a732f2fbedb726555539f375454c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c88497508b89bef84c5cc59eef14fb5d3a732f2fbedb726555539f375454c3->enter($__internal_c0c88497508b89bef84c5cc59eef14fb5d3a732f2fbedb726555539f375454c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo "
    /
    ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 26
            echo "        ?
    ";
        } else {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_c0c88497508b89bef84c5cc59eef14fb5d3a732f2fbedb726555539f375454c3->leave($__internal_c0c88497508b89bef84c5cc59eef14fb5d3a732f2fbedb726555539f375454c3_prof);

        
        $__internal_fa9dabc93f28e943c64ce1040b91a9b35692076032af799c2e47f61d7560923c->leave($__internal_fa9dabc93f28e943c64ce1040b91a9b35692076032af799c2e47f61d7560923c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:simple_pager_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  94 => 28,  90 => 26,  88 => 25,  82 => 23,  73 => 22,  62 => 19,  59 => 18,  53 => 16,  50 => 15,  41 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}

{% block num_results %}
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        {{ 'list_results_count_prefix'|trans({}, 'SonataAdminBundle') }}
    {% endif %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_pages %}
    {{ admin.datagrid.pager.page }}
    /
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        ?
    {% else %}
        {{ admin.datagrid.pager.lastpage }}
    {% endif %}
    &nbsp;-&nbsp;
{% endblock %}
", "SonataAdminBundle:Pager:simple_pager_results.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/Pager/simple_pager_results.html.twig");
    }
}
