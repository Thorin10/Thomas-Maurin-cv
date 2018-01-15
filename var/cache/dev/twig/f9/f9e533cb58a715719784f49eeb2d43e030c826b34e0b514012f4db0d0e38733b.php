<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_7960bf3b1282e2856d03cfdd3d64f69c0344fa72cb5124da11c89bb3508689e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'no_result_content' => array($this, 'block_no_result_content'),
            'list_footer' => array($this, 'block_list_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
            'sonata_list_filter_group_class' => array($this, 'block_sonata_list_filter_group_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46e79b616dccb77889ab9e434aa9d76c5c09f4f4cceadbb47e2893ee6d5759a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e79b616dccb77889ab9e434aa9d76c5c09f4f4cceadbb47e2893ee6d5759a3->enter($__internal_46e79b616dccb77889ab9e434aa9d76c5c09f4f4cceadbb47e2893ee6d5759a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $__internal_7fcdd2dc4324c0a62361022a606fab272dfb31dc6d9cea025c1d3ed11d353c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fcdd2dc4324c0a62361022a606fab272dfb31dc6d9cea025c1d3ed11d353c46->enter($__internal_7fcdd2dc4324c0a62361022a606fab272dfb31dc6d9cea025c1d3ed11d353c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46e79b616dccb77889ab9e434aa9d76c5c09f4f4cceadbb47e2893ee6d5759a3->leave($__internal_46e79b616dccb77889ab9e434aa9d76c5c09f4f4cceadbb47e2893ee6d5759a3_prof);

        
        $__internal_7fcdd2dc4324c0a62361022a606fab272dfb31dc6d9cea025c1d3ed11d353c46->leave($__internal_7fcdd2dc4324c0a62361022a606fab272dfb31dc6d9cea025c1d3ed11d353c46_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_68cd0d43094ce9bf6a690c2b0bfb4df09af6ef3babb0cc207b168c7cf64dbcf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68cd0d43094ce9bf6a690c2b0bfb4df09af6ef3babb0cc207b168c7cf64dbcf7->enter($__internal_68cd0d43094ce9bf6a690c2b0bfb4df09af6ef3babb0cc207b168c7cf64dbcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_5cbfbfef6466846722cf38d7316e752014b55e71b3dd60ff5b8633cdb7890bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cbfbfef6466846722cf38d7316e752014b55e71b3dd60ff5b8633cdb7890bf2->enter($__internal_5cbfbfef6466846722cf38d7316e752014b55e71b3dd60ff5b8633cdb7890bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 15)->display($context);
        
        $__internal_5cbfbfef6466846722cf38d7316e752014b55e71b3dd60ff5b8633cdb7890bf2->leave($__internal_5cbfbfef6466846722cf38d7316e752014b55e71b3dd60ff5b8633cdb7890bf2_prof);

        
        $__internal_68cd0d43094ce9bf6a690c2b0bfb4df09af6ef3babb0cc207b168c7cf64dbcf7->leave($__internal_68cd0d43094ce9bf6a690c2b0bfb4df09af6ef3babb0cc207b168c7cf64dbcf7_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_8461e13ef1a92ba0150aae705d4de65cd48ed8a6441a0669f72f29bfc19cf249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8461e13ef1a92ba0150aae705d4de65cd48ed8a6441a0669f72f29bfc19cf249->enter($__internal_8461e13ef1a92ba0150aae705d4de65cd48ed8a6441a0669f72f29bfc19cf249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_d266e20453c7faa404b0a743de9ed3266d8e64db9f6e55fc2fe3804fcacbc929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d266e20453c7faa404b0a743de9ed3266d8e64db9f6e55fc2fe3804fcacbc929->enter($__internal_d266e20453c7faa404b0a743de9ed3266d8e64db9f6e55fc2fe3804fcacbc929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_d266e20453c7faa404b0a743de9ed3266d8e64db9f6e55fc2fe3804fcacbc929->leave($__internal_d266e20453c7faa404b0a743de9ed3266d8e64db9f6e55fc2fe3804fcacbc929_prof);

        
        $__internal_8461e13ef1a92ba0150aae705d4de65cd48ed8a6441a0669f72f29bfc19cf249->leave($__internal_8461e13ef1a92ba0150aae705d4de65cd48ed8a6441a0669f72f29bfc19cf249_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_945dcb5a4c20cbb2809392c749c40f930d22f60d82f5d5857c53eeb082c5799d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945dcb5a4c20cbb2809392c749c40f930d22f60d82f5d5857c53eeb082c5799d->enter($__internal_945dcb5a4c20cbb2809392c749c40f930d22f60d82f5d5857c53eeb082c5799d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_23c1ac721636429795e3bb8e7043967f5ded0e083128d52a825aced8a29e2e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c1ac721636429795e3bb8e7043967f5ded0e083128d52a825aced8a29e2e18->enter($__internal_23c1ac721636429795e3bb8e7043967f5ded0e083128d52a825aced8a29e2e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 21
        echo "    ";
        // line 25
        echo "
    ";
        // line 26
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isChild", array()) && $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "parent", array()), "subject", array()))) {
            // line 27
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "parent", array()), "toString", array(0 => $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "parent", array()), "subject", array())), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_23c1ac721636429795e3bb8e7043967f5ded0e083128d52a825aced8a29e2e18->leave($__internal_23c1ac721636429795e3bb8e7043967f5ded0e083128d52a825aced8a29e2e18_prof);

        
        $__internal_945dcb5a4c20cbb2809392c749c40f930d22f60d82f5d5857c53eeb082c5799d->leave($__internal_945dcb5a4c20cbb2809392c749c40f930d22f60d82f5d5857c53eeb082c5799d_prof);

    }

    // line 31
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_d1854ec04109625544ed7d6a3e4fc4931f540c4efba407b1da63967cbe173c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1854ec04109625544ed7d6a3e4fc4931f540c4efba407b1da63967cbe173c7c->enter($__internal_d1854ec04109625544ed7d6a3e4fc4931f540c4efba407b1da63967cbe173c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_50d5a38c6427a5d1d4df562e81ca2eab57b398623b1b6bfe43470745caaeb034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d5a38c6427a5d1d4df562e81ca2eab57b398623b1b6bfe43470745caaeb034->enter($__internal_50d5a38c6427a5d1d4df562e81ca2eab57b398623b1b6bfe43470745caaeb034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 32
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_50d5a38c6427a5d1d4df562e81ca2eab57b398623b1b6bfe43470745caaeb034->leave($__internal_50d5a38c6427a5d1d4df562e81ca2eab57b398623b1b6bfe43470745caaeb034_prof);

        
        $__internal_d1854ec04109625544ed7d6a3e4fc4931f540c4efba407b1da63967cbe173c7c->leave($__internal_d1854ec04109625544ed7d6a3e4fc4931f540c4efba407b1da63967cbe173c7c_prof);

    }

    // line 35
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_e3374700292a8e17999eedd5ad5c962f19eef52b3b3aca92580dd1011d5902ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3374700292a8e17999eedd5ad5c962f19eef52b3b3aca92580dd1011d5902ae->enter($__internal_e3374700292a8e17999eedd5ad5c962f19eef52b3b3aca92580dd1011d5902ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        $__internal_b4b03b016c4d10662f248049261a625a69d62b33c33b990111d3cba441e47950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b03b016c4d10662f248049261a625a69d62b33c33b990111d3cba441e47950->enter($__internal_b4b03b016c4d10662f248049261a625a69d62b33c33b990111d3cba441e47950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 36
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 37
        $context["batchactions"] = $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "batchactions", array());
        // line 38
        echo "        ";
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))))) {
            // line 39
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\">
        ";
        }
        // line 42
        echo "
        ";
        // line 44
        echo "        <div class=\"box box-primary\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) == 1)) {
            echo "style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body ";
        // line 45
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 46
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")))));
        echo "

                ";
        // line 48
        $this->displayBlock('list_header', $context, $blocks);
        // line 49
        echo "
                ";
        // line 50
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 51
            echo "                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        ";
            // line 52
            $this->displayBlock('table_header', $context, $blocks);
            // line 91
            echo "
                        ";
            // line 92
            $this->displayBlock('table_body', $context, $blocks);
            // line 97
            echo "
                        ";
            // line 98
            $this->displayBlock('table_footer', $context, $blocks);
            // line 100
            echo "                    </table>
                ";
        } else {
            // line 102
            echo "                    ";
            $this->displayBlock('no_result_content', $context, $blocks);
            // line 120
            echo "                ";
        }
        // line 121
        echo "
                ";
        // line 122
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")))));
        echo "
            </div>
            ";
        // line 124
        $this->displayBlock('list_footer', $context, $blocks);
        // line 224
        echo "        </div>
        ";
        // line 225
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))))) {
            // line 226
            echo "            </form>
        ";
        }
        // line 228
        echo "    </div>
