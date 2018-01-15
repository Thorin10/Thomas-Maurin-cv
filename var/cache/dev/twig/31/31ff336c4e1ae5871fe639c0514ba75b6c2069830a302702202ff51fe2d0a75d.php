<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_14a90c1eb19780e47bdae9aabeb9807cbcc48bb295163b6c9e1d141fd23f5a27 extends Twig_Template
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
        $__internal_5e4b6c3e7368294b7ec94ddc87670da48e57e651e66e20a925a80c626437cc7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e4b6c3e7368294b7ec94ddc87670da48e57e651e66e20a925a80c626437cc7f->enter($__internal_5e4b6c3e7368294b7ec94ddc87670da48e57e651e66e20a925a80c626437cc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_1c158e4e92c91178c5f33257e59a285d140a48e6c24a2f4f0fa66b787f666555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c158e4e92c91178c5f33257e59a285d140a48e6c24a2f4f0fa66b787f666555->enter($__internal_1c158e4e92c91178c5f33257e59a285d140a48e6c24a2f4f0fa66b787f666555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5e4b6c3e7368294b7ec94ddc87670da48e57e651e66e20a925a80c626437cc7f->leave($__internal_5e4b6c3e7368294b7ec94ddc87670da48e57e651e66e20a925a80c626437cc7f_prof);

        
        $__internal_1c158e4e92c91178c5f33257e59a285d140a48e6c24a2f4f0fa66b787f666555->leave($__internal_1c158e4e92c91178c5f33257e59a285d140a48e6c24a2f4f0fa66b787f666555_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
