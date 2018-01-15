<?php

/* SonataAdminBundle:CRUD:base_array_macro.html.twig */
class __TwigTemplate_76345f66cf66b7968ab4243a7ce8dfaf064242863193a3907dd4e7aac22a5125 extends Twig_Template
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
        $__internal_9f82420d79e5b782c9ea4da67eb6cd11cade6da280065d3457fb933a51ffe029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f82420d79e5b782c9ea4da67eb6cd11cade6da280065d3457fb933a51ffe029->enter($__internal_9f82420d79e5b782c9ea4da67eb6cd11cade6da280065d3457fb933a51ffe029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_array_macro.html.twig"));

        $__internal_360db22dca8d9d67bc08841661dbfbca8f9a128b3b9187c04d415f520024baec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360db22dca8d9d67bc08841661dbfbca8f9a128b3b9187c04d415f520024baec->enter($__internal_360db22dca8d9d67bc08841661dbfbca8f9a128b3b9187c04d415f520024baec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_array_macro.html.twig"));

        
        $__internal_9f82420d79e5b782c9ea4da67eb6cd11cade6da280065d3457fb933a51ffe029->leave($__internal_9f82420d79e5b782c9ea4da67eb6cd11cade6da280065d3457fb933a51ffe029_prof);

        
        $__internal_360db22dca8d9d67bc08841661dbfbca8f9a128b3b9187c04d415f520024baec->leave($__internal_360db22dca8d9d67bc08841661dbfbca8f9a128b3b9187c04d415f520024baec_prof);

    }

    // line 11
    public function getrender_array($__value__ = null, $__inline__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "inline" => $__inline__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_079e9d36278f7d87b47b9ca5bef566abe2c3ed661f155020ec246f989e406b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_079e9d36278f7d87b47b9ca5bef566abe2c3ed661f155020ec246f989e406b7c->enter($__internal_079e9d36278f7d87b47b9ca5bef566abe2c3ed661f155020ec246f989e406b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            $__internal_5395e798e85ff217676f8e9d445b7368a4ea7730d4e523a73e0e50aea4b24a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5395e798e85ff217676f8e9d445b7368a4ea7730d4e523a73e0e50aea4b24a7b->enter($__internal_5395e798e85ff217676f8e9d445b7368a4ea7730d4e523a73e0e50aea4b24a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 13
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 14
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo $this->getAttribute($this, "render_array", array(0 => $context["val"], 1 => ($context["inline"] ?? $this->getContext($context, "inline"))), "method");
                    echo "]
        ";
                } else {
                    // line 16
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "]
        ";
                }
                // line 18
                echo "
        ";
                // line 19
                if (( !$this->getAttribute($context["loop"], "last", array()) &&  !($context["inline"] ?? $this->getContext($context, "inline")))) {
                    // line 20
                    echo "            <br>
        ";
                }
                // line 22
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_5395e798e85ff217676f8e9d445b7368a4ea7730d4e523a73e0e50aea4b24a7b->leave($__internal_5395e798e85ff217676f8e9d445b7368a4ea7730d4e523a73e0e50aea4b24a7b_prof);

            
            $__internal_079e9d36278f7d87b47b9ca5bef566abe2c3ed661f155020ec246f989e406b7c->leave($__internal_079e9d36278f7d87b47b9ca5bef566abe2c3ed661f155020ec246f989e406b7c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_array_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 22,  94 => 20,  92 => 19,  89 => 18,  81 => 16,  73 => 14,  70 => 13,  52 => 12,  33 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% macro render_array(value, inline) %}
    {% for key, val in value %}
        {% if val is iterable %}
            [{{ key }} => {{ _self.render_array(val, inline) }}]
        {%  else %}
            [{{ key }} => {{ val }}]
        {%  endif %}

        {% if not loop.last and not inline %}
            <br>
        {% endif %}
    {% endfor %}
{% endmacro %}
", "SonataAdminBundle:CRUD:base_array_macro.html.twig", "/home/thomas/thomascv/Blog-master/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_array_macro.html.twig");
    }
}
