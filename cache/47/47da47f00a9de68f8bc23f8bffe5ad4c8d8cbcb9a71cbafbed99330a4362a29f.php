<?php

/* contact.twig */
class __TwigTemplate_404d0ede1161b50baead5a1e61e7d03b47406b2733c1f79665980b6d71b9271a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "contact.twig", 1);
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
        echo "Ville de Buzancais - Contactez-Nous";
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
        echo "/css/contact.css\" rel=\"stylesheet\" type=\"text/css\"/>
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
        echo "/blocks/services/css/contact-services.css\" rel=\"stylesheet\" type=\"text/css\"/>
    
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
        $this->loadTemplate("global/header.twig", "contact.twig", 19)->display($context);
        // line 20
        echo "
    <div class=\"bloc-container-inner blocContact\">
        <div class=\"row\">
            <!-- Show form contact -->
            <div class=\"col-xs-22 col-sm-16 col-md-15 col-xs-offset-1\">
                <h3>Formulaire de Contact</h3>\t\t\t
                <div class=\"contact-form\">
                    ";
        // line 27
        if (isset($context["demandeExiste"])) { $_demandeExiste_ = $context["demandeExiste"]; } else { $_demandeExiste_ = null; }
        if (isset($context["successDemande"])) { $_successDemande_ = $context["successDemande"]; } else { $_successDemande_ = null; }
        if (($_demandeExiste_ && $_successDemande_)) {
            // line 28
            echo "                        <div class=\"alert alert-success\">
                            <strong>Merci ! Nous avons bien reçu votre message </strong>
                        </div>
                    ";
        }
        // line 32
        echo "                    ";
        if (isset($context["demandeExiste"])) { $_demandeExiste_ = $context["demandeExiste"]; } else { $_demandeExiste_ = null; }
        if (isset($context["successDemande"])) { $_successDemande_ = $context["successDemande"]; } else { $_successDemande_ = null; }
        if (($_demandeExiste_ &&  !$_successDemande_)) {
            // line 33
            echo "                        <div class=\"alert alert-danger\">
                            Une erreur est survenue lors de l'envoi de votre message, merci de réessayer ultérieurement
                        </div>
                    ";
        }
        // line 37
        echo "                    ";
        if (isset($context["demandeExiste"])) { $_demandeExiste_ = $context["demandeExiste"]; } else { $_demandeExiste_ = null; }
        if ( !$_demandeExiste_) {
            // line 38
            echo "                        <form id=\"contact-form\" method=\"post\" class=\"form-validate form-horizontal\">
                            <fieldset>
                                <legend>Envoyer un e-mail. Tous les champs précédés d'un <span class=\"star-obligatoire\">*</span> sont obligatoires.</legend>
                                <div class=\"form-group\">
                                    <label for=\"contact-nom\">Nom <span class=\"star-obligatoire\">*</span></label>
                                    <input type=\"text\" required class=\"form-control\" id=\"contact-nom\" name=\"contact-nom\" placeholder=\"Votre Nom\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"contact-email\">E-mail <span class=\"star-obligatoire\">*</span></label>
                                    <input type=\"email\" required class=\"form-control\" name=\"contact-email\" id=\"contact-email\" placeholder=\"Email\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"contact-sujet\">Sujet <span class=\"star-obligatoire\">*</span></label>
                                    <input type=\"text\" required class=\"form-control\" name=\"contact-sujet\" id=\"contact-sujet\" placeholder=\"\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"contact-message\">Message  <span class=\"star-obligatoire\">*</span></label>
                                    <textarea class=\"form-control\" required  name=\"contact-message\" rows=\"7\" id=\"contact-message\"></textarea>
                                </div>

                                <button type=\"submit\"  name=\"nouvelleDemande\" class=\"btn btn-info block-center\">Envoyer</button>
                            </fieldset>                    
                        </form>
                    ";
        }
        // line 62
        echo "                </div>
            </div>
            <div class=\"hidden-xs col-sm-7 col-md-6 contact-information\">
                ";
        // line 65
        $this->loadTemplate("/blocks/coordonnees/layout/displayTopRight.twig", "contact.twig", 65)->display($context);
        // line 66
        echo "            </div>
            <div class=\"hidden-xs hidden-sm col-md-2 nopadding noPrint\">
                <!-- COL_RIGHT_ONE -->
                ";
        // line 69
        $this->loadTemplate("/blocks/services/layout/displayMiniInnerColRight.twig", "contact.twig", 69)->display($context);
        // line 70
        echo "            </div>
        </div>
        ";
        // line 72
        $this->loadTemplate("global/footer.twig", "contact.twig", 72)->display($context);
        echo "    
    </div>
