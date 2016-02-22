<?php
use \Models\Admin\Statistiques as Stats;

class homeController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function getStatsHOME(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $S = new Stats($this->_db);
            $result = $S->getStatsHome();
            echo json_encode($result);
	}
	public function call()
        {
            $this->next->call();
        }
}

?>