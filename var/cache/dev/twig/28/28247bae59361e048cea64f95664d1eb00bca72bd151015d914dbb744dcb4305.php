<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_8854fa5e037fe677ffdeacb8128d158ec96ebc5425604fd26951343ce66c88e2 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f3a6e877a533148bb687d933b21f56d1f561d3cb0277d82e034c9faf308223c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f3a6e877a533148bb687d933b21f56d1f561d3cb0277d82e034c9faf308223c->enter($__internal_8f3a6e877a533148bb687d933b21f56d1f561d3cb0277d82e034c9faf308223c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $__internal_568665d17cdc6f46c59e79865dc4c16c636e09a31ff4d71245e2cd88892f4cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568665d17cdc6f46c59e79865dc4c16c636e09a31ff4d71245e2cd88892f4cbc->enter($__internal_568665d17cdc6f46c59e79865dc4c16c636e09a31ff4d71245e2cd88892f4cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f3a6e877a533148bb687d933b21f56d1f561d3cb0277d82e034c9faf308223c->leave($__internal_8f3a6e877a533148bb687d933b21f56d1f561d3cb0277d82e034c9faf308223c_prof);

        
        $__internal_568665d17cdc6f46c59e79865dc4c16c636e09a31ff4d71245e2cd88892f4cbc->leave($__internal_568665d17cdc6f46c59e79865dc4c16c636e09a31ff4d71245e2cd88892f4cbc_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_4d2a3ca6f1e949c6a11bc2a5769da17b88aeecf500f57af2f358ccce87aa7227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2a3ca6f1e949c6a11bc2a5769da17b88aeecf500f57af2f358ccce87aa7227->enter($__internal_4d2a3ca6f1e949c6a11bc2a5769da17b88aeecf500f57af2f358ccce87aa7227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_e9905a006fb5a55025efe16335f487236a301c1eaff9b4980d91924f98604dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9905a006fb5a55025efe16335f487236a301c1eaff9b4980d91924f98604dec->enter($__internal_e9905a006fb5a55025efe16335f487236a301c1eaff9b4980d91924f98604dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_e9905a006fb5a55025efe16335f487236a301c1eaff9b4980d91924f98604dec->leave($__internal_e9905a006fb5a55025efe16335f487236a301c1eaff9b4980d91924f98604dec_prof);

        
        $__internal_4d2a3ca6f1e949c6a11bc2a5769da17b88aeecf500f57af2f358ccce87aa7227->leave($__internal_4d2a3ca6f1e949c6a11bc2a5769da17b88aeecf500f57af2f358ccce87aa7227_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception.html.twig");
    }
}
