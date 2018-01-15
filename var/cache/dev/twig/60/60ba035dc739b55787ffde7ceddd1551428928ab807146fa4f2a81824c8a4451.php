<?php

/* SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig */
class __TwigTemplate_902ac229d27f7a4cf6ea8af59517dc43cbae6d7f1f4f4e3081341376b4eb11d7 extends Twig_Template
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
        $__internal_616af09b0703cbc709e1d878a0f88d8c2ad87cf8f9429468c06166a1d37a8464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_616af09b0703cbc709e1d878a0f88d8c2ad87cf8f9429468c06166a1d37a8464->enter($__internal_616af09b0703cbc709e1d878a0f88d8c2ad87cf8f9429468c06166a1d37a8464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig"));

        $__internal_9d06ca767ac9515ef7cb735c79ec9b714e38b95e194fe61aabd1df9940de8706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d06ca767ac9515ef7cb735c79ec9b714e38b95e194fe61aabd1df9940de8706->enter($__internal_9d06ca767ac9515ef7cb735c79ec9b714e38b95e194fe61aabd1df9940de8706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 2
            echo "    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_616af09b0703cbc709e1d878a0f88d8c2ad87cf8f9429468c06166a1d37a8464->leave($__internal_616af09b0703cbc709e1d878a0f88d8c2ad87cf8f9429468c06166a1d37a8464_prof);

        
        $__internal_9d06ca767ac9515ef7cb735c79ec9b714e38b95e194fe61aabd1df9940de8706->leave($__internal_9d06ca767ac9515ef7cb735c79ec9b714e38b95e194fe61aabd1df9940de8706_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for error in form.vars.errors %}
    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        {{ error.message }}
    </div>
{% endfor %}
", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/Helper/render_form_dismissable_errors.html.twig");
    }
}
