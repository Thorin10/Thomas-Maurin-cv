<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_fac7756da68a18ea0e522ce1ffbf0727a2b5fb79c1bcf2643e0cfcc13bba11d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72ccb92019baff985a8e7934fe116bcf18e13fb086d57d2a01e39cc556b49a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ccb92019baff985a8e7934fe116bcf18e13fb086d57d2a01e39cc556b49a90->enter($__internal_72ccb92019baff985a8e7934fe116bcf18e13fb086d57d2a01e39cc556b49a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_d74bd9c00982497a0fb4d7780c7e103c7ac83eceb8b4ea96cb883c1e5e92819f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74bd9c00982497a0fb4d7780c7e103c7ac83eceb8b4ea96cb883c1e5e92819f->enter($__internal_d74bd9c00982497a0fb4d7780c7e103c7ac83eceb8b4ea96cb883c1e5e92819f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 120
        echo "
";
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('form_label', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 158
        echo "
";
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('form_row', $context, $blocks);
        // line 171
        echo "
";
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_72ccb92019baff985a8e7934fe116bcf18e13fb086d57d2a01e39cc556b49a90->leave($__internal_72ccb92019baff985a8e7934fe116bcf18e13fb086d57d2a01e39cc556b49a90_prof);

        
        $__internal_d74bd9c00982497a0fb4d7780c7e103c7ac83eceb8b4ea96cb883c1e5e92819f->leave($__internal_d74bd9c00982497a0fb4d7780c7e103c7ac83eceb8b4ea96cb883c1e5e92819f_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_2f2a7fe56ba40140ce7fca2929369b6e50439116676bdf6da8834ee12c8b801c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2a7fe56ba40140ce7fca2929369b6e50439116676bdf6da8834ee12c8b801c->enter($__internal_2f2a7fe56ba40140ce7fca2929369b6e50439116676bdf6da8834ee12c8b801c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_5c89cd242a713c4e7c3e7a198b3c18c4f51028ba143cd626cc14fd026ed247e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c89cd242a713c4e7c3e7a198b3c18c4f51028ba143cd626cc14fd026ed247e3->enter($__internal_5c89cd242a713c4e7c3e7a198b3c18c4f51028ba143cd626cc14fd026ed247e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_5c89cd242a713c4e7c3e7a198b3c18c4f51028ba143cd626cc14fd026ed247e3->leave($__internal_5c89cd242a713c4e7c3e7a198b3c18c4f51028ba143cd626cc14fd026ed247e3_prof);

        
        $__internal_2f2a7fe56ba40140ce7fca2929369b6e50439116676bdf6da8834ee12c8b801c->leave($__internal_2f2a7fe56ba40140ce7fca2929369b6e50439116676bdf6da8834ee12c8b801c_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2816ee0e46454a08013cdd6ba9b99534b5acaa004d84f268cf4c8b3d4671d34a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2816ee0e46454a08013cdd6ba9b99534b5acaa004d84f268cf4c8b3d4671d34a->enter($__internal_2816ee0e46454a08013cdd6ba9b99534b5acaa004d84f268cf4c8b3d4671d34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_1b4100149442cd70597c7c0c72b9f713ab82073604a8ba6301c3fe907a60ab97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4100149442cd70597c7c0c72b9f713ab82073604a8ba6301c3fe907a60ab97->enter($__internal_1b4100149442cd70597c7c0c72b9f713ab82073604a8ba6301c3fe907a60ab97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_1b4100149442cd70597c7c0c72b9f713ab82073604a8ba6301c3fe907a60ab97->leave($__internal_1b4100149442cd70597c7c0c72b9f713ab82073604a8ba6301c3fe907a60ab97_prof);

        
        $__internal_2816ee0e46454a08013cdd6ba9b99534b5acaa004d84f268cf4c8b3d4671d34a->leave($__internal_2816ee0e46454a08013cdd6ba9b99534b5acaa004d84f268cf4c8b3d4671d34a_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_6dcdc51f9ddbda5553967208ae029014d53b12f997eb410993e56bcd675af7aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dcdc51f9ddbda5553967208ae029014d53b12f997eb410993e56bcd675af7aa->enter($__internal_6dcdc51f9ddbda5553967208ae029014d53b12f997eb410993e56bcd675af7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_9a464f8c9bba783ac252363ca3a5f7bf7802a3a902257c86b97db0288585c545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a464f8c9bba783ac252363ca3a5f7bf7802a3a902257c86b97db0288585c545->enter($__internal_9a464f8c9bba783ac252363ca3a5f7bf7802a3a902257c86b97db0288585c545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_9a464f8c9bba783ac252363ca3a5f7bf7802a3a902257c86b97db0288585c545->leave($__internal_9a464f8c9bba783ac252363ca3a5f7bf7802a3a902257c86b97db0288585c545_prof);

        
        $__internal_6dcdc51f9ddbda5553967208ae029014d53b12f997eb410993e56bcd675af7aa->leave($__internal_6dcdc51f9ddbda5553967208ae029014d53b12f997eb410993e56bcd675af7aa_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_1b9befcb6f8378872e9bf167fbc4674969baba1f87056a9d6fe7b144589c1677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b9befcb6f8378872e9bf167fbc4674969baba1f87056a9d6fe7b144589c1677->enter($__internal_1b9befcb6f8378872e9bf167fbc4674969baba1f87056a9d6fe7b144589c1677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_c9a7cf50377c43992448969ea85e4b73c0b1de708ad1ad41c69d118e4440c2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a7cf50377c43992448969ea85e4b73c0b1de708ad1ad41c69d118e4440c2bd->enter($__internal_c9a7cf50377c43992448969ea85e4b73c0b1de708ad1ad41c69d118e4440c2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_c9a7cf50377c43992448969ea85e4b73c0b1de708ad1ad41c69d118e4440c2bd->leave($__internal_c9a7cf50377c43992448969ea85e4b73c0b1de708ad1ad41c69d118e4440c2bd_prof);

        
        $__internal_1b9befcb6f8378872e9bf167fbc4674969baba1f87056a9d6fe7b144589c1677->leave($__internal_1b9befcb6f8378872e9bf167fbc4674969baba1f87056a9d6fe7b144589c1677_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_d82ad8f7cda8ff7732186f2484d6b2f0e800b4786444d5a0c6420a5c8bd855c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82ad8f7cda8ff7732186f2484d6b2f0e800b4786444d5a0c6420a5c8bd855c3->enter($__internal_d82ad8f7cda8ff7732186f2484d6b2f0e800b4786444d5a0c6420a5c8bd855c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_e5355626dd91825a5e2ed55868ad4f90c1273c0d369f5fdb2aef4804145593c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5355626dd91825a5e2ed55868ad4f90c1273c0d369f5fdb2aef4804145593c8->enter($__internal_e5355626dd91825a5e2ed55868ad4f90c1273c0d369f5fdb2aef4804145593c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_e5355626dd91825a5e2ed55868ad4f90c1273c0d369f5fdb2aef4804145593c8->leave($__internal_e5355626dd91825a5e2ed55868ad4f90c1273c0d369f5fdb2aef4804145593c8_prof);

        
        $__internal_d82ad8f7cda8ff7732186f2484d6b2f0e800b4786444d5a0c6420a5c8bd855c3->leave($__internal_d82ad8f7cda8ff7732186f2484d6b2f0e800b4786444d5a0c6420a5c8bd855c3_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_741e3c336056b643276f1c7ad63fed2efe30f4eacd0f833d0044ddce461c7e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_741e3c336056b643276f1c7ad63fed2efe30f4eacd0f833d0044ddce461c7e9f->enter($__internal_741e3c336056b643276f1c7ad63fed2efe30f4eacd0f833d0044ddce461c7e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_4e717f0153d91b55311efc6c25108c2cbde615f0bf6a63c6e9b8a626dec191e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e717f0153d91b55311efc6c25108c2cbde615f0bf6a63c6e9b8a626dec191e8->enter($__internal_4e717f0153d91b55311efc6c25108c2cbde615f0bf6a63c6e9b8a626dec191e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_4e717f0153d91b55311efc6c25108c2cbde615f0bf6a63c6e9b8a626dec191e8->leave($__internal_4e717f0153d91b55311efc6c25108c2cbde615f0bf6a63c6e9b8a626dec191e8_prof);

        
        $__internal_741e3c336056b643276f1c7ad63fed2efe30f4eacd0f833d0044ddce461c7e9f->leave($__internal_741e3c336056b643276f1c7ad63fed2efe30f4eacd0f833d0044ddce461c7e9f_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_7e15b3c89800bb9993bf82bf51248cd899104a4ce7b82df48cbbe0bea56b1167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e15b3c89800bb9993bf82bf51248cd899104a4ce7b82df48cbbe0bea56b1167->enter($__internal_7e15b3c89800bb9993bf82bf51248cd899104a4ce7b82df48cbbe0bea56b1167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_35da9b92cbfcd0e8b050ad8773ee9259c22676f66a7f555539e0848d493a4946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35da9b92cbfcd0e8b050ad8773ee9259c22676f66a7f555539e0848d493a4946->enter($__internal_35da9b92cbfcd0e8b050ad8773ee9259c22676f66a7f555539e0848d493a4946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_35da9b92cbfcd0e8b050ad8773ee9259c22676f66a7f555539e0848d493a4946->leave($__internal_35da9b92cbfcd0e8b050ad8773ee9259c22676f66a7f555539e0848d493a4946_prof);

        
        $__internal_7e15b3c89800bb9993bf82bf51248cd899104a4ce7b82df48cbbe0bea56b1167->leave($__internal_7e15b3c89800bb9993bf82bf51248cd899104a4ce7b82df48cbbe0bea56b1167_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_a26c25285a62764e5d7dddc60371be6cec6ad39b2de7bf6c30b047ad82c42f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26c25285a62764e5d7dddc60371be6cec6ad39b2de7bf6c30b047ad82c42f3a->enter($__internal_a26c25285a62764e5d7dddc60371be6cec6ad39b2de7bf6c30b047ad82c42f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_3ed025ccadfde0b1713bb3df48e9d4a74f7b5b95a8364fe992f25df726d6a74c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed025ccadfde0b1713bb3df48e9d4a74f7b5b95a8364fe992f25df726d6a74c->enter($__internal_3ed025ccadfde0b1713bb3df48e9d4a74f7b5b95a8364fe992f25df726d6a74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_3ed025ccadfde0b1713bb3df48e9d4a74f7b5b95a8364fe992f25df726d6a74c->leave($__internal_3ed025ccadfde0b1713bb3df48e9d4a74f7b5b95a8364fe992f25df726d6a74c_prof);

        
        $__internal_a26c25285a62764e5d7dddc60371be6cec6ad39b2de7bf6c30b047ad82c42f3a->leave($__internal_a26c25285a62764e5d7dddc60371be6cec6ad39b2de7bf6c30b047ad82c42f3a_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_811e8824fbe5f7b25f5bd606515f6d4efc01b3547e9f54fabeeeba03c9a43245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_811e8824fbe5f7b25f5bd606515f6d4efc01b3547e9f54fabeeeba03c9a43245->enter($__internal_811e8824fbe5f7b25f5bd606515f6d4efc01b3547e9f54fabeeeba03c9a43245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_249abccb59d5f7569c338160037285c05fcdd4e498ddc96b9cedaf844f63c011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249abccb59d5f7569c338160037285c05fcdd4e498ddc96b9cedaf844f63c011->enter($__internal_249abccb59d5f7569c338160037285c05fcdd4e498ddc96b9cedaf844f63c011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_249abccb59d5f7569c338160037285c05fcdd4e498ddc96b9cedaf844f63c011->leave($__internal_249abccb59d5f7569c338160037285c05fcdd4e498ddc96b9cedaf844f63c011_prof);

        
        $__internal_811e8824fbe5f7b25f5bd606515f6d4efc01b3547e9f54fabeeeba03c9a43245->leave($__internal_811e8824fbe5f7b25f5bd606515f6d4efc01b3547e9f54fabeeeba03c9a43245_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_df59a466aadd2f8c019714876c3feb45c00fec40f643cd5ff7b26f7cee2e0485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df59a466aadd2f8c019714876c3feb45c00fec40f643cd5ff7b26f7cee2e0485->enter($__internal_df59a466aadd2f8c019714876c3feb45c00fec40f643cd5ff7b26f7cee2e0485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d4f6a3e060a00f77611f85aa22b19b88ba0c25d3db3045dd5faa1d99d71398a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f6a3e060a00f77611f85aa22b19b88ba0c25d3db3045dd5faa1d99d71398a1->enter($__internal_d4f6a3e060a00f77611f85aa22b19b88ba0c25d3db3045dd5faa1d99d71398a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 78
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>";
        }
        
        $__internal_d4f6a3e060a00f77611f85aa22b19b88ba0c25d3db3045dd5faa1d99d71398a1->leave($__internal_d4f6a3e060a00f77611f85aa22b19b88ba0c25d3db3045dd5faa1d99d71398a1_prof);

        
        $__internal_df59a466aadd2f8c019714876c3feb45c00fec40f643cd5ff7b26f7cee2e0485->leave($__internal_df59a466aadd2f8c019714876c3feb45c00fec40f643cd5ff7b26f7cee2e0485_prof);

    }

    // line 84
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_bca6b3134261fe5edb7c90ba14a70299bdb53f29f8efd8c3342e4892c29472f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca6b3134261fe5edb7c90ba14a70299bdb53f29f8efd8c3342e4892c29472f7->enter($__internal_bca6b3134261fe5edb7c90ba14a70299bdb53f29f8efd8c3342e4892c29472f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_bef6177f6fe63606d1d3d6664355f8ebf3fa824fe4c5c9e677a4d9b377ecdd7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef6177f6fe63606d1d3d6664355f8ebf3fa824fe4c5c9e677a4d9b377ecdd7a->enter($__internal_bef6177f6fe63606d1d3d6664355f8ebf3fa824fe4c5c9e677a4d9b377ecdd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 85
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 86
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 87
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 90
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 92
            echo "</div>";
        }
        
        $__internal_bef6177f6fe63606d1d3d6664355f8ebf3fa824fe4c5c9e677a4d9b377ecdd7a->leave($__internal_bef6177f6fe63606d1d3d6664355f8ebf3fa824fe4c5c9e677a4d9b377ecdd7a_prof);

        
        $__internal_bca6b3134261fe5edb7c90ba14a70299bdb53f29f8efd8c3342e4892c29472f7->leave($__internal_bca6b3134261fe5edb7c90ba14a70299bdb53f29f8efd8c3342e4892c29472f7_prof);

    }

    // line 96
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7d8c17e3a99ef0ba2e22b90f98e132595ed2d4f24fe9e785e09cec7ba3f745b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8c17e3a99ef0ba2e22b90f98e132595ed2d4f24fe9e785e09cec7ba3f745b4->enter($__internal_7d8c17e3a99ef0ba2e22b90f98e132595ed2d4f24fe9e785e09cec7ba3f745b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_c3b4c4bcaf74cc37ee1561831c8b357d8f07d94f46b6a19f9e26afad4b1584b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b4c4bcaf74cc37ee1561831c8b357d8f07d94f46b6a19f9e26afad4b1584b0->enter($__internal_c3b4c4bcaf74cc37ee1561831c8b357d8f07d94f46b6a19f9e26afad4b1584b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 97
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 100
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 102
($context["valid"] ?? $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 106
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                // line 107
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 109
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 111
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 112
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 113
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "</div>";
        }
        
        $__internal_c3b4c4bcaf74cc37ee1561831c8b357d8f07d94f46b6a19f9e26afad4b1584b0->leave($__internal_c3b4c4bcaf74cc37ee1561831c8b357d8f07d94f46b6a19f9e26afad4b1584b0_prof);

        
        $__internal_7d8c17e3a99ef0ba2e22b90f98e132595ed2d4f24fe9e785e09cec7ba3f745b4->leave($__internal_7d8c17e3a99ef0ba2e22b90f98e132595ed2d4f24fe9e785e09cec7ba3f745b4_prof);

    }

    // line 123
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d71a511371fc79133983944ed0d61c5f51bca00d193cd645e330138da5d7d61d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d71a511371fc79133983944ed0d61c5f51bca00d193cd645e330138da5d7d61d->enter($__internal_d71a511371fc79133983944ed0d61c5f51bca00d193cd645e330138da5d7d61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_953f7ca5d4c916422c2d705116ffcb0f261c69573c1bb3b2f473fb062120a80c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953f7ca5d4c916422c2d705116ffcb0f261c69573c1bb3b2f473fb062120a80c->enter($__internal_953f7ca5d4c916422c2d705116ffcb0f261c69573c1bb3b2f473fb062120a80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 124
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 125
            $context["element"] = "legend";
            // line 126
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 128
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 130
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_953f7ca5d4c916422c2d705116ffcb0f261c69573c1bb3b2f473fb062120a80c->leave($__internal_953f7ca5d4c916422c2d705116ffcb0f261c69573c1bb3b2f473fb062120a80c_prof);

        
        $__internal_d71a511371fc79133983944ed0d61c5f51bca00d193cd645e330138da5d7d61d->leave($__internal_d71a511371fc79133983944ed0d61c5f51bca00d193cd645e330138da5d7d61d_prof);

    }

    // line 133
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_dff12fff090fb5d1f102b636ea80ba9f012fd7e038bec21729646af48b973b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff12fff090fb5d1f102b636ea80ba9f012fd7e038bec21729646af48b973b0d->enter($__internal_dff12fff090fb5d1f102b636ea80ba9f012fd7e038bec21729646af48b973b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_01532be252ce82d38c3c1910aa342c545ec45c98de37719c0b16441597c6d3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01532be252ce82d38c3c1910aa342c545ec45c98de37719c0b16441597c6d3c1->enter($__internal_01532be252ce82d38c3c1910aa342c545ec45c98de37719c0b16441597c6d3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 135
        if (array_key_exists("widget", $context)) {
            // line 136
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 137
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 138
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 140
            if (array_key_exists("parent_label_class", $context)) {
                // line 141
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 143
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 144
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 145
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 146
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 147
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 150
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 153
            echo "<label";
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
            echo ">";
            // line 154
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 155
            echo "</label>";
        }
        
        $__internal_01532be252ce82d38c3c1910aa342c545ec45c98de37719c0b16441597c6d3c1->leave($__internal_01532be252ce82d38c3c1910aa342c545ec45c98de37719c0b16441597c6d3c1_prof);

        
        $__internal_dff12fff090fb5d1f102b636ea80ba9f012fd7e038bec21729646af48b973b0d->leave($__internal_dff12fff090fb5d1f102b636ea80ba9f012fd7e038bec21729646af48b973b0d_prof);

    }

    // line 161
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_813fb00173f918f1109eb1cd20754b4b74d762e4a911b64ebfb2f8c3631ef485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_813fb00173f918f1109eb1cd20754b4b74d762e4a911b64ebfb2f8c3631ef485->enter($__internal_813fb00173f918f1109eb1cd20754b4b74d762e4a911b64ebfb2f8c3631ef485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e3bf651ddcfb9c0a8b288b5027a94a01443f3a885adccb6527d4377e00df3fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3bf651ddcfb9c0a8b288b5027a94a01443f3a885adccb6527d4377e00df3fce->enter($__internal_e3bf651ddcfb9c0a8b288b5027a94a01443f3a885adccb6527d4377e00df3fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 162
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 163
            $context["element"] = "fieldset";
        }
        // line 165
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 169
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_e3bf651ddcfb9c0a8b288b5027a94a01443f3a885adccb6527d4377e00df3fce->leave($__internal_e3bf651ddcfb9c0a8b288b5027a94a01443f3a885adccb6527d4377e00df3fce_prof);

        
        $__internal_813fb00173f918f1109eb1cd20754b4b74d762e4a911b64ebfb2f8c3631ef485->leave($__internal_813fb00173f918f1109eb1cd20754b4b74d762e4a911b64ebfb2f8c3631ef485_prof);

    }

    // line 174
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2256cd9abb756f71f56152d53613792f937c2edb6f9e88917b4cda73bdfb5281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2256cd9abb756f71f56152d53613792f937c2edb6f9e88917b4cda73bdfb5281->enter($__internal_2256cd9abb756f71f56152d53613792f937c2edb6f9e88917b4cda73bdfb5281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_d67113a17427618c30ff16a023104f61ca7ec2fb40afc1e589f71aef73a8a846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67113a17427618c30ff16a023104f61ca7ec2fb40afc1e589f71aef73a8a846->enter($__internal_d67113a17427618c30ff16a023104f61ca7ec2fb40afc1e589f71aef73a8a846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 175
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 176
            echo "<div class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 179
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "</ul>
    </div>";
        }
        
        $__internal_d67113a17427618c30ff16a023104f61ca7ec2fb40afc1e589f71aef73a8a846->leave($__internal_d67113a17427618c30ff16a023104f61ca7ec2fb40afc1e589f71aef73a8a846_prof);

        
        $__internal_2256cd9abb756f71f56152d53613792f937c2edb6f9e88917b4cda73bdfb5281->leave($__internal_2256cd9abb756f71f56152d53613792f937c2edb6f9e88917b4cda73bdfb5281_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  672 => 181,  664 => 179,  660 => 178,  651 => 176,  649 => 175,  640 => 174,  628 => 169,  626 => 168,  624 => 167,  622 => 166,  618 => 165,  615 => 163,  613 => 162,  604 => 161,  593 => 155,  589 => 154,  574 => 153,  570 => 150,  567 => 147,  566 => 146,  565 => 145,  563 => 144,  561 => 143,  558 => 141,  556 => 140,  553 => 138,  551 => 137,  549 => 136,  547 => 135,  538 => 133,  528 => 130,  525 => 128,  522 => 126,  520 => 125,  518 => 124,  509 => 123,  498 => 117,  492 => 113,  491 => 112,  490 => 111,  486 => 110,  482 => 109,  479 => 107,  477 => 106,  470 => 102,  469 => 101,  468 => 100,  467 => 99,  463 => 98,  461 => 97,  452 => 96,  441 => 92,  439 => 91,  435 => 90,  432 => 88,  430 => 87,  428 => 86,  426 => 85,  417 => 84,  406 => 80,  404 => 79,  400 => 78,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 174,  134 => 173,  131 => 171,  129 => 161,  126 => 160,  123 => 158,  121 => 133,  118 => 132,  116 => 123,  113 => 122,  110 => 120,  108 => 96,  105 => 95,  103 => 84,  100 => 83,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form is not rootform %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_layout.html.twig");
    }
}
