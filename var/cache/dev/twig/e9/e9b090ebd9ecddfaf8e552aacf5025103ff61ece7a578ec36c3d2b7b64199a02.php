<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_2ea65f7051d5b1bd623edf527947dd143f781f6db98485001ef66371bed566a6 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97a7c3b2427a14d8ecac3ee6038189b6ac7c0da9d130caf08430c4ff87357ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a7c3b2427a14d8ecac3ee6038189b6ac7c0da9d130caf08430c4ff87357ebc->enter($__internal_97a7c3b2427a14d8ecac3ee6038189b6ac7c0da9d130caf08430c4ff87357ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $__internal_00ba5d353666f187598f62f918cc635c52fa19ff0c79b5df9042fd2a9c715f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ba5d353666f187598f62f918cc635c52fa19ff0c79b5df9042fd2a9c715f67->enter($__internal_00ba5d353666f187598f62f918cc635c52fa19ff0c79b5df9042fd2a9c715f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a7c3b2427a14d8ecac3ee6038189b6ac7c0da9d130caf08430c4ff87357ebc->leave($__internal_97a7c3b2427a14d8ecac3ee6038189b6ac7c0da9d130caf08430c4ff87357ebc_prof);

        
        $__internal_00ba5d353666f187598f62f918cc635c52fa19ff0c79b5df9042fd2a9c715f67->leave($__internal_00ba5d353666f187598f62f918cc635c52fa19ff0c79b5df9042fd2a9c715f67_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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

{% extends base_template %}
", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_sonata_type_immutable_array.html.twig");
    }
}
