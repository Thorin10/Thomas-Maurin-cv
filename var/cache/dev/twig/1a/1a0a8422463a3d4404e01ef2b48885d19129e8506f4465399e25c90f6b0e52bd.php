<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_95fcdab99e198e67d14e345e9793978ef06b79b0f4375594200484400c93ddea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3eb94e6070e2b8b412e15b4aeecd8f4fb0e99b0a8d37bdff9001de9a64b849f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb94e6070e2b8b412e15b4aeecd8f4fb0e99b0a8d37bdff9001de9a64b849f1->enter($__internal_3eb94e6070e2b8b412e15b4aeecd8f4fb0e99b0a8d37bdff9001de9a64b849f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_97286630f96a467712c0a543e11806c0b40b4393650bdecd3cac61fb6e8cf7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97286630f96a467712c0a543e11806c0b40b4393650bdecd3cac61fb6e8cf7e4->enter($__internal_97286630f96a467712c0a543e11806c0b40b4393650bdecd3cac61fb6e8cf7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 24
        echo "
<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
        <title>
        ";
        // line 90
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 116
        echo "        </title>
    </head>
    <body ";
        // line 118
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 122
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 221
        echo "
        ";
        // line 222
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 355
        echo "    </div>

    ";
        // line 357
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 358
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 364
            echo "    ";
        }
        // line 365
        echo "
    </body>
</html>
";
        
        $__internal_3eb94e6070e2b8b412e15b4aeecd8f4fb0e99b0a8d37bdff9001de9a64b849f1->leave($__internal_3eb94e6070e2b8b412e15b4aeecd8f4fb0e99b0a8d37bdff9001de9a64b849f1_prof);

        
        $__internal_97286630f96a467712c0a543e11806c0b40b4393650bdecd3cac61fb6e8cf7e4->leave($__internal_97286630f96a467712c0a543e11806c0b40b4393650bdecd3cac61fb6e8cf7e4_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_ea35cd2b16bba693bd828b8d5768787ea0265bece1e95e0f601201a1f23b0f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea35cd2b16bba693bd828b8d5768787ea0265bece1e95e0f601201a1f23b0f66->enter($__internal_ea35cd2b16bba693bd828b8d5768787ea0265bece1e95e0f601201a1f23b0f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_88e0a6e61c66172ce2cf6961e4c0b7cba85efb549a2a9b839a5c9beb2d915113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e0a6e61c66172ce2cf6961e4c0b7cba85efb549a2a9b839a5c9beb2d915113->enter($__internal_88e0a6e61c66172ce2cf6961e4c0b7cba85efb549a2a9b839a5c9beb2d915113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_88e0a6e61c66172ce2cf6961e4c0b7cba85efb549a2a9b839a5c9beb2d915113->leave($__internal_88e0a6e61c66172ce2cf6961e4c0b7cba85efb549a2a9b839a5c9beb2d915113_prof);

        
        $__internal_ea35cd2b16bba693bd828b8d5768787ea0265bece1e95e0f601201a1f23b0f66->leave($__internal_ea35cd2b16bba693bd828b8d5768787ea0265bece1e95e0f601201a1f23b0f66_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_460bf4a61f376c23ad8358ae964d87bfb091f927a2d562fc134e19bb2d6766bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_460bf4a61f376c23ad8358ae964d87bfb091f927a2d562fc134e19bb2d6766bb->enter($__internal_460bf4a61f376c23ad8358ae964d87bfb091f927a2d562fc134e19bb2d6766bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_8302575a1e45cd244722cf6804080298962e326167a137c6edce61a65093b3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8302575a1e45cd244722cf6804080298962e326167a137c6edce61a65093b3a9->enter($__internal_8302575a1e45cd244722cf6804080298962e326167a137c6edce61a65093b3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_8302575a1e45cd244722cf6804080298962e326167a137c6edce61a65093b3a9->leave($__internal_8302575a1e45cd244722cf6804080298962e326167a137c6edce61a65093b3a9_prof);

        
        $__internal_460bf4a61f376c23ad8358ae964d87bfb091f927a2d562fc134e19bb2d6766bb->leave($__internal_460bf4a61f376c23ad8358ae964d87bfb091f927a2d562fc134e19bb2d6766bb_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a774dfe882fce6251cdca3adfd1355ccfdb2587955a366ba0fdddff35ab06fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a774dfe882fce6251cdca3adfd1355ccfdb2587955a366ba0fdddff35ab06fd->enter($__internal_5a774dfe882fce6251cdca3adfd1355ccfdb2587955a366ba0fdddff35ab06fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_827ed7ee8b369e2faf9946650cccefae84350cd578b8470a370d456267dcf3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827ed7ee8b369e2faf9946650cccefae84350cd578b8470a370d456267dcf3c5->enter($__internal_827ed7ee8b369e2faf9946650cccefae84350cd578b8470a370d456267dcf3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        
        $__internal_827ed7ee8b369e2faf9946650cccefae84350cd578b8470a370d456267dcf3c5->leave($__internal_827ed7ee8b369e2faf9946650cccefae84350cd578b8470a370d456267dcf3c5_prof);

        
        $__internal_5a774dfe882fce6251cdca3adfd1355ccfdb2587955a366ba0fdddff35ab06fd->leave($__internal_5a774dfe882fce6251cdca3adfd1355ccfdb2587955a366ba0fdddff35ab06fd_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_18944b22100fbdccdc5ec355f41a971c50d4347f7bc4ba06c3cf9b84dcc1829e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18944b22100fbdccdc5ec355f41a971c50d4347f7bc4ba06c3cf9b84dcc1829e->enter($__internal_18944b22100fbdccdc5ec355f41a971c50d4347f7bc4ba06c3cf9b84dcc1829e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7afa2fad64e164d260ec34ac378aec53125b36a6c9a20ad612e729f533791c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afa2fad64e164d260ec34ac378aec53125b36a6c9a20ad612e729f533791c86->enter($__internal_7afa2fad64e164d260ec34ac378aec53125b36a6c9a20ad612e729f533791c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $context["locale"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
($context["locale"] ?? $this->getContext($context, "locale"))), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if ((($context["locale"] ?? $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter(($context["locale"] ?? $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_7afa2fad64e164d260ec34ac378aec53125b36a6c9a20ad612e729f533791c86->leave($__internal_7afa2fad64e164d260ec34ac378aec53125b36a6c9a20ad612e729f533791c86_prof);

        
        $__internal_18944b22100fbdccdc5ec355f41a971c50d4347f7bc4ba06c3cf9b84dcc1829e->leave($__internal_18944b22100fbdccdc5ec355f41a971c50d4347f7bc4ba06c3cf9b84dcc1829e_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_b7e0c85364535905dd714b87d20d6f8dde6b699c38f04c1404c461649c326dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e0c85364535905dd714b87d20d6f8dde6b699c38f04c1404c461649c326dbd->enter($__internal_b7e0c85364535905dd714b87d20d6f8dde6b699c38f04c1404c461649c326dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_37ea80c2bdfc8d2fdd9ccb6c81d154912e395a0b9c23ed7adac4d749eb87b415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ea80c2bdfc8d2fdd9ccb6c81d154912e395a0b9c23ed7adac4d749eb87b415->enter($__internal_37ea80c2bdfc8d2fdd9ccb6c81d154912e395a0b9c23ed7adac4d749eb87b415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 48
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_37ea80c2bdfc8d2fdd9ccb6c81d154912e395a0b9c23ed7adac4d749eb87b415->leave($__internal_37ea80c2bdfc8d2fdd9ccb6c81d154912e395a0b9c23ed7adac4d749eb87b415_prof);

        
        $__internal_b7e0c85364535905dd714b87d20d6f8dde6b699c38f04c1404c461649c326dbd->leave($__internal_b7e0c85364535905dd714b87d20d6f8dde6b699c38f04c1404c461649c326dbd_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_827e32944bd2c816744d335af9b21c1167ed87a464ab52730c114d8fa64fb48c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_827e32944bd2c816744d335af9b21c1167ed87a464ab52730c114d8fa64fb48c->enter($__internal_827e32944bd2c816744d335af9b21c1167ed87a464ab52730c114d8fa64fb48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_6ca8e8ca839cdfdc212b4dceca617bb4ebb0e2a8d7eca00247ca78aed663ad4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca8e8ca839cdfdc212b4dceca617bb4ebb0e2a8d7eca00247ca78aed663ad4e->enter($__internal_6ca8e8ca839cdfdc212b4dceca617bb4ebb0e2a8d7eca00247ca78aed663ad4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 64
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            ";
        
        $__internal_6ca8e8ca839cdfdc212b4dceca617bb4ebb0e2a8d7eca00247ca78aed663ad4e->leave($__internal_6ca8e8ca839cdfdc212b4dceca617bb4ebb0e2a8d7eca00247ca78aed663ad4e_prof);

        
        $__internal_827e32944bd2c816744d335af9b21c1167ed87a464ab52730c114d8fa64fb48c->leave($__internal_827e32944bd2c816744d335af9b21c1167ed87a464ab52730c114d8fa64fb48c_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_88c580586e5c88a294088ff49f8c1789baa2cd7a1b08d163cf5bce06f55ad7a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c580586e5c88a294088ff49f8c1789baa2cd7a1b08d163cf5bce06f55ad7a0->enter($__internal_88c580586e5c88a294088ff49f8c1789baa2cd7a1b08d163cf5bce06f55ad7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_176079a7372ac9abdf0d05ad82133d30b763bc4f20780ed861a766fa333b2081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176079a7372ac9abdf0d05ad82133d30b763bc4f20780ed861a766fa333b2081->enter($__internal_176079a7372ac9abdf0d05ad82133d30b763bc4f20780ed861a766fa333b2081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty(($context["_title"] ?? $this->getContext($context, "_title")))) {
            // line 94
            echo "                ";
            echo strip_tags(($context["_title"] ?? $this->getContext($context, "_title")));
            echo "
            ";
        } else {
            // line 96
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 97
                echo "                    -
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 99
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 100
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 101
                            echo "                                &gt;
                            ";
                        }
                        // line 104
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 105
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 106
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 112
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                ";
            }
            // line 114
            echo "            ";
        }
        // line 115
        echo "        ";
        
        $__internal_176079a7372ac9abdf0d05ad82133d30b763bc4f20780ed861a766fa333b2081->leave($__internal_176079a7372ac9abdf0d05ad82133d30b763bc4f20780ed861a766fa333b2081_prof);

        
        $__internal_88c580586e5c88a294088ff49f8c1789baa2cd7a1b08d163cf5bce06f55ad7a0->leave($__internal_88c580586e5c88a294088ff49f8c1789baa2cd7a1b08d163cf5bce06f55ad7a0_prof);

    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_9025acd57f41b3527b97ae7e82a4a7a3d0e7cd2eb6b6cf7a3eee62a1b92e661c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9025acd57f41b3527b97ae7e82a4a7a3d0e7cd2eb6b6cf7a3eee62a1b92e661c->enter($__internal_9025acd57f41b3527b97ae7e82a4a7a3d0e7cd2eb6b6cf7a3eee62a1b92e661c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_cc5ecba3b8dcb5a0dc230c52c5fcc24a14b922fb84651f4b52fce86f0411480f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5ecba3b8dcb5a0dc230c52c5fcc24a14b922fb84651f4b52fce86f0411480f->enter($__internal_cc5ecba3b8dcb5a0dc230c52c5fcc24a14b922fb84651f4b52fce86f0411480f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_cc5ecba3b8dcb5a0dc230c52c5fcc24a14b922fb84651f4b52fce86f0411480f->leave($__internal_cc5ecba3b8dcb5a0dc230c52c5fcc24a14b922fb84651f4b52fce86f0411480f_prof);

        
        $__internal_9025acd57f41b3527b97ae7e82a4a7a3d0e7cd2eb6b6cf7a3eee62a1b92e661c->leave($__internal_9025acd57f41b3527b97ae7e82a4a7a3d0e7cd2eb6b6cf7a3eee62a1b92e661c_prof);

    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_369d847208ab138a7c56077d827dd5271ba2a09bb22a12fbd8266dc71ae1e82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369d847208ab138a7c56077d827dd5271ba2a09bb22a12fbd8266dc71ae1e82f->enter($__internal_369d847208ab138a7c56077d827dd5271ba2a09bb22a12fbd8266dc71ae1e82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_c4e8f28b76cb1a3cbc523ebd57b4c130f7f2ab304b9f61ddc6ceea34a56d954b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e8f28b76cb1a3cbc523ebd57b4c130f7f2ab304b9f61ddc6ceea34a56d954b->enter($__internal_c4e8f28b76cb1a3cbc523ebd57b4c130f7f2ab304b9f61ddc6ceea34a56d954b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 123
        echo "            <header class=\"main-header\">
                ";
        // line 124
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 131
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 143
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 219
        echo "            </header>
        ";
        
        $__internal_c4e8f28b76cb1a3cbc523ebd57b4c130f7f2ab304b9f61ddc6ceea34a56d954b->leave($__internal_c4e8f28b76cb1a3cbc523ebd57b4c130f7f2ab304b9f61ddc6ceea34a56d954b_prof);

        
        $__internal_369d847208ab138a7c56077d827dd5271ba2a09bb22a12fbd8266dc71ae1e82f->leave($__internal_369d847208ab138a7c56077d827dd5271ba2a09bb22a12fbd8266dc71ae1e82f_prof);

    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_45beedae42844d78a2c6762f884feaaa2f944b1b3c5b7e42fd870b7210823429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45beedae42844d78a2c6762f884feaaa2f944b1b3c5b7e42fd870b7210823429->enter($__internal_45beedae42844d78a2c6762f884feaaa2f944b1b3c5b7e42fd870b7210823429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_976790b8f08e24a8035352d795449ed5bd79915210f3fc403345ac553b23b660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976790b8f08e24a8035352d795449ed5bd79915210f3fc403345ac553b23b660->enter($__internal_976790b8f08e24a8035352d795449ed5bd79915210f3fc403345ac553b23b660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 125
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_976790b8f08e24a8035352d795449ed5bd79915210f3fc403345ac553b23b660->leave($__internal_976790b8f08e24a8035352d795449ed5bd79915210f3fc403345ac553b23b660_prof);

        
        $__internal_45beedae42844d78a2c6762f884feaaa2f944b1b3c5b7e42fd870b7210823429->leave($__internal_45beedae42844d78a2c6762f884feaaa2f944b1b3c5b7e42fd870b7210823429_prof);

    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        $__internal_ee673241ec850d547d9357137b439616990e6d08db27dae0b10650b1a9a6848a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee673241ec850d547d9357137b439616990e6d08db27dae0b10650b1a9a6848a->enter($__internal_ee673241ec850d547d9357137b439616990e6d08db27dae0b10650b1a9a6848a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_1ee3cb2f051116c222ca820697dd72e890adbfcb32516d5d131e40040c312660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee3cb2f051116c222ca820697dd72e890adbfcb32516d5d131e40040c312660->enter($__internal_1ee3cb2f051116c222ca820697dd72e890adbfcb32516d5d131e40040c312660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 132
        echo "                    ";
        ob_start();
        // line 133
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 134
        if ((("single_image" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 135
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 137
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 138
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 140
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 142
        echo "                ";
        
        $__internal_1ee3cb2f051116c222ca820697dd72e890adbfcb32516d5d131e40040c312660->leave($__internal_1ee3cb2f051116c222ca820697dd72e890adbfcb32516d5d131e40040c312660_prof);

        
        $__internal_ee673241ec850d547d9357137b439616990e6d08db27dae0b10650b1a9a6848a->leave($__internal_ee673241ec850d547d9357137b439616990e6d08db27dae0b10650b1a9a6848a_prof);

    }

    // line 143
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_8bc42d8ed9daf88cfa4d974ffd4c38fb268e913a1e1284677eee365022262cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc42d8ed9daf88cfa4d974ffd4c38fb268e913a1e1284677eee365022262cd5->enter($__internal_8bc42d8ed9daf88cfa4d974ffd4c38fb268e913a1e1284677eee365022262cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_d811d2dd0ea9e10c829397d08fcfac6907a546a8d7af1472cfeb57ddea585fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d811d2dd0ea9e10c829397d08fcfac6907a546a8d7af1472cfeb57ddea585fda->enter($__internal_d811d2dd0ea9e10c829397d08fcfac6907a546a8d7af1472cfeb57ddea585fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 144
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 150
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 189
        echo "                        </div>

                        ";
        // line 191
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 217
        echo "                    </nav>
                ";
        
        $__internal_d811d2dd0ea9e10c829397d08fcfac6907a546a8d7af1472cfeb57ddea585fda->leave($__internal_d811d2dd0ea9e10c829397d08fcfac6907a546a8d7af1472cfeb57ddea585fda_prof);

        
        $__internal_8bc42d8ed9daf88cfa4d974ffd4c38fb268e913a1e1284677eee365022262cd5->leave($__internal_8bc42d8ed9daf88cfa4d974ffd4c38fb268e913a1e1284677eee365022262cd5_prof);

    }

    // line 150
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_89616581a2c203989dad8e87bdacebdf3d6dbbf0d13f735e18ee52b83b3dd515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89616581a2c203989dad8e87bdacebdf3d6dbbf0d13f735e18ee52b83b3dd515->enter($__internal_89616581a2c203989dad8e87bdacebdf3d6dbbf0d13f735e18ee52b83b3dd515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_d5f4f78faa7a0e1700b76e2cf41487dbae7cc53d20cb83586e9028c0e046920b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f4f78faa7a0e1700b76e2cf41487dbae7cc53d20cb83586e9028c0e046920b->enter($__internal_d5f4f78faa7a0e1700b76e2cf41487dbae7cc53d20cb83586e9028c0e046920b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 151
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 152
        if (( !twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 153
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 154
            if (twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb")))) {
                // line 155
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 156
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 157
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 158
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 159
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 160
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 163
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 164
                            echo "                                                            <li>
                                                                ";
                            // line 165
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 166
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 167
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 168
                                    echo ($context["label"] ?? $this->getContext($context, "label"));
                                } else {
                                    // line 170
                                    echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 172
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 174
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 176
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 178
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 180
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "                                                ";
                }
                // line 182
                echo "                                            ";
            } else {
                // line 183
                echo "                                                ";
                echo ($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 185
            echo "                                        </ol>
                                    ";
        }
        // line 187
        echo "                                </div>
                            ";
        
        $__internal_d5f4f78faa7a0e1700b76e2cf41487dbae7cc53d20cb83586e9028c0e046920b->leave($__internal_d5f4f78faa7a0e1700b76e2cf41487dbae7cc53d20cb83586e9028c0e046920b_prof);

        
        $__internal_89616581a2c203989dad8e87bdacebdf3d6dbbf0d13f735e18ee52b83b3dd515->leave($__internal_89616581a2c203989dad8e87bdacebdf3d6dbbf0d13f735e18ee52b83b3dd515_prof);

    }

    // line 191
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_9512eccb4d0023cb1a9cc5151a92eb2f445a3cfcc15f2ad024774842787d4a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9512eccb4d0023cb1a9cc5151a92eb2f445a3cfcc15f2ad024774842787d4a31->enter($__internal_9512eccb4d0023cb1a9cc5151a92eb2f445a3cfcc15f2ad024774842787d4a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_645dc0924c8f5fed94fa9fbc745878e589e38a09b4addf26a153215005fbeabd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645dc0924c8f5fed94fa9fbc745878e589e38a09b4addf26a153215005fbeabd->enter($__internal_645dc0924c8f5fed94fa9fbc745878e589e38a09b4addf26a153215005fbeabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 192
        echo "                            ";
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 193
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 195
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 203
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 213
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 216
        echo "                        ";
        
        $__internal_645dc0924c8f5fed94fa9fbc745878e589e38a09b4addf26a153215005fbeabd->leave($__internal_645dc0924c8f5fed94fa9fbc745878e589e38a09b4addf26a153215005fbeabd_prof);

        
        $__internal_9512eccb4d0023cb1a9cc5151a92eb2f445a3cfcc15f2ad024774842787d4a31->leave($__internal_9512eccb4d0023cb1a9cc5151a92eb2f445a3cfcc15f2ad024774842787d4a31_prof);

    }

    // line 195
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_4fbdcd480823e825cc7e6510523ad7e4b6f438e3c5f21a01c14b45595f0bfb05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fbdcd480823e825cc7e6510523ad7e4b6f438e3c5f21a01c14b45595f0bfb05->enter($__internal_4fbdcd480823e825cc7e6510523ad7e4b6f438e3c5f21a01c14b45595f0bfb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_ef61373d9177eba7d460811b2750327599b606edfe1d45e3429058781b371f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef61373d9177eba7d460811b2750327599b606edfe1d45e3429058781b371f54->enter($__internal_ef61373d9177eba7d460811b2750327599b606edfe1d45e3429058781b371f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 196
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 200
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 200)->display($context);
        // line 201
        echo "                                            </li>
                                        ";
        
        $__internal_ef61373d9177eba7d460811b2750327599b606edfe1d45e3429058781b371f54->leave($__internal_ef61373d9177eba7d460811b2750327599b606edfe1d45e3429058781b371f54_prof);

        
        $__internal_4fbdcd480823e825cc7e6510523ad7e4b6f438e3c5f21a01c14b45595f0bfb05->leave($__internal_4fbdcd480823e825cc7e6510523ad7e4b6f438e3c5f21a01c14b45595f0bfb05_prof);

    }

    // line 203
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_c8e7df17c968524ac5d2a599d0b2cd5129f1053df60bae930ba7d2ba877579a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e7df17c968524ac5d2a599d0b2cd5129f1053df60bae930ba7d2ba877579a2->enter($__internal_c8e7df17c968524ac5d2a599d0b2cd5129f1053df60bae930ba7d2ba877579a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_462e3dc716402056fe9fa36f499f56535ab10f87c7e7fb1a5883f07aa0b3ccb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_462e3dc716402056fe9fa36f499f56535ab10f87c7e7fb1a5883f07aa0b3ccb5->enter($__internal_462e3dc716402056fe9fa36f499f56535ab10f87c7e7fb1a5883f07aa0b3ccb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 204
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 209
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 209)->display($context);
        // line 210
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_462e3dc716402056fe9fa36f499f56535ab10f87c7e7fb1a5883f07aa0b3ccb5->leave($__internal_462e3dc716402056fe9fa36f499f56535ab10f87c7e7fb1a5883f07aa0b3ccb5_prof);

        
        $__internal_c8e7df17c968524ac5d2a599d0b2cd5129f1053df60bae930ba7d2ba877579a2->leave($__internal_c8e7df17c968524ac5d2a599d0b2cd5129f1053df60bae930ba7d2ba877579a2_prof);

    }

    // line 222
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_2afdd176d76439c8e2e19e13a086c690e9bc828bfb67f973fc09ae3f85dd442e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2afdd176d76439c8e2e19e13a086c690e9bc828bfb67f973fc09ae3f85dd442e->enter($__internal_2afdd176d76439c8e2e19e13a086c690e9bc828bfb67f973fc09ae3f85dd442e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_a3392a8b8d3b9a79f74e7fc3d68d69149358b4e846fc858ebd008a0c07bc17c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3392a8b8d3b9a79f74e7fc3d68d69149358b4e846fc858ebd008a0c07bc17c9->enter($__internal_a3392a8b8d3b9a79f74e7fc3d68d69149358b4e846fc858ebd008a0c07bc17c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 223
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 255
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 257
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 353
        echo "            </div>
        ";
        
        $__internal_a3392a8b8d3b9a79f74e7fc3d68d69149358b4e846fc858ebd008a0c07bc17c9->leave($__internal_a3392a8b8d3b9a79f74e7fc3d68d69149358b4e846fc858ebd008a0c07bc17c9_prof);

        
        $__internal_2afdd176d76439c8e2e19e13a086c690e9bc828bfb67f973fc09ae3f85dd442e->leave($__internal_2afdd176d76439c8e2e19e13a086c690e9bc828bfb67f973fc09ae3f85dd442e_prof);

    }

    // line 223
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_1bdb0278247ff17a8922e71088ad6aa4c59dc1673b745e5c05c469fa4130c532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bdb0278247ff17a8922e71088ad6aa4c59dc1673b745e5c05c469fa4130c532->enter($__internal_1bdb0278247ff17a8922e71088ad6aa4c59dc1673b745e5c05c469fa4130c532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_d3d1ce32e02a696054297e320c3a2e5221e61876e9f49c2de8b0320d6d4aa2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d1ce32e02a696054297e320c3a2e5221e61876e9f49c2de8b0320d6d4aa2aa->enter($__internal_d3d1ce32e02a696054297e320c3a2e5221e61876e9f49c2de8b0320d6d4aa2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 224
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 226
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 252
        echo "                    </section>
                </aside>
            ";
        
        $__internal_d3d1ce32e02a696054297e320c3a2e5221e61876e9f49c2de8b0320d6d4aa2aa->leave($__internal_d3d1ce32e02a696054297e320c3a2e5221e61876e9f49c2de8b0320d6d4aa2aa_prof);

        
        $__internal_1bdb0278247ff17a8922e71088ad6aa4c59dc1673b745e5c05c469fa4130c532->leave($__internal_1bdb0278247ff17a8922e71088ad6aa4c59dc1673b745e5c05c469fa4130c532_prof);

    }

    // line 226
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_3005ae97dacb3a4a7c6a472ed51d929a0b1966e7da9507d07e3d987a8c30b99a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3005ae97dacb3a4a7c6a472ed51d929a0b1966e7da9507d07e3d987a8c30b99a->enter($__internal_3005ae97dacb3a4a7c6a472ed51d929a0b1966e7da9507d07e3d987a8c30b99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_5d20877932f848230f4d3395c8a2c1f6fac8859dd0df7494c38331de1ba05fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d20877932f848230f4d3395c8a2c1f6fac8859dd0df7494c38331de1ba05fdc->enter($__internal_5d20877932f848230f4d3395c8a2c1f6fac8859dd0df7494c38331de1ba05fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 227
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 239
        echo "
                            ";
        // line 240
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 241
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 244
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 251
        echo "                        ";
        
        $__internal_5d20877932f848230f4d3395c8a2c1f6fac8859dd0df7494c38331de1ba05fdc->leave($__internal_5d20877932f848230f4d3395c8a2c1f6fac8859dd0df7494c38331de1ba05fdc_prof);

        
        $__internal_3005ae97dacb3a4a7c6a472ed51d929a0b1966e7da9507d07e3d987a8c30b99a->leave($__internal_3005ae97dacb3a4a7c6a472ed51d929a0b1966e7da9507d07e3d987a8c30b99a_prof);

    }

    // line 227
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_7fbbefe8c145a2248299bcc478d88c19a4bc9e3ea95af058e470f8d839f00b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbbefe8c145a2248299bcc478d88c19a4bc9e3ea95af058e470f8d839f00b0d->enter($__internal_7fbbefe8c145a2248299bcc478d88c19a4bc9e3ea95af058e470f8d839f00b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_45c84ad15785ab7d8fe5d31b059d17e80b94a59a8d0eeff234e0211c552cd8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c84ad15785ab7d8fe5d31b059d17e80b94a59a8d0eeff234e0211c552cd8d5->enter($__internal_45c84ad15785ab7d8fe5d31b059d17e80b94a59a8d0eeff234e0211c552cd8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 228
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_45c84ad15785ab7d8fe5d31b059d17e80b94a59a8d0eeff234e0211c552cd8d5->leave($__internal_45c84ad15785ab7d8fe5d31b059d17e80b94a59a8d0eeff234e0211c552cd8d5_prof);

        
        $__internal_7fbbefe8c145a2248299bcc478d88c19a4bc9e3ea95af058e470f8d839f00b0d->leave($__internal_7fbbefe8c145a2248299bcc478d88c19a4bc9e3ea95af058e470f8d839f00b0d_prof);

    }

    // line 240
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_ffbf1097cffc82b721ac213b6eebc15ac565d6d661998f0e11147ee5cb6057d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffbf1097cffc82b721ac213b6eebc15ac565d6d661998f0e11147ee5cb6057d0->enter($__internal_ffbf1097cffc82b721ac213b6eebc15ac565d6d661998f0e11147ee5cb6057d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_917369f2f38beefd8a9c4bb803e1c317be5c19e86aa7d20424da14a69e223391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917369f2f38beefd8a9c4bb803e1c317be5c19e86aa7d20424da14a69e223391->enter($__internal_917369f2f38beefd8a9c4bb803e1c317be5c19e86aa7d20424da14a69e223391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_917369f2f38beefd8a9c4bb803e1c317be5c19e86aa7d20424da14a69e223391->leave($__internal_917369f2f38beefd8a9c4bb803e1c317be5c19e86aa7d20424da14a69e223391_prof);

        
        $__internal_ffbf1097cffc82b721ac213b6eebc15ac565d6d661998f0e11147ee5cb6057d0->leave($__internal_ffbf1097cffc82b721ac213b6eebc15ac565d6d661998f0e11147ee5cb6057d0_prof);

    }

    // line 241
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_4617fd36b2925cb83b6773fbfbd35e9ae7035282d42d65affccb701e5d0b7a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4617fd36b2925cb83b6773fbfbd35e9ae7035282d42d65affccb701e5d0b7a92->enter($__internal_4617fd36b2925cb83b6773fbfbd35e9ae7035282d42d65affccb701e5d0b7a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_8f2cfcff901c69576a9f5bdc61f25f1ed941679685356b2d2b4a8c3d270009fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2cfcff901c69576a9f5bdc61f25f1ed941679685356b2d2b4a8c3d270009fe->enter($__internal_8f2cfcff901c69576a9f5bdc61f25f1ed941679685356b2d2b4a8c3d270009fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 242
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_8f2cfcff901c69576a9f5bdc61f25f1ed941679685356b2d2b4a8c3d270009fe->leave($__internal_8f2cfcff901c69576a9f5bdc61f25f1ed941679685356b2d2b4a8c3d270009fe_prof);

        
        $__internal_4617fd36b2925cb83b6773fbfbd35e9ae7035282d42d65affccb701e5d0b7a92->leave($__internal_4617fd36b2925cb83b6773fbfbd35e9ae7035282d42d65affccb701e5d0b7a92_prof);

    }

    // line 244
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_6484505b03e9375975aa8feba57184dca627dec73420d928301542ae4ace5b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6484505b03e9375975aa8feba57184dca627dec73420d928301542ae4ace5b7b->enter($__internal_6484505b03e9375975aa8feba57184dca627dec73420d928301542ae4ace5b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_7172c15d9dcd2f27e08b1cfdc257caee28c3b4c93fd93ebcf2b65ba4936088ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7172c15d9dcd2f27e08b1cfdc257caee28c3b4c93fd93ebcf2b65ba4936088ca->enter($__internal_7172c15d9dcd2f27e08b1cfdc257caee28c3b4c93fd93ebcf2b65ba4936088ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 245
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 246
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 249
        echo "                                </p>
                            ";
        
        $__internal_7172c15d9dcd2f27e08b1cfdc257caee28c3b4c93fd93ebcf2b65ba4936088ca->leave($__internal_7172c15d9dcd2f27e08b1cfdc257caee28c3b4c93fd93ebcf2b65ba4936088ca_prof);

        
        $__internal_6484505b03e9375975aa8feba57184dca627dec73420d928301542ae4ace5b7b->leave($__internal_6484505b03e9375975aa8feba57184dca627dec73420d928301542ae4ace5b7b_prof);

    }

    // line 246
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_885cb69c23553ae460a197f46d4160a5e71ff0e8047fcd547af4b61e548b47dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885cb69c23553ae460a197f46d4160a5e71ff0e8047fcd547af4b61e548b47dd->enter($__internal_885cb69c23553ae460a197f46d4160a5e71ff0e8047fcd547af4b61e548b47dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_a1f7e3fc7029ef7e64d3fbdf9bc90369bd1dec264a709a927a805e0ff0cee21f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f7e3fc7029ef7e64d3fbdf9bc90369bd1dec264a709a927a805e0ff0cee21f->enter($__internal_a1f7e3fc7029ef7e64d3fbdf9bc90369bd1dec264a709a927a805e0ff0cee21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 247
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_a1f7e3fc7029ef7e64d3fbdf9bc90369bd1dec264a709a927a805e0ff0cee21f->leave($__internal_a1f7e3fc7029ef7e64d3fbdf9bc90369bd1dec264a709a927a805e0ff0cee21f_prof);

        
        $__internal_885cb69c23553ae460a197f46d4160a5e71ff0e8047fcd547af4b61e548b47dd->leave($__internal_885cb69c23553ae460a197f46d4160a5e71ff0e8047fcd547af4b61e548b47dd_prof);

    }

    // line 257
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_45993ff94bb5821c13bad48d86454ea1b62c87526e57ac98a8e8ba69fa309338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45993ff94bb5821c13bad48d86454ea1b62c87526e57ac98a8e8ba69fa309338->enter($__internal_45993ff94bb5821c13bad48d86454ea1b62c87526e57ac98a8e8ba69fa309338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_9ae68e80b263f0f2a78ac1c2cfa41cebaa495d59da9717bdfc7e0bfbcff1b9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae68e80b263f0f2a78ac1c2cfa41cebaa495d59da9717bdfc7e0bfbcff1b9a2->enter($__internal_9ae68e80b263f0f2a78ac1c2cfa41cebaa495d59da9717bdfc7e0bfbcff1b9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 258
        echo "                    <section class=\"content-header\">

                        ";
        // line 260
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 314
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 317
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 351
        echo "                    </section>
                ";
        
        $__internal_9ae68e80b263f0f2a78ac1c2cfa41cebaa495d59da9717bdfc7e0bfbcff1b9a2->leave($__internal_9ae68e80b263f0f2a78ac1c2cfa41cebaa495d59da9717bdfc7e0bfbcff1b9a2_prof);

        
        $__internal_45993ff94bb5821c13bad48d86454ea1b62c87526e57ac98a8e8ba69fa309338->leave($__internal_45993ff94bb5821c13bad48d86454ea1b62c87526e57ac98a8e8ba69fa309338_prof);

    }

    // line 260
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_af50753a5e18e6741e1a024ec1629142e63a97a000456daa968e5b89bc17ad40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af50753a5e18e6741e1a024ec1629142e63a97a000456daa968e5b89bc17ad40->enter($__internal_af50753a5e18e6741e1a024ec1629142e63a97a000456daa968e5b89bc17ad40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_17149f4b355741169f664285ba5571156b515a5d524750bf4cbd80d819eab028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17149f4b355741169f664285ba5571156b515a5d524750bf4cbd80d819eab028->enter($__internal_17149f4b355741169f664285ba5571156b515a5d524750bf4cbd80d819eab028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 261
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 313
        echo "                        ";
        
        $__internal_17149f4b355741169f664285ba5571156b515a5d524750bf4cbd80d819eab028->leave($__internal_17149f4b355741169f664285ba5571156b515a5d524750bf4cbd80d819eab028_prof);

        
        $__internal_af50753a5e18e6741e1a024ec1629142e63a97a000456daa968e5b89bc17ad40->leave($__internal_af50753a5e18e6741e1a024ec1629142e63a97a000456daa968e5b89bc17ad40_prof);

    }

    // line 261
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_a7b292bebfe6e7fc3e11b7237e58b56336c86669e478bef4524af4a923f4a0a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b292bebfe6e7fc3e11b7237e58b56336c86669e478bef4524af4a923f4a0a3->enter($__internal_a7b292bebfe6e7fc3e11b7237e58b56336c86669e478bef4524af4a923f4a0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_c8cff0eed226058ba9dfb9e66cb6625862566ee2061a9781cecc1ed2aabb2ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8cff0eed226058ba9dfb9e66cb6625862566ee2061a9781cecc1ed2aabb2ee3->enter($__internal_c8cff0eed226058ba9dfb9e66cb6625862566ee2061a9781cecc1ed2aabb2ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 262
        echo "                                ";
        if ((( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty(($context["_actions"] ?? $this->getContext($context, "_actions")))) ||  !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"))))) {
            // line 263
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 265
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 272
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 274
            if ( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu")))) {
                // line 275
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 276
                echo ($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"));
                echo "
                                                    </div>
                                                ";
            }
            // line 279
            echo "
                                                ";
            // line 280
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 281
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 283
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 285
                echo "                                                    </div>
                                                ";
            }
            // line 287
            echo "
                                                ";
            // line 288
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 304
            echo "
                                                ";
            // line 305
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions")))) {
                // line 306
                echo "                                                    ";
                echo ($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 308
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 312
        echo "                            ";
        
        $__internal_c8cff0eed226058ba9dfb9e66cb6625862566ee2061a9781cecc1ed2aabb2ee3->leave($__internal_c8cff0eed226058ba9dfb9e66cb6625862566ee2061a9781cecc1ed2aabb2ee3_prof);

        
        $__internal_a7b292bebfe6e7fc3e11b7237e58b56336c86669e478bef4524af4a923f4a0a3->leave($__internal_a7b292bebfe6e7fc3e11b7237e58b56336c86669e478bef4524af4a923f4a0a3_prof);

    }

    // line 265
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_e72701cefacc68a7a3fb16449b08dd60bfd908b2481a6640d33a960ba1ad4ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72701cefacc68a7a3fb16449b08dd60bfd908b2481a6640d33a960ba1ad4ab6->enter($__internal_e72701cefacc68a7a3fb16449b08dd60bfd908b2481a6640d33a960ba1ad4ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_f875e6ccd989848725f9f22ceef6e0516c5601a363a1b0ddef0279cb5a45d23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f875e6ccd989848725f9f22ceef6e0516c5601a363a1b0ddef0279cb5a45d23a->enter($__internal_f875e6ccd989848725f9f22ceef6e0516c5601a363a1b0ddef0279cb5a45d23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 266
        echo "                                                ";
        if ( !twig_test_empty(($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title")))) {
            // line 267
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 268
            echo ($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 271
        echo "                                            ";
        
        $__internal_f875e6ccd989848725f9f22ceef6e0516c5601a363a1b0ddef0279cb5a45d23a->leave($__internal_f875e6ccd989848725f9f22ceef6e0516c5601a363a1b0ddef0279cb5a45d23a_prof);

        
        $__internal_e72701cefacc68a7a3fb16449b08dd60bfd908b2481a6640d33a960ba1ad4ab6->leave($__internal_e72701cefacc68a7a3fb16449b08dd60bfd908b2481a6640d33a960ba1ad4ab6_prof);

    }

    // line 288
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_ccb49f86b024dd2bd7c3bc04a7e67098a39a97001f2e619c2fe26b804126fdaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb49f86b024dd2bd7c3bc04a7e67098a39a97001f2e619c2fe26b804126fdaf->enter($__internal_ccb49f86b024dd2bd7c3bc04a7e67098a39a97001f2e619c2fe26b804126fdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_bcc3423c57d9d08c4a92f2a633808ecaca71ae00633c8d0407a2a53e5009edd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc3423c57d9d08c4a92f2a633808ecaca71ae00633c8d0407a2a53e5009edd5->enter($__internal_bcc3423c57d9d08c4a92f2a633808ecaca71ae00633c8d0407a2a53e5009edd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 289
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter(($context["_actions"] ?? $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 290
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 291
            if ((twig_length_filter($this->env, twig_split_filter($this->env, ($context["_actions"] ?? $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 292
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 293
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 295
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 299
                echo "                                                            ";
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 301
            echo "                                                        </ul>
                                                    ";
        }
        // line 303
        echo "                                                ";
        
        $__internal_bcc3423c57d9d08c4a92f2a633808ecaca71ae00633c8d0407a2a53e5009edd5->leave($__internal_bcc3423c57d9d08c4a92f2a633808ecaca71ae00633c8d0407a2a53e5009edd5_prof);

        
        $__internal_ccb49f86b024dd2bd7c3bc04a7e67098a39a97001f2e619c2fe26b804126fdaf->leave($__internal_ccb49f86b024dd2bd7c3bc04a7e67098a39a97001f2e619c2fe26b804126fdaf_prof);

    }

    // line 317
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_7ff8bed3dd840e055121c6a19a909908d372018b90ca67dd970f2ceb67d9e80c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff8bed3dd840e055121c6a19a909908d372018b90ca67dd970f2ceb67d9e80c->enter($__internal_7ff8bed3dd840e055121c6a19a909908d372018b90ca67dd970f2ceb67d9e80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_7c3c5090c778707c141c92fe6c3a14c1d69884000468b402ac395a006b9e8af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3c5090c778707c141c92fe6c3a14c1d69884000468b402ac395a006b9e8af6->enter($__internal_7c3c5090c778707c141c92fe6c3a14c1d69884000468b402ac395a006b9e8af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 318
        echo "
                            ";
        // line 319
        $this->displayBlock('notice', $context, $blocks);
        // line 322
        echo "
                            ";
        // line 323
        if ( !twig_test_empty(($context["_preview"] ?? $this->getContext($context, "_preview")))) {
            // line 324
            echo "                                <div class=\"sonata-ba-preview\">";
            echo ($context["_preview"] ?? $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 326
        echo "
                            ";
        // line 327
        if ( !twig_test_empty(($context["_content"] ?? $this->getContext($context, "_content")))) {
            // line 328
            echo "                                <div class=\"sonata-ba-content\">";
            echo ($context["_content"] ?? $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 330
        echo "
                            ";
        // line 331
        if ( !twig_test_empty(($context["_show"] ?? $this->getContext($context, "_show")))) {
            // line 332
            echo "                                <div class=\"sonata-ba-show\">";
            echo ($context["_show"] ?? $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 334
        echo "
                            ";
        // line 335
        if ( !twig_test_empty(($context["_form"] ?? $this->getContext($context, "_form")))) {
            // line 336
            echo "                                <div class=\"sonata-ba-form\">";
            echo ($context["_form"] ?? $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 338
        echo "
                            ";
        // line 339
        if ( !twig_test_empty(($context["_list_filters"] ?? $this->getContext($context, "_list_filters")))) {
            // line 340
            echo "                                <div class=\"row\">
                                    ";
            // line 341
            echo ($context["_list_filters"] ?? $this->getContext($context, "_list_filters"));
            echo "
                                </div>
                            ";
        }
        // line 344
        echo "
                            ";
        // line 345
        if ( !twig_test_empty(($context["_list_table"] ?? $this->getContext($context, "_list_table")))) {
            // line 346
            echo "                                <div class=\"row\">
                                    ";
            // line 347
            echo ($context["_list_table"] ?? $this->getContext($context, "_list_table"));
            echo "
                                </div>
                            ";
        }
        // line 350
        echo "                        ";
        
        $__internal_7c3c5090c778707c141c92fe6c3a14c1d69884000468b402ac395a006b9e8af6->leave($__internal_7c3c5090c778707c141c92fe6c3a14c1d69884000468b402ac395a006b9e8af6_prof);

        
        $__internal_7ff8bed3dd840e055121c6a19a909908d372018b90ca67dd970f2ceb67d9e80c->leave($__internal_7ff8bed3dd840e055121c6a19a909908d372018b90ca67dd970f2ceb67d9e80c_prof);

    }

    // line 319
    public function block_notice($context, array $blocks = array())
    {
        $__internal_bf08f0b3ed0be625151380dd4a41c791f752d2141d51be1945f3ccc677adc8b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf08f0b3ed0be625151380dd4a41c791f752d2141d51be1945f3ccc677adc8b0->enter($__internal_bf08f0b3ed0be625151380dd4a41c791f752d2141d51be1945f3ccc677adc8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_50dfe77627d2070e7c989e79dbd319d41a882ee61ede87730c2b3651c62348d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50dfe77627d2070e7c989e79dbd319d41a882ee61ede87730c2b3651c62348d5->enter($__internal_50dfe77627d2070e7c989e79dbd319d41a882ee61ede87730c2b3651c62348d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 320
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 320)->display($context);
        // line 321
        echo "                            ";
        
        $__internal_50dfe77627d2070e7c989e79dbd319d41a882ee61ede87730c2b3651c62348d5->leave($__internal_50dfe77627d2070e7c989e79dbd319d41a882ee61ede87730c2b3651c62348d5_prof);

        
        $__internal_bf08f0b3ed0be625151380dd4a41c791f752d2141d51be1945f3ccc677adc8b0->leave($__internal_bf08f0b3ed0be625151380dd4a41c791f752d2141d51be1945f3ccc677adc8b0_prof);

    }

    // line 358
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_fa109ed6575e96205ad923ca8ed6f1d642a0a2828c3e86f7857b3f9e410a25f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa109ed6575e96205ad923ca8ed6f1d642a0a2828c3e86f7857b3f9e410a25f1->enter($__internal_fa109ed6575e96205ad923ca8ed6f1d642a0a2828c3e86f7857b3f9e410a25f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_01a7b303de82d4ad91664308fe865f9050acd405b8f538d2b8135f6b2351dc03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a7b303de82d4ad91664308fe865f9050acd405b8f538d2b8135f6b2351dc03->enter($__internal_01a7b303de82d4ad91664308fe865f9050acd405b8f538d2b8135f6b2351dc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 359
        echo "            ";
        // line 360
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_01a7b303de82d4ad91664308fe865f9050acd405b8f538d2b8135f6b2351dc03->leave($__internal_01a7b303de82d4ad91664308fe865f9050acd405b8f538d2b8135f6b2351dc03_prof);

        
        $__internal_fa109ed6575e96205ad923ca8ed6f1d642a0a2828c3e86f7857b3f9e410a25f1->leave($__internal_fa109ed6575e96205ad923ca8ed6f1d642a0a2828c3e86f7857b3f9e410a25f1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1458 => 360,  1456 => 359,  1447 => 358,  1437 => 321,  1434 => 320,  1425 => 319,  1415 => 350,  1409 => 347,  1406 => 346,  1404 => 345,  1401 => 344,  1395 => 341,  1392 => 340,  1390 => 339,  1387 => 338,  1381 => 336,  1379 => 335,  1376 => 334,  1370 => 332,  1368 => 331,  1365 => 330,  1359 => 328,  1357 => 327,  1354 => 326,  1348 => 324,  1346 => 323,  1343 => 322,  1341 => 319,  1338 => 318,  1329 => 317,  1319 => 303,  1315 => 301,  1309 => 299,  1302 => 295,  1297 => 293,  1294 => 292,  1292 => 291,  1289 => 290,  1286 => 289,  1277 => 288,  1267 => 271,  1261 => 268,  1258 => 267,  1255 => 266,  1246 => 265,  1236 => 312,  1230 => 308,  1224 => 306,  1222 => 305,  1219 => 304,  1217 => 288,  1214 => 287,  1210 => 285,  1195 => 283,  1191 => 282,  1188 => 281,  1186 => 280,  1183 => 279,  1177 => 276,  1174 => 275,  1172 => 274,  1168 => 272,  1166 => 265,  1162 => 263,  1159 => 262,  1150 => 261,  1140 => 313,  1137 => 261,  1128 => 260,  1117 => 351,  1115 => 317,  1110 => 314,  1108 => 260,  1104 => 258,  1095 => 257,  1084 => 247,  1075 => 246,  1064 => 249,  1062 => 246,  1059 => 245,  1050 => 244,  1037 => 242,  1028 => 241,  1010 => 240,  989 => 230,  983 => 228,  974 => 227,  964 => 251,  961 => 244,  958 => 241,  956 => 240,  953 => 239,  950 => 227,  941 => 226,  929 => 252,  927 => 226,  923 => 224,  914 => 223,  903 => 353,  901 => 257,  897 => 255,  894 => 223,  885 => 222,  873 => 210,  871 => 209,  864 => 204,  855 => 203,  844 => 201,  842 => 200,  836 => 196,  827 => 195,  817 => 216,  812 => 213,  809 => 203,  807 => 195,  803 => 193,  800 => 192,  791 => 191,  780 => 187,  776 => 185,  770 => 183,  767 => 182,  764 => 181,  750 => 180,  744 => 178,  740 => 176,  734 => 174,  730 => 172,  727 => 170,  724 => 168,  722 => 167,  717 => 166,  715 => 165,  712 => 164,  710 => 163,  707 => 160,  705 => 159,  703 => 158,  701 => 157,  683 => 156,  680 => 155,  678 => 154,  675 => 153,  673 => 152,  670 => 151,  661 => 150,  650 => 217,  648 => 191,  644 => 189,  642 => 150,  634 => 144,  625 => 143,  615 => 142,  611 => 140,  605 => 138,  602 => 137,  594 => 135,  592 => 134,  587 => 133,  584 => 132,  575 => 131,  561 => 127,  557 => 125,  548 => 124,  537 => 219,  534 => 143,  531 => 131,  529 => 124,  526 => 123,  517 => 122,  499 => 118,  489 => 115,  486 => 114,  483 => 113,  469 => 112,  464 => 110,  461 => 107,  459 => 106,  457 => 105,  455 => 104,  451 => 101,  448 => 100,  445 => 99,  428 => 98,  425 => 97,  422 => 96,  416 => 94,  414 => 93,  408 => 91,  399 => 90,  389 => 66,  380 => 64,  375 => 63,  366 => 62,  345 => 50,  341 => 48,  335 => 47,  327 => 46,  319 => 45,  311 => 44,  307 => 42,  298 => 41,  288 => 87,  285 => 86,  279 => 84,  276 => 83,  273 => 81,  268 => 80,  265 => 79,  262 => 77,  258 => 75,  256 => 73,  254 => 71,  251 => 70,  249 => 69,  247 => 68,  244 => 67,  242 => 62,  239 => 61,  236 => 41,  227 => 40,  217 => 38,  208 => 36,  203 => 35,  194 => 34,  181 => 29,  172 => 28,  154 => 26,  141 => 365,  138 => 364,  135 => 358,  133 => 357,  129 => 355,  127 => 222,  124 => 221,  122 => 122,  115 => 118,  111 => 116,  109 => 90,  105 => 88,  103 => 40,  100 => 39,  98 => 34,  95 => 33,  93 => 28,  88 => 26,  84 => 24,  82 => 23,  80 => 22,  78 => 21,  76 => 20,  74 => 19,  72 => 18,  70 => 17,  68 => 16,  66 => 15,  64 => 14,  62 => 13,  60 => 12,  57 => 11,);
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

{% set _preview = block('preview') is defined ? block('preview')|trim : null %}
{% set _form = block('form') is defined ? block('form')|trim : null %}
{% set _show = block('show') is defined ? block('show')|trim : null %}
{% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
{% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
{% set _tab_menu = block('tab_menu') is defined ? block('tab_menu')|trim : null %}
{% set _content = block('content') is defined ? block('content')|trim : null %}
{% set _title = block('title') is defined ? block('title')|trim : null %}
{% set _breadcrumb = block('breadcrumb') is defined ? block('breadcrumb')|trim : null %}
{% set _actions = block('actions') is defined ? block('actions')|trim : null %}
{% set _navbar_title = block('navbar_title') is defined ? block('navbar_title')|trim : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset(
                    'bundles/sonatacore/vendor/moment/locale/' ~
                    locale|lower|replace({'_':'-'}) ~
                    '.js'
                ) }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|striptags|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {% if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif %}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    <span>{{ label }}</span>
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                {% if _tab_menu is not empty %}
                                                    <div class=\"navbar-left\">
                                                        {{ _tab_menu|raw }}
                                                    </div>
                                                {% endif %}

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_filters is not empty %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            {% if _list_table is not empty %}
                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>
                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "SonataAdminBundle::standard_layout.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
