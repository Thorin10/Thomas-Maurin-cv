<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_8025cb6a90b43e1a5263acb372eca675e126147d81d6039467881ebf85a6c8a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4eb830615068ac7122703d951e0ed9acd21fb98c5f7d940235b1059d19643bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb830615068ac7122703d951e0ed9acd21fb98c5f7d940235b1059d19643bc1->enter($__internal_4eb830615068ac7122703d951e0ed9acd21fb98c5f7d940235b1059d19643bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        $__internal_57c0e5f2838780d2815cefde203ca01950a4c0f9311805b2c91c1219ef78fff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c0e5f2838780d2815cefde203ca01950a4c0f9311805b2c91c1219ef78fff4->enter($__internal_57c0e5f2838780d2815cefde203ca01950a4c0f9311805b2c91c1219ef78fff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_4eb830615068ac7122703d951e0ed9acd21fb98c5f7d940235b1059d19643bc1->leave($__internal_4eb830615068ac7122703d951e0ed9acd21fb98c5f7d940235b1059d19643bc1_prof);

        
        $__internal_57c0e5f2838780d2815cefde203ca01950a4c0f9311805b2c91c1219ef78fff4->leave($__internal_57c0e5f2838780d2815cefde203ca01950a4c0f9311805b2c91c1219ef78fff4_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_4c8458ff4d0f80447232ea14adf27db78282a57ca4b2fd24e3d4bcf83da05db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c8458ff4d0f80447232ea14adf27db78282a57ca4b2fd24e3d4bcf83da05db4->enter($__internal_4c8458ff4d0f80447232ea14adf27db78282a57ca4b2fd24e3d4bcf83da05db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7b09d9c36b6f30a782357c7465c99d9e993b3bcebdca594ac1f4da084434ff25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b09d9c36b6f30a782357c7465c99d9e993b3bcebdca594ac1f4da084434ff25->enter($__internal_7b09d9c36b6f30a782357c7465c99d9e993b3bcebdca594ac1f4da084434ff25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 14
        echo "    ";
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 15
        echo "    ";
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('preview', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        if (( !twig_test_empty(($context["_list_table"] ?? $this->getContext($context, "_list_table"))) ||  !twig_test_empty(($context["_list_filters"] ?? $this->getContext($context, "_list_filters"))))) {
            // line 23
            echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        ";
            // line 28
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 29
                echo "                            <div class=\"nav navbar-right btn-group\">
                                ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 31
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                            </div>
                        ";
            }
            // line 35
            echo "
                        ";
            // line 36
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions")))) {
                // line 37
                echo "                            ";
                echo ($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"));
                echo "
                        ";
            }
            // line 39
            echo "                    </div>
                </div>
            </div>
        </div>

        ";
            // line 44
            if (twig_trim_filter(($context["_list_filters"] ?? $this->getContext($context, "_list_filters")))) {
                // line 45
                echo "            <div class=\"row\">
                ";
                // line 46
                echo ($context["_list_filters"] ?? $this->getContext($context, "_list_filters"));
                echo "
            </div>
        ";
            }
            // line 49
            echo "
        <div class=\"row\">
            ";
            // line 51
            echo ($context["_list_table"] ?? $this->getContext($context, "_list_table"));
            echo "
        </div>
    </div>
    ";
        }
        
        $__internal_7b09d9c36b6f30a782357c7465c99d9e993b3bcebdca594ac1f4da084434ff25->leave($__internal_7b09d9c36b6f30a782357c7465c99d9e993b3bcebdca594ac1f4da084434ff25_prof);

        
        $__internal_4c8458ff4d0f80447232ea14adf27db78282a57ca4b2fd24e3d4bcf83da05db4->leave($__internal_4c8458ff4d0f80447232ea14adf27db78282a57ca4b2fd24e3d4bcf83da05db4_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_61dbcce942827d9003c39a7dd7e31c9aad580778424d7fa45c3db2c037e95d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61dbcce942827d9003c39a7dd7e31c9aad580778424d7fa45c3db2c037e95d96->enter($__internal_61dbcce942827d9003c39a7dd7e31c9aad580778424d7fa45c3db2c037e95d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_622a6dd99e0b9db4c50dff658a4d56452c5409c8549d0a10e8a9070af552c98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622a6dd99e0b9db4c50dff658a4d56452c5409c8549d0a10e8a9070af552c98c->enter($__internal_622a6dd99e0b9db4c50dff658a4d56452c5409c8549d0a10e8a9070af552c98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_622a6dd99e0b9db4c50dff658a4d56452c5409c8549d0a10e8a9070af552c98c->leave($__internal_622a6dd99e0b9db4c50dff658a4d56452c5409c8549d0a10e8a9070af552c98c_prof);

        
        $__internal_61dbcce942827d9003c39a7dd7e31c9aad580778424d7fa45c3db2c037e95d96->leave($__internal_61dbcce942827d9003c39a7dd7e31c9aad580778424d7fa45c3db2c037e95d96_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_45fc4e0f50424219cdbb83cc660a8a58eb859ac63ccb8277e9a79a6c601e0ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45fc4e0f50424219cdbb83cc660a8a58eb859ac63ccb8277e9a79a6c601e0ea3->enter($__internal_45fc4e0f50424219cdbb83cc660a8a58eb859ac63ccb8277e9a79a6c601e0ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_c3410ffffba85c4623ddb8bbb1e74fee04ea5c0b330730238df4a8745fad7e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3410ffffba85c4623ddb8bbb1e74fee04ea5c0b330730238df4a8745fad7e38->enter($__internal_c3410ffffba85c4623ddb8bbb1e74fee04ea5c0b330730238df4a8745fad7e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_c3410ffffba85c4623ddb8bbb1e74fee04ea5c0b330730238df4a8745fad7e38->leave($__internal_c3410ffffba85c4623ddb8bbb1e74fee04ea5c0b330730238df4a8745fad7e38_prof);

        
        $__internal_45fc4e0f50424219cdbb83cc660a8a58eb859ac63ccb8277e9a79a6c601e0ea3->leave($__internal_45fc4e0f50424219cdbb83cc660a8a58eb859ac63ccb8277e9a79a6c601e0ea3_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_8a963028bab546540c84055c40828638880fcee98968f3fc8c781edd8cd03386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a963028bab546540c84055c40828638880fcee98968f3fc8c781edd8cd03386->enter($__internal_8a963028bab546540c84055c40828638880fcee98968f3fc8c781edd8cd03386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_ac6e76a34bb98f472e9f1b50685a06f19e6c50e4f577a028ac904b5b124f540c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6e76a34bb98f472e9f1b50685a06f19e6c50e4f577a028ac904b5b124f540c->enter($__internal_ac6e76a34bb98f472e9f1b50685a06f19e6c50e4f577a028ac904b5b124f540c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_ac6e76a34bb98f472e9f1b50685a06f19e6c50e4f577a028ac904b5b124f540c->leave($__internal_ac6e76a34bb98f472e9f1b50685a06f19e6c50e4f577a028ac904b5b124f540c_prof);

        
        $__internal_8a963028bab546540c84055c40828638880fcee98968f3fc8c781edd8cd03386->leave($__internal_8a963028bab546540c84055c40828638880fcee98968f3fc8c781edd8cd03386_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_5404c3e30864540174f18496db28d29e93bb67bffaccff34af4ced4df93f3286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5404c3e30864540174f18496db28d29e93bb67bffaccff34af4ced4df93f3286->enter($__internal_5404c3e30864540174f18496db28d29e93bb67bffaccff34af4ced4df93f3286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_d71699bb3d3518fbeb712e7b53911dcd9c262346f4cad40ba42ecb6b8cfe9215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71699bb3d3518fbeb712e7b53911dcd9c262346f4cad40ba42ecb6b8cfe9215->enter($__internal_d71699bb3d3518fbeb712e7b53911dcd9c262346f4cad40ba42ecb6b8cfe9215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_d71699bb3d3518fbeb712e7b53911dcd9c262346f4cad40ba42ecb6b8cfe9215->leave($__internal_d71699bb3d3518fbeb712e7b53911dcd9c262346f4cad40ba42ecb6b8cfe9215_prof);

        
        $__internal_5404c3e30864540174f18496db28d29e93bb67bffaccff34af4ced4df93f3286->leave($__internal_5404c3e30864540174f18496db28d29e93bb67bffaccff34af4ced4df93f3286_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  213 => 20,  196 => 19,  179 => 18,  162 => 17,  147 => 51,  143 => 49,  137 => 46,  134 => 45,  132 => 44,  125 => 39,  119 => 37,  117 => 36,  114 => 35,  110 => 33,  95 => 31,  91 => 30,  88 => 29,  86 => 28,  79 => 23,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  33 => 12,  30 => 11,);
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

{% block content %}
    {% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
    {% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
    {% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

    {% block preview %}{% endblock %}
    {% block form %}{% endblock %}
    {% block list %}{% endblock %}
    {% block show %}{% endblock %}

    {% if _list_table is not empty or _list_filters is not empty %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                            <div class=\"nav navbar-right btn-group\">
                                {% for mode, settings in admin.listModes %}
                                    <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if _list_filters_actions is not empty %}
                            {{ _list_filters_actions|raw }}
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        {% if _list_filters|trim %}
            <div class=\"row\">
                {{ _list_filters|raw }}
            </div>
        {% endif %}

        <div class=\"row\">
            {{ _list_table|raw }}
        </div>
    </div>
    {% endif %}
{% endblock %}
", "SonataAdminBundle::ajax_layout.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/ajax_layout.html.twig");
    }
}
