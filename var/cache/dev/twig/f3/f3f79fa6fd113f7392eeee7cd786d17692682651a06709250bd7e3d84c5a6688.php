<?php

/* SonataAdminBundle:CRUD:list__action.html.twig */
class __TwigTemplate_83cfc90d4bb6dfcfa73c17c255d6fa7b37324929c862d041611929bd3c9336f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85b52af4eaf26732245a774663cebcece1bacfaf170fb36261951e1e01f990cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85b52af4eaf26732245a774663cebcece1bacfaf170fb36261951e1e01f990cc->enter($__internal_85b52af4eaf26732245a774663cebcece1bacfaf170fb36261951e1e01f990cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $__internal_b98e00087024c1f1a19e68ea9b4ed4645e896693875728f85c2ab6e7552dbafa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98e00087024c1f1a19e68ea9b4ed4645e896693875728f85c2ab6e7552dbafa->enter($__internal_b98e00087024c1f1a19e68ea9b4ed4645e896693875728f85c2ab6e7552dbafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85b52af4eaf26732245a774663cebcece1bacfaf170fb36261951e1e01f990cc->leave($__internal_85b52af4eaf26732245a774663cebcece1bacfaf170fb36261951e1e01f990cc_prof);

        
        $__internal_b98e00087024c1f1a19e68ea9b4ed4645e896693875728f85c2ab6e7552dbafa->leave($__internal_b98e00087024c1f1a19e68ea9b4ed4645e896693875728f85c2ab6e7552dbafa_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5b6589bead100d509053b23321bbfc324ba2fa565519564a85d52fd48b675e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6589bead100d509053b23321bbfc324ba2fa565519564a85d52fd48b675e3e->enter($__internal_5b6589bead100d509053b23321bbfc324ba2fa565519564a85d52fd48b675e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d3047d04f73153cd7377e8223c78d9bfd0c3b0d2ea691dfab44ab99212cc295c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3047d04f73153cd7377e8223c78d9bfd0c3b0d2ea691dfab44ab99212cc295c->enter($__internal_d3047d04f73153cd7377e8223c78d9bfd0c3b0d2ea691dfab44ab99212cc295c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "actions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $this->loadTemplate($this->getAttribute($context["actions"], "template", array()), "SonataAdminBundle:CRUD:list__action.html.twig", 17)->display($context);
            // line 18
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_d3047d04f73153cd7377e8223c78d9bfd0c3b0d2ea691dfab44ab99212cc295c->leave($__internal_d3047d04f73153cd7377e8223c78d9bfd0c3b0d2ea691dfab44ab99212cc295c_prof);

        
        $__internal_5b6589bead100d509053b23321bbfc324ba2fa565519564a85d52fd48b675e3e->leave($__internal_5b6589bead100d509053b23321bbfc324ba2fa565519564a85d52fd48b675e3e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  71 => 18,  68 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <div class=\"btn-group\">
        {% for actions in field_description.options.actions %}
            {% include actions.template %}
        {% endfor %}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:list__action.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__action.html.twig");
    }
}
