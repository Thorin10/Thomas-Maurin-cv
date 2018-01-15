<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_dd963bc106b0067903fbb6af7026d55408d5a5ed044435fd034d01fda0fdcebf extends Twig_Template
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
        $__internal_b2fc025726cd3a3c72f84269a047900b82975ef74bb3dd03326ea7656a1fc7f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2fc025726cd3a3c72f84269a047900b82975ef74bb3dd03326ea7656a1fc7f4->enter($__internal_b2fc025726cd3a3c72f84269a047900b82975ef74bb3dd03326ea7656a1fc7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c901a405f987b64f135d1cea6071949a995662abf027ae942c688d75754fc62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c901a405f987b64f135d1cea6071949a995662abf027ae942c688d75754fc62a->enter($__internal_c901a405f987b64f135d1cea6071949a995662abf027ae942c688d75754fc62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b2fc025726cd3a3c72f84269a047900b82975ef74bb3dd03326ea7656a1fc7f4->leave($__internal_b2fc025726cd3a3c72f84269a047900b82975ef74bb3dd03326ea7656a1fc7f4_prof);

        
        $__internal_c901a405f987b64f135d1cea6071949a995662abf027ae942c688d75754fc62a->leave($__internal_c901a405f987b64f135d1cea6071949a995662abf027ae942c688d75754fc62a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
