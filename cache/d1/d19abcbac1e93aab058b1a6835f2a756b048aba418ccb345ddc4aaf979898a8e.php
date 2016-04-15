<?php

/* global/footer.twig */
class __TwigTemplate_21c45922334654b19225f325bd8043912b4f59162efb3d6d017851f89567144c extends Twig_Template
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
        echo "<div class=\"blocFooter\">
    <div class=\"row rowfrise\"></div>
    <div class=\"row rowbreadcrumb\">
        <div class=\"col-xs-24 col-md-21 col-md-offset-3\">
            <p class=\"breadcrumb\">
                <a href=\"";
        // line 6
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "\">Accueil</a>
                ";
        // line 7
        if (isset($context["urlPage"])) { $_urlPage_ = $context["urlPage"]; } else { $_urlPage_ = null; }
        if (($_urlPage_ != "")) {
            // line 8
            echo "                    <a href=\"";
            if (isset($context["urlPage"])) { $_urlPage_ = $context["urlPage"]; } else { $_urlPage_ = null; }
            echo twig_escape_filter($this->env, $_urlPage_, "html", null, true);
            echo "\">";
            if (isset($context["NomPage"])) { $_NomPage_ = $context["NomPage"]; } else { $_NomPage_ = null; }
            echo twig_escape_filter($this->env, $_NomPage_, "html", null, true);
            echo "</a>
                ";
        }
        // line 10
        echo "                > Vous êtes ici</p>
        </div>    
    </div>
    <div class=\"row rowcontent\">
        <div class=\"col-xs-24 col-md-21 col-md-offset-3\"><h5>Mairie de Buzançais</h5></div>
        <div class=\"col-xs-24 col-md-21 col-md-offset-3\">
            <div class=\"col-xs-14 col-sm-14 col-md-8 nopaddding\">
                <div class=\"titreHoraire\">Horaires d'ouverture</div>
                <div class=\"contentHoraire\">";
        // line 18
        if (isset($context["coordonnees"])) { $_coordonnees_ = $context["coordonnees"]; } else { $_coordonnees_ = null; }
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute($_coordonnees_, "horaires", array()), "html", null, true));
        echo "</div>
                <div class=\"contentHoraire DetailHoraires\">
                    <div class=\"media\">
                        <div class=\"media-left\">
                          <i class=\"fa fa-home\"></i>
                        </div>
                        <div class=\"media-body\">
                          <p> ";
        // line 25
        if (isset($context["coordonnees"])) { $_coordonnees_ = $context["coordonnees"]; } else { $_coordonnees_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_coordonnees_, "adresse", array()), "html", null, true);
        echo "<br />
                            ";
        // line 26
        if (isset($context["coordonnees"])) { $_coordonnees_ = $context["coordonnees"]; } else { $_coordonnees_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_coordonnees_, "cp", array()), "html", null, true);
        echo " ";
        if (isset($context["coordonnees"])) { $_coordonnees_ = $context["coordonnees"]; } else { $_coordonnees_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_coordonnees_, "ville", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"media\">
                        <div class=\"media-left\">
                          <i class=\"fa fa-phone\"></i>
                        </div>
                        <div class=\"media-body\">
                          <p> Tél : ";
        // line 34
        if (isset($context["coordonnees"])) { $_coordonnees_ = $context["coordonnees"]; } else { $_coordonnees_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_coordonnees_, "tel", array()), "html", null, true);
        echo "<br />
                    Fax : ";
        // line 35
        if (isset($context["coordonnees"])) { $_coordonnees_ = $context["coordonnees"]; } else { $_coordonnees_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_coordonnees_, "fax", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"media\">
                        <div class=\"media-left\">
                          <i class=\"fa fa-envelope-o\"></i>
                        </div>
                        <div class=\"media-body\">
                          <p> <a href=\"mailto:";
        // line 43
        if (isset($context["coordonnees"])) { $_coordonnees_ = $context["coordonnees"]; } else { $_coordonnees_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_coordonnees_, "mail", array()), "html", null, true);
        echo "\">";
        if (isset($context["coordonnees"])) { $_coordonnees_ = $context["coordonnees"]; } else { $_coordonnees_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_coordonnees_, "mail", array()), "html", null, true);
        echo "</a></p>
                        </div>
                    </div>
                    
                </div>
                <div class=\"contentHoraire Sociaux\">
                    ";
        // line 49
        if (isset($context["sociaux"])) { $_sociaux_ = $context["sociaux"]; } else { $_sociaux_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_sociaux_);
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 50
            echo "                        ";
            if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
            if (($this->getAttribute($_s_, "lien", array()) != "")) {
                // line 51
                echo "                            ";
                if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
                if (($this->getAttribute($_s_, "nom", array()) == "Facebook")) {
                    // line 52
                    echo "                                <a href=\"";
                    if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_s_, "lien", array()), "html", null, true);
                    echo "\" target=\"_blank\"><img src=\"";
                    if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
                    echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
                    echo "/img/sociaux/facebook-logo-button.png\"></a>
                            ";
                }
                // line 54
                echo "                            ";
                if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
                if (($this->getAttribute($_s_, "nom", array()) == "Tweeter")) {
                    // line 55
                    echo "                                <a href=\"";
                    if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_s_, "lien", array()), "html", null, true);
                    echo "\" target=\"_blank\"><img src=\"";
                    if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
                    echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
                    echo "/img/sociaux/twitter-logo-button.png\"></a>
                            ";
                }
                // line 57
                echo "                            ";
                if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
                if (($this->getAttribute($_s_, "nom", array()) == "Google +")) {
                    // line 58
                    echo "                                <a href=\"";
                    if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_s_, "lien", array()), "html", null, true);
                    echo "\" target=\"_blank\"><img src=\"";
                    if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
                    echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
                    echo "/img/sociaux/google-plus-logo-button.png\"></a>
                            ";
                }
                // line 60
                echo "                        ";
            }
            // line 61
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </div>
            </div>
            <div class=\"col-xs-10 col-sm-10 col-md-5\">
                ";
        // line 65
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_menus_);
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 66
            echo "                    ";
            if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
            if (($this->getAttribute($_m_, "position", array()) == "COL_FOOTER_2")) {
                // line 67
                echo "                        <div class=\"titrePlan\">";
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_m_, "liens", array()), 0, array(), "array"), "NomMenu", array()), "html", null, true);
                echo "</div>
                        <div class=\"contentPlan\">
                            <ul>
                                ";
                // line 70
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_m_, "liens", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["menuLinks"]) {
                    // line 71
                    echo "                                    ";
                    if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                    if (($this->getAttribute($_menuLinks_, "type", array()) == 1)) {
                        // line 72
                        echo "                                        <li><a href=\"index.html\">";
                        if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_menuLinks_, "nom", array()), "html", null, true);
                        echo "</a></li>
                                    ";
                    } else {
                        // line 74
                        echo "                                        <li><a href=\"";
                        if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_menuLinks_, "url", array()), "html", null, true);
                        echo ".html\">";
                        if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_menuLinks_, "nom", array()), "html", null, true);
                        echo "</a></li>
                                    ";
                    }
                    // line 76
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuLinks'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                            </ul>
                        </div>
                    ";
            }
            // line 80
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                
            </div>
            <div class=\"hidden-xs hidden-sm col-md-11\">
                <div class=\"titreGMAP\">LOCALISER LA MAIRIE SUR GOOGLE MAP</div>
                <div class=\"contentGMAP\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.6994776993542!2d1.4198172150527348!3d46.88896044526841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fb7983d85274a5%3A0x257b171fe58d7a66!2s10+Avenue+de+la+R%C3%A9publique%2C+36500+Buzan%C3%A7ais!5e0!3m2!1sfr!2sfr!4v1456051768511\" width=\"100%\" height=\"280\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                </div>
                <div class=\"inscriptionNL\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"E-mail ...\" id=\"bottomNLinput\" aria-describedby=\"basic-addon-btn\">
                        <span class=\"input-group-addon\" id=\"basic-addon-btn\">
                            <button class=\"btn btn-special\" id=\"bottomNL\">Rejoindre</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <div class=\"row copyright\">
        <div class=\"col-xs-24\">Conception <a href=\"http://www.aubeaufixe.fr\" target=\"_blank\">www.aubeaufixe.fr</a> - TOUS DROITS RESERVES - 2016</div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "global/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 81,  234 => 80,  229 => 77,  223 => 76,  213 => 74,  206 => 72,  202 => 71,  197 => 70,  189 => 67,  185 => 66,  180 => 65,  175 => 62,  169 => 61,  166 => 60,  156 => 58,  152 => 57,  142 => 55,  138 => 54,  128 => 52,  124 => 51,  120 => 50,  115 => 49,  102 => 43,  90 => 35,  85 => 34,  70 => 26,  65 => 25,  54 => 18,  44 => 10,  34 => 8,  31 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="blocFooter">*/
