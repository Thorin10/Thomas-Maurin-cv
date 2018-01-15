<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ce3920049155f79b340844a95d57f9065ebd18e04f97f04ffd6c380f4e6942b5 extends Twig_Template
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
        $__internal_191daf0c8f97aea6915afeb1c00824f1b4ed345647271640d187d9004cf1d0bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191daf0c8f97aea6915afeb1c00824f1b4ed345647271640d187d9004cf1d0bc->enter($__internal_191daf0c8f97aea6915afeb1c00824f1b4ed345647271640d187d9004cf1d0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c1278136e715dcdfed9f64810a28eb8878cd631f8aa1e0c3cdc6a8132808acd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1278136e715dcdfed9f64810a28eb8878cd631f8aa1e0c3cdc6a8132808acd6->enter($__internal_c1278136e715dcdfed9f64810a28eb8878cd631f8aa1e0c3cdc6a8132808acd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_191daf0c8f97aea6915afeb1c00824f1b4ed345647271640d187d9004cf1d0bc->leave($__internal_191daf0c8f97aea6915afeb1c00824f1b4ed345647271640d187d9004cf1d0bc_prof);

        
        $__internal_c1278136e715dcdfed9f64810a28eb8878cd631f8aa1e0c3cdc6a8132808acd6->leave($__internal_c1278136e715dcdfed9f64810a28eb8878cd631f8aa1e0c3cdc6a8132808acd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
