<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_0864be2afad91d2411a71551e9c77ee3a3eba8bbc715beafa999afa84b3738dc extends Twig_Template
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
        $__internal_3262733747cc0b482fc563629520e3292d6b3a0f3bf5862794cf3608817c9159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3262733747cc0b482fc563629520e3292d6b3a0f3bf5862794cf3608817c9159->enter($__internal_3262733747cc0b482fc563629520e3292d6b3a0f3bf5862794cf3608817c9159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        $__internal_bfe6f1db36575bd4c5ed7222753b26271da11123b7c6bcef1ae6041b09d4ee8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe6f1db36575bd4c5ed7222753b26271da11123b7c6bcef1ae6041b09d4ee8f->enter($__internal_bfe6f1db36575bd4c5ed7222753b26271da11123b7c6bcef1ae6041b09d4ee8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => ($context["token"] ?? $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_3262733747cc0b482fc563629520e3292d6b3a0f3bf5862794cf3608817c9159->leave($__internal_3262733747cc0b482fc563629520e3292d6b3a0f3bf5862794cf3608817c9159_prof);

        
        $__internal_bfe6f1db36575bd4c5ed7222753b26271da11123b7c6bcef1ae6041b09d4ee8f->leave($__internal_bfe6f1db36575bd4c5ed7222753b26271da11123b7c6bcef1ae6041b09d4ee8f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Resetting:reset_content.html.twig", "/home/thomas/thomascv/cv/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset_content.html.twig");
    }
}
