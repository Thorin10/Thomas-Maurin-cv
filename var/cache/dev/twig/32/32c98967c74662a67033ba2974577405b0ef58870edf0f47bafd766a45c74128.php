<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_94440a5e2d6536512ce0de26789b137b5f13a59d09c55463cb1671a79897bd72 extends Twig_Template
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
        $__internal_96a7d44aebff830b2ef0d722ba7cca5422bdfd7fb3647b615deb4580cc6be5f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a7d44aebff830b2ef0d722ba7cca5422bdfd7fb3647b615deb4580cc6be5f3->enter($__internal_96a7d44aebff830b2ef0d722ba7cca5422bdfd7fb3647b615deb4580cc6be5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_1e068a7823871806ad1640365b48e3d95f23c31f5e716dbe5354b6d4667bfd28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e068a7823871806ad1640365b48e3d95f23c31f5e716dbe5354b6d4667bfd28->enter($__internal_1e068a7823871806ad1640365b48e3d95f23c31f5e716dbe5354b6d4667bfd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_96a7d44aebff830b2ef0d722ba7cca5422bdfd7fb3647b615deb4580cc6be5f3->leave($__internal_96a7d44aebff830b2ef0d722ba7cca5422bdfd7fb3647b615deb4580cc6be5f3_prof);

        
        $__internal_1e068a7823871806ad1640365b48e3d95f23c31f5e716dbe5354b6d4667bfd28->leave($__internal_1e068a7823871806ad1640365b48e3d95f23c31f5e716dbe5354b6d4667bfd28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
