<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_e555c97c55aedb531fee2063931e6b0bd089ade46062d0b7bbdec602fc65659d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'sonata_help' => array($this, 'block_sonata_help'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'form_row' => array($this, 'block_form_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_choice_field_mask_widget' => array($this, 'block_sonata_type_choice_field_mask_widget'),
            'sonata_type_choice_multiple_sortable' => array($this, 'block_sonata_type_choice_multiple_sortable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbe6c8aa85de4549b50f2744300cbb00f041d21f1fe83b0fcc713424f253b411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe6c8aa85de4549b50f2744300cbb00f041d21f1fe83b0fcc713424f253b411->enter($__internal_fbe6c8aa85de4549b50f2744300cbb00f041d21f1fe83b0fcc713424f253b411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:form_admin_fields.html.twig"));

        $__internal_d993c150c35af8a9865aecefaaf40d9e54a47f14e5175147992f87b976803fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d993c150c35af8a9865aecefaaf40d9e54a47f14e5175147992f87b976803fa8->enter($__internal_d993c150c35af8a9865aecefaaf40d9e54a47f14e5175147992f87b976803fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbe6c8aa85de4549b50f2744300cbb00f041d21f1fe83b0fcc713424f253b411->leave($__internal_fbe6c8aa85de4549b50f2744300cbb00f041d21f1fe83b0fcc713424f253b411_prof);

        
        $__internal_d993c150c35af8a9865aecefaaf40d9e54a47f14e5175147992f87b976803fa8->leave($__internal_d993c150c35af8a9865aecefaaf40d9e54a47f14e5175147992f87b976803fa8_prof);

    }

    // line 14
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_baa547bf9f711c2de5b533959ccfb2e7ddaef729003257be135ffd72ad4b89e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa547bf9f711c2de5b533959ccfb2e7ddaef729003257be135ffd72ad4b89e0->enter($__internal_baa547bf9f711c2de5b533959ccfb2e7ddaef729003257be135ffd72ad4b89e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_1fd8e2ebce624eea1c52c8908cb767e43347bd3532532721456a8e1567580252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd8e2ebce624eea1c52c8908cb767e43347bd3532532721456a8e1567580252->enter($__internal_1fd8e2ebce624eea1c52c8908cb767e43347bd3532532721456a8e1567580252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 15
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 16
            echo "        ";
            if ( !$this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                    <li><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>
        ";
            // line 22
            if ( !$this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</div>";
            }
            // line 23
            echo "    ";
        }
        
        $__internal_1fd8e2ebce624eea1c52c8908cb767e43347bd3532532721456a8e1567580252->leave($__internal_1fd8e2ebce624eea1c52c8908cb767e43347bd3532532721456a8e1567580252_prof);

        
        $__internal_baa547bf9f711c2de5b533959ccfb2e7ddaef729003257be135ffd72ad4b89e0->leave($__internal_baa547bf9f711c2de5b533959ccfb2e7ddaef729003257be135ffd72ad4b89e0_prof);

    }

    // line 26
    public function block_sonata_help($context, array $blocks = array())
    {
        $__internal_4dcb896f3a0cf74f6ddab697dadc8b304a8df4272bdc9224c4a1b301193dc21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dcb896f3a0cf74f6ddab697dadc8b304a8df4272bdc9224c4a1b301193dc21f->enter($__internal_4dcb896f3a0cf74f6ddab697dadc8b304a8df4272bdc9224c4a1b301193dc21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_help"));

        $__internal_42c054475695992e8157a7bb19cd9de6513129fed78b50b345c297b4b4a7fbd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c054475695992e8157a7bb19cd9de6513129fed78b50b345c297b4b4a7fbd8->enter($__internal_42c054475695992e8157a7bb19cd9de6513129fed78b50b345c297b4b4a7fbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_help"));

        // line 27
        ob_start();
        // line 28
        if ((array_key_exists("sonata_help", $context) && ($context["sonata_help"] ?? $this->getContext($context, "sonata_help")))) {
            // line 29
            echo "    <span class=\"help-block sonata-ba-field-widget-help\">";
            echo ($context["sonata_help"] ?? $this->getContext($context, "sonata_help"));
            echo "</span>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_42c054475695992e8157a7bb19cd9de6513129fed78b50b345c297b4b4a7fbd8->leave($__internal_42c054475695992e8157a7bb19cd9de6513129fed78b50b345c297b4b4a7fbd8_prof);

        
        $__internal_4dcb896f3a0cf74f6ddab697dadc8b304a8df4272bdc9224c4a1b301193dc21f->leave($__internal_4dcb896f3a0cf74f6ddab697dadc8b304a8df4272bdc9224c4a1b301193dc21f_prof);

    }

    // line 34
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_2a85908085095fe81a6aeee3cef564938dcf44ae0f01ad371caefd1e781af78b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a85908085095fe81a6aeee3cef564938dcf44ae0f01ad371caefd1e781af78b->enter($__internal_2a85908085095fe81a6aeee3cef564938dcf44ae0f01ad371caefd1e781af78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_0028a767418d6fce073faaed6a786ceb1d31a7b4827b6e13b56af5a8a183a945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0028a767418d6fce073faaed6a786ceb1d31a7b4827b6e13b56af5a8a183a945->enter($__internal_0028a767418d6fce073faaed6a786ceb1d31a7b4827b6e13b56af5a8a183a945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 35
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 36
        $this->displayBlock("sonata_help", $context, $blocks);
        
        $__internal_0028a767418d6fce073faaed6a786ceb1d31a7b4827b6e13b56af5a8a183a945->leave($__internal_0028a767418d6fce073faaed6a786ceb1d31a7b4827b6e13b56af5a8a183a945_prof);

        
        $__internal_2a85908085095fe81a6aeee3cef564938dcf44ae0f01ad371caefd1e781af78b->leave($__internal_2a85908085095fe81a6aeee3cef564938dcf44ae0f01ad371caefd1e781af78b_prof);

    }

    // line 39
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_03a4c0fff26d8741b3d6d5cd6f06092f830383878053e4c9018f156934c8426f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a4c0fff26d8741b3d6d5cd6f06092f830383878053e4c9018f156934c8426f->enter($__internal_03a4c0fff26d8741b3d6d5cd6f06092f830383878053e4c9018f156934c8426f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_03e1a2d700d4f8fdd8bb8fe0c1849dd6d4b730ad122d6723f17dfcf0e8109d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e1a2d700d4f8fdd8bb8fe0c1849dd6d4b730ad122d6723f17dfcf0e8109d9d->enter($__internal_03e1a2d700d4f8fdd8bb8fe0c1849dd6d4b730ad122d6723f17dfcf0e8109d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 40
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 41
        echo "    ";
        if ((($context["type"] ?? $this->getContext($context, "type")) != "file")) {
            // line 42
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_03e1a2d700d4f8fdd8bb8fe0c1849dd6d4b730ad122d6723f17dfcf0e8109d9d->leave($__internal_03e1a2d700d4f8fdd8bb8fe0c1849dd6d4b730ad122d6723f17dfcf0e8109d9d_prof);

        
        $__internal_03a4c0fff26d8741b3d6d5cd6f06092f830383878053e4c9018f156934c8426f->leave($__internal_03a4c0fff26d8741b3d6d5cd6f06092f830383878053e4c9018f156934c8426f_prof);

    }

    // line 47
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_237652c8fb778a4aab3020ab7207db9cf3b23d34588754b91da9faee7664b5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237652c8fb778a4aab3020ab7207db9cf3b23d34588754b91da9faee7664b5a7->enter($__internal_237652c8fb778a4aab3020ab7207db9cf3b23d34588754b91da9faee7664b5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_f3d88c786ca28ea3da75efa77da1e49fca0f69fc9db2f8fac96919ffa7c3405a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d88c786ca28ea3da75efa77da1e49fca0f69fc9db2f8fac96919ffa7c3405a->enter($__internal_f3d88c786ca28ea3da75efa77da1e49fca0f69fc9db2f8fac96919ffa7c3405a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 48
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 49
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_f3d88c786ca28ea3da75efa77da1e49fca0f69fc9db2f8fac96919ffa7c3405a->leave($__internal_f3d88c786ca28ea3da75efa77da1e49fca0f69fc9db2f8fac96919ffa7c3405a_prof);

        
        $__internal_237652c8fb778a4aab3020ab7207db9cf3b23d34588754b91da9faee7664b5a7->leave($__internal_237652c8fb778a4aab3020ab7207db9cf3b23d34588754b91da9faee7664b5a7_prof);

    }

    // line 52
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b4adaf2abb96416aa5ec9aedeaa6d4980007b16d80fd4a6b1415107ddf108792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4adaf2abb96416aa5ec9aedeaa6d4980007b16d80fd4a6b1415107ddf108792->enter($__internal_b4adaf2abb96416aa5ec9aedeaa6d4980007b16d80fd4a6b1415107ddf108792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_087362d66864882e791914b01dbf1cfeaad0d4b15d00edd751dc93643ad5f886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087362d66864882e791914b01dbf1cfeaad0d4b15d00edd751dc93643ad5f886->enter($__internal_087362d66864882e791914b01dbf1cfeaad0d4b15d00edd751dc93643ad5f886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 53
        if ((($context["money_pattern"] ?? $this->getContext($context, "money_pattern")) == "{{ widget }}")) {
            // line 54
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 56
            echo "        ";
            $context["currencySymbol"] = twig_trim_filter(twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")));
            // line 57
            echo "        ";
            if (preg_match("/^{{ widget }}/", ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")))) {
                // line 58
                echo "            <div class=\"input-group\">";
                // line 59
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 60
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 62
($context["money_pattern"] ?? $this->getContext($context, "money_pattern")))) {
                // line 63
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 64
                echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>";
                // line 65
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 66
                echo "</div>
        ";
            }
            // line 68
            echo "    ";
        }
        
        $__internal_087362d66864882e791914b01dbf1cfeaad0d4b15d00edd751dc93643ad5f886->leave($__internal_087362d66864882e791914b01dbf1cfeaad0d4b15d00edd751dc93643ad5f886_prof);

        
        $__internal_b4adaf2abb96416aa5ec9aedeaa6d4980007b16d80fd4a6b1415107ddf108792->leave($__internal_b4adaf2abb96416aa5ec9aedeaa6d4980007b16d80fd4a6b1415107ddf108792_prof);

    }

    // line 71
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_2f5050fae10968ba5cf29e9fe08a776a5dea85a73646450854874c9035e59d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f5050fae10968ba5cf29e9fe08a776a5dea85a73646450854874c9035e59d9d->enter($__internal_2f5050fae10968ba5cf29e9fe08a776a5dea85a73646450854874c9035e59d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_5b11a10ba666b74e51fd300df8c8dc3e55c27c736a88619304d8e4a5281abc8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b11a10ba666b74e51fd300df8c8dc3e55c27c736a88619304d8e4a5281abc8f->enter($__internal_5b11a10ba666b74e51fd300df8c8dc3e55c27c736a88619304d8e4a5281abc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 72
        echo "    ";
        ob_start();
        // line 73
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 74
        echo "        <div class=\"input-group\">
            ";
        // line 75
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5b11a10ba666b74e51fd300df8c8dc3e55c27c736a88619304d8e4a5281abc8f->leave($__internal_5b11a10ba666b74e51fd300df8c8dc3e55c27c736a88619304d8e4a5281abc8f_prof);

        
        $__internal_2f5050fae10968ba5cf29e9fe08a776a5dea85a73646450854874c9035e59d9d->leave($__internal_2f5050fae10968ba5cf29e9fe08a776a5dea85a73646450854874c9035e59d9d_prof);

    }

    // line 81
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0fc5dc9db49f95371195786a0349858b2bd2b8928b4b8a2e6a3b7e118400f67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc5dc9db49f95371195786a0349858b2bd2b8928b4b8a2e6a3b7e118400f67a->enter($__internal_0fc5dc9db49f95371195786a0349858b2bd2b8928b4b8a2e6a3b7e118400f67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c7e7eab4718fa917fffdc3403638d1d74b8c547806c5ff75a9c95a531a220ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e7eab4718fa917fffdc3403638d1d74b8c547806c5ff75a9c95a531a220ac3->enter($__internal_c7e7eab4718fa917fffdc3403638d1d74b8c547806c5ff75a9c95a531a220ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 82
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 83
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 86
            echo "<div class=\"checkbox\">";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 88
            echo "</div>";
        }
        
        $__internal_c7e7eab4718fa917fffdc3403638d1d74b8c547806c5ff75a9c95a531a220ac3->leave($__internal_c7e7eab4718fa917fffdc3403638d1d74b8c547806c5ff75a9c95a531a220ac3_prof);

        
        $__internal_0fc5dc9db49f95371195786a0349858b2bd2b8928b4b8a2e6a3b7e118400f67a->leave($__internal_0fc5dc9db49f95371195786a0349858b2bd2b8928b4b8a2e6a3b7e118400f67a_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_fd6c6eaf2a824cd0e16ae5ec4bafde423f64af68f419961965247495370bc2da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6c6eaf2a824cd0e16ae5ec4bafde423f64af68f419961965247495370bc2da->enter($__internal_fd6c6eaf2a824cd0e16ae5ec4bafde423f64af68f419961965247495370bc2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e5a9bea5aab5bd2b8b2f60420313c0ced039d2ce58cc3395feb3644537ed469a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a9bea5aab5bd2b8b2f60420313c0ced039d2ce58cc3395feb3644537ed469a->enter($__internal_e5a9bea5aab5bd2b8b2f60420313c0ced039d2ce58cc3395feb3644537ed469a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 94
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 97
            echo "<div class=\"radio\">";
            // line 98
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 99
            echo "</div>";
        }
        
        $__internal_e5a9bea5aab5bd2b8b2f60420313c0ced039d2ce58cc3395feb3644537ed469a->leave($__internal_e5a9bea5aab5bd2b8b2f60420313c0ced039d2ce58cc3395feb3644537ed469a_prof);

        
        $__internal_fd6c6eaf2a824cd0e16ae5ec4bafde423f64af68f419961965247495370bc2da->leave($__internal_fd6c6eaf2a824cd0e16ae5ec4bafde423f64af68f419961965247495370bc2da_prof);

    }

    // line 104
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d296c69b1f410a1cefdd14d888aeb49c03c0a81a820cc4df938009983cae411e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d296c69b1f410a1cefdd14d888aeb49c03c0a81a820cc4df938009983cae411e->enter($__internal_d296c69b1f410a1cefdd14d888aeb49c03c0a81a820cc4df938009983cae411e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3edd15ef3b559c9dc614a439612f0b16b7364bd9a3c7cfe47ec336f4e5e062ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3edd15ef3b559c9dc614a439612f0b16b7364bd9a3c7cfe47ec336f4e5e062ab->enter($__internal_3edd15ef3b559c9dc614a439612f0b16b7364bd9a3c7cfe47ec336f4e5e062ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 105
        ob_start();
        // line 106
        echo "    ";
        if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 107
            echo "        ";
            $context["label_class"] = "col-sm-3";
            // line 108
            echo "    ";
        }
        // line 109
        echo "
    ";
        // line 110
        $context["label_class"] = (((array_key_exists("label_class", $context)) ? (_twig_default_filter(($context["label_class"] ?? $this->getContext($context, "label_class")), "")) : ("")) . " control-label");
        // line 111
        echo "
    ";
        // line 112
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 113
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["label_class"] ?? $this->getContext($context, "label_class")))));
            // line 114
            echo "
        ";
            // line 115
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 116
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
                // line 117
                echo "        ";
            }
            // line 118
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 119
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 120
                echo "        ";
            }
            // line 121
            echo "
        ";
            // line 122
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 123
                if ((array_key_exists("label_format", $context) &&  !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format"))))) {
                    // line 124
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 125
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 126
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 129
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 132
            echo "
        <label";
            // line 133
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
            // line 134
            if ((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                // line 135
                echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            } elseif ( !$this->getAttribute(            // line 136
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "admin", array())) {
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            } else {
                // line 139
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())) ? ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "
            ";
            }
            // line 141
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3edd15ef3b559c9dc614a439612f0b16b7364bd9a3c7cfe47ec336f4e5e062ab->leave($__internal_3edd15ef3b559c9dc614a439612f0b16b7364bd9a3c7cfe47ec336f4e5e062ab_prof);

        
        $__internal_d296c69b1f410a1cefdd14d888aeb49c03c0a81a820cc4df938009983cae411e->leave($__internal_d296c69b1f410a1cefdd14d888aeb49c03c0a81a820cc4df938009983cae411e_prof);

    }

    // line 146
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_d66b9918264f67e5dddb81a4fa5597f9943d48a487def0aadabda753ceff1c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66b9918264f67e5dddb81a4fa5597f9943d48a487def0aadabda753ceff1c31->enter($__internal_d66b9918264f67e5dddb81a4fa5597f9943d48a487def0aadabda753ceff1c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_1c342e4a8f185061ae8a8f9cd1dbd7359b34992089fdd9e9668a305ebdd33253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c342e4a8f185061ae8a8f9cd1dbd7359b34992089fdd9e9668a305ebdd33253->enter($__internal_1c342e4a8f185061ae8a8f9cd1dbd7359b34992089fdd9e9668a305ebdd33253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 147
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_1c342e4a8f185061ae8a8f9cd1dbd7359b34992089fdd9e9668a305ebdd33253->leave($__internal_1c342e4a8f185061ae8a8f9cd1dbd7359b34992089fdd9e9668a305ebdd33253_prof);

        
        $__internal_d66b9918264f67e5dddb81a4fa5597f9943d48a487def0aadabda753ceff1c31->leave($__internal_d66b9918264f67e5dddb81a4fa5597f9943d48a487def0aadabda753ceff1c31_prof);

    }

    // line 150
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_06232e0b16e6e201a14e006f6e798ece6f7d3ae44e8a8f2167de4a8f9d157555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06232e0b16e6e201a14e006f6e798ece6f7d3ae44e8a8f2167de4a8f9d157555->enter($__internal_06232e0b16e6e201a14e006f6e798ece6f7d3ae44e8a8f2167de4a8f9d157555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_e96d4d023e297ae6575b74ff8054dac7e1aae923622d44c34750d7cad0d46906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96d4d023e297ae6575b74ff8054dac7e1aae923622d44c34750d7cad0d46906->enter($__internal_e96d4d023e297ae6575b74ff8054dac7e1aae923622d44c34750d7cad0d46906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 151
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e96d4d023e297ae6575b74ff8054dac7e1aae923622d44c34750d7cad0d46906->leave($__internal_e96d4d023e297ae6575b74ff8054dac7e1aae923622d44c34750d7cad0d46906_prof);

        
        $__internal_06232e0b16e6e201a14e006f6e798ece6f7d3ae44e8a8f2167de4a8f9d157555->leave($__internal_06232e0b16e6e201a14e006f6e798ece6f7d3ae44e8a8f2167de4a8f9d157555_prof);

    }

    // line 154
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_27530ec5c67961071b492417d74296789365cbf893a5cc69daf1df64ed90ec5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27530ec5c67961071b492417d74296789365cbf893a5cc69daf1df64ed90ec5e->enter($__internal_27530ec5c67961071b492417d74296789365cbf893a5cc69daf1df64ed90ec5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_ce5602b78f382aba1ad8b55c79a155e840f6f4871154e9a60246d9626bd826f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5602b78f382aba1ad8b55c79a155e840f6f4871154e9a60246d9626bd826f6->enter($__internal_ce5602b78f382aba1ad8b55c79a155e840f6f4871154e9a60246d9626bd826f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 155
        echo "    ";
        if ($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "admin", array())) {
            // line 156
            echo "        ";
            $context["translation_domain"] = $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array());
            // line 157
            echo "    ";
        }
        // line 158
        echo "    ";
        // line 159
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 160
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 161
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 162
                echo "        ";
            }
            // line 163
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 164
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 165
                echo "        ";
            }
            // line 166
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 167
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                // line 168
                echo "        ";
            }
            // line 169
            echo "        <label";
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
            // line 170
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            // line 171
            if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
                // line 172
                echo "<span class=\"control-label__text\">";
                // line 173
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                // line 174
                echo "</span>";
            }
            // line 176
            echo "</label>
    ";
        }
        
        $__internal_ce5602b78f382aba1ad8b55c79a155e840f6f4871154e9a60246d9626bd826f6->leave($__internal_ce5602b78f382aba1ad8b55c79a155e840f6f4871154e9a60246d9626bd826f6_prof);

        
        $__internal_27530ec5c67961071b492417d74296789365cbf893a5cc69daf1df64ed90ec5e->leave($__internal_27530ec5c67961071b492417d74296789365cbf893a5cc69daf1df64ed90ec5e_prof);

    }

    // line 180
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_fa41c246bae8e10ab74f4123e86e82abef1e77382af72b659e8603cd4d335ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa41c246bae8e10ab74f4123e86e82abef1e77382af72b659e8603cd4d335ae9->enter($__internal_fa41c246bae8e10ab74f4123e86e82abef1e77382af72b659e8603cd4d335ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_fc05112f3d04068795354e4b9132dc9e62971daee432204dbe2bc14ca490b050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc05112f3d04068795354e4b9132dc9e62971daee432204dbe2bc14ca490b050->enter($__internal_fc05112f3d04068795354e4b9132dc9e62971daee432204dbe2bc14ca490b050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 181
        ob_start();
        // line 182
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " list-unstyled")));
        // line 183
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 185
            echo "        <li>
            ";
            // line 186
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 187
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fc05112f3d04068795354e4b9132dc9e62971daee432204dbe2bc14ca490b050->leave($__internal_fc05112f3d04068795354e4b9132dc9e62971daee432204dbe2bc14ca490b050_prof);

        
        $__internal_fa41c246bae8e10ab74f4123e86e82abef1e77382af72b659e8603cd4d335ae9->leave($__internal_fa41c246bae8e10ab74f4123e86e82abef1e77382af72b659e8603cd4d335ae9_prof);

    }

    // line 193
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_4b5ef7aa59c273630d1d2f0f6709a2615152bc287d55c1bb9ceac56294fa864b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5ef7aa59c273630d1d2f0f6709a2615152bc287d55c1bb9ceac56294fa864b->enter($__internal_4b5ef7aa59c273630d1d2f0f6709a2615152bc287d55c1bb9ceac56294fa864b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_7be0fc1300b385f3edace78c859372b62cef9fd33b4033401b89cc74c588c1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be0fc1300b385f3edace78c859372b62cef9fd33b4033401b89cc74c588c1ce->enter($__internal_7be0fc1300b385f3edace78c859372b62cef9fd33b4033401b89cc74c588c1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 194
        ob_start();
        // line 195
        echo "    ";
        if (((($context["required"] ?? $this->getContext($context, "required")) && array_key_exists("placeholder", $context)) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder"))))) {
            // line 196
            echo "        ";
            $context["required"] = false;
            // line 197
            echo "    ";
        } elseif ((((((($context["required"] ?? $this->getContext($context, "required")) && array_key_exists("empty_value", $context)) && array_key_exists("empty_value_in_choices", $context)) && (null === ($context["empty_value"] ?? $this->getContext($context, "empty_value")))) &&  !($context["empty_value_in_choices"] ?? $this->getContext($context, "empty_value_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 198
            echo "        ";
            $context["required"] = false;
            // line 199
            echo "    ";
        }
        // line 200
        echo "
    ";
        // line 201
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 202
        echo "    ";
        if (((array_key_exists("sortable", $context) && ($context["sortable"] ?? $this->getContext($context, "sortable"))) && ($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 203
            echo "        ";
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
            echo "
    ";
        } else {
            // line 205
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo " >
            ";
            // line 206
            if ((array_key_exists("empty_value", $context) &&  !(null === ($context["empty_value"] ?? $this->getContext($context, "empty_value"))))) {
                // line 207
                echo "                <option value=\"\"";
                if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 208
                if ( !$this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 209
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? $this->getContext($context, "empty_value")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 211
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? $this->getContext($context, "empty_value")), array(), $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 213
                echo "                </option>
            ";
            } elseif ((            // line 214
array_key_exists("placeholder", $context) &&  !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder"))))) {
                // line 215
                echo "                <option value=\"\"";
                if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 216
                if ( !$this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 217
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 219
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 221
                echo "                </option>
            ";
            }
            // line 223
            echo "            ";
            if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 224
                echo "                ";
                $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
                // line 225
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                ";
                // line 226
                if ((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0)) {
                    // line 227
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                    echo "</option>
                ";
                }
                // line 229
                echo "            ";
            }
            // line 230
            echo "            ";
            $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
            // line 231
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7be0fc1300b385f3edace78c859372b62cef9fd33b4033401b89cc74c588c1ce->leave($__internal_7be0fc1300b385f3edace78c859372b62cef9fd33b4033401b89cc74c588c1ce_prof);

        
        $__internal_4b5ef7aa59c273630d1d2f0f6709a2615152bc287d55c1bb9ceac56294fa864b->leave($__internal_4b5ef7aa59c273630d1d2f0f6709a2615152bc287d55c1bb9ceac56294fa864b_prof);

    }

    // line 237
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_50448dc32f256585edfefabacd1f65d3225bdcf8d8e835ae86c988a9c30ca9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50448dc32f256585edfefabacd1f65d3225bdcf8d8e835ae86c988a9c30ca9c4->enter($__internal_50448dc32f256585edfefabacd1f65d3225bdcf8d8e835ae86c988a9c30ca9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_cc07234f866ca26c179efb436ddccc22836b5ad2f466b18db065c27c32815628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc07234f866ca26c179efb436ddccc22836b5ad2f466b18db065c27c32815628->enter($__internal_cc07234f866ca26c179efb436ddccc22836b5ad2f466b18db065c27c32815628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 238
        ob_start();
        // line 239
        echo "    ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 240
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 242
            echo "        ";
            if (( !array_key_exists("row", $context) || (($context["row"] ?? $this->getContext($context, "row")) == true))) {
                // line 243
                echo "            ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
                // line 244
                echo "        ";
            }
            // line 245
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter(($context["input_wrapper_class"] ?? $this->getContext($context, "input_wrapper_class")), "col-sm-4")) : ("col-sm-4"));
            // line 246
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 247
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (((("<div class=\"" .             // line 248
($context["input_wrapper_class"] ?? $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 249
($context["input_wrapper_class"] ?? $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 250
($context["input_wrapper_class"] ?? $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 251
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cc07234f866ca26c179efb436ddccc22836b5ad2f466b18db065c27c32815628->leave($__internal_cc07234f866ca26c179efb436ddccc22836b5ad2f466b18db065c27c32815628_prof);

        
        $__internal_50448dc32f256585edfefabacd1f65d3225bdcf8d8e835ae86c988a9c30ca9c4->leave($__internal_50448dc32f256585edfefabacd1f65d3225bdcf8d8e835ae86c988a9c30ca9c4_prof);

    }

    // line 257
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_7316b771ffa47a5c68680a0ab8e8aa798f1fb5c2800e4a7210436a68d164d687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7316b771ffa47a5c68680a0ab8e8aa798f1fb5c2800e4a7210436a68d164d687->enter($__internal_7316b771ffa47a5c68680a0ab8e8aa798f1fb5c2800e4a7210436a68d164d687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_4143ba01e623c8f1cd76208fa673acb688deb71415fbce43eb6b4ee712dfc3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4143ba01e623c8f1cd76208fa673acb688deb71415fbce43eb6b4ee712dfc3ae->enter($__internal_4143ba01e623c8f1cd76208fa673acb688deb71415fbce43eb6b4ee712dfc3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 258
        ob_start();
        // line 259
        echo "    ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 260
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 262
            echo "        ";
            if (( !array_key_exists("row", $context) || (($context["row"] ?? $this->getContext($context, "row")) == true))) {
                // line 263
                echo "            ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
                // line 264
                echo "        ";
            }
            // line 265
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter(($context["input_wrapper_class"] ?? $this->getContext($context, "input_wrapper_class")), "col-sm-6")) : ("col-sm-6"));
            // line 266
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 267
            echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? $this->getContext($context, "input_wrapper_class")), "html", null, true);
            echo "\">
                ";
            // line 268
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            echo "
            </div>
            ";
            // line 270
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                // line 271
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? $this->getContext($context, "input_wrapper_class")), "html", null, true);
                echo "\">
                    ";
                // line 272
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 275
            echo "            ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 276
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? $this->getContext($context, "input_wrapper_class")), "html", null, true);
                echo "\">
                    ";
                // line 277
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 280
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4143ba01e623c8f1cd76208fa673acb688deb71415fbce43eb6b4ee712dfc3ae->leave($__internal_4143ba01e623c8f1cd76208fa673acb688deb71415fbce43eb6b4ee712dfc3ae_prof);

        
        $__internal_7316b771ffa47a5c68680a0ab8e8aa798f1fb5c2800e4a7210436a68d164d687->leave($__internal_7316b771ffa47a5c68680a0ab8e8aa798f1fb5c2800e4a7210436a68d164d687_prof);

    }

    // line 285
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_93f654082cd20a279490c7e2fd72d970f97380b4f0ce18385ec69a19ce0cb84d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f654082cd20a279490c7e2fd72d970f97380b4f0ce18385ec69a19ce0cb84d->enter($__internal_93f654082cd20a279490c7e2fd72d970f97380b4f0ce18385ec69a19ce0cb84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_dd4f87a0b56e40c16cb5513dd5c176ed06f8f77562487135892c60516a13ce10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4f87a0b56e40c16cb5513dd5c176ed06f8f77562487135892c60516a13ce10->enter($__internal_dd4f87a0b56e40c16cb5513dd5c176ed06f8f77562487135892c60516a13ce10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 286
        ob_start();
        // line 287
        echo "    ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 288
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 290
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
            // line 291
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 292
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
            ";
            // line 293
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "

            ";
            // line 295
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 296
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 297
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 300
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 302
            echo "
            ";
            // line 303
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 304
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 305
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 308
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 310
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dd4f87a0b56e40c16cb5513dd5c176ed06f8f77562487135892c60516a13ce10->leave($__internal_dd4f87a0b56e40c16cb5513dd5c176ed06f8f77562487135892c60516a13ce10_prof);

        
        $__internal_93f654082cd20a279490c7e2fd72d970f97380b4f0ce18385ec69a19ce0cb84d->leave($__internal_93f654082cd20a279490c7e2fd72d970f97380b4f0ce18385ec69a19ce0cb84d_prof);

    }

    // line 315
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_dcd9f91e8a6eaf30ca098e56afb5a27b6c4fd6493aaebb63eda6c507d0c466a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd9f91e8a6eaf30ca098e56afb5a27b6c4fd6493aaebb63eda6c507d0c466a1->enter($__internal_dcd9f91e8a6eaf30ca098e56afb5a27b6c4fd6493aaebb63eda6c507d0c466a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_20048301a6e5a9c4c4731df5b6a0c4bc05c6477db623267e0b58297c47cd0375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20048301a6e5a9c4c4731df5b6a0c4bc05c6477db623267e0b58297c47cd0375->enter($__internal_20048301a6e5a9c4c4731df5b6a0c4bc05c6477db623267e0b58297c47cd0375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 316
        echo "    ";
        $context["show_label"] = ((array_key_exists("show_label", $context)) ? (_twig_default_filter(($context["show_label"] ?? $this->getContext($context, "show_label")), true)) : (true));
        // line 317
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 318
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", true, true)) {
            // line 319
            echo "            ";
            $context["label"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array()), ($context["label"] ?? $this->getContext($context, "label")))) : (($context["label"] ?? $this->getContext($context, "label"))));
            // line 320
            echo "        ";
        }
        // line 321
        echo "
        ";
        // line 322
        $context["div_class"] = "sonata-ba-field";
        // line 323
        echo "
        ";
        // line 324
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 325
            echo "            ";
            $context["div_class"] = (($context["div_class"] ?? $this->getContext($context, "div_class")) . " sonata-collection-row-without-label");
            // line 326
            echo "        ";
        }
        // line 327
        echo "
        ";
        // line 328
        if ((array_key_exists("sonata_admin", $context) && ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 329
            echo "            ";
            // line 330
            echo "            ";
            if (((($context["label"] ?? $this->getContext($context, "label")) === false) || $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "checked", array(), "any", true, true))) {
                // line 331
                echo "                ";
                if (twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) {
                    // line 332
                    echo "                    ";
                    $context["div_class"] = (($context["div_class"] ?? $this->getContext($context, "div_class")) . " col-sm-12");
                    // line 333
                    echo "                ";
                } else {
                    // line 334
                    echo "                    ";
                    $context["div_class"] = (($context["div_class"] ?? $this->getContext($context, "div_class")) . " col-sm-9 col-sm-offset-3");
                    // line 335
                    echo "                ";
                }
                // line 336
                echo "            ";
            } else {
                // line 337
                echo "                ";
                $context["div_class"] = (($context["div_class"] ?? $this->getContext($context, "div_class")) . " col-sm-9");
                // line 338
                echo "            ";
            }
            // line 339
            echo "        ";
        }
        // line 340
        echo "
        ";
        // line 341
        if (($context["show_label"] ?? $this->getContext($context, "show_label"))) {
            // line 342
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter(($context["label"] ?? $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
        ";
        }
        // line 344
        echo "
        ";
        // line 345
        if ((array_key_exists("sonata_admin", $context) && ($context["sonata_admin_enabled"] ?? $this->getContext($context, "sonata_admin_enabled")))) {
            // line 346
            echo "            ";
            $context["div_class"] = ((((($context["div_class"] ?? $this->getContext($context, "div_class")) . " sonata-ba-field-") . $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "edit", array())) . "-") . $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "inline", array()));
            // line 347
            echo "        ";
        }
        // line 348
        echo "
        ";
        // line 349
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 350
            echo "            ";
            $context["div_class"] = (($context["div_class"] ?? $this->getContext($context, "div_class")) . " sonata-ba-field-error");
            // line 351
            echo "        ";
        }
        // line 352
        echo "
        <div class=\"";
        // line 353
        echo twig_escape_filter($this->env, ($context["div_class"] ?? $this->getContext($context, "div_class")), "html", null, true);
        echo "\">
            ";
        // line 354
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 355
        echo "
            ";
        // line 356
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 357
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 358
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                </div>
            ";
        }
        // line 361
        echo "
            ";
        // line 362
        if (((array_key_exists("sonata_admin", $context) && ($context["sonata_admin_enabled"] ?? $this->getContext($context, "sonata_admin_enabled"))) && (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "help", array()), false)) : (false)))) {
            // line 363
            echo "                <span class=\"help-block sonata-ba-field-help\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "help", array()), array(), (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())) ? ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array()))));
            echo "</span>
            ";
        }
        // line 365
        echo "        </div>
    </div>
";
        
        $__internal_20048301a6e5a9c4c4731df5b6a0c4bc05c6477db623267e0b58297c47cd0375->leave($__internal_20048301a6e5a9c4c4731df5b6a0c4bc05c6477db623267e0b58297c47cd0375_prof);

        
        $__internal_dcd9f91e8a6eaf30ca098e56afb5a27b6c4fd6493aaebb63eda6c507d0c466a1->leave($__internal_dcd9f91e8a6eaf30ca098e56afb5a27b6c4fd6493aaebb63eda6c507d0c466a1_prof);

    }

    // line 369
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_bc34fcf130ea3b847b1bf876f0faf3fc26f7afa9d0266287ea610d9b9c3be584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc34fcf130ea3b847b1bf876f0faf3fc26f7afa9d0266287ea610d9b9c3be584->enter($__internal_bc34fcf130ea3b847b1bf876f0faf3fc26f7afa9d0266287ea610d9b9c3be584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_fb32330e35cc51b8652bb55f09a5905825a227bdbded363fbf0f0ddde9e0bf22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb32330e35cc51b8652bb55f09a5905825a227bdbded363fbf0f0ddde9e0bf22->enter($__internal_fb32330e35cc51b8652bb55f09a5905825a227bdbded363fbf0f0ddde9e0bf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 370
        $context["show_label"] = false;
        // line 371
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fb32330e35cc51b8652bb55f09a5905825a227bdbded363fbf0f0ddde9e0bf22->leave($__internal_fb32330e35cc51b8652bb55f09a5905825a227bdbded363fbf0f0ddde9e0bf22_prof);

        
        $__internal_bc34fcf130ea3b847b1bf876f0faf3fc26f7afa9d0266287ea610d9b9c3be584->leave($__internal_bc34fcf130ea3b847b1bf876f0faf3fc26f7afa9d0266287ea610d9b9c3be584_prof);

    }

    // line 374
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_19d82250d18468ad8a276cd54b99a2d1afa779d84466eb07a57c339cd1c156b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d82250d18468ad8a276cd54b99a2d1afa779d84466eb07a57c339cd1c156b5->enter($__internal_19d82250d18468ad8a276cd54b99a2d1afa779d84466eb07a57c339cd1c156b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_6f399c0f85041564534867ea0892db31829b716ac08fe6de10588daa3d12c193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f399c0f85041564534867ea0892db31829b716ac08fe6de10588daa3d12c193->enter($__internal_6f399c0f85041564534867ea0892db31829b716ac08fe6de10588daa3d12c193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 375
        $context["show_label"] = false;
        // line 376
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6f399c0f85041564534867ea0892db31829b716ac08fe6de10588daa3d12c193->leave($__internal_6f399c0f85041564534867ea0892db31829b716ac08fe6de10588daa3d12c193_prof);

        
        $__internal_19d82250d18468ad8a276cd54b99a2d1afa779d84466eb07a57c339cd1c156b5->leave($__internal_19d82250d18468ad8a276cd54b99a2d1afa779d84466eb07a57c339cd1c156b5_prof);

    }

    // line 379
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        $__internal_4e2358a821b08182a554ef8cb460cd8d6a8486770cb026caf53166e9910f1227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2358a821b08182a554ef8cb460cd8d6a8486770cb026caf53166e9910f1227->enter($__internal_4e2358a821b08182a554ef8cb460cd8d6a8486770cb026caf53166e9910f1227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        $__internal_f0e6c44d823406aac06e70d6e3d729abba9762dd313eadafbc423672a25d1ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e6c44d823406aac06e70d6e3d729abba9762dd313eadafbc423672a25d1ab1->enter($__internal_f0e6c44d823406aac06e70d6e3d729abba9762dd313eadafbc423672a25d1ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        // line 380
        ob_start();
        // line 381
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 382
        if (($context["allow_delete"] ?? $this->getContext($context, "allow_delete"))) {
            // line 383
            echo "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        ";
        }
        // line 391
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["child"] ?? $this->getContext($context, "child")), 'row', array("label" => false));
        echo "
        ";
        // line 392
        if (($context["allow_delete"] ?? $this->getContext($context, "allow_delete"))) {
            // line 393
            echo "                </div>
            </div>
        ";
        }
        // line 396
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f0e6c44d823406aac06e70d6e3d729abba9762dd313eadafbc423672a25d1ab1->leave($__internal_f0e6c44d823406aac06e70d6e3d729abba9762dd313eadafbc423672a25d1ab1_prof);

        
        $__internal_4e2358a821b08182a554ef8cb460cd8d6a8486770cb026caf53166e9910f1227->leave($__internal_4e2358a821b08182a554ef8cb460cd8d6a8486770cb026caf53166e9910f1227_prof);

    }

    // line 400
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        $__internal_ffa89e07c009169877d8c4f72dc727620c8eb6a61286ad8eccafd42b30442ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa89e07c009169877d8c4f72dc727620c8eb6a61286ad8eccafd42b30442ddf->enter($__internal_ffa89e07c009169877d8c4f72dc727620c8eb6a61286ad8eccafd42b30442ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        $__internal_baba0d766705147c40b451067c16b827de599302c741d94863f1930ad18dd03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baba0d766705147c40b451067c16b827de599302c741d94863f1930ad18dd03b->enter($__internal_baba0d766705147c40b451067c16b827de599302c741d94863f1930ad18dd03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        // line 401
        ob_start();
        // line 402
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 403
            echo "        ";
            $context["child"] = ($context["prototype"] ?? $this->getContext($context, "prototype"));
            // line 404
            echo "        ";
            $context["allow_delete_backup"] = ($context["allow_delete"] ?? $this->getContext($context, "allow_delete"));
            // line 405
            echo "        ";
            $context["allow_delete"] = true;
            // line 406
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" =>             $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute(($context["prototype"] ?? $this->getContext($context, "prototype")), "vars", array()), "name", array()), "class" => (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 407
            echo "        ";
            $context["allow_delete"] = ($context["allow_delete_backup"] ?? $this->getContext($context, "allow_delete_backup"));
            // line 408
            echo "    ";
        }
        // line 409
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 410
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 411
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 412
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 415
        if (($context["allow_add"] ?? $this->getContext($context, "allow_add"))) {
            // line 416
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        ";
        }
        // line 418
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_baba0d766705147c40b451067c16b827de599302c741d94863f1930ad18dd03b->leave($__internal_baba0d766705147c40b451067c16b827de599302c741d94863f1930ad18dd03b_prof);

        
        $__internal_ffa89e07c009169877d8c4f72dc727620c8eb6a61286ad8eccafd42b30442ddf->leave($__internal_ffa89e07c009169877d8c4f72dc727620c8eb6a61286ad8eccafd42b30442ddf_prof);

    }

    // line 422
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        $__internal_255bd59bb36eb5799211caae308e0d28139465db41fb264a02c8a5059a2550c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255bd59bb36eb5799211caae308e0d28139465db41fb264a02c8a5059a2550c6->enter($__internal_255bd59bb36eb5799211caae308e0d28139465db41fb264a02c8a5059a2550c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        $__internal_d4d437f5ba939406bfb9342b4d31d01ad809cafc3a02e4f312a4dfc14bee83a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d437f5ba939406bfb9342b4d31d01ad809cafc3a02e4f312a4dfc14bee83a0->enter($__internal_d4d437f5ba939406bfb9342b4d31d01ad809cafc3a02e4f312a4dfc14bee83a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        // line 423
        echo "    ";
        ob_start();
        // line 424
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 425
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 427
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 428
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        echo "
            ";
        // line 431
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d4d437f5ba939406bfb9342b4d31d01ad809cafc3a02e4f312a4dfc14bee83a0->leave($__internal_d4d437f5ba939406bfb9342b4d31d01ad809cafc3a02e4f312a4dfc14bee83a0_prof);

        
        $__internal_255bd59bb36eb5799211caae308e0d28139465db41fb264a02c8a5059a2550c6->leave($__internal_255bd59bb36eb5799211caae308e0d28139465db41fb264a02c8a5059a2550c6_prof);

    }

    // line 436
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        $__internal_3a9dcc1b83a9b6a326a1aaf8b19137aaad6f80657514924320427696a1cf6777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9dcc1b83a9b6a326a1aaf8b19137aaad6f80657514924320427696a1cf6777->enter($__internal_3a9dcc1b83a9b6a326a1aaf8b19137aaad6f80657514924320427696a1cf6777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        $__internal_f9b321d4e5044401ab1b68f5cb8e1c90b6f6c3fa39da69b7251b580505fad1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b321d4e5044401ab1b68f5cb8e1c90b6f6c3fa39da69b7251b580505fad1d6->enter($__internal_f9b321d4e5044401ab1b68f5cb8e1c90b6f6c3fa39da69b7251b580505fad1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        // line 437
        echo "    ";
        ob_start();
        // line 438
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["key"] ?? $this->getContext($context, "key")), "html", null, true);
        echo "\">

            ";
        // line 440
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["child"] ?? $this->getContext($context, "child")), 'label');
        echo "

            ";
        // line 442
        $context["div_class"] = "";
        // line 443
        echo "            ";
        if (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal")) {
            // line 444
            echo "                ";
            $context["div_class"] = "col-sm-9";
            // line 445
            echo "            ";
        }
        // line 446
        echo "
            <div class=\"";
        // line 447
        echo twig_escape_filter($this->env, ($context["div_class"] ?? $this->getContext($context, "div_class")), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "edit", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "inline", array()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 448
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["child"] ?? $this->getContext($context, "child")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 449
        echo "            </div>

            ";
        // line 451
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            // line 452
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 453
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["child"] ?? $this->getContext($context, "child")), 'errors');
            echo "
                </div>
            ";
        }
        // line 456
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f9b321d4e5044401ab1b68f5cb8e1c90b6f6c3fa39da69b7251b580505fad1d6->leave($__internal_f9b321d4e5044401ab1b68f5cb8e1c90b6f6c3fa39da69b7251b580505fad1d6_prof);

        
        $__internal_3a9dcc1b83a9b6a326a1aaf8b19137aaad6f80657514924320427696a1cf6777->leave($__internal_3a9dcc1b83a9b6a326a1aaf8b19137aaad6f80657514924320427696a1cf6777_prof);

    }

    // line 460
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_249c879c28e2b35a56d29921e08a4447daf3cb694c1b3fc53c45b5ccc12e8d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_249c879c28e2b35a56d29921e08a4447daf3cb694c1b3fc53c45b5ccc12e8d4c->enter($__internal_249c879c28e2b35a56d29921e08a4447daf3cb694c1b3fc53c45b5ccc12e8d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        $__internal_488a488d49cb52c4730be8cf52234efa055203fbf57708ef85a0052d4881054a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488a488d49cb52c4730be8cf52234efa055203fbf57708ef85a0052d4881054a->enter($__internal_488a488d49cb52c4730be8cf52234efa055203fbf57708ef85a0052d4881054a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 461
        echo "    ";
        $this->loadTemplate(($context["template"] ?? $this->getContext($context, "template")), "SonataAdminBundle:Form:form_admin_fields.html.twig", 461)->display($context);
        
        $__internal_488a488d49cb52c4730be8cf52234efa055203fbf57708ef85a0052d4881054a->leave($__internal_488a488d49cb52c4730be8cf52234efa055203fbf57708ef85a0052d4881054a_prof);

        
        $__internal_249c879c28e2b35a56d29921e08a4447daf3cb694c1b3fc53c45b5ccc12e8d4c->leave($__internal_249c879c28e2b35a56d29921e08a4447daf3cb694c1b3fc53c45b5ccc12e8d4c_prof);

    }

    // line 464
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        $__internal_2cfe48cee745a3aaf910b572b4f1e75b03ecff0afd421293e51b0c24c706eefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cfe48cee745a3aaf910b572b4f1e75b03ecff0afd421293e51b0c24c706eefd->enter($__internal_2cfe48cee745a3aaf910b572b4f1e75b03ecff0afd421293e51b0c24c706eefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        $__internal_1e4e2b9e5f85e7f8af7eff0f09d7dfba90c94838758d0dff8213c7ead5945f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4e2b9e5f85e7f8af7eff0f09d7dfba90c94838758d0dff8213c7ead5945f42->enter($__internal_1e4e2b9e5f85e7f8af7eff0f09d7dfba90c94838758d0dff8213c7ead5945f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        // line 465
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 467
        echo "    ";
        $context["main_form_name"] = twig_slice($this->env, ($context["id"] ?? $this->getContext($context, "id")), 0, ((twig_length_filter($this->env, ($context["id"] ?? $this->getContext($context, "id"))) - twig_length_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")))) - 1));
        // line 468
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 470
        echo twig_jsonencode_filter(($context["all_fields"] ?? $this->getContext($context, "all_fields")));
        echo ";
            var map = ";
        // line 471
        echo twig_jsonencode_filter(($context["map"] ?? $this->getContext($context, "map")));
        echo ";

            var showMaskChoiceEl = jQuery('#";
        // line 473
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? $this->getContext($context, "main_form_name")), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val) {
                var controlGroupIdFunc = function (field) {
                    // Most of fields are named with an underscore
                    var defaultFieldId = '#sonata-ba-field-container-";
        // line 482
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? $this->getContext($context, "main_form_name")), "html", null, true);
        echo "_' + field;

                    // Some fields may be named with a dash (like keys of immutable array form type)
                    if (jQuery(defaultFieldId).length === 0) {
                        return '#sonata-ba-field-container-";
        // line 486
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? $this->getContext($context, "main_form_name")), "html", null, true);
        echo "-' + field;
                    }

                    return defaultFieldId;
                };

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });

                if (map[val]) {
                    jQuery.each(map[val], function (i, field) {
                        jQuery(controlGroupIdFunc(field)).show();
                    });
                }
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>
";
        
        $__internal_1e4e2b9e5f85e7f8af7eff0f09d7dfba90c94838758d0dff8213c7ead5945f42->leave($__internal_1e4e2b9e5f85e7f8af7eff0f09d7dfba90c94838758d0dff8213c7ead5945f42_prof);

        
        $__internal_2cfe48cee745a3aaf910b572b4f1e75b03ecff0afd421293e51b0c24c706eefd->leave($__internal_2cfe48cee745a3aaf910b572b4f1e75b03ecff0afd421293e51b0c24c706eefd_prof);

    }

    // line 508
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = array())
    {
        $__internal_aa23913caefd85b8311dca39a4d7117516b5fcf492dcc5b993744eb3b7869d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa23913caefd85b8311dca39a4d7117516b5fcf492dcc5b993744eb3b7869d45->enter($__internal_aa23913caefd85b8311dca39a4d7117516b5fcf492dcc5b993744eb3b7869d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        $__internal_c92305883d4fbf5b32d4a20b7274f6b7d437e04772e45186ae8ade2d8a57227d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92305883d4fbf5b32d4a20b7274f6b7d437e04772e45186ae8ade2d8a57227d->enter($__internal_c92305883d4fbf5b32d4a20b7274f6b7d437e04772e45186ae8ade2d8a57227d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        // line 509
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? $this->getContext($context, "value")), ","), "html", null, true);
        echo "\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#";
        // line 513
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "'), ";
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "choices", array()));
        echo ");
        });
    </script>
