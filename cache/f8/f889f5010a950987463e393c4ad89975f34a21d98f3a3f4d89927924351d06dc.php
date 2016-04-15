<?php

/* /modules/facebook/layout/displayBottomRight.twig */
class __TwigTemplate_5f9a4a24be74a137cd3a4e5be7a2806731e639700cac0536229c66383824de3b extends Twig_Template
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
        echo "<div class=\"containerFB hidden-xs hidden-sm\">
    <div class=\"fb-page\" data-href=\"https://www.facebook.com/Ville-de-Buzan%C3%A7ais-1489526317967579/\" 
         data-tabs=\"timeline\" data-small-header=\"true\" 
         data-adapt-container-width=\"true\" 
         data-hide-cover=\"false\" 
         data-show-facepile=\"false\"></div>
</div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5&appId=1265323180149649\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>";
    }

    public function getTemplateName()
    {
        return "/modules/facebook/layout/displayBottomRight.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div class="containerFB hidden-xs hidden-sm">*/
/*     <div class="fb-page" data-href="https://www.facebook.com/Ville-de-Buzan%C3%A7ais-1489526317967579/" */
/*          data-tabs="timeline" data-small-header="true" */
/*          data-adapt-container-width="true" */
/*          data-hide-cover="false" */
/*          data-show-facepile="false"></div>*/
/* </div>*/
/* <script>(function(d, s, id) {*/
/*   var js, fjs = d.getElementsByTagName(s)[0];*/
/*   if (d.getElementById(id)) return;*/
/*   js = d.createElement(s); js.id = id;*/
/*   js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5&appId=1265323180149649";*/
/*   fjs.parentNode.insertBefore(js, fjs);*/
/* }(document, 'script', 'facebook-jssdk'));</script>*/
