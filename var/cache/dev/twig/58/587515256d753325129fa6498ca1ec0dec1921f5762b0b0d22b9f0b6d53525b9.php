<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_809368af2740fbcd1e5919432fa7305680add35f58cae79097f6ba415c36c3c9 extends Twig_Template
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
        $__internal_82e64a109d1aa0ba1f1fa880a5ae1ca048c046e4996bf146035a649542bc0504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e64a109d1aa0ba1f1fa880a5ae1ca048c046e4996bf146035a649542bc0504->enter($__internal_82e64a109d1aa0ba1f1fa880a5ae1ca048c046e4996bf146035a649542bc0504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_04a87cd42c1ad271f94b1e2ee03d2d0296deb7c6e47885896a634da37edf0b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a87cd42c1ad271f94b1e2ee03d2d0296deb7c6e47885896a634da37edf0b84->enter($__internal_04a87cd42c1ad271f94b1e2ee03d2d0296deb7c6e47885896a634da37edf0b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_82e64a109d1aa0ba1f1fa880a5ae1ca048c046e4996bf146035a649542bc0504->leave($__internal_82e64a109d1aa0ba1f1fa880a5ae1ca048c046e4996bf146035a649542bc0504_prof);

        
        $__internal_04a87cd42c1ad271f94b1e2ee03d2d0296deb7c6e47885896a634da37edf0b84->leave($__internal_04a87cd42c1ad271f94b1e2ee03d2d0296deb7c6e47885896a634da37edf0b84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
