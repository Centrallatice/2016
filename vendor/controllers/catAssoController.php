<?php
use Models\Client\CategorieAsso;
use Models\Client\Association;
use Models\Client\Menus;
use Models\Client\MenuLinks;

class catAssoController extends \Slim\Middleware{
    
    private $_db;
    private $_id;
    private $_idPage;
	
    function __construct($db,$idCat,$idPage){
        $this->_db=$db;
        $this->_id=$idCat;
        $this->_idPage=$idPage;
    }
    
    public function initAction($app){
        $Menus = new Menus($this->_db);
        $MenusPage = $Menus->getMenusByIdPage($this->_idPage);
		
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
		
		$C = new Association($this->_db);
		$mesAssos = $C->getByIDCat($this->_id);
		
		$CatAsso = new CategorieAsso($this->_db);
		$maCat = $CatAsso->getByID($this->_id);
		
        return array(
            "success"=>true,"donnees"=>array(
                "pagemenu"=>$MenusPage['success'] ? $MenusPage['donnees']  : array(),
                "catAsso"=>$maCat['success'] ? $maCat['donnees']  : array(),
                "assos"=>$mesAssos['success'] ? $mesAssos['donnees']  : array(),
                "urlIcoCat"=>BASE_PATH_UPLOAD_URL.'/catAssoIcone/',
                "urlIcoAsso"=>BASE_PATH_UPLOAD_URL.'/AssociationImg/'
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
