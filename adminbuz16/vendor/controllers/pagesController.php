<?php
use \Models\Admin\Pages;

class pagesController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function getAll(){
            $Pages = new Pages($this->_db);
            $result = $Pages->getAll();
            echo json_encode($result);
	}
    function addPage(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $p = new Pages($this->_db);
            
            $p->setTitre($body->page->titre);
            $p->setNom($body->page->Nom);
            $p->setDesc($body->page->description);
            $p->setType($body->page->type);
            $p->setIdTheme($body->page->idTheme->id);
            $p->setMotsClefs($body->page->motsclefs);
            
            if(isset($body->page->idCatAsso->id)) $p->setCatAsso ($body->page->idCatAsso->id);
            if(isset($body->page->idCategorie->id)) $p->setIdCategorie ($body->page->idCategorie->id);
            if(isset($body->page->toChange) && $body->page->toChange===true):
               
                $p->setId($body->page->id);
                $result = $p->updatePage();
            else:
                
                $result = $p->addPage();
            endif;
            
            echo json_encode($result);
	}
	public function call()
        {
            $this->next->call();
        }
        
    function delPage(){ 
        $request = $this->_request->request();
        $body = json_decode($request->getBody());
        $p = new Pages($this->_db);
        $p->setId($body->page->id);
        $result=$p->delPage();
        echo json_encode($result);
    }   
}

?>