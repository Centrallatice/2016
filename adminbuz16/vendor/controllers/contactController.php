<?php
use \Models\Admin\Service;

class contactController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function addService(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $S = new Service($this->_db);
            $S->set_strNom($body->service->nom);
            $S->set_strMail($body->service->email);
            $S->set_strAdresseRue($body->service->adresserue);
            $S->set_strAdresseVille($body->service->adresseville);
            $S->set_strAdresseCP($body->service->adressecp);
            $S->set_strTelephone($body->service->telephone);
            $S->set_strTelephone2($body->service->telephone2);
            $S->set_strLienGGMap($body->service->lienggmap);
            $S->set_strIframeGGMap($body->service->iframeggmap);
            $S->set_strHoraires($body->service->horaires);
            $result = $S->addService();
            echo json_encode($result);
	}
	function updateService(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $S = new Service($this->_db);
            $S->set_strNom($body->service->nom);
            $S->set_strMail($body->service->email);
            $S->set_strAdresseRue($body->service->adresserue);
            $S->set_strAdresseVille($body->service->adresseville);
            $S->set_strAdresseCP($body->service->adressecp);
            $S->set_strTelephone($body->service->telephone);
            $S->set_strTelephone2($body->service->telephone2);
            $S->set_strLienGGMap($body->service->lienggmap);
            $S->set_strIframeGGMap($body->service->iframeggmap);
            $S->set_strHoraires($body->service->horaires);
            $S->set_intId($body->service->id);
            $result = $S->updateService();
            echo json_encode($result);
	}
	
	function getServices(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $S = new Service($this->_db);
            $result = $S->getServices("nom","ASC");
            echo json_encode($result);
	}
	function getService(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $S = new Service($this->_db);
            $S->set_intId($body->id);
            $result = $S->getService();
            echo json_encode($result);
	}
	function deleteService(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $S = new Service($this->_db);
            $S->set_intId($body->id);
            $result = $S->deleteService();
            echo json_encode($result);
	}
	
	public function call()
        {
            $this->next->call();
        }
}

?>