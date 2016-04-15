<?php

/* base.twig */
class __TwigTemplate_7bf918bf85d8fd097ea8c5f4a6f8239c25d0a14ab08c2272de9c83db272ec3c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'ogdata' => array($this, 'block_ogdata'),
            'bodyclass' => array($this, 'block_bodyclass'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        if (isset($context["BASEPATH"])) { $_BASEPATH_ = $context["BASEPATH"]; } else { $_BASEPATH_ = null; }
        echo twig_escape_filter($this->env, $_BASEPATH_, "html", null, true);
        echo "themes/default/img/favicon.png\" />
        <meta name=\"description\" content=\"";
        // line 12
        $this->displayBlock('description', $context, $blocks);
        echo "\">
        <meta name=\"keywords\" content=\"";
        // line 13
        $this->displayBlock('keywords', $context, $blocks);
        echo "\">
        
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,400italic,300italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
\t<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet prefetch' type='text/css'>
        ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "        ";
        $this->displayBlock('ogdata', $context, $blocks);
        // line 36
        echo "        <link href=\"";
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/fonts.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <script src=\"";
        // line 37
        if (isset($context["BASEJS"])) { $_BASEJS_ = $context["BASEJS"]; } else { $_BASEJS_ = null; }
        echo twig_escape_filter($this->env, $_BASEJS_, "html", null, true);
        echo "vendor/modernizr-2.8.3-respond-1.4.2.min.js\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\">
            var basePATH = '";
        // line 39
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "';
        </script>
    </head>
    <body class=\"";
        // line 42
        $this->displayBlock('bodyclass', $context, $blocks);
        echo "\">
        <div class=\"pixel-when-modal\"></div>
        <!--[if lt IE 8]>
            <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <a class=\"noPrint\" href=\"modals/modalNewsletter.twig\"></a>
        ";
        // line 48
        $this->loadTemplate("/modals/modalNewsletter.twig", "base.twig", 48)->display($context);
        // line 49
        echo "        <div class=\"container-fluid nopaddingtop\">
            ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "        </div>
       
        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "        
    </body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue!";
    }

    // line 12
    public function block_description($context, array $blocks = array())
    {
    }

    // line 13
    public function block_keywords($context, array $blocks = array())
    {
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "            <link rel='stylesheet prefetch' href=\"";
        if (isset($context["BASECSS"])) { $_BASECSS_ = $context["BASECSS"]; } else { $_BASECSS_ = null; }
        echo twig_escape_filter($this->env, $_BASECSS_, "html", null, true);
        echo "bootstrap-custom/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\"/>
            <link rel='stylesheet prefetch' href=\"";
        // line 23
        if (isset($context["BASECSS"])) { $_BASECSS_ = $context["BASECSS"]; } else { $_BASECSS_ = null; }
        echo twig_escape_filter($this->env, $_BASECSS_, "html", null, true);
        echo "bootstrap-custom/bootstrap-theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
            <link rel='stylesheet prefetch' href=\"";
        // line 24
        if (isset($context["BASECSS"])) { $_BASECSS_ = $context["BASECSS"]; } else { $_BASECSS_ = null; }
        echo twig_escape_filter($this->env, $_BASECSS_, "html", null, true);
        echo "font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 25
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/main.css\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 26
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/slider.css\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 27
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 28
        if (isset($context["BASETHEME"])) { $_BASETHEME_ = $context["BASETHEME"]; } else { $_BASETHEME_ = null; }
        echo twig_escape_filter($this->env, $_BASETHEME_, "html", null, true);
        echo "/css/footer.css\" rel=\"stylesheet\" type=\"text/css\"/>
            <link rel='stylesheet prefetch' href=\"";
        // line 29
        if (isset($context["BASECSS"])) { $_BASECSS_ = $context["BASECSS"]; } else { $_BASECSS_ = null; }
        echo twig_escape_filter($this->env, $_BASECSS_, "html", null, true);
        echo "owl.carousel.css\" rel=\"stylesheet\" type=\"text/css\"/>
            <link rel='stylesheet prefetch' href=\"";
        // line 30
        if (isset($context["BASECSS"])) { $_BASECSS_ = $context["BASECSS"]; } else { $_BASECSS_ = null; }
        echo twig_escape_filter($this->env, $_BASECSS_, "html", null, true);
        echo "owl.theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
            <link rel='stylesheet prefetch' href=\"";
        // line 31
        if (isset($context["BASECSS"])) { $_BASECSS_ = $context["BASECSS"]; } else { $_BASECSS_ = null; }
        echo twig_escape_filter($this->env, $_BASECSS_, "html", null, true);
        echo "owl.transitions.css\" rel=\"stylesheet\" type=\"text/css\"/>
        ";
    }

    // line 33
    public function block_ogdata($context, array $blocks = array())
    {
        // line 34
        echo "            
        ";
    }

    // line 42
    public function block_bodyclass($context, array $blocks = array())
    {
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        // line 54
        echo "            <script src=\"";
        if (isset($context["BASEJS"])) { $_BASEJS_ = $context["BASEJS"]; } else { $_BASEJS_ = null; }
        echo twig_escape_filter($this->env, $_BASEJS_, "html", null, true);
        echo "vendor/jquery-1.11.2.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 55
        if (isset($context["BASEJS"])) { $_BASEJS_ = $context["BASEJS"]; } else { $_BASEJS_ = null; }
        echo twig_escape_filter($this->env, $_BASEJS_, "html", null, true);
        echo "vendor/bootstrap.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 56
        if (isset($context["BASEJS"])) { $_BASEJS_ = $context["BASEJS"]; } else { $_BASEJS_ = null; }
        echo twig_escape_filter($this->env, $_BASEJS_, "html", null, true);
        echo "vendor/owl.carousel.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 57
        if (isset($context["BASEURL"])) { $_BASEURL_ = $context["BASEURL"]; } else { $_BASEURL_ = null; }
        echo twig_escape_filter($this->env, $_BASEURL_, "html", null, true);
        echo "libs/matchHeight/jquery.matchHeight-min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 58
        if (isset($context["BASEJS"])) { $_BASEJS_ = $context["BASEJS"]; } else { $_BASEJS_ = null; }
        echo twig_escape_filter($this->env, $_BASEJS_, "html", null, true);
        echo "main.js\" type=\"text/javascript\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 58,  224 => 57,  219 => 56,  214 => 55,  208 => 54,  205 => 53,  200 => 50,  195 => 42,  190 => 34,  187 => 33,  180 => 31,  175 => 30,  170 => 29,  165 => 28,  160 => 27,  155 => 26,  150 => 25,  145 => 24,  140 => 23,  134 => 22,  131 => 21,  126 => 13,  121 => 12,  115 => 10,  108 => 60,  106 => 53,  102 => 51,  100 => 50,  97 => 49,  95 => 48,  86 => 42,  79 => 39,  73 => 37,  67 => 36,  64 => 33,  62 => 21,  51 => 13,  47 => 12,  42 => 11,  38 => 10,  27 => 1,);
    }
}
/* <!doctype html>*/
/* <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->*/
/* <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->*/
/* <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <meta http-equiv="Content-type" content="text/html; charset=utf-8" />*/
/*         <title>{% block title %}Bienvenue!{% endblock %}</title>*/
/*         <link rel="icon" type="image/png" href="{{BASEPATH}}themes/default/img/favicon.png" />*/
/*         <meta name="description" content="{% block description %}{% endblock %}">*/
/*         <meta name="keywords" content="{% block keywords %}{% endblock %}">*/
/*         */
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>*/
/*         <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,400italic,300italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>*/
/*         <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>*/
/* 	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>*/
/*         <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet prefetch' type='text/css'>*/
/*         {% block stylesheets %}*/
/*             <link rel='stylesheet prefetch' href="{{BASECSS}}bootstrap-custom/bootstrap.css" rel="stylesheet" type="text/css"/>*/
/*             <link rel='stylesheet prefetch' href="{{BASECSS}}bootstrap-custom/bootstrap-theme.css" rel="stylesheet" type="text/css"/>*/
/*             <link rel='stylesheet prefetch' href="{{BASECSS}}font-awesome.min.css" rel="stylesheet" type="text/css"/>*/
/*             <link href="{{BASETHEME}}/css/main.css" rel="stylesheet" type="text/css"/>*/
/*             <link href="{{BASETHEME}}/css/slider.css" rel="stylesheet" type="text/css"/>*/
/*             <link href="{{BASETHEME}}/css/menu.css" rel="stylesheet" type="text/css"/>*/
/*             <link href="{{BASETHEME}}/css/footer.css" rel="stylesheet" type="text/css"/>*/
/*             <link rel='stylesheet prefetch' href="{{BASECSS}}owl.carousel.css" rel="stylesheet" type="text/css"/>*/
/*             <link rel='stylesheet prefetch' href="{{BASECSS}}owl.theme.css" rel="stylesheet" type="text/css"/>*/
/*             <link rel='stylesheet prefetch' href="{{BASECSS}}owl.transitions.css" rel="stylesheet" type="text/css"/>*/
/*         {% endblock %}*/
/*         {% block ogdata %}*/
/*             */
/*         {% endblock %}*/
/*         <link href="{{BASETHEME}}/css/fonts.css" rel="stylesheet" type="text/css"/>*/
/*         <script src="{{BASEJS}}vendor/modernizr-2.8.3-respond-1.4.2.min.js" type="text/javascript"></script>*/
/*         <script type="text/javascript">*/
/*             var basePATH = '{{BASEURL}}';*/
/*         </script>*/
/*     </head>*/
/*     <body class="{% block bodyclass %}{% endblock %}">*/
/*         <div class="pixel-when-modal"></div>*/
/*         <!--[if lt IE 8]>*/
/*             <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>*/
/*         <![endif]-->*/
/*         <a class="noPrint" href="modals/modalNewsletter.twig"></a>*/
/*         {% include '/modals/modalNewsletter.twig' %}*/
/*         <div class="container-fluid nopaddingtop">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*        */
/*         {% block javascripts %}*/
/*             <script src="{{BASEJS}}vendor/jquery-1.11.2.min.js" type="text/javascript"></script>*/
/*             <script src="{{BASEJS}}vendor/bootstrap.min.js" type="text/javascript"></script>*/
/*             <script src="{{BASEJS}}vendor/owl.carousel.min.js" type="text/javascript"></script>*/
/*             <script src="{{BASEURL}}libs/matchHeight/jquery.matchHeight-min.js" type="text/javascript"></script>*/
/*             <script src="{{BASEJS}}main.js" type="text/javascript"></script>*/
/*         {% endblock %}*/
/*         */
/*     </body>*/
/* </html>*/
/* */
