<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_f135c28e9961c4f8531c57cb832d3ed58dfde9050f84e828c1fce839f32afd98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_329d23356ba1bb0cbff065f2e016b5f72bc9db4adec850357f0711bc6e89f59e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_329d23356ba1bb0cbff065f2e016b5f72bc9db4adec850357f0711bc6e89f59e->enter($__internal_329d23356ba1bb0cbff065f2e016b5f72bc9db4adec850357f0711bc6e89f59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $__internal_b71ab2154c2dbcd0d3ab4a24a927c3c599c49f597b35fa7636c72a1ff0dfacb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71ab2154c2dbcd0d3ab4a24a927c3c599c49f597b35fa7636c72a1ff0dfacb4->enter($__internal_b71ab2154c2dbcd0d3ab4a24a927c3c599c49f597b35fa7636c72a1ff0dfacb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_329d23356ba1bb0cbff065f2e016b5f72bc9db4adec850357f0711bc6e89f59e->leave($__internal_329d23356ba1bb0cbff065f2e016b5f72bc9db4adec850357f0711bc6e89f59e_prof);

        
        $__internal_b71ab2154c2dbcd0d3ab4a24a927c3c599c49f597b35fa7636c72a1ff0dfacb4->leave($__internal_b71ab2154c2dbcd0d3ab4a24a927c3c599c49f597b35fa7636c72a1ff0dfacb4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
