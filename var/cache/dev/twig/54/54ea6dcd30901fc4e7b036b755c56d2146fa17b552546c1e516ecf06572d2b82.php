<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_aa1bf0174a46fb5d4d7abd5ac32649dab9c80ba9474618f62e74eef40091f467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_f1fea23395c64b50a27674d116d6499ed4abb3886dae3cba953a073c6521ddb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1fea23395c64b50a27674d116d6499ed4abb3886dae3cba953a073c6521ddb6->enter($__internal_f1fea23395c64b50a27674d116d6499ed4abb3886dae3cba953a073c6521ddb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_6785b9f3f60f2696629724406bbfd0a560d9f295d00349c86199b93043eac4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6785b9f3f60f2696629724406bbfd0a560d9f295d00349c86199b93043eac4a9->enter($__internal_6785b9f3f60f2696629724406bbfd0a560d9f295d00349c86199b93043eac4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1fea23395c64b50a27674d116d6499ed4abb3886dae3cba953a073c6521ddb6->leave($__internal_f1fea23395c64b50a27674d116d6499ed4abb3886dae3cba953a073c6521ddb6_prof);

        
        $__internal_6785b9f3f60f2696629724406bbfd0a560d9f295d00349c86199b93043eac4a9->leave($__internal_6785b9f3f60f2696629724406bbfd0a560d9f295d00349c86199b93043eac4a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58d4d1da17b13651a6c6c7564af38ef423db51547e5c63189938c4a56c39bd15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d4d1da17b13651a6c6c7564af38ef423db51547e5c63189938c4a56c39bd15->enter($__internal_58d4d1da17b13651a6c6c7564af38ef423db51547e5c63189938c4a56c39bd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_71ff6c8135e0d3f221321bcfb205f7d9da40d59335a15a0ff3c596d98665776f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ff6c8135e0d3f221321bcfb205f7d9da40d59335a15a0ff3c596d98665776f->enter($__internal_71ff6c8135e0d3f221321bcfb205f7d9da40d59335a15a0ff3c596d98665776f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_71ff6c8135e0d3f221321bcfb205f7d9da40d59335a15a0ff3c596d98665776f->leave($__internal_71ff6c8135e0d3f221321bcfb205f7d9da40d59335a15a0ff3c596d98665776f_prof);

        
        $__internal_58d4d1da17b13651a6c6c7564af38ef423db51547e5c63189938c4a56c39bd15->leave($__internal_58d4d1da17b13651a6c6c7564af38ef423db51547e5c63189938c4a56c39bd15_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
{% endblock fos_user_content %}", "FOSUserBundle:Security:login.html.twig", "/home/thomas/thomascv/cv/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
