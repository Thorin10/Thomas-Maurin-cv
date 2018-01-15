<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_eb282256a359cb66feadff5549340e205a39ca966c1570ad466b65dcdf8cf23d extends Twig_Template
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
        $__internal_86499635cdba3b034b381914a82a6e25d1a4d9e7b3bf00111968a87e0f370084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86499635cdba3b034b381914a82a6e25d1a4d9e7b3bf00111968a87e0f370084->enter($__internal_86499635cdba3b034b381914a82a6e25d1a4d9e7b3bf00111968a87e0f370084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_8d950e7b1c627d1c93f7a6cc91b4d8773af20b49a596d0c5c8f53e4a53c026a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d950e7b1c627d1c93f7a6cc91b4d8773af20b49a596d0c5c8f53e4a53c026a7->enter($__internal_8d950e7b1c627d1c93f7a6cc91b4d8773af20b49a596d0c5c8f53e4a53c026a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_86499635cdba3b034b381914a82a6e25d1a4d9e7b3bf00111968a87e0f370084->leave($__internal_86499635cdba3b034b381914a82a6e25d1a4d9e7b3bf00111968a87e0f370084_prof);

        
        $__internal_8d950e7b1c627d1c93f7a6cc91b4d8773af20b49a596d0c5c8f53e4a53c026a7->leave($__internal_8d950e7b1c627d1c93f7a6cc91b4d8773af20b49a596d0c5c8f53e4a53c026a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
