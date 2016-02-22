<?php
use Models\Client\Pages;
use Models\Client\Actualite;
use Models\Client\Categorie;
use Models\Client\Coordonnees;
use Models\Client\Phototheque;
use Models\Client\Sociaux;

class actualiteController extends \Slim\Middleware{
    private $_request;
    private $_db;
	
    function __construct($slimReq,$db){
        $this->_request=$slimReq;
        $this->_db=$db;
    }
    
    public function initAction($app,$id){
        $request = $this->_request->request();
        $body = json_decode($request->getBody());
        
        $Cat = new Categorie($this->_db);
        $categories = $Cat->getAll();
        
        $Actu = new Actualite($this->_db);
        $Actu->setIdActu($id);
        $actualite = $Actu->getActualite('dateAjout','DESC');
        
        $Coord = new Coordonnees($this->_db);
        $coordonnees = $Coord->getAll();
       
        $Phototheques = new Phototheque($this->_db);
        $categoriesPhotos = $Phototheques->getCategories();
        
        $Soc= new Sociaux($this->_db);
        $sociaux = $Soc->getAll();
        
        return array(
            "success"=>true,"donnees"=>array(
                "actualite"=>$actualite['success'] ? $actualite['donnees'] : array(),
                "categories"=>$categories['success'] ? $categories['donnees']  : array(),
                "coordonnees"=>$coordonnees['success'] ? $coordonnees['donnees']  : array(),
                "categoriesphotos"=>$categoriesPhotos['success'] ? $categoriesPhotos['donnees']  : array(),
                "sociaux"=>$sociaux['success'] ? $sociaux['donnees']  : array()
            )
        );
    }
    public function call(){
        $this->next->call();
    }
}
