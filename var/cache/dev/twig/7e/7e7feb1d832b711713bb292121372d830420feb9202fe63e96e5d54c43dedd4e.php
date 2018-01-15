<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_f9dd5ea915f4e57cacbd49b66fe668b674492763fa9bfac122528fd2ca599ede extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8476b34e431075a5cedf6e0073222a960507e9cf95a737b5a9a51902adf76000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8476b34e431075a5cedf6e0073222a960507e9cf95a737b5a9a51902adf76000->enter($__internal_8476b34e431075a5cedf6e0073222a960507e9cf95a737b5a9a51902adf76000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $__internal_2be5acada1cc9830ef60d09adf201ad64bf09bd1aefbc77e1eac3012431ad56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be5acada1cc9830ef60d09adf201ad64bf09bd1aefbc77e1eac3012431ad56f->enter($__internal_2be5acada1cc9830ef60d09adf201ad64bf09bd1aefbc77e1eac3012431ad56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8476b34e431075a5cedf6e0073222a960507e9cf95a737b5a9a51902adf76000->leave($__internal_8476b34e431075a5cedf6e0073222a960507e9cf95a737b5a9a51902adf76000_prof);

        
        $__internal_2be5acada1cc9830ef60d09adf201ad64bf09bd1aefbc77e1eac3012431ad56f->leave($__internal_2be5acada1cc9830ef60d09adf201ad64bf09bd1aefbc77e1eac3012431ad56f_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_a8f3318352535a097cf5f58300b4e83512f72f2ba81024c31f7fd8e7eb691905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f3318352535a097cf5f58300b4e83512f72f2ba81024c31f7fd8e7eb691905->enter($__internal_a8f3318352535a097cf5f58300b4e83512f72f2ba81024c31f7fd8e7eb691905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        $__internal_b5caec2c5103d97c30fe1d40530906fe15610714aa4d3e5a0614d0ceabd8e373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5caec2c5103d97c30fe1d40530906fe15610714aa4d3e5a0614d0ceabd8e373->enter($__internal_b5caec2c5103d97c30fe1d40530906fe15610714aa4d3e5a0614d0ceabd8e373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_b5caec2c5103d97c30fe1d40530906fe15610714aa4d3e5a0614d0ceabd8e373->leave($__internal_b5caec2c5103d97c30fe1d40530906fe15610714aa4d3e5a0614d0ceabd8e373_prof);

        
        $__internal_a8f3318352535a097cf5f58300b4e83512f72f2ba81024c31f7fd8e7eb691905->leave($__internal_a8f3318352535a097cf5f58300b4e83512f72f2ba81024c31f7fd8e7eb691905_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_7549179fe31a8ae1356d86e559adc636c2cc0f6e4b67463629e3f9779db88363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7549179fe31a8ae1356d86e559adc636c2cc0f6e4b67463629e3f9779db88363->enter($__internal_7549179fe31a8ae1356d86e559adc636c2cc0f6e4b67463629e3f9779db88363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        $__internal_a0cdcd74d06472fcbddd58af9769cc530e879b3ba9bc301b2a2e07f5908eb6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0cdcd74d06472fcbddd58af9769cc530e879b3ba9bc301b2a2e07f5908eb6d3->enter($__internal_a0cdcd74d06472fcbddd58af9769cc530e879b3ba9bc301b2a2e07f5908eb6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_a0cdcd74d06472fcbddd58af9769cc530e879b3ba9bc301b2a2e07f5908eb6d3->leave($__internal_a0cdcd74d06472fcbddd58af9769cc530e879b3ba9bc301b2a2e07f5908eb6d3_prof);

        
        $__internal_7549179fe31a8ae1356d86e559adc636c2cc0f6e4b67463629e3f9779db88363->leave($__internal_7549179fe31a8ae1356d86e559adc636c2cc0f6e4b67463629e3f9779db88363_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_a79ab07401bee90f774f5e6ec592f0d422a4b49ac7c46c9409764dceee935ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79ab07401bee90f774f5e6ec592f0d422a4b49ac7c46c9409764dceee935ed1->enter($__internal_a79ab07401bee90f774f5e6ec592f0d422a4b49ac7c46c9409764dceee935ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_c5cb57b4ac33fc14e05f2cfcf1bfa1b4f3973f1675d17f7f135617b7705dcce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5cb57b4ac33fc14e05f2cfcf1bfa1b4f3973f1675d17f7f135617b7705dcce1->enter($__internal_c5cb57b4ac33fc14e05f2cfcf1bfa1b4f3973f1675d17f7f135617b7705dcce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if (($context["decorator"] ?? $this->getContext($context, "decorator"))) {
            echo $this->getAttribute(($context["decorator"] ?? $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if (($context["decorator"] ?? $this->getContext($context, "decorator"))) {
            echo $this->getAttribute(($context["decorator"] ?? $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_c5cb57b4ac33fc14e05f2cfcf1bfa1b4f3973f1675d17f7f135617b7705dcce1->leave($__internal_c5cb57b4ac33fc14e05f2cfcf1bfa1b4f3973f1675d17f7f135617b7705dcce1_prof);

        
        $__internal_a79ab07401bee90f774f5e6ec592f0d422a4b49ac7c46c9409764dceee935ed1->leave($__internal_a79ab07401bee90f774f5e6ec592f0d422a4b49ac7c46c9409764dceee935ed1_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_59ecdba77f511985bd0c6869bc3bd1ce1ebcecb743c7b1a3eda1b72935f0ab57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ecdba77f511985bd0c6869bc3bd1ce1ebcecb743c7b1a3eda1b72935f0ab57->enter($__internal_59ecdba77f511985bd0c6869bc3bd1ce1ebcecb743c7b1a3eda1b72935f0ab57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        $__internal_accc290b0debc62201ead3799196a6b4de06d42b1365bb0a2f95c9a59c6cf89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_accc290b0debc62201ead3799196a6b4de06d42b1365bb0a2f95c9a59c6cf89d->enter($__internal_accc290b0debc62201ead3799196a6b4de06d42b1365bb0a2f95c9a59c6cf89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(($context["child"] ?? $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_accc290b0debc62201ead3799196a6b4de06d42b1365bb0a2f95c9a59c6cf89d->leave($__internal_accc290b0debc62201ead3799196a6b4de06d42b1365bb0a2f95c9a59c6cf89d_prof);

        
        $__internal_59ecdba77f511985bd0c6869bc3bd1ce1ebcecb743c7b1a3eda1b72935f0ab57->leave($__internal_59ecdba77f511985bd0c6869bc3bd1ce1ebcecb743c7b1a3eda1b72935f0ab57_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 25,  147 => 24,  134 => 28,  120 => 27,  117 => 24,  99 => 23,  94 => 22,  85 => 21,  67 => 18,  42 => 15,  21 => 12,);
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

{% extends sonata_block.templates.block_base %}

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
", "SonataBlockBundle:Block:block_container.html.twig", "/home/thomas/thomascv/cv/vendor/sonata-project/block-bundle/Resources/views/Block/block_container.html.twig");
    }
}
