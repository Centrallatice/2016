<?php

/* /modules/actualites/layout/displayCenterColumn.twig */
class __TwigTemplate_7e5c449967329ae60e0d3a17d024857b0248f9d3ad3b48c39318a73b04726fb0 extends Twig_Template
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
        echo "<div class=\"actualites-center\">
    <h1>Actualités</h1>
        <div class=\"owl-carousel\" id=\"owl-actualite\">
            ";
        // line 4
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
            // line 5
            echo "                ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            $context["loopDebut"] = ($this->getAttribute($_loop_, "index", array()) - 1);
            // line 6
            echo "                ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (($this->getAttribute($_loop_, "index", array()) > 1)) {
                // line 7
                echo "                    ";
                if (isset($context["loopDebut"])) { $_loopDebut_ = $context["loopDebut"]; } else { $_loopDebut_ = null; }
                if ((0 == $_loopDebut_ % 6)) {
                    // line 8
                    echo "                        <div class=\"blocCarousel\">
                    ";
                }
                // line 10
                echo "                ";
            } else {
                // line 11
                echo "                    <div class=\"blocCarousel\">
                ";
            }
            // line 13
            echo "                
                <div class=\"blocActualite sameheight ";
            // line 14
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ((0 == $this->getAttribute($_loop_, "index", array()) % 2)) {
                echo "borderLeft";
            }
            echo " ";
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->getAttribute($_actualite_, "CatNom", array()), array(" " => "-"))), "html", null, true);
            echo " col-xs-24 col-sm-24 col-md-12\"> 
                    ";
            // line 15
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            if ((($this->getAttribute($_actualite_, "image", array()) != "") &&  !(null === $this->getAttribute($_actualite_, "image", array())))) {
                echo " 
                        <img 
                        class=\"img img-responsive fancyboxme\" 
                        href=\"";
                // line 18
                if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                echo "public/upload/actuPicture/";
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "image", array()), "html", null, true);
                echo "\"
                        style=\"margin:auto;border:2px solid ";
                // line 19
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
                // line 20
                if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                echo "public/upload/actuPicture/300x300/";
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "image", array()), "html", null, true);
                echo "\">
                        <div class=\"triangle\" style=\"border-color: ";
                // line 21
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
                // line 22
                echo " 
                        
                        <img 
                        class=\"img img-responsive fancyboxme\" 
                        href=\"";
                // line 26
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "urlCarou", array()), "html", null, true);
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_actualite_, "contentCarou", array()), 0, array(), "array"), "imageFile", array()), "html", null, true);
                echo "\" 
                        style=\"margin:auto;border:2px solid ";
                // line 27
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
                // line 28
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "urlCarou", array()), "html", null, true);
                echo "300x300/";
                if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_actualite_, "contentCarou", array()), 0, array(), "array"), "imageFile", array()), "html", null, true);
                echo "\">
                        <div class=\"triangle\" style=\"border-color: ";
                // line 29
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
            // line 31
            echo "                    <div class=\"detailActualite\">
                        <div class=\"media\">
                            <div class=\"media-left\">
                                    <img class=\"media-object\" src=\"";
            // line 34
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
            // line 39
            if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            if ($this->getAttribute($_categories_, $this->getAttribute($_actualite_, "idCat", array()), array(), "array", true, true)) {
                // line 40
                echo "                                        <span style=\"color:";
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
            // line 41
            echo "    
                                    <br />
                                    ";
            // line 43
            if (isset($context["actualite"])) { $_actualite_ = $context["actualite"]; } else { $_actualite_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_actualite_, "dateEvenementFR", array()), "html", null, true);
            echo "
                                </h4>
                            </div>
                        </div>
                        <div class=\"resumeActivite\">
                            <a style=\"text-decoration:none\" href=\"";
            // line 48
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
                        <div class=\"readmoreActu\">
                            <a style=\"color:";
            // line 51
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
            // line 56
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (isset($context["actualites"])) { $_actualites_ = $context["actualites"]; } else { $_actualites_ = null; }
            if (((0 == $this->getAttribute($_loop_, "index", array()) % 6) || ($this->getAttribute($_loop_, "index", array()) == twig_length_filter($this->env, $_actualites_)))) {
                // line 57
                echo "                    </div>
                ";
            }
            // line 59
            echo "            ";
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
        // line 60
        echo "    </div>
    <div class=\"triangle-top\"></div>
