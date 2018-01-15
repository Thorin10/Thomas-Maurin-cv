<?php

/* SonataAdminBundle:Button:acl_button.html.twig */
class __TwigTemplate_538cf0ff5bd13773291de7557b828e12cd8905721499fe87f303a1b9b893530d extends Twig_Template
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
        $__internal_ae9f348ee5091f0065bdc49d9f2702d938306a4028c2d05d2bbd2e59b3c31e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9f348ee5091f0065bdc49d9f2702d938306a4028c2d05d2bbd2e59b3c31e43->enter($__internal_ae9f348ee5091f0065bdc49d9f2702d938306a4028c2d05d2bbd2e59b3c31e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:acl_button.html.twig"));

        $__internal_e5aaaa77270a5df6362282ba2fee73143c280705d712fdea60e441e1e86593ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5aaaa77270a5df6362282ba2fee73143c280705d712fdea60e441e1e86593ca->enter($__internal_e5aaaa77270a5df6362282ba2fee73143c280705d712fdea60e441e1e86593ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:acl_button.html.twig"));

        // line 11
        if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "canAccessObject", array(0 => "acl", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method")) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "acl"), "method"))) {
            // line 12
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_ae9f348ee5091f0065bdc49d9f2702d938306a4028c2d05d2bbd2e59b3c31e43->leave($__internal_ae9f348ee5091f0065bdc49d9f2702d938306a4028c2d05d2bbd2e59b3c31e43_prof);

        
        $__internal_e5aaaa77270a5df6362282ba2fee73143c280705d712fdea60e441e1e86593ca->leave($__internal_e5aaaa77270a5df6362282ba2fee73143c280705d712fdea60e441e1e86593ca_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:acl_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  30 => 13,  27 => 12,  25 => 11,);
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
{% if admin.isAclEnabled() and admin.canAccessObject('acl', object) and admin.hasRoute('acl') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('acl', object) }}\">
            <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
            {{ 'link_action_acl'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "SonataAdminBundle:Button:acl_button.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/Button/acl_button.html.twig");
    }
}
