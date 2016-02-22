<?php
use Models\Admin\Theme;

class themesController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function getAll(){
            $Theme = new Theme($this->_db);
            $result = $Theme->getAll();
            echo json_encode($result);
	}
       
	public function call()
        {
            $this->next->call();
        }
}

?>