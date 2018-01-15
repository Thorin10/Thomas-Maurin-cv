<?php

/* SonataAdminBundle:Core:tab_menu_template.html.twig */
class __TwigTemplate_89f57140098e251f96e2e683c33b5fdcd445707ac87722836a4bd6a2266f7bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c02fc7016cf479e672daa5351c1a4cf317c75dd671e48df22abe4cde086dfec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c02fc7016cf479e672daa5351c1a4cf317c75dd671e48df22abe4cde086dfec->enter($__internal_2c02fc7016cf479e672daa5351c1a4cf317c75dd671e48df22abe4cde086dfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:tab_menu_template.html.twig"));

        $__internal_028fad7ef04f6afda662db1c94750fe6f646ecbf34dff098e2a5d1e66e86facd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028fad7ef04f6afda662db1c94750fe6f646ecbf34dff098e2a5d1e66e86facd->enter($__internal_028fad7ef04f6afda662db1c94750fe6f646ecbf34dff098e2a5d1e66e86facd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:tab_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c02fc7016cf479e672daa5351c1a4cf317c75dd671e48df22abe4cde086dfec->leave($__internal_2c02fc7016cf479e672daa5351c1a4cf317c75dd671e48df22abe4cde086dfec_prof);

        
        $__internal_028fad7ef04f6afda662db1c94750fe6f646ecbf34dff098e2a5d1e66e86facd->leave($__internal_028fad7ef04f6afda662db1c94750fe6f646ecbf34dff098e2a5d1e66e86facd_prof);

    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        $__internal_b04fc802e1e3ccb0aaf8a01078995d660d9adf9f2aac31eee33eb5a6af6418c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b04fc802e1e3ccb0aaf8a01078995d660d9adf9f2aac31eee33eb5a6af6418c7->enter($__internal_b04fc802e1e3ccb0aaf8a01078995d660d9adf9f2aac31eee33eb5a6af6418c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_581ab5249f487b393592409acfa041a90059dea0d729d489a01e0d110ef402ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581ab5249f487b393592409acfa041a90059dea0d729d489a01e0d110ef402ff->enter($__internal_581ab5249f487b393592409acfa041a90059dea0d729d489a01e0d110ef402ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 4);
        // line 5
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 6
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 7
            $context["is_dropdown"] = (($this->getAttribute(($context["attributes"] ?? null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "dropdown", array()), false)) : (false));
            // line 8
            $context["divider_prepend"] = (($this->getAttribute(($context["attributes"] ?? null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "divider_prepend", array()), false)) : (false));
            // line 9
            $context["divider_append"] = (($this->getAttribute(($context["attributes"] ?? null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "divider_append", array()), false)) : (false));
            // line 10
            echo "
";
            // line 12
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 14
            if (($context["divider_prepend"] ?? $this->getContext($context, "divider_prepend"))) {
                // line 15
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo "
";
            // line 19
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 21
            if (array_key_exists("matcher", $context)) {
                echo " ";
                // line 22
                if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                    // line 23
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 24
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array())), "method")) {
                    // line 25
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
                }
            } else {
                // line 27
                echo " ";
                // line 28
                if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "current", array())) {
                    // line 29
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 30
($context["item"] ?? $this->getContext($context, "item")), "currentAncestor", array())) {
                    // line 31
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
                }
            }
            // line 35
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 36
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 38
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 39
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 41
            echo "
";
            // line 43
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 44
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 45
            echo "
";
            // line 47
            if (($context["is_dropdown"] ?? $this->getContext($context, "is_dropdown"))) {
                // line 48
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => "dropdown"));
                // line 49
                $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => "dropdown-menu"));
            }
            // line 51
            echo "
";
            // line 53
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 54
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 56
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 57
            echo "
