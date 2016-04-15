<?php

/* /blocks/phototheque/layout/displayCenterRight.twig */
class __TwigTemplate_777230538a20dac31832bb85d15ed11f50760b32e571664a053dbd69b4aa7214 extends Twig_Template
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
        echo "<div class=\"blocPhototheque\">
    <div class=\"imgClap\">
        <div class=\"titre\">Photo Vidéothèque :</div>
        <div class=\"content\">
            <ul>
                ";
        // line 6
        if (isset($context["categoriesphotos"])) { $_categoriesphotos_ = $context["categoriesphotos"]; } else { $_categoriesphotos_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_categoriesphotos_);
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 7
            echo "                    <li><a href=\"";
            if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
            echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
            echo "phototheque/";
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_photo_, "id", array()), "html", null, true);
            echo "\">> ";
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_photo_, "Nom", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "            </ul>
            <p class=\"more\"><a href=\"";
        // line 10
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "videotheque.html\">Voir la vidéothèque</a></p>    
        </div>
        <div class=\"triangle\"></div>
    </div>
</div>
            ";
    }

    public function getTemplateName()
    {
        return "/blocks/phototheque/layout/displayCenterRight.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  47 => 9,  31 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="blocPhototheque">*/
/*     <div class="imgClap">*/
/*         <div class="titre">Photo Vidéothèque :</div>*/
/*         <div class="content">*/
/*             <ul>*/
/*                 {% for photo in categoriesphotos %}*/
/*                     <li><a href="{{BASEURL}}phototheque/{{photo.id}}">> {{photo.Nom}}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*             <p class="more"><a href="{{BASEURL}}videotheque.html">Voir la vidéothèque</a></p>    */
/*         </div>*/
/*         <div class="triangle"></div>*/
/*     </div>*/
/* </div>*/
/*             */
