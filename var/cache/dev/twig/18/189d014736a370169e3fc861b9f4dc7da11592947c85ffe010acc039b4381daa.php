<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_db19531ea02d7757f16872137b074d406b486474fb80df805ee8409b95225a2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a49855677417e640320b350a03cd7e08f7384929744bb09fed4c377ed485155e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49855677417e640320b350a03cd7e08f7384929744bb09fed4c377ed485155e->enter($__internal_a49855677417e640320b350a03cd7e08f7384929744bb09fed4c377ed485155e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $__internal_5713d1b68b503916f6f48ed0eac7dfb5c2def6ff30106c0ed0b61ea64ef5ff63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5713d1b68b503916f6f48ed0eac7dfb5c2def6ff30106c0ed0b61ea64ef5ff63->enter($__internal_5713d1b68b503916f6f48ed0eac7dfb5c2def6ff30106c0ed0b61ea64ef5ff63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a49855677417e640320b350a03cd7e08f7384929744bb09fed4c377ed485155e->leave($__internal_a49855677417e640320b350a03cd7e08f7384929744bb09fed4c377ed485155e_prof);

        
        $__internal_5713d1b68b503916f6f48ed0eac7dfb5c2def6ff30106c0ed0b61ea64ef5ff63->leave($__internal_5713d1b68b503916f6f48ed0eac7dfb5c2def6ff30106c0ed0b61ea64ef5ff63_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "SonataAdminBundle:Pager:results.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
