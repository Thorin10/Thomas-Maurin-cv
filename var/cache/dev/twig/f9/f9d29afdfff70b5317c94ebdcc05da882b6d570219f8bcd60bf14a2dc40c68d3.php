<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d1272558dadd6c8a3b46a17a3ee68780c7d1fb23d6d5b95e74ffbd8a428a9e82 extends Twig_Template
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
        $__internal_fc5eae5a344d4788d9661f6c66c38e63dab5eb6f8a8c71819db9ec5f74c0d36c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5eae5a344d4788d9661f6c66c38e63dab5eb6f8a8c71819db9ec5f74c0d36c->enter($__internal_fc5eae5a344d4788d9661f6c66c38e63dab5eb6f8a8c71819db9ec5f74c0d36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_2de86dcf6a37f4c76f2610084b65bdef5b480ea0de528e5522b4fb897fb2790b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de86dcf6a37f4c76f2610084b65bdef5b480ea0de528e5522b4fb897fb2790b->enter($__internal_2de86dcf6a37f4c76f2610084b65bdef5b480ea0de528e5522b4fb897fb2790b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_fc5eae5a344d4788d9661f6c66c38e63dab5eb6f8a8c71819db9ec5f74c0d36c->leave($__internal_fc5eae5a344d4788d9661f6c66c38e63dab5eb6f8a8c71819db9ec5f74c0d36c_prof);

        
        $__internal_2de86dcf6a37f4c76f2610084b65bdef5b480ea0de528e5522b4fb897fb2790b->leave($__internal_2de86dcf6a37f4c76f2610084b65bdef5b480ea0de528e5522b4fb897fb2790b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
