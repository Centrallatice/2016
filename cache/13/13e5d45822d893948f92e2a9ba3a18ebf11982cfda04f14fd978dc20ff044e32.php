<?php

/* @famille/blocks/services/layout/displayMiniInnerColRight.twig */
class __TwigTemplate_57cb1ef203335803a53edefa03cb5ceb9b6ea19d03d5243edb55c0351eed1dda extends Twig_Template
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
        echo "<div class=\"blocMiniServices\">
    <div class=\"titre\">Les services les plus demandés</div>
    <div class=\"content\">
        <div class=\"col-xs-24 tuile\">
            <a href=\"";
        // line 5
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "nous-contacter.html\">
            <img src=\"";
        // line 6
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/services/img/icone-contact.png\" class=\"img\">
            Contact</a>
        </div>
        <div class=\"col-xs-24 tuile\">
            <a href=\"";
        // line 10
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "actualites.html\">
            <img src=\"";
        // line 11
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/services/img/icone-info.png\" class=\"img\">
            Actualités</a>
        </div>
        
        <div class=\"col-xs-24 tuile\">
            <a href=\"";
        // line 16
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "demarches-administratives.html\">
            <img src=\"";
        // line 17
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/services/img/icone-demarches.png\" class=\"img\">
            Démarches</a>
        </div>
            <div class=\"col-xs-24 tuile\">
            <a href=\"";
        // line 21
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "agenda.html\">
            <img src=\"";
        // line 22
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/services/img/icone-agenda.png\" class=\"img\">
            agenda</a>
        </div>
        <div class=\"col-xs-24 tuile\">
            <a href=\"";
        // line 26
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "marches-publics.html\">
                <img src=\"";
        // line 27
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/services/img/icone-marchepublic.png\" class=\"img\">
            Marché Public
            </a>
        </div>
        <div class=\"col-xs-24 tuile\">
            <a href=\"";
        // line 32
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "plan.html\">
            <img src=\"";
        // line 33
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/services/img/icone-plan.png\" class=\"img\">
            plan</a>
        </div>
        <div class=\"col-xs-24 tuile tuilebottom\">
            <a href=\"";
        // line 37
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "projets.html\">
            <img src=\"";
        // line 38
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/services/img/icone-realisation.png\" class=\"img\">
            Projets</a>
        </div>
        <div class=\"col-xs-24 tuile tuilebottom\">
            <a href=\"";
        // line 42
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "plan-local-durbanisme.html\">
            <img src=\"";
        // line 43
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/services/img/plan-urbanisation.png\" class=\"img\">
            PLU</a>
        </div>
    </div>
    <div class=\"triangle\"></div>
</div>
            ";
    }

    public function getTemplateName()
    {
        return "@famille/blocks/services/layout/displayMiniInnerColRight.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 43,  118 => 42,  110 => 38,  105 => 37,  97 => 33,  92 => 32,  83 => 27,  78 => 26,  70 => 22,  65 => 21,  57 => 17,  52 => 16,  43 => 11,  38 => 10,  30 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="blocMiniServices">*/
/*     <div class="titre">Les services les plus demandés</div>*/
/*     <div class="content">*/
/*         <div class="col-xs-24 tuile">*/
/*             <a href="{{BASEURL}}nous-contacter.html">*/
/*             <img src="{{BASETHEME}}/blocks/services/img/icone-contact.png" class="img">*/
/*             Contact</a>*/
/*         </div>*/
/*         <div class="col-xs-24 tuile">*/
/*             <a href="{{BASEURL}}actualites.html">*/
/*             <img src="{{BASETHEME}}/blocks/services/img/icone-info.png" class="img">*/
/*             Actualités</a>*/
/*         </div>*/
/*         */
/*         <div class="col-xs-24 tuile">*/
/*             <a href="{{BASEURL}}demarches-administratives.html">*/
/*             <img src="{{BASETHEME}}/blocks/services/img/icone-demarches.png" class="img">*/
/*             Démarches</a>*/
/*         </div>*/
/*             <div class="col-xs-24 tuile">*/
/*             <a href="{{BASEURL}}agenda.html">*/
/*             <img src="{{BASETHEME}}/blocks/services/img/icone-agenda.png" class="img">*/
/*             agenda</a>*/
/*         </div>*/
/*         <div class="col-xs-24 tuile">*/
/*             <a href="{{BASEURL}}marches-publics.html">*/
/*                 <img src="{{BASETHEME}}/blocks/services/img/icone-marchepublic.png" class="img">*/
/*             Marché Public*/
/*             </a>*/
/*         </div>*/
/*         <div class="col-xs-24 tuile">*/
/*             <a href="{{BASEURL}}plan.html">*/
/*             <img src="{{BASETHEME}}/blocks/services/img/icone-plan.png" class="img">*/
/*             plan</a>*/
/*         </div>*/
/*         <div class="col-xs-24 tuile tuilebottom">*/
/*             <a href="{{BASEURL}}projets.html">*/
/*             <img src="{{BASETHEME}}/blocks/services/img/icone-realisation.png" class="img">*/
/*             Projets</a>*/
/*         </div>*/
/*         <div class="col-xs-24 tuile tuilebottom">*/
/*             <a href="{{BASEURL}}plan-local-durbanisme.html">*/
/*             <img src="{{BASETHEME}}/blocks/services/img/plan-urbanisation.png" class="img">*/
/*             PLU</a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="triangle"></div>*/
/* </div>*/
/*             */
