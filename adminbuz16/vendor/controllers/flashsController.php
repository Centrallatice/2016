<?php
use \Models\Admin\Flashs;

class flashsController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function getAll(){
            $Flashs = new Flashs($this->_db);
            $result = $Flashs->getAll();
            echo json_encode($result);
	}
        function addFlash(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $p = new Flashs($this->_db);
            
            $p->setTitre($body->flash->titre);
            $p->setResume($body->flash->resume);
            $p->setContenu($body->flash->contenu);
            
            
            if(isset($body->flash->toChange) && $body->flash->toChange===true):
                $p->setId($body->flash->id);
                $result = $p->updateFlash();
            else:
                $result = $p->addFlash();
            endif;
            
            echo json_encode($result);
	}
        function deleteFlash(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $p = new Flashs($this->_db);
            $p->setId($body->flash->id);
            $result = $p->deleteFlash();
            echo json_encode($result);
	}
	public function call()
        {
            $this->next->call();
        }
}

?>