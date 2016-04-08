<?php

use Models\Client\Article;
use Models\Client\Actualite;

class rechercheController extends \Slim\Middleware{
    
    private $_db;
	
    function __construct($db){
        $this->_db=$db;
    }
    
    public function initAction($s){
    
        $A = new Article($this->_db);
        $ResArticle = $A->search($s);
        
        $Actu = new Actualite($this->_db);
        $ResActu = $Actu->search($s);
        
        
        return array(
            "success"=>true,"donnees"=>array( 
                "Articles"=>($ResArticle['success'])? $ResArticle['donnees'] : array(),
                "Actualites"=>($ResActu['success'])? $ResActu['donnees'] : array()
            )
        );
    }
    
    public function call(){
        $this->next->call();
    }
}
