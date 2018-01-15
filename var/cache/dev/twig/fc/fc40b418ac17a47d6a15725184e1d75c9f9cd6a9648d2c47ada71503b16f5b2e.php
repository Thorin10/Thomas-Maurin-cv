<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_fe962c990246fe5b2fac0becff6ef96250cde6ceeb1eb5a91e22e9858d1843d7 extends Twig_Template
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
        $__internal_4f3d72e76ba07d44cafba70e28ff5ea2b28df7c917101b59f3fe5f3f5f766fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f3d72e76ba07d44cafba70e28ff5ea2b28df7c917101b59f3fe5f3f5f766fdf->enter($__internal_4f3d72e76ba07d44cafba70e28ff5ea2b28df7c917101b59f3fe5f3f5f766fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_1d3278fd0b07d97bbb40756739fbf008377678008b658e508652bfc6928a00e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3278fd0b07d97bbb40756739fbf008377678008b658e508652bfc6928a00e5->enter($__internal_1d3278fd0b07d97bbb40756739fbf008377678008b658e508652bfc6928a00e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4f3d72e76ba07d44cafba70e28ff5ea2b28df7c917101b59f3fe5f3f5f766fdf->leave($__internal_4f3d72e76ba07d44cafba70e28ff5ea2b28df7c917101b59f3fe5f3f5f766fdf_prof);

        
        $__internal_1d3278fd0b07d97bbb40756739fbf008377678008b658e508652bfc6928a00e5->leave($__internal_1d3278fd0b07d97bbb40756739fbf008377678008b658e508652bfc6928a00e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
