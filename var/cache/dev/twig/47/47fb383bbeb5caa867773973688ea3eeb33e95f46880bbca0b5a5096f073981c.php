<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e1b12b68fb98adf2a56a990ef39356ce51c9bf56cf8aa1faca022ef689d59723 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87028e63b0f1fe321aa8a6c6ebc26bacddede7fde2bf0f290d75e01aaafd08e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87028e63b0f1fe321aa8a6c6ebc26bacddede7fde2bf0f290d75e01aaafd08e4->enter($__internal_87028e63b0f1fe321aa8a6c6ebc26bacddede7fde2bf0f290d75e01aaafd08e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_302de5d6fc37bf66f529f6144538e90d1e7d3b7e96be2cb0ef9c915e837d8edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302de5d6fc37bf66f529f6144538e90d1e7d3b7e96be2cb0ef9c915e837d8edf->enter($__internal_302de5d6fc37bf66f529f6144538e90d1e7d3b7e96be2cb0ef9c915e837d8edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_87028e63b0f1fe321aa8a6c6ebc26bacddede7fde2bf0f290d75e01aaafd08e4->leave($__internal_87028e63b0f1fe321aa8a6c6ebc26bacddede7fde2bf0f290d75e01aaafd08e4_prof);

        
        $__internal_302de5d6fc37bf66f529f6144538e90d1e7d3b7e96be2cb0ef9c915e837d8edf->leave($__internal_302de5d6fc37bf66f529f6144538e90d1e7d3b7e96be2cb0ef9c915e837d8edf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a6fe0785e86cce389d8ff54440197a635bae1ebc44bf8a8d741ab0011662e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6fe0785e86cce389d8ff54440197a635bae1ebc44bf8a8d741ab0011662e03->enter($__internal_2a6fe0785e86cce389d8ff54440197a635bae1ebc44bf8a8d741ab0011662e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cc76b756bf7ea871b3544ec6b3c9e6cffd557661f19763f3d4d60b87bef4ad3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc76b756bf7ea871b3544ec6b3c9e6cffd557661f19763f3d4d60b87bef4ad3e->enter($__internal_cc76b756bf7ea871b3544ec6b3c9e6cffd557661f19763f3d4d60b87bef4ad3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cc76b756bf7ea871b3544ec6b3c9e6cffd557661f19763f3d4d60b87bef4ad3e->leave($__internal_cc76b756bf7ea871b3544ec6b3c9e6cffd557661f19763f3d4d60b87bef4ad3e_prof);

        
        $__internal_2a6fe0785e86cce389d8ff54440197a635bae1ebc44bf8a8d741ab0011662e03->leave($__internal_2a6fe0785e86cce389d8ff54440197a635bae1ebc44bf8a8d741ab0011662e03_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
