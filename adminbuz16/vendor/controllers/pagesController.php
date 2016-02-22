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
            $p->setUrl($body->page->url);
            $p->setType($body->page->type);
            $p->setIdTheme($body->page->idTheme->id);
            $p->setMotsClefs($body->page->motsclefs);
            $p->setLienMenu($body->page->lienmenu);
            
            if(isset($body->page->toChange) && $body->page->toChange===true):
                $url=$p->urlExists($body->page->url,$body->page->id);
                if($url['success']){
                        if($url['donnees']!=0) $p->setUrl($body->page->url.'-'.$url['donnees']);
                }
                $p->setId($body->page->id);
                $result = $p->updatePage();
            else:
                $url=$p->urlExists($body->page->url,null);
                if($url['success']){
                        if($url['donnees']!=0) $p->setUrl($body->page->url.'-'.$url['donnees']);
                }
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