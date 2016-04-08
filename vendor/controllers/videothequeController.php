<?php
use Models\Client\Videos;
use Models\Client\Medias;

class videothequeController extends \Slim\Middleware{
    
    private $_db;
    private $_id;
	
    function __construct($db,$idPage){
        $this->_db=$db;
        $this->_id=$idPage;
    }
    
    public function initAction(){
        $P=new Videos($this->_db);
        $content = $P->getAll();
        return array(
            "success"=>true,"donnees"=>array( 
//                "Categories"=>($CatFront['success'])? $CatFront['donnees'] : array(),
                "Contenu"=>($content['success'])? $content['donnees'] : array() 
            )
        );
    }
    
    public function call(){
        $this->next->call();
    }
}
