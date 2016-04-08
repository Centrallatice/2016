<?php
use Models\Client\Phototheque;
use Models\Client\Medias;

class photothequeController extends \Slim\Middleware{
    
    private $_db;
    private $_id;
    private $_album;
	
    function __construct($db,$idPage,$album){
        $this->_db=$db;
        $this->_id=$idPage;
        $this->_album=$album;
    }
    
    public function initAction(){
        $P=new Phototheque($this->_db);
        $CatFront = $P->getCategories();
        $content=array();
        $M = new Medias($this->_db);
        if(!is_null($this->_id) && is_null($this->_album)):
            $content = $M->getAlbumByCat("photos",$this->_id);
        elseif(!is_null($this->_id) && !is_null($this->_album)):
            $content = $M->getByTypeAndAlbum("photos",$this->_id,$this->_album);
        endif;
        
        
        return array(
            "success"=>true,"donnees"=>array( 
                "Categories"=>($CatFront['success'])? $CatFront['donnees'] : array(),
                "Contenu"=>($content['success'])? $content['donnees'] : array(),
                "Album"=>($content['success'])? $content['album'] : null
            )
        );
    }
    
    public function call(){
        $this->next->call();
    }
}
