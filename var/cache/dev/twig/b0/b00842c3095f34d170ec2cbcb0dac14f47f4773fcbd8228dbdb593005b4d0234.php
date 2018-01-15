<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_013b34a84beca15c54b8d1d39f1a254a4d70f80930c2d8dfc8032b8b1c6bdb0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_36f563d08116d756eb0f8c20e87b33e4c068b5c644743682f813d6dbe03e7bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f563d08116d756eb0f8c20e87b33e4c068b5c644743682f813d6dbe03e7bc4->enter($__internal_36f563d08116d756eb0f8c20e87b33e4c068b5c644743682f813d6dbe03e7bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_831c366b9774eaec546335d9f32ef72ff60c75807747c782c70929d7cca1a9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831c366b9774eaec546335d9f32ef72ff60c75807747c782c70929d7cca1a9b6->enter($__internal_831c366b9774eaec546335d9f32ef72ff60c75807747c782c70929d7cca1a9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36f563d08116d756eb0f8c20e87b33e4c068b5c644743682f813d6dbe03e7bc4->leave($__internal_36f563d08116d756eb0f8c20e87b33e4c068b5c644743682f813d6dbe03e7bc4_prof);

        
        $__internal_831c366b9774eaec546335d9f32ef72ff60c75807747c782c70929d7cca1a9b6->leave($__internal_831c366b9774eaec546335d9f32ef72ff60c75807747c782c70929d7cca1a9b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd4059cd0cb3087e7b6d0e7d00b0c9941e895300c143bd0e5d9f5e8fdb0ffc9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4059cd0cb3087e7b6d0e7d00b0c9941e895300c143bd0e5d9f5e8fdb0ffc9a->enter($__internal_cd4059cd0cb3087e7b6d0e7d00b0c9941e895300c143bd0e5d9f5e8fdb0ffc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_60c4cac34afd6d1c4d915a2c1f08b993c213049f90f8b8306a73048a5f620a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c4cac34afd6d1c4d915a2c1f08b993c213049f90f8b8306a73048a5f620a63->enter($__internal_60c4cac34afd6d1c4d915a2c1f08b993c213049f90f8b8306a73048a5f620a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_60c4cac34afd6d1c4d915a2c1f08b993c213049f90f8b8306a73048a5f620a63->leave($__internal_60c4cac34afd6d1c4d915a2c1f08b993c213049f90f8b8306a73048a5f620a63_prof);

        
        $__internal_cd4059cd0cb3087e7b6d0e7d00b0c9941e895300c143bd0e5d9f5e8fdb0ffc9a->leave($__internal_cd4059cd0cb3087e7b6d0e7d00b0c9941e895300c143bd0e5d9f5e8fdb0ffc9a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/thomas/thomascv/cv/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
