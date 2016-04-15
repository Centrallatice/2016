<?php

/* /modules/evenements/layout/displayLeftColumn.twig */
class __TwigTemplate_558a7dcc33d05a1b6776152182efb417c32f159406500054bb1ee1fa77772667 extends Twig_Template
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
        echo "<div class=\"blocAgendas\">
    <div id=\"titreAgendas\">Agenda</div>
    <div id=\"contentAgendas\">
        
        ";
        // line 5
        if (isset($context["agendas"])) { $_agendas_ = $context["agendas"]; } else { $_agendas_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_agendas_);
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 6
            echo "            <div class=\"slide\">
                <div id=\"titreAgenda\">";
            // line 7
            if (isset($context["evenement"])) { $_evenement_ = $context["evenement"]; } else { $_evenement_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_evenement_, "titre", array()), "html", null, true);
            echo "</div>
                ";
            // line 8
            if (isset($context["evenement"])) { $_evenement_ = $context["evenement"]; } else { $_evenement_ = null; }
            if (($this->getAttribute($_evenement_, "MemeJour", array()) == 0)) {
                echo " 
                    <div id=\"dateAgenda\">";
                // line 9
                if (isset($context["evenement"])) { $_evenement_ = $context["evenement"]; } else { $_evenement_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_evenement_, "dateEvenementFR", array()), "html", null, true);
                echo "</div>
                ";
            } else {
                // line 11
                echo "                    <div id=\"dateAgenda\">Du ";
                if (isset($context["evenement"])) { $_evenement_ = $context["evenement"]; } else { $_evenement_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_evenement_, "dateEvenementFR", array()), "html", null, true);
                echo " au ";
                if (isset($context["evenement"])) { $_evenement_ = $context["evenement"]; } else { $_evenement_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_evenement_, "dateEvenementFinFR", array()), "html", null, true);
                echo " </div>
                ";
            }
            // line 13
            echo "                <div id=\"contentAgenda\">";
            if (isset($context["evenement"])) { $_evenement_ = $context["evenement"]; } else { $_evenement_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_evenement_, "resume", array()), "html", null, true);
            echo "</div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
";
        // line 18
        echo "    <div id=\"moreagenda\"><a href='";
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "agenda.html'>> Visualiser l'agenda du mois</a></div>
</div>
<div class=\"footerTriangle\"></div>";
    }

    public function getTemplateName()
    {
        return "/modules/evenements/layout/displayLeftColumn.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  70 => 16,  59 => 13,  49 => 11,  43 => 9,  38 => 8,  33 => 7,  30 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="blocAgendas">*/
/*     <div id="titreAgendas">Agenda</div>*/
/*     <div id="contentAgendas">*/
/*         */
/*         {% for evenement in agendas %}*/
/*             <div class="slide">*/
/*                 <div id="titreAgenda">{{evenement.titre}}</div>*/
/*                 {% if evenement.MemeJour==0 %} */
/*                     <div id="dateAgenda">{{evenement.dateEvenementFR}}</div>*/
/*                 {% else %}*/
/*                     <div id="dateAgenda">Du {{evenement.dateEvenementFR}} au {{evenement.dateEvenementFinFR}} </div>*/
/*                 {% endif %}*/
/*                 <div id="contentAgenda">{{evenement.resume}}</div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* {#    {% if pdfAgendaEncours != false %} <div id="downloadPDFAgenda"><a href='{{pdfAgendaEncours}}' target="_blank">> Téléchargez l'agenda en PDF</a></div>{% endif %}#}*/
/*     <div id="moreagenda"><a href='{{BASEURL}}agenda.html'>> Visualiser l'agenda du mois</a></div>*/
/* </div>*/
/* <div class="footerTriangle"></div>*/
