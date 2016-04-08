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
            $result['detail']=$S->getDetailsVisite();
            $result['pages']=$S->getDetailsVisitePage();
            echo json_encode($result);
	}
	function getStatsHOMEVisiteur(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $S = new Stats($this->_db);
            $result['visiteur']=$S->getDetailsVisite($body->mois,$body->annee);
            $result['pages']=$S->getDetailsVisitePage($body->mois,$body->annee);
            echo json_encode($result);
	}
	public function call()
        {
            $this->next->call();
        }
}

?>