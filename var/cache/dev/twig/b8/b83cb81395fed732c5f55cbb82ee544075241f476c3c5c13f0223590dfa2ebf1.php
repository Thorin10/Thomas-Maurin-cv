<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_bf86aae533517ad6406ec90371000c271b563366d2245260ba0d3ee8f7b43694 extends Twig_Template
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
        $__internal_78ee77621bbd9a50092fb5f7dafc856a7cb88e7a58c00a42010dc6217df7a1a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ee77621bbd9a50092fb5f7dafc856a7cb88e7a58c00a42010dc6217df7a1a5->enter($__internal_78ee77621bbd9a50092fb5f7dafc856a7cb88e7a58c00a42010dc6217df7a1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_8baa54eba826c1a4b15b8c2682021897e0cf41f92d4e73413695242c79285a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8baa54eba826c1a4b15b8c2682021897e0cf41f92d4e73413695242c79285a16->enter($__internal_8baa54eba826c1a4b15b8c2682021897e0cf41f92d4e73413695242c79285a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_78ee77621bbd9a50092fb5f7dafc856a7cb88e7a58c00a42010dc6217df7a1a5->leave($__internal_78ee77621bbd9a50092fb5f7dafc856a7cb88e7a58c00a42010dc6217df7a1a5_prof);

        
        $__internal_8baa54eba826c1a4b15b8c2682021897e0cf41f92d4e73413695242c79285a16->leave($__internal_8baa54eba826c1a4b15b8c2682021897e0cf41f92d4e73413695242c79285a16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
