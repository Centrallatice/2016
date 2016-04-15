<?php

/* @famille/contentPage.twig */
class __TwigTemplate_09e5b64b00e3b7239964cce498a0b985c0345b334a2ee65be2f5e7231f38feb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "@famille/contentPage.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'ogdata' => array($this, 'block_ogdata'),
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
        echo twig_escape_filter($this->env, twig_ondisk("/css/contentPage.css", $_BASETHEMEPATH_, $_BASETHEME_, $_themesRep_), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 8
        if (isset($context["BASETHEMEPATH"])) { $_BASETHEMEPATH_ = $context["BASETHEMEPATH"]; } else { $_BASETHEMEPATH_ = null; }
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
        echo twig_escape_filter($this->env, twig_ondisk("/css/toolbar.css", $_BASETHEMEPATH_, $_BASETHEME_, $_themesRep_), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 9
        if (isset($context["BASETHEMEPATH"])) { $_BASETHEMEPATH_ = $context["BASETHEMEPATH"]; } else { $_BASETHEMEPATH_ = null; }
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
        echo twig_escape_filter($this->env, twig_ondisk("/css/home.css", $_BASETHEMEPATH_, $_BASETHEME_, $_themesRep_), "html", null, true);
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
    public function block_ogdata($context, array $blocks = array())
    {
        // line 21
        echo "   ";
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if ((twig_length_filter($this->env, $_articles_) > 0)) {
            // line 22
            echo "        ";
            list($context["imagepageset"], $context["detailarticleset"]) =             array(0, 0);
            // line 23
            echo "        ";
            if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_articles_);
            foreach ($context['_seq'] as $context["_key"] => $context["arti"]) {
                // line 24
                echo "            ";
                if (isset($context["imagepageset"])) { $_imagepageset_ = $context["imagepageset"]; } else { $_imagepageset_ = null; }
                if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                if ((($_imagepageset_ == 0) && $this->getAttribute($_arti_, "image", array()))) {
                    // line 25
                    echo "                <meta property=\"og:image\" content=\"";
                    if (isset($context["BASE_PATH_UPLOAD_URL"])) { $_BASE_PATH_UPLOAD_URL_ = $context["BASE_PATH_UPLOAD_URL"]; } else { $_BASE_PATH_UPLOAD_URL_ = null; }
                    echo twig_escape_filter($this->env, $_BASE_PATH_UPLOAD_URL_, "html", null, true);
                    echo "/article/";
                    if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "image", array()), "html", null, true);
                    echo "\">
                <link href=\"";
                    // line 26
                    if (isset($context["BASE_PATH_UPLOAD_URL"])) { $_BASE_PATH_UPLOAD_URL_ = $context["BASE_PATH_UPLOAD_URL"]; } else { $_BASE_PATH_UPLOAD_URL_ = null; }
                    echo twig_escape_filter($this->env, $_BASE_PATH_UPLOAD_URL_, "html", null, true);
                    echo "/article/300x300/";
                    if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "image", array()), "html", null, true);
                    echo "\" rel=\"image_src\"  />
                ";
                    // line 27
                    $context["imagepageset"] = 1;
                    // line 28
                    echo "            ";
                }
                // line 29
                echo "            ";
                if (isset($context["detailarticleset"])) { $_detailarticleset_ = $context["detailarticleset"]; } else { $_detailarticleset_ = null; }
                if (($_detailarticleset_ == 0)) {
                    // line 30
                    echo "                <meta property=\"og:title\" content=\"";
                    if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "titre", array()), "html", null, true);
                    echo "\">
                <meta property=\"og:type\" content=\"Article\">
                <meta property=\"og:description\" content=\"";
                    // line 32
                    if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "description", array()), "html", null, true);
                    echo "\">
                <meta property=\"og:site_name\" content=\"Mairie de Buzancais\">
                ";
                    // line 34
                    $context["detailarticleset"] = 1;
                    // line 35
                    echo "            ";
                }
                // line 36
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arti'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
        }
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        echo "   
    ";
        // line 40
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 41
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/lib/jquery.mousewheel-3.0.6.pack.js\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 42
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/jquery.fancybox.pack.js?v=2.1.5\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 43
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-buttons.js\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 44
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-media.js\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 45
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-thumbs.js\"></script>   
    <script src=\"";
        // line 46
        if (isset($context["BASEJS"])) { $_BASEJS_ = $context["BASEJS"]; } else { $_BASEJS_ = null; }
        echo twig_escape_filter($this->env, $_BASEJS_, "html", null, true);
        echo "initFancy.js\" type=\"text/javascript\"></script>