";
    }

    public function getTemplateName()
    {
        return "contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 72,  179 => 70,  177 => 69,  172 => 66,  170 => 65,  165 => 62,  139 => 38,  135 => 37,  129 => 33,  124 => 32,  118 => 28,  114 => 27,  105 => 20,  102 => 19,  99 => 18,  92 => 15,  89 => 14,  81 => 11,  76 => 10,  71 => 9,  66 => 8,  61 => 7,  56 => 6,  53 => 5,  46 => 4,  39 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends "base.twig" %}*/
/* {% block title %}Ville de Buzancais - Contactez-Nous{% endblock %}*/
/* {% block description %}{{descriptionPage}}{% endblock %}*/
/* {% block keywords %}{{motsclefsPage}}{% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{BASETHEME}}/css/home.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/css/contact.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/coordonnees/css/coordonnees.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/services/css/services.css" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{BASETHEME}}/blocks/services/css/contact-services.css" rel="stylesheet" type="text/css"/>*/
/*     */
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/*     */
/* {% block body %}*/
/*     {% include 'global/header.twig' %}*/
/* */
/*     <div class="bloc-container-inner blocContact">*/
/*         <div class="row">*/
/*             <!-- Show form contact -->*/
/*             <div class="col-xs-22 col-sm-16 col-md-15 col-xs-offset-1">*/
/*                 <h3>Formulaire de Contact</h3>			*/
/*                 <div class="contact-form">*/
/*                     {% if (demandeExiste and successDemande) %}*/
/*                         <div class="alert alert-success">*/
/*                             <strong>Merci ! Nous avons bien reçu votre message </strong>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if (demandeExiste and not successDemande) %}*/
/*                         <div class="alert alert-danger">*/
/*                             Une erreur est survenue lors de l'envoi de votre message, merci de réessayer ultérieurement*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if not demandeExiste %}*/
/*                         <form id="contact-form" method="post" class="form-validate form-horizontal">*/
/*                             <fieldset>*/
/*                                 <legend>Envoyer un e-mail. Tous les champs précédés d'un <span class="star-obligatoire">*</span> sont obligatoires.</legend>*/
/*                                 <div class="form-group">*/
/*                                     <label for="contact-nom">Nom <span class="star-obligatoire">*</span></label>*/
/*                                     <input type="text" required class="form-control" id="contact-nom" name="contact-nom" placeholder="Votre Nom">*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label for="contact-email">E-mail <span class="star-obligatoire">*</span></label>*/
/*                                     <input type="email" required class="form-control" name="contact-email" id="contact-email" placeholder="Email">*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label for="contact-sujet">Sujet <span class="star-obligatoire">*</span></label>*/
/*                                     <input type="text" required class="form-control" name="contact-sujet" id="contact-sujet" placeholder="">*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label for="contact-message">Message  <span class="star-obligatoire">*</span></label>*/
/*                                     <textarea class="form-control" required  name="contact-message" rows="7" id="contact-message"></textarea>*/
/*                                 </div>*/
/* */
/*                                 <button type="submit"  name="nouvelleDemande" class="btn btn-info block-center">Envoyer</button>*/
/*                             </fieldset>                    */
/*                         </form>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="hidden-xs col-sm-7 col-md-6 contact-information">*/
/*                 {% include '/blocks/coordonnees/layout/displayTopRight.twig' %}*/
/*             </div>*/
/*             <div class="hidden-xs hidden-sm col-md-2 nopadding noPrint">*/
/*                 <!-- COL_RIGHT_ONE -->*/
/*                 {% include '/blocks/services/layout/displayMiniInnerColRight.twig' %}*/
/*             </div>*/
/*         </div>*/
/*         {% include 'global/footer.twig' %}    */
/*     </div>*/
/* {% endblock %}*/
/* */
