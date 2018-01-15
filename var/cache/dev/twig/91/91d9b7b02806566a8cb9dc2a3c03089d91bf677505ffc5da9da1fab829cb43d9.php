<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7b79f900fa749e90fbd382414456784d091939acf3b33b1a2f9d60209ff60313 extends Twig_Template
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
        $__internal_2ad4f1db845dbb3b3e346102168fa8affc2c486324350ad8612ace0c0b44a183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad4f1db845dbb3b3e346102168fa8affc2c486324350ad8612ace0c0b44a183->enter($__internal_2ad4f1db845dbb3b3e346102168fa8affc2c486324350ad8612ace0c0b44a183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_0e025069794cce91bd000518133cf79f18f2a01c6e8381f5276213baaa0ef27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e025069794cce91bd000518133cf79f18f2a01c6e8381f5276213baaa0ef27f->enter($__internal_0e025069794cce91bd000518133cf79f18f2a01c6e8381f5276213baaa0ef27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2ad4f1db845dbb3b3e346102168fa8affc2c486324350ad8612ace0c0b44a183->leave($__internal_2ad4f1db845dbb3b3e346102168fa8affc2c486324350ad8612ace0c0b44a183_prof);

        
        $__internal_0e025069794cce91bd000518133cf79f18f2a01c6e8381f5276213baaa0ef27f->leave($__internal_0e025069794cce91bd000518133cf79f18f2a01c6e8381f5276213baaa0ef27f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
