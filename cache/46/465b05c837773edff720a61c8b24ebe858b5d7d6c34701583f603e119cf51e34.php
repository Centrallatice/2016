<?php

/* @culture-loisirs/modules/caroussel/layout/innerArticleDocs.twig */
class __TwigTemplate_606cab957ccb29b83efadc4c6dfeb31cc4f879c837ef63fa37ca2e7994ed37fa extends Twig_Template
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
    <div class=\"owl-horizontal blocDownload displayInnerArticle owl-center owl-docs\">
        ";
        // line 3
        if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_carou_);
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "                <div class=\"item\">
                    <div class=\"docDownload \">
                        <div class=\"docDownloadlink\">
                            <a href=\"";
            // line 7
            if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
            echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
            echo "public/upload/modules/blocDownload/pdf/";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_i_, "pdf", array()), "html", null, true);
            echo "\" target=\"_blank\"><img src=\"";
            if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
            echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
            echo "public/upload/modules/blocDownload/picture/";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_i_, "image", array()), "html", null, true);
            echo "\" border=\"0\" class=\"img img-responsive thumbnail\"></a>
                        </div>
                        <div class=\"description \">
                            <p class=\"docTitre\">";
            // line 10
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_i_, "titre", array()), "html", null, true);
            echo "</p>
                            <p class=\"docSSTitre\">";
            // line 11
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_i_, "sstitre", array()), "html", null, true);
            echo "</p>
                            <p class=\"docIntitule \">";
            // line 12
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_i_, "intitule", array()), "html", null, true);
            echo "</p>
                            <p class=\"docDownloadLink\"><a href=\"";
            // line 13
            if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
            echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
            echo "public/upload/modules/blocDownload/pdf/";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_i_, "pdf", array()), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"white\">></span> Visualiser et Télécharger ce document</a></p>
                        </div>
                        </div>
                </div>  
                    
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
   
</div>";
    }

    public function getTemplateName()
    {
        return "@culture-loisirs/modules/caroussel/layout/innerArticleDocs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  64 => 13,  59 => 12,  54 => 11,  49 => 10,  33 => 7,  28 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="caroussel innerarticlecarou">*/
/*     <div class="owl-horizontal blocDownload displayInnerArticle owl-center owl-docs">*/
/*         {% for i in carou %}*/
/*                 <div class="item">*/
/*                     <div class="docDownload ">*/
/*                         <div class="docDownloadlink">*/
/*                             <a href="{{BASEURL}}public/upload/modules/blocDownload/pdf/{{i.pdf}}" target="_blank"><img src="{{BASEURL}}public/upload/modules/blocDownload/picture/{{i.image}}" border="0" class="img img-responsive thumbnail"></a>*/
/*                         </div>*/
/*                         <div class="description ">*/
/*                             <p class="docTitre">{{i.titre}}</p>*/
/*                             <p class="docSSTitre">{{i.sstitre}}</p>*/
/*                             <p class="docIntitule ">{{i.intitule}}</p>*/
/*                             <p class="docDownloadLink"><a href="{{BASEURL}}public/upload/modules/blocDownload/pdf/{{i.pdf}}" target="_blank"><span class="white">></span> Visualiser et Télécharger ce document</a></p>*/
/*                         </div>*/
/*                         </div>*/
/*                 </div>  */
/*                     */
/*         {% endfor %}*/
/*     </div>*/
/*    */
/* </div>*/
