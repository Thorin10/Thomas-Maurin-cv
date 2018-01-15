<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_44c7da4be98f34a11cc4df3de38e7bb3effab241382a5b2cca914e2b1a4ea9ce extends Twig_Template
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
        $__internal_c2c56410fd6edf790676627278b9e1e11cf7e025cb8f73ee390365a03ed46e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2c56410fd6edf790676627278b9e1e11cf7e025cb8f73ee390365a03ed46e98->enter($__internal_c2c56410fd6edf790676627278b9e1e11cf7e025cb8f73ee390365a03ed46e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a30eafff1a10ac4308c757cd82eaae4fb4ef839ddb1f6bcca250b87b63aacde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30eafff1a10ac4308c757cd82eaae4fb4ef839ddb1f6bcca250b87b63aacde4->enter($__internal_a30eafff1a10ac4308c757cd82eaae4fb4ef839ddb1f6bcca250b87b63aacde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c2c56410fd6edf790676627278b9e1e11cf7e025cb8f73ee390365a03ed46e98->leave($__internal_c2c56410fd6edf790676627278b9e1e11cf7e025cb8f73ee390365a03ed46e98_prof);

        
        $__internal_a30eafff1a10ac4308c757cd82eaae4fb4ef839ddb1f6bcca250b87b63aacde4->leave($__internal_a30eafff1a10ac4308c757cd82eaae4fb4ef839ddb1f6bcca250b87b63aacde4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
