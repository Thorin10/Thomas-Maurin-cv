<?php

/* :default:index.html.twig */
class __TwigTemplate_ccf6361a793f6deeababe0edf61f1d0df6e2d2392724416ed6690c83db705581 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a866996644dfcb3e7efcd7212a4e7d03ad035bc3000760fedc6e683f79cc7502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a866996644dfcb3e7efcd7212a4e7d03ad035bc3000760fedc6e683f79cc7502->enter($__internal_a866996644dfcb3e7efcd7212a4e7d03ad035bc3000760fedc6e683f79cc7502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_065341e2b3758d202e87842f2ad04abd86f950ba4002cb0166a419fa95fa2a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065341e2b3758d202e87842f2ad04abd86f950ba4002cb0166a419fa95fa2a69->enter($__internal_065341e2b3758d202e87842f2ad04abd86f950ba4002cb0166a419fa95fa2a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a866996644dfcb3e7efcd7212a4e7d03ad035bc3000760fedc6e683f79cc7502->leave($__internal_a866996644dfcb3e7efcd7212a4e7d03ad035bc3000760fedc6e683f79cc7502_prof);

        
        $__internal_065341e2b3758d202e87842f2ad04abd86f950ba4002cb0166a419fa95fa2a69->leave($__internal_065341e2b3758d202e87842f2ad04abd86f950ba4002cb0166a419fa95fa2a69_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db42be461c8d48847ed5ffe6e8428b325a1660d0833941fd511666a7eecbf19d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db42be461c8d48847ed5ffe6e8428b325a1660d0833941fd511666a7eecbf19d->enter($__internal_db42be461c8d48847ed5ffe6e8428b325a1660d0833941fd511666a7eecbf19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c250ded842589c9df65fd8582ac880c51f8e7356a494b10d3d41f7c1c70f52a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c250ded842589c9df65fd8582ac880c51f8e7356a494b10d3d41f7c1c70f52a->enter($__internal_1c250ded842589c9df65fd8582ac880c51f8e7356a494b10d3d41f7c1c70f52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div id = \"bloc\" class=\"col-md-5 texttype\" style=\"top: 70px; left: 30%\">
        <p>
            <img src=\"../../../../../web/assets/theme/mortarboard.png\" width=\"32\" height=\"32\" alt=\"\">
            Formation
        </p>
    </div>
    <!-- Start Timeline School -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"timeline-centered\" style=\"top: 50px; left: 30%\">
                <article class=\"timeline-entry\">
                    <div class=\"timeline-entry-inner\">
                        <time class=\"timeline-time\"><span>2014-2015</span> <span> </span></time>

                        <div class=\"timeline-icon bg-blue-light\">
                            <i class=\"entypo-feather\"></i>
                        </div>

                        <div class=\"timeline-label\">
                            <h2><a href=\"#\">Bac S-SI</a></h2>
                            <p>Obtention du bac au Lycée Odilon Redon</p>
                        </div>
                    </div>

                </article>


                <article class=\"timeline-entry left-aligned\">

                    <div class=\"timeline-entry-inner\">
                        <time class=\"timeline-time\"><span>2015-2016</span> <span> </span></time>

                        <div class=\"timeline-icon bg-blue1\">
                            <i class=\"entypo-suitcase\"></i>
                        </div>

                        <div class=\"timeline-label\">
                            <h2><a href=\"#\">Epitech</a></h2>
                            <p>1 ère année d'étude en informatique</p></div>
                    </div>

                </article>


                <article class=\"timeline-entry\">
                    <div class=\"timeline-entry-inner\">
                        <time class=\"timeline-time\"><span>2016-2017</span> <span> </span></time>

                        <div class=\"timeline-icon bg-blue2\">
                            <i class=\"entypo-feather\"></i>
                        </div>

                        <div class=\"timeline-label\">
                            <h2><a href=\"#\">Ingésup Ynov</a></h2>
                            <p>1ère année d'étude à Ingésup Ynov</p>
                        </div>
                    </div>

                </article>


                <article class=\"timeline-entry left-aligned\">

                    <div class=\"timeline-entry-inner\">
                        <time class=\"timeline-time\"><span>2017-2018</span></time>

                        <div class=\"timeline-icon bg-blue-dark1\">
                            <i class=\"entypo-camera\"></i>
                        </div>

                        <div class=\"timeline-label\">
                            <h2><a href=\"#\">Ingésup Ynov</a></h2>
                            <p>2ème année d'étude à Ingésup Ynov</p>
                        </div>
                    </div>

                </article>


                <article class=\"timeline-entry begin\">

                    <div class=\"timeline-entry-inner bg-blue-dark2\">

                        <div class=\"timeline-icon\" style=\"-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);\">
                            <i class=\"entypo-flight\"></i>
                        </div>

                    </div>

                </article>

            </div>
        </div>
    </div>
    <!-- End Timeline School -->
    <div id = \"bloc\" class=\"col-md-5 texttype\" style=\"top: 60px; left: 30%\">
        <p>
            Compétences
        </p>
    </div>
    <section class=\"our-skills\">
        <div class=\"container\" >
            <div class=\"row\">
                <!-- Start Progress Skills -->

                <div class=\"col-md-5\" style=\"top: 50px; left: 30%\">
                    <div class=\"skills-progress\">
                        <div class=\"progress-tall\">
                            <div class=\"progress-barr progress-bar-success texttype\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:95%\">
                                Linux/Windows
                            </div>
                        </div>
                        <div class=\"progress-tall\">
                            <div class=\"progress-barr progress-bar-danger texttype\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:90%\">
                                Microsoft Office
                            </div>
                        </div>
                        <div class=\"progress-tall\">
                            <div class=\"progress-barr progress-bar-warning texttype\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:80%\">
                                Language C
                            </div>
                        </div>
                        <div class=\"progress-tall\">
                            <div class=\"progress-barr progress-bar-info texttype\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 75%\">
                                Java
                            </div>
                        </div>

                        <div class=\"progress-tall\">
                            <div class=\"progress-barr progress-bar-infos texttype\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:60%\">
                                Windows Server
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Progress Skills -->
            </div>
        </div>
    </section>

    <div id = \"bloc\" class=\"col-md-5 texttype\" style=\"top: 80px; left: 30%\">
        <p>
            Langues
        </p>
    </div>
    <!-- Start Progress Languages -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\" style=\"left: 25%; top: 80px\">
                <div class=\"progress blue-dark\">
                <span class=\"progress-left\">
                    <span class=\"progress-bar\"></span>
                </span>
                    <span class=\"progress-right\">
                    <span class=\"progress-bar\"></span>
                </span>
                    <div class=\"progress-value\">anglais</div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\" style=\"left: 25%; top: 80px\">
                <div class=\"progress blue-light\">
                <span class=\"progress-left\">
                    <span class=\"progress-bar\"></span>
                </span>
                    <span class=\"progress-right\">
                    <span class=\"progress-bar\"></span>
                </span>
                    <div class=\"progress-value\">espagnol</div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_1c250ded842589c9df65fd8582ac880c51f8e7356a494b10d3d41f7c1c70f52a->leave($__internal_1c250ded842589c9df65fd8582ac880c51f8e7356a494b10d3d41f7c1c70f52a_prof);

        
        $__internal_db42be461c8d48847ed5ffe6e8428b325a1660d0833941fd511666a7eecbf19d->leave($__internal_db42be461c8d48847ed5ffe6e8428b325a1660d0833941fd511666a7eecbf19d_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}

    <div id = \"bloc\" class=\"col-md-5 texttype\" style=\"top: 70px; left: 30%\">
        <p>
            <img src=\"../../../../../web/assets/theme/mortarboard.png\" width=\"32\" height=\"32\" alt=\"\">
            Formation
        </p>
    </div>
    <!-- Start Timeline School -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"timeline-centered\" style=\"top: 50px; left: 30%\">
                <article class=\"timeline-entry\">
                    <div class=\"timeline-entry-inner\">
                        <time class=\"timeline-time\"><span>2014-2015</span> <span> </span></time>

                        <div class=\"timeline-icon bg-blue-light\">
                            <i class=\"entypo-feather\"></i>
                        </div>

                        <div class=\"timeline-label\">
                            <h2><a href=\"#\">Bac S-SI</a></h2>
                            <p>Obtention du bac au Lycée Odilon Redon</p>
                        </div>
                    </div>

                </article>


                <article class=\"timeline-entry left-aligned\">

                    <div class=\"timeline-entry-inner\">
                        <time class=\"timeline-time\"><span>2015-2016</span> <span> </span></time>

                        <div class=\"timeline-icon bg-blue1\">
                            <i class=\"entypo-suitcase\"></i>
                        </div>

                        <div class=\"timeline-label\">
                            <h2><a href=\"#\">Epitech</a></h2>
                            <p>1 ère année d'étude en informatique</p></div>
                    </div>

                </article>


                <article class=\"timeline-entry\">
                    <div class=\"timeline-entry-inner\">
                        <time class=\"timeline-time\"><span>2016-2017</span> <span> </span></time>

                        <div class=\"timeline-icon bg-blue2\">
                            <i class=\"entypo-feather\"></i>
                        </div>

                        <div class=\"timeline-label\">
                            <h2><a href=\"#\">Ingésup Ynov</a></h2>
                            <p>1ère année d'étude à Ingésup Ynov</p>
                        </div>
                    </div>

                </article>


                <article class=\"timeline-entry left-aligned\">

                    <div class=\"timeline-entry-inner\">
                        <time class=\"timeline-time\"><span>2017-2018</span></time>

                        <div class=\"timeline-icon bg-blue-dark1\">
                            <i class=\"entypo-camera\"></i>
                        </div>

                        <div class=\"timeline-label\">
                            <h2><a href=\"#\">Ingésup Ynov</a></h2>
                            <p>2ème année d'étude à Ingésup Ynov</p>
                        </div>
                    </div>

                </article>


                <article class=\"timeline-entry begin\">

                    <div class=\"timeline-entry-inner bg-blue-dark2\">

                        <div class=\"timeline-icon\" style=\"-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);\">
                            <i class=\"entypo-flight\"></i>
                        </div>

                    </div>

                </article>

            </div>
        </div>
    </div>
    <!-- End Timeline School -->
    <div id = \"bloc\" class=\"col-md-5 texttype\" style=\"top: 60px; left: 30%\">
        <p>
            Compétences
        </p>
    </div>
    <section class=\"our-skills\">
        <div class=\"container\" >
            <div class=\"row\">
                <!-- Start Progress Skills -->

                <div class=\"col-md-5\" style=\"top: 50px; left: 30%\">
                    <div class=\"skills-progress\">
                        <div class=\"progress-tall\">
                            <div class=\"progress-barr progress-bar-success texttype\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:95%\">
                                Linux/Windows
                            </div>
                        </div>
                        <div class=\"progress-tall\">
                            <div class=\"progress-barr progress-bar-danger texttype\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:90%\">
                                Microsoft Office
                            </div>
                        </div>
                        <div class=\"progress-tall\">
                            <div class=\"progress-barr progress-bar-warning texttype\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:80%\">
                                Language C
                            </div>
                        </div>
                        <div class=\"progress-tall\">
                            <div class=\"progress-barr progress-bar-info texttype\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 75%\">
                                Java
                            </div>
                        </div>

                        <div class=\"progress-tall\">
                            <div class=\"progress-barr progress-bar-infos texttype\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:60%\">
                                Windows Server
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Progress Skills -->
            </div>
        </div>
    </section>

    <div id = \"bloc\" class=\"col-md-5 texttype\" style=\"top: 80px; left: 30%\">
        <p>
            Langues
        </p>
    </div>
    <!-- Start Progress Languages -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\" style=\"left: 25%; top: 80px\">
                <div class=\"progress blue-dark\">
                <span class=\"progress-left\">
                    <span class=\"progress-bar\"></span>
                </span>
                    <span class=\"progress-right\">
                    <span class=\"progress-bar\"></span>
                </span>
                    <div class=\"progress-value\">anglais</div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\" style=\"left: 25%; top: 80px\">
                <div class=\"progress blue-light\">
                <span class=\"progress-left\">
                    <span class=\"progress-bar\"></span>
                </span>
                    <span class=\"progress-right\">
                    <span class=\"progress-bar\"></span>
                </span>
                    <div class=\"progress-value\">espagnol</div>
                </div>
            </div>
        </div>
    </div>

{% endblock body %}", ":default:index.html.twig", "/home/thomas/thomascv/cv/app/Resources/views/default/index.html.twig");
    }
}
