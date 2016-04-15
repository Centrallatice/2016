<?php

/* @famille/modules/caroussel/layout/innerArticle.twig */
class __TwigTemplate_efcf840572b614e2bd8869436698925e27a53efdd8c9f32ff63b1b9e59fff979 extends Twig_Template
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
        echo "<div class=\"caroussel innerarticlecarou\">
    <div class=\"owl-horizontal owl-center\">
        ";
        // line 3
        list($context["groupeencours"], $context["groupeadded"]) =         array(null, 0);
        // line 4
        echo "        ";
        if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_carou_);
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "            ";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            if (isset($context["groupeencours"])) { $_groupeencours_ = $context["groupeencours"]; } else { $_groupeencours_ = null; }
            if ((($this->getAttribute($_i_, "groupe", array()) == null) || ($this->getAttribute($_i_, "groupe", array()) != $_groupeencours_))) {
                // line 6
                echo "                <div class=\"item\">
                    <a ";
                // line 7
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (($this->getAttribute($_i_, "groupe", array()) != "")) {
                    echo " rel=\"";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_i_, "groupe", array()), "html", null, true);
                    echo "\" ";
                }
                // line 8
                echo "                       class=\"";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ((null === $this->getAttribute($_i_, "Contenu", array()))) {
                    echo "fancyboxme";
                } else {
                    echo "fancycontent";
                }
                echo "\" 
                       ";
                // line 9
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ( !(null === $this->getAttribute($_i_, "Contenu", array()))) {
                    echo " id=\"";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_i_, "id", array()), "html", null, true);
                    echo "\"";
                }
                // line 10
                echo "                       href=\"";
                if (isset($context["repimg"])) { $_repimg_ = $context["repimg"]; } else { $_repimg_ = null; }
                echo twig_escape_filter($this->env, $_repimg_, "html", null, true);
                echo "/";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "imageFile", array()), "html", null, true);
                echo "\">
                       <img style=\"border:2px solid ";
                // line 11
                if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                echo "\" class=\"img img-fullwidth\"
                             src=\"";
                // line 12
                if (isset($context["repimg"])) { $_repimg_ = $context["repimg"]; } else { $_repimg_ = null; }
                echo twig_escape_filter($this->env, $_repimg_, "html", null, true);
                echo "300x300/";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "imageFile", array()), "html", null, true);
                echo "\">
                       ";
                // line 13
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (($this->getAttribute($_i_, "libelle", array()) != "")) {
                    // line 14
                    echo "                           <span style=\"text-transform:uppercase;margin-top:8px;text-align:center;font-size:11px;display:block;
                                 line-height:11px;color:";
                    // line 15
                    if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                    echo "\"><strong>";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_i_, "libelle", array()), "html", null, true);
                    echo "</strong></span>
                       ";
                }
                // line 17
                echo "                       ";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ( !(null === $this->getAttribute($_i_, "Contenu", array()))) {
                    // line 18
                    echo "                           <div class=\"knowmorecarou\" style=\"background-color:";
                    if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                    echo "\">En savoir plus</div>
                       ";
                }
                // line 20
                echo "                       <div class=\"triangle-picture\" style=\"border-color: ";
                if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                echo " transparent transparent transparent;\"></div>
                    </a>
                    <div style=\"display:none\" id=\"data-content-carou-";
                // line 22
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "id", array()), "html", null, true);
                echo "\">
                        ";
                // line 23
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo $this->getAttribute($_i_, "Contenu", array());
                echo "
                    </div>
                </div>
            ";
            }
            // line 26
            echo "    
                               
            ";
            // line 28
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["groupeencours"] = $this->getAttribute($_i_, "groupe", array());
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </div>
    ";
        // line 31
        list($context["groupeencours"], $context["groupeadded"]) =         array(null, 0);
        // line 32
        echo "    ";
        if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_carou_);
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 33
            echo "        ";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            if (isset($context["groupeencours"])) { $_groupeencours_ = $context["groupeencours"]; } else { $_groupeencours_ = null; }
            if ((($this->getAttribute($_i_, "groupe", array()) != null) && ($this->getAttribute($_i_, "groupe", array()) == $_groupeencours_))) {
                // line 34
                echo "            <a style=\"display:none\" rel=\"";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "groupe", array()), "html", null, true);
                echo "\"
                class=\"";
                // line 35
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ((null === $this->getAttribute($_i_, "Contenu", array()))) {
                    echo "fancyboxme";
                } else {
                    echo "fancycontent";
                }
                echo "\" 
                ";
                // line 36
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ( !(null === $this->getAttribute($_i_, "Contenu", array()))) {
                    echo " id=\"";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_i_, "id", array()), "html", null, true);
                    echo "\"";
                }
                // line 37
                echo "                href=\"";
                if (isset($context["repimg"])) { $_repimg_ = $context["repimg"]; } else { $_repimg_ = null; }
                echo twig_escape_filter($this->env, $_repimg_, "html", null, true);
                echo "/";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "imageFile", array()), "html", null, true);
                echo "\">
                <img style=\"border:2px solid ";
                // line 38
                if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                echo "\" class=\"img img-fullwidth\"
                      src=\"";
                // line 39
                if (isset($context["repimg"])) { $_repimg_ = $context["repimg"]; } else { $_repimg_ = null; }
                echo twig_escape_filter($this->env, $_repimg_, "html", null, true);
                echo "/";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "imageFile", array()), "html", null, true);
                echo "\">
                ";
                // line 40
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (($this->getAttribute($_i_, "libelle", array()) != "")) {
                    // line 41
                    echo "                    <span style=\"font-style:italic;margin-top:2px;text-align:center;font-size:11px;display:block;
                          line-height:11px;color:";
                    // line 42
                    if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                    echo "\"><strong>";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_i_, "libelle", array()), "html", null, true);
                    echo "</strong></span>
                ";
                }
                // line 44
                echo "                ";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ( !(null === $this->getAttribute($_i_, "Contenu", array()))) {
                    // line 45
                    echo "                    <div class=\"knowmorecarou\" style=\"background-color:";
                    if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                    echo "\">En savoir plus</div>
                ";
                }
                // line 46
                echo " 
                <div class=\"triangle-picture\" style=\"border-color: ";
                // line 47
                if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                echo " transparent transparent transparent;\"></div>
                
             </a>
             <div style=\"display:none\" id=\"data-content-carou-";
                // line 50
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "id", array()), "html", null, true);
                echo "\">
                 ";
                // line 51
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo $this->getAttribute($_i_, "Contenu", array());
                echo "
             </div>
        ";
            }
            // line 53
            echo "  
        ";
            // line 54
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["groupeencours"] = $this->getAttribute($_i_, "groupe", array());
            // line 55
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "             
    
