<?php

/* global/menuDepthLast.twig */
class __TwigTemplate_be9f66c799a581f25ee6fa2322388068794fcf825d29924bf706d1d7318c1a8e extends Twig_Template
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
            echo "\t";
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
                // line 3
                echo "\t\t<li><a id=\"";
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
                echo "</a></li>
\t\t";
                // line 4
                if (isset($context["menuLinks"])) { $_menuLinks_ = $context["menuLinks"]; } else { $_menuLinks_ = null; }
                $this->loadTemplate("global/menuDepthLast.twig", "global/menuDepthLast.twig", 4)->display(array_merge($context, array("menu" => $_menuLinks_)));
                // line 5
                echo "\t";
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
    }

    public function getTemplateName()
    {
        return "global/menuDepthLast.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 5,  55 => 4,  41 => 3,  22 => 2,  19 => 1,);
    }
}
/* {% if menu.liens|length>0 %}*/
/* 	{% for menuLinks in menu.liens %}*/
/* 		<li><a id="{{menuLinks.url}}" href="{{BASEURL}}{{menuLinks.url}}.html">{{menuLinks.nom}}</a></li>*/
/* 		{% include 'global/menuDepthLast.twig' with {'menu': menuLinks} %}*/
/* 	{% endfor %}*/
/* {% endif %}*/
