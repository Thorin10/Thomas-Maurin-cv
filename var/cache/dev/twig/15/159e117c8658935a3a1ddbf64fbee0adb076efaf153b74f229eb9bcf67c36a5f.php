<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_0330b7683b45bcc080e682a95fc3c8607dceccae76005af8db778c6a2a68ca98 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37d7a6d002b6b6f51d6b99877646619f38c893786d13a2664546072e744d4884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d7a6d002b6b6f51d6b99877646619f38c893786d13a2664546072e744d4884->enter($__internal_37d7a6d002b6b6f51d6b99877646619f38c893786d13a2664546072e744d4884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $__internal_0776789d345a964ff48be97bfe07ab070f336e84bcdba1e8c6cee949bf45b98a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0776789d345a964ff48be97bfe07ab070f336e84bcdba1e8c6cee949bf45b98a->enter($__internal_0776789d345a964ff48be97bfe07ab070f336e84bcdba1e8c6cee949bf45b98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37d7a6d002b6b6f51d6b99877646619f38c893786d13a2664546072e744d4884->leave($__internal_37d7a6d002b6b6f51d6b99877646619f38c893786d13a2664546072e744d4884_prof);

        
        $__internal_0776789d345a964ff48be97bfe07ab070f336e84bcdba1e8c6cee949bf45b98a->leave($__internal_0776789d345a964ff48be97bfe07ab070f336e84bcdba1e8c6cee949bf45b98a_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_25ddb1eeac780dd9db0f28bb8d590606fc626c2192ebaf501a33c5fa8a047f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ddb1eeac780dd9db0f28bb8d590606fc626c2192ebaf501a33c5fa8a047f01->enter($__internal_25ddb1eeac780dd9db0f28bb8d590606fc626c2192ebaf501a33c5fa8a047f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_0a448a15e538b4cf2f265eaf6bc7627b4f289c18b0fe271af02ad80137863392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a448a15e538b4cf2f265eaf6bc7627b4f289c18b0fe271af02ad80137863392->enter($__internal_0a448a15e538b4cf2f265eaf6bc7627b4f289c18b0fe271af02ad80137863392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo ($context["content"] ?? $this->getContext($context, "content"));
        echo "
";
        
        $__internal_0a448a15e538b4cf2f265eaf6bc7627b4f289c18b0fe271af02ad80137863392->leave($__internal_0a448a15e538b4cf2f265eaf6bc7627b4f289c18b0fe271af02ad80137863392_prof);

        
        $__internal_25ddb1eeac780dd9db0f28bb8d590606fc626c2192ebaf501a33c5fa8a047f01->leave($__internal_25ddb1eeac780dd9db0f28bb8d590606fc626c2192ebaf501a33c5fa8a047f01_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
