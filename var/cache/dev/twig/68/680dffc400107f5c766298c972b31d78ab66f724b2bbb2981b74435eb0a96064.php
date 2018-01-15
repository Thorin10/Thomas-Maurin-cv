<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_547710b13c46ac1c442e7f31bb4b8e8e0910f5f3c11f8b96a050ed062ec9da42 extends Twig_Template
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
        $__internal_ed284a2a03bd449c173d9ec205c8f9236216313dd74eb1d79f311a6af161b56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed284a2a03bd449c173d9ec205c8f9236216313dd74eb1d79f311a6af161b56e->enter($__internal_ed284a2a03bd449c173d9ec205c8f9236216313dd74eb1d79f311a6af161b56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_810be122bc69d6f3419cbfa707b089398aa51f146ff195ef2f8338961c3156dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_810be122bc69d6f3419cbfa707b089398aa51f146ff195ef2f8338961c3156dc->enter($__internal_810be122bc69d6f3419cbfa707b089398aa51f146ff195ef2f8338961c3156dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "<div id=\"bloc\" style=\"position:fixed; left: 35%; top: 100px\">
    ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
        <div>
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
</div>
";
        
        $__internal_ed284a2a03bd449c173d9ec205c8f9236216313dd74eb1d79f311a6af161b56e->leave($__internal_ed284a2a03bd449c173d9ec205c8f9236216313dd74eb1d79f311a6af161b56e_prof);

        
        $__internal_810be122bc69d6f3419cbfa707b089398aa51f146ff195ef2f8338961c3156dc->leave($__internal_810be122bc69d6f3419cbfa707b089398aa51f146ff195ef2f8338961c3156dc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  37 => 6,  33 => 5,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div id=\"bloc\" style=\"position:fixed; left: 35%; top: 100px\">
    {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
        <div>
            {{ form_widget(form) }}
                <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
            {{ form_end(form) }}
        </div>
</div>
", "@FOSUser/Registration/register_content.html.twig", "/home/thomas/thomascv/Blog-master/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
