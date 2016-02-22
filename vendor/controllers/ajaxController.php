<?php

use Models\Client\Flashs;

class ajaxController extends \Slim\Middleware{
    
    private $_db;
    private $_request;
	
    function __construct($request,$db){
        $this->_request=$request;
        $this->_db=$db;
    }
    
    public function inscriptionNL(){
        $request = $this->_request->request();
        $body = json_decode($request->getBody());
            
        $Flash = new Flashs($this->_db);
        $Verif = $Flash->getMailExiste($body->mail);
        $Existe = ($Verif['success']) ? $Verif['donnees'] : 0;
        if($Existe!=0):
            echo json_encode(array("success"=>false,"message"=>"Cette adresse est déja enregistrée"));
        else:
            $insert = $Flash->inscriptionNewsletter($body->mail);
            echo json_encode($insert);
        endif;
    }
    
    public function call(){
        $this->next->call();
    }
}
