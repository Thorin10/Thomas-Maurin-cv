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
        $__internal_09dc17aa256da6aca3d571ee818be5ade151a0416e018059e8f72819f25ddf53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09dc17aa256da6aca3d571ee818be5ade151a0416e018059e8f72819f25ddf53->enter($__internal_09dc17aa256da6aca3d571ee818be5ade151a0416e018059e8f72819f25ddf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_f398315a229720f26580fb92279e446b411e1552748b0310446361cfbc1b29fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f398315a229720f26580fb92279e446b411e1552748b0310446361cfbc1b29fe->enter($__internal_f398315a229720f26580fb92279e446b411e1552748b0310446361cfbc1b29fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

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
        
        $__internal_09dc17aa256da6aca3d571ee818be5ade151a0416e018059e8f72819f25ddf53->leave($__internal_09dc17aa256da6aca3d571ee818be5ade151a0416e018059e8f72819f25ddf53_prof);

        
        $__internal_f398315a229720f26580fb92279e446b411e1552748b0310446361cfbc1b29fe->leave($__internal_f398315a229720f26580fb92279e446b411e1552748b0310446361cfbc1b29fe_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_b7a7f188c228c322a559062f7a580733b6bc99ae166386387aacd96d2df2e3c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7a7f188c228c322a559062f7a580733b6bc99ae166386387aacd96d2df2e3c5->enter($__internal_b7a7f188c228c322a559062f7a580733b6bc99ae166386387aacd96d2df2e3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_91f4d141d3ed148d3f4c31052b0d5e98397bab45d03f13177df818fda157a47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f4d141d3ed148d3f4c31052b0d5e98397bab45d03f13177df818fda157a47b->enter($__internal_91f4d141d3ed148d3f4c31052b0d5e98397bab45d03f13177df818fda157a47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_91f4d141d3ed148d3f4c31052b0d5e98397bab45d03f13177df818fda157a47b->leave($__internal_91f4d141d3ed148d3f4c31052b0d5e98397bab45d03f13177df818fda157a47b_prof);

        
        $__internal_b7a7f188c228c322a559062f7a580733b6bc99ae166386387aacd96d2df2e3c5->leave($__internal_b7a7f188c228c322a559062f7a580733b6bc99ae166386387aacd96d2df2e3c5_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_075adbbd2c5978d06db4ceebd76ba933ce8c8882201aab0974e1b9de48a126ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075adbbd2c5978d06db4ceebd76ba933ce8c8882201aab0974e1b9de48a126ea->enter($__internal_075adbbd2c5978d06db4ceebd76ba933ce8c8882201aab0974e1b9de48a126ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_39147d694d9fbc0f70b09e61a9ad025401e023731112a9dccead29da86b9e2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39147d694d9fbc0f70b09e61a9ad025401e023731112a9dccead29da86b9e2c7->enter($__internal_39147d694d9fbc0f70b09e61a9ad025401e023731112a9dccead29da86b9e2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_39147d694d9fbc0f70b09e61a9ad025401e023731112a9dccead29da86b9e2c7->leave($__internal_39147d694d9fbc0f70b09e61a9ad025401e023731112a9dccead29da86b9e2c7_prof);

        
        $__internal_075adbbd2c5978d06db4ceebd76ba933ce8c8882201aab0974e1b9de48a126ea->leave($__internal_075adbbd2c5978d06db4ceebd76ba933ce8c8882201aab0974e1b9de48a126ea_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7f21b273a686a34e63d31066c04a4fcd0aeeb8ed0c322d2e38e9644cd52fb38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f21b273a686a34e63d31066c04a4fcd0aeeb8ed0c322d2e38e9644cd52fb38->enter($__internal_e7f21b273a686a34e63d31066c04a4fcd0aeeb8ed0c322d2e38e9644cd52fb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ec92e5001ed642f50da10cf3b9c30d5ccaddcbb6e62884a993d3fba4fbb72258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec92e5001ed642f50da10cf3b9c30d5ccaddcbb6e62884a993d3fba4fbb72258->enter($__internal_ec92e5001ed642f50da10cf3b9c30d5ccaddcbb6e62884a993d3fba4fbb72258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ec92e5001ed642f50da10cf3b9c30d5ccaddcbb6e62884a993d3fba4fbb72258->leave($__internal_ec92e5001ed642f50da10cf3b9c30d5ccaddcbb6e62884a993d3fba4fbb72258_prof);

        
        $__internal_e7f21b273a686a34e63d31066c04a4fcd0aeeb8ed0c322d2e38e9644cd52fb38->leave($__internal_e7f21b273a686a34e63d31066c04a4fcd0aeeb8ed0c322d2e38e9644cd52fb38_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_45b4acbe85460f6cbb05381e1296cbc2d683b65552758be7abf8b5f3cb2b9d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b4acbe85460f6cbb05381e1296cbc2d683b65552758be7abf8b5f3cb2b9d29->enter($__internal_45b4acbe85460f6cbb05381e1296cbc2d683b65552758be7abf8b5f3cb2b9d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7e85248e5e80e3ee8d1d50eed686a9b32c948b825bd36d9cb4cf107b06d6a123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e85248e5e80e3ee8d1d50eed686a9b32c948b825bd36d9cb4cf107b06d6a123->enter($__internal_7e85248e5e80e3ee8d1d50eed686a9b32c948b825bd36d9cb4cf107b06d6a123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7e85248e5e80e3ee8d1d50eed686a9b32c948b825bd36d9cb4cf107b06d6a123->leave($__internal_7e85248e5e80e3ee8d1d50eed686a9b32c948b825bd36d9cb4cf107b06d6a123_prof);

        
        $__internal_45b4acbe85460f6cbb05381e1296cbc2d683b65552758be7abf8b5f3cb2b9d29->leave($__internal_45b4acbe85460f6cbb05381e1296cbc2d683b65552758be7abf8b5f3cb2b9d29_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_8a5e7d6e77a1b4127033f37d1a9a8d93a5c23ca55ebfd053b30bc699a01a3ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5e7d6e77a1b4127033f37d1a9a8d93a5c23ca55ebfd053b30bc699a01a3ef1->enter($__internal_8a5e7d6e77a1b4127033f37d1a9a8d93a5c23ca55ebfd053b30bc699a01a3ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_f5e90083962cac2f7556fbcefb8b81bdedece7aa74894f4ee496edc9f4c4dd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e90083962cac2f7556fbcefb8b81bdedece7aa74894f4ee496edc9f4c4dd6e->enter($__internal_f5e90083962cac2f7556fbcefb8b81bdedece7aa74894f4ee496edc9f4c4dd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

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
        
        $__internal_f5e90083962cac2f7556fbcefb8b81bdedece7aa74894f4ee496edc9f4c4dd6e->leave($__internal_f5e90083962cac2f7556fbcefb8b81bdedece7aa74894f4ee496edc9f4c4dd6e_prof);

        
        $__internal_8a5e7d6e77a1b4127033f37d1a9a8d93a5c23ca55ebfd053b30bc699a01a3ef1->leave($__internal_8a5e7d6e77a1b4127033f37d1a9a8d93a5c23ca55ebfd053b30bc699a01a3ef1_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_8d29b68b7c1f9919b422e85c46f855be98aa45bc0b5b3ec874404da80c5edf42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d29b68b7c1f9919b422e85c46f855be98aa45bc0b5b3ec874404da80c5edf42->enter($__internal_8d29b68b7c1f9919b422e85c46f855be98aa45bc0b5b3ec874404da80c5edf42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_ad5a086c4b964c52371123d5f37bb3016ffad6375a0b972caaaffb2fcfef3b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5a086c4b964c52371123d5f37bb3016ffad6375a0b972caaaffb2fcfef3b65->enter($__internal_ad5a086c4b964c52371123d5f37bb3016ffad6375a0b972caaaffb2fcfef3b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

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
        
        $__internal_ad5a086c4b964c52371123d5f37bb3016ffad6375a0b972caaaffb2fcfef3b65->leave($__internal_ad5a086c4b964c52371123d5f37bb3016ffad6375a0b972caaaffb2fcfef3b65_prof);

        
        $__internal_8d29b68b7c1f9919b422e85c46f855be98aa45bc0b5b3ec874404da80c5edf42->leave($__internal_8d29b68b7c1f9919b422e85c46f855be98aa45bc0b5b3ec874404da80c5edf42_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_0b121c17cdbec75620cc2c4cc61ac99b3023e8e317dbfd0aea0a9584ae203f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b121c17cdbec75620cc2c4cc61ac99b3023e8e317dbfd0aea0a9584ae203f5c->enter($__internal_0b121c17cdbec75620cc2c4cc61ac99b3023e8e317dbfd0aea0a9584ae203f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_b32cbaa2799f8dd608e312623f298a2b1d589547d255623eadf4791ceb00d641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32cbaa2799f8dd608e312623f298a2b1d589547d255623eadf4791ceb00d641->enter($__internal_b32cbaa2799f8dd608e312623f298a2b1d589547d255623eadf4791ceb00d641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

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
        
        $__internal_b32cbaa2799f8dd608e312623f298a2b1d589547d255623eadf4791ceb00d641->leave($__internal_b32cbaa2799f8dd608e312623f298a2b1d589547d255623eadf4791ceb00d641_prof);

        
        $__internal_0b121c17cdbec75620cc2c4cc61ac99b3023e8e317dbfd0aea0a9584ae203f5c->leave($__internal_0b121c17cdbec75620cc2c4cc61ac99b3023e8e317dbfd0aea0a9584ae203f5c_prof);

    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_906440861fc4faa92f40018f8b4c3326f1ac96ab4b64924173412fd11b9c861f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_906440861fc4faa92f40018f8b4c3326f1ac96ab4b64924173412fd11b9c861f->enter($__internal_906440861fc4faa92f40018f8b4c3326f1ac96ab4b64924173412fd11b9c861f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_6290ed6ae0eb26fbcdbae2ee6cfc14dad96ddfb9b37ba240d14638e287f65c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6290ed6ae0eb26fbcdbae2ee6cfc14dad96ddfb9b37ba240d14638e287f65c4c->enter($__internal_6290ed6ae0eb26fbcdbae2ee6cfc14dad96ddfb9b37ba240d14638e287f65c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_6290ed6ae0eb26fbcdbae2ee6cfc14dad96ddfb9b37ba240d14638e287f65c4c->leave($__internal_6290ed6ae0eb26fbcdbae2ee6cfc14dad96ddfb9b37ba240d14638e287f65c4c_prof);

        
        $__internal_906440861fc4faa92f40018f8b4c3326f1ac96ab4b64924173412fd11b9c861f->leave($__internal_906440861fc4faa92f40018f8b4c3326f1ac96ab4b64924173412fd11b9c861f_prof);

    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_b0a5fb8ac018dd746b5c64f7898802d1428771dd157579f8b8c5407ef16678b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a5fb8ac018dd746b5c64f7898802d1428771dd157579f8b8c5407ef16678b2->enter($__internal_b0a5fb8ac018dd746b5c64f7898802d1428771dd157579f8b8c5407ef16678b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_1836ca286c301a83d66322b2334f605d01125358464a634e0a889541d5d2219a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1836ca286c301a83d66322b2334f605d01125358464a634e0a889541d5d2219a->enter($__internal_1836ca286c301a83d66322b2334f605d01125358464a634e0a889541d5d2219a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

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
        
        $__internal_1836ca286c301a83d66322b2334f605d01125358464a634e0a889541d5d2219a->leave($__internal_1836ca286c301a83d66322b2334f605d01125358464a634e0a889541d5d2219a_prof);

        
        $__internal_b0a5fb8ac018dd746b5c64f7898802d1428771dd157579f8b8c5407ef16678b2->leave($__internal_b0a5fb8ac018dd746b5c64f7898802d1428771dd157579f8b8c5407ef16678b2_prof);

    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_46cf3e99f8a309ba0f9d7e1240b996dca62af5bf73a0fb6a458173c663f2502a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46cf3e99f8a309ba0f9d7e1240b996dca62af5bf73a0fb6a458173c663f2502a->enter($__internal_46cf3e99f8a309ba0f9d7e1240b996dca62af5bf73a0fb6a458173c663f2502a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_79a14e9fa04c844f5be0bba48698e53abd56a18769c0ae4c8fc3a013f92cd7ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a14e9fa04c844f5be0bba48698e53abd56a18769c0ae4c8fc3a013f92cd7ad->enter($__internal_79a14e9fa04c844f5be0bba48698e53abd56a18769c0ae4c8fc3a013f92cd7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

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
        
        $__internal_79a14e9fa04c844f5be0bba48698e53abd56a18769c0ae4c8fc3a013f92cd7ad->leave($__internal_79a14e9fa04c844f5be0bba48698e53abd56a18769c0ae4c8fc3a013f92cd7ad_prof);

        
        $__internal_46cf3e99f8a309ba0f9d7e1240b996dca62af5bf73a0fb6a458173c663f2502a->leave($__internal_46cf3e99f8a309ba0f9d7e1240b996dca62af5bf73a0fb6a458173c663f2502a_prof);

    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        $__internal_96f4b058166924cbb082e429f886bcf827abbbea179043942c8ff111a6ee2ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f4b058166924cbb082e429f886bcf827abbbea179043942c8ff111a6ee2ec5->enter($__internal_96f4b058166924cbb082e429f886bcf827abbbea179043942c8ff111a6ee2ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_c32253e18cf64fbd12dc5804a4bf6aa3e1af97642c4e2a41f6e3a19c8b545f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32253e18cf64fbd12dc5804a4bf6aa3e1af97642c4e2a41f6e3a19c8b545f62->enter($__internal_c32253e18cf64fbd12dc5804a4bf6aa3e1af97642c4e2a41f6e3a19c8b545f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

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
        
        $__internal_c32253e18cf64fbd12dc5804a4bf6aa3e1af97642c4e2a41f6e3a19c8b545f62->leave($__internal_c32253e18cf64fbd12dc5804a4bf6aa3e1af97642c4e2a41f6e3a19c8b545f62_prof);

        
        $__internal_96f4b058166924cbb082e429f886bcf827abbbea179043942c8ff111a6ee2ec5->leave($__internal_96f4b058166924cbb082e429f886bcf827abbbea179043942c8ff111a6ee2ec5_prof);

    }

    // line 143
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_646a9effaa780e180ad043545fc3b08ee4d4d736382f604dcadba5be87b9f852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_646a9effaa780e180ad043545fc3b08ee4d4d736382f604dcadba5be87b9f852->enter($__internal_646a9effaa780e180ad043545fc3b08ee4d4d736382f604dcadba5be87b9f852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_56bbd4560db893697a49597090246282cbe8b8424d3cf3ae74dc221b42d64cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56bbd4560db893697a49597090246282cbe8b8424d3cf3ae74dc221b42d64cf5->enter($__internal_56bbd4560db893697a49597090246282cbe8b8424d3cf3ae74dc221b42d64cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

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
        
        $__internal_56bbd4560db893697a49597090246282cbe8b8424d3cf3ae74dc221b42d64cf5->leave($__internal_56bbd4560db893697a49597090246282cbe8b8424d3cf3ae74dc221b42d64cf5_prof);

        
        $__internal_646a9effaa780e180ad043545fc3b08ee4d4d736382f604dcadba5be87b9f852->leave($__internal_646a9effaa780e180ad043545fc3b08ee4d4d736382f604dcadba5be87b9f852_prof);

    }

    // line 150
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_ee1ac0f4d464889ca4c97a47af4468904919088829e13462f4ce9390e6539c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1ac0f4d464889ca4c97a47af4468904919088829e13462f4ce9390e6539c72->enter($__internal_ee1ac0f4d464889ca4c97a47af4468904919088829e13462f4ce9390e6539c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_fde5b751cd71b3dfc48e44c914eb07730d1164acecaf2249660585b7ac1ae5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde5b751cd71b3dfc48e44c914eb07730d1164acecaf2249660585b7ac1ae5ec->enter($__internal_fde5b751cd71b3dfc48e44c914eb07730d1164acecaf2249660585b7ac1ae5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

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
        
        $__internal_fde5b751cd71b3dfc48e44c914eb07730d1164acecaf2249660585b7ac1ae5ec->leave($__internal_fde5b751cd71b3dfc48e44c914eb07730d1164acecaf2249660585b7ac1ae5ec_prof);

        
        $__internal_ee1ac0f4d464889ca4c97a47af4468904919088829e13462f4ce9390e6539c72->leave($__internal_ee1ac0f4d464889ca4c97a47af4468904919088829e13462f4ce9390e6539c72_prof);

    }

    // line 191
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_2db1f0e39075cf04b0fed1b2d40aa7b4ad3c9d3b645d56df38af186b86102b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db1f0e39075cf04b0fed1b2d40aa7b4ad3c9d3b645d56df38af186b86102b68->enter($__internal_2db1f0e39075cf04b0fed1b2d40aa7b4ad3c9d3b645d56df38af186b86102b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_75f2ef8e054147955036ffbfc8b04da3baae0b4956eb1a739589b2f336074c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f2ef8e054147955036ffbfc8b04da3baae0b4956eb1a739589b2f336074c0e->enter($__internal_75f2ef8e054147955036ffbfc8b04da3baae0b4956eb1a739589b2f336074c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

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
        
        $__internal_75f2ef8e054147955036ffbfc8b04da3baae0b4956eb1a739589b2f336074c0e->leave($__internal_75f2ef8e054147955036ffbfc8b04da3baae0b4956eb1a739589b2f336074c0e_prof);

        
        $__internal_2db1f0e39075cf04b0fed1b2d40aa7b4ad3c9d3b645d56df38af186b86102b68->leave($__internal_2db1f0e39075cf04b0fed1b2d40aa7b4ad3c9d3b645d56df38af186b86102b68_prof);

    }

    // line 195
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_bddbf6a2b85f473694236f9e1408f9c5e41381e4ec078f47388ea834babe7cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bddbf6a2b85f473694236f9e1408f9c5e41381e4ec078f47388ea834babe7cb4->enter($__internal_bddbf6a2b85f473694236f9e1408f9c5e41381e4ec078f47388ea834babe7cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_11b9897862b92ef943dffb224a4537ad1fa01140d6a393a507b8fdd5e556693d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b9897862b92ef943dffb224a4537ad1fa01140d6a393a507b8fdd5e556693d->enter($__internal_11b9897862b92ef943dffb224a4537ad1fa01140d6a393a507b8fdd5e556693d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

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
        
        $__internal_11b9897862b92ef943dffb224a4537ad1fa01140d6a393a507b8fdd5e556693d->leave($__internal_11b9897862b92ef943dffb224a4537ad1fa01140d6a393a507b8fdd5e556693d_prof);

        
        $__internal_bddbf6a2b85f473694236f9e1408f9c5e41381e4ec078f47388ea834babe7cb4->leave($__internal_bddbf6a2b85f473694236f9e1408f9c5e41381e4ec078f47388ea834babe7cb4_prof);

    }

    // line 203
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_419465a80abbb13dbe9bc87bc75b668cde927d8c840d1e46056787a84e09e109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_419465a80abbb13dbe9bc87bc75b668cde927d8c840d1e46056787a84e09e109->enter($__internal_419465a80abbb13dbe9bc87bc75b668cde927d8c840d1e46056787a84e09e109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_1a58a22a5b54c92819c783617485ced4f7f9f14b946e2c22dc55914cf9bb3eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a58a22a5b54c92819c783617485ced4f7f9f14b946e2c22dc55914cf9bb3eb1->enter($__internal_1a58a22a5b54c92819c783617485ced4f7f9f14b946e2c22dc55914cf9bb3eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

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
        
        $__internal_1a58a22a5b54c92819c783617485ced4f7f9f14b946e2c22dc55914cf9bb3eb1->leave($__internal_1a58a22a5b54c92819c783617485ced4f7f9f14b946e2c22dc55914cf9bb3eb1_prof);

        
        $__internal_419465a80abbb13dbe9bc87bc75b668cde927d8c840d1e46056787a84e09e109->leave($__internal_419465a80abbb13dbe9bc87bc75b668cde927d8c840d1e46056787a84e09e109_prof);

    }

    // line 222
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_9287f38c9015ea3b8a450a4ed47c53ac326772f3ec18610af5245063ca6f0c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9287f38c9015ea3b8a450a4ed47c53ac326772f3ec18610af5245063ca6f0c43->enter($__internal_9287f38c9015ea3b8a450a4ed47c53ac326772f3ec18610af5245063ca6f0c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_0a94b04fb394260f4379da2ebf7952cc8ff1f8ce4b656b8b5599e51045d4076c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a94b04fb394260f4379da2ebf7952cc8ff1f8ce4b656b8b5599e51045d4076c->enter($__internal_0a94b04fb394260f4379da2ebf7952cc8ff1f8ce4b656b8b5599e51045d4076c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_0a94b04fb394260f4379da2ebf7952cc8ff1f8ce4b656b8b5599e51045d4076c->leave($__internal_0a94b04fb394260f4379da2ebf7952cc8ff1f8ce4b656b8b5599e51045d4076c_prof);

        
        $__internal_9287f38c9015ea3b8a450a4ed47c53ac326772f3ec18610af5245063ca6f0c43->leave($__internal_9287f38c9015ea3b8a450a4ed47c53ac326772f3ec18610af5245063ca6f0c43_prof);

    }

    // line 223
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_da3b247567338bda3c0c9377e572f506b5dd634ac7dc4ac1c497c9a99a3c37f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3b247567338bda3c0c9377e572f506b5dd634ac7dc4ac1c497c9a99a3c37f2->enter($__internal_da3b247567338bda3c0c9377e572f506b5dd634ac7dc4ac1c497c9a99a3c37f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_c9335d9b47bd24c928ed4de15cae045386756bc78f0e3f36c3e5716d42396532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9335d9b47bd24c928ed4de15cae045386756bc78f0e3f36c3e5716d42396532->enter($__internal_c9335d9b47bd24c928ed4de15cae045386756bc78f0e3f36c3e5716d42396532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

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
        
        $__internal_c9335d9b47bd24c928ed4de15cae045386756bc78f0e3f36c3e5716d42396532->leave($__internal_c9335d9b47bd24c928ed4de15cae045386756bc78f0e3f36c3e5716d42396532_prof);

        
        $__internal_da3b247567338bda3c0c9377e572f506b5dd634ac7dc4ac1c497c9a99a3c37f2->leave($__internal_da3b247567338bda3c0c9377e572f506b5dd634ac7dc4ac1c497c9a99a3c37f2_prof);

    }

    // line 226
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_937f9c46194eff29cd532d30aa8cc2a6b0cc911b78a71a68741ecbf16aa96a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_937f9c46194eff29cd532d30aa8cc2a6b0cc911b78a71a68741ecbf16aa96a0f->enter($__internal_937f9c46194eff29cd532d30aa8cc2a6b0cc911b78a71a68741ecbf16aa96a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_e70090bf71a077c4f4d7dc1ae8cb9def456e9570aff125e4e42a41f990258e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70090bf71a077c4f4d7dc1ae8cb9def456e9570aff125e4e42a41f990258e18->enter($__internal_e70090bf71a077c4f4d7dc1ae8cb9def456e9570aff125e4e42a41f990258e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

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
        
        $__internal_e70090bf71a077c4f4d7dc1ae8cb9def456e9570aff125e4e42a41f990258e18->leave($__internal_e70090bf71a077c4f4d7dc1ae8cb9def456e9570aff125e4e42a41f990258e18_prof);

        
        $__internal_937f9c46194eff29cd532d30aa8cc2a6b0cc911b78a71a68741ecbf16aa96a0f->leave($__internal_937f9c46194eff29cd532d30aa8cc2a6b0cc911b78a71a68741ecbf16aa96a0f_prof);

    }

    // line 227
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_f9bc55f786a0a670b5e9e3748f36ee7de5a832e1eb8dcfd9c0ee42b65cc139dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9bc55f786a0a670b5e9e3748f36ee7de5a832e1eb8dcfd9c0ee42b65cc139dc->enter($__internal_f9bc55f786a0a670b5e9e3748f36ee7de5a832e1eb8dcfd9c0ee42b65cc139dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_95ed29562f04d6e4d0109d421b5d100b69413ac049243bf2c57e8b28cb2fed08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ed29562f04d6e4d0109d421b5d100b69413ac049243bf2c57e8b28cb2fed08->enter($__internal_95ed29562f04d6e4d0109d421b5d100b69413ac049243bf2c57e8b28cb2fed08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

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
        
        $__internal_95ed29562f04d6e4d0109d421b5d100b69413ac049243bf2c57e8b28cb2fed08->leave($__internal_95ed29562f04d6e4d0109d421b5d100b69413ac049243bf2c57e8b28cb2fed08_prof);

        
        $__internal_f9bc55f786a0a670b5e9e3748f36ee7de5a832e1eb8dcfd9c0ee42b65cc139dc->leave($__internal_f9bc55f786a0a670b5e9e3748f36ee7de5a832e1eb8dcfd9c0ee42b65cc139dc_prof);

    }

    // line 240
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_7ea1cfacb5761b52f7ae9d79c252a97d8da3b9658637827562d9dfcef4a0fec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea1cfacb5761b52f7ae9d79c252a97d8da3b9658637827562d9dfcef4a0fec0->enter($__internal_7ea1cfacb5761b52f7ae9d79c252a97d8da3b9658637827562d9dfcef4a0fec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_3552227eedb2281cb0485b93641adaa9f34d1e64ed8a774ef8b5f12962e498ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3552227eedb2281cb0485b93641adaa9f34d1e64ed8a774ef8b5f12962e498ca->enter($__internal_3552227eedb2281cb0485b93641adaa9f34d1e64ed8a774ef8b5f12962e498ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_3552227eedb2281cb0485b93641adaa9f34d1e64ed8a774ef8b5f12962e498ca->leave($__internal_3552227eedb2281cb0485b93641adaa9f34d1e64ed8a774ef8b5f12962e498ca_prof);

        
        $__internal_7ea1cfacb5761b52f7ae9d79c252a97d8da3b9658637827562d9dfcef4a0fec0->leave($__internal_7ea1cfacb5761b52f7ae9d79c252a97d8da3b9658637827562d9dfcef4a0fec0_prof);

    }

    // line 241
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_da179ee687d0e03c786f993df729f4cd3b82630f26bc82b439ac2a55449d5477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da179ee687d0e03c786f993df729f4cd3b82630f26bc82b439ac2a55449d5477->enter($__internal_da179ee687d0e03c786f993df729f4cd3b82630f26bc82b439ac2a55449d5477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_4406eadbf09860eaa7091101a58c112a37c3fb157c01d1599456e62326097bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4406eadbf09860eaa7091101a58c112a37c3fb157c01d1599456e62326097bf7->enter($__internal_4406eadbf09860eaa7091101a58c112a37c3fb157c01d1599456e62326097bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 242
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_4406eadbf09860eaa7091101a58c112a37c3fb157c01d1599456e62326097bf7->leave($__internal_4406eadbf09860eaa7091101a58c112a37c3fb157c01d1599456e62326097bf7_prof);

        
        $__internal_da179ee687d0e03c786f993df729f4cd3b82630f26bc82b439ac2a55449d5477->leave($__internal_da179ee687d0e03c786f993df729f4cd3b82630f26bc82b439ac2a55449d5477_prof);

    }

    // line 244
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_591354335188bb4452669a6e1b7cb9e7cceba73a0181f3806e14c2dc5c51de9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_591354335188bb4452669a6e1b7cb9e7cceba73a0181f3806e14c2dc5c51de9d->enter($__internal_591354335188bb4452669a6e1b7cb9e7cceba73a0181f3806e14c2dc5c51de9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_fbfef04ecc73c35929928f6e34bc796be6a1875edd868a1159efb370fd58d6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbfef04ecc73c35929928f6e34bc796be6a1875edd868a1159efb370fd58d6a3->enter($__internal_fbfef04ecc73c35929928f6e34bc796be6a1875edd868a1159efb370fd58d6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 245
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 246
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 249
        echo "                                </p>
                            ";
        
        $__internal_fbfef04ecc73c35929928f6e34bc796be6a1875edd868a1159efb370fd58d6a3->leave($__internal_fbfef04ecc73c35929928f6e34bc796be6a1875edd868a1159efb370fd58d6a3_prof);

        
        $__internal_591354335188bb4452669a6e1b7cb9e7cceba73a0181f3806e14c2dc5c51de9d->leave($__internal_591354335188bb4452669a6e1b7cb9e7cceba73a0181f3806e14c2dc5c51de9d_prof);

    }

    // line 246
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_c5d51feb90093c004e7d917bef3af662c98992bc87c906c82e601fa077146d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d51feb90093c004e7d917bef3af662c98992bc87c906c82e601fa077146d37->enter($__internal_c5d51feb90093c004e7d917bef3af662c98992bc87c906c82e601fa077146d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_bca7ba58ad5eb9630672fdf9765963c6a9ad2cbf37b135e1abfa09ac31e4105d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca7ba58ad5eb9630672fdf9765963c6a9ad2cbf37b135e1abfa09ac31e4105d->enter($__internal_bca7ba58ad5eb9630672fdf9765963c6a9ad2cbf37b135e1abfa09ac31e4105d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 247
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_bca7ba58ad5eb9630672fdf9765963c6a9ad2cbf37b135e1abfa09ac31e4105d->leave($__internal_bca7ba58ad5eb9630672fdf9765963c6a9ad2cbf37b135e1abfa09ac31e4105d_prof);

        
        $__internal_c5d51feb90093c004e7d917bef3af662c98992bc87c906c82e601fa077146d37->leave($__internal_c5d51feb90093c004e7d917bef3af662c98992bc87c906c82e601fa077146d37_prof);

    }

    // line 257
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_684045522216adaeb88e0a1e46a8c31b735195a6c2cd219bf8e774e91c2cb5b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684045522216adaeb88e0a1e46a8c31b735195a6c2cd219bf8e774e91c2cb5b8->enter($__internal_684045522216adaeb88e0a1e46a8c31b735195a6c2cd219bf8e774e91c2cb5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_d325a8708db338d0fa1b02f583835bd10bc587c2debd909eaeffabfd28131e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d325a8708db338d0fa1b02f583835bd10bc587c2debd909eaeffabfd28131e2c->enter($__internal_d325a8708db338d0fa1b02f583835bd10bc587c2debd909eaeffabfd28131e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

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
        
        $__internal_d325a8708db338d0fa1b02f583835bd10bc587c2debd909eaeffabfd28131e2c->leave($__internal_d325a8708db338d0fa1b02f583835bd10bc587c2debd909eaeffabfd28131e2c_prof);

        
        $__internal_684045522216adaeb88e0a1e46a8c31b735195a6c2cd219bf8e774e91c2cb5b8->leave($__internal_684045522216adaeb88e0a1e46a8c31b735195a6c2cd219bf8e774e91c2cb5b8_prof);

    }

    // line 260
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_16fc4ce5eb346ef5f48e235a72c809b123f0f08c33683de5cd38c2d0cffc9833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16fc4ce5eb346ef5f48e235a72c809b123f0f08c33683de5cd38c2d0cffc9833->enter($__internal_16fc4ce5eb346ef5f48e235a72c809b123f0f08c33683de5cd38c2d0cffc9833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_2073d97c4b48a14e2a538ed29a7d09a5cdd8d8583c399a2cb05c42b5cbb60c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2073d97c4b48a14e2a538ed29a7d09a5cdd8d8583c399a2cb05c42b5cbb60c48->enter($__internal_2073d97c4b48a14e2a538ed29a7d09a5cdd8d8583c399a2cb05c42b5cbb60c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 261
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 313
        echo "                        ";
        
        $__internal_2073d97c4b48a14e2a538ed29a7d09a5cdd8d8583c399a2cb05c42b5cbb60c48->leave($__internal_2073d97c4b48a14e2a538ed29a7d09a5cdd8d8583c399a2cb05c42b5cbb60c48_prof);

        
        $__internal_16fc4ce5eb346ef5f48e235a72c809b123f0f08c33683de5cd38c2d0cffc9833->leave($__internal_16fc4ce5eb346ef5f48e235a72c809b123f0f08c33683de5cd38c2d0cffc9833_prof);

    }

    // line 261
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_8e1c4da4e7c6816e63491c6e3cced8d196f75a0ddf7316c31906f98103ff7e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1c4da4e7c6816e63491c6e3cced8d196f75a0ddf7316c31906f98103ff7e3d->enter($__internal_8e1c4da4e7c6816e63491c6e3cced8d196f75a0ddf7316c31906f98103ff7e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_cbcb9b259de394838a2c44dca81dab12fd4d3af1d4653fd211e1828fb620b5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbcb9b259de394838a2c44dca81dab12fd4d3af1d4653fd211e1828fb620b5a0->enter($__internal_cbcb9b259de394838a2c44dca81dab12fd4d3af1d4653fd211e1828fb620b5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

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
        
        $__internal_cbcb9b259de394838a2c44dca81dab12fd4d3af1d4653fd211e1828fb620b5a0->leave($__internal_cbcb9b259de394838a2c44dca81dab12fd4d3af1d4653fd211e1828fb620b5a0_prof);

        
        $__internal_8e1c4da4e7c6816e63491c6e3cced8d196f75a0ddf7316c31906f98103ff7e3d->leave($__internal_8e1c4da4e7c6816e63491c6e3cced8d196f75a0ddf7316c31906f98103ff7e3d_prof);

    }

    // line 265
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_680d927239f5a9b83140cae2afe0ace0a210f7d5d1bf43dc502acba7eb070317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_680d927239f5a9b83140cae2afe0ace0a210f7d5d1bf43dc502acba7eb070317->enter($__internal_680d927239f5a9b83140cae2afe0ace0a210f7d5d1bf43dc502acba7eb070317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_82de509a2d75b528bf12e42dceb9955a981bccf84bf5c2e390b5a0cb97152b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82de509a2d75b528bf12e42dceb9955a981bccf84bf5c2e390b5a0cb97152b11->enter($__internal_82de509a2d75b528bf12e42dceb9955a981bccf84bf5c2e390b5a0cb97152b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

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
        
        $__internal_82de509a2d75b528bf12e42dceb9955a981bccf84bf5c2e390b5a0cb97152b11->leave($__internal_82de509a2d75b528bf12e42dceb9955a981bccf84bf5c2e390b5a0cb97152b11_prof);

        
        $__internal_680d927239f5a9b83140cae2afe0ace0a210f7d5d1bf43dc502acba7eb070317->leave($__internal_680d927239f5a9b83140cae2afe0ace0a210f7d5d1bf43dc502acba7eb070317_prof);

    }

    // line 288
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_b870698878268b97730903db9d64e33a043cf9979ca2c326e19ef07d78e40ef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b870698878268b97730903db9d64e33a043cf9979ca2c326e19ef07d78e40ef6->enter($__internal_b870698878268b97730903db9d64e33a043cf9979ca2c326e19ef07d78e40ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_b200d203368b82926e08b6ec160097f1d97208fb38bda71fd39f8e66742c11b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b200d203368b82926e08b6ec160097f1d97208fb38bda71fd39f8e66742c11b7->enter($__internal_b200d203368b82926e08b6ec160097f1d97208fb38bda71fd39f8e66742c11b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

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
        
        $__internal_b200d203368b82926e08b6ec160097f1d97208fb38bda71fd39f8e66742c11b7->leave($__internal_b200d203368b82926e08b6ec160097f1d97208fb38bda71fd39f8e66742c11b7_prof);

        
        $__internal_b870698878268b97730903db9d64e33a043cf9979ca2c326e19ef07d78e40ef6->leave($__internal_b870698878268b97730903db9d64e33a043cf9979ca2c326e19ef07d78e40ef6_prof);

    }

    // line 317
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_90d59d7916f1fcdb1e345d4ee8f6a2e4d08a1070fa54785f9cae5da5fac8d85e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d59d7916f1fcdb1e345d4ee8f6a2e4d08a1070fa54785f9cae5da5fac8d85e->enter($__internal_90d59d7916f1fcdb1e345d4ee8f6a2e4d08a1070fa54785f9cae5da5fac8d85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_815a0cb2655297c4c57ea7825d4570435ab6cd0828a6242f6af64aa33621450c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815a0cb2655297c4c57ea7825d4570435ab6cd0828a6242f6af64aa33621450c->enter($__internal_815a0cb2655297c4c57ea7825d4570435ab6cd0828a6242f6af64aa33621450c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

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
        
        $__internal_815a0cb2655297c4c57ea7825d4570435ab6cd0828a6242f6af64aa33621450c->leave($__internal_815a0cb2655297c4c57ea7825d4570435ab6cd0828a6242f6af64aa33621450c_prof);

        
        $__internal_90d59d7916f1fcdb1e345d4ee8f6a2e4d08a1070fa54785f9cae5da5fac8d85e->leave($__internal_90d59d7916f1fcdb1e345d4ee8f6a2e4d08a1070fa54785f9cae5da5fac8d85e_prof);

    }

    // line 319
    public function block_notice($context, array $blocks = array())
    {
        $__internal_b47a8618995aee8c12448b7ac25304c222442af1f87cec085595d433eee69d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47a8618995aee8c12448b7ac25304c222442af1f87cec085595d433eee69d3d->enter($__internal_b47a8618995aee8c12448b7ac25304c222442af1f87cec085595d433eee69d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_085ca0e2d346e0f8e13581242dae635f1c26d92371d8271111964b0df14bc209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085ca0e2d346e0f8e13581242dae635f1c26d92371d8271111964b0df14bc209->enter($__internal_085ca0e2d346e0f8e13581242dae635f1c26d92371d8271111964b0df14bc209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 320
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 320)->display($context);
        // line 321
        echo "                            ";
        
        $__internal_085ca0e2d346e0f8e13581242dae635f1c26d92371d8271111964b0df14bc209->leave($__internal_085ca0e2d346e0f8e13581242dae635f1c26d92371d8271111964b0df14bc209_prof);

        
        $__internal_b47a8618995aee8c12448b7ac25304c222442af1f87cec085595d433eee69d3d->leave($__internal_b47a8618995aee8c12448b7ac25304c222442af1f87cec085595d433eee69d3d_prof);

    }

    // line 358
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_b49c8d73ebfdd556be09144bca9605efe5bb27bd9ee9ed210068897c1f879d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49c8d73ebfdd556be09144bca9605efe5bb27bd9ee9ed210068897c1f879d07->enter($__internal_b49c8d73ebfdd556be09144bca9605efe5bb27bd9ee9ed210068897c1f879d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_f204f85e107cf906761a14618e576116e0029175cf82d27b25694b4f52a281dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f204f85e107cf906761a14618e576116e0029175cf82d27b25694b4f52a281dc->enter($__internal_f204f85e107cf906761a14618e576116e0029175cf82d27b25694b4f52a281dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 359
        echo "            ";
        // line 360
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_f204f85e107cf906761a14618e576116e0029175cf82d27b25694b4f52a281dc->leave($__internal_f204f85e107cf906761a14618e576116e0029175cf82d27b25694b4f52a281dc_prof);

        
        $__internal_b49c8d73ebfdd556be09144bca9605efe5bb27bd9ee9ed210068897c1f879d07->leave($__internal_b49c8d73ebfdd556be09144bca9605efe5bb27bd9ee9ed210068897c1f879d07_prof);

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
", "SonataAdminBundle::standard_layout.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
