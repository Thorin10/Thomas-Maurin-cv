<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_12391b733519f21efbc9f622c4e4a660b2df29f425a555f03b093b4e1cda939a extends Twig_Template
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
        $__internal_21cdcd77c1c3ef415b85a44c15c4f83aa3e82bee5dd633e182643a3b5c07c4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21cdcd77c1c3ef415b85a44c15c4f83aa3e82bee5dd633e182643a3b5c07c4c7->enter($__internal_21cdcd77c1c3ef415b85a44c15c4f83aa3e82bee5dd633e182643a3b5c07c4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b96c85c2ab8c167e4a9226c5c66064a527190967972f21f826430939e01834f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96c85c2ab8c167e4a9226c5c66064a527190967972f21f826430939e01834f1->enter($__internal_b96c85c2ab8c167e4a9226c5c66064a527190967972f21f826430939e01834f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_21cdcd77c1c3ef415b85a44c15c4f83aa3e82bee5dd633e182643a3b5c07c4c7->leave($__internal_21cdcd77c1c3ef415b85a44c15c4f83aa3e82bee5dd633e182643a3b5c07c4c7_prof);

        
        $__internal_b96c85c2ab8c167e4a9226c5c66064a527190967972f21f826430939e01834f1->leave($__internal_b96c85c2ab8c167e4a9226c5c66064a527190967972f21f826430939e01834f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
