<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_807c0a875edcb5c679e95ab0580a6285536ec0b8418bbc31e278a189ff318270 extends Twig_Template
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
        $__internal_59c38206e13e524574cfac0c027feae78f441a4e0f0bc1a1b08b0adbc9ab0bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c38206e13e524574cfac0c027feae78f441a4e0f0bc1a1b08b0adbc9ab0bed->enter($__internal_59c38206e13e524574cfac0c027feae78f441a4e0f0bc1a1b08b0adbc9ab0bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_cd6b6eb087ef87ec73575019742c4b620293487e95744d6ab6a14f45050eecd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6b6eb087ef87ec73575019742c4b620293487e95744d6ab6a14f45050eecd0->enter($__internal_cd6b6eb087ef87ec73575019742c4b620293487e95744d6ab6a14f45050eecd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_59c38206e13e524574cfac0c027feae78f441a4e0f0bc1a1b08b0adbc9ab0bed->leave($__internal_59c38206e13e524574cfac0c027feae78f441a4e0f0bc1a1b08b0adbc9ab0bed_prof);

        
        $__internal_cd6b6eb087ef87ec73575019742c4b620293487e95744d6ab6a14f45050eecd0->leave($__internal_cd6b6eb087ef87ec73575019742c4b620293487e95744d6ab6a14f45050eecd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
