<?php
use Models\Client\Contact;

class contactController extends \Slim\Middleware{
    
    private $_db;
	
    function __construct($db){
        $this->_db=$db;
    }
    
    public function initAction($app){
        if(isset($_POST['nouvelleDemande'])):
            $name = $_POST['contact-nom'];
            $mail = $_POST['contact-email'];
            $sujet = $_POST['contact-sujet'];
            $message = $_POST['contact-message'];
            
            $C = new Contact($this->_db);
            $C->setNom($name);
            $C->setMail($mail);
            $C->setSujet($sujet);
            $C->setMessage($message);
            $ret = $C->add();
            return array(
                "success"=>$ret['success'],"donnees"=>array(
                    "demandeExiste"=>true,
                    "successDemande"=>$ret['success']
                )
            );
            
            
        else:
            return array(
                "success"=>true,"donnees"=>array(
                    "demandeExiste"=>false
                )
            );
        endif;
    }
   
    public function call(){
        $this->next->call();
    }
}
