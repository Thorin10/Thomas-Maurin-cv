<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_8aa47a73fdcb4c76588e271c272d09c8f747a4677d241761a0c3c7fa079da0c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0c0ef81d6b8f916cad17a56cdcee9ce31b47d27f5ab22e0d5226934863a8ae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0c0ef81d6b8f916cad17a56cdcee9ce31b47d27f5ab22e0d5226934863a8ae1->enter($__internal_f0c0ef81d6b8f916cad17a56cdcee9ce31b47d27f5ab22e0d5226934863a8ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $__internal_563a129b4f506ecd333851c16ad3a81d83cd137e91e4bfae2597e4eaa8dc91de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563a129b4f506ecd333851c16ad3a81d83cd137e91e4bfae2597e4eaa8dc91de->enter($__internal_563a129b4f506ecd333851c16ad3a81d83cd137e91e4bfae2597e4eaa8dc91de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0c0ef81d6b8f916cad17a56cdcee9ce31b47d27f5ab22e0d5226934863a8ae1->leave($__internal_f0c0ef81d6b8f916cad17a56cdcee9ce31b47d27f5ab22e0d5226934863a8ae1_prof);

        
        $__internal_563a129b4f506ecd333851c16ad3a81d83cd137e91e4bfae2597e4eaa8dc91de->leave($__internal_563a129b4f506ecd333851c16ad3a81d83cd137e91e4bfae2597e4eaa8dc91de_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_30166a71d9d9047ed07c01df036d8c839c1122875f8e6583ac6b7e143f643ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30166a71d9d9047ed07c01df036d8c839c1122875f8e6583ac6b7e143f643ac6->enter($__internal_30166a71d9d9047ed07c01df036d8c839c1122875f8e6583ac6b7e143f643ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_033a238f813bc05a9b9bf533fea6d2e17de044079b7f5fc7835096a4efc21fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033a238f813bc05a9b9bf533fea6d2e17de044079b7f5fc7835096a4efc21fe3->enter($__internal_033a238f813bc05a9b9bf533fea6d2e17de044079b7f5fc7835096a4efc21fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_033a238f813bc05a9b9bf533fea6d2e17de044079b7f5fc7835096a4efc21fe3->leave($__internal_033a238f813bc05a9b9bf533fea6d2e17de044079b7f5fc7835096a4efc21fe3_prof);

        
        $__internal_30166a71d9d9047ed07c01df036d8c839c1122875f8e6583ac6b7e143f643ac6->leave($__internal_30166a71d9d9047ed07c01df036d8c839c1122875f8e6583ac6b7e143f643ac6_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_1a5c36f9c74546d55d5ba6ea2bee2396bdb1aca1df10df795d483ba50f9288b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5c36f9c74546d55d5ba6ea2bee2396bdb1aca1df10df795d483ba50f9288b5->enter($__internal_1a5c36f9c74546d55d5ba6ea2bee2396bdb1aca1df10df795d483ba50f9288b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        $__internal_6b9824898d24e15d819339653a411446d987096e9fada3c48fb6382dbab577f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9824898d24e15d819339653a411446d987096e9fada3c48fb6382dbab577f3->enter($__internal_6b9824898d24e15d819339653a411446d987096e9fada3c48fb6382dbab577f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_6b9824898d24e15d819339653a411446d987096e9fada3c48fb6382dbab577f3->leave($__internal_6b9824898d24e15d819339653a411446d987096e9fada3c48fb6382dbab577f3_prof);

        
        $__internal_1a5c36f9c74546d55d5ba6ea2bee2396bdb1aca1df10df795d483ba50f9288b5->leave($__internal_1a5c36f9c74546d55d5ba6ea2bee2396bdb1aca1df10df795d483ba50f9288b5_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_946d73567dcd09304b0a165b87b1e0f7c9ae9f5dca7c1429ea4631ef4619d816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946d73567dcd09304b0a165b87b1e0f7c9ae9f5dca7c1429ea4631ef4619d816->enter($__internal_946d73567dcd09304b0a165b87b1e0f7c9ae9f5dca7c1429ea4631ef4619d816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_951721fffd581a609e3ed9ca383f009bd837a0e80d34d79d7d598478665e7274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951721fffd581a609e3ed9ca383f009bd837a0e80d34d79d7d598478665e7274->enter($__internal_951721fffd581a609e3ed9ca383f009bd837a0e80d34d79d7d598478665e7274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_951721fffd581a609e3ed9ca383f009bd837a0e80d34d79d7d598478665e7274->leave($__internal_951721fffd581a609e3ed9ca383f009bd837a0e80d34d79d7d598478665e7274_prof);

        
        $__internal_946d73567dcd09304b0a165b87b1e0f7c9ae9f5dca7c1429ea4631ef4619d816->leave($__internal_946d73567dcd09304b0a165b87b1e0f7c9ae9f5dca7c1429ea4631ef4619d816_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_1ffba74f0f0a2ab03285f1582dc899ebf206cfa2f2a2eb955e0544d0cc39af5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ffba74f0f0a2ab03285f1582dc899ebf206cfa2f2a2eb955e0544d0cc39af5e->enter($__internal_1ffba74f0f0a2ab03285f1582dc899ebf206cfa2f2a2eb955e0544d0cc39af5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_22d642be6e9a7253fefe08953f33232ccc1f52f111b284cfbc9f1444735a52e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d642be6e9a7253fefe08953f33232ccc1f52f111b284cfbc9f1444735a52e1->enter($__internal_22d642be6e9a7253fefe08953f33232ccc1f52f111b284cfbc9f1444735a52e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), ($context["object"] ?? $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_22d642be6e9a7253fefe08953f33232ccc1f52f111b284cfbc9f1444735a52e1->leave($__internal_22d642be6e9a7253fefe08953f33232ccc1f52f111b284cfbc9f1444735a52e1_prof);

        
        $__internal_1ffba74f0f0a2ab03285f1582dc899ebf206cfa2f2a2eb955e0544d0cc39af5e->leave($__internal_1ffba74f0f0a2ab03285f1582dc899ebf206cfa2f2a2eb955e0544d0cc39af5e_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_3410b534974c3e7c89e41c0884519242c0b7430c792eaa1e6dedd7ece7cb2662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3410b534974c3e7c89e41c0884519242c0b7430c792eaa1e6dedd7ece7cb2662->enter($__internal_3410b534974c3e7c89e41c0884519242c0b7430c792eaa1e6dedd7ece7cb2662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_7c674ceffd3a50c39a7851a6c89b63fcf97d817183a905f63965723049e4c999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c674ceffd3a50c39a7851a6c89b63fcf97d817183a905f63965723049e4c999->enter($__internal_7c674ceffd3a50c39a7851a6c89b63fcf97d817183a905f63965723049e4c999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_7c674ceffd3a50c39a7851a6c89b63fcf97d817183a905f63965723049e4c999->leave($__internal_7c674ceffd3a50c39a7851a6c89b63fcf97d817183a905f63965723049e4c999_prof);

        
        $__internal_3410b534974c3e7c89e41c0884519242c0b7430c792eaa1e6dedd7ece7cb2662->leave($__internal_3410b534974c3e7c89e41c0884519242c0b7430c792eaa1e6dedd7ece7cb2662_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 57,  195 => 56,  186 => 55,  175 => 52,  168 => 50,  161 => 48,  155 => 46,  153 => 45,  150 => 44,  146 => 43,  143 => 42,  136 => 38,  132 => 36,  130 => 35,  127 => 34,  123 => 33,  120 => 32,  111 => 31,  98 => 27,  91 => 23,  87 => 21,  78 => 20,  61 => 17,  44 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:preview.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/preview.html.twig");
    }
}
