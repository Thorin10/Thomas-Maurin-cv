<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_7acf29f0e21c8000f5c84843a48e594270a28ecaa2457c9eeaeb2e491883e234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fc6a6c0ff3761e0652e6779bbbd75656073027b253014fb2c604b8e8e3c4fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc6a6c0ff3761e0652e6779bbbd75656073027b253014fb2c604b8e8e3c4fd0->enter($__internal_6fc6a6c0ff3761e0652e6779bbbd75656073027b253014fb2c604b8e8e3c4fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_52abc1b014891281e72e9a892c591a3a04678f0dfc6054827100c1a4b99e9b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52abc1b014891281e72e9a892c591a3a04678f0dfc6054827100c1a4b99e9b5f->enter($__internal_52abc1b014891281e72e9a892c591a3a04678f0dfc6054827100c1a4b99e9b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fc6a6c0ff3761e0652e6779bbbd75656073027b253014fb2c604b8e8e3c4fd0->leave($__internal_6fc6a6c0ff3761e0652e6779bbbd75656073027b253014fb2c604b8e8e3c4fd0_prof);

        
        $__internal_52abc1b014891281e72e9a892c591a3a04678f0dfc6054827100c1a4b99e9b5f->leave($__internal_52abc1b014891281e72e9a892c591a3a04678f0dfc6054827100c1a4b99e9b5f_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_164834a196c03ad9e2231f1469d06073cabdb31c9c14ad93e1b549a947474075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_164834a196c03ad9e2231f1469d06073cabdb31c9c14ad93e1b549a947474075->enter($__internal_164834a196c03ad9e2231f1469d06073cabdb31c9c14ad93e1b549a947474075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_94e7f7eee1222a9a515ecb5da78467f928f262a045fa2164b3837f7f5bc6eb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e7f7eee1222a9a515ecb5da78467f928f262a045fa2164b3837f7f5bc6eb3c->enter($__internal_94e7f7eee1222a9a515ecb5da78467f928f262a045fa2164b3837f7f5bc6eb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_94e7f7eee1222a9a515ecb5da78467f928f262a045fa2164b3837f7f5bc6eb3c->leave($__internal_94e7f7eee1222a9a515ecb5da78467f928f262a045fa2164b3837f7f5bc6eb3c_prof);

        
        $__internal_164834a196c03ad9e2231f1469d06073cabdb31c9c14ad93e1b549a947474075->leave($__internal_164834a196c03ad9e2231f1469d06073cabdb31c9c14ad93e1b549a947474075_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_38d3c6251367ed44f972ffc24418d233c9ef9d71c71fba041bf72d5e08275e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d3c6251367ed44f972ffc24418d233c9ef9d71c71fba041bf72d5e08275e48->enter($__internal_38d3c6251367ed44f972ffc24418d233c9ef9d71c71fba041bf72d5e08275e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_8bf8d7d0a3d106fccc1bf88d1caeceedca89e1495db0937c9488d786c467df4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf8d7d0a3d106fccc1bf88d1caeceedca89e1495db0937c9488d786c467df4c->enter($__internal_8bf8d7d0a3d106fccc1bf88d1caeceedca89e1495db0937c9488d786c467df4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? $this->getContext($context, "display"))) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter(($context["display"] ?? $this->getContext($context, "display")))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_8bf8d7d0a3d106fccc1bf88d1caeceedca89e1495db0937c9488d786c467df4c->leave($__internal_8bf8d7d0a3d106fccc1bf88d1caeceedca89e1495db0937c9488d786c467df4c_prof);

        
        $__internal_38d3c6251367ed44f972ffc24418d233c9ef9d71c71fba041bf72d5e08275e48->leave($__internal_38d3c6251367ed44f972ffc24418d233c9ef9d71c71fba041bf72d5e08275e48_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_d99632ea603d566f971fd12e24cd6cc7e1f2a50016bcf521c31dfa350e1df721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99632ea603d566f971fd12e24cd6cc7e1f2a50016bcf521c31dfa350e1df721->enter($__internal_d99632ea603d566f971fd12e24cd6cc7e1f2a50016bcf521c31dfa350e1df721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_c6d417878881381e5ab31794781915124d3e8787ceac6c434e4d3f17dded659e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d417878881381e5ab31794781915124d3e8787ceac6c434e4d3f17dded659e->enter($__internal_c6d417878881381e5ab31794781915124d3e8787ceac6c434e4d3f17dded659e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "label_catalogue", 1 => "messages"), "method");
        // line 29
        echo "        ";
        if (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "on_top"), "method", true, true) &&  !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "on_top"), "method"))) {
            // line 30
            echo "            ";
            $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method"), ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : (((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c6d417878881381e5ab31794781915124d3e8787ceac6c434e4d3f17dded659e->leave($__internal_c6d417878881381e5ab31794781915124d3e8787ceac6c434e4d3f17dded659e_prof);

        
        $__internal_d99632ea603d566f971fd12e24cd6cc7e1f2a50016bcf521c31dfa350e1df721->leave($__internal_d99632ea603d566f971fd12e24cd6cc7e1f2a50016bcf521c31dfa350e1df721_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_21d2b3c591057cdff314c408e71dc459f4f53e06be3c0198174188d51b494dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d2b3c591057cdff314c408e71dc459f4f53e06be3c0198174188d51b494dc1->enter($__internal_21d2b3c591057cdff314c408e71dc459f4f53e06be3c0198174188d51b494dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_6d10587fa91ab4f84619cf20bfddd57115e98f1726b9962131730ec14b95d79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d10587fa91ab4f84619cf20bfddd57115e98f1726b9962131730ec14b95d79d->enter($__internal_6d10587fa91ab4f84619cf20bfddd57115e98f1726b9962131730ec14b95d79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo ($context["icon"] ?? $this->getContext($context, "icon"));
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 46
        if (( !$this->getAttribute(($context["item"] ?? null), "extra", array(0 => "keep_open"), "method", true, true) ||  !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "keep_open"), "method"))) {
            // line 47
            echo "<span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>";
        }
        // line 49
        echo "</a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6d10587fa91ab4f84619cf20bfddd57115e98f1726b9962131730ec14b95d79d->leave($__internal_6d10587fa91ab4f84619cf20bfddd57115e98f1726b9962131730ec14b95d79d_prof);

        
        $__internal_21d2b3c591057cdff314c408e71dc459f4f53e06be3c0198174188d51b494dc1->leave($__internal_21d2b3c591057cdff314c408e71dc459f4f53e06be3c0198174188d51b494dc1_prof);

    }

    // line 53
    public function block_label($context, array $blocks = array())
    {
        $__internal_badb7ddf78269f50dfe9dcb5f65c5f57781fe520804155c851254da2d6a90ccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_badb7ddf78269f50dfe9dcb5f65c5f57781fe520804155c851254da2d6a90ccc->enter($__internal_badb7ddf78269f50dfe9dcb5f65c5f57781fe520804155c851254da2d6a90ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_f71119b64878ac2571d748a44e0a9c0b851285f0b91ee6a02533be0b3f4b6c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71119b64878ac2571d748a44e0a9c0b851285f0b91ee6a02533be0b3f4b6c9a->enter($__internal_f71119b64878ac2571d748a44e0a9c0b851285f0b91ee6a02533be0b3f4b6c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && ($context["is_link"] ?? $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_f71119b64878ac2571d748a44e0a9c0b851285f0b91ee6a02533be0b3f4b6c9a->leave($__internal_f71119b64878ac2571d748a44e0a9c0b851285f0b91ee6a02533be0b3f4b6c9a_prof);

        
        $__internal_badb7ddf78269f50dfe9dcb5f65c5f57781fe520804155c851254da2d6a90ccc->leave($__internal_badb7ddf78269f50dfe9dcb5f65c5f57781fe520804155c851254da2d6a90ccc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 53,  196 => 49,  193 => 47,  191 => 46,  189 => 45,  184 => 44,  181 => 43,  179 => 42,  176 => 41,  173 => 40,  164 => 39,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  117 => 26,  103 => 22,  101 => 21,  99 => 20,  96 => 19,  94 => 18,  86 => 14,  81 => 13,  79 => 12,  77 => 10,  68 => 9,  57 => 6,  55 => 5,  53 => 4,  44 => 3,  11 => 1,);
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

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}
    {%- set request        = item.extra('request') ?: app.request %}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed %}
        {#- check role of the group #}
        {%- set display = (item.extra('roles') is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {%- for role in item.extra('roles') if not display %}
            {%- set display = is_granted(role) %}
        {%- endfor %}
    {%- endif %}

    {%- if item.displayed and display|default %}
        {% set options = options|merge({branch_class: 'treeview', currentClass: \"active\"}) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% spaceless %}
        {% set translation_domain = item.extra('label_catalogue', 'messages') %}
        {% if item.extra('on_top') is defined and not item.extra('on_top') %}
            {% set icon = item.extra('icon')|default(item.level > 1 ? '<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>' : '') %}
        {% else %}
            {% set icon = item.extra('icon') %}
        {% endif %}
        {% set is_link = true %}
        {{ parent() }}
    {% endspaceless %}
{% endblock %}

{% block spanElement %}
    {% spaceless %}
        <a href=\"#\">
            {% set translation_domain = item.extra('label_catalogue') %}
            {% set icon = item.extra('icon')|default('') %}
            {{ icon|raw }}
            {{ parent() }}
            {%- if item.extra('keep_open') is not defined or not item.extra('keep_open') -%}
                <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
            {%- endif -%}
        </a>
    {% endspaceless %}
{% endblock %}

{% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}