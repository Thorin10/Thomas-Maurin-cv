<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_421fc7e3b8f46b2dfce631bac10ad3a7da71843c18bb5285d83b7a73195fc514 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d96c3d5accc69743c3030fa67b24ff2ac6aa8aebd15668b3f327189cddc1f09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96c3d5accc69743c3030fa67b24ff2ac6aa8aebd15668b3f327189cddc1f09d->enter($__internal_d96c3d5accc69743c3030fa67b24ff2ac6aa8aebd15668b3f327189cddc1f09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        $__internal_1a311e20bafe36b1e158dc76bad6319a9f488f651b18a05c0256a186a47359c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a311e20bafe36b1e158dc76bad6319a9f488f651b18a05c0256a186a47359c5->enter($__internal_1a311e20bafe36b1e158dc76bad6319a9f488f651b18a05c0256a186a47359c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_d96c3d5accc69743c3030fa67b24ff2ac6aa8aebd15668b3f327189cddc1f09d->leave($__internal_d96c3d5accc69743c3030fa67b24ff2ac6aa8aebd15668b3f327189cddc1f09d_prof);

        
        $__internal_1a311e20bafe36b1e158dc76bad6319a9f488f651b18a05c0256a186a47359c5->leave($__internal_1a311e20bafe36b1e158dc76bad6319a9f488f651b18a05c0256a186a47359c5_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_34ac475d493c37595a9258ed8300d428199b51b557b0e473b6b7dacee7765167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ac475d493c37595a9258ed8300d428199b51b557b0e473b6b7dacee7765167->enter($__internal_34ac475d493c37595a9258ed8300d428199b51b557b0e473b6b7dacee7765167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        $__internal_f595817f4d9561ed58ff17ff8fddb4405ec75346b74cf127b36e2eb86c67996d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f595817f4d9561ed58ff17ff8fddb4405ec75346b74cf127b36e2eb86c67996d->enter($__internal_f595817f4d9561ed58ff17ff8fddb4405ec75346b74cf127b36e2eb86c67996d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f595817f4d9561ed58ff17ff8fddb4405ec75346b74cf127b36e2eb86c67996d->leave($__internal_f595817f4d9561ed58ff17ff8fddb4405ec75346b74cf127b36e2eb86c67996d_prof);

        
        $__internal_34ac475d493c37595a9258ed8300d428199b51b557b0e473b6b7dacee7765167->leave($__internal_34ac475d493c37595a9258ed8300d428199b51b557b0e473b6b7dacee7765167_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  51 => 14,  49 => 13,  44 => 12,  26 => 11,);
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
{% block sonata_type_color_selector_widget %}
    {{ block('choice_widget') }}
    {% spaceless %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#{{ id }}').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_color_selector_widget %}
", "SonataCoreBundle:Form:colorpicker.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/core-bundle/Resources/views/Form/colorpicker.html.twig");
    }
}
