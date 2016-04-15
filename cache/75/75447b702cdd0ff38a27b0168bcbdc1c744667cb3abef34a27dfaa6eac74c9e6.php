<?php

/* /modules/actualite/layout/displayCenterColumn.twig */
class __TwigTemplate_1f591734313d9ceb1ad3676b089a2ac64dda8a8e5bc753cb1bb576af0056b423 extends Twig_Template
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
        echo "<div class=\"inneractualite\">
    <div class=\"media\">
        <div class=\"media-left media-left-categorie\">
            <img class=\"media-object\" src=\"";
        // line 4
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
    <h1>";
        // line 13
        if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "titre", array()), "html", null, true);
        echo "</h1>
    <h4>Publié le ";
        // line 14
        if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "dateEvenementFR", array()), "html", null, true);
        echo " - Par le service communication</h4>
    ";
        // line 15
        if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
        if ((($this->getAttribute($_actualite_, "image", array()) != "") &&  !(null === $this->getAttribute($_actualite_, "image", array())))) {
            echo " 
        <div class=\"media\">
            <div class=\"media-left\">
                 <a rel=\"actu\"
                       class=\"variousfancy\" 
                       href=\"";
            // line 20
            if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
            echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
            echo "public/upload/actuPicture/";
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "image", array()), "html", null, true);
            echo "\">
                <img 
                    class=\"img media-object media-article\" 
                    src=\"";
            // line 23
            if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
            echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
            echo "public/upload/actuPicture/300x300/";
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "image", array()), "html", null, true);
            echo "\">
                </a>
                <div class='triangle-picture'></div>
                </div>
            <div class=\"media-body contenu-article\">";
            // line 27
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            echo $this->getAttribute($_actualite_, "contenu", array());
            echo "</div>
        </div>
    ";
        } elseif (((twig_length_filter($this->env, $this->getAttribute($_actualite_, "contentCarou", array())) > 0) &&  !(null === $this->getAttribute($_actualite_, "idCarroussel", array())))) {
            // line 29
            echo " 
        <div class=\"row\">
            <div class=\"col-xs-8\">
                ";
            // line 32
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            $this->loadTemplate("/modules/caroussel/layout/actualite.twig", "/modules/actualite/layout/displayCenterColumn.twig", 32)->display(array_merge($context, array("carou" => $this->getAttribute($_actualite_, "contentCarou", array()), "repimg" => $this->getAttribute($_actualite_, "urlCarou", array()), "group" => $this->getAttribute($_actualite_, "url", array()))));
            // line 33
            echo "            </div>
            <div class=\"col-xs-15 contenu-article\">
                ";
            // line 35
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            echo $this->getAttribute($_actualite_, "contenu", array());
            echo "
            </div>
        </div>
    ";
        }
        // line 39
        echo "    <div class=\"row noPrint\">
        <div class=\"col-xs-24 col-sm-6 col-sm-offset-18\">
            <div class=\"media mediaback\">
            <div class=\"media-left\"><img 
                    class=\"img media-object\" 
                    src=\"";
        // line 44
        if (isset($context["BASEIMG"])) { $_BASEIMG_ = $context["BASEIMG"]; } else { $_BASEIMG_ = null; }
        echo twig_escape_filter($this->env, $_BASEIMG_, "html", null, true);
        echo "icone-loupe.png\">
                </div>
                <div class=\"media-body\"><a href=\"";
        // line 46
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "actualites.html\">> Retour aux actualités</a></div>
        </div>
        </div>
    </div>
</div>
<div class=\"pageractualite noPrint\">
    <ul class=\"pager\">
        <li><a href=\"";
        // line 53
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "actualite/";
        if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pager_, "prev", array()), "urlCatNom", array()), "html", null, true);
        echo "/";
        if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pager_, "prev", array()), "url", array()), "html", null, true);
        echo ".html\">< Précèdent</a></li>
        <li><a href=\"";
        // line 54
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "actualite/";
        if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pager_, "next", array()), "urlCatNom", array()), "html", null, true);
        echo "/";
        if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_pager_, "next", array()), "url", array()), "html", null, true);
        echo ".html\">Suivant ></a></li>
       
    </ul></div>
    
    ";
    }

    public function getTemplateName()
    {
        return "/modules/actualite/layout/displayCenterColumn.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 54,  128 => 53,  117 => 46,  111 => 44,  104 => 39,  96 => 35,  92 => 33,  89 => 32,  84 => 29,  77 => 27,  66 => 23,  56 => 20,  47 => 15,  42 => 14,  37 => 13,  24 => 4,  19 => 1,);
    }
}
/* <div class="inneractualite">*/
/*     <div class="media">*/
/*         <div class="media-left media-left-categorie">*/
/*             <img class="media-object" src="{{BASEIMG}}icone-actualites.png">*/
/*         </div>*/
/*         <div class="media-body">*/
/*             <h2 class="media-heading">*/
/*                 Nos Actualités*/
/*             </h2>*/
/*             <div class="linebottomcat"></div>*/
/*         </div>*/
/*     </div>*/
/*     <h1>{{actualite.titre}}</h1>*/
/*     <h4>Publié le {{actualite.dateEvenementFR}} - Par le service communication</h4>*/
/*     {% if (actualite.image!='' and actualite.image is not null) %} */
/*         <div class="media">*/
/*             <div class="media-left">*/
/*                  <a rel="actu"*/
/*                        class="variousfancy" */
/*                        href="{{BASEURL}}public/upload/actuPicture/{{actualite.image}}">*/
/*                 <img */
/*                     class="img media-object media-article" */
/*                     src="{{BASEURL}}public/upload/actuPicture/300x300/{{actualite.image}}">*/
/*                 </a>*/
/*                 <div class='triangle-picture'></div>*/
/*                 </div>*/
/*             <div class="media-body contenu-article">{{actualite.contenu|raw}}</div>*/
/*         </div>*/
/*     {% elseif (actualite.contentCarou|length>0 and actualite.idCarroussel is not null) %} */
/*         <div class="row">*/
/*             <div class="col-xs-8">*/
/*                 {% include '/modules/caroussel/layout/actualite.twig'  with {carou:actualite.contentCarou,repimg:actualite.urlCarou,group:actualite.url} %}*/
/*             </div>*/
/*             <div class="col-xs-15 contenu-article">*/
/*                 {{actualite.contenu|raw}}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/*     <div class="row noPrint">*/
/*         <div class="col-xs-24 col-sm-6 col-sm-offset-18">*/
/*             <div class="media mediaback">*/
/*             <div class="media-left"><img */
/*                     class="img media-object" */
/*                     src="{{BASEIMG}}icone-loupe.png">*/
/*                 </div>*/
/*                 <div class="media-body"><a href="{{BASEURL}}actualites.html">> Retour aux actualités</a></div>*/
/*         </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="pageractualite noPrint">*/
/*     <ul class="pager">*/
/*         <li><a href="{{BASEURL}}actualite/{{pager.prev.urlCatNom}}/{{pager.prev.url}}.html">< Précèdent</a></li>*/
/*         <li><a href="{{BASEURL}}actualite/{{pager.next.urlCatNom}}/{{pager.next.url}}.html">Suivant ></a></li>*/
/*        */
/*     </ul></div>*/
/*     */
/*     */
