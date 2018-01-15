<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3e9477c3639a7dad5a4ee7506dda3c8055900db23a89e9bd24765864398c7844 extends Twig_Template
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
        $__internal_8587f2212ae847383c6f42fd256079d9cb6ab76e706613fb6ea0bc291cbb0653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8587f2212ae847383c6f42fd256079d9cb6ab76e706613fb6ea0bc291cbb0653->enter($__internal_8587f2212ae847383c6f42fd256079d9cb6ab76e706613fb6ea0bc291cbb0653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_6aea0750e22eb64b9869080db2f1d25ad9c477c5396fd988f6507788dabe2d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aea0750e22eb64b9869080db2f1d25ad9c477c5396fd988f6507788dabe2d7b->enter($__internal_6aea0750e22eb64b9869080db2f1d25ad9c477c5396fd988f6507788dabe2d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8587f2212ae847383c6f42fd256079d9cb6ab76e706613fb6ea0bc291cbb0653->leave($__internal_8587f2212ae847383c6f42fd256079d9cb6ab76e706613fb6ea0bc291cbb0653_prof);

        
        $__internal_6aea0750e22eb64b9869080db2f1d25ad9c477c5396fd988f6507788dabe2d7b->leave($__internal_6aea0750e22eb64b9869080db2f1d25ad9c477c5396fd988f6507788dabe2d7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
