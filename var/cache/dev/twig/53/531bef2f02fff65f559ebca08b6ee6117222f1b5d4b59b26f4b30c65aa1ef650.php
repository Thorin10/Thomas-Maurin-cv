<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_77293600b3161010c331d9eb5a953d4da475f850f126e6b9aaccb36e90058682 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b800e9acd99b08ef03f1a03ebe64e0ad09fa864976441d8add58238e8fcf9fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b800e9acd99b08ef03f1a03ebe64e0ad09fa864976441d8add58238e8fcf9fc->enter($__internal_8b800e9acd99b08ef03f1a03ebe64e0ad09fa864976441d8add58238e8fcf9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        $__internal_63167b7ece6acffb59e436f21db496d0d9ccb4bfbc29c07a19b14969d3ad83ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63167b7ece6acffb59e436f21db496d0d9ccb4bfbc29c07a19b14969d3ad83ce->enter($__internal_63167b7ece6acffb59e436f21db496d0d9ccb4bfbc29c07a19b14969d3ad83ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["revision"] ?? $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_8b800e9acd99b08ef03f1a03ebe64e0ad09fa864976441d8add58238e8fcf9fc->leave($__internal_8b800e9acd99b08ef03f1a03ebe64e0ad09fa864976441d8add58238e8fcf9fc_prof);

        
        $__internal_63167b7ece6acffb59e436f21db496d0d9ccb4bfbc29c07a19b14969d3ad83ce->leave($__internal_63167b7ece6acffb59e436f21db496d0d9ccb4bfbc29c07a19b14969d3ad83ce_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
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

{{ revision.timestamp|date }}
", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history_revision_timestamp.html.twig");
    }
}
