<?php
use \Models\Admin\Contact;

class demandeContactController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	
	function getAll(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $S = new Contact($this->_db);
            $result = $S->get();
            echo json_encode($result);
	}
	
	public function call()
        {
            $this->next->call();
        }
}

?>