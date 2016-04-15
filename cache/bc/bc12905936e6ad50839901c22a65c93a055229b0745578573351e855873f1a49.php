<?php

/* /modals/modalNewsletter.twig */
class __TwigTemplate_3d63a83214d941a29eda2f3071f39359740eaad21021c24950aa2e27e379f255 extends Twig_Template
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
        echo "<div class=\"noPrint modal fade\" tabindex=\"-1\" role=\"dialog\" id='modalNewsletter' data-backdrop=\"\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\">Inscription à notre newsletter</h4>
      </div>
      <div class=\"modal-body\">
        <p>Si vous souhaitez recevoir par mail nos dernières informations merci de saisir votre adresse email dans le champ ci-dessous et confirmer votre inscription</p>
        <div class=\"input-group\" id=\"group-nl\">
            <input type=\"text\" id='mailvaluenewsletter' class=\"form-control\" placeholder=\"Adresse mail\"  aria-describedby=\"helpBlockMailNL\">
            <span class=\"input-group-btn\">
                <button class=\"btn btn-success\" id=\"valideInscriptionNL\" type=\"button\">Valider</button>
            </span>
        </div>
\t<span id=\"helpBlockMailNL\" class=\"help-block alert\" style=\"display:none\"></span>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Annuler</button>
      </div>
    </div>
  </div>
</div>

<div class=\"noPrint modal fade\" tabindex=\"-1\" role=\"dialog\" id='modalCaroussel' data-backdrop=\"\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
          <div class=\"media\">
              <div class=\"media-left\">
                  <img class=\"media-object\" src=\"\">
              </div>
              <div class=\"media-body\" style=\"padding-top:60px\">
                  
              </div>
          </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/modals/modalNewsletter.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div class="noPrint modal fade" tabindex="-1" role="dialog" id='modalNewsletter' data-backdrop="">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*             <span aria-hidden="true">&times;</span></button>*/
/*         <h4 class="modal-title">Inscription à notre newsletter</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <p>Si vous souhaitez recevoir par mail nos dernières informations merci de saisir votre adresse email dans le champ ci-dessous et confirmer votre inscription</p>*/
/*         <div class="input-group" id="group-nl">*/
/*             <input type="text" id='mailvaluenewsletter' class="form-control" placeholder="Adresse mail"  aria-describedby="helpBlockMailNL">*/
/*             <span class="input-group-btn">*/
/*                 <button class="btn btn-success" id="valideInscriptionNL" type="button">Valider</button>*/
/*             </span>*/
/*         </div>*/
/* 	<span id="helpBlockMailNL" class="help-block alert" style="display:none"></span>*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="noPrint modal fade" tabindex="-1" role="dialog" id='modalCaroussel' data-backdrop="">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-body">*/
/*           <div class="media">*/
/*               <div class="media-left">*/
/*                   <img class="media-object" src="">*/
/*               </div>*/
/*               <div class="media-body" style="padding-top:60px">*/
/*                   */
/*               </div>*/
/*           </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
