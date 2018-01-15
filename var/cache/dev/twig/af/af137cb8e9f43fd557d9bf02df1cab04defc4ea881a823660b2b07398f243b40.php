<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_90ce54430afe59c1d6a98f97627d440fd36653e4463af2cfd55a611312cbf4e6 extends Twig_Template
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
        $__internal_78a961372a030b335f79541fd2c55b4ea629abe619ef528d9fbfad13ad35b781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a961372a030b335f79541fd2c55b4ea629abe619ef528d9fbfad13ad35b781->enter($__internal_78a961372a030b335f79541fd2c55b4ea629abe619ef528d9fbfad13ad35b781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_dbb12c791f9347e78b201d8f29dc0f774a64109211f16f02ea649e590bbc8a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb12c791f9347e78b201d8f29dc0f774a64109211f16f02ea649e590bbc8a3c->enter($__internal_dbb12c791f9347e78b201d8f29dc0f774a64109211f16f02ea649e590bbc8a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_78a961372a030b335f79541fd2c55b4ea629abe619ef528d9fbfad13ad35b781->leave($__internal_78a961372a030b335f79541fd2c55b4ea629abe619ef528d9fbfad13ad35b781_prof);

        
        $__internal_dbb12c791f9347e78b201d8f29dc0f774a64109211f16f02ea649e590bbc8a3c->leave($__internal_dbb12c791f9347e78b201d8f29dc0f774a64109211f16f02ea649e590bbc8a3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
