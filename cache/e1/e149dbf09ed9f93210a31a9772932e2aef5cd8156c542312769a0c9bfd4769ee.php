<?php

/* /modules/blocdownload/layout/displayLeftColumn.twig */
class __TwigTemplate_60e730f7f7f2e558fd7dfc55faff1b2b7ad52fa121ea06c993d228b448bd3970 extends Twig_Template
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
        if (isset($context["headerModule"])) { $_headerModule_ = $context["headerModule"]; } else { $_headerModule_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_headerModule_, "documents", array())) > 0)) {
            // line 2
            echo "    <div class=\"blocDownload displayLeftColumn\">
        <div id='titreDownload'>";
            // line 3
            if (isset($context["headerModule"])) { $_headerModule_ = $context["headerModule"]; } else { $_headerModule_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_headerModule_, "nom", array()), "html", null, true);
            echo "</div>
        ";
            // line 4
            if (isset($context["headerModule"])) { $_headerModule_ = $context["headerModule"]; } else { $_headerModule_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_headerModule_, "documents", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 5
                echo "            <div class=\"docDownload\">
                <div class=\"docDownloadlink\">
                    <a href=\"";
                // line 7
                if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                echo "public/upload/modules/blocDownload/pdf/";
                if (isset($context["document"])) { $_document_ = $context["document"]; } else { $_document_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_document_, "pdf", array()), "html", null, true);
                echo "\" target=\"_blank\"><img src=\"";
                if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                echo "public/upload/modules/blocDownload/picture/";
                if (isset($context["document"])) { $_document_ = $context["document"]; } else { $_document_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_document_, "image", array()), "html", null, true);
                echo "\" border=\"0\" class=\"img img-responsive thumbnail\"></a>
                </div>
                <div class=\"description\">
                    <p class=\"docTitre\">";
                // line 10
                if (isset($context["document"])) { $_document_ = $context["document"]; } else { $_document_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_document_, "titre", array()), "html", null, true);
                echo "</p>
                    <p class=\"docSSTitre\">";
                // line 11
                if (isset($context["document"])) { $_document_ = $context["document"]; } else { $_document_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_document_, "sstitre", array()), "html", null, true);
                echo "</p>
                    <p class=\"docIntitule\">";
                // line 12
                if (isset($context["document"])) { $_document_ = $context["document"]; } else { $_document_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_document_, "intitule", array()), "html", null, true);
                echo "</p>
                    <p class=\"docDownloadLink\"><a href=\"";
                // line 13
                if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                echo "public/upload/modules/blocDownload/pdf/";
                if (isset($context["document"])) { $_document_ = $context["document"]; } else { $_document_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_document_, "pdf", array()), "html", null, true);
                echo "\" target=\"_blank\"><span class=\"white\">></span> Visualiser et Télécharger ce document</a></p>
                </div>
            </div>
            ";
                // line 16
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (isset($context["headerModule"])) { $_headerModule_ = $context["headerModule"]; } else { $_headerModule_ = null; }
                if (($this->getAttribute($_loop_, "index", array()) < twig_length_filter($this->env, $this->getAttribute($_headerModule_, "documents", array())))) {
                    // line 17
                    echo "                <div class=\"pointilleRose\"></div>
            ";
                }
                // line 19
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/modules/blocdownload/layout/displayLeftColumn.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 20,  101 => 19,  97 => 17,  93 => 16,  83 => 13,  78 => 12,  73 => 11,  68 => 10,  52 => 7,  48 => 5,  30 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
/* {% if headerModule.documents|length>0 %}*/
/*     <div class="blocDownload displayLeftColumn">*/
/*         <div id='titreDownload'>{{headerModule.nom}}</div>*/
/*         {% for document in headerModule.documents %}*/
/*             <div class="docDownload">*/
/*                 <div class="docDownloadlink">*/
/*                     <a href="{{BASEURL}}public/upload/modules/blocDownload/pdf/{{document.pdf}}" target="_blank"><img src="{{BASEURL}}public/upload/modules/blocDownload/picture/{{document.image}}" border="0" class="img img-responsive thumbnail"></a>*/
/*                 </div>*/
/*                 <div class="description">*/
/*                     <p class="docTitre">{{document.titre}}</p>*/
/*                     <p class="docSSTitre">{{document.sstitre}}</p>*/
/*                     <p class="docIntitule">{{document.intitule}}</p>*/
/*                     <p class="docDownloadLink"><a href="{{BASEURL}}public/upload/modules/blocDownload/pdf/{{document.pdf}}" target="_blank"><span class="white">></span> Visualiser et Télécharger ce document</a></p>*/
/*                 </div>*/
/*             </div>*/
/*             {% if loop.index<headerModule.documents|length %}*/
/*                 <div class="pointilleRose"></div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endif %}*/
