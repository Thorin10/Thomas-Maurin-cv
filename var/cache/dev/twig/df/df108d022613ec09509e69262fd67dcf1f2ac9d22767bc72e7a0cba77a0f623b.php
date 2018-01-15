<?php

/* SonataAdminBundle:CRUD:base_show_macro.html.twig */
class __TwigTemplate_02a730f1dfa2e3fa1aa54507bc4c886c9e71c6fe94e33b92ad1d6dfe6d65f539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a1bc0b34cca3aaeeb37d5b552237b02a2fb34cd31fc06065d0360ab94644c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1bc0b34cca3aaeeb37d5b552237b02a2fb34cd31fc06065d0360ab94644c01->enter($__internal_3a1bc0b34cca3aaeeb37d5b552237b02a2fb34cd31fc06065d0360ab94644c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        $__internal_5923859391db0a1e68390b42e785104b449037fbc2219618c41335033f68c8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5923859391db0a1e68390b42e785104b449037fbc2219618c41335033f68c8e7->enter($__internal_5923859391db0a1e68390b42e785104b449037fbc2219618c41335033f68c8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_row', $context, $blocks);
        
        $__internal_3a1bc0b34cca3aaeeb37d5b552237b02a2fb34cd31fc06065d0360ab94644c01->leave($__internal_3a1bc0b34cca3aaeeb37d5b552237b02a2fb34cd31fc06065d0360ab94644c01_prof);

        
        $__internal_5923859391db0a1e68390b42e785104b449037fbc2219618c41335033f68c8e7->leave($__internal_5923859391db0a1e68390b42e785104b449037fbc2219618c41335033f68c8e7_prof);

    }

    public function block_field_row($context, array $blocks = array())
    {
        $__internal_dd320fdefca5c6e5ccc1bfed3de6734695e06c9e1c586552422b3e7410df0bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd320fdefca5c6e5ccc1bfed3de6734695e06c9e1c586552422b3e7410df0bfd->enter($__internal_dd320fdefca5c6e5ccc1bfed3de6734695e06c9e1c586552422b3e7410df0bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_0d81c935a565baa0fd6980137e2f056a43dd3e143d852bbde801b2b58b8fcb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d81c935a565baa0fd6980137e2f056a43dd3e143d852bbde801b2b58b8fcb8b->enter($__internal_0d81c935a565baa0fd6980137e2f056a43dd3e143d852bbde801b2b58b8fcb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 11
            echo "        ";
            $context["show_group"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 12
            echo "
        <div class=\"";
            // line 13
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["show_group"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["show_group"] ?? null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo ((($context["no_padding"] ?? $this->getContext($context, "no_padding"))) ? ("nopadding") : (""));
            echo "\">
            <div class=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
            // line 17
            $this->displayBlock('show_title', $context, $blocks);
            // line 20
            echo "                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 26
                echo "                            ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 33
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0d81c935a565baa0fd6980137e2f056a43dd3e143d852bbde801b2b58b8fcb8b->leave($__internal_0d81c935a565baa0fd6980137e2f056a43dd3e143d852bbde801b2b58b8fcb8b_prof);

        
        $__internal_dd320fdefca5c6e5ccc1bfed3de6734695e06c9e1c586552422b3e7410df0bfd->leave($__internal_dd320fdefca5c6e5ccc1bfed3de6734695e06c9e1c586552422b3e7410df0bfd_prof);

    }

    // line 17
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_5e62cb77505141ce4f033392bd511bee63c79c0433adecfc08b709566104be71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e62cb77505141ce4f033392bd511bee63c79c0433adecfc08b709566104be71->enter($__internal_5e62cb77505141ce4f033392bd511bee63c79c0433adecfc08b709566104be71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_0bd7155193c15f0d36e7ba8716670f290995719614e72ba96bbd58ea5d37cad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd7155193c15f0d36e7ba8716670f290995719614e72ba96bbd58ea5d37cad3->enter($__internal_0bd7155193c15f0d36e7ba8716670f290995719614e72ba96bbd58ea5d37cad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 18
        echo "                            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "label", array()), array(), (($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "translation_domain", array())) ? ($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "translation_domain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                        ";
        
        $__internal_0bd7155193c15f0d36e7ba8716670f290995719614e72ba96bbd58ea5d37cad3->leave($__internal_0bd7155193c15f0d36e7ba8716670f290995719614e72ba96bbd58ea5d37cad3_prof);

        
        $__internal_5e62cb77505141ce4f033392bd511bee63c79c0433adecfc08b709566104be71->leave($__internal_5e62cb77505141ce4f033392bd511bee63c79c0433adecfc08b709566104be71_prof);

    }

    // line 26
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_ca8ebbdb4dce3c3b2963a4085b3be157c4acb44f3890c1e63843a4b56154a72e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8ebbdb4dce3c3b2963a4085b3be157c4acb44f3890c1e63843a4b56154a72e->enter($__internal_ca8ebbdb4dce3c3b2963a4085b3be157c4acb44f3890c1e63843a4b56154a72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_8324c74061efd6983670b396444d0e44a2650aa5ff9ccaddacbe9095e4c7f661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8324c74061efd6983670b396444d0e44a2650aa5ff9ccaddacbe9095e4c7f661->enter($__internal_8324c74061efd6983670b396444d0e44a2650aa5ff9ccaddacbe9095e4c7f661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 27
        echo "                                <tr class=\"sonata-ba-view-container\">
                                    ";
        // line 28
        if ($this->getAttribute(($context["elements"] ?? null), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 29
            echo "                                        ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute(($context["elements"] ?? $this->getContext($context, "elements")), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array"), ($context["object"] ?? $this->getContext($context, "object")));
            echo "
                                    ";
        }
        // line 31
        echo "                                </tr>
                            ";
        
        $__internal_8324c74061efd6983670b396444d0e44a2650aa5ff9ccaddacbe9095e4c7f661->leave($__internal_8324c74061efd6983670b396444d0e44a2650aa5ff9ccaddacbe9095e4c7f661_prof);

        
        $__internal_ca8ebbdb4dce3c3b2963a4085b3be157c4acb44f3890c1e63843a4b56154a72e->leave($__internal_ca8ebbdb4dce3c3b2963a4085b3be157c4acb44f3890c1e63843a4b56154a72e_prof);

    }

    // line 3
    public function getrender_groups($__admin__ = null, $__object__ = null, $__elements__ = null, $__groups__ = null, $__has_tab__ = null, $__no_padding__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "object" => $__object__,
            "elements" => $__elements__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "no_padding" => $__no_padding__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c9aff03cc16fca7c3cbf934bb3a71b9f813799fd79911d87a37c887ed3614a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c9aff03cc16fca7c3cbf934bb3a71b9f813799fd79911d87a37c887ed3614a40->enter($__internal_c9aff03cc16fca7c3cbf934bb3a71b9f813799fd79911d87a37c887ed3614a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            $__internal_09828d541caa0458880ceff061ed0c772404991f4f2dc1012b3681aeff504e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_09828d541caa0458880ceff061ed0c772404991f4f2dc1012b3681aeff504e96->enter($__internal_09828d541caa0458880ceff061ed0c772404991f4f2dc1012b3681aeff504e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 4
            echo "    <div class=\"row\">
        ";
            // line 5
            $this->displayBlock("field_row", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_09828d541caa0458880ceff061ed0c772404991f4f2dc1012b3681aeff504e96->leave($__internal_09828d541caa0458880ceff061ed0c772404991f4f2dc1012b3681aeff504e96_prof);

            
            $__internal_c9aff03cc16fca7c3cbf934bb3a71b9f813799fd79911d87a37c887ed3614a40->leave($__internal_c9aff03cc16fca7c3cbf934bb3a71b9f813799fd79911d87a37c887ed3614a40_prof);

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
        return "SonataAdminBundle:CRUD:base_show_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 5,  234 => 4,  211 => 3,  200 => 31,  194 => 29,  192 => 28,  189 => 27,  180 => 26,  167 => 18,  158 => 17,  131 => 34,  117 => 33,  114 => 26,  97 => 25,  90 => 20,  88 => 17,  82 => 14,  76 => 13,  73 => 12,  70 => 11,  52 => 10,  34 => 9,  31 => 8,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# NEXT_MAJOR: remove this template #}

{% macro render_groups(admin, object, elements, groups, has_tab, no_padding = false) %}
    <div class=\"row\">
        {{ block('field_row') }}
    </div>
{% endmacro %}

{% block field_row %}
    {% for code in groups %}
        {% set show_group = admin.showgroups[code] %}

        <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding ? 'nopadding' }}\">
            <div class=\"{{ show_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {% block show_title %}
                            {{ show_group.label|trans({}, show_group.translation_domain ?: admin.translationDomain) }}
                        {% endblock %}
                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        {% for field_name in show_group.fields %}
                            {% block show_field %}
                                <tr class=\"sonata-ba-view-container\">
                                    {% if elements[field_name] is defined %}
                                        {{ elements[field_name]|render_view_element(object)}}
                                    {% endif %}
                                </tr>
                            {% endblock %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_macro.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_macro.html.twig");
    }
}
