<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_252636b69ce712bb0e2d7e7e05cb4d4e03f072090b73e3cc293c9c9530244efa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_530222f7bdf9da21b8fcb0bf7776b7ced717657a4610932fca8838ef1366153d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530222f7bdf9da21b8fcb0bf7776b7ced717657a4610932fca8838ef1366153d->enter($__internal_530222f7bdf9da21b8fcb0bf7776b7ced717657a4610932fca8838ef1366153d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_b27e8c315d989e02ac040133253e7028090343aebdd749765a26d46d19e76f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27e8c315d989e02ac040133253e7028090343aebdd749765a26d46d19e76f0d->enter($__internal_b27e8c315d989e02ac040133253e7028090343aebdd749765a26d46d19e76f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_530222f7bdf9da21b8fcb0bf7776b7ced717657a4610932fca8838ef1366153d->leave($__internal_530222f7bdf9da21b8fcb0bf7776b7ced717657a4610932fca8838ef1366153d_prof);

        
        $__internal_b27e8c315d989e02ac040133253e7028090343aebdd749765a26d46d19e76f0d->leave($__internal_b27e8c315d989e02ac040133253e7028090343aebdd749765a26d46d19e76f0d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c36b645f384cd046f9df0630ea49795b3ce367c1787763eb936aa3a77a890fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c36b645f384cd046f9df0630ea49795b3ce367c1787763eb936aa3a77a890fae->enter($__internal_c36b645f384cd046f9df0630ea49795b3ce367c1787763eb936aa3a77a890fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8ab346b2f44cbd2bba9f6a95938058f429f05ddfc06e862eb86967c98234646c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab346b2f44cbd2bba9f6a95938058f429f05ddfc06e862eb86967c98234646c->enter($__internal_8ab346b2f44cbd2bba9f6a95938058f429f05ddfc06e862eb86967c98234646c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8ab346b2f44cbd2bba9f6a95938058f429f05ddfc06e862eb86967c98234646c->leave($__internal_8ab346b2f44cbd2bba9f6a95938058f429f05ddfc06e862eb86967c98234646c_prof);

        
        $__internal_c36b645f384cd046f9df0630ea49795b3ce367c1787763eb936aa3a77a890fae->leave($__internal_c36b645f384cd046f9df0630ea49795b3ce367c1787763eb936aa3a77a890fae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/thomas/thomascv/cv/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
