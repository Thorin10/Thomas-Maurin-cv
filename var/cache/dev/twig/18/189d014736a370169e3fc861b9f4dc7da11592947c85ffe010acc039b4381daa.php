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
        $__internal_9d33211148a6eb95730bea09adbe30b2723bbebf1c9405a32556071b10396876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d33211148a6eb95730bea09adbe30b2723bbebf1c9405a32556071b10396876->enter($__internal_9d33211148a6eb95730bea09adbe30b2723bbebf1c9405a32556071b10396876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $__internal_9935a923317eaef950bf5cb75876e76027c70538b6d787286bd6a86d02022ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9935a923317eaef950bf5cb75876e76027c70538b6d787286bd6a86d02022ebd->enter($__internal_9935a923317eaef950bf5cb75876e76027c70538b6d787286bd6a86d02022ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d33211148a6eb95730bea09adbe30b2723bbebf1c9405a32556071b10396876->leave($__internal_9d33211148a6eb95730bea09adbe30b2723bbebf1c9405a32556071b10396876_prof);

        
        $__internal_9935a923317eaef950bf5cb75876e76027c70538b6d787286bd6a86d02022ebd->leave($__internal_9935a923317eaef950bf5cb75876e76027c70538b6d787286bd6a86d02022ebd_prof);

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
", "SonataAdminBundle:Pager:results.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
