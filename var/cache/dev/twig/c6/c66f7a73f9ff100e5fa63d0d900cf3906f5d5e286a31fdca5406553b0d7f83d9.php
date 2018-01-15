<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_5fe809358f47a3ce126d4188fe53d90853aa3a3e9892850279e88055e44e2b83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin_pool"] ?? $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e4356a3b1101e324fea9e843e8d85eb5c07432a848ce30bf8fb483adb9ed6c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4356a3b1101e324fea9e843e8d85eb5c07432a848ce30bf8fb483adb9ed6c3->enter($__internal_7e4356a3b1101e324fea9e843e8d85eb5c07432a848ce30bf8fb483adb9ed6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $__internal_9d7e01cd767b03d1df339a4c7f4e96ff5d64e442f61c62f9bd630b8432f8e6c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7e01cd767b03d1df339a4c7f4e96ff5d64e442f61c62f9bd630b8432f8e6c2->enter($__internal_9d7e01cd767b03d1df339a4c7f4e96ff5d64e442f61c62f9bd630b8432f8e6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e4356a3b1101e324fea9e843e8d85eb5c07432a848ce30bf8fb483adb9ed6c3->leave($__internal_7e4356a3b1101e324fea9e843e8d85eb5c07432a848ce30bf8fb483adb9ed6c3_prof);

        
        $__internal_9d7e01cd767b03d1df339a4c7f4e96ff5d64e442f61c62f9bd630b8432f8e6c2->leave($__internal_9d7e01cd767b03d1df339a4c7f4e96ff5d64e442f61c62f9bd630b8432f8e6c2_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_721f5cece8e55d6c922c9fa61f2a0687d7bbe7a15ec33aa8be5ece3528aa4295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721f5cece8e55d6c922c9fa61f2a0687d7bbe7a15ec33aa8be5ece3528aa4295->enter($__internal_721f5cece8e55d6c922c9fa61f2a0687d7bbe7a15ec33aa8be5ece3528aa4295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_c6f47d627ca52f945210922c5ae443e2b607b4330eaf8a349da77aa9b60aa398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f47d627ca52f945210922c5ae443e2b607b4330eaf8a349da77aa9b60aa398->enter($__internal_c6f47d627ca52f945210922c5ae443e2b607b4330eaf8a349da77aa9b60aa398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_c6f47d627ca52f945210922c5ae443e2b607b4330eaf8a349da77aa9b60aa398->leave($__internal_c6f47d627ca52f945210922c5ae443e2b607b4330eaf8a349da77aa9b60aa398_prof);

        
        $__internal_721f5cece8e55d6c922c9fa61f2a0687d7bbe7a15ec33aa8be5ece3528aa4295->leave($__internal_721f5cece8e55d6c922c9fa61f2a0687d7bbe7a15ec33aa8be5ece3528aa4295_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_082c16c6c8ae9a21815f3c094d158a2f64aa3669dd148ae0f31b8573e3c7312c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082c16c6c8ae9a21815f3c094d158a2f64aa3669dd148ae0f31b8573e3c7312c->enter($__internal_082c16c6c8ae9a21815f3c094d158a2f64aa3669dd148ae0f31b8573e3c7312c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_06ecc737d7643eaa7caa6abc6a04fb3b8663f740257af7a2e566de9e929400b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ecc737d7643eaa7caa6abc6a04fb3b8663f740257af7a2e566de9e929400b8->enter($__internal_06ecc737d7643eaa7caa6abc6a04fb3b8663f740257af7a2e566de9e929400b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_06ecc737d7643eaa7caa6abc6a04fb3b8663f740257af7a2e566de9e929400b8->leave($__internal_06ecc737d7643eaa7caa6abc6a04fb3b8663f740257af7a2e566de9e929400b8_prof);

        
        $__internal_082c16c6c8ae9a21815f3c094d158a2f64aa3669dd148ae0f31b8573e3c7312c->leave($__internal_082c16c6c8ae9a21815f3c094d158a2f64aa3669dd148ae0f31b8573e3c7312c_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_effc2fb6526215d67c50237c1726419d6ab71125cd7d294c6a6fecf3c2bea1ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_effc2fb6526215d67c50237c1726419d6ab71125cd7d294c6a6fecf3c2bea1ef->enter($__internal_effc2fb6526215d67c50237c1726419d6ab71125cd7d294c6a6fecf3c2bea1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_7823d20eefb5d74fbbeb768ff7e919f11752acbb8e0b20144c7910b0eae4e862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7823d20eefb5d74fbbeb768ff7e919f11752acbb8e0b20144c7910b0eae4e862->enter($__internal_7823d20eefb5d74fbbeb768ff7e919f11752acbb8e0b20144c7910b0eae4e862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_7823d20eefb5d74fbbeb768ff7e919f11752acbb8e0b20144c7910b0eae4e862->leave($__internal_7823d20eefb5d74fbbeb768ff7e919f11752acbb8e0b20144c7910b0eae4e862_prof);

        
        $__internal_effc2fb6526215d67c50237c1726419d6ab71125cd7d294c6a6fecf3c2bea1ef->leave($__internal_effc2fb6526215d67c50237c1726419d6ab71125cd7d294c6a6fecf3c2bea1ef_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_5f3f1427f9e14f79ae32eef576f28f2d4d367330fc80be4f75a8f882295cd681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3f1427f9e14f79ae32eef576f28f2d4d367330fc80be4f75a8f882295cd681->enter($__internal_5f3f1427f9e14f79ae32eef576f28f2d4d367330fc80be4f75a8f882295cd681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_50c9152e2613be126bec51e594991629b8b82502bd41450032b68bca20b4a640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c9152e2613be126bec51e594991629b8b82502bd41450032b68bca20b4a640->enter($__internal_50c9152e2613be126bec51e594991629b8b82502bd41450032b68bca20b4a640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_50c9152e2613be126bec51e594991629b8b82502bd41450032b68bca20b4a640->leave($__internal_50c9152e2613be126bec51e594991629b8b82502bd41450032b68bca20b4a640_prof);

        
        $__internal_5f3f1427f9e14f79ae32eef576f28f2d4d367330fc80be4f75a8f882295cd681->leave($__internal_5f3f1427f9e14f79ae32eef576f28f2d4d367330fc80be4f75a8f882295cd681_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a454d33ffa927cc32591e5dd1e5f925b4a4e50ff989c09fe430bf735d80dd11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a454d33ffa927cc32591e5dd1e5f925b4a4e50ff989c09fe430bf735d80dd11e->enter($__internal_a454d33ffa927cc32591e5dd1e5f925b4a4e50ff989c09fe430bf735d80dd11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ddcd9227276d21f105f6fe323080c9128c0d1e8a3c092df693055aca41b92733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddcd9227276d21f105f6fe323080c9128c0d1e8a3c092df693055aca41b92733->enter($__internal_ddcd9227276d21f105f6fe323080c9128c0d1e8a3c092df693055aca41b92733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
";
        
        $__internal_ddcd9227276d21f105f6fe323080c9128c0d1e8a3c092df693055aca41b92733->leave($__internal_ddcd9227276d21f105f6fe323080c9128c0d1e8a3c092df693055aca41b92733_prof);

        
        $__internal_a454d33ffa927cc32591e5dd1e5f925b4a4e50ff989c09fe430bf735d80dd11e->leave($__internal_a454d33ffa927cc32591e5dd1e5f925b4a4e50ff989c09fe430bf735d80dd11e_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_cba8d707efeee39fd79e225a812a63c892563319e59afdc5b7f1748adc2c2dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba8d707efeee39fd79e225a812a63c892563319e59afdc5b7f1748adc2c2dc8->enter($__internal_cba8d707efeee39fd79e225a812a63c892563319e59afdc5b7f1748adc2c2dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_f91c158c531c2766fcba70ed2d993948bf587a4709a5b364d2e63a559f12f26b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91c158c531c2766fcba70ed2d993948bf587a4709a5b364d2e63a559f12f26b->enter($__internal_f91c158c531c2766fcba70ed2d993948bf587a4709a5b364d2e63a559f12f26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_f91c158c531c2766fcba70ed2d993948bf587a4709a5b364d2e63a559f12f26b->leave($__internal_f91c158c531c2766fcba70ed2d993948bf587a4709a5b364d2e63a559f12f26b_prof);

        
        $__internal_cba8d707efeee39fd79e225a812a63c892563319e59afdc5b7f1748adc2c2dc8->leave($__internal_cba8d707efeee39fd79e225a812a63c892563319e59afdc5b7f1748adc2c2dc8_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_80f5daf5f18de47fb797aba4152c9019c61e5e5361df43041cb9aa758cc7cbda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f5daf5f18de47fb797aba4152c9019c61e5e5361df43041cb9aa758cc7cbda->enter($__internal_80f5daf5f18de47fb797aba4152c9019c61e5e5361df43041cb9aa758cc7cbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_6a6f356809d9123661dcd26959442a61d573d26f89dbd0a1bdb761d6dacd870c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6f356809d9123661dcd26959442a61d573d26f89dbd0a1bdb761d6dacd870c->enter($__internal_6a6f356809d9123661dcd26959442a61d573d26f89dbd0a1bdb761d6dacd870c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_6a6f356809d9123661dcd26959442a61d573d26f89dbd0a1bdb761d6dacd870c->leave($__internal_6a6f356809d9123661dcd26959442a61d573d26f89dbd0a1bdb761d6dacd870c_prof);

        
        $__internal_80f5daf5f18de47fb797aba4152c9019c61e5e5361df43041cb9aa758cc7cbda->leave($__internal_80f5daf5f18de47fb797aba4152c9019c61e5e5361df43041cb9aa758cc7cbda_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 32,  151 => 31,  142 => 30,  122 => 20,  113 => 19,  96 => 17,  79 => 16,  62 => 15,  45 => 14,  24 => 12,);
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

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
