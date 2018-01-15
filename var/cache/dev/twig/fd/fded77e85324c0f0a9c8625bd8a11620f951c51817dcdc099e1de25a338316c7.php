<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_bc99aed10e2393934e510aee4d62451e929dff648f8772b97d714b89dde77613 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a896d6e1b75c25e4c9a8604a97a9d95d57bc73c45de1a06c316a0deb00095e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a896d6e1b75c25e4c9a8604a97a9d95d57bc73c45de1a06c316a0deb00095e3a->enter($__internal_a896d6e1b75c25e4c9a8604a97a9d95d57bc73c45de1a06c316a0deb00095e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $__internal_62aef47a351a55ce34bc95228921d2b159e7873c1fc2e0935217290e1df1657e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62aef47a351a55ce34bc95228921d2b159e7873c1fc2e0935217290e1df1657e->enter($__internal_62aef47a351a55ce34bc95228921d2b159e7873c1fc2e0935217290e1df1657e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a896d6e1b75c25e4c9a8604a97a9d95d57bc73c45de1a06c316a0deb00095e3a->leave($__internal_a896d6e1b75c25e4c9a8604a97a9d95d57bc73c45de1a06c316a0deb00095e3a_prof);

        
        $__internal_62aef47a351a55ce34bc95228921d2b159e7873c1fc2e0935217290e1df1657e->leave($__internal_62aef47a351a55ce34bc95228921d2b159e7873c1fc2e0935217290e1df1657e_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_7c0086d477b35c4cb4a8e1ac5789ca23e74f4cedcfda4774b2714a291907b5e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0086d477b35c4cb4a8e1ac5789ca23e74f4cedcfda4774b2714a291907b5e9->enter($__internal_7c0086d477b35c4cb4a8e1ac5789ca23e74f4cedcfda4774b2714a291907b5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_442371127042844a4f8d9fbaf44877d96f5b84d9e5145d91e6410343b02d93cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442371127042844a4f8d9fbaf44877d96f5b84d9e5145d91e6410343b02d93cc->enter($__internal_442371127042844a4f8d9fbaf44877d96f5b84d9e5145d91e6410343b02d93cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_442371127042844a4f8d9fbaf44877d96f5b84d9e5145d91e6410343b02d93cc->leave($__internal_442371127042844a4f8d9fbaf44877d96f5b84d9e5145d91e6410343b02d93cc_prof);

        
        $__internal_7c0086d477b35c4cb4a8e1ac5789ca23e74f4cedcfda4774b2714a291907b5e9->leave($__internal_7c0086d477b35c4cb4a8e1ac5789ca23e74f4cedcfda4774b2714a291907b5e9_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
