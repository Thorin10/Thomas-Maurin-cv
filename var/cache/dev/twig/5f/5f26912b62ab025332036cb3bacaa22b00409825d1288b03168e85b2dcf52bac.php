<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_e2adab2bb065f1a696e7b6aeabc953c3dd093ea88a2e11d088826c296acc3fdc extends Twig_Template
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
        $__internal_8f1cf7ef47fec389a8fc682d93fa4e286e1c17f78cfae0967b615a4eb84dc2fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f1cf7ef47fec389a8fc682d93fa4e286e1c17f78cfae0967b615a4eb84dc2fa->enter($__internal_8f1cf7ef47fec389a8fc682d93fa4e286e1c17f78cfae0967b615a4eb84dc2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_29db60b18bc75b1adc1e5a1cc9b557ed8cb49b647404e35cb60b476750e37c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29db60b18bc75b1adc1e5a1cc9b557ed8cb49b647404e35cb60b476750e37c19->enter($__internal_29db60b18bc75b1adc1e5a1cc9b557ed8cb49b647404e35cb60b476750e37c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_8f1cf7ef47fec389a8fc682d93fa4e286e1c17f78cfae0967b615a4eb84dc2fa->leave($__internal_8f1cf7ef47fec389a8fc682d93fa4e286e1c17f78cfae0967b615a4eb84dc2fa_prof);

        
        $__internal_29db60b18bc75b1adc1e5a1cc9b557ed8cb49b647404e35cb60b476750e37c19->leave($__internal_29db60b18bc75b1adc1e5a1cc9b557ed8cb49b647404e35cb60b476750e37c19_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
