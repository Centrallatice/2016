<?php
use Models\Admin\Coordonnees;

class coordonneesController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function getAll(){
            $C = new Coordonnees($this->_db);
            $result = $C->getAll();
            echo json_encode($result);
	}
	function update(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            
            
            $coord = new stdClass();
            $coord->nom = (isset($body->coord->nom)) ? $body->coord->nom : "";
            $coord->adresse = (isset($body->coord->adresse)) ? $body->coord->adresse : "";
            $coord->cp = (isset($body->coord->cp)) ? $body->coord->cp : "";
            $coord->ville = (isset($body->coord->ville)) ? $body->coord->ville : "";
            $coord->tel = (isset($body->coord->tel)) ? $body->coord->tel : "";
            $coord->fax = (isset($body->coord->fax)) ? $body->coord->fax : "";
            $coord->mail = (isset($body->coord->mail)) ? $body->coord->mail : "";
            $coord->horaires = (isset($body->coord->horaires)) ? $body->coord->horaires : "";
            
            
            $C = new Coordonnees($this->_db);
            $result = $C->update($coord);
            
            echo json_encode($result);
	}
       
	public function call()
        {
            $this->next->call();
        }
}

?>