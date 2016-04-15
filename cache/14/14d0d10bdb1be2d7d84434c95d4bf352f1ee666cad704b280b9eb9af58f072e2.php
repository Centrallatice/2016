<?php

/* modules/menus/layout/depthMenu.twig */
class __TwigTemplate_1ddc802fe5077721fada072dafa6b07c171d3fe22652cdc63b3eace1985ccaf6 extends Twig_Template
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
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_menu_, "liens", array())) > 0)) {
            // line 2
            echo "    <ul>
\t";
            // line 3
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_menu_, "liens", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["menuLinks"]) {
                // line 4
                echo "                ";
                if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                if (isset($context["idPage"])) { $_idPage_ = $context["idPage"]; } else { $_idPage_ = null; }
                $context["test"] = twig_child_is_actif($_menuLinks_, $_idPage_);
                echo " 
\t\t<li class=\"depth-";
                // line 5
                if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_menuLinks_, "depth", array()), "html", null, true);
                echo " ";
                if (isset($context["test"])) { $_test_ = $context["test"]; } else { $_test_ = null; }
                if (isset($context["idPage"])) { $_idPage_ = $context["idPage"]; } else { $_idPage_ = null; }
                if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                if (($_test_ || ($_idPage_ == $this->getAttribute($_menuLinks_, "idPage", array())))) {
                    echo " active ";
                }
                echo "\"><a href=\"";
                if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_menuLinks_, "url", array()), "html", null, true);
                echo ".html\">> ";
                if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_menuLinks_, "nom", array()), "html", null, true);
                echo "</a>
                               
                ";
                // line 7
                if (isset($context["test"])) { $_test_ = $context["test"]; } else { $_test_ = null; }
                if (isset($context["idPage"])) { $_idPage_ = $context["idPage"]; } else { $_idPage_ = null; }
                if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                if (($_test_ || ($_idPage_ == $this->getAttribute($_menuLinks_, "idPage", array())))) {
                    // line 8
                    echo "                    ";
                    if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                    $this->loadTemplate("modules/menus/layout/depthMenu.twig", "modules/menus/layout/depthMenu.twig", 8)->display(array_merge($context, array("menu" => $_menuLinks_)));
                    echo "                    
                ";
                }
                // line 10
                echo "                </li>
\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuLinks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/menus/layout/depthMenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 12,  83 => 10,  76 => 8,  71 => 7,  50 => 5,  43 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
/* {% if menu.liens|length>0 %}*/
/*     <ul>*/
/* 	{% for menuLinks in menu.liens %}*/
/*                 {% set test=(menuLinks|childactif(idPage)) %} */
/* 		<li class="depth-{{menuLinks.depth}} {% if (test or idPage == menuLinks.idPage) %} active {% endif %}"><a href="{{BASEURL}}{{menuLinks.url}}.html">> {{menuLinks.nom}}</a>*/
/*                                */
/*                 {% if (test or idPage == menuLinks.idPage) %}*/
/*                     {% include 'modules/menus/layout/depthMenu.twig' with {'menu': menuLinks} %}                    */
/*                 {% endif %}*/
/*                 </li>*/
/* 	{% endfor %}*/
/*     </ul>*/
/* {% endif %}*/
/* */