";
        
        $__internal_c92305883d4fbf5b32d4a20b7274f6b7d437e04772e45186ae8ade2d8a57227d->leave($__internal_c92305883d4fbf5b32d4a20b7274f6b7d437e04772e45186ae8ade2d8a57227d_prof);

        
        $__internal_aa23913caefd85b8311dca39a4d7117516b5fcf492dcc5b993744eb3b7869d45->leave($__internal_aa23913caefd85b8311dca39a4d7117516b5fcf492dcc5b993744eb3b7869d45_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1660 => 513,  1648 => 509,  1639 => 508,  1608 => 486,  1601 => 482,  1587 => 473,  1582 => 471,  1578 => 470,  1574 => 468,  1571 => 467,  1566 => 465,  1557 => 464,  1546 => 461,  1537 => 460,  1525 => 456,  1519 => 453,  1516 => 452,  1514 => 451,  1510 => 449,  1507 => 448,  1495 => 447,  1492 => 446,  1489 => 445,  1486 => 444,  1483 => 443,  1481 => 442,  1476 => 440,  1464 => 438,  1461 => 437,  1452 => 436,  1438 => 431,  1435 => 430,  1418 => 428,  1401 => 427,  1396 => 425,  1391 => 424,  1388 => 423,  1379 => 422,  1367 => 418,  1363 => 416,  1361 => 415,  1356 => 414,  1339 => 412,  1322 => 411,  1318 => 410,  1313 => 409,  1310 => 408,  1307 => 407,  1304 => 406,  1301 => 405,  1298 => 404,  1295 => 403,  1292 => 402,  1290 => 401,  1281 => 400,  1269 => 396,  1264 => 393,  1262 => 392,  1257 => 391,  1247 => 383,  1245 => 382,  1242 => 381,  1240 => 380,  1231 => 379,  1220 => 376,  1218 => 375,  1209 => 374,  1198 => 371,  1196 => 370,  1187 => 369,  1175 => 365,  1169 => 363,  1167 => 362,  1164 => 361,  1158 => 358,  1155 => 357,  1153 => 356,  1150 => 355,  1147 => 354,  1143 => 353,  1140 => 352,  1137 => 351,  1134 => 350,  1132 => 349,  1129 => 348,  1126 => 347,  1123 => 346,  1121 => 345,  1118 => 344,  1112 => 342,  1110 => 341,  1107 => 340,  1104 => 339,  1101 => 338,  1098 => 337,  1095 => 336,  1092 => 335,  1089 => 334,  1086 => 333,  1083 => 332,  1080 => 331,  1077 => 330,  1075 => 329,  1073 => 328,  1070 => 327,  1067 => 326,  1064 => 325,  1062 => 324,  1059 => 323,  1057 => 322,  1054 => 321,  1051 => 320,  1048 => 319,  1046 => 318,  1037 => 317,  1034 => 316,  1025 => 315,  1012 => 310,  1006 => 308,  1000 => 305,  997 => 304,  995 => 303,  992 => 302,  986 => 300,  980 => 297,  977 => 296,  975 => 295,  970 => 293,  966 => 292,  961 => 291,  958 => 290,  952 => 288,  949 => 287,  947 => 286,  938 => 285,  925 => 280,  919 => 277,  914 => 276,  911 => 275,  905 => 272,  900 => 271,  898 => 270,  893 => 268,  889 => 267,  884 => 266,  881 => 265,  878 => 264,  875 => 263,  872 => 262,  866 => 260,  863 => 259,  861 => 258,  852 => 257,  838 => 251,  836 => 250,  835 => 249,  834 => 248,  833 => 247,  828 => 246,  825 => 245,  822 => 244,  819 => 243,  816 => 242,  810 => 240,  807 => 239,  805 => 238,  796 => 237,  780 => 231,  777 => 230,  774 => 229,  768 => 227,  766 => 226,  761 => 225,  758 => 224,  755 => 223,  751 => 221,  748 => 219,  745 => 217,  743 => 216,  736 => 215,  734 => 214,  731 => 213,  728 => 211,  725 => 209,  723 => 208,  716 => 207,  714 => 206,  706 => 205,  700 => 203,  697 => 202,  695 => 201,  692 => 200,  689 => 199,  686 => 198,  683 => 197,  680 => 196,  677 => 195,  675 => 194,  666 => 193,  654 => 189,  647 => 187,  644 => 186,  641 => 185,  637 => 184,  632 => 183,  629 => 182,  627 => 181,  618 => 180,  606 => 176,  603 => 174,  601 => 173,  599 => 172,  597 => 171,  595 => 170,  580 => 169,  577 => 168,  574 => 167,  571 => 166,  568 => 165,  565 => 164,  562 => 163,  559 => 162,  556 => 161,  553 => 160,  550 => 159,  548 => 158,  545 => 157,  542 => 156,  539 => 155,  530 => 154,  520 => 151,  511 => 150,  501 => 147,  492 => 146,  479 => 141,  473 => 139,  470 => 137,  468 => 136,  466 => 135,  464 => 134,  449 => 133,  446 => 132,  442 => 129,  439 => 126,  438 => 125,  437 => 124,  435 => 123,  433 => 122,  430 => 121,  427 => 120,  424 => 119,  421 => 118,  418 => 117,  415 => 116,  413 => 115,  410 => 114,  407 => 113,  405 => 112,  402 => 111,  400 => 110,  397 => 109,  394 => 108,  391 => 107,  388 => 106,  386 => 105,  377 => 104,  366 => 99,  364 => 98,  362 => 97,  359 => 95,  357 => 94,  355 => 93,  346 => 92,  335 => 88,  333 => 87,  331 => 86,  328 => 84,  326 => 83,  324 => 82,  315 => 81,  300 => 75,  297 => 74,  294 => 73,  291 => 72,  282 => 71,  271 => 68,  267 => 66,  265 => 65,  262 => 64,  259 => 63,  257 => 62,  251 => 60,  249 => 59,  247 => 58,  244 => 57,  241 => 56,  238 => 54,  236 => 53,  227 => 52,  214 => 49,  211 => 48,  202 => 47,  189 => 44,  186 => 43,  183 => 42,  180 => 41,  177 => 40,  168 => 39,  158 => 36,  154 => 35,  145 => 34,  130 => 29,  128 => 28,  126 => 27,  117 => 26,  106 => 23,  102 => 22,  99 => 21,  90 => 19,  86 => 18,  83 => 17,  78 => 16,  76 => 15,  67 => 14,  11 => 12,);
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

