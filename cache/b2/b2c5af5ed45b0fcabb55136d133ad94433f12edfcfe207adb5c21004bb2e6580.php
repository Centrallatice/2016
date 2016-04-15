<?php

/* @famille/articlesLayout/ONE_COL_NO_TXT.twig */
class __TwigTemplate_842bfec0c4ccb8d443b8ce877647812c668cbddd05db990a930230350cf18982 extends Twig_Template
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
        echo "<section class=\"container-article col-xs-24 onecolnotxt\">
    <div class=\"col-xs-24\">
        ";
        // line 3
        if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
        if ((($this->getAttribute($_arti_, "titre", array()) && ($this->getAttribute($_arti_, "titre", array()) != "")) && ($this->getAttribute($_arti_, "showTitle", array()) == 1))) {
            // line 4
            echo "            <div class=\"titrePageActu\"><span>";
            if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "titre", array()), "html", null, true);
            echo "</span></div><br />
        ";
        }
        // line 6
        echo "        ";
        if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
        if ($this->getAttribute($_arti_, "image", array())) {
            // line 7
            echo "            <div class=\"col-sm-24 col-md-8 hidden-xs\">
                <a class=\"fancyboxme\" href=\"";
            // line 8
            if (isset($context["BASE_PATH_UPLOAD_URL"])) { $_BASE_PATH_UPLOAD_URL_ = $context["BASE_PATH_UPLOAD_URL"]; } else { $_BASE_PATH_UPLOAD_URL_ = null; }
            echo twig_escape_filter($this->env, $_BASE_PATH_UPLOAD_URL_, "html", null, true);
            echo "/article/";
            if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "image", array()), "html", null, true);
            echo "\">
                    <img class=\"img img-fullwidth\"
                         src=\"";
            // line 10
            if (isset($context["BASE_PATH_UPLOAD_URL"])) { $_BASE_PATH_UPLOAD_URL_ = $context["BASE_PATH_UPLOAD_URL"]; } else { $_BASE_PATH_UPLOAD_URL_ = null; }
            echo twig_escape_filter($this->env, $_BASE_PATH_UPLOAD_URL_, "html", null, true);
            echo "/article/300x300/";
            if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "image", array()), "html", null, true);
            echo "\">
                    <div class=\"triangle-picture\"></div>
                </a>
                <p class='legende'>";
            // line 13
            if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "legende", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        } elseif (($this->getAttribute($_arti_, "idCaroussel", array()) && (twig_length_filter($this->env, $this->getAttribute($_arti_, "contentCarou", array())) > 0))) {
            // line 16
            echo "            
            ";
            // line 17
            if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
            if (($this->getAttribute($_arti_, "typeCaroussel", array()) == "images")) {
                // line 18
                echo "                ";
                if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
                if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                $this->loadTemplate((("@" . $_themesRep_) . "/modules/caroussel/layout/innerArticle.twig"), "@famille/articlesLayout/ONE_COL_NO_TXT.twig", 18)->display(array_merge($context, array("carou" => $this->getAttribute($_arti_, "contentCarou", array()), "repimg" => $this->getAttribute($_arti_, "urlCarou", array()))));
                // line 19
                echo "            ";
            } elseif (($this->getAttribute($_arti_, "typeCaroussel", array()) == "documents")) {
                // line 20
                echo "                ";
                if (isset($context["themesRep"])) { $_themesRep_ = $context["themesRep"]; } else { $_themesRep_ = null; }
                if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                $this->loadTemplate((("@" . $_themesRep_) . "/modules/caroussel/layout/innerArticleDocs.twig"), "@famille/articlesLayout/ONE_COL_NO_TXT.twig", 20)->display(array_merge($context, array("carou" => $this->getAttribute($_arti_, "contentCarou", array()), "repimg" => $this->getAttribute($_arti_, "urlCarou", array()))));
                // line 21
                echo "            ";
            }
            // line 22
            echo "        ";
        }
        // line 23
        echo "    </div>
</section>
";
        // line 25
        if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
        if (($this->getAttribute($_arti_, "showPointille", array()) == 1)) {
            echo " <div class=\"pointilleRose\"></div> ";
        }
    }

    public function getTemplateName()
    {
        return "@famille/articlesLayout/ONE_COL_NO_TXT.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  91 => 23,  88 => 22,  85 => 21,  80 => 20,  77 => 19,  72 => 18,  69 => 17,  66 => 16,  59 => 13,  49 => 10,  40 => 8,  37 => 7,  33 => 6,  26 => 4,  23 => 3,  19 => 1,);
    }
}
/* <section class="container-article col-xs-24 onecolnotxt">*/
/*     <div class="col-xs-24">*/
/*         {% if (arti.titre and arti.titre!='' and arti.showTitle == 1) %}*/
/*             <div class="titrePageActu"><span>{{arti.titre}}</span></div><br />*/
/*         {% endif %}*/
/*         {% if arti.image %}*/
/*             <div class="col-sm-24 col-md-8 hidden-xs">*/
/*                 <a class="fancyboxme" href="{{BASE_PATH_UPLOAD_URL}}/article/{{arti.image}}">*/
/*                     <img class="img img-fullwidth"*/
/*                          src="{{BASE_PATH_UPLOAD_URL}}/article/300x300/{{arti.image}}">*/
/*                     <div class="triangle-picture"></div>*/
/*                 </a>*/
/*                 <p class='legende'>{{arti.legende}}</p>*/
/*             </div>*/
/*         {% elseif (arti.idCaroussel and arti.contentCarou|length >0) %}*/
/*             */
/*             {% if arti.typeCaroussel=='images' %}*/
/*                 {% include '@'~themesRep~'/modules/caroussel/layout/innerArticle.twig'  with {carou:arti.contentCarou,repimg:arti.urlCarou} %}*/
/*             {% elseif arti.typeCaroussel=='documents' %}*/
/*                 {% include '@'~themesRep~'/modules/caroussel/layout/innerArticleDocs.twig'  with {carou:arti.contentCarou,repimg:arti.urlCarou} %}*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     </div>*/
/* </section>*/
/* {% if arti.showPointille==1 %} <div class="pointilleRose"></div> {% endif %}*/
