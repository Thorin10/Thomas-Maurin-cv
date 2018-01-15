<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_aa1bf0174a46fb5d4d7abd5ac32649dab9c80ba9474618f62e74eef40091f467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff89ea5b3b52029321c43cbac2c13c6ee82e3aa8fb7ac6715d8eb52fdec8b850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff89ea5b3b52029321c43cbac2c13c6ee82e3aa8fb7ac6715d8eb52fdec8b850->enter($__internal_ff89ea5b3b52029321c43cbac2c13c6ee82e3aa8fb7ac6715d8eb52fdec8b850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_ab20f002a00fce6ec74047a11736fc620ea897da00992821db5a4c99785a36ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab20f002a00fce6ec74047a11736fc620ea897da00992821db5a4c99785a36ee->enter($__internal_ab20f002a00fce6ec74047a11736fc620ea897da00992821db5a4c99785a36ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff89ea5b3b52029321c43cbac2c13c6ee82e3aa8fb7ac6715d8eb52fdec8b850->leave($__internal_ff89ea5b3b52029321c43cbac2c13c6ee82e3aa8fb7ac6715d8eb52fdec8b850_prof);

        
        $__internal_ab20f002a00fce6ec74047a11736fc620ea897da00992821db5a4c99785a36ee->leave($__internal_ab20f002a00fce6ec74047a11736fc620ea897da00992821db5a4c99785a36ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82e22f9929e0e524078a38530b91ed56ff48accd2299001a080709970db38787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e22f9929e0e524078a38530b91ed56ff48accd2299001a080709970db38787->enter($__internal_82e22f9929e0e524078a38530b91ed56ff48accd2299001a080709970db38787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8ba3c72f8bf143d49cda67b4a567de22e9c6aab6101d22a2b1a57d57eca1f3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba3c72f8bf143d49cda67b4a567de22e9c6aab6101d22a2b1a57d57eca1f3e8->enter($__internal_8ba3c72f8bf143d49cda67b4a567de22e9c6aab6101d22a2b1a57d57eca1f3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_8ba3c72f8bf143d49cda67b4a567de22e9c6aab6101d22a2b1a57d57eca1f3e8->leave($__internal_8ba3c72f8bf143d49cda67b4a567de22e9c6aab6101d22a2b1a57d57eca1f3e8_prof);

        
        $__internal_82e22f9929e0e524078a38530b91ed56ff48accd2299001a080709970db38787->leave($__internal_82e22f9929e0e524078a38530b91ed56ff48accd2299001a080709970db38787_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/thomas/thomascv/Blog-master/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
