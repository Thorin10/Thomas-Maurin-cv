<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_baf4924d1ceb5fdc6f327f9cc18725a64c8521d8433d6991c669f50260717c2f extends Twig_Template
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
        $__internal_860dd7a2d6814e3c7cf2a600fc4ee984c817ea04e15dcdc5ed40ad40615525cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860dd7a2d6814e3c7cf2a600fc4ee984c817ea04e15dcdc5ed40ad40615525cd->enter($__internal_860dd7a2d6814e3c7cf2a600fc4ee984c817ea04e15dcdc5ed40ad40615525cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_adb19c8c88488e92b6c7989698c0d5ef0c840c3a9b27a3ac40e12bf921dc07f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb19c8c88488e92b6c7989698c0d5ef0c840c3a9b27a3ac40e12bf921dc07f2->enter($__internal_adb19c8c88488e92b6c7989698c0d5ef0c840c3a9b27a3ac40e12bf921dc07f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_860dd7a2d6814e3c7cf2a600fc4ee984c817ea04e15dcdc5ed40ad40615525cd->leave($__internal_860dd7a2d6814e3c7cf2a600fc4ee984c817ea04e15dcdc5ed40ad40615525cd_prof);

        
        $__internal_adb19c8c88488e92b6c7989698c0d5ef0c840c3a9b27a3ac40e12bf921dc07f2->leave($__internal_adb19c8c88488e92b6c7989698c0d5ef0c840c3a9b27a3ac40e12bf921dc07f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
