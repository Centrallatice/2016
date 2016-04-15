<?php

/* global/mainMenu.twig */
class __TwigTemplate_c8c8479a2529ddefeefd8183e28ef0909465be40aa4ac3db34dd670668721de0 extends Twig_Template
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
        echo "<div class=\"row rowmainmenu\">
  <nav class=\"navbar navbar-default navbar-inverse\">
    <div class=\"navbar-header\">
      <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".js-navbar-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
        <a class=\"navbar-brand\" href=\"";
        // line 10
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "index.html\"><i class=\"fa fa-home fa-lg\"></i></a>
    </div>

    <div class=\"collapse navbar-collapse js-navbar-collapse\">
      <ul class=\"nav navbar-nav\">
        ";
        // line 15
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_menus_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 16
            echo "            ";
            $context["compteur"] = 1;
            // line 17
            echo "            ";
            if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
            if (($this->getAttribute($_m_, "position", array()) == "HEADER")) {
                // line 18
                echo "                ";
                if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
                if (isset($context["compteur"])) { $_compteur_ = $context["compteur"]; } else { $_compteur_ = null; }
                $this->loadTemplate("global/portionMenu.twig", "global/mainMenu.twig", 18)->display(array_merge($context, array("menu" => $this->getAttribute($_m_, "liens", array()), "cpt" => $_compteur_, "depth" => 0)));
                // line 19
                echo "            ";
            }
            // line 20
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "  
      </ul>
    </div>
  </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "global/mainMenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  69 => 19,  64 => 18,  60 => 17,  57 => 16,  39 => 15,  30 => 10,  19 => 1,);
    }
}
/* <div class="row rowmainmenu">*/
/*   <nav class="navbar navbar-default navbar-inverse">*/
/*     <div class="navbar-header">*/
/*       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*         <a class="navbar-brand" href="{{BASEURL}}index.html"><i class="fa fa-home fa-lg"></i></a>*/
/*     </div>*/
/* */
/*     <div class="collapse navbar-collapse js-navbar-collapse">*/
/*       <ul class="nav navbar-nav">*/
/*         {% for m in menus %}*/
/*             {% set compteur=1 %}*/
/*             {% if m.position=='HEADER'%}*/
/*                 {% include 'global/portionMenu.twig' with {'menu': m.liens,'cpt':compteur,'depth':0} %}*/
/*             {% endif %}*/
/*         {% endfor %}  */
/*       </ul>*/
/*     </div>*/
/*   </nav>*/
/* </div>*/
