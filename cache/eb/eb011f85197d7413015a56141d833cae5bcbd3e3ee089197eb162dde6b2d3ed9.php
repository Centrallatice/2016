<?php

/* global/breadcrumbActu.twig */
class __TwigTemplate_11e3d62452e9b9bc662aebbe649fd8b3c5927e0a7084fda83c78148081954149 extends Twig_Template
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
       <span class=\"separation\">></span>  
       <a href=\"";
        // line 5
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "actualites.html\">Nos actualités</a>
       
    </div>
    <div class=\"col-xs-24 col-sm-12\">
        <div class=\"btn-toolbar-text noPrint\" role=\"toolbar\">
            <div class=\"btn-group\" role=\"group\" aria-label=\"Dézommer\"><a id=\"btnTypoLess\" href=\"javascript:void(0);\" title=\"Réduire la taille du texte\" role=\"button\" class=\"btn btn-sm btn-default boldme  btn-tprint\">A-</a></div>
            <div class=\"btn-group\" role=\"group\" aria-label=\"Zoomer\"><a id=\"btnTypoMore\" href=\"javascript:void(0);\" title=\"Agrandir la taille du texte\" role=\"button\" class=\"btn btn-sm btn-default boldme  btn-tprint\">A+</a></div>
            <div class=\"btn-group\" role=\"group\" aria-label=\"Zoomer\"><a id=\"print\" href=\"javascript:void(0);\" title=\"Imprimer la page\" class=\"btn btn-sm  btn-default btn-tprint\"><i class=\"fa fa-print\"></i></a></div>
            <div class=\"btn-group sociaux-btn\">
                <div class=\"btn-group spanner\" role=\"group\" aria-label=\"Partagez\">Partagez</div>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Partager sur Facebook\"><a href=\"http://www.facebook.com/share.php?u=";
        // line 15
        if (isset($context["REDIRECT_SCRIPT_URI"])) { $_REDIRECT_SCRIPT_URI_ = $context["REDIRECT_SCRIPT_URI"]; } else { $_REDIRECT_SCRIPT_URI_ = null; }
        echo twig_escape_filter($this->env, twig_urlencode_filter($_REDIRECT_SCRIPT_URI_), "html", null, true);
        echo "\" title=\"Partager sur facebook\" id=\"facebook\" target=\"_blank\"  role=\"button\" class=\"btn btn-sm  btn-default\"></a></div>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Partager sur twitter\"><a href=\"https://twitter.com/share?url=";
        // line 16
        if (isset($context["REDIRECT_SCRIPT_URI"])) { $_REDIRECT_SCRIPT_URI_ = $context["REDIRECT_SCRIPT_URI"]; } else { $_REDIRECT_SCRIPT_URI_ = null; }
        echo twig_escape_filter($this->env, twig_urlencode_filter($_REDIRECT_SCRIPT_URI_), "html", null, true);
        echo "\" title=\"En parler sur twitter\" id=\"twitter\" target=\"_blank\"  role=\"button\" class=\"btn btn-sm  btn-default\"></a></div>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Partager sur Google +\"><a href=\"https://plus.google.com/share?url=";
        // line 17
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
        return "global/breadcrumbActu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  48 => 16,  43 => 15,  29 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div class="row">*/
/*     <div class="col-xs-24 col-sm-12 breadcrumbsTop">*/
/*         <a href="{{BASEURL}}" id="homebread"><i class="fa fa-home"></i></a>*/
/*        <span class="separation">></span>  */
/*        <a href="{{BASEURL}}actualites.html">Nos actualités</a>*/
/*        */
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
