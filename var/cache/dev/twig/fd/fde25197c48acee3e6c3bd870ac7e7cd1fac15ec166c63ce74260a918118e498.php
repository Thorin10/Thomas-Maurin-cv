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
        $__internal_ff374d992f28a7efc7ac9e98e69d3ceb38538c6f22c0927e9ee7abc8864a5568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff374d992f28a7efc7ac9e98e69d3ceb38538c6f22c0927e9ee7abc8864a5568->enter($__internal_ff374d992f28a7efc7ac9e98e69d3ceb38538c6f22c0927e9ee7abc8864a5568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_ef00362b9220d338603c79d89960e2249c998bf7bf45ce9812bc2ae49ad1457d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef00362b9220d338603c79d89960e2249c998bf7bf45ce9812bc2ae49ad1457d->enter($__internal_ef00362b9220d338603c79d89960e2249c998bf7bf45ce9812bc2ae49ad1457d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_ff374d992f28a7efc7ac9e98e69d3ceb38538c6f22c0927e9ee7abc8864a5568->leave($__internal_ff374d992f28a7efc7ac9e98e69d3ceb38538c6f22c0927e9ee7abc8864a5568_prof);

        
        $__internal_ef00362b9220d338603c79d89960e2249c998bf7bf45ce9812bc2ae49ad1457d->leave($__internal_ef00362b9220d338603c79d89960e2249c998bf7bf45ce9812bc2ae49ad1457d_prof);

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
", "knp_menu_base.html.twig", "/home/thomas/thomascv/Blog-master/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