{% extends 'form_div_layout.html.twig' %}

{% block form_errors -%}
    {% if errors|length > 0 %}
        {% if not form.parent %}<div class=\"alert alert-danger\">{% endif %}
            <ul class=\"list-unstyled\">
                {% for error in errors %}
                    <li><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> {{ error.message }}</li>
                {% endfor %}
            </ul>
        {% if not form.parent %}</div>{% endif %}
    {% endif %}
{%- endblock form_errors %}

{% block sonata_help %}
{% spaceless %}
{% if sonata_help is defined and sonata_help %}
    <span class=\"help-block sonata-ba-field-widget-help\">{{ sonata_help|raw }}</span>
{% endif %}
{% endspaceless %}
{% endblock %}

{% block form_widget -%}
    {{ parent() }}
    {{ block('sonata_help') }}
{%- endblock form_widget %}

{% block form_widget_simple %}
    {% set type = type|default('text') %}
    {% if type != 'file' %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {% endif %}
    {{ parent() }}
{% endblock form_widget_simple %}

{% block textarea_widget %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock textarea_widget %}

{% block money_widget -%}
    {% if money_pattern == '{{ widget }}' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set currencySymbol = money_pattern|replace({'{{ widget }}': ''})|trim %}
        {% if money_pattern matches '/^{{ widget }}/' %}
            <div class=\"input-group\">
                {{- block('form_widget_simple') -}}
                <span class=\"input-group-addon\">{{ currencySymbol }}</span>
            </div>
        {% elseif money_pattern matches '/{{ widget }}\$/' %}
            <div class=\"input-group\">
                <span class=\"input-group-addon\">{{ currencySymbol }}</span>
                {{- block('form_widget_simple') -}}
            </div>
        {% endif %}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget %}
    {% spaceless %}
        {% set type = type|default('text') %}
        <div class=\"input-group\">
            {{ block('form_widget_simple') }}
            <span class=\"input-group-addon\">%</span>
        </div>
    {% endspaceless %}
{% endblock percent_widget %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default('') -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}
{% block form_label %}
{% spaceless %}
    {% if label is not same as(false) and sonata_admin.options['form_type'] == 'horizontal' %}
        {% set label_class = 'col-sm-3' %}
    {% endif %}

    {% set label_class = label_class|default('') ~ ' control-label' %}

    {% if label is not same as(false) %}
        {% set label_attr = label_attr|merge({'class': label_attr.class|default('') ~ label_class }) %}

        {% if not compound %}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {% endif %}
        {% if required %}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}

        {% if label is empty %}
            {%- if label_format is defined and label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}

        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {% if translation_domain is same as(false) %}
                {{- label -}}
            {% elseif not sonata_admin.admin %}
                {{- label|trans({}, translation_domain) -}}
            {% else %}
                {{ label|trans({}, sonata_admin.field_description.translationDomain ?: admin.translationDomain) }}
            {% endif %}
        </label>
    {% endif %}
{% endspaceless %}
{% endblock form_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {% if sonata_admin.admin %}
        {% set translation_domain = sonata_admin.field_description.translationDomain %}
    {% endif %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {%- if label is not same as(false) -%}
                <span class=\"control-label__text\">
                    {{- label|trans({}, translation_domain) -}}
                </span>
            {%- endif -%}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{% block choice_widget_expanded %}
{% spaceless %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' list-unstyled'}) %}
    <ul {{ block('widget_container_attributes') }}>
    {% for child in form %}
        <li>
            {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}
        </li>
    {% endfor %}
    </ul>
{% endspaceless %}
{% endblock choice_widget_expanded %}

