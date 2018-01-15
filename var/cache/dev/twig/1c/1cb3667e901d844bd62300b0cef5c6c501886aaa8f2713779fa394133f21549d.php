<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_03e36b22e5a3a597998aa64b1c31e440cb7acd1be0befa690b988da8732fc2c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c2f610b7c06a88cca0636d1e2d84b706e75764e0551d52c4fdc435f9a9a23e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2f610b7c06a88cca0636d1e2d84b706e75764e0551d52c4fdc435f9a9a23e3->enter($__internal_8c2f610b7c06a88cca0636d1e2d84b706e75764e0551d52c4fdc435f9a9a23e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_8498cb14e29526f58b404354e1e95a9fe94aca8158d3dbbf3bfd40b065189068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8498cb14e29526f58b404354e1e95a9fe94aca8158d3dbbf3bfd40b065189068->enter($__internal_8498cb14e29526f58b404354e1e95a9fe94aca8158d3dbbf3bfd40b065189068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_8c2f610b7c06a88cca0636d1e2d84b706e75764e0551d52c4fdc435f9a9a23e3->leave($__internal_8c2f610b7c06a88cca0636d1e2d84b706e75764e0551d52c4fdc435f9a9a23e3_prof);

        
        $__internal_8498cb14e29526f58b404354e1e95a9fe94aca8158d3dbbf3bfd40b065189068->leave($__internal_8498cb14e29526f58b404354e1e95a9fe94aca8158d3dbbf3bfd40b065189068_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/thomas/thomascv/cv/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
