<?php

/* agenda.twig */
class __TwigTemplate_8d830f59d41f77c26c13d6995b83f4b2bc5681a0870b36430072d972f0f5eef8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "agenda.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Agenda de la Ville de Buzancais";
    }

    // line 3
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["descriptionPage"])) { $_descriptionPage_ = $context["descriptionPage"]; } else { $_descriptionPage_ = null; }
        echo twig_escape_filter($this->env, $_descriptionPage_, "html", null, true);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        if (isset($context["motsclefsPage"])) { $_motsclefsPage_ = $context["motsclefsPage"]; } else { $_motsclefsPage_ = null; }
        echo twig_escape_filter($this->env, $_motsclefsPage_, "html", null, true);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/home.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 8
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel='stylesheet prefetch' href=\"";
        // line 9
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/services/css/services.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 10
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/agenda.css\" rel=\"stylesheet\" type=\"text/css\"/>
   
";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->loadTemplate("global/header.twig", "agenda.twig", 18)->display(array_merge($context, array("breadcrumbsarticle" => 1, "titleBread" => "Agenda")));
        // line 19
        echo "    <div class=\"bloc-container-inner blocAgenda\">
        <div class=\"row\">
            <div class=\"col-xs-24 col-sm-24 col-md-22\">
                <div class=\"media\">
                    <div class=\"media-left media-left-categorie\">
                        <img class=\"media-object\" src=\"";
        // line 24
        if (isset($context["BASEIMG"])) { $_BASEIMG_ = $context["BASEIMG"]; } else { $_BASEIMG_ = null; }
        echo twig_escape_filter($this->env, $_BASEIMG_, "html", null, true);
        echo "icone-agenda.png\">
                    </div>
                    <div class=\"media-body\">
                        <h2 class=\"media-heading\">
                            Agenda
                        </h2>
                        <div class=\"linebottomcat\"></div>
                    </div>
                </div>
                <fieldset class=\"choixAgenda\">
                    <form name=\"AGENDA\" method=\"post\" id=\"AGENDA\" class=\"form-inline\">
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                              <div class=\"input-group-addon\">Filtrez par agenda</div>
                              <select class=\"form-control\" id=\"choixType\" name=\"choixTypeAgenda\">
                                <option value=\"-1\">Tous les agendas</option>
                                ";
        // line 40
        if (isset($context["agendasCat"])) { $_agendasCat_ = $context["agendasCat"]; } else { $_agendasCat_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_agendasCat_);
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 41
            echo "                                    <option value=\"";
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_c_, "id", array()), "html", null, true);
            echo "\" ";
            if (isset($context["typeAgendaEnCours"])) { $_typeAgendaEnCours_ = $context["typeAgendaEnCours"]; } else { $_typeAgendaEnCours_ = null; }
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            if (($_typeAgendaEnCours_ == $this->getAttribute($_c_, "id", array()))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($_c_, "Nom", array())), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                            </select>  
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                              <div class=\"input-group-addon\">Filtrez par Mois</div>
                              <select class=\"form-control\" id=\"choixMois\" name=\"choixMois\">
                                <option value=\"-1\">Toutes les périodes</option>
                                ";
        // line 51
        if (isset($context["agendasMois"])) { $_agendasMois_ = $context["agendasMois"]; } else { $_agendasMois_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_agendasMois_);
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 52
            echo "                                    <option value=\"";
            if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_a_, "moisEvenement", array()) . "|") . $this->getAttribute($_a_, "anneeEvenement", array())), "html", null, true);
            echo "\" ";
            if (isset($context["moisAgendaEnCours"])) { $_moisAgendaEnCours_ = $context["moisAgendaEnCours"]; } else { $_moisAgendaEnCours_ = null; }
            if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
            if (($_moisAgendaEnCours_ == (($this->getAttribute($_a_, "moisEvenement", array()) . "|") . $this->getAttribute($_a_, "anneeEvenement", array())))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
            echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, $this->getAttribute($_a_, "moisFREvenement", array())) . " ") . $this->getAttribute($_a_, "anneeEvenement", array())), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                              </select>  
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
                    </form>
                </fieldset>
            </div>
            <div class=\"hidden-xs hidden-sm col-md-2 nopadding noPrint\">
                ";
        // line 62
        $this->loadTemplate("/blocks/services/layout/displayMiniInnerColRight.twig", "agenda.twig", 62)->display($context);
        // line 63
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-24 col-sm-24 col-md-22 contentAgenda\">
                ";
        // line 67
        list($context["moisencours"], $context["compteur"]) =         array("", 0);
        // line 68
        echo "                
                ";
        // line 69
        if (isset($context["agendas"])) { $_agendas_ = $context["agendas"]; } else { $_agendas_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_agendas_);
        foreach ($context['_seq'] as $context["_key"] => $context["agenda"]) {
            // line 70
            echo "                    ";
            if (isset($context["moisencours"])) { $_moisencours_ = $context["moisencours"]; } else { $_moisencours_ = null; }
            if (isset($context["agenda"])) { $_agenda_ = $context["agenda"]; } else { $_agenda_ = null; }
            if (($_moisencours_ != $this->getAttribute($_agenda_, "moisEvenement", array()))) {
                // line 71
                echo "                        ";
                if (isset($context["compteur"])) { $_compteur_ = $context["compteur"]; } else { $_compteur_ = null; }
                if (($_compteur_ != 0)) {
                    echo "</section>";
                }
                // line 72
                echo "                    
                        <section class=\"moisAgenda\">
                            <h3>";
                // line 74
                if (isset($context["agenda"])) { $_agenda_ = $context["agenda"]; } else { $_agenda_ = null; }
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($_agenda_, "moisEvenement", array())), "html", null, true);
                echo " ";
                if (isset($context["agenda"])) { $_agenda_ = $context["agenda"]; } else { $_agenda_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_agenda_, "anneeEvenement", array()), "html", null, true);
                echo "</h3>
                            ";
                // line 75
                if (isset($context["agenda"])) { $_agenda_ = $context["agenda"]; } else { $_agenda_ = null; }
                $context["moisencours"] = $this->getAttribute($_agenda_, "moisEvenement", array());
                // line 76
                echo "                            ";
                if (isset($context["compteur"])) { $_compteur_ = $context["compteur"]; } else { $_compteur_ = null; }
                $context["compteur"] = ($_compteur_ + 1);
                // line 77
                echo "                    ";
            }
            echo "   
                    <div class=\"detailMoisAgenda\">
                        <p class=\"titreEvenement\">";
            // line 79
            if (isset($context["agenda"])) { $_agenda_ = $context["agenda"]; } else { $_agenda_ = null; }
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($_agenda_, "titre", array())), "html", null, true);
            echo "</p>
                        ";
            // line 80
            if (isset($context["agenda"])) { $_agenda_ = $context["agenda"]; } else { $_agenda_ = null; }
            if (($this->getAttribute($_agenda_, "MemeJour", array()) == 0)) {
                echo " 
                            <p class=\"dateEvenementFR\">";
                // line 81
                if (isset($context["agenda"])) { $_agenda_ = $context["agenda"]; } else { $_agenda_ = null; }
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($_agenda_, "dateEvenementFR", array())), "html", null, true);
                echo "</p>
                        ";
            } else {
                // line 83
                echo "                            <p class=\"dateEvenementFR\">Du ";
                if (isset($context["agenda"])) { $_agenda_ = $context["agenda"]; } else { $_agenda_ = null; }
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($_agenda_, "dateEvenementFR", array())), "html", null, true);
                echo " au ";
                if (isset($context["agenda"])) { $_agenda_ = $context["agenda"]; } else { $_agenda_ = null; }
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($_agenda_, "dateEvenementFinFR", array())), "html", null, true);
                echo " </p>
                        ";
            }
            // line 85
            echo "
                        <p class=\"contenu\">";
            // line 86
            if (isset($context["agenda"])) { $_agenda_ = $context["agenda"]; } else { $_agenda_ = null; }
            echo $this->getAttribute($_agenda_, "contenu", array());
            echo "</p>
                    </div>
                    <div class=\"pointilleRose\"></div>        
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agenda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "            </div>
            
        </div>
        ";
        // line 94
        $this->loadTemplate("global/footer.twig", "agenda.twig", 94)->display($context);
        echo "    
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "agenda.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 94,  290 => 91,  278 => 86,  275 => 85,  265 => 83,  259 => 81,  254 => 80,  249 => 79,  243 => 77,  239 => 76,  236 => 75,  228 => 74,  224 => 72,  218 => 71,  213 => 70,  208 => 69,  205 => 68,  203 => 67,  197 => 63,  195 => 62,  185 => 54,  166 => 52,  161 => 51,  151 => 43,  132 => 41,  127 => 40,  107 => 24,  100 => 19,  97 => 18,  94 => 17,  87 => 14,  84 => 13,  76 => 10,  71 => 9,  66 => 8,  61 => 7,  56 => 6,  53 => 5,  46 => 4,  39 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends "base.twig" %}*/
/* {% block title %}Agenda de la Ville de Buzancais{% endblock %}*/
/* {% block description %}{{descriptionPage}}{% endblock %}*/
/* {% block keywords %}{{motsclefsPage}}{% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{BASETHEME}}/css/home.css" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASETHEME}}/css/toolbar.css" rel="stylesheet" type="text/css"/>*/
/*     <link rel='stylesheet prefetch' href="{{BASETHEME}}/blocks/services/css/services.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/css/agenda.css" rel="stylesheet" type="text/css"/>*/
/*    */
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/*     */
/* {% block body %}*/
/*     {% include 'global/header.twig' with{breadcrumbsarticle:1,titleBread:"Agenda"}%}*/
/*     <div class="bloc-container-inner blocAgenda">*/
/*         <div class="row">*/
/*             <div class="col-xs-24 col-sm-24 col-md-22">*/
/*                 <div class="media">*/
/*                     <div class="media-left media-left-categorie">*/
/*                         <img class="media-object" src="{{BASEIMG}}icone-agenda.png">*/
/*                     </div>*/
/*                     <div class="media-body">*/
/*                         <h2 class="media-heading">*/
/*                             Agenda*/
/*                         </h2>*/
/*                         <div class="linebottomcat"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <fieldset class="choixAgenda">*/
/*                     <form name="AGENDA" method="post" id="AGENDA" class="form-inline">*/
/*                         <div class="form-group">*/
/*                             <div class="input-group">*/
/*                               <div class="input-group-addon">Filtrez par agenda</div>*/
/*                               <select class="form-control" id="choixType" name="choixTypeAgenda">*/
/*                                 <option value="-1">Tous les agendas</option>*/
/*                                 {% for c in agendasCat %}*/
/*                                     <option value="{{c.id}}" {% if typeAgendaEnCours==c.id %} selected="selected" {% endif %}>{{c.Nom|capitalize}}</option>*/
/*                                 {% endfor %}*/
/*                             </select>  */
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="input-group">*/
/*                               <div class="input-group-addon">Filtrez par Mois</div>*/
/*                               <select class="form-control" id="choixMois" name="choixMois">*/
/*                                 <option value="-1">Toutes les périodes</option>*/
/*                                 {% for a in agendasMois %}*/
/*                                     <option value="{{a.moisEvenement~'|'~a.anneeEvenement}}" {% if moisAgendaEnCours==(a.moisEvenement~'|'~a.anneeEvenement) %} selected="selected" {% endif %}>{{a.moisFREvenement|capitalize~' '~a.anneeEvenement}}</option>*/
/*                                 {% endfor %}*/
/*                               </select>  */
/*                             </div>*/
/*                         </div>*/
/*                         <button type="submit" class="btn btn-primary">Valider</button>*/
/*                     </form>*/
/*                 </fieldset>*/
/*             </div>*/
/*             <div class="hidden-xs hidden-sm col-md-2 nopadding noPrint">*/
/*                 {% include '/blocks/services/layout/displayMiniInnerColRight.twig' %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-xs-24 col-sm-24 col-md-22 contentAgenda">*/
/*                 {% set moisencours,compteur='',0 %}*/
/*                 */
/*                 {% for agenda in agendas %}*/
/*                     {% if moisencours!=agenda.moisEvenement %}*/
/*                         {% if compteur!=0 %}</section>{% endif %}*/
/*                     */
/*                         <section class="moisAgenda">*/
/*                             <h3>{{agenda.moisEvenement|capitalize}} {{agenda.anneeEvenement}}</h3>*/
/*                             {% set moisencours=agenda.moisEvenement %}*/
/*                             {% set compteur=compteur+1 %}*/
/*                     {% endif %}   */
/*                     <div class="detailMoisAgenda">*/
/*                         <p class="titreEvenement">{{agenda.titre|capitalize}}</p>*/
/*                         {% if agenda.MemeJour==0 %} */
/*                             <p class="dateEvenementFR">{{agenda.dateEvenementFR|capitalize}}</p>*/
/*                         {% else %}*/
/*                             <p class="dateEvenementFR">Du {{agenda.dateEvenementFR|capitalize}} au {{agenda.dateEvenementFinFR|capitalize}} </p>*/
/*                         {% endif %}*/
/* */
/*                         <p class="contenu">{{agenda.contenu| raw}}</p>*/
/*                     </div>*/
/*                     <div class="pointilleRose"></div>        */
/*                     */
/*                 {% endfor %}*/
/*             </div>*/
/*             */
/*         </div>*/
/*         {% include 'global/footer.twig' %}    */
/*     </div>*/
/*     */
/* {% endblock %}*/
/* */
/* */