</div>";
    }

    public function getTemplateName()
    {
        return "@famille/modules/caroussel/layout/innerArticle.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 55,  258 => 54,  255 => 53,  248 => 51,  243 => 50,  236 => 47,  233 => 46,  226 => 45,  222 => 44,  213 => 42,  210 => 41,  207 => 40,  199 => 39,  194 => 38,  185 => 37,  177 => 36,  168 => 35,  162 => 34,  157 => 33,  151 => 32,  149 => 31,  146 => 30,  140 => 29,  137 => 28,  133 => 26,  125 => 23,  120 => 22,  113 => 20,  106 => 18,  102 => 17,  93 => 15,  90 => 14,  87 => 13,  79 => 12,  74 => 11,  65 => 10,  57 => 9,  47 => 8,  39 => 7,  36 => 6,  31 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="caroussel innerarticlecarou">*/
/*     <div class="owl-horizontal owl-center">*/
/*         {% set groupeencours,groupeadded=null,0%}*/
/*         {% for i in carou %}*/
/*             {% if (i.groupe==null or i.groupe!=groupeencours)%}*/
/*                 <div class="item">*/
/*                     <a {% if i.groupe!='' %} rel="{{i.groupe}}" {% endif %}*/
/*                        class="{% if i.Contenu is null %}fancyboxme{% else %}fancycontent{% endif %}" */
/*                        {% if i.Contenu is not null %} id="{{i.id}}"{% endif %}*/
/*                        href="{{repimg}}/{{i.imageFile}}">*/
/*                        <img style="border:2px solid {{dataPage.ColorCategorie}}" class="img img-fullwidth"*/
/*                              src="{{repimg}}300x300/{{i.imageFile}}">*/
/*                        {% if i.libelle!='' %}*/
/*                            <span style="text-transform:uppercase;margin-top:8px;text-align:center;font-size:11px;display:block;*/
/*                                  line-height:11px;color:{{dataPage.ColorCategorie}}"><strong>{{i.libelle}}</strong></span>*/
/*                        {% endif %}*/
/*                        {% if i.Contenu is not null %}*/
/*                            <div class="knowmorecarou" style="background-color:{{dataPage.ColorCategorie}}">En savoir plus</div>*/
/*                        {% endif %}*/
/*                        <div class="triangle-picture" style="border-color: {{dataPage.ColorCategorie}} transparent transparent transparent;"></div>*/
/*                     </a>*/
/*                     <div style="display:none" id="data-content-carou-{{i.id}}">*/
/*                         {{i.Contenu| raw}}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}    */
/*                                */
/*             {% set groupeencours=i.groupe %}*/
/*         {% endfor %}*/
/*     </div>*/
/*     {% set groupeencours,groupeadded=null,0%}*/
/*     {% for i in carou %}*/
/*         {% if (i.groupe!=null and i.groupe==groupeencours)%}*/
/*             <a style="display:none" rel="{{i.groupe}}"*/
/*                 class="{% if i.Contenu is null %}fancyboxme{% else %}fancycontent{% endif %}" */
/*                 {% if i.Contenu is not null %} id="{{i.id}}"{% endif %}*/
/*                 href="{{repimg}}/{{i.imageFile}}">*/
/*                 <img style="border:2px solid {{dataPage.ColorCategorie}}" class="img img-fullwidth"*/
/*                       src="{{repimg}}/{{i.imageFile}}">*/
/*                 {% if i.libelle!='' %}*/
/*                     <span style="font-style:italic;margin-top:2px;text-align:center;font-size:11px;display:block;*/
/*                           line-height:11px;color:{{dataPage.ColorCategorie}}"><strong>{{i.libelle}}</strong></span>*/
/*                 {% endif %}*/
/*                 {% if i.Contenu is not null %}*/
/*                     <div class="knowmorecarou" style="background-color:{{dataPage.ColorCategorie}}">En savoir plus</div>*/
/*                 {% endif %} */
/*                 <div class="triangle-picture" style="border-color: {{dataPage.ColorCategorie}} transparent transparent transparent;"></div>*/
/*                 */
/*              </a>*/
/*              <div style="display:none" id="data-content-carou-{{i.id}}">*/
/*                  {{i.Contenu| raw}}*/
/*              </div>*/
/*         {% endif %}  */
/*         {% set groupeencours=i.groupe %}*/
/*     {% endfor %}             */
/*     */
/* </div>*/