</div>
<div class=\"triangle-bottom-actu\"></div>";
    }

    public function getTemplateName()
    {
        return "/modules/actualites/layout/displayCenterColumn.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 60,  277 => 59,  273 => 57,  269 => 56,  244 => 51,  228 => 48,  219 => 43,  215 => 41,  198 => 40,  194 => 39,  177 => 34,  172 => 31,  159 => 29,  151 => 28,  139 => 27,  132 => 26,  126 => 22,  113 => 21,  105 => 20,  93 => 19,  85 => 18,  78 => 15,  68 => 14,  65 => 13,  61 => 11,  58 => 10,  54 => 8,  50 => 7,  46 => 6,  42 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="actualites-center">*/
/*     <h1>Actualités</h1>*/
/*         <div class="owl-carousel" id="owl-actualite">*/
/*             {% for actualite in actualites %}*/
/*                 {% set loopDebut = loop.index-1 %}*/
/*                 {% if loop.index>1 %}*/
/*                     {% if loopDebut is divisible by(6) %}*/
/*                         <div class="blocCarousel">*/
/*                     {% endif %}*/
/*                 {% else %}*/
/*                     <div class="blocCarousel">*/
/*                 {% endif %}*/
/*                 */
/*                 <div class="blocActualite sameheight {% if loop.index is divisible by(2) %}borderLeft{% endif %} {{actualite.CatNom|replace({' ': '-'})|lower}} col-xs-24 col-sm-24 col-md-12"> */
/*                     {% if (actualite.image!='' and actualite.image is not null) %} */
/*                         <img */
/*                         class="img img-responsive fancyboxme" */
/*                         href="{{BASEURL}}public/upload/actuPicture/{{actualite.image}}"*/
/*                         style="margin:auto;border:2px solid {% if categories[actualite.idCat] is defined %}{{categories[actualite.idCat].color}}{% else %}navy{% endif %}"*/
/*                         src="{{BASEURL}}public/upload/actuPicture/300x300/{{actualite.image}}">*/
/*                         <div class="triangle" style="border-color: {% if categories[actualite.idCat] is defined %}{{categories[actualite.idCat].color}}{% else %}navy{% endif %} transparent transparent transparent"></div>*/
/*                     {% elseif (actualite.contentCarou|length>0 and actualite.idCarroussel is not null) %} */
/*                         */
/*                         <img */
/*                         class="img img-responsive fancyboxme" */
/*                         href="{{actualite.urlCarou}}{{actualite.contentCarou[0].imageFile}}" */
/*                         style="margin:auto;border:2px solid {% if categories[actualite.idCat] is defined %}{{categories[actualite.idCat].color}}{% else %}navy{% endif %}"*/
/*                         src="{{actualite.urlCarou}}300x300/{{actualite.contentCarou[0].imageFile}}">*/
/*                         <div class="triangle" style="border-color: {% if categories[actualite.idCat] is defined %}{{categories[actualite.idCat].color}}{% else %}navy{% endif %} transparent transparent transparent"></div>*/
/*                     {% endif %}*/
/*                     <div class="detailActualite">*/
/*                         <div class="media">*/
/*                             <div class="media-left">*/
/*                                     <img class="media-object" src="{% if categories[actualite.idCat] is defined %}{{BASEURL}}public/upload/actuIcone/40x40/{{categories[actualite.idCat].icone}}{% endif %} " alt="">*/
/*                                 */
/*                             </div>*/
/*                             <div class="media-body">*/
/*                                 <h4 class="media-heading">*/
/*                                     {% if categories[actualite.idCat] is defined %}*/
/*                                         <span style="color:{% if categories[actualite.idCat] is defined %}{{categories[actualite.idCat].color}}{% else %}navy{% endif %}">{{actualite.CatNom}}</span>*/
/*                                     {% endif %}    */
/*                                     <br />*/
/*                                     {{actualite.dateEvenementFR}}*/
/*                                 </h4>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="resumeActivite">*/
/*                             <a style="text-decoration:none" href="{{BASEURL}}actualite/{{actualite.urlCatNom}}/{{actualite.url}}.html">{{actualite.resume|truncate(255, true)}}</a>*/
/*                         </div>*/
/*                         <div class="readmoreActu">*/
/*                             <a style="color:{% if categories[actualite.idCat] is defined %}{{categories[actualite.idCat].color}}{% else %}navy{% endif %}" href="{{BASEURL}}actualite/{{actualite.urlCatNom}}/{{actualite.url}}.html">> Lire la suite</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 {% if (loop.index is divisible by(6) or loop.index==actualites|length)%}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*     </div>*/
/*     <div class="triangle-top"></div>*/
/* </div>*/
/* <div class="triangle-bottom-actu"></div>*/
