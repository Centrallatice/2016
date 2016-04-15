<?php

/* videotheque.twig */
class __TwigTemplate_f1b474bb55965f2a596c9dbac04a1219df607347eb94d7571c83d949e3b3063d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "videotheque.twig", 1);
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
        echo "Notre Vidéothèque";
    }

    // line 3
    public function block_description($context, array $blocks = array())
    {
        echo "Accéder au site officiel de la ville de Buzançais et découvrez ses infrastructures, ses services, son patrimoine et son actualité";
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        echo "buzançais,ville de 
buzançais,mairie,buzancais, buzancays,36,indre,région centre, 
présentation,information,actualités,services,découverte,tourisme,patrimoine,culture,évènement,pêche,étang,visiter,camping,hôtels,restaurants,entreprises,associations,conseilmunicipal,services
 communaux,action sociale,loisirs,vie associative,vie 
pratique,randonnée,séjours,hébergement";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 11
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/phototheque.css\" rel=\"stylesheet prefetch\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 12
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 13
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/modules/blocdownload/css/blocdownload.css\" rel=\"stylesheet prefetch\" type=\"text/css\"/>
    <link href=\"";
        // line 14
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/coordonnees/css/coordonnees.css\" rel=\"stylesheet prefetch\" type=\"text/css\"/>
    <link href=\"";
        // line 15
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/services/css/services.css\" rel=\"stylesheet prefetch\" type=\"text/css\"/>
    <link href=\"";
        // line 16
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/phototheque/css/phototheque.css\" rel=\"stylesheet prefetch\" type=\"text/css\"/>
    <link href=\"";
        // line 17
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/unitegallery/css/unite-gallery.css\" rel=\"stylesheet prefetch\" type=\"text/css\"/>
    <link href=\"";
        // line 18
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/unitegallery/themes/default/ug-theme-default.css\" rel=\"stylesheet prefetch\" type=\"text/css\"/>
";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "  
    <script type=\"text/javascript\" src=\"";
        // line 22
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/unitegallery/js/unitegallery.min.js\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 23
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/unitegallery/themes/tiles/ug-theme-tiles.js\"></script> 
    <script type=\"text/javascript\" src=\"";
        // line 24
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "public/js/unitegallery.js\"></script>
";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "    <div class=\"blocHeader\">
    <div class=\"row\">
        <div class=\"decotopsite\"></div>
    </div>
    <div class=\"row rowlogoflash\">
        <div class=\"col-xs-24 col-sm-24 col-md-22 col-md-offset-1\">
            <!-- LOGO -->
            <div class=\"col-xs-24 col-sm-6\">
                <a href=\"";
        // line 36
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "index.html\"><img class=\"img img-responsive\" src=\"";
        if (isset($context["BASEIMG"])) { $_BASEIMG_ = $context["BASEIMG"]; } else { $_BASEIMG_ = null; }
        echo twig_escape_filter($this->env, $_BASEIMG_, "html", null, true);
        echo "LOGO-BUZ.jpg\"></a>
            </div>
            <!-- FlashInfo -->
            ";
        // line 39
        if (isset($context["flashs"])) { $_flashs_ = $context["flashs"]; } else { $_flashs_ = null; }
        if ((twig_length_filter($this->env, $_flashs_) > 0)) {
            // line 40
            echo "                <div class=\"hidden-xs col-sm-12 col-md-9\">
                    <div class=\"panel panel-flashinfo\">
                        <div class=\"panel-heading\">Flash INFO</div>
                        <div class='panel-body'>
                            <div class=\"owl-carousel\" id=\"owl-flashinfo\">
                                ";
            // line 45
            if (isset($context["flashs"])) { $_flashs_ = $context["flashs"]; } else { $_flashs_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_flashs_);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 46
                echo "                                    <p class=\"contentFlashInfo\">
                                        ";
                // line 47
                if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_flash_, "resume", array()), "html", null, true);
                echo "
                                    </p>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                            </div>
                            <a class=\"readmore btn-newsletter\" role='button'>M'inscrire aux informations du flash info</a>
                        </div>

                    </div>
                </div>
            ";
        }
        // line 57
        echo "            <!-- Recherche Et Sous Menu -->
            <div class=\"hidden-xs col-sm-6 blocrecherche ";
        // line 58
        if (isset($context["flashs"])) { $_flashs_ = $context["flashs"]; } else { $_flashs_ = null; }
        if ((twig_length_filter($this->env, $_flashs_) > 0)) {
            echo "col-md-offset-3 ";
        } else {
            echo " col-md-offset-12";
        }
        echo "\">
                <div class=\"col-xs-24\">
                    <form method=\"POST\" action=\"";
        // line 60
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "recherche.html\" class=\"pull-right\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher ...\" aria-describedby=\"basic-addon-loupe\"  name=\"rechercheall\">
                            <span class=\"input-group-addon\" id=\"basic-addon-loupe\"><img src=\"";
        // line 63
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
        // line 72
        $this->loadTemplate("global/mainMenu.twig", "videotheque.twig", 72)->display($context);
        // line 73
        echo "    
    
    <div class=\"row hidden-xs\">
        <div id=\"header-slider\">
            <div role=\"listbox\">
                <div class=\"item active\">
                    <img src=\"";
        // line 79
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "themes/default/img/bannieres/banniere-videotheque.jpg\" class=\"img img-responsive\">
                </div>  
            </div>
        </div>
        ";
        // line 83
        $this->loadTemplate("global/breadcrumbArticles.twig", "videotheque.twig", 83)->display(array_merge($context, array("titleBread" => "Vidéothèque")));
        echo " 
    </div>
