<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_bf7a4c96578ed7e22e23c5b5f1b90fee793360d3f58cdf5f9d23ebea829479a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffa5bbf82e6ac8e61569a92421e6faf4d9639cbeeaf64258f4d21be8cc7ffc9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa5bbf82e6ac8e61569a92421e6faf4d9639cbeeaf64258f4d21be8cc7ffc9a->enter($__internal_ffa5bbf82e6ac8e61569a92421e6faf4d9639cbeeaf64258f4d21be8cc7ffc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_acbdb2fda74c2575e5b709084ec81ce81ea1c853d8cf4a75c6d417d19012ffe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acbdb2fda74c2575e5b709084ec81ce81ea1c853d8cf4a75c6d417d19012ffe4->enter($__internal_acbdb2fda74c2575e5b709084ec81ce81ea1c853d8cf4a75c6d417d19012ffe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_ffa5bbf82e6ac8e61569a92421e6faf4d9639cbeeaf64258f4d21be8cc7ffc9a->leave($__internal_ffa5bbf82e6ac8e61569a92421e6faf4d9639cbeeaf64258f4d21be8cc7ffc9a_prof);

        
        $__internal_acbdb2fda74c2575e5b709084ec81ce81ea1c853d8cf4a75c6d417d19012ffe4->leave($__internal_acbdb2fda74c2575e5b709084ec81ce81ea1c853d8cf4a75c6d417d19012ffe4_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_0e6d7ed8698056cbd3a9367a8265caa6c8bb51ce9c0d25ede8d02d928e7ee070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e6d7ed8698056cbd3a9367a8265caa6c8bb51ce9c0d25ede8d02d928e7ee070->enter($__internal_0e6d7ed8698056cbd3a9367a8265caa6c8bb51ce9c0d25ede8d02d928e7ee070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_d901a3b755ca3a63bb5a0ae8a1bd9f1b33bed6b9f82c7b92f2b5e96ad19ccfd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d901a3b755ca3a63bb5a0ae8a1bd9f1b33bed6b9f82c7b92f2b5e96ad19ccfd7->enter($__internal_d901a3b755ca3a63bb5a0ae8a1bd9f1b33bed6b9f82c7b92f2b5e96ad19ccfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_d901a3b755ca3a63bb5a0ae8a1bd9f1b33bed6b9f82c7b92f2b5e96ad19ccfd7->leave($__internal_d901a3b755ca3a63bb5a0ae8a1bd9f1b33bed6b9f82c7b92f2b5e96ad19ccfd7_prof);

        
        $__internal_0e6d7ed8698056cbd3a9367a8265caa6c8bb51ce9c0d25ede8d02d928e7ee070->leave($__internal_0e6d7ed8698056cbd3a9367a8265caa6c8bb51ce9c0d25ede8d02d928e7ee070_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 13,  31 => 12,  26 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
