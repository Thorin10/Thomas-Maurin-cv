<?php

/* base.html.twig */
class __TwigTemplate_1ca01c915f4986e6c723e18dca3c659755fc9c49cfec89bd8368f6e8543fa0d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ed5216fb21e2430d1b2d8542c05879fe15d53f00326fb75272778090dc8ec69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed5216fb21e2430d1b2d8542c05879fe15d53f00326fb75272778090dc8ec69->enter($__internal_7ed5216fb21e2430d1b2d8542c05879fe15d53f00326fb75272778090dc8ec69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6b6e273cda24cafa6715c5a06eca3f20f8d6f82358ac2b40ef7498945493f0e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6e273cda24cafa6715c5a06eca3f20f8d6f82358ac2b40ef7498945493f0e7->enter($__internal_6b6e273cda24cafa6715c5a06eca3f20f8d6f82358ac2b40ef7498945493f0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap/bootstrap-grid.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap/bootstrap-reboot.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn...\">
</head>

<body>

<nav class=\"navbar navbar-expand-md navbar-dark navbar-custom\">
    <a class=\"navbar-brand\" style=\"color: white\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Maurin Thomas"), "html", null, true);
        echo "</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbars\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        <div class=\"wrapper\"></div>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbars\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item";
        // line 24
        echo ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "homepage")) ? (" active") : (""));
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo " <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                ";
        // line 28
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 29
            echo "                <a class=\"nav-link navbar-log\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Déconnexion", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
                ";
        } else {
            // line 33
            echo "                <a class=\"nav-link navbar-log\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Connexion", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            <li class=\"nav-item\">
                <a class=\"nav-link navbar-signup\" href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inscription", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            </li>
            ";
        }
        // line 38
        echo "            </li>
        </ul>
    </div>

</nav>
";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 44
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 45
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
<div>
    ";
        // line 52
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 54
        echo "</div>
