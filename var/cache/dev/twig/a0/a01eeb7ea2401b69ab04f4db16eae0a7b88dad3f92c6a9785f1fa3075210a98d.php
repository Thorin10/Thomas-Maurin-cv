<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a949c2cfd85896d4f111101db0cdb38049a45ebc20a090e82b348c60c3b19e2c extends Twig_Template
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
        $__internal_d78347d8250eb4f0f77845c8d8fcbf8320b4f31a8a81c0c8bc83bc24ef595cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78347d8250eb4f0f77845c8d8fcbf8320b4f31a8a81c0c8bc83bc24ef595cbb->enter($__internal_d78347d8250eb4f0f77845c8d8fcbf8320b4f31a8a81c0c8bc83bc24ef595cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_23718575b3a483093e82e410e701a7cbc0b1c3d3589e209dfac90a51d5a985f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23718575b3a483093e82e410e701a7cbc0b1c3d3589e209dfac90a51d5a985f5->enter($__internal_23718575b3a483093e82e410e701a7cbc0b1c3d3589e209dfac90a51d5a985f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d78347d8250eb4f0f77845c8d8fcbf8320b4f31a8a81c0c8bc83bc24ef595cbb->leave($__internal_d78347d8250eb4f0f77845c8d8fcbf8320b4f31a8a81c0c8bc83bc24ef595cbb_prof);

        
        $__internal_23718575b3a483093e82e410e701a7cbc0b1c3d3589e209dfac90a51d5a985f5->leave($__internal_23718575b3a483093e82e410e701a7cbc0b1c3d3589e209dfac90a51d5a985f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
