<?php

/* @culture-loisirs/modules/menus/layout/displayLeftColumn.twig */
class __TwigTemplate_92f0fd52dc799227d18117b9bf1944bddb2a2e15db01f23af0f200973a5e9b45 extends Twig_Template
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
        if (isset($context["pagemenu"])) { $_pagemenu_ = $context["pagemenu"]; } else { $_pagemenu_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_pagemenu_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 2
            echo "    ";
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            if (($this->getAttribute($_menu_, "position", array()) == "COL_LEFT_ONE")) {
                // line 3
                echo "        <div class='menuLeftInnerPage' id=\"menu-";
                if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "idMenu", array()), "html", null, true);
                echo "\">
            <div class=\"content\">
                <p class='titre'>";
                // line 5
                if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "nom", array()), "html", null, true);
                echo "</p>
                <div class=\"backBrown\">
                    ";
                // line 7
                if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                $this->loadTemplate("modules/menus/layout/depthMenu.twig", "@culture-loisirs/modules/menus/layout/displayLeftColumn.twig", 7)->display(array_merge($context, array("menu" => $_menu_)));
                // line 8
                echo "                </div>
            </div>
            
        </div>
        <div class=\"triangle-menu\"></div>
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@culture-loisirs/modules/menus/layout/displayLeftColumn.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  54 => 7,  48 => 5,  41 => 3,  37 => 2,  19 => 1,);
    }
}
/* {% for menu in pagemenu %}*/
/*     {% if menu.position=='COL_LEFT_ONE' %}*/
/*         <div class='menuLeftInnerPage' id="menu-{{menu.idMenu}}">*/
/*             <div class="content">*/
/*                 <p class='titre'>{{menu.nom}}</p>*/
/*                 <div class="backBrown">*/
/*                     {% include 'modules/menus/layout/depthMenu.twig' with {'menu': menu} %}*/
/*                 </div>*/
/*             </div>*/
/*             */
/*         </div>*/
/*         <div class="triangle-menu"></div>*/
/*     {% endif %}*/
/* {% endfor %}*/
