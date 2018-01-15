<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_5b2e3f905e4e0f98dbd7103e66074b9ce584bf70d1516f3fd5262a0fab26da3d extends Twig_Template
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
        $__internal_1b9b4fee10e5c14c2500b23bc896809733b8cd09b054c286e18e482b033397d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b9b4fee10e5c14c2500b23bc896809733b8cd09b054c286e18e482b033397d5->enter($__internal_1b9b4fee10e5c14c2500b23bc896809733b8cd09b054c286e18e482b033397d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_a0fc081178e94c33a54ed91cbe7a3cf6dda187604e0fec78d3e1c8fa915048a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0fc081178e94c33a54ed91cbe7a3cf6dda187604e0fec78d3e1c8fa915048a9->enter($__internal_a0fc081178e94c33a54ed91cbe7a3cf6dda187604e0fec78d3e1c8fa915048a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1b9b4fee10e5c14c2500b23bc896809733b8cd09b054c286e18e482b033397d5->leave($__internal_1b9b4fee10e5c14c2500b23bc896809733b8cd09b054c286e18e482b033397d5_prof);

        
        $__internal_a0fc081178e94c33a54ed91cbe7a3cf6dda187604e0fec78d3e1c8fa915048a9->leave($__internal_a0fc081178e94c33a54ed91cbe7a3cf6dda187604e0fec78d3e1c8fa915048a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
