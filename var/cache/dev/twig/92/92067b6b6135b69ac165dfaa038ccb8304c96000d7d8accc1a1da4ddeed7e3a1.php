<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_385443ccb7737b0a05b43a9d21d4d705ee81484a0bac84bf52e626baf9a6aa1f extends Twig_Template
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
        $__internal_0d3cdb741b902e56b2996cab5911ca32bf0ea8644ce72a767f18f10c51278f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d3cdb741b902e56b2996cab5911ca32bf0ea8644ce72a767f18f10c51278f02->enter($__internal_0d3cdb741b902e56b2996cab5911ca32bf0ea8644ce72a767f18f10c51278f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_187ed72452d3922fcf5525e47b37c45511b36d17d9be07a984573ac8821551dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187ed72452d3922fcf5525e47b37c45511b36d17d9be07a984573ac8821551dc->enter($__internal_187ed72452d3922fcf5525e47b37c45511b36d17d9be07a984573ac8821551dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_0d3cdb741b902e56b2996cab5911ca32bf0ea8644ce72a767f18f10c51278f02->leave($__internal_0d3cdb741b902e56b2996cab5911ca32bf0ea8644ce72a767f18f10c51278f02_prof);

        
        $__internal_187ed72452d3922fcf5525e47b37c45511b36d17d9be07a984573ac8821551dc->leave($__internal_187ed72452d3922fcf5525e47b37c45511b36d17d9be07a984573ac8821551dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/color_widget.html.php");
    }
}