";
        
        $__internal_b4b03b016c4d10662f248049261a625a69d62b33c33b990111d3cba441e47950->leave($__internal_b4b03b016c4d10662f248049261a625a69d62b33c33b990111d3cba441e47950_prof);

        
        $__internal_e3374700292a8e17999eedd5ad5c962f19eef52b3b3aca92580dd1011d5902ae->leave($__internal_e3374700292a8e17999eedd5ad5c962f19eef52b3b3aca92580dd1011d5902ae_prof);

    }

    // line 48
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_19c1b5800f4b90f37cd030163379c97ca9822ef5f781226e7de9a7420a9cca45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c1b5800f4b90f37cd030163379c97ca9822ef5f781226e7de9a7420a9cca45->enter($__internal_19c1b5800f4b90f37cd030163379c97ca9822ef5f781226e7de9a7420a9cca45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        $__internal_3ad92afeb3b685e9025c5ebde28e3073084a5f43b982854411f3813a33fbcb88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad92afeb3b685e9025c5ebde28e3073084a5f43b982854411f3813a33fbcb88->enter($__internal_3ad92afeb3b685e9025c5ebde28e3073084a5f43b982854411f3813a33fbcb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_3ad92afeb3b685e9025c5ebde28e3073084a5f43b982854411f3813a33fbcb88->leave($__internal_3ad92afeb3b685e9025c5ebde28e3073084a5f43b982854411f3813a33fbcb88_prof);

        
        $__internal_19c1b5800f4b90f37cd030163379c97ca9822ef5f781226e7de9a7420a9cca45->leave($__internal_19c1b5800f4b90f37cd030163379c97ca9822ef5f781226e7de9a7420a9cca45_prof);

    }

    // line 52
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_5d0691601e0c273a52c12fc5acc3250f3120794a71c63fc7ca3a11edb405fcea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d0691601e0c273a52c12fc5acc3250f3120794a71c63fc7ca3a11edb405fcea->enter($__internal_5d0691601e0c273a52c12fc5acc3250f3120794a71c63fc7ca3a11edb405fcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        $__internal_86249aaac056fdb025b90c664c43919de0527d672b183c23b1d3be906fbe45a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86249aaac056fdb025b90c664c43919de0527d672b183c23b1d3be906fbe45a5->enter($__internal_86249aaac056fdb025b90c664c43919de0527d672b183c23b1d3be906fbe45a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 53
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 56
            echo "                                        ";
            if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))) > 0))) {
                // line 57
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute(            // line 60
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 61
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute(            // line 62
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 63
                echo "                                            ";
                // line 64
                echo "                                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 65
                echo "                                            ";
                // line 66
                echo "                                        ";
            } else {
                // line 67
                echo "                                            ";
                $context["sortable"] = false;
                // line 68
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 69
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 70
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 71
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute(($context["sort_parameters"] ?? $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 72
                    echo "                                                ";
                    $context["sort_active_class"] = ((($context["current"] ?? $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 73
                    echo "                                                ";
                    $context["sort_by"] = ((($context["current"] ?? $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 74
                    echo "                                            ";
                }
                // line 75
                echo "
                                            ";
                // line 76
                ob_start();
                // line 77
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if (($context["sortable"] ?? $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["sort_by"] ?? $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["sort_active_class"] ?? $this->getContext($context, "sort_active_class")), "html", null, true);
                }
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_class", array()), "html", null, true);
                }
                echo "\"";
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_style", array(), "any", true, true)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_style", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 78
                if (($context["sortable"] ?? $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => ($context["sort_parameters"] ?? $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 79
                echo "                                                    ";
                if ($this->getAttribute($context["field_description"], "getOption", array(0 => "label_icon"), "method")) {
                    // line 80
                    echo "                                                        <i class=\"sonata-ba-list-field-header-label-icon ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "getOption", array(0 => "label_icon"), "method"), "html", null, true);
                    echo "\" aria-hidden=\"true\"></i>
                                                    ";
                }
                // line 82
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["field_description"], "label", array()), array(), $this->getAttribute($context["field_description"], "translationDomain", array())), "html", null, true);
                echo "
                                                    ";
                // line 83
                if (($context["sortable"] ?? $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 84
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 86
                echo "                                        ";
            }
            // line 87
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                </tr>
                            </thead>
                        ";
        
        $__internal_86249aaac056fdb025b90c664c43919de0527d672b183c23b1d3be906fbe45a5->leave($__internal_86249aaac056fdb025b90c664c43919de0527d672b183c23b1d3be906fbe45a5_prof);

        
        $__internal_5d0691601e0c273a52c12fc5acc3250f3120794a71c63fc7ca3a11edb405fcea->leave($__internal_5d0691601e0c273a52c12fc5acc3250f3120794a71c63fc7ca3a11edb405fcea_prof);

    }

    // line 92
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_71c5de64a7422943b6dd98af1554d9d0ed65da3e78fed642d0b292f76f261e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c5de64a7422943b6dd98af1554d9d0ed65da3e78fed642d0b292f76f261e4c->enter($__internal_71c5de64a7422943b6dd98af1554d9d0ed65da3e78fed642d0b292f76f261e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_3540b0b21361b7654f59da39e84c185851766f203fbb6a58ed3c64962e6407f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3540b0b21361b7654f59da39e84c185851766f203fbb6a58ed3c64962e6407f9->enter($__internal_3540b0b21361b7654f59da39e84c185851766f203fbb6a58ed3c64962e6407f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 93
        echo "                            <tbody>
                                ";
        // line 94
        $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => ("outer_list_rows_" . $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method"))), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 94)->display($context);
        // line 95
        echo "                            </tbody>
                        ";
        
        $__internal_3540b0b21361b7654f59da39e84c185851766f203fbb6a58ed3c64962e6407f9->leave($__internal_3540b0b21361b7654f59da39e84c185851766f203fbb6a58ed3c64962e6407f9_prof);

        
        $__internal_71c5de64a7422943b6dd98af1554d9d0ed65da3e78fed642d0b292f76f261e4c->leave($__internal_71c5de64a7422943b6dd98af1554d9d0ed65da3e78fed642d0b292f76f261e4c_prof);

    }

    // line 98
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_c8e3d6ae56363092d6cd36ee63477e30a2ae07af01069a426a24c3cae5878ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e3d6ae56363092d6cd36ee63477e30a2ae07af01069a426a24c3cae5878ecc->enter($__internal_c8e3d6ae56363092d6cd36ee63477e30a2ae07af01069a426a24c3cae5878ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        $__internal_9d4a61babf7bcebc3832517af910ceacbb575db1ade7526e5818f6e60a3750c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4a61babf7bcebc3832517af910ceacbb575db1ade7526e5818f6e60a3750c1->enter($__internal_9d4a61babf7bcebc3832517af910ceacbb575db1ade7526e5818f6e60a3750c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 99
        echo "                        ";
        
        $__internal_9d4a61babf7bcebc3832517af910ceacbb575db1ade7526e5818f6e60a3750c1->leave($__internal_9d4a61babf7bcebc3832517af910ceacbb575db1ade7526e5818f6e60a3750c1_prof);

        
        $__internal_c8e3d6ae56363092d6cd36ee63477e30a2ae07af01069a426a24c3cae5878ecc->leave($__internal_c8e3d6ae56363092d6cd36ee63477e30a2ae07af01069a426a24c3cae5878ecc_prof);

    }

    // line 102
    public function block_no_result_content($context, array $blocks = array())
    {
        $__internal_60765e2f0829471ffcf9b0b58751fe7d27f81752e079a86e967eb112b595af37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60765e2f0829471ffcf9b0b58751fe7d27f81752e079a86e967eb112b595af37->enter($__internal_60765e2f0829471ffcf9b0b58751fe7d27f81752e079a86e967eb112b595af37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        $__internal_56ef4af6f47669e4c426e50dcd2e2e8b7828665fb90d77e04500ff5f6f9f9c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ef4af6f47669e4c426e50dcd2e2e8b7828665fb90d77e04500ff5f6f9f9c59->enter($__internal_56ef4af6f47669e4c426e50dcd2e2e8b7828665fb90d77e04500ff5f6f9f9c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        // line 103
        echo "                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
        echo "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    ";
        // line 111
        if ( !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "xmlHttpRequest", array())) {
            // line 112
            echo "                                    <ul class=\"list-unstyled\">
                                        ";
            // line 113
            $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 113)->display($context);
            // line 114
            echo "                                    </ul>
                                    ";
        }
        // line 116
        echo "                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    ";
        
        $__internal_56ef4af6f47669e4c426e50dcd2e2e8b7828665fb90d77e04500ff5f6f9f9c59->leave($__internal_56ef4af6f47669e4c426e50dcd2e2e8b7828665fb90d77e04500ff5f6f9f9c59_prof);

        
        $__internal_60765e2f0829471ffcf9b0b58751fe7d27f81752e079a86e967eb112b595af37->leave($__internal_60765e2f0829471ffcf9b0b58751fe7d27f81752e079a86e967eb112b595af37_prof);

    }

    // line 124
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_1591e8d57420bc58e22cf5720b712fd36f0f4e7f96c7bfa9785a960fd6de26e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1591e8d57420bc58e22cf5720b712fd36f0f4e7f96c7bfa9785a960fd6de26e9->enter($__internal_1591e8d57420bc58e22cf5720b712fd36f0f4e7f96c7bfa9785a960fd6de26e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        $__internal_e0440c361563d8f245671f4a033e74a816e763854c43ee731e82a96e3b66b5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0440c361563d8f245671f4a033e74a816e763854c43ee731e82a96e3b66b5e2->enter($__internal_e0440c361563d8f245671f4a033e74a816e763854c43ee731e82a96e3b66b5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        // line 125
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 126
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 128
            if ( !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) {
                // line 129
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 130
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))) > 0))) {
                    // line 131
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 178
                    echo "                                    ";
                }
                // line 179
                echo "                                </div>


                                ";
                // line 183
                echo "                                ";
                $context["export_formats"] = ((array_key_exists("export_formats", $context)) ? (_twig_default_filter(($context["export_formats"] ?? $this->getContext($context, "export_formats")), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "exportFormats", array()))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "exportFormats", array())));
                // line 184
                echo "
                                <div class=\"pull-right\">
                                    ";
                // line 186
                if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "export"), "method")) && twig_length_filter($this->env, ($context["export_formats"] ?? $this->getContext($context, "export_formats"))))) {
                    // line 187
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                ";
                    // line 190
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 194
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["export_formats"] ?? $this->getContext($context, "export_formats")));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 195
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 196
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        ";
                        // line 198
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("export_format_" . $context["format"]), array(), "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                <li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 202
                    echo "                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    ";
                }
                // line 207
                echo "
                                    ";
                // line 208
                $this->displayBlock('pager_results', $context, $blocks);
                // line 211
                echo "                                </div>
                            ";
            }
            // line 213
            echo "                        </div>

                        ";
            // line 215
            $this->displayBlock('pager_links', $context, $blocks);
            // line 221
            echo "                    </div>
                ";
        }
        // line 223
        echo "            ";
        
        $__internal_e0440c361563d8f245671f4a033e74a816e763854c43ee731e82a96e3b66b5e2->leave($__internal_e0440c361563d8f245671f4a033e74a816e763854c43ee731e82a96e3b66b5e2_prof);

        
        $__internal_1591e8d57420bc58e22cf5720b712fd36f0f4e7f96c7bfa9785a960fd6de26e9->leave($__internal_1591e8d57420bc58e22cf5720b712fd36f0f4e7f96c7bfa9785a960fd6de26e9_prof);

    }

    // line 131
    public function block_batch($context, array $blocks = array())
    {
        $__internal_51903a6efa7ddeb5e76865235c0306bfd0d920012d4a8d6a0255d661d3507f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51903a6efa7ddeb5e76865235c0306bfd0d920012d4a8d6a0255d661d3507f2b->enter($__internal_51903a6efa7ddeb5e76865235c0306bfd0d920012d4a8d6a0255d661d3507f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        $__internal_e949fd29865d23940221b51f3bc8c9ed90f38445a570d32ddc5d0a5bbe5c6ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e949fd29865d23940221b51f3bc8c9ed90f38445a570d32ddc5d0a5bbe5c6ea1->enter($__internal_e949fd29865d23940221b51f3bc8c9ed90f38445a570d32ddc5d0a5bbe5c6ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        // line 132
        echo "                                            <script>
                                                ";
        // line 133
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 160
        echo "                                            </script>

                                        ";
        // line 162
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 175
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_e949fd29865d23940221b51f3bc8c9ed90f38445a570d32ddc5d0a5bbe5c6ea1->leave($__internal_e949fd29865d23940221b51f3bc8c9ed90f38445a570d32ddc5d0a5bbe5c6ea1_prof);

        
        $__internal_51903a6efa7ddeb5e76865235c0306bfd0d920012d4a8d6a0255d661d3507f2b->leave($__internal_51903a6efa7ddeb5e76865235c0306bfd0d920012d4a8d6a0255d661d3507f2b_prof);

    }

    // line 133
    public function block_batch_javascript($context, array $blocks = array())
    {
        $__internal_eed28ceb8dd9060ae8d80f8e5801d722d69f51aa58d7780da1adbb5bc940e043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed28ceb8dd9060ae8d80f8e5801d722d69f51aa58d7780da1adbb5bc940e043->enter($__internal_eed28ceb8dd9060ae8d80f8e5801d722d69f51aa58d7780da1adbb5bc940e043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        $__internal_a9f782405e39c0d3cb284c58d8205bfb297f6d2f902de9b725904fe3c272eb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f782405e39c0d3cb284c58d8205bfb297f6d2f902de9b725904fe3c272eb51->enter($__internal_a9f782405e39c0d3cb284c58d8205bfb297f6d2f902de9b725904fe3c272eb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 134
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;
                                                            if (window.SONATA_CONFIG.USE_ICHECK) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
        
        $__internal_a9f782405e39c0d3cb284c58d8205bfb297f6d2f902de9b725904fe3c272eb51->leave($__internal_a9f782405e39c0d3cb284c58d8205bfb297f6d2f902de9b725904fe3c272eb51_prof);

        
        $__internal_eed28ceb8dd9060ae8d80f8e5801d722d69f51aa58d7780da1adbb5bc940e043->leave($__internal_eed28ceb8dd9060ae8d80f8e5801d722d69f51aa58d7780da1adbb5bc940e043_prof);

    }

    // line 162
    public function block_batch_actions($context, array $blocks = array())
    {
        $__internal_158bde9923c5b7a2d0ee30dd1e997dc239d269586b6f3078291f837fea22f235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158bde9923c5b7a2d0ee30dd1e997dc239d269586b6f3078291f837fea22f235->enter($__internal_158bde9923c5b7a2d0ee30dd1e997dc239d269586b6f3078291f837fea22f235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_a84e72cb7ab6542fff47c2df734df3ae52fb1c99b39e1400abaa7af8ff632578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84e72cb7ab6542fff47c2df734df3ae52fb1c99b39e1400abaa7af8ff632578->enter($__internal_a84e72cb7ab6542fff47c2df734df3ae52fb1c99b39e1400abaa7af8ff632578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 163
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["batchactions"] ?? $this->getContext($context, "batchactions")));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 171
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["options"], "label", array()), array(), (($this->getAttribute($context["options"], "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["options"], "translation_domain", array()), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                                            </select>
                                        ";
        
        $__internal_a84e72cb7ab6542fff47c2df734df3ae52fb1c99b39e1400abaa7af8ff632578->leave($__internal_a84e72cb7ab6542fff47c2df734df3ae52fb1c99b39e1400abaa7af8ff632578_prof);

        
        $__internal_158bde9923c5b7a2d0ee30dd1e997dc239d269586b6f3078291f837fea22f235->leave($__internal_158bde9923c5b7a2d0ee30dd1e997dc239d269586b6f3078291f837fea22f235_prof);

    }

    // line 208
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_b861b26221ab16a3291451ea9c7bfcfe78066ba1c5352af3db1eec305f04263c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b861b26221ab16a3291451ea9c7bfcfe78066ba1c5352af3db1eec305f04263c->enter($__internal_b861b26221ab16a3291451ea9c7bfcfe78066ba1c5352af3db1eec305f04263c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        $__internal_65be5b5f2521cea56aefb2e95bbcde32dfc1ddf74bbb39d36a238af8a524461c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65be5b5f2521cea56aefb2e95bbcde32dfc1ddf74bbb39d36a238af8a524461c->enter($__internal_65be5b5f2521cea56aefb2e95bbcde32dfc1ddf74bbb39d36a238af8a524461c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 209
        echo "                                        ";
        $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_results"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 209)->display($context);
        // line 210
        echo "                                    ";
        
        $__internal_65be5b5f2521cea56aefb2e95bbcde32dfc1ddf74bbb39d36a238af8a524461c->leave($__internal_65be5b5f2521cea56aefb2e95bbcde32dfc1ddf74bbb39d36a238af8a524461c_prof);

        
        $__internal_b861b26221ab16a3291451ea9c7bfcfe78066ba1c5352af3db1eec305f04263c->leave($__internal_b861b26221ab16a3291451ea9c7bfcfe78066ba1c5352af3db1eec305f04263c_prof);

    }

    // line 215
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_4fcbc2715af027de1802e85b338189b8e90b681d410364445f28b34f7e3841a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fcbc2715af027de1802e85b338189b8e90b681d410364445f28b34f7e3841a5->enter($__internal_4fcbc2715af027de1802e85b338189b8e90b681d410364445f28b34f7e3841a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        $__internal_eb84a30bb8ee390e267282e8482ada2335a3b19dc46dd4f74d99d774908a3609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb84a30bb8ee390e267282e8482ada2335a3b19dc46dd4f74d99d774908a3609->enter($__internal_eb84a30bb8ee390e267282e8482ada2335a3b19dc46dd4f74d99d774908a3609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 216
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 217
            echo "                                <hr/>
                                ";
            // line 218
            $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 218)->display($context);
            // line 219
            echo "                            ";
        }
        // line 220
        echo "                        ";
        
        $__internal_eb84a30bb8ee390e267282e8482ada2335a3b19dc46dd4f74d99d774908a3609->leave($__internal_eb84a30bb8ee390e267282e8482ada2335a3b19dc46dd4f74d99d774908a3609_prof);

        
        $__internal_4fcbc2715af027de1802e85b338189b8e90b681d410364445f28b34f7e3841a5->leave($__internal_4fcbc2715af027de1802e85b338189b8e90b681d410364445f28b34f7e3841a5_prof);

    }

    // line 231
    public function block_list_filters_actions($context, array $blocks = array())
    {
        $__internal_1a00955f56e57666b9cf1a9c240c0227d4d8a5cbb86b7813837e2a684c12ff47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a00955f56e57666b9cf1a9c240c0227d4d8a5cbb86b7813837e2a684c12ff47->enter($__internal_1a00955f56e57666b9cf1a9c240c0227d4d8a5cbb86b7813837e2a684c12ff47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        $__internal_765772c5be60a4344d3ec15bead81b865f2ea642dea9e2093c6a00615c9a7040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765772c5be60a4344d3ec15bead81b865f2ea642dea9e2093c6a00615c9a7040->enter($__internal_765772c5be60a4344d3ec15bead81b865f2ea642dea9e2093c6a00615c9a7040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        // line 232
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))) {
            // line 233
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    ";
            // line 238
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo " <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 242
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) {
                    // line 243
                    echo "                        ";
                    $context["filterActive"] = (($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")) &&  !$this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isDefaultFilter", array(0 => $this->getAttribute($context["filter"], "formName", array())), "method"));
                    // line 244
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 245
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 246
                    echo ((($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", array()), array(), (($this->getAttribute($context["filter"], "translationDomain", array())) ? ($this->getAttribute($context["filter"], "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "                </ul>
            </li>
        </ul>
    ";
        }
        
        $__internal_765772c5be60a4344d3ec15bead81b865f2ea642dea9e2093c6a00615c9a7040->leave($__internal_765772c5be60a4344d3ec15bead81b865f2ea642dea9e2093c6a00615c9a7040_prof);

        
        $__internal_1a00955f56e57666b9cf1a9c240c0227d4d8a5cbb86b7813837e2a684c12ff47->leave($__internal_1a00955f56e57666b9cf1a9c240c0227d4d8a5cbb86b7813837e2a684c12ff47_prof);

    }

    // line 256
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_05ac81da5af8cce1355f83162d37219c33daefe32f53b5d4f5aa9fe49bb6378e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ac81da5af8cce1355f83162d37219c33daefe32f53b5d4f5aa9fe49bb6378e->enter($__internal_05ac81da5af8cce1355f83162d37219c33daefe32f53b5d4f5aa9fe49bb6378e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        $__internal_aa9d783a63d43473398bfcac0562e583220f2e3fd42c46f3d861a1572beed2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9d783a63d43473398bfcac0562e583220f2e3fd42c46f3d861a1572beed2d8->enter($__internal_aa9d783a63d43473398bfcac0562e583220f2e3fd42c46f3d861a1572beed2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 257
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 258
            echo "        ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "filter"), "method")), true);
            // line 259
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 260
            echo (($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 263
            echo ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 264
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 268
            $context["withAdvancedFilter"] = false;
            // line 269
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 270
                echo "                                    ";
                $context["filterActive"] = ((($this->getAttribute($context["filter"], "isActive", array(), "method") && (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) || ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true)) &&  !$this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isDefaultFilter", array(0 => $this->getAttribute($context["filter"], "formName", array())), "method"));
                // line 271
                echo "                                    ";
                $context["filterVisible"] = (($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")));
                // line 272
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo ((($context["filterVisible"] ?? $this->getContext($context, "filterVisible"))) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if (($context["filterActive"] ?? $this->getContext($context, "filterActive"))) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 273
                if ( !($this->getAttribute($context["filter"], "label", array()) === false)) {
                    // line 274
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", array()), array(), (($this->getAttribute($context["filter"], "translationDomain", array())) ? ($this->getAttribute($context["filter"], "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 276
                echo "                                        ";
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 277
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 279
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => ($context["attr"] ?? $this->getContext($context, "attr"))));
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 283
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 288
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    ";
                // line 295
                if ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "advanced_filter", array(), "array")) {
                    // line 296
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 297
                    echo "                                    ";
                }
                // line 298
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 303
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 304
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> ";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 311
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 312
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 316
            if (($context["withAdvancedFilter"] ?? $this->getContext($context, "withAdvancedFilter"))) {
                // line 317
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            ";
                // line 320
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_advanced_filters", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 324
            echo "                            </div>
                        </div>

                        ";
            // line 327
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 328
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 330
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_aa9d783a63d43473398bfcac0562e583220f2e3fd42c46f3d861a1572beed2d8->leave($__internal_aa9d783a63d43473398bfcac0562e583220f2e3fd42c46f3d861a1572beed2d8_prof);

        
        $__internal_05ac81da5af8cce1355f83162d37219c33daefe32f53b5d4f5aa9fe49bb6378e->leave($__internal_05ac81da5af8cce1355f83162d37219c33daefe32f53b5d4f5aa9fe49bb6378e_prof);

    }

    // line 272
    public function block_sonata_list_filter_group_class($context, array $blocks = array())
    {
        $__internal_99dd20ff9f630aea955ade768e6e3cf5c3c25a3893816ab88768c7a860ee7c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99dd20ff9f630aea955ade768e6e3cf5c3c25a3893816ab88768c7a860ee7c86->enter($__internal_99dd20ff9f630aea955ade768e6e3cf5c3c25a3893816ab88768c7a860ee7c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        $__internal_968056a3b892d68b0ed9569a455963635cbb95832f684b9c45ecbc79e1225293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968056a3b892d68b0ed9569a455963635cbb95832f684b9c45ecbc79e1225293->enter($__internal_968056a3b892d68b0ed9569a455963635cbb95832f684b9c45ecbc79e1225293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        
        $__internal_968056a3b892d68b0ed9569a455963635cbb95832f684b9c45ecbc79e1225293->leave($__internal_968056a3b892d68b0ed9569a455963635cbb95832f684b9c45ecbc79e1225293_prof);

        
        $__internal_99dd20ff9f630aea955ade768e6e3cf5c3c25a3893816ab88768c7a860ee7c86->leave($__internal_99dd20ff9f630aea955ade768e6e3cf5c3c25a3893816ab88768c7a860ee7c86_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1107 => 272,  1092 => 330,  1081 => 328,  1077 => 327,  1072 => 324,  1065 => 320,  1060 => 317,  1058 => 316,  1051 => 312,  1047 => 311,  1041 => 308,  1033 => 304,  1031 => 303,  1025 => 299,  1011 => 298,  1008 => 297,  1005 => 296,  1003 => 295,  989 => 288,  981 => 283,  974 => 279,  970 => 277,  967 => 276,  959 => 274,  957 => 273,  940 => 272,  937 => 271,  934 => 270,  916 => 269,  914 => 268,  907 => 264,  901 => 263,  893 => 260,  890 => 259,  887 => 258,  884 => 257,  875 => 256,  861 => 250,  848 => 246,  840 => 245,  837 => 244,  834 => 243,  829 => 242,  822 => 238,  815 => 233,  813 => 232,  804 => 231,  794 => 220,  791 => 219,  789 => 218,  786 => 217,  783 => 216,  774 => 215,  764 => 210,  761 => 209,  752 => 208,  741 => 173,  730 => 171,  726 => 170,  719 => 166,  715 => 165,  711 => 164,  706 => 163,  697 => 162,  662 => 134,  653 => 133,  641 => 176,  638 => 175,  636 => 162,  632 => 160,  630 => 133,  627 => 132,  618 => 131,  608 => 223,  604 => 221,  602 => 215,  598 => 213,  594 => 211,  592 => 208,  589 => 207,  582 => 202,  572 => 198,  567 => 196,  564 => 195,  560 => 194,  553 => 190,  548 => 187,  546 => 186,  542 => 184,  539 => 183,  534 => 179,  531 => 178,  528 => 131,  526 => 130,  523 => 129,  521 => 128,  517 => 126,  514 => 125,  505 => 124,  492 => 116,  488 => 114,  486 => 113,  483 => 112,  481 => 111,  473 => 106,  468 => 103,  459 => 102,  449 => 99,  440 => 98,  429 => 95,  427 => 94,  424 => 93,  415 => 92,  403 => 88,  397 => 87,  394 => 86,  390 => 84,  386 => 83,  381 => 82,  375 => 80,  372 => 79,  366 => 78,  344 => 77,  342 => 76,  339 => 75,  336 => 74,  333 => 73,  330 => 72,  327 => 71,  324 => 70,  321 => 69,  318 => 68,  315 => 67,  312 => 66,  310 => 65,  307 => 64,  305 => 63,  303 => 62,  300 => 61,  298 => 60,  293 => 57,  290 => 56,  286 => 55,  282 => 53,  273 => 52,  256 => 48,  245 => 228,  241 => 226,  239 => 225,  236 => 224,  234 => 124,  229 => 122,  226 => 121,  223 => 120,  220 => 102,  216 => 100,  214 => 98,  211 => 97,  209 => 92,  206 => 91,  204 => 52,  201 => 51,  199 => 50,  196 => 49,  194 => 48,  189 => 46,  183 => 45,  176 => 44,  173 => 42,  168 => 40,  163 => 39,  160 => 38,  158 => 37,  155 => 36,  146 => 35,  133 => 32,  124 => 31,  110 => 27,  108 => 26,  105 => 25,  103 => 21,  94 => 20,  76 => 18,  66 => 15,  57 => 14,  36 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block title %}
    {#
        The list template can be used in nested mode,
        so we define the title corresponding to the parent's admin.
    #}

    {% if admin.isChild and admin.parent.subject %}
        {{ \"title_edit\"|trans({'%name%': admin.parent.toString(admin.parent.subject)|truncate(15) }, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{% block list_table %}
    <div class=\"col-xs-12 col-md-12\">
        {% set batchactions = admin.batchactions %}
        {% if admin.hasRoute('batch') and batchactions|length %}
            <form action=\"{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">
        {% endif %}

        {# Add a margin if no pager to prevent dropdown cropping on window #}
        <div class=\"box box-primary\" {% if admin.datagrid.pager.lastPage == 1 %}style=\"margin-bottom: 100px;\"{% endif %}>
            <div class=\"box-body {% if admin.datagrid.results|length > 0 %}table-responsive no-padding{% endif %}\">
                {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}

                {% block list_header %}{% endblock %}

                {% if admin.datagrid.results|length > 0 %}
                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        {% block table_header %}
                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    {% for field_description in admin.list.elements %}
                                        {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        {% elseif field_description.getOption('code') == '_select' %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        {% elseif field_description.name == '_action' and app.request.isXmlHttpRequest %}
                                            {# Action buttons disabled in ajax view! #}
                                        {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}
                                            {# Disable fields with 'ajax_hidden' option set to true #}
                                        {% else %}
                                            {% set sortable = false %}
                                            {% if field_description.options.sortable is defined and field_description.options.sortable %}
                                                {% set sortable             = true %}
                                                {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid) %}
                                                {% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}
                                                {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}
                                                {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}
                                            {% endif %}

                                            {% spaceless %}
                                                <th class=\"sonata-ba-list-field-header-{{ field_description.type}} {% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}{% if field_description.options.header_class is defined %} {{ field_description.options.header_class }}{% endif %}\"{% if field_description.options.header_style is defined %} style=\"{{ field_description.options.header_style }}\"{% endif %}>
                                                    {% if sortable %}<a href=\"{{ admin.generateUrl('list', sort_parameters) }}\">{% endif %}
                                                    {% if field_description.getOption('label_icon') %}
                                                        <i class=\"sonata-ba-list-field-header-label-icon {{ field_description.getOption('label_icon') }}\" aria-hidden=\"true\"></i>
                                                    {% endif %}
                                                    {{ field_description.label|trans({}, field_description.translationDomain) }}
                                                    {% if sortable %}</a>{% endif %}
                                                </th>
                                            {% endspaceless %}
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            </thead>
                        {% endblock %}

                        {% block table_body %}
                            <tbody>
                                {% include admin.getTemplate('outer_list_rows_' ~ admin.getListMode()) %}
                            </tbody>
                        {% endblock %}

                        {% block table_footer %}
                        {% endblock %}
                    </table>
                {% else %}
                    {% block no_result_content %}
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">{{ 'no_result'|trans({}, 'SonataAdminBundle') }}</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    {% if not app.request.xmlHttpRequest %}
                                    <ul class=\"list-unstyled\">
                                        {% include 'SonataAdminBundle:Button:create_button.html.twig' %}
                                    </ul>
                                    {% endif %}
                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    {% endblock %}
                {% endif %}

                {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}
            </div>
            {% block list_footer %}
                {% if admin.datagrid.results|length > 0 %}
                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            {% if not app.request.isXmlHttpRequest %}
                                <div class=\"pull-left\">
                                    {% if admin.hasRoute('batch') and batchactions|length > 0  %}
                                        {% block batch %}
                                            <script>
                                                {% block batch_javascript %}
                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;
                                                            if (window.SONATA_CONFIG.USE_ICHECK) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                {% endblock %}
                                            </script>

                                        {% block batch_actions %}
                                            <label class=\"checkbox\" for=\"{{ admin.uniqid }}_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"{{ admin.uniqid }}_all_elements\">
                                                {{ 'all_elements'|trans({}, 'SonataAdminBundle') }}
                                                ({{ admin.datagrid.pager.nbresults }})
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                {% for action, options in batchactions %}
                                                    <option value=\"{{ action }}\">{{ options.label|trans({}, options.translation_domain|default(admin.translationDomain)) }}</option>
                                                {% endfor %}
                                            </select>
                                        {% endblock %}

                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"{{ 'btn_batch'|trans({}, 'SonataAdminBundle') }}\">
                                        {% endblock %}
                                    {% endif %}
                                </div>


                                {# NEXT_MAJOR : remove this assignment #}
                                {% set export_formats = export_formats|default(admin.exportFormats) %}

                                <div class=\"pull-right\">
                                    {% if admin.hasRoute('export') and admin.hasAccess('export') and export_formats|length %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                {{ \"label_export_download\"|trans({}, \"SonataAdminBundle\") }}
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                {% for format in export_formats %}
                                                <li>
                                                    <a href=\"{{ admin.generateUrl('export', admin.modelmanager.paginationparameters(admin.datagrid, 0) + {'format' : format}) }}\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        {{ (\"export_format_\" ~ format)|trans({}, 'SonataAdminBundle') }}
                                                    </a>
                                                <li>
                                                {% endfor %}
                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    {% endif %}

                                    {% block pager_results %}
                                        {% include admin.getTemplate('pager_results') %}
                                    {% endblock %}
                                </div>
                            {% endif %}
                        </div>

                        {% block pager_links %}
                            {% if admin.datagrid.pager.haveToPaginate() %}
                                <hr/>
                                {% include admin.getTemplate('pager_links') %}
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
        {% if admin.hasRoute('batch') and batchactions|length %}
            </form>
        {% endif %}
    </div>
{% endblock %}

{% block list_filters_actions %}
    {%- if admin.datagrid.filters|length %}
        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    {{ 'link_filters'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    {% for filter in admin.datagrid.filters if (filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null) %}
                        {% set filterActive = ((filter.isActive() or filter.options['show_filter']) and not admin.isDefaultFilter(filter.formName)) %}
                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                <i class=\"fa {{ (filter.isActive() or filter.options['show_filter']) ? 'fa-check-square-o' : 'fa-square-o' }}\"></i>{{ filter.label|trans({}, filter.translationDomain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </li>
        </ul>
    {% endif -%}
{% endblock %}

{% block list_filters %}
    {% if admin.datagrid.filters %}
        {% form_theme form admin.getTemplate('filter') %}

        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: {{ admin.datagrid.hasDisplayableFilters ? 'block' : 'none' }}\" id=\"filter-container-{{ admin.uniqid() }}\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}\" action=\"{{ admin.generateUrl('list') }}\" method=\"GET\" role=\"form\">
                        {{ form_errors(form) }}

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                {% set withAdvancedFilter = false %}
                                {% for filter in admin.datagrid.filters %}
                                    {% set filterActive = ((filter.isActive() and filter.options['show_filter'] is null) or (filter.options['show_filter'] is same as(true))) and not admin.isDefaultFilter(filter.formName) %}
                                    {% set filterVisible = filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null %}
                                    <div class=\"form-group {% block sonata_list_filter_group_class %}{% endblock %}\" id=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" sonata-filter=\"{{ filterVisible ? 'true' : 'false' }}\" style=\"display: {% if filterActive %}block{% else %}none{% endif %}\">
                                        {% if filter.label is not same as(false) %}
                                            <label for=\"{{ form.children[filter.formName].children['value'].vars.id }}\" class=\"col-sm-3 control-label\">{{ filter.label|trans({}, filter.translationDomain ?: admin.translationDomain) }}</label>
                                        {% endif %}
                                        {% set attr = form.children[filter.formName].children['type'].vars.attr|default({}) %}

                                        <div class=\"col-sm-4 advanced-filter\">
                                            {{ form_widget(form.children[filter.formName].children['type'], {'attr':  attr}) }}
                                        </div>

                                        <div class=\"col-sm-4\">
                                            {{ form_widget(form.children[filter.formName].children['value']) }}
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    {% if filter.options['advanced_filter'] %}
                                        {% set withAdvancedFilter = true %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                {% set foo = form.children['_page'].setRendered() %}
                                {{ form_rest(form) }}

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}
                                    </button>

                                    <a class=\"btn btn-default\" href=\"{{ admin.generateUrl('list', {filters: 'reset'}) }}\">
                                        {{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}
                                    </a>
                                </div>

                                {% if withAdvancedFilter %}
                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            {{ 'btn_advanced_filters'|trans({}, 'SonataAdminBundle') }}
                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        {% for paramKey, paramValue in admin.persistentParameters %}
                            <input type=\"hidden\" name=\"{{ paramKey }}\" value=\"{{ paramValue }}\">
                        {% endfor %}
                    </form>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_list.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list.html.twig");
    }
}
