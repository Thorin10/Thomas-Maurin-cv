<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a101f61e7b0b82ca277e2ac7813e62bf7904500f85a6ea7b674d92ffd9d2de1d extends Twig_Template
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
        $__internal_619fae2f93d867bfdd125cc8cd6f4df3e685b5bae0e55d96af39bf2e2e6beb85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619fae2f93d867bfdd125cc8cd6f4df3e685b5bae0e55d96af39bf2e2e6beb85->enter($__internal_619fae2f93d867bfdd125cc8cd6f4df3e685b5bae0e55d96af39bf2e2e6beb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_82f8da1d4f71032ff1f4a0749867391667fb90aebd31e6cadd14e28b681f99ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f8da1d4f71032ff1f4a0749867391667fb90aebd31e6cadd14e28b681f99ae->enter($__internal_82f8da1d4f71032ff1f4a0749867391667fb90aebd31e6cadd14e28b681f99ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_619fae2f93d867bfdd125cc8cd6f4df3e685b5bae0e55d96af39bf2e2e6beb85->leave($__internal_619fae2f93d867bfdd125cc8cd6f4df3e685b5bae0e55d96af39bf2e2e6beb85_prof);

        
        $__internal_82f8da1d4f71032ff1f4a0749867391667fb90aebd31e6cadd14e28b681f99ae->leave($__internal_82f8da1d4f71032ff1f4a0749867391667fb90aebd31e6cadd14e28b681f99ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
