<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_6e8a63eaa5e24fb89b66b16cb7daad145e88d6ae987dca3b81e96de487047dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c90465cf8de09261b6e62b8c6f79df59bbfefdcae59c06c3e9f938513c5b9c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90465cf8de09261b6e62b8c6f79df59bbfefdcae59c06c3e9f938513c5b9c34->enter($__internal_c90465cf8de09261b6e62b8c6f79df59bbfefdcae59c06c3e9f938513c5b9c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_cf69b6a17fae990ae6a00f83f0e9bf898efc417a8e2643d81dabb31db4956860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf69b6a17fae990ae6a00f83f0e9bf898efc417a8e2643d81dabb31db4956860->enter($__internal_cf69b6a17fae990ae6a00f83f0e9bf898efc417a8e2643d81dabb31db4956860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c90465cf8de09261b6e62b8c6f79df59bbfefdcae59c06c3e9f938513c5b9c34->leave($__internal_c90465cf8de09261b6e62b8c6f79df59bbfefdcae59c06c3e9f938513c5b9c34_prof);

        
        $__internal_cf69b6a17fae990ae6a00f83f0e9bf898efc417a8e2643d81dabb31db4956860->leave($__internal_cf69b6a17fae990ae6a00f83f0e9bf898efc417a8e2643d81dabb31db4956860_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff761055129be43219d076da7c38582274b48e5d717c201a5c8ba8e023f8d8ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff761055129be43219d076da7c38582274b48e5d717c201a5c8ba8e023f8d8ab->enter($__internal_ff761055129be43219d076da7c38582274b48e5d717c201a5c8ba8e023f8d8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a97ca0e42018d06be822599231c0b4d03da6b57c2c3e25aa3e27dbb91108a2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97ca0e42018d06be822599231c0b4d03da6b57c2c3e25aa3e27dbb91108a2c4->enter($__internal_a97ca0e42018d06be822599231c0b4d03da6b57c2c3e25aa3e27dbb91108a2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_a97ca0e42018d06be822599231c0b4d03da6b57c2c3e25aa3e27dbb91108a2c4->leave($__internal_a97ca0e42018d06be822599231c0b4d03da6b57c2c3e25aa3e27dbb91108a2c4_prof);

        
        $__internal_ff761055129be43219d076da7c38582274b48e5d717c201a5c8ba8e023f8d8ab->leave($__internal_ff761055129be43219d076da7c38582274b48e5d717c201a5c8ba8e023f8d8ab_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_93c3b2b109c214453a5bef604cb72ba5aa57ea49451ded07d98fcd4e49dbdfb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c3b2b109c214453a5bef604cb72ba5aa57ea49451ded07d98fcd4e49dbdfb8->enter($__internal_93c3b2b109c214453a5bef604cb72ba5aa57ea49451ded07d98fcd4e49dbdfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3b7c2f0646a35013b1f612f746e43940799d7e4bd48d85497d0354c876f8d0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7c2f0646a35013b1f612f746e43940799d7e4bd48d85497d0354c876f8d0ef->enter($__internal_3b7c2f0646a35013b1f612f746e43940799d7e4bd48d85497d0354c876f8d0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 5
        echo "    ";
        
        $__internal_3b7c2f0646a35013b1f612f746e43940799d7e4bd48d85497d0354c876f8d0ef->leave($__internal_3b7c2f0646a35013b1f612f746e43940799d7e4bd48d85497d0354c876f8d0ef_prof);

        
        $__internal_93c3b2b109c214453a5bef604cb72ba5aa57ea49451ded07d98fcd4e49dbdfb8->leave($__internal_93c3b2b109c214453a5bef604cb72ba5aa57ea49451ded07d98fcd4e49dbdfb8_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b623a59a3e4991003253423b44de0f4b0ac2b5baa6575149c4187071304d4683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b623a59a3e4991003253423b44de0f4b0ac2b5baa6575149c4187071304d4683->enter($__internal_b623a59a3e4991003253423b44de0f4b0ac2b5baa6575149c4187071304d4683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f8c548fefa47225c8689e5d9b2df865e95fff6283d5556ff121899075f557d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c548fefa47225c8689e5d9b2df865e95fff6283d5556ff121899075f557d00->enter($__internal_f8c548fefa47225c8689e5d9b2df865e95fff6283d5556ff121899075f557d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_f8c548fefa47225c8689e5d9b2df865e95fff6283d5556ff121899075f557d00->leave($__internal_f8c548fefa47225c8689e5d9b2df865e95fff6283d5556ff121899075f557d00_prof);

        
        $__internal_b623a59a3e4991003253423b44de0f4b0ac2b5baa6575149c4187071304d4683->leave($__internal_b623a59a3e4991003253423b44de0f4b0ac2b5baa6575149c4187071304d4683_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 4,  73 => 5,  70 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}
{% block body %}
    {% block content %}
        {% block fos_user_content %}{% endblock %}
    {% endblock %}
{% endblock body %}", "@FOSUser/layout.html.twig", "/home/thomas/thomascv/Blog-master/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
