<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_3c456a13795ef00b171f53e5f0981c31c6372db7c7afb45decf1fa44d0f0e2e9 extends Twig_Template
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
        $__internal_201f822e15a676887539fb394aae505fc862c099112d7e5968c4549b56122c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201f822e15a676887539fb394aae505fc862c099112d7e5968c4549b56122c77->enter($__internal_201f822e15a676887539fb394aae505fc862c099112d7e5968c4549b56122c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d5e5d6db067240cd690a5d686c1541b87fab19684dc9e275692bc71c03a630a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e5d6db067240cd690a5d686c1541b87fab19684dc9e275692bc71c03a630a0->enter($__internal_d5e5d6db067240cd690a5d686c1541b87fab19684dc9e275692bc71c03a630a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_201f822e15a676887539fb394aae505fc862c099112d7e5968c4549b56122c77->leave($__internal_201f822e15a676887539fb394aae505fc862c099112d7e5968c4549b56122c77_prof);

        
        $__internal_d5e5d6db067240cd690a5d686c1541b87fab19684dc9e275692bc71c03a630a0->leave($__internal_d5e5d6db067240cd690a5d686c1541b87fab19684dc9e275692bc71c03a630a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
