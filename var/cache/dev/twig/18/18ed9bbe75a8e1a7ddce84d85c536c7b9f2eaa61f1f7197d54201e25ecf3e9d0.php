<?php

/* SonataAdminBundle:Block:block_rss_dashboard.html.twig */
class __TwigTemplate_8bd2f63929f9835de5b59aef1f8b6d636b04831d0d21ef3c4889acec46432885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_core_rss.html.twig", "SonataAdminBundle:Block:block_rss_dashboard.html.twig", 12);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5827d63c580f7242c4beea8503d61034b7ea106b18c2b64c85b180b26bb57947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5827d63c580f7242c4beea8503d61034b7ea106b18c2b64c85b180b26bb57947->enter($__internal_5827d63c580f7242c4beea8503d61034b7ea106b18c2b64c85b180b26bb57947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $__internal_f1a31b30872b08f31a9c35e192f76c297686a7f9bbf13a3df918d9d46c33eb20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a31b30872b08f31a9c35e192f76c297686a7f9bbf13a3df918d9d46c33eb20->enter($__internal_f1a31b30872b08f31a9c35e192f76c297686a7f9bbf13a3df918d9d46c33eb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5827d63c580f7242c4beea8503d61034b7ea106b18c2b64c85b180b26bb57947->leave($__internal_5827d63c580f7242c4beea8503d61034b7ea106b18c2b64c85b180b26bb57947_prof);

        
        $__internal_f1a31b30872b08f31a9c35e192f76c297686a7f9bbf13a3df918d9d46c33eb20->leave($__internal_f1a31b30872b08f31a9c35e192f76c297686a7f9bbf13a3df918d9d46c33eb20_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_6ae39b6456b4bb333aac65ae985583ee620948859f78fa5537ff3e4e5790df57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae39b6456b4bb333aac65ae985583ee620948859f78fa5537ff3e4e5790df57->enter($__internal_6ae39b6456b4bb333aac65ae985583ee620948859f78fa5537ff3e4e5790df57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_e49e9a815d1c8471e94ed56df0f1edfe11742f02bb587ab058902c59c8e2a454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49e9a815d1c8471e94ed56df0f1edfe11742f02bb587ab058902c59c8e2a454->enter($__internal_e49e9a815d1c8471e94ed56df0f1edfe11742f02bb587ab058902c59c8e2a454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["feeds"] ?? $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 22
            echo "                <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "\">
                    <strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</strong>
                    <div>";
            // line 24
            echo $this->getAttribute($context["feed"], "description", array());
            echo "</div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "                <div class=\"list-group-item\">No feeds available.</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
";
        
        $__internal_e49e9a815d1c8471e94ed56df0f1edfe11742f02bb587ab058902c59c8e2a454->leave($__internal_e49e9a815d1c8471e94ed56df0f1edfe11742f02bb587ab058902c59c8e2a454_prof);

        
        $__internal_6ae39b6456b4bb333aac65ae985583ee620948859f78fa5537ff3e4e5790df57->leave($__internal_6ae39b6456b4bb333aac65ae985583ee620948859f78fa5537ff3e4e5790df57_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_rss_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  84 => 27,  76 => 24,  72 => 23,  65 => 22,  60 => 21,  53 => 17,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends \"SonataBlockBundle:Block:block_core_rss.html.twig\" %}

{% block block %}
    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> {{ settings.title }}</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            {% for feed in feeds %}
                <a class=\"list-group-item\" href=\"{{ feed.link}}\" rel=\"nofollow\" title=\"{{ feed.title }}\">
                    <strong>{{ feed.title }}</strong>
                    <div>{{ feed.description|raw }}</div>
                </a>
            {% else %}
                <div class=\"list-group-item\">No feeds available.</div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:Block:block_rss_dashboard.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/Block/block_rss_dashboard.html.twig");
    }
}