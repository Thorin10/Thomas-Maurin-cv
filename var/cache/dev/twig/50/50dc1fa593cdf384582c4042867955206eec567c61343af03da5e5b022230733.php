<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_d86d41e2c9f1cbdc3269cb961efdf13b8eadda294c78c7362f7c8c17b144959e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_form_action_url' => array($this, 'block_sonata_form_action_url'),
            'sonata_form_attributes' => array($this, 'block_sonata_form_attributes'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
            'sonata_form_actions' => array($this, 'block_sonata_form_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03d0e571b8a02beedbc0ed8b7513b90f5b2fbd62209a54b50b9497cb6dfb47c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d0e571b8a02beedbc0ed8b7513b90f5b2fbd62209a54b50b9497cb6dfb47c2->enter($__internal_03d0e571b8a02beedbc0ed8b7513b90f5b2fbd62209a54b50b9497cb6dfb47c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        $__internal_6911d5c867a84a6edb5bf5b725957066e625b37a01f45211fb152ab5a9e451ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6911d5c867a84a6edb5bf5b725957066e625b37a01f45211fb152ab5a9e451ee->enter($__internal_6911d5c867a84a6edb5bf5b725957066e625b37a01f45211fb152ab5a9e451ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        // line 1
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_03d0e571b8a02beedbc0ed8b7513b90f5b2fbd62209a54b50b9497cb6dfb47c2->leave($__internal_03d0e571b8a02beedbc0ed8b7513b90f5b2fbd62209a54b50b9497cb6dfb47c2_prof);

        
        $__internal_6911d5c867a84a6edb5bf5b725957066e625b37a01f45211fb152ab5a9e451ee->leave($__internal_6911d5c867a84a6edb5bf5b725957066e625b37a01f45211fb152ab5a9e451ee_prof);

    }

    public function block_form($context, array $blocks = array())
    {
        $__internal_5f41efc4684fda1e5b00f8362753cd59fa1ce4402011dd9a6e6cdebda469e777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f41efc4684fda1e5b00f8362753cd59fa1ce4402011dd9a6e6cdebda469e777->enter($__internal_5f41efc4684fda1e5b00f8362753cd59fa1ce4402011dd9a6e6cdebda469e777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_4dff20a6d91c67e0f1f9791b5448dddf9d77d24290899ff8cbdc5b0968d174ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dff20a6d91c67e0f1f9791b5448dddf9d77d24290899ff8cbdc5b0968d174ae->enter($__internal_4dff20a6d91c67e0f1f9791b5448dddf9d77d24290899ff8cbdc5b0968d174ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 2
        echo "    ";
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit_form.html.twig", 2);
        // line 3
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")), "object" => ($context["object"] ?? $this->getContext($context, "object")))));
        echo "

    ";
        // line 6
        echo "    ";
        $context["url"] = (( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter(($context["objectId"] ?? $this->getContext($context, "objectId")), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))))) ? ("edit") : ("create"));
        // line 7
        echo "
    ";
        // line 8
        if ( !$this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => ($context["url"] ?? $this->getContext($context, "url"))), "method")) {
            // line 9
            echo "        <div>
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 13
            echo "        <form
              ";
            // line 14
            if (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 15
            echo "              role=\"form\"
              ";
            // line 17
            echo "              action=\"";
            $this->displayBlock('sonata_form_action_url', $context, $blocks);
            echo "\"
              ";
            // line 18
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "multipart", array())) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 19
            echo "              method=\"POST\"
              ";
            // line 20
            if ( !$this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 21
            echo "              ";
            $this->displayBlock('sonata_form_attributes', $context, $blocks);
            // line 22
            echo "              >

            ";
            // line 24
            echo twig_include($this->env, $context, "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig");
            echo "

            ";
            // line 26
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 29
            echo "
            ";
            // line 30
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 62
            echo "
            ";
            // line 63
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 66
            echo "
            ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
            echo "

            ";
            // line 69
            $this->displayBlock('formactions', $context, $blocks);
            // line 115
            echo "        </form>
    ";
        }
        // line 117
        echo "
    ";
        // line 118
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")), "object" => ($context["object"] ?? $this->getContext($context, "object")))));
        echo "

