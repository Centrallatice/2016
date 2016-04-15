<?php

/* /articlesLayout/TWO_COLS_IMG_LEFT_TITLE_RIGHT.twig */
class __TwigTemplate_2751cf17a4258d066491f43c4180c270c6e342263791299d160652cf443a66e6 extends Twig_Template
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
        echo "<section class=\"container-article col-xs-24\">
    ";
        // line 2
        if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
        if ($this->getAttribute($_arti_, "image", array())) {
            // line 3
            echo "        <div class=\"col-sm-24 col-md-8 hidden-xs\">
            <a class=\"fancyboxme\" href=\"";
            // line 4
            if (isset($context["BASE_PATH_UPLOAD_URL"])) { $_BASE_PATH_UPLOAD_URL_ = $context["BASE_PATH_UPLOAD_URL"]; } else { $_BASE_PATH_UPLOAD_URL_ = null; }
            echo twig_escape_filter($this->env, $_BASE_PATH_UPLOAD_URL_, "html", null, true);
            echo "/article/";
            if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "image", array()), "html", null, true);
            echo "\">
                <img class=\"img img-fullwidth\"
                     src=\"";
            // line 6
            if (isset($context["BASE_PATH_UPLOAD_URL"])) { $_BASE_PATH_UPLOAD_URL_ = $context["BASE_PATH_UPLOAD_URL"]; } else { $_BASE_PATH_UPLOAD_URL_ = null; }
            echo twig_escape_filter($this->env, $_BASE_PATH_UPLOAD_URL_, "html", null, true);
            echo "/article/300x300/";
            if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "image", array()), "html", null, true);
            echo "\">
                <div class=\"triangle-picture\"></div>
            </a>
            <p class='legende'>";
            // line 9
            if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "legende", array()), "html", null, true);
            echo "</p>
        </div>
    ";
        } elseif (($this->getAttribute($_arti_, "idCaroussel", array()) && (twig_length_filter($this->env, $this->getAttribute($_arti_, "contentCarou", array())) > 0))) {
            // line 12
            echo "       ";
            if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
            $this->loadTemplate("/modules/caroussel/layout/innerArticle.twig", "/articlesLayout/TWO_COLS_IMG_LEFT_TITLE_RIGHT.twig", 12)->display(array_merge($context, array("carou" => $this->getAttribute($_arti_, "contentCarou", array()), "repimg" => $this->getAttribute($_arti_, "urlCarou", array()))));
            // line 13
            echo "   ";
        }
        echo " 
    <div class=\"col-sm-24 col-md-16 hidden-xs\">
        ";
        // line 15
        if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
        if ((($this->getAttribute($_arti_, "titre", array()) && ($this->getAttribute($_arti_, "titre", array()) != "")) && ($this->getAttribute($_arti_, "showTitle", array()) == 1))) {
            // line 16
            echo "            <div class=\"titrePageActu\"><span>";
            if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "titre", array()), "html", null, true);
            echo "</span></div><br />
        ";
        }
        // line 18
        echo "        <div class='contenu-article'>
            ";
        // line 19
        if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_replace_filter($this->getAttribute($_arti_, "contenu", array()), array("http://www.buzancais.fr/2016/" => $_BASEURL_));
        echo "
        </div>
    </div>
</section>
";
        // line 23
        if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
        if (($this->getAttribute($_arti_, "showPointille", array()) == 1)) {
            echo " <div class=\"pointilleRose\"></div> ";
        }
    }

    public function getTemplateName()
    {
        return "/articlesLayout/TWO_COLS_IMG_LEFT_TITLE_RIGHT.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  77 => 19,  74 => 18,  67 => 16,  64 => 15,  58 => 13,  54 => 12,  47 => 9,  37 => 6,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
/* <section class="container-article col-xs-24">*/
/*     {% if arti.image %}*/
/*         <div class="col-sm-24 col-md-8 hidden-xs">*/
/*             <a class="fancyboxme" href="{{BASE_PATH_UPLOAD_URL}}/article/{{arti.image}}">*/
/*                 <img class="img img-fullwidth"*/
/*                      src="{{BASE_PATH_UPLOAD_URL}}/article/300x300/{{arti.image}}">*/
/*                 <div class="triangle-picture"></div>*/
/*             </a>*/
/*             <p class='legende'>{{arti.legende}}</p>*/
/*         </div>*/
/*     {% elseif (arti.idCaroussel and arti.contentCarou|length >0) %}*/
/*        {% include '/modules/caroussel/layout/innerArticle.twig'  with {carou:arti.contentCarou,repimg:arti.urlCarou} %}*/
/*    {% endif %} */
/*     <div class="col-sm-24 col-md-16 hidden-xs">*/
/*         {% if (arti.titre and arti.titre!='' and arti.showTitle == 1) %}*/
/*             <div class="titrePageActu"><span>{{arti.titre}}</span></div><br />*/
/*         {% endif %}*/
/*         <div class='contenu-article'>*/
/*             {{arti.contenu |replace({'http://www.buzancais.fr/2016/':BASEURL})| raw}}*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* {% if arti.showPointille==1 %} <div class="pointilleRose"></div> {% endif %}*/
