<?php

/* @actions-social/contentPage.twig */
class __TwigTemplate_7680316d1f9e937e491979b3c4299851259de933853abe882a1d04034485ee7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "@actions-social/contentPage.twig", 1);
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
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 8
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/home.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 9
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/contentPage.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 10
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/innerMenus.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 11
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/services/css/services.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 12
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/modules/blocdownload/css/blocdownload.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 13
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/modules/caroussel/css/caroussel.css\" rel=\"stylesheet\" type=\"text/css\"/>
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
    public function block_ogdata($context, array $blocks = array())
    {
        // line 20
        echo "   ";
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if ((twig_length_filter($this->env, $_articles_) > 0)) {
            // line 21
            echo "        ";
            list($context["imagepageset"], $context["detailarticleset"]) =             array(0, 0);
            // line 22
            echo "        ";
            if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_articles_);
            foreach ($context['_seq'] as $context["_key"] => $context["arti"]) {
                // line 23
                echo "            ";
                if (isset($context["imagepageset"])) { $_imagepageset_ = $context["imagepageset"]; } else { $_imagepageset_ = null; }
                if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                if ((($_imagepageset_ == 0) && $this->getAttribute($_arti_, "image", array()))) {
                    // line 24
                    echo "                <meta property=\"og:image\" content=\"";
                    if (isset($context["BASE_PATH_UPLOAD_URL"])) { $_BASE_PATH_UPLOAD_URL_ = $context["BASE_PATH_UPLOAD_URL"]; } else { $_BASE_PATH_UPLOAD_URL_ = null; }
                    echo twig_escape_filter($this->env, $_BASE_PATH_UPLOAD_URL_, "html", null, true);
                    echo "/article/";
                    if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "image", array()), "html", null, true);
                    echo "\">
                <link href=\"";
                    // line 25
                    if (isset($context["BASE_PATH_UPLOAD_URL"])) { $_BASE_PATH_UPLOAD_URL_ = $context["BASE_PATH_UPLOAD_URL"]; } else { $_BASE_PATH_UPLOAD_URL_ = null; }
                    echo twig_escape_filter($this->env, $_BASE_PATH_UPLOAD_URL_, "html", null, true);
                    echo "/article/300x300/";
                    if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "image", array()), "html", null, true);
                    echo "\" rel=\"image_src\"  />
                ";
                    // line 26
                    $context["imagepageset"] = 1;
                    // line 27
                    echo "            ";
                }
                // line 28
                echo "            ";
                if (isset($context["detailarticleset"])) { $_detailarticleset_ = $context["detailarticleset"]; } else { $_detailarticleset_ = null; }
                if (($_detailarticleset_ == 0)) {
                    // line 29
                    echo "                <meta property=\"og:title\" content=\"";
                    if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "titre", array()), "html", null, true);
                    echo "\">
                <meta property=\"og:type\" content=\"Article\">
                <meta property=\"og:description\" content=\"";
                    // line 31
                    if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "description", array()), "html", null, true);
                    echo "\">
                <meta property=\"og:site_name\" content=\"Mairie de Buzancais\">
                ";
                    // line 33
                    $context["detailarticleset"] = 1;
                    // line 34
                    echo "            ";
                }
                // line 35
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arti'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    ";
        }
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        echo "   
    ";
        // line 39
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 40
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/lib/jquery.mousewheel-3.0.6.pack.js\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 41
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/jquery.fancybox.pack.js?v=2.1.5\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 42
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-buttons.js\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 43
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-media.js\"></script>   
    <script type=\"text/javascript\" src=\"";
        // line 44
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/fancybox/source/helpers/jquery.fancybox-thumbs.js\"></script>   
    <script src=\"";
        // line 45
        if (isset($context["BASEJS"])) { $_BASEJS_ = $context["BASEJS"]; } else { $_BASEJS_ = null; }
        echo twig_escape_filter($this->env, $_BASEJS_, "html", null, true);
        echo "initFancy.js\" type=\"text/javascript\"></script>
