<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_698da73ba109f2a639db6215f8297509332bbe86d054a97d262fd2d1739b29ed extends Twig_Template
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
        $__internal_8b684dee24ced307b82cd9ce3586dcbef9f73a3f7167f1283fb07a67476c835a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b684dee24ced307b82cd9ce3586dcbef9f73a3f7167f1283fb07a67476c835a->enter($__internal_8b684dee24ced307b82cd9ce3586dcbef9f73a3f7167f1283fb07a67476c835a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a409af4c67fa63885f6b708ad31b348e77a57900908d5747452f129c3cb41d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a409af4c67fa63885f6b708ad31b348e77a57900908d5747452f129c3cb41d4d->enter($__internal_a409af4c67fa63885f6b708ad31b348e77a57900908d5747452f129c3cb41d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_8b684dee24ced307b82cd9ce3586dcbef9f73a3f7167f1283fb07a67476c835a->leave($__internal_8b684dee24ced307b82cd9ce3586dcbef9f73a3f7167f1283fb07a67476c835a_prof);

        
        $__internal_a409af4c67fa63885f6b708ad31b348e77a57900908d5747452f129c3cb41d4d->leave($__internal_a409af4c67fa63885f6b708ad31b348e77a57900908d5747452f129c3cb41d4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
