<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_4a1a9581ec95643dcf6b86ffedee5e94c0d3dae1bd89292a22df8d48389f7147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80b4ae93dc4baa10792f88315d4ce6adc857416e1c6ebb3cf8c593b1ff859ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b4ae93dc4baa10792f88315d4ce6adc857416e1c6ebb3cf8c593b1ff859ba9->enter($__internal_80b4ae93dc4baa10792f88315d4ce6adc857416e1c6ebb3cf8c593b1ff859ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_b698eace29006994d91587d7eebdf7a680c4bc2cf58bb3e015264f903d50f189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b698eace29006994d91587d7eebdf7a680c4bc2cf58bb3e015264f903d50f189->enter($__internal_b698eace29006994d91587d7eebdf7a680c4bc2cf58bb3e015264f903d50f189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80b4ae93dc4baa10792f88315d4ce6adc857416e1c6ebb3cf8c593b1ff859ba9->leave($__internal_80b4ae93dc4baa10792f88315d4ce6adc857416e1c6ebb3cf8c593b1ff859ba9_prof);

        
        $__internal_b698eace29006994d91587d7eebdf7a680c4bc2cf58bb3e015264f903d50f189->leave($__internal_b698eace29006994d91587d7eebdf7a680c4bc2cf58bb3e015264f903d50f189_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b836978f455bbf0bbcc1edabeb96d4753c89d2dc9f829cccafb5fd409f5b6522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b836978f455bbf0bbcc1edabeb96d4753c89d2dc9f829cccafb5fd409f5b6522->enter($__internal_b836978f455bbf0bbcc1edabeb96d4753c89d2dc9f829cccafb5fd409f5b6522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_138d0a849bc336d61f57b86a388184b6f2201532817e3a1f23c9a56f197d6910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138d0a849bc336d61f57b86a388184b6f2201532817e3a1f23c9a56f197d6910->enter($__internal_138d0a849bc336d61f57b86a388184b6f2201532817e3a1f23c9a56f197d6910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_138d0a849bc336d61f57b86a388184b6f2201532817e3a1f23c9a56f197d6910->leave($__internal_138d0a849bc336d61f57b86a388184b6f2201532817e3a1f23c9a56f197d6910_prof);

        
        $__internal_b836978f455bbf0bbcc1edabeb96d4753c89d2dc9f829cccafb5fd409f5b6522->leave($__internal_b836978f455bbf0bbcc1edabeb96d4753c89d2dc9f829cccafb5fd409f5b6522_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