{% block choice_widget_collapsed %}
{% spaceless %}
    {% if required and placeholder is defined and placeholder is none %}
        {% set required = false %}
    {% elseif required and empty_value is defined and empty_value_in_choices is defined and empty_value is none and not empty_value_in_choices and not multiple %}
        {% set required = false %}
    {% endif %}

    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {% if (sortable is defined) and sortable and multiple %}
        {{ block('sonata_type_choice_multiple_sortable') }}
    {% else %}
        <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %} >
            {% if empty_value is defined and empty_value is not none %}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {% if not sonata_admin.admin %}
                        {{- empty_value|trans({}, translation_domain) -}}
                    {% else %}
                        {{- empty_value|trans({}, sonata_admin.field_description.translationDomain) -}}
                    {% endif%}
                </option>
            {% elseif placeholder is defined and placeholder is not none %}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {% if not sonata_admin.admin %}
                        {{- placeholder|trans({}, translation_domain) -}}
                    {% else %}
                        {{- placeholder|trans({}, sonata_admin.field_description.translationDomain) -}}
                    {% endif%}
                </option>
            {% endif %}
            {% if preferred_choices|length > 0 %}
                {% set options = preferred_choices %}
                {{ block('choice_widget_options') }}
                {% if choices|length > 0 %}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {% endif %}
            {% endif %}
            {% set options = choices %}
            {{ block('choice_widget_options') }}
        </select>
    {% endif %}
{% endspaceless %}
{% endblock choice_widget_collapsed %}