";
            // line 59
            echo "    <li";
            echo $context["macros"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 60
            if (($context["is_dropdown"] ?? $this->getContext($context, "is_dropdown"))) {
                // line 61
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 62
($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "current", array()) || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 63
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 65
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 68
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>";
            // line 71
            if (($context["divider_append"] ?? $this->getContext($context, "divider_append"))) {
                // line 72
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
        }
        
        $__internal_581ab5249f487b393592409acfa041a90059dea0d729d489a01e0d110ef402ff->leave($__internal_581ab5249f487b393592409acfa041a90059dea0d729d489a01e0d110ef402ff_prof);

        
        $__internal_b04fc802e1e3ccb0aaf8a01078995d660d9adf9f2aac31eee33eb5a6af6418c7->leave($__internal_b04fc802e1e3ccb0aaf8a01078995d660d9adf9f2aac31eee33eb5a6af6418c7_prof);

    }

    // line 77
    public function block_dividerElement($context, array $blocks = array())
    {
        $__internal_f57edb85b09a18e2a89e48e28ee0fceef6134922aa0628b292fc89f948cc4ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57edb85b09a18e2a89e48e28ee0fceef6134922aa0628b292fc89f948cc4ad2->enter($__internal_f57edb85b09a18e2a89e48e28ee0fceef6134922aa0628b292fc89f948cc4ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        $__internal_3ae667dd031ab77d7696468ad32025efe66f33de0baad9f79172669d309ef5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae667dd031ab77d7696468ad32025efe66f33de0baad9f79172669d309ef5c8->enter($__internal_3ae667dd031ab77d7696468ad32025efe66f33de0baad9f79172669d309ef5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 78
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) == 1)) {
            // line 79
            echo "    <li class=\"divider-vertical\"></li>
";
        } else {
            // line 81
            echo "    <li class=\"divider\"></li>
";
        }
        
        $__internal_3ae667dd031ab77d7696468ad32025efe66f33de0baad9f79172669d309ef5c8->leave($__internal_3ae667dd031ab77d7696468ad32025efe66f33de0baad9f79172669d309ef5c8_prof);

        
        $__internal_f57edb85b09a18e2a89e48e28ee0fceef6134922aa0628b292fc89f948cc4ad2->leave($__internal_f57edb85b09a18e2a89e48e28ee0fceef6134922aa0628b292fc89f948cc4ad2_prof);

    }

    // line 85
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_53bb211dc984c19602ffdf76e05793e950e6687c9d61c1d9b2f545d3ce6e120d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53bb211dc984c19602ffdf76e05793e950e6687c9d61c1d9b2f545d3ce6e120d->enter($__internal_53bb211dc984c19602ffdf76e05793e950e6687c9d61c1d9b2f545d3ce6e120d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_6684f418a5debb69b051a4d095da10608bdcd89038058968b079a2957cee4279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6684f418a5debb69b051a4d095da10608bdcd89038058968b079a2957cee4279->enter($__internal_6684f418a5debb69b051a4d095da10608bdcd89038058968b079a2957cee4279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 86
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 86);
        // line 87
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["macros"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">
        ";
        // line 88
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 89
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 91
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
        
        $__internal_6684f418a5debb69b051a4d095da10608bdcd89038058968b079a2957cee4279->leave($__internal_6684f418a5debb69b051a4d095da10608bdcd89038058968b079a2957cee4279_prof);

        
        $__internal_53bb211dc984c19602ffdf76e05793e950e6687c9d61c1d9b2f545d3ce6e120d->leave($__internal_53bb211dc984c19602ffdf76e05793e950e6687c9d61c1d9b2f545d3ce6e120d_prof);

    }

    // line 95
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_973094dd5cd3558b86801712ec73b2fb68a9e60de018cc934e8924e8f3599255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_973094dd5cd3558b86801712ec73b2fb68a9e60de018cc934e8924e8f3599255->enter($__internal_973094dd5cd3558b86801712ec73b2fb68a9e60de018cc934e8924e8f3599255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_453b4dc59580caf1743112141ea096af9d83611be5acf18c7fa44d64680df446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453b4dc59580caf1743112141ea096af9d83611be5acf18c7fa44d64680df446->enter($__internal_453b4dc59580caf1743112141ea096af9d83611be5acf18c7fa44d64680df446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 96
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 96);
        // line 97
        echo "    <span ";
        echo $context["macros"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">
        ";
        // line 98
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 99
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 101
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </span>
";
        
        $__internal_453b4dc59580caf1743112141ea096af9d83611be5acf18c7fa44d64680df446->leave($__internal_453b4dc59580caf1743112141ea096af9d83611be5acf18c7fa44d64680df446_prof);

        
        $__internal_973094dd5cd3558b86801712ec73b2fb68a9e60de018cc934e8924e8f3599255->leave($__internal_973094dd5cd3558b86801712ec73b2fb68a9e60de018cc934e8924e8f3599255_prof);

    }

    // line 105
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_0ea9e66e480272ef370b257dc421d968fa2e57b5b8835d110c7c404111fc56c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea9e66e480272ef370b257dc421d968fa2e57b5b8835d110c7c404111fc56c0->enter($__internal_0ea9e66e480272ef370b257dc421d968fa2e57b5b8835d110c7c404111fc56c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        $__internal_fe3c098c6c8071b5364ac94ba791e2c20463cc34147c1b77cdd1f6816ddacc28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3c098c6c8071b5364ac94ba791e2c20463cc34147c1b77cdd1f6816ddacc28->enter($__internal_fe3c098c6c8071b5364ac94ba791e2c20463cc34147c1b77cdd1f6816ddacc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 106
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 106);
        // line 107
        $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 108
        $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => "dropdown-toggle"));
        // line 109
        $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array());
        // line 110
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
        // line 111
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("data-toggle" => "dropdown"));
        // line 112
        echo "    <a href=\"#\"";
        echo $context["macros"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
        echo ">
        ";
        // line 113
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 114
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 116
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
        <b class=\"caret\"></b>
    </a>
";
        
        $__internal_fe3c098c6c8071b5364ac94ba791e2c20463cc34147c1b77cdd1f6816ddacc28->leave($__internal_fe3c098c6c8071b5364ac94ba791e2c20463cc34147c1b77cdd1f6816ddacc28_prof);

        
        $__internal_0ea9e66e480272ef370b257dc421d968fa2e57b5b8835d110c7c404111fc56c0->leave($__internal_0ea9e66e480272ef370b257dc421d968fa2e57b5b8835d110c7c404111fc56c0_prof);

    }

    // line 121
    public function block_label($context, array $blocks = array())
    {
        $__internal_f672353d4bbf28b3bdc38a7b1b82c421a659299c45627639723a33176e95d037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f672353d4bbf28b3bdc38a7b1b82c421a659299c45627639723a33176e95d037->enter($__internal_f672353d4bbf28b3bdc38a7b1b82c421a659299c45627639723a33176e95d037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_ae42077c3be75e34f6a23bca156189f0b791a281a9b07ba146c10147ae82a124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae42077c3be75e34f6a23bca156189f0b791a281a9b07ba146c10147ae82a124->enter($__internal_ae42077c3be75e34f6a23bca156189f0b791a281a9b07ba146c10147ae82a124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 123
($context["item"] ?? $this->getContext($context, "item")), "label", array()), $this->getAttribute(        // line 124
($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "translation_params", 1 => array()), "method"), $this->getAttribute(        // line 125
($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "translation_domain", 1 => (($this->getAttribute(        // line 127
($context["item"] ?? $this->getContext($context, "item")), "getParent", array(), "method")) ? ($this->getAttribute($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getParent", array(), "method"), "getExtra", array(0 => "translation_domain"), "method")) : (null))), "method")), "html", null, true);
        
        $__internal_ae42077c3be75e34f6a23bca156189f0b791a281a9b07ba146c10147ae82a124->leave($__internal_ae42077c3be75e34f6a23bca156189f0b791a281a9b07ba146c10147ae82a124_prof);

        
        $__internal_f672353d4bbf28b3bdc38a7b1b82c421a659299c45627639723a33176e95d037->leave($__internal_f672353d4bbf28b3bdc38a7b1b82c421a659299c45627639723a33176e95d037_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:tab_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 127,  355 => 125,  354 => 124,  353 => 123,  352 => 122,  343 => 121,  328 => 116,  322 => 114,  320 => 113,  315 => 112,  313 => 111,  311 => 110,  309 => 109,  307 => 108,  305 => 107,  302 => 106,  293 => 105,  279 => 101,  273 => 99,  271 => 98,  266 => 97,  263 => 96,  254 => 95,  240 => 91,  234 => 89,  232 => 88,  225 => 87,  222 => 86,  213 => 85,  201 => 81,  197 => 79,  195 => 78,  186 => 77,  173 => 72,  171 => 71,  166 => 68,  162 => 65,  158 => 63,  156 => 62,  153 => 61,  151 => 60,  147 => 59,  144 => 57,  142 => 56,  139 => 54,  137 => 53,  134 => 51,  131 => 49,  129 => 48,  127 => 47,  124 => 45,  122 => 44,  120 => 43,  117 => 41,  114 => 39,  112 => 38,  109 => 36,  107 => 35,  103 => 31,  101 => 30,  99 => 29,  97 => 28,  95 => 27,  91 => 25,  89 => 24,  87 => 23,  85 => 22,  82 => 21,  80 => 19,  77 => 17,  73 => 15,  71 => 14,  69 => 12,  66 => 10,  64 => 9,  62 => 8,  60 => 7,  58 => 6,  56 => 5,  54 => 4,  45 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block item %}
{% import \"knp_menu.html.twig\" as macros %}
{% if item.displayed %}
    {%- set attributes = item.attributes %}
    {%- set is_dropdown = attributes.dropdown|default(false) %}
    {%- set divider_prepend = attributes.divider_prepend|default(false) %}
    {%- set divider_append = attributes.divider_append|default(false) %}

{# unset bootstrap specific attributes #}
    {%- set attributes = attributes|merge({'dropdown': null, 'divider_prepend': null, 'divider_append': null }) %}

    {%- if divider_prepend %}
        {{ block('dividerElement') }}
    {%- endif %}

{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}

    {%- if matcher is defined %} {# KnpMenu 2.0#}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
    {%- else %} {# KnpMenu 1.X #}
        {%- if item.current %}
        {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif item.currentAncestor %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
    {%- endif %}

    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

{# building the class of the children #}
    {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
    {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}

{# adding classes for dropdown #}
    {%- if is_dropdown %}
        {%- set classes = classes|merge(['dropdown']) %}
        {%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}
    {%- endif %}

{# putting classes together #}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}

{# displaying the item #}
    <li{{ macros.attributes(attributes) }}>
        {%- if is_dropdown %}
            {{ block('dropdownElement') }}
        {%- elseif item.uri is not empty and (not item.current or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {{ block('list') }}
    </li>

    {%- if divider_append %}
        {{ block('dividerElement') }}
    {%- endif %}
{% endif %}
{% endblock %}

{% block dividerElement %}
{% if item.level == 1 %}
    <li class=\"divider-vertical\"></li>
{% else %}
    <li class=\"divider\"></li>
{% endif %}
{% endblock %}

{% block linkElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    <a href=\"{{ item.uri }}\"{{ macros.attributes(item.linkAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
    </a>
{% endblock %}

{% block spanElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    <span {{ macros.attributes(item.labelAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
    </span>
{% endblock %}

{% block dropdownElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    {%- set classes = item.linkAttribute('class') is not empty ? [item.linkAttribute('class')] : [] %}
    {%- set classes = classes|merge(['dropdown-toggle']) %}
    {%- set attributes = item.linkAttributes %}
    {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- set attributes = attributes|merge({'data-toggle': 'dropdown'}) %}
    <a href=\"#\"{{ macros.attributes(attributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
        <b class=\"caret\"></b>
    </a>
{% endblock %}

{% block label %}
{{-
    item.label|trans(
        item.getExtra('translation_params', {}),
        item.getExtra(
            'translation_domain',
            item.getParent() ? item.getParent().getExtra('translation_domain') : null
        )
    )
-}}
{% endblock %}
", "SonataAdminBundle:Core:tab_menu_template.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/Core/tab_menu_template.html.twig");
    }
}
