<?php

/* @association/categorieAssociations.twig */
class __TwigTemplate_204ee3229dfa52b9b0ba89f87eeb0e7148dbd0e0f8bc16f794cdaa4b7f7e631f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "@association/categorieAssociations.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'bodyclass' => array($this, 'block_bodyclass'),
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
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "titrePage", array()), "html", null, true);
    }

    // line 3
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "descriptionPage", array()), "html", null, true);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "motsclefsPage", array()), "html", null, true);
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
        if (isset($context["BASETHEMEPATH"])) { $_BASETHEMEPATH_ = $context["BASETHEMEPATH"]; } else { $_BASETHEMEPATH_ = null; }
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
        echo twig_escape_filter($this->env, twig_ondisk("/css/toolbar.css", $_BASETHEMEPATH_, $_BASETHEME_, $_themesRep_), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 8
        if (isset($context["BASETHEMEPATH"])) { $_BASETHEMEPATH_ = $context["BASETHEMEPATH"]; } else { $_BASETHEMEPATH_ = null; }
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
        echo twig_escape_filter($this->env, twig_ondisk("/css/home.css", $_BASETHEMEPATH_, $_BASETHEME_, $_themesRep_), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 9
        if (isset($context["BASETHEMEPATH"])) { $_BASETHEMEPATH_ = $context["BASETHEMEPATH"]; } else { $_BASETHEMEPATH_ = null; }
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
        echo twig_escape_filter($this->env, twig_ondisk("/css/categorieAssociations.css", $_BASETHEMEPATH_, $_BASETHEME_, $_themesRep_), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 10
        if (isset($context["BASETHEMEPATH"])) { $_BASETHEMEPATH_ = $context["BASETHEMEPATH"]; } else { $_BASETHEMEPATH_ = null; }
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
        echo twig_escape_filter($this->env, twig_ondisk("/css/innerMenus.css", $_BASETHEMEPATH_, $_BASETHEME_, $_themesRep_), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 11
        if (isset($context["BASETHEMEPATH"])) { $_BASETHEMEPATH_ = $context["BASETHEMEPATH"]; } else { $_BASETHEMEPATH_ = null; }
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
        echo twig_escape_filter($this->env, twig_ondisk("/blocks/services/css/services.css", $_BASETHEMEPATH_, $_BASETHEME_, $_themesRep_), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 12
        if (isset($context["BASETHEMEPATH"])) { $_BASETHEMEPATH_ = $context["BASETHEMEPATH"]; } else { $_BASETHEMEPATH_ = null; }
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
        echo twig_escape_filter($this->env, twig_ondisk("/modules/blocdownload/css/blocdownload.css", $_BASETHEMEPATH_, $_BASETHEME_, $_themesRep_), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 13
        if (isset($context["BASETHEMEPATH"])) { $_BASETHEMEPATH_ = $context["BASETHEMEPATH"]; } else { $_BASETHEMEPATH_ = null; }
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
        echo twig_escape_filter($this->env, twig_ondisk("/modules/caroussel/css/caroussel.css", $_BASETHEMEPATH_, $_BASETHEME_, $_themesRep_), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

    <link rel='stylesheet prefetch' href=\"";
        // line 15
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/jquery.fancybox.css\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 16
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-buttons.css\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 17
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-thumbs.css\" type=\"text/css\"/>
";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        echo "   
    ";
        // line 21
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 22
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/lib/jquery.mousewheel-3.0.6.pack.js\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 23
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/jquery.fancybox.pack.js?v=2.1.5\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 24
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-buttons.js\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 25
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-media.js\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 26
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-thumbs.js\"></script>   
    <script src=\"";
        // line 27
        if (isset($context["BASEJS"])) { $_BASEJS_ = $context["BASEJS"]; } else { $_BASEJS_ = null; }
        echo twig_escape_filter($this->env, $_BASEJS_, "html", null, true);
        echo "initFancy.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 28
        if (isset($context["BASEJS"])) { $_BASEJS_ = $context["BASEJS"]; } else { $_BASEJS_ = null; }
        echo twig_escape_filter($this->env, $_BASEJS_, "html", null, true);
        echo "categorieAssociations.js\" type=\"text/javascript\"></script>
";
    }

    // line 30
    public function block_bodyclass($context, array $blocks = array())
    {
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($_dataPage_, "CatNom", array()), array(" " => "-", "/" => "", "'" => "-")), "html", null, true);
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $this->loadTemplate("global/header.twig", "@association/categorieAssociations.twig", 32)->display(array_merge($context, array("breadcrumbsarticle" => 1)));
        echo "                              
    <div class=\"bloc-maincontainer contentPage ";
        // line 33
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "CatNom", array()), "html", null, true);
        echo "\">
        <div class=\"row\">
            <!-- COL_LEFT-->
            <div class=\"hidden-xs col-sm-6 col-md-4 nopaddingleft noPrint\">
                <!-- COL_LEFT_ONE -->
                ";
        // line 38
        if (isset($context["pagemenu"])) { $_pagemenu_ = $context["pagemenu"]; } else { $_pagemenu_ = null; }
        if ((twig_length_filter($this->env, $_pagemenu_) > 0)) {
            // line 39
            echo "                    ";
            $this->loadTemplate("/modules/menus/layout/displayLeftColumn.twig", "@association/categorieAssociations.twig", 39)->display($context);
            // line 40
            echo "                ";
        }
        // line 41
        echo "            </div>
            <!-- COL_MIDDLE-->
            <div class=\"colmiddle col-xs-24 col-sm-18 col-md-18\">
                <div class=\"col-xs-24 col-sm-24 col-md-18 \">
                    <div class=\"logoCatAss\">
                        ";
        // line 46
        if (isset($context["catAsso"])) { $_catAsso_ = $context["catAsso"]; } else { $_catAsso_ = null; }
        if (( !(null === $this->getAttribute($_catAsso_, "image", array())) && ($this->getAttribute($_catAsso_, "image", array()) != ""))) {
            // line 47
            echo "                            <img class=\"img block-center\" src=\"";
            if (isset($context["urlIcoCat"])) { $_urlIcoCat_ = $context["urlIcoCat"]; } else { $_urlIcoCat_ = null; }
            echo twig_escape_filter($this->env, $_urlIcoCat_, "html", null, true);
            if (isset($context["catAsso"])) { $_catAsso_ = $context["catAsso"]; } else { $_catAsso_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_catAsso_, "image", array()), "html", null, true);
            echo "\">
                        ";
        }
        // line 49
        echo "                        <p class=\"desc\">Passez sur les logos pour avoir plus d'informations</p>
                    </div>
                    <div class=\"innerArticle\">
\t\t\t";
        // line 52
        if (isset($context["assos"])) { $_assos_ = $context["assos"]; } else { $_assos_ = null; }
        if ((twig_length_filter($this->env, $_assos_) > 0)) {
            // line 53
            echo "                            ";
            if (isset($context["assos"])) { $_assos_ = $context["assos"]; } else { $_assos_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_assos_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["ass"]) {
                // line 54
                echo "                                ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (($this->getAttribute($_loop_, "index", array()) == 1)) {
                    // line 55
                    echo "                                    <div class=\"row\">
                                ";
                }
                // line 56
                echo "    
                                
                                                             
                                    <div class=\"col-xs-24 col-sm-12 col-md-12 col-lg-8\">
                                        <div class=\"blocAsso sameheight\">
                                            ";
                // line 61
                if (isset($context["ass"])) { $_ass_ = $context["ass"]; } else { $_ass_ = null; }
                if (($this->getAttribute($_ass_, "image", array()) &&  !(null === $this->getAttribute($_ass_, "image", array())))) {
                    echo "       
                                                <img src=\"";
                    // line 62
                    if (isset($context["urlIcoAsso"])) { $_urlIcoAsso_ = $context["urlIcoAsso"]; } else { $_urlIcoAsso_ = null; }
                    echo twig_escape_filter($this->env, $_urlIcoAsso_, "html", null, true);
                    if (isset($context["ass"])) { $_ass_ = $context["ass"]; } else { $_ass_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_ass_, "image", array()), "html", null, true);
                    echo "\" class=\"img img-responsive\">
                                            ";
                } else {
                    // line 64
                    echo "                                                <div class=\"card\">
                                                    <p class=\"titre\">";
                    // line 65
                    if (isset($context["ass"])) { $_ass_ = $context["ass"]; } else { $_ass_ = null; }
                    echo $this->getAttribute($_ass_, "nom", array());
                    echo "</p>
                                                    <div class=\"desc\">Buzançais</div>
                                                </div>
                                            ";
                }
                // line 69
                echo "                                            <div class=\"textpan sameheight\">
                                                <p class=\"titre\">";
                // line 70
                if (isset($context["ass"])) { $_ass_ = $context["ass"]; } else { $_ass_ = null; }
                echo $this->getAttribute($_ass_, "nom", array());
                echo "</p>
                                                <div class=\"desc\">";
                // line 71
                if (isset($context["ass"])) { $_ass_ = $context["ass"]; } else { $_ass_ = null; }
                echo $this->getAttribute($_ass_, "contenu", array());
                echo "</div>
                                            </div>
                                            <div class=\"triangle\"></div>
                                        </div>
                                    </div>
                                
                                   
                                
                                
                                ";
                // line 80
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if ((0 == $this->getAttribute($_loop_, "index", array()) % 3)) {
                    // line 81
                    echo "                                    </div>
                                    <div class=\"row\">
                                ";
                }
                // line 83
                echo "      
                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ass'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                            </div>
                        ";
        } else {
            // line 87
            echo "                            <br /><br />
                            <center><b>Aucune association n'a été publiée pour le moment dans cette catégorie.</b></center><br /><br /> <hr />
                        ";
        }
        // line 90
        echo "                    </div>
                    ";
        // line 91
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "BOTTOM_PAGE", array(), "array")) {
            // line 92
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
                // line 93
                echo "                            ";
                if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
                if (($this->getAttribute($_carou_, "type", array()) == "caroussel")) {
                    // line 94
                    echo "                                ";
                    $this->loadTemplate("/modules/caroussel/layout/displayBottomPage.twig", "@association/categorieAssociations.twig", 94)->display($context);
                    // line 95
                    echo "                            ";
                }
                // line 96
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
            // line 97
            echo "                    ";
        }
        // line 98
        echo "                </div>
                
                <div class=\"col-xs-24 hidden-sm col-md-6 nopadding noPrint col-right-one\">
                    <!-- COL_RIGHT_ONE -->
                    
                    ";
        // line 103
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "COL_RIGHT_ONE", array(), "array")) {
            // line 104
            echo "                        ";
            if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_modules_, "COL_RIGHT_ONE", array(), "array"));
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
                // line 105
                echo "                            ";
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                if (($this->getAttribute($_m_, "type", array()) == "customcontent")) {
                    // line 106
                    echo "                                <div class=\"customcontentright\">
                                    ";
                    // line 107
                    if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                    echo $this->getAttribute($_m_, "contenuHTML", array());
                    echo "
                                </div>
                            ";
                } elseif (($this->getAttribute($_m_, "type", array()) == "blocdownload")) {
                    // line 110
                    echo "                                ";
                    $this->loadTemplate("/modules/blocdownload/layout/displayRightColumn.twig", "@association/categorieAssociations.twig", 110)->display($context);
                    // line 111
                    echo "                            ";
                }
                // line 112
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
            // line 113
            echo "                    ";
        }
        // line 114
        echo "                    <!-- COL_RIGHT_TWO-->
                    ";
        // line 115
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "COL_RIGHT_TWO", array(), "array")) {
            // line 116
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
                // line 117
                echo "                            ";
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                if (($this->getAttribute($_m_, "type", array()) == "blocdownload")) {
                    // line 118
                    echo "                                ";
                    $this->loadTemplate("/modules/blocdownload/layout/displayRightColumn.twig", "@association/categorieAssociations.twig", 118)->display($context);
                    // line 119
                    echo "                            ";
                } elseif (($this->getAttribute($_m_, "type", array()) == "customcontent")) {
                    // line 120
                    echo "                                ";
                    if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                    echo $this->getAttribute($_m_, "contenuHTML", array());
                    echo "
                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
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
        // line 129
        $this->loadTemplate("/blocks/services/layout/displayMiniInnerColRight.twig", "@association/categorieAssociations.twig", 129)->display($context);
        // line 130
        echo "            </div>
        </div>
    ";
        // line 132
        $this->loadTemplate("global/footer.twig", "@association/categorieAssociations.twig", 132)->display($context);
        echo "    
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "@association/categorieAssociations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 132,  533 => 130,  531 => 129,  524 => 124,  521 => 123,  507 => 122,  500 => 120,  497 => 119,  494 => 118,  490 => 117,  471 => 116,  468 => 115,  465 => 114,  462 => 113,  448 => 112,  445 => 111,  442 => 110,  435 => 107,  432 => 106,  428 => 105,  409 => 104,  406 => 103,  399 => 98,  396 => 97,  382 => 96,  379 => 95,  376 => 94,  372 => 93,  353 => 92,  350 => 91,  347 => 90,  342 => 87,  338 => 85,  323 => 83,  318 => 81,  315 => 80,  302 => 71,  297 => 70,  294 => 69,  286 => 65,  283 => 64,  275 => 62,  270 => 61,  263 => 56,  259 => 55,  255 => 54,  236 => 53,  233 => 52,  228 => 49,  219 => 47,  216 => 46,  209 => 41,  206 => 40,  203 => 39,  200 => 38,  191 => 33,  186 => 32,  183 => 31,  176 => 30,  169 => 28,  164 => 27,  159 => 26,  154 => 25,  149 => 24,  144 => 23,  139 => 22,  135 => 21,  130 => 20,  123 => 17,  118 => 16,  113 => 15,  105 => 13,  98 => 12,  91 => 11,  84 => 10,  77 => 9,  70 => 8,  63 => 7,  58 => 6,  55 => 5,  48 => 4,  41 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "base.twig" %}*/
/* {% block title %}{{dataPage.titrePage}}{% endblock %}*/
/* {% block description %}{{dataPage.descriptionPage}}{% endblock %}*/
/* {% block keywords %}{{dataPage.motsclefsPage}}{% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel='stylesheet prefetch' href="{{'/css/toolbar.css'|ondisk(BASETHEMEPATH,BASETHEME,themesRep)}}" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{'/css/home.css'|ondisk(BASETHEMEPATH,BASETHEME,themesRep)}}" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{'/css/categorieAssociations.css'|ondisk(BASETHEMEPATH,BASETHEME,themesRep)}}" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{'/css/innerMenus.css'|ondisk(BASETHEMEPATH,BASETHEME,themesRep)}}" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{'/blocks/services/css/services.css'|ondisk(BASETHEMEPATH,BASETHEME,themesRep)}}" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{'/modules/blocdownload/css/blocdownload.css'|ondisk(BASETHEMEPATH,BASETHEME,themesRep)}}" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{'/modules/caroussel/css/caroussel.css'|ondisk(BASETHEMEPATH,BASETHEME,themesRep)}}" rel="stylesheet" type="text/css"/>*/
/* */
/*     <link rel='stylesheet prefetch' href="{{BASEURL}}libs/fancybox/source/jquery.fancybox.css" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css"/>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}   */
/*     {{ parent() }}*/
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>   */
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>   */
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>   */
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-media.js"></script>   */
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>   */
/*     <script src="{{BASEJS}}initFancy.js" type="text/javascript"></script>*/
/*     <script src="{{BASEJS}}categorieAssociations.js" type="text/javascript"></script>*/
/* {% endblock %}*/
/* {% block bodyclass %}{{dataPage.CatNom|replace({' ':'-','/':'',"'":'-'})}}{% endblock %}    */
/* {% block body %}*/
/*     {% include 'global/header.twig' with {'breadcrumbsarticle':1}%}                              */
/*     <div class="bloc-maincontainer contentPage {{dataPage.CatNom}}">*/
/*         <div class="row">*/
/*             <!-- COL_LEFT-->*/
/*             <div class="hidden-xs col-sm-6 col-md-4 nopaddingleft noPrint">*/
/*                 <!-- COL_LEFT_ONE -->*/
/*                 {% if pagemenu|length>0 %}*/
/*                     {% include '/modules/menus/layout/displayLeftColumn.twig' %}*/
/*                 {% endif %}*/
/*             </div>*/
/*             <!-- COL_MIDDLE-->*/
/*             <div class="colmiddle col-xs-24 col-sm-18 col-md-18">*/
/*                 <div class="col-xs-24 col-sm-24 col-md-18 ">*/
/*                     <div class="logoCatAss">*/
/*                         {% if (catAsso.image is not null and catAsso.image!='') %}*/
/*                             <img class="img block-center" src="{{urlIcoCat}}{{catAsso.image}}">*/
/*                         {% endif %}*/
/*                         <p class="desc">Passez sur les logos pour avoir plus d'informations</p>*/
/*                     </div>*/
/*                     <div class="innerArticle">*/
/* 			{% if assos|length>0 %}*/
/*                             {% for ass in assos %}*/
/*                                 {% if loop.index == 1 %}*/
/*                                     <div class="row">*/
/*                                 {% endif %}    */
/*                                 */
/*                                                              */
/*                                     <div class="col-xs-24 col-sm-12 col-md-12 col-lg-8">*/
/*                                         <div class="blocAsso sameheight">*/
/*                                             {% if (ass.image and ass.image is not null) %}       */
/*                                                 <img src="{{urlIcoAsso}}{{ass.image}}" class="img img-responsive">*/
/*                                             {% else %}*/
/*                                                 <div class="card">*/
/*                                                     <p class="titre">{{ass.nom|raw}}</p>*/
/*                                                     <div class="desc">Buzançais</div>*/
/*                                                 </div>*/
/*                                             {% endif %}*/
/*                                             <div class="textpan sameheight">*/
/*                                                 <p class="titre">{{ass.nom|raw}}</p>*/
/*                                                 <div class="desc">{{ass.contenu|raw}}</div>*/
/*                                             </div>*/
/*                                             <div class="triangle"></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 */
/*                                    */
/*                                 */
/*                                 */
/*                                 {% if loop.index is divisible by(3) %}*/
/*                                     </div>*/
/*                                     <div class="row">*/
/*                                 {% endif %}      */
/*                             {% endfor %}*/
/*                             </div>*/
/*                         {% else %}*/
/*                             <br /><br />*/
/*                             <center><b>Aucune association n'a été publiée pour le moment dans cette catégorie.</b></center><br /><br /> <hr />*/
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
/*                 <div class="col-xs-24 hidden-sm col-md-6 nopadding noPrint col-right-one">*/
/*                     <!-- COL_RIGHT_ONE -->*/
/*                     */
/*                     {% if modules['COL_RIGHT_ONE'] %}*/
/*                         {% for m in modules['COL_RIGHT_ONE'] %}*/
/*                             {% if m.type=='customcontent' %}*/
/*                                 <div class="customcontentright">*/
/*                                     {{m.contenuHTML |raw }}*/
/*                                 </div>*/
/*                             {% elseif m.type=='blocdownload' %}*/
/*                                 {% include '/modules/blocdownload/layout/displayRightColumn.twig' %}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
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
/*                */
/*                 <!-- COL_RIGHT_ONE -->*/
/*                 {% include '/blocks/services/layout/displayMiniInnerColRight.twig' %}*/
/*             </div>*/
/*         </div>*/
/*     {% include 'global/footer.twig' %}    */
/*     </div>*/
/*     */
/* {% endblock %}*/
