<?php

/* phototheque.twig */
class __TwigTemplate_7de2dae282c7a6ab51f0b0c36e6b13d34360b729d057abe70f26465122794cf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "phototheque.twig", 1);
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
        echo "Notre Photothèque";
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
        echo "libs/unitegallery/themes/grid/ug-theme-grid.js\"></script> 
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
            echo "                    <div class=\"hidden-xs col-sm-12 col-md-9\">
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
                echo "                                        <p class=\"contentFlashInfo\">
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
            echo "                                </div>
                                <a class=\"readmore btn-newsletter\" role='button'>M'inscrire aux informations du flash info</a>
                            </div>

                        </div>
                    </div>
                ";
        }
        // line 57
        echo "                <!-- Recherche Et Sous Menu -->
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
                                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher ...\" aria-describedby=\"basic-addon-loupe\" name=\"rechercheall\">
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
        $this->loadTemplate("global/mainMenu.twig", "phototheque.twig", 72)->display($context);
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
        echo "themes/default/img/bannieres/banniere-phototheque.jpg\" class=\"img img-responsive\">
                    </div>  
                </div>
            </div>
            ";
        // line 83
        $this->loadTemplate("global/breadcrumbArticles.twig", "phototheque.twig", 83)->display(array_merge($context, array("titleBread" => "Photothèque")));
        // line 84
        echo "        </div>
    </div>

    <div class=\"bloc-maincontainer contentPage actualites\">
        <div class=\"row\">
            <div class=\"colmiddle col-xs-24 col-sm-24 col-md-22\">
                <div class=\"col-xs-24 col-sm-24 col-md-18 nopadding\">
                    <div class=\"innerArticle\">
                        <div class=\"media\">
                            <div class=\"media-left\">
                                <img class=\"media-object\" src=\"";
        // line 94
        if (isset($context["BASEIMG"])) { $_BASEIMG_ = $context["BASEIMG"]; } else { $_BASEIMG_ = null; }
        echo twig_escape_filter($this->env, $_BASEIMG_, "html", null, true);
        echo "icone-photo.png\">
                            </div>
                            <div class=\"media-body\">
                                <h2 class=\"media-heading\">
                                    Notre Photothèque - ";
        // line 98
        if (isset($context["album"])) { $_album_ = $context["album"]; } else { $_album_ = null; }
        echo twig_escape_filter($this->env, $_album_, "html", null, true);
        echo "
                                </h2>
                                <div class=\"linebottomcat\"></div>
                            </div>
                        </div>
                        ";
        // line 103
        if (isset($context["Contenu"])) { $_Contenu_ = $context["Contenu"]; } else { $_Contenu_ = null; }
        if ((twig_length_filter($this->env, $_Contenu_) > 0)) {
            // line 104
            echo "                                <div id=\"gallery\" style=\"display:none;\">
                                    ";
            // line 105
            if (isset($context["Contenu"])) { $_Contenu_ = $context["Contenu"]; } else { $_Contenu_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_Contenu_);
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 106
                echo "                                        <img 
                                            data-image=\"";
                // line 107
                if (isset($context["BASE_PATH_UPLOAD_URL"])) { $_BASE_PATH_UPLOAD_URL_ = $context["BASE_PATH_UPLOAD_URL"]; } else { $_BASE_PATH_UPLOAD_URL_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, (((($_BASE_PATH_UPLOAD_URL_ . "/") . $this->getAttribute($_i_, "rep", array())) . "/") . $this->getAttribute($_i_, "filename", array())), "html", null, true);
                echo "\"
                                            data-description=\"";
                // line 108
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "nom", array()), "html", null, true);
                echo "\"
                                            alt=\"";
                // line 109
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "nom", array()), "html", null, true);
                echo "\" 
                                            src=\"";
                // line 110
                if (isset($context["BASE_PATH_UPLOAD_URL"])) { $_BASE_PATH_UPLOAD_URL_ = $context["BASE_PATH_UPLOAD_URL"]; } else { $_BASE_PATH_UPLOAD_URL_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, (((($_BASE_PATH_UPLOAD_URL_ . "/") . $this->getAttribute($_i_, "rep", array())) . "/minis/") . $this->getAttribute($_i_, "filename", array())), "html", null, true);
                echo "\">

                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                                </div>
                            ";
        }
        // line 115
        echo "                    </div>
                    ";
        // line 116
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "BOTTOM_PAGE", array(), "array")) {
            // line 117
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
                // line 118
                echo "                            ";
                if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
                if (($this->getAttribute($_carou_, "type", array()) == "caroussel")) {
                    // line 119
                    echo "                                ";
                    $this->loadTemplate("/modules/caroussel/layout/displayBottomPage.twig", "phototheque.twig", 119)->display($context);
                    // line 120
                    echo "                            ";
                }
                // line 121
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
            // line 122
            echo "                    ";
        }
        // line 123
        echo "                </div>
                
                <div class=\"col-xs-24 hidden-sm col-md-6 nopadding noPrint col-right-one\">
                    <!-- COL_RIGHT_ONE -->
                    
                    ";
        // line 128
        if (isset($context["Categories"])) { $_Categories_ = $context["Categories"]; } else { $_Categories_ = null; }
        if ((twig_length_filter($this->env, $_Categories_) > 0)) {
            // line 129
            echo "                        <ul class=\"list-group\">
                        ";
            // line 130
            if (isset($context["Categories"])) { $_Categories_ = $context["Categories"]; } else { $_Categories_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_Categories_);
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 131
                echo "                            <li class=\"list-group-item";
                if (isset($context["catPhotos"])) { $_catPhotos_ = $context["catPhotos"]; } else { $_catPhotos_ = null; }
                if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                if (($_catPhotos_ == $this->getAttribute($_c_, "id", array()))) {
                    echo " active";
                }
                echo "\">
                                <a data-toggle=\"collapse\" 
                                 aria-expanded=\"";
                // line 133
                if (isset($context["catPhotos"])) { $_catPhotos_ = $context["catPhotos"]; } else { $_catPhotos_ = null; }
                if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                if (($_catPhotos_ == $this->getAttribute($_c_, "id", array()))) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo "\" 
                                 href=\"#bloc-";
                // line 134
                if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_c_, "id", array()), "html", null, true);
                echo "\"
                                 aria-controls=\"bloc-";
                // line 135
                if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_c_, "id", array()), "html", null, true);
                echo "\"
                                 >";
                // line 136
                if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_c_, "Nom", array()), "html", null, true);
                echo "</a></li>
                           
                            ";
                // line 138
                if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_c_, "albums", array())) > 0)) {
                    // line 139
                    echo "                                <ul id='bloc-";
                    if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_c_, "id", array()), "html", null, true);
                    echo "' class='innerAlbum collapse ";
                    if (isset($context["catPhotos"])) { $_catPhotos_ = $context["catPhotos"]; } else { $_catPhotos_ = null; }
                    if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                    if (($_catPhotos_ == $this->getAttribute($_c_, "id", array()))) {
                        echo "in";
                    }
                    echo "'>
                                ";
                    // line 140
                    if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_c_, "albums", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        // line 141
                        echo "                                    <li class=\"";
                        if (isset($context["album"])) { $_album_ = $context["album"]; } else { $_album_ = null; }
                        if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                        if (($_album_ == $this->getAttribute($_a_, "NomAlbum", array()))) {
                            echo "active";
                        }
                        echo "\">
                                        <a href=\"";
                        // line 142
                        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                        echo "phototheque/";
                        if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_c_, "id", array()), "html", null, true);
                        echo "/";
                        if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_a_, "NomAlbum", array()), "html", null, true);
                        echo "\">";
                        if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_a_, "NomAlbum", array()), "html", null, true);
                        echo "</a></li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 144
                    echo "                                </ul>
                            ";
                }
                // line 146
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "                        </ul>
                    ";
        } else {
            // line 149
            echo "                        <br /><br />
                        <center><b>Aucune catégorie de photos n'a été publiée pour le moment.</b></center><br /><br /> <hr />
                    ";
        }
        // line 152
        echo "                    <!-- COL_RIGHT_TWO-->
                    ";
        // line 153
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "COL_RIGHT_TWO", array(), "array")) {
            // line 154
            echo "                        ";
            if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_modules_, "COL_RIGHT_TWO", array(), "array"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 155
                echo "                            ";
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                if (($this->getAttribute($_m_, "type", array()) == "blocdownload")) {
                    // line 156
                    echo "                                ";
                    $this->loadTemplate("/modules/blocdownload/layout/displayRightColumn.twig", "phototheque.twig", 156)->display($context);
                    // line 157
                    echo "                            ";
                } elseif (($this->getAttribute($_m_, "type", array()) == "customcontent")) {
                    // line 158
                    echo "                                ";
                    if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                    echo $this->getAttribute($_m_, "contenuHTML", array());
                    echo "
                            ";
                }
                // line 160
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                    ";
        }
        // line 162
        echo "                </div>
            </div>
            <div class=\"hidden-xs hidden-sm col-md-2 nopadding noPrint\">
                <!-- COL_RIGHT_ONE -->
                ";
        // line 166
        $this->loadTemplate("/blocks/services/layout/displayMiniInnerColRight.twig", "phototheque.twig", 166)->display($context);
        // line 167
        echo "            </div>
        </div>
    ";
        // line 169
        $this->loadTemplate("global/footer.twig", "phototheque.twig", 169)->display($context);
        echo "    
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "phototheque.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 169,  556 => 167,  554 => 166,  548 => 162,  545 => 161,  531 => 160,  524 => 158,  521 => 157,  518 => 156,  514 => 155,  495 => 154,  492 => 153,  489 => 152,  484 => 149,  480 => 147,  474 => 146,  470 => 144,  452 => 142,  443 => 141,  438 => 140,  426 => 139,  423 => 138,  417 => 136,  412 => 135,  407 => 134,  397 => 133,  387 => 131,  382 => 130,  379 => 129,  376 => 128,  369 => 123,  366 => 122,  352 => 121,  349 => 120,  346 => 119,  342 => 118,  323 => 117,  320 => 116,  317 => 115,  313 => 113,  302 => 110,  297 => 109,  292 => 108,  286 => 107,  283 => 106,  278 => 105,  275 => 104,  272 => 103,  263 => 98,  255 => 94,  243 => 84,  241 => 83,  233 => 79,  225 => 73,  223 => 72,  210 => 63,  203 => 60,  193 => 58,  190 => 57,  181 => 50,  171 => 47,  168 => 46,  163 => 45,  156 => 40,  153 => 39,  143 => 36,  133 => 28,  130 => 27,  123 => 24,  118 => 23,  113 => 22,  108 => 21,  105 => 20,  98 => 18,  93 => 17,  88 => 16,  83 => 15,  78 => 14,  73 => 13,  68 => 12,  63 => 11,  58 => 10,  55 => 9,  45 => 4,  39 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends "base.twig" %}*/
/* {% block title %}Notre Photothèque{% endblock %}*/
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
/*     <script type="text/javascript" src="{{BASEURL}}libs/unitegallery/themes/grid/ug-theme-grid.js"></script> */
/*     <script type="text/javascript" src="{{BASEURL}}public/js/unitegallery.js"></script>*/
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
/*                         <img src="{{BASEURL}}themes/default/img/bannieres/banniere-phototheque.jpg" class="img img-responsive">*/
/*                     </div>  */
/*                 </div>*/
/*             </div>*/
/*             {% include 'global/breadcrumbArticles.twig' with{titleBread:"Photothèque"} %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="bloc-maincontainer contentPage actualites">*/
/*         <div class="row">*/
/*             <div class="colmiddle col-xs-24 col-sm-24 col-md-22">*/
/*                 <div class="col-xs-24 col-sm-24 col-md-18 nopadding">*/
/*                     <div class="innerArticle">*/
/*                         <div class="media">*/
/*                             <div class="media-left">*/
/*                                 <img class="media-object" src="{{BASEIMG}}icone-photo.png">*/
/*                             </div>*/
/*                             <div class="media-body">*/
/*                                 <h2 class="media-heading">*/
/*                                     Notre Photothèque - {{album}}*/
/*                                 </h2>*/
/*                                 <div class="linebottomcat"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {% if Contenu|length>0 %}*/
/*                                 <div id="gallery" style="display:none;">*/
/*                                     {% for i in Contenu %}*/
/*                                         <img */
/*                                             data-image="{{ BASE_PATH_UPLOAD_URL~'/'~i.rep~'/'~i.filename}}"*/
/*                                             data-description="{{i.nom}}"*/
/*                                             alt="{{i.nom}}" */
/*                                             src="{{ BASE_PATH_UPLOAD_URL~'/'~i.rep~'/minis/'~i.filename}}">*/
/* */
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             {% endif %}*/
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
/*                 <div class="col-xs-24 hidden-sm col-md-6 nopadding noPrint col-right-one">*/
/*                     <!-- COL_RIGHT_ONE -->*/
/*                     */
/*                     {% if Categories|length>0 %}*/
/*                         <ul class="list-group">*/
/*                         {% for c in Categories %}*/
/*                             <li class="list-group-item{% if catPhotos==c.id %} active{% endif %}">*/
/*                                 <a data-toggle="collapse" */
/*                                  aria-expanded="{% if catPhotos==c.id %}true{% else %}false{% endif %}" */
/*                                  href="#bloc-{{c.id}}"*/
/*                                  aria-controls="bloc-{{c.id}}"*/
/*                                  >{{c.Nom}}</a></li>*/
/*                            */
/*                             {% if c.albums|length>0 %}*/
/*                                 <ul id='bloc-{{c.id}}' class='innerAlbum collapse {% if catPhotos==c.id %}in{% endif %}'>*/
/*                                 {% for a in c.albums %}*/
/*                                     <li class="{% if album==a.NomAlbum %}active{% endif %}">*/
/*                                         <a href="{{BASEURL}}phototheque/{{c.id}}/{{a.NomAlbum}}">{{a.NomAlbum}}</a></li>*/
/*                                 {% endfor %}*/
/*                                 </ul>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                         </ul>*/
/*                     {% else %}*/
/*                         <br /><br />*/
/*                         <center><b>Aucune catégorie de photos n'a été publiée pour le moment.</b></center><br /><br /> <hr />*/
/*                     {% endif %}*/
/*                     <!-- COL_RIGHT_TWO-->*/
/*                     {% if modules['COL_RIGHT_TWO'] %}*/
/*                         {% for m in modules['COL_RIGHT_TWO'] %}*/
/*                             {% if m.type=='blocdownload' %}*/
/*                                 {% include '/modules/blocdownload/layout/displayRightColumn.twig' %}*/
/*                             {% elseif m.type=='customcontent' %}*/
/*                                 {{m.contenuHTML |raw }}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 </div>*/
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
