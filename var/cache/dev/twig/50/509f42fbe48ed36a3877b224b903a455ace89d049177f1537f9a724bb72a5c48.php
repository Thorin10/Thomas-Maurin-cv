<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_481b8a172f70929c507e423fe3d06a76a1fb114307393ac62bb54eb8adf79326 extends Twig_Template
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
        $__internal_fd19d421a7c286398cabd8a4c349bc4f4f62b76f7656b4fcc6ac08cc66d0079f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd19d421a7c286398cabd8a4c349bc4f4f62b76f7656b4fcc6ac08cc66d0079f->enter($__internal_fd19d421a7c286398cabd8a4c349bc4f4f62b76f7656b4fcc6ac08cc66d0079f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_47aac2d1d3ed08a59a4a2cfafd1ebbb980e8318790ade05b479f6d9566d02697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47aac2d1d3ed08a59a4a2cfafd1ebbb980e8318790ade05b479f6d9566d02697->enter($__internal_47aac2d1d3ed08a59a4a2cfafd1ebbb980e8318790ade05b479f6d9566d02697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fd19d421a7c286398cabd8a4c349bc4f4f62b76f7656b4fcc6ac08cc66d0079f->leave($__internal_fd19d421a7c286398cabd8a4c349bc4f4f62b76f7656b4fcc6ac08cc66d0079f_prof);

        
        $__internal_47aac2d1d3ed08a59a4a2cfafd1ebbb980e8318790ade05b479f6d9566d02697->leave($__internal_47aac2d1d3ed08a59a4a2cfafd1ebbb980e8318790ade05b479f6d9566d02697_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
