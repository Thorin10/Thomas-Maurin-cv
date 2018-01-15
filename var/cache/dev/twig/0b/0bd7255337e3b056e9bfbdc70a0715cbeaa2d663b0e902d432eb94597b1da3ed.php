<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_8d6ced184f81a7e2423cb68fcafb47ec8164e276640e796b22f1df503934cb6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_636c65b89722dc4ae51493723a803243c9c2a92f1f3dc460b5714884a2f4feaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636c65b89722dc4ae51493723a803243c9c2a92f1f3dc460b5714884a2f4feaf->enter($__internal_636c65b89722dc4ae51493723a803243c9c2a92f1f3dc460b5714884a2f4feaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_353ecfaf17c24d37a5d104e761090adce6afe1f565cfd466f9b194c9f3f1581b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353ecfaf17c24d37a5d104e761090adce6afe1f565cfd466f9b194c9f3f1581b->enter($__internal_353ecfaf17c24d37a5d104e761090adce6afe1f565cfd466f9b194c9f3f1581b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_636c65b89722dc4ae51493723a803243c9c2a92f1f3dc460b5714884a2f4feaf->leave($__internal_636c65b89722dc4ae51493723a803243c9c2a92f1f3dc460b5714884a2f4feaf_prof);

        
        $__internal_353ecfaf17c24d37a5d104e761090adce6afe1f565cfd466f9b194c9f3f1581b->leave($__internal_353ecfaf17c24d37a5d104e761090adce6afe1f565cfd466f9b194c9f3f1581b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a1e596d17212fdbbab09c622a4a0902506ce73dc7a3d7da7e711baee49a47c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1e596d17212fdbbab09c622a4a0902506ce73dc7a3d7da7e711baee49a47c0->enter($__internal_5a1e596d17212fdbbab09c622a4a0902506ce73dc7a3d7da7e711baee49a47c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3a27097fc350aff8871fedf9cc03a2c04163a26e8a3579d96ab5379f78902ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a27097fc350aff8871fedf9cc03a2c04163a26e8a3579d96ab5379f78902ba4->enter($__internal_3a27097fc350aff8871fedf9cc03a2c04163a26e8a3579d96ab5379f78902ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_3a27097fc350aff8871fedf9cc03a2c04163a26e8a3579d96ab5379f78902ba4->leave($__internal_3a27097fc350aff8871fedf9cc03a2c04163a26e8a3579d96ab5379f78902ba4_prof);

        
        $__internal_5a1e596d17212fdbbab09c622a4a0902506ce73dc7a3d7da7e711baee49a47c0->leave($__internal_5a1e596d17212fdbbab09c622a4a0902506ce73dc7a3d7da7e711baee49a47c0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/thomas/thomascv/cv/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
