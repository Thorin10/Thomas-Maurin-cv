<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d497bfd54826a1dc38b274aa55ed65ef5bc7d7be2f04b3727f04aa9d0470cfd6 extends Twig_Template
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
        $__internal_2734a5608c81b0f4dd588dbc6a01c279f31f3fcf0af2b18f3a05443379b71428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2734a5608c81b0f4dd588dbc6a01c279f31f3fcf0af2b18f3a05443379b71428->enter($__internal_2734a5608c81b0f4dd588dbc6a01c279f31f3fcf0af2b18f3a05443379b71428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_e416810bb3155355adc02d084ececa788b0ede3403cec14890b86b43d1e671e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e416810bb3155355adc02d084ececa788b0ede3403cec14890b86b43d1e671e2->enter($__internal_e416810bb3155355adc02d084ececa788b0ede3403cec14890b86b43d1e671e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2734a5608c81b0f4dd588dbc6a01c279f31f3fcf0af2b18f3a05443379b71428->leave($__internal_2734a5608c81b0f4dd588dbc6a01c279f31f3fcf0af2b18f3a05443379b71428_prof);

        
        $__internal_e416810bb3155355adc02d084ececa788b0ede3403cec14890b86b43d1e671e2->leave($__internal_e416810bb3155355adc02d084ececa788b0ede3403cec14890b86b43d1e671e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
