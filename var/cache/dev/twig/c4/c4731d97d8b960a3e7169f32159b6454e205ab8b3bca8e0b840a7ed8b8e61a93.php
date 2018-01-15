<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_d12a0378aba71758d1e226d07076af8a6dc82889ceca28475241486adb397c2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:Core:search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eaeee831d7821b308a5c7710c60021a075cae94fd992a2bdd172a0f69aacc90b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaeee831d7821b308a5c7710c60021a075cae94fd992a2bdd172a0f69aacc90b->enter($__internal_eaeee831d7821b308a5c7710c60021a075cae94fd992a2bdd172a0f69aacc90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $__internal_279f342973b2c326690c8cb41aedb4da4f4b454295120e5c8ef96a77df8e7006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279f342973b2c326690c8cb41aedb4da4f4b454295120e5c8ef96a77df8e7006->enter($__internal_279f342973b2c326690c8cb41aedb4da4f4b454295120e5c8ef96a77df8e7006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaeee831d7821b308a5c7710c60021a075cae94fd992a2bdd172a0f69aacc90b->leave($__internal_eaeee831d7821b308a5c7710c60021a075cae94fd992a2bdd172a0f69aacc90b_prof);

        
        $__internal_279f342973b2c326690c8cb41aedb4da4f4b454295120e5c8ef96a77df8e7006->leave($__internal_279f342973b2c326690c8cb41aedb4da4f4b454295120e5c8ef96a77df8e7006_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b88c19ff395aaf8fdc1b0312458e8f04d62695861eaff063f2b2d71d3798eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b88c19ff395aaf8fdc1b0312458e8f04d62695861eaff063f2b2d71d3798eb5->enter($__internal_9b88c19ff395aaf8fdc1b0312458e8f04d62695861eaff063f2b2d71d3798eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_84c73ac41ccacfc7bc8fde1b561cae3e4695553e1ab835038e2332322d5e6b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84c73ac41ccacfc7bc8fde1b561cae3e4695553e1ab835038e2332322d5e6b09->enter($__internal_84c73ac41ccacfc7bc8fde1b561cae3e4695553e1ab835038e2332322d5e6b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => ($context["query"] ?? $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        
        $__internal_84c73ac41ccacfc7bc8fde1b561cae3e4695553e1ab835038e2332322d5e6b09->leave($__internal_84c73ac41ccacfc7bc8fde1b561cae3e4695553e1ab835038e2332322d5e6b09_prof);

        
        $__internal_9b88c19ff395aaf8fdc1b0312458e8f04d62695861eaff063f2b2d71d3798eb5->leave($__internal_9b88c19ff395aaf8fdc1b0312458e8f04d62695861eaff063f2b2d71d3798eb5_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_98ead44d101598643af2be8f07950518aa265fbabb45108989dbe1a9a2d9e10c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ead44d101598643af2be8f07950518aa265fbabb45108989dbe1a9a2d9e10c->enter($__internal_98ead44d101598643af2be8f07950518aa265fbabb45108989dbe1a9a2d9e10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_7d486ee74e56914b01aa0789a305a2084db9c6dd771df7a7c81ac1ece8dfdb0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d486ee74e56914b01aa0789a305a2084db9c6dd771df7a7c81ac1ece8dfdb0f->enter($__internal_7d486ee74e56914b01aa0789a305a2084db9c6dd771df7a7c81ac1ece8dfdb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_7d486ee74e56914b01aa0789a305a2084db9c6dd771df7a7c81ac1ece8dfdb0f->leave($__internal_7d486ee74e56914b01aa0789a305a2084db9c6dd771df7a7c81ac1ece8dfdb0f_prof);

        
        $__internal_98ead44d101598643af2be8f07950518aa265fbabb45108989dbe1a9a2d9e10c->leave($__internal_98ead44d101598643af2be8f07950518aa265fbabb45108989dbe1a9a2d9e10c_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_6826997ff6ac19a006c87b61bf2ef294acc652807841e143b720296d1a94f156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6826997ff6ac19a006c87b61bf2ef294acc652807841e143b720296d1a94f156->enter($__internal_6826997ff6ac19a006c87b61bf2ef294acc652807841e143b720296d1a94f156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_264f8bab47b153d776d29927f3480722ed49a032fdb38ec75fd66abc121ec2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264f8bab47b153d776d29927f3480722ed49a032fdb38ec75fd66abc121ec2c5->enter($__internal_264f8bab47b153d776d29927f3480722ed49a032fdb38ec75fd66abc121ec2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => ($context["query"] ?? $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 19
        if ((array_key_exists("query", $context) &&  !(($context["query"] ?? $this->getContext($context, "query")) === false))) {
            // line 20
            echo "        ";
            $context["count"] = 0;
            // line 21
            echo "        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 23
                echo "            ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
                // line 24
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !($context["display"] ?? $this->getContext($context, "display"))) {
                        // line 25
                        echo "                ";
                        $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                        // line 26
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "
            ";
                // line 28
                if (($context["display"] ?? $this->getContext($context, "display"))) {
                    // line 29
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 30
                        echo "                    ";
                        $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                        // line 31
                        echo "                    ";
                        if ((($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "hasAccess", array(0 => "create"), "method")) || ($this->getAttribute($context["admin"], "hasRoute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "hasAccess", array(0 => "list"), "method")))) {
                            // line 32
                            echo "                        ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" =>                             // line 35
($context["query"] ?? $this->getContext($context, "query")), "admin_code" => $this->getAttribute(                            // line 36
$context["admin"], "code", array()), "page" => 0, "per_page" => 10, "icon" => $this->getAttribute(                            // line 39
$context["group"], "icon", array()))));
                            // line 40
                            echo "
                    ";
                        }
                        // line 42
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "            ";
                }
                // line 44
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        </div>
    ";
        }
        // line 47
        echo "
";
        
        $__internal_264f8bab47b153d776d29927f3480722ed49a032fdb38ec75fd66abc121ec2c5->leave($__internal_264f8bab47b153d776d29927f3480722ed49a032fdb38ec75fd66abc121ec2c5_prof);

        
        $__internal_6826997ff6ac19a006c87b61bf2ef294acc652807841e143b720296d1a94f156->leave($__internal_6826997ff6ac19a006c87b61bf2ef294acc652807841e143b720296d1a94f156_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 47,  163 => 45,  157 => 44,  154 => 43,  148 => 42,  144 => 40,  142 => 39,  141 => 36,  140 => 35,  138 => 32,  135 => 31,  132 => 30,  127 => 29,  125 => 28,  122 => 27,  115 => 26,  112 => 25,  106 => 24,  103 => 23,  99 => 22,  96 => 21,  93 => 20,  91 => 19,  85 => 17,  76 => 16,  59 => 15,  41 => 14,  20 => 12,);
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

{% block title %}{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}{% endblock %}
{% block breadcrumb %}{% endblock %}
{% block content %}
    <h2 class=\"page-header\">{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}</h2>

    {% if query is defined and query is not same as(false) %}
        {% set count = 0 %}
        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        {% for group in groups %}
            {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
            {% for role in group.roles if not display %}
                {% set display = is_granted(role) %}
            {% endfor %}

            {% if display %}
                {% for admin in group.items %}
                    {% set count = count + 1 %}
                    {% if admin.hasRoute('create') and admin.hasAccess('create') or admin.hasRoute('list') and admin.hasAccess('list') %}
                        {{ sonata_block_render({
                            'type': 'sonata.admin.block.search_result'
                        }, {
                            'query': query,
                            'admin_code': admin.code,
                            'page': 0,
                            'per_page': 10,
                            'icon': group.icon
                        }) }}
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

{% endblock %}
", "SonataAdminBundle:Core:search.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/Core/search.html.twig");
    }
}
