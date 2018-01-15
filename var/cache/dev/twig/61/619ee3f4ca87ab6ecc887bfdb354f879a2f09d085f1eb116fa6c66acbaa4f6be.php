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
        $__internal_f1a9e5123ce53060222aa9946404cf976a6065d446a60b623b3f3d6bc524138d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a9e5123ce53060222aa9946404cf976a6065d446a60b623b3f3d6bc524138d->enter($__internal_f1a9e5123ce53060222aa9946404cf976a6065d446a60b623b3f3d6bc524138d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_450a31b978f3c3cc03f690e2cf5400ecd4ca163ff5dca92c5239db1b46d46897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450a31b978f3c3cc03f690e2cf5400ecd4ca163ff5dca92c5239db1b46d46897->enter($__internal_450a31b978f3c3cc03f690e2cf5400ecd4ca163ff5dca92c5239db1b46d46897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_f1a9e5123ce53060222aa9946404cf976a6065d446a60b623b3f3d6bc524138d->leave($__internal_f1a9e5123ce53060222aa9946404cf976a6065d446a60b623b3f3d6bc524138d_prof);

        
        $__internal_450a31b978f3c3cc03f690e2cf5400ecd4ca163ff5dca92c5239db1b46d46897->leave($__internal_450a31b978f3c3cc03f690e2cf5400ecd4ca163ff5dca92c5239db1b46d46897_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_fbc725778fe30944a98706a02d6e3cd601a0a7b0efd40f616161d5d53933eed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc725778fe30944a98706a02d6e3cd601a0a7b0efd40f616161d5d53933eed3->enter($__internal_fbc725778fe30944a98706a02d6e3cd601a0a7b0efd40f616161d5d53933eed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_690ecc211eb6dee98c123cc7112edbf0b766d7b282124933245580a273219ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690ecc211eb6dee98c123cc7112edbf0b766d7b282124933245580a273219ab9->enter($__internal_690ecc211eb6dee98c123cc7112edbf0b766d7b282124933245580a273219ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_690ecc211eb6dee98c123cc7112edbf0b766d7b282124933245580a273219ab9->leave($__internal_690ecc211eb6dee98c123cc7112edbf0b766d7b282124933245580a273219ab9_prof);

        
        $__internal_fbc725778fe30944a98706a02d6e3cd601a0a7b0efd40f616161d5d53933eed3->leave($__internal_fbc725778fe30944a98706a02d6e3cd601a0a7b0efd40f616161d5d53933eed3_prof);

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
", "SonataBlockBundle:Block:block_base.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
