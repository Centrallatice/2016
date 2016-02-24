<?php
use \Models\Admin\Menus;
use \Models\Admin\MenuLinks;

class menusController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
        $this->_request=$slimReq;
        $this->_db=$db;
	}
	function addMenu(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new Menus($this->_db);
            $M->setNom($body->menu->nom);
            $M->setIdPage($body->menu->idPage);
            $M->setPosition($body->menu->position);
           
            $result = $M->addMenu();
            echo json_encode($result);
	}
	function updateMenu(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new Menus($this->_db);
            $M->setNom($body->menu->nom);
            $M->setIdPage(isset($body->menu->idPage->id) ? $body->menu->idPage->id : $body->menu->idPage);
            $M->setPosition($body->menu->position);
            $M->setId($body->menu->id);
            $result = $M->updateMenu();
            echo json_encode($result);
	}
	function getMenus(){
            $M = new Menus($this->_db);
            $result = $M->getMenus("nom","ASC");
            echo json_encode($result);
	}
	function getMenuByID(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new Menus($this->_db);
            $M->setId($body->menu);
            $result = $M->getMenu();
            echo json_encode($result);
	}
	function delMenu(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new Menus($this->_db);
            $M->setId($body->menu);
            $result = $M->delMenu();
            if($result['success']):
                $ML = new MenuLinks($this->_db);
                $ML->setIdMenu($body->menu);
                $result2 = $ML->delByIdMenu();
            endif;
            echo json_encode($result);
	}
	public function call()
    {
            $this->next->call();
    }
}

?>