";
    }

    // line 48
    public function block_bodyclass($context, array $blocks = array())
    {
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($_dataPage_, "CatNom", array()), array(" " => "-", "/" => "", "'" => "-", "(" => "", ")" => "")), "html", null, true);
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        $this->loadTemplate("global/header.twig", "@famille/contentPage.twig", 50)->display(array_merge($context, array("breadcrumbsarticle" => 1)));
        // line 51
        echo "    
    
                                
    <div class=\"bloc-maincontainer contentPage ";
        // line 54
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "CatNom", array()), "html", null, true);
        echo "\">
        <div class=\"row\">
            <!-- COL_LEFT-->
            <div class=\"hidden-xs col-sm-6 col-md-4 nopaddingleft noPrint\">
                <!-- COL_LEFT_ONE -->
                ";
        // line 59
        if (isset($context["pagemenu"])) { $_pagemenu_ = $context["pagemenu"]; } else { $_pagemenu_ = null; }
        if ((twig_length_filter($this->env, $_pagemenu_) > 0)) {
            // line 60
            echo "                    ";
            if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
            $this->loadTemplate((("@" . $_themesRep_) . "/modules/menus/layout/displayLeftColumn.twig"), "@famille/contentPage.twig", 60)->display($context);
            // line 61
            echo "                ";
        }
        // line 62
        echo "            </div>
            <!-- COL_MIDDLE-->
            <div class=\"colmiddle col-xs-24 col-sm-18 col-md-18\">
                <div class=\"col-xs-24 col-sm-24 col-md-18 nopadding\">
                    <div class=\"innerArticle\">
                            <div class=\"media\">
                                <div class=\"media-left media-left-categorie\">
                                    <img class=\"media-object\" src=\"";
        // line 69
        if (isset($context["BASE_PATH_UPLOAD_URL"])) { $_BASE_PATH_UPLOAD_URL_ = $context["BASE_PATH_UPLOAD_URL"]; } else { $_BASE_PATH_UPLOAD_URL_ = null; }
        echo twig_escape_filter($this->env, $_BASE_PATH_UPLOAD_URL_, "html", null, true);
        echo "/actuIcone/";
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "IconeCategorie", array()), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"media-body\">
                                    <h2 class=\"media-heading ";
        // line 72
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "CatNom", array()), "html", null, true);
        echo "\" style=\"color:";
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
        echo "\">
                                        ";
        // line 73
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "CatNom", array()), "html", null, true);
        echo "
                                        <div class=\"iconemusique\"></div>
                                    </h2>
                                    <div class=\"linebottomcat\" style=\"background-color:";
        // line 76
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
        echo "\"></div>
                                </div>
                            </div>
                        
                        ";
        // line 80
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if ((twig_length_filter($this->env, $_articles_) > 0)) {
            // line 81
            echo "                            ";
            $context["CompteurCol"] = 0;
            // line 82
            echo "                            ";
            if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_articles_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["arti"]) {
                // line 83
                echo "                                ";
                if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                if (($this->getAttribute($_arti_, "disposition", array()) != "")) {
                    echo " 
                                    ";
                    // line 84
                    if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
                    if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                    $context["template"] = (((("@" . $_themesRep_) . "/articlesLayout/") . $this->getAttribute($_arti_, "disposition", array())) . ".twig");
                    // line 85
                    echo "                                    ";
                    if (isset($context["CompteurCol"])) { $_CompteurCol_ = $context["CompteurCol"]; } else { $_CompteurCol_ = null; }
                    $context["CompteurCol"] = ($_CompteurCol_ + 1);
                    // line 86
                    echo "                                ";
                } else {
                    // line 87
                    echo "                                    ";
                    if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
                    $context["template"] = (("@" . $_themesRep_) . "/articlesLayout/default.twig");
                    // line 88
                    echo "                                ";
                }
                // line 89
                echo "                                ";
                if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
                if (isset($context["CompteurCol"])) { $_CompteurCol_ = $context["CompteurCol"]; } else { $_CompteurCol_ = null; }
                if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
                $this->loadTemplate($_template_, "@famille/contentPage.twig", 89)->display(array_merge($context, array("CompteurCol" => $_CompteurCol_, "artiTotal" => twig_length_filter($this->env, $_articles_))));
                // line 90
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arti'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                        ";
        } else {
            // line 92
            echo "                            <br /><br />
                            <center><b>Aucun article n'a été publié pour le moment dans cette catégorie.</b></center><br /><br /> <hr />
                            ";
            // line 94
            if (isset($context["articlesenfants"])) { $_articlesenfants_ = $context["articlesenfants"]; } else { $_articlesenfants_ = null; }
            if ((twig_length_filter($this->env, $_articlesenfants_) > 0)) {
                // line 95
                echo "                                <b>Retrouvez ci-dessous les articles des catégories similaires</b><br />
                                ";
                // line 96
                if (isset($context["articlesenfants"])) { $_articlesenfants_ = $context["articlesenfants"]; } else { $_articlesenfants_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($_articlesenfants_);
                foreach ($context['_seq'] as $context["_key"] => $context["artie"]) {
                    // line 97
                    echo "                                    <h3 class=\"media-heading\">
                                        ";
                    // line 98
                    if (isset($context["artie"])) { $_artie_ = $context["artie"]; } else { $_artie_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_artie_, "titre", array()), "html", null, true);
                    echo "
                                    </h3>
                                    <div class='contenu-article'>
                                        ";
                    // line 101
                    if (isset($context["artie"])) { $_artie_ = $context["artie"]; } else { $_artie_ = null; }
                    echo $this->getAttribute($_artie_, "resume", array());
                    echo " ...
                                    </div>
                                    <div class='more-article'>
                                        <a href=\"";
                    // line 104
                    if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                    echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                    if (isset($context["artie"])) { $_artie_ = $context["artie"]; } else { $_artie_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_artie_, "url", array()), "html", null, true);
                    echo ".html\">Lire la suite ...</a>
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "
                            ";
            }
            // line 109
            echo "                        ";
        }
        // line 110
        echo "                    </div>
                    
                    
                    ";
        // line 113
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "BOTTOM_PAGE", array(), "array")) {
            // line 114
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
                // line 115
                echo "                            ";
                if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
                if (($this->getAttribute($_carou_, "type", array()) == "caroussel")) {
                    // line 116
                    echo "                                ";
                    if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
                    $this->loadTemplate((("@" . $_themesRep_) . "/modules/caroussel/layout/displayBottomPage.twig"), "@famille/contentPage.twig", 116)->display($context);
                    // line 117
                    echo "                            ";
                }
                // line 118
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
            // line 119
            echo "                    ";
        }
        // line 120
        echo "                </div>
                
                <div class=\"col-xs-24 hidden-sm col-md-6 nopadding noPrint col-right-one\">
                    <!-- COL_RIGHT_ONE -->
                    ";
        // line 124
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "COL_RIGHT_ONE", array(), "array")) {
            // line 125
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
                // line 126
                echo "                            ";
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                if (($this->getAttribute($_m_, "type", array()) == "customcontent")) {
                    // line 127
                    echo "                                <div class=\"customcontentright\">
                                    ";
                    // line 128
                    if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                    echo $this->getAttribute($_m_, "contenuHTML", array());
                    echo "
                                </div>
                            ";
                } elseif (($this->getAttribute($_m_, "type", array()) == "blocdownload")) {
                    // line 131
                    echo "                                ";
                    if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
                    $this->loadTemplate((("@" . $_themesRep_) . "/modules/blocdownload/layout/displayRightColumn.twig"), "@famille/contentPage.twig", 131)->display($context);
                    // line 132
                    echo "                            ";
                }
                // line 133
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
            // line 134
            echo "                    ";
        }
        // line 135
        echo "                    <!-- COL_RIGHT_TWO-->
                    ";
        // line 136
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "COL_RIGHT_TWO", array(), "array")) {
            // line 137
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
                // line 138
                echo "                            ";
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                if (($this->getAttribute($_m_, "type", array()) == "blocdownload")) {
                    // line 139
                    echo "                                ";
                    if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
                    $this->loadTemplate((("@" . $_themesRep_) . "/modules/blocdownload/layout/displayRightColumn.twig"), "@famille/contentPage.twig", 139)->display($context);
                    // line 140
                    echo "                            ";
                } elseif (($this->getAttribute($_m_, "type", array()) == "customcontent")) {
                    // line 141
                    echo "                                ";
                    if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                    echo $this->getAttribute($_m_, "contenuHTML", array());
                    echo "
                            ";
                }
                // line 143
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
            // line 144
            echo "                    ";
        }
        // line 145
        echo "                </div>
            </div>
            <div class=\"hidden-xs hidden-sm col-md-2 nopadding noPrint\">
               
                <!-- COL_RIGHT_ONE -->
                ";
        // line 150
        if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
        $this->loadTemplate((("@" . $_themesRep_) . "/blocks/services/layout/displayMiniInnerColRight.twig"), "@famille/contentPage.twig", 150)->display($context);
        // line 151
        echo "            </div>
        </div>
    ";
        // line 153
        $this->loadTemplate("global/footer.twig", "@famille/contentPage.twig", 153)->display($context);
        echo "    
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "@famille/contentPage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  646 => 153,  642 => 151,  639 => 150,  632 => 145,  629 => 144,  615 => 143,  608 => 141,  605 => 140,  601 => 139,  597 => 138,  578 => 137,  575 => 136,  572 => 135,  569 => 134,  555 => 133,  552 => 132,  548 => 131,  541 => 128,  538 => 127,  534 => 126,  515 => 125,  512 => 124,  506 => 120,  503 => 119,  489 => 118,  486 => 117,  482 => 116,  478 => 115,  459 => 114,  456 => 113,  451 => 110,  448 => 109,  444 => 107,  432 => 104,  425 => 101,  418 => 98,  415 => 97,  410 => 96,  407 => 95,  404 => 94,  400 => 92,  397 => 91,  383 => 90,  377 => 89,  374 => 88,  370 => 87,  367 => 86,  363 => 85,  359 => 84,  353 => 83,  334 => 82,  331 => 81,  328 => 80,  320 => 76,  313 => 73,  305 => 72,  295 => 69,  286 => 62,  283 => 61,  279 => 60,  276 => 59,  267 => 54,  262 => 51,  259 => 50,  256 => 49,  249 => 48,  242 => 46,  237 => 45,  232 => 44,  227 => 43,  222 => 42,  217 => 41,  213 => 40,  208 => 39,  203 => 37,  197 => 36,  194 => 35,  192 => 34,  186 => 32,  179 => 30,  175 => 29,  172 => 28,  170 => 27,  162 => 26,  153 => 25,  148 => 24,  142 => 23,  139 => 22,  135 => 21,  132 => 20,  124 => 17,  119 => 16,  114 => 15,  106 => 13,  99 => 12,  92 => 11,  85 => 10,  78 => 9,  71 => 8,  64 => 7,  59 => 6,  56 => 5,  49 => 4,  42 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "base.twig" %}*/
/* {% block title %}{{dataPage.titrePage}}{% endblock %}*/
/* {% block description %}{{dataPage.descriptionPage}}{% endblock %}*/
/* {% block keywords %}{{dataPage.motsclefsPage}}{% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel='stylesheet prefetch' href="{{'/css/contentPage.css'|ondisk(BASETHEMEPATH,BASETHEME,themesRep)}}" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{'/css/toolbar.css'|ondisk(BASETHEMEPATH,BASETHEME,themesRep)}}" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{'/css/home.css'|ondisk(BASETHEMEPATH,BASETHEME,themesRep)}}" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{'/css/innerMenus.css'|ondisk(BASETHEMEPATH,BASETHEME,themesRep)}}" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{'/blocks/services/css/services.css'|ondisk(BASETHEMEPATH,BASETHEME,themesRep)}}" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{'/modules/blocdownload/css/blocdownload.css'|ondisk(BASETHEMEPATH,BASETHEME,themesRep)}}" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{'/modules/caroussel/css/caroussel.css'|ondisk(BASETHEMEPATH,BASETHEME,themesRep)}}" rel="stylesheet" type="text/css"/>*/
/*     */
/*     <link rel='stylesheet prefetch' href="{{BASEURL}}libs/fancybox/source/jquery.fancybox.css" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css"/>*/
/*         */
/* {% endblock %}*/
/* {% block ogdata %}*/
/*    {% if articles|length>0 %}*/
/*         {% set imagepageset,detailarticleset=0,0 %}*/
/*         {% for arti in articles %}*/
/*             {% if (imagepageset == 0 and arti.image) %}*/
/*                 <meta property="og:image" content="{{BASE_PATH_UPLOAD_URL}}/article/{{arti.image}}">*/
/*                 <link href="{{BASE_PATH_UPLOAD_URL}}/article/300x300/{{arti.image}}" rel="image_src"  />*/
/*                 {% set imagepageset=1 %}*/
/*             {% endif %}*/
/*             {% if (detailarticleset==0) %}*/
/*                 <meta property="og:title" content="{{arti.titre}}">*/
/*                 <meta property="og:type" content="Article">*/
/*                 <meta property="og:description" content="{{arti.description}}">*/
/*                 <meta property="og:site_name" content="Mairie de Buzancais">*/
/*                 {% set detailarticleset=1 %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* {% block javascripts %}   */
/*     {{ parent() }}*/
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>   */
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>   */
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>   */
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-media.js"></script>   */
/*     <script type="text/javascript" src="{{BASEURL}}libs/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>   */
/*     <script src="{{BASEJS}}initFancy.js" type="text/javascript"></script>*/
/* {% endblock %}*/
/* {% block bodyclass %}{{dataPage.CatNom|replace({' ':'-','/':'',"'":'-',"(":'',")":''})}}{% endblock %}    */
/* {% block body %}*/
/*     {% include 'global/header.twig' with {'breadcrumbsarticle':1}%}*/
/*     */
/*     */
/*                                 */
/*     <div class="bloc-maincontainer contentPage {{dataPage.CatNom}}">*/
/*         <div class="row">*/
/*             <!-- COL_LEFT-->*/
/*             <div class="hidden-xs col-sm-6 col-md-4 nopaddingleft noPrint">*/
/*                 <!-- COL_LEFT_ONE -->*/
/*                 {% if pagemenu|length>0 %}*/
/*                     {% include '@'~themesRep~'/modules/menus/layout/displayLeftColumn.twig' %}*/
/*                 {% endif %}*/
/*             </div>*/
/*             <!-- COL_MIDDLE-->*/
/*             <div class="colmiddle col-xs-24 col-sm-18 col-md-18">*/
/*                 <div class="col-xs-24 col-sm-24 col-md-18 nopadding">*/
/*                     <div class="innerArticle">*/
/*                             <div class="media">*/
/*                                 <div class="media-left media-left-categorie">*/
/*                                     <img class="media-object" src="{{BASE_PATH_UPLOAD_URL}}/actuIcone/{{dataPage.IconeCategorie}}">*/
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <h2 class="media-heading {{dataPage.CatNom}}" style="color:{{dataPage.ColorCategorie}}">*/
/*                                         {{dataPage.CatNom}}*/
/*                                         <div class="iconemusique"></div>*/
/*                                     </h2>*/
/*                                     <div class="linebottomcat" style="background-color:{{dataPage.ColorCategorie}}"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         */
/*                         {% if articles|length>0 %}*/
/*                             {% set CompteurCol=0 %}*/
/*                             {% for arti in articles %}*/
/*                                 {% if arti.disposition!='' %} */
/*                                     {% set template = '@'~themesRep~'/articlesLayout/'~arti.disposition~'.twig' %}*/
/*                                     {% set CompteurCol=CompteurCol+1 %}*/
/*                                 {% else %}*/
/*                                     {% set template = '@'~themesRep~'/articlesLayout/default.twig' %}*/
/*                                 {% endif %}*/
/*                                 {% include template  with {'CompteurCol':CompteurCol,'artiTotal':articles|length}%}*/
/*                             {% endfor %}*/
/*                         {% else %}*/
/*                             <br /><br />*/
/*                             <center><b>Aucun article n'a été publié pour le moment dans cette catégorie.</b></center><br /><br /> <hr />*/
/*                             {% if articlesenfants|length>0 %}*/
/*                                 <b>Retrouvez ci-dessous les articles des catégories similaires</b><br />*/
/*                                 {% for artie in articlesenfants %}*/
/*                                     <h3 class="media-heading">*/
/*                                         {{artie.titre}}*/
/*                                     </h3>*/
/*                                     <div class='contenu-article'>*/
/*                                         {{artie.resume | raw}} ...*/
/*                                     </div>*/
/*                                     <div class='more-article'>*/
/*                                         <a href="{{BASEURL}}{{artie.url}}.html">Lire la suite ...</a>*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/* */
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     */
/*                     */
/*                     {% if modules['BOTTOM_PAGE'] %}*/
/*                         {% for carou in modules['BOTTOM_PAGE'] %}*/
/*                             {% if carou.type=='caroussel' %}*/
/*                                 {% include '@'~themesRep~'/modules/caroussel/layout/displayBottomPage.twig' %}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 */
/*                 <div class="col-xs-24 hidden-sm col-md-6 nopadding noPrint col-right-one">*/
/*                     <!-- COL_RIGHT_ONE -->*/
/*                     {% if modules['COL_RIGHT_ONE'] %}*/
/*                         {% for m in modules['COL_RIGHT_ONE'] %}*/
/*                             {% if m.type=='customcontent' %}*/
/*                                 <div class="customcontentright">*/
/*                                     {{m.contenuHTML |raw }}*/
/*                                 </div>*/
/*                             {% elseif m.type=='blocdownload' %}*/
/*                                 {% include '@'~themesRep~'/modules/blocdownload/layout/displayRightColumn.twig' %}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                     <!-- COL_RIGHT_TWO-->*/
/*                     {% if modules['COL_RIGHT_TWO'] %}*/
/*                         {% for m in modules['COL_RIGHT_TWO'] %}*/
/*                             {% if m.type=='blocdownload' %}*/
/*                                 {% include '@'~themesRep~'/modules/blocdownload/layout/displayRightColumn.twig' %}*/
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
/*                 {% include '@'~themesRep~'/blocks/services/layout/displayMiniInnerColRight.twig' %}*/
/*             </div>*/
/*         </div>*/
/*     {% include 'global/footer.twig' %}    */
/*     </div>*/
/*     */
/* {% endblock %}*/
