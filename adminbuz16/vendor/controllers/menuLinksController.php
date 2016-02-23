<?php
use \Models\Admin\Menus;
use \Models\Admin\MenuLinks;

class menuLinksController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
        $this->_request=$slimReq;
        $this->_db=$db;
	}
	function addMenuLinks(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new MenuLinks($this->_db);
            $M->setNom($body->menuLinks->nom);
            $M->setIdPage(isset($body->menuLinks->page->id))?$body->menuLinks->page->id:null;
            $M->setIdMenu($body->idMenuParent);
            
            $M->setIdParent(isset($body->menuLinks->lienParent->id) ? $body->menuLinks->lienParent->id : null);
            $result = $M->addMenu();
            echo json_encode($result);
	}
	function updatemenuLink(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new MenuLinks($this->_db);
            $M->setId($body->lien->id);
            $M->setIdPage(isset($body->lien->page->id) ? $body->lien->page->id : null);
            $M->setNom($body->lien->nom);
            
            $result = $M->updateMenuLink();
            echo json_encode($result);
	}
	function getMenuLinks(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new MenuLinks($this->_db);
            $M->setIdMenu($body->menu);
            $result = $M->getMenuLinks();
            if($result['success']):
                $reordered=array();
                $reordered=menuLinksController::OrderMenuLinksEnfants($result['donnees'],0,0,$reordered);
                $result['donnees']=$reordered;
            endif;
            
            
            echo json_encode($result);
	}
        
	function getMenuLink(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new MenuLinks($this->_db);
            $M->setId($body->lien);
            $result = $M->getMenuLink();
            echo json_encode($result);
	}
	function getMenuLinksByID(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new MenuLinks($this->_db);
            $M->setId($body->menu);
            $result = $M->getMenu();
            echo json_encode($result);
	}
	function delMenuLinks(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new MenuLinks($this->_db);
            $M->setId($body->menuLinks);
            $M->setIdMenu($body->idMenu);
            $result = $M->delMenu();
            if($result['success']):
                $ML = new MenuLinks($this->_db);
                $ML->setIdParent($body->menu);
                $result2 = $ML->delByIdParent();
            endif;
            echo json_encode($result);
	}
        public static function OrderMenuLinks($entry,$idParent,$depth,$final){
            
            // Si tableau vide on le retourne -> inutile de continuer
            if(count($entry)==0):
                return $entry;
            endif;
            if($entry[0]['depth']==$depth):
                if($depth==0):
                    array_push($final,$entry[0]);
                    array_shift($entry);
                else:
                    $found=false;
                    $d1=$d2=array();
                    foreach($final as $cle=>$value):
                        if($found):
                            array_push($d2,$final[$cle]);
                        else:
                            array_push($d1,$final[$cle]);
                        endif;
                        
                        if($final[$cle]['id']==$entry[0]['idParent']):
                            $found=true;
                            array_push($d1,$entry[0]);
                        endif;
                    endforeach;
                    
                    $final=  array_merge($d1, $d2);
                    array_shift($entry);
                endif;
            endif;

            if(count($entry)==0):
                return $final;
            else:
                return menuLinksController::OrderMenuLinks($entry,(is_null($entry[0]['idParent'])) ? 0 : $entry[0]['idParent'], $entry[0]['depth'], $final);
            endif;
            
            
        }
        public static function OrderMenuLinksEnfants($entry,$depth,$final){
            
            foreach($entry as $cle=>$value):
                if(is_null($entry[$cle]['idParent'])) array_push($final,$entry[$cle]);
                else:
                    
                endif;
//                if($final[$cle]['id']==$entry[0]['idParent']):
//                    if(!isset($final[$cle]['enfants'])) $final[$cle]['enfants']=array();
//                    array_push($final[$cle]['enfants'],$entry[0]);
//                    array_shift($entry);
//                endif;
            endforeach;
            
            
        }
	public function call()
        {
                $this->next->call();
        }
}

?>