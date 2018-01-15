<?php

/* form_table_layout.html.twig */
class __TwigTemplate_63ec99deaaff94de7d794046fed7f5d4ac7a904a65d7c9880362f3fe943a8049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35f4036efd6827f7e00642bbe9d8b4eed1627f0cde8c653c99569583cc13e0d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f4036efd6827f7e00642bbe9d8b4eed1627f0cde8c653c99569583cc13e0d4->enter($__internal_35f4036efd6827f7e00642bbe9d8b4eed1627f0cde8c653c99569583cc13e0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_4127cf6c364a519a49ab24c6c755302a54009825750e2728879da415a73fc56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4127cf6c364a519a49ab24c6c755302a54009825750e2728879da415a73fc56f->enter($__internal_4127cf6c364a519a49ab24c6c755302a54009825750e2728879da415a73fc56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_35f4036efd6827f7e00642bbe9d8b4eed1627f0cde8c653c99569583cc13e0d4->leave($__internal_35f4036efd6827f7e00642bbe9d8b4eed1627f0cde8c653c99569583cc13e0d4_prof);

        
        $__internal_4127cf6c364a519a49ab24c6c755302a54009825750e2728879da415a73fc56f->leave($__internal_4127cf6c364a519a49ab24c6c755302a54009825750e2728879da415a73fc56f_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4dd8f7c96104b450513b4beaca5542fe551d04439bd29c5960bd561f53e17253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd8f7c96104b450513b4beaca5542fe551d04439bd29c5960bd561f53e17253->enter($__internal_4dd8f7c96104b450513b4beaca5542fe551d04439bd29c5960bd561f53e17253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f5cca08b0e47eccf99bfe79b4fbd018e1cb3734debeefa24ee970300ce19fb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5cca08b0e47eccf99bfe79b4fbd018e1cb3734debeefa24ee970300ce19fb00->enter($__internal_f5cca08b0e47eccf99bfe79b4fbd018e1cb3734debeefa24ee970300ce19fb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_f5cca08b0e47eccf99bfe79b4fbd018e1cb3734debeefa24ee970300ce19fb00->leave($__internal_f5cca08b0e47eccf99bfe79b4fbd018e1cb3734debeefa24ee970300ce19fb00_prof);

        
        $__internal_4dd8f7c96104b450513b4beaca5542fe551d04439bd29c5960bd561f53e17253->leave($__internal_4dd8f7c96104b450513b4beaca5542fe551d04439bd29c5960bd561f53e17253_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e8541a01b3c06cdbc12d2975e791990075fcd0d4a17a08ad7e995889d6e5c755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8541a01b3c06cdbc12d2975e791990075fcd0d4a17a08ad7e995889d6e5c755->enter($__internal_e8541a01b3c06cdbc12d2975e791990075fcd0d4a17a08ad7e995889d6e5c755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c946675fa897f930b5cdd639553523a7bc3e06fc7d8e83bcdc7ffbb9a7892a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c946675fa897f930b5cdd639553523a7bc3e06fc7d8e83bcdc7ffbb9a7892a31->enter($__internal_c946675fa897f930b5cdd639553523a7bc3e06fc7d8e83bcdc7ffbb9a7892a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_c946675fa897f930b5cdd639553523a7bc3e06fc7d8e83bcdc7ffbb9a7892a31->leave($__internal_c946675fa897f930b5cdd639553523a7bc3e06fc7d8e83bcdc7ffbb9a7892a31_prof);

        
        $__internal_e8541a01b3c06cdbc12d2975e791990075fcd0d4a17a08ad7e995889d6e5c755->leave($__internal_e8541a01b3c06cdbc12d2975e791990075fcd0d4a17a08ad7e995889d6e5c755_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_d1ca296ed996cb865152853b0ed06fa15aa7610de1ead975170b53e6c2f6686e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ca296ed996cb865152853b0ed06fa15aa7610de1ead975170b53e6c2f6686e->enter($__internal_d1ca296ed996cb865152853b0ed06fa15aa7610de1ead975170b53e6c2f6686e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_4b6967ad68a0ff0477d9bac423d8840fd51401382261a2bdb67f04a27d6d6bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6967ad68a0ff0477d9bac423d8840fd51401382261a2bdb67f04a27d6d6bf8->enter($__internal_4b6967ad68a0ff0477d9bac423d8840fd51401382261a2bdb67f04a27d6d6bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_4b6967ad68a0ff0477d9bac423d8840fd51401382261a2bdb67f04a27d6d6bf8->leave($__internal_4b6967ad68a0ff0477d9bac423d8840fd51401382261a2bdb67f04a27d6d6bf8_prof);

        
        $__internal_d1ca296ed996cb865152853b0ed06fa15aa7610de1ead975170b53e6c2f6686e->leave($__internal_d1ca296ed996cb865152853b0ed06fa15aa7610de1ead975170b53e6c2f6686e_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_d9a11133a6babe67296427859ef83e9419203e918b110fa5ece0e901c3639e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a11133a6babe67296427859ef83e9419203e918b110fa5ece0e901c3639e73->enter($__internal_d9a11133a6babe67296427859ef83e9419203e918b110fa5ece0e901c3639e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_9810c0ff77192735a0d9cc7c832ff8839ac6d2633f94bd803bcc3990577dae07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9810c0ff77192735a0d9cc7c832ff8839ac6d2633f94bd803bcc3990577dae07->enter($__internal_9810c0ff77192735a0d9cc7c832ff8839ac6d2633f94bd803bcc3990577dae07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_9810c0ff77192735a0d9cc7c832ff8839ac6d2633f94bd803bcc3990577dae07->leave($__internal_9810c0ff77192735a0d9cc7c832ff8839ac6d2633f94bd803bcc3990577dae07_prof);

        
        $__internal_d9a11133a6babe67296427859ef83e9419203e918b110fa5ece0e901c3639e73->leave($__internal_d9a11133a6babe67296427859ef83e9419203e918b110fa5ece0e901c3639e73_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
