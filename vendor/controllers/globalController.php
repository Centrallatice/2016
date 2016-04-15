<?php
use Models\Client\Pages;
use Models\Client\Flashs;
use Models\Client\Statistique;
use Models\Client\Browser;
use Models\Client\Sociaux;
use Models\Client\Categorie;
use Models\Client\Coordonnees;
use Models\Client\Menus;
use Models\Client\MenuLinks;
use Models\Client\Themes;

class globalController extends \Slim\Middleware{
    
    private $_db;
	
    function __construct($db){
        $this->_db=$db;
    }
    public function getDataPage($url){
        $P = new Pages($this->_db);
        $dataPage = $P->getPageByUrl($url);
        
        if($dataPage['success'] && $dataPage['donnees']===false):
            switch($url):
                case 'agenda':
                    $dataPage = $P->getPageAgenda();
                    break;
                default:
                    break;
            endswitch;
            
        endif;
        
        return $dataPage;
    }
	public  function getThemes(){
		$T = new Themes($this->_db);
		$d = $T->getThemes();
		return ($d['success']) ? $d['donnees'] : array();
	}
    public function getMetaDatas($pageName){
        
        $P = new Pages($this->_db);
        if($pageName=='accueil'):
            $dataPage = $P->getDataPageHOME();
        else:
            $dataPage = $P->getPageByUrl($pageName);
        endif;
      
        if(isset($dataPage['donnees']) && count($dataPage['donnees'])>0 && $dataPage['donnees']!==false):
            foreach($dataPage['donnees'] as $k=>$v):
                $dataPage['donnees'][$k]=utf8_decode($dataPage['donnees'][$k]);
            endforeach;
        else:
            $dataPage['donnees']=array();
        endif;
        return $dataPage;
    }
    public function getCategories(){
        $Cat = new Categorie($this->_db);
        $categories = $Cat->getAll();
        return $categories;
    }
    public function getCoordonnees(){
        $Coord = new Coordonnees($this->_db);
        $coordonnees = $Coord->getAll();        
        return $coordonnees;
    }
    public function getSociaux(){
        $Soc= new Sociaux($this->_db);
        $sociaux = $Soc->getAll();
        return $sociaux;
    }
    public function getMenus($pageName){
        $P = new Pages($this->_db);
        $index = $P->getPageByUrl($pageName);
       
        $MenusPage=null;
        if($index['success']):
            $Menus = new Menus($this->_db);
            $MenusPage = $Menus->getMenusAllPage();
            
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
        return $MenusPage;
    }
    public function addStats($pageName,$idPage){
        $S = new Statistique($this->_db);
        $browser = new Browser();
        $browser->Browser();
        $bro=$browser->getBrowser();
        $pla=$browser->getPlatform();
        $S->addStat($idPage,$pageName,$bro,$pla);        
    }
    public function getFlashsInfo($onlyResume){
        $F = new Flashs($this->_db);
        $Fdatas = $F->getAll($onlyResume); 
        return $Fdatas;
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
