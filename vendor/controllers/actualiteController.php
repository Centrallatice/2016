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
    
    public function initAction($app,$slug){
        $request = $this->_request->request();
        $body = json_decode($request->getBody());
        
        $Cat = new Categorie($this->_db);
        $categories = $Cat->getAll();
        
        $Actu = new Actualite($this->_db);
	$Actu->setUrl(str_replace('.html','',$slug));
        $actualite = $Actu->getActualiteBySlug();
        
        $pager = $this->getPrevNextPos($actualite['donnees']['id']);
        
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
                "sociaux"=>$sociaux['success'] ? $sociaux['donnees']  : array(),
                "pager"=>$pager
            )
        );
    }
    public function getPrevNextPos($idActu){
        $A = new Actualite($this->_db);
        $allActu = $A->getActualites('dateEvenement','DESC');
        $prev = null;
        $next = null;
        if($allActu['success']):
            for($i=0;$i<count($allActu['donnees']);$i++):
                if($allActu['donnees'][$i]['id']==$idActu):
                    if(isset($allActu['donnees'][$i+1])) $next=$allActu['donnees'][$i+1];
                    if(isset($allActu['donnees'][$i-1])) $prev=$allActu['donnees'][$i-1];
                endif;
            endfor;
        endif;
        return array("prev"=>$prev,"next"=>$next);
    }
    public function call(){
        $this->next->call();
    }
}
