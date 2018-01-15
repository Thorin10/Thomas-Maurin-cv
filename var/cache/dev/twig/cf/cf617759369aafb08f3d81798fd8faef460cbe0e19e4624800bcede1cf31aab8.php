<?php

/* SonataAdminBundle:CRUD:delete.html.twig */
class __TwigTemplate_1d7bf090e3ce2fbef76c968a8525055618c24373e2e5a35b186cf486b0ab5906 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:delete.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_292983d01609355d129f4d6566e7238051f42adc4c6e3aaab7e254340ced7a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292983d01609355d129f4d6566e7238051f42adc4c6e3aaab7e254340ced7a8f->enter($__internal_292983d01609355d129f4d6566e7238051f42adc4c6e3aaab7e254340ced7a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $__internal_a7558c559809f77235261bfef1a9bae85f534e40b75a1304c6b1f3d9b3242a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7558c559809f77235261bfef1a9bae85f534e40b75a1304c6b1f3d9b3242a03->enter($__internal_a7558c559809f77235261bfef1a9bae85f534e40b75a1304c6b1f3d9b3242a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_292983d01609355d129f4d6566e7238051f42adc4c6e3aaab7e254340ced7a8f->leave($__internal_292983d01609355d129f4d6566e7238051f42adc4c6e3aaab7e254340ced7a8f_prof);

        
        $__internal_a7558c559809f77235261bfef1a9bae85f534e40b75a1304c6b1f3d9b3242a03->leave($__internal_a7558c559809f77235261bfef1a9bae85f534e40b75a1304c6b1f3d9b3242a03_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_bf9c559806d2c687847297d951ca16508fa7dd2813b1f76be2229c701d220754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9c559806d2c687847297d951ca16508fa7dd2813b1f76be2229c701d220754->enter($__internal_bf9c559806d2c687847297d951ca16508fa7dd2813b1f76be2229c701d220754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_f6b672488bbe4a1a8377619694e6d8255f717ad0e1dd1998ef8e730c7b00c4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b672488bbe4a1a8377619694e6d8255f717ad0e1dd1998ef8e730c7b00c4e7->enter($__internal_f6b672488bbe4a1a8377619694e6d8255f717ad0e1dd1998ef8e730c7b00c4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:delete.html.twig", 15)->display($context);
        
        $__internal_f6b672488bbe4a1a8377619694e6d8255f717ad0e1dd1998ef8e730c7b00c4e7->leave($__internal_f6b672488bbe4a1a8377619694e6d8255f717ad0e1dd1998ef8e730c7b00c4e7_prof);

        
        $__internal_bf9c559806d2c687847297d951ca16508fa7dd2813b1f76be2229c701d220754->leave($__internal_bf9c559806d2c687847297d951ca16508fa7dd2813b1f76be2229c701d220754_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_44544f33e9f1c6107dd2a4896866874fbfbbb6b4bfb8f9c44a129c52ebc44d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44544f33e9f1c6107dd2a4896866874fbfbbb6b4bfb8f9c44a129c52ebc44d56->enter($__internal_44544f33e9f1c6107dd2a4896866874fbfbbb6b4bfb8f9c44a129c52ebc44d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_fead65902d061fc8ee2d51271a19fd36b6cc2c7d7f707a9bb5f5a0f97b0fd771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fead65902d061fc8ee2d51271a19fd36b6cc2c7d7f707a9bb5f5a0f97b0fd771->enter($__internal_fead65902d061fc8ee2d51271a19fd36b6cc2c7d7f707a9bb5f5a0f97b0fd771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_fead65902d061fc8ee2d51271a19fd36b6cc2c7d7f707a9bb5f5a0f97b0fd771->leave($__internal_fead65902d061fc8ee2d51271a19fd36b6cc2c7d7f707a9bb5f5a0f97b0fd771_prof);

        
        $__internal_44544f33e9f1c6107dd2a4896866874fbfbbb6b4bfb8f9c44a129c52ebc44d56->leave($__internal_44544f33e9f1c6107dd2a4896866874fbfbbb6b4bfb8f9c44a129c52ebc44d56_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_d2291d8a931993c8694ca89b8db5cede5877c47f3804d5cff7d6dd6abccaf1d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2291d8a931993c8694ca89b8db5cede5877c47f3804d5cff7d6dd6abccaf1d6->enter($__internal_d2291d8a931993c8694ca89b8db5cede5877c47f3804d5cff7d6dd6abccaf1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e1df85f3945026668a4a5c98d69e3b2ad4cf7086646a540acea44ada742f4da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1df85f3945026668a4a5c98d69e3b2ad4cf7086646a540acea44ada742f4da8->enter($__internal_e1df85f3945026668a4a5c98d69e3b2ad4cf7086646a540acea44ada742f4da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_delete_confirmation", array("%object%" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method")), "SonataAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 36
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 37
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 43
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_e1df85f3945026668a4a5c98d69e3b2ad4cf7086646a540acea44ada742f4da8->leave($__internal_e1df85f3945026668a4a5c98d69e3b2ad4cf7086646a540acea44ada742f4da8_prof);

        
        $__internal_d2291d8a931993c8694ca89b8db5cede5877c47f3804d5cff7d6dd6abccaf1d6->leave($__internal_d2291d8a931993c8694ca89b8db5cede5877c47f3804d5cff7d6dd6abccaf1d6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  132 => 41,  127 => 39,  121 => 37,  119 => 36,  115 => 35,  110 => 33,  105 => 31,  99 => 28,  93 => 25,  87 => 21,  78 => 20,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block content %}
    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">{{ 'title_delete'|trans({}, 'SonataAdminBundle') }}</h3>
            </div>
            <div class=\"box-body\">
                {{ 'message_delete_confirmation'|trans({'%object%': admin.toString(object)}, 'SonataAdminBundle') }}
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"{{ admin.generateObjectUrl('delete', object) }}\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> {{ 'btn_delete'|trans({}, 'SonataAdminBundle') }}</button>
                    {% if admin.hasRoute('edit') and admin.hasAccess('edit', object) %}
                        {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:delete.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/delete.html.twig");
    }
}
