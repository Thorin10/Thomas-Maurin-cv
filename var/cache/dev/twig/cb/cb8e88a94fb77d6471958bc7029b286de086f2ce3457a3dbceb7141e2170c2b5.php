<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_ddaf3b3b46eef1e96b13665beca798356dce6390a3f9ca4b31610bad793320b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f28ad1e3d13e06b7cc373551bb3679b8d47112d942d7a4345335edd96b11ee37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f28ad1e3d13e06b7cc373551bb3679b8d47112d942d7a4345335edd96b11ee37->enter($__internal_f28ad1e3d13e06b7cc373551bb3679b8d47112d942d7a4345335edd96b11ee37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $__internal_2b06f079dbb516c251544eff37556e13558e9b4335d3e50cac30e21f47e2326c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b06f079dbb516c251544eff37556e13558e9b4335d3e50cac30e21f47e2326c->enter($__internal_2b06f079dbb516c251544eff37556e13558e9b4335d3e50cac30e21f47e2326c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f28ad1e3d13e06b7cc373551bb3679b8d47112d942d7a4345335edd96b11ee37->leave($__internal_f28ad1e3d13e06b7cc373551bb3679b8d47112d942d7a4345335edd96b11ee37_prof);

        
        $__internal_2b06f079dbb516c251544eff37556e13558e9b4335d3e50cac30e21f47e2326c->leave($__internal_2b06f079dbb516c251544eff37556e13558e9b4335d3e50cac30e21f47e2326c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
", "SonataAdminBundle:CRUD:history.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history.html.twig");
    }
}
