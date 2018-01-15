<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_22f37e5f0b73cf2f6c488f02fd70f6874cbdb217e0bc7258e6f37508dc4778ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 33
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb3ed7a5c10a2ea68e1ff4e2ced040e6039698310f8686b8844443f2b0a03484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb3ed7a5c10a2ea68e1ff4e2ced040e6039698310f8686b8844443f2b0a03484->enter($__internal_cb3ed7a5c10a2ea68e1ff4e2ced040e6039698310f8686b8844443f2b0a03484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_0192b27972f2cedaa413a435c19aae473309c304e78a773c4615103ea39f1fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0192b27972f2cedaa413a435c19aae473309c304e78a773c4615103ea39f1fcd->enter($__internal_0192b27972f2cedaa413a435c19aae473309c304e78a773c4615103ea39f1fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb3ed7a5c10a2ea68e1ff4e2ced040e6039698310f8686b8844443f2b0a03484->leave($__internal_cb3ed7a5c10a2ea68e1ff4e2ced040e6039698310f8686b8844443f2b0a03484_prof);

        
        $__internal_0192b27972f2cedaa413a435c19aae473309c304e78a773c4615103ea39f1fcd->leave($__internal_0192b27972f2cedaa413a435c19aae473309c304e78a773c4615103ea39f1fcd_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_2590313b797259994b765d3e48dad46293e9147f2324accbd4c56928b21b903a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2590313b797259994b765d3e48dad46293e9147f2324accbd4c56928b21b903a->enter($__internal_2590313b797259994b765d3e48dad46293e9147f2324accbd4c56928b21b903a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f28da804c7d6ff00c5009ca7fad18a5550eacd1dd2c8e56cfc58954c64f6e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f28da804c7d6ff00c5009ca7fad18a5550eacd1dd2c8e56cfc58954c64f6e8b->enter($__internal_7f28da804c7d6ff00c5009ca7fad18a5550eacd1dd2c8e56cfc58954c64f6e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        // line 16
        echo "    ";
        if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter(($context["objectId"] ?? $this->getContext($context, "objectId")), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))))) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_7f28da804c7d6ff00c5009ca7fad18a5550eacd1dd2c8e56cfc58954c64f6e8b->leave($__internal_7f28da804c7d6ff00c5009ca7fad18a5550eacd1dd2c8e56cfc58954c64f6e8b_prof);

        
        $__internal_2590313b797259994b765d3e48dad46293e9147f2324accbd4c56928b21b903a->leave($__internal_2590313b797259994b765d3e48dad46293e9147f2324accbd4c56928b21b903a_prof);

    }

    // line 23
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_d148da893c671a3fe5fbe7e48973f1d71514073494445c5bc381654a2e8d0cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d148da893c671a3fe5fbe7e48973f1d71514073494445c5bc381654a2e8d0cae->enter($__internal_d148da893c671a3fe5fbe7e48973f1d71514073494445c5bc381654a2e8d0cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_f638808d17cc78a734f723a448fa1d681a35829d9c62aec6458afa2582213cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f638808d17cc78a734f723a448fa1d681a35829d9c62aec6458afa2582213cab->enter($__internal_f638808d17cc78a734f723a448fa1d681a35829d9c62aec6458afa2582213cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 24
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f638808d17cc78a734f723a448fa1d681a35829d9c62aec6458afa2582213cab->leave($__internal_f638808d17cc78a734f723a448fa1d681a35829d9c62aec6458afa2582213cab_prof);

        
        $__internal_d148da893c671a3fe5fbe7e48973f1d71514073494445c5bc381654a2e8d0cae->leave($__internal_d148da893c671a3fe5fbe7e48973f1d71514073494445c5bc381654a2e8d0cae_prof);

    }

    // line 27
    public function block_actions($context, array $blocks = array())
    {
        $__internal_6eff26896ec46660d42b0c5e405155b3d8732cb7573c78dcbd0ba2b9194cd821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eff26896ec46660d42b0c5e405155b3d8732cb7573c78dcbd0ba2b9194cd821->enter($__internal_6eff26896ec46660d42b0c5e405155b3d8732cb7573c78dcbd0ba2b9194cd821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_81ef0a4ad929ceffea4e529f06fa94f66321aa6ca27f74f9a03462a1eec11b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ef0a4ad929ceffea4e529f06fa94f66321aa6ca27f74f9a03462a1eec11b0c->enter($__internal_81ef0a4ad929ceffea4e529f06fa94f66321aa6ca27f74f9a03462a1eec11b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 28
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 28)->display($context);
        
        $__internal_81ef0a4ad929ceffea4e529f06fa94f66321aa6ca27f74f9a03462a1eec11b0c->leave($__internal_81ef0a4ad929ceffea4e529f06fa94f66321aa6ca27f74f9a03462a1eec11b0c_prof);

        
        $__internal_6eff26896ec46660d42b0c5e405155b3d8732cb7573c78dcbd0ba2b9194cd821->leave($__internal_6eff26896ec46660d42b0c5e405155b3d8732cb7573c78dcbd0ba2b9194cd821_prof);

    }

    // line 31
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_6db4152d1ee41a4138fa5676ae4a35d5d23b60051c44b83b085f05de5268ec98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db4152d1ee41a4138fa5676ae4a35d5d23b60051c44b83b085f05de5268ec98->enter($__internal_6db4152d1ee41a4138fa5676ae4a35d5d23b60051c44b83b085f05de5268ec98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_3f89a84f5f994a4b72233ef47c4a5f76ba9a12af63a915899ffc2cacb1f7b8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f89a84f5f994a4b72233ef47c4a5f76ba9a12af63a915899ffc2cacb1f7b8d9->enter($__internal_3f89a84f5f994a4b72233ef47c4a5f76ba9a12af63a915899ffc2cacb1f7b8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_3f89a84f5f994a4b72233ef47c4a5f76ba9a12af63a915899ffc2cacb1f7b8d9->leave($__internal_3f89a84f5f994a4b72233ef47c4a5f76ba9a12af63a915899ffc2cacb1f7b8d9_prof);

        
        $__internal_6db4152d1ee41a4138fa5676ae4a35d5d23b60051c44b83b085f05de5268ec98->leave($__internal_6db4152d1ee41a4138fa5676ae4a35d5d23b60051c44b83b085f05de5268ec98_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_e07822bcb44bd7de336c8e8b6fa27c5d3622829374073eebe03edab5d7c61d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e07822bcb44bd7de336c8e8b6fa27c5d3622829374073eebe03edab5d7c61d51->enter($__internal_e07822bcb44bd7de336c8e8b6fa27c5d3622829374073eebe03edab5d7c61d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_8711e5de5f5b0ede2f44700cfa50f6fb073225ee58337864950c187260ef5802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8711e5de5f5b0ede2f44700cfa50f6fb073225ee58337864950c187260ef5802->enter($__internal_8711e5de5f5b0ede2f44700cfa50f6fb073225ee58337864950c187260ef5802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_8711e5de5f5b0ede2f44700cfa50f6fb073225ee58337864950c187260ef5802->leave($__internal_8711e5de5f5b0ede2f44700cfa50f6fb073225ee58337864950c187260ef5802_prof);

        
        $__internal_e07822bcb44bd7de336c8e8b6fa27c5d3622829374073eebe03edab5d7c61d51->leave($__internal_e07822bcb44bd7de336c8e8b6fa27c5d3622829374073eebe03edab5d7c61d51_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 36,  154 => 35,  136 => 31,  126 => 28,  117 => 27,  104 => 24,  95 => 23,  81 => 19,  75 => 17,  72 => 16,  70 => 15,  61 => 14,  40 => 12,  12 => 33,);
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

{% block title %}
    {# NEXT_MAJOR: remove default filter #}
    {% if objectId|default(admin.id(object)) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
