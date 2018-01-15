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
        $__internal_095042fe77e4d7a02c39092c5594e1efbce74d00022b3646463890912c3d4d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095042fe77e4d7a02c39092c5594e1efbce74d00022b3646463890912c3d4d14->enter($__internal_095042fe77e4d7a02c39092c5594e1efbce74d00022b3646463890912c3d4d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_0e7a85dee5ef718111af3fabbbfc1d1dc1150696e63270cdd0e5896a01053be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7a85dee5ef718111af3fabbbfc1d1dc1150696e63270cdd0e5896a01053be8->enter($__internal_0e7a85dee5ef718111af3fabbbfc1d1dc1150696e63270cdd0e5896a01053be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_095042fe77e4d7a02c39092c5594e1efbce74d00022b3646463890912c3d4d14->leave($__internal_095042fe77e4d7a02c39092c5594e1efbce74d00022b3646463890912c3d4d14_prof);

        
        $__internal_0e7a85dee5ef718111af3fabbbfc1d1dc1150696e63270cdd0e5896a01053be8->leave($__internal_0e7a85dee5ef718111af3fabbbfc1d1dc1150696e63270cdd0e5896a01053be8_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_427d3ff406133d883cf7aed0e6b56a2501635de026a420ffb2e79b2d72fe9989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_427d3ff406133d883cf7aed0e6b56a2501635de026a420ffb2e79b2d72fe9989->enter($__internal_427d3ff406133d883cf7aed0e6b56a2501635de026a420ffb2e79b2d72fe9989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_6b1aabc8b42067e77f1439c38ab1f3ab1595d7815bb4ce7519f8c09155af9a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1aabc8b42067e77f1439c38ab1f3ab1595d7815bb4ce7519f8c09155af9a5b->enter($__internal_6b1aabc8b42067e77f1439c38ab1f3ab1595d7815bb4ce7519f8c09155af9a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_6b1aabc8b42067e77f1439c38ab1f3ab1595d7815bb4ce7519f8c09155af9a5b->leave($__internal_6b1aabc8b42067e77f1439c38ab1f3ab1595d7815bb4ce7519f8c09155af9a5b_prof);

        
        $__internal_427d3ff406133d883cf7aed0e6b56a2501635de026a420ffb2e79b2d72fe9989->leave($__internal_427d3ff406133d883cf7aed0e6b56a2501635de026a420ffb2e79b2d72fe9989_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_3acafee8ec65de68ef46a88b3ed8afb77d50714b6dfb5aaf59f724818ba64fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3acafee8ec65de68ef46a88b3ed8afb77d50714b6dfb5aaf59f724818ba64fa4->enter($__internal_3acafee8ec65de68ef46a88b3ed8afb77d50714b6dfb5aaf59f724818ba64fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_c989181646995f123fe6ac8402eea2b50e87ba7e9c39f02ab1d17d1f4c43b0df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c989181646995f123fe6ac8402eea2b50e87ba7e9c39f02ab1d17d1f4c43b0df->enter($__internal_c989181646995f123fe6ac8402eea2b50e87ba7e9c39f02ab1d17d1f4c43b0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

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
        
        $__internal_c989181646995f123fe6ac8402eea2b50e87ba7e9c39f02ab1d17d1f4c43b0df->leave($__internal_c989181646995f123fe6ac8402eea2b50e87ba7e9c39f02ab1d17d1f4c43b0df_prof);

        
        $__internal_3acafee8ec65de68ef46a88b3ed8afb77d50714b6dfb5aaf59f724818ba64fa4->leave($__internal_3acafee8ec65de68ef46a88b3ed8afb77d50714b6dfb5aaf59f724818ba64fa4_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_ef8ce276e8fbc9e4e54cb45cb9c76f577321f8a8cafa07994aa95e39ddc54e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8ce276e8fbc9e4e54cb45cb9c76f577321f8a8cafa07994aa95e39ddc54e91->enter($__internal_ef8ce276e8fbc9e4e54cb45cb9c76f577321f8a8cafa07994aa95e39ddc54e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_d2d197675cc646193bc628e37561e00d0d660687a4c7f37a9c87417cf0f347c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d197675cc646193bc628e37561e00d0d660687a4c7f37a9c87417cf0f347c1->enter($__internal_d2d197675cc646193bc628e37561e00d0d660687a4c7f37a9c87417cf0f347c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

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
        
        $__internal_d2d197675cc646193bc628e37561e00d0d660687a4c7f37a9c87417cf0f347c1->leave($__internal_d2d197675cc646193bc628e37561e00d0d660687a4c7f37a9c87417cf0f347c1_prof);

        
        $__internal_ef8ce276e8fbc9e4e54cb45cb9c76f577321f8a8cafa07994aa95e39ddc54e91->leave($__internal_ef8ce276e8fbc9e4e54cb45cb9c76f577321f8a8cafa07994aa95e39ddc54e91_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_3bcf798a64f9a2793a1411d9cfa9240fd958f5806f55e2d64577277c5240579a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bcf798a64f9a2793a1411d9cfa9240fd958f5806f55e2d64577277c5240579a->enter($__internal_3bcf798a64f9a2793a1411d9cfa9240fd958f5806f55e2d64577277c5240579a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_bd46498b0924d8eb28350622b080f7199c281b26fe2b9fc462a700bbfa9c75fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd46498b0924d8eb28350622b080f7199c281b26fe2b9fc462a700bbfa9c75fd->enter($__internal_bd46498b0924d8eb28350622b080f7199c281b26fe2b9fc462a700bbfa9c75fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

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
        
        $__internal_bd46498b0924d8eb28350622b080f7199c281b26fe2b9fc462a700bbfa9c75fd->leave($__internal_bd46498b0924d8eb28350622b080f7199c281b26fe2b9fc462a700bbfa9c75fd_prof);

        
        $__internal_3bcf798a64f9a2793a1411d9cfa9240fd958f5806f55e2d64577277c5240579a->leave($__internal_3bcf798a64f9a2793a1411d9cfa9240fd958f5806f55e2d64577277c5240579a_prof);

    }

    // line 53
    public function block_label($context, array $blocks = array())
    {
        $__internal_2a22599ff24b2c33c63060860eaa0fe833717af19005356104499faf82e7e9be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a22599ff24b2c33c63060860eaa0fe833717af19005356104499faf82e7e9be->enter($__internal_2a22599ff24b2c33c63060860eaa0fe833717af19005356104499faf82e7e9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_48d98ed77295348dd73d354071b2efcd2aa679e19ac4d7fc6ff209102897a57e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d98ed77295348dd73d354071b2efcd2aa679e19ac4d7fc6ff209102897a57e->enter($__internal_48d98ed77295348dd73d354071b2efcd2aa679e19ac4d7fc6ff209102897a57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && ($context["is_link"] ?? $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_48d98ed77295348dd73d354071b2efcd2aa679e19ac4d7fc6ff209102897a57e->leave($__internal_48d98ed77295348dd73d354071b2efcd2aa679e19ac4d7fc6ff209102897a57e_prof);

        
        $__internal_2a22599ff24b2c33c63060860eaa0fe833717af19005356104499faf82e7e9be->leave($__internal_2a22599ff24b2c33c63060860eaa0fe833717af19005356104499faf82e7e9be_prof);

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
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}
