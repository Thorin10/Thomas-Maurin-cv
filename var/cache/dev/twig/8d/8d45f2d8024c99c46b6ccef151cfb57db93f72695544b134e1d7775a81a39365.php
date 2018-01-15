<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_fc1c4472afd1e88091e0bde0fee2a6e2951c0dd3376030c1e54ebbebd0e7d2a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13b97f644e536f84821dc15dd4b18175e1c3fedf956e098e44a1a6b45180e588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b97f644e536f84821dc15dd4b18175e1c3fedf956e098e44a1a6b45180e588->enter($__internal_13b97f644e536f84821dc15dd4b18175e1c3fedf956e098e44a1a6b45180e588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_f593828ca9a7033a334c742e9ded3a78002b60a572d0c36b0d4bfdb812d8d215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f593828ca9a7033a334c742e9ded3a78002b60a572d0c36b0d4bfdb812d8d215->enter($__internal_f593828ca9a7033a334c742e9ded3a78002b60a572d0c36b0d4bfdb812d8d215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b97f644e536f84821dc15dd4b18175e1c3fedf956e098e44a1a6b45180e588->leave($__internal_13b97f644e536f84821dc15dd4b18175e1c3fedf956e098e44a1a6b45180e588_prof);

        
        $__internal_f593828ca9a7033a334c742e9ded3a78002b60a572d0c36b0d4bfdb812d8d215->leave($__internal_f593828ca9a7033a334c742e9ded3a78002b60a572d0c36b0d4bfdb812d8d215_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f351aecbf5516e8ae5b74c17dc45e3b8810614007efb91da3d6319e23395326f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f351aecbf5516e8ae5b74c17dc45e3b8810614007efb91da3d6319e23395326f->enter($__internal_f351aecbf5516e8ae5b74c17dc45e3b8810614007efb91da3d6319e23395326f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_ad6acc701d6e125b8f7ebb12917e79d4dc5fb422beff88244ddea1814187dd55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6acc701d6e125b8f7ebb12917e79d4dc5fb422beff88244ddea1814187dd55->enter($__internal_ad6acc701d6e125b8f7ebb12917e79d4dc5fb422beff88244ddea1814187dd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ad6acc701d6e125b8f7ebb12917e79d4dc5fb422beff88244ddea1814187dd55->leave($__internal_ad6acc701d6e125b8f7ebb12917e79d4dc5fb422beff88244ddea1814187dd55_prof);

        
        $__internal_f351aecbf5516e8ae5b74c17dc45e3b8810614007efb91da3d6319e23395326f->leave($__internal_f351aecbf5516e8ae5b74c17dc45e3b8810614007efb91da3d6319e23395326f_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_0202912aa71e574d254a1d96b1dc69a4142cfaadbf8de7b657c4a05acfe9b1a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0202912aa71e574d254a1d96b1dc69a4142cfaadbf8de7b657c4a05acfe9b1a5->enter($__internal_0202912aa71e574d254a1d96b1dc69a4142cfaadbf8de7b657c4a05acfe9b1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_f8e29c8b353bab1fdb4ef82c9dfba364ffb00765201a95f77d36b75ca4fdd0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e29c8b353bab1fdb4ef82c9dfba364ffb00765201a95f77d36b75ca4fdd0ac->enter($__internal_f8e29c8b353bab1fdb4ef82c9dfba364ffb00765201a95f77d36b75ca4fdd0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_f8e29c8b353bab1fdb4ef82c9dfba364ffb00765201a95f77d36b75ca4fdd0ac->leave($__internal_f8e29c8b353bab1fdb4ef82c9dfba364ffb00765201a95f77d36b75ca4fdd0ac_prof);

        
        $__internal_0202912aa71e574d254a1d96b1dc69a4142cfaadbf8de7b657c4a05acfe9b1a5->leave($__internal_0202912aa71e574d254a1d96b1dc69a4142cfaadbf8de7b657c4a05acfe9b1a5_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_3167cdd6a8c7dd41acbd3f7aeeb26195d058cacdd6157eaf8c8fe460c5a26973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3167cdd6a8c7dd41acbd3f7aeeb26195d058cacdd6157eaf8c8fe460c5a26973->enter($__internal_3167cdd6a8c7dd41acbd3f7aeeb26195d058cacdd6157eaf8c8fe460c5a26973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e9d937a165176dc4f614101a133609e79e9e488de999203529e3b91699a78c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d937a165176dc4f614101a133609e79e9e488de999203529e3b91699a78c5a->enter($__internal_e9d937a165176dc4f614101a133609e79e9e488de999203529e3b91699a78c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e9d937a165176dc4f614101a133609e79e9e488de999203529e3b91699a78c5a->leave($__internal_e9d937a165176dc4f614101a133609e79e9e488de999203529e3b91699a78c5a_prof);

        
        $__internal_3167cdd6a8c7dd41acbd3f7aeeb26195d058cacdd6157eaf8c8fe460c5a26973->leave($__internal_3167cdd6a8c7dd41acbd3f7aeeb26195d058cacdd6157eaf8c8fe460c5a26973_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d4ea6668e4dc20cfa4ac3268cad6bd1edb50e6478c5da055cd59ddf928aa6475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ea6668e4dc20cfa4ac3268cad6bd1edb50e6478c5da055cd59ddf928aa6475->enter($__internal_d4ea6668e4dc20cfa4ac3268cad6bd1edb50e6478c5da055cd59ddf928aa6475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_36570edb23512d7192b55bade191d59d43d9ccd7e88f8365499601710e8faa64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36570edb23512d7192b55bade191d59d43d9ccd7e88f8365499601710e8faa64->enter($__internal_36570edb23512d7192b55bade191d59d43d9ccd7e88f8365499601710e8faa64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_36570edb23512d7192b55bade191d59d43d9ccd7e88f8365499601710e8faa64->leave($__internal_36570edb23512d7192b55bade191d59d43d9ccd7e88f8365499601710e8faa64_prof);

        
        $__internal_d4ea6668e4dc20cfa4ac3268cad6bd1edb50e6478c5da055cd59ddf928aa6475->leave($__internal_d4ea6668e4dc20cfa4ac3268cad6bd1edb50e6478c5da055cd59ddf928aa6475_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_be3502ffd4150973073e07175004dbe23f6779b1969418a8174fdb80f80db3c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be3502ffd4150973073e07175004dbe23f6779b1969418a8174fdb80f80db3c7->enter($__internal_be3502ffd4150973073e07175004dbe23f6779b1969418a8174fdb80f80db3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_657d4a3b22f0cf9b616c18ce1d759bf17e425ca26caf69b2769b1d15859ebc06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657d4a3b22f0cf9b616c18ce1d759bf17e425ca26caf69b2769b1d15859ebc06->enter($__internal_657d4a3b22f0cf9b616c18ce1d759bf17e425ca26caf69b2769b1d15859ebc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_657d4a3b22f0cf9b616c18ce1d759bf17e425ca26caf69b2769b1d15859ebc06->leave($__internal_657d4a3b22f0cf9b616c18ce1d759bf17e425ca26caf69b2769b1d15859ebc06_prof);

        
        $__internal_be3502ffd4150973073e07175004dbe23f6779b1969418a8174fdb80f80db3c7->leave($__internal_be3502ffd4150973073e07175004dbe23f6779b1969418a8174fdb80f80db3c7_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_ca96a624660f8063fe398046b08f5982fb6ccb9fc247e3798f3bf1190df33fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca96a624660f8063fe398046b08f5982fb6ccb9fc247e3798f3bf1190df33fd4->enter($__internal_ca96a624660f8063fe398046b08f5982fb6ccb9fc247e3798f3bf1190df33fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_4b9fe069e3a36bea8935bf6a2661d76a36650666a3c8c7ae55d56e57f300396c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9fe069e3a36bea8935bf6a2661d76a36650666a3c8c7ae55d56e57f300396c->enter($__internal_4b9fe069e3a36bea8935bf6a2661d76a36650666a3c8c7ae55d56e57f300396c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_4b9fe069e3a36bea8935bf6a2661d76a36650666a3c8c7ae55d56e57f300396c->leave($__internal_4b9fe069e3a36bea8935bf6a2661d76a36650666a3c8c7ae55d56e57f300396c_prof);

        
        $__internal_ca96a624660f8063fe398046b08f5982fb6ccb9fc247e3798f3bf1190df33fd4->leave($__internal_ca96a624660f8063fe398046b08f5982fb6ccb9fc247e3798f3bf1190df33fd4_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_2ecf18abb0641d03b16ecb4649f73470fdb4b21acb84a6411f528274f3840fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ecf18abb0641d03b16ecb4649f73470fdb4b21acb84a6411f528274f3840fb4->enter($__internal_2ecf18abb0641d03b16ecb4649f73470fdb4b21acb84a6411f528274f3840fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_615c2813a33cdff663b8bb40dbfcc6be727d7266e16e7b33343e1f43d7d224f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615c2813a33cdff663b8bb40dbfcc6be727d7266e16e7b33343e1f43d7d224f1->enter($__internal_615c2813a33cdff663b8bb40dbfcc6be727d7266e16e7b33343e1f43d7d224f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_615c2813a33cdff663b8bb40dbfcc6be727d7266e16e7b33343e1f43d7d224f1->leave($__internal_615c2813a33cdff663b8bb40dbfcc6be727d7266e16e7b33343e1f43d7d224f1_prof);

        
        $__internal_2ecf18abb0641d03b16ecb4649f73470fdb4b21acb84a6411f528274f3840fb4->leave($__internal_2ecf18abb0641d03b16ecb4649f73470fdb4b21acb84a6411f528274f3840fb4_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_c5c1f107408bdf13f6df85f7227af567cd160bc99aec1aabcfd2bc32a2cf3185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c1f107408bdf13f6df85f7227af567cd160bc99aec1aabcfd2bc32a2cf3185->enter($__internal_c5c1f107408bdf13f6df85f7227af567cd160bc99aec1aabcfd2bc32a2cf3185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_1a0b6d979e84b7696015959195ddd6620d5c690976140e9c7844d2a5967dae6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0b6d979e84b7696015959195ddd6620d5c690976140e9c7844d2a5967dae6a->enter($__internal_1a0b6d979e84b7696015959195ddd6620d5c690976140e9c7844d2a5967dae6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_1a0b6d979e84b7696015959195ddd6620d5c690976140e9c7844d2a5967dae6a->leave($__internal_1a0b6d979e84b7696015959195ddd6620d5c690976140e9c7844d2a5967dae6a_prof);

        
        $__internal_c5c1f107408bdf13f6df85f7227af567cd160bc99aec1aabcfd2bc32a2cf3185->leave($__internal_c5c1f107408bdf13f6df85f7227af567cd160bc99aec1aabcfd2bc32a2cf3185_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_9fb3fd1f53e2349639592cb52f1c8fdb0afc56b1fb1024895b5cb1fe95886864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb3fd1f53e2349639592cb52f1c8fdb0afc56b1fb1024895b5cb1fe95886864->enter($__internal_9fb3fd1f53e2349639592cb52f1c8fdb0afc56b1fb1024895b5cb1fe95886864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d315794fd4dc92a0e7b26579daca3283fa78032c3561b764519cff490ae1248c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d315794fd4dc92a0e7b26579daca3283fa78032c3561b764519cff490ae1248c->enter($__internal_d315794fd4dc92a0e7b26579daca3283fa78032c3561b764519cff490ae1248c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_d315794fd4dc92a0e7b26579daca3283fa78032c3561b764519cff490ae1248c->leave($__internal_d315794fd4dc92a0e7b26579daca3283fa78032c3561b764519cff490ae1248c_prof);

        
        $__internal_9fb3fd1f53e2349639592cb52f1c8fdb0afc56b1fb1024895b5cb1fe95886864->leave($__internal_9fb3fd1f53e2349639592cb52f1c8fdb0afc56b1fb1024895b5cb1fe95886864_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_35af32ca905599256f2ef0462632fcd76488f21020ac3744dfdec8bf53744eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35af32ca905599256f2ef0462632fcd76488f21020ac3744dfdec8bf53744eb8->enter($__internal_35af32ca905599256f2ef0462632fcd76488f21020ac3744dfdec8bf53744eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_ea2b2033bf3a576b979a7e01648bf4ef5d7c2aed097c477b133dab8c9220ed62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2b2033bf3a576b979a7e01648bf4ef5d7c2aed097c477b133dab8c9220ed62->enter($__internal_ea2b2033bf3a576b979a7e01648bf4ef5d7c2aed097c477b133dab8c9220ed62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_ea2b2033bf3a576b979a7e01648bf4ef5d7c2aed097c477b133dab8c9220ed62->leave($__internal_ea2b2033bf3a576b979a7e01648bf4ef5d7c2aed097c477b133dab8c9220ed62_prof);

        
        $__internal_35af32ca905599256f2ef0462632fcd76488f21020ac3744dfdec8bf53744eb8->leave($__internal_35af32ca905599256f2ef0462632fcd76488f21020ac3744dfdec8bf53744eb8_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d86e50516073c8868b300d34c5edc985822243802d0284a699eae3263a5964f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86e50516073c8868b300d34c5edc985822243802d0284a699eae3263a5964f5->enter($__internal_d86e50516073c8868b300d34c5edc985822243802d0284a699eae3263a5964f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9c1984ba2b1d7eca79e36797692555ec98c64fb53597ea5293d1fea21425e924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1984ba2b1d7eca79e36797692555ec98c64fb53597ea5293d1fea21425e924->enter($__internal_9c1984ba2b1d7eca79e36797692555ec98c64fb53597ea5293d1fea21425e924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_9c1984ba2b1d7eca79e36797692555ec98c64fb53597ea5293d1fea21425e924->leave($__internal_9c1984ba2b1d7eca79e36797692555ec98c64fb53597ea5293d1fea21425e924_prof);

        
        $__internal_d86e50516073c8868b300d34c5edc985822243802d0284a699eae3263a5964f5->leave($__internal_d86e50516073c8868b300d34c5edc985822243802d0284a699eae3263a5964f5_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_ac258d1c09fbd497873ae1c146ee92fe43015f70f80b21a5ae7e737f83afd465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac258d1c09fbd497873ae1c146ee92fe43015f70f80b21a5ae7e737f83afd465->enter($__internal_ac258d1c09fbd497873ae1c146ee92fe43015f70f80b21a5ae7e737f83afd465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_aad6b91740eab5eebf5eb5a77715cee5edc54e5e3174d3e3cdfedd674bee9eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad6b91740eab5eebf5eb5a77715cee5edc54e5e3174d3e3cdfedd674bee9eda->enter($__internal_aad6b91740eab5eebf5eb5a77715cee5edc54e5e3174d3e3cdfedd674bee9eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_aad6b91740eab5eebf5eb5a77715cee5edc54e5e3174d3e3cdfedd674bee9eda->leave($__internal_aad6b91740eab5eebf5eb5a77715cee5edc54e5e3174d3e3cdfedd674bee9eda_prof);

        
        $__internal_ac258d1c09fbd497873ae1c146ee92fe43015f70f80b21a5ae7e737f83afd465->leave($__internal_ac258d1c09fbd497873ae1c146ee92fe43015f70f80b21a5ae7e737f83afd465_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2213aace65a97514b8b78d3a311f35ad780f7c1befa1b805d50694e62693d8c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2213aace65a97514b8b78d3a311f35ad780f7c1befa1b805d50694e62693d8c6->enter($__internal_2213aace65a97514b8b78d3a311f35ad780f7c1befa1b805d50694e62693d8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_127e811f9d898ab21b4af4a05ca52fb46245aae2ab054de06f7b4eaf4e4bc1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127e811f9d898ab21b4af4a05ca52fb46245aae2ab054de06f7b4eaf4e4bc1d4->enter($__internal_127e811f9d898ab21b4af4a05ca52fb46245aae2ab054de06f7b4eaf4e4bc1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_127e811f9d898ab21b4af4a05ca52fb46245aae2ab054de06f7b4eaf4e4bc1d4->leave($__internal_127e811f9d898ab21b4af4a05ca52fb46245aae2ab054de06f7b4eaf4e4bc1d4_prof);

        
        $__internal_2213aace65a97514b8b78d3a311f35ad780f7c1befa1b805d50694e62693d8c6->leave($__internal_2213aace65a97514b8b78d3a311f35ad780f7c1befa1b805d50694e62693d8c6_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_ac19f06340d8b25754f2ed75d5ac32e7ceecbe28281285226a3237a6766567d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac19f06340d8b25754f2ed75d5ac32e7ceecbe28281285226a3237a6766567d8->enter($__internal_ac19f06340d8b25754f2ed75d5ac32e7ceecbe28281285226a3237a6766567d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_5046c887b8938dea8f83d5a0063f257655486b8e03dea67c29e5b5398716b3a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5046c887b8938dea8f83d5a0063f257655486b8e03dea67c29e5b5398716b3a5->enter($__internal_5046c887b8938dea8f83d5a0063f257655486b8e03dea67c29e5b5398716b3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_5046c887b8938dea8f83d5a0063f257655486b8e03dea67c29e5b5398716b3a5->leave($__internal_5046c887b8938dea8f83d5a0063f257655486b8e03dea67c29e5b5398716b3a5_prof);

        
        $__internal_ac19f06340d8b25754f2ed75d5ac32e7ceecbe28281285226a3237a6766567d8->leave($__internal_ac19f06340d8b25754f2ed75d5ac32e7ceecbe28281285226a3237a6766567d8_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_c6a642c6b5480c79f498c3481b7a839490d2e322abe6ccff83677152cff2b4d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a642c6b5480c79f498c3481b7a839490d2e322abe6ccff83677152cff2b4d1->enter($__internal_c6a642c6b5480c79f498c3481b7a839490d2e322abe6ccff83677152cff2b4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_c5227ed13bb664631adcce8fd38625783276ca35111e89a8641ddd81eafb4238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5227ed13bb664631adcce8fd38625783276ca35111e89a8641ddd81eafb4238->enter($__internal_c5227ed13bb664631adcce8fd38625783276ca35111e89a8641ddd81eafb4238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c5227ed13bb664631adcce8fd38625783276ca35111e89a8641ddd81eafb4238->leave($__internal_c5227ed13bb664631adcce8fd38625783276ca35111e89a8641ddd81eafb4238_prof);

        
        $__internal_c6a642c6b5480c79f498c3481b7a839490d2e322abe6ccff83677152cff2b4d1->leave($__internal_c6a642c6b5480c79f498c3481b7a839490d2e322abe6ccff83677152cff2b4d1_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_cdd7c71f309a089e4aeba2a63e5a07a1f88a612812ab9c5193ecaf488d3b11ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd7c71f309a089e4aeba2a63e5a07a1f88a612812ab9c5193ecaf488d3b11ef->enter($__internal_cdd7c71f309a089e4aeba2a63e5a07a1f88a612812ab9c5193ecaf488d3b11ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_3c19a0dea370779d9d14a98d65de8bb7de8eddb1be3ca251451cb96cd694762e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c19a0dea370779d9d14a98d65de8bb7de8eddb1be3ca251451cb96cd694762e->enter($__internal_3c19a0dea370779d9d14a98d65de8bb7de8eddb1be3ca251451cb96cd694762e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3c19a0dea370779d9d14a98d65de8bb7de8eddb1be3ca251451cb96cd694762e->leave($__internal_3c19a0dea370779d9d14a98d65de8bb7de8eddb1be3ca251451cb96cd694762e_prof);

        
        $__internal_cdd7c71f309a089e4aeba2a63e5a07a1f88a612812ab9c5193ecaf488d3b11ef->leave($__internal_cdd7c71f309a089e4aeba2a63e5a07a1f88a612812ab9c5193ecaf488d3b11ef_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_9d3a23880e92a6fea1eaf9fcf535fb25b89972059d24326cff3529345077f5cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3a23880e92a6fea1eaf9fcf535fb25b89972059d24326cff3529345077f5cb->enter($__internal_9d3a23880e92a6fea1eaf9fcf535fb25b89972059d24326cff3529345077f5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_0da9a29ad8d360689e149c4556bc1f909de6619a2a85707a0fa210c2bbd0ca75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da9a29ad8d360689e149c4556bc1f909de6619a2a85707a0fa210c2bbd0ca75->enter($__internal_0da9a29ad8d360689e149c4556bc1f909de6619a2a85707a0fa210c2bbd0ca75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_0da9a29ad8d360689e149c4556bc1f909de6619a2a85707a0fa210c2bbd0ca75->leave($__internal_0da9a29ad8d360689e149c4556bc1f909de6619a2a85707a0fa210c2bbd0ca75_prof);

        
        $__internal_9d3a23880e92a6fea1eaf9fcf535fb25b89972059d24326cff3529345077f5cb->leave($__internal_9d3a23880e92a6fea1eaf9fcf535fb25b89972059d24326cff3529345077f5cb_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_165b985a9e0c5a256b61fb30872d6833035d4934a98cea5f76b3c7d5a3ddd674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_165b985a9e0c5a256b61fb30872d6833035d4934a98cea5f76b3c7d5a3ddd674->enter($__internal_165b985a9e0c5a256b61fb30872d6833035d4934a98cea5f76b3c7d5a3ddd674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_952f12102043a6659d23e809d238ca1c1de4a2552ffe38cd0432690636adb1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952f12102043a6659d23e809d238ca1c1de4a2552ffe38cd0432690636adb1a9->enter($__internal_952f12102043a6659d23e809d238ca1c1de4a2552ffe38cd0432690636adb1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_952f12102043a6659d23e809d238ca1c1de4a2552ffe38cd0432690636adb1a9->leave($__internal_952f12102043a6659d23e809d238ca1c1de4a2552ffe38cd0432690636adb1a9_prof);

        
        $__internal_165b985a9e0c5a256b61fb30872d6833035d4934a98cea5f76b3c7d5a3ddd674->leave($__internal_165b985a9e0c5a256b61fb30872d6833035d4934a98cea5f76b3c7d5a3ddd674_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_bb804d5f3f2b1b4bb9883395a7687d98de4463aa861f9587926cfb682fd783ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb804d5f3f2b1b4bb9883395a7687d98de4463aa861f9587926cfb682fd783ee->enter($__internal_bb804d5f3f2b1b4bb9883395a7687d98de4463aa861f9587926cfb682fd783ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_1da43f6de4fd89a2d10d6d089a9c846674ce24d04420d82463fa4843f41d99bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da43f6de4fd89a2d10d6d089a9c846674ce24d04420d82463fa4843f41d99bc->enter($__internal_1da43f6de4fd89a2d10d6d089a9c846674ce24d04420d82463fa4843f41d99bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1da43f6de4fd89a2d10d6d089a9c846674ce24d04420d82463fa4843f41d99bc->leave($__internal_1da43f6de4fd89a2d10d6d089a9c846674ce24d04420d82463fa4843f41d99bc_prof);

        
        $__internal_bb804d5f3f2b1b4bb9883395a7687d98de4463aa861f9587926cfb682fd783ee->leave($__internal_bb804d5f3f2b1b4bb9883395a7687d98de4463aa861f9587926cfb682fd783ee_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_a8a5d8392f6e9c890460d933a078dbf47e964bb43599655b654811b8b653ff4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a5d8392f6e9c890460d933a078dbf47e964bb43599655b654811b8b653ff4f->enter($__internal_a8a5d8392f6e9c890460d933a078dbf47e964bb43599655b654811b8b653ff4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_ac4da8428cd1abdc2f23c92bb8ddacfbce21b8102b55ecd21929b12c1366a2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4da8428cd1abdc2f23c92bb8ddacfbce21b8102b55ecd21929b12c1366a2a0->enter($__internal_ac4da8428cd1abdc2f23c92bb8ddacfbce21b8102b55ecd21929b12c1366a2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ac4da8428cd1abdc2f23c92bb8ddacfbce21b8102b55ecd21929b12c1366a2a0->leave($__internal_ac4da8428cd1abdc2f23c92bb8ddacfbce21b8102b55ecd21929b12c1366a2a0_prof);

        
        $__internal_a8a5d8392f6e9c890460d933a078dbf47e964bb43599655b654811b8b653ff4f->leave($__internal_a8a5d8392f6e9c890460d933a078dbf47e964bb43599655b654811b8b653ff4f_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c6623188bd7d4bd996857503e9dc181a7986edb3338a98478ed197b01505b210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6623188bd7d4bd996857503e9dc181a7986edb3338a98478ed197b01505b210->enter($__internal_c6623188bd7d4bd996857503e9dc181a7986edb3338a98478ed197b01505b210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_463bd3a9fbbd91475d56865a8ac99285bc389b37d86e3a492930ec04213a19cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463bd3a9fbbd91475d56865a8ac99285bc389b37d86e3a492930ec04213a19cb->enter($__internal_463bd3a9fbbd91475d56865a8ac99285bc389b37d86e3a492930ec04213a19cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_463bd3a9fbbd91475d56865a8ac99285bc389b37d86e3a492930ec04213a19cb->leave($__internal_463bd3a9fbbd91475d56865a8ac99285bc389b37d86e3a492930ec04213a19cb_prof);

        
        $__internal_c6623188bd7d4bd996857503e9dc181a7986edb3338a98478ed197b01505b210->leave($__internal_c6623188bd7d4bd996857503e9dc181a7986edb3338a98478ed197b01505b210_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_24f7e6c5047633bf6dfc7194bd76afb61a520a0ab8a067d286deb7faa09a53da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f7e6c5047633bf6dfc7194bd76afb61a520a0ab8a067d286deb7faa09a53da->enter($__internal_24f7e6c5047633bf6dfc7194bd76afb61a520a0ab8a067d286deb7faa09a53da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_673727e7ccbf83ce95f591cc2e23e0430a8bd9e9e2511eb223fec58c1574b02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673727e7ccbf83ce95f591cc2e23e0430a8bd9e9e2511eb223fec58c1574b02d->enter($__internal_673727e7ccbf83ce95f591cc2e23e0430a8bd9e9e2511eb223fec58c1574b02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_673727e7ccbf83ce95f591cc2e23e0430a8bd9e9e2511eb223fec58c1574b02d->leave($__internal_673727e7ccbf83ce95f591cc2e23e0430a8bd9e9e2511eb223fec58c1574b02d_prof);

        
        $__internal_24f7e6c5047633bf6dfc7194bd76afb61a520a0ab8a067d286deb7faa09a53da->leave($__internal_24f7e6c5047633bf6dfc7194bd76afb61a520a0ab8a067d286deb7faa09a53da_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_afa1d808397b716d0c498bc2f5d32ffed8b2e06216d97e2bc206904a49e107b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa1d808397b716d0c498bc2f5d32ffed8b2e06216d97e2bc206904a49e107b4->enter($__internal_afa1d808397b716d0c498bc2f5d32ffed8b2e06216d97e2bc206904a49e107b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_eb1a9b1605cb37c6ba1051ba942de092c1b69baa86b2370c90b4a886863a6a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1a9b1605cb37c6ba1051ba942de092c1b69baa86b2370c90b4a886863a6a46->enter($__internal_eb1a9b1605cb37c6ba1051ba942de092c1b69baa86b2370c90b4a886863a6a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_eb1a9b1605cb37c6ba1051ba942de092c1b69baa86b2370c90b4a886863a6a46->leave($__internal_eb1a9b1605cb37c6ba1051ba942de092c1b69baa86b2370c90b4a886863a6a46_prof);

        
        $__internal_afa1d808397b716d0c498bc2f5d32ffed8b2e06216d97e2bc206904a49e107b4->leave($__internal_afa1d808397b716d0c498bc2f5d32ffed8b2e06216d97e2bc206904a49e107b4_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_6ffc55afe70503e86ae287789bc675baf3e1c666a7ff0980eb48c2da0b08fbce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ffc55afe70503e86ae287789bc675baf3e1c666a7ff0980eb48c2da0b08fbce->enter($__internal_6ffc55afe70503e86ae287789bc675baf3e1c666a7ff0980eb48c2da0b08fbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e2844856e2c974f80cb184e6672a35cebf4f0ed132ecec10ca6612cf298d1754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2844856e2c974f80cb184e6672a35cebf4f0ed132ecec10ca6612cf298d1754->enter($__internal_e2844856e2c974f80cb184e6672a35cebf4f0ed132ecec10ca6612cf298d1754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_e2844856e2c974f80cb184e6672a35cebf4f0ed132ecec10ca6612cf298d1754->leave($__internal_e2844856e2c974f80cb184e6672a35cebf4f0ed132ecec10ca6612cf298d1754_prof);

        
        $__internal_6ffc55afe70503e86ae287789bc675baf3e1c666a7ff0980eb48c2da0b08fbce->leave($__internal_6ffc55afe70503e86ae287789bc675baf3e1c666a7ff0980eb48c2da0b08fbce_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3f02f30c93f8c165ce31977292b89000f1d4baa64c714d0abadeae0498be3054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f02f30c93f8c165ce31977292b89000f1d4baa64c714d0abadeae0498be3054->enter($__internal_3f02f30c93f8c165ce31977292b89000f1d4baa64c714d0abadeae0498be3054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_0b4cc016414ce11d36f2dd54dc331038783adf32548fb4f84435f08a43042a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4cc016414ce11d36f2dd54dc331038783adf32548fb4f84435f08a43042a6d->enter($__internal_0b4cc016414ce11d36f2dd54dc331038783adf32548fb4f84435f08a43042a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_0b4cc016414ce11d36f2dd54dc331038783adf32548fb4f84435f08a43042a6d->leave($__internal_0b4cc016414ce11d36f2dd54dc331038783adf32548fb4f84435f08a43042a6d_prof);

        
        $__internal_3f02f30c93f8c165ce31977292b89000f1d4baa64c714d0abadeae0498be3054->leave($__internal_3f02f30c93f8c165ce31977292b89000f1d4baa64c714d0abadeae0498be3054_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock button_widget %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
