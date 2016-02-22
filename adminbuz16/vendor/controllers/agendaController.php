<?php
use \Models\Admin\Agenda;

class agendaController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function addEvenement(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $A = new Agenda($this->_db);
            $A->setTitre($body->evenement->titre);
            $A->setContent($body->evenement->contenu);
            $A->setResume($body->evenement->resume);
            $A->setIdCategorie($body->evenement->idCategorie->id);
            $A->setDateEvenement($body->evenement->dateEvenement);
            $result = $A->addAgenda();
            echo json_encode($result);
	}
	function updateEvenement(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $A = new Agenda($this->_db);
            $A->setTitre($body->evenement->titre);
            $A->setContent($body->evenement->contenu);
            $A->setResume($body->evenement->resume);
            $A->setIdCategorie($body->evenement->idCategorie->id);
            $A->setIdActu($body->evenement->id);
            $A->setDateEvenement($body->evenement->dateEvenement);
            
            $result = $A->updateAgenda();
            echo json_encode($result);
	}
	function getEvenements(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $A = new Agenda($this->_db);
            $result = $A->getAgendas('dateAjout','DESC');
            echo json_encode($result);
	}
	function getEvenementByID(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $A = new Agenda($this->_db);
            $A->setIdActu($body->evenement);
            
            $result = $A->getAgenda();
            
            $result['pathImage']=BASE_PATH_UPLOAD_URL.'/actuPicture/';
            echo json_encode($result);
	}
	function delEvenement(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            
            $A = new Agenda($this->_db);
            $A->setIdActu($body->evenement->id);
                        
            $result = $A->delAgendas();
            echo json_encode($result);
	}
	public function call()
        {
            $this->next->call();
        }
}

?>