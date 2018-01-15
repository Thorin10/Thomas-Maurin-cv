<?php

/* SonataAdminBundle:Helper:short-object-description.html.twig */
class __TwigTemplate_7660e43da665dd4b1afad5f0e988511d0c4f35562074f288ee90176b25f989ff extends Twig_Template
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
        $__internal_8a474b4687d57bb3b31dd6909baf03abc9b040a85ac61cba1986e6b9ec7c9c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a474b4687d57bb3b31dd6909baf03abc9b040a85ac61cba1986e6b9ec7c9c50->enter($__internal_8a474b4687d57bb3b31dd6909baf03abc9b040a85ac61cba1986e6b9ec7c9c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:short-object-description.html.twig"));

        $__internal_a15e5a80904dc5d898d10fb35630d1b40f0c595876a4e81e6bbe3f1616334f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15e5a80904dc5d898d10fb35630d1b40f0c595876a4e81e6bbe3f1616334f9a->enter($__internal_a15e5a80904dc5d898d10fb35630d1b40f0c595876a4e81e6bbe3f1616334f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:short-object-description.html.twig"));

        // line 1
        echo "<span class=\"inner-field-short-description\">
    ";
        // line 2
        if (((($context["object"] ?? $this->getContext($context, "object")) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "edit"), "method"))) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object")), 2 => ($context["link_parameters"] ?? $this->getContext($context, "link_parameters"))), "method"), "html", null, true);
            echo "\" target=\"new\">";
            echo twig_escape_filter($this->env, ($context["description"] ?? $this->getContext($context, "description")), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, ($context["description"] ?? $this->getContext($context, "description")), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</span>
";
        
        $__internal_8a474b4687d57bb3b31dd6909baf03abc9b040a85ac61cba1986e6b9ec7c9c50->leave($__internal_8a474b4687d57bb3b31dd6909baf03abc9b040a85ac61cba1986e6b9ec7c9c50_prof);

        
        $__internal_a15e5a80904dc5d898d10fb35630d1b40f0c595876a4e81e6bbe3f1616334f9a->leave($__internal_a15e5a80904dc5d898d10fb35630d1b40f0c595876a4e81e6bbe3f1616334f9a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:short-object-description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  38 => 5,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"inner-field-short-description\">
    {% if object and admin.hasRoute('edit') and admin.hasAccess('edit') %}
        <a href=\"{{ admin.generateObjectUrl('edit', object, link_parameters) }}\" target=\"new\">{{ description }}</a>
    {% else %}
        {{ description }}
    {% endif %}
</span>
", "SonataAdminBundle:Helper:short-object-description.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/Helper/short-object-description.html.twig");
    }
}
