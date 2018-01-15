<?php

/* SonataCoreBundle:Form:color.html.twig */
class __TwigTemplate_1ae7fd7c9a7bb3ea3fa3d075ec159e25e2b7362a6a3a8802743dbcc18db23459 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_widget' => array($this, 'block_sonata_type_color_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_730d7192ae41c064683511932999e5f61ed390131f6846666bd5caf1fe69be88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_730d7192ae41c064683511932999e5f61ed390131f6846666bd5caf1fe69be88->enter($__internal_730d7192ae41c064683511932999e5f61ed390131f6846666bd5caf1fe69be88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:color.html.twig"));

        $__internal_63fa13f13dcbe0028c776f71e1caaed1825c8f897fce0a5751952b70d7850a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fa13f13dcbe0028c776f71e1caaed1825c8f897fce0a5751952b70d7850a02->enter($__internal_63fa13f13dcbe0028c776f71e1caaed1825c8f897fce0a5751952b70d7850a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:color.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_widget', $context, $blocks);
        
        $__internal_730d7192ae41c064683511932999e5f61ed390131f6846666bd5caf1fe69be88->leave($__internal_730d7192ae41c064683511932999e5f61ed390131f6846666bd5caf1fe69be88_prof);

        
        $__internal_63fa13f13dcbe0028c776f71e1caaed1825c8f897fce0a5751952b70d7850a02->leave($__internal_63fa13f13dcbe0028c776f71e1caaed1825c8f897fce0a5751952b70d7850a02_prof);

    }

    public function block_sonata_type_color_widget($context, array $blocks = array())
    {
        $__internal_ed62068f786cd1cce5927f621962f6fafc7cbaacf8ea60d18e045e65f5518a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed62068f786cd1cce5927f621962f6fafc7cbaacf8ea60d18e045e65f5518a72->enter($__internal_ed62068f786cd1cce5927f621962f6fafc7cbaacf8ea60d18e045e65f5518a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_widget"));

        $__internal_201366fd47a238f1894de00554d850b74be0117fa1a272dd993ddadaf82b82b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201366fd47a238f1894de00554d850b74be0117fa1a272dd993ddadaf82b82b1->enter($__internal_201366fd47a238f1894de00554d850b74be0117fa1a272dd993ddadaf82b82b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_widget"));

        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        <input type=\"color\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_201366fd47a238f1894de00554d850b74be0117fa1a272dd993ddadaf82b82b1->leave($__internal_201366fd47a238f1894de00554d850b74be0117fa1a272dd993ddadaf82b82b1_prof);

        
        $__internal_ed62068f786cd1cce5927f621962f6fafc7cbaacf8ea60d18e045e65f5518a72->leave($__internal_ed62068f786cd1cce5927f621962f6fafc7cbaacf8ea60d18e045e65f5518a72_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:color.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  44 => 12,  26 => 11,);
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
{% block sonata_type_color_widget %}
    {% spaceless %}
        <input type=\"color\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
    {% endspaceless %}
{% endblock sonata_type_color_widget %}
", "SonataCoreBundle:Form:color.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/core-bundle/Resources/views/Form/color.html.twig");
    }
}
