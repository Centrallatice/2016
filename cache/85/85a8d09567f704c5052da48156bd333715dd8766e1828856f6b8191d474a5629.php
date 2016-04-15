<?php

/* /articlesLayout/ONE_COL_NO_IMG.twig */
class __TwigTemplate_ec911e7c79a3455f12fc34c3c9b0c73ddbd71ce44b02d022848951f5075be419 extends Twig_Template
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
        echo "<section class=\"container-article col-xs-24 onecolnoimg\">
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
        echo "        <div class='contenu-article'>
            ";
        // line 7
        if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_replace_filter($this->getAttribute($_arti_, "contenu", array()), array("http://www.buzancais.fr/2016/" => $_BASEURL_));
        echo "
        </div>
    </div>
</section>
";
        // line 11
        if (isset($context["arti"])) { $_arti_ = $context["arti"]; } else { $_arti_ = null; }
        if (($this->getAttribute($_arti_, "showPointille", array()) == 1)) {
            echo " <div class=\"pointilleRose\"></div> ";
        }
    }

    public function getTemplateName()
    {
        return "/articlesLayout/ONE_COL_NO_IMG.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  36 => 7,  33 => 6,  26 => 4,  23 => 3,  19 => 1,);
    }
}
/* <section class="container-article col-xs-24 onecolnoimg">*/
/*     <div class="col-xs-24">*/
/*         {% if (arti.titre and arti.titre!='' and arti.showTitle == 1) %}*/
/*             <div class="titrePageActu"><span>{{arti.titre}}</span></div><br />*/
/*         {% endif %}*/
/*         <div class='contenu-article'>*/
/*             {{arti.contenu |replace({'http://www.buzancais.fr/2016/':BASEURL})| raw}}*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* {% if arti.showPointille==1 %} <div class="pointilleRose"></div> {% endif %}*/
