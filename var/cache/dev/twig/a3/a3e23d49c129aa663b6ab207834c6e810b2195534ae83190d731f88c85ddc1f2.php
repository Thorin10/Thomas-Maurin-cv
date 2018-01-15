<?php

/* SonataAdminBundle:CRUD:select_subclass.html.twig */
class __TwigTemplate_7cc65e521a0ffacea03261ab92c42c2d39e80ecf68bfb9d5032fbb2707a54761 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:select_subclass.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6843750876a93e71ce33d62bab5974cdd89f2cfb924553c6f80aaa8b50f3421a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6843750876a93e71ce33d62bab5974cdd89f2cfb924553c6f80aaa8b50f3421a->enter($__internal_6843750876a93e71ce33d62bab5974cdd89f2cfb924553c6f80aaa8b50f3421a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $__internal_32937b2d2d8a2fc4a2a10a9974b1857928598f34344a22f42abc1aa1b8ec4026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32937b2d2d8a2fc4a2a10a9974b1857928598f34344a22f42abc1aa1b8ec4026->enter($__internal_32937b2d2d8a2fc4a2a10a9974b1857928598f34344a22f42abc1aa1b8ec4026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6843750876a93e71ce33d62bab5974cdd89f2cfb924553c6f80aaa8b50f3421a->leave($__internal_6843750876a93e71ce33d62bab5974cdd89f2cfb924553c6f80aaa8b50f3421a_prof);

        
        $__internal_32937b2d2d8a2fc4a2a10a9974b1857928598f34344a22f42abc1aa1b8ec4026->leave($__internal_32937b2d2d8a2fc4a2a10a9974b1857928598f34344a22f42abc1aa1b8ec4026_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_d547493cee480196891099e6f0b46d7a7ab382e30c6440fcc002213c14a0f529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d547493cee480196891099e6f0b46d7a7ab382e30c6440fcc002213c14a0f529->enter($__internal_d547493cee480196891099e6f0b46d7a7ab382e30c6440fcc002213c14a0f529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5935b622e883f65d0eaf1baad8b8edb0d338aa1646db79b446aeb02a150b7598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5935b622e883f65d0eaf1baad8b8edb0d338aa1646db79b446aeb02a150b7598->enter($__internal_5935b622e883f65d0eaf1baad8b8edb0d338aa1646db79b446aeb02a150b7598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_select_subclass", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_5935b622e883f65d0eaf1baad8b8edb0d338aa1646db79b446aeb02a150b7598->leave($__internal_5935b622e883f65d0eaf1baad8b8edb0d338aa1646db79b446aeb02a150b7598_prof);

        
        $__internal_d547493cee480196891099e6f0b46d7a7ab382e30c6440fcc002213c14a0f529->leave($__internal_d547493cee480196891099e6f0b46d7a7ab382e30c6440fcc002213c14a0f529_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_63b732b63fa821fed16fca9bc8320b052cb6d8ac3ebc1678d491663e227587e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b732b63fa821fed16fca9bc8320b052cb6d8ac3ebc1678d491663e227587e5->enter($__internal_63b732b63fa821fed16fca9bc8320b052cb6d8ac3ebc1678d491663e227587e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_33c4b165536c3c8f86302ced8274d073ffb4face796b07ab211b42697a217463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c4b165536c3c8f86302ced8274d073ffb4face796b07ab211b42697a217463->enter($__internal_33c4b165536c3c8f86302ced8274d073ffb4face796b07ab211b42697a217463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                ";
        // line 19
        $this->displayBlock("title", $context, $blocks);
        echo "
            </h3>
        </div>
        <div class=\"box-body\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "subclasses", array())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
            // line 24
            echo "                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => ($context["action"] ?? $this->getContext($context, "action")), 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
            echo "\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), (($this->getAttribute(($context["admin"] ?? null), "translationdomain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["admin"] ?? null), "translationdomain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
            echo "
                    </a>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                <span class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_subclass_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_33c4b165536c3c8f86302ced8274d073ffb4face796b07ab211b42697a217463->leave($__internal_33c4b165536c3c8f86302ced8274d073ffb4face796b07ab211b42697a217463_prof);

        
        $__internal_63b732b63fa821fed16fca9bc8320b052cb6d8ac3ebc1678d491663e227587e5->leave($__internal_63b732b63fa821fed16fca9bc8320b052cb6d8ac3ebc1678d491663e227587e5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:select_subclass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  103 => 33,  94 => 29,  87 => 25,  84 => 24,  79 => 23,  72 => 19,  67 => 16,  58 => 15,  40 => 13,  19 => 11,);
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
{% extends base_template %}

{% block title %}{{ 'title_select_subclass'|trans({}, 'SonataAdminBundle') }}{% endblock %}

{% block content %}
    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                {{ block('title') }}
            </h3>
        </div>
        <div class=\"box-body\">
            {% for subclass in admin.subclasses|keys %}
                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"{{ admin.generateUrl(action, {'subclass': subclass }) }}\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        {{ subclass|trans({}, admin.translationdomain|default('SonataAdminBundle')) }}
                    </a>
                </div>
            {% else %}
                <span class=\"alert alert-info\">{{ 'no_subclass_available'|trans({}, 'SonataAdminBundle') }}</span>
            {% endfor %}
            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:select_subclass.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/select_subclass.html.twig");
    }
}
