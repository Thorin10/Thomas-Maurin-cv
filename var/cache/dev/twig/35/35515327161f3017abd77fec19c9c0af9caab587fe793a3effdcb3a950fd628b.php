<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_d96eba545d9c4744289f882367a0cdbb0dbc960060aef952d900292115b23d88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be4bf1188d469ffd588cac9eedb8b023f7c0ae465623504ac9c659e974e98c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4bf1188d469ffd588cac9eedb8b023f7c0ae465623504ac9c659e974e98c54->enter($__internal_be4bf1188d469ffd588cac9eedb8b023f7c0ae465623504ac9c659e974e98c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_27be63c4a6a2f884ec4f7fe09b832e599c75f74931bf1a492dbcd34e742f1bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27be63c4a6a2f884ec4f7fe09b832e599c75f74931bf1a492dbcd34e742f1bd4->enter($__internal_27be63c4a6a2f884ec4f7fe09b832e599c75f74931bf1a492dbcd34e742f1bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_be4bf1188d469ffd588cac9eedb8b023f7c0ae465623504ac9c659e974e98c54->leave($__internal_be4bf1188d469ffd588cac9eedb8b023f7c0ae465623504ac9c659e974e98c54_prof);

        
        $__internal_27be63c4a6a2f884ec4f7fe09b832e599c75f74931bf1a492dbcd34e742f1bd4->leave($__internal_27be63c4a6a2f884ec4f7fe09b832e599c75f74931bf1a492dbcd34e742f1bd4_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_37f92b487b4fb4d29ba806f4833ed7bf18a1fac6e2079b2c74471a8e129aac0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f92b487b4fb4d29ba806f4833ed7bf18a1fac6e2079b2c74471a8e129aac0c->enter($__internal_37f92b487b4fb4d29ba806f4833ed7bf18a1fac6e2079b2c74471a8e129aac0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e7bed9d3dfe74e53dc7e529b9e22bfff6ad0b8f43ecb9c22410d5907bd8798fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7bed9d3dfe74e53dc7e529b9e22bfff6ad0b8f43ecb9c22410d5907bd8798fa->enter($__internal_e7bed9d3dfe74e53dc7e529b9e22bfff6ad0b8f43ecb9c22410d5907bd8798fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? $this->getContext($context, "expanded")))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_e7bed9d3dfe74e53dc7e529b9e22bfff6ad0b8f43ecb9c22410d5907bd8798fa->leave($__internal_e7bed9d3dfe74e53dc7e529b9e22bfff6ad0b8f43ecb9c22410d5907bd8798fa_prof);

        
        $__internal_37f92b487b4fb4d29ba806f4833ed7bf18a1fac6e2079b2c74471a8e129aac0c->leave($__internal_37f92b487b4fb4d29ba806f4833ed7bf18a1fac6e2079b2c74471a8e129aac0c_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_8ac073f4f39ac702b4b5e54629f3a2a47f5fa1ee72d2f0a3ade4ec6d3b8c29aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac073f4f39ac702b4b5e54629f3a2a47f5fa1ee72d2f0a3ade4ec6d3b8c29aa->enter($__internal_8ac073f4f39ac702b4b5e54629f3a2a47f5fa1ee72d2f0a3ade4ec6d3b8c29aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_0219ebbfb8f06a562c8b11f500d38a6d395126ef705da6860bba4307466d5fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0219ebbfb8f06a562c8b11f500d38a6d395126ef705da6860bba4307466d5fd2->enter($__internal_0219ebbfb8f06a562c8b11f500d38a6d395126ef705da6860bba4307466d5fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_0219ebbfb8f06a562c8b11f500d38a6d395126ef705da6860bba4307466d5fd2->leave($__internal_0219ebbfb8f06a562c8b11f500d38a6d395126ef705da6860bba4307466d5fd2_prof);

        
        $__internal_8ac073f4f39ac702b4b5e54629f3a2a47f5fa1ee72d2f0a3ade4ec6d3b8c29aa->leave($__internal_8ac073f4f39ac702b4b5e54629f3a2a47f5fa1ee72d2f0a3ade4ec6d3b8c29aa_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a26556dd4a5c7566d33dcbbf280316ffebb7f1d5b3acba9cc1ca77dda3212b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26556dd4a5c7566d33dcbbf280316ffebb7f1d5b3acba9cc1ca77dda3212b3a->enter($__internal_a26556dd4a5c7566d33dcbbf280316ffebb7f1d5b3acba9cc1ca77dda3212b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c0d28afdb25cea3117fc7121b2029c46fb24c454039a8b667bea2814b39d98ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d28afdb25cea3117fc7121b2029c46fb24c454039a8b667bea2814b39d98ee->enter($__internal_c0d28afdb25cea3117fc7121b2029c46fb24c454039a8b667bea2814b39d98ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? $this->getContext($context, "expanded")))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_c0d28afdb25cea3117fc7121b2029c46fb24c454039a8b667bea2814b39d98ee->leave($__internal_c0d28afdb25cea3117fc7121b2029c46fb24c454039a8b667bea2814b39d98ee_prof);

        
        $__internal_a26556dd4a5c7566d33dcbbf280316ffebb7f1d5b3acba9cc1ca77dda3212b3a->leave($__internal_a26556dd4a5c7566d33dcbbf280316ffebb7f1d5b3acba9cc1ca77dda3212b3a_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_49dd6fb98cbf926971f6806a2bbfb731a27c22f581c3c1e71ecdeaa1d5e4abcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49dd6fb98cbf926971f6806a2bbfb731a27c22f581c3c1e71ecdeaa1d5e4abcb->enter($__internal_49dd6fb98cbf926971f6806a2bbfb731a27c22f581c3c1e71ecdeaa1d5e4abcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_d1f4154ec9dae0fb900c8c2203ae9cd0ff6ffcea28515c0daa854eaa405dd1cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f4154ec9dae0fb900c8c2203ae9cd0ff6ffcea28515c0daa854eaa405dd1cc->enter($__internal_d1f4154ec9dae0fb900c8c2203ae9cd0ff6ffcea28515c0daa854eaa405dd1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_d1f4154ec9dae0fb900c8c2203ae9cd0ff6ffcea28515c0daa854eaa405dd1cc->leave($__internal_d1f4154ec9dae0fb900c8c2203ae9cd0ff6ffcea28515c0daa854eaa405dd1cc_prof);

        
        $__internal_49dd6fb98cbf926971f6806a2bbfb731a27c22f581c3c1e71ecdeaa1d5e4abcb->leave($__internal_49dd6fb98cbf926971f6806a2bbfb731a27c22f581c3c1e71ecdeaa1d5e4abcb_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_7d9b814ada694bc3ce385f1fdbf89ea35fa19d72654a69e773448bf75bff13eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d9b814ada694bc3ce385f1fdbf89ea35fa19d72654a69e773448bf75bff13eb->enter($__internal_7d9b814ada694bc3ce385f1fdbf89ea35fa19d72654a69e773448bf75bff13eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_d9d07879817ce67fca3bf1b6c6c5fb0f3c85fd83cdd3ebf903a69ea723b1457b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d07879817ce67fca3bf1b6c6c5fb0f3c85fd83cdd3ebf903a69ea723b1457b->enter($__internal_d9d07879817ce67fca3bf1b6c6c5fb0f3c85fd83cdd3ebf903a69ea723b1457b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_d9d07879817ce67fca3bf1b6c6c5fb0f3c85fd83cdd3ebf903a69ea723b1457b->leave($__internal_d9d07879817ce67fca3bf1b6c6c5fb0f3c85fd83cdd3ebf903a69ea723b1457b_prof);

        
        $__internal_7d9b814ada694bc3ce385f1fdbf89ea35fa19d72654a69e773448bf75bff13eb->leave($__internal_7d9b814ada694bc3ce385f1fdbf89ea35fa19d72654a69e773448bf75bff13eb_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_e801b2c4b2cccf053176ab949339e2c229e655c1113cfb194188004718be3d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e801b2c4b2cccf053176ab949339e2c229e655c1113cfb194188004718be3d6b->enter($__internal_e801b2c4b2cccf053176ab949339e2c229e655c1113cfb194188004718be3d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_8bb4a68e3d58ad34c11097805ad7f37139d0f9f39681ffbb5d89a3b35b76a61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb4a68e3d58ad34c11097805ad7f37139d0f9f39681ffbb5d89a3b35b76a61a->enter($__internal_8bb4a68e3d58ad34c11097805ad7f37139d0f9f39681ffbb5d89a3b35b76a61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_8bb4a68e3d58ad34c11097805ad7f37139d0f9f39681ffbb5d89a3b35b76a61a->leave($__internal_8bb4a68e3d58ad34c11097805ad7f37139d0f9f39681ffbb5d89a3b35b76a61a_prof);

        
        $__internal_e801b2c4b2cccf053176ab949339e2c229e655c1113cfb194188004718be3d6b->leave($__internal_e801b2c4b2cccf053176ab949339e2c229e655c1113cfb194188004718be3d6b_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_6a5fd19246f074c23623f235e97a494068e0d0b1960fe7337bb669abdc2eb8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a5fd19246f074c23623f235e97a494068e0d0b1960fe7337bb669abdc2eb8cb->enter($__internal_6a5fd19246f074c23623f235e97a494068e0d0b1960fe7337bb669abdc2eb8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_eeab1bc14c9ee7ffb65be7206320762b6117b56fdb50cda71ffc6ce20b2217c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeab1bc14c9ee7ffb65be7206320762b6117b56fdb50cda71ffc6ce20b2217c3->enter($__internal_eeab1bc14c9ee7ffb65be7206320762b6117b56fdb50cda71ffc6ce20b2217c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_eeab1bc14c9ee7ffb65be7206320762b6117b56fdb50cda71ffc6ce20b2217c3->leave($__internal_eeab1bc14c9ee7ffb65be7206320762b6117b56fdb50cda71ffc6ce20b2217c3_prof);

        
        $__internal_6a5fd19246f074c23623f235e97a494068e0d0b1960fe7337bb669abdc2eb8cb->leave($__internal_6a5fd19246f074c23623f235e97a494068e0d0b1960fe7337bb669abdc2eb8cb_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_38d3edbdf779b1a95b0d3f948ab96d678a6ec077698c5beb876399785154d814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d3edbdf779b1a95b0d3f948ab96d678a6ec077698c5beb876399785154d814->enter($__internal_38d3edbdf779b1a95b0d3f948ab96d678a6ec077698c5beb876399785154d814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_26f3b1c6dedf09cba90db862253bdaca9f53028f7364fefca4df67238733c695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f3b1c6dedf09cba90db862253bdaca9f53028f7364fefca4df67238733c695->enter($__internal_26f3b1c6dedf09cba90db862253bdaca9f53028f7364fefca4df67238733c695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_26f3b1c6dedf09cba90db862253bdaca9f53028f7364fefca4df67238733c695->leave($__internal_26f3b1c6dedf09cba90db862253bdaca9f53028f7364fefca4df67238733c695_prof);

        
        $__internal_38d3edbdf779b1a95b0d3f948ab96d678a6ec077698c5beb876399785154d814->leave($__internal_38d3edbdf779b1a95b0d3f948ab96d678a6ec077698c5beb876399785154d814_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
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
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/home/thomas/thomascv/cv/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
