<?php

/* global/header.twig */
class __TwigTemplate_cce66520ecf804c0e8a234f9788ebdfe2c1a1798418fd020f4efc2066aba51d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"blocHeader\">
    <div class=\"row\">
        <div class=\"decotopsite\">
        </div>
    </div>
    <div class=\"row rowlogoflash\">
        <div class=\"col-xs-24 col-sm-24 col-md-22 col-md-offset-1\">
            <!-- LOGO -->
            <div class=\"col-xs-12 col-xs-offset-7 col-sm-6 col-sm-offset-0\">
                <a href=\"";
        // line 10
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "index.html\"><img class=\"img img-responsive\" src=\"";
        if (isset($context["BASEIMG"])) { $_BASEIMG_ = $context["BASEIMG"]; } else { $_BASEIMG_ = null; }
        echo twig_escape_filter($this->env, $_BASEIMG_, "html", null, true);
        echo "LOGO-BUZ.jpg\"></a>
            </div>
            <!-- FlashInfo -->
            ";
        // line 13
        if (isset($context["flashs"])) { $_flashs_ = $context["flashs"]; } else { $_flashs_ = null; }
        if ((twig_length_filter($this->env, $_flashs_) > 0)) {
            // line 14
            echo "                <div class=\"hidden-xs col-sm-12 col-md-9\">
                    <div class=\"panel panel-flashinfo\">
                        <div class=\"panel-heading\">Flash INFO</div>
                        <div class='panel-body'>
                            <div class=\"owl-carousel\" id=\"owl-flashinfo\">
                                ";
            // line 19
            if (isset($context["flashs"])) { $_flashs_ = $context["flashs"]; } else { $_flashs_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_flashs_);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 20
                echo "                                    <p class=\"contentFlashInfo\">
                                        ";
                // line 21
                if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_flash_, "resume", array()), "html", null, true);
                echo "
                                    </p>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                            </div>
                            <a class=\"readmore btn-newsletter\" role='button'>M'inscrire aux informations du flash info</a>
                        </div>

                    </div>
                </div>
            ";
        }
        // line 31
        echo "            <!-- Recherche Et Sous Menu -->
            <div class=\"hidden-xs col-sm-6 blocrecherche ";
        // line 32
        if (isset($context["flashs"])) { $_flashs_ = $context["flashs"]; } else { $_flashs_ = null; }
        if ((twig_length_filter($this->env, $_flashs_) > 0)) {
            echo "col-md-offset-3 ";
        } else {
            echo " col-md-offset-12";
        }
        echo "\">
                <div class=\"col-xs-24\">
                    <form method=\"POST\" action=\"";
        // line 34
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "recherche.html\" class=\"pull-right\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher ...\" aria-describedby=\"basic-addon-loupe\" name=\"rechercheall\">
                            <span class=\"input-group-addon\" id=\"basic-addon-loupe\"><img src=\"";
        // line 37
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
        // line 46
        $this->loadTemplate("global/mainMenu.twig", "global/header.twig", 46)->display($context);
        // line 47
        echo "<!-- Modules Header -->
    ";
        // line 48
        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
        if ($this->getAttribute($_modules_, "HEADER", array(), "array")) {
            // line 49
            echo "         ";
            if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_modules_, "HEADER", array(), "array"));
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
                // line 50
                echo "            ";
                if (isset($context["headerModule"])) { $_headerModule_ = $context["headerModule"]; } else { $_headerModule_ = null; }
                if (($this->getAttribute($_headerModule_, "type", array()) == "diaporama")) {
                    // line 51
                    echo "                
                <!-- Module HEADER -->
                <div class=\"row hidden-xs\">
                    <div id=\"header-slider\" class=\"";
                    // line 54
                    if (isset($context["headerModule"])) { $_headerModule_ = $context["headerModule"]; } else { $_headerModule_ = null; }
                    if ((twig_length_filter($this->env, $this->getAttribute($_headerModule_, "pictures", array())) > 1)) {
                        echo "carousel slide carousel-header";
                    }
                    echo "\" ";
                    if (isset($context["headerModule"])) { $_headerModule_ = $context["headerModule"]; } else { $_headerModule_ = null; }
                    if ((twig_length_filter($this->env, $this->getAttribute($_headerModule_, "pictures", array())) > 1)) {
                        echo "data-ride=\"carousel\"";
                    }
                    echo ">
                        
                        <div class=\"";
                    // line 56
                    if (isset($context["headerModule"])) { $_headerModule_ = $context["headerModule"]; } else { $_headerModule_ = null; }
                    if ((twig_length_filter($this->env, $this->getAttribute($_headerModule_, "pictures", array())) > 1)) {
                        echo "carousel-inner";
                    }
                    echo "\" role=\"listbox\">
                            ";
                    // line 57
                    if (isset($context["headerModule"])) { $_headerModule_ = $context["headerModule"]; } else { $_headerModule_ = null; }
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_headerModule_, "pictures", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
                        // line 58
                        echo "                                <div class=\"item ";
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        if (($this->getAttribute($_loop_, "index", array()) == 1)) {
                            echo "active";
                        }
                        echo "\">
                                    <img src=\"";
                        // line 59
                        if (isset($context["headerModule"])) { $_headerModule_ = $context["headerModule"]; } else { $_headerModule_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_headerModule_, "rep", array()), "html", null, true);
                        if (isset($context["images"])) { $_images_ = $context["images"]; } else { $_images_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_images_, "imageFile", array()), "html", null, true);
                        echo "\" ";
                        if (isset($context["headerModule"])) { $_headerModule_ = $context["headerModule"]; } else { $_headerModule_ = null; }
                        if ((twig_length_filter($this->env, $this->getAttribute($_headerModule_, "pictures", array())) < 2)) {
                            echo " class=\"img img-responsive\"";
                        }
                        echo ">
                                    ";
                        // line 60
                        if (isset($context["images"])) { $_images_ = $context["images"]; } else { $_images_ = null; }
                        if (($this->getAttribute($_images_, "Contenu", array()) != null)) {
                            // line 61
                            echo "                                        <div class=\"carousel-caption hidden-xs hidden-sm\">
                                            <div class=\"inner\">
                                                ";
                            // line 63
                            if (isset($context["images"])) { $_images_ = $context["images"]; } else { $_images_ = null; }
                            echo $this->getAttribute($_images_, "Contenu", array());
                            echo "
                                            </div>
                                            <div class=\"carousel-footer\"></div>
                                        </div>
                                    ";
                        }
                        // line 68
                        echo "                                </div>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 69
                    echo "    
                        </div>
                        ";
                    // line 71
                    if (isset($context["headerModule"])) { $_headerModule_ = $context["headerModule"]; } else { $_headerModule_ = null; }
                    if ((twig_length_filter($this->env, $this->getAttribute($_headerModule_, "pictures", array())) > 1)) {
                        // line 72
                        echo "                        <a class=\"left carousel-control\" href=\"#header-slider\" role=\"button\" data-slide=\"prev\">
                            <span class=\"sr-only\">Previous</span>
                        </a>
                        <a class=\"right carousel-control\" href=\"#header-slider\" role=\"button\" data-slide=\"next\">
                            <span class=\"sr-only\">Next</span>
                        </a>
                        ";
                    }
                    // line 79
                    echo "                    </div>
                    ";
                    // line 80
                    if (isset($context["breadcrumbsarticle"])) { $_breadcrumbsarticle_ = $context["breadcrumbsarticle"]; } else { $_breadcrumbsarticle_ = null; }
                    if (isset($context["forcebreadactu"])) { $_forcebreadactu_ = $context["forcebreadactu"]; } else { $_forcebreadactu_ = null; }
                    if (($_breadcrumbsarticle_ && ($_breadcrumbsarticle_ == 1))) {
                        // line 81
                        echo "                        ";
                        if (isset($context["titleBread"])) { $_titleBread_ = $context["titleBread"]; } else { $_titleBread_ = null; }
                        if ($_titleBread_) {
                            // line 82
                            echo "                            ";
                            if (isset($context["titleBread"])) { $_titleBread_ = $context["titleBread"]; } else { $_titleBread_ = null; }
                            $this->loadTemplate("global/breadcrumbArticles.twig", "global/header.twig", 82)->display(array_merge($context, array("titleBread" => $_titleBread_)));
                            // line 83
                            echo "                        ";
                        } else {
                            echo "    
                            ";
                            // line 84
                            $this->loadTemplate("global/breadcrumbArticles.twig", "global/header.twig", 84)->display($context);
                            // line 85
                            echo "                        ";
                        }
                        // line 86
                        echo "                    ";
                    } elseif ($_forcebreadactu_) {
                        // line 87
                        echo "                        ";
                        $this->loadTemplate("global/breadcrumbActu.twig", "global/header.twig", 87)->display($context);
                        // line 88
                        echo "                    ";
                    }
                    echo "    
                </div>
                
            ";
                }
                // line 92
                echo "        ";
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
            // line 93
            echo "    ";
        }
        // line 94
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "global/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 94,  304 => 93,  290 => 92,  282 => 88,  279 => 87,  276 => 86,  273 => 85,  271 => 84,  266 => 83,  262 => 82,  258 => 81,  254 => 80,  251 => 79,  242 => 72,  239 => 71,  235 => 69,  220 => 68,  211 => 63,  207 => 61,  204 => 60,  192 => 59,  184 => 58,  166 => 57,  159 => 56,  146 => 54,  141 => 51,  137 => 50,  118 => 49,  115 => 48,  112 => 47,  110 => 46,  97 => 37,  90 => 34,  80 => 32,  77 => 31,  68 => 24,  58 => 21,  55 => 20,  50 => 19,  43 => 14,  40 => 13,  30 => 10,  19 => 1,);
    }
}
/* <div class="blocHeader">*/
/*     <div class="row">*/
/*         <div class="decotopsite">*/
/*         </div>*/
/*     </div>*/
/*     <div class="row rowlogoflash">*/
/*         <div class="col-xs-24 col-sm-24 col-md-22 col-md-offset-1">*/
/*             <!-- LOGO -->*/
/*             <div class="col-xs-12 col-xs-offset-7 col-sm-6 col-sm-offset-0">*/
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
/*                             <input type="text" class="form-control" placeholder="Rechercher ..." aria-describedby="basic-addon-loupe" name="rechercheall">*/
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
/* <!-- Modules Header -->*/
/*     {% if modules['HEADER'] %}*/
/*          {% for headerModule in modules['HEADER'] %}*/
/*             {% if headerModule.type=='diaporama' %}*/
/*                 */
/*                 <!-- Module HEADER -->*/
/*                 <div class="row hidden-xs">*/
/*                     <div id="header-slider" class="{% if headerModule.pictures|length>1 %}carousel slide carousel-header{% endif %}" {% if headerModule.pictures|length>1 %}data-ride="carousel"{% endif %}>*/
/*                         */
/*                         <div class="{% if headerModule.pictures|length>1 %}carousel-inner{% endif %}" role="listbox">*/
/*                             {% for images in headerModule.pictures %}*/
/*                                 <div class="item {% if loop.index==1 %}active{% endif %}">*/
/*                                     <img src="{{headerModule.rep}}{{images.imageFile}}" {% if headerModule.pictures|length<2 %} class="img img-responsive"{%endif%}>*/
/*                                     {% if images.Contenu!=null %}*/
/*                                         <div class="carousel-caption hidden-xs hidden-sm">*/
/*                                             <div class="inner">*/
/*                                                 {{images.Contenu| raw }}*/
/*                                             </div>*/
/*                                             <div class="carousel-footer"></div>*/
/*                                         </div>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             {% endfor %}    */
/*                         </div>*/
/*                         {% if headerModule.pictures|length>1 %}*/
/*                         <a class="left carousel-control" href="#header-slider" role="button" data-slide="prev">*/
/*                             <span class="sr-only">Previous</span>*/
/*                         </a>*/
/*                         <a class="right carousel-control" href="#header-slider" role="button" data-slide="next">*/
/*                             <span class="sr-only">Next</span>*/
/*                         </a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     {% if (breadcrumbsarticle and breadcrumbsarticle==1) %}*/
/*                         {% if titleBread %}*/
/*                             {% include 'global/breadcrumbArticles.twig' with{titleBread:titleBread} %}*/
/*                         {% else %}    */
/*                             {% include 'global/breadcrumbArticles.twig' %}*/
/*                         {% endif %}*/
/*                     {% elseif forcebreadactu %}*/
/*                         {% include 'global/breadcrumbActu.twig' %}*/
/*                     {% endif %}    */
/*                 </div>*/
/*                 */
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* </div>*/
/* */