";
        
        $__internal_4dff20a6d91c67e0f1f9791b5448dddf9d77d24290899ff8cbdc5b0968d174ae->leave($__internal_4dff20a6d91c67e0f1f9791b5448dddf9d77d24290899ff8cbdc5b0968d174ae_prof);

        
        $__internal_5f41efc4684fda1e5b00f8362753cd59fa1ce4402011dd9a6e6cdebda469e777->leave($__internal_5f41efc4684fda1e5b00f8362753cd59fa1ce4402011dd9a6e6cdebda469e777_prof);

    }

    // line 17
    public function block_sonata_form_action_url($context, array $blocks = array())
    {
        $__internal_5c17a943d74330fa4d55415831da3c34a49dba81d3285b9d8d3051fe549c3285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c17a943d74330fa4d55415831da3c34a49dba81d3285b9d8d3051fe549c3285->enter($__internal_5c17a943d74330fa4d55415831da3c34a49dba81d3285b9d8d3051fe549c3285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        $__internal_41487350bba52d48f263dbe96de105a87cd855902d82d89bc5adaa84d0635be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41487350bba52d48f263dbe96de105a87cd855902d82d89bc5adaa84d0635be8->enter($__internal_41487350bba52d48f263dbe96de105a87cd855902d82d89bc5adaa84d0635be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => ($context["url"] ?? $this->getContext($context, "url")), 1 => array("id" => ((array_key_exists("objectId", $context)) ? (_twig_default_filter(($context["objectId"] ?? $this->getContext($context, "objectId")), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))), "uniqid" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        
        $__internal_41487350bba52d48f263dbe96de105a87cd855902d82d89bc5adaa84d0635be8->leave($__internal_41487350bba52d48f263dbe96de105a87cd855902d82d89bc5adaa84d0635be8_prof);

        
        $__internal_5c17a943d74330fa4d55415831da3c34a49dba81d3285b9d8d3051fe549c3285->leave($__internal_5c17a943d74330fa4d55415831da3c34a49dba81d3285b9d8d3051fe549c3285_prof);

    }

    // line 21
    public function block_sonata_form_attributes($context, array $blocks = array())
    {
        $__internal_823c7d18acf4bf1edddfd58c8d64a3e33302506e9da066b686ec7bf422b5c64e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_823c7d18acf4bf1edddfd58c8d64a3e33302506e9da066b686ec7bf422b5c64e->enter($__internal_823c7d18acf4bf1edddfd58c8d64a3e33302506e9da066b686ec7bf422b5c64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        $__internal_cdddb4fb274049da501e31017e391be743802c8fff9107d0ef29d9e1981a7d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdddb4fb274049da501e31017e391be743802c8fff9107d0ef29d9e1981a7d41->enter($__internal_cdddb4fb274049da501e31017e391be743802c8fff9107d0ef29d9e1981a7d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        
        $__internal_cdddb4fb274049da501e31017e391be743802c8fff9107d0ef29d9e1981a7d41->leave($__internal_cdddb4fb274049da501e31017e391be743802c8fff9107d0ef29d9e1981a7d41_prof);

        
        $__internal_823c7d18acf4bf1edddfd58c8d64a3e33302506e9da066b686ec7bf422b5c64e->leave($__internal_823c7d18acf4bf1edddfd58c8d64a3e33302506e9da066b686ec7bf422b5c64e_prof);

    }

    // line 26
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        $__internal_6a13ba8466437518a8de2158a35883b77c3d33cc4c5bb3858cb30bc29c9a15d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a13ba8466437518a8de2158a35883b77c3d33cc4c5bb3858cb30bc29c9a15d0->enter($__internal_6a13ba8466437518a8de2158a35883b77c3d33cc4c5bb3858cb30bc29c9a15d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        $__internal_4450f8059ab41fe7a2a4711c29fba3456058ac5c118831e01325d77c7db8cc6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4450f8059ab41fe7a2a4711c29fba3456058ac5c118831e01325d77c7db8cc6f->enter($__internal_4450f8059ab41fe7a2a4711c29fba3456058ac5c118831e01325d77c7db8cc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        // line 27
        echo "                <div class=\"row\">
            ";
        
        $__internal_4450f8059ab41fe7a2a4711c29fba3456058ac5c118831e01325d77c7db8cc6f->leave($__internal_4450f8059ab41fe7a2a4711c29fba3456058ac5c118831e01325d77c7db8cc6f_prof);

        
        $__internal_6a13ba8466437518a8de2158a35883b77c3d33cc4c5bb3858cb30bc29c9a15d0->leave($__internal_6a13ba8466437518a8de2158a35883b77c3d33cc4c5bb3858cb30bc29c9a15d0_prof);

    }

    // line 30
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        $__internal_eb5e33510b5e115a937b7575d63b7d44e51723043f65842b2614a5a89fc6ecdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5e33510b5e115a937b7575d63b7d44e51723043f65842b2614a5a89fc6ecdc->enter($__internal_eb5e33510b5e115a937b7575d63b7d44e51723043f65842b2614a5a89fc6ecdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        $__internal_2b107f374a48fbb043efeb6b16a0908d53bab1b0efafe6a281616ec7254e7588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b107f374a48fbb043efeb6b16a0908d53bab1b0efafe6a281616ec7254e7588->enter($__internal_2b107f374a48fbb043efeb6b16a0908d53bab1b0efafe6a281616ec7254e7588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        // line 31
        echo "                ";
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array())) > 1));
        // line 32
        echo "
                <div class=\"col-md-12\">
                    ";
        // line 34
        if (($context["has_tab"] ?? $this->getContext($context, "has_tab"))) {
            // line 35
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 38
                echo "                                    <li";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"#tab_";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["form_tab"], "label", array()), array(), (($this->getAttribute($context["form_tab"], "translation_domain", array())) ? ($this->getAttribute($context["form_tab"], "translation_domain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "</a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 43
                echo "                                    <div class=\"tab-pane fade";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\" id=\"tab_";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 46
                if (($this->getAttribute($context["form_tab"], "description", array()) != false)) {
                    // line 47
                    echo "                                                    <p>";
                    echo $this->getAttribute($context["form_tab"], "description", array());
                    echo "</p>
                                                ";
                }
                // line 49
                echo "
                                                ";
                // line 50
                echo $context["form_helper"]->getrender_groups(($context["admin"] ?? $this->getContext($context, "admin")), ($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($context["form_tab"], "groups", array(), "array"), ($context["has_tab"] ?? $this->getContext($context, "has_tab")));
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 58
            echo "                        ";
            echo $context["form_helper"]->getrender_groups(($context["admin"] ?? $this->getContext($context, "admin")), ($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array()), "default", array(), "array"), "groups", array()), ($context["has_tab"] ?? $this->getContext($context, "has_tab")));
            echo "
                    ";
        }
        // line 60
        echo "                </div>
            ";
        
        $__internal_2b107f374a48fbb043efeb6b16a0908d53bab1b0efafe6a281616ec7254e7588->leave($__internal_2b107f374a48fbb043efeb6b16a0908d53bab1b0efafe6a281616ec7254e7588_prof);

        
        $__internal_eb5e33510b5e115a937b7575d63b7d44e51723043f65842b2614a5a89fc6ecdc->leave($__internal_eb5e33510b5e115a937b7575d63b7d44e51723043f65842b2614a5a89fc6ecdc_prof);

    }

    // line 63
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        $__internal_5415ca63d96d5358fe853e1d74b0b18027c14dc6fd935b435793622ed8c0a281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5415ca63d96d5358fe853e1d74b0b18027c14dc6fd935b435793622ed8c0a281->enter($__internal_5415ca63d96d5358fe853e1d74b0b18027c14dc6fd935b435793622ed8c0a281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        $__internal_71e152954fa23e1180aa173e4b112f9a9e69941bf79d13843cbb30f7c9a5ea8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e152954fa23e1180aa173e4b112f9a9e69941bf79d13843cbb30f7c9a5ea8b->enter($__internal_71e152954fa23e1180aa173e4b112f9a9e69941bf79d13843cbb30f7c9a5ea8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        // line 64
        echo "                </div>
            ";
        
        $__internal_71e152954fa23e1180aa173e4b112f9a9e69941bf79d13843cbb30f7c9a5ea8b->leave($__internal_71e152954fa23e1180aa173e4b112f9a9e69941bf79d13843cbb30f7c9a5ea8b_prof);

        
        $__internal_5415ca63d96d5358fe853e1d74b0b18027c14dc6fd935b435793622ed8c0a281->leave($__internal_5415ca63d96d5358fe853e1d74b0b18027c14dc6fd935b435793622ed8c0a281_prof);

    }

    // line 69
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_fbb1f09dd96f15d6633c4824a53f2abd519a449935bbaaa4e7f65caf3923c4d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb1f09dd96f15d6633c4824a53f2abd519a449935bbaaa4e7f65caf3923c4d5->enter($__internal_fbb1f09dd96f15d6633c4824a53f2abd519a449935bbaaa4e7f65caf3923c4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_bcbe1c5c79b2f06c11570fd20b932c9c200da46aac45ea1337ea889fca079306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbe1c5c79b2f06c11570fd20b932c9c200da46aac45ea1337ea889fca079306->enter($__internal_bcbe1c5c79b2f06c11570fd20b932c9c200da46aac45ea1337ea889fca079306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 70
        echo "                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                ";
        // line 71
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 113
        echo "                </div>
            ";
        
        $__internal_bcbe1c5c79b2f06c11570fd20b932c9c200da46aac45ea1337ea889fca079306->leave($__internal_bcbe1c5c79b2f06c11570fd20b932c9c200da46aac45ea1337ea889fca079306_prof);

        
        $__internal_fbb1f09dd96f15d6633c4824a53f2abd519a449935bbaaa4e7f65caf3923c4d5->leave($__internal_fbb1f09dd96f15d6633c4824a53f2abd519a449935bbaaa4e7f65caf3923c4d5_prof);

    }

    // line 71
    public function block_sonata_form_actions($context, array $blocks = array())
    {
        $__internal_e548d896488ddcaf72082d2a2df6e05810e026fe7aa1721b3a33cbae3ada31d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e548d896488ddcaf72082d2a2df6e05810e026fe7aa1721b3a33cbae3ada31d1->enter($__internal_e548d896488ddcaf72082d2a2df6e05810e026fe7aa1721b3a33cbae3ada31d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        $__internal_c7bd47fe80f7dd4e99da96165569326aa8525c3d4608a02da7a0d98fb5cb6021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7bd47fe80f7dd4e99da96165569326aa8525c3d4608a02da7a0d98fb5cb6021->enter($__internal_c7bd47fe80f7dd4e99da96165569326aa8525c3d4608a02da7a0d98fb5cb6021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        // line 72
        echo "                    ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isxmlhttprequest", array())) {
            // line 73
            echo "                        ";
            // line 74
            echo "                        ";
            if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter(($context["objectId"] ?? $this->getContext($context, "objectId")), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))))) {
                // line 75
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 77
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 79
            echo "                    ";
        } else {
            // line 80
            echo "                        ";
            if ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "supportsPreviewMode", array())) {
                // line 81
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                ";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 86
            echo "                        ";
            // line 87
            echo "                        ";
            if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter(($context["objectId"] ?? $this->getContext($context, "objectId")), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))))) {
                // line 88
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 90
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method"))) {
                    // line 91
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 93
                echo "
                            ";
                // line 94
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "delete", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                    // line 95
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 98
                echo "
                            ";
                // line 99
                if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "acl"), "method")) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "acl", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                    // line 100
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 102
                echo "                        ";
            } else {
                // line 103
                echo "                            ";
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "edit"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "edit"), "method"))) {
                    // line 104
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 106
                echo "                            ";
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method"))) {
                    // line 107
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 109
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 111
            echo "                    ";
        }
        // line 112
        echo "                ";
        
        $__internal_c7bd47fe80f7dd4e99da96165569326aa8525c3d4608a02da7a0d98fb5cb6021->leave($__internal_c7bd47fe80f7dd4e99da96165569326aa8525c3d4608a02da7a0d98fb5cb6021_prof);

        
        $__internal_e548d896488ddcaf72082d2a2df6e05810e026fe7aa1721b3a33cbae3ada31d1->leave($__internal_e548d896488ddcaf72082d2a2df6e05810e026fe7aa1721b3a33cbae3ada31d1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  531 => 112,  528 => 111,  522 => 109,  516 => 107,  513 => 106,  507 => 104,  504 => 103,  501 => 102,  493 => 100,  491 => 99,  488 => 98,  481 => 96,  476 => 95,  474 => 94,  471 => 93,  465 => 91,  463 => 90,  457 => 88,  454 => 87,  452 => 86,  446 => 83,  442 => 81,  439 => 80,  436 => 79,  430 => 77,  424 => 75,  421 => 74,  419 => 73,  416 => 72,  407 => 71,  396 => 113,  394 => 71,  391 => 70,  382 => 69,  371 => 64,  362 => 63,  351 => 60,  345 => 58,  340 => 55,  321 => 50,  318 => 49,  312 => 47,  310 => 46,  297 => 43,  280 => 42,  276 => 40,  251 => 38,  234 => 37,  230 => 35,  228 => 34,  224 => 32,  221 => 31,  212 => 30,  201 => 27,  192 => 26,  175 => 21,  157 => 17,  144 => 118,  141 => 117,  137 => 115,  135 => 69,  130 => 67,  127 => 66,  125 => 63,  122 => 62,  120 => 30,  117 => 29,  115 => 26,  110 => 24,  106 => 22,  103 => 21,  99 => 20,  96 => 19,  92 => 18,  87 => 17,  84 => 15,  80 => 14,  77 => 13,  71 => 10,  68 => 9,  66 => 8,  63 => 7,  60 => 6,  54 => 3,  51 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form %}
    {% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}
    {{ sonata_block_render_event('sonata.admin.edit.form.top', { 'admin': admin, 'object': object }) }}

    {# NEXT_MAJOR: remove default filter #}
    {% set url = objectId|default(admin.id(object)) is not null ? 'edit' : 'create' %}

    {% if not admin.hasRoute(url)%}
        <div>
            {{ \"form_not_available\"|trans({}, \"SonataAdminBundle\") }}
        </div>
    {% else %}
        <form
              {% if sonata_admin.adminPool.getOption('form_type') == 'horizontal' %}class=\"form-horizontal\"{% endif %}
              role=\"form\"
              {# NEXT_MAJOR: remove default filter #}
              action=\"{% block sonata_form_action_url %}{{ admin.generateUrl(url, {'id': objectId|default(admin.id(object)), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}{% endblock %}\"
              {% if form.vars.multipart %} enctype=\"multipart/form-data\"{% endif %}
              method=\"POST\"
              {% if not sonata_admin.adminPool.getOption('html5_validate') %}novalidate=\"novalidate\"{% endif %}
              {% block sonata_form_attributes %}{% endblock %}
              >

            {{ include('SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig') }}

            {% block sonata_pre_fieldsets %}
                <div class=\"row\">
            {% endblock %}

            {% block sonata_tab_content %}
                {% set has_tab = ((admin.formtabs|length == 1 and admin.formtabs|keys[0] != 'default') or admin.formtabs|length > 1 ) %}

                <div class=\"col-md-12\">
                    {% if has_tab %}
                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                {% for name, form_tab in admin.formtabs %}
                                    <li{% if loop.index == 1 %} class=\"active\"{% endif %}><a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> {{ form_tab.label|trans({}, form_tab.translation_domain ?: admin.translationDomain) }}</a></li>
                                {% endfor %}
                            </ul>
                            <div class=\"tab-content\">
                                {% for code, form_tab in admin.formtabs %}
                                    <div class=\"tab-pane fade{% if loop.first %} in active{% endif %}\" id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                {% if form_tab.description != false %}
                                                    <p>{{ form_tab.description|raw }}</p>
                                                {% endif %}

                                                {{ form_helper.render_groups(admin, form, form_tab['groups'], has_tab) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    {% else %}
                        {{ form_helper.render_groups(admin, form, admin.formtabs['default'].groups, has_tab) }}
                    {% endif %}
                </div>
            {% endblock %}

            {% block sonata_post_fieldsets %}
                </div>
            {% endblock %}

            {{ form_rest(form) }}

            {% block formactions %}
                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                {% block sonata_form_actions %}
                    {% if app.request.isxmlhttprequest %}
                        {# NEXT_MAJOR: remove default filter #}
                        {% if objectId|default(admin.id(object)) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update'|trans({}, 'SonataAdminBundle') }}</button>
                        {% else %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% else %}
                        {% if admin.supportsPreviewMode %}
                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                {{ 'btn_preview'|trans({}, 'SonataAdminBundle') }}
                            </button>
                        {% endif %}
                        {# NEXT_MAJOR: remove default filter #}
                        {% if objectId|default(admin.id(object)) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>

                            {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_update_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}

                            {% if admin.hasRoute('delete') and admin.hasAccess('delete', object) %}
                                {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}
                                <a class=\"btn btn-danger\" href=\"{{ admin.generateObjectUrl('delete', object) }}\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> {{ 'link_delete'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}

                            {% if admin.isAclEnabled() and admin.hasRoute('acl') and admin.hasAccess('acl', object) %}
                                <a class=\"btn btn-info\" href=\"{{ admin.generateObjectUrl('acl', object) }}\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> {{ 'link_edit_acl'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}
                        {% else %}
                            {% if admin.hasroute('edit') and admin.hasAccess('edit') %}
                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_create_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            {% if admin.hasroute('list') and admin.hasAccess('list') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_create_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create_and_create_a_new_one'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% endif %}
                {% endblock %}
                </div>
            {% endblock formactions %}
        </form>
    {% endif%}

    {{ sonata_block_render_event('sonata.admin.edit.form.bottom', { 'admin': admin, 'object': object }) }}

{% endblock %}
", "SonataAdminBundle:CRUD:base_edit_form.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit_form.html.twig");
    }
}
