<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_6dc8b7df4577fa2cc7a020de62946a74a5148b6278afa2f654530bb63f9b6d76 extends Twig_Template
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
        $__internal_edb1ca19fd65dd426e65dab53049fda83a47d7c13744e20e1943f611592c0137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb1ca19fd65dd426e65dab53049fda83a47d7c13744e20e1943f611592c0137->enter($__internal_edb1ca19fd65dd426e65dab53049fda83a47d7c13744e20e1943f611592c0137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_08cac3126ef9f265021e5f2b38c5a9b19e56214760614f7f5005444255532c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08cac3126ef9f265021e5f2b38c5a9b19e56214760614f7f5005444255532c5b->enter($__internal_08cac3126ef9f265021e5f2b38c5a9b19e56214760614f7f5005444255532c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_edb1ca19fd65dd426e65dab53049fda83a47d7c13744e20e1943f611592c0137->leave($__internal_edb1ca19fd65dd426e65dab53049fda83a47d7c13744e20e1943f611592c0137_prof);

        
        $__internal_08cac3126ef9f265021e5f2b38c5a9b19e56214760614f7f5005444255532c5b->leave($__internal_08cac3126ef9f265021e5f2b38c5a9b19e56214760614f7f5005444255532c5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
