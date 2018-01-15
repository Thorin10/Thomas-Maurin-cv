<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_b7e82919a4307f0e801fc946e5760e53bee1b49fad8839ae2df5998597194ff8 extends Twig_Template
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
        $__internal_cce76f2d6954c18c76c9a49925cf3f7c1f299a578fd1ce3d065ee1c1f48c16a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cce76f2d6954c18c76c9a49925cf3f7c1f299a578fd1ce3d065ee1c1f48c16a5->enter($__internal_cce76f2d6954c18c76c9a49925cf3f7c1f299a578fd1ce3d065ee1c1f48c16a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_2bdc9837afff7a4560c5485c12d6d6daa973b04402c468de7f765bd4808b2b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bdc9837afff7a4560c5485c12d6d6daa973b04402c468de7f765bd4808b2b24->enter($__internal_2bdc9837afff7a4560c5485c12d6d6daa973b04402c468de7f765bd4808b2b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_cce76f2d6954c18c76c9a49925cf3f7c1f299a578fd1ce3d065ee1c1f48c16a5->leave($__internal_cce76f2d6954c18c76c9a49925cf3f7c1f299a578fd1ce3d065ee1c1f48c16a5_prof);

        
        $__internal_2bdc9837afff7a4560c5485c12d6d6daa973b04402c468de7f765bd4808b2b24->leave($__internal_2bdc9837afff7a4560c5485c12d6d6daa973b04402c468de7f765bd4808b2b24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
