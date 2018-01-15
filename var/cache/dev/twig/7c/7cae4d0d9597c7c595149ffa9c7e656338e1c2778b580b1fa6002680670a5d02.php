<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e1fbc0cd37824b468b6f00cff5a1ea03a66e67d09d0801d866d2fb1db4f6c752 extends Twig_Template
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
        $__internal_af48b941779134d1e59aa7b5d9f424da4df6bd280a89744b2508931a5c57fab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af48b941779134d1e59aa7b5d9f424da4df6bd280a89744b2508931a5c57fab8->enter($__internal_af48b941779134d1e59aa7b5d9f424da4df6bd280a89744b2508931a5c57fab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_c4ac7def44ec58e7137cc06cd08ccaf86e8fae88bcb4a58ba7878797806b3efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ac7def44ec58e7137cc06cd08ccaf86e8fae88bcb4a58ba7878797806b3efd->enter($__internal_c4ac7def44ec58e7137cc06cd08ccaf86e8fae88bcb4a58ba7878797806b3efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_af48b941779134d1e59aa7b5d9f424da4df6bd280a89744b2508931a5c57fab8->leave($__internal_af48b941779134d1e59aa7b5d9f424da4df6bd280a89744b2508931a5c57fab8_prof);

        
        $__internal_c4ac7def44ec58e7137cc06cd08ccaf86e8fae88bcb4a58ba7878797806b3efd->leave($__internal_c4ac7def44ec58e7137cc06cd08ccaf86e8fae88bcb4a58ba7878797806b3efd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
