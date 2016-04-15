<?php

/* global/breadcrumbArticles.twig */
class __TwigTemplate_c9abd9258d62511c91347728389b84575702304981780e6e53b3798ae782ff14 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-xs-24 col-sm-12 breadcrumbsTop\">
        <a href=\"";
        // line 3
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "\" id=\"homebread\"><i class=\"fa fa-home\"></i></a>
        ";
        // line 4
        if (isset($context["titleBread"])) { $_titleBread_ = $context["titleBread"]; } else { $_titleBread_ = null; }
        if ($_titleBread_) {
            // line 5
            echo "            <span class=\"separation\">></span> ";
            if (isset($context["titleBread"])) { $_titleBread_ = $context["titleBread"]; } else { $_titleBread_ = null; }
            echo twig_escape_filter($this->env, $_titleBread_, "html", null, true);
            echo "
        ";
        } else {
            // line 7
            echo "            ";
            if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
            if (($_dataPage_ &&  !(null === $this->getAttribute($_dataPage_, "CatParentNom", array())))) {
                // line 8
                echo "                <span class=\"separation\">></span>  <a href=\"";
                if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "urlParentPage", array()), "html", null, true);
                echo ".html\">";
                if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "CatParentNom", array()), "html", null, true);
                echo "</a>
            ";
            }
            // line 10
            echo "            <span class=\"separation\">></span>  
            <span class=\"pEnCours\" style=\"color:";
            // line 11
            if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorParentCategorie", array()), "html", null, true);
            echo "\">";
            if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "CatNom", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 13
        echo "        
    </div>
    <div class=\"col-xs-24 col-sm-12\">
        <div class=\"btn-toolbar-text noPrint\" role=\"toolbar\">
            <div class=\"btn-group\" role=\"group\" aria-label=\"Dézommer\"><a id=\"btnTypoLess\" href=\"javascript:void(0);\" title=\"Réduire la taille du texte\" role=\"button\" class=\"btn btn-sm btn-default boldme  btn-tprint\">A-</a></div>
            <div class=\"btn-group\" role=\"group\" aria-label=\"Zoomer\"><a id=\"btnTypoMore\" href=\"javascript:void(0);\" title=\"Agrandir la taille du texte\" role=\"button\" class=\"btn btn-sm btn-default boldme  btn-tprint\">A+</a></div>
            <div class=\"btn-group\" role=\"group\" aria-label=\"Zoomer\"><a id=\"print\" href=\"javascript:void(0);\" title=\"Imprimer la page\" class=\"btn btn-sm  btn-default btn-tprint\"><i class=\"fa fa-print\"></i></a></div>
            <div class=\"btn-group sociaux-btn\">
                <div class=\"btn-group spanner\" role=\"group\" aria-label=\"Partagez\">Partagez</div>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Partager sur Facebook\"><a href=\"http://www.facebook.com/share.php?u=";
        // line 22
        if (isset($context["REDIRECT_SCRIPT_URI"])) { $_REDIRECT_SCRIPT_URI_ = $context["REDIRECT_SCRIPT_URI"]; } else { $_REDIRECT_SCRIPT_URI_ = null; }
        echo twig_escape_filter($this->env, twig_urlencode_filter($_REDIRECT_SCRIPT_URI_), "html", null, true);
        echo "\" title=\"Partager sur facebook\" id=\"facebook\" target=\"_blank\"  role=\"button\" class=\"btn btn-sm  btn-default\"></a></div>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Partager sur twitter\"><a href=\"https://twitter.com/share?url=";
        // line 23
        if (isset($context["REDIRECT_SCRIPT_URI"])) { $_REDIRECT_SCRIPT_URI_ = $context["REDIRECT_SCRIPT_URI"]; } else { $_REDIRECT_SCRIPT_URI_ = null; }
        echo twig_escape_filter($this->env, twig_urlencode_filter($_REDIRECT_SCRIPT_URI_), "html", null, true);
        echo "\" title=\"En parler sur twitter\" id=\"twitter\" target=\"_blank\"  role=\"button\" class=\"btn btn-sm  btn-default\"></a></div>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Partager sur Google +\"><a href=\"https://plus.google.com/share?url=";
        // line 24
        if (isset($context["REDIRECT_SCRIPT_URI"])) { $_REDIRECT_SCRIPT_URI_ = $context["REDIRECT_SCRIPT_URI"]; } else { $_REDIRECT_SCRIPT_URI_ = null; }
        echo twig_escape_filter($this->env, twig_urlencode_filter($_REDIRECT_SCRIPT_URI_), "html", null, true);
        echo "\" id=\"googlePlus\" title=\"Partager sur Google+\"  role=\"button\" class=\"btn btn-sm  btn-default\"></a></div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "global/breadcrumbArticles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  82 => 23,  77 => 22,  66 => 13,  57 => 11,  54 => 10,  42 => 8,  38 => 7,  31 => 5,  28 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="row">*/
