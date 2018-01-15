<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_4a1a9581ec95643dcf6b86ffedee5e94c0d3dae1bd89292a22df8d48389f7147 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0196973c705d48e84eb1c59e2d110f14eee93be61975d63c51d3f677d3dc98c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0196973c705d48e84eb1c59e2d110f14eee93be61975d63c51d3f677d3dc98c3->enter($__internal_0196973c705d48e84eb1c59e2d110f14eee93be61975d63c51d3f677d3dc98c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_3ef72c08491267211d84db4e4f10188a3a92defa57ea997277a0afc5d898c65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef72c08491267211d84db4e4f10188a3a92defa57ea997277a0afc5d898c65b->enter($__internal_3ef72c08491267211d84db4e4f10188a3a92defa57ea997277a0afc5d898c65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0196973c705d48e84eb1c59e2d110f14eee93be61975d63c51d3f677d3dc98c3->leave($__internal_0196973c705d48e84eb1c59e2d110f14eee93be61975d63c51d3f677d3dc98c3_prof);

        
        $__internal_3ef72c08491267211d84db4e4f10188a3a92defa57ea997277a0afc5d898c65b->leave($__internal_3ef72c08491267211d84db4e4f10188a3a92defa57ea997277a0afc5d898c65b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a1cf3dee04a7f03cbcd816d15e85cd88de76b2e242ddaf7baf67da73ee647bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1cf3dee04a7f03cbcd816d15e85cd88de76b2e242ddaf7baf67da73ee647bb3->enter($__internal_a1cf3dee04a7f03cbcd816d15e85cd88de76b2e242ddaf7baf67da73ee647bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d0fe0d71cc989948c1fe9df1bf83dc51e366cee6548b925bf2c9b13aa08d6466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0fe0d71cc989948c1fe9df1bf83dc51e366cee6548b925bf2c9b13aa08d6466->enter($__internal_d0fe0d71cc989948c1fe9df1bf83dc51e366cee6548b925bf2c9b13aa08d6466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_d0fe0d71cc989948c1fe9df1bf83dc51e366cee6548b925bf2c9b13aa08d6466->leave($__internal_d0fe0d71cc989948c1fe9df1bf83dc51e366cee6548b925bf2c9b13aa08d6466_prof);

        
        $__internal_a1cf3dee04a7f03cbcd816d15e85cd88de76b2e242ddaf7baf67da73ee647bb3->leave($__internal_a1cf3dee04a7f03cbcd816d15e85cd88de76b2e242ddaf7baf67da73ee647bb3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
