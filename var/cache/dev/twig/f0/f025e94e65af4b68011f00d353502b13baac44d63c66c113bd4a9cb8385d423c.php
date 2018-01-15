<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_6d2e7ad487df93607b1362fecd71a1a7050db9ecd3e9bfd98aa23a5626a7cff4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_072172eb3857d21982795fd3d6d799cacd86a039dd1e5fc28091683ac7b8dede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072172eb3857d21982795fd3d6d799cacd86a039dd1e5fc28091683ac7b8dede->enter($__internal_072172eb3857d21982795fd3d6d799cacd86a039dd1e5fc28091683ac7b8dede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_1e050d5ca60b481ed3a0aae3a537edd135988d63a8917dc430b84cc088589fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e050d5ca60b481ed3a0aae3a537edd135988d63a8917dc430b84cc088589fbc->enter($__internal_1e050d5ca60b481ed3a0aae3a537edd135988d63a8917dc430b84cc088589fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_072172eb3857d21982795fd3d6d799cacd86a039dd1e5fc28091683ac7b8dede->leave($__internal_072172eb3857d21982795fd3d6d799cacd86a039dd1e5fc28091683ac7b8dede_prof);

        
        $__internal_1e050d5ca60b481ed3a0aae3a537edd135988d63a8917dc430b84cc088589fbc->leave($__internal_1e050d5ca60b481ed3a0aae3a537edd135988d63a8917dc430b84cc088589fbc_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_9fa5ebf6f021f2da6e9ec8339f45d1e8b23e2ec6afe2279037ed4ec0adbbca6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa5ebf6f021f2da6e9ec8339f45d1e8b23e2ec6afe2279037ed4ec0adbbca6f->enter($__internal_9fa5ebf6f021f2da6e9ec8339f45d1e8b23e2ec6afe2279037ed4ec0adbbca6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_9518b32fdb559fa90588169b9ef6e254d241f609863b2cb2797d5c63f5fc6b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9518b32fdb559fa90588169b9ef6e254d241f609863b2cb2797d5c63f5fc6b70->enter($__internal_9518b32fdb559fa90588169b9ef6e254d241f609863b2cb2797d5c63f5fc6b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_9518b32fdb559fa90588169b9ef6e254d241f609863b2cb2797d5c63f5fc6b70->leave($__internal_9518b32fdb559fa90588169b9ef6e254d241f609863b2cb2797d5c63f5fc6b70_prof);

        
        $__internal_9fa5ebf6f021f2da6e9ec8339f45d1e8b23e2ec6afe2279037ed4ec0adbbca6f->leave($__internal_9fa5ebf6f021f2da6e9ec8339f45d1e8b23e2ec6afe2279037ed4ec0adbbca6f_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4b989226df218ae02567e25d2b340daaf87fc744b7feff2890b905382648cdd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b989226df218ae02567e25d2b340daaf87fc744b7feff2890b905382648cdd3->enter($__internal_4b989226df218ae02567e25d2b340daaf87fc744b7feff2890b905382648cdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b4ef8fabdbd87a8d4475f8d777004e1d5206b23652f4397a9e249742e29283d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ef8fabdbd87a8d4475f8d777004e1d5206b23652f4397a9e249742e29283d5->enter($__internal_b4ef8fabdbd87a8d4475f8d777004e1d5206b23652f4397a9e249742e29283d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_b4ef8fabdbd87a8d4475f8d777004e1d5206b23652f4397a9e249742e29283d5->leave($__internal_b4ef8fabdbd87a8d4475f8d777004e1d5206b23652f4397a9e249742e29283d5_prof);

        
        $__internal_4b989226df218ae02567e25d2b340daaf87fc744b7feff2890b905382648cdd3->leave($__internal_4b989226df218ae02567e25d2b340daaf87fc744b7feff2890b905382648cdd3_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_464c4549b52b380500cb8b62f2565d4cdbdf6ec28576f566dcba5527f3ee7a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_464c4549b52b380500cb8b62f2565d4cdbdf6ec28576f566dcba5527f3ee7a5f->enter($__internal_464c4549b52b380500cb8b62f2565d4cdbdf6ec28576f566dcba5527f3ee7a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_7e671b1cda5197a3061543ce291a7cfcafb483731323be584813e1fe1181f564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e671b1cda5197a3061543ce291a7cfcafb483731323be584813e1fe1181f564->enter($__internal_7e671b1cda5197a3061543ce291a7cfcafb483731323be584813e1fe1181f564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_7e671b1cda5197a3061543ce291a7cfcafb483731323be584813e1fe1181f564->leave($__internal_7e671b1cda5197a3061543ce291a7cfcafb483731323be584813e1fe1181f564_prof);

        
        $__internal_464c4549b52b380500cb8b62f2565d4cdbdf6ec28576f566dcba5527f3ee7a5f->leave($__internal_464c4549b52b380500cb8b62f2565d4cdbdf6ec28576f566dcba5527f3ee7a5f_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_695a8a86e909bc623ef98d522191749e1bde13698f66c2bc9f51a8ccc60b7c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695a8a86e909bc623ef98d522191749e1bde13698f66c2bc9f51a8ccc60b7c06->enter($__internal_695a8a86e909bc623ef98d522191749e1bde13698f66c2bc9f51a8ccc60b7c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2e7bf9e719138f0c2ab330995549402f10297ec5cc39f6b344ff2e7876e871d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7bf9e719138f0c2ab330995549402f10297ec5cc39f6b344ff2e7876e871d5->enter($__internal_2e7bf9e719138f0c2ab330995549402f10297ec5cc39f6b344ff2e7876e871d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_2e7bf9e719138f0c2ab330995549402f10297ec5cc39f6b344ff2e7876e871d5->leave($__internal_2e7bf9e719138f0c2ab330995549402f10297ec5cc39f6b344ff2e7876e871d5_prof);

        
        $__internal_695a8a86e909bc623ef98d522191749e1bde13698f66c2bc9f51a8ccc60b7c06->leave($__internal_695a8a86e909bc623ef98d522191749e1bde13698f66c2bc9f51a8ccc60b7c06_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_c5c47b4774418d9b90ebc5e35ef16e0c8125c9634d0f22222b38c42aa40cb5ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c47b4774418d9b90ebc5e35ef16e0c8125c9634d0f22222b38c42aa40cb5ab->enter($__internal_c5c47b4774418d9b90ebc5e35ef16e0c8125c9634d0f22222b38c42aa40cb5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_e730a92d230bdba2e8d0e05e6748e56e062cecae1331efce20a9ab87ca717c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e730a92d230bdba2e8d0e05e6748e56e062cecae1331efce20a9ab87ca717c9c->enter($__internal_e730a92d230bdba2e8d0e05e6748e56e062cecae1331efce20a9ab87ca717c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_e730a92d230bdba2e8d0e05e6748e56e062cecae1331efce20a9ab87ca717c9c->leave($__internal_e730a92d230bdba2e8d0e05e6748e56e062cecae1331efce20a9ab87ca717c9c_prof);

        
        $__internal_c5c47b4774418d9b90ebc5e35ef16e0c8125c9634d0f22222b38c42aa40cb5ab->leave($__internal_c5c47b4774418d9b90ebc5e35ef16e0c8125c9634d0f22222b38c42aa40cb5ab_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_4a4eb1ce9babd5b2ac1e7014bd64daf38011a77696ff8e1734390d94b8230d7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4eb1ce9babd5b2ac1e7014bd64daf38011a77696ff8e1734390d94b8230d7d->enter($__internal_4a4eb1ce9babd5b2ac1e7014bd64daf38011a77696ff8e1734390d94b8230d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_5eb82c32c5619902ec52059787388377e32fba657a57738ac7d1c2ccb59070dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb82c32c5619902ec52059787388377e32fba657a57738ac7d1c2ccb59070dc->enter($__internal_5eb82c32c5619902ec52059787388377e32fba657a57738ac7d1c2ccb59070dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_5eb82c32c5619902ec52059787388377e32fba657a57738ac7d1c2ccb59070dc->leave($__internal_5eb82c32c5619902ec52059787388377e32fba657a57738ac7d1c2ccb59070dc_prof);

        
        $__internal_4a4eb1ce9babd5b2ac1e7014bd64daf38011a77696ff8e1734390d94b8230d7d->leave($__internal_4a4eb1ce9babd5b2ac1e7014bd64daf38011a77696ff8e1734390d94b8230d7d_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_8910175ebe945ec995d066fe28399a51e67cb4e9994380b49f54dab88b24ae2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8910175ebe945ec995d066fe28399a51e67cb4e9994380b49f54dab88b24ae2f->enter($__internal_8910175ebe945ec995d066fe28399a51e67cb4e9994380b49f54dab88b24ae2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_97279fa2f19711c60ca09c6b9186c32e35399d3a8b77b2cc72fc4c9f24924b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97279fa2f19711c60ca09c6b9186c32e35399d3a8b77b2cc72fc4c9f24924b69->enter($__internal_97279fa2f19711c60ca09c6b9186c32e35399d3a8b77b2cc72fc4c9f24924b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_97279fa2f19711c60ca09c6b9186c32e35399d3a8b77b2cc72fc4c9f24924b69->leave($__internal_97279fa2f19711c60ca09c6b9186c32e35399d3a8b77b2cc72fc4c9f24924b69_prof);

        
        $__internal_8910175ebe945ec995d066fe28399a51e67cb4e9994380b49f54dab88b24ae2f->leave($__internal_8910175ebe945ec995d066fe28399a51e67cb4e9994380b49f54dab88b24ae2f_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_815c0ed7cbce9f8ed3faacc0bb5a99bc0b5e9366fc820fe10ef66c842e919903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_815c0ed7cbce9f8ed3faacc0bb5a99bc0b5e9366fc820fe10ef66c842e919903->enter($__internal_815c0ed7cbce9f8ed3faacc0bb5a99bc0b5e9366fc820fe10ef66c842e919903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_44461d978dd1c66c76ee84a8945d2b236953db85fb26dfa2215f2e0bbd1b059c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44461d978dd1c66c76ee84a8945d2b236953db85fb26dfa2215f2e0bbd1b059c->enter($__internal_44461d978dd1c66c76ee84a8945d2b236953db85fb26dfa2215f2e0bbd1b059c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_44461d978dd1c66c76ee84a8945d2b236953db85fb26dfa2215f2e0bbd1b059c->leave($__internal_44461d978dd1c66c76ee84a8945d2b236953db85fb26dfa2215f2e0bbd1b059c_prof);

        
        $__internal_815c0ed7cbce9f8ed3faacc0bb5a99bc0b5e9366fc820fe10ef66c842e919903->leave($__internal_815c0ed7cbce9f8ed3faacc0bb5a99bc0b5e9366fc820fe10ef66c842e919903_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
