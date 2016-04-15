<?php

/* global/portionMenu.twig */
class __TwigTemplate_4de844612d15315dd63b0d0a9bbc50c59feaba0da37da28eff6c08b42c524d3f extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_menu_);
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
            // line 2
            echo "    ";
            if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
            if (($this->getAttribute($_menuLinks_, "depth", array()) == 0)) {
                // line 3
                echo "        ";
                if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_menuLinks_, "liens", array())) > 0)) {
                    // line 4
                    echo "            <li class=\"dropdown mega-dropdown dropdown-";
                    if (isset($context["compteur"])) { $_compteur_ = $context["compteur"]; } else { $_compteur_ = null; }
                    echo twig_escape_filter($this->env, $_compteur_, "html", null, true);
                    echo "\">
                ";
                    // line 5
                    if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                    if (isset($context["dataPage"])) { $_dataPage_ = $context["dataPage"]; } else { $_dataPage_ = null; }
                    $context["testactive"] = twig_menu_child_is_actif($_menuLinks_, $this->getAttribute($_dataPage_, "idPage", array()));
                    // line 6
                    echo "                <a href=\"#\" id=\"";
                    if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_menuLinks_, "nom", array()), "html", null, true);
                    echo "\" class=\"dropdown-toggle ";
                    if (isset($context["testactive"])) { $_testactive_ = $context["testactive"]; } else { $_testactive_ = null; }
                    if ($_testactive_) {
                        echo " subactive ";
                    }
                    echo "\" data-toggle=\"dropdown\">";
                    if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_menuLinks_, "nom", array()), "html", null, true);
                    echo "</a>
                <ul class=\"dropdown-menu mega-dropdown-menu row\">
                    ";
                    // line 8
                    if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                    if ((twig_length_filter($this->env, $this->getAttribute($_menuLinks_, "liens", array())) > 0)) {
                        // line 9
                        echo "                        ";
                        if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_menuLinks_, "liens", array()));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["menuLinks1"]) {
                            // line 10
                            echo "                            <li class=\"innerLiDepth1";
                            if (isset($context["compteur"])) { $_compteur_ = $context["compteur"]; } else { $_compteur_ = null; }
                            if (($_compteur_ == 2)) {
                                echo " col-lg-5";
                            }
                            if (isset($context["compteur"])) { $_compteur_ = $context["compteur"]; } else { $_compteur_ = null; }
                            if (($_compteur_ == 1)) {
                                echo " col-lg-4";
                            }
                            echo "\">
                            
                                <ul>
                                    <li class=\"dropdown-header\">
                                        <a id=\"";
                            // line 14
                            if (isset($context["menuLinks1"])) { $_menuLinks1_ = $context["menuLinks1"]; } else { $_menuLinks1_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_menuLinks1_, "url", array()), "html", null, true);
                            echo "\" href=\"";
                            if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                            echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                            if (isset($context["menuLinks1"])) { $_menuLinks1_ = $context["menuLinks1"]; } else { $_menuLinks1_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_menuLinks1_, "url", array()), "html", null, true);
                            echo ".html\">";
                            if (isset($context["menuLinks1"])) { $_menuLinks1_ = $context["menuLinks1"]; } else { $_menuLinks1_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_menuLinks1_, "nom", array()), "html", null, true);
                            echo "</a>
                                    </li>
                                    ";
                            // line 16
                            if (isset($context["menuLinks1"])) { $_menuLinks1_ = $context["menuLinks1"]; } else { $_menuLinks1_ = null; }
                            $this->loadTemplate("global/menuDepthLast.twig", "global/portionMenu.twig", 16)->display(array_merge($context, array("menu" => $_menuLinks1_)));
                            // line 17
                            echo "                                </ul>
                            </li>
                        ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuLinks1'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 20
                        echo "                    ";
                    }
                    // line 21
                    echo "                </ul>
            </li>
        ";
                } else {
                    // line 24
                    echo "        <li class=\"no-dropdown\">
            <a id=\"";
                    // line 25
                    if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_menuLinks_, "url", array()), "html", null, true);
                    echo "\" href=\"";
                    if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
                    echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
                    if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_menuLinks_, "url", array()), "html", null, true);
                    echo ".html\">";
                    if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_menuLinks_, "nom", array()), "html", null, true);
                    echo "</a>
        </li>
        ";
                }
                // line 28
                echo "    ";
            }
            // line 29
            echo "    ";
            if (isset($context["compteur"])) { $_compteur_ = $context["compteur"]; } else { $_compteur_ = null; }
            $context["compteur"] = ($_compteur_ + 1);
            echo " 
";
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
    }

    public function getTemplateName()
    {
        return "global/portionMenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 29,  166 => 28,  151 => 25,  148 => 24,  143 => 21,  140 => 20,  124 => 17,  121 => 16,  107 => 14,  92 => 10,  73 => 9,  70 => 8,  55 => 6,  51 => 5,  45 => 4,  41 => 3,  37 => 2,  19 => 1,);
    }
}
/* {% for menuLinks in menu %}*/
/*     {% if menuLinks.depth==0 %}*/
/*         {% if menuLinks.liens|length>0 %}*/
/*             <li class="dropdown mega-dropdown dropdown-{{compteur}}">*/
/*                 {% set testactive=(menuLinks|menuchildactif(dataPage.idPage)) %}*/
/*                 <a href="#" id="{{menuLinks.nom}}" class="dropdown-toggle {% if testactive %} subactive {% endif %}" data-toggle="dropdown">{{menuLinks.nom}}</a>*/
/*                 <ul class="dropdown-menu mega-dropdown-menu row">*/
/*                     {% if menuLinks.liens|length>0 %}*/
/*                         {% for menuLinks1 in menuLinks.liens %}*/
/*                             <li class="innerLiDepth1{% if compteur==2 %} col-lg-5{% endif %}{% if compteur==1 %} col-lg-4{% endif %}">*/
/*                             */
/*                                 <ul>*/
/*                                     <li class="dropdown-header">*/
/*                                         <a id="{{menuLinks1.url}}" href="{{BASEURL}}{{menuLinks1.url}}.html">{{menuLinks1.nom}}</a>*/
/*                                     </li>*/
/*                                     {% include 'global/menuDepthLast.twig' with {'menu': menuLinks1} %}*/
/*                                 </ul>*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 </ul>*/
/*             </li>*/
/*         {% else %}*/
/*         <li class="no-dropdown">*/
/*             <a id="{{menuLinks.url}}" href="{{BASEURL}}{{menuLinks.url}}.html">{{menuLinks.nom}}</a>*/
/*         </li>*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     {% set compteur=compteur+1 %} */
/* {% endfor %}*/
