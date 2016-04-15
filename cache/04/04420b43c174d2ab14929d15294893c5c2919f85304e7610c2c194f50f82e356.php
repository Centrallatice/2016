<?php

/* 404.twig */
class __TwigTemplate_aebdb518ef1095380dc09906ba9c8a2ce5c948b58203a014953cee8468b4f632 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "404.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "OUPS ! Cette page n'existe pas";
    }

    // line 3
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["descriptionPage"])) { $_descriptionPage_ = $context["descriptionPage"]; } else { $_descriptionPage_ = null; }
        echo twig_escape_filter($this->env, $_descriptionPage_, "html", null, true);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        if (isset($context["motsclefsPage"])) { $_motsclefsPage_ = $context["motsclefsPage"]; } else { $_motsclefsPage_ = null; }
        echo twig_escape_filter($this->env, $_motsclefsPage_, "html", null, true);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/home.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 8
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/modules/blocdownload/css/blocdownload.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 9
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/coordonnees/css/coordonnees.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 10
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/services/css/services.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 11
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/blocks/phototheque/css/phototheque.css\" rel=\"stylesheet\" type=\"text/css\"/>
    
";
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->loadTemplate("global/header.twig", "404.twig", 19)->display($context);
        // line 20
        echo "    <div class=\"bloc-maincontainer\">
        <div class=\"row\">
            <div class=\"col-xs-24 bloc404\">
                <h1>
                    <div class='oups'>404</div>
                    OUPS la page que vous recherchez n'existe pas !
                    <p><a href='";
        // line 26
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "'>Je retourne à l'accueil</a></p>
                </h1>
            </div>
        </div>
        ";
        // line 30
        $this->loadTemplate("global/footer.twig", "404.twig", 30)->display($context);
        echo "    
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 30,  113 => 26,  105 => 20,  102 => 19,  99 => 18,  92 => 15,  89 => 14,  81 => 11,  76 => 10,  71 => 9,  66 => 8,  61 => 7,  56 => 6,  53 => 5,  46 => 4,  39 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends "base.twig" %}*/
/* {% block title %}OUPS ! Cette page n'existe pas{% endblock %}*/
/* {% block description %}{{descriptionPage}}{% endblock %}*/
/* {% block keywords %}{{motsclefsPage}}{% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{BASETHEME}}/css/home.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/modules/blocdownload/css/blocdownload.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/coordonnees/css/coordonnees.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/services/css/services.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/phototheque/css/phototheque.css" rel="stylesheet" type="text/css"/>*/
/*     */
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/*     */
/* {% block body %}*/
/*     {% include 'global/header.twig' %}*/
/*     <div class="bloc-maincontainer">*/
/*         <div class="row">*/
/*             <div class="col-xs-24 bloc404">*/
/*                 <h1>*/
/*                     <div class='oups'>404</div>*/
/*                     OUPS la page que vous recherchez n'existe pas !*/
/*                     <p><a href='{{BASEURL}}'>Je retourne à l'accueil</a></p>*/
/*                 </h1>*/
/*             </div>*/
/*         </div>*/
/*         {% include 'global/footer.twig' %}    */
/*     </div>*/
/*     */
/* {% endblock %}*/
/* */
/* */
