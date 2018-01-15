<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_07ea5ec5fbee3ce6fa7c989ebde69ae472ffc52549b9134e1b5339cd18faf49c extends Twig_Template
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
        $__internal_6f784b8d0414f96d797d5986e2cdd0999adf9f558ccc2d99b4a2e240a0aca573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f784b8d0414f96d797d5986e2cdd0999adf9f558ccc2d99b4a2e240a0aca573->enter($__internal_6f784b8d0414f96d797d5986e2cdd0999adf9f558ccc2d99b4a2e240a0aca573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_4c1de4c9392b9534e82756af982597ddd097470f648f72856effd05aadd3d687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1de4c9392b9534e82756af982597ddd097470f648f72856effd05aadd3d687->enter($__internal_4c1de4c9392b9534e82756af982597ddd097470f648f72856effd05aadd3d687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_6f784b8d0414f96d797d5986e2cdd0999adf9f558ccc2d99b4a2e240a0aca573->leave($__internal_6f784b8d0414f96d797d5986e2cdd0999adf9f558ccc2d99b4a2e240a0aca573_prof);

        
        $__internal_4c1de4c9392b9534e82756af982597ddd097470f648f72856effd05aadd3d687->leave($__internal_4c1de4c9392b9534e82756af982597ddd097470f648f72856effd05aadd3d687_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/home/thomas/thomascv/cv/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