{% block date_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% if row is not defined or row == true %}
            {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        {% endif %}
        {% set input_wrapper_class = input_wrapper_class|default('col-sm-4') %}
        <div {{ block('widget_container_attributes') }}>
            {{ date_pattern|replace({
                '{{ year }}':  '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.year) ~ '</div>',
                '{{ month }}': '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.month) ~ '</div>',
                '{{ day }}':   '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.day) ~ '</div>',
            })|raw }}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock date_widget %}

{% block time_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% if row is not defined or row == true %}
            {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        {% endif %}
        {% set input_wrapper_class = input_wrapper_class|default('col-sm-6') %}
        <div {{ block('widget_container_attributes') }}>
            <div class=\"{{ input_wrapper_class }}\">
                {{ form_widget(form.hour) }}
            </div>
            {% if with_minutes %}
                <div class=\"{{ input_wrapper_class }}\">
                    {{ form_widget(form.minute) }}
                </div>
            {% endif %}
            {% if with_seconds %}
                <div class=\"{{ input_wrapper_class }}\">
                    {{ form_widget(form.second) }}
                </div>
            {% endif %}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock time_widget %}

{% block datetime_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        <div {{ block('widget_container_attributes') }}>
            {{ form_errors(form.date) }}
            {{ form_errors(form.time) }}

            {% if form.date.vars.widget == 'single_text' %}
                <div class=\"col-sm-2\">
                    {{ form_widget(form.date) }}
                </div>
            {% else %}
                {{ form_widget(form.date, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}
            {% endif %}

            {% if form.time.vars.widget == 'single_text' %}
                <div class=\"col-sm-2\">
                    {{ form_widget(form.time) }}
                </div>
            {% else %}
                {{ form_widget(form.time, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}
            {% endif %}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock datetime_widget %}

{% block form_row %}
    {% set show_label = show_label|default(true) %}
    <div class=\"form-group{% if errors|length > 0 %} has-error{% endif %}\" id=\"sonata-ba-field-container-{{ id }}\">
        {% if sonata_admin.field_description.options is defined %}
            {% set label = sonata_admin.field_description.options.name|default(label)  %}
        {% endif %}

        {% set div_class = 'sonata-ba-field' %}

        {% if label is same as(false) %}
            {% set div_class = div_class ~ ' sonata-collection-row-without-label' %}
        {% endif %}

        {% if sonata_admin is defined and sonata_admin.options['form_type'] == 'horizontal' %}
            {# Add an offset if no label or is a checkbox/radio #}
            {% if label is same as(false) or form.vars.checked is defined %}
                {% if 'collection' in form.parent.vars.block_prefixes %}
                    {% set div_class = div_class ~ ' col-sm-12' %}
                {% else %}
                    {% set div_class = div_class ~ ' col-sm-9 col-sm-offset-3' %}
                {% endif %}
            {% else %}
                {% set div_class = div_class ~ ' col-sm-9' %}
            {% endif %}
        {% endif %}

        {% if show_label %}
            {{ form_label(form, label|default(null)) }}
        {% endif %}

        {% if sonata_admin is defined and sonata_admin_enabled %}
            {% set div_class = div_class ~ ' sonata-ba-field-' ~ sonata_admin.edit ~ '-' ~ sonata_admin.inline %}
        {% endif %}

        {% if errors|length > 0 %}
            {% set div_class = div_class ~ ' sonata-ba-field-error' %}
        {% endif %}

        <div class=\"{{ div_class }}\">
            {{ form_widget(form, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}

            {% if errors|length > 0 %}
                <div class=\"help-block sonata-ba-field-error-messages\">
                    {{ form_errors(form) }}
                </div>
            {% endif %}

            {% if sonata_admin is defined and sonata_admin_enabled and sonata_admin.field_description.help|default(false) %}
                <span class=\"help-block sonata-ba-field-help\">{{ sonata_admin.field_description.help|trans({}, sonata_admin.field_description.translationDomain ?: admin.translationDomain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endblock form_row %}

{% block checkbox_row -%}
    {% set show_label = false %}
    {{ block('form_row') }}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {% set show_label = false %}
    {{ block('form_row') }}
{%- endblock radio_row %}

{% block sonata_type_native_collection_widget_row %}
{% spaceless %}
    <div class=\"sonata-collection-row\">
        {% if allow_delete %}
            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        {% endif %}
            {{ form_row(child, { label: false }) }}
        {% if allow_delete %}
                </div>
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock sonata_type_native_collection_widget_row %}

{% block sonata_type_native_collection_widget %}
{% spaceless %}
    {% if prototype is defined %}
        {% set child = prototype %}
        {% set allow_delete_backup = allow_delete %}
        {% set allow_delete = true %}
        {% set attr = attr|merge({'data-prototype': block('sonata_type_native_collection_widget_row'), 'data-prototype-name': prototype.vars.name, 'class': attr.class|default('') }) %}
        {% set allow_delete = allow_delete_backup %}
    {% endif %}
    <div {{ block('widget_container_attributes') }}>
        {{ form_errors(form) }}
        {% for child in form %}
            {{ block('sonata_type_native_collection_widget_row') }}
        {% endfor %}
        {{ form_rest(form) }}
        {% if allow_add %}
            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock sonata_type_native_collection_widget %}

{% block sonata_type_immutable_array_widget %}
    {% spaceless %}
        <div {{ block('widget_container_attributes') }}>
            {{ form_errors(form) }}

            {% for key, child in form %}
                {{ block('sonata_type_immutable_array_widget_row') }}
            {% endfor %}

            {{ form_rest(form) }}
        </div>
    {% endspaceless %}
{% endblock sonata_type_immutable_array_widget %}

{% block sonata_type_immutable_array_widget_row %}
    {% spaceless %}
        <div class=\"form-group{% if child.vars.errors|length > 0%} error{%endif%}\" id=\"sonata-ba-field-container-{{ id }}-{{ key }}\">

            {{ form_label(child) }}

            {% set div_class = \"\" %}
            {% if sonata_admin.options['form_type'] == 'horizontal' %}
                {% set div_class = 'col-sm-9' %}
            {% endif%}

            <div class=\"{{ div_class }} sonata-ba-field sonata-ba-field-{{ sonata_admin.edit }}-{{ sonata_admin.inline }} {% if child.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
                {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}
            </div>

            {% if child.vars.errors|length > 0 %}
                <div class=\"help-block sonata-ba-field-error-messages\">
                    {{ form_errors(child) }}
                </div>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}

{% block sonata_type_model_autocomplete_widget %}
    {% include template %}
{% endblock sonata_type_model_autocomplete_widget %}

{% block sonata_type_choice_field_mask_widget %}
    {{ block('choice_widget') }}
    {# Taking the form name excluding ending field glue character #}
    {% set main_form_name = id|slice(0, (id|length - name|length)-1) %}
    <script>
        jQuery(document).ready(function() {
            var allFields = {{ all_fields|json_encode|raw }};
            var map = {{ map|json_encode|raw }};

            var showMaskChoiceEl = jQuery('#{{ main_form_name }}_{{ name }}');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val) {
                var controlGroupIdFunc = function (field) {
                    // Most of fields are named with an underscore
                    var defaultFieldId = '#sonata-ba-field-container-{{ main_form_name }}_' + field;

                    // Some fields may be named with a dash (like keys of immutable array form type)
                    if (jQuery(defaultFieldId).length === 0) {
                        return '#sonata-ba-field-container-{{ main_form_name }}-' + field;
                    }

                    return defaultFieldId;
                };

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });

                if (map[val]) {
                    jQuery.each(map[val], function (i, field) {
                        jQuery(controlGroupIdFunc(field)).show();
                    });
                }
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>
{% endblock %}

{%  block sonata_type_choice_multiple_sortable %}
    <input type=\"hidden\" name=\"{{ full_name }}\" id=\"{{ id }}\" value=\"{{ value|join(',') }}\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#{{ id }}'), {{ form.vars.choices|json_encode|raw }});
        });
    </script>
{% endblock %}
", "SonataAdminBundle:Form:form_admin_fields.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/Form/form_admin_fields.html.twig");
    }
}
