<?php

/* /modules/caroussel/layout/actualite.twig */
class __TwigTemplate_c4f24b2da1af1b0c50223e07f431d365a462c9b07b66faa3bab5a8502b8422b5 extends Twig_Template
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
    <div class=\"owl-one owl-center\">
        ";
        // line 3
        if (isset($context["carou"])) { $_carou_ = $context["carou"]; } else { $_carou_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_carou_);
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "                <div class=\"item\">
                    <a rel=\"";
            // line 5
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $_group_, "html", null, true);
            echo "\"
                       class=\"variousfancy\" 
                       href=\"";
            // line 7
            if (isset($context["repimg"])) { $_repimg_ = $context["repimg"]; } else { $_repimg_ = null; }
            echo twig_escape_filter($this->env, $_repimg_, "html", null, true);
            echo "/";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_i_, "imageFile", array()), "html", null, true);
            echo "\">
                       <img 
                           class=\"img img-fullwidth \" src=\"";
            // line 9
            if (isset($context["repimg"])) { $_repimg_ = $context["repimg"]; } else { $_repimg_ = null; }
            echo twig_escape_filter($this->env, $_repimg_, "html", null, true);
            echo "300x300/";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_i_, "imageFile", array()), "html", null, true);
            echo "\">
                       <div class=\"triangle-picture\"></div>
                    </a>
                </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/modules/caroussel/layout/actualite.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  46 => 9,  37 => 7,  31 => 5,  28 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="caroussel innerarticlecarou">*/
/*     <div class="owl-one owl-center">*/
/*         {% for i in carou %}*/
/*                 <div class="item">*/
/*                     <a rel="{{group}}"*/
/*                        class="variousfancy" */
/*                        href="{{repimg}}/{{i.imageFile}}">*/
/*                        <img */
/*                            class="img img-fullwidth " src="{{repimg}}300x300/{{i.imageFile}}">*/
/*                        <div class="triangle-picture"></div>*/
/*                     </a>*/
/*                 </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
