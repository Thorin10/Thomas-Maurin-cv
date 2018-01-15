<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_cc07aa009175a796a15b4fddaf8bdcaa5326c5d76e757f54b76ee1ac5148f2cf extends Twig_Template
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
        $__internal_1d4d204bc519ae84a623c56c6ff4aeee61bab3b5dd6913b2abd8581dd1ed5bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d4d204bc519ae84a623c56c6ff4aeee61bab3b5dd6913b2abd8581dd1ed5bcf->enter($__internal_1d4d204bc519ae84a623c56c6ff4aeee61bab3b5dd6913b2abd8581dd1ed5bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_62663c448a4dff659a2fd6a73f4c2287a2a30eae1d479ab7623b2a97faf7dcfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62663c448a4dff659a2fd6a73f4c2287a2a30eae1d479ab7623b2a97faf7dcfe->enter($__internal_62663c448a4dff659a2fd6a73f4c2287a2a30eae1d479ab7623b2a97faf7dcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1d4d204bc519ae84a623c56c6ff4aeee61bab3b5dd6913b2abd8581dd1ed5bcf->leave($__internal_1d4d204bc519ae84a623c56c6ff4aeee61bab3b5dd6913b2abd8581dd1ed5bcf_prof);

        
        $__internal_62663c448a4dff659a2fd6a73f4c2287a2a30eae1d479ab7623b2a97faf7dcfe->leave($__internal_62663c448a4dff659a2fd6a73f4c2287a2a30eae1d479ab7623b2a97faf7dcfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
