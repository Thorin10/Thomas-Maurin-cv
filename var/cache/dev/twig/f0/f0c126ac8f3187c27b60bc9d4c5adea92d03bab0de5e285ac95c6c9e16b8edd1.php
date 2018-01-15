<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_252636b69ce712bb0e2d7e7e05cb4d4e03f072090b73e3cc293c9c9530244efa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_96feb784fd36c08355a292f8825f4d29b789f9f9fd124204e0a7ad7a0cc9188e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96feb784fd36c08355a292f8825f4d29b789f9f9fd124204e0a7ad7a0cc9188e->enter($__internal_96feb784fd36c08355a292f8825f4d29b789f9f9fd124204e0a7ad7a0cc9188e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_87be1fc6b1daf40a374f8f165ee9ddcd2df24878abdc1593593d4e8909d341dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87be1fc6b1daf40a374f8f165ee9ddcd2df24878abdc1593593d4e8909d341dd->enter($__internal_87be1fc6b1daf40a374f8f165ee9ddcd2df24878abdc1593593d4e8909d341dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96feb784fd36c08355a292f8825f4d29b789f9f9fd124204e0a7ad7a0cc9188e->leave($__internal_96feb784fd36c08355a292f8825f4d29b789f9f9fd124204e0a7ad7a0cc9188e_prof);

        
        $__internal_87be1fc6b1daf40a374f8f165ee9ddcd2df24878abdc1593593d4e8909d341dd->leave($__internal_87be1fc6b1daf40a374f8f165ee9ddcd2df24878abdc1593593d4e8909d341dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f5159c5648a53393e9dc439b3cf5550f397b45b839f9f9fdc4c199d9901bbf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f5159c5648a53393e9dc439b3cf5550f397b45b839f9f9fdc4c199d9901bbf2->enter($__internal_8f5159c5648a53393e9dc439b3cf5550f397b45b839f9f9fdc4c199d9901bbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5bf70a3d1ac85eb0896ba7102dbb86a34cd696cdd5773b6ccc68da4915316813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf70a3d1ac85eb0896ba7102dbb86a34cd696cdd5773b6ccc68da4915316813->enter($__internal_5bf70a3d1ac85eb0896ba7102dbb86a34cd696cdd5773b6ccc68da4915316813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_5bf70a3d1ac85eb0896ba7102dbb86a34cd696cdd5773b6ccc68da4915316813->leave($__internal_5bf70a3d1ac85eb0896ba7102dbb86a34cd696cdd5773b6ccc68da4915316813_prof);

        
        $__internal_8f5159c5648a53393e9dc439b3cf5550f397b45b839f9f9fdc4c199d9901bbf2->leave($__internal_8f5159c5648a53393e9dc439b3cf5550f397b45b839f9f9fdc4c199d9901bbf2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "/home/thomas/thomascv/Blog-master/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
