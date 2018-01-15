<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_4589cfeaa08201e4980f74d7dc6876d9b60f37edd98907691289f1f4b54dcbc0 extends Twig_Template
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
        $__internal_a3b59519df6c26638a94963727f4b4ee5bd165df213e7724b87ed835a1df1472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b59519df6c26638a94963727f4b4ee5bd165df213e7724b87ed835a1df1472->enter($__internal_a3b59519df6c26638a94963727f4b4ee5bd165df213e7724b87ed835a1df1472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5c1b8ae10991953995b27579bc0abe3b76427b5b855a0f41193996db392b6bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1b8ae10991953995b27579bc0abe3b76427b5b855a0f41193996db392b6bd9->enter($__internal_5c1b8ae10991953995b27579bc0abe3b76427b5b855a0f41193996db392b6bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a3b59519df6c26638a94963727f4b4ee5bd165df213e7724b87ed835a1df1472->leave($__internal_a3b59519df6c26638a94963727f4b4ee5bd165df213e7724b87ed835a1df1472_prof);

        
        $__internal_5c1b8ae10991953995b27579bc0abe3b76427b5b855a0f41193996db392b6bd9->leave($__internal_5c1b8ae10991953995b27579bc0abe3b76427b5b855a0f41193996db392b6bd9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
