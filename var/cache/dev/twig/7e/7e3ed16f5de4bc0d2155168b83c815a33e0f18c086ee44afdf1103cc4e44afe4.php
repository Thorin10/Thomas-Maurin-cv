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
        $__internal_400904d5a1e470bd8577ad03c24ce991c02106a08cdbbba33ab5de50bcfb5572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400904d5a1e470bd8577ad03c24ce991c02106a08cdbbba33ab5de50bcfb5572->enter($__internal_400904d5a1e470bd8577ad03c24ce991c02106a08cdbbba33ab5de50bcfb5572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a24d7a3dd47a0cc8d9100cf85e8d44133095b5576d77ded1308e4934d046002a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24d7a3dd47a0cc8d9100cf85e8d44133095b5576d77ded1308e4934d046002a->enter($__internal_a24d7a3dd47a0cc8d9100cf85e8d44133095b5576d77ded1308e4934d046002a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_400904d5a1e470bd8577ad03c24ce991c02106a08cdbbba33ab5de50bcfb5572->leave($__internal_400904d5a1e470bd8577ad03c24ce991c02106a08cdbbba33ab5de50bcfb5572_prof);

        
        $__internal_a24d7a3dd47a0cc8d9100cf85e8d44133095b5576d77ded1308e4934d046002a->leave($__internal_a24d7a3dd47a0cc8d9100cf85e8d44133095b5576d77ded1308e4934d046002a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0550abd378a5fbeffc96518055f961bcac6ada4103156c451f76c3ed570f290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0550abd378a5fbeffc96518055f961bcac6ada4103156c451f76c3ed570f290->enter($__internal_e0550abd378a5fbeffc96518055f961bcac6ada4103156c451f76c3ed570f290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_140bdaffc56ceff72465b21b839f9f87495c68c8f232226222808ac12eecc94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140bdaffc56ceff72465b21b839f9f87495c68c8f232226222808ac12eecc94a->enter($__internal_140bdaffc56ceff72465b21b839f9f87495c68c8f232226222808ac12eecc94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_140bdaffc56ceff72465b21b839f9f87495c68c8f232226222808ac12eecc94a->leave($__internal_140bdaffc56ceff72465b21b839f9f87495c68c8f232226222808ac12eecc94a_prof);

        
        $__internal_e0550abd378a5fbeffc96518055f961bcac6ada4103156c451f76c3ed570f290->leave($__internal_e0550abd378a5fbeffc96518055f961bcac6ada4103156c451f76c3ed570f290_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a5605191ac35178d7f68b3da95d5c0c12445b3f2d8a8eaed4aa008a06e8ad40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5605191ac35178d7f68b3da95d5c0c12445b3f2d8a8eaed4aa008a06e8ad40->enter($__internal_2a5605191ac35178d7f68b3da95d5c0c12445b3f2d8a8eaed4aa008a06e8ad40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5bee53ba505e19888f0eb5b7cb1f380a325ed5a443e54a744472f06247042ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bee53ba505e19888f0eb5b7cb1f380a325ed5a443e54a744472f06247042ca6->enter($__internal_5bee53ba505e19888f0eb5b7cb1f380a325ed5a443e54a744472f06247042ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5bee53ba505e19888f0eb5b7cb1f380a325ed5a443e54a744472f06247042ca6->leave($__internal_5bee53ba505e19888f0eb5b7cb1f380a325ed5a443e54a744472f06247042ca6_prof);

        
        $__internal_2a5605191ac35178d7f68b3da95d5c0c12445b3f2d8a8eaed4aa008a06e8ad40->leave($__internal_2a5605191ac35178d7f68b3da95d5c0c12445b3f2d8a8eaed4aa008a06e8ad40_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f70e765ea879d0598cf463d6d38aab1b483467045b09da583b1db26faae57634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f70e765ea879d0598cf463d6d38aab1b483467045b09da583b1db26faae57634->enter($__internal_f70e765ea879d0598cf463d6d38aab1b483467045b09da583b1db26faae57634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b1e5de40c44301db1b8542b6ca600818a4246034a53976800b5947d5fd31a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1e5de40c44301db1b8542b6ca600818a4246034a53976800b5947d5fd31a94->enter($__internal_3b1e5de40c44301db1b8542b6ca600818a4246034a53976800b5947d5fd31a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3b1e5de40c44301db1b8542b6ca600818a4246034a53976800b5947d5fd31a94->leave($__internal_3b1e5de40c44301db1b8542b6ca600818a4246034a53976800b5947d5fd31a94_prof);

        
        $__internal_f70e765ea879d0598cf463d6d38aab1b483467045b09da583b1db26faae57634->leave($__internal_f70e765ea879d0598cf463d6d38aab1b483467045b09da583b1db26faae57634_prof);

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
", "@Twig/layout.html.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