</div>

    <div class=\"bloc-maincontainer contentPage actualites\">
        <div class=\"row\">
            <div class=\"colmiddle col-xs-24 col-sm-24 col-md-22\">
                <div class=\"col-xs-24 nopadding\">
                    <div class=\"innerArticle\">
                        <div class=\"media\">
                            <div class=\"media-left\">
                                <img class=\"media-object\" src=\"";
        // line 94
        if (isset($context["BASEIMG"])) { $_BASEIMG_ = $context["BASEIMG"]; } else { $_BASEIMG_ = null; }
        echo twig_escape_filter($this->env, $_BASEIMG_, "html", null, true);
        echo "icone-VIDEO.png\">
                            </div>
                            <div class=\"media-body\">
                                <h2 class=\"media-heading\">
                                    Notre Vidéothèque
                                </h2>
                                <div class=\"linebottomcat\"></div>
                            </div>
                        </div>
                               
                        ";
        // line 104
        if (isset($context["Contenu"])) { $_Contenu_ = $context["Contenu"]; } else { $_Contenu_ = null; }
        if ((twig_length_filter($this->env, $_Contenu_) > 0)) {
            // line 105
            echo "                            
                                ";
            // line 106
            if (isset($context["Contenu"])) { $_Contenu_ = $context["Contenu"]; } else { $_Contenu_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_Contenu_);
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 107
                echo "                                    <div class=\"col-xs-24 col-sm-12\">
                                    <!-- 4:3 aspect ratio -->
                                        <div class=\"embed-responsive embed-responsive-4by3\">
                                          <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/";
                // line 110
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "url", array()), "html", null, true);
                echo "\"></iframe>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "                           
                        ";
        }
        // line 116
        echo "                    </div>
                    ";
        // line 117
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "BOTTOM_PAGE", array(), "array")) {
            // line 118
            echo "                        ";
            if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_modules_, "BOTTOM_PAGE", array(), "array"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["carou"]) {
                // line 119
                echo "                            ";
                if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
                if (($this->getAttribute($_carou_, "type", array()) == "caroussel")) {
                    // line 120
                    echo "                                ";
                    $this->loadTemplate("/modules/caroussel/layout/displayBottomPage.twig", "videotheque.twig", 120)->display($context);
                    // line 121
                    echo "                            ";
                }
                // line 122
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carou'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                    ";
        }
        // line 124
        echo "                </div>
                
                
            </div>
            <div class=\"hidden-xs hidden-sm col-md-2 nopadding noPrint\">
                <!-- COL_RIGHT_ONE -->
                ";
        // line 130
        $this->loadTemplate("/blocks/services/layout/displayMiniInnerColRight.twig", "videotheque.twig", 130)->display($context);
        // line 131
        echo "            </div>
        </div>
    ";
        // line 133
        $this->loadTemplate("global/footer.twig", "videotheque.twig", 133)->display($context);
        echo "    
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "videotheque.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 133,  362 => 131,  360 => 130,  352 => 124,  349 => 123,  335 => 122,  332 => 121,  329 => 120,  325 => 119,  306 => 118,  303 => 117,  300 => 116,  296 => 114,  285 => 110,  280 => 107,  275 => 106,  272 => 105,  269 => 104,  255 => 94,  241 => 83,  233 => 79,  225 => 73,  223 => 72,  210 => 63,  203 => 60,  193 => 58,  190 => 57,  181 => 50,  171 => 47,  168 => 46,  163 => 45,  156 => 40,  153 => 39,  143 => 36,  133 => 28,  130 => 27,  123 => 24,  118 => 23,  113 => 22,  108 => 21,  105 => 20,  98 => 18,  93 => 17,  88 => 16,  83 => 15,  78 => 14,  73 => 13,  68 => 12,  63 => 11,  58 => 10,  55 => 9,  45 => 4,  39 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends "base.twig" %}*/
/* {% block title %}Notre Vidéothèque{% endblock %}*/
/* {% block description %}Accéder au site officiel de la ville de Buzançais et découvrez ses infrastructures, ses services, son patrimoine et son actualité{% endblock %}*/
/* {% block keywords %}buzançais,ville de */
/* buzançais,mairie,buzancais, buzancays,36,indre,région centre, */
/* présentation,information,actualités,services,découverte,tourisme,patrimoine,culture,évènement,pêche,étang,visiter,camping,hôtels,restaurants,entreprises,associations,conseilmunicipal,services*/
/*  communaux,action sociale,loisirs,vie associative,vie */
/* pratique,randonnée,séjours,hébergement{% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{BASETHEME}}/css/phototheque.css" rel="stylesheet prefetch" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASETHEME}}/css/toolbar.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/modules/blocdownload/css/blocdownload.css" rel="stylesheet prefetch" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/coordonnees/css/coordonnees.css" rel="stylesheet prefetch" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/services/css/services.css" rel="stylesheet prefetch" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/phototheque/css/phototheque.css" rel="stylesheet prefetch" type="text/css"/>*/
/*     <link href="{{BASEURL}}libs/unitegallery/css/unite-gallery.css" rel="stylesheet prefetch" type="text/css"/>*/
/*     <link href="{{BASEURL}}libs/unitegallery/themes/default/ug-theme-default.css" rel="stylesheet prefetch" type="text/css"/>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}  */
/*     <script type="text/javascript" src="{{BASEURL}}libs/unitegallery/js/unitegallery.min.js"></script>   */
/*     <script type="text/javascript" src="{{BASEURL}}libs/unitegallery/themes/tiles/ug-theme-tiles.js"></script> */
/*     <script type="text/javascript" src="{{BASEURL}}public/js/unitegallery.js"></script>*/
/* {% endblock %}*/
/*     */
/* {% block body %}*/
/*     <div class="blocHeader">*/
/*     <div class="row">*/
/*         <div class="decotopsite"></div>*/
/*     </div>*/
/*     <div class="row rowlogoflash">*/
/*         <div class="col-xs-24 col-sm-24 col-md-22 col-md-offset-1">*/
/*             <!-- LOGO -->*/
/*             <div class="col-xs-24 col-sm-6">*/
/*                 <a href="{{BASEURL}}index.html"><img class="img img-responsive" src="{{BASEIMG}}LOGO-BUZ.jpg"></a>*/
/*             </div>*/
/*             <!-- FlashInfo -->*/
/*             {% if flashs|length>0 %}*/
/*                 <div class="hidden-xs col-sm-12 col-md-9">*/
/*                     <div class="panel panel-flashinfo">*/
/*                         <div class="panel-heading">Flash INFO</div>*/
/*                         <div class='panel-body'>*/
/*                             <div class="owl-carousel" id="owl-flashinfo">*/
/*                                 {% for flash in flashs %}*/
/*                                     <p class="contentFlashInfo">*/
/*                                         {{flash.resume}}*/
/*                                     </p>*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                             <a class="readmore btn-newsletter" role='button'>M'inscrire aux informations du flash info</a>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*             <!-- Recherche Et Sous Menu -->*/
/*             <div class="hidden-xs col-sm-6 blocrecherche {% if flashs|length>0 %}col-md-offset-3 {% else %} col-md-offset-12{% endif %}">*/
/*                 <div class="col-xs-24">*/
/*                     <form method="POST" action="{{BASEURL}}recherche.html" class="pull-right">*/
/*                         <div class="input-group">*/
/*                             <input type="text" class="form-control" placeholder="Rechercher ..." aria-describedby="basic-addon-loupe"  name="rechercheall">*/
/*                             <span class="input-group-addon" id="basic-addon-loupe"><img src="{{BASEIMG}}loupe-seul.png"></span>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>        */
/*     </div>        */
/* */
/*     <!-- menu -->*/
/*     {% include 'global/mainMenu.twig' %}*/
/*     */
/*     */
/*     <div class="row hidden-xs">*/
/*         <div id="header-slider">*/
/*             <div role="listbox">*/
/*                 <div class="item active">*/
/*                     <img src="{{BASEURL}}themes/default/img/bannieres/banniere-videotheque.jpg" class="img img-responsive">*/
/*                 </div>  */
/*             </div>*/
/*         </div>*/
/*         {% include 'global/breadcrumbArticles.twig' with{titleBread:"Vidéothèque"} %} */
/*     </div>*/
/* </div>*/
/* */
/*     <div class="bloc-maincontainer contentPage actualites">*/
/*         <div class="row">*/
/*             <div class="colmiddle col-xs-24 col-sm-24 col-md-22">*/
/*                 <div class="col-xs-24 nopadding">*/
/*                     <div class="innerArticle">*/
/*                         <div class="media">*/
/*                             <div class="media-left">*/
/*                                 <img class="media-object" src="{{BASEIMG}}icone-VIDEO.png">*/
/*                             </div>*/
/*                             <div class="media-body">*/
/*                                 <h2 class="media-heading">*/
/*                                     Notre Vidéothèque*/
/*                                 </h2>*/
/*                                 <div class="linebottomcat"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                                */
/*                         {% if Contenu|length>0 %}*/
/*                             */
/*                                 {% for i in Contenu %}*/
/*                                     <div class="col-xs-24 col-sm-12">*/
/*                                     <!-- 4:3 aspect ratio -->*/
/*                                         <div class="embed-responsive embed-responsive-4by3">*/
/*                                           <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{i.url}}"></iframe>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                            */
/*                         {% endif %}*/
/*                     </div>*/
/*                     {% if modules['BOTTOM_PAGE'] %}*/
/*                         {% for carou in modules['BOTTOM_PAGE'] %}*/
/*                             {% if carou.type=='caroussel' %}*/
/*                                 {% include '/modules/caroussel/layout/displayBottomPage.twig' %}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 */
/*                 */
/*             </div>*/
/*             <div class="hidden-xs hidden-sm col-md-2 nopadding noPrint">*/
/*                 <!-- COL_RIGHT_ONE -->*/
/*                 {% include '/blocks/services/layout/displayMiniInnerColRight.twig' %}*/
/*             </div>*/
/*         </div>*/
/*     {% include 'global/footer.twig' %}    */
/*     </div>*/
/*     */
/* {% endblock %}*/
