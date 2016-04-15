<?php

/* /articlesLayout/ONE_COL_IMG_ABOVE_TXT.twig */
class __TwigTemplate_bb54c2247405bc3d4ca48adf5d5e97c77c86a152c770f5ddba14a16cb5eac2cb extends Twig_Template
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
        echo "<section class=\"container-article col-xs-24 col-sm-12 col-md-8 sameheight\">
   ";
        // line 2
        if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
        if ($this->getAttribute($_arti_, "image", array())) {
            // line 3
            echo "        <div class=\"col-sm-24 hidden-xs\">
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
            echo "   <div class=\"col-sm-24 hidden-xs\">
       <div class=\"";
            // line 13
            if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_arti_, "contentCarou", array())) > 1)) {
                echo " owl-one ";
            }
            echo "\">
           ";
            // line 14
            if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_arti_, "contentCarou", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 15
                echo "               <div class=\"item\">
                  <a rel=\"";
                // line 16
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "idModule", array()), "html", null, true);
                echo "\"
                       class=\"fancyboxme\"
                       href=\"";
                // line 18
                if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "urlCarou", array()), "html", null, true);
                echo "/";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "imageFile", array()), "html", null, true);
                echo "\">
                       <img style=\"border:2px solid ";
                // line 19
                if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                echo "\" 
                            class=\"img img-fullwidth\"
                            src=\"";
                // line 21
                if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_arti_, "urlCarou", array()), "html", null, true);
                echo "/";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "imageFile", array()), "html", null, true);
                echo "\">
                       <div class=\"triangle-picture\" style=\"border-color: ";
                // line 22
                if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                echo " transparent transparent transparent;\"></div>
                       
                       <span style=\"font-style:italic;margin-top:2px;text-align:center;font-size:11px;display:block;
                       line-height:11px;color:";
                // line 25
                if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                echo "\"><strong>Cliquez sur la photo pour voir les photos</strong></span>
                    </a> 
               </div>
           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "       </div>    
   </div>    
   ";
        }
        // line 31
        echo " 
   <div class=\"col-xs-24\">
      <br />";
        // line 33
        if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
        echo $this->getAttribute($_arti_, "contenu", array());
        echo "
   </div>  
</section>
";
        // line 36
        if (isset($context["CompteurCol"])) { $_CompteurCol_ = $context["CompteurCol"]; } else { $_CompteurCol_ = null; }
        if (isset($context["artiTotal"])) { $_artiTotal_ = $context["artiTotal"]; } else { $_artiTotal_ = null; }
        if (((0 == $_CompteurCol_ % 3) && ($_artiTotal_ > $_CompteurCol_))) {
            // line 37
            echo "    <div class=\"row\">
        <div class=\"pointilleRose\"></div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/articlesLayout/ONE_COL_IMG_ABOVE_TXT.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 37,  134 => 36,  127 => 33,  123 => 31,  118 => 29,  107 => 25,  100 => 22,  92 => 21,  86 => 19,  78 => 18,  72 => 16,  69 => 15,  64 => 14,  57 => 13,  54 => 12,  47 => 9,  37 => 6,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
/* <section class="container-article col-xs-24 col-sm-12 col-md-8 sameheight">*/
/*    {% if arti.image %}*/
/*         <div class="col-sm-24 hidden-xs">*/
/*             <a class="fancyboxme" href="{{BASE_PATH_UPLOAD_URL}}/article/{{arti.image}}">*/
/*                 <img class="img img-fullwidth"*/
/*                      src="{{BASE_PATH_UPLOAD_URL}}/article/300x300/{{arti.image}}">*/
/*                 <div class="triangle-picture"></div>*/
/*             </a>*/
/*             <p class='legende'>{{arti.legende}}</p>*/
/*         </div>*/
/*    {% elseif (arti.idCaroussel and arti.contentCarou|length >0) %}*/
/*    <div class="col-sm-24 hidden-xs">*/
/*        <div class="{% if arti.contentCarou|length>1 %} owl-one {% endif %}">*/
/*            {% for i in arti.contentCarou %}*/
/*                <div class="item">*/
/*                   <a rel="{{i.idModule}}"*/
/*                        class="fancyboxme"*/
/*                        href="{{arti.urlCarou}}/{{i.imageFile}}">*/
/*                        <img style="border:2px solid {{dataPage.ColorCategorie}}" */
/*                             class="img img-fullwidth"*/
/*                             src="{{arti.urlCarou}}/{{i.imageFile}}">*/
/*                        <div class="triangle-picture" style="border-color: {{dataPage.ColorCategorie}} transparent transparent transparent;"></div>*/
/*                        */
/*                        <span style="font-style:italic;margin-top:2px;text-align:center;font-size:11px;display:block;*/
/*                        line-height:11px;color:{{dataPage.ColorCategorie}}"><strong>Cliquez sur la photo pour voir les photos</strong></span>*/
/*                     </a> */
/*                </div>*/
/*            {% endfor %}*/
/*        </div>    */
/*    </div>    */
/*    {% endif %} */
/*    <div class="col-xs-24">*/
/*       <br />{{arti.contenu|raw}}*/
/*    </div>  */
/* </section>*/
/* {% if (CompteurCol is divisible by(3) and artiTotal>CompteurCol) %}*/
/*     <div class="row">*/
/*         <div class="pointilleRose"></div>*/
/*     </div>*/
/* {% endif %}*/
