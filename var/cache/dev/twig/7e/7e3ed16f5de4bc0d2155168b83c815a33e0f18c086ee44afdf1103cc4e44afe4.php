<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_f4a28a29b22fe6fdeae1808ac6c2dc2658dba16f46f863442fb15182f15ba859 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a15cac1b4440cebfb8a513ec1a54c2f377dc3278632985a3ab99c2dc5b53bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a15cac1b4440cebfb8a513ec1a54c2f377dc3278632985a3ab99c2dc5b53bb6->enter($__internal_9a15cac1b4440cebfb8a513ec1a54c2f377dc3278632985a3ab99c2dc5b53bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5c1a861ccff5ea85beaad4aeb74100e0747c6a2a2134ffe350a240ff018582c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1a861ccff5ea85beaad4aeb74100e0747c6a2a2134ffe350a240ff018582c4->enter($__internal_5c1a861ccff5ea85beaad4aeb74100e0747c6a2a2134ffe350a240ff018582c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_9a15cac1b4440cebfb8a513ec1a54c2f377dc3278632985a3ab99c2dc5b53bb6->leave($__internal_9a15cac1b4440cebfb8a513ec1a54c2f377dc3278632985a3ab99c2dc5b53bb6_prof);

        
        $__internal_5c1a861ccff5ea85beaad4aeb74100e0747c6a2a2134ffe350a240ff018582c4->leave($__internal_5c1a861ccff5ea85beaad4aeb74100e0747c6a2a2134ffe350a240ff018582c4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d195635f7fc90b103da51b94966710e7268e5938687109eba48a55e1d4f88657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d195635f7fc90b103da51b94966710e7268e5938687109eba48a55e1d4f88657->enter($__internal_d195635f7fc90b103da51b94966710e7268e5938687109eba48a55e1d4f88657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8acadd49f64915dab552cf7b846cd1c297dab6ecec5b16a3632ac3b06cce4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8acadd49f64915dab552cf7b846cd1c297dab6ecec5b16a3632ac3b06cce4e4->enter($__internal_e8acadd49f64915dab552cf7b846cd1c297dab6ecec5b16a3632ac3b06cce4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e8acadd49f64915dab552cf7b846cd1c297dab6ecec5b16a3632ac3b06cce4e4->leave($__internal_e8acadd49f64915dab552cf7b846cd1c297dab6ecec5b16a3632ac3b06cce4e4_prof);

        
        $__internal_d195635f7fc90b103da51b94966710e7268e5938687109eba48a55e1d4f88657->leave($__internal_d195635f7fc90b103da51b94966710e7268e5938687109eba48a55e1d4f88657_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f512265b7110462487a0d454551c149ba85fca896e92f5390e23768fd63628b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f512265b7110462487a0d454551c149ba85fca896e92f5390e23768fd63628b->enter($__internal_7f512265b7110462487a0d454551c149ba85fca896e92f5390e23768fd63628b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b368ecc2554c50b588fc6cadfb6a5aa74d8836660f6ac7c636a3125cd42abb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b368ecc2554c50b588fc6cadfb6a5aa74d8836660f6ac7c636a3125cd42abb3e->enter($__internal_b368ecc2554c50b588fc6cadfb6a5aa74d8836660f6ac7c636a3125cd42abb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b368ecc2554c50b588fc6cadfb6a5aa74d8836660f6ac7c636a3125cd42abb3e->leave($__internal_b368ecc2554c50b588fc6cadfb6a5aa74d8836660f6ac7c636a3125cd42abb3e_prof);

        
        $__internal_7f512265b7110462487a0d454551c149ba85fca896e92f5390e23768fd63628b->leave($__internal_7f512265b7110462487a0d454551c149ba85fca896e92f5390e23768fd63628b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_64c0e0c7fce38538fd6d4ec2b250d5c26ba8b91fff680476cb641f5e42fbef52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c0e0c7fce38538fd6d4ec2b250d5c26ba8b91fff680476cb641f5e42fbef52->enter($__internal_64c0e0c7fce38538fd6d4ec2b250d5c26ba8b91fff680476cb641f5e42fbef52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4c7e5e03201ac9de3503067c44782f0602569c6e4148841bfa45cbc8d1413c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c7e5e03201ac9de3503067c44782f0602569c6e4148841bfa45cbc8d1413c1->enter($__internal_e4c7e5e03201ac9de3503067c44782f0602569c6e4148841bfa45cbc8d1413c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e4c7e5e03201ac9de3503067c44782f0602569c6e4148841bfa45cbc8d1413c1->leave($__internal_e4c7e5e03201ac9de3503067c44782f0602569c6e4148841bfa45cbc8d1413c1_prof);

        
        $__internal_64c0e0c7fce38538fd6d4ec2b250d5c26ba8b91fff680476cb641f5e42fbef52->leave($__internal_64c0e0c7fce38538fd6d4ec2b250d5c26ba8b91fff680476cb641f5e42fbef52_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/thomas/thomascv/Blog-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
