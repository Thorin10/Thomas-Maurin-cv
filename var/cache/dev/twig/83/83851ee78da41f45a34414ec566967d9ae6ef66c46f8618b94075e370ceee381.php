<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_68784476f6d43f0a5b0495acac5ec7b553f2864e9bcb03e6ad0ec242f4157aef extends Twig_Template
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
        $__internal_c2b92b69362faac10470a642706cfe63639a83420ec6e5707e8e3544060f84bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b92b69362faac10470a642706cfe63639a83420ec6e5707e8e3544060f84bf->enter($__internal_c2b92b69362faac10470a642706cfe63639a83420ec6e5707e8e3544060f84bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_f969c958cdb548022d9f9e1005489d42e7986d2efa380bd25281f42be7b2ee43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f969c958cdb548022d9f9e1005489d42e7986d2efa380bd25281f42be7b2ee43->enter($__internal_f969c958cdb548022d9f9e1005489d42e7986d2efa380bd25281f42be7b2ee43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c2b92b69362faac10470a642706cfe63639a83420ec6e5707e8e3544060f84bf->leave($__internal_c2b92b69362faac10470a642706cfe63639a83420ec6e5707e8e3544060f84bf_prof);

        
        $__internal_f969c958cdb548022d9f9e1005489d42e7986d2efa380bd25281f42be7b2ee43->leave($__internal_f969c958cdb548022d9f9e1005489d42e7986d2efa380bd25281f42be7b2ee43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
