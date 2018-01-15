<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_666777e8829e314efedca9c30d134f69484f569779fd798c2eddc95c886ba859 extends Twig_Template
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
        $__internal_c8e1d09972d7af3447ddaac1364c200ea1f252b527c416ebf4f2b7641b24a893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e1d09972d7af3447ddaac1364c200ea1f252b527c416ebf4f2b7641b24a893->enter($__internal_c8e1d09972d7af3447ddaac1364c200ea1f252b527c416ebf4f2b7641b24a893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_6d76adb7dce377be8f547a67be993e329b91300d0d62930f4d41e481437a122a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d76adb7dce377be8f547a67be993e329b91300d0d62930f4d41e481437a122a->enter($__internal_6d76adb7dce377be8f547a67be993e329b91300d0d62930f4d41e481437a122a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c8e1d09972d7af3447ddaac1364c200ea1f252b527c416ebf4f2b7641b24a893->leave($__internal_c8e1d09972d7af3447ddaac1364c200ea1f252b527c416ebf4f2b7641b24a893_prof);

        
        $__internal_6d76adb7dce377be8f547a67be993e329b91300d0d62930f4d41e481437a122a->leave($__internal_6d76adb7dce377be8f547a67be993e329b91300d0d62930f4d41e481437a122a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
