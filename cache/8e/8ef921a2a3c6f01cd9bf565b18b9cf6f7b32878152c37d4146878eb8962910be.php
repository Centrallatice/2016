<?php

/* @culture-loisirs/modules/caroussel/layout/displayBottomPage.twig */
class __TwigTemplate_ae53ecd6b1bc1b43eb05637dfbb32a5355d30bbbda1f1a4a930fe51a57cd54fd extends Twig_Template
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
        echo "<div class=\"caroussel bottompage\">
    ";
        // line 2
        if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
        if (($this->getAttribute($_carou_, "showTitle", array()) == 1)) {
            echo "<div class=\"titre\"><span>";
            if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_carou_, "nom", array()), "html", null, true);
            echo "</span></div>";
        }
        // line 3
        echo "    <div class=\"owl-horizontal\">
        ";
        // line 4
        list($context["groupeencours"], $context["groupeadded"]) =         array(null, 0);
        // line 5
        echo "        
        ";
        // line 6
        if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_carou_, "pictures", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "            ";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            if (isset($context["groupeencours"])) { $_groupeencours_ = $context["groupeencours"]; } else { $_groupeencours_ = null; }
            if ((($this->getAttribute($_i_, "groupe", array()) == null) || ($this->getAttribute($_i_, "groupe", array()) != $_groupeencours_))) {
                // line 8
                echo "                
                <div class=\"item\">

                    <a ";
                // line 11
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (($this->getAttribute($_i_, "groupe", array()) != "")) {
                    echo " rel=\"";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_i_, "groupe", array()), "html", null, true);
                    echo "\" ";
                }
                // line 12
                echo "                       class=\"";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ((null === $this->getAttribute($_i_, "Contenu", array()))) {
                    echo "fancyboxme";
                } else {
                    echo "fancycontent";
                }
                echo "\" 
                       ";
                // line 13
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ( !(null === $this->getAttribute($_i_, "Contenu", array()))) {
                    echo " id=\"";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_i_, "id", array()), "html", null, true);
                    echo "\"";
                }
                // line 14
                echo "                       href=\"";
                if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_carou_, "rep", array()), "html", null, true);
                echo "/";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "imageFile", array()), "html", null, true);
                echo "\">
                       <img style=\"border:2px solid ";
                // line 15
                if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                echo "\" class=\"img img-fullwidth\"
                             src=\"";
                // line 16
                if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_carou_, "rep", array()), "html", null, true);
                echo "300x300/";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "imageFile", array()), "html", null, true);
                echo "\">
                       ";
                // line 17
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (($this->getAttribute($_i_, "libelle", array()) != "")) {
                    // line 18
                    echo "                           <span style=\"font-style:italic;margin-top:2px;text-align:center;font-size:11px;display:block;
                                 line-height:11px;color:";
                    // line 19
                    if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                    echo "\"><strong>";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_i_, "libelle", array()), "html", null, true);
                    echo "</strong></span>
                       ";
                }
                // line 21
                echo "                       ";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ( !(null === $this->getAttribute($_i_, "Contenu", array()))) {
                    // line 22
                    echo "                           <div class=\"knowmorecarou\" style=\"background-color:";
                    if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                    echo "\">En savoir plus</div>
                       ";
                }
                // line 24
                echo "                       <div class=\"triangle-picture\" style=\"border-color: ";
                if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                echo " transparent transparent transparent;\"></div>
                    </a>
                    <div style=\"display:none\" id=\"data-content-carou-";
                // line 26
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "id", array()), "html", null, true);
                echo "\">
                        ";
                // line 27
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo $this->getAttribute($_i_, "Contenu", array());
                echo "
                    </div>
                </div>
            ";
            }
            // line 30
            echo "    
                               
            ";
            // line 32
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["groupeencours"] = $this->getAttribute($_i_, "groupe", array());
            // line 33
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </div>
    ";
        // line 35
        list($context["groupeencours"], $context["groupeadded"]) =         array(null, 0);
        // line 36
        echo "    ";
        if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_carou_, "pictures", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 37
            echo "        ";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            if (isset($context["groupeencours"])) { $_groupeencours_ = $context["groupeencours"]; } else { $_groupeencours_ = null; }
            if ((($this->getAttribute($_i_, "groupe", array()) != null) && ($this->getAttribute($_i_, "groupe", array()) == $_groupeencours_))) {
                // line 38
                echo "            <a style=\"display:none\" rel=\"";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "groupe", array()), "html", null, true);
                echo "\"
                class=\"";
                // line 39
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ((null === $this->getAttribute($_i_, "Contenu", array()))) {
                    echo "fancyboxme";
                } else {
                    echo "fancycontent";
                }
                echo "\" 
                ";
                // line 40
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ( !(null === $this->getAttribute($_i_, "Contenu", array()))) {
                    echo " id=\"";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_i_, "id", array()), "html", null, true);
                    echo "\"";
                }
                // line 41
                echo "                href=\"";
                if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_carou_, "rep", array()), "html", null, true);
                echo "/";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "imageFile", array()), "html", null, true);
                echo "\">
                <img style=\"border:2px solid ";
                // line 42
                if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                echo "\" class=\"img img-fullwidth\"
                      src=\"";
                // line 43
                if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_carou_, "rep", array()), "html", null, true);
                echo "/";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "imageFile", array()), "html", null, true);
                echo "\">
                ";
                // line 44
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (($this->getAttribute($_i_, "libelle", array()) != "")) {
                    // line 45
                    echo "                    <span style=\"font-style:italic;margin-top:2px;text-align:center;font-size:11px;display:block;
                          line-height:11px;color:";
                    // line 46
                    if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                    echo "\"><strong>";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_i_, "libelle", array()), "html", null, true);
                    echo "</strong></span>
                ";
                }
                // line 48
                echo "                ";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ( !(null === $this->getAttribute($_i_, "Contenu", array()))) {
                    // line 49
                    echo "                    <div class=\"knowmorecarou\" style=\"background-color:";
                    if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                    echo "\">En savoir plus</div>
                    <div class=\"triangle-picture\" style=\"border-color: ";
                    // line 50
                    if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_dataPage_, "ColorCategorie", array()), "html", null, true);
                    echo " transparent transparent transparent;\"></div>
                ";
                }
                // line 52
                echo "             </a>
             <div style=\"display:none\" id=\"data-content-carou-";
                // line 53
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_i_, "id", array()), "html", null, true);
                echo "\">
                 ";
                // line 54
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo $this->getAttribute($_i_, "Contenu", array());
                echo "
             </div>
        ";
            }
            // line 56
            echo "  
        ";
            // line 57
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["groupeencours"] = $this->getAttribute($_i_, "groupe", array());
            // line 58
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
        return "@culture-loisirs/modules/caroussel/layout/displayBottomPage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 58,  270 => 57,  267 => 56,  260 => 54,  255 => 53,  252 => 52,  246 => 50,  240 => 49,  236 => 48,  227 => 46,  224 => 45,  221 => 44,  213 => 43,  208 => 42,  199 => 41,  191 => 40,  182 => 39,  176 => 38,  171 => 37,  165 => 36,  163 => 35,  160 => 34,  154 => 33,  151 => 32,  147 => 30,  139 => 27,  134 => 26,  127 => 24,  120 => 22,  116 => 21,  107 => 19,  104 => 18,  101 => 17,  93 => 16,  88 => 15,  79 => 14,  71 => 13,  61 => 12,  53 => 11,  48 => 8,  43 => 7,  38 => 6,  35 => 5,  33 => 4,  30 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="caroussel bottompage">*/
