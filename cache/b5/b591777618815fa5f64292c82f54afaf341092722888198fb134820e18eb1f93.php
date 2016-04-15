<?php

/* actualite.twig */
class __TwigTemplate_afc7990807be89d4d211521b3b2733523345675a5b104dc95f4740966ba93cce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "actualite.twig", 1);
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
    <link rel='stylesheet prefetch' href=\"";
        // line 7
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 8
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/home.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 9
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/modules/blocdownload/css/blocdownload.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 10
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/coordonnees/css/coordonnees.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 11
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/services/css/services.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 12
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/phototheque/css/phototheque.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 13
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/modules/actualite/css/actualite.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 14
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/jquery.fancybox.css\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 15
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-buttons.css\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 16
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-thumbs.css\" type=\"text/css\"/>
     
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 21
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/lib/jquery.mousewheel-3.0.6.pack.js\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 22
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/jquery.fancybox.pack.js?v=2.1.5\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 23
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-buttons.js\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 24
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-media.js\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 25
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-thumbs.js\"></script>   
   
";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "    <div class=\"blocHeader\">
        <div class=\"row\">
            <div class=\"decotopsite\"></div>
        </div>
        <div class=\"row rowlogoflash\">
            <div class=\"col-xs-24 col-sm-24 col-md-22 col-md-offset-1\">
                <!-- LOGO -->
                <div class=\"col-xs-24 col-sm-6\">
                    <a href=\"";
        // line 38
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "index.html\"><img class=\"img img-responsive\" src=\"";
        if (isset($context["BASEIMG"])) { $_BASEIMG_ = $context["BASEIMG"]; } else { $_BASEIMG_ = null; }
        echo twig_escape_filter($this->env, $_BASEIMG_, "html", null, true);
        echo "LOGO-BUZ.jpg\"></a>
                </div>
                <!-- FlashInfo -->
                ";
        // line 41
        if (isset($context["flashs"])) { $_flashs_ = $context["flashs"]; } else { $_flashs_ = null; }
        if ((twig_length_filter($this->env, $_flashs_) > 0)) {
            // line 42
            echo "                    <div class=\"hidden-xs col-sm-12 col-md-9\">
                        <div class=\"panel panel-flashinfo\">
                            <div class=\"panel-heading\">Flash INFO</div>
                            <div class='panel-body'>
                                <div class=\"owl-carousel\" id=\"owl-flashinfo\">
                                    ";
            // line 47
            if (isset($context["flashs"])) { $_flashs_ = $context["flashs"]; } else { $_flashs_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_flashs_);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 48
                echo "                                        <p class=\"contentFlashInfo\">
                                            ";
                // line 49
                if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_flash_, "resume", array()), "html", null, true);
                echo "
                                        </p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                </div>
                                <a class=\"readmore btn-newsletter\" role='button'>M'inscrire aux informations du flash info</a>
                            </div>

                        </div>
                    </div>
                ";
        }
        // line 59
        echo "                <!-- Recherche Et Sous Menu -->
                <div class=\"hidden-xs col-sm-6 blocrecherche ";
        // line 60
        if (isset($context["flashs"])) { $_flashs_ = $context["flashs"]; } else { $_flashs_ = null; }
        if ((twig_length_filter($this->env, $_flashs_) > 0)) {
            echo "col-md-offset-3 ";
        } else {
            echo " col-md-offset-12";
        }
        echo "\">
                    <div class=\"col-xs-24\">
                        <form method=\"POST\" action=\"";
        // line 62
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "recherche.html\" class=\"pull-right\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher ...\" aria-describedby=\"basic-addon-loupe\" name=\"rechercheall\">
                                <span class=\"input-group-addon\" id=\"basic-addon-loupe\"><img src=\"";
        // line 65
        if (isset($context["BASEIMG"])) { $_BASEIMG_ = $context["BASEIMG"]; } else { $_BASEIMG_ = null; }
        echo twig_escape_filter($this->env, $_BASEIMG_, "html", null, true);
        echo "loupe-seul.png\"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>        
        </div>        

        <!-- menu -->
        ";
        // line 74
        $this->loadTemplate("global/mainMenu.twig", "actualite.twig", 74)->display($context);
        // line 75
        echo "

        <div class=\"row hidden-xs\">
            <div id=\"header-slider\">
                <div role=\"listbox\">
                    <div class=\"item active\">
                        <img src=\"";
        // line 81
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "themes/default/img/bannieres/banniere-actualite.jpg\" class=\"img img-responsive\">
                    </div>  
                </div>
            </div>
            ";
        // line 85
        $this->loadTemplate("global/breadcrumbActu.twig", "actualite.twig", 85)->display($context);
        // line 86
        echo "        </div>
    </div>

    <div class=\"bloc-maincontainer container-article\">
        <div class=\"row actualites-center\">
            <!-- COL_MIDDLE-->
            <div class=\"col-xs-24 col-sm-24 col-md-22 nopadding\">
                ";
        // line 93
        if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
        if ((twig_length_filter($this->env, $_actualite_) > 0)) {
            // line 94
            echo "                    ";
            $this->loadTemplate("/modules/actualite/layout/displayCenterColumn.twig", "actualite.twig", 94)->display($context);
            // line 95
            echo "                ";
        }
        // line 96
        echo "            </div>
            <!-- COL_RIGHT-->
            <div class=\"hidden-xs hidden-sm col-md-2 nopadding noPrint\">
                <!-- COL_RIGHT_ONE -->
                ";
        // line 100
        $this->loadTemplate("/blocks/services/layout/displayMiniInnerColRight.twig", "actualite.twig", 100)->display($context);
        // line 101
        echo "            </div>
        </div>
        ";
        // line 103
        $this->loadTemplate("global/footer.twig", "actualite.twig", 103)->display($context);
        echo "    
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "actualite.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 103,  290 => 101,  288 => 100,  282 => 96,  279 => 95,  276 => 94,  273 => 93,  264 => 86,  262 => 85,  254 => 81,  246 => 75,  244 => 74,  231 => 65,  224 => 62,  214 => 60,  211 => 59,  202 => 52,  192 => 49,  189 => 48,  184 => 47,  177 => 42,  174 => 41,  164 => 38,  154 => 30,  151 => 29,  143 => 25,  138 => 24,  133 => 23,  128 => 22,  123 => 21,  118 => 20,  115 => 19,  107 => 16,  102 => 15,  97 => 14,  92 => 13,  87 => 12,  82 => 11,  77 => 10,  72 => 9,  67 => 8,  62 => 7,  57 => 6,  54 => 5,  47 => 4,  40 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends "base.twig" %}*/
/* {% block title %}{{titrePage}}{% endblock %}*/
/* {% block description %}{{descriptionPage}}{% endblock %}*/
/* {% block keywords %}{{motsclefsPage}}{% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel='stylesheet prefetch' href="{{BASETHEME}}/css/toolbar.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/css/home.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/modules/blocdownload/css/blocdownload.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/coordonnees/css/coordonnees.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/services/css/services.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/phototheque/css/phototheque.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/modules/actualite/css/actualite.css" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASEURL}}libs/fancybox/source/jquery.fancybox.css" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css"/>*/
/*      */
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>   */
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>   */
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>   */
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-media.js"></script>   */
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>   */
/*    */
/* {% endblock %}*/
/*     */
/* {% block body %}*/
/*     <div class="blocHeader">*/
/*         <div class="row">*/
/*             <div class="decotopsite"></div>*/
/*         </div>*/
/*         <div class="row rowlogoflash">*/
/*             <div class="col-xs-24 col-sm-24 col-md-22 col-md-offset-1">*/
/*                 <!-- LOGO -->*/
/*                 <div class="col-xs-24 col-sm-6">*/
/*                     <a href="{{BASEURL}}index.html"><img class="img img-responsive" src="{{BASEIMG}}LOGO-BUZ.jpg"></a>*/
/*                 </div>*/
/*                 <!-- FlashInfo -->*/
/*                 {% if flashs|length>0 %}*/
/*                     <div class="hidden-xs col-sm-12 col-md-9">*/
/*                         <div class="panel panel-flashinfo">*/
/*                             <div class="panel-heading">Flash INFO</div>*/
/*                             <div class='panel-body'>*/
/*                                 <div class="owl-carousel" id="owl-flashinfo">*/
/*                                     {% for flash in flashs %}*/
/*                                         <p class="contentFlashInfo">*/
/*                                             {{flash.resume}}*/
/*                                         </p>*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                                 <a class="readmore btn-newsletter" role='button'>M'inscrire aux informations du flash info</a>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 <!-- Recherche Et Sous Menu -->*/
/*                 <div class="hidden-xs col-sm-6 blocrecherche {% if flashs|length>0 %}col-md-offset-3 {% else %} col-md-offset-12{% endif %}">*/
/*                     <div class="col-xs-24">*/
/*                         <form method="POST" action="{{BASEURL}}recherche.html" class="pull-right">*/
/*                             <div class="input-group">*/
/*                                 <input type="text" class="form-control" placeholder="Rechercher ..." aria-describedby="basic-addon-loupe" name="rechercheall">*/
/*                                 <span class="input-group-addon" id="basic-addon-loupe"><img src="{{BASEIMG}}loupe-seul.png"></span>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>        */
/*         </div>        */
/* */
/*         <!-- menu -->*/
/*         {% include 'global/mainMenu.twig' %}*/
/* */
/* */
/*         <div class="row hidden-xs">*/
/*             <div id="header-slider">*/
/*                 <div role="listbox">*/
/*                     <div class="item active">*/
/*                         <img src="{{BASEURL}}themes/default/img/bannieres/banniere-actualite.jpg" class="img img-responsive">*/
/*                     </div>  */
/*                 </div>*/
/*             </div>*/
/*             {% include 'global/breadcrumbActu.twig' %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="bloc-maincontainer container-article">*/
/*         <div class="row actualites-center">*/
/*             <!-- COL_MIDDLE-->*/
/*             <div class="col-xs-24 col-sm-24 col-md-22 nopadding">*/
/*                 {% if actualite|length>0 %}*/
/*                     {% include '/modules/actualite/layout/displayCenterColumn.twig' %}*/
/*                 {% endif %}*/
/*             </div>*/
/*             <!-- COL_RIGHT-->*/
/*             <div class="hidden-xs hidden-sm col-md-2 nopadding noPrint">*/
/*                 <!-- COL_RIGHT_ONE -->*/
/*                 {% include '/blocks/services/layout/displayMiniInnerColRight.twig' %}*/
/*             </div>*/
/*         </div>*/
/*         {% include 'global/footer.twig' %}    */
/*     </div>*/
/*     */
/* {% endblock %}*/
/* */
/* */
