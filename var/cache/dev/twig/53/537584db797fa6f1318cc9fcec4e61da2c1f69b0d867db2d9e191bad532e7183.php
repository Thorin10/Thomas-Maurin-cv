<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_831a6ebcfe9b4ec16b1eb2dcbe5bb6bf566ecafabd936337c9e13a587362b7cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28912823352b376cfe261e792535e99c4a4109cded1d231b09791b1b19bcb6fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28912823352b376cfe261e792535e99c4a4109cded1d231b09791b1b19bcb6fc->enter($__internal_28912823352b376cfe261e792535e99c4a4109cded1d231b09791b1b19bcb6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $__internal_59787e806ded02f11bf5873455ed50f9fe7472a9a74f1382a0ba120b76194062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59787e806ded02f11bf5873455ed50f9fe7472a9a74f1382a0ba120b76194062->enter($__internal_59787e806ded02f11bf5873455ed50f9fe7472a9a74f1382a0ba120b76194062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28912823352b376cfe261e792535e99c4a4109cded1d231b09791b1b19bcb6fc->leave($__internal_28912823352b376cfe261e792535e99c4a4109cded1d231b09791b1b19bcb6fc_prof);

        
        $__internal_59787e806ded02f11bf5873455ed50f9fe7472a9a74f1382a0ba120b76194062->leave($__internal_59787e806ded02f11bf5873455ed50f9fe7472a9a74f1382a0ba120b76194062_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_2c0ec80940e94d4d87cfb32f5b1e0112322bab07caa7d83b5dae8ff939b7f0af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c0ec80940e94d4d87cfb32f5b1e0112322bab07caa7d83b5dae8ff939b7f0af->enter($__internal_2c0ec80940e94d4d87cfb32f5b1e0112322bab07caa7d83b5dae8ff939b7f0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_6119ad5c1560d5b9831d592c6727e07c3f6366426ec060b944afd41f9eb540ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6119ad5c1560d5b9831d592c6727e07c3f6366426ec060b944afd41f9eb540ae->enter($__internal_6119ad5c1560d5b9831d592c6727e07c3f6366426ec060b944afd41f9eb540ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(($context["menu"] ?? $this->getContext($context, "menu")), ($context["menu_options"] ?? $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_6119ad5c1560d5b9831d592c6727e07c3f6366426ec060b944afd41f9eb540ae->leave($__internal_6119ad5c1560d5b9831d592c6727e07c3f6366426ec060b944afd41f9eb540ae_prof);

        
        $__internal_2c0ec80940e94d4d87cfb32f5b1e0112322bab07caa7d83b5dae8ff939b7f0af->leave($__internal_2c0ec80940e94d4d87cfb32f5b1e0112322bab07caa7d83b5dae8ff939b7f0af_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
