<?php

/* SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig */
class __TwigTemplate_a0b19bc8d2bd5db53e8baaaad297ed6a74a493d11b2e2b07c59550953eaceb2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb4f945cce352af418f7f3c5f7affb1e15bba103505e4485e1ce52d9161dbdc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb4f945cce352af418f7f3c5f7affb1e15bba103505e4485e1ce52d9161dbdc6->enter($__internal_cb4f945cce352af418f7f3c5f7affb1e15bba103505e4485e1ce52d9161dbdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig"));

        $__internal_d76228c04ee7c723643d4ea18072704063938e815948d6a252e15366d23b3374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76228c04ee7c723643d4ea18072704063938e815948d6a252e15366d23b3374->enter($__internal_d76228c04ee7c723643d4ea18072704063938e815948d6a252e15366d23b3374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method") &&  !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
            // line 13
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        ";
            // line 14
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, ($context["object"] ?? $this->getContext($context, "object")), $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "batch", array(), "array"));
            echo "
    </td>
";
        }
        // line 17
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"";
        // line 18
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "elements", array())) - ($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 19
        $this->displayBlock('row', $context, $blocks);
        // line 20
        echo "</td>

";
        // line 22
        if (($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") &&  !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
            // line 23
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        ";
            // line 24
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, ($context["object"] ?? $this->getContext($context, "object")), $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "_action", array(), "array"));
            echo "
    </td>
";
        }
        
        $__internal_cb4f945cce352af418f7f3c5f7affb1e15bba103505e4485e1ce52d9161dbdc6->leave($__internal_cb4f945cce352af418f7f3c5f7affb1e15bba103505e4485e1ce52d9161dbdc6_prof);

        
        $__internal_d76228c04ee7c723643d4ea18072704063938e815948d6a252e15366d23b3374->leave($__internal_d76228c04ee7c723643d4ea18072704063938e815948d6a252e15366d23b3374_prof);

    }

    // line 19
    public function block_row($context, array $blocks = array())
    {
        $__internal_9c5c0f9b4320e3f7cc8c2000d6981f18d2dad1d84fa0234150941a0ce76976de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c5c0f9b4320e3f7cc8c2000d6981f18d2dad1d84fa0234150941a0ce76976de->enter($__internal_9c5c0f9b4320e3f7cc8c2000d6981f18d2dad1d84fa0234150941a0ce76976de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "row"));

        $__internal_3aec6d0dc57303b6290e346dfd39577a5c4091ed0438ead4cc202de2242d72d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aec6d0dc57303b6290e346dfd39577a5c4091ed0438ead4cc202de2242d72d5->enter($__internal_3aec6d0dc57303b6290e346dfd39577a5c4091ed0438ead4cc202de2242d72d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "row"));

        
        $__internal_3aec6d0dc57303b6290e346dfd39577a5c4091ed0438ead4cc202de2242d72d5->leave($__internal_3aec6d0dc57303b6290e346dfd39577a5c4091ed0438ead4cc202de2242d72d5_prof);

        
        $__internal_9c5c0f9b4320e3f7cc8c2000d6981f18d2dad1d84fa0234150941a0ce76976de->leave($__internal_9c5c0f9b4320e3f7cc8c2000d6981f18d2dad1d84fa0234150941a0ce76976de_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  62 => 24,  57 => 23,  55 => 22,  51 => 20,  49 => 19,  43 => 18,  40 => 17,  34 => 14,  31 => 13,  29 => 12,  26 => 11,);
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

{% if admin.list.has('batch') and not app.request.isXmlHttpRequest %}
    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        {{ object|render_list_element(admin.list['batch']) }}
    </td>
{% endif %}

<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"{{ admin.list.elements|length - (admin.list.has('_action') + admin.list.has('batch')) }}\" objectId=\"{{ admin.id(object) }}\">
    {% block row %}{% endblock %}
</td>

{% if admin.list.has('_action') and not app.request.isXmlHttpRequest %}
    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"{{ admin.id(object) }}\">
        {{ object|render_list_element(admin.list['_action']) }}
    </td>
{% endif %}
", "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list_flat_inner_row.html.twig");
    }
}