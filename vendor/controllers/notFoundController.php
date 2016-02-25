<?php
use Models\Client\Pages;
use Models\Client\Actualite;
use Models\Client\Agenda;
use Models\Client\Categorie;
use Models\Client\Coordonnees;
use Models\Client\Phototheque;
use Models\Client\Sociaux;
use Models\Client\MenuLinks;
use Models\Client\Menus;

class notFoundController extends \Slim\Middleware{
    private $_request;
    private $_db;
	
    function __construct($slimReq,$db){
        $this->_request=$slimReq;
        $this->_db=$db;
    }
    
    public function initAction(){
       
        $request = $this->_request->request();
        $body = json_decode($request->getBody());
        
        $P = new Pages($this->_db);
        $index = $P->getDataPageHOME();
        
        
        $MenusPage=null;
        if($index['success']):
            $Menus = new Menus($this->_db);
            $MenusPage = $Menus->getMenusByIdPage($index['donnees']['idPage']);
            if($MenusPage['success'] && count($MenusPage['donnees'])>0):
                foreach($MenusPage['donnees'] as $k=>$v):
                
                
                    $MenuLinks = new MenuLinks($this->_db);
                    $MenuLinks->setIdMenu($MenusPage['donnees'][$k]['idMenu']);
                    $MenuLinks->setIdParent(null);
                    $contenuMenu = $MenuLinks->getMenuLinksByParent();
                    if($contenuMenu['success'] && !is_null($contenuMenu['donnees'])):
                        $MenusPage['donnees'][$k]['liens']=$this->assignMenuByEnfants($contenuMenu['donnees'],$MenusPage['donnees'][$k]['idMenu']);
                    endif;
                    
                    
                endforeach;
            endif;
        endif;
        $Cat = new Categorie($this->_db);
        $categories = $Cat->getAll();
        
        $Actu = new Actualite($this->_db);
        $actualites = $Actu->getActualites('dateAjout','DESC');
        
        $A = new Agenda($this->_db);
        $agendas = $A->getAgendas('dateEvenement','DESC');
        
        $Coord = new Coordonnees($this->_db);
        $coordonnees = $Coord->getAll();
       
        $Phototheques = new Phototheque($this->_db);
        $categoriesPhotos = $Phototheques->getCategories();
        
        $Soc= new Sociaux($this->_db);
        $sociaux = $Soc->getAll();
        
        return array(
            "success"=>true,"donnees"=>array(
                "actualites"=>$actualites['success'] ? $actualites['donnees'] : array(),
                "agendas"=>$agendas['success'] ? $agendas['donnees']  : array(),
                "categories"=>$categories['success'] ? $categories['donnees']  : array(),
                "coordonnees"=>$coordonnees['success'] ? $coordonnees['donnees']  : array(),
                "categoriesphotos"=>$categoriesPhotos['success'] ? $categoriesPhotos['donnees']  : array(),
                "sociaux"=>$sociaux['success'] ? $sociaux['donnees']  : array(),
                "menus"=>$MenusPage['success'] ? $MenusPage['donnees']  : array()
            )
        );
    }
    public function assignMenuByEnfants($initial,$idMenu){
       
        
        foreach($initial as $k=>$v):
            $MenuLinks = new MenuLinks($this->_db);
            $MenuLinks->setIdMenu($idMenu);
            $MenuLinks->setIdParent($initial[$k]['id']);
            $submenu = $MenuLinks->getMenuLinksByParent();
            
            if($submenu['success']):
                if(!is_null($submenu['donnees'])):
                    $initial[$k]['liens']= $submenu['donnees'];
                    $initial[$k]['liens'] = $this->assignMenuByEnfants($initial[$k]['liens'],$idMenu);
                endif;
            endif;
        endforeach;
        return $initial;
    }
    public function call(){
        $this->next->call();
    }
}
