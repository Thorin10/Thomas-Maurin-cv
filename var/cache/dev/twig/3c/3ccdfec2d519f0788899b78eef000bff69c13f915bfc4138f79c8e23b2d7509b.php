<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_24b7c4c4327b0d85fce49fdffa6d70d49fd059152b11c37062e8e936823de471 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
            'show_groups' => array($this, 'block_show_groups'),
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5db856b4bce2554e0658a3e272258e17b92e2f37784290d21d79401f25d92adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db856b4bce2554e0658a3e272258e17b92e2f37784290d21d79401f25d92adb->enter($__internal_5db856b4bce2554e0658a3e272258e17b92e2f37784290d21d79401f25d92adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $__internal_06ba0e35936170c086ebb630ae511cd96f65a4d077145ae02144adfc66e10e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ba0e35936170c086ebb630ae511cd96f65a4d077145ae02144adfc66e10e7b->enter($__internal_06ba0e35936170c086ebb630ae511cd96f65a4d077145ae02144adfc66e10e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5db856b4bce2554e0658a3e272258e17b92e2f37784290d21d79401f25d92adb->leave($__internal_5db856b4bce2554e0658a3e272258e17b92e2f37784290d21d79401f25d92adb_prof);

        
        $__internal_06ba0e35936170c086ebb630ae511cd96f65a4d077145ae02144adfc66e10e7b->leave($__internal_06ba0e35936170c086ebb630ae511cd96f65a4d077145ae02144adfc66e10e7b_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_da09fbfb14a9e1c6ff29f2642d0c8160a9653b52d7e6966d8c18c11dc9e817ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da09fbfb14a9e1c6ff29f2642d0c8160a9653b52d7e6966d8c18c11dc9e817ff->enter($__internal_da09fbfb14a9e1c6ff29f2642d0c8160a9653b52d7e6966d8c18c11dc9e817ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e8d2f7151547f182ec94a0b03a9ef49acfe9ecb94ae82def2f5fe68d652093a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8d2f7151547f182ec94a0b03a9ef49acfe9ecb94ae82def2f5fe68d652093a->enter($__internal_2e8d2f7151547f182ec94a0b03a9ef49acfe9ecb94ae82def2f5fe68d652093a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_show", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
        echo "
";
        
        $__internal_2e8d2f7151547f182ec94a0b03a9ef49acfe9ecb94ae82def2f5fe68d652093a->leave($__internal_2e8d2f7151547f182ec94a0b03a9ef49acfe9ecb94ae82def2f5fe68d652093a_prof);

        
        $__internal_da09fbfb14a9e1c6ff29f2642d0c8160a9653b52d7e6966d8c18c11dc9e817ff->leave($__internal_da09fbfb14a9e1c6ff29f2642d0c8160a9653b52d7e6966d8c18c11dc9e817ff_prof);

    }

    // line 18
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_a882674c530619413228cb5c4d57bee73f5024628f10f7f4aa26cd8b853b0eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a882674c530619413228cb5c4d57bee73f5024628f10f7f4aa26cd8b853b0eaf->enter($__internal_a882674c530619413228cb5c4d57bee73f5024628f10f7f4aa26cd8b853b0eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_51dba4139fcb2638196ac090c7dc93cd350b73d0f5ebab21455cec2128c76a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51dba4139fcb2638196ac090c7dc93cd350b73d0f5ebab21455cec2128c76a55->enter($__internal_51dba4139fcb2638196ac090c7dc93cd350b73d0f5ebab21455cec2128c76a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 19
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_51dba4139fcb2638196ac090c7dc93cd350b73d0f5ebab21455cec2128c76a55->leave($__internal_51dba4139fcb2638196ac090c7dc93cd350b73d0f5ebab21455cec2128c76a55_prof);

        
        $__internal_a882674c530619413228cb5c4d57bee73f5024628f10f7f4aa26cd8b853b0eaf->leave($__internal_a882674c530619413228cb5c4d57bee73f5024628f10f7f4aa26cd8b853b0eaf_prof);

    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        $__internal_0c37e04b5b619634bd612975ea213b76274f8bc976da344e271248672ac472e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c37e04b5b619634bd612975ea213b76274f8bc976da344e271248672ac472e8->enter($__internal_0c37e04b5b619634bd612975ea213b76274f8bc976da344e271248672ac472e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6ab99dbeb8adb63136ccfcf6e38562fd50178a8455a5ee7f9ccfd4fb1b5e37ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab99dbeb8adb63136ccfcf6e38562fd50178a8455a5ee7f9ccfd4fb1b5e37ab->enter($__internal_6ab99dbeb8adb63136ccfcf6e38562fd50178a8455a5ee7f9ccfd4fb1b5e37ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 23
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 23)->display($context);
        
        $__internal_6ab99dbeb8adb63136ccfcf6e38562fd50178a8455a5ee7f9ccfd4fb1b5e37ab->leave($__internal_6ab99dbeb8adb63136ccfcf6e38562fd50178a8455a5ee7f9ccfd4fb1b5e37ab_prof);

        
        $__internal_0c37e04b5b619634bd612975ea213b76274f8bc976da344e271248672ac472e8->leave($__internal_0c37e04b5b619634bd612975ea213b76274f8bc976da344e271248672ac472e8_prof);

    }

    // line 26
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_0ace281b3b7a04440f7fc1d1f6fcf9cbc3c51cd5293d7e296474557277004f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ace281b3b7a04440f7fc1d1f6fcf9cbc3c51cd5293d7e296474557277004f9d->enter($__internal_0ace281b3b7a04440f7fc1d1f6fcf9cbc3c51cd5293d7e296474557277004f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_9fa7d77d3ba34253cd826041733c4b304bb740855ec550767d33f6984689f437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa7d77d3ba34253cd826041733c4b304bb740855ec550767d33f6984689f437->enter($__internal_9fa7d77d3ba34253cd826041733c4b304bb740855ec550767d33f6984689f437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 27
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(        // line 29
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        // line 30
        echo "
";
        
        $__internal_9fa7d77d3ba34253cd826041733c4b304bb740855ec550767d33f6984689f437->leave($__internal_9fa7d77d3ba34253cd826041733c4b304bb740855ec550767d33f6984689f437_prof);

        
        $__internal_0ace281b3b7a04440f7fc1d1f6fcf9cbc3c51cd5293d7e296474557277004f9d->leave($__internal_0ace281b3b7a04440f7fc1d1f6fcf9cbc3c51cd5293d7e296474557277004f9d_prof);

    }

    // line 33
    public function block_show($context, array $blocks = array())
    {
        $__internal_e7f703156d5832c3b07b4beda4f7ff297203f111773472ba24d013837e80a3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f703156d5832c3b07b4beda4f7ff297203f111773472ba24d013837e80a3f5->enter($__internal_e7f703156d5832c3b07b4beda4f7ff297203f111773472ba24d013837e80a3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_fdb656bcbce2c25facdc1263f650bc464da85d5c79e6b6fb8ef5e430690c034a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb656bcbce2c25facdc1263f650bc464da85d5c79e6b6fb8ef5e430690c034a->enter($__internal_fdb656bcbce2c25facdc1263f650bc464da85d5c79e6b6fb8ef5e430690c034a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 34
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 36
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")), "object" => ($context["object"] ?? $this->getContext($context, "object")))));
        echo "

        ";
        // line 38
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array())) > 1));
        // line 39
        echo "
        ";
        // line 40
        if (($context["has_tab"] ?? $this->getContext($context, "has_tab"))) {
            // line 41
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 44
                echo "                        <li";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#tab_";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                ";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["show_tab"], "label", array()), array(), (($this->getAttribute($context["show_tab"], "translation_domain", array())) ? ($this->getAttribute($context["show_tab"], "translation_domain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "
                            </a>
                        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 55
                echo "                        <div
                                class=\"tab-pane fade";
                // line 56
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\"
                                id=\"tab_";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 61
                if (($this->getAttribute($context["show_tab"], "description", array()) != false)) {
                    // line 62
                    echo "                                        <p>";
                    echo $this->getAttribute($context["show_tab"], "description", array());
                    echo "</p>
                                    ";
                }
                // line 64
                echo "
                                    ";
                // line 65
                $context["groups"] = $this->getAttribute($context["show_tab"], "groups", array());
                // line 66
                echo "                                    ";
                $this->displayBlock("show_groups", $context, $blocks);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                </div>
            </div>
        ";
        } elseif (twig_test_iterable($this->getAttribute(        // line 73
($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array()))) {
            // line 74
            echo "            ";
            $context["groups"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array()), "default", array()), "groups", array());
            // line 75
            echo "            ";
            $this->displayBlock("show_groups", $context, $blocks);
            echo "
        ";
        }
        // line 77
        echo "
    </div>

    ";
        // line 80
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")), "object" => ($context["object"] ?? $this->getContext($context, "object")))));
        echo "
";
        
        $__internal_fdb656bcbce2c25facdc1263f650bc464da85d5c79e6b6fb8ef5e430690c034a->leave($__internal_fdb656bcbce2c25facdc1263f650bc464da85d5c79e6b6fb8ef5e430690c034a_prof);

        
        $__internal_e7f703156d5832c3b07b4beda4f7ff297203f111773472ba24d013837e80a3f5->leave($__internal_e7f703156d5832c3b07b4beda4f7ff297203f111773472ba24d013837e80a3f5_prof);

    }

    // line 83
    public function block_show_groups($context, array $blocks = array())
    {
        $__internal_594081cb8930a82e40a9db1fdd1c72bd96e876550bf7de35bdc7c26a576c68ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_594081cb8930a82e40a9db1fdd1c72bd96e876550bf7de35bdc7c26a576c68ea->enter($__internal_594081cb8930a82e40a9db1fdd1c72bd96e876550bf7de35bdc7c26a576c68ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        $__internal_d43601679c8cc705395e44e1dcb13abd7cedf9fa5a7158b326159676d09c9ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43601679c8cc705395e44e1dcb13abd7cedf9fa5a7158b326159676d09c9ac6->enter($__internal_d43601679c8cc705395e44e1dcb13abd7cedf9fa5a7158b326159676d09c9ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        // line 84
        echo "    <div class=\"row\">
        ";
        // line 85
        $this->displayBlock('field_row', $context, $blocks);
        // line 117
        echo "
    </div>
";
        
        $__internal_d43601679c8cc705395e44e1dcb13abd7cedf9fa5a7158b326159676d09c9ac6->leave($__internal_d43601679c8cc705395e44e1dcb13abd7cedf9fa5a7158b326159676d09c9ac6_prof);

        
        $__internal_594081cb8930a82e40a9db1fdd1c72bd96e876550bf7de35bdc7c26a576c68ea->leave($__internal_594081cb8930a82e40a9db1fdd1c72bd96e876550bf7de35bdc7c26a576c68ea_prof);

    }

    // line 85
    public function block_field_row($context, array $blocks = array())
    {
        $__internal_8daa3bae4d00c7f510acd09ff9e766fbdd47590cdf6c033630f9986db8b90784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8daa3bae4d00c7f510acd09ff9e766fbdd47590cdf6c033630f9986db8b90784->enter($__internal_8daa3bae4d00c7f510acd09ff9e766fbdd47590cdf6c033630f9986db8b90784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_6cd111c783ef213edd5b066ae11a558a68983bf01d201ca53ed892663186716e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd111c783ef213edd5b066ae11a558a68983bf01d201ca53ed892663186716e->enter($__internal_6cd111c783ef213edd5b066ae11a558a68983bf01d201ca53ed892663186716e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 86
        echo "            ";
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
            // line 87
            echo "                ";
            $context["show_group"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 88
            echo "
                <div class=\"";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["show_group"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["show_group"] ?? null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo ((((array_key_exists("no_padding", $context)) ? (_twig_default_filter(($context["no_padding"] ?? $this->getContext($context, "no_padding")), false)) : (false))) ? ("nopadding") : (""));
            echo "\">
                    <div class=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                ";
            // line 93
            $this->displayBlock('show_title', $context, $blocks);
            // line 96
            echo "                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                ";
            // line 101
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
                // line 102
                echo "                                    ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 109
                echo "                                ";
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
            // line 110
            echo "                                </tbody>
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
        // line 116
        echo "        ";
        
        $__internal_6cd111c783ef213edd5b066ae11a558a68983bf01d201ca53ed892663186716e->leave($__internal_6cd111c783ef213edd5b066ae11a558a68983bf01d201ca53ed892663186716e_prof);

        
        $__internal_8daa3bae4d00c7f510acd09ff9e766fbdd47590cdf6c033630f9986db8b90784->leave($__internal_8daa3bae4d00c7f510acd09ff9e766fbdd47590cdf6c033630f9986db8b90784_prof);

    }

    // line 93
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_f04b3d3e5cd75ed70f72c6dba905c12b0886ded374693d4dfcbe252f08125ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04b3d3e5cd75ed70f72c6dba905c12b0886ded374693d4dfcbe252f08125ced->enter($__internal_f04b3d3e5cd75ed70f72c6dba905c12b0886ded374693d4dfcbe252f08125ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_6498b7526706ae5a410274cd1968ef9f43bb0be7c76531a456b2555a67067ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6498b7526706ae5a410274cd1968ef9f43bb0be7c76531a456b2555a67067ac3->enter($__internal_6498b7526706ae5a410274cd1968ef9f43bb0be7c76531a456b2555a67067ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 94
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "label", array()), array(), (($this->getAttribute(($context["show_group"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["show_group"] ?? null), "translation_domain", array()), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                                ";
        
        $__internal_6498b7526706ae5a410274cd1968ef9f43bb0be7c76531a456b2555a67067ac3->leave($__internal_6498b7526706ae5a410274cd1968ef9f43bb0be7c76531a456b2555a67067ac3_prof);

        
        $__internal_f04b3d3e5cd75ed70f72c6dba905c12b0886ded374693d4dfcbe252f08125ced->leave($__internal_f04b3d3e5cd75ed70f72c6dba905c12b0886ded374693d4dfcbe252f08125ced_prof);

    }

    // line 102
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_ebdae943bdb936c3403cedab3adadae8f985cb9350a787b4e96d3498615e185a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebdae943bdb936c3403cedab3adadae8f985cb9350a787b4e96d3498615e185a->enter($__internal_ebdae943bdb936c3403cedab3adadae8f985cb9350a787b4e96d3498615e185a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_907e5756def728ef1f105cb8e3c4eff4939b62293d7100f9300ea3be02bb6b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907e5756def728ef1f105cb8e3c4eff4939b62293d7100f9300ea3be02bb6b57->enter($__internal_907e5756def728ef1f105cb8e3c4eff4939b62293d7100f9300ea3be02bb6b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 103
        echo "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 104
        if ($this->getAttribute(($context["elements"] ?? null), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 105
            echo "                                                ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute(($context["elements"] ?? $this->getContext($context, "elements")), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array"), ($context["object"] ?? $this->getContext($context, "object")));
            echo "
                                            ";
        }
        // line 107
        echo "                                        </tr>
                                    ";
        
        $__internal_907e5756def728ef1f105cb8e3c4eff4939b62293d7100f9300ea3be02bb6b57->leave($__internal_907e5756def728ef1f105cb8e3c4eff4939b62293d7100f9300ea3be02bb6b57_prof);

        
        $__internal_ebdae943bdb936c3403cedab3adadae8f985cb9350a787b4e96d3498615e185a->leave($__internal_ebdae943bdb936c3403cedab3adadae8f985cb9350a787b4e96d3498615e185a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 107,  496 => 105,  494 => 104,  491 => 103,  482 => 102,  469 => 94,  460 => 93,  450 => 116,  431 => 110,  417 => 109,  414 => 102,  397 => 101,  390 => 96,  388 => 93,  382 => 90,  376 => 89,  373 => 88,  370 => 87,  352 => 86,  343 => 85,  331 => 117,  329 => 85,  326 => 84,  317 => 83,  305 => 80,  300 => 77,  294 => 75,  291 => 74,  289 => 73,  285 => 71,  265 => 66,  263 => 65,  260 => 64,  254 => 62,  252 => 61,  243 => 57,  237 => 56,  234 => 55,  217 => 54,  212 => 51,  194 => 47,  187 => 45,  180 => 44,  163 => 43,  159 => 41,  157 => 40,  154 => 39,  152 => 38,  147 => 36,  143 => 34,  134 => 33,  123 => 30,  121 => 29,  119 => 27,  110 => 26,  100 => 23,  91 => 22,  78 => 19,  69 => 18,  56 => 15,  47 => 14,  26 => 12,);
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

{% extends base_template %}

{% block title %}
    {{ \"title_show\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {{ knp_menu_render(admin.sidemenu(action), {
        'currentClass' : 'active',
        'template': sonata_admin.adminPool.getTemplate('tab_menu_template')
    }, 'twig') }}
{% endblock %}

{% block show %}
    <div class=\"sonata-ba-view\">

        {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}

        {% set has_tab = (admin.showtabs|length == 1 and admin.showtabs|keys[0] != 'default') or admin.showtabs|length > 1 %}

        {% if has_tab %}
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    {% for name, show_tab in admin.showtabs %}
                        <li{% if loop.first %} class=\"active\"{% endif %}>
                            <a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                {{ show_tab.label|trans({}, show_tab.translation_domain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>

                <div class=\"tab-content\">
                    {% for code, show_tab in admin.showtabs %}
                        <div
                                class=\"tab-pane fade{% if loop.first %} in active{% endif %}\"
                                id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    {% if show_tab.description != false %}
                                        <p>{{ show_tab.description|raw }}</p>
                                    {% endif %}

                                    {% set groups = show_tab.groups %}
                                    {{ block('show_groups') }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% elseif admin.showtabs is iterable %}
            {% set groups = admin.showtabs.default.groups %}
            {{ block('show_groups') }}
        {% endif %}

    </div>

    {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}
{% endblock %}

{% block show_groups %}
    <div class=\"row\">
        {% block field_row %}
            {% for code in groups %}
                {% set show_group = admin.showgroups[code] %}

                <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding|default(false) ? 'nopadding' }}\">
                    <div class=\"{{ show_group.box_class }}\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                {% block show_title %}
                                    {{ show_group.label|trans({}, show_group.translation_domain|default(admin.translationDomain)) }}
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

    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show.html.twig");
    }
}
