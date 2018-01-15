<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a31e76c49bd6c11b43c044a0a68e22593605fbfb7ae105a3d387c598b72878aa extends Twig_Template
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
        $__internal_df5175f4c66420e72524162e168253304c83f707d122570a1ae7192ec9fd0558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5175f4c66420e72524162e168253304c83f707d122570a1ae7192ec9fd0558->enter($__internal_df5175f4c66420e72524162e168253304c83f707d122570a1ae7192ec9fd0558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_54afdbf253341b2606d89fb52e60c456ee4c33a20045282bfdc2ffea779ac886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54afdbf253341b2606d89fb52e60c456ee4c33a20045282bfdc2ffea779ac886->enter($__internal_54afdbf253341b2606d89fb52e60c456ee4c33a20045282bfdc2ffea779ac886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_df5175f4c66420e72524162e168253304c83f707d122570a1ae7192ec9fd0558->leave($__internal_df5175f4c66420e72524162e168253304c83f707d122570a1ae7192ec9fd0558_prof);

        
        $__internal_54afdbf253341b2606d89fb52e60c456ee4c33a20045282bfdc2ffea779ac886->leave($__internal_54afdbf253341b2606d89fb52e60c456ee4c33a20045282bfdc2ffea779ac886_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
