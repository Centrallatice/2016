<?php
use Models\Admin\Videos;

class videosController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	
	function addVideo(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new Videos($this->_db);
            $M->setNom($body->v->nom);
            $M->setUrl($body->v->url);
            $result = $M->addVideo();
            echo json_encode($result);
	}
        
	function getVideos(){
            $request = $this->_request->request();
            $V = new Videos($this->_db);
            $result = $V->getAll();
            echo json_encode($result);
	}
	
	function deleteVideo(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            
            $V = new Videos($this->_db);
            $V->setId($body->v->id);
            
            $result = $V->deleteVideos();
            echo json_encode($result);
	}
	public function call()
        {
            $this->next->call();
        }
}

?>