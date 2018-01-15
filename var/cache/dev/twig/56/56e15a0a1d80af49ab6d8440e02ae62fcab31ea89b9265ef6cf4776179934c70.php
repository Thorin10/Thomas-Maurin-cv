<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ad58bf8265118b231feec04395f2d073326d68989bd24e38eb3297e0de00ae3e extends Twig_Template
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
        $__internal_44bc13c0012c52b7b92fb61af05ad282d65949e69b5e40a5d9217d384d5b4a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44bc13c0012c52b7b92fb61af05ad282d65949e69b5e40a5d9217d384d5b4a8a->enter($__internal_44bc13c0012c52b7b92fb61af05ad282d65949e69b5e40a5d9217d384d5b4a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_5df2332d057e8b03ef119519a08dc23acb938818c055213c6fa344e48cd8c9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df2332d057e8b03ef119519a08dc23acb938818c055213c6fa344e48cd8c9d6->enter($__internal_5df2332d057e8b03ef119519a08dc23acb938818c055213c6fa344e48cd8c9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_44bc13c0012c52b7b92fb61af05ad282d65949e69b5e40a5d9217d384d5b4a8a->leave($__internal_44bc13c0012c52b7b92fb61af05ad282d65949e69b5e40a5d9217d384d5b4a8a_prof);

        
        $__internal_5df2332d057e8b03ef119519a08dc23acb938818c055213c6fa344e48cd8c9d6->leave($__internal_5df2332d057e8b03ef119519a08dc23acb938818c055213c6fa344e48cd8c9d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