";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "</body>
</html>";
        
        $__internal_7ed5216fb21e2430d1b2d8542c05879fe15d53f00326fb75272778090dc8ec69->leave($__internal_7ed5216fb21e2430d1b2d8542c05879fe15d53f00326fb75272778090dc8ec69_prof);

        
        $__internal_6b6e273cda24cafa6715c5a06eca3f20f8d6f82358ac2b40ef7498945493f0e7->leave($__internal_6b6e273cda24cafa6715c5a06eca3f20f8d6f82358ac2b40ef7498945493f0e7_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec96c7a7fbc2dad8976c0be4b1c61b84f35e19c68768feb33afba61982fcb78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec96c7a7fbc2dad8976c0be4b1c61b84f35e19c68768feb33afba61982fcb78e->enter($__internal_ec96c7a7fbc2dad8976c0be4b1c61b84f35e19c68768feb33afba61982fcb78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5d34331b717771c866374d7956e0b0743c303eb825776f8e3adec4dd9a78051d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d34331b717771c866374d7956e0b0743c303eb825776f8e3adec4dd9a78051d->enter($__internal_5d34331b717771c866374d7956e0b0743c303eb825776f8e3adec4dd9a78051d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Maurin Thomas";
        
        $__internal_5d34331b717771c866374d7956e0b0743c303eb825776f8e3adec4dd9a78051d->leave($__internal_5d34331b717771c866374d7956e0b0743c303eb825776f8e3adec4dd9a78051d_prof);

        
        $__internal_ec96c7a7fbc2dad8976c0be4b1c61b84f35e19c68768feb33afba61982fcb78e->leave($__internal_ec96c7a7fbc2dad8976c0be4b1c61b84f35e19c68768feb33afba61982fcb78e_prof);

    }

    // line 52
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_389242dd698ff806887299a4e9d1f54ba703e233b6089bff779049b946e407e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_389242dd698ff806887299a4e9d1f54ba703e233b6089bff779049b946e407e6->enter($__internal_389242dd698ff806887299a4e9d1f54ba703e233b6089bff779049b946e407e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f557c488235381f48921eeddf0f78506690f59d519f410f0388d4ed97189bbe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f557c488235381f48921eeddf0f78506690f59d519f410f0388d4ed97189bbe5->enter($__internal_f557c488235381f48921eeddf0f78506690f59d519f410f0388d4ed97189bbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 53
        echo "    ";
        
        $__internal_f557c488235381f48921eeddf0f78506690f59d519f410f0388d4ed97189bbe5->leave($__internal_f557c488235381f48921eeddf0f78506690f59d519f410f0388d4ed97189bbe5_prof);

        
        $__internal_389242dd698ff806887299a4e9d1f54ba703e233b6089bff779049b946e407e6->leave($__internal_389242dd698ff806887299a4e9d1f54ba703e233b6089bff779049b946e407e6_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b9dfa2c0228f07b9b44053f1f8b3b5b12c0c56919abbfcfb7d84319293a6d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b9dfa2c0228f07b9b44053f1f8b3b5b12c0c56919abbfcfb7d84319293a6d3a->enter($__internal_1b9dfa2c0228f07b9b44053f1f8b3b5b12c0c56919abbfcfb7d84319293a6d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9fa8c773abca439bfd822447eee3dfe2202f4cf0fd1c733c4681816f93066dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9fa8c773abca439bfd822447eee3dfe2202f4cf0fd1c733c4681816f93066dd->enter($__internal_d9fa8c773abca439bfd822447eee3dfe2202f4cf0fd1c733c4681816f93066dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d9fa8c773abca439bfd822447eee3dfe2202f4cf0fd1c733c4681816f93066dd->leave($__internal_d9fa8c773abca439bfd822447eee3dfe2202f4cf0fd1c733c4681816f93066dd_prof);

        
        $__internal_1b9dfa2c0228f07b9b44053f1f8b3b5b12c0c56919abbfcfb7d84319293a6d3a->leave($__internal_1b9dfa2c0228f07b9b44053f1f8b3b5b12c0c56919abbfcfb7d84319293a6d3a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  195 => 53,  186 => 52,  168 => 6,  157 => 57,  155 => 55,  152 => 54,  150 => 52,  146 => 50,  133 => 46,  128 => 45,  123 => 44,  119 => 43,  112 => 38,  104 => 35,  96 => 33,  90 => 30,  85 => 29,  83 => 28,  75 => 25,  71 => 24,  61 => 17,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  28 => 1,);
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
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{% block title %}Maurin Thomas{% endblock %}</title>
    <link href=\"{{ asset('assets/css/bootstrap/bootstrap.min.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('assets/css/bootstrap/bootstrap-grid.min.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('assets/css/bootstrap/bootstrap-reboot.min.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('assets/css/styles.css') }}\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn...\">
</head>

<body>

<nav class=\"navbar navbar-expand-md navbar-dark navbar-custom\">
    <a class=\"navbar-brand\" style=\"color: white\">{{'Maurin Thomas'|trans }}</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbars\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        <div class=\"wrapper\"></div>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbars\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item{{ app.request.get('_route') == 'homepage' ? ' active' : '' }}\">
                <a class=\"nav-link\" href=\"{{ path('homepage') }}\">{{ 'Description'|trans }} <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <a class=\"nav-link navbar-log\" href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'Déconnexion'|trans({}, 'FOSUserBundle') }}
                </a>
                {% else %}
                <a class=\"nav-link navbar-log\" href=\"{{ path('fos_user_security_login') }}\">{{ 'Connexion'|trans({}, 'FOSUserBundle') }}</a>
            <li class=\"nav-item\">
                <a class=\"nav-link navbar-signup\" href=\"{{ path('fos_user_registration_register') }}\">{{ 'Inscription'|trans({}, 'FOSUserBundle') }}</a>
            </li>
            {% endif %}
            </li>
        </ul>
    </div>

</nav>
{% for type, messages in app.session.flashBag.all %}
    {% for message in messages %}
        <div class=\"{{ type }}\">
            {{ message|trans({}, 'FOSUserBundle') }}
        </div>
    {% endfor %}
{% endfor %}

<div>
    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>
{% block body %}
{% endblock  %}
</body>
</html>", "base.html.twig", "/home/thomas/thomascv/cv/app/Resources/views/base.html.twig");
    }
}
