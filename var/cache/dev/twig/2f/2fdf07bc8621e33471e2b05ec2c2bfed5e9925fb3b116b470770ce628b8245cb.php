<?php

/* SonataAdminBundle:CRUD:base_edit_form_macro.html.twig */
class __TwigTemplate_f89dfcf9db51386f90a2735018719d61b7e5283b803567489d7e85112534fd76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ee9ec7d3d4c16a9c5835aa284d46015397bff34f4328d653b75a96b16ac0e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee9ec7d3d4c16a9c5835aa284d46015397bff34f4328d653b75a96b16ac0e9f->enter($__internal_5ee9ec7d3d4c16a9c5835aa284d46015397bff34f4328d653b75a96b16ac0e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig"));

        $__internal_c2a5318178ad1ed762de89d76ad2418d50709a40ea0cb5c2cb590a6934ccb018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a5318178ad1ed762de89d76ad2418d50709a40ea0cb5c2cb590a6934ccb018->enter($__internal_c2a5318178ad1ed762de89d76ad2418d50709a40ea0cb5c2cb590a6934ccb018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig"));

        
        $__internal_5ee9ec7d3d4c16a9c5835aa284d46015397bff34f4328d653b75a96b16ac0e9f->leave($__internal_5ee9ec7d3d4c16a9c5835aa284d46015397bff34f4328d653b75a96b16ac0e9f_prof);

        
        $__internal_c2a5318178ad1ed762de89d76ad2418d50709a40ea0cb5c2cb590a6934ccb018->leave($__internal_c2a5318178ad1ed762de89d76ad2418d50709a40ea0cb5c2cb590a6934ccb018_prof);

    }

    // line 1
    public function getrender_groups($__admin__ = null, $__form__ = null, $__groups__ = null, $__has_tab__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "form" => $__form__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6c71443a0871e38f274478a20e42f7ed095a331028b76532c5469f3fcefe8bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_6c71443a0871e38f274478a20e42f7ed095a331028b76532c5469f3fcefe8bf1->enter($__internal_6c71443a0871e38f274478a20e42f7ed095a331028b76532c5469f3fcefe8bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            $__internal_e304deb9ad0ac7f9c9753e3482bee843855c14197e7e26848d2d5f32802c2fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_e304deb9ad0ac7f9c9753e3482bee843855c14197e7e26848d2d5f32802c2fad->enter($__internal_e304deb9ad0ac7f9c9753e3482bee843855c14197e7e26848d2d5f32802c2fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 2
            echo "    <div class=\"row\">

    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                if ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "formgroups", array(), "any", false, true), $context["code"], array(), "array", true, true)) {
                    // line 5
                    echo "        ";
                    $context["form_group"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formgroups", array()), $context["code"], array(), "array");
                    // line 6
                    echo "
        <div class=\"";
                    // line 7
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["form_group"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["form_group"] ?? null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
                    echo "\">
            <div class=\"";
                    // line 8
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["form_group"] ?? $this->getContext($context, "form_group")), "box_class", array()), "html", null, true);
                    echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["form_group"] ?? $this->getContext($context, "form_group")), "label", array()), array(), (($this->getAttribute(($context["form_group"] ?? $this->getContext($context, "form_group")), "translation_domain", array())) ? ($this->getAttribute(($context["form_group"] ?? $this->getContext($context, "form_group")), "translation_domain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                    echo "
                    </h4>
                </div>
                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                    // line 16
                    if ($this->getAttribute(($context["form_group"] ?? $this->getContext($context, "form_group")), "description", array())) {
                        // line 17
                        echo "                            <p>";
                        echo $this->getAttribute(($context["form_group"] ?? $this->getContext($context, "form_group")), "description", array());
                        echo "</p>
                        ";
                    }
                    // line 19
                    echo "
                        ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form_group"] ?? $this->getContext($context, "form_group")), "fields", array()));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                        if ($this->getAttribute(($context["form"] ?? null), $context["field_name"], array(), "array", true, true)) {
                            // line 21
                            echo "                            ";
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $context["field_name"], array(), "array"), 'row');
                            echo "
                        ";
                            $context['_iterated'] = true;
                        }
                    }
                    if (!$context['_iterated']) {
                        // line 23
                        echo "                            <em>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_form_group_empty", array(), "SonataAdminBundle"), "html", null, true);
                        echo "</em>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                    </div>
                </div>
            </div>
        </div>
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </div>
";
            
            $__internal_e304deb9ad0ac7f9c9753e3482bee843855c14197e7e26848d2d5f32802c2fad->leave($__internal_e304deb9ad0ac7f9c9753e3482bee843855c14197e7e26848d2d5f32802c2fad_prof);

            
            $__internal_6c71443a0871e38f274478a20e42f7ed095a331028b76532c5469f3fcefe8bf1->leave($__internal_6c71443a0871e38f274478a20e42f7ed095a331028b76532c5469f3fcefe8bf1_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 30,  122 => 25,  113 => 23,  104 => 21,  98 => 20,  95 => 19,  89 => 17,  87 => 16,  79 => 11,  73 => 8,  69 => 7,  66 => 6,  63 => 5,  58 => 4,  54 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_groups(admin, form, groups, has_tab) %}
    <div class=\"row\">

    {% for code in groups if admin.formgroups[code] is defined %}
        {% set form_group = admin.formgroups[code] %}

        <div class=\"{{ form_group.class|default('col-md-12') }}\">
            <div class=\"{{ form_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {{ form_group.label|trans({}, form_group.translation_domain ?: admin.translationDomain) }}
                    </h4>
                </div>
                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        {% if form_group.description %}
                            <p>{{ form_group.description|raw }}</p>
                        {% endif %}

                        {% for field_name in form_group.fields if form[field_name] is defined %}
                            {{ form_row(form[field_name])}}
                        {% else %}
                            <em>{{ 'message_form_group_empty'|trans({}, 'SonataAdminBundle') }}</em>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
    </div>
{% endmacro %}
", "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit_form_macro.html.twig");
    }
}
