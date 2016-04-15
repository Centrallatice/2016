<?php

/* @culture-loisirs/modules/blocdownload/layout/displayRightColumn.twig */
class __TwigTemplate_5212eaed564c792b25f948968c0ec341633abce20c530190c44220ec5f31c7aa extends Twig_Template
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
        if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_m_, "documents", array())) > 0)) {
            // line 2
            echo "    <div class=\"blocDownload displayRightColumn ";
            if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
            if (($this->getAttribute($this->getAttribute($this->getAttribute($_m_, "documents", array()), 0, array(), "array"), "image", array()) != "")) {
                echo "BlocDLWithPicture";
            }
            echo "\">
        <div id='titreDownload'>";
            // line 3
            if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_m_, "nom", array()), "html", null, true);
            echo "</div>
        ";
            // line 4
            if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_m_, "documents", array()));
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
                echo "            ";
                if (isset($context["document"])) { $_document_ = $context["document"]; } else { $_document_ = null; }
                if (($this->getAttribute($_document_, "image", array()) != "")) {
                    // line 6
                    echo "                <div class=\"docDownload\">
                    <div class=\"docDownloadlink\">
                        <a href=\"";
                    // line 8
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
                    // line 11
                    if (isset($context["document"])) { $_document_ = $context["document"]; } else { $_document_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_document_, "titre", array()), "html", null, true);
                    echo "</p>
                        <p class=\"docSSTitre\">";
                    // line 12
                    if (isset($context["document"])) { $_document_ = $context["document"]; } else { $_document_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_document_, "sstitre", array()), "html", null, true);
                    echo "</p>
                        <p class=\"docIntitule\">";
                    // line 13
                    if (isset($context["document"])) { $_document_ = $context["document"]; } else { $_document_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_document_, "intitule", array()), "html", null, true);
                    echo "</p>
                        <p class=\"docDownloadLink\"><a href=\"";
                    // line 14
                    if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                    echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                    echo "public/upload/modules/blocDownload/pdf/";
                    if (isset($context["document"])) { $_document_ = $context["document"]; } else { $_document_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_document_, "pdf", array()), "html", null, true);
                    echo "\" target=\"_blank\"><span class=\"white\">></span> Visualiser et Télécharger ce document</a></p>
                    </div>
                </div>
            ";
                } else {
                    // line 18
                    echo "                <div class=\"media\">
                    <div class=\"media-left\">
                        <img class=\"media-object\" src=\"";
                    // line 20
                    if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                    echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                    echo "themes/default/modules/blocdownload/img/pdf-icones.png\">
                    </div>
                    <div class=\"media-body\">
                        <p class=\"docTitre\"><a href=\"";
                    // line 23
                    if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                    echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                    echo "public/upload/modules/blocDownload/pdf/";
                    if (isset($context["document"])) { $_document_ = $context["document"]; } else { $_document_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_document_, "pdf", array()), "html", null, true);
                    echo "\" target=\"_blank\">> ";
                    if (isset($context["document"])) { $_document_ = $context["document"]; } else { $_document_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_document_, "titre", array()), "html", null, true);
                    echo " ";
                    if (isset($context["document"])) { $_document_ = $context["document"]; } else { $_document_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_document_, "sstitre", array()), "html", null, true);
                    echo "</a></p>
                        <p class=\"docIntitule\"><a href=\"";
                    // line 24
                    if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                    echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                    echo "public/upload/modules/blocDownload/pdf/";
                    if (isset($context["document"])) { $_document_ = $context["document"]; } else { $_document_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_document_, "pdf", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    if (isset($context["document"])) { $_document_ = $context["document"]; } else { $_document_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_document_, "intitule", array()), "html", null, true);
                    echo "</a></p>
                    </div>
                </div>
            ";
                }
                // line 28
                echo "            ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (isset($context["headerModule"])) { $_headerModule_ = $context["headerModule"]; } else { $_headerModule_ = null; }
                if (($this->getAttribute($_loop_, "index", array()) < twig_length_filter($this->env, $this->getAttribute($_headerModule_, "documents", array())))) {
                    // line 29
                    echo "                <div class=\"pointilleRose\"></div>
            ";
                }
                // line 31
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
            // line 32
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@culture-loisirs/modules/blocdownload/layout/displayRightColumn.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 32,  151 => 31,  147 => 29,  142 => 28,  128 => 24,  114 => 23,  107 => 20,  103 => 18,  92 => 14,  87 => 13,  82 => 12,  77 => 11,  61 => 8,  57 => 6,  53 => 5,  35 => 4,  30 => 3,  22 => 2,  19 => 1,);
    }
}
/* {% if m.documents|length>0 %}*/
/*     <div class="blocDownload displayRightColumn {% if m.documents[0].image!=''%}BlocDLWithPicture{% endif %}">*/
/*         <div id='titreDownload'>{{m.nom}}</div>*/
/*         {% for document in m.documents %}*/
/*             {% if document.image != '' %}*/
/*                 <div class="docDownload">*/
/*                     <div class="docDownloadlink">*/
/*                         <a href="{{BASEURL}}public/upload/modules/blocDownload/pdf/{{document.pdf}}" target="_blank"><img src="{{BASEURL}}public/upload/modules/blocDownload/picture/{{document.image}}" border="0" class="img img-responsive thumbnail"></a>*/
/*                     </div>*/
/*                     <div class="description">*/
/*                         <p class="docTitre">{{document.titre}}</p>*/
/*                         <p class="docSSTitre">{{document.sstitre}}</p>*/
/*                         <p class="docIntitule">{{document.intitule}}</p>*/
/*                         <p class="docDownloadLink"><a href="{{BASEURL}}public/upload/modules/blocDownload/pdf/{{document.pdf}}" target="_blank"><span class="white">></span> Visualiser et Télécharger ce document</a></p>*/
/*                     </div>*/
/*                 </div>*/
/*             {% else %}*/
/*                 <div class="media">*/
/*                     <div class="media-left">*/
/*                         <img class="media-object" src="{{BASEURL}}themes/default/modules/blocdownload/img/pdf-icones.png">*/
/*                     </div>*/
/*                     <div class="media-body">*/
/*                         <p class="docTitre"><a href="{{BASEURL}}public/upload/modules/blocDownload/pdf/{{document.pdf}}" target="_blank">> {{document.titre}} {{document.sstitre}}</a></p>*/
/*                         <p class="docIntitule"><a href="{{BASEURL}}public/upload/modules/blocDownload/pdf/{{document.pdf}}" target="_blank">{{document.intitule}}</a></p>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if loop.index<headerModule.documents|length %}*/
/*                 <div class="pointilleRose"></div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endif %}*/
