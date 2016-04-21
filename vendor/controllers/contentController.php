<?php
use Models\Client\Menus;
use Models\Client\MenuLinks;
use Models\Client\Article;

class contentController extends \Slim\Middleware{
    
    private $_db;
    private $_id;
	
    function __construct($db,$idPage){
        $this->_db=$db;
        $this->_id=$idPage;
    }
    
    public function initAction(){
        $Menus = new Menus($this->_db);
        $MenusPage = $Menus->getMenusByIdPage($this->_id);
      
        $Arti = new Article($this->_db);
        $articles = $Arti->getArticlesByPage($this->_id,'ordreArticle','ASC');
        $aenfantsfinal=array();
        if($MenusPage['success'] && count($MenusPage['donnees'])>0):
            foreach($MenusPage['donnees'] as $k=>$v):


                $MenuLinks = new MenuLinks($this->_db);
                $MenuLinks->setIdMenu($MenusPage['donnees'][$k]['idMenu']);
                $MenuLinks->setIdParent(null);
                
                   
                $aenfants = $Arti->getArticlesEnfantPage($this->_id,$MenusPage['donnees'][$k]['idMenu'],'dateAjout','Desc');
                if($aenfants['success']):
                    foreach($aenfants['donnees'] as $ke=>$ve):
                        $aenfantsfinal[]=$aenfants['donnees'][$ke];
                    endforeach;
                endif;
        
                $contenuMenu = $MenuLinks->getMenuLinksByParent();
                if($contenuMenu['success'] && !is_null($contenuMenu['donnees'])):
                    $MenusPage['donnees'][$k]['liens']=$this->assignMenuByEnfants($contenuMenu['donnees'],$MenusPage['donnees'][$k]['idMenu']);
                endif;
                
            endforeach;
        endif;
        
        
        
        
        return array(
            "success"=>true,"donnees"=>array(
                "pagemenu"=>$MenusPage['success'] ? $MenusPage['donnees']  : array(),
                "articles"=>$articles['success'] ? $articles['donnees']  : array(),
                "articlesenfants"=>$aenfantsfinal
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
