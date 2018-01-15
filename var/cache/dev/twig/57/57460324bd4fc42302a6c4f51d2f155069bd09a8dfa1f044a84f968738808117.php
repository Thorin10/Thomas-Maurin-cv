<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_cc53fc724fa155654e81dc5ae6dc6f037ec84734717b5417d895c42bae2ca660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_value' => array($this, 'block_field_value'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b86d7ffdde340625d829192cd8988ff5a0d8756ea32feed3b6f99cce7021329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b86d7ffdde340625d829192cd8988ff5a0d8756ea32feed3b6f99cce7021329->enter($__internal_1b86d7ffdde340625d829192cd8988ff5a0d8756ea32feed3b6f99cce7021329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        $__internal_77119317ff4bd27e7ae603792563bfcf39cec1c47a8f5f4324fa5bd6c21b29d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77119317ff4bd27e7ae603792563bfcf39cec1c47a8f5f4324fa5bd6c21b29d5->enter($__internal_77119317ff4bd27e7ae603792563bfcf39cec1c47a8f5f4324fa5bd6c21b29d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter(($context["is_diff"] ?? $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 31
        echo "</td>

";
        // line 33
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_1b86d7ffdde340625d829192cd8988ff5a0d8756ea32feed3b6f99cce7021329->leave($__internal_1b86d7ffdde340625d829192cd8988ff5a0d8756ea32feed3b6f99cce7021329_prof);

        
        $__internal_77119317ff4bd27e7ae603792563bfcf39cec1c47a8f5f4324fa5bd6c21b29d5->leave($__internal_77119317ff4bd27e7ae603792563bfcf39cec1c47a8f5f4324fa5bd6c21b29d5_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_00ad5dca03689d89eee379c3c39ebc556f80903ec29b9c18863188bc85db060e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ad5dca03689d89eee379c3c39ebc556f80903ec29b9c18863188bc85db060e->enter($__internal_00ad5dca03689d89eee379c3c39ebc556f80903ec29b9c18863188bc85db060e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        $__internal_7ca29124a8d43fb7a1bb08895ca9793737764060a3a13fc27f9b221030765ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca29124a8d43fb7a1bb08895ca9793737764060a3a13fc27f9b221030765ae6->enter($__internal_7ca29124a8d43fb7a1bb08895ca9793737764060a3a13fc27f9b221030765ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_7ca29124a8d43fb7a1bb08895ca9793737764060a3a13fc27f9b221030765ae6->leave($__internal_7ca29124a8d43fb7a1bb08895ca9793737764060a3a13fc27f9b221030765ae6_prof);

        
        $__internal_00ad5dca03689d89eee379c3c39ebc556f80903ec29b9c18863188bc85db060e->leave($__internal_00ad5dca03689d89eee379c3c39ebc556f80903ec29b9c18863188bc85db060e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_dc0cf36b5526a8fb8f9c116006980fd3e983a128331282e56e8ee71ce2aa61a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc0cf36b5526a8fb8f9c116006980fd3e983a128331282e56e8ee71ce2aa61a1->enter($__internal_dc0cf36b5526a8fb8f9c116006980fd3e983a128331282e56e8ee71ce2aa61a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9bf41eea6eb131e556bcbd092c92ed6e46a420f16b1d5a2c2809438cdc1f5df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf41eea6eb131e556bcbd092c92ed6e46a420f16b1d5a2c2809438cdc1f5df7->enter($__internal_9bf41eea6eb131e556bcbd092c92ed6e46a420f16b1d5a2c2809438cdc1f5df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "            ";
        $context["collapse"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array()), false)) : (false));
        // line 17
        echo "            ";
        if (($context["collapse"] ?? $this->getContext($context, "collapse"))) {
            // line 18
            echo "                <div class=\"sonata-readmore\"
                      data-readmore-height=\"";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collapse"] ?? null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                      data-readmore-more=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["collapse"] ?? null), "more", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                      data-readmore-less=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["collapse"] ?? null), "less", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                    ";
            // line 22
            $this->displayBlock('field_value', $context, $blocks);
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                ";
            $this->displayBlock("field_value", $context, $blocks);
            echo "
            ";
        }
        // line 29
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9bf41eea6eb131e556bcbd092c92ed6e46a420f16b1d5a2c2809438cdc1f5df7->leave($__internal_9bf41eea6eb131e556bcbd092c92ed6e46a420f16b1d5a2c2809438cdc1f5df7_prof);

        
        $__internal_dc0cf36b5526a8fb8f9c116006980fd3e983a128331282e56e8ee71ce2aa61a1->leave($__internal_dc0cf36b5526a8fb8f9c116006980fd3e983a128331282e56e8ee71ce2aa61a1_prof);

    }

    // line 22
    public function block_field_value($context, array $blocks = array())
    {
        $__internal_067c02c9138b0db5abfd7cd078626a1d3f928a4e0d04fe109684e1ac7691e72e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067c02c9138b0db5abfd7cd078626a1d3f928a4e0d04fe109684e1ac7691e72e->enter($__internal_067c02c9138b0db5abfd7cd078626a1d3f928a4e0d04fe109684e1ac7691e72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        $__internal_b1195dcc0770d0a4717115f1d3ab7e32d12dfcb781497a0bbab6021cd989f97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1195dcc0770d0a4717115f1d3ab7e32d12dfcb781497a0bbab6021cd989f97f->enter($__internal_b1195dcc0770d0a4717115f1d3ab7e32d12dfcb781497a0bbab6021cd989f97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        // line 23
        echo "                        ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo ($context["value"] ?? $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
        }
        // line 24
        echo "                    ";
        
        $__internal_b1195dcc0770d0a4717115f1d3ab7e32d12dfcb781497a0bbab6021cd989f97f->leave($__internal_b1195dcc0770d0a4717115f1d3ab7e32d12dfcb781497a0bbab6021cd989f97f_prof);

        
        $__internal_067c02c9138b0db5abfd7cd078626a1d3f928a4e0d04fe109684e1ac7691e72e->leave($__internal_067c02c9138b0db5abfd7cd078626a1d3f928a4e0d04fe109684e1ac7691e72e_prof);

    }

    // line 33
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_c9ed2d8e2b181eb3193181780befdaadf8cd3e11793510b0e89d5314b0191298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ed2d8e2b181eb3193181780befdaadf8cd3e11793510b0e89d5314b0191298->enter($__internal_c9ed2d8e2b181eb3193181780befdaadf8cd3e11793510b0e89d5314b0191298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        $__internal_5ddd6c793a4edd7dbc7b12e2e67f9c9cd7822782071afffd4b0cab5f75cbab0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ddd6c793a4edd7dbc7b12e2e67f9c9cd7822782071afffd4b0cab5f75cbab0a->enter($__internal_5ddd6c793a4edd7dbc7b12e2e67f9c9cd7822782071afffd4b0cab5f75cbab0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 34
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 35
            echo "        <td>
            ";
            // line 36
            $context["value"] = ($context["value_compare"] ?? $this->getContext($context, "value_compare"));
            // line 37
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_5ddd6c793a4edd7dbc7b12e2e67f9c9cd7822782071afffd4b0cab5f75cbab0a->leave($__internal_5ddd6c793a4edd7dbc7b12e2e67f9c9cd7822782071afffd4b0cab5f75cbab0a_prof);

        
        $__internal_c9ed2d8e2b181eb3193181780befdaadf8cd3e11793510b0e89d5314b0191298->leave($__internal_c9ed2d8e2b181eb3193181780befdaadf8cd3e11793510b0e89d5314b0191298_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 37,  170 => 36,  167 => 35,  164 => 34,  155 => 33,  145 => 24,  138 => 23,  129 => 22,  118 => 29,  112 => 27,  108 => 25,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  83 => 15,  74 => 14,  56 => 12,  46 => 33,  42 => 31,  40 => 14,  32 => 12,  29 => 11,);
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

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>
<td>
    {%- block field -%}
        {% spaceless %}
            {% set collapse = field_description.options.collapse|default(false) %}
            {% if collapse %}
                <div class=\"sonata-readmore\"
                      data-readmore-height=\"{{ collapse.height|default(40) }}\"
                      data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                      data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">
                    {% block field_value %}
                        {% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}
                    {% endblock %}
                </div>
            {% else %}
                {{ block('field_value') }}
            {% endif %}
        {% endspaceless %}
    {%- endblock -%}
</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_field.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_field.html.twig");
    }
}
