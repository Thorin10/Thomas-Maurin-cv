<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6bec1fefd237d774e70283ab282058add52a70a7e46f701b2117ff159e85061d extends Twig_Template
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
        $__internal_62f49b3e1dd5c9580b222587e6673e533b8996545c2b7f90877d520aa60522ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62f49b3e1dd5c9580b222587e6673e533b8996545c2b7f90877d520aa60522ba->enter($__internal_62f49b3e1dd5c9580b222587e6673e533b8996545c2b7f90877d520aa60522ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_2996b856eac5669305dfd7983a9736d8ca42826959c853a7ad2da498bfda275e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2996b856eac5669305dfd7983a9736d8ca42826959c853a7ad2da498bfda275e->enter($__internal_2996b856eac5669305dfd7983a9736d8ca42826959c853a7ad2da498bfda275e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_62f49b3e1dd5c9580b222587e6673e533b8996545c2b7f90877d520aa60522ba->leave($__internal_62f49b3e1dd5c9580b222587e6673e533b8996545c2b7f90877d520aa60522ba_prof);

        
        $__internal_2996b856eac5669305dfd7983a9736d8ca42826959c853a7ad2da498bfda275e->leave($__internal_2996b856eac5669305dfd7983a9736d8ca42826959c853a7ad2da498bfda275e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
