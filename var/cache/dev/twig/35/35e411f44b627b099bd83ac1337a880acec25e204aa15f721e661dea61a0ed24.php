<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5b51a4d848503574f090121add9efb3940a0e4808c95fbfb88df896072a2404a extends Twig_Template
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
        $__internal_3a9944e7dee1de767904317c5b81e662b3e243095598404baa14cb7c1916c865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9944e7dee1de767904317c5b81e662b3e243095598404baa14cb7c1916c865->enter($__internal_3a9944e7dee1de767904317c5b81e662b3e243095598404baa14cb7c1916c865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e84766ca29c1dbc8b9c77a3cd5f3717db4dd2c485de6b96de18e064b7a07a4ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84766ca29c1dbc8b9c77a3cd5f3717db4dd2c485de6b96de18e064b7a07a4ce->enter($__internal_e84766ca29c1dbc8b9c77a3cd5f3717db4dd2c485de6b96de18e064b7a07a4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3a9944e7dee1de767904317c5b81e662b3e243095598404baa14cb7c1916c865->leave($__internal_3a9944e7dee1de767904317c5b81e662b3e243095598404baa14cb7c1916c865_prof);

        
        $__internal_e84766ca29c1dbc8b9c77a3cd5f3717db4dd2c485de6b96de18e064b7a07a4ce->leave($__internal_e84766ca29c1dbc8b9c77a3cd5f3717db4dd2c485de6b96de18e064b7a07a4ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
