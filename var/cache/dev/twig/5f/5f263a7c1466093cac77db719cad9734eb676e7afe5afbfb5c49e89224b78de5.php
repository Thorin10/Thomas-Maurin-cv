<?php

/* knp_menu.html.twig */
class __TwigTemplate_255d1365da74e7d766fa80e7dd7ba1ecbe1c5d8a0c79e246db02e8b586be3b33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_778c9167ea1517a0d3dcc357d38679a7d0fd80f67bdbd3ceb90f32a3577977e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778c9167ea1517a0d3dcc357d38679a7d0fd80f67bdbd3ceb90f32a3577977e8->enter($__internal_778c9167ea1517a0d3dcc357d38679a7d0fd80f67bdbd3ceb90f32a3577977e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_b973be64d542305cdaaf95aa7fe098fc03491d767fcd4a02c41f1064ba89173a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b973be64d542305cdaaf95aa7fe098fc03491d767fcd4a02c41f1064ba89173a->enter($__internal_b973be64d542305cdaaf95aa7fe098fc03491d767fcd4a02c41f1064ba89173a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_778c9167ea1517a0d3dcc357d38679a7d0fd80f67bdbd3ceb90f32a3577977e8->leave($__internal_778c9167ea1517a0d3dcc357d38679a7d0fd80f67bdbd3ceb90f32a3577977e8_prof);

        
        $__internal_b973be64d542305cdaaf95aa7fe098fc03491d767fcd4a02c41f1064ba89173a->leave($__internal_b973be64d542305cdaaf95aa7fe098fc03491d767fcd4a02c41f1064ba89173a_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_ce95cb1523c909a52dba63ccdd0c0d38d4af69be78b712895562f3f462d3755b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce95cb1523c909a52dba63ccdd0c0d38d4af69be78b712895562f3f462d3755b->enter($__internal_ce95cb1523c909a52dba63ccdd0c0d38d4af69be78b712895562f3f462d3755b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_1c230ad1080056bcb880cb61181c4ee8bb56eb398b664a32b7f072adaadaeb80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c230ad1080056bcb880cb61181c4ee8bb56eb398b664a32b7f072adaadaeb80->enter($__internal_1c230ad1080056bcb880cb61181c4ee8bb56eb398b664a32b7f072adaadaeb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1c230ad1080056bcb880cb61181c4ee8bb56eb398b664a32b7f072adaadaeb80->leave($__internal_1c230ad1080056bcb880cb61181c4ee8bb56eb398b664a32b7f072adaadaeb80_prof);

        
        $__internal_ce95cb1523c909a52dba63ccdd0c0d38d4af69be78b712895562f3f462d3755b->leave($__internal_ce95cb1523c909a52dba63ccdd0c0d38d4af69be78b712895562f3f462d3755b_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_71de747c18bdab44637d410af7138165013d133658d8a01ed5933a2dd62dd9f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71de747c18bdab44637d410af7138165013d133658d8a01ed5933a2dd62dd9f5->enter($__internal_71de747c18bdab44637d410af7138165013d133658d8a01ed5933a2dd62dd9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_9b60331dcea83e23801aa6c20aad3b12cefeb6de6bd951dba9eea202540c0907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b60331dcea83e23801aa6c20aad3b12cefeb6de6bd951dba9eea202540c0907->enter($__internal_9b60331dcea83e23801aa6c20aad3b12cefeb6de6bd951dba9eea202540c0907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_9b60331dcea83e23801aa6c20aad3b12cefeb6de6bd951dba9eea202540c0907->leave($__internal_9b60331dcea83e23801aa6c20aad3b12cefeb6de6bd951dba9eea202540c0907_prof);

        
        $__internal_71de747c18bdab44637d410af7138165013d133658d8a01ed5933a2dd62dd9f5->leave($__internal_71de747c18bdab44637d410af7138165013d133658d8a01ed5933a2dd62dd9f5_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_de30b0567a28aa032c0f4e6b8bd706ad9af53822d50cbde986b5aef9e375d40a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de30b0567a28aa032c0f4e6b8bd706ad9af53822d50cbde986b5aef9e375d40a->enter($__internal_de30b0567a28aa032c0f4e6b8bd706ad9af53822d50cbde986b5aef9e375d40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_c7862a2534ea9cc4ce88a13e7cf6ac59f6db5d43b6c46961f9dcac24671e1fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7862a2534ea9cc4ce88a13e7cf6ac59f6db5d43b6c46961f9dcac24671e1fe3->enter($__internal_c7862a2534ea9cc4ce88a13e7cf6ac59f6db5d43b6c46961f9dcac24671e1fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_c7862a2534ea9cc4ce88a13e7cf6ac59f6db5d43b6c46961f9dcac24671e1fe3->leave($__internal_c7862a2534ea9cc4ce88a13e7cf6ac59f6db5d43b6c46961f9dcac24671e1fe3_prof);

        
        $__internal_de30b0567a28aa032c0f4e6b8bd706ad9af53822d50cbde986b5aef9e375d40a->leave($__internal_de30b0567a28aa032c0f4e6b8bd706ad9af53822d50cbde986b5aef9e375d40a_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_28ceb17824e392a4122e10b6d29d5984aea71530a7fe03d7c8f76296b6e3ff67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28ceb17824e392a4122e10b6d29d5984aea71530a7fe03d7c8f76296b6e3ff67->enter($__internal_28ceb17824e392a4122e10b6d29d5984aea71530a7fe03d7c8f76296b6e3ff67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_4cd079e2b615032a4ebe1ed23d8375ca4bf63c8f84a5182d6173c9f8b2176038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd079e2b615032a4ebe1ed23d8375ca4bf63c8f84a5182d6173c9f8b2176038->enter($__internal_4cd079e2b615032a4ebe1ed23d8375ca4bf63c8f84a5182d6173c9f8b2176038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = ($context["options"] ?? $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = ($context["item"] ?? $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentItem"] ?? $this->getContext($context, "currentItem")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = ($context["currentItem"] ?? $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = ($context["currentOptions"] ?? $this->getContext($context, "currentOptions"));
        
        $__internal_4cd079e2b615032a4ebe1ed23d8375ca4bf63c8f84a5182d6173c9f8b2176038->leave($__internal_4cd079e2b615032a4ebe1ed23d8375ca4bf63c8f84a5182d6173c9f8b2176038_prof);

        
        $__internal_28ceb17824e392a4122e10b6d29d5984aea71530a7fe03d7c8f76296b6e3ff67->leave($__internal_28ceb17824e392a4122e10b6d29d5984aea71530a7fe03d7c8f76296b6e3ff67_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_f4861d51426ca0d26b52c075c572bc9b422b2628359724378c57651de1da0f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4861d51426ca0d26b52c075c572bc9b422b2628359724378c57651de1da0f9b->enter($__internal_f4861d51426ca0d26b52c075c572bc9b422b2628359724378c57651de1da0f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_335c5d741eb2c9d9fdf3ff84f4b073a019b0577f39179ec71ea9c1d275167123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335c5d741eb2c9d9fdf3ff84f4b073a019b0577f39179ec71ea9c1d275167123->enter($__internal_335c5d741eb2c9d9fdf3ff84f4b073a019b0577f39179ec71ea9c1d275167123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method") || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_335c5d741eb2c9d9fdf3ff84f4b073a019b0577f39179ec71ea9c1d275167123->leave($__internal_335c5d741eb2c9d9fdf3ff84f4b073a019b0577f39179ec71ea9c1d275167123_prof);

        
        $__internal_f4861d51426ca0d26b52c075c572bc9b422b2628359724378c57651de1da0f9b->leave($__internal_f4861d51426ca0d26b52c075c572bc9b422b2628359724378c57651de1da0f9b_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_7cead06848f528baa646153e64abe0845adafc7938b7f115d1e8b54a8f06cd11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cead06848f528baa646153e64abe0845adafc7938b7f115d1e8b54a8f06cd11->enter($__internal_7cead06848f528baa646153e64abe0845adafc7938b7f115d1e8b54a8f06cd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_dc43b320181757d5c59b56b0c4dd2d8555a3d5fca0bfa9133a198c371cddb412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc43b320181757d5c59b56b0c4dd2d8555a3d5fca0bfa9133a198c371cddb412->enter($__internal_dc43b320181757d5c59b56b0c4dd2d8555a3d5fca0bfa9133a198c371cddb412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_dc43b320181757d5c59b56b0c4dd2d8555a3d5fca0bfa9133a198c371cddb412->leave($__internal_dc43b320181757d5c59b56b0c4dd2d8555a3d5fca0bfa9133a198c371cddb412_prof);

        
        $__internal_7cead06848f528baa646153e64abe0845adafc7938b7f115d1e8b54a8f06cd11->leave($__internal_7cead06848f528baa646153e64abe0845adafc7938b7f115d1e8b54a8f06cd11_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_0a8e0afbf243d647c3f2a81db0e182ed158c518fa0c351ab3144ab1d0537569e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a8e0afbf243d647c3f2a81db0e182ed158c518fa0c351ab3144ab1d0537569e->enter($__internal_0a8e0afbf243d647c3f2a81db0e182ed158c518fa0c351ab3144ab1d0537569e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_c8547ceb578b15c55ec9801f1d192760de721df48cdd7e917e698c7d305c3a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8547ceb578b15c55ec9801f1d192760de721df48cdd7e917e698c7d305c3a1e->enter($__internal_c8547ceb578b15c55ec9801f1d192760de721df48cdd7e917e698c7d305c3a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_c8547ceb578b15c55ec9801f1d192760de721df48cdd7e917e698c7d305c3a1e->leave($__internal_c8547ceb578b15c55ec9801f1d192760de721df48cdd7e917e698c7d305c3a1e_prof);

        
        $__internal_0a8e0afbf243d647c3f2a81db0e182ed158c518fa0c351ab3144ab1d0537569e->leave($__internal_0a8e0afbf243d647c3f2a81db0e182ed158c518fa0c351ab3144ab1d0537569e_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_6d2d7913d31a156f5b99223ff15889c305b5aa7a867dbaba0e994c108543e543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2d7913d31a156f5b99223ff15889c305b5aa7a867dbaba0e994c108543e543->enter($__internal_6d2d7913d31a156f5b99223ff15889c305b5aa7a867dbaba0e994c108543e543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_748dde9c1cf18a5de1729ea6472a12fff895a7d560ab8a6552ea9229a22b5b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748dde9c1cf18a5de1729ea6472a12fff895a7d560ab8a6552ea9229a22b5b19->enter($__internal_748dde9c1cf18a5de1729ea6472a12fff895a7d560ab8a6552ea9229a22b5b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_748dde9c1cf18a5de1729ea6472a12fff895a7d560ab8a6552ea9229a22b5b19->leave($__internal_748dde9c1cf18a5de1729ea6472a12fff895a7d560ab8a6552ea9229a22b5b19_prof);

        
        $__internal_6d2d7913d31a156f5b99223ff15889c305b5aa7a867dbaba0e994c108543e543->leave($__internal_6d2d7913d31a156f5b99223ff15889c305b5aa7a867dbaba0e994c108543e543_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_aeb21cfce946306c4d0825e5400f27c087cdc66f6323ea9ebce0558548913ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_aeb21cfce946306c4d0825e5400f27c087cdc66f6323ea9ebce0558548913ce0->enter($__internal_aeb21cfce946306c4d0825e5400f27c087cdc66f6323ea9ebce0558548913ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_e5576947dac3f76a02d1704360a754739250c8c74545fd8e7465e756b5560bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_e5576947dac3f76a02d1704360a754739250c8c74545fd8e7465e756b5560bb3->enter($__internal_e5576947dac3f76a02d1704360a754739250c8c74545fd8e7465e756b5560bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_e5576947dac3f76a02d1704360a754739250c8c74545fd8e7465e756b5560bb3->leave($__internal_e5576947dac3f76a02d1704360a754739250c8c74545fd8e7465e756b5560bb3_prof);

            
            $__internal_aeb21cfce946306c4d0825e5400f27c087cdc66f6323ea9ebce0558548913ce0->leave($__internal_aeb21cfce946306c4d0825e5400f27c087cdc66f6323ea9ebce0558548913ce0_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "/home/thomas/thomascv/cv/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}