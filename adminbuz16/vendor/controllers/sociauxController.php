<?php
use Models\Admin\Sociaux;

class sociauxController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function getAll(){
            $C = new Sociaux($this->_db);
            $result = $C->getAll();
            echo json_encode($result);
	}
	function update(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $error=false;
            foreach($body->soc as $k=>$v):
                $social = new stdClass();
                $social->lien = (isset($body->soc[$k]->lien)) ? $body->soc[$k]->lien : "";
                $social->texte = (isset($body->soc[$k]->texte)) ? $body->soc[$k]->texte : "";

                $S = new Sociaux($this->_db);
                $S->setId($body->soc[$k]->id);
                $r = $S->update($social);
                if(!$r['success']) $error=true;
            endforeach;
           
            echo json_encode(array("success"=>!$error));
            
            
	}
       
	public function call()
        {
            $this->next->call();
        }
}

?>