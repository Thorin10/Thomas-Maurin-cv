<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_7677fb9a874cd573777390e20241d29c1f059a30633e3b4493063959f780dfe4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71a8f8a1ff080671ddc678a0460fcb97733a26016b477b43d73381a5aae44dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a8f8a1ff080671ddc678a0460fcb97733a26016b477b43d73381a5aae44dff->enter($__internal_71a8f8a1ff080671ddc678a0460fcb97733a26016b477b43d73381a5aae44dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $__internal_1a99953378c50adadda9b00acf8eb1efbc2f5df6a458415978c1425880d68fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a99953378c50adadda9b00acf8eb1efbc2f5df6a458415978c1425880d68fd3->enter($__internal_1a99953378c50adadda9b00acf8eb1efbc2f5df6a458415978c1425880d68fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71a8f8a1ff080671ddc678a0460fcb97733a26016b477b43d73381a5aae44dff->leave($__internal_71a8f8a1ff080671ddc678a0460fcb97733a26016b477b43d73381a5aae44dff_prof);

        
        $__internal_1a99953378c50adadda9b00acf8eb1efbc2f5df6a458415978c1425880d68fd3->leave($__internal_1a99953378c50adadda9b00acf8eb1efbc2f5df6a458415978c1425880d68fd3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0f52b883a4f1f6a8681b5ae41357639dcbda35f84f498dbae9848c2c0df86bc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f52b883a4f1f6a8681b5ae41357639dcbda35f84f498dbae9848c2c0df86bc5->enter($__internal_0f52b883a4f1f6a8681b5ae41357639dcbda35f84f498dbae9848c2c0df86bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_0ad1dc0e7011f2cfe73aaba07934178f24060c2ec4b630dc05a3668bb1785b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad1dc0e7011f2cfe73aaba07934178f24060c2ec4b630dc05a3668bb1785b3f->enter($__internal_0ad1dc0e7011f2cfe73aaba07934178f24060c2ec4b630dc05a3668bb1785b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_0ad1dc0e7011f2cfe73aaba07934178f24060c2ec4b630dc05a3668bb1785b3f->leave($__internal_0ad1dc0e7011f2cfe73aaba07934178f24060c2ec4b630dc05a3668bb1785b3f_prof);

        
        $__internal_0f52b883a4f1f6a8681b5ae41357639dcbda35f84f498dbae9848c2c0df86bc5->leave($__internal_0f52b883a4f1f6a8681b5ae41357639dcbda35f84f498dbae9848c2c0df86bc5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  48 => 15,  39 => 14,  18 => 12,);
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
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
", "SonataAdminBundle:CRUD:list__select.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__select.html.twig");
    }
}
