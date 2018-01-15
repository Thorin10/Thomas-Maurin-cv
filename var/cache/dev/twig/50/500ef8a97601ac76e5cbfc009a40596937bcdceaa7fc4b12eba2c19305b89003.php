<?php

/* SonataAdminBundle:CRUD/Association:edit_modal.html.twig */
class __TwigTemplate_97971e514f7b56118cfd50397e25a506f43991a0328dfeaf510d88001a17c59e extends Twig_Template
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
        $__internal_d67ca33cfc0af51ae7a59fc3907250359fa95e3ee804a9d4c857699dc1bb01fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67ca33cfc0af51ae7a59fc3907250359fa95e3ee804a9d4c857699dc1bb01fb->enter($__internal_d67ca33cfc0af51ae7a59fc3907250359fa95e3ee804a9d4c857699dc1bb01fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:edit_modal.html.twig"));

        $__internal_4c7ee1904e4602a7d624f7510a34a4c5d027aad9fa55c96f40af07186b47d244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7ee1904e4602a7d624f7510a34a4c5d027aad9fa55c96f40af07186b47d244->enter($__internal_4c7ee1904e4602a7d624f7510a34a4c5d027aad9fa55c96f40af07186b47d244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:edit_modal.html.twig"));

        // line 11
        echo "
<div class=\"modal fade\" id=\"field_dialog_";
        // line 12
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_d67ca33cfc0af51ae7a59fc3907250359fa95e3ee804a9d4c857699dc1bb01fb->leave($__internal_d67ca33cfc0af51ae7a59fc3907250359fa95e3ee804a9d4c857699dc1bb01fb_prof);

        
        $__internal_4c7ee1904e4602a7d624f7510a34a4c5d027aad9fa55c96f40af07186b47d244->leave($__internal_4c7ee1904e4602a7d624f7510a34a4c5d027aad9fa55c96f40af07186b47d244_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:edit_modal.html.twig";
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

<div class=\"modal fade\" id=\"field_dialog_{{ id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
", "SonataAdminBundle:CRUD/Association:edit_modal.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/Association/edit_modal.html.twig");
    }
}