/*     <div class="row rowfrise"></div>*/
/*     <div class="row rowbreadcrumb">*/
/*         <div class="col-xs-24 col-md-21 col-md-offset-3">*/
/*             <p class="breadcrumb">*/
/*                 <a href="{{BASEURL}}">Accueil</a>*/
/*                 {% if urlPage != '' %}*/
/*                     <a href="{{urlPage}}">{{NomPage}}</a>*/
/*                 {% endif %}*/
/*                 > Vous êtes ici</p>*/
/*         </div>    */
/*     </div>*/
/*     <div class="row rowcontent">*/
/*         <div class="col-xs-24 col-md-21 col-md-offset-3"><h5>Mairie de Buzançais</h5></div>*/
/*         <div class="col-xs-24 col-md-21 col-md-offset-3">*/
/*             <div class="col-xs-14 col-sm-14 col-md-8 nopaddding">*/
/*                 <div class="titreHoraire">Horaires d'ouverture</div>*/
/*                 <div class="contentHoraire">{{coordonnees.horaires|nl2br}}</div>*/
/*                 <div class="contentHoraire DetailHoraires">*/
/*                     <div class="media">*/
/*                         <div class="media-left">*/
/*                           <i class="fa fa-home"></i>*/
/*                         </div>*/
/*                         <div class="media-body">*/
/*                           <p> {{coordonnees.adresse}}<br />*/
/*                             {{coordonnees.cp}} {{coordonnees.ville}}</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media">*/
/*                         <div class="media-left">*/
/*                           <i class="fa fa-phone"></i>*/
/*                         </div>*/
/*                         <div class="media-body">*/
/*                           <p> Tél : {{coordonnees.tel}}<br />*/
/*                     Fax : {{coordonnees.fax}}</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media">*/
/*                         <div class="media-left">*/
/*                           <i class="fa fa-envelope-o"></i>*/
/*                         </div>*/
/*                         <div class="media-body">*/
/*                           <p> <a href="mailto:{{coordonnees.mail}}">{{coordonnees.mail}}</a></p>*/
/*                         </div>*/
/*                     </div>*/
/*                     */
/*                 </div>*/
/*                 <div class="contentHoraire Sociaux">*/
/*                     {% for s in sociaux %}*/
/*                         {% if s.lien!="" %}*/
/*                             {% if s.nom=="Facebook" %}*/
/*                                 <a href="{{s.lien}}" target="_blank"><img src="{{BASETHEME}}/img/sociaux/facebook-logo-button.png"></a>*/
/*                             {% endif %}*/
/*                             {% if s.nom=="Tweeter" %}*/
/*                                 <a href="{{s.lien}}" target="_blank"><img src="{{BASETHEME}}/img/sociaux/twitter-logo-button.png"></a>*/
/*                             {% endif %}*/
/*                             {% if s.nom=="Google +" %}*/
/*                                 <a href="{{s.lien}}" target="_blank"><img src="{{BASETHEME}}/img/sociaux/google-plus-logo-button.png"></a>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-xs-10 col-sm-10 col-md-5">*/
/*                 {% for m in menus %}*/
/*                     {% if m.position=='COL_FOOTER_2'%}*/
/*                         <div class="titrePlan">{{m.liens[0].NomMenu}}</div>*/
/*                         <div class="contentPlan">*/
/*                             <ul>*/
/*                                 {% for menuLinks in m.liens %}*/
/*                                     {% if menuLinks.type==1%}*/
/*                                         <li><a href="index.html">{{menuLinks.nom}}</a></li>*/
/*                                     {% else %}*/
/*                                         <li><a href="{{menuLinks.url}}.html">{{menuLinks.nom}}</a></li>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 */
/*             </div>*/
/*             <div class="hidden-xs hidden-sm col-md-11">*/
/*                 <div class="titreGMAP">LOCALISER LA MAIRIE SUR GOOGLE MAP</div>*/
/*                 <div class="contentGMAP">*/
/*                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.6994776993542!2d1.4198172150527348!3d46.88896044526841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fb7983d85274a5%3A0x257b171fe58d7a66!2s10+Avenue+de+la+R%C3%A9publique%2C+36500+Buzan%C3%A7ais!5e0!3m2!1sfr!2sfr!4v1456051768511" width="100%" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>*/
/*                 </div>*/
/*                 <div class="inscriptionNL">*/
/*                     <div class="input-group">*/
/*                         <input type="text" class="form-control" placeholder="E-mail ..." id="bottomNLinput" aria-describedby="basic-addon-btn">*/
/*                         <span class="input-group-addon" id="basic-addon-btn">*/
/*                             <button class="btn btn-special" id="bottomNL">Rejoindre</button>*/
/*                         </span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>    */
/*     </div>*/
/*     <div class="row copyright">*/
/*         <div class="col-xs-24">Conception <a href="http://www.aubeaufixe.fr" target="_blank">www.aubeaufixe.fr</a> - TOUS DROITS RESERVES - 2016</div>*/
/*     </div>*/
/* </div>*/
