<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6672696f05ff9677cffbf127ed09d064d204e108c00240caf56711b3d1eb8805 extends Twig_Template
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
        $__internal_5c454e8573c5432197eb0a2dc07f85183db0c56630d941631199e442605eb8a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c454e8573c5432197eb0a2dc07f85183db0c56630d941631199e442605eb8a8->enter($__internal_5c454e8573c5432197eb0a2dc07f85183db0c56630d941631199e442605eb8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_911f17a766ceccaf79e40a3029ab99063052387251c2b9afde98c6ba957999bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911f17a766ceccaf79e40a3029ab99063052387251c2b9afde98c6ba957999bd->enter($__internal_911f17a766ceccaf79e40a3029ab99063052387251c2b9afde98c6ba957999bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5c454e8573c5432197eb0a2dc07f85183db0c56630d941631199e442605eb8a8->leave($__internal_5c454e8573c5432197eb0a2dc07f85183db0c56630d941631199e442605eb8a8_prof);

        
        $__internal_911f17a766ceccaf79e40a3029ab99063052387251c2b9afde98c6ba957999bd->leave($__internal_911f17a766ceccaf79e40a3029ab99063052387251c2b9afde98c6ba957999bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