/*     <div class="col-xs-24 col-sm-12 breadcrumbsTop">*/
/*         <a href="{{BASEURL}}" id="homebread"><i class="fa fa-home"></i></a>*/
/*         {% if titleBread %}*/
/*             <span class="separation">></span> {{titleBread}}*/
/*         {% else %}*/
/*             {% if (dataPage and dataPage.CatParentNom is not null) %}*/
/*                 <span class="separation">></span>  <a href="{{BASEURL}}{{dataPage.urlParentPage}}.html">{{dataPage.CatParentNom}}</a>*/
/*             {% endif %}*/
/*             <span class="separation">></span>  */
/*             <span class="pEnCours" style="color:{{dataPage.ColorParentCategorie}}">{{dataPage.CatNom}}</span>*/
/*         {% endif %}*/
/*         */
/*     </div>*/
/*     <div class="col-xs-24 col-sm-12">*/
/*         <div class="btn-toolbar-text noPrint" role="toolbar">*/
/*             <div class="btn-group" role="group" aria-label="Dézommer"><a id="btnTypoLess" href="javascript:void(0);" title="Réduire la taille du texte" role="button" class="btn btn-sm btn-default boldme  btn-tprint">A-</a></div>*/
/*             <div class="btn-group" role="group" aria-label="Zoomer"><a id="btnTypoMore" href="javascript:void(0);" title="Agrandir la taille du texte" role="button" class="btn btn-sm btn-default boldme  btn-tprint">A+</a></div>*/
/*             <div class="btn-group" role="group" aria-label="Zoomer"><a id="print" href="javascript:void(0);" title="Imprimer la page" class="btn btn-sm  btn-default btn-tprint"><i class="fa fa-print"></i></a></div>*/
/*             <div class="btn-group sociaux-btn">*/
/*                 <div class="btn-group spanner" role="group" aria-label="Partagez">Partagez</div>*/
/*                 <div class="btn-group" role="group" aria-label="Partager sur Facebook"><a href="http://www.facebook.com/share.php?u={{ REDIRECT_SCRIPT_URI |url_encode  }}" title="Partager sur facebook" id="facebook" target="_blank"  role="button" class="btn btn-sm  btn-default"></a></div>*/
/*                 <div class="btn-group" role="group" aria-label="Partager sur twitter"><a href="https://twitter.com/share?url={{ REDIRECT_SCRIPT_URI |url_encode  }}" title="En parler sur twitter" id="twitter" target="_blank"  role="button" class="btn btn-sm  btn-default"></a></div>*/
/*                 <div class="btn-group" role="group" aria-label="Partager sur Google +"><a href="https://plus.google.com/share?url={{ REDIRECT_SCRIPT_URI |url_encode  }}" id="googlePlus" title="Partager sur Google+"  role="button" class="btn btn-sm  btn-default"></a></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
