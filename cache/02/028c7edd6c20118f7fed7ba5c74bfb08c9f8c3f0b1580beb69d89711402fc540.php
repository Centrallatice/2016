<?php

/* index.twig */
class __TwigTemplate_96acc44514f60626b5ed38c95db43d585881b733a783dbba103f55171ede70b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["titrePage"])) { $_titrePage_ = $context["titrePage"]; } else { $_titrePage_ = null; }
        echo twig_escape_filter($this->env, $_titrePage_, "html", null, true);
    }

    // line 3
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["descriptionPage"])) { $_descriptionPage_ = $context["descriptionPage"]; } else { $_descriptionPage_ = null; }
        echo twig_escape_filter($this->env, $_descriptionPage_, "html", null, true);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        if (isset($context["motsclefsPage"])) { $_motsclefsPage_ = $context["motsclefsPage"]; } else { $_motsclefsPage_ = null; }
        echo twig_escape_filter($this->env, $_motsclefsPage_, "html", null, true);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/home.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 8
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/modules/blocdownload/css/blocdownload.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 9
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/coordonnees/css/coordonnees.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 10
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/services/css/services.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 11
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/phototheque/css/phototheque.css\" rel=\"stylesheet\" type=\"text/css\"/>
    ";
        // line 12
        if (isset($context["agendas"])) { $_agendas_ = $context["agendas"]; } else { $_agendas_ = null; }
        if ((twig_length_filter($this->env, $_agendas_) > 0)) {
            // line 13
            echo "        <link href=\"";
            if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
            echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
            echo "/libs/bxslider/jquery.bxslider.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
            // line 14
            if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
            echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
            echo "/modules/evenements/css/resume-evenements.css\" rel=\"stylesheet\" type=\"text/css\"/>
    ";
        }
        // line 16
        echo "    <link rel='stylesheet prefetch' href=\"";
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/jquery.fancybox.css\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 17
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-buttons.css\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 18
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-thumbs.css\" type=\"text/css\"/>
     
    <link href=\"";
        // line 20
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/modules/actualites/css/actualites.css\" rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 24
        if (isset($context["agendas"])) { $_agendas_ = $context["agendas"]; } else { $_agendas_ = null; }
        if ((twig_length_filter($this->env, $_agendas_) > 0)) {
            // line 25
            echo "        <script type=\"text/javascript\" src=\"";
            if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
            echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
            echo "/libs/bxslider/plugins/jquery.easing.1.3.js\"></script>
        <script type=\"text/javascript\" src=\"";
            // line 26
            if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
            echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
            echo "/libs/bxslider/jquery.bxslider.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
            // line 27
            if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
            echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
            echo "/modules/evenements/js/resume-evenements.js\"></script>
\t";
        }
        // line 29
        echo "    <script type=\"text/javascript\" src=\"";
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/lib/jquery.mousewheel-3.0.6.pack.js\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 30
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/jquery.fancybox.pack.js?v=2.1.5\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 31
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-buttons.js\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 32
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-media.js\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 33
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-thumbs.js\"></script>   
   
    <script type=\"text/javascript\" src=\"";
        // line 35
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/modules/actualites/js/actualites.js\"></script>
    
