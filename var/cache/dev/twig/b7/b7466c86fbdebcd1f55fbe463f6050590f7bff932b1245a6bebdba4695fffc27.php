<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_1a1a1fcc1e115fa13c036fffe5e9a3362acc8f34fa7d21f466d16e9b76ccb94d extends Twig_Template
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
        $__internal_1b591fa248f68687fc772c4f10d52af565b41176ca7068fd9262837f610c3b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b591fa248f68687fc772c4f10d52af565b41176ca7068fd9262837f610c3b4e->enter($__internal_1b591fa248f68687fc772c4f10d52af565b41176ca7068fd9262837f610c3b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_bd7eee903c2822c2ddde0c432c7634eea9fbe3ec83fca3eb2af5d6b3c7c05b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7eee903c2822c2ddde0c432c7634eea9fbe3ec83fca3eb2af5d6b3c7c05b5e->enter($__internal_bd7eee903c2822c2ddde0c432c7634eea9fbe3ec83fca3eb2af5d6b3c7c05b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_1b591fa248f68687fc772c4f10d52af565b41176ca7068fd9262837f610c3b4e->leave($__internal_1b591fa248f68687fc772c4f10d52af565b41176ca7068fd9262837f610c3b4e_prof);

        
        $__internal_bd7eee903c2822c2ddde0c432c7634eea9fbe3ec83fca3eb2af5d6b3c7c05b5e->leave($__internal_bd7eee903c2822c2ddde0c432c7634eea9fbe3ec83fca3eb2af5d6b3c7c05b5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}