<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_a4f7f505420c7756955bf5f669ec5671b11297092eea218508aa8aa1ff96d75a extends Twig_Template
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
        $__internal_c3ef8e051c1f406708f61a89c9660dac85e69897b03dc9c0d8f835ee97e715d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ef8e051c1f406708f61a89c9660dac85e69897b03dc9c0d8f835ee97e715d5->enter($__internal_c3ef8e051c1f406708f61a89c9660dac85e69897b03dc9c0d8f835ee97e715d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_02600d03f268956569eafc4f97c8227e2aad630468016d107595241e2a81fcd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02600d03f268956569eafc4f97c8227e2aad630468016d107595241e2a81fcd4->enter($__internal_02600d03f268956569eafc4f97c8227e2aad630468016d107595241e2a81fcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c3ef8e051c1f406708f61a89c9660dac85e69897b03dc9c0d8f835ee97e715d5->leave($__internal_c3ef8e051c1f406708f61a89c9660dac85e69897b03dc9c0d8f835ee97e715d5_prof);

        
        $__internal_02600d03f268956569eafc4f97c8227e2aad630468016d107595241e2a81fcd4->leave($__internal_02600d03f268956569eafc4f97c8227e2aad630468016d107595241e2a81fcd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