";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        $this->loadTemplate("global/header.twig", "index.twig", 40)->display($context);
        // line 41
        echo "    <div class=\"bloc-maincontainer\">
        <div class=\"row\">
            <!-- COL_LEFT-->
            <div class=\"hidden-xs col-sm-8 col-md-5 nopadding\">
                <!-- COL_LEFT_ONE -->
                ";
        // line 46
        if (isset($context["agendas"])) { $_agendas_ = $context["agendas"]; } else { $_agendas_ = null; }
        if ((twig_length_filter($this->env, $_agendas_) > 0)) {
            // line 47
            echo "                    ";
            $this->loadTemplate("/modules/evenements/layout/displayLeftColumn.twig", "index.twig", 47)->display($context);
            // line 48
            echo "                ";
        }
        // line 49
        echo "                
                <!-- COL_LEFT_TWO -->
                ";
        // line 51
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "HEADER", array(), "array")) {
            // line 52
            echo "                    ";
            if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_modules_, "COL_LEFT_TWO", array(), "array"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["headerModule"]) {
                // line 53
                echo "                        ";
                if (isset($context["headerModule"])) { $_headerModule_ = $context["headerModule"]; } else { $_headerModule_ = null; }
                if (($this->getAttribute($_headerModule_, "type", array()) == "blocdownload")) {
                    // line 54
                    echo "                            ";
                    $this->loadTemplate("/modules/blocdownload/layout/displayLeftColumn.twig", "index.twig", 54)->display($context);
                    // line 55
                    echo "                        ";
                }
                // line 56
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['headerModule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                ";
        }
        // line 58
        echo "                
                <div class=\"hidden-xs col-sm-24 hidden-md hidden-lg nopadding\">
                    <!-- COL_RIGHT_ONE -->
                    ";
        // line 61
        $this->loadTemplate("/blocks/coordonnees/layout/displayTopRight.twig", "index.twig", 61)->display($context);
        // line 62
        echo "                    <div class=\"separight\"></div>
                    <!-- COL_RIGHT_CENTER -->
                    ";
        // line 64
        $this->loadTemplate("/blocks/services/layout/displayCenterRight.twig", "index.twig", 64)->display($context);
        // line 65
        echo "                    <div class=\"separight\"></div>
                    ";
        // line 66
        $this->loadTemplate("/blocks/phototheque/layout/displayCenterRight.twig", "index.twig", 66)->display($context);
        // line 67
        echo "                    <div class=\"separight\"></div>
                    ";
        // line 68
        $this->loadTemplate("/modules/facebook/layout/displayBottomRight.twig", "index.twig", 68)->display($context);
        // line 69
        echo "                </div>
            </div>
            <!-- COL_MIDDLE-->
            <div class=\"col-xs-24 col-sm-16 col-md-13\">
                ";
        // line 73
        if (isset($context["actualites"])) { $_actualites_ = $context["actualites"]; } else { $_actualites_ = null; }
        if ((twig_length_filter($this->env, $_actualites_) > 0)) {
            // line 74
            echo "                    ";
            $this->loadTemplate("/modules/actualites/layout/displayCenterColumn.twig", "index.twig", 74)->display($context);
            // line 75
            echo "                ";
        }
        // line 76
        echo "            </div>
            <!-- COL_RIGHT-->
            <div class=\"col-xs-24 hidden-sm col-md-6 nopadding\">
                <!-- COL_RIGHT_ONE -->
                ";
        // line 80
        $this->loadTemplate("/blocks/coordonnees/layout/displayTopRight.twig", "index.twig", 80)->display($context);
        // line 81
        echo "                <div class=\"separight\"></div>
                <!-- COL_RIGHT_CENTER -->
                ";
        // line 83
        $this->loadTemplate("/blocks/services/layout/displayCenterRight.twig", "index.twig", 83)->display($context);
        // line 84
        echo "                <div class=\"separight\"></div>
                ";
        // line 85
        $this->loadTemplate("/blocks/phototheque/layout/displayCenterRight.twig", "index.twig", 85)->display($context);
        // line 86
        echo "                <div class=\"separight\"></div>
                ";
        // line 87
        $this->loadTemplate("/modules/facebook/layout/displayBottomRight.twig", "index.twig", 87)->display($context);
        // line 88
        echo "            </div>
        </div>
        ";
        // line 90
        $this->loadTemplate("global/footer.twig", "index.twig", 90)->display($context);
        echo "    
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 90,  326 => 88,  324 => 87,  321 => 86,  319 => 85,  316 => 84,  314 => 83,  310 => 81,  308 => 80,  302 => 76,  299 => 75,  296 => 74,  293 => 73,  287 => 69,  285 => 68,  282 => 67,  280 => 66,  277 => 65,  275 => 64,  271 => 62,  269 => 61,  264 => 58,  261 => 57,  247 => 56,  244 => 55,  241 => 54,  237 => 53,  218 => 52,  215 => 51,  211 => 49,  208 => 48,  205 => 47,  202 => 46,  195 => 41,  192 => 40,  189 => 39,  181 => 35,  175 => 33,  170 => 32,  165 => 31,  160 => 30,  154 => 29,  148 => 27,  143 => 26,  137 => 25,  134 => 24,  129 => 23,  126 => 22,  119 => 20,  113 => 18,  108 => 17,  102 => 16,  96 => 14,  90 => 13,  87 => 12,  82 => 11,  77 => 10,  72 => 9,  67 => 8,  62 => 7,  57 => 6,  54 => 5,  47 => 4,  40 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends "base.twig" %}*/
/* {% block title %}{{titrePage}}{% endblock %}*/
/* {% block description %}{{descriptionPage}}{% endblock %}*/
/* {% block keywords %}{{motsclefsPage}}{% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{BASETHEME}}/css/home.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/modules/blocdownload/css/blocdownload.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/coordonnees/css/coordonnees.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/services/css/services.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/phototheque/css/phototheque.css" rel="stylesheet" type="text/css"/>*/
/*     {% if agendas|length>0 %}*/
/*         <link href="{{BASEURL}}/libs/bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css"/>*/
/*         <link href="{{BASETHEME}}/modules/evenements/css/resume-evenements.css" rel="stylesheet" type="text/css"/>*/
/*     {% endif %}*/
/*     <link rel='stylesheet prefetch' href="{{BASEURL}}libs/fancybox/source/jquery.fancybox.css" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css"/>*/
/*      */
/*     <link href="{{BASETHEME}}/modules/actualites/css/actualites.css" rel="stylesheet" type="text/css"/>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% if agendas|length>0 %}*/
/*         <script type="text/javascript" src="{{BASEURL}}/libs/bxslider/plugins/jquery.easing.1.3.js"></script>*/
/*         <script type="text/javascript" src="{{BASEURL}}/libs/bxslider/jquery.bxslider.min.js"></script>*/
/*         <script type="text/javascript" src="{{BASETHEME}}/modules/evenements/js/resume-evenements.js"></script>*/
/* 	{% endif %}*/
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>   */
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>   */
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>   */
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-media.js"></script>   */
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>   */
/*    */
/*     <script type="text/javascript" src="{{BASETHEME}}/modules/actualites/js/actualites.js"></script>*/
/*     */
/* {% endblock %}*/
/*     */
/* {% block body %}*/
/*     {% include 'global/header.twig' %}*/
/*     <div class="bloc-maincontainer">*/
/*         <div class="row">*/
/*             <!-- COL_LEFT-->*/
/*             <div class="hidden-xs col-sm-8 col-md-5 nopadding">*/
/*                 <!-- COL_LEFT_ONE -->*/
/*                 {% if agendas|length>0 %}*/
/*                     {% include '/modules/evenements/layout/displayLeftColumn.twig' %}*/
/*                 {% endif %}*/
/*                 */
/*                 <!-- COL_LEFT_TWO -->*/
/*                 {% if modules['HEADER'] %}*/
/*                     {% for headerModule in modules['COL_LEFT_TWO'] %}*/
/*                         {% if headerModule.type=='blocdownload' %}*/
/*                             {% include '/modules/blocdownload/layout/displayLeftColumn.twig' %}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*                 */
/*                 <div class="hidden-xs col-sm-24 hidden-md hidden-lg nopadding">*/
/*                     <!-- COL_RIGHT_ONE -->*/
/*                     {% include '/blocks/coordonnees/layout/displayTopRight.twig' %}*/
/*                     <div class="separight"></div>*/
/*                     <!-- COL_RIGHT_CENTER -->*/
/*                     {% include '/blocks/services/layout/displayCenterRight.twig' %}*/
/*                     <div class="separight"></div>*/
/*                     {% include '/blocks/phototheque/layout/displayCenterRight.twig' %}*/
/*                     <div class="separight"></div>*/
/*                     {% include '/modules/facebook/layout/displayBottomRight.twig' %}*/
/*                 </div>*/
/*             </div>*/
/*             <!-- COL_MIDDLE-->*/
/*             <div class="col-xs-24 col-sm-16 col-md-13">*/
/*                 {% if actualites|length>0 %}*/
/*                     {% include '/modules/actualites/layout/displayCenterColumn.twig' %}*/
/*                 {% endif %}*/
/*             </div>*/
/*             <!-- COL_RIGHT-->*/
/*             <div class="col-xs-24 hidden-sm col-md-6 nopadding">*/
/*                 <!-- COL_RIGHT_ONE -->*/
/*                 {% include '/blocks/coordonnees/layout/displayTopRight.twig' %}*/
/*                 <div class="separight"></div>*/
/*                 <!-- COL_RIGHT_CENTER -->*/
/*                 {% include '/blocks/services/layout/displayCenterRight.twig' %}*/
/*                 <div class="separight"></div>*/
/*                 {% include '/blocks/phototheque/layout/displayCenterRight.twig' %}*/
/*                 <div class="separight"></div>*/
/*                 {% include '/modules/facebook/layout/displayBottomRight.twig' %}*/
/*             </div>*/
/*         </div>*/
/*         {% include 'global/footer.twig' %}    */
/*     </div>*/
/*     */
/* {% endblock %}*/
/* */
/* */
