<?php
use Models\Client\Pages;
use Models\Client\Actualite;
use Models\Client\Agenda;
use Models\Client\Phototheque;
use Models\Client\MenuLinks;
use Models\Client\Menus;

class indexController extends \Slim\Middleware{
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
        
        $Actu = new Actualite($this->_db);
        $actualites = $Actu->getActualites('dateEvenement','DESC');
        
        $A = new Agenda($this->_db);
        $agendas = $A->getAgendas('dateEvenement','ASC');
        
        $Phototheques = new Phototheque($this->_db);
        $categoriesPhotos = $Phototheques->getCategories();
        
        $pdfAgenda=(file_exists(BASE_PATH_UPLOAD_DIR.'/agendadumois/agenda-du-mois.pdf') ? BASE_PATH_UPLOAD_URL.'/agendadumois/agenda-du-mois.pdf' : false);
        
        return array(
            "success"=>true,"donnees"=>array(
                "actualites"=>$actualites['success'] ? $actualites['donnees'] : array(),
                "agendas"=>$agendas['success'] ? $agendas['donnees']  : array(),
                "categoriesphotos"=>$categoriesPhotos['success'] ? $categoriesPhotos['donnees']  : array(),
                "menusindex"=>$MenusPage['success'] ? $MenusPage['donnees']  : array(),
		"pdfAgendaEncours"=>$pdfAgenda
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
