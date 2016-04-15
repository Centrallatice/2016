<?php

/* /blocks/coordonnees/layout/displayTopRight.twig */
class __TwigTemplate_c4725c4eeb7bc74d9378a99b090a64955badc22e4de923c6bcb26974aac63745 extends Twig_Template
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
        echo "<div class=\"blocCoordonnesTR\">
    <p class=\"titre yellow\">Nos Coordonnées</p>
</div>
<div class=\"blocCoordonnesTRcontent\">
    <p>";
        // line 5
        if (isset($context["coordonnees"])) { $_coordonnees_ = $context["coordonnees"]; } else { $_coordonnees_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_coordonnees_, "nom", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 6
        if (isset($context["coordonnees"])) { $_coordonnees_ = $context["coordonnees"]; } else { $_coordonnees_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_coordonnees_, "adresse", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 7
        if (isset($context["coordonnees"])) { $_coordonnees_ = $context["coordonnees"]; } else { $_coordonnees_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_coordonnees_, "cp", array()), "html", null, true);
        echo " ";
        if (isset($context["coordonnees"])) { $_coordonnees_ = $context["coordonnees"]; } else { $_coordonnees_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_coordonnees_, "ville", array()), "html", null, true);
        echo "</p>
    <p class=\"yellow\">Tél : ";
        // line 8
        if (isset($context["coordonnees"])) { $_coordonnees_ = $context["coordonnees"]; } else { $_coordonnees_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_coordonnees_, "tel", array()), "html", null, true);
        echo "</p>
    <p class=\"yellow\">Fax : ";
        // line 9
        if (isset($context["coordonnees"])) { $_coordonnees_ = $context["coordonnees"]; } else { $_coordonnees_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_coordonnees_, "fax", array()), "html", null, true);
        echo "</p>
    <p class=\"brown\"><a href=\"mailto:";
        // line 10
        if (isset($context["coordonnees"])) { $_coordonnees_ = $context["coordonnees"]; } else { $_coordonnees_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_coordonnees_, "mail", array()), "html", null, true);
        echo "\">";
        if (isset($context["coordonnees"])) { $_coordonnees_ = $context["coordonnees"]; } else { $_coordonnees_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_coordonnees_, "mail", array()), "html", null, true);
        echo "</a></p>
    <p class=\"contact\"><a href=\"";
        // line 11
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "contact\">Nous contacter</a></p>
</div>
<div class=\"triangle-menu-right\"></div>";
    }

    public function getTemplateName()
    {
        return "/blocks/coordonnees/layout/displayTopRight.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  53 => 10,  48 => 9,  43 => 8,  35 => 7,  30 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="blocCoordonnesTR">*/
/*     <p class="titre yellow">Nos Coordonnées</p>*/
/* </div>*/
/* <div class="blocCoordonnesTRcontent">*/
/*     <p>{{coordonnees.nom}}</p>*/
/*     <p>{{coordonnees.adresse}}</p>*/
/*     <p>{{coordonnees.cp}} {{coordonnees.ville}}</p>*/
/*     <p class="yellow">Tél : {{coordonnees.tel}}</p>*/
/*     <p class="yellow">Fax : {{coordonnees.fax}}</p>*/
/*     <p class="brown"><a href="mailto:{{coordonnees.mail}}">{{coordonnees.mail}}</a></p>*/
/*     <p class="contact"><a href="{{BASEURL}}contact">Nous contacter</a></p>*/
/* </div>*/
/* <div class="triangle-menu-right"></div>*/
