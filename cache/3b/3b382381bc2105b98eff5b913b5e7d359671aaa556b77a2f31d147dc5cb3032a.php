<?php

/* recherche.twig */
class __TwigTemplate_6c55d58910cf1dc74bd12bc30c03ae4c9c90fd28d53c25bce61fbe81bb6d0ff4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "recherche.twig", 1);
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
        echo "Site Officiel de La Ville de Buzançais";
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
        echo "/css/recherche.css\" rel=\"stylesheet prefetch\" type=\"text/css\"/>
";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "  
";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"blocHeader\">
    <div class=\"row\">
        <div class=\"decotopsite\"></div>
    </div>
    <div class=\"row rowlogoflash\">
        <div class=\"col-xs-24 col-sm-24 col-md-22 col-md-offset-1\">
            <!-- LOGO -->
            <div class=\"col-xs-24 col-sm-6\">
                <a href=\"";
        // line 31
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "index.html\"><img class=\"img img-responsive\" src=\"";
        if (isset($context["BASEIMG"])) { $_BASEIMG_ = $context["BASEIMG"]; } else { $_BASEIMG_ = null; }
        echo twig_escape_filter($this->env, $_BASEIMG_, "html", null, true);
        echo "LOGO-BUZ.jpg\"></a>
            </div>
            <!-- FlashInfo -->
            ";
        // line 34
        if (isset($context["flashs"])) { $_flashs_ = $context["flashs"]; } else { $_flashs_ = null; }
        if ((twig_length_filter($this->env, $_flashs_) > 0)) {
            // line 35
            echo "                <div class=\"hidden-xs col-sm-12 col-md-9\">
                    <div class=\"panel panel-flashinfo\">
                        <div class=\"panel-heading\">Flash INFO</div>
                        <div class='panel-body'>
                            <div class=\"owl-carousel\" id=\"owl-flashinfo\">
                                ";
            // line 40
            if (isset($context["flashs"])) { $_flashs_ = $context["flashs"]; } else { $_flashs_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_flashs_);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 41
                echo "                                    <p class=\"contentFlashInfo\">
                                        ";
                // line 42
                if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_flash_, "resume", array()), "html", null, true);
                echo "
                                    </p>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                            </div>
                            <a class=\"readmore btn-newsletter\" role='button'>M'inscrire aux informations du flash info</a>
                        </div>

                    </div>
                </div>
            ";
        }
        // line 52
        echo "            <!-- Recherche Et Sous Menu -->
            <div class=\"hidden-xs col-sm-6 blocrecherche ";
        // line 53
        if (isset($context["flashs"])) { $_flashs_ = $context["flashs"]; } else { $_flashs_ = null; }
        if ((twig_length_filter($this->env, $_flashs_) > 0)) {
            echo "col-md-offset-3 ";
        } else {
            echo " col-md-offset-12";
        }
        echo "\">
                <div class=\"col-xs-24\">
                    <form method=\"POST\" action=\"";
        // line 55
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "recherche.html\" class=\"pull-right\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher ...\"  name=\"rechercheall\" aria-describedby=\"basic-addon-loupe\">
                            <span class=\"input-group-addon\" id=\"basic-addon-loupe\"><img src=\"";
        // line 58
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
        // line 67
        $this->loadTemplate("global/mainMenu.twig", "recherche.twig", 67)->display($context);
        // line 68
        echo "    
    
    <div class=\"row hidden-xs\">
        <div id=\"header-slider\">
            <div role=\"listbox\">
                <div class=\"item active\">
                    <img src=\"";
        // line 74
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "themes/default/img/bannieres/banniere-videotheque.jpg\" class=\"img img-responsive\">
                </div>  
            </div>
        </div>
        ";
        // line 78
        $this->loadTemplate("global/breadcrumbArticles.twig", "recherche.twig", 78)->display(array_merge($context, array("titleBread" => "Recherche")));
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
        // line 89
        if (isset($context["BASEIMG"])) { $_BASEIMG_ = $context["BASEIMG"]; } else { $_BASEIMG_ = null; }
        echo twig_escape_filter($this->env, $_BASEIMG_, "html", null, true);
        echo "icone-VIDEO.png\">
                            </div>
                            <div class=\"media-body\">
                                <h2 class=\"media-heading\">
                                    Votre Recherche
                                </h2>
                                <div class=\"linebottomcat\"></div>
                            </div>
                        </div>
                               
                        ";
        // line 99
        if (isset($context["Articles"])) { $_Articles_ = $context["Articles"]; } else { $_Articles_ = null; }
        if ((twig_length_filter($this->env, $_Articles_) > 0)) {
            // line 100
            echo "                            <h4>";
            if (isset($context["Articles"])) { $_Articles_ = $context["Articles"]; } else { $_Articles_ = null; }
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $_Articles_), "html", null, true);
            echo " résultat(s) dans les articles</h4>
                            ";
            // line 101
            if (isset($context["Articles"])) { $_Articles_ = $context["Articles"]; } else { $_Articles_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_Articles_);
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 102
                echo "                                <div class=\"col-xs-24 blocresultsearch\">
                                    <div class=\"col-xs-24\">
                                        ";
                // line 104
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_i_, "titre", array())) > 0)) {
                    // line 105
                    echo "                                            <p class=\"title\"><strong>";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_i_, "titre", array()), "html", null, true);
                    echo "</strong></p>
                                        ";
                } else {
                    // line 107
                    echo "                                            <p class=\"title\"><strong>Aucun titre défini</strong></p>
                                        ";
                }
                // line 109
                echo "                                        ";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_i_, "contenu", array())) > 0)) {
                    // line 110
                    echo "                                            ";
                    if (isset($context["searchAsked"])) { $_searchAsked_ = $context["searchAsked"]; } else { $_searchAsked_ = null; }
                    $context["result"] = (("<span style='background-color:yellow'>" . $_searchAsked_) . "</span>");
                    // line 111
                    echo "                                            ";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                    $context["contenu"] = twig_replace_filter(twig_slice($this->env, strip_tags($this->getAttribute($_i_, "contenu", array())), 0, 400), array("searchAsked" => $_result_));
                    // line 112
                    echo "                                            ";
                    if (isset($context["contenu"])) { $_contenu_ = $context["contenu"]; } else { $_contenu_ = null; }
                    echo $_contenu_;
                    echo "...
                                        ";
                }
                // line 114
                echo "                                    </div>
                                    <div class=\"col-xs-24 blocreadmore\">
                                        <a href=\"";
                // line 116
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "lien", array()), "html", null, true);
                echo ".html\">Lire la suite</a>
                                    </div>
                                </div>
                                <hr />
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "                        ";
        }
        // line 122
        echo "                        ";
        if (isset($context["Actualites"])) { $_Actualites_ = $context["Actualites"]; } else { $_Actualites_ = null; }
        if ((twig_length_filter($this->env, $_Actualites_) > 0)) {
            // line 123
            echo "                            <h4>";
            if (isset($context["Actualites"])) { $_Actualites_ = $context["Actualites"]; } else { $_Actualites_ = null; }
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $_Actualites_), "html", null, true);
            echo " résultat(s) dans les actualités</h4>
                            ";
            // line 124
            if (isset($context["Actualites"])) { $_Actualites_ = $context["Actualites"]; } else { $_Actualites_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_Actualites_);
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 125
                echo "                                <div class=\"col-xs-24 blocresultsearch\">
                                    <div class=\"col-xs-24\">
                                        ";
                // line 127
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_i_, "titre", array())) > 0)) {
                    // line 128
                    echo "                                            <p class=\"title\"><strong>";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_i_, "titre", array()), "html", null, true);
                    echo "</strong></p>
                                        ";
                } else {
                    // line 130
                    echo "                                            <p class=\"title\"><strong>Aucun titre défini</strong></p>
                                        ";
                }
                // line 132
                echo "                                        ";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_i_, "contenu", array())) > 0)) {
                    // line 133
                    echo "                                            ";
                    if (isset($context["searchAsked"])) { $_searchAsked_ = $context["searchAsked"]; } else { $_searchAsked_ = null; }
                    $context["result"] = (("<span style='background-color:yellow'>" . $_searchAsked_) . "</span>");
                    // line 134
                    echo "                                            ";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                    $context["contenu"] = twig_replace_filter(twig_slice($this->env, strip_tags($this->getAttribute($_i_, "contenu", array())), 0, 400), array("searchAsked" => $_result_));
                    // line 135
                    echo "                                            ";
                    if (isset($context["contenu"])) { $_contenu_ = $context["contenu"]; } else { $_contenu_ = null; }
                    echo $_contenu_;
                    echo "...
                                        ";
                }
                // line 137
                echo "                                    </div>
                                    <div class=\"col-xs-24 blocreadmore\">
                                        <a href=\"actualite/";
                // line 139
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "urlCatNom", array()), "html", null, true);
                echo "/";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "url", array()), "html", null, true);
                echo ".html\">Lire la suite</a>
                                    </div>
                                </div>
                                <hr />
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                        ";
        }
        // line 145
        echo "                        
                    </div>
                    ";
        // line 147
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "BOTTOM_PAGE", array(), "array")) {
            // line 148
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
                // line 149
                echo "                            ";
                if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
                if (($this->getAttribute($_carou_, "type", array()) == "caroussel")) {
                    // line 150
                    echo "                                ";
                    $this->loadTemplate("/modules/caroussel/layout/displayBottomPage.twig", "recherche.twig", 150)->display($context);
                    // line 151
                    echo "                            ";
                }
                // line 152
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
            // line 153
            echo "                    ";
        }
        // line 154
        echo "                </div>
                
                
            </div>
            <div class=\"hidden-xs hidden-sm col-md-2 nopadding noPrint\">
                <!-- COL_RIGHT_ONE -->
                ";
        // line 160
        $this->loadTemplate("/blocks/services/layout/displayMiniInnerColRight.twig", "recherche.twig", 160)->display($context);
        // line 161
        echo "            </div>
        </div>
    ";
        // line 163
        $this->loadTemplate("global/footer.twig", "recherche.twig", 163)->display($context);
        echo "    
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "recherche.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 163,  453 => 161,  451 => 160,  443 => 154,  440 => 153,  426 => 152,  423 => 151,  420 => 150,  416 => 149,  397 => 148,  394 => 147,  390 => 145,  387 => 144,  372 => 139,  368 => 137,  361 => 135,  356 => 134,  352 => 133,  348 => 132,  344 => 130,  337 => 128,  334 => 127,  330 => 125,  325 => 124,  319 => 123,  315 => 122,  312 => 121,  300 => 116,  296 => 114,  289 => 112,  284 => 111,  280 => 110,  276 => 109,  272 => 107,  265 => 105,  262 => 104,  258 => 102,  253 => 101,  247 => 100,  244 => 99,  230 => 89,  216 => 78,  208 => 74,  200 => 68,  198 => 67,  185 => 58,  178 => 55,  168 => 53,  165 => 52,  156 => 45,  146 => 42,  143 => 41,  138 => 40,  131 => 35,  128 => 34,  118 => 31,  108 => 23,  105 => 22,  98 => 19,  95 => 18,  88 => 16,  83 => 15,  78 => 14,  73 => 13,  68 => 12,  63 => 11,  58 => 10,  55 => 9,  45 => 4,  39 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends "base.twig" %}*/
/* {% block title %}Site Officiel de La Ville de Buzançais{% endblock %}*/
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
/*     <link href="{{BASETHEME}}/css/recherche.css" rel="stylesheet prefetch" type="text/css"/>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}  */
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
/*                             <input type="text" class="form-control" placeholder="Rechercher ..."  name="rechercheall" aria-describedby="basic-addon-loupe">*/
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
/*         {% include 'global/breadcrumbArticles.twig' with{titleBread:"Recherche"} %} */
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
/*                                     Votre Recherche*/
/*                                 </h2>*/
/*                                 <div class="linebottomcat"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                                */
/*                         {% if Articles|length>0 %}*/
/*                             <h4>{{Articles|length}} résultat(s) dans les articles</h4>*/
/*                             {% for i in Articles %}*/
/*                                 <div class="col-xs-24 blocresultsearch">*/
/*                                     <div class="col-xs-24">*/
/*                                         {% if i.titre|length>0 %}*/
/*                                             <p class="title"><strong>{{i.titre}}</strong></p>*/
/*                                         {% else %}*/
/*                                             <p class="title"><strong>Aucun titre défini</strong></p>*/
/*                                         {% endif %}*/
/*                                         {% if i.contenu|length>0 %}*/
/*                                             {% set result = "<span style='background-color:yellow'>"~searchAsked~"</span>" %}*/
/*                                             {% set contenu = i.contenu|striptags|slice(0,400)|replace({searchAsked:result}) %}*/
/*                                             {{contenu|raw}}...*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                     <div class="col-xs-24 blocreadmore">*/
/*                                         <a href="{{i.lien}}.html">Lire la suite</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <hr />*/
/*                             {% endfor %}*/
/*                         {% endif %}*/
/*                         {% if Actualites|length>0 %}*/
/*                             <h4>{{Actualites|length}} résultat(s) dans les actualités</h4>*/
/*                             {% for i in Actualites %}*/
/*                                 <div class="col-xs-24 blocresultsearch">*/
/*                                     <div class="col-xs-24">*/
/*                                         {% if i.titre|length>0 %}*/
/*                                             <p class="title"><strong>{{i.titre}}</strong></p>*/
/*                                         {% else %}*/
/*                                             <p class="title"><strong>Aucun titre défini</strong></p>*/
/*                                         {% endif %}*/
/*                                         {% if i.contenu|length>0 %}*/
/*                                             {% set result = "<span style='background-color:yellow'>"~searchAsked~"</span>" %}*/
/*                                             {% set contenu = i.contenu|striptags|slice(0,400)|replace({searchAsked:result}) %}*/
/*                                             {{contenu|raw}}...*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                     <div class="col-xs-24 blocreadmore">*/
/*                                         <a href="actualite/{{i.urlCatNom}}/{{i.url}}.html">Lire la suite</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <hr />*/
/*                             {% endfor %}*/
/*                         {% endif %}*/
/*                         */
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