/*     {% if carou.showTitle==1 %}<div class="titre"><span>{{carou.nom}}</span></div>{%endif %}*/
/*     <div class="owl-horizontal">*/
/*         {% set groupeencours,groupeadded=null,0%}*/
/*         */
/*         {% for i in carou.pictures %}*/
/*             {% if (i.groupe==null or i.groupe!=groupeencours)%}*/
/*                 */
/*                 <div class="item">*/
/* */
/*                     <a {% if i.groupe!='' %} rel="{{i.groupe}}" {% endif %}*/
/*                        class="{% if i.Contenu is null %}fancyboxme{% else %}fancycontent{% endif %}" */
/*                        {% if i.Contenu is not null %} id="{{i.id}}"{% endif %}*/
/*                        href="{{carou.rep}}/{{i.imageFile}}">*/
/*                        <img style="border:2px solid {{dataPage.ColorCategorie}}" class="img img-fullwidth"*/
/*                              src="{{carou.rep}}300x300/{{i.imageFile}}">*/
/*                        {% if i.libelle!='' %}*/
/*                            <span style="font-style:italic;margin-top:2px;text-align:center;font-size:11px;display:block;*/
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
/*     {% for i in carou.pictures %}*/
/*         {% if (i.groupe!=null and i.groupe==groupeencours)%}*/
/*             <a style="display:none" rel="{{i.groupe}}"*/
/*                 class="{% if i.Contenu is null %}fancyboxme{% else %}fancycontent{% endif %}" */
/*                 {% if i.Contenu is not null %} id="{{i.id}}"{% endif %}*/
/*                 href="{{carou.rep}}/{{i.imageFile}}">*/
/*                 <img style="border:2px solid {{dataPage.ColorCategorie}}" class="img img-fullwidth"*/
/*                       src="{{carou.rep}}/{{i.imageFile}}">*/
/*                 {% if i.libelle!='' %}*/
/*                     <span style="font-style:italic;margin-top:2px;text-align:center;font-size:11px;display:block;*/
/*                           line-height:11px;color:{{dataPage.ColorCategorie}}"><strong>{{i.libelle}}</strong></span>*/
/*                 {% endif %}*/
/*                 {% if i.Contenu is not null %}*/
/*                     <div class="knowmorecarou" style="background-color:{{dataPage.ColorCategorie}}">En savoir plus</div>*/
/*                     <div class="triangle-picture" style="border-color: {{dataPage.ColorCategorie}} transparent transparent transparent;"></div>*/
/*                 {% endif %}*/
/*              </a>*/
/*              <div style="display:none" id="data-content-carou-{{i.id}}">*/
/*                  {{i.Contenu| raw}}*/
/*              </div>*/
/*         {% endif %}  */
/*         {% set groupeencours=i.groupe %}*/
/*     {% endfor %}             */
/*     */
/* </div>*/
