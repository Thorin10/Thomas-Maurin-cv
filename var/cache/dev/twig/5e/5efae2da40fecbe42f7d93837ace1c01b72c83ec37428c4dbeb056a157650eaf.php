<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_ac51364c6cb705de8a175eb90fba4c742508f34a4c13a259e2e83a16f8a4485a extends Twig_Template
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
        $__internal_c17f16ec986517001bf9a5022e9ff6d88234c1d1468fb4802faae51301243ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c17f16ec986517001bf9a5022e9ff6d88234c1d1468fb4802faae51301243ffe->enter($__internal_c17f16ec986517001bf9a5022e9ff6d88234c1d1468fb4802faae51301243ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_410c8e1f529c6ae39409592afe68aad0a7e75f3195cf1e697d541a8aa31d4a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410c8e1f529c6ae39409592afe68aad0a7e75f3195cf1e697d541a8aa31d4a4c->enter($__internal_410c8e1f529c6ae39409592afe68aad0a7e75f3195cf1e697d541a8aa31d4a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c17f16ec986517001bf9a5022e9ff6d88234c1d1468fb4802faae51301243ffe->leave($__internal_c17f16ec986517001bf9a5022e9ff6d88234c1d1468fb4802faae51301243ffe_prof);

        
        $__internal_410c8e1f529c6ae39409592afe68aad0a7e75f3195cf1e697d541a8aa31d4a4c->leave($__internal_410c8e1f529c6ae39409592afe68aad0a7e75f3195cf1e697d541a8aa31d4a4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
