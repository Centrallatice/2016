<?php

/* actualites.twig */
class __TwigTemplate_6ea9a9b5ed5161f9e2abb05ad1faeeaba438e291ca5d475bb42231bd46341ac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "actualites.twig", 1);
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
    <link href=\"";
        // line 8
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/actualites.css\" rel=\"stylesheet prefetch\" type=\"text/css\"/>
    <link href=\"";
        // line 9
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/modules/blocdownload/css/blocdownload.css\" rel=\"stylesheet prefetch\" type=\"text/css\"/>
    <link href=\"";
        // line 10
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/coordonnees/css/coordonnees.css\" rel=\"stylesheet prefetch\" type=\"text/css\"/>
    <link href=\"";
        // line 11
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/services/css/services.css\" rel=\"stylesheet prefetch\" type=\"text/css\"/>
    <link href=\"";
        // line 12
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/phototheque/css/phototheque.css\" rel=\"stylesheet prefetch\" type=\"text/css\"/>
    <link href=\"";
        // line 13
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/modules/actualite/css/actualite.css\" rel=\"stylesheet prefetch\" type=\"text/css\"/>
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
   
    <script type=\"text/javascript\" src=\"";
        // line 27
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/modules/actualites/js/actualites.js\"></script>
";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $this->loadTemplate("global/header.twig", "actualites.twig", 31)->display(array_merge($context, array("forcebreadactu" => true)));
        // line 32
        echo "    <div class=\"bloc-maincontainer contentPage actualites\">
        <div class=\"row\">
            <div class=\"colmiddle col-xs-24 col-sm-24 col-md-22\">
                <div class=\"col-xs-24 col-sm-24 col-md-22 nopadding\">
                    <div class=\"innerArticle container-article\">
                        <div class=\"media\">
                            <div class=\"media-left media-left-categorie\">
                                <img class=\"media-object\" src=\"";
        // line 39
        if (isset($context["BASEIMG"])) { $_BASEIMG_ = $context["BASEIMG"]; } else { $_BASEIMG_ = null; }
        echo twig_escape_filter($this->env, $_BASEIMG_, "html", null, true);
        echo "icone-actualites.png\">
                            </div>
                            <div class=\"media-body\">
                                <h2 class=\"media-heading\">
                                    Nos Actualités
                                </h2>
                                <div class=\"linebottomcat\"></div>
                            </div>
                        </div>
                        
                        <div class=\"owl-carousel\" id=\"owl-actualites\">
                            ";
        // line 50
        $context["border"] = 0;
        // line 51
        echo "                            ";
        if (isset($context["actualites"])) { $_actualites_ = $context["actualites"]; } else { $_actualites_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_actualites_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 52
            echo "                                ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            $context["loopDebut"] = ($this->getAttribute($_loop_, "index", array()) - 1);
            // line 53
            echo "                               
                                
                                ";
            // line 55
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (($this->getAttribute($_loop_, "index", array()) > 1)) {
                // line 56
                echo "                                    ";
                if (isset($context["loopDebut"])) { $_loopDebut_ = $context["loopDebut"]; } else { $_loopDebut_ = null; }
                if ((0 == $_loopDebut_ % 6)) {
                    // line 57
                    echo "                                        <div class=\"blocCarousel\">
                                    ";
                }
                // line 59
                echo "                                ";
            } else {
                // line 60
                echo "                                    <div class=\"blocCarousel\">
                                ";
            }
            // line 62
            echo "
                                <div class=\"blocActualite sameheight borderLeft ";
            // line 63
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->getAttribute($_actualite_, "CatNom", array()), array(" " => "-"))), "html", null, true);
            echo " col-xs-24 col-sm-24 col-md-8\"> 
                                    ";
            // line 64
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            if ((($this->getAttribute($_actualite_, "image", array()) != "") &&  !(null === $this->getAttribute($_actualite_, "image", array())))) {
                echo " 
                                        <img 
                                        class=\"noPrint img img-responsive fancyboxme\" 
                                        href=\"";
                // line 67
                if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                echo "public/upload/actuPicture/";
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "image", array()), "html", null, true);
                echo "\"
                                        style=\"margin:auto;border:2px solid ";
                // line 68
                if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                if ($this->getAttribute($_categories_, $this->getAttribute($_actualite_, "idCat", array()), array(), "array", true, true)) {
                    if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                    if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_categories_, $this->getAttribute($_actualite_, "idCat", array()), array(), "array"), "color", array()), "html", null, true);
                } else {
                    echo "navy";
                }
                echo "\"
                                        src=\"";
                // line 69
                if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                echo "public/upload/actuPicture/300x300/";
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "image", array()), "html", null, true);
                echo "\">
                                        <div class=\"triangle noPrint\" style=\"border-color: ";
                // line 70
                if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                if ($this->getAttribute($_categories_, $this->getAttribute($_actualite_, "idCat", array()), array(), "array", true, true)) {
                    if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                    if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_categories_, $this->getAttribute($_actualite_, "idCat", array()), array(), "array"), "color", array()), "html", null, true);
                } else {
                    echo "navy";
                }
                echo " transparent transparent transparent\"></div>
                                    ";
            } elseif (((twig_length_filter($this->env, $this->getAttribute($_actualite_, "contentCarou", array())) > 0) &&  !(null === $this->getAttribute($_actualite_, "idCarroussel", array())))) {
                // line 71
                echo " 

                                        <img 
                                        class=\"noPrint img img-responsive fancyboxme\" 
                                        href=\"";
                // line 75
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "urlCarou", array()), "html", null, true);
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_actualite_, "contentCarou", array()), 0, array(), "array"), "imageFile", array()), "html", null, true);
                echo "\" 
                                        style=\"margin:auto;border:2px solid ";
                // line 76
                if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                if ($this->getAttribute($_categories_, $this->getAttribute($_actualite_, "idCat", array()), array(), "array", true, true)) {
                    if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                    if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_categories_, $this->getAttribute($_actualite_, "idCat", array()), array(), "array"), "color", array()), "html", null, true);
                } else {
                    echo "navy";
                }
                echo "\"
                                        src=\"";
                // line 77
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "urlCarou", array()), "html", null, true);
                echo "300x300/";
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_actualite_, "contentCarou", array()), 0, array(), "array"), "imageFile", array()), "html", null, true);
                echo "\">
                                        <div class=\"triangle noPrint\" style=\"border-color: ";
                // line 78
                if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                if ($this->getAttribute($_categories_, $this->getAttribute($_actualite_, "idCat", array()), array(), "array", true, true)) {
                    if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                    if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_categories_, $this->getAttribute($_actualite_, "idCat", array()), array(), "array"), "color", array()), "html", null, true);
                } else {
                    echo "navy";
                }
                echo " transparent transparent transparent\"></div>
                                    ";
            }
            // line 80
            echo "                                    <div class=\"detailActualite\">
                                        <div class=\"media noPrint\">
                                            <div class=\"media-left noPrint\">
                                                    <img class=\"media-object\" src=\"";
            // line 83
            if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            if ($this->getAttribute($_categories_, $this->getAttribute($_actualite_, "idCat", array()), array(), "array", true, true)) {
                if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                echo "public/upload/actuIcone/40x40/";
                if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_categories_, $this->getAttribute($_actualite_, "idCat", array()), array(), "array"), "icone", array()), "html", null, true);
            }
            echo " \" alt=\"\">

                                            </div>
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">
                                                    ";
            // line 88
            if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            if ($this->getAttribute($_categories_, $this->getAttribute($_actualite_, "idCat", array()), array(), "array", true, true)) {
                // line 89
                echo "                                                        <span style=\"color:";
                if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                if ($this->getAttribute($_categories_, $this->getAttribute($_actualite_, "idCat", array()), array(), "array", true, true)) {
                    if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                    if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_categories_, $this->getAttribute($_actualite_, "idCat", array()), array(), "array"), "color", array()), "html", null, true);
                } else {
                    echo "navy";
                }
                echo "\">";
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "CatNom", array()), "html", null, true);
                echo "</span>
                                                    ";
            }
            // line 90
            echo "    
                                                    <br />
                                                    ";
            // line 92
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "dateEvenementFR", array()), "html", null, true);
            echo "
                                                </h4>
                                            </div>
                                        </div>
                                        <div class=\"resumeActivite contenu-article\">
                                            <a style=\"text-decoration:none\" href=\"";
            // line 97
            if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
            echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
            echo "actualite/";
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "urlCatNom", array()), "html", null, true);
            echo "/";
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "url", array()), "html", null, true);
            echo ".html\">";
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_actualite_, "resume", array()), 255, true), "html", null, true);
            echo "</a>
                                        </div>
                                        <div class=\"readmoreActu noPrint\">
                                            <a style=\"color:";
            // line 100
            if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            if ($this->getAttribute($_categories_, $this->getAttribute($_actualite_, "idCat", array()), array(), "array", true, true)) {
                if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_categories_, $this->getAttribute($_actualite_, "idCat", array()), array(), "array"), "color", array()), "html", null, true);
            } else {
                echo "navy";
            }
            echo "\" href=\"";
            if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
            echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
            echo "actualite/";
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "urlCatNom", array()), "html", null, true);
            echo "/";
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "url", array()), "html", null, true);
            echo ".html\">> Lire la suite</a>
                                        </div>
                                    </div>
                                </div>

                                ";
            // line 105
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (isset($context["actualites"])) { $_actualites_ = $context["actualites"]; } else { $_actualites_ = null; }
            if (((0 == $this->getAttribute($_loop_, "index", array()) % 6) || ($this->getAttribute($_loop_, "index", array()) == twig_length_filter($this->env, $_actualites_)))) {
                // line 106
                echo "                                    </div>
                                ";
            }
            // line 108
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                        </div>
                    </div>
                    ";
        // line 111
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "BOTTOM_PAGE", array(), "array")) {
            // line 112
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
                // line 113
                echo "                            ";
                if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
                if (($this->getAttribute($_carou_, "type", array()) == "caroussel")) {
                    // line 114
                    echo "                                ";
                    $this->loadTemplate("/modules/caroussel/layout/displayBottomPage.twig", "actualites.twig", 114)->display($context);
                    // line 115
                    echo "                            ";
                }
                // line 116
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
            // line 117
            echo "                    ";
        }
        // line 118
        echo "                </div>
                
                <div class=\"col-xs-24 hidden-sm col-md-6 nopadding noPrint col-right-one\">
                    <!-- COL_RIGHT_ONE -->
                    
                    ";
        // line 123
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "COL_RIGHT_ONE", array(), "array")) {
            // line 124
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
                // line 125
                echo "                            ";
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                if (($this->getAttribute($_m_, "type", array()) == "customcontent")) {
                    // line 126
                    echo "                                <div class=\"customcontentright\">
                                    ";
                    // line 127
                    if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                    echo $this->getAttribute($_m_, "contenuHTML", array());
                    echo "
                                </div>
                            ";
                } elseif (($this->getAttribute($_m_, "type", array()) == "blocdownload")) {
                    // line 130
                    echo "                                ";
                    $this->loadTemplate("/modules/blocdownload/layout/displayRightColumn.twig", "actualites.twig", 130)->display($context);
                    // line 131
                    echo "                            ";
                }
                // line 132
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
            // line 133
            echo "                    ";
        }
        // line 134
        echo "                    <!-- COL_RIGHT_TWO-->
                    ";
        // line 135
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "COL_RIGHT_TWO", array(), "array")) {
            // line 136
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
                // line 137
                echo "                            ";
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                if (($this->getAttribute($_m_, "type", array()) == "blocdownload")) {
                    // line 138
                    echo "                                ";
                    $this->loadTemplate("/modules/blocdownload/layout/displayRightColumn.twig", "actualites.twig", 138)->display($context);
                    // line 139
                    echo "                            ";
                } elseif (($this->getAttribute($_m_, "type", array()) == "customcontent")) {
                    // line 140
                    echo "                                ";
                    if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                    echo $this->getAttribute($_m_, "contenuHTML", array());
                    echo "
                            ";
                }
                // line 142
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
            // line 143
            echo "                    ";
        }
        // line 144
        echo "                </div>
            </div>
            <div class=\"hidden-xs hidden-sm col-md-2 nopadding noPrint\">
                <!-- COL_RIGHT_ONE -->
                ";
        // line 148
        $this->loadTemplate("/blocks/services/layout/displayMiniInnerColRight.twig", "actualites.twig", 148)->display($context);
        // line 149
        echo "            </div>
        </div>
    ";
        // line 151
        $this->loadTemplate("global/footer.twig", "actualites.twig", 151)->display($context);
        echo "    
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "actualites.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  644 => 151,  640 => 149,  638 => 148,  632 => 144,  629 => 143,  615 => 142,  608 => 140,  605 => 139,  602 => 138,  598 => 137,  579 => 136,  576 => 135,  573 => 134,  570 => 133,  556 => 132,  553 => 131,  550 => 130,  543 => 127,  540 => 126,  536 => 125,  517 => 124,  514 => 123,  507 => 118,  504 => 117,  490 => 116,  487 => 115,  484 => 114,  480 => 113,  461 => 112,  458 => 111,  454 => 109,  440 => 108,  436 => 106,  432 => 105,  407 => 100,  391 => 97,  382 => 92,  378 => 90,  361 => 89,  357 => 88,  340 => 83,  335 => 80,  322 => 78,  314 => 77,  302 => 76,  295 => 75,  289 => 71,  276 => 70,  268 => 69,  256 => 68,  248 => 67,  241 => 64,  236 => 63,  233 => 62,  229 => 60,  226 => 59,  222 => 57,  218 => 56,  215 => 55,  211 => 53,  207 => 52,  188 => 51,  186 => 50,  171 => 39,  162 => 32,  159 => 31,  156 => 30,  149 => 27,  143 => 25,  138 => 24,  133 => 23,  128 => 22,  123 => 21,  118 => 20,  115 => 19,  107 => 16,  102 => 15,  97 => 14,  92 => 13,  87 => 12,  82 => 11,  77 => 10,  72 => 9,  67 => 8,  62 => 7,  57 => 6,  54 => 5,  47 => 4,  40 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends "base.twig" %}*/
/* {% block title %}{{dataPage.titrePage}}{% endblock %}*/
/* {% block description %}{{dataPage.descriptionPage}}{% endblock %}*/
/* {% block keywords %}{{dataPage.motsclefsPage}}{% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel='stylesheet prefetch' href="{{BASETHEME}}/css/toolbar.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/css/actualites.css" rel="stylesheet prefetch" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/modules/blocdownload/css/blocdownload.css" rel="stylesheet prefetch" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/coordonnees/css/coordonnees.css" rel="stylesheet prefetch" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/services/css/services.css" rel="stylesheet prefetch" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/phototheque/css/phototheque.css" rel="stylesheet prefetch" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/modules/actualite/css/actualite.css" rel="stylesheet prefetch" type="text/css"/>*/
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
/*     <script type="text/javascript" src="{{BASETHEME}}/modules/actualites/js/actualites.js"></script>*/
/* {% endblock %}*/
/*     */
/* {% block body %}*/
/*     {% include 'global/header.twig' with {forcebreadactu:true}%}*/
/*     <div class="bloc-maincontainer contentPage actualites">*/
/*         <div class="row">*/
/*             <div class="colmiddle col-xs-24 col-sm-24 col-md-22">*/
/*                 <div class="col-xs-24 col-sm-24 col-md-22 nopadding">*/
/*                     <div class="innerArticle container-article">*/
/*                         <div class="media">*/
/*                             <div class="media-left media-left-categorie">*/
/*                                 <img class="media-object" src="{{BASEIMG}}icone-actualites.png">*/
/*                             </div>*/
/*                             <div class="media-body">*/
/*                                 <h2 class="media-heading">*/
/*                                     Nos Actualités*/
/*                                 </h2>*/
/*                                 <div class="linebottomcat"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         <div class="owl-carousel" id="owl-actualites">*/
/*                             {% set border = 0 %}*/
/*                             {% for actualite in actualites %}*/
/*                                 {% set loopDebut = loop.index-1 %}*/
/*                                */
/*                                 */
/*                                 {% if loop.index>1 %}*/
/*                                     {% if loopDebut is divisible by(6) %}*/
/*                                         <div class="blocCarousel">*/
/*                                     {% endif %}*/
/*                                 {% else %}*/
/*                                     <div class="blocCarousel">*/
/*                                 {% endif %}*/
/* */
/*                                 <div class="blocActualite sameheight borderLeft {{actualite.CatNom|replace({' ': '-'})|lower}} col-xs-24 col-sm-24 col-md-8"> */
/*                                     {% if (actualite.image!='' and actualite.image is not null) %} */
/*                                         <img */
/*                                         class="noPrint img img-responsive fancyboxme" */
/*                                         href="{{BASEURL}}public/upload/actuPicture/{{actualite.image}}"*/
/*                                         style="margin:auto;border:2px solid {% if categories[actualite.idCat] is defined %}{{categories[actualite.idCat].color}}{% else %}navy{% endif %}"*/
/*                                         src="{{BASEURL}}public/upload/actuPicture/300x300/{{actualite.image}}">*/
/*                                         <div class="triangle noPrint" style="border-color: {% if categories[actualite.idCat] is defined %}{{categories[actualite.idCat].color}}{% else %}navy{% endif %} transparent transparent transparent"></div>*/
/*                                     {% elseif (actualite.contentCarou|length>0 and actualite.idCarroussel is not null) %} */
/* */
/*                                         <img */
/*                                         class="noPrint img img-responsive fancyboxme" */
/*                                         href="{{actualite.urlCarou}}{{actualite.contentCarou[0].imageFile}}" */
/*                                         style="margin:auto;border:2px solid {% if categories[actualite.idCat] is defined %}{{categories[actualite.idCat].color}}{% else %}navy{% endif %}"*/
/*                                         src="{{actualite.urlCarou}}300x300/{{actualite.contentCarou[0].imageFile}}">*/
/*                                         <div class="triangle noPrint" style="border-color: {% if categories[actualite.idCat] is defined %}{{categories[actualite.idCat].color}}{% else %}navy{% endif %} transparent transparent transparent"></div>*/
/*                                     {% endif %}*/
/*                                     <div class="detailActualite">*/
/*                                         <div class="media noPrint">*/
/*                                             <div class="media-left noPrint">*/
/*                                                     <img class="media-object" src="{% if categories[actualite.idCat] is defined %}{{BASEURL}}public/upload/actuIcone/40x40/{{categories[actualite.idCat].icone}}{% endif %} " alt="">*/
/* */
/*                                             </div>*/
/*                                             <div class="media-body">*/
/*                                                 <h4 class="media-heading">*/
/*                                                     {% if categories[actualite.idCat] is defined %}*/
/*                                                         <span style="color:{% if categories[actualite.idCat] is defined %}{{categories[actualite.idCat].color}}{% else %}navy{% endif %}">{{actualite.CatNom}}</span>*/
/*                                                     {% endif %}    */
/*                                                     <br />*/
/*                                                     {{actualite.dateEvenementFR}}*/
/*                                                 </h4>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="resumeActivite contenu-article">*/
/*                                             <a style="text-decoration:none" href="{{BASEURL}}actualite/{{actualite.urlCatNom}}/{{actualite.url}}.html">{{actualite.resume|truncate(255, true)}}</a>*/
/*                                         </div>*/
/*                                         <div class="readmoreActu noPrint">*/
/*                                             <a style="color:{% if categories[actualite.idCat] is defined %}{{categories[actualite.idCat].color}}{% else %}navy{% endif %}" href="{{BASEURL}}actualite/{{actualite.urlCatNom}}/{{actualite.url}}.html">> Lire la suite</a>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 {% if (loop.index is divisible by(6) or loop.index==actualites|length)%}*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
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
/*                 <!-- COL_RIGHT_ONE -->*/
/*                 {% include '/blocks/services/layout/displayMiniInnerColRight.twig' %}*/
/*             </div>*/
/*         </div>*/
/*     {% include 'global/footer.twig' %}    */
/*     </div>*/
/*     */
/* {% endblock %}*/
