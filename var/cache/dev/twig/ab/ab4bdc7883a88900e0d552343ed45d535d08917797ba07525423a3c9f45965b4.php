<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_da7e50bf45f0690a65c4ea3f68762722ab106f91bb7d598eef7bd6a7400e8952 extends Twig_Template
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
        $__internal_c0847c731cad28ec2f726cbe849ac929062bc029c625f4cb90a6e5e95b81ef7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0847c731cad28ec2f726cbe849ac929062bc029c625f4cb90a6e5e95b81ef7a->enter($__internal_c0847c731cad28ec2f726cbe849ac929062bc029c625f4cb90a6e5e95b81ef7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9164947c12e9ede317f74f0c8a07ac3e7f403436d047b193d4cf33ba32a9b78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9164947c12e9ede317f74f0c8a07ac3e7f403436d047b193d4cf33ba32a9b78d->enter($__internal_9164947c12e9ede317f74f0c8a07ac3e7f403436d047b193d4cf33ba32a9b78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c0847c731cad28ec2f726cbe849ac929062bc029c625f4cb90a6e5e95b81ef7a->leave($__internal_c0847c731cad28ec2f726cbe849ac929062bc029c625f4cb90a6e5e95b81ef7a_prof);

        
        $__internal_9164947c12e9ede317f74f0c8a07ac3e7f403436d047b193d4cf33ba32a9b78d->leave($__internal_9164947c12e9ede317f74f0c8a07ac3e7f403436d047b193d4cf33ba32a9b78d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
