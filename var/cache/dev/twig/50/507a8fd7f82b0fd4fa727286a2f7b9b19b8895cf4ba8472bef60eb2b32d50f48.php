<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_471ff1a87f75a5c7910681fd78706e6ca534b880bf2af1e3299bdf6044fee3b0 extends Twig_Template
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
        $__internal_10e93f9d782c2c90bbaf201c1354059d5d0db335800735b5f5245c86653883ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e93f9d782c2c90bbaf201c1354059d5d0db335800735b5f5245c86653883ba->enter($__internal_10e93f9d782c2c90bbaf201c1354059d5d0db335800735b5f5245c86653883ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_99085212955573ee4601f4b3edb219ecf28db334cea00b6c41ad3cc93ffe3ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99085212955573ee4601f4b3edb219ecf28db334cea00b6c41ad3cc93ffe3ee2->enter($__internal_99085212955573ee4601f4b3edb219ecf28db334cea00b6c41ad3cc93ffe3ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_10e93f9d782c2c90bbaf201c1354059d5d0db335800735b5f5245c86653883ba->leave($__internal_10e93f9d782c2c90bbaf201c1354059d5d0db335800735b5f5245c86653883ba_prof);

        
        $__internal_99085212955573ee4601f4b3edb219ecf28db334cea00b6c41ad3cc93ffe3ee2->leave($__internal_99085212955573ee4601f4b3edb219ecf28db334cea00b6c41ad3cc93ffe3ee2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