";
    }

    // line 47
    public function block_bodyclass($context, array $blocks = array())
    {
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($_dataPage_, "CatNom", array()), array(" " => "-", "/" => "", "'" => "-")), "html", null, true);
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $this->loadTemplate("global/header.twig", "@actions-social/contentPage.twig", 49)->display(array_merge($context, array("breadcrumbsarticle" => 1)));
        // line 50
        echo "    
                                
    <div class=\"bloc-maincontainer contentPage ";
        // line 52
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "CatNom", array()), "html", null, true);
        echo "\">
        <div class=\"row\">
            <!-- COL_LEFT-->
            <div class=\"hidden-xs col-sm-6 col-md-4 nopaddingleft noPrint\">
                <!-- COL_LEFT_ONE -->
                ";
        // line 57
        if (isset($context["pagemenu"])) { $_pagemenu_ = $context["pagemenu"]; } else { $_pagemenu_ = null; }
        if ((twig_length_filter($this->env, $_pagemenu_) > 0)) {
            // line 58
            echo "                    ";
            $this->loadTemplate("/modules/menus/layout/displayLeftColumn.twig", "@actions-social/contentPage.twig", 58)->display($context);
            // line 59
            echo "                ";
        }
        // line 60
        echo "            </div>
            <!-- COL_MIDDLE-->
            <div class=\"colmiddle col-xs-24 col-sm-18 col-md-18\">
                <div class=\"col-xs-24 col-sm-24 col-md-18 nopadding\">
                    <div class=\"innerArticle\">
                            <div class=\"media\">
                                <div class=\"media-left media-left-categorie\">
                                    <img class=\"media-object\" src=\"";
        // line 67
        if (isset($context["BASE_PATH_UPLOAD_URL"])) { $_BASE_PATH_UPLOAD_URL_ = $context["BASE_PATH_UPLOAD_URL"]; } else { $_BASE_PATH_UPLOAD_URL_ = null; }
        echo twig_escape_filter($this->env, $_BASE_PATH_UPLOAD_URL_, "html", null, true);
        echo "/actuIcone/";
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "IconeCategorie", array()), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"media-body\">
                                    <h2 class=\"media-heading ";
        // line 70
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "CatNom", array()), "html", null, true);
        echo "\" style=\"color:";
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
        echo "\">
                                        ";
        // line 71
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "CatNom", array()), "html", null, true);
        echo "
                                    </h2>
                                    <div class=\"linebottomcat\" style=\"background-color:";
        // line 73
        if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
        echo "\"></div>
                                </div>
                            </div>
                        
                        ";
        // line 77
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if ((twig_length_filter($this->env, $_articles_) > 0)) {
            // line 78
            echo "                            
                            ";
            // line 79
            $context["CompteurCol"] = 0;
            // line 80
            echo "                            
                            ";
            // line 81
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
                // line 82
                echo "                                ";
                if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                if (($this->getAttribute($_arti_, "disposition", array()) != "")) {
                    echo " 
                                    ";
                    // line 83
                    if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                    $context["template"] = (("/articlesLayout/" . $this->getAttribute($_arti_, "disposition", array())) . ".twig");
                    // line 84
                    echo "                                    ";
                    if (isset($context["CompteurCol"])) { $_CompteurCol_ = $context["CompteurCol"]; } else { $_CompteurCol_ = null; }
                    $context["CompteurCol"] = ($_CompteurCol_ + 1);
                    // line 85
                    echo "                                ";
                } else {
                    // line 86
                    echo "                                    ";
                    $context["template"] = "/articlesLayout/default.twig";
                    // line 87
                    echo "                                ";
                }
                // line 88
                echo "                                ";
                if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
                if (isset($context["CompteurCol"])) { $_CompteurCol_ = $context["CompteurCol"]; } else { $_CompteurCol_ = null; }
                if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
                $this->loadTemplate($_template_, "@actions-social/contentPage.twig", 88)->display(array_merge($context, array("CompteurCol" => $_CompteurCol_, "artiTotal" => twig_length_filter($this->env, $_articles_))));
                // line 89
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
            // line 90
            echo "                        ";
        } else {
            // line 91
            echo "                            <br /><br />
                            <center><b>Aucun article n'a été publié pour le moment dans cette catégorie.</b></center><br /><br /> <hr />
                            ";
            // line 93
            if (isset($context["articlesenfants"])) { $_articlesenfants_ = $context["articlesenfants"]; } else { $_articlesenfants_ = null; }
            if ((twig_length_filter($this->env, $_articlesenfants_) > 0)) {
                // line 94
                echo "                                <b>Retrouvez ci-dessous les articles des catégories similaires</b><br />
                                ";
                // line 95
                if (isset($context["articlesenfants"])) { $_articlesenfants_ = $context["articlesenfants"]; } else { $_articlesenfants_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($_articlesenfants_);
                foreach ($context['_seq'] as $context["_key"] => $context["artie"]) {
                    // line 96
                    echo "                                    <h3 class=\"media-heading\">
                                        ";
                    // line 97
                    if (isset($context["artie"])) { $_artie_ = $context["artie"]; } else { $_artie_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_artie_, "titre", array()), "html", null, true);
                    echo "
                                    </h3>
                                    <div class='contenu-article'>
                                        ";
                    // line 100
                    if (isset($context["artie"])) { $_artie_ = $context["artie"]; } else { $_artie_ = null; }
                    echo $this->getAttribute($_artie_, "resume", array());
                    echo " ...
                                    </div>
                                    <div class='more-article'>
                                        <a href=\"";
                    // line 103
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
                // line 106
                echo "
                            ";
            }
            // line 108
            echo "                        ";
        }
        // line 109
        echo "                    </div>
                    ";
        // line 110
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "BOTTOM_PAGE", array(), "array")) {
            // line 111
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
                // line 112
                echo "                            ";
                if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
                if (($this->getAttribute($_carou_, "type", array()) == "caroussel")) {
                    // line 113
                    echo "                                ";
                    $this->loadTemplate("/modules/caroussel/layout/displayBottomPage.twig", "@actions-social/contentPage.twig", 113)->display($context);
                    // line 114
                    echo "                            ";
                }
                // line 115
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
            // line 116
            echo "                    ";
        }
        // line 117
        echo "                </div>
                
                <div class=\"col-xs-24 hidden-sm col-md-6 nopadding noPrint col-right-one\">
                    <!-- COL_RIGHT_ONE -->
                    
                    ";
        // line 122
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "COL_RIGHT_ONE", array(), "array")) {
            // line 123
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
                // line 124
                echo "                            ";
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                if (($this->getAttribute($_m_, "type", array()) == "customcontent")) {
                    // line 125
                    echo "                                <div class=\"customcontentright\">
                                    ";
                    // line 126
                    if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                    echo $this->getAttribute($_m_, "contenuHTML", array());
                    echo "
                                </div>
                            ";
                } elseif (($this->getAttribute($_m_, "type", array()) == "blocdownload")) {
                    // line 129
                    echo "                                ";
                    $this->loadTemplate("/modules/blocdownload/layout/displayRightColumn.twig", "@actions-social/contentPage.twig", 129)->display($context);
                    // line 130
                    echo "                            ";
                }
                // line 131
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
            // line 132
            echo "                    ";
        }
        // line 133
        echo "                    <!-- COL_RIGHT_TWO-->
                    ";
        // line 134
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "COL_RIGHT_TWO", array(), "array")) {
            // line 135
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
                // line 136
                echo "                            ";
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                if (($this->getAttribute($_m_, "type", array()) == "blocdownload")) {
                    // line 137
                    echo "                                ";
                    $this->loadTemplate("/modules/blocdownload/layout/displayRightColumn.twig", "@actions-social/contentPage.twig", 137)->display($context);
                    // line 138
                    echo "                            ";
                } elseif (($this->getAttribute($_m_, "type", array()) == "customcontent")) {
                    // line 139
                    echo "                                ";
                    if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                    echo $this->getAttribute($_m_, "contenuHTML", array());
                    echo "
                            ";
                }
                // line 141
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
            // line 142
            echo "                    ";
        }
        // line 143
        echo "                </div>
            </div>
            <div class=\"hidden-xs hidden-sm col-md-2 nopadding noPrint\">
               
                <!-- COL_RIGHT_ONE -->
                ";
        // line 148
        $this->loadTemplate("/blocks/services/layout/displayMiniInnerColRight.twig", "@actions-social/contentPage.twig", 148)->display($context);
        // line 149
        echo "            </div>
        </div>
    ";
        // line 151
        $this->loadTemplate("global/footer.twig", "@actions-social/contentPage.twig", 151)->display($context);
        echo "    
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "@actions-social/contentPage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 151,  621 => 149,  619 => 148,  612 => 143,  609 => 142,  595 => 141,  588 => 139,  585 => 138,  582 => 137,  578 => 136,  559 => 135,  556 => 134,  553 => 133,  550 => 132,  536 => 131,  533 => 130,  530 => 129,  523 => 126,  520 => 125,  516 => 124,  497 => 123,  494 => 122,  487 => 117,  484 => 116,  470 => 115,  467 => 114,  464 => 113,  460 => 112,  441 => 111,  438 => 110,  435 => 109,  432 => 108,  428 => 106,  416 => 103,  409 => 100,  402 => 97,  399 => 96,  394 => 95,  391 => 94,  388 => 93,  384 => 91,  381 => 90,  367 => 89,  361 => 88,  358 => 87,  355 => 86,  352 => 85,  348 => 84,  345 => 83,  339 => 82,  321 => 81,  318 => 80,  316 => 79,  313 => 78,  310 => 77,  302 => 73,  296 => 71,  288 => 70,  278 => 67,  269 => 60,  266 => 59,  263 => 58,  260 => 57,  251 => 52,  247 => 50,  244 => 49,  241 => 48,  234 => 47,  227 => 45,  222 => 44,  217 => 43,  212 => 42,  207 => 41,  202 => 40,  198 => 39,  193 => 38,  188 => 36,  182 => 35,  179 => 34,  177 => 33,  171 => 31,  164 => 29,  160 => 28,  157 => 27,  155 => 26,  147 => 25,  138 => 24,  133 => 23,  127 => 22,  124 => 21,  120 => 20,  117 => 19,  109 => 16,  104 => 15,  99 => 14,  94 => 13,  89 => 12,  84 => 11,  79 => 10,  74 => 9,  69 => 8,  64 => 7,  59 => 6,  56 => 5,  49 => 4,  42 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "base.twig" %}*/
/* {% block title %}{{dataPage.titrePage}}{% endblock %}*/
/* {% block description %}{{dataPage.descriptionPage}}{% endblock %}*/
/* {% block keywords %}{{dataPage.motsclefsPage}}{% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel='stylesheet prefetch' href="{{BASETHEME}}/css/toolbar.css" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASETHEME}}/css/home.css" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASETHEME}}/css/contentPage.css" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASETHEME}}/css/innerMenus.css" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASETHEME}}/blocks/services/css/services.css" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASETHEME}}/modules/blocdownload/css/blocdownload.css" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASETHEME}}/modules/caroussel/css/caroussel.css" rel="stylesheet" type="text/css"/>*/
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
/* {% block bodyclass %}{{dataPage.CatNom|replace({' ':'-','/':'',"'":'-'})}}{% endblock %}    */
/* {% block body %}*/
/*     {% include 'global/header.twig' with {'breadcrumbsarticle':1}%}*/
/*     */
/*                                 */
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
/*                 <div class="col-xs-24 col-sm-24 col-md-18 nopadding">*/
/*                     <div class="innerArticle">*/
/*                             <div class="media">*/
/*                                 <div class="media-left media-left-categorie">*/
/*                                     <img class="media-object" src="{{BASE_PATH_UPLOAD_URL}}/actuIcone/{{dataPage.IconeCategorie}}">*/
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <h2 class="media-heading {{dataPage.CatNom}}" style="color:{{dataPage.ColorCategorie}}">*/
/*                                         {{dataPage.CatNom}}*/
/*                                     </h2>*/
/*                                     <div class="linebottomcat" style="background-color:{{dataPage.ColorCategorie}}"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         */
/*                         {% if articles|length>0 %}*/
/*                             */
/*                             {% set CompteurCol=0 %}*/
/*                             */
/*                             {% for arti in articles %}*/
/*                                 {% if arti.disposition!='' %} */
/*                                     {% set template = '/articlesLayout/'~arti.disposition~'.twig' %}*/
/*                                     {% set CompteurCol=CompteurCol+1 %}*/
/*                                 {% else %}*/
/*                                     {% set template = '/articlesLayout/default.twig' %}*/
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
